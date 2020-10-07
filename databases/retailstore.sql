-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 09:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retailstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `Billid` int(11) NOT NULL AUTO_INCREMENT,
  `Cid` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `AmtPaid` float NOT NULL,
  PRIMARY KEY (`Cid`),
  UNIQUE KEY `Billid` (`Billid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `CName` varchar(30) NOT NULL,
  `Mob` bigint(20) NOT NULL,
  `Address` varchar(50) NOT NULL DEFAULT 'Chennai',
  PRIMARY KEY (`Cid`),
  UNIQUE KEY `Mob` (`Mob`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `CName`, `Mob`, `Address`) VALUES
(1, 'Vyomesh', 211420420, 'Darbangha'),
(2, 'Kabbhir', 173314, 'Pune'),
(3, 'Priyesh', 6464, 'Chennai'),
(4, 'Kumar', 48416536, 'Chennai'),
(5, 'Rohit', 321654652841, 'Chennai'),
(6, 'Rohan', 54562222, 'Chennai'),
(7, 'Shailesh', 21763, 'Chennai'),
(8, 'Aparajit', 6979689, 'Chennai'),
(9, 'Emraan Hashmi', 17696969, 'Mumbai'),
(10, 'Garvit', 56789, 'Bhilai'),
(11, 'Johnny Sins', 1269, 'Uganda'),
(12, 'Meeran', 123443242, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `PName` varchar(30) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PName`, `Category`, `Price`) VALUES
(1, 'Coca Cola', 'Beverage', 40),
(2, 'AB Milkshake', 'Beverage', 30),
(3, 'Lays', 'Food', 20),
(4, 'Wild Stone Deo', 'Accessories', 200),
(5, 'Dettol Bathing Soap', 'Daily Accessories', 50),
(6, 'Nivea Cream', 'Daily Accessories', 70),
(7, 'Set Wet Gel', 'Accessories', 50),
(8, 'Amul Cheese', 'Food', 100),
(9, 'Kurkure', 'Food', 10),
(10, 'Colgate', 'Daily Accessories', 45),
(11, 'Oral B tooth Brush', 'Daily Accessories', 30),
(12, 'Vaseline', 'Daily Accessories', 25),
(13, 'Parachute Hair Oil', 'Daily Accessories', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
