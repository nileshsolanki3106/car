-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2013 at 04:12 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `paymeny_bank` varchar(50) NOT NULL,
  `bank_account_no` varchar(30) NOT NULL,
  `atm_no` varchar(30) NOT NULL,
  `atm_pin` int(6) NOT NULL,
  `amount` varchar(5) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `cust_id`, `p_id`, `date`, `paymeny_bank`, `bank_account_no`, `atm_no`, `atm_pin`, `amount`) VALUES
(1, 2, 13, '18-02-2013', 'hdfc', '123456', '123456', 132, '10400'),
(3, 8, 1, '18-03-2013', 'dfg', 'fgfd', 'fgfd', 0, '555'),
(4, 10, 21, '10-03-2013', 'icics', 'dddd', '55555', 555555, '333'),
(5, 8, 1, '18-03-2013', 'dena bank', 'g-145451245', '457845458', 65879, '555'),
(6, 8, 21, '04-03-2013', 'idbi', '35435', '4543543', 4564564, '333'),
(8, 12, 1, '20-03-2013', 'bvnvb', 'n76876', 'b786786', 88777, '7777'),
(9, 14, 1, '05-03-2013', 'dena bank', '564', '6456', 45654, '1000'),
(10, 14, 4, '13-03-2013', 'dena bank', '35435', '4543543', 4564564, '1000'),
(11, 14, 2, '12-03-2013', 'gfhgf', 'gfh', 'gh', 0, '444'),
(12, 15, 24, '13-03-2013', 'dg', 'fdg', 'fgfd', 0, '500'),
(13, 16, 24, '12-03-2013', 'gh', 'hgfh', 'fghf', 0, '500'),
(14, 16, 24, '12-03-2013', 'gh', 'hgfh', 'fghf', 0, '500'),
(15, 16, 22, '21-03-2013', 'hk', 'hkl', 'hjk', 0, '444'),
(17, 2, 5, '14-03-2013', 'gnjg', 'hgjghj', 'hgjhg', 0, '1100'),
(18, 26, 5, '13-03-2013', 'iu', 'ioo', '46554', 54656, '1100'),
(19, 29, 35, '05-03-2013', 'gfhfg', 'fghgf', 'gfhgf', 0, '3000'),
(20, 29, 28, '13-03-2013', 'jhkjh', 'jhkhj', 'jhkjh', 0, '1500');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` double NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `age`, `address`, `phone`, `email_id`, `password`, `gender`) VALUES
(29, 'prakash', 22, 'deesa', 9724822468, 'prakash@gmail.com', '123456789', 'male'),
(30, 'sujan', 22, 'deesa', 9987987678, 'sujan@gmail.com', '123456789', 'male'),
(31, 'kismat', 33, 'deesa', 99854578456, 'kismat@gmail.com', '123456789', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'vasant', 'vasant.infotrex@gmail.com', '9274342432', 'this a test subject', 'this a test message of feedback'),
(2, 'alpesh', 'alpesh@gmail.com', '9537621320', 'this a test subject', 'this a test mesage for alpesh feedback'),
(3, 'vishal', 'vishal@gmail.com', '9067200439', 'this a test subject', 'this is test message for vishal'),
(4, 'bharat', 'bharatpr20@yahoo.com', '9033836102', 'help', 'this is text msg for  yamaha'),
(33, '', '', '', '', ''),
(30, 'mala', 'mittal@gmail.com', '8511221052', 'saree', 'good'),
(7, 'suresh', 'sureshruhatar@gmail.com', '8511221052', 'ftrdtr', 'jhbjhbj'),
(32, 'ytutyu', 'tyutyu', 'utyuty', 'tyutyututyu', 'tutyyyyyyyyyuyuy'),
(34, 'ppppppppp', 'ppppp', 'pppppppp', 'ppppppp', 'pppppppppp');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `path`) VALUES
(32, '1 (9).jpeg'),
(31, '1.jpeg'),
(30, '1 (8).jpeg'),
(29, '1 (14).jpeg'),
(28, '1 (20).jpeg'),
(27, '1 (3).jpeg'),
(26, '1 (12).jpeg'),
(25, '1 (10).jpeg'),
(24, '1 (10).jpeg'),
(23, '1 (3).jpeg'),
(22, '1 (19).jpeg'),
(21, '1 (8).jpeg'),
(20, '1 (20).jpeg'),
(19, '1 (7).jpeg'),
(33, '1 (5).jpeg'),
(34, '1 (15).jpeg'),
(35, '1 (11).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(5) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `pprice` int(5) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pdesc` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `pname`, `pprice`, `pimage`, `pdesc`) VALUES
(41, 'mrf', 2000, 'bat (8).jpeg', 'long'),
(39, 'guru', 1500, 'images_037.jpeg', 'good'),
(29, 'mrff', 1200, 'bat.jpeg', 'good'),
(30, 'dhoni', 1000, 'bat (15).jpeg', 'long bat'),
(42, 'mrf', 1500, 'images_654.jpeg', 'gana'),
(36, 'alex', 1000, 'images_065.jpeg', 'good'),
(35, 'star', 3000, 'images_084.jpeg', 'good'),
(40, 'saniya', 500, 'images_654.jpeg', 'hig'),
(37, 'sport', 1500, 'bat (13).jpeg', 'good'),
(34, 'rencho', 2000, 'images_021.jpeg', 'good'),
(28, 'mrf', 1500, 'bat (8).jpeg', 'hig quality');
