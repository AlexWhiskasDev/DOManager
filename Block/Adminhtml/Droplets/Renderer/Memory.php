<?php
/**
 * Smile_DigitalOceanManager renderer for Memory column
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Droplets_Renderer_Memory extends  Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {
	public function render(Varien_Object $row) {
		$value =  $row->getData($this->getColumn()->getIndex());
		return $value.' MB';
	}
}