-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2014 at 06:17 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `brId` int(11) NOT NULL AUTO_INCREMENT,
  `bType` varchar(2) NOT NULL,
  `eDate` date NOT NULL,
  `eTime` time NOT NULL,
  `amount` varchar(45) NOT NULL,
  PRIMARY KEY (`brId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`cId`, `province`, `address1`, `address2`, `phone`, `lLongitude`, `lLatitude`, `type`) VALUES
(1, 'wp', 'Kelaniya', 'Uthura', 12457, 1.25480000, 1.25480000, 'c'),
(2, 'a+', 'ghghg', 'ghgh', 0, 79.99441892, 7.03257937, 'c'),
(3, 'a+', '', '', 0, 0.00000000, 0.00000000, 'c'),
(4, '', '', '', 0, 0.00000000, 0.00000000, ''),
(5, 'a+', 'dfdfdf', 'klkl', 0, 0.00000000, 0.00000000, 's'),
(6, 'a+', 'dfdfdf', 'dfdfdf', 0, 0.00000000, 0.00000000, 'c'),
(7, 'a+', 'dfdfdf', 'admin@gmail.com', 0, 0.00000000, 0.00000000, 'c'),
(8, '', '', '', 0, 0.00000000, 0.00000000, ''),
(9, '', '', '', 0, 0.00000000, 0.00000000, ''),
(10, '', '', '', 0, 0.00000000, 0.00000000, ''),
(11, '', '', '', 0, 0.00000000, 0.00000000, ''),
(12, 'a+', 'dfdfdf', 'admin@gmail.com', 0, 79.92417522, 6.97477779, 'c'),
(13, 'wp', 'Kelaniya', 'Uthura', 12457, 1.25480000, 1.25480000, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `donation_method`
--

CREATE TABLE IF NOT EXISTS `donation_method` (
  `dmId` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  `minAge` int(11) DEFAULT NULL,
  `maxAge` int(11) DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `dParticipating` int(11) NOT NULL,
  `maxAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`dmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`dId`, `email`, `password`, `nic`, `fname`, `lname`, `photo`, `phone`, `address1`, `address2`, `gender`, `dob`, `illnessTest`, `lLongitude`, `lLatitude`, `bType`, `dState`, `center_cId`) VALUES
(1, 'a@gmail.com', '123', '123456789V', 'Isuru', 'Madusanka', 'defualt_profile_20.jpg', 2147483647, '176/B,Pattiwila', 'Gonawala', 'm', '2014-09-18', 1, 0.00000000, 0.00000000, 'a', 'p', 3),
(2, '', '', '', '', '', 'defualt_profile_20.jpg', 2147483647, '', '', 'm', '0000-00-00', 1, 0.00000000, 0.00000000, '', 'p', 7);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identification\nnumber of employee\n',
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eId`, `email`, `password`, `fname`, `lname`, `nic`, `gender`, `phone`, `address1`, `address2`, `type`, `photo`, `center_cId`) VALUES
(1, 'admin@gmail.com', '123', 'Isuru', 'Madusanka', '123456789V', 'm', 770190519, '176/B, Pattiwila', 'Gonawala,', 'a', 'defualt_profile_20.jpg', 1),
(2, 'nkimadusanka@gmail.com', '123', 'dfdfdf', 'dfdfd', '123456v', 'f', 0, 'dfdf', 'admin@gmail.com', 'a', 'defualt_profile_20.jpg', 9);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_session`
--

CREATE TABLE IF NOT EXISTS `mobile_session` (
  `mseId` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `donor_dId` int(11) NOT NULL AUTO_INCREMENT,
  `event_evId` int(11) NOT NULL,
  `donation_method_dmId` int(11) NOT NULL,
  PRIMARY KEY (`donor_dId`,`event_evId`),
  KEY `fk_donor_has_event_event1` (`event_evId`),
  KEY `fk_donor_has_event_donor1` (`donor_dId`),
  KEY `fk_participate_donation_method1` (`donation_method_dmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_donor_center1` FOREIGN KEY (`center_cId`) REFERENCES `center` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
