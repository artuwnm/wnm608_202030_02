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
-- Database: `HLwnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `images` varchar(512) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `quantity` int(16) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `images`, `thumbnail`, `date_create`, `date_modify`, `quantity`, `size`) VALUES
(2, 'Cle de Peau HYDRO SOFTENING LOTION', 'Moisturizers', 'Cle de Peau HYDROSOFTENING LOTION', '70.00', 'images/cpb_slotion_1.png,images/cpb_slotion_2.png', 'images/cpb_slotion_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '170ml'),
(3, 'Cle de Peau Protective Fortifying Emulsion SPF 22', 'Moisturizers', 'Cle de Peau Protective Fortifying Emulsion SPF 22', '75.00', 'images/cpb_day_1.png,images/cpb_day_2.png', 'images/cpb_day_thumbnail.png', '2020-04-13 00:00:00', '2020-04-14 00:00:00', 5, '125ml'),
(4, 'Cle de Peau Intensive Fortifying Emulsion', 'Moisturizers', 'Cle de Peau \r\nIntensive Fortifying Emulsion', '100.00', 'images/cpb_nigh_1.png,images/cpb_night_2.png,images/cpb_night_3.png', 'images/cpb_night_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '125ml'),
(5, 'Erno Laszlo Detoxifying Cleansing OIL', 'Cleansers', 'Erno Laszlo \r\nDetoxifying Cleansing OIL', '25.00', 'images/el_detox_1.png,images/el_detox_2.png,images/el_detox_3.png', 'images/el_detox_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 10, '6.6oz'),
(6, 'Erno Laszlo \r\nFIRM & LIFT Firmarine Cleansing OIL', 'Cleansers', 'Erno Laszlo \r\nFIRM & LIFT Firmarine Cleansing OIL', '25.00', 'images/el_fl_1.png,images/el_fl_2.png,images/el_fl_3.png', 'images/el_fl_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '6.6oz'),
(7, 'Erno Laszlo White Marble Cleansing Oil', 'Cleansers', 'Erno Laszlo White Marble Cleansing Oil', '25.00', 'images/el_wm_1.png,images/el_wm_2.png,images/el_wm_3.png', 'images/el_wm_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 10, '6.6oz'),
(8, 'Shiseido Ultimune Power Infusing Serum Concentrate', 'Treatments', 'Shiseido Ultimune Power Infusing Serum Concentrate', '65.00', 'images/ult_1.png,images/ult_2.png,images/ult_3.png', 'images/ult_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '30ml'),
(9, 'Shiseido White Lucent Day Emulsion SPF 23', 'Sun Care', 'Shiseido \r\nWhite Lucent Day Emulsion Broad \r\nSpectrum SPF 23', '45.00', 'images/lucent_spf_1.png,images/lucent_spf_2.png', 'images/lucent_spf_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '1.7oz'),
(10, 'Cle de Peau RADIANT CREAM FOUNDATION SPF 24 B20', 'Sun Care', 'Cle de Peau\r\nRADIANT CREAM FOUNDATION SPF 24', '80.00', 'images/cpb_crm_fund_1.png,images/cpb_crm_fund_2.png\r\nimages/_thumbnail.jpg', 'images/cpb_crm_fund_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '25ml'),
(11, 'Shiseido Essential Energy\r\nEye Definer', 'Eye Treatments', 'Shiseido Essential Energy Eye Definer', '25.00', 'images/definer_1.png,images/definer_2.png.images/definer_3.png', 'images/definer_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 10, '0.55oz'),
(12, 'Shiseido White Lucent Anti-Dark Circles Eye Cream ', 'Eye Treatments', 'Shiseido White Lucent Anti-Dark Circles Eye Cream ', '45.00', 'images/lucent_eye_1.png,images/lucent_eye_2.png', 'images/lucent_eye_thumbnail.png', '2020-04-14 00:00:00', '2020-04-14 00:00:00', 5, '15ml'),
(1, 'Shiseido Benefiance WrinkleResist24 Balancing Softener', 'Moisturizers', 'Shiseido Benefiance WrinkleResist24 Balancing Softener', '49.99', 'images/24_softener_1.png,images/24_softener_2.png,images/24_softener_3.png', 'images/24_softener_thumbnail.png', '2020-05-12 00:00:00', '2020-05-12 00:00:00', 10, '300 ml');

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
