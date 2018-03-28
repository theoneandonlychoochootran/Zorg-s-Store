-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2018 at 07:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zorgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_cd` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `salt` varchar(256) NOT NULL,
  PRIMARY KEY (`customer_cd`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_cd`, `user_id`, `password`, `email`, `city`, `state`, `zip_code`, `salt`) VALUES
(1, 'User', '63265efad217321aed9d5e27e93c2b7bf3a62786', 'thisisme@email.org', 'jjjjjjjj', 'Ms', 39507, 'ÓÌø‹öoÜ5r .(ùÛË\r®…5ÕÑ\Zæßm­ÏÂOx–ò¸ÕV½'),
(2, 'ZorgStore', '6d1b1864524ce6bb9f5ef506bd5c9c72a2246ed4', 'redneck@torm.com', 'Bras', 'HI', 39507, '9^¥§Ö2ù¥ø3«†ÙÐ*ƒ*jüH~Ù%Mï•…¿(—ÓfÝ‹'),
(3, 'Dilbert', '68d27aa9518b8d140da10ca4c41bf3d6a2445ce0', 'this@email.com', 'Gee', 'WZ', 44444, 'GëÅZ¿Õ£e1WÑ\rµ\r3T7\rõo¡Ò7ÙµËÐ.¥„\0 È');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
