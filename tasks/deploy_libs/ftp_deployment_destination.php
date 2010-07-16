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

class FtpDeploymentDestination extends Object implements IDeploymentDestination{
	/**
	 * An ftp resource id
	 *
	 * @var resource
	 */
	var $connection = null;

	/**
	 * A string containing the latest error caused by this connection
	 *
	 * @var string
	 */
	var $error = null;
	
	var $skipped = false;
	var $checkRemoteFiles = false;

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
		$connect = 'ftp_connect';
		if (!is_callable($connect))
			return false;

		if (!($this->connection = @call_user_func($connect, $host, $port, $timeout))){
			$this->error = 'timeout / dns problem';
			return false;
		}

		return true;
	}

	/**
	 * Closes the FTP connection
	 *
	 * @return boolean
	 */
	function disconnect()
	{
		if (is_resource($this->connection))
		return @ftp_close($this->connection);
		else
		return true;
	}

	/**
	 * Creates a remote $directory and performs a $doubleCheck if the action was successful
	 *
	 * @param string $directory
	 * @param boolean $doubleCheck
	 * @return boolean
	 */
	function makeDir($directory, $doubleCheck = true, $useCache = true)
	{
		$success = @ftp_mkdir($this->connection, $directory);
		if ($success==true)
		return $success;
		 
		if ($doubleCheck==true)
		{
			return $this->dirExists($directory, $useCache);
		}
		else
		return false;
	}

	/**
	 * Recursive mkdir function, that will create entire tree branches if neccessary
	 *
	 */
	function makeDirRecursive($directory, $doubleCheck = true, $useCache = true){
		$dir=split("/", $directory);
		$path="";
		$ret = true;
		 
		for ($i=0;$i<count($dir);$i++){
			$path.="/".$dir[$i];
			//echo "$path\n";
			if(!@ftp_chdir($this->connection, $path)){
				@ftp_chdir($this->connection, "/");
				if(!@ftp_mkdir($this->connection, $path)){
					$ret=false;
					break;
				}
			}
		}
		return $ret;
	}

	/**
	 * Checks whether a given $directory exists or not. Disable $useCache
	 * if you work with an inconsistent enviornment.
	 *
	 * @param string $directory
	 * @param boolean $useCache
	 * @return boolean
	 */
	function dirExists($directory, $useCache = true)
	{
		static $dirCache;

		if (($useCache == true) && (isset($dirCache[$directory])))
		return $dirCache[$directory];
		else
		return $dirCache[$directory] = $this->changeDir($directory)===true;
	}

	public function uploadFile($localFile, $remoteFile, $mode = FTP_BINARY)
	{
		$startPos = 0;
		$f = explode("/", $remoteFile);
		array_pop($f);
		$dir = implode('/', $f);
		
		$this->makeDirRecursive($dir);
		
		if(($filesize = filesize($localFile))>0){
            $result = $this->_uploadFile($remoteFile, $localFile, $mode, $startPos);
            return $result;
		}
		return true;
	}
	
	function _uploadFile($remoteFile, $localFile, $mode, $startPos){
		$result = @ftp_put($this->connection, $remoteFile, $localFile, $mode, $startPos);
		$this->skipped = false;
		if($result){
			$perms = fileperms($localFile);
			$result = $this->changeMode($remoteFile, $perms);
		}
		return $result; 
	}

	function downloadFile($remoteFile, $localFile, $mode = FTP_BINARY, $resumePos = 0)
	{
		return @ftp_get($this->connection, $localFile, $remoteFile, $mode, $resumePos);
	}	

	public function deleteFile($remoteFile)
	{
		return @ftp_delete($this->connection, $remoteFile);
	}

	function removeDir($remoteDir)
	{
		return @ftp_rmdir($this->connection, $remoteDir);
	}

	function changeMode($remotePath, $mode = 0777)
	{
		return @ftp_chmod($this->connection, $mode, $remotePath);
	}

	/**
	 * Logs into the server with a given $login name and $pass
	 *
	 * @param string $login
	 * @param string $pass
	 * @return boolean
	 */
	public function login($login = 'anonymous', $pass = null){
		$passiveMode = true;
		if (!@ftp_login($this->connection, $login, $pass))
		{
			$this->error = 'access denied';
			return false;
		}

		if($passiveMode && !ftp_pasv($this->connection, true)){
			$this->error = "ftp passive mode not available";
			return false;
		}
		
		return true;
	}

	/**
	 * Changes the current directory. Mostly abused for checking whether a directory actually
	 * exists or not.
	 *
	 * @param string $directory
	 * @return boolean
	 */
	function changeDir($directory)
	{
		return @ftp_chdir($this->connection, $directory);
	}

	/**
	 * Outputs the $simple list of files & folders in a given $directory
	 *
	 * @param string $directory
	 * @param boolean $simple
	 * @return array
	 */
	function dirListing($directory, $flags = '-a')
	{
		if (!empty($flags))
		$list = ftp_nlist($this->connection, $flags.' '.$directory);
		else
		$list = ftp_nlist($this->connection, $directory);

		if ($list===false)
		return false;
		elseif (empty($list))
		return array();
		else
		return $list;
	}
}

/**
 * Support for ftp_chmod in php4
 */
if (!function_exists('ftp_chmod'))
{
	function ftp_chmod($ftp_stream, $mode, $filename)
	{
		return ftp_site($ftp_stream, sprintf('CHMOD %o %s', $mode, $filename));
	}
}

?>