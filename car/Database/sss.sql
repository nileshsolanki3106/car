-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2020 at 03:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_table`
--

CREATE TABLE IF NOT EXISTS `admin_login_table` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login_table`
--

INSERT INTO `admin_login_table` (`id`, `name`, `password`) VALUES
(1, 'arzoo', 'anshu');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE IF NOT EXISTS `customer_table` (
  `cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`cust_id`, `name`, `age`, `gender`, `address`, `city`, `phone`, `email_id`, `pincode`, `password`) VALUES
(1, 'arzoo', 20, 'female', 'deesa', 'deesa', 9874563215, 'arzook@gmail.com', 385535, '123456'),
(13, 'ARZOO', 20, 'female', 'deesa', 'deesa', 7894561235, 'ARZOOK@gmail.com', 385001, 'arzoo'),
(14, 'ar', 25, 'male', 'deesa', 'deesa', 7894561592, 'ar1@gmail.com', 385535, '123'),
(15, 'mehul', 23, 'male', 'deesa', 'deesa', 7016888638, 'mehul@gmail.com', 385535, '12345'),
(16, 'priya', 19, 'female', 'malgadh', 'malgadh', 7016888638, 'priya@gmail.com', 358532, '12345'),
(18, 'asd', 25, 'male', 'deesa', 'deesa', 7894567895, 'asd@gmail.com', 385535, 'asd'),
(19, 'araju', 20, 'female', 'deesa', 'deesa', 7894569635, 'araju@gmail.com', 385535, 'araju'),
(20, 'tarun', 40, 'male', 'deesa', 'deesa', 8523697415, 'tarun@gmail.com', 385535, 'tarun');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE IF NOT EXISTS `feedback_table` (
  `f_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `feedback` varchar(30) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`f_id`, `name`, `email`, `mobile`, `subject`, `feedback`) VALUES
(7, 'test1', 'test1@gmail.com', 9876543210, 'helllo', 'this is test1'),
(8, 'test2', 'test222@gmail.com', 1234567890, 'test2', 'this is test2');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `path`) VALUES
(24, '026.jpg'),
(25, '033.png'),
(26, '034.jpg'),
(27, '027.png'),
(28, '031.png'),
(29, '036.jpg'),
(30, '043.png'),
(31, '044.png'),
(32, '042.png'),
(33, '1.png'),
(34, '028.jpg'),
(35, '029.jpg'),
(36, '032.jpg'),
(37, '037.jpg'),
(38, '030.jpg'),
(39, '038.png'),
(40, '039.png'),
(41, '040.jpg'),
(42, '041.jpg'),
(43, '045.png'),
(44, '4b3a6eca-97b3-4211-8c47-e360fa035023.jpg'),
(45, '046.jpg'),
(46, '049.jpg'),
(47, '050.jpg'),
(48, '051.jpg'),
(49, '052.jpg'),
(50, '054.jpg'),
(51, '57.jpg'),
(52, '60.jpg'),
(53, '59.jpg'),
(54, '61.jpg'),
(55, '64.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(50) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `supplier_product_id` int(30) NOT NULL,
  `quantity` int(4) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_date`, `customer_id`, `supplier_product_id`, `quantity`, `status`) VALUES
(14, '07-03-2020', 14, 28, 1, 1),
(15, '12-03-2020', 9, 29, 1, 1),
(16, '11-03-2020', 20, 43, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_table`
--

CREATE TABLE IF NOT EXISTS `stock_table` (
  `stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `supplier_product_id` int(30) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stock_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `supplier_product_table`
--

CREATE TABLE IF NOT EXISTS `supplier_product_table` (
  `supplier_product_id` int(30) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `product_rate` int(6) NOT NULL,
  `sales_rate` int(8) NOT NULL,
  `quantity` int(4) NOT NULL,
  `color` varchar(10) NOT NULL,
  `accessories` varchar(30) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`supplier_product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `supplier_product_table`
--

INSERT INTO `supplier_product_table` (`supplier_product_id`, `product_name`, `product_rate`, `sales_rate`, `quantity`, `color`, `accessories`, `file`) VALUES
(27, 'GEMINI LPG', 185000, 0, 0, '', '', '09.jpg'),
(28, 'ELITE PASSENGER', 160000, 0, 0, '', '', '08.jpg'),
(29, 'ELITE CARGO', 155000, 0, 0, '', '', '010.jpg'),
(30, 'GEM XL HD DIESEL', 255000, 0, 0, '', '', '012.jpg'),
(31, 'GEMINI PETROL', 180000, 0, 0, '', '', '013.jpg'),
(32, 'GEM DELIVERY VAN', 250000, 0, 0, '', '', '017.jpg'),
(33, 'SHAKTI DELIVERY VAN DIESEL', 250000, 0, 0, '', '', '018.jpg'),
(34, 'SHAKTI PICKUP VAN DIESEL', 230000, 0, 0, '', '', '019.jpg'),
(35, 'GEM CARGO CNG-Aqua 6F', 260000, 0, 0, '', '', '020.jpg'),
(36, 'SHAKTI PASSENGER DIESEL', 230000, 0, 0, '', '', '021.jpg'),
(37, 'GEM PAXX DIESEL ', 255000, 0, 0, '', '', '114.jpg'),
(38, 'SHAKTI PREMIUM DIESEL', 240000, 0, 0, '', '', '116.jpg'),
(39, 'GEMINI CARGO  PETROL', 240000, 0, 0, '', '', '117.jpg'),
(40, 'GEMINI CNG', 190000, 0, 0, '', '', '120.jpg'),
(41, 'GEM CARGO DISEL', 245000, 0, 0, '', '', '123.jpg'),
(42, 'GEM CARGO PETROL', 240000, 0, 0, '', '', '016.jpg'),
(43, 'GEM PAXX PETROL', 255000, 0, 0, '', '', '129.jpg'),
(44, 'GEM PAXX LPG', 250000, 0, 0, '', '', '127.jpg');
