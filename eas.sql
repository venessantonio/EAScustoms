-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2019 at 06:59 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL,
  `user_idfk` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idfk` (`user_idfk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `middleName`, `lastName`, `date_created`, `date_modified`, `user_idfk`) VALUES
(2, '', '', '', '2018-09-12 07:26:00', '2018-09-12 07:26:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `serviceId` varchar(255) NOT NULL,
  `vehicleId` int(255) NOT NULL,
  `personalId` int(11) NOT NULL,
  `otherService` varchar(255) DEFAULT NULL,
  `additionalMessage` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `adminDate` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `notification` int(1) DEFAULT '1',
  `sms` int(11) DEFAULT '0',
  `threedayssms` int(11) DEFAULT '0',
  `ondaysms` int(11) DEFAULT '0',
  `targetEndDate` datetime DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `rescheduledate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicleId` (`vehicleId`),
  KEY `personalId` (`personalId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `serviceId`, `vehicleId`, `personalId`, `otherService`, `additionalMessage`, `status`, `date`, `adminDate`, `created`, `modified`, `notification`, `sms`, `threedayssms`, `ondaysms`, `targetEndDate`, `color`, `rescheduledate`) VALUES
(1, 'Change Oil,Check fuel filter,Change Brake Pads', 1, 1, 'Please handle with care', 'Required', 'Accepted', '2019-01-21 00:00:00', 'reschedclient', '2018-12-29 07:54:06', '2019-01-14 05:34:50', 1, 0, 0, 0, '2019-01-21 00:00:00', '#008000', '2019-01-16|2019-01-17'),
(2, 'check horn,check battery', 6, 1, 'Howmuch will it cost me ? ', 'nvnvb', 'Overdue', '2018-12-14 00:00:00', 'admin', '2018-11-29 07:55:54', NULL, 1, 1, 0, 0, '2019-01-17 00:00:00', NULL, ''),
(3, 'Body Repair', 3, 2, 'Need it dine in 3 days', NULL, 'Overdue', '2018-12-01 00:00:00', NULL, '2018-11-29 07:56:45', NULL, 1, 1, 0, 0, '2019-01-04 00:00:00', NULL, ''),
(4, 'Customize', 2, 2, 'Make it vintage', NULL, 'Accepted', '2019-01-29 00:00:00', NULL, '2018-11-29 07:57:57', '2018-11-29 08:20:51', 1, 0, 1, 0, '2019-01-29 00:00:00', NULL, ''),
(5, 'Check headlights', 6, 1, 'dawd', NULL, 'Overdue', '2018-12-13 00:00:00', NULL, '2018-12-09 02:51:32', NULL, 1, 1, 0, 0, '2019-01-16 00:00:00', NULL, ''),
(6, 'Change Oil,Check fuel filter', 5, 1, 'Kewl', NULL, 'Done', '2018-12-20 00:00:00', 'admin', '2018-12-11 18:15:49', '2019-01-07 17:13:01', 1, 0, 0, 0, '2019-01-08 00:00:00', NULL, ''),
(7, 'Change Brake Pads', 7, 1, 'Huehue', NULL, 'In-progress', '2019-01-11 00:00:00', NULL, '2018-12-11 19:24:15', NULL, 1, 1, 0, 0, '2019-01-22 00:00:00', '#40E0D0', ''),
(8, 'Change Oil', 1, 1, 'asdsad', 'asdasdasd', 'Pending', '2019-01-23 00:00:00', NULL, '2019-01-14 09:01:28', NULL, 1, 0, 0, 0, '2019-01-23 00:00:00', NULL, NULL),
(9, 'Change Oil', 1, 1, 'dsdf', 'dfg', 'Pending', '2019-01-17 00:00:00', NULL, '2019-01-14 09:08:41', NULL, 1, 0, 0, 0, '2019-01-17 00:00:00', NULL, NULL),
(10, 'Change Brake Pads,Change Air Filter,Body Repair', 5, 1, 'Thank youuu', NULL, 'Pending', '2019-01-16 00:00:00', NULL, '2019-01-14 14:26:19', NULL, 1, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chargeinvoice`
--

DROP TABLE IF EXISTS `chargeinvoice`;
CREATE TABLE IF NOT EXISTS `chargeinvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleId` int(11) NOT NULL,
  `personalId` int(11) NOT NULL,
  `scopeName` varchar(255) DEFAULT NULL,
  `scopePrice` varchar(255) DEFAULT NULL,
  `sparePartsId` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TotalPrice` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `notification` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `personalId` (`personalId`),
  KEY `vehicleId` (`vehicleId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargeinvoice`
--

INSERT INTO `chargeinvoice` (`id`, `vehicleId`, `personalId`, `scopeName`, `scopePrice`, `sparePartsId`, `date`, `TotalPrice`, `created`, `modified`, `notification`) VALUES
(1, 1, 1, 'Panel Beat - Front Facia,Panel Beat - Rear Bumper', '', '1', '2018-11-29 00:00:00', 500, '2018-11-29 08:13:21', NULL, 1),
(2, 3, 2, 'Replace Tail Light(Right),Install dashboard lights, speedo meter ', '', '1', '2018-11-30 00:00:00', 5000, '2018-11-29 08:13:50', NULL, 1),
(3, 5, 1, 'New upholstery, new chair upholstery, new inside carpet,Check Seat belts', '', '1', '2018-11-30 00:00:00', 10000, '2018-11-29 08:14:16', NULL, 1),
(4, 3, 2, 'Panel Beat - Rear Bumper,Fix sliding Door mechanism,Buff the whole vehicle', '', '1', '2018-11-30 00:00:00', 5000, '2018-11-29 08:14:50', NULL, 1),
(5, 4, 4, 'Buff the rear bumper', '', '1', '2018-11-30 00:00:00', 1000, '2018-11-29 08:15:22', NULL, 1),
(6, 1, 1, 'Recondition accelerator mechanism - Replace Assorted Bushings,Wheel balance,Panel Beat - Rear Bumper', '', '1', '2018-11-07 00:00:00', 1000, '2018-11-29 08:20:01', NULL, 1),
(7, 1, 1, '123123123,sadasd,sadasdsa', NULL, '1', '2019-01-14 08:03:03', 1000, '2019-01-14 08:03:03', NULL, 0),
(8, 1, 1, 'asdasdasdasdaasdasd,asdasdzxcz,asdqwezczxc', NULL, '1', '2019-01-14 08:05:58', 1500, '2019-01-14 08:05:58', NULL, 0),
(9, 1, 1, 'Add,Add', NULL, '1', '2019-01-15 01:18:34', 10000, '2019-01-15 01:18:34', NULL, 0),
(10, 1, 1, 'das,dsad', NULL, '1', '2019-01-15 01:20:15', 10000, '2019-01-15 01:20:15', NULL, 0),
(11, 1, 1, 'etst,test', NULL, '1', '2019-01-15 01:21:45', 20000, '2019-01-15 01:21:45', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `daterestricted`
--

DROP TABLE IF EXISTS `daterestricted`;
CREATE TABLE IF NOT EXISTS `daterestricted` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daterestricted`
--

INSERT INTO `daterestricted` (`id`, `date`, `status`, `modified`, `created`) VALUES
(4, '2018-12-01', 'Accepted', NULL, '2018-11-29 11:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `message` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phoneNumber`, `message`, `date`) VALUES
(2, 'Jane Doe', 'jane8@gmail.com', '09187723489', 'The shop replies fast. Easy communication', '2018-11-29 00:00:00'),
(3, NULL, NULL, NULL, 'The service is good! Approachableemployees', '2018-11-29 00:00:00'),
(4, 'Bravito', 'bravito@ymail.com', '', 'Great website! really responsive admins', '2019-01-07 12:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `make_series`
--

DROP TABLE IF EXISTS `make_series`;
CREATE TABLE IF NOT EXISTS `make_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make_series`
--

INSERT INTO `make_series` (`id`, `make`, `series`) VALUES
(1, 'Mitsubishi', 'Lancer'),
(2, 'Honda', 'Civic'),
(3, 'Toyota', 'Fortuner'),
(4, 'Hyundai', 'Grand Starex'),
(5, 'Toyota', 'Hiace'),
(6, 'Toyota', 'Innova'),
(7, 'Toyota', '`Land Cruiser'),
(8, 'Mitsubishi', 'Adventure'),
(9, 'Mitsubishi', 'Mirage');

-- --------------------------------------------------------

--
-- Table structure for table `mobilenumbers`
--

DROP TABLE IF EXISTS `mobilenumbers`;
CREATE TABLE IF NOT EXISTS `mobilenumbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personalId` int(11) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `personalId` (`personalId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleId` int(11) NOT NULL,
  `personalId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicleId` (`vehicleId`),
  KEY `personalId` (`personalId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

DROP TABLE IF EXISTS `personalinfo`;
CREATE TABLE IF NOT EXISTS `personalinfo` (
  `personalId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `middleName` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `telephoneNumber` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `mobileNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`personalId`),
  KEY `userId` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`personalId`, `user_id`, `firstName`, `lastName`, `middleName`, `address`, `telephoneNumber`, `email`, `created`, `modified`, `mobileNumber`) VALUES
(1, 1, 'Juan', ' Dela Cruz', ' Carlos', '116 New Lucban Extension Road', NULL, ' juandelacruz@gmail.com', '2018-11-29 00:21:37', '2018-12-11 00:18:38', '09171550423'),
(2, 2, 'Maria', 'Makiling', 'Gretta', 'Petersville, Subdivision, Camp7', NULL, 'mariamakiling@gmail.com', '2018-11-29 00:31:11', NULL, '09726356789'),
(3, 3, 'Fernando', 'Delfino', 'Carpio', 'Tuding, Itogon', NULL, 'fernando@gmail.com', '2018-11-29 00:35:49', NULL, '09263745435'),
(4, 4, 'Sarah', 'Cruz', 'Reyes', 'La Trinindad, Benguet', NULL, 'sarahcruz@gmail.com', '2018-11-29 00:45:21', NULL, '09876234875'),
(5, 5, 'John', 'Bautista', 'Ocampo', 'Binalonan, Pangasinan', NULL, 'johnbautista@gmail.com', '2018-11-29 00:48:02', NULL, '09291875660'),
(6, 6, 'Mary Joy', 'Torres', 'Mendoza', 'Aurora Hill, Baguio City', NULL, 'maryjoy@gmail.com', '2018-11-29 00:50:41', NULL, '09197263574'),
(7, 7, 'Jessica', 'Jung', 'Blayre', 'Bakakeng', '0744443692', 'jj@gmail.com', '2018-12-07 14:53:43', NULL, '09088899999'),
(31, 8, 'Tiffany', 'Young', 'Efron', 'T-Alonzo', '', 'young@gmail.com', '2018-12-10 17:17:14', NULL, '09194189680'),
(32, 9, 'Viviene', 'Lyra', 'Blaire', 'Brookside', NULL, 'viviene@gmail.com', '2018-12-10 21:52:43', NULL, '09171550423'),
(33, NULL, 'Sarah', 'Winslet', 'Middleton', 'Sunshine Subdivision', '0748826750', 'sarah@yahoo.com', '2019-01-14 21:39:46', NULL, '09827881109'),
(34, NULL, 'Albert', 'Lacap', 'Imuan', 'Gibraltar', '0746781234', 'lacap@gmail.com', '2019-01-15 01:33:59', NULL, '09871278901');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

DROP TABLE IF EXISTS `scope`;
CREATE TABLE IF NOT EXISTS `scope` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scopeWork` varchar(255) NOT NULL,
  `subScope` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`id`, `scopeWork`, `subScope`, `price`, `created`, `modified`) VALUES
(1, 'Mechanical Job', 'Recondition Brake System - Replace Brake Master Repair Kit', NULL, '2018-11-24 16:39:20', NULL),
(2, 'Mechanical Job', 'Recondition Brake System - Flush Down and Bleed Fluid System', NULL, '2018-11-24 16:43:31', NULL),
(3, 'Mechanical Job', 'Recondition Brake System - Clean Drum Brakes and Calipers', NULL, '2018-11-24 16:43:31', NULL),
(4, 'Mechanical Job', 'Recondition Brake System - Replace Brake Shoe', NULL, '2018-11-24 16:46:47', NULL),
(5, 'Mechanical Job', 'Recondition Brake System - Replace Brake Pads', NULL, '2018-11-24 16:46:47', NULL),
(6, 'Mechanical Job', 'Recondition accelerator mechanism - Replace Assorted Bushings', NULL, '2018-11-24 16:48:38', NULL),
(115, 'Mechanical job', 'Replace all bulbs', NULL, '2018-11-24 17:14:08', NULL),
(116, 'Mechanical job', 'Wiper Blades', NULL, '2018-11-24 17:14:08', NULL),
(117, 'Mechanical job', 'Overhaul - Change Nozzle Tips', NULL, '2018-11-24 17:14:08', NULL),
(118, 'Mechanical job', 'Overhaul - Change oil', NULL, '2018-11-24 17:14:08', NULL),
(119, 'Mechanical job', 'Overhaul - Change Oil Filter', NULL, '2018-11-24 17:14:08', NULL),
(120, 'Mechanical job', 'Overhaul - Change Transmission Oil', NULL, '2018-11-24 17:14:08', NULL),
(121, 'Mechanical job', 'Overhaul - Change Air Filter', NULL, '2018-11-24 17:14:08', NULL),
(122, 'Mechanical job', 'Wheel balance', NULL, '2018-11-24 17:14:08', NULL),
(123, 'Mechanical job', 'Replace Stud Bolts', NULL, '2018-11-24 17:14:08', NULL),
(124, 'Mechanical job', 'Replace Side Mirror', NULL, '2018-11-24 17:14:08', NULL),
(125, 'Mechanical job', 'Replace Engine fan blade', NULL, '2018-11-24 17:14:08', NULL),
(126, 'Mechanical job', 'Replace Fan Belt', NULL, '2018-11-24 17:14:08', NULL),
(127, 'Mechanical job', 'Replace brake, accelerator, clutch pads', NULL, '2018-11-24 17:14:08', NULL),
(128, 'Mechanical job', 'Replace battery', NULL, '2018-11-24 17:14:08', NULL),
(129, 'Mechanical job', 'Replace radiator', NULL, '2018-11-24 17:14:08', NULL),
(130, 'Painting and Body Repair Job', 'Panel Beat - Right Sliding Door', NULL, '2018-11-24 17:14:08', NULL),
(131, 'Painting and Body Repair Job', 'Panel Beat - Right Quarter Panel', NULL, '2018-11-24 17:14:08', NULL),
(132, 'Painting and Body Repair Job', 'Panel Beat - Front Bumper', NULL, '2018-11-24 17:14:08', NULL),
(133, 'Painting and Body Repair Job', 'Panel Beat - Right Front Door', NULL, '2018-11-24 17:14:08', NULL),
(134, 'Painting and Body Repair Job', 'Panel Beat - Front Facia', NULL, '2018-11-24 17:14:08', NULL),
(135, 'Painting and Body Repair Job', 'Panel Beat - Rear Bumper', NULL, '2018-11-24 17:14:08', NULL),
(136, 'Painting and Body Repair Job', 'Fix sliding Door mechanism', NULL, '2018-11-24 17:14:08', NULL),
(137, 'Painting and Body Repair Job', 'Repaint whole vehicle', NULL, '2018-11-24 17:14:08', NULL),
(138, 'Painting and Body Repair Job', 'Buff the whole vehicle', NULL, '2018-11-24 17:14:08', NULL),
(139, 'Painting and Body Repair Job', 'Buff the rear bumper', NULL, '2018-11-24 17:14:08', NULL),
(140, 'Painting and Body Repair Job', 'Paint the grill with black', NULL, '2018-11-24 17:14:08', NULL),
(141, 'Painting and Body Repair Job', 'Paint the rims with black', NULL, '2018-11-24 17:14:08', NULL),
(142, 'Painting and Body Repair Job', 'Wax and polish the whole vehicle', NULL, '2018-11-24 17:14:08', NULL),
(143, 'Electrical Job', 'Replace Tail Light(Right)', NULL, '2018-11-24 17:14:08', NULL),
(144, 'Electrical Job', 'Install new stereo/radio', NULL, '2018-11-24 17:14:08', NULL),
(145, 'Electrical Job', 'Install dashboard lights, speedo meter ', NULL, '2018-11-24 17:14:08', NULL),
(146, 'Electrical Job', 'Install Antenna', NULL, '2018-11-24 17:14:08', NULL),
(147, 'Others', 'Refill Aircon Freon', NULL, '2018-11-24 17:14:08', NULL),
(148, 'Others', 'New upholstery, new chair upholstery, new inside carpet', 17000, '2018-11-24 17:14:08', NULL),
(149, 'Others', 'Replace Tint', 3500, '2018-11-24 17:14:08', NULL),
(150, 'Others', 'Check Seat belts', NULL, '2018-11-24 17:14:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceId` int(11) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(420) NOT NULL,
  `serviceType` varchar(420) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`serviceId`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceName`, `serviceType`, `created`, `modified`) VALUES
(1, 'Change Oil', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(2, 'Check brakes', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(3, 'Check Air filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(4, 'Check fuel filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(5, 'Check Cabin Filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(6, 'Check Suspensions', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(7, 'Change Brake Pads', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(8, 'Change Air Filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(9, 'Change Fuel Filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(10, 'Change Cabin Filter', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(11, 'Change wiper blades', 'Mechanical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(12, 'Check headlights', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(13, 'Check Front and rear signal lights', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(14, 'Check tail lights', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(15, 'Check park lights', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(16, 'Check Brake lights', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(17, 'Check reverse light', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(18, 'Check plate light', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(19, 'Check dome light', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(20, 'check horn', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(21, 'check battery', 'Electrical', '2018-09-18 00:00:00', '2018-09-18 00:00:00'),
(22, 'simple retouch', 'Painting', '2018-09-18 00:00:00', '2018-09-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

DROP TABLE IF EXISTS `spareparts`;
CREATE TABLE IF NOT EXISTS `spareparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `name`, `price`, `created`, `modified`) VALUES
(1, 'Exhaust', 1500, '2019-01-15 00:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `appointmentID` int(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'In-progress',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointmentID` (`appointmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `appointmentID`, `service`, `status`, `created`, `modified`, `dateStart`, `dateEnd`) VALUES
(1, 1, 'Please handle with care', 'In-progress', '2018-11-29 08:22:06', '2018-11-29 08:22:06', NULL, NULL),
(2, 1, 'Change Oil', 'In-progress', '2018-11-29 08:22:06', '2018-11-29 08:22:06', NULL, NULL),
(3, 1, 'Check fuel filter', 'In-progress', '2018-11-29 08:22:06', '2018-11-29 08:22:06', NULL, NULL),
(4, 1, 'Change Brake Pads', 'In-progress', '2018-11-29 08:22:06', '2018-11-29 08:22:06', NULL, NULL),
(6, 6, 'Change Oil', 'Done', '2019-01-07 17:13:01', '2019-01-07 17:13:01', '2019-01-08', '2019-01-08'),
(7, 6, 'Check fuel filter', 'Done', '2019-01-07 17:13:01', '2019-01-07 17:13:01', '2019-01-11', '2019-01-11'),
(8, 7, 'Check Air filter', 'In-progress', '2019-01-14 21:32:33', '2019-01-14 21:32:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'active',
  `type` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `status`, `type`, `firstName`, `middleName`, `lastName`) VALUES
(1, 'juandelacruz', '$2y$10$RkY6SJC.r7dq6tveki8Vv.IJU2EtTTSPcK64pViIlDpxG3QJcgmIm', '2018-11-29 00:21:37', NULL, 'Active', 'client', '', '', ''),
(2, 'mariamakiling', '$2y$10$/RwNwB4XPuJ4dwEWNbANYu/VQQOhf6nar94X4ehknb.aaBp99vQ7u', '2018-11-29 00:31:11', NULL, 'active', 'client', '', '', ''),
(3, 'fernando', '$2y$10$g0WKURBYU4K2bMW3Wq5jF.SbbxT2JkHLgqlOaG9jpMJ7HWAV2Ok9e', '2018-11-29 00:35:49', NULL, 'active', 'client', '', '', ''),
(4, 'sarahcruz', '$2y$10$pDStHl/lUnEWGMQUO7RBHuuuCydhJ.k1ZJcu9s5GHPsl6or3ocee.', '2018-11-29 00:45:21', NULL, 'active', 'client', '', '', ''),
(5, 'johnbautista', '$2y$10$/0gl9XdzJ9PYrdMGUqMjy.p3mLB4ZLpOC6sNw.oBkbaZj0gzASb7.', '2018-11-29 00:48:02', NULL, 'active', 'client', '', '', ''),
(6, 'maryjoy', '$2y$10$5Q01.XMpOXQHiS7OmhcHXe9uJh/HDORIW50riZJFuMtuZ7qrS4hga', '2018-11-29 00:50:41', NULL, 'active', 'client', '', '', ''),
(7, 'admin', '$2y$10$S9WHPCYnhpeqcOJCZm4X2OseUWzNIslxhwpZz2dpZvODZvAnZsjri', '2018-12-07 14:54:05', NULL, 'Active', 'admin', 'EAS', 'Master ', 'Admin'),
(8, 'manager', '$2y$10$S9WHPCYnhpeqcOJCZm4X2OseUWzNIslxhwpZz2dpZvODZvAnZsjri', '2018-12-10 17:17:14', NULL, 'Active', 'manager', 'EAS', 'Master', 'Manager'),
(9, 'assistant', '$2y$10$S9WHPCYnhpeqcOJCZm4X2OseUWzNIslxhwpZz2dpZvODZvAnZsjri', '2018-12-10 21:52:43', NULL, 'Active', 'assistant', 'EAS', 'Master', 'Assistant Manager');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personalId` int(11) NOT NULL,
  `plateNumber` varchar(255) NOT NULL,
  `bodyType` varchar(255) DEFAULT NULL,
  `yearModel` varchar(255) NOT NULL,
  `chasisNumber` varchar(255) DEFAULT NULL,
  `engineClassification` varchar(255) DEFAULT NULL,
  `numberOfCylinders` varchar(255) DEFAULT NULL,
  `typeOfDriveTrain` varchar(255) DEFAULT NULL,
  `make` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `engineNumber` varchar(255) DEFAULT NULL,
  `typeOfEngine` varchar(255) DEFAULT NULL,
  `engineDisplacement` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personalId2` (`personalId`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `personalId`, `plateNumber`, `bodyType`, `yearModel`, `chasisNumber`, `engineClassification`, `numberOfCylinders`, `typeOfDriveTrain`, `make`, `series`, `color`, `engineNumber`, `typeOfEngine`, `engineDisplacement`, `status`, `created`, `modified`) VALUES
(1, 1, 'ABC-123', NULL, '2010', NULL, NULL, NULL, NULL, 'Honda', 'Civic', 'Red', NULL, NULL, NULL, 'Active', '2018-11-29 07:21:20', '2019-01-14 14:32:44'),
(2, 5, 'EFG-354', NULL, '2017', NULL, NULL, NULL, NULL, 'Toyota', 'Corolla', 'Black', NULL, NULL, NULL, 'Active', '2018-11-29 07:21:20', NULL),
(3, 2, 'LJK-354', NULL, '2010', NULL, NULL, NULL, NULL, 'Toyota', 'Innova', 'Yellow', NULL, NULL, NULL, 'Active', '2018-11-29 07:24:44', NULL),
(4, 4, 'RTY-347', NULL, '2018', NULL, NULL, NULL, NULL, 'Honda', 'Jazz', 'Blue', NULL, NULL, NULL, 'Active', '2018-11-29 07:24:44', NULL),
(5, 1, 'GHB-965', NULL, '2012', NULL, NULL, NULL, NULL, 'Ford', 'Muztang', 'white/blue', NULL, NULL, NULL, 'Active', '2018-11-29 07:26:19', NULL),
(6, 1, 'FAT-888', '', '2016', '0', '', '0', '', 'Ford', 'Ranger', 'Orange', '0', '', '', 'Active', '2018-11-29 07:27:40', '2018-11-29 08:17:02'),
(7, 1, 'FTG-765', '', '2016', '0', '', '0', '', 'Toyota', 'Lancer', 'Orange', '0', '', '', 'Active', '2018-11-29 07:27:49', '2018-11-29 08:17:02'),
(8, 7, 'TTT-123', '', 'Model', '', '', '', '', '', 'adhas', 'askldas', '', '', '', 'Active', '2018-12-07 14:54:00', NULL),
(32, 31, 'asd 123', NULL, '12342', NULL, NULL, NULL, NULL, 'asdasgd', 'asdjhasdjk', 'asdasf', NULL, NULL, NULL, 'Active', '2018-12-10 17:17:14', NULL),
(33, 2, 'RGX-421', 'Cedan', '2012', '0', 'very nice', '25', 'tunnel', 'Honda', 'Impreza', 'Yellow', '123', 'cleriacal', 'velocity', 'Active', '2018-12-10 21:52:43', '2019-01-07 12:40:04'),
(34, 34, 'ISH666', '', '2001', '', '', '', '', '', 'Lancer', 'Black', '', '', '', 'Active', '2019-01-15 01:34:36', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`vehicleId`) REFERENCES `vehicles` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`);

--
-- Constraints for table `chargeinvoice`
--
ALTER TABLE `chargeinvoice`
  ADD CONSTRAINT `chargeinvoice_ibfk_1` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`),
  ADD CONSTRAINT `chargeinvoice_ibfk_2` FOREIGN KEY (`vehicleId`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `mobilenumbers`
--
ALTER TABLE `mobilenumbers`
  ADD CONSTRAINT `mobilenumbers_ibfk_1` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`vehicleId`) REFERENCES `vehicles` (`id`),
  ADD CONSTRAINT `owner_ibfk_2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`);

--
-- Constraints for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD CONSTRAINT `userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `personalId2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
