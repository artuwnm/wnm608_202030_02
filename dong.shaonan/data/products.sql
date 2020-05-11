-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 04:56 PM
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
-- Database: `dongshaonanwnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `expiration` datetime NOT NULL,
  `mode` varchar(16) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `brand` text NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `expiration`, `mode`, `description`, `thumbnail`, `images`, `brand`, `date_create`, `date_modify`) VALUES
(1, 'kodak portra 400', 'https://filmroll.com', '3.98', 'filmroll', '2020-06-30 00:00:00', 'color', 'Kodak\'s Professional Portra 400 is a high-speed daylight-balanced color negative film offering a smooth and natural color palette that is balanced with vivid saturation and low contrast for accurate skin tones and consistent results. Utilizing the cinematic VISION Film technology, this film also exhibits a fine grain structure with very high sharpness and edge', 'kodak400.jpg', 'kodak400.jpg', 'kodak', '2020-04-16 15:31:58', '2020-04-16 15:31:58'),
(2, 'filmrolla', 'https://filmroll.com', '4.99', 'filmroll', '2020-08-01 00:00:00', 'black&white', 'Kodak Professional Ektar 100 is a daylight-balanced color negative film characterized by an ultra-vivid color palette, high saturation, and an extremely fine grain structure. Utilizing the cinematic VISION Film technology, this film\'s smooth grain profile pairs with a micro-structure optimized T-GRAIN emulsion to make it especially well-suited to scanning', 'kodak200.jpg', 'kodak200.jpg', 'kodak', '2020-04-16 15:36:59', '2020-04-16 15:36:59');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
