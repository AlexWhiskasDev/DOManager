<?php
/**
 * Smile_DigitalOcean Model for work with DO API
 *
 * @category  Smile
 * @package   Smile_DigitalOCeanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Model_Connector extends Mage_Core_Model_Abstract {

	/**
	 * @return \DigitalOceanV2\Entity\Droplet[]
	 */
	public function getDropletList() {
		$connection = $this->_getDOConnection();

		return $connection->droplet()->getAll();
	}

	/**
	 * @return DigitalOceanV2\DigitalOceanV2
	 */
	protected function _getDOConnection() {
		$token = Mage::getStoreConfig('digitaloceanmanager_options/personaltoken/digitaloceanmanager_personaltoken');

		$adapter = new DigitalOceanV2\Adapter\BuzzAdapter($token);

		$digitalocean = new DigitalOceanV2\DigitalOceanV2($adapter);

		return $digitalocean;

	}

}

?>