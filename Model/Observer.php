<?php
/**
 * Smile_DigitalOcean observer
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Model_Observer extends Varien_Event_Observer {

	public function addDigitalOceanAutoloader() {
		require_once(Mage::getBaseDir('lib').DS.'Buzz'.DS.'autoloader.php');
		BuzzAutoloader::register();
		require_once(Mage::getBaseDir('lib').DS.'DigitalOceanV2'.DS.'autoloader.php');
		DigitalOceanAutoloader::register();
	}
}

?>