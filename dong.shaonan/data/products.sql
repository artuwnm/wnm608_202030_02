-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2020 at 12:31 AM
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
(1, 'Kodak Professional Tri-X 400', '', '6.49', '35mm', '2020-06-30 00:00:00', '36 Exposures', 'Kodak\'s Professional Tri-X 400 Black and White Negative Film is a classic high-speed panchromatic film designed for a wide array of shooting conditions. Characterized by its fine grain quality, notable edge sharpness, and high resolving power, Tri-X 400 also exhibits a wide exposure latitude with consistent tonality. It has a nominal sensitivity of ISO 400/27° when developed in standard black and white chemistry, and responds well to push processing. As an all-around, highly versatile film, Tri-X 400 is a standard choice for photographing in difficult lighting conditions as well as when working with subjects requiring good depth of field or for faster shutter speeds.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/Tri-X400.jpg', 'images/Tri-X400.jpg', 'Kodak', '2020-04-16 15:31:58', '2020-04-16 15:31:58'),
(2, 'Kodak Professional Ektar 100', '', '8.99', '35mm', '2020-08-01 00:00:00', '36 Exposures', 'Kodak Professional Ektar 100 is a daylight-balanced color negative film characterized by an ultra-vivid color palette, high saturation, and an extremely fine grain structure. Utilizing the cinematic VISION Film technology, this film\'s smooth grain profile pairs with a micro-structure optimized T-GRAIN emulsion to make it especially well-suited to scanning applications, and advanced development accelerators offer extended versatility when making enlargements. Ektar has a nominal sensitivity of ISO 100/21°, and advanced cubic emulsions and proprietary DIR couplers render it with high sharpness, fine detail, and a well-defined edge quality. The combination of rich colors, fine grain, and optimized sharpness benefit this film\'s use for nature, travel, and outdoor photography, as well as fashion, product, and other commercial applications.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/Ektar100.jpg', 'images/Ektar100.jpg', 'Kodak', '2020-04-16 15:36:59', '2020-04-16 15:36:59'),
(3, 'Ilford Delta 400', '', '7.99', '35mm', '2020-09-05 00:00:00', '36 Exposures', 'Ilford\'s Delta 400 Professional is a high-speed black and white negative film featuring core-shell crystal technology in order to produce high sharpness with a fine, uniform grain structure. It has a nominal sensitivity of ISO 400/27° when developed in standard black and white chemistry, making it well-suited to handheld photography and working in difficult lighting conditions. This versatile film also features a broad tonal range and a wide exposure latitude, which is capable of being rated between EI 200 to EI 3200 and being pushed or pulled during development in order to maintain consistent contrast.\r\n\r\nThis item is one 36-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford Delta 400.jpg', 'images/Ilford Delta 400.jpg', 'Ilford', '2020-05-12 00:00:00', '2020-05-12 00:00:00'),
(4, 'Rollei Retro 80S', '', '6.99', '35mm', '2020-07-04 00:00:00', 'black&white', 'Rollei\'s Retro 80S is a slow-speed panchromatic black and white negative film with extended near-infrared sensitivity to 775nm. This additional red sensitivity helps to cut through haze or fog and also smooth skin tones and blemishes, making it ideal for portraiture. It has a nominal sensitivity of ISO 80/20° and is characterized by a fine grain structure and broad tonal range. It is coated onto a transparent polyester base, with anti-static coatings, that makes it well-suited to scanning applications.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/Rollei Retro 80S.jpg', 'images/Rollei Retro 80S.jpg', 'Rollei', '2020-05-13 00:00:00', '2020-05-14 00:00:00'),
(5, 'lford Delta 100', '', '5.99', '120 Roll Film', '2020-10-01 00:00:00', 'black&white', 'Ilford\'s Delta 100 Professional is a medium-speed black and white negative film featuring core-shell crystal technology in order to produce extremely sharp results with a fine, uniform grain structure. It has a nominal sensitivity of ISO 100/21° when developed in standard black and white chemistry, but its wide exposure latitude permits rating the film between EI 50 and EI 200 with maintained results. This versatile film is especially well-suited for fine art and pictorial use, as well as general applications requiring high edge sharpness and unobtrusive grain.\r\n\r\nThis item is one 24-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford Delta 100.jpg', 'images/Ilford Delta 100.jpg', 'Ilford', '2020-05-14 00:00:00', '2020-05-14 00:00:00'),
(6, 'Ilford XP2', '', '8.49', '120 Roll Film', '2020-06-05 00:00:00', 'black&white', 'lford\'s XP2 Super is a high-speed chromogenic black and white negative film that can be processed alongside conventional color negative films in C-41 chemistry. It has a nominal sensitivity of ISO 400/27°, however can be under- or overexposed in order to adjust contrast as well as the balance of grain and sharpness. When rated at ISO 400, the most neutral balance between a fine grain structure and high sharpness will be afforded. Its wide exposure latitude can also be used to better control highlight and shadow values, as well as an expansive range of middle tones. Additionally, XP2 Super is designed for printing on traditional black and white papers, with Multigrade contrast filters, as well as on RA-4 color papers with maintained print color neutrality.\r\n\r\nThis item is one 36-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford XP2.jpg', 'images/Ilford XP2.jpg', 'Ilford', '2020-08-06 00:00:00', '2020-08-06 00:00:00'),
(7, 'Kodak Professional T-Max P3200', '', '9.19', 'Black & White', '2020-08-07 00:00:00', '36 Exposures', 'Kodak Professional T-Max P3200 is an ultra-high-speed panchromatic black and white negative film characterized by its unique T-GRAIN emulsion, relatively fine grain structure, and high sharpness. It has a nominal sensitivity of ISO 3200/36°, however is categorized as a multi-speed film with a wide exposure latitude from EI 400-25,000 when pushed or pulled. Its versatility and speed benefits shooting handheld in difficult, available lighting conditions and with fast-moving subjects, and its fine grain profile, broad tonal range, and high resolving power benefit scanning and enlarging applications.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/T-Max P3200.jpg', 'images/T-Max P3200.jpg', 'Kodak', '2020-05-17 00:00:00', '2020-05-18 00:00:00'),
(8, 'Kodak Professional Portra 400', '', '9.69', 'Color', '2020-07-04 00:00:00', '36 Exposures', 'Kodak\'s Professional Portra 400 is a high-speed daylight-balanced color negative film offering a smooth and natural color palette that is balanced with vivid saturation and low contrast for accurate skin tones and consistent results. Utilizing the cinematic VISION Film technology, this film also exhibits a fine grain structure with very high sharpness and edge detail. A micro-structure optimized T-GRAIN emulsion makes it especially well-suited for scanning applications, and advanced development accelerators offer extended versatility when enlarging. This film has a nominal sensitivity of ISO 400/27° and is particularly well-suited to portrait and wedding photography, as well as nature, travel, and outdoor shooting with moving subjects, or when the lighting cannot be controlled.\r\n\r\nThis item is five 36-exposure rolls of 35mm film.', 'images/kodak400.jpg', 'images/kodak400.jpg', 'Kodak', '2020-05-20 00:00:00', '2020-05-20 00:00:00'),
(9, 'Ilford FP4 Plus', '', '6.99', 'Black and White', '2020-06-18 00:00:00', '36 Exposures', 'FP4 Plus from Ilford is a traditional medium-speed black and white negative film characterized by a fine grain structure with high acutance and sharpness, making it well-suited to enlarging and scanning. It has a nominal sensitivity of ISO 125/22° in standard chemistry, and its very wide exposure latitude enables exposing up to two stops under or six stops over while retaining usable results. In addition to general photographic applications, FP4 Plus is also an ideal choice for copy and internegative work, as well as scientific, technical, and industrial photography.\r\n\r\nThis item is one 36-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford FP4.jpg', 'images/Ilford FP4.jpg', 'Ilford', '2020-05-19 00:00:00', '2020-05-19 00:00:00'),
(10, 'FUJIFILM Fujicolor Superia X-TRA 400', '', '5.99', '35mm', '2020-06-30 00:00:00', 'Color', 'Fujicolor Superia X-TRA 400 is a high speed daylight-balanced color negative film featuring FUJIFILM\'s 4th Color Layer technology to produce vibrant, yet naturally appearing colors with smooth skin tones and repeatable results under mixed lighting conditions. A nominal sensitivity of ISO 400/27° is well-suited to use in a variety of conditions, and Super Fine-Sigma Grain Technology yields an unobtrusive, fine grain structure with high sharpness to benefit scanning and printing applications.\r\n\r\nThis item is one 36-exposure roll of 35mm film.', 'images/FUJIFILM400.jpg', 'images/FUJIFILM400.jpg', 'Fuji', '2020-05-19 00:00:00', '2020-05-28 00:00:00'),
(11, 'Ilford HP5 Plus', '', '5.49', '35mm', '2020-07-03 00:00:00', 'Black and White', 'Ilford\'s HP5 Plus Black and White Negative Film is a traditional and versatile panchromatic film designed for general use in a wide variety of shooting conditions. Exhibiting notably wide exposure latitude, this film responds well to use in mixed and difficult lighting and provides medium contrast for greater overall control. It has a nominal sensitivity of ISO 400/27° when developed in standard black and white chemistry, and responds well to push processing. HP5 Plus is a flexible film type that is ideally suited for use in general photographic applications in an array of different lighting conditions.\r\n\r\nThis item is one 24-exposure roll of 35mm film and is supplied in a DX-coded cassette.', 'images/Ilford HP5.jpg', 'images/Ilford HP5.jpg', 'Ilford', '2020-05-17 00:00:00', '2020-05-18 00:00:00'),
(12, 'Ilford Pan F Plus', '', '8.29', '35mm', '2020-09-05 00:00:00', 'Black and White', 'Ilford\'s Pan F Plus is a slow-speed panchromatic black and white negative film featuring a very fine grain structure, making it ideal for large-scale printing applications. Its slow speed also renders a broad tonal range, along with high edge contrast, resolution, and detail, making it well-suited for pictorial and fine art photography. Pan F Plus has a nominal sensitivity of ISO 50/18° when developed in standard chemistry, and can also be developed to higher contrast values for technical, copy, and scientific work.\r\n\r\nThis item is one 36-exposure roll of 35mm film in a DX-coded cassette.', 'images/Ilford Pan F.jpg', 'images/Ilford Pan F.jpg', 'Ilford', '2020-05-17 00:00:00', '2020-05-17 00:00:00');

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
