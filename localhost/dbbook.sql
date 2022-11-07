-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name_writer` varchar(40) NOT NULL,
  `book_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `type_name` varchar(40) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `book_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name_writer`, `book_id`, `book_name`, `type_name`, `price`, `book_img`) VALUES
('', 000002, 'python', 'เทคโนโลยี', '250.00', 'bk_63671d9ce55c8.jpg'),
('-', 000004, 'Java', 'เทคโนโลยี', '250.00', 'bk_6367b5c3dfcc7.png'),
('-', 000005, 'JavaScript + node js', 'เทคโนโลยี', '250.00', 'bk_6367b5d9d8295.jpg'),
('-', 000006, 'PHP', 'เทคโนโลยี', '250.00', 'bk_6368c0c318df3.jpg'),
('-', 000007, 'React', 'เทคโนโลยี', '300.00', 'bk_6368c0d31d237.jpg'),
('-', 000008, 'Data structure and Algorithm', 'เทคโนโลยี', '350.00', 'bk_6368c0ec7daa9.webp');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(7) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัส',
  `first_name` varchar(40) NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(40) NOT NULL COMMENT 'นามสกุล',
  `username` varchar(40) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `email` varchar(40) NOT NULL COMMENT 'อีเมล',
  `password` varchar(128) NOT NULL COMMENT 'รหัสผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(0000001, 'user101', 'ประสพบุญ', '1', '12@gmail.com', '12345678'),
(0000002, 'Bordinsak', 'prasopboon', 'test1', 'meen.servant@hotmail.com', 'fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe'),
(0000003, 'hee1', 'hee3', 'hee', 'hee12@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cus_name` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `book_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `order_price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
