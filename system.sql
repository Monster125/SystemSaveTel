-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 09:56 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

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

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(003, 'Admin', '097959710', 'MiZoRe', ''),
(004, 'top14149', '097959710', 'Mioza', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Id` int(12) NOT NULL,
  `topic_edm` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Id`, `topic_edm`, `date`) VALUES
(1, 'การปักหมุดกระทู้', '22/09/2016');

-- --------------------------------------------------------

--
-- Table structure for table `telmember`
--

CREATE TABLE `telmember` (
  `Id` int(12) NOT NULL,
  `Global` enum('TRUE','AIS','DTAC','OTHER') NOT NULL DEFAULT 'OTHER',
  `Mobile` varchar(10) NOT NULL,
  `Target` enum('Member','Guest') NOT NULL DEFAULT 'Guest',
  `SMS` text NOT NULL,
  `Status` enum('Success','Block','Process','Fail') NOT NULL DEFAULT 'Success'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telmember`
--

INSERT INTO `telmember` (`Id`, `Global`, `Mobile`, `Target`, `SMS`, `Status`) VALUES
(1, 'TRUE', '0816116477', 'Member', 'ทดสอบระบบ TEST', 'Success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edmmember`
--
ALTER TABLE `edmmember`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `telmember`
--
ALTER TABLE `telmember`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edmmember`
--
ALTER TABLE `edmmember`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telmember`
--
ALTER TABLE `telmember`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
