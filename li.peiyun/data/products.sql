-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2020 at 06:16 AM
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
  `images` varchar(512) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `brand`, `price`, `style`, `color`, `material`, `year_bought`, `box`, `images`) VALUES
(1, 'Kate Spade PVC laser crossbody bag', 'bag', 'Kate Spade', '200.00', 'crossbody', 'pink', 'PVC, leather', '2019', 'with protective bag', 'b_ks_p.jpg, b_ks_m.jpg'),
(2, 'Tom Ford yellow logo crossbody bag', 'bag', 'Tom Ford', '200.00', 'corssbody', 'Yellow', 'waterproof material', '2018', 'without box or bag', 'b_tf_y_p.jpg, b_tf_y_m.jpg'),
(3, 'Tom Ford mice crossbody bag', 'bag', 'Tom Ford', '300.00', 'corssbody', 'brown', 'knit, cowhide', '2019', 'with protective bag', 'b_tf_mice_p.jpg, b_tf_mice_pd.jpg, b_tf_mice_m.jpg'),
(4, 'Chanel red crossbody quilted bag', 'bag', 'Chanel', '800.00', 'crossbody', 'red', 'cowhide', '2016', 'without box or bag', 'b_cn_r_p.jpg, b_cn_r_m.jpg'),
(5, 'Chanel black quilted shoulder bag', 'bag', 'Chanel', '1800.00', 'shoulder bag', 'balck', 'cowhide', '2015', 'with protective bag', 'b_cn_b_p.jpg, b_cn_b_m.jpg'),
(6, 'Chanel white crossbody bucket bag', 'bag', 'Chanel', '2300.00', 'crossbody/hand bag', 'white', 'cowhide, bamboo', '2018', 'with protective bag', 'b_cn_wb_p.jpg, b_cn_wb_m.jpg'),
(7, 'Chanel purple gradient knit crossbody bag', 'bag', 'Chanel', '2800.00', 'crossbody', 'purple', 'cowhide, knit', '2019', 'with protective bag', 'b_cn_pg_p.jpg, b_cn_pg_pd.jpg, b_cn_pg_m.jpg'),
(8, 'Dior Black crossbody/shoulder bag/handbag', 'bag', 'Dior', '1800.00', 'shoulder bag/crossbody/hand bag', 'Black', 'cowhide', '2017', 'with protective bag', 'b_dr_p.jpg, b_dr_m.jpg, b_dr_md.jpg'),
(9, 'Bottega Veneta beige crossbody cloud bag', 'bag', 'Bottega Veneta', '1200.00', 'crossbody', 'beige', 'chamois ', '2019', 'with protective bag', 'b_bv_b_p.jpg, b_bv_b_m.jpg, b_bv_b_md.jpg'),
(10, 'Bottega Veneta gold crossbody cloud bag', 'bag', 'Bottega Veneta', '1200.00', 'crossbody', 'gold', 'Gilded leather', '2019', 'with protective bag', 'b_bv_g_p.jpg, b_bv_g_m.jpg'),
(11, 'Ferragamo pink tote/shoulder bag', 'bag', 'Ferragamo', '350.00', 'shoulder bag/crossbody/hand bag', 'pink', 'leather', '2016', 'without box or bag', 'b_fg_p_p.jpg, b_fg_p_pd.jpg, b_fg_p_m.jpg, b_fg_p_md.jpg'),
(12, 'Ferragamo snake pattern crossbody bag', 'bag', 'Ferragamo', '1000.00', 'crossbody', 'balck&white', 'artificial leather', '2018', 'with protective bag', 'b_fg_bw_p.jpg, b_fg_bw_m.jpg, b_fg_bw_md.jpg'),
(13, 'Louis Vuitton pink handbag', 'bag', 'Louis Vuitton', '5000.00', 'handbag', 'pink', 'artificial leather', '2018', 'with protective bag', 'b_lv_p_p.jpg, b_lv_p_pd.jpg'),
(14, 'Louis Vuitton denim monogram handbag', 'bag', 'Louis Vuitton', '4000.00', 'handbag', 'blue', 'cowhide, denim', '2013', 'with protective bag', 'b_lv_d_p.jpg, b_lv_d_pd.jpg, b_lv_d_m.jpg, b_lv_d_md.jpg'),
(15, 'Louis Vuitton colorful monogram handbag', 'bag', 'Louis Vuitton', '3500.00', 'handbag', 'white', 'cowhide', '2013', 'with protective bag', 'b_lv_cmh_p.jpg, b_lv_cmh_pd.jpg, b_lv_cmh_m.jpg, b_lv_cmh_m1.jpg, b_lv_cmh_md.jpg'),
(16, 'Louis Vuitton colorful monogram crossdody bag', 'bag', 'Louis Vuitton', '2500.00', 'crossbody', 'white', 'cowhide', '2014', 'with protective bag', 'b_lv_cmcb_p.jpg, b_lv_cmcb_pd.jpg, b_lv_cmcb_m.jpg, b_lv_cmcb_md.jpg'),
(17, 'Louis Vuitton triangular monogram handbag', 'bag', 'Louis Vuitton', '1500.00', 'handbag', 'brown', 'cowhide', '2016', 'with protective bag', 'b_lv_t_p.jpg, b_lv_t_pd.jpg, b_lv_t_m.jpg, b_lv_t_md.jpg'),
(18, 'Hermes Birkin Handbag', 'bag', 'Hermes', '20000.00', 'handbag', 'brown', 'cowhide', '2017', 'with box and protective bag', 'b_hm_p.jpg, b_hm_pd.jpg, b_hm_m.jpg, b_hm_md.jpg'),
(19, 'Prada black clutch', 'bag', 'Prada', '500.00', 'clutch', 'black', 'artificial leather, crystal', '2017', 'with protective bag', 'b_pr_p.jpg, b_pr_pd.jpg, b_pr_m.jpg'),
(20, 'Jimmy Choo white strapless middle heels', 'shoes', 'Jimmy Choo', '750.00', 'pointed toe/middle heel', 'white', 'leather', '2019', 'with box and protective bag', 's_jc_w_1.jpg, s_jc_w_2.jpg'),
(21, 'Jimmy Choo peep toe sandal heels', 'shoes', 'Jimmy Choo', '900.00', 'sandal/high heel', 'black', 'leather', '2019', 'with box and protective bag', 's_jc_pt_1.jpg, s_jc_pt_2.jpg, s_jc_pt_3.jpg, s_jc_pt_4.jpg,'),
(22, 'Jimmy Choo ankle strap heels', 'shoes', 'Jimmy Choo', '800.00', 'sandal/high heel', 'black', 'leather', '2018', 'with box and protective bag', 's_jc_as_1.jpg, s_jc_as_2.jpg, s_jc_as_3.jpg, s_jc_as_4.jpg,'),
(23, 'Jimmy Choo crystal star sandal heels', 'shoes', 'Jimmy Choo', '800.00', 'sandal/high heel', 'silver', 'leather, crystal', '2018', 'with box and protective bag', 's_jc_ss_1.jpg, s_jc_ss_2.jpg, s_jc_ss_3.jpg,'),
(24, 'Christian Louboutian beige studded heels ', 'shoes', 'Christian Louboutian', '800.00', 'pointed toe/high heel ', 'beige', 'leather, metal', '2018', 'with box and protective bag', 's_cl_st_1.jpg, s_cl_st_2.jpg, s_cl_st_3.jpg,'),
(25, 'Christian Louboutian black crystal strap heels ', 'shoes', 'Christian Louboutian', '900.00', 'pointed toe/high heel ', 'black', 'leather, crystal', '2019', 'with box and protective bag', 's_cl_b_1.jpg, s_cl_b_2.jpg, s_cl_b_3.jpg,'),
(26, 'Chanel classic toe pearl heels', 'shoes', 'Chanel', '1200.00', 'pointed toe/high heel ', 'white', 'leather', '2019', 'with box and protective bag', 's_cn_1.jpg, s_cn_2.jpg, s_cn_3.jpg,'),
(27, 'Martinez slingback middle heels', 'shoes', 'Martinez', '800.00', 'pointed toe/middle heel', 'balck/white', 'leather', '2019', 'with box and protective bag', 's_mt_1.jpg,s_mt_2.jpg,s_mt_3.jpg'),
(28, 'Sergio Rossi beige hollowed pointed toe heel', 'shoes', 'Sergio Rossi', '600.00', 'pointed toe/high heel', 'beige', 'leather', '2017', 'with box and protective bag', 's_sr_bp_1.jpg, s_sr_bp_2.jpg, s_sr_bp_3.jpg'),
(29, 'Sergio Rossi blue crystal sandal heels', 'shoes', 'Sergio Rossi', '700.00', 'sandal/high heel', 'blue', 'leather, crystal', '2017', 'with box and protective bag', 's_sr_bs_1.jpg, s_sr_bs_2.jpg, s_sr_bs_3.jpg'),
(30, 'Tom Ford black logo pointed toe flats ', 'shoes', 'Tom Ford', '300.00', 'pointed toe/flat', 'black', 'leather', '2019', 'with box and protective bag', 's_tf_1.jpg, s_tf_2.jpg, s_tf_3.jpg,'),
(31, 'Convers cross HolleKitty plimsolls ', 'shoes', 'Converse', '300.00', 'flat', 'white/pink', 'canvas', '2018', 'with box', 's_cv_1.jpg, s_cv_2.jpg, s_cv_3.jpg,'),
(32, 'Gilded retro gold leaf brooch', 'Jewlery', '', '25.00', 'brooch', 'gold', 'metal', '', 'with box', 'j_gl_1.jpg, j_gl_2.jpg,'),
(33, 'Gilded retro gold flower brooch', 'Jewlery', '', '25.00', 'brooch', 'gold', 'metal', '', 'with box', 'j_gf_1.jpg, j_gf_2.jpg,'),
(34, 'Gilded retro gold elephant brooch set', 'Jewlery', '', '30.00', 'brooch', 'gold', 'metal', '', 'with box', 'j_ge_1.jpg, j_ge_2.jpg,'),
(35, 'Gilded retro gold earring', 'Jewlery', '', '30.00', 'earring', 'gold', 'metal', '', 'with box', 'j_er_gr_1.jpg, j_er_gr_2.jpg'),
(36, 'Green flannel flower earring ', 'Jewlery', '', '15.00', 'earring', 'green', 'metal, flannel', '', 'without box or bag', 'j_er_gf_p.jpg, j_er_gf_m.jpg'),
(37, 'Hot blue plastic flower earring ', 'Jewlery', '', '15.00', 'earring', 'blue', 'plastic', '', 'without box or bag', 'j_er_bf_p.jpg, j_er_bf_m.jpg'),
(38, 'Pink crystal flower earring ', 'Jewlery', '', '15.00', 'earring', 'pink', 'metal, crystal', '', 'without box or bag', 'j_er_pf_p.jpg, j_er_pf_m.jpg'),
(39, 'Coppery flower earring ', 'Jewlery', '', '15.00', 'earring', 'brown', 'metal', '', 'without box or bag', 'j_er_cf_p.jpg, j_er_cf_m.jpg'),
(40, 'Yellow heart plastic earring', 'Jewlery', '', '15.00', 'earring', 'yellow', 'plastic', '', 'without box or bag', 'j_er_yh_p.jpg, j_er_yh_m.jpg'),
(41, 'Round straw plaited shell earring', 'Jewlery', '', '10.00', 'earring', 'brown', 'straw, shell', '', 'without box or bag', 'j_er_ss_p.jpg, j_er_ss_m.jpg'),
(42, 'Orange fan shape straw earring', 'Jewlery', '', '10.00', 'earring', 'orange', 'straw, metal', '', 'without box or bag', 'j_er_o_p.jpg, j_er_o_m.jpg'),
(43, 'Pearl ellipse earring', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '', 'without box or bag', 'j_er_pr_p.jpg, j_er_pr_m.jpg'),
(44, 'Square and pearl simplistic earring', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '', 'without box or bag', 'j_er_sp_p.jpg, j_er_sp_m.jpg'),
(45, 'Gold bow and pearl earring ', 'Jewlery', '', '15.00', 'earring', 'white', 'plastic, metal', '', 'without box or bag', 'j_er_bp_p.jpg, j_er_bp_m.jpg');

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
