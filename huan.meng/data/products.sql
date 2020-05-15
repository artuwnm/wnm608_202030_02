-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 09:27 PM
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
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'New York Cherry', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '25.99', 'Ice cream cup', '2020-04-12 21:02:01', '2020-04-12 21:02:01', 'Cherry ice cream with Maraschino cherries', 'images/new_york_cherry_thumbnail.jpg', 'images/new_york_cherry_1.jpg, images/new_york_cherry_2.jpg,images/new_york_cherry_3.jpg'),
(2, 'Strawberries N\' Cream', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '25.99', 'Ice cream cup', '2020-04-12 21:04:33', '2020-04-12 21:04:33', 'Vanilla blend with different flavored ice cream and big strawberry chunks on the top', 'images/strawberries_n_cream_thumbnail.jpg', 'images/strawberries_n_cream_1.jpg, images/strawberries_n_cream_2.jpg, images/strawberries_n_cream_3.jpg'),
(3, 'Swirled Rain', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '25.99', 'Ice cream cup', '2020-04-12 21:06:10', '2020-04-12 21:06:10', 'Vanilla flavored ice cream with a swirl of condensed milk', 'images/swirled_rain_thumbnail.jpg', 'images/swirled_rain_1.jpg, images/swirled_rain_2.jpg, images/swirled_rain_3.jpg'),
(4, 'Fruit Party', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '68.99', 'Birthday ice cre', '2020-04-12 21:08:46', '2020-04-12 21:08:46', 'Fruit flavored juicy toppings and  an ice cream cone on the top of fruit sandwish cakes', 'images/fruit_party_thumbnail.jpg', 'images/fruit_party_1.jpg, images/fruit_party_2.jpg, images/fruit_party_3.jpg'),
(5, 'Eggnog ', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '58.99', 'Birthday ice cre', '2020-04-12 21:10:24', '2020-04-12 21:10:24', 'Egg yolks and spices', 'images/eggnog_thumbnail.jpg', 'images/eggnog_1.jpg, images/eggnog_2.jpg, images/eggnog_3.jpg'),
(6, 'Rocky Road', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '78.99', 'Birthday ice cre', '2020-04-12 21:11:43', '2020-04-12 21:11:43', 'Royal chocolate Ice cream birthday cake (see Chocolate above) with macaroon and chocolate cone,Rich, dark chocolate produced from cocoa beans grown in the Ivory Coast, Brazil and Indonesia', 'images/rocky_road_thumbnail.jpg', 'images/rocky_road_1.jpg, images/rocky_road_2.jpg, images/rocky_road_3.jpg'),
(7, 'Halo Halo Bars', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '5.99', 'Ice cream collat', '2020-04-12 21:14:08', '2020-04-12 21:14:08', 'Multicolored sugar sprinkled over chocolate on the bar shaped cookies', 'images/halo_halo_thumbnail.jpg', 'images/halo_halo_1.jpg, images/halo_halo_2.jpg, images/halo_halo_3.jpg'),
(8, 'Halo Yolo Cones', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '5.99', 'Ice cream collat', '2020-04-12 21:16:32', '2020-04-12 21:16:32', 'Multicolored sugar sprinkled over chocolate on the cone shape cookies', 'images/halo_yolo_thumbnail.jpg', 'images/halo_yolo_1.jpg, images/halo_yolo_2.jpg, images/halo_yolo_3.jpg'),
(9, 'Halo Pinky Cookies', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '5.99', 'Ice cream collat', '2020-04-12 21:17:49', '2020-04-12 21:17:49', 'Multicolored sugar sprinkled over cherry flavored chocolate on the cookies', 'images/halo_pinky_thumbnail.jpg', 'images/halo_pinky_1.jpg, images/halo_pinky_2.jpg, images/halo_pinky_3.jpg'),
(10, 'Coffee Flavor Sets', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '32.99', 'Ice cream set', '2020-04-12 21:19:08', '2020-04-12 21:19:08', 'Sharing set with coffee flavored ice cream', 'images/coffee_flavor_sets_thumbnail.jpg', 'images/coffee_flavor_sets_1.jpg, images/coffee_flavor_sets_2.jpg, images/coffee_flavor_sets_3.jpg'),
(11, 'Mixed Berries Flavor Sets', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '32.99', 'Ice cream set', '2020-04-12 21:20:18', '2020-04-12 21:20:18', 'Sharing set with raspberry, strawberry and blueberry ice cream', 'images/mixed_berries_flavor_sets_thumbnail.jpg', 'images/mixed_berries_flavor_sets_1.jpg, images/mixed_berries_flavor_sets_2.jpg, images/mixed_berries_flavor_sets_3.jpg'),
(12, 'Mint Fruits Sets', '', 'http://huanmengdesign.com/aau/wnm608_02/huan.meng/', '32.99', 'Ice cream set', '2020-04-12 21:22:12', '2020-04-12 21:22:12', 'Sharing set with peppermint ice cream with many different flavors you can choose', 'images/mint_fruits_sets_thumbnail.jpg', 'images/mint_fruits_sets_1.jpg, images/mint_fruits_sets_2.jpg, images/mint_fruits_sets_3.jpg');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
