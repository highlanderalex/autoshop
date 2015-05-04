-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2015 at 02:49 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user4`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_auto`
--

CREATE TABLE IF NOT EXISTS `a_auto` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `idCat` smallint(3) NOT NULL,
  `model` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `year` varchar(5) NOT NULL,
  `color` varchar(15) NOT NULL,
  `speed` int(4) NOT NULL,
  `volume` int(4) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `a_auto`
--

INSERT INTO `a_auto` (`id`, `idCat`, `model`, `description`, `year`, `color`, `speed`, `volume`, `price`, `image`) VALUES
(1, 1, '520', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2004', 'white', 210, 2500, 25000.00, '1.jpg'),
(2, 1, '320', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2003', 'red', 180, 2000, 15000.00, '2.jpg'),
(3, 1, '320', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2003', 'red', 180, 2000, 15000.00, '3.jpg'),
(4, 2, 'E220', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2005', 'black', 220, 2200, 18000.00, '4.jpg'),
(5, 2, 'E320', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2006', 'white', 200, 3200, 28000.00, '5.jpg'),
(6, 2, 'S500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2008', 'white', 250, 5000, 40000.00, '6.jpg'),
(7, 2, 'E280', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2007', 'white', 200, 2800, 22000.00, '7.jpg'),
(8, 3, 'GS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2005', 'black', 210, 3000, 18000.00, '8.jpg'),
(9, 3, 'RX', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n				Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n				when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n				It has survived not only five centuries, but also the leap into electronic typesetting, \r\n				remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \r\n				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2008', 'red', 250, 3500, 35000.00, '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `a_categories`
--

CREATE TABLE IF NOT EXISTS `a_categories` (
  `idCat` smallint(3) NOT NULL AUTO_INCREMENT,
  `titleCat` varchar(25) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `a_categories`
--

INSERT INTO `a_categories` (`idCat`, `titleCat`) VALUES
(1, 'Bmw'),
(2, 'Mercedes'),
(3, 'Lexus');

-- --------------------------------------------------------

--
-- Table structure for table `a_galary`
--

CREATE TABLE IF NOT EXISTS `a_galary` (
  `idAuto` int(5) NOT NULL,
  `image` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a_galary`
--

INSERT INTO `a_galary` (`idAuto`, `image`) VALUES
(1, '1.jpg'),
(1, '2.jpg'),
(1, '3.jpg'),
(2, '2.jpg'),
(2, '5.jpg'),
(3, '3.jpg'),
(3, '4.jpg'),
(3, '6.jpg'),
(4, '4.jpg'),
(4, '6.jpg'),
(4, '8.jpg'),
(5, '5.jpg'),
(5, '9.jpg'),
(5, '6.jpg'),
(6, '6.jpg'),
(6, '7.jpg'),
(6, '2.jpg'),
(7, '7.jpg'),
(7, '8.jpg'),
(7, '3.jpg'),
(8, '8.jpg'),
(8, '4.jpg'),
(9, '9.jpg'),
(9, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `a_orders`
--

CREATE TABLE IF NOT EXISTS `a_orders` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `idAuto` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pay` enum('cash','visa') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `a_orders`
--

