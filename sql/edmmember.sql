-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2016 at 05:29 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `edmmember`
--

CREATE TABLE `edmmember` (
  `Id` int(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `target` varchar(15) NOT NULL,
  `Date` text NOT NULL,
  `edm` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edmmember`
--

INSERT INTO `edmmember` (`Id`, `username`, `email`, `target`, `Date`, `edm`) VALUES
(1, 'Monster125', 'monster175@gmail.com', 'Member', '28/09/2016', 'เปลี่ยนให้หมด'),
(2, '56222420209', 'monster175@gmail.com', 'Member', '28/09/2016', 'เปลี่ยนให้หมด'),
(3, 'Monster125', 'monster175@gmail.com', 'Member', '28/09/2016', 'เปลี่ยนให้หมด'),
(4, 'Monster125', 'monster175@gmail.com', 'Member', '28/09/2016', 'เปลี่ยนให้หมด'),
(5, 'Monster125', 'monster175@gmail.com', 'Member', '28/09/2016', 'เปลี่ยนให้หมด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edmmember`
--
ALTER TABLE `edmmember`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edmmember`
--
ALTER TABLE `edmmember`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
