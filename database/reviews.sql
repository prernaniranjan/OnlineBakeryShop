-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 12:51 PM
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
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `mobile`, `msg`) VALUES
(1, 'KAILASH NARAYAN NIRANJAN', 'jsahu3969@gmail.com', '9752558820', 'eclsjklsj'),
(2, 'KAILASH NARAYAN NIRANJAN', 'jsahu3969@gmail.com', '9752558820', 'eclsjklsj'),
(3, 'fghf', 'jdkjskl', '848474', 'sljslkjd'),
(4, 'jdfdkj', 'jfljd', '49495', 'jlkjsdf'),
(5, 'jlkjfdkl', 'fjlkd', '4307', 'jd;ljkrj'),
(6, 'dlkj', 'jdljd', '9407', 'j;ljsddjf'),
(7, 'prerna', 'jkdhhdhd@gmail.com', '8947478843', 'kjshkjhsdoisjobsof');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
