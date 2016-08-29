-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2016 at 12:43 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `nav_links`
--

CREATE TABLE IF NOT EXISTS `nav_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_menu_id` int(11) NOT NULL,
  `nav_text` varchar(100) NOT NULL,
  `nav_path` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL,
  `hidden` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `nav_links`
--

INSERT INTO `nav_links` (`id`, `nav_menu_id`, `nav_text`, `nav_path`, `display_order`, `hidden`) VALUES
(32, 11, 'Projects', '/test/test.php', 1, 0),
(33, 11, 'To-Do List', '/test/test.php', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nav_menus`
--

CREATE TABLE IF NOT EXISTS `nav_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_text` varchar(100) NOT NULL,
  `menu_icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `nav_menus`
--

INSERT INTO `nav_menus` (`id`, `menu_text`, `menu_icon`) VALUES
(11, 'Management', 'fa-area-chart');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
