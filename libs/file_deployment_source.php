<?php
/**
 * FileDeploymentSource
 * Created: 26.05.2010 / 13:45:34
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
 
class FileDeploymentSource implements IDeploymentSource {
	var $filter = array (
		'changed' => 'find -L ./ -type f',
		'deleted' => '',
		'new' => ''
	);

	public function getDeletedFileList() {
		return false; //$this->__getFileList($this->filter['deleted']);
	}
	public function getChangedFileList() {
		return $this->__getFileList($this->filter['changed']);
	}
	public function __getFileList($filter) {
		chdir(APP_PATH . '/..');
		$result = shell_exec($filter);
		if (empty ($result))
			die("find failure: no results\n");
		$result = explode("\n", $result);
		return $result;
	}
}
 
?>
