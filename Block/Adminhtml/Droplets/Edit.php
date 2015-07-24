<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 23.07.15
 * Time: 17:48
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Test_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {
	public function __construct() {
		parent::__construct();
		$this->_objectId = 'id';
		//vwe assign the same blockGroup as the Grid Container
		$this->_blockGroup = 'droplets';
		//and the same controller
		$this->_controller = 'adminhtml_digitaloceanmanager';
		//define the label for the save and delete button
		$this->_updateButton('save', 'label', 'save reference');
		$this->_updateButton('delete', 'label', 'delete reference');
	}

	/* Here, we're looking if we have transmitted a form object,
	   to update the good text in the header of the page (edit or add) */
	public function getHeaderText() {
		if (Mage::registry('test_data') && Mage::registry('test_data')->getId()) {
			return 'Edit contact information' . $this->htmlEscape(Mage::registry('test_data')->getTitle()) . '<br />';
		} else {
			return 'Add a contact';
		}
	}
}