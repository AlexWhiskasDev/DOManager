<?php
/**
 * Smile_DigitalOceanManager connection module
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Renderer_ConfigContent extends Mage_Adminhtml_Block_System_Config_Form_Field
{
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element) {
		/** @var  $connector Smile_DigitalOceanManager_Model_Connector*/
		$connector = Mage::getModel('smile_digitaloceanmanager/connector');

		$dropletList = $connector->getDropletList();

		$output = '';
		foreach ($dropletList as $droplet) {
			$output .= '<p>'.$droplet->name.'</p>';
		}

//		return  $this->__('<div disabled="disabled" name="vcl_content" cols="30" rows="200">%s</div>', $output);
	}

}