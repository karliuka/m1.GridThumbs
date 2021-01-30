<?php
/**
 * Faonni
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 *
 * @package     Faonni_GridThumbs
 * @copyright   Copyright (c) 2017 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Faonni_GridThumbs_Model_Observer
{
    /**
     * Add thumbs Attribute to product collection
     *
     * @param   Varien_Event_Observer $observer
     * @return  Faonni_GridThumbs_Model_Observer
     */
    public function addThumbsAttribute(Varien_Event_Observer $observer)
    {
        /** @var $collection Mage_Catalog_Model_Resource_Product_Collection */
        $collection = $observer->getEvent()->getCollection();
        $collection->addAttributeToSelect('thumbnail');

        return $this;
    }

    /**
     * Add thumbs column to product grid
     *
     * @param   Varien_Event_Observer $observer
     * @return  Faonni_GridThumbs_Model_Observer
     */
    public function addThumbsColumn(Varien_Event_Observer $observer)
    {
        /** @var $block Mage_Core_Block_Abstract */
        $block = $observer->getEvent()->getBlock();		
        if (Mage::helper('faonni_gridthumbs')->isAddThumbs($block)) {
            $block->addColumnAfter('image', array(
                'header'   => Mage::helper('faonni_gridthumbs')->__('Image'),
                'align'    => 'center',
                'index'    => 'image',
                'filter'   => false,
                'sortable' => false,
                'width'    => '54',
                'column_css_class' => 'column_thumbs',
                'renderer' => 'Faonni_GridThumbs_Block_Adminhtml_Widget_Grid_Column_Renderer_Image'
            ), 'entity_id');
        }
        return $this;
    }
}
