-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2020 at 11:00 PM
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
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `material`, `thumbnail`, `images`, `category`, `type`, `color`, `featured`, `date_create`, `date_modify`) VALUES
(1, 'Miss Honey Top', '38.00', 'Go wild in this warm honey yellow polka dot top. Complete with frilly adjustable straps, a cute keyhole detail on the front, and easy zipper access on the side, this will be your go-to top for the summer!', 'Outer layer: 100% polyester.\r\nLining: 100% rayon.', 'images/honey_top_full_1.jpg', 'images/honey_top_full_1.jpg, images/honey_top_full_2.jpg, images/honey_top_full_3.jpg, images/honey_top_full_4.jpg', 'Women', 'Top', 'Warm', 0, '2020-04-12 17:44:01', '2020-05-17 16:32:57'),
(2, 'Summer Angel Top', '52.00', 'The angel is in the details. Embrace summer in this dusty pink lace halter top with a cute peplum waist. The lace pattern also has a subtle black outline detail that is beautiful up close and from afar.', 'Outer layer: 100% polyester. Lining: 100% polyester.', 'images/angel_top_full_1.jpg', 'images/angel_top_full_1.jpg, images/angel_top_full_2.jpg, images/angel_top_full_3.jpg, images/angel_top_full_4.jpg', 'Women', 'Top', 'Warm', 1, '2020-04-12 18:03:29', '2020-05-17 17:35:47'),
(3, 'Sundaze Dress', '62.00', 'Lounge around or go run errands in this breezy sundress. The dress features a yellow and faded gray floral pattern, perfect for picnic vibes. The dress wraps seamlessly around inside the dress and ties on front.', '100% cotton.', 'images/sundaze_dress_full_1.jpg', 'images/sundaze_dress_full_1.jpg, images/sundaze_dress_full_2.jpg, images/sundaze_dress_full_3.jpg, images/sundaze_dress_full_4.jpg', 'Women', 'Dress', 'Warm', 1, '2020-04-12 18:15:55', '2020-04-12 18:15:55'),
(4, 'Beachy Top', '22.00', 'The beaches are waiting. Show up in this fun yellow crop bandeau top, with short flare sleeves. The material is super stretchy and comfortable. Pack for the beach and get your tan on!', '80% cotton. 20% polyester.', 'images/beachy_top_full_1.jpg', 'images/beachy_top_full_1.jpg, images/beachy_top_full_2.jpg, images/beachy_top_full_3.jpg, images/beachy_top_full_4.jpg', 'Women', 'Top', 'Warm', 1, '2020-04-12 18:21:31', '2020-04-12 18:21:31'),
(5, 'Penelope Top', '28.00', 'With a top as soft as this one, you do not even need anywhere to go to put on our Penelope tank. We made this top super stretchy and comfy to wear out or in bed! Grab your besties and have a slumber party.', '80% cotton. 20% polyester.', 'images/penelope_top_full_1.jpg', 'images/penelope_top_full_1.jpg, images/penelope_top_full_2.jpg, images/penelope_top_full_3.jpg, images/penelope_top_full_4.jpg', 'Women', 'Top', 'Cool', 0, '2020-04-12 18:31:25', '2020-04-12 18:31:25'),
(6, 'Bliss Dress', '72.00', 'Need a dress for a party? Show up in this beautiful white lace bodycon dress with plunging wired neckline. Nude lining accompanies the sheer white lace pattern for extra dimension.', 'Outer layer: 85% polyester, 15% nylon.\r\nLining: 100% polyester.', 'images/bliss_dress_full_1.jpg', 'images/bliss_dress_full_1.jpg, images/bliss_dress_full_2.jpg, images/bliss_dress_full_3.jpg, images/bliss_dress_full_4.jpg', 'Women', 'Dress', 'Neutral', 1, '2020-04-12 18:39:17', '2020-04-12 18:39:17'),
(7, 'Spirit Top', '26.00', 'This acid wash denim crop top with hot pink trim was made for those who want to stand out. Elastic banded section on back and adjustable straps holds you in for extra security.', '100% cotton.', 'images/spirit_top_full_1.jpg', 'images/spirit_top_full_1.jpg, images/spirit_top_full_2.jpg, images/spirit_top_full_3.jpg, images/spirit_top_full_4.jpg', 'Women', 'Top', 'Cool', 1, '2020-04-12 18:44:58', '2020-04-12 18:44:58'),
(8, 'Blue Garden Top', '32.00', 'Stand out in this cobalt blue and white floral top, inspired by beautiful blue and white pottery. This crop top is made in a stretchy material, hugging and showing off your body curves.', '95% cotton. 5% elastane.', 'images/blue_garden_top_full_1.jpg', 'images/blue_garden_top_full_1.jpg, images/blue_garden_top_full_2.jpg, images/blue_garden_top_full_3.jpg, images/blue_garden_top_full_4.jpg', 'Women', 'Top', 'Cool', 0, '2020-04-12 18:53:29', '2020-04-12 18:53:29'),
(9, 'Wild Child Top', '24.00', 'Bring out your inner wild child with this cute floral crop with a sweetheart neckline. The front of the top comes apart with detachable metal hooks and straps are adjustable to fit your unique frame. ', '95% cotton. 5% spandex.', 'images/wild_child_top_full_1.jpg', 'images/wild_child_top_full_1.jpg, images/wild_child_top_full_2.jpg, images/wild_child_top_full_3.jpg, images/wild_child_top_full_4.jpg', 'Women', 'Top', 'Cool', 0, '2020-04-12 19:01:22', '2020-04-12 19:01:22'),
(10, 'Heavens Above Shirt', '102.00', 'Find your wings and soar in our Heavens Above button down shirt. Super lightweight and soft, this shirt is perfect to wear for weekend lunch, running errands, or just about anything.', '100% viscose.', 'images/heavens_above_shirt_full_1.jpg', 'images/heavens_above_shirt_full_1.jpg, images/heavens_above_shirt_full_2.jpg, images/heavens_above_shirt_full_3.jpg, images/heavens_above_shirt_full_4.jpg', 'Men', 'Top', 'Cool', 1, '2020-04-12 19:06:58', '2020-05-17 18:20:03'),
(11, 'Boho Shirt', '32.00', 'Simple and effortless, the Boho t-shirt is made for everyday wear, for inside and out. The shirt is perfectly thin and  breathable, so you will never need to worry about overheating.', '100% linen.', 'images/boho_shirt_full_1.jpg', 'images/boho_shirt_full_1.jpg, images/boho_shirt_full_2.jpg, images/boho_shirt_full_3.jpg, images/boho_shirt_full_4.jpg', 'Men', 'Top', 'Neutral', 0, '2020-04-12 19:11:13', '2020-05-18 14:07:17'),
(13, 'Desert Daze Shirt', '52.00', 'Catch some desert vibes in our Desert Daze cotton shirt. Button details by the neck and smooth combed texture make this item the ultimate comfy top. Fans call this the most super breathable and airy shirt ever.', '100% cotton.', 'images/desert_shirt_full_1.jpg', 'images/desert_shirt_full_1.jpg, images/desert_shirt_full_2.jpg, images/desert_shirt_full_3.jpg, images/desert_shirt_full_4.jpg', 'Men', 'Top', 'Warm', 1, '2020-05-17 15:15:07', '2020-05-17 15:15:07'),
(21, 'Salmon Shirt', '55.00', 'Need something to wear for weekend brunch or weekday dinner? Our Salmon Shirt is super easy to throw on and looks great against all skin tones. Don\'t worry, no salmons were used in making this shirt!', '29% Cotton. 67% Tencel. 4% Spandex.', 'images/salmon_shirt_full_1.jpg', 'images/salmon_shirt_full_1.jpg, images/salmon_shirt_full_2.jpg, images/salmon_shirt_full_3.jpg, images/salmon_shirt_full_4.jpg', 'Men', 'Top', 'Warm', 0, '2020-05-18 13:56:45', '2020-05-18 13:56:45'),
(22, 'Smoke Shirt', '37.00', 'Go out in style with our Smoke Shirt. Simple, soft, and super stylish, the Smoke Shirt is the perfect option for days when you feel like you have nothing to wear! Elegant embroidered details on the bottom seam.', '100% Cotton.', 'images/smoke_shirt_full_1.jpg', 'images/smoke_shirt_full_1.jpg, images/smoke_shirt_full_2.jpg, images/smoke_shirt_full_3.jpg, images/smoke_shirt_full_4.jpg', 'Men', 'Top', 'Neutral', 1, '2020-05-18 14:01:40', '2020-05-18 14:07:24');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
