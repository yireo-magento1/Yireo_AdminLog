<?php
/**
 * Yireo AdminLog for Magento
 *
 * @package     Yireo_AdminLog
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 * @link        https://www.yireo.com/
 */

class Yireo_AdminLog_Model_Observer
{
    public function adminSessionUserLoginSuccess($observer)
    {
    }

    public function adminhtmlCustomerSaveAfter($observer)
    {
    }

    public function catalogProductSaveAfter($observer)
    {
    }

    public function catalogProductDeleteAfter($observer)
    {
    }

    public function catalogCategorySaveAfter($observer)
    {
    }

    public function catalogCategoryDeleteAfter($observer)
    {
    }

    public function adminhtmlCustomerDeleteAfter($observer)
    {
    }

    protected function saveLog($message)
    {
        $log = Mage::getModel('commonlog/log');
        if(!empty($log)) {
            $log->setMessage($message);
        }
    }
}
