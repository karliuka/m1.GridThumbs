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
