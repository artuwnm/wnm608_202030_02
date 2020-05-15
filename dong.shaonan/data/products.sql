-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2020 at 04:35 PM
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
(1, 'kodak portra 400', 'https://filmroll.com', '3.98', 'filmroll', '2020-06-30 00:00:00', 'color', 'Kodak\'s Professional Portra 400 is a high-speed daylight-balanced color negative film offering a smooth and natural color palette that is balanced with vivid saturation and low contrast for accurate skin tones and consistent results. Utilizing the cinematic VISION Film technology, this film also exhibits a fine grain structure with very high sharpness and edge', 'images/PORTRA800.jpg', 'images/PORTRA800.jpg', 'kodak', '2020-04-16 15:31:58', '2020-04-16 15:31:58'),
(2, 'filmrolla', 'https://filmroll.com', '4.99', 'filmroll', '2020-08-01 00:00:00', 'black&white', 'Kodak Professional Ektar 100 is a daylight-balanced color negative film characterized by an ultra-vivid color palette, high saturation, and an extremely fine grain structure. Utilizing the cinematic VISION Film technology, this film\'s smooth grain profile pairs with a micro-structure optimized T-GRAIN emulsion to make it especially well-suited to scanning', 'images/ILFORD.jpg', 'images/ILFORD.jpg', 'kodak', '2020-04-16 15:36:59', '2020-04-16 15:36:59'),
(3, 'Kodak GOLD 200 Color Negative Film', '', '3.98', 'Color', '2020-09-05 00:00:00', 'Negative', 'Kodak GOLD 200 is a medium-speed daylight-balanced color negative film offering a versatile combination of vivid color saturation, fine grain, and high image sharpness. It has a nominal sensitivity of ISO 200/24° along with a wide exposure latitude for exposing up to two stops under or three stops over to enable working in a wide variety of lighting conditions. Additionally, due to the fine grain structure, this film is well-suited for scanning or enlarging your photographs.', 'images/GOLD200.jpg', 'images/GOLD200.jpg', 'Kodak', '2020-05-12 00:00:00', '2020-05-12 00:00:00'),
(4, 'Rollei Retro 80S', '', '6.99', '35mm', '2020-07-04 00:00:00', 'black&white', 'Rollei\'s Retro 80S is a slow-speed panchromatic black and white negative film with extended near-infrared sensitivity to 775nm. This additional red sensitivity helps to cut through haze or fog and also smooth skin tones and blemishes, making it ideal for portraiture. It has a nominal sensitivity of ISO 80/20° and is characterized by a fine grain structure and broad tonal range. It is coated onto a transparent polyester base, with anti-static coatings, that makes it well-suited to scanning applications.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/Rollei Retro 80S.jpg', 'images/Rollei Retro 80S.jpg', 'Rollei', '2020-05-13 00:00:00', '2020-05-14 00:00:00'),
(5, 'lford Delta 100', '', '5.99', '35mm', '2020-10-01 00:00:00', 'black&white', 'Ilford\'s Delta 100 Professional is a medium-speed black and white negative film featuring core-shell crystal technology in order to produce extremely sharp results with a fine, uniform grain structure. It has a nominal sensitivity of ISO 100/21° when developed in standard black and white chemistry, but its wide exposure latitude permits rating the film between EI 50 and EI 200 with maintained results. This versatile film is especially well-suited for fine art and pictorial use, as well as general applications requiring high edge sharpness and unobtrusive grain.\r\n\r\nThis item is one 24-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford Delta 100.jpg', 'images/Ilford Delta 100.jpg', 'Ilford', '2020-05-14 00:00:00', '2020-05-14 00:00:00'),
(6, 'Ilford XP2', '', '8.49', '35mm', '2020-06-05 00:00:00', 'black&white', 'lford\'s XP2 Super is a high-speed chromogenic black and white negative film that can be processed alongside conventional color negative films in C-41 chemistry. It has a nominal sensitivity of ISO 400/27°, however can be under- or overexposed in order to adjust contrast as well as the balance of grain and sharpness. When rated at ISO 400, the most neutral balance between a fine grain structure and high sharpness will be afforded. Its wide exposure latitude can also be used to better control highlight and shadow values, as well as an expansive range of middle tones. Additionally, XP2 Super is designed for printing on traditional black and white papers, with Multigrade contrast filters, as well as on RA-4 color papers with maintained print color neutrality.\r\n\r\nThis item is one 36-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford XP2.jpg', 'images/Ilford XP2.jpg', 'Ilford', '2020-08-06 00:00:00', '2020-08-06 00:00:00');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
