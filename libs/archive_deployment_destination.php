<?php
/**
 * FtpDeploymentDestination
 * Created: 26.05.2010 / 13:50:22
 *
 * PHP version 5
 *
 * @category	Component
 * @package		deployment
 * @version		v1.0.0
 * @since		v1.0.0
 * @author		Sven Assmann <sven.assmann@lubico.biz>
 * @license		http://www.gnu.org/copyleft/gpl.html
 * @link		http://www.lubico.biz
 * @copyright	Copyright 2006-2010, Lubico Business
 *
 */

if (!class_exists('Object'))
	uses('Object');

class ArchiveDeploymentDestination extends Object implements IDeploymentDestination{
	/**
	 * An ftp resource id
	 *
	 * @var resource
	 */
	var $archive = null;

	/**
	 * A string containing the latest error caused by this connection
	 *
	 * @var string
	 */
	var $error = null;
	
	var $skipped = false;
	var $checkRemoteFiles = false;
    var $destinationDefaultPath;

    function __construct(){
         $this->destinationDefaultPath = APP . DS . '..' . DS;
    }

	/**
	 * Clean up our resource, it's good for the enviornment
	 *
	 */
	function __destruct(){
		$this->disconnect();
	}

	/**
	 * Connect to a given $host using the $connect function with $port and a timeout
	 * of $timeout
	 *
	 * @param string $host
	 * @param string $connect
	 * @param integer $port
	 * @param integer $timeout
	 * @return boolean
	 */
	public function connect($host, $port = 21, $timeout = 60){
		$this->archive = new ZipArchive();
        return $this->archive->open($this->destinationDefaultPath . $host, ZIPARCHIVE::CREATE);
	}

	/**
	 * Closes the FTP connection
	 *
	 * @return boolean
	 */
	function disconnect(){
        if($this->archive){
            $this->archive->close();
            $this->archive = null;
        }
		return true;
	}

	/**
	 * Creates a remote $directory and performs a $doubleCheck if the action was successful
	 *
	 * @param string $directory
	 * @param boolean $doubleCheck
	 * @return boolean
	 */
	function makeDir($directory){
        return $this->archive->addEmptyDir($directory);
	}

	public function uploadFile($localFile, $remoteFile, $mode = FTP_BINARY){
		$startPos = 0;
		$f = explode("/", $remoteFile);
		array_pop($f);
		$dir = implode('/', $f);
		
		$this->makeDir($dir);
		
		if(($filesize = filesize($localFile))>0){
            return $this->_uploadFile($remoteFile, $localFile, $mode, $startPos);
		}
		return true;
	}
	
	function _uploadFile($remoteFile, $localFile, $mode, $startPos){
        $result = $this->archive->addFile($localFile, $remoteFile);
		$this->skipped = false;
		if($result){
//			$perms = fileperms($localFile);
//			$result = $this->changeMode($remoteFile, $perms);
		}
		return $result; 
	}

	public function deleteFile($remoteFile){
		return false;
	}

	function changeMode($remotePath, $mode = 0777){
		return false;
	}

	/**
	 * Logs into the server with a given $login name and $pass
	 *
	 * @param string $login
	 * @param string $pass
	 * @return boolean
	 */
	public function login($login = 'anonymous', $pass = null){
		return true;
	}

	function changeDir($directory){
		return true;
	}
}
?>