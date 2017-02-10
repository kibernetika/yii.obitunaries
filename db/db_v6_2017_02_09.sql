-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               5.6.29-log - MySQL Community Server (GPL)
-- ОС сервера:                   Win64
-- HeidiSQL Версія:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for yii_obitunaries
DROP DATABASE IF EXISTS `yii_obitunaries`;
CREATE DATABASE IF NOT EXISTS `yii_obitunaries` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii_obitunaries`;


-- Dumping structure for таблиця yii_obitunaries.address
DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id_address_ad` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_ad` varchar(50) NOT NULL,
  `state_ad` varchar(50) NOT NULL,
  `city_ad` varchar(50) NOT NULL,
  `zip_ad` varchar(10) NOT NULL,
  `street_ad` varchar(50) DEFAULT NULL,
  `house_ad` varchar(5) DEFAULT NULL,
  `apartment_ad` varchar(5) DEFAULT NULL,
  `annotation_ad` varchar(255) DEFAULT NULL,
  `receiver_name_ad` varchar(70) NOT NULL,
  PRIMARY KEY (`id_address_ad`),
  UNIQUE KEY `id_address_ad` (`id_address_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.address: ~0 rows (приблизно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.auth_assignment
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii_obitunaries.auth_assignment: ~2 rows (приблизно)
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
	('admin', '1', 1486381847),
	('register', '2', 1486383573);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.auth_item
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii_obitunaries.auth_item: ~2 rows (приблизно)
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
	('admin', 1, NULL, NULL, NULL, 1486381847, 1486381847),
	('register', 1, NULL, NULL, NULL, 1486383573, 1486383573);
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.auth_item_child
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii_obitunaries.auth_item_child: ~0 rows (приблизно)
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.auth_rule
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii_obitunaries.auth_rule: ~0 rows (приблизно)
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.booklet
DROP TABLE IF EXISTS `booklet`;
CREATE TABLE IF NOT EXISTS `booklet` (
  `id_booklet_bk` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_bk` varchar(50) DEFAULT NULL,
  `description_bk` varchar(255) DEFAULT NULL,
  `path_to_preview_bk` mediumtext NOT NULL,
  `path_to_pdf_bk` mediumtext,
  `id_cateory_bk` int(11) unsigned NOT NULL,
  `price_bk` decimal(10,2) NOT NULL,
  `active_bk` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id_booklet_bk`),
  UNIQUE KEY `id_booklet_bk` (`id_booklet_bk`),
  KEY `id_cateory_bk` (`id_cateory_bk`),
  CONSTRAINT `FK_booklet_category` FOREIGN KEY (`id_cateory_bk`) REFERENCES `category` (`id_category_ct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.booklet: ~0 rows (приблизно)
/*!40000 ALTER TABLE `booklet` DISABLE KEYS */;
/*!40000 ALTER TABLE `booklet` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category_ct` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_ct` varchar(50) NOT NULL,
  `description_ct` varchar(255) DEFAULT NULL,
  `url_image_ct` mediumtext,
  PRIMARY KEY (`id_category_ct`),
  UNIQUE KEY `id_category_ct` (`id_category_ct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.category: ~0 rows (приблизно)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client_cl` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name_cl` varchar(50) NOT NULL,
  `second_name_cl` varchar(50) NOT NULL,
  `mob_phone_cl` varchar(20) DEFAULT NULL,
  `annotation_cl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_client_cl`),
  UNIQUE KEY `id_client_cl` (`id_client_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.client: ~0 rows (приблизно)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.client_adddress
DROP TABLE IF EXISTS `client_adddress`;
CREATE TABLE IF NOT EXISTS `client_adddress` (
  `id_client_ca` int(11) unsigned NOT NULL,
  `id_address_ca` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_client_ca`,`id_address_ca`),
  UNIQUE KEY `id_client_address_ca` (`id_client_ca`,`id_address_ca`),
  KEY `FK_client_adddress_address` (`id_address_ca`),
  CONSTRAINT `FK_client_adddress_address` FOREIGN KEY (`id_address_ca`) REFERENCES `address` (`id_address_ad`),
  CONSTRAINT `FK_client_adddress_client` FOREIGN KEY (`id_client_ca`) REFERENCES `client` (`id_client_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.client_adddress: ~0 rows (приблизно)
/*!40000 ALTER TABLE `client_adddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_adddress` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.filemanager_mediafile
DROP TABLE IF EXISTS `filemanager_mediafile`;
CREATE TABLE IF NOT EXISTS `filemanager_mediafile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `alt` text,
  `size` varchar(255) NOT NULL,
  `description` text,
  `thumbs` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.filemanager_mediafile: ~2 rows (приблизно)
/*!40000 ALTER TABLE `filemanager_mediafile` DISABLE KEYS */;
INSERT INTO `filemanager_mediafile` (`id`, `filename`, `type`, `url`, `alt`, `size`, `description`, `thumbs`, `created_at`, `updated_at`) VALUES
	(1, 'sample-obituary-funeral-program-templates39506.png', 'image/png', '/uploads/2017/02/sample-obituary-funeral-program-templates39506.png', NULL, '309912', NULL, 'a:3:{s:5:"small";s:73:"/uploads/2017/02/sample-obituary-funeral-program-templates39506-small.png";s:6:"medium";s:74:"/uploads/2017/02/sample-obituary-funeral-program-templates39506-medium.png";s:5:"large";s:73:"/uploads/2017/02/sample-obituary-funeral-program-templates39506-large.png";}', 1486636822, NULL),
	(2, 'images.jpg', 'image/jpeg', '/uploads/2017/02/images.jpg', NULL, '9443', NULL, 'a:3:{s:5:"small";s:33:"/uploads/2017/02/images-small.jpg";s:6:"medium";s:34:"/uploads/2017/02/images-medium.jpg";s:5:"large";s:33:"/uploads/2017/02/images-large.jpg";}', 1486637235, NULL);
/*!40000 ALTER TABLE `filemanager_mediafile` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.filemanager_mediafile_tag
DROP TABLE IF EXISTS `filemanager_mediafile_tag`;
CREATE TABLE IF NOT EXISTS `filemanager_mediafile_tag` (
  `mediafile_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  KEY `filemanager_mediafile_tag_mediafile_id__mediafile_id` (`mediafile_id`),
  KEY `filemanager_mediafile_tag_tag_id__tag_id` (`tag_id`),
  CONSTRAINT `filemanager_mediafile_tag_mediafile_id__mediafile_id` FOREIGN KEY (`mediafile_id`) REFERENCES `filemanager_mediafile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `filemanager_mediafile_tag_tag_id__tag_id` FOREIGN KEY (`tag_id`) REFERENCES `filemanager_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.filemanager_mediafile_tag: ~0 rows (приблизно)
/*!40000 ALTER TABLE `filemanager_mediafile_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `filemanager_mediafile_tag` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.filemanager_owners
DROP TABLE IF EXISTS `filemanager_owners`;
CREATE TABLE IF NOT EXISTS `filemanager_owners` (
  `mediafile_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_attribute` varchar(255) NOT NULL,
  PRIMARY KEY (`mediafile_id`,`owner_id`,`owner`,`owner_attribute`),
  CONSTRAINT `filemanager_owners_ref_mediafile` FOREIGN KEY (`mediafile_id`) REFERENCES `filemanager_mediafile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.filemanager_owners: ~0 rows (приблизно)
/*!40000 ALTER TABLE `filemanager_owners` DISABLE KEYS */;
/*!40000 ALTER TABLE `filemanager_owners` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.filemanager_tag
DROP TABLE IF EXISTS `filemanager_tag`;
CREATE TABLE IF NOT EXISTS `filemanager_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.filemanager_tag: ~0 rows (приблизно)
/*!40000 ALTER TABLE `filemanager_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `filemanager_tag` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.migration
DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.migration: ~7 rows (приблизно)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1486311490),
	('m130524_201442_init', 1486311493),
	('m140506_102106_rbac_init', 1486373483),
	('m141129_130551_create_filemanager_mediafile_table', 1486596145),
	('m141203_173402_create_filemanager_owners_table', 1486596145),
	('m141203_175538_add_filemanager_owners_ref_mediafile_fk', 1486596145),
	('m160616_000010_add_filemanager_tags', 1486596145);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id_options_op` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pages_title_op` varchar(255) NOT NULL,
  `value_op` mediumtext NOT NULL,
  `description_op` varchar(255) NOT NULL,
  PRIMARY KEY (`id_options_op`),
  UNIQUE KEY `id_options_op` (`id_options_op`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.options: ~0 rows (приблизно)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
/*!40000 ALTER TABLE `options` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id_order_or` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_client_or` int(11) unsigned DEFAULT NULL,
  `summ_or` decimal(10,2) NOT NULL,
  `annotation_or` varchar(255) DEFAULT NULL,
  `date_register_or` datetime NOT NULL,
  `date_delivery_or` datetime DEFAULT NULL,
  `date_done_or` datetime DEFAULT NULL,
  `id_address_or` int(11) unsigned DEFAULT NULL,
  `ship_method_or` int(11) DEFAULT NULL,
  `shipping_price_or` decimal(10,2) DEFAULT NULL,
  `status` enum('order','payment','processing','shipping','successfull','cancelled') DEFAULT NULL,
  PRIMARY KEY (`id_order_or`),
  UNIQUE KEY `id_order_or` (`id_order_or`),
  KEY `id_client_or` (`id_client_or`),
  KEY `id_address_or` (`id_address_or`),
  CONSTRAINT `FK_order_address` FOREIGN KEY (`id_address_or`) REFERENCES `address` (`id_address_ad`),
  CONSTRAINT `FK_order_client` FOREIGN KEY (`id_client_or`) REFERENCES `client` (`id_client_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order_item
DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id_order_item_oi` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_order_io` int(11) unsigned NOT NULL,
  `id_booklet_io` int(11) unsigned DEFAULT NULL,
  `quantity_oi` int(11) NOT NULL,
  `price_io` decimal(10,2) NOT NULL,
  `comments_io` mediumtext,
  `id_category_io` int(11) unsigned NOT NULL,
  `type_io` enum('Template','File','Text and image') DEFAULT 'Template',
  PRIMARY KEY (`id_order_item_oi`),
  UNIQUE KEY `id_order_item_oi` (`id_order_item_oi`),
  KEY `id_order_io` (`id_order_io`),
  KEY `id_booklet_io` (`id_booklet_io`),
  KEY `id_category_io` (`id_category_io`),
  CONSTRAINT `FK_order_item_booklet` FOREIGN KEY (`id_booklet_io`) REFERENCES `booklet` (`id_booklet_bk`),
  CONSTRAINT `FK_order_item_category` FOREIGN KEY (`id_category_io`) REFERENCES `category` (`id_category_ct`),
  CONSTRAINT `FK_order_item_order` FOREIGN KEY (`id_order_io`) REFERENCES `order` (`id_order_or`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order_item_article
DROP TABLE IF EXISTS `order_item_article`;
CREATE TABLE IF NOT EXISTS `order_item_article` (
  `id_order_item_oa` int(11) unsigned NOT NULL,
  `article_oa` mediumtext NOT NULL,
  PRIMARY KEY (`id_order_item_oa`),
  UNIQUE KEY `id_order_item_oa` (`id_order_item_oa`),
  CONSTRAINT `FK_order_item_article_order` FOREIGN KEY (`id_order_item_oa`) REFERENCES `order_item` (`id_order_item_oi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_article: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_article` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order_item_file
DROP TABLE IF EXISTS `order_item_file`;
CREATE TABLE IF NOT EXISTS `order_item_file` (
  `id_order_item_of` int(11) unsigned NOT NULL,
  `path_to_file_of` mediumtext NOT NULL,
  PRIMARY KEY (`id_order_item_of`),
  UNIQUE KEY `id_order_item_of` (`id_order_item_of`),
  CONSTRAINT `FK_order_item_file_order_item` FOREIGN KEY (`id_order_item_of`) REFERENCES `order_item` (`id_order_item_oi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_file: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_file` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order_item_picture
DROP TABLE IF EXISTS `order_item_picture`;
CREATE TABLE IF NOT EXISTS `order_item_picture` (
  `id_order_item_picture_op` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_order_item_op` int(11) unsigned NOT NULL,
  `path_to_file_op` mediumtext NOT NULL,
  `description_op` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_order_item_picture_op`),
  UNIQUE KEY `id_order_item_picture_op` (`id_order_item_picture_op`),
  KEY `id_order_item_op` (`id_order_item_op`),
  CONSTRAINT `FK_order_item_picture_order_item` FOREIGN KEY (`id_order_item_op`) REFERENCES `order_item` (`id_order_item_oi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_picture: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_picture` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_picture` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.order_propertie_value
DROP TABLE IF EXISTS `order_propertie_value`;
CREATE TABLE IF NOT EXISTS `order_propertie_value` (
  `id_property_value` int(11) unsigned NOT NULL,
  `id_order_item` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_property_value`,`id_order_item`),
  UNIQUE KEY `id_property_value_id_order_item` (`id_property_value`,`id_order_item`),
  KEY `FK_order_propertie_value_order_item` (`id_order_item`),
  CONSTRAINT `FK_order_propertie_value_order_item` FOREIGN KEY (`id_order_item`) REFERENCES `order_item` (`id_order_item_oi`),
  CONSTRAINT `FK_order_propertie_value_propertie_value` FOREIGN KEY (`id_property_value`) REFERENCES `propertie_value` (`id_property_value_vl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_propertie_value: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_propertie_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_propertie_value` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.page
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id_page_pg` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `html_pg` mediumtext NOT NULL,
  `description_pg` varchar(255) DEFAULT NULL,
  `number_pg` int(11) NOT NULL,
  `temlate_pg` int(11) DEFAULT '1' COMMENT 'Template booklet - one, two or three pages.',
  `id_booklet_pg` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_page_pg`),
  UNIQUE KEY `id_page_pg` (`id_page_pg`),
  KEY `id_booklet_pg` (`id_booklet_pg`),
  CONSTRAINT `FK_page_booklet` FOREIGN KEY (`id_booklet_pg`) REFERENCES `booklet` (`id_booklet_bk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.page: ~0 rows (приблизно)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
/*!40000 ALTER TABLE `page` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.propertie
DROP TABLE IF EXISTS `propertie`;
CREATE TABLE IF NOT EXISTS `propertie` (
  `id_propertie_pr` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_category_pr` int(11) unsigned NOT NULL,
  `name_pr` varchar(20) NOT NULL,
  `type_pr` enum('y\n','check','list') NOT NULL,
  `description_pr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_propertie_pr`),
  UNIQUE KEY `id_propertie_pr` (`id_propertie_pr`),
  KEY `id_category_pr` (`id_category_pr`),
  CONSTRAINT `FK_propertie_category` FOREIGN KEY (`id_category_pr`) REFERENCES `category` (`id_category_ct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.propertie: ~0 rows (приблизно)
/*!40000 ALTER TABLE `propertie` DISABLE KEYS */;
/*!40000 ALTER TABLE `propertie` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.propertie_value
DROP TABLE IF EXISTS `propertie_value`;
CREATE TABLE IF NOT EXISTS `propertie_value` (
  `id_property_value_vl` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_property_vl` int(11) unsigned NOT NULL,
  `value_vl` varchar(255) NOT NULL,
  `type_price_change_vl` enum('none','percent','fixed') DEFAULT 'none',
  `change_on_vl` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_property_value_vl`),
  UNIQUE KEY `id_property_value_vl` (`id_property_value_vl`),
  KEY `id_property_vl` (`id_property_vl`),
  CONSTRAINT `FK_propertie_value_propertie` FOREIGN KEY (`id_property_vl`) REFERENCES `propertie` (`id_propertie_pr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.propertie_value: ~0 rows (приблизно)
/*!40000 ALTER TABLE `propertie_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `propertie_value` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.site_page
DROP TABLE IF EXISTS `site_page`;
CREATE TABLE IF NOT EXISTS `site_page` (
  `id_site_pages_sp` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `route_sp` varchar(250) NOT NULL,
  `title_sp` varchar(50) NOT NULL,
  `content_sp` mediumtext,
  `active_sp` bit(1) DEFAULT b'1',
  `order_number_sp` int(11) DEFAULT '1',
  PRIMARY KEY (`id_site_pages_sp`),
  UNIQUE KEY `id_site_pages_sp` (`id_site_pages_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.site_page: ~0 rows (приблизно)
/*!40000 ALTER TABLE `site_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_page` ENABLE KEYS */;


-- Dumping structure for таблиця yii_obitunaries.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `is_admin` bit(1) NOT NULL DEFAULT b'0' COMMENT '1-administrator',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii_obitunaries.user: ~2 rows (приблизно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `is_admin`) VALUES
	(1, 'admin', 'a2UmgGViQOwNIKS7mrf12SOIKIFp4arH', '$2y$13$2XU7t//AZJdQAiMnig71JOGQPfezVePC5G2gn1J4WxypK9ViycivG', NULL, 'sg.pavel.d@gmail.com', 10, 1486331102, 1486331102, b'1'),
	(2, 'user', 'E91M_9ZfdN3yopJbARL19ShAyIyo08h8', '$2y$13$nX.7blAXdwb63/DXHopdg.QVGAbOWGul4pzgkDiCYm/hDFfK5bd0e', NULL, 'user@user.com', 10, 1486383682, 1486383682, b'0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
