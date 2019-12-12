-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 12:47 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bekrishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pimg` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pimg` (`pimg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pname`, `pimg`) VALUES
(26, 'CAKES', 'chocolatecake.jpg'),
(28, 'BUNS', 'BUNS.jpg'),
(29, 'SNACKS', 'Snacks.jpg'),
(30, 'BREAD', 'BREAD.jpg'),
(31, 'Ice-Cream', 'Ice-Cream.jpg'),
(32, 'CANNOIL ROLL', 'roil.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
