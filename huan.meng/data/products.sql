-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2020 at 05:30 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huan_aauwnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(2, 'Strawberries N\' Cream', '25.99', 'Ice cream cup', '2020-04-12 21:04:33', '2020-04-12 21:04:33', 'Vanilla blend with different flavored ice cream and big strawberry chunks on the top', 'img/row_1_2.png', 'img/row_1_2.png'),
(3, 'Swirled Rain', '25.99', 'Ice cream cup', '2020-04-12 21:06:10', '2020-04-12 21:06:10', 'Vanilla flavored ice cream with a swirl of condensed milk', 'img/row_1_3.png', 'img/row_1_3.png'),
(4, 'Fruit Party', '68.99', 'Birthday ice cre', '2020-04-12 21:08:46', '2020-04-12 21:08:46', 'Fruit flavored juicy toppings and  an ice cream cone on the top of fruit sandwish cakes', 'img/row_2_1.png', 'img/row_2_1.png'),
(5, 'Eggnog ', '58.99', 'Birthday ice cre', '2020-04-12 21:10:24', '2020-04-12 21:10:24', 'Egg yolks and spices', 'img/row_2_2.png', 'img/row_2_2.png'),
(6, 'Rocky Road', '78.99', 'Birthday ice cre', '2020-04-12 21:11:43', '2020-04-12 21:11:43', 'Royal chocolate Ice cream birthday cake (see Chocolate above) with macaroon and chocolate cone,Rich, dark chocolate produced from cocoa beans grown in the Ivory Coast, Brazil and Indonesia', 'img/row_2_3.png', 'img/row_2_3.png'),
(7, 'Halo Halo Bars', '5.99', 'Ice cream collat', '2020-04-12 21:14:08', '2020-04-12 21:14:08', 'Multicolored sugar sprinkled over chocolate on the bar shaped cookies', 'img/row_3_1.png', 'img/row_3_1.png'),
(8, 'Halo Yolo Cones', '5.99', 'Ice cream collat', '2020-04-12 21:16:32', '2020-04-12 21:16:32', 'Multicolored sugar sprinkled over chocolate on the cone shape cookies', 'img/row_3_2.png', 'img/row_3_2.png'),
(9, 'Halo Pinky Cookies', '5.99', 'Ice cream collat', '2020-04-12 21:17:49', '2020-04-12 21:17:49', 'Multicolored sugar sprinkled over cherry flavored chocolate on the cookies', 'img/row_3_3.png', 'img/row_3_3.png'),
(10, 'Coffee Flavor Sets', '32.99', 'Ice cream set', '2020-04-12 21:19:08', '2020-04-12 21:19:08', 'Sharing set with coffee flavored ice cream', 'img/row_4_1.png', 'img/row_4_1.png'),
(11, 'Mixed Berries Flavor Sets', '32.99', 'Ice cream set', '2020-04-12 21:20:18', '2020-04-12 21:20:18', 'Sharing set with raspberry, strawberry and blueberry ice cream', 'img/row_4_2.png', 'img/row_4_2.png'),
(12, 'Mint Fruits Sets', '32.99', 'Ice cream set', '2020-04-12 21:22:12', '2020-04-12 21:22:12', 'Sharing set with peppermint ice cream with many different flavors you can choose', 'img/row_4_3.png', 'img/row_4_3.png'),
(16, 'New York Cherry', '25.99', 'Ice cream cup', '2020-05-19 02:51:34', '2020-05-19 02:51:34', 'Cherry ice cream with Maraschino cherries', 'img/row_1_1.png', 'img/row_1_1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
