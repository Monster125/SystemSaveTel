-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2016 at 09:49 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberdb`
--

CREATE TABLE `memberdb` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberdb`
--

INSERT INTO `memberdb` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(003, 'Admin', '097959710', 'MiZoRe', ''),
(004, 'top14149', '097959710', 'Mioza', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberdb`
--
ALTER TABLE `memberdb`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberdb`
--
ALTER TABLE `memberdb`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
