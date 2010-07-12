<?php
/**
 * GitDeploymentSource
 * Created: 26.05.2010 / 13:50:22
 * 
 * PHP version 5
 * 
 * @category	M/V/C_name
 * @package		deployment
 * @version		v1.0.0
 * @since		v1.0.0
 * @author		Sven Assmann <sven.assmann@lubico.biz>
 * @license		http://www.gnu.org/copyleft/gpl.html
 * @link		http://www.lubico.biz
 * @copyright	Copyright 2006-2010, Lubico Business
 * 
 */
 
class GitDeploymentSource implements IDeploymentSource {
	var $filter = array (
		'changed' => 'git ls-files -m',
		'deleted' => 'git ls-files -d',
		'new' => 'git ls-files -d'
	);

	public function getDeletedFileList() {
		return $this->__getFileList($this->filter['deleted']);
	}
	public function getChangedFileList() {
		return $this->__getFileList($this->filter['changed']);
	}
	public function __getFileList($filter) {
		chdir(APP_PATH . '/..');
		$result = shell_exec($filter);
		if (empty ($result))
			die("git failure: no results\n");
		$result = explode("\n", $result);
		return $result;
	}
}

?>
