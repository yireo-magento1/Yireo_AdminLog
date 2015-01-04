<?php
/**
 * Yireo CommonLog for Magento 
 *
 * @package     Yireo_CommonLog
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (http://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/**
 * CommonLog resource model
 */
class Yireo_CommonLog_Model_Mysql4_Log extends Mage_Core_Model_Mysql4_Abstract
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init('commonlog/log', 'log_id');
    }
}
