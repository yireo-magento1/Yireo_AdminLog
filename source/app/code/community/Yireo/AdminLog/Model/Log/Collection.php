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
 * CommonLog model
 */
class Yireo_CommonLog_Model_Log_Collection extends Mage_Core_Model_Abstract
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('commonlog/log');
    }
}
