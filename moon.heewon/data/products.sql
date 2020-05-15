-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2020 at 04:54 PM
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
-- Database: `aauwnmcode`
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
  `avaiability` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `avaiability`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'yoga_lesson', '50.00', 'lesson', 'weekdays', '2020-05-07 02:50:59', '2020-05-07 02:50:59', 'one hour personal yoga lesson', 'img/yoga_thumbnail.jpg', 'img/yoga_med_1.jpg,img/yoga_med_2.jpg'),
(2, 'surfing_lesson', '100.00', 'lesson', 'weekends', '2020-05-07 02:53:08', '2020-05-07 02:53:08', 'one hour personal surfing lesson', 'img/surfing_thumbnail.jpg', 'img/surfing_med_1.jpg'),
(3, 'flower_arrangement', '40.00', 'craft', 'weekdays', '2020-05-07 02:57:27', '2020-05-07 02:57:27', 'I will make a flower bundle based on customer\'s choice', 'img/flower_thumbnail.jpg', 'img/flower_med_1.jpg'),
(4, 'korean_lesson', '50.00', 'lesson', 'weekdays', '2020-05-07 03:03:44', '2020-05-07 03:03:44', 'one hour personal Korean lesson', 'img/korean_thumbnail.jpg', 'img/korean_med_1.jpg'),
(5, 'christmas_tree_decoration', '100.00', 'craft', 'weekends', '2020-05-07 03:05:51', '2020-05-07 03:05:51', 'I will decorate the Christmas tree based on customer\'s taste', 'img/christmas_thumbnail.jpg', 'img/christmas_med_1.jpg'),
(6, 'korean_food_cooking_lesson', '50.00', 'lesson', 'weekends', '2020-05-07 03:07:25', '2020-05-07 03:07:25', 'one hour personal Korean food cooking lesson', 'img/cook_thumbnail.jpg', 'img/cook_med_1.jpg'),
(7, 'graduation_photo', '200.00', 'craft', 'weekends', '2020-05-07 03:10:00', '2020-05-07 03:10:00', 'I will take graduation photos walking around the campus for two hours', 'img/photo_thumbnail.jpg', 'img/photo_med_1.jpg'),
(8, 'easy_construction', '70.00', 'architecture', 'weekends', '2020-05-07 03:14:46', '2020-05-07 03:14:46', 'I will use my architectural skills for those who need hands for simple construction', 'img/construction_thumbnail.jpg', 'img/construction_med_1.jpg'),
(9, 'wall_painting', '70.00', 'architecture', 'weekends', '2020-05-07 03:16:35', '2020-05-07 03:16:35', 'I will fill up the empty wall with my creativity', 'img/paint_thumbnail.jpg', 'img/paint_med_1.jpg');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
