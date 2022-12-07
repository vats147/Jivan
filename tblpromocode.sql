-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 01:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpromocode`
--

CREATE TABLE `tblpromocode` (
  `promoId` int(11) NOT NULL,
  `promoCode` varchar(10) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `branchCode` int(11) NOT NULL,
  `ExpDate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpromocode`
--

INSERT INTO `tblpromocode` (`promoId`, `promoCode`, `discount`, `branchCode`, `ExpDate`, `status`) VALUES
(311, 'XXXX', '12.00', 1, '2022-12-16', 1),
(313, 'KKKKas', '55.00', 1, '2022-12-19', 1),
(314, 'ASASAA', '74.00', 152, '2022-12-07', 0),
(315, 'FAB20', '23.00', 6, '2022-12-14', 1),
(316, 'hiii', '74.00', 7, '2022-12-06', 1),
(317, 'HII', '24.00', 150, '2022-12-09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpromocode`
--
ALTER TABLE `tblpromocode`
  ADD PRIMARY KEY (`promoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpromocode`
--
ALTER TABLE `tblpromocode`
  MODIFY `promoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
