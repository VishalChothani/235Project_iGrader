-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2015 at 09:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`ID` int(11) NOT NULL,
  `CourseName` varchar(45) NOT NULL,
  `MHomework` int(11) DEFAULT '0',
  `MLabs` int(11) NOT NULL DEFAULT '0',
  `MProject` int(11) NOT NULL DEFAULT '0',
  `MPresentation` int(11) NOT NULL DEFAULT '0',
  `MMidterm` int(11) NOT NULL DEFAULT '0',
  `MFinal` int(11) NOT NULL DEFAULT '0',
  `PHomework` int(11) NOT NULL DEFAULT '0',
  `PLabs` int(11) NOT NULL DEFAULT '0',
  `PProject` int(11) NOT NULL DEFAULT '0',
  `PPresentation` int(11) NOT NULL DEFAULT '0',
  `PMidterm` int(11) NOT NULL DEFAULT '0',
  `PFinal` int(11) NOT NULL DEFAULT '0',
  `ARangeStart` int(11) NOT NULL DEFAULT '0',
  `ARangeEnd` int(11) NOT NULL DEFAULT '0',
  `BRangeStart` int(11) NOT NULL DEFAULT '0',
  `BRangeEnd` int(11) NOT NULL DEFAULT '0',
  `CRangeStart` int(11) NOT NULL DEFAULT '0',
  `CRangeEnd` int(11) NOT NULL DEFAULT '0',
  `DRangeStart` int(11) NOT NULL DEFAULT '0',
  `ERangeStart` int(11) NOT NULL DEFAULT '0',
  `FRangeStart` int(11) NOT NULL DEFAULT '0',
  `DRangeEnd` int(11) NOT NULL DEFAULT '0',
  `ERangeEnd` int(11) NOT NULL DEFAULT '0',
  `FRangeEnd` int(11) NOT NULL DEFAULT '0',
  `Description` varchar(1000) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `CourseName`, `MHomework`, `MLabs`, `MProject`, `MPresentation`, `MMidterm`, `MFinal`, `PHomework`, `PLabs`, `PProject`, `PPresentation`, `PMidterm`, `PFinal`, `ARangeStart`, `ARangeEnd`, `BRangeStart`, `BRangeEnd`, `CRangeStart`, `CRangeEnd`, `DRangeStart`, `ERangeStart`, `FRangeStart`, `DRangeEnd`, `ERangeEnd`, `FRangeEnd`, `Description`) VALUES
(1, 'CMPE-235', 500, 389, 304, 314, 219, 457, 28, 2, 25, 15, 25, 5, 90, 100, 80, 90, 70, 80, 60, 50, 0, 70, 60, 50, 'Study of wireless-based software systems in design and engineering, underlying networks, infrastructures and frameworks, wireless security, mobile user security & privacy (i.e. biometric security), emergent mobile programming platforms and technologies (such as RFID/Barcode/NFC), mobile commerce and service application systems. Prerequisite: CMPE 220 or CMPE 202 or instructor consent.'),
(2, 'CMPE-274', 313, 351, 136, 280, 149, 240, 15, 35, 20, 10, 10, 10, 95, 100, 83, 95, 74, 83, 60, 50, 0, 74, 60, 50, 'This course covers technologies that are key to delivering business intelligence to an enterprise. The goal of business intelligence is to analyze and mine business data to understand and improve business performance by transforming business data into information into knowledge. Prerequisite: CMPE 272 or instructor consent. ');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE IF NOT EXISTS `course_user` (
  `PCourseId` int(11) NOT NULL,
  `PUserId` int(11) NOT NULL,
  `Homework` int(11) NOT NULL,
  `Labs` int(11) NOT NULL,
  `Project` int(11) NOT NULL DEFAULT '0',
  `Presentation` int(11) NOT NULL DEFAULT '0',
  `Midterm` int(11) NOT NULL DEFAULT '0',
  `Final` int(11) NOT NULL DEFAULT '0',
  `Grade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`PCourseId`, `PUserId`, `Homework`, `Labs`, `Project`, `Presentation`, `Midterm`, `Final`, `Grade`) VALUES
(1, 1, 499, 340, 300, 233, 207, 430, 'A'),
(1, 2, 23, 32, 321, 222, 99, 99, 'A'),
(1, 3, 200, 200, 99, 99, 99, 99, 'F'),
(2, 4, 12, 23, 11, 0, 0, 0, NULL),
(2, 5, 499, 499, 199, 99, 99, 99, 'A'),
(2, 6, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(11) NOT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `EmailId` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Password`, `FirstName`, `LastName`, `EmailId`, `Phone`) VALUES
(1, 'password', 'Vishal', 'Chothani', 'vishal@gmail.com', '4088027478'),
(2, 'password', 'Amit', 'Borude', 'amit@gmail.com', '1234567890'),
(3, 'password', 'Sambu', 'Gopan', 'sambu@gmail.com', '6524521325'),
(4, 'password', 'Yajur', 'gohil', 'yajur@gmail.com', '4578541236'),
(5, 'password', 'Nirav', 'Shah', 'nirav@gmail.com', '3456127895'),
(6, 'password', 'Ruteek', 'Panchal', 'ruteek@gmail.com', '2541698735');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
 ADD KEY `PCourseId` (`PCourseId`), ADD KEY `PCourseId_2` (`PCourseId`), ADD KEY `PUserId` (`PUserId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
ADD CONSTRAINT `course_user_ibfk_1` FOREIGN KEY (`PCourseId`) REFERENCES `courses` (`ID`),
ADD CONSTRAINT `course_user_ibfk_2` FOREIGN KEY (`PUserId`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
