-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 02:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `order_id` varchar(99) NOT NULL,
  `product_id` varchar(99) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `order_by` varchar(99) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `order_id`, `product_id`, `product_qty`, `order_by`, `date`) VALUES
(1, '588c68e277d31', '587f637cc47b9', 1, '', '2017-01-28 09:48:18'),
(3, '588c68e277d31', '587f61dfbdbd1', 1, '', '2017-01-28 09:48:40'),
(4, '588c7dbf36059', '587f616f4cd70', 1, '', '2017-01-28 11:17:19'),
(6, '588c9150830d5', '587f63704da7e', 2, '', '2017-01-28 12:40:48'),
(7, '588c9150830d5', '587f61dfbdbd1', 2, '', '2017-01-28 12:41:24'),
(8, '588c981a7a8a9', '587f616f4cd70', 1, '', '2017-01-28 13:09:46'),
(9, '588c981a7a8a9', '587f63704da7e', 1, '', '2017-01-28 13:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat`) VALUES
(1, 'mobile'),
(2, 'laptop'),
(3, 'computer'),
(4, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_cat` varchar(99) NOT NULL,
  `product_id` varchar(99) NOT NULL,
  `product_name` varchar(99) NOT NULL,
  `product_desc` varchar(99) NOT NULL,
  `product_img` varchar(99) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_cat`, `product_id`, `product_name`, `product_desc`, `product_img`, `product_price`) VALUES
(1, 'mobile', '787970', 'Samsung S67', 'This one is latest mobile phone ', '1.jpg', 325),
(2, 'mobile', '654312', 'Nokia 6300', 'This one is latest mobile phone ', '2.jpg', 120),
(6, 'mobile', '587f614dd8440', 'Apple iPhone 5', 'Apple iPhone', 'iphone5.jpg', 450),
(7, 'mobile', '587f616f4cd70', 'Apple iPhone 4', 'Apple iPhone 4', 'iphone4.jpg', 315),
(8, 'laptop', '587f61dfbdbd1', 'acer', 'acer', 'acer1.jpg', 700),
(9, 'laptop', '587f6221a8afb', 'lenovo', 'lenovo', 'lenovo.jpg', 1000),
(11, 'computer', '587f629712785', 'pc', 'pc', 'pc1.jpg', 1233),
(12, 'computer', '587f62c6f3812', 'pc', 'pc', 'pc2.png', 1590),
(13, 'accessories', '587f63704da7e', 'accessories', 'accessories', 'sl1.jpg', 18),
(14, 'accessories', '587f637cc47b9', 'accessories', 'accessories', 'sl1.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `cell_no` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `cell_no`, `password`) VALUES
(2, '587fb613622a0', 'niki', 'niki@mail.bg', '09815512', '123456'),
(3, '587fb6324c228', 'asen', 'asen@mail.bg', '088958312', '12345678'),
(4, '587fc3f9c3761', 'asen', 'asen@mail.bg', '088958312', '12345678'),
(5, '587fc4042bfea', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
