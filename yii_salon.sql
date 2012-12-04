--
-- MySQL 5.5.22
-- Sat, 24 Nov 2012 17:21:24 +0000
--

CREATE TABLE `AuthAssignment` (
   `itemname` varchar(64) not null,
   `userid` varchar(64) not null,
   `bizrule` text,
   `data` text,
   PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES 
('Authenticated', '21', '', 'N;'),
('Salon', '1', '', 'N;'),
('Salon', '25', '', 'N;');

CREATE TABLE `AuthItem` (
   `name` varchar(64) not null,
   `type` int(11) not null,
   `description` text,
   `bizrule` text,
   `data` text,
   PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES 
('Authenticated', '2', '', '', 'N;'),
('createSpecialDeal', '0', 'create special deals', '', 'N;'),
('deleteSpecialDeal', '0', 'update special deals', '', 'N;'),
('Salon', '2', '', '', 'N;'),
('updateSpecialDeal', '0', 'update special deals', '', 'N;');

CREATE TABLE `AuthItemChild` (
   `parent` varchar(64) not null,
   `child` varchar(64) not null,
   PRIMARY KEY (`parent`,`child`),
   KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES 
('Salon', 'createSpecialDeal'),
('Salon', 'deleteSpecialDeal'),
('Salon', 'updateSpecialDeal');

CREATE TABLE `tbl_city` (
   `id` int(11) not null auto_increment,
   `name` varchar(150) not null,
   `country_id` int(11) not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `tbl_city` (`id`, `name`, `country_id`) VALUES 
('1', 'Karachi', '1'),
('2', 'Lahore', '1'),
('3', 'Beijing', '3'),
('4', 'Kolkata', '2');

CREATE TABLE `tbl_country` (
   `id` int(11) not null auto_increment,
   `name` varchar(150) not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `tbl_country` (`id`, `name`) VALUES 
('1', 'Pakistan'),
('2', 'India'),
('3', 'China'),
('4', 'UK');

CREATE TABLE `tbl_migration` (
   `version` varchar(255) not null,
   `apply_time` int(11),
   PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES 
('m000000_000000_base', '1350561211'),
('m121018_111031_create_user_table', '1350562185'),
('m121018_121209_create_country_table', '1350564189'),
('m121018_121620_create_city_table', '1350564189'),
('m121031_104521_create_role_table', '1351686160'),
('m121101_113606_add_column_role_id_city_id', '1351771858'),
('m121102_085249_add_column_profile_image', '1351846481'),
('m121112_110327_drop_role_id_column_from_tbl_user', '1352718315'),
('m121113_114947_create_table_tbl_profile_salon', '1352811364'),
('m121113_131154_create_table_tbl_salon_type', '1352812657'),
('m121114_051943_add_column_user_id_in_tbl_profile_salon', '1352870623');

CREATE TABLE `tbl_profile_salon` (
   `id` int(11) not null auto_increment,
   `salon_name` varchar(200) not null,
   `phone` varchar(100),
   `address1` varchar(255),
   `address2` varchar(255),
   `contact_person` varchar(255),
   `contact_email` varchar(255),
   `salon_type` int(11),
   `salon_picture` varchar(200),
   `business_description` text,
   `services_offered` text,
   `lattitude` decimal(17,15),
   `longitude` decimal(17,15),
   `user_id` int(11),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

INSERT INTO `tbl_profile_salon` (`id`, `salon_name`, `phone`, `address1`, `address2`, `contact_person`, `contact_email`, `salon_type`, `salon_picture`, `business_description`, `services_offered`, `lattitude`, `longitude`, `user_id`) VALUES 
('1', 'Golden Salon', '321321', 'M.C. Green Town', '', 'Shahid', 'email@yahoo.com', '1', '', 'loren ipos', 'lorem ipos', '24.369852800000000', '73.147852900000000', '25');

CREATE TABLE `tbl_role` (
   `id` int(11) not null auto_increment,
   `name` varchar(150) not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `tbl_role` (`id`, `name`) VALUES 
('1', 'Salon'),
('2', 'Freelancer'),
('3', 'Authenticated'),
('4', 'test');

CREATE TABLE `tbl_salon_type` (
   `id` int(11) not null auto_increment,
   `name` varchar(150),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `tbl_salon_type` (`id`, `name`) VALUES 
('1', 'Men'),
('2', 'Women'),
('3', 'Unisex');

CREATE TABLE `tbl_user` (
   `id` int(11) not null auto_increment,
   `first_name` varchar(200) not null,
   `last_name` varchar(200) not null,
   `email` varchar(100) not null,
   `password` varchar(255) not null,
   `city_id` int(11),
   `profile_image` varchar(200),
   PRIMARY KEY (`id`),
   UNIQUE KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=26;

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `city_id`, `profile_image`) VALUES 
('1', 'Mohsin', 'Ali', 'ma@yahoo.com', '202cb962ac59075b964b07152d234b70', '1', ''),
('2', 'Ikram', 'Haq', 'ik@yahoo.com', '202cb962ac59075b964b07152d234b70', '2', ''),
('8', 'Noman', 'Ahmed', 'nm@yahoo.com', '202cb962ac59075b964b07152d234b70', '3', ''),
('15', 'John', 'Smith', 'john@yahoo.com', '202cb962ac59075b964b07152d234b70', '4', '2879-right-banner-4.jpg'),
('17', 'New', 'Password', 'new@yahoo.com', '3d186804534370c3c817db0563f0e461', '4', '765-right-banner-2.jpg'),
('20', 'New', 'Password', 'ma22@yahoo.com', '3d186804534370c3c817db0563f0e461', '4', '1558-'),
('21', 'New', 'Password', 'ma33@yahoo.com', '3d186804534370c3c817db0563f0e461', '3', '7900-'),
('25', 'New user', 'last', 'hello@hotmail.com', '3d186804534370c3c817db0563f0e461', '2', '2833-product_3.jpg');
