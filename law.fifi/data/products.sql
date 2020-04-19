-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 12:02 PM
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
  `productName` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(12) NOT NULL,
  `colors` varchar(16) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `tags` varchar(256) NOT NULL,
  `suggestedProducts` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `category`, `description`, `price`, `quantity`, `colors`, `weight`, `thumbnail`, `images`, `isactive`, `tags`, `suggestedProducts`, `date_created`, `date_modified`) VALUES
(1, 'Iconic Meow Phone Case', 'Phone Case', 'White phone case with the iconic Meowie logo in the middle.', '30.00', 20, 'white,yellow', '0.80', 'iconic_meow_phone_case.png', 'iconic_meow_phone_case.png,iconic_meow_phone_case_2.png,iconic_meow_phone_case_3.png,iconic_meow_phone_case_4.png', 1, 'white,yellow,phone case,iconic meow', 'Multi-Meow Phone Case,Meow Paws Phone Case,Meow Warning Phone Case', '2020-04-11 14:15:22', '2020-04-11 14:15:22'),
(2, 'Meowie Logo Phone Case', 'Phone Case', 'Yellow phone case with the Meowie logotype.', '30.00', 20, 'white,yellow', '0.80', 'meowie_logo_phone_case.png', 'meowie_logo_phone_case.png,meowie_logo_phone_case_2.png,meowie_logo_phone_case_3.png,meowie_logo_phone_case_4.png', 1, 'white,yellow,phone case,meowie logo', 'Iconic Meow Phone Case,Meowie Logo Stickers,Meowie Logo Pillow', '2020-04-11 14:19:12', '2020-04-11 14:19:12'),
(3, 'Multi-Meow Phone Case', 'Phone Case', 'White phone case with the iconic Meowie logos cover the whole phone case.', '30.00', 20, 'white,yellow', '0.80', 'multi-meow_phone_case.png', 'multi-meow_phone_case.png,multi-meow_phone_case_2.png,multi-meow_phone_case_3.png,multi-meow_phone_case_4.png', 1, 'white,yellow,phone case,multi-meow', 'Iconic Meow Phone Case,Meowie Logo Phone Case,Multi-Meow Pillow', '2020-04-11 14:20:54', '2020-04-11 14:20:54'),
(4, 'Meow Paws Phone Case', 'Phone Case', 'Multi-color Meowie paws all over the phone case. ', '30.00', 20, 'white,yellow', '0.80', 'meow_paws_phone_case.png', 'meow_paws_phone_case.png,meow_paws_phone_case_2.png,meow_paws_phone_case_3.png,meow_paws_phone_case_4.png', 1, 'white,yellow,phone case,meow paws', 'Meow Paws Stickers,Meow Paws Pillow,Meowie Logo Phone Case', '2020-04-11 14:20:54', '2020-04-11 14:20:54'),
(5, 'Meow Warning Phone Case', 'Phone Case', 'Phone case cover with Meowie warning signs.', '30.00', 20, 'white,yellow', '0.80', 'meow_warning_phone_case.png', 'meow_warning_phone.png,meow_warning_phone_2.png,meow_warning_phone_3.png,meow_warning_phone_4.png', 1, 'white,yellow,phone case,meow warning', 'Iconic Meow Phone Case,Meowie Logo Phone Case,Multi-Meow Phone Case', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(6, 'Iconic Meow Stickers', 'Stickers', 'Meowie icon stickers (pack of 6).', '20.00', 30, 'white', '0.20', 'iconic_meow_stickers.png', 'iconic_meow_stickers.png,iconic_meow_stickers_2.png,iconic_meow_stickers_3.png,iconic_meow_stickers_4.png', 1, 'white,stickers,iconic meow', 'Iconic Meow Phone Case,Iconic Meow Pillow,Meowie Logo Stickers', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(7, 'Meowie Logo Stickers', 'Stickers', 'Meowie logo stickers (pack of 6).', '20.00', 30, 'white', '0.20', 'meowie_logo_stickers.png', 'meowie_logo_stickers.png,meowie_logo_stickers_2.png,meowie_logo_stickers_3.png,meowie_logo_stickers_4.png', 1, 'white,stickers,meowie logo', 'Meow Paws Stickers,Meowie Logo Phone Case,Meowie Logo Pillow', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(8, 'Meow Paws Stickers', 'Stickers', 'Meowie paw stickers (pack of 6).', '20.00', 30, 'yellow,brown', '0.20', 'meow_paws_stickers.png', 'meow_paws_stickers.png,meow_paws_stickers_2.png,meow_paws_stickers_3.png,meow_paws_stickers_4.png', 1, 'yellow,brown,stickers,meow paws', 'Iconic Meow Stickers,Meow Paws Pillow,Meow Paws Phone Case', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(9, 'Iconic Meow Pillow', 'Pillow', 'Meowie icon pillow.', '25.00', 10, 'white,beige', '1.50', 'iconic_meow_pillow.png', 'iconic_meow_pillow.png,iconic_meow_pillow_2.png,iconic_meow_pillow_3.png,iconic_meow_pillow_4.png', 1, 'white,beige,iconic meow,pillow', 'Iconic Meow Phone Case,Iconic Meow Stickers,Meowie Paws Pillow', '2020-04-11 14:26:20', '2020-04-11 14:26:20'),
(10, 'Multi-Meow Pillow', 'Pillow', 'Multi-meow pillow.', '25.00', 10, 'white,beige', '1.50', 'multi-meow_pillow.png', 'multi-meow_pillow.png,multi-meow_pillow_2.png,multi-meow_pillow_3.png,multi-meow_pillow_4.png', 1, 'pillow,white,beige,multi-meow', 'Multi-Meow Phone Case,Iconic Meow Pillow,Meowie Logo Pillow', '2020-04-11 14:38:38', '2020-04-11 14:38:38'),
(11, 'Meowie Logo Pillow', 'Pillow', 'Meowie logo pillow.', '25.00', 10, 'white,beige', '1.50', 'meowie_logo_pillow.png', 'meowie_logo_pillow.png,meowie_logo_pillow_2.png,meowie_logo_pillow_3.png,meowie_logo_pillow_4.png', 1, 'white,beige,pillow,meowie logo', 'Meowie Logo Phone Case,Meowie Logo Stickers,Meow Paws Pillow', '2020-04-11 14:38:38', '2020-04-11 14:38:38'),
(12, 'Meow Paws Pillow', 'Pillow', 'Meowie paws pillow.', '25.00', 10, 'white,beige', '1.50', 'meow_paws_pillow.png', 'meow_paws_pillow.png,meow_paws_pillow_2.png,meow_paws_pillow_3.png,meow_paws_pillow_4.png', 1, 'white,beige,pillow,meow paws', 'Meowie Logo Pillow,Meow Paws Stickers,Meow Paws Phone Case', '2020-04-11 14:38:38', '2020-04-11 14:38:38');

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
