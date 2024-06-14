-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 11:16 PM
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
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` int(11) NOT NULL,
  `bid_license` text DEFAULT NULL,
  `bid_item_for_id` int(255) DEFAULT NULL,
  `bid_amount` text DEFAULT NULL,
  `bid_status` text NOT NULL DEFAULT 'Unseen',
  `bid_by_id` int(255) DEFAULT NULL,
  `bid_info` text DEFAULT NULL,
  `bid_add_adddr` varchar(255) DEFAULT NULL,
  `bid_date` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `closed_status` text DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `bid_license`, `bid_item_for_id`, `bid_amount`, `bid_status`, `bid_by_id`, `bid_info`, `bid_add_adddr`, `bid_date`, `closed_status`) VALUES
(3, '1533s244_teff_f_2.jpg', 9, '2500', 'Winner', 10, NULL, '01 kebele', '2021-08-08 19:07:45.76563', 'Closed'),
(4, 'blue-copy-space-digital-background_23-2148821698.png', 9, '2300', 'Seen', 11, NULL, 'Kebel front 01', '2021-08-08 20:36:15.17439', 'Closed');

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
(1, 'Electronics', 'Tsegaye Tariku', '2021-07-28 13:51:15'),
(3, 'Furniture ', 'Tesgayee Alemu', '2021-07-30 07:04:28'),
(4, 'All', 'Tesgayee Alemu', '2021-07-31 08:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `seller_id` text DEFAULT NULL,
  `dept_name` text DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `item_type` text DEFAULT NULL,
  `item_ini_prize` text DEFAULT NULL,
  `item_start_date` text DEFAULT NULL,
  `item_end_date` text DEFAULT NULL,
  `item_image` text DEFAULT NULL,
  `item_status` text DEFAULT 'Pending',
  `item_reg_date` timestamp(5) NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `seller_id`, `dept_name`, `item_name`, `item_type`, `item_ini_prize`, `item_start_date`, `item_end_date`, `item_image`, `item_status`, `item_reg_date`) VALUES
(6, '8', 'Electronics', 'Gaming pc Ultra', 'Electronics', '40000', '2021-08-08', '2021-08-14', 'download (3).jfif', 'Accepted', '2021-08-07 07:57:35.40383'),
(7, '8', 'Electronics', 'Hp Pavilion Gaming', 'Electronics', '50000', '2021-08-14', '2021-08-21', 'download (4).jfif', 'Accepted', '2021-08-07 07:58:09.90751'),
(8, '8', 'Electronics', 'Gaming Pc Gigabit', 'Electronics', '60000', '2021-08-16', '2021-08-24', 'gaming-desktop-pc-custom-built-cpu--500x500.jpg', 'Accepted', '2021-08-07 07:58:43.00689'),
(9, '8', 'Electronics', 'Monitor', 'Electronics', '2000', '2021-08-14', '2021-08-21', 'how-to-build-a-gaming-computer-hero1555706958293.jpg', 'Accepted', '2021-08-07 07:59:08.18777'),
(10, '8', 'Furniture ', 'Desk', 'Home Furniture', '5000', '2021-08-14', '2021-08-16', '71MdPJAkiyL._AC_SL1500_.jpg', 'Accepted', '2021-08-07 07:59:36.96802');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_req` int(10) NOT NULL,
  `seller_id` text DEFAULT NULL,
  `seller_name` text DEFAULT NULL,
  `seller_lic_file` text DEFAULT NULL,
  `region` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `status` text DEFAULT 'unseen',
  `req_date` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `dept_id` text DEFAULT NULL,
  `com_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_req`, `seller_id`, `seller_name`, `seller_lic_file`, `region`, `city`, `status`, `req_date`, `dept_id`, `com_name`) VALUES
(8, '8', 'Tariku Gobena', 'sfg.png', NULL, NULL, 'Approved', '2021-07-31 08:37:14.16547', '3', 'Shitaye');

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
(8, 'Tariku', 'Gobena', '4C594sGZ8Uvi0ObNJNhiRQ==', 'R0ZOc+nGZJXcaGX2INb06ZdarSaoS3Xhi9U2jWhA63w=', 'bpZsWLmYiky6OWNPe5jLYw==', '138728.jpg', 'Male', '28', 'Metu', '2', 'BS', 'JIAQk0zLLfW1GqY6iJLX1Q==', '2021-07-30 08:13:11.15041'),
(10, 'moti', 'leta', 'IOeHHKa1Qo1+SlYFrIc8GA==', '/fX08jAKvgXnVv6Wmwm1OsHAt/ZAKp/jYIwhgV9mtH8=', 'uLIM8NDnOylqS3+VQr0c9A==', 'gaming-desktop-pc-custom-built-cpu--500x500.jpg', 'Male', '24', 'Metu', '3', 'user', 'JIAQk0zLLfW1GqY6iJLX1Q==', '2021-08-08 16:31:32.05393'),
(11, 'utwo', 'utwo', 'GmtuXW2D7kjFy/bnc23Luw==', 'fj3O7Qbe45MCsOg5/iVPQ3EzvIhINyN0w9GWoHUYXpU=', 'ydi/i2ETu4Kj845htnO8ng==', '91XIf2EE4YL._SY679_.jpg', 'Female', '25', 'Metu', '4', 'user', 'JIAQk0zLLfW1GqY6iJLX1Q==', '2021-08-08 20:35:09.18255');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_req`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_req` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
