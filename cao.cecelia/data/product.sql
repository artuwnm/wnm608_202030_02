-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-04-12 00:35:03
-- 服务器版本： 5.6.46-cll-lve
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ceceliacao_aau`
--

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(16) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `url` varchar(256) NOT NULL,
  `quantity` int(12) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `description`, `thumbnail`, `images`, `url`, `quantity`, `date_create`, `date_modify`) VALUES
(1, 'Baby Earings', 'Earings', '98.98', 'These small, ridged hoop earrings are made from solid 14k gold or sterling silver, exploring the notion of dimensionality within a precise shape. All earrings, silver or gold, use 18k gold ear wire for comfort and durability.', 'images/babyearings_thumbnail.jpg', 'images/babyearings_pc_1.jpg, images/babyearings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-11 23:54:41', '2020-04-11 23:54:41'),
(2, 'Duet Earings', 'Earings', '128.88', 'The geological layers of earth have been used to identify and connect physical material with place, era, and environment. Our Strata collection considers this layering, drawing inspiration from organic texture, natural patterns, and the intriguing premise of what might be hidden in plain sight.', 'images/duetearings_thumbnail.jpg', 'images/duetearings_pc_1.jpg, images/duetearings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-11 23:54:41', '2020-04-11 23:54:41'),
(3, 'Aquamarine Earrings', 'Earings', '312.98', 'Aquamarine Earrings pairs semi-precious stone with gold, exploring the limits of shape within our signature lens of timelessness and wearability. The resulting collection feels equal parts modern statement and relics that could belong to any era.', 'images/aquamarineearrings_thumbnail.jpg', 'images/aquamarineearrings_pc_1.jpg, images/aquamarineearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-11 23:59:54', '2020-04-11 23:59:54'),
(4, 'Jade Earrings', 'Earings', '218.68', 'Jade Earrings pairs quartz with gold, exploring the limits of shape within our signature lens of timelessness and wearability. The resulting collection feels equal parts modern statement and relics that could belong to any era.', 'images/jadeearrings_thumbnail.jpg', 'images/jadeearrings_pc_1.jpg, images/jadeearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-11 23:59:54', '2020-04-11 23:59:54'),
(5, 'Clear Quartz Earings', 'Earings', '128.88', 'These ridged hoop earrings are made from solid 14k gold or sterling silver, folding in quartz and exploring the notion of dimensionality within a precise shape. All earrings, silver or gold, use 14k gold ear wire for comfort and durability.', 'images/clearquartzearings_thumbnail.jpg', 'images/clearquartzearings_pc_1.jpg, images/clearquartzearings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:04:32', '2020-04-12 00:04:32'),
(6, 'South Sea Pearl Earrings', 'Earings', '598.00', 'Pile on Pearls HardWear is elegantly subversive and captures the spirit of the women. Whether worn for day or night, these pearl and 18k gold earrings are sure to make a statement.', 'images/southseapearlearrings_thumbnail.jpg', 'images/southseapearlearrings_pc_1.jpg, images/southseapearlearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:04:32', '2020-04-12 00:04:32'),
(7, 'Pearl Hoop Earrings', 'Earings', '312.98', 'Pearl Hoop Earrings HardWear is elegantly subversive and captures the spirit of the women. Featuring a lustrous pearl boldly wrapped in sterling silver, these hoop earrings are a statement look for both day and night.', 'images/pearlhoopearrings_thumbnail.jpg', 'images/pearlhoopearrings_pc_1.jpg, images/pearlhoopearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:11:37', '2020-04-12 00:11:37'),
(8, 'Double Drop Earrings', 'Earings', '289.98', 'Pile on Pearls HardWear is elegantly subversive and captures the spirit of the women. Playing with tension and proportion, these earrings are perfectly balanced and cradled by a fine chain.', 'images/doubledropearrings_thumbnail.jpg', 'images/doubledropearrings_pc_1.jpg, images/doubledropearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:11:37', '2020-04-12 00:11:37'),
(9, 'Double Long Link Earrings', 'Earings', '85.99', 'Pile on Pearls HardWear is elegantly subversive and captures the spirit of the women. Linear and industrial, these double long link earrings make a bold statement.', 'images/doublelonglinkearrings_thumbnail.jpg', 'images/doublelonglinkearrings_pc_1.jpg, images/doublelonglinkearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:30:15', '2020-04-12 00:30:15'),
(10, 'Ball Earrings', 'Earings', '98.98', 'Pile on Pearls HardWear is elegantly subversive and captures the spirit of the women. These modern earrings are an everyday staple.', 'images/ballearrings_thumbnail.jpg', 'images/ballearrings_pc_1.jpg, images/ballearrings_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:30:15', '2020-04-12 00:30:15'),
(11, 'Class Pendant', 'Necklaces', '312.98', 'The qualities behind the theory of the four classical elements that comprise the world — earth, wind, fire, and air — as expressed in eight different designs. Each pendant is reverse intaglio engraved in an 8 x 10mm natural crystal quartz and set in recycled 14k gold and silver.', 'images/classpendant_thumbnail.jpg', 'images/classpendant_pc_1.jpg, images/classpendant_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:34:39', '2020-04-12 00:34:39'),
(12, 'Class Ring Fire', 'Rings', '768.99', 'The collection reinterprets the qualities and tradition of collegiate rings through a lens of nuance and refinement. Deliberately maximalist and rife with symbolism, they are pieces of jewelry to personify aspects of the self.', 'images/classringfire_thumbnail.jpg', 'images/classringfire_pc_1.jpg, images/classringfire_pc_2.jpg', 'http://www.ceceliacao.com/aau/wnm608/cao.cecelia', 5, '2020-04-12 00:34:39', '2020-04-12 00:34:39');

--
-- 转储表的索引
--

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
