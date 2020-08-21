-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2020 at 10:18 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meeting`
--

-- --------------------------------------------------------

--
-- Table structure for table `meetingtbl`
--

CREATE TABLE IF NOT EXISTS `meetingtbl` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Meetingid` varchar(100) NOT NULL,
  `Meetingpwd` varchar(100) NOT NULL,
  `Mdate` varchar(100) NOT NULL,
  `Mtime` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `meetingtbl`
--

INSERT INTO `meetingtbl` (`id`, `Meetingid`, `Meetingpwd`, `Mdate`, `Mtime`) VALUES
(2, '57774', '688', '12/8/2020', '11.30AM');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Tid` int(4) NOT NULL,
  `Proname` varchar(100) NOT NULL,
  `Taskname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Tstatus` varchar(100) NOT NULL,
  `Sdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `Tid`, `Proname`, `Taskname`, `Uid`, `Tstatus`, `Sdate`) VALUES
(2, 2, 'Billing', 'print out', 'jeeva', 'its ongoing', '11/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE IF NOT EXISTS `tab_user` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`fname`, `Uid`, `password`, `email_id`, `address`, `mobile`) VALUES
('nandakumar', 'nanda', 'nanda', 'nandapoy@gmail.com', 'ds', '9629595205'),
('Ravikumar', 'ravi', 'ravi', 'ravimca37@gmail.com', 'Coimbatore', '9003502338'),
('jeeva', 'jeeva', 'jeeva', 'Jeeva@gmail.com', 'Coimbatore', '9003502338');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Proname` varchar(100) NOT NULL,
  `Taskname` varchar(100) NOT NULL,
  `Edate` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `Proname`, `Taskname`, `Edate`, `Uid`) VALUES
(3, 'pos', 'Sales', '2020-08-27', 'nanda');

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE IF NOT EXISTS `useraccess` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `logout` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`id`, `Uid`, `login`, `logout`) VALUES
(7, 'nanda', '12-08-20 03:42:21:pm', '12-08-20 03:42:40:pm');
