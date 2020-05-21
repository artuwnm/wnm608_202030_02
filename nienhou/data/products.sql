-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2020 at 10:59 PM
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
-- Database: `fenfong`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(16) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Shea Butter Extra Gentle Soap', ' ', '15.99', 'Traditional ', '2020-04-09 18:01:15', '2020-05-21 15:34:25', 'Generously sized for everyday use and the bath. Formulated with a cleansing base and enriched with nourishing Shea Butter. Fenfong works directly with women\'s Shea-processing collectives in western Africa, supporting economic recovery but also natural harvesting traditions. Non-irritating suitable for men, women and children.', 'Handwash01.png', 'Handwash01.png,Handwash02.png,Handwash03.png,Handwash04.png ', 6),
(7, 'Natural Handmade Soaps', '', '20.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-21 00:29:44', 'Natural Handmade Soap made from Sea Salt.', 'Soap01.jpg', 'Soap01.jpg,soap02.jpg', 3),
(8, 'Natural Lavender Handmade Soap', '', '16.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Organic lavender-infused oils, organic lavender flowers, lavender essential oil and creamy coconut milk make a skin nourishing natural soap with a silky lather!', 'soap03.jpg', 'soap03.jpg', 0),
(9, 'Blue Sky Handmade Soap', '', '12.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Sapphire harnesses the exhilaration of a coastal sea spray infused with the rich scent of warm amber to craft the tranquil moment you deserve. This scent transcends your traditional cleaning routine and allows the cascading blue colors of the soap to provide the ultimate self-care experience. ', 'soap04.jpg', 'soap04.jpg', 0),
(10, 'France Handmade Soap', '', '18.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Treat your skin to beautiful, all-natural, handmade soaps. This soap were formulated to be gentle on the skin, moisturizing and cleansing. ', 'soap05.jpg', 'soap05.jpg', 0),
(11, 'Natural Coconut Water Soap', '', '15.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'This soap is perfect for all of your party favour needs. Whether you are celebrating a wedding, a bridal shower, a baby shower, or any type of party, your guests will love these little favours.', 'soap06.jpg', 'soap06.jpg', 0),
(12, 'Moroccanoil Soap', '', '15.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Perfect for many bathing needs! Enjoy the rich, creamy lather for body and face, as well as a soothing shampoo and shaving cream. ', 'soap08.jpg', 'soap08.jpg', 0),
(13, 'Natural Handmade Bamboo Charcoal Soap', '', '15.00', 'Handmade Soap', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Long lasting bars that rinse off clean and leaves no soap residue behind. Natural glycerin promotes extra moisturizing which helps to prevent dry skin.', 'soap07.jpg', 'soap07.jpg', 0),
(14, 'Natural Bouquet Hand Wash', '', '16.99', 'Hand Wash', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'A moisturizing hand soap with a fruity, spicy aroma that cleans and hydrates skin.', 'soapwash02.jpg', 'soapwash02.jpg,hand01.jpg,soapwash03.jpg', 0),
(15, 'Basil Blue Sage Hand Wash', '', '15.00', 'Hand Wash', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Can quickly kill germs, fungi, cocci, and viruses, etc.,.', 'wash04.jpg', 'wash04.jpg,wash05.jpg', 0),
(16, 'Natural Rose Soy Wax Candle', '', '16.99', 'Candles', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'Our 7.2 oz Standard Candles are hand-poured into apothecary inspired amber jars with our signature kraft label and a brass lid.', 'candles03.jpg', 'candles03.jpg,candles031.jpg', 0),
(17, 'Natural Sativa Rose Candle', '', '15.99', 'Candles', '2020-05-20 03:00:00', '2020-05-20 00:00:00', 'A sparkling sunny blend of dew-covered peony illuminated by crisp notes of garden rose, sugared fresia and bright marigold.', 'candles04.jpg', 'candles04.jpg', 0);

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
