<?php
/**
 * Smile_DigitalOceanManager Admin controller
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action {
	protected function _initAction() {
		$this->loadLayout()->_setActiveMenu('digitaloceanmanager/droplets')->_addBreadcrumb('Droplets Manager', 'Droplets Manager');
		return $this;
	}

	public function indexAction() {
		$this->getLayout()->getUpdate()->getHandles();
		$this->_initAction();
		$this->renderLayout();
	}
}

?>