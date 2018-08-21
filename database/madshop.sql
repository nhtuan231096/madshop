-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2018 lúc 08:32 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `madshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Banner 1', 'banner2_min.jpg', 1, '2018-08-16 04:37:30', '2018-08-16 04:37:30'),
(7, 'bannerr', 'bannerr.png', 1, '2018-08-16 04:40:25', '2018-08-16 04:40:25'),
(8, 'banner3', 'banner3.jpg', 1, '2018-08-16 04:54:04', '2018-08-16 04:54:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `name`, `customer_id`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Tan', NULL, '123 Hà Nội', 963235363, 1, '2018-08-21 16:29:24', '2018-08-21 16:29:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `bill_id`, `pro_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(6, 13, 21, 1, 20000, '2018-08-21 23:29:24', '2018-08-21 23:29:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(189) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(9) DEFAULT '0',
  `ordering` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `parent`, `ordering`, `status`, `created_at`, `updated_at`) VALUES
(42, 'Giày Nam', 'giay-nam', NULL, 0, NULL, 1, '2018-08-11 10:26:19', '2018-08-11 10:26:19'),
(43, 'Giày Nữ', 'giay-nu', NULL, 0, NULL, 1, '2018-08-11 10:26:51', '2018-08-11 10:26:51'),
(44, 'Giày Trẻ Em', 'giay-tre-em', NULL, 0, NULL, 1, '2018-08-11 10:27:07', '2018-08-11 10:27:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `description`, `price`, `sale_price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Giày Adidas', 'giay-adidas', 42, 'MEN\'S TAJA COMMISSIONER', 190000, 180000, 'item-1.jpg', 1, '2018-08-13 17:39:11', '2018-08-13 17:39:11'),
(14, 'WOMEN\'S BOOTS SHOES MACA', 'womens-boots-shoes', 43, 'WOMEN\'S BOOTS SHOES MACA', 190000, 180000, 'item-5.jpg', 1, '2018-08-14 12:21:01', '2018-08-14 12:21:01'),
(17, 'Giày Nike Air Zoom Pegasus 35 Nam - Xanh Đen', 'giay-nike-air-zoom-pegasus-35-nam-xanh-den', 42, 'Giày Nike Air Zoom Pegasus 35 siêu phẩm giày thể thao được chờ đợi nhất năm 2018 đã chính thức ra mắt. Nike Air Zoom Pegasus 35 với thiết kế...', 3590000, NULL, 'giay-nike-zoom-1.JPG', 1, '2018-08-15 15:49:41', '2018-08-15 15:49:41'),
(18, 'Vans old skool đen', 'Vans-old-skool-đen', 42, 'Vans old skool đen', 100000, NULL, 'Vans old skool đen.jpg', 1, '2018-08-15 16:02:00', '2018-08-15 16:02:00'),
(19, 'Balenciaga Trip S trắng hồng', 'Balenciaga-Trip-S-trắng-hồng', 42, 'Balenciaga Trip S trắng hồng', 100000, NULL, 'Balenciaga Trip S trắng hồng.jpg', 1, '2018-08-15 16:03:24', '2018-08-15 16:03:24'),
(20, 'dsa', 'dsa', 44, 'ewqeq', 1, 1, 'top-hinh-anh-avatar-girl-xinh-thu-hut-nhat-facebook-1-1.jpg', 1, '2018-08-18 07:14:57', '2018-08-18 07:14:57'),
(21, 'abcaa', 'ab', 42, 'a', 12, 20000, 'banner3.jpg', 1, '2018-08-18 07:17:46', '2018-08-18 15:08:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$sC/FiaCGM/I9lsNFsNfVuuiO4EmH7u314e.xHbR34au7T4loWxsB2', '', '1', NULL, '2018-08-05 09:21:07', '2018-08-05 09:21:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
