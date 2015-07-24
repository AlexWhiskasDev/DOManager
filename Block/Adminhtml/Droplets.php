<?php
/**
 * Smile_DigitalOceanManager_Block_Adminhtml_Droplets
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Droplets extends Mage_Adminhtml_Block_Widget_Grid_Container {
	public function __construct() {
		//where is the controller
		$this->_controller = 'adminhtml_droplets';
		$this->_blockGroup = 'digitaloceanmanager';
		//text in the admin header
		$this->_headerText = 'Droplets managment';
		//value of the add button
		$this->_addButtonLabel = 'Add a droplet';
		parent::__construct();
	}
}
?>