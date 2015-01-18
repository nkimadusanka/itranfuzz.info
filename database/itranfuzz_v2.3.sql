-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 02:36 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itranfuzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
  `brId` int(11) NOT NULL,
  `bType` varchar(2) NOT NULL,
  `eDate` date NOT NULL,
  `eTime` time NOT NULL,
  `amount` varchar(45) NOT NULL,
  PRIMARY KEY (`brId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE IF NOT EXISTS `center` (
  `cId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Center identification number\n',
  `province` varchar(5) NOT NULL COMMENT 'Province of the\nCenter',
  `address1` varchar(45) NOT NULL COMMENT 'Address of the center\n',
  `address2` varchar(45) NOT NULL COMMENT 'Address 2\nWhich is actually\nCity of the\nCenter\n',
  `phone` int(10) NOT NULL,
  `lLongitude` decimal(11,8) NOT NULL COMMENT 'Logitude',
  `lLatitude` decimal(11,8) NOT NULL COMMENT 'Latitude\n',
  `type` char(1) NOT NULL DEFAULT 'c' COMMENT 'Type of the\nCenter\n''C'' - collecting\n''s''- store\n',
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`cId`, `province`, `address1`, `address2`, `phone`, `lLongitude`, `lLatitude`, `type`) VALUES
(1, 'wp', 'test', 'Kurunagala', 123456789, 1.90874000, 1.67553000, 'c'),
(2, 'wp', 'Colombo', 'Kelaiya', 123456789, 0.00000000, 0.00000000, 'c'),
(3, 'wp', 'Colombo', 'Kelaiya', 123456789, 0.00000000, 0.00000000, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `donation_method`
--

CREATE TABLE IF NOT EXISTS `donation_method` (
  `dmId` int(11) NOT NULL,
  `description` varchar(45) NOT NULL,
  `minAge` int(11) DEFAULT NULL,
  `maxAge` int(11) DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `dParticipating` int(11) NOT NULL,
  `maxAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`dmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `dId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `photo` varchar(45) DEFAULT 'defualt_profile_20.jpg',
  `phone` int(10) DEFAULT NULL,
  `address1` varchar(45) NOT NULL,
  `address2` varchar(45) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `illnessTest` tinyint(1) NOT NULL,
  `lLongitude` decimal(11,8) DEFAULT NULL,
  `lLatitude` decimal(11,8) DEFAULT NULL,
  `bType` varchar(2) DEFAULT NULL,
  `dState` char(1) NOT NULL,
  `center_cId` int(11) NOT NULL,
  PRIMARY KEY (`dId`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_donor_center1` (`center_cId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eId` int(11) NOT NULL COMMENT 'identification\nnumber of employee\n',
  `email` varchar(45) NOT NULL COMMENT 'email of the employee\n',
  `password` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL COMMENT 'First name\nof the employee\n',
  `lname` varchar(45) NOT NULL COMMENT 'last name of the employee\n',
  `nic` varchar(10) NOT NULL,
  `gender` char(1) NOT NULL COMMENT 'gender of the\nemployee\n',
  `phone` int(10) NOT NULL COMMENT 'phone number\n',
  `address1` varchar(45) NOT NULL COMMENT 'address1',
  `address2` varchar(45) NOT NULL COMMENT 'address2\n',
  `type` varchar(5) NOT NULL DEFAULT 'cs' COMMENT 'type of the employee\n',
  `photo` varchar(45) DEFAULT 'defualt_profile_20.jpg' COMMENT 'photo of the employee\n',
  `center_cId` int(11) NOT NULL,
  PRIMARY KEY (`eId`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_employee_center` (`center_cId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eId`, `email`, `password`, `fname`, `lname`, `nic`, `gender`, `phone`, `address1`, `address2`, `type`, `photo`, `center_cId`) VALUES
(2, 'addstaff@gmail.com', '19901227abcd', 'Isuru', 'Madusanka', '12456789V', 'm', 771155789, '176/B,', 'Pattiwila,Gonawala', 'as', 'defualt_profile_20.jpg', 2),
(123, 'admin@gmail.com', '19901227abcd', 'Isuru', 'Madusanka', '123456789', 'm', 12345678, 'Pattiwila,', 'Gonlawala', 'a', 'defualt_profile_20.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `evId` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  `evType` char(1) NOT NULL,
  `center_cId` int(11) NOT NULL,
  `employee_eId` int(11) NOT NULL,
  PRIMARY KEY (`evId`),
  KEY `fk_event_center1` (`center_cId`),
  KEY `fk_event_employee1` (`employee_eId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`evId`, `description`, `evType`, `center_cId`, `employee_eId`) VALUES
(1, 'fdfdjf', 'm', 2, 2),
(2, 'fjdslfjd', 'm', 2, 2),
(3, 'fjdslfjd', 'm', 2, 2),
(4, 'fjdslfjd', 'm', 2, 2),
(5, 'fjdslfjd', 'm', 2, 2),
(6, 'fjdslfjd', 'm', 2, 2),
(7, 'fjdslfjd', 'm', 2, 2),
(8, 'fjdslfjd', 'm', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_session`
--

CREATE TABLE IF NOT EXISTS `mobile_session` (
  `mseId` int(11) NOT NULL,
  `orgName` varchar(45) DEFAULT NULL,
  `address1` varchar(45) NOT NULL,
  `address2` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `lLongitude` decimal(11,8) NOT NULL,
  `lLatitude` decimal(11,8) NOT NULL,
  `eParticipation` int(11) NOT NULL,
  PRIMARY KEY (`mseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_session`
--

INSERT INTO `mobile_session` (`mseId`, `orgName`, `address1`, `address2`, `phone`, `date`, `stime`, `etime`, `lLongitude`, `lLatitude`, `eParticipation`) VALUES
(0, 'fjdslfjdfjdslfjd', 'fjdslfjd', 'fjdslfjd', '465465', '2014-11-13', '14:12:00', '12:59:00', -83.66028412, -20.21793365, 0),
(8, 'fjdslfjdfjdslfjd', 'fjdslfjd', 'fjdslfjd', '465465', '2014-11-13', '14:12:00', '12:59:00', -83.67452264, -20.45109272, 0);

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `donor_dId` int(11) NOT NULL,
  `event_evId` int(11) NOT NULL,
  `donation_method_dmId` int(11) NOT NULL,
  PRIMARY KEY (`donor_dId`,`event_evId`),
  KEY `fk_donor_has_event_event1` (`event_evId`),
  KEY `fk_donor_has_event_donor1` (`donor_dId`),
  KEY `fk_participate_donation_method1` (`donation_method_dmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_donor_center1` FOREIGN KEY (`center_cId`) REFERENCES `center` (`cId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_center` FOREIGN KEY (`center_cId`) REFERENCES `center` (`cId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_center1` FOREIGN KEY (`center_cId`) REFERENCES `center` (`cId`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_employee1` FOREIGN KEY (`employee_eId`) REFERENCES `employee` (`eId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `fk_donor_has_event_donor1` FOREIGN KEY (`donor_dId`) REFERENCES `donor` (`dId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donor_has_event_event1` FOREIGN KEY (`event_evId`) REFERENCES `event` (`evId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participate_donation_method1` FOREIGN KEY (`donation_method_dmId`) REFERENCES `donation_method` (`dmId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
