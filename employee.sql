-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 08:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attId` int(11) NOT NULL AUTO_INCREMENT,
  `attEmpID` varchar(255) NOT NULL DEFAULT '',
  `attDate` date NOT NULL,
  `attonTime` varchar(255) NOT NULL DEFAULT '',
  `attoffTime` varchar(255) NOT NULL DEFAULT '',
  `created_date` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`attId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attId`, `attEmpID`, `attDate`, `attonTime`, `attoffTime`, `created_date`, `status`) VALUES
(1, '3', '2017-08-22', '3:15 PM', '6:15 PM', '2017-08-27 10:09:24', '0'),
(2, '4', '2017-08-28', '8:45 PM', '10:45 PM', '2017-08-28 17:13:36', '0'),
(3, '3', '2017-08-04', '10:15 PM', '12:15 AM', '2017-08-28 17:13:55', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `empID` int(11) NOT NULL AUTO_INCREMENT,
  `empFirstName` varchar(255) NOT NULL DEFAULT '',
  `empLastName` varchar(255) NOT NULL DEFAULT '',
  `empNO` varchar(255) NOT NULL DEFAULT '',
  `empemail` varchar(255) NOT NULL DEFAULT '',
  `empMobile` varchar(255) NOT NULL DEFAULT '',
  `empbdate` date NOT NULL,
  `empaddress` varchar(255) NOT NULL DEFAULT '',
  `empshifID_FK` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`empID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`empID`, `empFirstName`, `empLastName`, `empNO`, `empemail`, `empMobile`, `empbdate`, `empaddress`, `empshifID_FK`, `created_date`, `status`) VALUES
(1, 'hardik', 'dayani', '123456', 'hardikdayani1@gmail.com', '9979133538', '2017-08-28', 'surat gujarat india', '', '2017-08-26 18:30:19', '0'),
(2, 'vipul', 'vipul', '123456789', 'vipul@gmail.com', '99791335438', '2017-09-26', 'surat gujarat indai', '', '2017-08-26 19:00:46', '0'),
(3, 'Apple', 'Developer', '132456789', 'apple@gmail.com', '9979133538', '2017-08-27', 'surat gujarat india', '', '2017-08-27 09:55:50', '0'),
(4, 'john', 'john', '12525441', 'john@gmail.com', '9979133538', '2017-08-28', 'surat, gujarat, india', '', '2017-08-28 17:03:52', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `holID` int(11) NOT NULL AUTO_INCREMENT,
  `holName` varchar(255) NOT NULL DEFAULT '',
  `holDate` date NOT NULL,
  `holDescription` text NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`holID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_holiday`
--

INSERT INTO `tbl_holiday` (`holID`, `holName`, `holDate`, `holDescription`, `created_date`, `status`) VALUES
(1, 'Diwali', '2017-08-27', 'not avaialble', '2017-08-27 10:10:00', '0'),
(2, 'Utarayan', '2017-08-30', 'not', '2017-08-28 17:14:28', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `salID` int(11) NOT NULL AUTO_INCREMENT,
  `salEmpID` varchar(255) NOT NULL DEFAULT '',
  `salBeginDate` date NOT NULL,
  `salBasicSalary` varchar(255) NOT NULL DEFAULT '',
  `salGrade` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`salID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salID`, `salEmpID`, `salBeginDate`, `salBasicSalary`, `salGrade`, `created_date`, `status`) VALUES
(1, '1', '2017-08-01', '2000', '5000', '2017-08-27 10:09:44', '0'),
(2, '4', '2017-08-30', '2000', '1000', '2017-08-28 17:14:13', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift_allocation`
--

CREATE TABLE IF NOT EXISTS `tbl_shift_allocation` (
  `aloID` int(11) NOT NULL AUTO_INCREMENT,
  `aloEmpID` varchar(255) NOT NULL DEFAULT '',
  `aloDay` date NOT NULL,
  `aloTimeIn` varchar(255) NOT NULL DEFAULT '',
  `aloTimeOut` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aloID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_shift_allocation`
--

INSERT INTO `tbl_shift_allocation` (`aloID`, `aloEmpID`, `aloDay`, `aloTimeIn`, `aloTimeOut`, `created_date`, `status`) VALUES
(1, '2', '2017-08-02', '1:45 PM', '4:00 PM', '2017-08-27 10:05:02', '0'),
(2, '3', '2017-08-27', '1:45 PM', '4:45 PM', '2017-08-27 10:07:44', '0'),
(3, '1', '2017-08-30', '8:45 PM', '10:45 PM', '2017-08-28 17:04:51', '0'),
(4, '4', '2017-08-26', '8:45 PM', '12:00 AM', '2017-08-28 17:05:13', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_shift_attendance` (
  `aloID` int(11) NOT NULL AUTO_INCREMENT,
  `aloEmpID` varchar(255) NOT NULL DEFAULT '',
  `aloDay` date NOT NULL,
  `aloTimeIn` varchar(255) NOT NULL DEFAULT '',
  `aloTimeOut` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aloID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_shift_attendance`
--

INSERT INTO `tbl_shift_attendance` (`aloID`, `aloEmpID`, `aloDay`, `aloTimeIn`, `aloTimeOut`, `created_date`, `status`) VALUES
(1, '1', '2017-08-01', '1:45 PM', '12:15 AM', '2017-08-27 10:08:16', '0'),
(2, '3', '2017-08-27', '1:45 PM', '3:15 PM', '2017-08-27 10:08:42', '0'),
(3, '4', '2017-08-28', '8:45 PM', '10:30 PM', '2017-08-28 17:12:07', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `username`, `phone`, `password`, `is_admin`, `date`, `status`) VALUES
(1, 'hardik', 'admin@bladephp.co', 'hardik', '9979133538', '123456', '1', '2017-04-29 03:07:07', '0'),
(2, 'hardik', 'diamond@gmail.com', 'cray', '9979133538', '123456', '0', '2017-04-29 13:41:07', '1'),
(3, 'mitul', 'mitul@gmail.com', 'mitul', '9979133538', '123456', '0', '2017-04-29 14:10:53', '0'),
(4, 'hardik', 'princediamond@gmail.com', 'crayon', '9979133538', '123456', '0', '2017-04-29 14:11:40', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
