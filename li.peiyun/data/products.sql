-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 04:49 PM
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
-- Database: `aaubackend`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `product_name` varchar(128) DEFAULT NULL,
  `category` varchar(32) DEFAULT NULL,
  `brand` varchar(64) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `style` varchar(64) DEFAULT NULL,
  `color` varchar(32) DEFAULT NULL,
  `material` varchar(64) DEFAULT NULL,
  `year_bought` varchar(4) DEFAULT NULL,
  `box` varchar(64) DEFAULT NULL,
  `thumbnail_a` varchar(256) NOT NULL,
  `thumbnail_b` varchar(256) NOT NULL,
  `images` varchar(512) DEFAULT NULL,
  `amount` int(13) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `brand`, `price`, `style`, `color`, `material`, `year_bought`, `box`, `thumbnail_a`, `thumbnail_b`, `images`, `amount`, `date_create`, `date_modify`) VALUES
(1, 'Kate Spade PVC Laser Crossbody Bag', 'bag', 'Kate Spade', '200.00', 'Crossbody', 'Pink', 'PVC, leather', '2019', 'With protective bag', 'b_ks_p.jpg', 'b_ks_m.jpg', 'b_ks_m.jpg,b_ks_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 17:42:27'),
(2, 'Tom Ford Yellow Crossbody Bag', 'bag', 'Tom Ford', '200.00', 'Crossbody', 'Yellow', 'Waterproof material', '2018', 'Without box or bag', 'b_tf_y_p.jpg', 'b_tf_y_m.jpg', 'b_tf_y_m.jpg,b_tf_y_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(3, 'Tom Ford Mice Crossbody Bag', 'bag', 'Tom Ford', '300.00', 'Crossbody', 'Brown', 'Knit, cowhide', '2019', 'With protective bag', 'b_tf_mice_p.jpg', 'b_tf_mice_m.jpg', 'b_tf_mice_m.jpg,b_tf_mice_p.jpg,b_tf_mice_pd.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(5, 'Chanel Black Quilted Shoulder Bag', 'bag', 'Chanel', '1800.00', 'Shoulderbag', 'Black', 'Cowhide', '2015', 'With protective bag', 'b_cn_b_p.jpg', 'b_cn_b_m.jpg', 'b_cn_b_m.jpg,b_cn_b_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(6, 'Chanel White Bucket Bag', 'bag', 'Chanel', '2300.00', 'Crossbody,handbag', 'White', 'Cowhide, bamboo', '2018', 'With protective bag', 'b_cn_wb_p.jpg', 'b_cn_wb_m.jpg', 'b_cn_wb_m.jpg,b_cn_wb_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(7, 'Chanel Purple Knit Crossbody Bag', 'bag', 'Chanel', '2800.00', 'Crossbody', 'Purple', 'Cowhide, knit', '2019', 'With protective bag', 'b_cn_pg_p.jpg', 'b_cn_pg_m.jpg', 'b_cn_pg_m.jpg,b_cn_pg_p.jpg,b_cn_pg_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(8, 'Dior Black Classic Shoulder Bag', 'bag', 'Dior', '800.00', 'Shoulderbag,Crossbody,Handbag', 'Black', 'Cowhide', '2017', 'With protective bag', 'b_dr_p.jpg', 'b_dr_m.jpg', 'b_dr_m.jpg,b_dr_md.jpg,b_dr_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 17:44:01'),
(10, 'Bottega Veneta Gold Crossbody Bag', 'bag', 'Bottega Veneta', '1200.00', 'Crossbody', 'Gold', 'Gilded leather', '2019', 'With protective bag', 'b_bv_g_p.jpg', 'b_bv_g_m.jpg', 'b_bv_g_m.jpg,b_bv_g_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(11, 'Ferragamo Pink Shoulder Bag', 'bag', 'Ferragamo', '350.00', 'Shoulderbag,crossbody', 'Pink', 'Leather', '2016', 'Without box or bag', 'b_fg_p_p.jpg', 'b_fg_p_m.jpg', 'b_fg_p_m.jpg,b_fg_p_md.jpg,b_fg_p_p.jpg,b_fg_p_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(12, 'Ferragamo Snakeskin Crossbody Bag', 'bag', 'Ferragamo', '1000.00', 'Crossbody', 'Black and white', 'Artificial leather', '2018', 'With protective bag', 'b_fg_bw_p.jpg', 'b_fg_bw_m.jpg', 'b_fg_bw_m.jpg,b_fg_bw_md.jpg,b_fg_bw_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(13, 'Louis Vuitton Pink Handbag', 'bag', 'Louis Vuitton', '5000.00', 'Handbag', 'Pink', 'Artificial leather', '2018', 'With protective bag', 'b_lv_p_p.jpg', 'b_lv_p_pd.jpg', 'b_lv_p_p.jpg,b_lv_p_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(14, 'Louis Vuitton Denim Handbag', 'bag', 'Louis Vuitton', '4000.00', 'Handbag', 'Blue', 'Cowhide, denim', '2013', 'With protective bag', 'b_lv_d_p.jpg', 'b_lv_d_md.jpg', 'b_lv_d_md.jpg,b_lv_d_m.jpg,b_lv_d_p.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(15, 'Louis Vuitton Monogram Handbag', 'bag', 'Louis Vuitton', '3500.00', 'Handbag', 'White', 'Cowhide', '2013', 'With protective bag', 'b_lv_cmh_p.jpg', 'b_lv_cmh_m1.jpg', 'b_lv_cmh_m1.jpg,b_lv_cmh_md.jpg,b_lv_cmh_p.jpg,b_lv_cmh_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(16, 'Louis Vuitton Monogram Crossbody Bag', 'bag', 'Louis Vuitton', '2500.00', 'Brossbody', 'White', 'Cowhide', '2014', 'With protective bag', 'b_lv_cmcb_p.jpg', 'b_lv_cmcb_m.jpg', 'b_lv_cmcb_m.jpg,b_lv_cmcb_p.jpg,b_lv_cmcb_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(17, 'Louis Vuitton Triangular Handbag', 'bag', 'Louis Vuitton', '1500.00', 'Handbag', 'Brown', 'Cowhide', '2016', 'With protective bag', 'b_lv_t_p.jpg', 'b_lv_t_m.jpg', 'b_lv_t_m.jpg,b_lv_t_md.jpg,b_lv_t_p.jpg,b_lv_t_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(18, 'Hermes Birkin Handbag', 'bag', 'Hermes', '20000.00', 'Handbag', 'Brown', 'Cowhide', '2017', 'With box and protective bag', 'b_hm_p.jpg', 'b_hm_m.jpg', 'b_hm_m.jpg,b_hm_md.jpg,b_hm_p.jpg,b_hm_pd.jpg', 0, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(20, 'Jimmy Choo white strapless middle heels', 'shoes', 'Jimmy Choo', '750.00', 'pointed toe/middle heel', 'white', 'leather', '2019', 'with box and protective bag', 's_jc_w_1.jpg', 's_jc_w_2.jpg', 's_jc_w_1.jpg,s_jc_w_2.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(21, 'Jimmy Choo peep toe sandal heels', 'shoes', 'Jimmy Choo', '900.00', 'sandal/high heel', 'black', 'leather', '2019', 'with box and protective bag', 's_jc_pt_1.jpg', 's_jc_pt_2.jpg', 's_jc_pt_1.jpg,s_jc_pt_2.jpg,s_jc_pt_3.jpg,s_jc_pt_4.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(22, 'Jimmy Choo ankle strap heels', 'shoes', 'Jimmy Choo', '800.00', 'sandal/high heel', 'black', 'leather', '2018', 'with box and protective bag', 's_jc_as_3.jpg', 's_jc_as_1.jpg', 's_jc_as_1.jpg,s_jc_as_2.jpg,s_jc_as_3.jpg,s_jc_as_4.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(23, 'Jimmy Choo crystal star sandal heels', 'shoes', 'Jimmy Choo', '800.00', 'sandal/high heel', 'silver', 'leather, crystal', '2018', 'with box and protective bag', 's_jc_ss_1.jpg', 's_jc_ss_2.jpg', 's_jc_ss_1.jpg,s_jc_ss_2.jpg,s_jc_ss_3.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(24, 'Christian Louboutian beige studded heels ', 'shoes', 'Christian Louboutian', '800.00', 'pointed toe/high heel ', 'beige', 'leather, metal', '2018', 'with box and protective bag', 's_cl_st_1.jpg', 's_cl_st_2.jpg', 's_cl_st_1.jpg,s_cl_st_2.jpg,s_cl_st_3.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(25, 'Christian Louboutian black crystal strap heels ', 'shoes', 'Christian Louboutian', '900.00', 'pointed toe/high heel ', 'black', 'leather, crystal', '2019', 'with box and protective bag', 's_cl_b_1.jpg', 's_cl_b_2.jpg', 's_cl_b_1.jpg,s_cl_b_2.jpg,s_cl_b_3.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(26, 'Chanel classic toe pearl heels', 'shoes', 'Chanel', '1200.00', 'pointed toe/high heel ', 'white', 'leather', '2019', 'with box and protective bag', 's_cn_1.jpg', 's_cn_2.jpg', 's_cn_1.jpg,s_cn_2.jpg,s_cn_3.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(27, 'Martinez slingback middle heels', 'shoes', 'Martinez', '800.00', 'pointed toe/middle heel', 'balck/white', 'leather', '2019', 'with box and protective bag', 's_mt_1.jpg', 's_mt_2.jpg', 's_mt_1.jpg,s_mt_2.jpg,s_mt_3.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(28, 'Sergio Rossi beige hollowed pointed toe heel', 'shoes', 'Sergio Rossi', '600.00', 'pointed toe/high heel', 'beige', 'leather', '2017', 'with box and protective bag', 's_sr_bp_1.jpg', 's_sr_bp_2.jpg', 's_sr_bp_1.jpg,s_sr_bp_2.jpg,s_sr_bp_3.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(29, 'Sergio Rossi blue crystal sandal heels', 'shoes', 'Sergio Rossi', '700.00', 'sandal/high heel', 'blue', 'leather, crystal', '2017', 'with box and protective bag', 's_sr_bs_1.jpg', 's_sr_bs_2.jpg', 's_sr_bs_1.jpg,s_sr_bs_2.jpg,s_sr_bs_3.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(30, 'Tom Ford black logo pointed toe flats ', 'shoes', 'Tom Ford', '300.00', 'pointed toe/flat', 'black', 'leather', '2019', 'with box and protective bag', 's_tf_1.jpg', 's_tf_2.jpg', 's_tf_1.jpg,s_tf_2.jpg,s_tf_3.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(31, 'Convers cross HolleKitty plimsolls ', 'shoes', 'Converse', '300.00', 'flat', 'white/pink', 'canvas', '2018', 'with box', 's_cv_1.jpg', 's_cv_2.jpg', 's_cv_1.jpg,s_cv_2.jpg,s_cv_3.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(32, 'Gilded retro gold leaf brooch', 'Jewlery', '', '25.00', 'brooch', 'gold', 'metal', '2015', 'with box', 'j_gl_1.jpg', 'j_gl_2.jpg', 'j_gl_1.jpg,j_gl_2.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(33, 'Gilded retro gold flower brooch', 'Jewlery', '', '25.00', 'brooch', 'gold', 'metal', '2015', 'with box', 'j_gf_1.jpg', 'j_gf_2.jpg', 'j_gf_1.jpg,j_gf_2.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(34, 'Gilded retro gold elephant brooch set', 'Jewlery', '', '30.00', 'brooch', 'gold', 'metal', '2015', 'with box', 'j_ge_1.jpg', 'j_ge_2.jpg', 'j_ge_1.jpg,j_ge_2.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(35, 'Gilded retro gold earring', 'Jewlery', '', '30.00', 'earring', 'gold', 'metal', '2015', 'with box', 'j_er_gr_1.jpg', 'j_er_gr_2.jpg', 'j_er_gr_1.jpg,j_er_gr_2.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(36, 'Green flannel flower earring ', 'Jewlery', '', '15.00', 'earring', 'green', 'metal, flannel', '2019', 'without box or bag', 'j_er_gf_p.jpg', 'j_er_gf_m.jpg', 'j_er_gf_m.jpg,j_er_gf_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(37, 'Hot blue plastic flower earring ', 'Jewlery', '', '15.00', 'earring', 'blue', 'plastic', '2019', 'without box or bag', 'j_er_bf_p.jpg', 'j_er_bf_m.jpg', 'j_er_bf_m.jpg,j_er_bf_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(38, 'Pink crystal flower earring ', 'Jewlery', '', '15.00', 'earring', 'pink', 'metal, crystal', '2019', 'without box or bag', 'j_er_pf_p.jpg', 'j_er_pf_m.jpg', 'j_er_pf_m.jpg,j_er_pf_p.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(39, 'Coppery flower earring ', 'Jewlery', '', '15.00', 'earring', 'brown', 'metal', '2019', 'without box or bag', 'j_er_cf_p.jpg', 'j_er_cf_m.jpg', 'j_er_cf_m.jpg,j_er_cf_p.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(40, 'Yellow heart plastic earring', 'Jewlery', '', '15.00', 'earring', 'yellow', 'plastic', '2019', 'without box or bag', 'j_er_yh_p.jpg', 'j_er_yh_m.jpg', 'j_er_yh_p.jpg,j_er_yh_m.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(41, 'Round straw plaited shell earring', 'Jewlery', '', '10.00', 'earring', 'brown', 'straw, shell', '2019', 'without box or bag', 'j_er_ss_p.jpg', 'j_er_ss_m.jpg', 'j_er_ss_m.jpg,j_er_ss_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(42, 'Orange fan shape straw earring', 'Jewlery', '', '10.00', 'earring', 'orange', 'straw, metal', '2019', 'without box or bag', 'j_er_o_p.jpg', 'j_er_o_m.jpg', 'j_er_o_m.jpg,j_er_o_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(43, 'Pearl ellipse earring', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '2019', 'without box or bag', 'j_er_pr_p.jpg', 'j_er_pr_m.jpg', 'j_er_pr_m.jpg,j_er_pr_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(44, 'Square and pearl simplistic earring', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '2019', 'without box or bag', 'j_er_sp_p.jpg', 'j_er_sp_m.jpg', 'j_er_sp_m.jpg,j_er_sp_p.jpg,', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16'),
(45, 'Gold bow and pearl earring ', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '', 'without box or bag', 'j_er_bp_p.jpg', 'j_er_bp_m.jpg', 'j_er_bp_m.jpg,j_er_bp_p.jpg', 1, '2020-05-13 23:46:54', '2020-05-14 16:00:16');

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
