<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.07.15
 * Time: 17:17
 */
class Smile_DigitalOceanManager_Block_Adminhtml_Test_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$form = new Varien_Data_Form();
		$this->setForm($form);
		$fieldset = $form->addFieldset('test_form',
			array('legend'=>'Contact Information'));
		$fieldset->addField('num', 'text',
			array(
				'label' => 'Nom',
				'class' => 'required-entry',
				'required' => true,
				'name' => 'num',
			));
		$fieldset->addField('prenum', 'text',
			array(
				'label' => 'Prenom',
				'class' => 'required-entry',
				'required' => true,
				'name' => 'prenum',
			));
		$fieldset->addField('telephone', 'text',
			array(
				'label' => 'telephone',
				'class' => 'required-entry',
				'required' => true,
				'name' => 'telephone',
			));
		if ( Mage::registry('test_data') )
		{
			$form->setValues(Mage::registry('test_data')->getData());
		}
		return parent::_prepareForm();
	}
}

?>