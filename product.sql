-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 04:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30996647_online_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  `product_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_category`, `added_at`, `product_price`, `product_image`) VALUES
(112, 'laptop', 'gadget', '2022-01-30 01:16:20', '30000', '61f65764de9094.68886860.jpg'),
(113, 'bike', 'bicycle', '2022-02-04 14:11:44', '5000', '61fd6c603b5d83.32331970.jpg'),
(114, 'bike', 'bicycle', '2022-02-04 14:13:31', '5000', '61fd6ccbe58f25.77574005.jpg'),
(115, 'bike', 'bicycle', '2022-02-04 14:14:12', '5000', '61fd6cf4cbcd91.41869509.jpg'),
(116, 'bike', 'bicycle', '2022-02-04 14:14:13', '5000', '61fd6cf5c85a18.35008973.jpg'),
(117, 'bike', 'bicycle', '2022-02-04 14:14:50', '5000', '61fd6d1a6270f3.98214426.jpg'),
(118, 'bike', 'bicycle', '2022-02-04 14:17:33', '5000', '61fd6dbdb3d391.82942619.jpg'),
(119, 'bike', 'bicycle', '2022-02-04 14:17:34', '5000', '61fd6dbe7d2bd4.02984256.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
