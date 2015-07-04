-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12-log
-- รุ่นของ PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `member`
--
CREATE DATABASE IF NOT EXISTS `member` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `member`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`id`, `name`, `lastname`, `username`, `password`, `status`) VALUES
(1, 'sandy', 'bank', 'champ', '09/06/2558', 'admin'),
(2, 'backk', 'doremon', 'mon2535', 'abcd2535', 'admin'),
(4, 'backk', 'doremon', 'mon2535', 'abcd2535', 'admin');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- dump ตาราง `student`
--

INSERT INTO `student` (`id`, `name`, `picture`) VALUES
(1, 'cat', 'upload/cat32.jpg'),
(2, 'mon', 'upload/cat25.jpg'),
(3, 'mon', 'upload/cat26.jpg'),
(4, 'mon', 'upload/cat33.jpg'),
(5, 'mon', 'upload/cat1.jpg'),
(6, 'ff', 'upload/cat34.jpg'),
(7, 'cat', 'upload/cat12.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
