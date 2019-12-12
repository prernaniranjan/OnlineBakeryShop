-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 12:50 PM
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
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `passward` varchar(255) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`passward`),
  UNIQUE KEY `mobilenumber` (`mobilenumber`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `mobilenumber`, `passward`, `address`, `pincode`) VALUES
('babli kumari', 'bublikumari1998@gmail.com', '9752558820', 'bablu321', 'H.NO. 977 V.F.J ESTATE', '482009'),
('jitesh kumar sahu', 'jsahu3969@gmail.com', '917978366', 'jitesh@321', NULL, NULL),
('Prerna Niranjan', 'prernaniranjan1997@gmail.com', '939384844', 'prerna@4321', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
