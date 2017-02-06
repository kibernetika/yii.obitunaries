-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               5.7.16 - MySQL Community Server (GPL)
-- ОС сервера:                   Win64
-- HeidiSQL Версія:              9.4.0.5148
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for yii_obitunaries
DROP DATABASE IF EXISTS `yii_obitunaries`;
CREATE DATABASE IF NOT EXISTS `yii_obitunaries` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii_obitunaries`;

-- Dumping structure for таблиця yii_obitunaries.address
DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id_address_ad` int(11) NOT NULL AUTO_INCREMENT,
  `country_ad` varchar(50) DEFAULT NULL,
  `state_ad` varchar(50) DEFAULT NULL,
  `city_ad` varchar(50) DEFAULT NULL,
  `zip_ad` varchar(10) DEFAULT NULL,
  `street_ad` varchar(50) DEFAULT NULL,
  `house_ad` varchar(5) DEFAULT NULL,
  `apartment_ad` varchar(5) DEFAULT NULL,
  `annotation_ad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_address_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.address: ~0 rows (приблизно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.booklet
DROP TABLE IF EXISTS `booklet`;
CREATE TABLE IF NOT EXISTS `booklet` (
  `id_booklet_bk` int(11) NOT NULL AUTO_INCREMENT,
  `title_bk` varchar(50) DEFAULT NULL,
  `description_bk` varchar(255) DEFAULT NULL,
  `path_to_pdf_bk` mediumtext,
  `id_cateory_bk` int(11) DEFAULT NULL,
  `price_bk` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_booklet_bk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.booklet: ~0 rows (приблизно)
/*!40000 ALTER TABLE `booklet` DISABLE KEYS */;
/*!40000 ALTER TABLE `booklet` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category_ct` int(11) NOT NULL AUTO_INCREMENT,
  `name_ct` varchar(50) DEFAULT NULL,
  `description_ct` varchar(255) DEFAULT NULL,
  `url_image_ct` mediumtext,
  PRIMARY KEY (`id_category_ct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.category: ~0 rows (приблизно)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client_cl` int(11) NOT NULL AUTO_INCREMENT,
  `first_name_cl` varchar(50) DEFAULT NULL,
  `second_name_cl` varchar(50) DEFAULT NULL,
  `id_address_cl` int(11) DEFAULT NULL,
  `mob_phone_cl` varchar(20) DEFAULT NULL,
  `annotation_cl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_client_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.client: ~0 rows (приблизно)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id_options_op` int(11) NOT NULL AUTO_INCREMENT,
  `pages_title_op` varchar(255) DEFAULT NULL,
  `value_op` mediumtext,
  `description_op` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_options_op`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.options: ~0 rows (приблизно)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id_order_or` int(11) NOT NULL AUTO_INCREMENT,
  `id_client_or` int(11) DEFAULT NULL,
  `summ_or` decimal(10,2) DEFAULT NULL,
  `annotation_or` varchar(255) DEFAULT NULL,
  `date_register_or` datetime DEFAULT NULL,
  `date_delivery_or` datetime DEFAULT NULL,
  `date_done_or` datetime DEFAULT NULL,
  `id_address_or` int(11) DEFAULT NULL,
  `ship_method_or` int(11) DEFAULT NULL,
  `shipping_price_or` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_order_or`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order_item
DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id_order_item_oi` int(11) NOT NULL AUTO_INCREMENT,
  `id_order_io` int(11) DEFAULT NULL,
  `id_booklet_io` int(11) DEFAULT NULL,
  `quantity_oi` int(11) DEFAULT NULL,
  `price_io` decimal(10,2) DEFAULT NULL,
  `comments_io` mediumtext,
  `id_category_io` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_order_item_oi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order_item_article
DROP TABLE IF EXISTS `order_item_article`;
CREATE TABLE IF NOT EXISTS `order_item_article` (
  `id_order_item_oa` int(11) NOT NULL AUTO_INCREMENT,
  `article_oa` mediumtext,
  PRIMARY KEY (`id_order_item_oa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_article: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_article` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order_item_file
DROP TABLE IF EXISTS `order_item_file`;
CREATE TABLE IF NOT EXISTS `order_item_file` (
  `id_order_item_of` int(11) NOT NULL AUTO_INCREMENT,
  `path_to_file_of` mediumtext,
  PRIMARY KEY (`id_order_item_of`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_file: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_file` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order_item_picture
DROP TABLE IF EXISTS `order_item_picture`;
CREATE TABLE IF NOT EXISTS `order_item_picture` (
  `id_order_item_picture_op` int(11) NOT NULL AUTO_INCREMENT,
  `id_order_item_op` int(11) DEFAULT NULL,
  `path_to_file_op` mediumtext,
  `description_op` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_order_item_picture_op`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_item_picture: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_item_picture` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item_picture` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.order_propertie_value
DROP TABLE IF EXISTS `order_propertie_value`;
CREATE TABLE IF NOT EXISTS `order_propertie_value` (
  `id_property_value` int(11) NOT NULL,
  `id_order_item` int(11) NOT NULL,
  PRIMARY KEY (`id_property_value`,`id_order_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.order_propertie_value: ~0 rows (приблизно)
/*!40000 ALTER TABLE `order_propertie_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_propertie_value` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.page
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id_page_pg` int(11) NOT NULL AUTO_INCREMENT,
  `html_pg` mediumtext,
  `description_pg` varchar(255) DEFAULT NULL,
  `number_pg` int(11) DEFAULT NULL,
  `temlate_pg` int(11) DEFAULT NULL,
  `id_booklet_pg` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_page_pg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.page: ~0 rows (приблизно)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.propertie
DROP TABLE IF EXISTS `propertie`;
CREATE TABLE IF NOT EXISTS `propertie` (
  `id_propertie_pr` int(11) NOT NULL AUTO_INCREMENT,
  `id_category_pr` int(11) DEFAULT NULL,
  `name_pr` varchar(20) DEFAULT NULL,
  `type_pr` enum('y\n','check','list') DEFAULT NULL,
  `description_pr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_propertie_pr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.propertie: ~0 rows (приблизно)
/*!40000 ALTER TABLE `propertie` DISABLE KEYS */;
/*!40000 ALTER TABLE `propertie` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.propertie_value
DROP TABLE IF EXISTS `propertie_value`;
CREATE TABLE IF NOT EXISTS `propertie_value` (
  `id_property_value_vl` int(11) NOT NULL AUTO_INCREMENT,
  `id_property_vl` int(11) DEFAULT NULL,
  `value_vl` varchar(255) DEFAULT NULL,
  `type_price_change_vl` enum('none','percent','fixed') DEFAULT NULL,
  `change_on_vl` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_property_value_vl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.propertie_value: ~0 rows (приблизно)
/*!40000 ALTER TABLE `propertie_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `propertie_value` ENABLE KEYS */;

-- Dumping structure for таблиця yii_obitunaries.site_page
DROP TABLE IF EXISTS `site_page`;
CREATE TABLE IF NOT EXISTS `site_page` (
  `id_site_pages_sp` int(11) NOT NULL AUTO_INCREMENT,
  `route_sp` varchar(250) DEFAULT NULL,
  `title_sp` varchar(50) DEFAULT NULL,
  `content_sp` mediumtext,
  `active_sp` bit(1) DEFAULT NULL,
  `order_number_sp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_site_pages_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii_obitunaries.site_page: ~0 rows (приблизно)
/*!40000 ALTER TABLE `site_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_page` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
