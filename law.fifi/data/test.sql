-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2020 at 06:09 PM
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
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `url`, `price`, `category`, `date_created`, `date_modified`, `description`, `thumbnail`, `images`) VALUES
(1, 'Apple', 'apple@banana.com', 'https://apple.com', '12.99', 'fruit', '2020-04-09 18:01:14', '2020-04-09 18:01:14', 'This is an apple. ', '', 'apple_med_1.jpg,apple_med_2.jpg'),
(2, 'Banana', 'banana@banana.com', 'http://banana.com', '11.99', 'fruit', '2020-04-09 18:04:24', '2020-04-09 18:04:24', 'Banana', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
