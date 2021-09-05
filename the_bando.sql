-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2021 at 06:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_bando`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'koech', 'koechian'),
(2, 'test', 'test'),
(4, 'jeff', 'jeff'),
(6, 'jambazi', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

DROP TABLE IF EXISTS `confirmed`;
CREATE TABLE `confirmed` (
  `order_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `food_name` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `time_confirmed` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`order_id`, `id`, `food_name`, `time_confirmed`) VALUES
(22, 11, 'Pastry Box', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE `foods` (
  `id` int(3) NOT NULL,
  `food_name` varchar(27) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL,
  `caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `price`, `quantity`, `caption`) VALUES
(1, 'Pastry Box', 1200, 4, '1 Freshly baked pastries of your choice.'),
(2, 'Cookie Box Bundle', 200, 6, 'A seletion of 3 whole wheat cookies with toppings of your choice. '),
(3, 'Bread', 70, 30, 'A loaf of Freshly Baked whole wheat bread. Severd either white or whole grain [400 grams of greatness] '),
(4, 'Pies', 250, 10, 'Anything goes. If you can think it up, we can serve it.'),
(5, 'Slab Cakes', 200, 10, 'Choose between three trademark flavors. Red Velvet, Dark Forest and  <br> Strawberry Crumble'),
(6, 'AMERICANO', 200, 30, NULL),
(7, 'CAFFE LATTE', 200, 30, NULL),
(8, 'VANILLA LATTE', 200, 30, NULL),
(9, 'MOCHA', 200, 30, NULL),
(10, 'HOT CHOCOLATE', 200, 30, NULL),
(11, 'CAPPUCCINO', 200, 30, NULL),
(12, 'LATTE MACCHIATTO', 200, 30, NULL),
(13, 'GREEN TEA', 120, 100, NULL),
(14, 'CHAI LATTE', 120, 100, NULL),
(15, 'GREEN TEA AND LEMON GRASS', 120, 100, NULL),
(16, 'MORROCAN MINT TEA', 120, 100, NULL),
(17, 'KENYAN TEA', 120, 100, NULL),
(18, 'Classic Smoothie', 450, 10, ' Banana / Strawberry / Mango /Pineapple'),
(19, 'THE WEIGHT WATCHER SMOOTHIE', 450, 10, 'Cucumber, Spinach, apple, lemon & Ginger '),
(20, 'MINT TWIST', 450, 10, 'Mint, celery, avocado, spinach, basil, apple, honey & moringa '),
(21, 'INDIAN MADLAD SMOOTHIE', 450, 5, 'Baobab powder, chia seeds, honey, banana,sweetmelon, passion juice & red chilli '),
(22, 'BREAKFAST CROISSANT', 690, 3, 'Two poached eggs, mustard, tomatoes, rocket leaves, cheese & served with fresh salad. '),
(23, 'FRENCH TOAST', 690, 3, 'Served with homemade jam, Mascarpone cheese & fresh fruit salad. '),
(24, 'FRESHLY BAKED BREAD BASKET', 390, 6, 'Served with butter & homemade jam'),
(25, 'MUESLI', 550, 8, 'Fresh fruit salad, granola, honey & yoghurt '),
(34, 'ian', 3, 3, 'test1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `food_name` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `id`, `food_name`, `price`) VALUES
(119, 31, 'Pastry Box', 1200),
(120, 31, 'Cookie Box Bundle', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `newsletter` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `username`, `password`, `dob`, `area`, `newsletter`, `pic`) VALUES
(31, 'Test Tester', 'test@gmail', 'test', 'test', '2000-09-18', 'South_C', 'Yes', NULL),
(33, 'Ian Koeh', 'ian@gmail', 'Ian', 'ian', '2021-08-02', 'South_C', 'Yes', NULL),
(34, 'Osir Osir', 'kim@gmail.com', 'Kim', 'ivdchv', '2021-08-04', 'South_C', 'Yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
