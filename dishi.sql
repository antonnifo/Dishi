-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 06:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `phone` int(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `date_` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `date_`) VALUES
(1, 'john', 9832832, 'john@gmail.com', '{6e0b7076126a29d5dfcbd54835387b7b}', '2020-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `orders_`
--

CREATE TABLE `orders_` (
  `order_id` int(65) NOT NULL,
  `dishi` varchar(65) NOT NULL,
  `name_` varchar(65) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `address_` varchar(65) NOT NULL,
  `date_` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `d_date` varchar(65) NOT NULL,
  `time_` varchar(65) NOT NULL,
  `people` varchar(65) NOT NULL,
  `restrant` varchar(65) NOT NULL,
  `fullfilled` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_`
--

INSERT INTO `orders_` (`order_id`, `dishi`, `name_`, `phone`, `address_`, `date_`, `email`, `d_date`, `time_`, `people`, `restrant`, `fullfilled`) VALUES
(3, '2', 'john Doe', '7277', 'zimmerman', '2020-03-12', 'john@gmail.com', '03/14/2020', 'Lunch<', '2', 'c4 foods', 0),
(4, '2', 'john Doe', '7277', 'zimmerman', '2020-03-12', 'john@gmail.com', '03/14/2020', 'Lunch<', '2', 'c4 foods', 1),
(5, '2', 'john Doe', '7277', 'zimmerman', '2020-03-12', 'john@gmail.com', '03/14/2020', 'AX', '2', 'c4 foods', 1),
(6, 'BBQ', 'kamau', '794303', 'tao', '2020-03-15', 'kama@gmail.com', '03/17/2020', 'Dinner', '2', 'c4 foods', 0),
(7, 'BBQ', 'paul', '733298', 'kayole', '2020-03-15', 'paul@gmail.com', '03/16/2020', 'Dinner', '3', 'KFC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_`
--
ALTER TABLE `orders_`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_`
--
ALTER TABLE `orders_`
  MODIFY `order_id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
