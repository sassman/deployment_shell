<?php

interface IDeploymentDestination {
	public function disconnect();
	public function connect($host, $port = null, $timeout = null);
	public function login($login = 'anonymous', $pass = null);
	public function uploadFile($localFile, $remoteFile, $mode = FTP_BINARY);
	public function deleteFile($remoteFile);
}

interface IDeploymentSource {
	public function getChangedFileList();
	public function getDeletedFileList();
}

class BasicDeployment {

	var $exclude = array (
		'app/config/database.php',
		'app/config/deployment.php',
		'tests/',
		'.git',
        '.idea',
        '.svn'
	);

	var $useConfig = 'default';
	var $force = false;
	var $verbose = false;

	var $fileUploadLog = array ();

	function isUploadable($file) {
		$this->config['exclusions'] = am($this->config['exclusions'], $this->exclude);

		if (!empty ($this->config['exclusions'])) {
			foreach ($this->config['exclusions'] as $f) {
				if (strpos($f, "*") > 0) {
					$f = str_replace("*", '', $f);
					if (strpos($file, $f) > 0)
						return false;
				}
				elseif (strpos($file, $f) > 0) {
					return false;
				}
			}
		}

		if (isset ($this->fileUploadLog[$this->useConfig][$file])) {
			if ($this->fileUploadLog[$this->useConfig][$file] == $this->checksum($file))
				return $this->force;
		}

		return true;
	}

	function update($updateRevision = 'HEAD') {
		clearstatcache();

		if (!$this->__connect()){
		    $this->log("Error during connect to the Server.", 'error');
		    return false;
		}

		if (($changedObjects = $this->source->getChangedFileList()) === false){
		    $this->log("Error retrieve the Update File list.", 'error');
			return false;
		}

		$remotePath = $this->destinationConfig['path'];

		foreach ($changedObjects as $file) {
			if (empty ($file))
				continue;
            if (!$this->__uploadFile($file, $remotePath)){
                $this->log("Error during Upload File.", 'error');
                return false;
            }
		}

		$this->updateDelete();
		$this->__disconnect();

        if(empty($this->fileUploadLog[$this->useConfig]['.update.revision']))
            $this->fileUploadLog[$this->useConfig]['.update.revision'] = 0;
        $this->fileUploadLog[$this->useConfig]['.update.revision'] =
                $this->fileUploadLog[$this->useConfig]['.update.revision'] + 1;
        
		$this->log( "Successfully update Application." .
                    "[revision:{$this->fileUploadLog[$this->useConfig]['.update.revision']}]",
                    'info');

		return true;
	}

	function updateDelete() {
		if (($changedObjects = $this->source->getDeletedFileList()) === false)
			return false;

		foreach ($changedObjects as $file) {
			if (empty ($file))
				continue;
			$this->__deleteFile($file);
		}
	}

	function beforeFilter($deployAction) {
		if (!empty ($this->{$this->useConfig}))
			$this->config = $this->{$this->useConfig};
		else
			$this->config = $this->{'default'};
		
		$file = APP_PATH . '../.deployment';
		if (file_exists($file)){
            $tmp = file_get_contents($file);
            if (!empty ($tmp))
                $this->fileUploadLog = unserialize($tmp);
        }

		$workerClass = $this->config['source'] . 'DeploymentSource';
		App::import('Vendor', 'shells/tasks/deploy_libs/' . Inflector::underscore($workerClass));
		$this->source = new $workerClass();
        if($this->source == null){
            $this->log("No valid DeploymentSource ({$this->config['source']}DeploymentSource) found." , 'error');
            return false;
        }
		return true;
	}
		
	function afterFilter($deployAction) {
		$datei = fopen(APP_PATH . '../.deployment', 'w');
		fputs($datei, serialize($this->fileUploadLog));
		fclose($datei);
		return true;
	}

	function __connect() {
		$this->destinationConfig = $destConf = array_shift(array_values($this->config['destination']));
		if (empty ($this->destination)) {
			$destinationClass = array_keys($this->config['destination']);
			$destinationClass = $destinationClass[0] . 'DeploymentDestination';
			App :: import('Vendor', 'shells/tasks/deploy_libs/' . Inflector :: underscore($destinationClass));
			$this->destination = new $destinationClass ();
			if (!$this->destination->connect($destConf['host'], $destConf['port'], $destConf['timeout'])) {
				$this->log('Could not connect to ' . $destConf['host'], 'connect:error');
				return false;
			} else {
				$this->log('Connected to ' . $destConf['host'], 'connect');
			}
		}
	
		if (!$this->destination->login($destConf['login'], $destConf['password'])) {
			$this->log('Could not login as "' . $destConf['login'] . '" ', 'connect:login:error');
			return false;
		} else {
			$this->log('Authorized as "' . $destConf['login'] . '" ', 'connect:login');
		}
	
		return true;
	}
	
	function __disconnect() {
		if (empty ($this->destination))
			return false;
	
		if ($success = $this->destination->disconnect())
			$this->log('Closed connection with "' . $this->destinationConfig['host'] . '" ...', 'disconnect');
		else
			$this->log('Could not close connection with "' . $this->destinationConfig['host'] . '".', 'disconnect:notice');
	
		return $success;
	}
	
	function __uploadFile($localFile, $remotePath) {
	
		$remoteFile = $remotePath . '/' . $localFile;
		$file = getcwd() . DS . $localFile;
		$skipped = true;
	
		if ($this->isUploadable($localFile)) {
			$this->log("Uploading {$localFile} to {$remotePath}...", "upload", false);
			if (!$this->destination->uploadFile($file, $remoteFile)) {
				$this->log('error during upload', 'upload:error');
				return false;
			}
			$skipped = false;
		}
	
		if (!$skipped) {
			$this->log('Done!', 'upload');
			$this->logFileUpload($localFile);
		} elseif($this->verbose) {
			$this->log("{$localFile} skipped!", "upload:skipped");
		}
		return true;
	}
	
	function __deleteFile($localFile) {
	
		$remoteFile = $this->destinationConfig['path'] . '/' . $localFile;
	
		if (!$this->destination->deleteFile($remoteFile)) {
			$this->log('Could not delete file "' . $remoteFile . '".', 'delete:error');
			return true;
		}
	
		$this->log('Deleted file "' . $remoteFile . '" ...', 'delete');
		return true;
	}
	
	/**
	 * This functions prints a certain $text of $type to the screen and maintains
	 * and returns a history of those outputs.
	 *
	 * @param mixed $text
	 * @param string $type
	 * @param boolean $automaticLineBreak
	 * @return string
	 */
	function log($text, $type = 'ok', $automaticLineBreak = true) {
		static $history;
	
		if (is_array($text)) {
			ob_start();
			print_r($text);
			$text = ob_get_clean();
		}
	
		if (!empty ($text)) {
			$output = '[' . $type . '] ' . $text . ($automaticLineBreak == true ? "\n" : "");
			$history = $history . $output;
			echo $output;
		}
		elseif ($text === false) $history = null;
	
		return $history;
	}
	
	/**
	 * Saves the log file to a certain $path
	 *
	 * @param string $path
	 * @return boolean
	 */
	function saveLog($path) {
		return file_put_contents($path, $this->log(null));
	}
	
	/**
	 * Returns all text that was outputed via the log() function.
	 *
	 * @return string
	 */
	function getLog() {
		return $this->log(null);
	}
	
	protected function logFileUpload($file) {
		$this->fileUploadLog[$this->useConfig][$file] = $this->checksum($file);
	}
	protected function checksum($file) {
		return sha1_file($file);
	}
	
	protected function prepareArguments($params, $args){
		if (!empty ($params)) {
			$this->useConfig = $params[0];
		}
		
		if(!empty($args['-force']) || !empty($args['f'])){
			$this->force = true;
		}
		if(!empty($args['-verbose']) || !empty($args['v'])){
			$this->verbose = true;
		}
	}
	
	public function start($params, $args) {
        $deployAction = 'update';
        $this->prepareArguments($params, $args);

        $this->log('Starting Deployment...', 'info');
        if($this->verbose){
            $this->log('Excecute BeforeFilter...', 'info');
        }
        $success = $this->beforeFilter($deployAction);
        if($success){
            if($this->verbose){
                $this->log("Excecute {$deployAction}...", 'info');
            }
            $success = $this->{$deployAction}(null);
        }
        if($success){
            if($this->verbose){
                $this->log("Excecute AfterFilter...", 'info');
            }
            $success = $this->afterFilter($deployAction);
        }

        if ($success == true) {
            $this->log('Deployment finished.', 'success');
        } else{
            $this->log('There was an error during deployment!', 'failure');
        }
	}
}
?>