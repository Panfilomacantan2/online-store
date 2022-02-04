-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 02:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
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
(37, 'mouse', 'computer', '2022-01-27 11:42:27', '50000', '61f25af3cda797.52603404.jpg'),
(38, 'mouse', 'computer', '2022-01-27 11:43:13', '50000', '61f25b21dad707.38264151.jpg'),
(39, 'mouse', 'computer', '2022-01-27 11:44:00', '50000', '61f25b50b722e5.34931366.jpg'),
(40, 'mouse', 'computer', '2022-01-27 11:44:41', '50000', '61f25b792d7fc6.95215796.jpg'),
(41, 'mouse', 'computer', '2022-01-27 11:45:34', '50000', '61f25bae45bb94.12761190.jpg'),
(42, 'mouse', 'computer', '2022-01-27 11:46:21', '50000', '61f25bdd2ec797.67957718.jpg'),
(43, 'mouse', 'computer', '2022-01-27 11:46:50', '50000', '61f25bfa46dcb0.81123326.jpg'),
(44, 'mouse', 'computer', '2022-01-27 11:48:57', '50000', '61f25c79a31117.35381890.jpg'),
(45, 'mouse', 'computer', '2022-01-27 11:49:17', '50000', '61f25c8d433a85.82527835.jpg'),
(46, 'mouse', 'computer', '2022-01-27 11:50:45', '50000', '61f25ce51ed194.73316470.jpg'),
(47, 'mouse', 'computer', '2022-01-27 11:50:45', '50000', '61f25ce555da54.61665847.jpg'),
(48, 'mouse', 'computer', '2022-01-27 11:50:45', '50000', '61f25ce581a206.08263619.jpg'),
(49, 'mouse', 'computer', '2022-01-27 11:51:48', '50000', '61f25d240b7214.96536283.jpg'),
(50, 'mouse', 'computer', '2022-01-27 11:53:04', '50000', '61f25d7013f973.36642271.jpg'),
(51, 'mouse', 'computer', '2022-01-27 11:55:35', '50000', '61f25e078437f8.09112232.jpg'),
(52, 'mouse', 'computer', '2022-01-27 11:55:35', '50000', '61f25e07c13e50.33527343.jpg'),
(53, 'mouse', 'computer', '2022-01-27 11:55:36', '50000', '61f25e080ca496.60315172.jpg'),
(54, 'mouse', 'computer', '2022-01-27 11:55:36', '50000', '61f25e08569914.13281094.jpg'),
(55, 'mouse', 'computer', '2022-01-27 11:55:36', '50000', '61f25e08978b44.62026793.jpg'),
(56, 'mouse', 'computer', '2022-01-27 11:55:36', '50000', '61f25e08cdb791.06743798.jpg'),
(57, 'mouse', 'computer', '2022-01-27 11:55:37', '50000', '61f25e090bae47.90665655.jpg'),
(58, 'mouse', 'computer', '2022-01-27 11:55:37', '50000', '61f25e09380fc3.07315135.jpg'),
(59, 'mouse', 'computer', '2022-01-27 12:12:56', '50000', '61f2621811a854.27261304.jpg'),
(60, 'mouse', 'computer', '2022-01-27 12:13:41', '50000', '61f262453937b8.16111402.jpg'),
(61, 'mouse', 'computer', '2022-01-27 12:13:57', '50000', '61f26255a75470.87572342.jpg'),
(62, 'mouse', 'computer', '2022-01-27 12:14:00', '50000', '61f26258056905.21181498.jpg'),
(63, 'mouse', 'computer', '2022-01-27 12:14:04', '50000', '61f2625c6dc738.54142033.jpg'),
(64, 'mouse', 'computer', '2022-01-27 12:14:04', '50000', '61f2625ccc58b2.54125912.jpg'),
(65, 'mouse', 'computer', '2022-01-27 12:14:47', '50000', '61f262874d8565.77881156.jpg'),
(66, 'mouse', 'computer', '2022-01-27 12:15:26', '50000', '61f262ae156b64.01561544.jpg'),
(67, 'mouse', 'computer', '2022-01-27 12:15:33', '50000', '61f262b5eeaa18.15227612.jpg'),
(68, 'mouse', 'computer', '2022-01-27 12:15:35', '50000', '61f262b7713ef0.92526945.jpg'),
(69, 'a', 'computer', '2022-01-27 12:15:46', '50000', '61f262c255bb44.19039480.jpg'),
(70, 'a', 'computer', '2022-01-27 12:15:59', '50000', '61f262cf4e5450.77184655.jpg'),
(71, 'mouse', 'computer', '2022-01-27 12:17:35', '50000', '61f2632f68ebb3.60042685.jpg'),
(72, 'mouse', 'computer', '2022-01-27 12:17:43', '50000', '61f26337e1efc4.12852032.jpg'),
(73, 'mouse', 'computer', '2022-01-27 12:17:44', '50000', '61f26338381990.06723853.jpg'),
(74, 'mouse', 'computer', '2022-01-27 12:20:09', '50000', '61f263c96d4ea5.49267577.jpg'),
(75, 'mouse', 'computer', '2022-01-27 12:20:10', '50000', '61f263cadac533.64278880.jpg'),
(76, 'mouse', 'computer', '2022-01-27 12:20:11', '50000', '61f263cb4b34e8.98402820.jpg'),
(77, 'mouse', 'computer', '2022-01-27 12:20:13', '50000', '61f263cd0d4323.48764288.jpg'),
(78, 'mouse', 'computer', '2022-01-27 12:20:13', '50000', '61f263cd7b0131.22688226.jpg'),
(79, 'mouse', 'computer', '2022-01-27 12:20:13', '50000', '61f263cdca91c9.33310593.jpg'),
(80, 'mouse', 'computer', '2022-01-27 12:20:14', '50000', '61f263ce34e4a6.98620991.jpg'),
(81, 'mouse', 'computer', '2022-01-27 12:20:33', '50000', '61f263e155f4a4.49968664.jpg'),
(82, 'banana', 'food', '2022-01-27 13:14:42', '20', '61f27092688505.89980658.jpg'),
(83, 'banana', 'food', '2022-01-27 13:15:23', '20', '61f270bbc3ad76.82216400.jpg'),
(84, 'banana', 'food', '2022-01-27 13:15:29', '20', '61f270c1c251c2.30174038.jpg'),
(85, 'banana', 'food', '2022-01-27 13:15:29', '20', '61f270c1f2c6f3.23772842.jpg'),
(86, 'banana', 'food', '2022-01-27 13:15:31', '20', '61f270c309f9f9.27614735.jpg'),
(87, 'banana', 'food', '2022-01-27 13:15:31', '20', '61f270c33d77c3.15385030.jpg'),
(88, 'banana', 'food', '2022-01-27 13:15:31', '20', '61f270c36c71a0.05099371.jpg'),
(89, 'banana', 'food', '2022-01-27 13:15:30', '20', '61f270c275abd5.18445292.jpg'),
(90, 'banana', 'food', '2022-01-27 13:15:32', '20', '61f270c3d584a3.39151283.jpg'),
(91, 'banana', 'food', '2022-01-27 13:15:32', '20', '61f270c44a1c73.29327210.jpg'),
(92, 'banana', 'food', '2022-01-27 13:15:32', '20', '61f270c476b958.62352323.jpg'),
(93, 'banana', 'food', '2022-01-27 13:15:32', '20', '61f270c4b2a300.24756554.jpg'),
(94, 'banana', 'food', '2022-01-27 13:15:33', '20', '61f270c518a967.39428939.jpg'),
(95, 'banana', 'food', '2022-01-27 13:15:33', '20', '61f270c5c366a5.93942611.jpg'),
(96, 'banana', 'food', '2022-01-27 13:15:34', '20', '61f270c6290155.96521540.jpg'),
(97, 'banana', 'food', '2022-01-27 13:15:34', '20', '61f270c6ba93e6.19192071.jpg'),
(98, 'banana', 'food', '2022-01-27 13:15:35', '20', '61f270c7591fc4.21502942.jpg'),
(99, 'banana', 'food', '2022-01-27 13:15:36', '20', '61f270c7ef0fb6.11752512.jpg'),
(100, 'banana', 'food', '2022-01-27 13:15:36', '20', '61f270c8ba98c0.91796091.jpg'),
(101, 'banana', 'food', '2022-01-27 13:15:37', '20', '61f270c907edd0.96457230.jpg'),
(102, 'banana', 'food', '2022-01-27 13:15:37', '20', '61f270c93997b6.26779008.jpg'),
(103, 'banana', 'food', '2022-01-27 13:16:00', '20', '61f270e0ae46b7.87355325.jpg'),
(104, 'banana', 'food', '2022-01-27 13:16:03', '20', '61f270e35435d6.89130456.jpg'),
(105, 'airlines', 'jet', '2022-01-27 13:17:33', '100000', '61f2713d3b8886.65569837.jpg'),
(106, 'keyboard', 'computer', '2022-01-27 19:49:08', '300', '61f2cd03eb0fc2.31536444.jpg'),
(107, 'keyboard', 'computer', '2022-01-27 19:49:48', '400', '61f2cd2ccb6d14.97000721.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
