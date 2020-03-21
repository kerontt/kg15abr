-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 21, 2020 at 12:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE `Brand` (
  `Id` int(8) NOT NULL,
  `BrandName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`Id`, `BrandName`) VALUES
(1, 'DD Audio'),
(2, 'Sonos'),
(3, 'Beats'),
(4, 'Sony'),
(5, 'DC Audio');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Category` varchar(60) NOT NULL,
  `CategoryDescription` varchar(500) DEFAULT NULL,
  `CategoryImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Id`, `Category`, `CategoryDescription`, `CategoryImage`) VALUES
(1, 'Headphones', 'Wired and wireless headphones', NULL),
(2, 'Car Subwoofer', 'Subwoofers from 10\" to 18\".', NULL),
(3, 'Speakers', 'Wired and wireless speakers', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `Id` int(8) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` varchar(700) DEFAULT NULL,
  `ProductImageMain` varchar(100) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Status` smallint(8) NOT NULL,
  `Brand_Id` int(8) NOT NULL,
  `Category_Id` int(8) NOT NULL,
  `Caption` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`Id`, `ProductName`, `ProductDescription`, `ProductImageMain`, `Price`, `Status`, `Brand_Id`, `Category_Id`, `Caption`) VALUES
(1, 'DD Audio 3512g ', 'High performance, sonically accurate and audiophile quality subwoofer. \r\nESP suspension\r\nCarbon fiber dustcap\r\nkevlar impregnated cone', '/Concept1/Library/Images/DDAudio/3512g-esp-right-2017.jpg', 700, 1, 1, 2, 'Shake your bed'),
(2, 'DD Audio 506a', 'A sonically accurate mini driver. The unit is 6\" in diameter with more surface diameter than competitors.', '/Concept1/Library/Images/DDAudio/506-6-right-2019.jpg', 700, 1, 1, 2, 'Best for small spaces'),
(3, 'DD Audio Z12a', 'The highest performing 12\" with Neodyinium magnet and ESP technology.', '/Concept1/Library/Images/DDAudio/Z4-12-right-2019.jpg', 2000, 1, 1, 2, 'Epitomie of bass'),
(4, 'Beats Solo 3', 'Top of the line headphones', '/Concept1/Library/Images/Beats/Beats-solo-3-wireless-right-2019.jpg', 180, 1, 2, 2, 'Be wire free!'),
(7, 'DC Audio Level 4 1204', 'A very capable 12\" subwoofer.', '/Concept1/Library/Images/DCAudio/DCAudio-Lv5-1201.jpg', 460, 1, 5, 2, 'High Output'),
(8, 'DC Audio Lv2 1204', 'An entry level subwoofer that is anything but ordinary.', '/Concept1/Library/Images/DCAudio/DCAudio-Lv2-1204.jpg', 120, 1, 6, 3, 'Not average!');

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `Status_Id` int(8) NOT NULL,
  `Status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Status`
--

INSERT INTO `Status` (`Status_Id`, `Status`) VALUES
(1, 'Active'),
(2, 'Discontinued');

-- --------------------------------------------------------

--
-- Table structure for table `StoreDetails`
--

CREATE TABLE `StoreDetails` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `TelNumber` int(12) NOT NULL,
  `VatNumber` int(11) NOT NULL,
  `TaxYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `StoreDetails`
--

INSERT INTO `StoreDetails` (`Name`, `Address`, `TelNumber`, `VatNumber`, `TaxYear`) VALUES
('KGismoz', '23034 Lime Tree Street, Loughborough\r\n', 771533387, 1237654, 2020),
('KGismoz', '23034 Lime Tree Street, Loughborough\r\n', 771533387, 1237654, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Status` (`Status`);

--
-- Indexes for table `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`Status_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brand`
--
ALTER TABLE `Brand`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Status`
--
ALTER TABLE `Status`
  MODIFY `Status_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
