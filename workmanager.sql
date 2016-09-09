-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2016 at 04:26 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `nav_links`
--

INSERT INTO `nav_links` (`id`, `nav_menu_id`, `nav_text`, `nav_path`, `display_order`, `hidden`) VALUES
(32, 11, 'Projects', '/Projects/Work/management/projects.php', 1, 0),
(33, 11, 'Task List', '/Projects/Work/management/tasklist.php', 2, 0),
(34, 12, 'Web App Framework', '/Projects/Work/frameworks/webapp.php', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nav_menus`
--

CREATE TABLE IF NOT EXISTS `nav_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_text` varchar(100) NOT NULL,
  `menu_icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `nav_menus`
--

INSERT INTO `nav_menus` (`id`, `menu_text`, `menu_icon`) VALUES
(11, 'Management', 'fa-area-chart'),
(12, 'PenTest Frameworks', 'fa-database');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `task_id`, `project_id`, `note`, `timestamp`) VALUES
(5, 3, 2, 'task 3 note', '2016-09-01 21:48:34'),
(6, 2, 2, 'test note', '2016-09-01 21:59:01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tasklist`
--

INSERT INTO `tasklist` (`id`, `name`, `status`, `priority`, `deadline`, `asignee`, `notes`, `created`, `timestamp`, `project_id`) VALUES
(2, 'test task 2', 'In Progress', 'Medium', '2016-09-02', 'Logan', '', '2016-09-01', '2016-09-01 21:05:34', 2),
(3, 'test task 3', 'Not Started', 'Medium', '2016-09-07', 'Logan', '', '2016-09-01', '2016-09-01 21:08:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `webapptests`
--

CREATE TABLE IF NOT EXISTS `webapptests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testname` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `asignee` varchar(250) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `webapptests`
--

INSERT INTO `webapptests` (`id`, `testname`, `description`, `asignee`, `created`) VALUES
(8, 'working test', 'working test application', 'Logan', '2016-09-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
