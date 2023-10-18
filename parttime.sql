-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 08:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parttime`
--

-- --------------------------------------------------------

--
-- Table structure for table `addjob`
--

CREATE TABLE IF NOT EXISTS `addjob` (
`id` int(10) NOT NULL,
  `jobname` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addjob`
--

INSERT INTO `addjob` (`id`, `jobname`, `location`, `salary`, `time`, `contactno`, `address`) VALUES
(5, 'developing', 'pollachi', '500', '7.00am-10.00am', 9842936248, 'coimbatore'),
(6, 'developer', 'pollachi', '500', '7.00am-10.00am', 9842936248, 'nehru street, vengat');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `address` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `contactno`, `qualification`, `department`, `address`, `email`) VALUES
(1, 'keerthi', 9842936248, '', '', 'udumalpet', 'sugu@gmail.com'),
(3, 'arun', 9842936248, '', '', 'coimbatore', 'arun@gmail.com'),
(4, 'keerthi', 9842936248, 'bsc', 'cse', 'coimbatore', 'kk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `fullname`, `answer`) VALUES
(1, 'dharshini', 'shall i joined ur company i completed engineering passed out year is 2020');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`id` int(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `position` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `position`, `address`, `contactno`, `city`, `gender`, `email`, `password`) VALUES
(5, 'kiruba', 'human resourcer', 'pollachi', 9842936248, 'cbe', 'female', 'kiruba@gmail.com', '123'),
(6, 'suji', 'developer', 'coimbatore', 9750820886, 'tiruchi', 'female', 'suji@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` int(50) NOT NULL,
  `employeename` varchar(100) NOT NULL,
  `chat` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `employeename`, `chat`) VALUES
(13, 'keerthana', 'well'),
(14, 'uruthi', 'uruthi'),
(15, 'suganya', 'software developer'),
(16, 'thrisha', 'yes u will joined tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE IF NOT EXISTS `studentregistration` (
`sid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`sid`, `name`, `address`, `contactno`, `email`, `password`) VALUES
(2, 'arun', 'pollachi', 2147483647, 'arun@gmail.com', '123'),
(5, 'keerthi', 'pollachi', 9842936248, 'sam@gmail.com', '123'),
(7, 'kiruba', 'udumalai', 9750820886, 'kiruba@gmail.com', '123'),
(8, 'keerthi', 'pollachi', 9750588286, 'keerthi@gmail.com', '123'),
(9, 'keerthu', 'pollachi', 9842936248, 'kk@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addjob`
--
ALTER TABLE `addjob`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
 ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addjob`
--
ALTER TABLE `addjob`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `studentregistration`
--
ALTER TABLE `studentregistration`
MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
