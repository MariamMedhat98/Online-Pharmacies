-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 03:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwa2y`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categ_id` int(10) NOT NULL,
  `categ_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categ_id`, `categ_name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'baby'),
(4, 'hair');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL,
  `item_price` int(10) DEFAULT NULL,
  `item_image` varchar(100) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `total_price` int(10) GENERATED ALWAYS AS (`item_price` * `quantity`) VIRTUAL,
  `categ_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`, `item_image`, `quantity`, `categ_id`) VALUES
(1, 'ma', 45, NULL, 5, 1),
(2, 'va', 55, NULL, 6, 1),
(3, 'ka', 60, NULL, 5, 1),
(4, 'fa', 40, NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` int(10) NOT NULL,
  `total_price` float DEFAULT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_address` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ph_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderdetails_id` int(10) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total_price` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `ph_id` int(10) NOT NULL,
  `ph_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`ph_id`, `ph_name`) VALUES
(1, 'seif'),
(2, '10911'),
(3, 'roshdy');

-- --------------------------------------------------------

--
-- Table structure for table `ph_categ`
--

CREATE TABLE `ph_categ` (
  `id` int(10) NOT NULL,
  `ph_id` int(10) NOT NULL,
  `categ_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ph_item`
--

CREATE TABLE `ph_item` (
  `id` int(10) NOT NULL,
  `ph_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `user_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `category` (`categ_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_order` (`user_id`),
  ADD KEY `ph_order` (`ph_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_item` (`item_id`),
  ADD KEY `order` (`order_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `ph_categ`
--
ALTER TABLE `ph_categ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ph_cat` (`categ_id`),
  ADD KEY `ph_con` (`ph_id`);

--
-- Indexes for table `ph_item`
--
ALTER TABLE `ph_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ph_ite` (`item_id`),
  ADD KEY `ph` (`ph_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderdetails_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `ph_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `category` FOREIGN KEY (`categ_id`) REFERENCES `category` (`categ_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_data`
--
ALTER TABLE `order_data`
  ADD CONSTRAINT `ph_order` FOREIGN KEY (`ph_id`) REFERENCES `pharmacy` (`ph_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order` FOREIGN KEY (`order_id`) REFERENCES `order_data` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ph_categ`
--
ALTER TABLE `ph_categ`
  ADD CONSTRAINT `ph_cat` FOREIGN KEY (`categ_id`) REFERENCES `category` (`categ_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ph_con` FOREIGN KEY (`ph_id`) REFERENCES `pharmacy` (`ph_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ph_item`
--
ALTER TABLE `ph_item`
  ADD CONSTRAINT `ph` FOREIGN KEY (`ph_id`) REFERENCES `pharmacy` (`ph_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ph_ite` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
