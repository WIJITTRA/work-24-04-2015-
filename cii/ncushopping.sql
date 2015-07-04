-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 03:34 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ncushopping`
--
CREATE DATABASE IF NOT EXISTS `ncushopping` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ncushopping`;

-- --------------------------------------------------------

--
-- Table structure for table `productamts`
--

CREATE TABLE IF NOT EXISTS `productamts` (
  `productAmtId` int(10) NOT NULL AUTO_INCREMENT,
  `productId` int(10) NOT NULL,
  `productAmtStatus` enum('amountnow','amountbuy','amountsell') NOT NULL,
  `productAmt` int(10) NOT NULL,
  PRIMARY KEY (`productAmtId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `productamts`
--

INSERT INTO `productamts` (`productAmtId`, `productId`, `productAmtStatus`, `productAmt`) VALUES
(1, 1, 'amountnow', 11),
(2, 1, 'amountbuy', 5),
(3, 1, 'amountsell', 2),
(4, 2, 'amountnow', 3),
(5, 2, 'amountbuy', 5),
(6, 2, 'amountsell', 2),
(7, 3, 'amountnow', 14),
(8, 3, 'amountbuy', 5),
(9, 3, 'amountsell', 2),
(10, 4, 'amountnow', 8),
(11, 4, 'amountbuy', 5),
(12, 4, 'amountsell', 2),
(13, 5, 'amountnow', 12),
(14, 5, 'amountbuy', 40),
(15, 5, 'amountsell', 2),
(16, 6, 'amountnow', 50),
(17, 6, 'amountbuy', 5),
(18, 6, 'amountsell', 35),
(19, 7, 'amountnow', 28),
(20, 7, 'amountbuy', 5),
(21, 7, 'amountsell', 2),
(22, 8, 'amountnow', 28),
(23, 8, 'amountbuy', 55),
(24, 8, 'amountsell', 2),
(25, 9, 'amountnow', 8),
(26, 9, 'amountbuy', 5),
(27, 9, 'amountsell', 2),
(28, 10, 'amountnow', 25),
(29, 10, 'amountbuy', 5),
(30, 10, 'amountsell', 2),
(31, 11, 'amountnow', 25),
(32, 11, 'amountbuy', 5),
(33, 11, 'amountsell', 20),
(34, 12, 'amountnow', 50),
(35, 12, 'amountbuy', 5),
(36, 12, 'amountsell', 2),
(37, 13, 'amountnow', 26),
(38, 13, 'amountbuy', 5),
(39, 13, 'amountsell', 2),
(40, 14, 'amountnow', 16),
(41, 14, 'amountbuy', 5),
(42, 14, 'amountsell', 2),
(43, 15, 'amountnow', 21),
(44, 15, 'amountbuy', 5),
(45, 15, 'amountsell', 2),
(46, 16, 'amountnow', 18),
(47, 16, 'amountbuy', 5),
(48, 16, 'amountsell', 2),
(49, 17, 'amountnow', 25),
(50, 17, 'amountbuy', 5),
(51, 17, 'amountsell', 2),
(52, 18, 'amountnow', 55),
(53, 18, 'amountbuy', 5),
(54, 18, 'amountsell', 2),
(55, 19, 'amountnow', 11),
(56, 19, 'amountbuy', 5),
(57, 19, 'amountsell', 2),
(58, 20, 'amountnow', 35),
(59, 20, 'amountbuy', 5),
(60, 20, 'amountsell', 6),
(61, 21, 'amountnow', 30),
(62, 21, 'amountbuy', 5),
(63, 21, 'amountsell', 2),
(64, 22, 'amountnow', 140),
(65, 22, 'amountbuy', 5),
(66, 22, 'amountsell', 2),
(67, 23, 'amountnow', 140),
(68, 23, 'amountbuy', 5),
(69, 23, 'amountsell', 2),
(70, 24, 'amountnow', 16),
(71, 24, 'amountbuy', 5),
(72, 24, 'amountsell', 2),
(73, 25, 'amountnow', 5),
(74, 25, 'amountbuy', 5),
(75, 25, 'amountsell', 2),
(76, 26, 'amountnow', 6),
(77, 26, 'amountbuy', 5),
(78, 26, 'amountsell', 2),
(79, 27, 'amountnow', 6),
(80, 27, 'amountbuy', 5),
(81, 27, 'amountsell', 2),
(82, 28, 'amountnow', 6),
(83, 28, 'amountbuy', 5),
(84, 28, 'amountsell', 2),
(85, 29, 'amountnow', 7),
(86, 29, 'amountbuy', 5),
(87, 29, 'amountsell', 2),
(88, 30, 'amountnow', 6),
(89, 30, 'amountbuy', 5),
(90, 30, 'amountsell', 2),
(91, 31, 'amountnow', 6),
(92, 31, 'amountbuy', 5),
(93, 31, 'amountsell', 2),
(94, 32, 'amountnow', 8),
(95, 32, 'amountbuy', 5),
(96, 32, 'amountsell', 2),
(97, 33, 'amountnow', 6),
(98, 33, 'amountbuy', 5),
(99, 33, 'amountsell', 2),
(100, 34, 'amountnow', 10),
(101, 34, 'amountbuy', 5),
(102, 34, 'amountsell', 2),
(103, 35, 'amountnow', 10),
(104, 35, 'amountbuy', 5),
(105, 35, 'amountsell', 2),
(106, 36, 'amountnow', 9),
(107, 36, 'amountbuy', 5),
(108, 36, 'amountsell', 2),
(109, 37, 'amountnow', 9),
(110, 37, 'amountbuy', 5),
(111, 37, 'amountsell', 2),
(112, 38, 'amountnow', 30),
(113, 38, 'amountbuy', 5),
(114, 38, 'amountsell', 2),
(115, 39, 'amountnow', 30),
(116, 39, 'amountbuy', 5),
(117, 39, 'amountsell', 2),
(118, 40, 'amountnow', 40),
(119, 40, 'amountbuy', 5),
(120, 40, 'amountsell', 2),
(121, 41, 'amountnow', 30),
(122, 41, 'amountbuy', 5),
(123, 41, 'amountsell', 2),
(124, 42, 'amountnow', 30),
(125, 42, 'amountbuy', 5),
(126, 42, 'amountsell', 2),
(127, 43, 'amountnow', 40),
(128, 43, 'amountbuy', 5),
(129, 43, 'amountsell', 2),
(130, 44, 'amountnow', 25),
(131, 44, 'amountbuy', 5),
(132, 44, 'amountsell', 2),
(133, 45, 'amountnow', 24),
(134, 45, 'amountbuy', 5),
(135, 45, 'amountsell', 2),
(136, 46, 'amountnow', 24),
(137, 46, 'amountbuy', 5),
(138, 46, 'amountsell', 2),
(139, 47, 'amountnow', 24),
(140, 47, 'amountbuy', 5),
(141, 47, 'amountsell', 2),
(142, 48, 'amountnow', 20),
(143, 48, 'amountbuy', 5),
(144, 48, 'amountsell', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(10) NOT NULL AUTO_INCREMENT,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productReseller` float NOT NULL,
  `productSell` float NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productCode`, `productName`, `productReseller`, `productSell`) VALUES
(1, '101', 'REVIV', 530, 663),
(2, '102', 'กาแฟ ไบโอริชชี่ coffee Bio Rishhi', 230, 288),
(3, '103', 'คลอโรสไปรูริน่า (สาหร่าย)', 740, 925),
(4, '104', 'แคลเซียม (Cal Mag Complex)', 810, 1013),
(5, '105', 'คลอโลฟิลล์ (Chlorophyll Powder)', 620, 775),
(6, '106', 'ชาเนเจอร์ ที (Nature Tea Infusiuon', 630, 787),
(7, '107', 'ไคโตริค (ChitoRic)', 1500, 1875),
(8, '108', 'อีควาลีน (Equalean)', 1900, 2375),
(9, '109', 'แซมมอน ออย (Salmon Oil)', 500, 625),
(10, '110', 'เดลี่ โพรดิวส์ 24 (Daily Produce 24)', 1470, 1835),
(11, '111', 'ไบออส ไลฟ์ (เล็ก) (Bios Life S)', 1400, 1750),
(12, '112', 'ไปออส ไลฟ์ (ใหญ่) (Bios Life L)', 2750, 3438),
(13, '113', 'ฮาวาเอี้ยนโนนิ (Hawaiian Noni)', 1450, 1835),
(14, '114', 'ซี เอ็ม เพล็กซ์ (CM Plex)', 1100, 1375),
(15, '115', 'บี เอ็ม & ซี (BM & C)', 730, 913),
(16, '116', 'ซอยโปรตีน (Soy Protine)', 1300, 1625),
(17, '117', 'ซันบล็อก (Sunblock UVA&UVE SPE 46)', 1520, 1900),
(18, '118', 'เรตินอล ซิสเท็ม (Ratinal System)', 3250, 4050),
(19, '119', 'มิเนอร์รัล มาร์ค (Mineral Mask) (เล็ก s)', 650, 815),
(20, '120', 'มิเนอร์รัล มาร์ค (Mineral Mask) (ใหญ่ L)', 1870, 2337),
(21, '121', 'กรีนที ออย (Green Tea Oil)', 1990, 2487),
(22, '122', 'ชุด Be บำรุงผิว (Be Set) ผิวแห้ง', 8260, 10325),
(23, '123', 'ชุด Be บำรุงผิว (Be Set) ผิวมัน', 8260, 10325),
(24, '124', 'อะบอริจินอลโกลด์ ครีม (AB Gold Cream)', 990, 1237),
(25, '125', 'อะบอริจินอลโกลด์ คลีนซิ่งบาร์(AB Gold Bar)', 310, 387),
(26, '126', 'ไฮเดรทิ้งแชมพู (Volumizing Shampoo) ผมแห้ง', 400, 500),
(27, '127', 'วอลุ่มไมซิ่งแชมพู (Volumizing Shampoo)ผมลีบแบน', 400, 500),
(28, '128', 'เพียวริไฟอิ่งแชมพู (Purifying Shampoo) ผมมัน', 400, 500),
(29, '129', 'เชพพิ่งโฟม (Shaping Form)', 470, 587),
(30, '130', 'สคัลป์ทิ่ง เจล (Sculping Gel)', 400, 500),
(31, '131', 'ฟินิชชิ่ง เปรย์ (Finishing Spray)Alcohol-Free', 400, 500),
(32, '132', 'อิมเทนซ์ครีมนวด(Intense Reconstructor) ผมมัน', 500, 625),
(33, '133', 'เวทเลส คอนดิชันเนอร์ (Weightless Conditioner)ธรรมด', 400, 500),
(34, '134', 'โฟมมิ่ง คลีนเซอร์ (Eoaming Cleanser)', 790, 987),
(35, '135', 'ครีมมี่ คลียนเซอร์ (Creammy Cleanser)', 790, 987),
(36, '136', 'แมททิไฟอิ้ง รีฟายเนอร์ (Matyfying Refiner)ผสม/มัน', 740, 925),
(37, '137', 'ไฮเดรททิ่งรีฟายเนอร์ (Hydrating Refiner)ธรรมดา/แห้', 740, 925),
(38, '138', 'เดย์เวลล์ครีม (Day Veil Cream) ผิวธรรมดา/แห้ง', 1700, 2125),
(39, '139', 'เดย์เวลล์โลชั่น (Day Veil Lotion) ผิวธรรมดา/ผสม/มั', 1700, 2125),
(40, '140', 'เดย์ เอเนอร์จี้ เซนั่ม (Day energy Serum)', 2106, 2633),
(41, '141', 'ไนท์ นูริชชิ่ง ครีม (Night Nourish Cream)', 1700, 2125),
(42, '142', 'ไนท์ นูริชชิ่ง โลชั่น (Night Nourish Lotion)', 1700, 2125),
(43, '143', 'ไนท์ รีคัฟเวอร์รี่ เชรั่ม (Night Recovery Serum)', 2106, 2633),
(44, '144', 'ทรานสลูชั่น ฟินิชชิ่งพาวเดอร์ (แป้งฝุ่น)', 1700, 2125),
(45, '145', 'Perefecting Liquid Foundation (รองพื้น ผิวขาว)', 1450, 1812),
(46, '146', 'Perefecting Liquid Foundation (รองพื้น ผิวสองสี)', 1450, 1812),
(47, '147', 'Perefecting Liquid foundation (รองพื้น ผิวกลาง)', 1450, 1812),
(48, '148', 'แผ่นตรวจมะเร็งเต้านม', 1190, 1438);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
