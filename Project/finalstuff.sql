-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 08:31 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'bdubbs', 'password'),
(2, 'admin', 'password'),
(3, 'bruce', 'password'),
(4, 'blah', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'wayne', 'password'),
(3, 'employee', 'password'),
(4, 'JustinIsProgramming', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product` varchar(1000) NOT NULL,
  `vending` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product`, `vending`, `quantity`) VALUES
('Cheetos Crunchy', 1, 10),
('Cheez-It', 1, 10),
('Doritos Cool Ranch', 1, 10),
('Doritos Nacho Cheese', 1, 10),
('Fritos', 1, 10),
('Hersheys Chocolate Bar', 1, 10),
('Lays BBQ', 1, 10),
('Lays Classic', 1, 10),
('M&Ms', 1, 10),
('Potato Skins', 1, 10),
('Reeses Pieces', 1, 10),
('Ruffles Classic', 1, 10),
('Smartfood White Cheddar Popcorn', 1, 10),
('Sourdough Pretzels', 1, 10),
('Welchs Fruit Snack', 1, 10),
('Wheat Thins Toasted Chips', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `inventorychange`
--

CREATE TABLE `inventorychange` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `productOut` varchar(100) NOT NULL,
  `productIn` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `VendingMachine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventorychange`
--

INSERT INTO `inventorychange` (`id`, `admin`, `productOut`, `productIn`, `Quantity`, `VendingMachine`) VALUES
(1, 1, 'Sourdough Pretzels', 'M&Ms', 8, 1),
(2, 2, 'Potato Skins', 'Doritios Cool Ranch', 9, 1),
(3, 2, 'Sourdough Pretzels', 'Ruffles Classic', 6, 1),
(4, 2, 'Ruffles Classic', 'Ruffles Classic', 7, 1),
(5, 2, 'Cheetos Crunchy', 'Sourdough Pretzels', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `product` varchar(140) NOT NULL,
  `vending` int(11) NOT NULL,
  `record` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `product`, `vending`, `record`) VALUES
(1, 'M&Ms', 1, 33),
(2, 'Fritos', 1, 46),
(4, 'Fritos', 1, 48),
(5, 'Fritos', 1, 49),
(6, 'Fritos', 1, 50),
(7, 'Fritos', 1, 51),
(8, 'Cheetos Crunchy', 1, 52),
(9, 'Cheetos Crunchy', 1, 53),
(10, 'Cheetos Crunchy', 1, 54),
(11, 'Cheetos Crunchy', 1, 55),
(12, 'Cheetos Crunchy', 1, 56),
(13, 'Cheetos Crunchy', 1, 57),
(14, 'Cheetos Crunchy', 1, 58),
(15, 'Cheetos Crunchy', 1, 59),
(16, 'Cheez-It', 1, 60),
(17, 'Cheez-It', 1, 61),
(18, 'Cheez-It', 1, 62);

-- --------------------------------------------------------

--
-- Table structure for table `restocknotification`
--

CREATE TABLE `restocknotification` (
  `row` int(11) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `vending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statisticsreport`
--

CREATE TABLE `statisticsreport` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `file` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timestamp`
--

CREATE TABLE `timestamp` (
  `id` int(11) NOT NULL,
  `timestamp` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timestamp`
--

INSERT INTO `timestamp` (`id`, `timestamp`, `type`) VALUES
(2, '2017-04-29 14:49:58', 'bdubbs Login'),
(3, '2017-04-29 14:51:56', 'employee Failed Login'),
(4, '2017-04-29 14:53:02', 'admin Login'),
(5, '2017-04-29 14:53:33', 'admin Login'),
(6, '2017-04-29 15:25:44', 'Product Update Success'),
(7, '2017-04-29 15:28:03', 'employee Login'),
(8, '2017-04-29 15:37:50', 'admin Login'),
(9, '2017-04-29 15:38:25', 'admin Login'),
(10, '2017-04-29 15:38:34', 'Product Update Failed'),
(11, '2017-04-29 15:39:03', 'Product Update Failed'),
(12, '2017-04-29 15:39:09', 'Product Update Failed'),
(13, '2017-04-29 15:40:05', 'Product Update Failed'),
(14, '2017-04-29 15:40:50', 'Product Update Failed'),
(15, '2017-04-29 15:43:52', 'Product Update Success'),
(16, '2017-04-29 15:45:29', 'Product Update Success'),
(17, '2017-04-29 15:46:00', 'Product Update Success'),
(18, '2017-04-29 16:07:11', 'employee Login'),
(19, '2017-04-29 16:33:41', 'Failed to Clear Inventory Change Table'),
(20, '2017-04-29 16:33:46', 'Failed to Clear Inventory Change Table'),
(21, '2017-04-29 16:37:04', 'Failed to Clear Inventory Change Table'),
(22, '2017-04-29 16:42:18', 'Cleared Inventory Change Table'),
(23, '2017-04-29 17:48:35', 'Product Update Success'),
(24, '2017-04-29 17:57:58', 'Cleared Inventory Change Table'),
(25, '2017-04-30 14:41:17', 'bdubbs Login'),
(26, '2017-04-30 14:41:26', 'Product Update Success'),
(27, '2017-04-30 14:41:36', 'employee Login'),
(28, '2017-04-30 14:43:22', 'employee Login'),
(29, '2017-04-30 14:43:34', 'admin Login'),
(30, '2017-04-30 14:43:46', 'Product Update Success'),
(31, '2017-04-30 14:43:54', 'employee Login'),
(32, '2017-05-02 19:25:57', 'admin Login'),
(33, '2017-05-02 15:39:47', 'M&Ms'),
(34, '2017-05-06 15:10:38', 'admin Login'),
(35, '2017-05-06 15:54:50', 'admin Login'),
(36, '2017-05-06 15:55:11', 'Product Update Success'),
(37, '2017-05-06 15:56:13', 'wayne Login'),
(38, '2017-05-06 16:02:32', 'admin Login'),
(39, '2017-05-08 21:07:59', 'Purchase'),
(40, '2017-05-09 18:44:13', 'admin Login'),
(41, '2017-05-09 18:44:37', 'Product Update Success'),
(42, '2017-05-09 19:10:05', 'Fritos Purchase'),
(43, '2017-05-09 19:10:51', 'Fritos Purchase'),
(44, '2017-05-09 19:11:28', 'Fritos Purchase'),
(45, '2017-05-09 19:12:02', 'Fritos Purchase'),
(46, '2017-05-09 19:12:23', 'Fritos Purchase'),
(47, '2017-05-09 19:17:42', ' Purchase'),
(48, '2017-05-09 19:18:14', 'Fritos Purchase'),
(49, '2017-05-09 19:22:35', 'Fritos Purchase'),
(50, '2017-05-09 19:22:38', 'Fritos Purchase'),
(51, '2017-05-09 19:22:39', 'Fritos Purchase'),
(52, '2017-05-09 19:58:34', 'Cheetos Crunchy Purchase'),
(53, '2017-05-09 19:58:36', 'Cheetos Crunchy Purchase'),
(54, '2017-05-09 19:58:39', 'Cheetos Crunchy Purchase'),
(55, '2017-05-09 19:59:02', 'Cheetos Crunchy Purchase'),
(56, '2017-05-09 19:59:03', 'Cheetos Crunchy Purchase'),
(57, '2017-05-09 19:59:05', 'Cheetos Crunchy Purchase'),
(58, '2017-05-09 19:59:06', 'Cheetos Crunchy Purchase'),
(59, '2017-05-09 19:59:07', 'Cheetos Crunchy Purchase'),
(60, '2017-05-09 19:59:08', 'Cheez-It Purchase'),
(61, '2017-05-09 19:59:09', 'Cheez-It Purchase'),
(62, '2017-05-09 19:59:09', 'Cheez-It Purchase'),
(63, '2017-05-09 20:06:32', 'admin Login'),
(64, '2017-05-09 20:06:43', 'Product Update Success');

-- --------------------------------------------------------

--
-- Table structure for table `vendingmachine`
--

CREATE TABLE `vendingmachine` (
  `id` int(11) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendingmachine`
--

INSERT INTO `vendingmachine` (`id`, `location`) VALUES
(1, 'Library');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product`,`vending`),
  ADD KEY `vending` (`vending`);

--
-- Indexes for table `inventorychange`
--
ALTER TABLE `inventorychange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`),
  ADD KEY `VendingMachine` (`VendingMachine`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vending` (`vending`),
  ADD KEY `record` (`record`);

--
-- Indexes for table `restocknotification`
--
ALTER TABLE `restocknotification`
  ADD PRIMARY KEY (`row`),
  ADD KEY `vending` (`vending`);

--
-- Indexes for table `statisticsreport`
--
ALTER TABLE `statisticsreport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`),
  ADD KEY `timestamp` (`timestamp`);

--
-- Indexes for table `timestamp`
--
ALTER TABLE `timestamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendingmachine`
--
ALTER TABLE `vendingmachine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `inventorychange`
--
ALTER TABLE `inventorychange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `restocknotification`
--
ALTER TABLE `restocknotification`
  MODIFY `row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statisticsreport`
--
ALTER TABLE `statisticsreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timestamp`
--
ALTER TABLE `timestamp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `vendingmachine`
--
ALTER TABLE `vendingmachine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_fk_vending` FOREIGN KEY (`vending`) REFERENCES `vendingmachine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventorychange`
--
ALTER TABLE `inventorychange`
  ADD CONSTRAINT `invchan_fk_admin` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invchan_fk_vending` FOREIGN KEY (`VendingMachine`) REFERENCES `vendingmachine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_record_fk` FOREIGN KEY (`record`) REFERENCES `timestamp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_vending_fk` FOREIGN KEY (`vending`) REFERENCES `vendingmachine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restocknotification`
--
ALTER TABLE `restocknotification`
  ADD CONSTRAINT `restock_fk_vending` FOREIGN KEY (`vending`) REFERENCES `vendingmachine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statisticsreport`
--
ALTER TABLE `statisticsreport`
  ADD CONSTRAINT `statisticsreport_admin_fk` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statisticsreport_timestamp_fk` FOREIGN KEY (`timestamp`) REFERENCES `timestamp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
