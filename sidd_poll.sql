-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2019 at 10:40 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesi4_mani`
--

-- --------------------------------------------------------

--
-- Table structure for table `sidd_poll`
--

CREATE TABLE `sidd_poll` (
  `poll_id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `ans_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidd_poll`
--

INSERT INTO `sidd_poll` (`poll_id`, `user_id`, `ans_id`) VALUES
(1, '1', '1'),
(2, '1', '2'),
(3, '1', '1'),
(4, '1', '2'),
(5, '1', '4'),
(6, '1', '2'),
(7, '1', '2'),
(8, '1', '2'),
(9, '1', '2'),
(10, '1', '4'),
(11, '1', '3'),
(12, '1', '3'),
(13, '1', '3'),
(14, '1', '1'),
(15, '1', '2'),
(16, '1', '1'),
(17, '1', '1'),
(18, '1', '1'),
(19, '1', '1'),
(20, '1', '1'),
(21, '1', '1'),
(22, '1', '1'),
(23, '1', '1'),
(24, '1', '1'),
(25, '1', '1'),
(26, '1', '1'),
(27, '1', '1'),
(28, '1', '1'),
(29, '1', '1'),
(30, '1', '1'),
(31, '1', '1'),
(32, '1', '1'),
(33, '1', '1'),
(34, '1', '1'),
(35, '1', '1'),
(36, '1', '3'),
(37, '1', '4'),
(38, '1', '1'),
(39, '1', '4'),
(40, '1', '4'),
(41, '1', '1'),
(42, '1', '4'),
(43, '1', '4'),
(44, '1', '4'),
(45, '1', '4'),
(46, '1', '4'),
(47, '1', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sidd_poll`
--
ALTER TABLE `sidd_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sidd_poll`
--
ALTER TABLE `sidd_poll`
  MODIFY `poll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
