<?php
/**
 * DeployShell
 * Created: 26.05.2010 / 13:50:22
 *
 * PHP version 5
 *
 * @category	Shell
 * @package		deployment
 * @version		v1.0.0
 * @since		v1.0.0
 * @author		Sven Assmann <sven.assmann@lubico.biz>
 * @license		http://www.gnu.org/copyleft/gpl.html
 * @link		http://www.lubico.biz
 * @copyright	Copyright 2006-2010, Lubico Business
 *
 */

App::import('Vendor', 'shells/tasks/deploy_libs/basic_deployment');

class DeployShell extends Shell {		// found in /vendors/shells/deploy.php
   
   var $tasks = array('CreateDeploymentConfig');
   
   function main($params = array()) {
   		$this->out("Starting the CakePHP Deploy Shell");
   		$this->out("=================================");
   		
   		if (file_exists(CONFIGS.'deployment.php')){
            require_once(CONFIGS.'deployment.php');
            $deployClass = 'AppDeployment';
        }
        else{
        	// die config muss erzeugt werden!
        	$this->CreateDeploymentConfig->execute();
            if (file_exists(CONFIGS.'deployment.php')){
             require_once(CONFIGS.'deployment.php');
             $deployClass = 'AppDeployment';
            }
            else
        	    die();
        } 
        
        $deployDescriptor =& new $deployClass();
        $deployDescriptor->start($this->args, $this->params);        
   }
   
}
?>