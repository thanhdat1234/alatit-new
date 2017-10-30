-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 05:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edemo3`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `footer` tinyint(1) DEFAULT NULL,
  `slider` tinyint(1) DEFAULT NULL,
  `top` tinyint(1) DEFAULT NULL,
  `left` tinyint(1) DEFAULT NULL,
  `right` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `title`, `link`, `status`, `footer`, `slider`, `top`, `left`, `right`, `created_at`, `updated_at`) VALUES
(1, '1.PNG', 'Dắt xe bá đạo', 'http://shop-lar2.dev/', 1, 0, 0, 0, 0, 0, '2017-04-03 07:23:07', '2017-04-03 07:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(3) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `top` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `footer` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `status`, `type`, `top`, `home`, `footer`, `parent_id`, `keywords`, `description`, `avatar`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Áo sơ mi 3', 'Ao-so-mi-3', 0, 1, 2, NULL, 1, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:07:02', '2017-04-01 06:51:44'),
(2, 'Áo sơ mi', 'Ao-so-mi', 1, NULL, 2, NULL, NULL, NULL, 1, '', '', NULL, NULL, '2017-03-25 03:07:46', '2017-03-25 03:07:46'),
(3, 'Áo sơ mi 1', 'Ao-so-mi-1', 0, NULL, 2, NULL, NULL, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:08:28', '2017-03-25 03:08:28'),
(4, 'Quần thun', 'Quan-thun', 12, NULL, 2, NULL, NULL, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:10:19', '2017-03-25 03:10:19'),
(5, 'Quần thun 2', 'Quan-thun-2', 12, NULL, 2, NULL, NULL, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:11:56', '2017-03-25 03:11:56'),
(6, 'Quần thun 1', 'Quan-thun-1', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:12:19', '2017-03-25 03:12:19'),
(7, 'Quần thun 4', 'Quan-thun-4', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:12:56', '2017-03-25 03:12:56'),
(8, 'Quần thun 5', 'Quan-thun-5', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:14:41', '2017-03-25 03:14:41'),
(9, 'Quần thun 6', 'Quan-thun-6', 12, NULL, 2, NULL, NULL, 1, 4, '', '', NULL, NULL, '2017-03-25 03:15:09', '2017-03-27 18:25:26'),
(10, 'Quần thun 101', 'Quan-thun-101', 13, 1, 2, 1, 1, 1, 4, 'daf', 'dsfasdfasdf', NULL, NULL, '2017-03-25 03:16:25', '2017-03-27 18:50:41'),
(11, 'Quần thun 8', 'Quan-thun-8', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:16:52', '2017-03-25 03:16:52'),
(12, 'Quần thun 9', 'Quan-thun-9', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:17:24', '2017-03-25 03:17:24'),
(13, 'Quần thun 10', 'Quan-thun-10', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:18:50', '2017-03-25 03:18:50'),
(14, 'Quần thun 11', 'Quan-thun-11', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:20:07', '2017-03-25 03:20:07'),
(15, 'Quần thun 12', 'Quan-thun-12', 12, NULL, 2, NULL, NULL, NULL, 4, '', '', NULL, NULL, '2017-03-25 03:23:02', '2017-03-25 03:23:02'),
(16, 'Áo khoác', 'Ao-khoac', 13, NULL, 2, NULL, NULL, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:24:00', '2017-03-25 03:24:00'),
(17, 'Áo khoác 1', 'Ao-khoac-1', 13, NULL, 2, NULL, NULL, NULL, 0, '', '', NULL, NULL, '2017-03-25 03:25:54', '2017-03-25 03:25:54'),
(25, 'nguyen abc abc', 'nguyen-abc-abc', 12, 1, 1, 0, 0, 1, 0, '', '', '', NULL, '2017-03-25 20:30:04', '2017-04-04 07:34:52'),
(38, 'Mực in', 'Muc-in', 0, 1, 3, 1, 1, NULL, 0, 'Muc In, Mực In, Mực In chính hãng', 'Các sản phẩm Mực In được phân phối bởi CÔNG TY TNHH TM NGUYỄN ĐỨC, chúng tôi cam kết những sản phẩm Muc In chính hãng, giá tốt và giao hàng miễn phí trong Tp. Hồ Chí Minh', 'ink-.png', NULL, '2017-04-04 09:26:38', '2017-04-04 09:26:38'),
(39, 'mực in Hp', 'muc-in-Hp', 0, 1, 3, NULL, 1, NULL, 38, '', '', '', NULL, '2017-04-04 09:26:57', '2017-04-04 09:32:48'),
(40, 'mực in canon', 'muc-in-canon', 1, 1, 3, NULL, 1, NULL, 38, '', '', '', NULL, '2017-04-04 09:27:20', '2017-04-04 09:27:20'),
(41, 'Mực in brother', 'Muc-in-brother', 2, 1, 3, NULL, 1, NULL, 38, '', '', '', NULL, '2017-04-04 09:27:47', '2017-04-04 09:27:47'),
(42, 'Máy in', 'May-in', 1, 1, 3, NULL, 1, NULL, 0, 'May In, Máy In, Máy In chính hãng', 'Các sản phẩm Máy In được phân phối bởi CÔNG TY TNHH TM NGUYỄN ĐỨC, chúng tôi cam kết những sản phẩm May In chính hãng, giá tốt và giao hàng miễn phí trong Tp. Hồ Chí Minh', 'printer-.png', NULL, '2017-04-04 09:28:52', '2017-04-04 09:28:52'),
(43, 'máy Hp', 'may-Hp', 0, 1, 3, NULL, 1, NULL, 42, '', '', '', NULL, '2017-04-04 09:29:12', '2017-04-04 09:29:12'),
(44, 'Máy in canon', 'May-in-canon', 1, 1, 3, NULL, 1, NULL, 42, '', '', '', NULL, '2017-04-04 09:29:29', '2017-04-04 09:29:29'),
(45, 'Máy in brother', 'May-in-brother', 1, 1, 3, NULL, 1, NULL, 42, '', '', '', NULL, '2017-04-04 09:30:00', '2017-04-04 09:30:00'),
(46, 'Thiết bị văn phòng', 'Thiet-bi-van-phong', 0, 1, 3, NULL, 1, NULL, 0, '', '', 'copy-machine.png', NULL, '2017-04-04 09:30:40', '2017-04-04 09:30:40'),
(47, 'Máy photocopy', 'May-photocopy', 0, 1, 3, NULL, 1, NULL, 0, '', '', '', NULL, '2017-04-04 09:31:03', '2017-04-04 09:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`,`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(4, 4, 'chua-linh-phuoc-ngoi-chua-giu-11-ki-luc-viet-nam-du-lich-du-lich-0.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, '10-diem-den-dep-nhat-viet-nam-theo-rough-guides-1.jpg', '', '2017-04-01 04:34:24', '2017-04-01 04:34:24'),
(7, 4, 'co-mot-khu-tap-the-nghe-si-dep-la-lung-it-nguoi-biet-giua-long-ha-noi-sap-bi-do-bo-2.jpg', '', '2017-04-01 04:34:24', '2017-04-01 04:34:24'),
(8, 4, 'con-gai-lay-chong-giau-thuc-dung-hay-thuc-te-cong-dong-mang-0.jpg', '', '2017-04-01 04:34:24', '2017-04-01 04:34:24'),
(10, 1, 'banner.jpg', '', '2017-04-04 07:36:41', '2017-04-04 07:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_17_043543_create_cates_table', 2),
('2017_03_17_043548_create_cates_table', 3),
('2017_03_17_043547_create_images_table', 4),
('2017_03_17_043549_create_products_table', 4),
('2017_03_17_043550_create_posts_table', 4),
('2017_04_02_112100_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home` int(11) NOT NULL,
  `new` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_cate_id_foreign` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `alias`, `avatar`, `home`, `new`, `status`, `delete`, `intro`, `content`, `keywords`, `description`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Test bài viết', 'Test-bai-viet', '2.PNG', 0, 0, 0, 0, 'Gới thiệu\r\n', '<p>sd da fsdfds fsdfasdf sd</p>\r\n', 'fasd ád', 'sd ấd', 1, '2017-04-01 07:55:46', '2017-04-01 08:10:08'),
(2, 'Nguyễn Thành Đạt', 'Nguyen-Thanh-Dat', '14900528_701663139989732_6292818951352548594_n.jpg', 1, 0, 0, 0, '[null,null]', '<p>sdfsdfsd asd fasd fasd</p>\r\n', 'sdafasdf', 'dsfasdf', 3, '2017-04-01 07:56:22', '2017-04-01 08:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(10) DEFAULT NULL,
  `price_old` int(11) NOT NULL,
  `price_new` int(11) DEFAULT NULL,
  `percent` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home` int(11) NOT NULL,
  `new` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `best_sale` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `images_id` int(10) unsigned NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `view` int(12) DEFAULT NULL,
  `cart` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_cate_id_foreign` (`cate_id`),
  KEY `products_images_id_foreign` (`images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `num`, `price_old`, `price_new`, `percent`, `avatar`, `home`, `new`, `hot`, `best_sale`, `status`, `delete`, `intro`, `content`, `keywords`, `description`, `cate_id`, `images_id`, `user_id`, `view`, `cart`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thành Đạt b', 'Nguyen-Thanh-Dat-b', 12, 9000000, 8100000, 10, 'IMG_04092016_073132.jpg', 1, 0, 1, 0, 1, 0, '[["tieu de 3","tieu de 34","m\\u00e0u","g\\u00ec g\\u00ec \\u0111\\u00f3"],["tieu de 3","tieu de 34","m\\u00e0u","g\\u00ec g\\u00ec \\u0111\\u00f3"]]', '<p>cxvxcvzxcv</p>\r\n', 'Từ khóa', 'description', 35, 0, NULL, NULL, NULL, '2017-03-28 00:59:53', '2017-04-04 07:37:35'),
(2, 'Nguyễn Thành Đạt a', 'Nguyen-Thanh-Dat-a', 12, 120000, 108000, 10, '14900528_701663139989732_6292818951352548594_n.jpg', 0, 0, 1, 0, 0, 0, '[["dfasdf"],["dfsdf"]]', '<p>dfasdfasdf</p>\r\n', '', '', 29, 0, NULL, NULL, NULL, '2017-03-29 09:44:22', '2017-04-01 07:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `setups`
--

CREATE TABLE IF NOT EXISTS `setups` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `maps` text,
  `facebook` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebookF` text,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setups`
--

INSERT INTO `setups` (`id`, `name`, `intro`, `logo`, `title`, `description`, `keywords`, `email`, `phone`, `tel`, `hotline`, `address`, `maps`, `facebook`, `skype`, `google`, `twitter`, `youtube`, `facebookF`, `updated_at`, `created_at`) VALUES
(1, 'Nguyễn đạt', NULL, '1c57f1f0ab0f8cc8714940603649cff8.png', 'fasdfasd', 'sdfasdf', 'sdfasdf', 'ntdat.tb@gmail.com', '0987654321', NULL, '096 973 07 26', 'fsdafasd fsdf asd fasd fsd', '<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52709.78033012998!2d106.7364889102981!3d10.912068304071262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd0548c8cadef4d0!2zTmfDoyB0xrAgNTUw!5e0!3m2!1svi!2s!4v1491068385081" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>\r\n', 'fb.com//nguyenthanhdat1294', 'sadknight1294@live.com', 'dat', 'dat', 'dat', '<p><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fvietnamdepthongtindulich%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=993097487501887" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>\r\n', '2017-04-01 11:17:34', '2017-04-01 10:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `password`, `address`, `email`, `phone`, `gender`, `status`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nguyễn đạt', '$2y$10$NtyE61GVr4pz7UxPwXibH.WqFDC/kzlj8ugvD0b9WIJoO/O915WSm', NULL, 'guyendat@gmail.com', '', 0, 1, 1, 'DRO8rlRiv3wI8og20QXWi05YzmTA9tUvEMVUkC0l', '0000-00-00 00:00:00', '2017-04-03 08:59:16'),
(3, 'nguyendat', 'Nguyễn Thành Đạt', '123456', NULL, 'ntdat.tb1@gmail.com', '', 0, 1, 1, 'K2J0GmzeASLglHOgjJ7foq5zgDI8AWt90bsUc5Ww', '2017-04-03 08:27:21', '2017-04-04 07:34:11'),
(4, 'adatdat', 'Nguyễn Thành Đạt', '$2y$10$Nz4hPUfJUrZHmB6OrvDdYuANluvqK8qe47Wyx4ujgoeEmYrUOAl1K', NULL, 'ntdat.tb2@gmail.com', '', 0, 0, 1, 'uuqAeexooFjp7DPw2oMmEX5SKSus31LmeOPwC8xy7b6DgSGz8a94UlMvjCT1', '2017-04-03 08:28:39', '2017-04-04 08:54:12'),
(6, 'nguyendat9981', 'nguyendat9981', '$2y$10$GCjCt5.tBdMmGAvTdawgQOZG02m8TJrsm7poaWXKhFuSHys8UpI2q', NULL, 'nguyendat9981@gmail.com', '', 0, 1, 1, '8O9njvfDNvuFoLPyNuL29rfMMCbK9XxToWVY8h2F', '2017-04-03 09:25:06', '2017-04-03 09:25:06'),
(8, 'nguyendat81', 'nguyendat81', '$2y$10$hS/jTguBqzTeLYslDMigOOem5CkAJaduXDawOOTl.EFVVB7jyabT6', NULL, 'nguyendat81@gmail.com', '', 0, 1, 0, '8O9njvfDNvuFoLPyNuL29rfMMCbK9XxToWVY8h2F', '2017-04-03 09:32:52', '2017-04-03 09:34:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
