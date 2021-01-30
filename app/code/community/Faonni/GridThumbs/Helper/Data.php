<?php
/**
 * Copyright © Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * See COPYING.txt for license details.
 */
class Faonni_GridThumbs_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    /**
     * Grid Thumbs list path
     *
     * @var string
     */
    const XML_PATH_THUMBS_GRID = 'adminhtml/thumbs/grid';

    /**
     * Grid Thumbs list
     *
     * @var array
     */
    protected $_grids;

    /**
     * Retrieve Grid Thumbs list
     *
     * @return array
     */
    public function getAllGrid()
    {
        if (null === $this->_grids) {
            $this->_grids = array();
            $grids = Mage::app()->getConfig()->getNode(self::XML_PATH_THUMBS_GRID);
            foreach ($grids->children() as $gridClass => $info){
                $this->_grids[] = $gridClass;
            }
        }
        return $this->_grids;
    }

    /**
     * Check the need to add an thumbs
     *
     * @return bool
     */
    public function isAddThumbs($block)
    {
        return in_array(get_class($block), $this->getAllGrid());
    }
}
