-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 01:05 PM
-- Server version: 5.6.46-cll-lve
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
-- Database: `aauwnm_fifi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `product name` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(12) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `suggested products` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product name`, `category`, `description`, `price`, `quantity`, `thumbnail`, `images`, `suggested products`, `date_created`, `date_modified`) VALUES
(1, 'Iconic Meow Phone Case', 'Phone Case', 'White phone case with the iconic Meowie logo in the middle.', '30.00', 20, 'iconic_meow_phone_case.png\r\n', 'iconic_meow_phone_case.png, iconic_meow_phone_case_2.png, iconic_meow_phone_case_3.png, iconic_meow_phone_case_4.png\r\n', 'Multi-Meow Phone Case, Meow Paws Phone Case, Meow Warning Phone Case\r\nIconic Meow Stickers\r\nMeowie Logo Stickers\r\nMeow Paws Stickers\r\nIconic Meow Pillow\r\n', '2020-04-11 14:15:22', '2020-04-11 14:15:22'),
(2, 'Meowie Logo Phone Case\r\n', 'Phone Case', 'Yellow phone case with the Meowie logotype.\r\n', '30.00', 20, 'meowie_logo_phone_case.png\r\n', 'meowie_logo_phone_case.png, meowie_logo_phone_case_2.png, meowie_logo_phone_case_3.png, meowie_logo_phone_case_4.png\r\n', 'Iconic Meow Phone Case,  Meowie Logo Stickers, Meowie Logo Pillow', '2020-04-11 14:19:12', '2020-04-11 14:19:12'),
(3, 'Multi-Meow Phone Case\r\n', 'Phone Case', 'White phone case with the iconic Meowie logos cover the whole phone case.\r\n', '30.00', 20, 'multi-meow_phone_case.png\r\n', 'multi-meow_phone_case.png, multi-meow_phone_case_2.png, multi-meow_phone_case_3.png, multi-meow_phone_case_4.png\r\n', 'Iconic Meow Phone Case, Meowie Logo Phone Case, Multi-Meow Pillow', '2020-04-11 14:20:54', '2020-04-11 14:20:54'),
(4, 'Meow Paws Phone Case\r\n', 'Phone Case', 'Multi-color Meowie paws all over the phone case. \r\n', '30.00', 20, 'meow_paws_phone_case.png\r\n', 'meow_paws_phone_case.png, meow_paws_phone_case_2.png, meow_paws_phone_case_3.png, meow_paws_phone_case_4.png\r\n', 'Meow Paws Stickers, Meow Paws Pillow, Meowie Logo Phone Case', '2020-04-11 14:20:54', '2020-04-11 14:20:54'),
(5, 'Meow Warning Phone Case\r\n', 'Phone Case', 'Phone case cover with Meowie warning signs.\r\n', '30.00', 20, 'meow_warning_phone.png\r\n', 'meow_warning_phone.png, meow_warning_phone_2.png, meow_warning_phone_3.png, meow_warning_phone_4.png\r\n', 'Iconic Meow Phone Case, Meowie Logo Phone Case, Multi-Meow Phone Case', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(6, 'Iconic Meow Stickers\r\n', 'Stickers', 'Meowie icon stickers (pack of 6).\r\n', '20.00', 30, 'iconic_meow_stickers.png\r\n', 'iconic_meow_stickers.png, iconic_meow_stickers_2.png, iconic_meow_stickers_3.png, iconic_meow_stickers_4.png\r\n', 'Iconic Meow Phone Case, Iconic Meow Pillow, Meowie Logo Stickers', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(7, 'Meowie Logo Stickers\r\n', 'Stickers', 'Meowie logo stickers (pack of 6).\r\n', '20.00', 30, 'meowie_logo_stickers.png\r\n', 'meowie_logo_stickers.png, meowie_logo_stickers_2.png, meowie_logo_stickers_3.png, meowie_logo_stickers_4.png\r\n', 'Meow Paws Stickers, Meowie Logo Phone Case, Meowie Logo Pillow', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(8, 'Meow Paws Stickers\r\n', 'Stickers', 'Meowie paw stickers (pack of 6).\r\n', '20.00', 30, 'meow_paws_stickers.png\r\n', 'meow_paws_stickers.png, meow_paws_stickers_2.png, meow_paws_stickers_3.png, meow_paws_stickers_4.png\r\n', 'Iconic Meow Stickers, Meow Paws Pillow, Meow Paws Phone Case', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(9, 'Iconic Meow Pillow\r\n', 'Pillow', 'Meowie icon pillow.\r\n', '25.00', 10, 'iconic_meow_pillow.png\r\n', 'iconic_meow_pillow.png, iconic_meow_pillow_2.png, iconic_meow_pillow_3.png, iconic_meow_pillow_4.png\r\n', 'Iconic Meow Phone Case, Iconic Meow Stickers, Meowie Paws Pillow', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(10, 'Multi-Meow Pillow\r\n', 'Pillow', 'Multi-meow pillow.\r\n', '25.00', 10, 'multi-meow_pillow.png\r\n', 'multi-meow_pillow.png, multi-meow_pillow_2.png, multi-meow_pillow_3.png, multi-meow_pillow_4.png\r\n', 'Multi-Meow Phone Case, Iconic Meow Pillow, Meowie Logo Pillow', '2020-04-11 14:38:38', '2020-04-11 14:38:38'),
(11, 'Meowie Logo Pillow\r\n', 'Pillow', 'Meowie logo pillow.\r\n', '25.00', 10, 'meowie_logo_pillow.png\r\n', 'meowie_logo_pillow.png, meowie_logo_pillow_2.png, meowie_logo_pillow_3.png, meowie_logo_pillow_4.png\r\n', 'Meowie Logo Phone Case, Meowie Logo Stickers, Meow Paws Pillow', '2020-04-11 14:38:38', '2020-04-11 14:38:38'),
(12, 'Meow Paws Pillow\r\n', 'Pillow', 'Meowie paws pillow.\r\n', '25.00', 10, 'meow_paws_pillow.png\r\n', 'meow_paws_pillow.png, meow_paws_pillow_2.png, meow_paws_pillow_3.png, meow_paws_pillow_4.png\r\n', 'Meowie Logo Pillow, Meow Paws Stickers, Meow Paws Phone Case', '2020-04-11 14:38:38', '2020-04-11 14:38:38');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
