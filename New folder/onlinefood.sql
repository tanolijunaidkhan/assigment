-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 07:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `onlinefood`
--

CREATE TABLE `onlinefood` (
  `custid` int(11) NOT NULL,
  `custname` varchar(50) NOT NULL,
  `custorder` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `custdeal` varchar(250) NOT NULL,
  `Country` varchar(250) NOT NULL,
  `City` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinefood`
--

INSERT INTO `onlinefood` (`custid`, `custname`, `custorder`, `location`, `custdeal`, `Country`, `City`) VALUES
(1, 'junaid', 'khan', 'wahid colony block b', 'Male', 'karachi', 'pakistan'),
(2, 'junaid', 'khan', 'wahid colony block b', 'Male', 'karachi', 'pakistan'),
(3, 'junaid', 'khan', 'wahid colony block b', 'Male', 'karachi', 'pakistan'),
(4, 'junaid', 'khan', 'wahid colony block b', '', 'karachi', 'pakistan'),
(5, 'junaid', 'khan', 'wahid colony block b', '', 'karachi', 'pakistan'),
(6, 'junaid', 'khan', 'wahid colony block b', '', 'karachi', 'pakistan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `onlinefood`
--
ALTER TABLE `onlinefood`
  ADD PRIMARY KEY (`custid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `onlinefood`
--
ALTER TABLE `onlinefood`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
