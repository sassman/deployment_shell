<?php
/**
 * type_name
 * Created: 27.05.2010 / 16:39:53
 * 
 * PHP version 5
 * 
 * @category	M/V/C_name
 * @package		package_name
 * @version		v1.0.0
 * @since		v1.0.0
 * @author		Sven Assmann <sven.assmann@lubico.biz>
 * @license		http://www.gnu.org/copyleft/gpl.html
 * @link		http://www.lubico.biz
 * @copyright	Copyright 2006-2010, Lubico Business
 * 
 */

class CreateDeploymentConfigTask extends Shell{

    var $tasks = array('Template');
    var $plugin;

	public function execute(){
		$this->out("Deployment Source");
		$this->out("=================");
		$config['source'] = $this->in("Filesystem [File] or Git [Git]: ", null, 'File');
		
		$this->hr();
		$this->out("Deployment Destination");
		$this->out("======================");
		$this->out("FTP Destination");
		$method = 'Ftp'; // = $this->in("Ftp [Ftp]
        $config['destination']['method'] = 'Ftp';
        $config['destination']['host'] = $this->in("hostname:");
		$config['destination']['login'] = $this->in("login username:");
		$config['destination']['password'] = $this->in("login password:");
		$config['destination']['port'] = $this->in("port:", null, "21");
		$config['destination']['timeout'] = $this->in("timeout:", null, "60");
		$config['destination']['path'] = $this->in("server path:", null, "/");
		$deployment = 'default';

        $this->bake($config);
	}

    protected function bake($vars){
        $this->Template->set('plugin', Inflector::camelize($this->plugin));
        $this->Template->set('config', $vars);

        $this->Template->params['theme'] = 'deploy';
        $contents = $this->Template->generate('classes', 'deployment');

        $filename = CONFIGS . 'deployment.php';
        if ($this->createFile($filename, $contents)) {
            return $contents;
        }
        return false;
    }
	
}
 
?>
