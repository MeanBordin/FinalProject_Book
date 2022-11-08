-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 02:55 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'Mean', 'bordin', 'Meanbordin', 'bodinsak@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name_writer` varchar(40) NOT NULL,
  `book_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `type_name` varchar(40) NOT NULL,
  `price` float(8,2) NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name_writer`, `book_id`, `book_name`, `type_name`, `price`, `book_img`, `amount`) VALUES
('', 000002, 'python', 'เทคโนโลยี', 250.00, 'bk_63671d9ce55c8.jpg', 30),
('-', 000004, 'Java', 'เทคโนโลยี', 250.00, 'bk_6367b5c3dfcc7.png', 19),
('-', 000005, 'JavaScript + node js', 'เทคโนโลยี', 250.00, 'bk_6367b5d9d8295.jpg', 26),
('-', 000006, 'PHP', 'เทคโนโลยี', 250.00, 'bk_6368c0c318df3.jpg', 30),
('-', 000007, 'React', 'เทคโนโลยี', 300.00, 'bk_6368c0d31d237.jpg', 50),
('-', 000008, 'Data structure and Algorithm', 'เทคโนโลยี', 350.00, 'bk_6368c0ec7daa9.webp', 49),
('-', 000009, 'python', 'การ์ตูน', 250.00, 'bk_6369339d35e77.jpg', 50),
('-', 000010, 'Java', 'เทคโนโลยี', 250.00, 'bk_636933ab0ab50.jpg', 49),
('-', 000011, 'Java', 'เทคโนโลยี', 250.00, 'bk_636933bd7f906.jpg', 39),
('-', 000012, 'JavaScript + node js', 'นิยาย', 250.00, 'bk_636933ea3a493.jpg', 100),
('-', 000013, 'python', 'เทคโนโลยี', 250.00, 'bk_63694d6e4f0b2.jpg', 98);

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
  `cus_name` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cus_name`, `address`, `phone`, `total_price`, `status`, `date`) VALUES
(0000000001, 'AAA', 'AAA BBB CCC ', '1234567890', 1250, '1', '2022-11-07 18:12:57'),
(0000000002, 'AAA123', 'AAA CCC BBB', '1234567890', 1750, '1', '2022-11-07 18:14:07'),
(0000000003, 'AAA', 'ASDFGHJ', '1234567890', 1350, '1', '2022-11-07 18:20:59'),
(0000000004, 'บดินทร์ศักดิ์ ประสพบุญ ', '111/1 หมู่ 10 ต.คลองหก อ.คลองหลวง จ.ปทุมธานี ', '081-290-81', 1000, '1', '2022-11-08 05:22:32'),
(0000000005, 'บดินทร์ศักดิ์ ประสพบุญ ', '111/1 หมู่ 10 ต.คลองหก อ.คลองหลวง จ.ปทุมธานี ', '081-290-81', 2000, '1', '2022-11-08 06:29:20'),
(0000000006, 'บดินทร์ศักดิ์ ประสพบุญ ', '111/1 หมู่ 10 ต.คลองหก อ.คลองหลวง จ.ปทุมธานี ', '081-290-81', 2750, '1', '2022-11-08 06:50:09'),
(0000000007, 'บดินทร์ศักดิ์ ประสพบุญ ', '111/1 หมู่ 10 ต.คลองหก อ.คลองหลวง จ.ปทุมธานี ', '081-290-81', 2750, '1', '2022-11-08 06:50:31'),
(0000000046, '', '', '', 1500, '1', '2022-11-08 08:21:44'),
(0000000047, '', '', '', 250, '1', '2022-11-08 08:25:44'),
(0000000048, 'บดินทร์ศักดิ์ ประสพบุญ ', '111/1 หมู่ 10 ต.คลองหก อ.คลองหลวง จ.ปทุมธานี ', '081-290-81', 1000, '1', '2022-11-08 10:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `book_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `order_price` float NOT NULL,
  `amount_qty` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `book_id`, `order_price`, `amount_qty`, `total`) VALUES
(1, 0000000001, 0000000004, 250, 2, 500),
(2, 0000000001, 0000000005, 250, 3, 750),
(3, 0000000002, 0000000004, 250, 2, 500),
(4, 0000000002, 0000000005, 250, 4, 1000),
(5, 0000000002, 0000000006, 250, 1, 250),
(6, 0000000003, 0000000004, 250, 1, 250),
(7, 0000000003, 0000000005, 250, 1, 250),
(8, 0000000003, 0000000006, 250, 1, 250),
(9, 0000000003, 0000000010, 250, 1, 250),
(10, 0000000003, 0000000008, 350, 1, 350),
(11, 0000000004, 0000000004, 250, 1, 250),
(12, 0000000004, 0000000002, 250, 1, 250),
(13, 0000000004, 0000000006, 250, 1, 250),
(14, 0000000004, 0000000005, 250, 1, 250),
(15, 0000000005, 0000000004, 250, 2, 500),
(16, 0000000005, 0000000002, 250, 2, 500),
(17, 0000000005, 0000000006, 250, 2, 500),
(18, 0000000005, 0000000005, 250, 2, 500),
(19, 0000000006, 0000000004, 250, 3, 750),
(20, 0000000006, 0000000002, 250, 2, 500),
(21, 0000000006, 0000000006, 250, 2, 500),
(22, 0000000006, 0000000005, 250, 2, 500),
(23, 0000000006, 0000000011, 250, 2, 500),
(24, 0000000007, 0000000004, 250, 3, 750),
(25, 0000000007, 0000000002, 250, 2, 500),
(26, 0000000007, 0000000006, 250, 2, 500),
(27, 0000000007, 0000000005, 250, 2, 500),
(28, 0000000007, 0000000011, 250, 2, 500),
(29, 0000000008, 0000000004, 250, 3, 750),
(30, 0000000008, 0000000002, 250, 3, 750),
(31, 0000000008, 0000000006, 250, 2, 500),
(32, 0000000008, 0000000005, 250, 2, 500),
(33, 0000000008, 0000000011, 250, 2, 500),
(34, 0000000009, 0000000004, 250, 3, 750),
(35, 0000000009, 0000000002, 250, 3, 750),
(36, 0000000009, 0000000006, 250, 2, 500),
(37, 0000000009, 0000000005, 250, 2, 500),
(38, 0000000009, 0000000011, 250, 2, 500),
(39, 0000000010, 0000000004, 250, 3, 750),
(40, 0000000010, 0000000002, 250, 4, 1000),
(41, 0000000010, 0000000006, 250, 2, 500),
(42, 0000000010, 0000000005, 250, 2, 500),
(43, 0000000010, 0000000011, 250, 2, 500),
(44, 0000000046, 0000000004, 250, 3, 750),
(45, 0000000046, 0000000002, 250, 3, 750),
(46, 0000000047, 0000000004, 250, 1, 250),
(47, 0000000048, 0000000013, 250, 2, 500),
(48, 0000000048, 0000000012, 250, 1, 250),
(49, 0000000048, 0000000011, 250, 1, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
