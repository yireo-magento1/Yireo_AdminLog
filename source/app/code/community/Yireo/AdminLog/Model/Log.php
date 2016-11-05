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
 * CommonLog model
 */
class Yireo_CommonLog_Model_Log extends Mage_Core_Model_Abstract
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('commonlog/log');
    }

    /**
     * Save method
     */
    public function save()
    {
        // Load the group
        $group = $this->getData('group');
        $this->setData('group', null);

        // Load the message
        $message = $this->getData('message');
        $this->setData('message', $message);

        // Load the user or customer
        $user_id = 0;
        if(Mage::app()->getStore()->isAdmin()) {
            $admin = Mage::getSingleton('admin/session')->getUser();
            $userId = $admin->getId();
        } else {
            $customer = Mage::getSingleton('customer/session')->getCustomer();
            $userId = $customer->getId();
        }
        $this->setData('user_id', $userId);

        // Automatic data
        $this->setData('module', Mage::getModel('core/url')->getRequest()->getControllerModule());
        $this->setData('request', Mage::getModel('core/url')->getRequest()->getRequestUri());
        $this->setData('store_id', Mage::app()->getStore()->getId());
        $this->setData('timestamp', time());

        // Set the IP
        $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : null;
        $this->setData('ip', $ip);

        // Set the useragent
        $useragent = (isset($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : null;
        $this->setData('useragent', $useragent);

        // Additional data
        $additionalData = $this->getAdditionalData();
        $this->setData('additional_data', serialize($additionalData));

        // Save the object
        $rt = parent::save();

        return $rt;
    }
}
