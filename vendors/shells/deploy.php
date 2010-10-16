<?php
/**
 * DeployShell
 * Created: 26.05.2010 / 13:50:22
 *
 * PHP version 5
 *
 * @category		Shell
 * @package			deployment
 * @version			v1.0.2
 * @since			v1.0.0
 * @author			Sven Assmann <sven.assmann@lubico.biz>
 * @license			http://www.gnu.org/copyleft/gpl.html
 * @link			http://www.lubico.biz
 * @copyright		Copyright 2006-2010, Lubico Business
 *
 */

App::import('Lib', 'deployment.basic_deployment');

class DeployShell extends Shell { // found in /plugins/vendors/shells/deploy.php

	var $tasks = array(
		'CreateDeploymentConfig',
		'ProgressBar',
	);

	var $version = "1.0.2";

	function startup(){
		$this->_welcome();
	}

	function main($params = array()) {
		$this->out("Starting the CakePHP Deploy Shell");
		$this->out("=================================");

		$deployDescriptor = new BasicDeployment();
		$deployClass = 'AppDeployment';

		if ( !config('deployment') || !class_exists($deployClass) ) {
			// die config muss erzeugt werden!
			// wenn es nicht mit einem default descriptor gerufen wurde
			if (!empty($this->args) && count($this->args) > 0){
				$target = $this->args[0];
				if( isset($deployDescriptor->{$target}) 
					&& is_array($deployDescriptor->{$target})
				){
					$deployDescriptor->shell = $this;
					$deployDescriptor->start($this->args, $this->params);
					return;
				}
			}

			// jetzt die config erzeugen
			$this->CreateDeploymentConfig->execute();
			if ( !config('deployment') || !class_exists($deployClass) ) {
				die();
			}
		}

		$deployDescriptor =& new $deployClass();
		$deployDescriptor->shell = $this;
		$deployDescriptor->start($this->args, $this->params);
	}

	/**
	 * @return void
	 * Displays help contents
	 *
	 * @access public
	 */
	function help() {
		$this->out("CakePHP Deployment (version {$this->version}):");
		$this->hr();
		//          ---------------------------------------------------------------
		$this->out('The deployment shell deploys your code to your hosting server during i.e. FTP.');
		$this->out('If run with no command line arguments, Deployment use the default deployment descriptor from' .
					'your configuration an start the deployment.');
		$this->hr();
		$this->out("Usage: cake deploy [<options>] [<deploymentDescriptor>]");
		$this->hr();
		$this->out('options:');
		$this->out("\t-v | --verbose  shows more information during process for interessted users.\n");
		$this->out("\t-f | --force    retransfer all files also they are unchanged.\n");
		$this->out("\thelp            shows this help.\n");
		$this->out('deploymentDescriptor:');
		$this->out("\n\tpackage\n\t\tdeploys the code to a zip package.");
		$this->out("\n\tsee your config for more deployment descriptor");
		$this->out();

	}
}

?>