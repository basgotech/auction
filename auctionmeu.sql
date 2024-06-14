-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 03:29 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctionmeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(255) NOT NULL,
  `dept_name` text DEFAULT NULL,
  `dept_by` text DEFAULT NULL,
  `dept_reg_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `dept_by`, `dept_reg_date`) VALUES
(1, 'Electronics', 'Tsegaye Tariku', '2021-07-28 13:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `kebele` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `reg_date` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `image`, `gender`, `age`, `city`, `kebele`, `role`, `password`, `reg_date`) VALUES
(3, 'Tesgayee', 'Alemu', 'dpzZJJiA0wu6D1APMe+mGA==', 'D6eq0266GAQpjbcb/HWkjQ==', 'kpgRxYa4rIsNgNLRfPHlUw==', 'download.png', 'Male', '24', 'Metu', '2', 'Admin', 'JIAQk0zLLfW1GqY6iJLX1Q==', '2021-07-28 11:59:07.11253'),
(7, 'rsfdg', 'dfgsdfgsdf', 'hDTJ4aia8DpGC0T5z+Lmeg==', 'pcAQh48Hdp9k4XDi8WIEK5darSaoS3Xhi9U2jWhA63w=', 'PdNuquizUljimraCR4Un6g==', 'abstract-1780171_1920.png', 'Male', '25', 'sdfgsdfg', '12', 'user', 'JIAQk0zLLfW1GqY6iJLX1Q==', '2021-07-28 11:38:33.48194');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
