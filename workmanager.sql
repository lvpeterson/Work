-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2016 at 04:03 PM
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
(32, 11, 'Projects', '/Projects/Work/management/projects.php', 1, 0),
(33, 11, 'Task List', '/Projects/Work/management/tasklist.php', 2, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `note` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` int(12) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `asignee` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `deliverable` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `status`, `priority`, `deadline`, `asignee`, `description`, `deliverable`, `created`, `timestamp`) VALUES
(1, '', 0, '', '0000-00-00', '', '', '', '2016-08-31', '2016-08-31 22:50:41'),
(2, 'test', 1, 'High', '0000-00-00', 'Logan', 'test', '', '2016-08-31', '2016-08-31 22:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE IF NOT EXISTS `tasklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `asignee` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tasklist`
--

INSERT INTO `tasklist` (`id`, `name`, `status`, `priority`, `deadline`, `asignee`, `notes`, `created`, `timestamp`, `project_id`) VALUES
(1, 'test', 'Not Started', 'Medium', '2016-08-21', 'Logan', '', '2016-08-31', '2016-08-31 22:57:10', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
