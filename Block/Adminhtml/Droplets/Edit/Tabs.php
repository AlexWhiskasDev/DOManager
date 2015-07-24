<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.07.15
 * Time: 17:09
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Test_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

	public function __construct() {
		parent::__construct();

		$this->setId("test_tabs");
		$this->setDestElementId("edit_form");
		$this->setTitle("Information about contact");
	}

		protected function _beforeToHtml() {
			$this->addTab(
				"FormSection",
				array(
					"label" => "Contact Information",
					"title" => "Contact Information",
					"content" => $this->getLayout()->createBlock('test/adminhtml_test_edit_tab_form')->toHtml(),
			));

			return parent::_beforeToHtml();
		}
}

?>