-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 06:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corlate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_user`
--

CREATE TABLE IF NOT EXISTS `ajax_user` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `ajax_user`
--

INSERT INTO `ajax_user` (`id`, `name`, `uname`, `email`, `phone`, `password`) VALUES
(1, 'ranjan', 'ranjan123', 'a@gmail.com', '1234', 'qwe'),
(2, 'anjan', 'anjan123', 'ab@gmail.com', '123456', 'qwer'),
(3, 'qerwet', 'ranjan', 'anjandey.math@rediffmail.com', '234', 'qwe'),
(4, 'ranjan ', 'add', 'anjandey.math@rediffmail.com', '23', 'q'),
(75, 'ranjanbcjg', 'uyk', 'aydegmjr@gmail.com', '6545', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `name` varchar(34) NOT NULL,
  `city` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`name`, `city`) VALUES
('sd', 'sffd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `uname`, `email`, `phone`, `password`, `cpassword`, `image`) VALUES
(1, 'ranjan dey', 'raj123', 'rhmg@gmail.com', '801324948', 'qwe', 'raj123', 'IMG_0009.jpg'),
(2, 'Anjan De', 'anjan123', '8uhjy@gmail.com', '7278287', 'anjan1234', 'anjan1234', 'IMG_20160102_125423.jpg'),
(3, 'pabitra', 'pabitra123', 'gkldr@gmail.com', '45655', 'qwe', 'pabitra1234', ''),
(4, 'raja das', 'qwet9701', 'sga@gmail.com', '235345', 'qwe', 'qwe123', ''),
(5, 'Ranjan Dey', 'ranjan1234', '9999ranjanday@gmail.com', '8013272369', 'qwe', 'raj1234', 'hrithik_roshan_dance-wide.jpg'),
(6, 'qwe', 'qwe', 'a@gmail.com', '7856757', 'qwe', 'qwe', ''),
(7, 'qwesd', 'qwer', 'ert@gmail.com', '978907', 'qwe', 'qwe', ''),
(8, 'qwesdef', 'qwerw', 't@gmail.com', '9786737', 'qwe', 'qwe', ''),
(9, 'ret', 'ewr', 'uihdcrt@gmail.com', '96986', 'qwe', 'qwe', ''),
(10, 'retyd gsc', 'rwe', 'iuhdsdcrt@gmail.com', '8976978', 'qwe', 'qwe', ''),
(11, 'ranjan', 'hgd123', 'adgtr@gmail.com', '837689989', 'qwe', 'qwe', ''),
(12, 'ranjan', 'hgd12ft', 'adgtr@gmail.com', '837689989', 'qwe', 'qwe', ''),
(13, 'ranjan', 'hgd12kj', 'adgtr@gmail.com', '837689989', 'qwe', 'qwe', ''),
(14, 'ranjan', 'hgd12kijf', 'adgtr@gmail.com', '837689989', 'qwe', 'qwe', ''),
(15, 'ranjan', 'hgd567', 'adgtr@gmail.com', '837689989', 'qwe', 'qwe', ''),
(16, 'vdhdd', 'ytfyt6465', 'a@gmail.com', '766575755', 'qwe', 'qwe', ''),
(17, 'hjgdsf', 'skfduy42', 'a@gmail.com', '657756', 'qwe', 'qwe', ''),
(18, 'hgcg', 'vhvhgj6776', 'a@gmail.com', '7767', 'qwe', 'qwe', ''),
(19, 'gfc h', ' gfc56hg', 'a@gmail.com', '6546564', 'qwe', 'qwe', ''),
(20, 'hg cgf', 'gfdfdtyyt656', 'a@gmail.com', '6545465', 'qwe', 'qwe', ''),
(21, ' ngf', 'cytc656', 'a@gmail.com', '65665', 'qwe', 'qwe', ''),
(22, ' hcgf ', 'ngv6456', 'a@gmail.com', '6546546', 'qwe', 'qwe', ''),
(23, 'ngfdg', '665gfdh', 'a@gmail.com', '654645', 'qwe', 'qwe', ''),
(24, 'b fgdx', 'cgrh6546', 'a@gmail.com', '54645', 'qwe', 'qwe', ''),
(25, 'chtr', 'hctrcd654', 'a@gmail.com', '65465', 'qwe', 'qwe', ''),
(26, 'vdhdd', 'ytfyt6465', 'a@gmail.com', '766575755', 'qwe', 'qwe', ''),
(27, 'hjgdsf', 'skfduy42', 'a@gmail.com', '657756', 'qwe', 'qwe', ''),
(28, 'hgcg', 'vhvhgj6776', 'a@gmail.com', '7767', 'qwe', 'qwe', ''),
(29, 'gfc h', ' gfc56hg', 'a@gmail.com', '6546564', 'qwe', 'qwe', ''),
(30, 'hg cgf', 'gfdfdtyyt656', 'a@gmail.com', '6545465', 'qwe', 'qwe', ''),
(31, ' ngf', 'cytc656', 'a@gmail.com', '65665', 'qwe', 'qwe', ''),
(32, ' hcgf ', 'ngv6456', 'a@gmail.com', '6546546', 'qwe', 'qwe', ''),
(33, 'ngfdg', '665gfdh', 'ag@gmail.com', '654645', 'qwe', 'qwe', ''),
(34, 'b fgdx', 'cgrh6546', 'a@gmail.com', '54645', 'qwe', 'qwe', ''),
(35, 'wruy', 'utftg6776', 'x@gmail.com', '7877878', 'qwe', 'wer', ''),
(36, 'raj123', 'yt', 'adgtr@gmail.com', '9876', 'qwe', 'qwe', ''),
(37, 'vju', 'hgkjy7868', 'a@h', '785', 'qwe', 'qwe', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `companyid` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(255) NOT NULL,
  `companyimage` varchar(255) NOT NULL,
  PRIMARY KEY (`companyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`companyid`, `companyname`, `companyimage`) VALUES
(6, 'ranjan dey', 'background.jpg'),
(7, 'anjan dey', 'default-user.png'),
(8, 'Pabitra Jana', 'a.png'),
(9, 'Pramit Bose', 'accordion1.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
