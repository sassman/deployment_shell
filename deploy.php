<?php

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