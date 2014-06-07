<?php
/**
 * Yireo CommonLog for Magento 
 *
 * @package     Yireo_CommonLog
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright (C) 2014 Yireo (http://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$installer = $this;
$installer->startSetup();

$installer->run("
CREATE TABLE IF NOT EXISTS {$this->getTable('commonlog_log')} (
  `log_id` int(20) NOT NULL auto_increment,
  `group` varchar(255) NOT NULL,
  `message` TEXT NOT NULL,
  `module` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `store_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `additional_data` TEXT NOT NULL,
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
");

$installer->endSetup();
