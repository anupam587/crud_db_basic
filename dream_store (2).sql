-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 10:55 PM
-- Server version: 5.5.19
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dream_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `anupam`
--

CREATE TABLE IF NOT EXISTS `anupam` (
  `a` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `c1` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anupam`
--

INSERT INTO `anupam` (`a`, `b`, `c1`) VALUES
(60, 29, 'gupta'),
(50, 29, 'gupta'),
(55, 29, 'gupta'),
(35, 29, 'gupta'),
(34, 98, 'rajiv'),
(76, 43, 'sanjiv'),
(76, 87, 'kaku'),
(NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ashu`
--

CREATE TABLE IF NOT EXISTS `ashu` (
  `a` int(11) DEFAULT NULL,
  `b` varchar(300) DEFAULT NULL,
  `c` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanjiv`
--

CREATE TABLE IF NOT EXISTS `sanjiv` (
  `i` int(11) DEFAULT NULL,
  `j` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `d` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanjiv`
--

INSERT INTO `sanjiv` (`i`, `j`, `c`, `d`) VALUES
(15, 14, 16, 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
