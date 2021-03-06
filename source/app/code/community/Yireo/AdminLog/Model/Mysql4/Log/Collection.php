<?php
/**
 * Yireo CommonLog for Magento 
 *
 * @package     Yireo_CommonLog
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/**
 * CommonLog item resource collection
 */
class Yireo_CommonLog_Model_Mysql4_Log_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init('commonlog/log');
    }
}
