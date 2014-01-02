-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2014 at 12:21 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `date1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `time_slot` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`, `date1`, `time_slot`) VALUES
(20, 'Maitri Dutta Banik', 'm@gmail.com', '', '9877655435', '2013-12-29', '10:30pm TO 12:30am'),
(19, 'RITA ROY', 'roy.rita01@gmail.com', 'Chakdaha', '9432125529', '2013-12-23', '10:00am TO 12:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `cat_id`, `cat_name`, `sub_cat_name`, `file_name`, `picture`) VALUES
(4, 1, 'Dekstop', 'My-Desktop', 'New folder', 'folder-my-pictures-icon.png'),
(5, 1, 'Desktop', 'My-Desktop', 'Personal', 'folder-my-pictures-icon.png'),
(6, 1, 'Desktop', 'My-Desktop', 'Movies', 'folder-my-pictures-icon.png'),
(7, 1, 'Desktop', 'My-Desktop', 'Video Songs', 'folder-my-pictures-icon.png'),
(8, 1, 'Desktop', 'My-Desktop', 'Desktop', 'folder-my-pictures-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(20, '2013-12-29', 20),
(19, '2013-12-23', 19);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(20, 1, 1, 250),
(19, 1, 1, 250),
(19, 2, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'ICECREAM', 'Ice with cream', 250, 'images/a.jpg'),
(2, 'Chilli chicken', 'Chilli chicken', 100, 'images/b.jpg'),
(3, 'cook2', 'cook2', 150, 'images/cook2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hints` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_name`, `password`, `hints`) VALUES
(1, 'ritaroy', 'ritaroy', 'my name'),
(2, 'yyy', 'yyy', 'yyy'),
(3, 'yyy', 'yyy', 'yyy'),
(4, 'yyy', 'yyy', 'yyy'),
(5, 'pppp', 'ppp', 'ppp'),
(6, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_slot` varchar(255) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_slot`) VALUES
(1, '10:00am TO 12:00pm'),
(2, '12:30pm TO 02:30pm'),
(3, '03:00pm TO 05:00pm'),
(4, '05:30pm TO 07:30pm'),
(5, '08:00pm TO 10:00pm'),
(6, '10:30pm TO 12:30am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
