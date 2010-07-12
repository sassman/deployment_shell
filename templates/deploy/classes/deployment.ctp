<?php
/**
 * AppDeployment
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

echo "<?php\n";
?>
class AppDeployment extends BasicDeployment {

    var $default = array(
            'source' => '<?php echo $config['source'] ?>',
            'destination' => array('<?php echo $config['destination']['method'] ?>' => array(
                'host'      => '<?php echo $config['destination']['host'] ?>',
                'login'     => '<?php echo $config['destination']['login'] ?>',
                'password'  => '<?php echo $config['destination']['password'] ?>',
                'port'      => '<?php echo $config['destination']['port'] ?>',
                'timeout'   => '<?php echo $config['destination']['timeout'] ?>',
                'path'		=> '<?php echo $config['destination']['path'] ?>'
            )),
           'exclusions' => array(
                   // 'core.php'
           )
    );

}
<?php echo "?>"; ?>