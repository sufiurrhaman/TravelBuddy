-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 06:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `name`, `username`, `email`, `num`, `password`) VALUES
(1, 'Demo Admin', 'admin1', 'arman.r96@gmail.com', '01646254624', '1234'),
(2, 'Salman Rashid', 'admin2', 'mylife2343@gmail.com', '01646234578', '1234'),
(4, 'Chris Gayle', 'admin33', 'chris333@cricket.com', '01700987654', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `pbookings`
--

CREATE TABLE `pbookings` (
  `pid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pbookings`
--

INSERT INTO `pbookings` (`pid`, `username`, `fullname`, `number`, `location`, `date`, `adult`, `child`, `amount`) VALUES
(1, 'armans03', 'Arman Shahriar', '01712897775', 'Saint', '2021-12-11', 4, 0, 36000),
(5, 'armans03', 'Arman Shahriar', '01646254624', 'Cox', '2021-12-31', 6, 0, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `preview`
--

CREATE TABLE `preview` (
  `prid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preview`
--

INSERT INTO `preview` (`prid`, `username`, `fullname`, `review`) VALUES
(2, 'armans03', 'Arman Shahriar', 'It was quite good.'),
(3, 'armans03', 'Arman Shahriar', 'not so good.');

-- --------------------------------------------------------

--
-- Table structure for table `shoporders`
--

CREATE TABLE `shoporders` (
  `sid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoporders`
--

INSERT INTO `shoporders` (`sid`, `username`, `fullname`, `number`, `address`, `product`, `quantity`, `amount`) VALUES
(3, 'armans03', 'Arman Shahriar', '01712897775', 'S.Chartha', 'Tent', 1, 3000),
(4, 'armans03', 'Arman Shahriar', '01646254624', 'S.Chartha', 'Hammock', 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `sreview`
--

CREATE TABLE `sreview` (
  `srid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sreview`
--

INSERT INTO `sreview` (`srid`, `username`, `fullname`, `review`) VALUES
(2, 'armans03', 'Arman Shahriar', 'Good Quality');

-- --------------------------------------------------------

--
-- Table structure for table `tbookings`
--

CREATE TABLE `tbookings` (
  `tid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `transport` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbookings`
--

INSERT INTO `tbookings` (`tid`, `username`, `fullname`, `number`, `transport`, `date`, `days`, `address`, `amount`) VALUES
(2, 'armans03', 'Arman Shahriar', '01646254624', 'Car', '2021-11-30', 4, 'S.Chartha', 12000),
(4, 'armans03', 'Arman Shahriar', '01712897775', 'Hiace', '2021-12-11', 2, 'S.Chartha', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transadmins`
--

CREATE TABLE `transadmins` (
  `taid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transadmins`
--

INSERT INTO `transadmins` (`taid`, `name`, `username`, `email`, `num`, `password`) VALUES
(2, 'Demo Trans ', 'tadmin1', 'abde@gmail.com', '01812345678', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `treview`
--

CREATE TABLE `treview` (
  `trid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treview`
--

INSERT INTO `treview` (`trid`, `username`, `fullname`, `review`) VALUES
(2, 'armans03', 'Arman Shahriar', 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `email`, `num`, `password`) VALUES
(1, 'Arman Shahriar', 'armans03', 'arman.r96@gmail.com', '01646254628', '1234'),
(4, 'Salman Khan', 'sallu123', 'khalil.butler@gmail.com', '01646254623', '1234'),
(13, 'Abdul Kashem', 'kashem123', 'kashem123@gmail.com', '01912345679', '9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `pbookings`
--
ALTER TABLE `pbookings`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `preview`
--
ALTER TABLE `preview`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `shoporders`
--
ALTER TABLE `shoporders`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sreview`
--
ALTER TABLE `sreview`
  ADD PRIMARY KEY (`srid`);

--
-- Indexes for table `tbookings`
--
ALTER TABLE `tbookings`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `transadmins`
--
ALTER TABLE `transadmins`
  ADD PRIMARY KEY (`taid`);

--
-- Indexes for table `treview`
--
ALTER TABLE `treview`
  ADD PRIMARY KEY (`trid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pbookings`
--
ALTER TABLE `pbookings`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `preview`
--
ALTER TABLE `preview`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shoporders`
--
ALTER TABLE `shoporders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sreview`
--
ALTER TABLE `sreview`
  MODIFY `srid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbookings`
--
ALTER TABLE `tbookings`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transadmins`
--
ALTER TABLE `transadmins`
  MODIFY `taid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treview`
--
ALTER TABLE `treview`
  MODIFY `trid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
