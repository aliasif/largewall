-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-10-21 10:06:54
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table largewall.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT '0',
  `password` varchar(255) DEFAULT '0',
  `email` varchar(255) DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT '0',
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains information about admin user';

-- Dumping data for table largewall.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table largewall.cms_block
DROP TABLE IF EXISTS `cms_block`;
CREATE TABLE IF NOT EXISTS `cms_block` (
  `block_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Block ID',
  `title` varchar(255) NOT NULL COMMENT 'Block Title',
  `identifier` varchar(255) NOT NULL COMMENT 'Block String Identifier',
  `content` mediumtext COMMENT 'Block Content',
  `creation_time` timestamp NULL DEFAULT NULL COMMENT 'Block Creation Time',
  `update_time` timestamp NULL DEFAULT NULL COMMENT 'Block Modification Time',
  `is_active` smallint(6) NOT NULL DEFAULT '1' COMMENT 'Is Block Active',
  PRIMARY KEY (`block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='CMS Block Table';

-- Dumping data for table largewall.cms_block: ~0 rows (approximately)
/*!40000 ALTER TABLE `cms_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_block` ENABLE KEYS */;


-- Dumping structure for table largewall.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `referal_key` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains information about customers ';

-- Dumping data for table largewall.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;


-- Dumping structure for table largewall.customer__referal_accounts
DROP TABLE IF EXISTS `customer__referal_accounts`;
CREATE TABLE IF NOT EXISTS `customer__referal_accounts` (
  `id_accounts` int(10) NOT NULL AUTO_INCREMENT,
  `fk_customer` int(10) DEFAULT '0',
  `transaction_details` text,
  `amount` int(10) DEFAULT '0',
  `type` tinyint(2) DEFAULT '1',
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_accounts`),
  KEY `FK__customers_accounts` (`fk_customer`),
  CONSTRAINT `FK__customers_accounts` FOREIGN KEY (`fk_customer`) REFERENCES `customers` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains information about customer accounts';

-- Dumping data for table largewall.customer__referal_accounts: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer__referal_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer__referal_accounts` ENABLE KEYS */;


-- Dumping structure for table largewall.files
DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_space_order` int(11) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `filemime` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `type` enum('file','thumbnail') DEFAULT NULL,
  `primary` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `FK_files_space_orders` (`fk_space_order`),
  CONSTRAINT `FK_files_space_orders` FOREIGN KEY (`fk_space_order`) REFERENCES `space_orders` (`id_space_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table largewall.files: ~0 rows (approximately)
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;


-- Dumping structure for table largewall.space_orders
DROP TABLE IF EXISTS `space_orders`;
CREATE TABLE IF NOT EXISTS `space_orders` (
  `id_space_order` int(10) NOT NULL AUTO_INCREMENT,
  `order_nr` int(10) DEFAULT '0',
  `fk_customer` int(10) DEFAULT '0',
  `pixel_X1_location` int(10) DEFAULT '0',
  `pixel_X2_location` int(10) DEFAULT '0',
  `pixel_Y1_location` int(10) DEFAULT '0',
  `pixel_Y2_location` int(10) DEFAULT '0',
  `total_pixels` int(10) DEFAULT '0',
  `total_amount` int(10) DEFAULT '0',
  `payment_method` varchar(50) DEFAULT '0',
  `payment_status` varchar(50) DEFAULT '0',
  `status` varchar(50) DEFAULT '0',
  `created_by` varchar(50) DEFAULT '0',
  `last_updated` timestamp NULL DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `expiry_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_space_order`),
  KEY `FK__customers` (`fk_customer`),
  CONSTRAINT `FK__customers` FOREIGN KEY (`fk_customer`) REFERENCES `customers` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this table contains information about orders';

-- Dumping data for table largewall.space_orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `space_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `space_orders` ENABLE KEYS */;


-- Dumping structure for table largewall.space_order_history
DROP TABLE IF EXISTS `space_order_history`;
CREATE TABLE IF NOT EXISTS `space_order_history` (
  `id_order_history` int(10) NOT NULL DEFAULT '0',
  `fk_space_order` int(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `fk_user` int(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_order_history`),
  KEY `FK__space_orders` (`fk_space_order`),
  KEY `FK__admin` (`fk_user`),
  CONSTRAINT `FK__admin` FOREIGN KEY (`fk_user`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__space_orders` FOREIGN KEY (`fk_space_order`) REFERENCES `space_orders` (`id_space_order`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains information about status history';

-- Dumping data for table largewall.space_order_history: ~0 rows (approximately)
/*!40000 ALTER TABLE `space_order_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `space_order_history` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
