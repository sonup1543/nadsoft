-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 09:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `createddate` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL,
  `parentid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `createddate`, `name`, `parentid`) VALUES
(1, '0000-00-00 00:00:00', 'Sonu Kumar', '1'),
(2, '0000-00-00 00:00:00', 'Sonu Kumar', '1'),
(3, '0000-00-00 00:00:00', '11312', '3'),
(4, '0000-00-00 00:00:00', 'Sonu', '3'),
(5, '2023-08-04 22:04:14', 'NISHANT SINGH', '6'),
(6, '2023-08-05 00:08:59', 'ppppp', '5'),
(7, '2023-08-05 00:13:06', 'Sonu', '2'),
(8, '2023-08-05 00:13:12', 'Sonu', '4'),
(9, '2023-08-05 00:21:53', 'sonu', '5'),
(10, '2023-08-05 00:26:01', 'sonu', '4'),
(11, '2023-08-05 00:26:13', 'sonu12', '6'),
(12, '2023-08-05 00:29:48', 'nitu', '2'),
(13, '2023-08-05 00:30:13', 'nitu', '4');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `name`) VALUES
(1, 'Parent1'),
(2, 'Parent2'),
(3, 'Parent3'),
(4, 'Parent4'),
(5, 'Parent5'),
(6, 'Parent6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
