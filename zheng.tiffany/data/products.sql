-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 07:20 PM
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
-- Database: `tzheng8_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `material` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `images` varchar(512) NOT NULL,
  `category` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `color` varchar(16) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `material`, `thumbnail`, `images`, `category`, `type`, `color`, `featured`, `date_create`, `date_modify`, `url`) VALUES
(1, 'Miss Honey Top', '32.00', 'Go wild in this warm honey yellow polka dot top. Complete with frilly adjustable straps, a cute keyhole detail on the front, and easy zipper access on the side, this top will become your go-to outfit for summer weekends.', 'Outer layer: 100% polyester. Lining: 100% rayon.', 'images/honey_top_thumbnail.jpg', 'images/honey_top_full_1.jpg, images/honey_top_full_2.jpg, images/honey_top_full_3.jpg, images/honey_top_full_4.jpg', 'Women', 'Top', 'Warm', 1, '2020-04-12 17:44:01', '2020-04-12 17:44:01', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=1'),
(2, 'Summer Angel Top', '52.00', 'The angel is in the details. Embrace summer in this dusty pink lace halter top with a cute peplum waist. The lace pattern also has a subtle black outline detail that is beautiful up close and from afar.', 'Outer layer: 100% polyester. Lining: 100% polyester.', 'images/angel_top_thumbnail.jpg', 'images/angel_top_full_1.jpg, images/angel_top_full_2.jpg images/angel_top_full_3.jpg, images/angel_top_full_4.jpg', 'Women', 'Top', 'Neutral', 0, '2020-04-12 18:03:29', '2020-04-12 18:03:29', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=2'),
(3, 'Sundaze Dress', '32.00', 'Lounge around or go run errands in this breezy sundress. The dress features a yellow and faded gray floral pattern, perfect for picnic vibes. The dress wraps seamlessly around inside the dress and ties on front to the left.', '100% cotton.', 'images/sundaze_dress_thumbnail.jpg', 'images/sundaze_dress_full_1.jpg, images/sundaze_dress_full_2.jpg images/sundaze_dress_full_3.jpg, images/sundaze_dress_full_4.jpg', 'Women', 'Dress', 'Warm', 1, '2020-04-12 18:15:55', '2020-04-12 18:15:55', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=3'),
(4, 'Beachy Top', '22.00', 'The beaches are waiting. Show up in this fun yellow crop bandeau top, with short flare sleeves. The material is super stretchy and comfortable.', '80% cotton. 20% polyester.', 'images/beachy_top_thumbnail.jpg', 'images/beachy_top_full_1.jpg, images/beachy_top_full_2.jpg, images/beachy_top_full_3.jpg, images/beachy_top_full_4.jpg', 'Women', 'Top', 'Warm', 1, '2020-04-12 18:21:31', '2020-04-12 18:21:31', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=4'),
(5, 'Penelope Top', '22.00', 'With a top as soft as this one, you do not need anywhere to go to put on our Penelope tank. We made this top super stretchy and comfy to wear out or in bed!', '80% cotton. 20% polyester.', 'images/penelope_top_thumbnail.jpg', 'images/penelope_top_full_1.jpg, images/penelope_top_full_2.jpg, images/penelope_top_full_3.jpg, images/penelope_top_full_4.jpg', 'Women', 'Top', 'Cool', 0, '2020-04-12 18:31:25', '2020-04-12 18:31:25', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=5'),
(6, 'Bliss Dress', '52.00', 'Beautiful white lace bodycon dress with plunging wired neckline. Nude lining accompanies the sheer white lace pattern for extra dimension.', 'Outer layer: 85% polyester, 15% nylon. Lining: 100% polyester.', 'images/bliss_dress_thumbnail.jpg', 'images/bliss_dress_full_1.jpg, images/bliss_dress_full_2.jpg images/bliss_dress_full_3.jpg, images/bliss_dress_full_4.jpg', 'Women', 'Dress', 'Neutral', 0, '2020-04-12 18:39:17', '2020-04-12 18:39:17', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=6'),
(7, 'Spirit Top', '22.00', 'This acid wash denim crop top with hot pink trim was made for those who want to stand out. Elastic banded section on back and adjustable straps holds you in for extra security.', '100% cotton.', 'images/spirit_top_thumbnail.jpg', 'images/spirit_top_full_1.jpg, images/spirit_top_full_2.jpg, images/spirit_top_full_3.jpg, images/spirit_top_full_4.jpg', 'Women', 'Top', 'Cool', 1, '2020-04-12 18:44:58', '2020-04-12 18:44:58', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=7'),
(8, 'Blue Garden Top', '22.00', 'Stand out in this cobalt blue and white floral top, inspired by beautiful blue and white pottery. This crop top is made in a stretchy material, hugging and showing off your body curves.', '95% cotton. 5% elastane.', 'images/blue_garden_top_thumbnail.jpg', 'images/blue_garden_top_full_1.jpg, images/blue_garden_top_full_2.jpg, images/blue_garden_top_full_3.jpg, images/blue_garden_top_full_4.jpg', 'Women', 'Top', 'Cool', 1, '2020-04-12 18:53:29', '2020-04-12 18:53:29', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=8'),
(9, 'Wild Child Top', '22.00', 'Bring out your inner wild child with this cute floral crop. The front of the top comes apart with detachable metal hooks.', '95% cotton. 5% spandex.', 'images/wild_child_thumbnail.jpg', 'images/wild_child_top_full_1.jpg, images/wild_child_top_full_2.jpg, images/wild_child_top_full_3.jpg, images/wild_child_top_full_4.jpg', 'Women', 'Top', 'Cool', 1, '2020-04-12 19:01:22', '2020-04-12 19:01:22', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=9'),
(10, 'Heavens Above Shirt', '52.00', 'Find your wings in the Heavens Above button down. Super lightweight and soft, this shirt is perfect for weekend lunch or running errands.', '100% viscose.', 'images/heavens_above_shirt_thumbnail.jpg', 'images/heavens_above_shirt_full_1.jpg, images/heavens_above_shirt_full_2.jpg, images/heavens_above_shirt_full_3.jpg, images/heavens_above_shirt_full_4.jpg,', 'Men', 'Top', 'Cool', 1, '2020-04-12 19:06:58', '2020-04-12 19:06:58', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=10'),
(11, 'Boho Shirt', '32.00', 'Simple and effortless, the Boho t-shirt is made for everyday wear, for inside and out. The shirt is perfectly thin and  breathable, so you will never need to worry about overheating.', '100% linen.', 'images/boho_shirt_thumbnail.jpg', 'images/boho_shirt_full_1.jpg, images/boho_shirt_full_2.jpg, images/boho_shirt_full_3.jpg, images/boho_shirt_full_4.jpg,', 'Men', 'Top', 'Neutral', 1, '2020-04-12 19:11:13', '2020-04-12 19:11:13', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=11'),
(12, 'Desert Daze Shirt', '32.00', 'Catch desert vibes in the Desert Daze cotton shirt. Button details by the neck and smooth combed texture make this item the ultimate comfy top.', '100% cotton.', 'images/desert_shirt_thumbnail.jpg', 'images/desert_shirt_full_1.jpg, images/desert_shirt_full_2.jpg, images/desert_shirt_full_3.jpg, images/desert_shirt_full_4.jpg,', 'Men', 'Top', 'Neutral', 1, '2020-04-12 19:20:26', '2020-04-12 19:20:26', 'http://tzheng8.com/aau/wnm608/zheng.tiffany/item_details.php?id=12');

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
