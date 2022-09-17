-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 07:42 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `waterbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `owners_id` int(10) NOT NULL,
  `prev` varchar(20) NOT NULL,
  `pres` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `owners_id`, `prev`, `pres`, `price`, `date`) VALUES
(1, 1, '12', '12', '10', '13/03/08'),
(6, 10, '4', '9', '10', '13/03/08 11:10:37'),
(4, 2, '12', '23', '10', '13/03/08 0'),
(5, 9, '12', '322', '10', '13/03/08 08:53:29'),
(7, 2, '100', '101', '10', '13/03/08 11:54:49'),
(9, 1, '12', '20', '10', '13/03/09 07:47:28'),
(10, 1, '65', '23', '10', '13/03/09 07:48:46'),
(11, 11, '1', '5', '10', '13/03/09 08:01:49'),
(13, 1, '1', '5', '10', '13/03/11 07:28:38'),
(14, 2, '12', '12', '10', '13/03/11 07:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `lname`, `fname`, `mi`, `address`, `contact`) VALUES
(1, 'xzczxc', 'cxvcxv', 'p', 'pardo', '12'),
(2, 'wew', 'asdasd', 'df', 'asd', '123445'),
(4, 'sadsa', 'asfasdfds', 'sd', 'bolacao', '65564'),
(5, 'cocA', 'assad', 'aa', 'lawaan', '23434'),
(6, 'sacsd', 'asdfdas', 's', 'sad', '23232'),
(11, 'balingit', 'mar', 'c', 'talisay', '544544'),
(13, 'mar', 'bal', 'C', 'talisay', '23345458465');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'user', 'a', 'Coca'),
(2, 'a', 'a', 'try');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
