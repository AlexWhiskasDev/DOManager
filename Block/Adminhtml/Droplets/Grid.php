<?php
/**
 * Smile_DigitalOceanManager droplets grid
 *
 * @category  Smile
 * @package   Smile_DigitalOceanManager
 * @author    Alexander Galaburda <algal@smile.fr>
 * @copyright 2015 Smile
 */

class Smile_DigitalOceanManager_Block_Adminhtml_Droplets_Grid extends Mage_Adminhtml_Block_Widget_Grid {
	public function __construct() {
//		die('some');
		parent::__construct();
		$this->setId('dropletsGrid');
		$this->setDefaultSort('name');
		$this->setDefaultDir('ASC');
		$this->setSaveParametersInSession(true);
	}

	protected function _prepareCollection() {
		/** @var  $connector Smile_DigitalOceanManager_Model_Connector*/
		$connector = Mage::getModel('digitaloceanmanager/connector');

		$droplets = $connector->getDropletList();


		$collection = new Varien_Data_Collection();
		foreach($droplets as $droplet) {

			$obj = new Varien_Object();
			$obj->setId($droplet->id);
			$obj->setName($droplet->name);
			$obj->setVcpus($droplet->vcpus);
			$obj->setMemory($droplet->memory);
			$obj->setDisk($droplet->disk);
			$obj->setStatus($droplet->status);
			$obj->setRegion($droplet->region->name);


			$collection->addItem($obj);
		}

		$this->setCollection($collection);
		return parent::_prepareCollection();
	}

	protected function _prepareColumns() {
		$this->addColumn('id', array(
			'header' => 'ID',
			'align' => 'right',
			'width' => '50px',
			'index' => 'id',
			));
		$this->addColumn('name', array(
			'header' => 'Name',
			'align' => 'left',
			'index' => 'name',
			));
		$this->addColumn('vcpus', array(
			'header' => 'Vcpus',
			'renderer' => 'Smile_DigitalOceanManager_Block_Adminhtml_Droplets_Renderer_CPU',
			'align' => 'left',
			'index' => 'vcpus',
			));
		$this->addColumn('memory', array(
			'header' => 'Memory',
			'renderer' => 'Smile_DigitalOceanManager_Block_Adminhtml_Droplets_Renderer_Memory',
			'align' => 'left',
			'index' => 'memory',
			));
		$this->addColumn('disk', array(
			'header' => 'Disk',
			'renderer' => 'Smile_DigitalOceanManager_Block_Adminhtml_Droplets_Renderer_Disk',
			'align' => 'left',
			'index' => 'disk',
			));
		$this->addColumn('status', array(
			'header' => 'Status',
			'align' => 'left',
			'index' => 'status',
			));
		$this->addColumn('region', array(
			'header' => 'Region',
			'align' => 'left',
			'index' => 'region',
			));
		return parent::_prepareColumns();
	}

	public function getRowUrl($row) {
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}
}

?>