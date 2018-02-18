-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2017 at 04:58 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `umobileno` varchar(100) NOT NULL,
  `uaddress` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `orderstatus` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `pname`, `uname`, `umobileno`, `uaddress`, `Quantity`, `Amount`, `orderstatus`) VALUES
(5, 5, 'Burger', 'chinmay', '9892645346', 'jogeshwari', 5, 4500, 'ORDER EXPEDITE'),
(6, 17, 'RED CUP CAKE', 'Omkar More', '9892645326', 'KHAR', 4, 4000, ''),
(6, 11, 'NUTELLA CHOCO MOOSE', 'Omkar More', '9892645326', 'KHAR', 1, 700, ''),
(4, 17, 'RED CUP CAKE', 'chinmay', '9892645346', 'jogeshwari', 3, 3000, 'ORDER TAKEN'),
(3, 12, 'OREO CHEESE CAKE', 'chinmay', '9892645346', 'jogeshwari', 4, 2000, ''),
(3, 17, 'RED CUP CAKE', 'chinmay', '9892645346', 'jogeshwari', 3, 3000, ''),
(4, 11, 'NUTELLA CHOCO MOOSE', 'chinmay', '9892645346', 'jogeshwari', 2, 1400, 'ORDER TAKEN'),
(7, 5, 'Burger', 'chinmay', '9892645346', 'jogeshwari', 1, 0, ''),
(7, 4, 'kabab', 'chinmay', '9892645346', 'jogeshwari', 1, 900, ''),
(8, 5, 'Burger', 'chinmay', '9892645346', 'jogeshwari', 4, 3000, ''),
(8, 5, 'Burger', 'chinmay', '9892645346', 'jogeshwari', 3, 2250, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pimage` varchar(110) NOT NULL,
  `availaible` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pcategory`, `pprice`, `pimage`, `availaible`) VALUES
(5, 'Burger', 'veg', 750, 'productimages/images/burgermeal.jpg', 50),
(4, 'kabab', 'veg', 900, 'productimages/images/kabab.jpg', 69),
(7, 'Pasta', 'veg', 2000, 'productimages/images/pasta.jpg', 100),
(11, 'NUTELLA CHOCO MOOSE', 'veg', 700, 'productimages/images/ChocolateNutellaMosse.jpg', 100),
(9, 'CHICKEN ROLL', 'non-veg', 90, 'productimages/images/Chickenroll.jpg', 100),
(10, 'misti doi', 'veg', 90, 'productimages/images/MishtiDoi-shutterstock.jpg', 100),
(12, 'OREO CHEESE CAKE', 'veg', 500, 'productimages/images/oreocheesckae.jpg', 100),
(13, 'Caramel Custard', 'veg', 700, 'productimages/images/caramalcustard.jpg', 100),
(15, 'CHOLE BHUTARE', 'veg', 300, 'productimages/images/cholebhutara.jpg', 100),
(17, 'RED CUP CAKE', 'veg', 1000, 'productimages/images/cupcake.jpg', 100),
(18, 'CHICKEN AGARA', 'non-veg', 500, 'productimages/images/chickenagara.jpg', 100),
(20, 'PINE APPLE PIE', 'veg', 900, 'productimages/images/Pineapple Pie-shutterstock (2).jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mobile_no`, `address`) VALUES
(1, 'chinmay', 'chinya', '9892645346', 'jogeshwari'),
(3, 'Manas Patil', 'maany', '9867406714', 'MUMBAI'),
(4, 'Omkar More', 'prakar', '9892645326', 'KHAR');
