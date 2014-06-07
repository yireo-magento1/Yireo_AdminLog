<?php
/**
 * Yireo AdminLog for Magento
 *
 * @package     Yireo_AdminLog
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright (C) 2014 Yireo (http://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 * @link        http://www.yireo.com/
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
