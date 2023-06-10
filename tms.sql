-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 27, 2022 at 07:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `exemptv`
--

CREATE TABLE `exemptv` (
  `EXTvType` varchar(20) DEFAULT NULL,
  `EXTvNumber` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exemptv`
--

INSERT INTO `exemptv` (`EXTvType`, `EXTvNumber`) VALUES
('Police', '123'),
('V.I.P.', '12345'),
('V.I.P.', '12345'),
('V.I.P.', 'MP04A1111');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `select_user` varchar(10) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`select_user`, `user_name`, `password`) VALUES
('Admin', 'Admin123', 'Admin12345'),
('User', 'User123', 'User12345');

-- --------------------------------------------------------

--
-- Table structure for table `tmsuser`
--

CREATE TABLE `tmsuser` (
  `Vtype` varchar(20) DEFAULT NULL,
  `Fare` int(10) NOT NULL,
  `Vnumber` varchar(11) DEFAULT NULL,
  `CDate` varchar(10) DEFAULT NULL,
  `CTime` varchar(12) DEFAULT NULL,
  `CDay` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmsuser`
--

INSERT INTO `tmsuser` (`Vtype`, `Fare`, `Vnumber`, `CDate`, `CTime`, `CDay`) VALUES
('OSV', 500, 'mp04o0121', NULL, NULL, NULL),
('LCV / PICKUP', 20, 'MP04A1234', NULL, NULL, NULL),
('OSV', 500, 'up90e0000', '0000-00-00', '10:43:33', '   - Sunday'),
('OSV', 500, 'up90e0000', '26/06/2022', '10:54:29 am', '   - Sunday'),
('CAR / JEEP', 0, 'up90e1234', '26/06/2022', '01:12:24 pm', '   - Sunday'),
('CAR / JEEP', 100, 'mp04A0231', '26/06/2022', '01:51:44 pm', '   - Sunday'),
('LCV / PICKUP', 200, 'MP04M8978', '26/06/2022', '01:54:03 pm', '   - Sunday'),
('CAR / JEEP', 100, 'UP04P9063', '26/06/2022', '05:52:42 pm', '   - Sunday'),
('3 AXLE', 0, '', '26/06/2022', '06:03:02 pm', '   - Sunday'),
('LCV / PICKUP', 200, 'MP04L9632', '27/06/2022', '09:30:05 am', '   - Monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
