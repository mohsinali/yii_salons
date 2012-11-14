-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2012 at 04:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Authenticated', '21', NULL, 'N;'),
('Salon', '1', NULL, 'N;'),
('Salon', '25', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Authenticated', 2, '', NULL, 'N;'),
('createSpecialDeal', 0, 'create special deals', NULL, 'N;'),
('deleteSpecialDeal', 0, 'update special deals', NULL, 'N;'),
('Salon', 2, '', NULL, 'N;'),
('updateSpecialDeal', 0, 'update special deals', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('Salon', 'createSpecialDeal'),
('Salon', 'deleteSpecialDeal'),
('Salon', 'updateSpecialDeal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

DROP TABLE IF EXISTS `tbl_city`;
CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `name`, `country_id`) VALUES
(1, 'Karachi', 1),
(2, 'Lahore', 1),
(3, 'Beijing', 3),
(4, 'Kolkata', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

DROP TABLE IF EXISTS `tbl_country`;
CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`) VALUES
(1, 'Pakistan'),
(2, 'India'),
(3, 'China'),
(4, 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1350561211),
('m121018_111031_create_user_table', 1350562185),
('m121018_121209_create_country_table', 1350564189),
('m121018_121620_create_city_table', 1350564189),
('m121031_104521_create_role_table', 1351686160),
('m121101_113606_add_column_role_id_city_id', 1351771858),
('m121102_085249_add_column_profile_image', 1351846481),
('m121112_110327_drop_role_id_column_from_tbl_user', 1352718315),
('m121113_114947_create_table_tbl_profile_salon', 1352811364),
('m121113_131154_create_table_tbl_salon_type', 1352812657),
('m121114_051943_add_column_user_id_in_tbl_profile_salon', 1352870623);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_salon`
--

DROP TABLE IF EXISTS `tbl_profile_salon`;
CREATE TABLE IF NOT EXISTS `tbl_profile_salon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salon_name` varchar(200) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `salon_type` int(11) DEFAULT NULL,
  `salon_picture` varchar(200) DEFAULT NULL,
  `business_description` text,
  `services_offered` text,
  `lattitude` decimal(17,15) DEFAULT NULL,
  `longitude` decimal(17,15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profile_salon`
--

INSERT INTO `tbl_profile_salon` (`id`, `salon_name`, `phone`, `address1`, `address2`, `contact_person`, `contact_email`, `salon_type`, `salon_picture`, `business_description`, `services_offered`, `lattitude`, `longitude`, `user_id`) VALUES
(1, 'Golden Salon', '321321', 'M.C. Green Town', '', 'Shahid', 'email@yahoo.com', 1, NULL, 'loren ipos', 'lorem ipos', '24.369852800000000', '73.147852900000000', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

DROP TABLE IF EXISTS `tbl_role`;
CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`) VALUES
(1, 'Salon'),
(2, 'Freelancer'),
(3, 'Authenticated'),
(4, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salon_type`
--

DROP TABLE IF EXISTS `tbl_salon_type`;
CREATE TABLE IF NOT EXISTS `tbl_salon_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_salon_type`
--

INSERT INTO `tbl_salon_type` (`id`, `name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `profile_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `city_id`, `profile_image`) VALUES
(1, 'Mohsin', 'Ali', 'ma@yahoo.com', '202cb962ac59075b964b07152d234b70', 1, NULL),
(2, 'Ikram', 'Haq', 'ik@yahoo.com', '202cb962ac59075b964b07152d234b70', 2, NULL),
(8, 'Noman', 'Ahmed', 'nm@yahoo.com', '202cb962ac59075b964b07152d234b70', 3, NULL),
(15, 'John', 'Smith', 'john@yahoo.com', '202cb962ac59075b964b07152d234b70', 4, '2879-right-banner-4.jpg'),
(17, 'New', 'Password', 'new@yahoo.com', '3d186804534370c3c817db0563f0e461', 4, '765-right-banner-2.jpg'),
(20, 'New', 'Password', 'ma22@yahoo.com', '3d186804534370c3c817db0563f0e461', 4, '1558-'),
(21, 'New', 'Password', 'ma33@yahoo.com', '3d186804534370c3c817db0563f0e461', 3, '7900-'),
(25, 'New user', 'last', 'hello@hotmail.com', '3d186804534370c3c817db0563f0e461', 2, '2833-product_3.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
