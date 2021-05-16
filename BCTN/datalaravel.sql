-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2021 lúc 06:44 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datalaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_11_16_032955_create_tbl_admin_table', 2),
(6, '2020_11_18_154109_create_tbl_category_product', 3),
(7, '2020_11_23_133818_create_tbl_brand_product', 4),
(8, '2020_11_23_163354_create_tbl_product', 5),
(9, '2020_11_30_124424_tbl_customer', 6),
(10, '2020_11_30_133950_tbl__ghi_chu', 7),
(11, '2020_12_01_080207_tbl_payment', 8),
(12, '2020_12_01_080432_tbl_order', 8),
(13, '2020_12_01_080515_tbl_order_details', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Quỳnh', '0345678910', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_des`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'GUMAC', '1990', 0, NULL, NULL),
(3, 'Gucci', 'lau doi', 0, NULL, NULL),
(4, 'H&M', 'Thương Hiệu mới ra đời', 0, NULL, NULL),
(5, 'Adidas', 'giàu', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_des`, `category_status`, `created_at`, `updated_at`) VALUES
(8, 'Dress', 'For women', 0, NULL, NULL),
(9, 'Jeans', 'For women', 0, NULL, NULL),
(10, 'T - Shirt', 'For women', 0, NULL, NULL),
(11, 'Blazers', 'For women', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `qty_coupon` int(100) NOT NULL,
  `total_discount` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `qty_coupon`, `total_discount`, `coupon_condition`) VALUES
(4, '5k', 'DISCOUNT5K', 20, 5000, 1),
(5, 'New member', 'NEWMEMBER5%', 5, 10, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(4, 'quyndinh', 'quynh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09876543', NULL, NULL),
(5, 'quynhqh', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09876543', NULL, NULL),
(6, 'xâs', 'abcf.@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09876153', NULL, NULL),
(7, 'ádhsfd', 'asd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '098763456', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feeship`
--

CREATE TABLE `tbl_feeship` (
  `fee_id` int(11) NOT NULL,
  `fee_matp` int(10) NOT NULL,
  `fee_maqh` int(10) NOT NULL,
  `fee_freeShip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_feeship`
--

INSERT INTO `tbl_feeship` (`fee_id`, `fee_matp`, `fee_maqh`, `fee_freeShip`) VALUES
(1, 1, 3, '35,000'),
(2, 2, 24, '35000'),
(3, 1, 1, '35000'),
(4, 74, 718, '35,000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ghichu`
--

CREATE TABLE `tbl_ghichu` (
  `Note_id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_addressLine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_order` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ghichu`
--

INSERT INTO `tbl_ghichu` (`Note_id`, `firstName`, `lastName`, `Note_addressLine`, `Note_district`, `Note_province`, `Note_phone`, `Note_email`, `note_order`, `created_at`, `updated_at`) VALUES
(40, 'quynh', 'dinh', '119G Hoang Hoa Tham', '718', '74', '0586220568', 'quynh@gmail.com', 'non', NULL, NULL),
(41, 'qyh', 'dih', '06 tran van on', '796', '80', '0586938934', 'abc@gmail.com', 'non', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `Note_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `Note_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(42, 4, 40, 51, '603,790.00', 'Đơn hàng đang chờ xử lý', NULL, NULL),
(43, 4, 41, 52, '482,790.00', 'Đơn hàng đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(9, 13, 59, 'Belted Denim Mini Skirt', '250000', 1, NULL, NULL),
(10, 14, 62, 'Claudia Relaxed Mom Jeans', '399000', 2, NULL, NULL),
(11, 14, 64, 'Ultra High Waist Crop Mom Jeans', '499000', 1, NULL, NULL),
(12, 34, 61, 'Carter Crew Neck Cotton Top', '250000', 1, NULL, NULL),
(13, 42, 64, 'Ultra High Waist Crop Mom Jeans', '499000', 1, NULL, NULL),
(14, 43, 62, 'Claudia Relaxed Mom Jeans', '399000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8 NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(19, '2', 'Đang xử lý', NULL, NULL),
(20, '2', 'Đang xử lý', NULL, NULL),
(21, '2', 'Đang xử lý', NULL, NULL),
(22, '2', 'Đang xử lý', NULL, NULL),
(23, '2', 'Đang xử lý', NULL, NULL),
(24, '2', 'Đang xử lý', NULL, NULL),
(25, '2', 'Đang xử lý', NULL, NULL),
(26, '2', 'Đang xử lý', NULL, NULL),
(27, '2', 'Đang xử lý', NULL, NULL),
(28, '2', 'Đang xử lý', NULL, NULL),
(29, '2', 'Đang xử lý', NULL, NULL),
(30, '2', 'Đang xử lý', NULL, NULL),
(31, '2', 'Đang xử lý', NULL, NULL),
(32, '2', 'Đang xử lý', NULL, NULL),
(33, '2', 'Đang xử lý', NULL, NULL),
(34, '2', 'Đang xử lý', NULL, NULL),
(35, '2', 'Đang xử lý', NULL, NULL),
(36, '2', 'Đang xử lý', NULL, NULL),
(37, '2', 'Đang xử lý', NULL, NULL),
(38, '2', 'Đang xử lý', NULL, NULL),
(39, '2', 'Đang xử lý', NULL, NULL),
(40, '2', 'Đang xử lý', NULL, NULL),
(41, '2', 'Đang xử lý', NULL, NULL),
(42, '2', 'Đang xử lý', NULL, NULL),
(43, '2', 'Đang xử lý', NULL, NULL),
(44, '2', 'Đang xử lý', NULL, NULL),
(45, '2', 'Đang xử lý', NULL, NULL),
(46, '2', 'Đang xử lý', NULL, NULL),
(47, '2', 'Đang xử lý', NULL, NULL),
(48, '2', 'Đang xử lý', NULL, NULL),
(49, '2', 'Đang xử lý', NULL, NULL),
(50, '2', 'Đang xử lý', NULL, NULL),
(51, '2', 'Đang xử lý', NULL, NULL),
(52, '2', 'Đang xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_des`, `product_price`, `product_status`, `product_name`, `product_image`, `product_image1`, `product_image2`, `product_image3`, `created_at`, `updated_at`) VALUES
(59, 8, 5, '<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The ETHOS Collection</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">This skirt is&nbsp;made from organic cotton, which uses a pesticide-free production process.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Hook and zipper fly</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Side pockets</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Belted waist</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Pleated detail</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Relaxed fit, non-stretch</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Model is wearing size L</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Mini length: 17.75&quot;</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">74% Cotton, 25% Organic Cotton, 1% Elastane</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Machine wash</span></span></span></span></li>\r\n</ul>', '250000', 0, 'Belted Denim Mini Skirt', 'Belted Denim Mini Skirt40.jpg', 'Belted Denim Mini Skirt159.jpg', 'Belted Denim Mini Skirt282.jpg', 'Belted Denim Mini Skirt329.jpg', NULL, NULL),
(60, 11, 4, '<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The kind of look that makes a statement.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">We love a power couple. Pair it with the matching Brigitte Ultra High Waist Flare Pants (style # 100059212).</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Sleeveless</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Shirt collar, 4-button closure</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Two front pockets</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Belted waist, adjustable</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Relaxed fit, stretch-knit</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Model is wearing size S</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Approx. length: 30&quot;</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">62% Polyester, 33% Rayon, 5% Spandex</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Hand wash, cold</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Imported</span></span></span></span></li>\r\n</ul>', '320000', 0, 'Billie Sleeveless Belted Vest', 'Billie Sleeveless Belted Vest58.jpg', 'Billie Sleeveless Belted Vest171.jpg', 'Billie Sleeveless Belted Vest248.jpg', 'Billie Sleeveless Belted Vest371.jpg', NULL, NULL),
(61, 10, 3, '<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">We had a feeling you would add to cart.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Long sleeves</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Crew neck</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Relaxed fit</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Models are wearing sizes S &amp; M</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">100% Pima Cotton</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Machine wash, cold</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Imported</span></span></p>', '250000', 0, 'Carter Crew Neck Cotton Top', 'Carter Crew Neck Cotton Top76.jpg', 'Carter Crew Neck Cotton Top169.jpg', 'Carter Crew Neck Cotton Top222.jpg', 'Carter Crew Neck Cotton Top39.jpg', NULL, NULL),
(62, 9, 3, '<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Let Claudia into your closet.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Zipper fly</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">5-pocket styling</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Straight leg</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Mom fit</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Models are wearing sizes 27 &amp; 29</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Ultra-high waist: 11.5&quot;</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Short inseam: 26&quot;, Regular inseam: 28&quot;, Long inseam: 30&quot;</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">99% Cotton 1% Spandex</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Wash cold, inside out</span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Imported</span></span></span></li>\r\n</ul>', '399000', 0, 'Claudia Relaxed Mom Jeans', 'Claudia Relaxed Mom Jeans24.jpg', 'Claudia Relaxed Mom Jeans112.jpg', 'Claudia Relaxed Mom Jeans243.jpg', 'Claudia Relaxed Mom Jeans367.jpg', NULL, NULL),
(63, 11, 4, '<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">It&#39;s official. You&#39;ve met your perfect match.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Long sleeves, buttoned cuffs</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Shirt collar</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Button-up</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Chest pockets</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Relaxed fit</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Model is wearing size S</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Approx. length: 31.5&quot;</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">92% Rayon, 8% Polyester</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Machine wash, cold</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Imported</span></span></span></span></li>\r\n</ul>', '299000', 0, 'Button-Front Shacket', 'Button-Front Shacket44.jpg', 'Button-Front Shacket196.jpg', 'Button-Front Shacket218.jpg', 'Button-Front Shacket361.jpg', NULL, NULL),
(64, 9, 1, '<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The ETHOS Collection</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">This Claudia jean is made from organic cotton, which uses a pesticide-free production process.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Features</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">5-pocket styling</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Zipper fly</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Cropped length</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Relaxed fit, non-stretch</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Model is wearing size 27</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Ultra-high rise waist: 11.5&quot;</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Short inseam: 26&quot;, Regular inseam: 28&quot;, Long inseam: 30&quot;</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">74% Cotton, 25% Organic Cotton, 1% Elastane</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Washed cold, inside out</span></span></span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">Imported&nbsp;</span></span></span></span></li>\r\n</ul>', '499000', 0, 'Ultra High Waist Crop Mom Jeans', 'Claudia Ultra High Waist Crop Mom Jeans47.jpg', 'Claudia Ultra High Waist Crop Mom Jeans152.jpg', 'Claudia Ultra High Waist Crop Mom Jeans277.jpg', 'Claudia Ultra High Waist Crop Mom Jeans322.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanhuyen`
--

CREATE TABLE `tbl_quanhuyen` (
  `maqh` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_district` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanhuyen`
--

INSERT INTO `tbl_quanhuyen` (`maqh`, `name_district`, `type`, `matp`) VALUES
('001', 'Quận Ba Đình', 'Quận', 1),
('002', 'Quận Hoàn Kiếm', 'Quận', 1),
('003', 'Quận Tây Hồ', 'Quận', 1),
('004', 'Quận Long Biên', 'Quận', 1),
('005', 'Quận Cầu Giấy', 'Quận', 1),
('006', 'Quận Đống Đa', 'Quận', 1),
('007', 'Quận Hai Bà Trưng', 'Quận', 1),
('008', 'Quận Hoàng Mai', 'Quận', 1),
('009', 'Quận Thanh Xuân', 'Quận', 1),
('016', 'Huyện Sóc Sơn', 'Huyện', 1),
('017', 'Huyện Đông Anh', 'Huyện', 1),
('018', 'Huyện Gia Lâm', 'Huyện', 1),
('019', 'Quận Nam Từ Liêm', 'Quận', 1),
('020', 'Huyện Thanh Trì', 'Huyện', 1),
('021', 'Quận Bắc Từ Liêm', 'Quận', 1),
('024', 'Thành phố Hà Giang', 'Thành phố', 2),
('026', 'Huyện Đồng Văn', 'Huyện', 2),
('027', 'Huyện Mèo Vạc', 'Huyện', 2),
('028', 'Huyện Yên Minh', 'Huyện', 2),
('029', 'Huyện Quản Bạ', 'Huyện', 2),
('030', 'Huyện Vị Xuyên', 'Huyện', 2),
('031', 'Huyện Bắc Mê', 'Huyện', 2),
('032', 'Huyện Hoàng Su Phì', 'Huyện', 2),
('033', 'Huyện Xín Mần', 'Huyện', 2),
('034', 'Huyện Bắc Quang', 'Huyện', 2),
('035', 'Huyện Quang Bình', 'Huyện', 2),
('040', 'Thành phố Cao Bằng', 'Thành phố', 4),
('042', 'Huyện Bảo Lâm', 'Huyện', 4),
('043', 'Huyện Bảo Lạc', 'Huyện', 4),
('044', 'Huyện Thông Nông', 'Huyện', 4),
('045', 'Huyện Hà Quảng', 'Huyện', 4),
('046', 'Huyện Trà Lĩnh', 'Huyện', 4),
('047', 'Huyện Trùng Khánh', 'Huyện', 4),
('048', 'Huyện Hạ Lang', 'Huyện', 4),
('049', 'Huyện Quảng Uyên', 'Huyện', 4),
('050', 'Huyện Phục Hoà', 'Huyện', 4),
('051', 'Huyện Hoà An', 'Huyện', 4),
('052', 'Huyện Nguyên Bình', 'Huyện', 4),
('053', 'Huyện Thạch An', 'Huyện', 4),
('058', 'Thành Phố Bắc Kạn', 'Thành phố', 6),
('060', 'Huyện Pác Nặm', 'Huyện', 6),
('061', 'Huyện Ba Bể', 'Huyện', 6),
('062', 'Huyện Ngân Sơn', 'Huyện', 6),
('063', 'Huyện Bạch Thông', 'Huyện', 6),
('064', 'Huyện Chợ Đồn', 'Huyện', 6),
('065', 'Huyện Chợ Mới', 'Huyện', 6),
('066', 'Huyện Na Rì', 'Huyện', 6),
('070', 'Thành phố Tuyên Quang', 'Thành phố', 8),
('071', 'Huyện Lâm Bình', 'Huyện', 8),
('072', 'Huyện Nà Hang', 'Huyện', 8),
('073', 'Huyện Chiêm Hóa', 'Huyện', 8),
('074', 'Huyện Hàm Yên', 'Huyện', 8),
('075', 'Huyện Yên Sơn', 'Huyện', 8),
('076', 'Huyện Sơn Dương', 'Huyện', 8),
('080', 'Thành phố Lào Cai', 'Thành phố', 10),
('082', 'Huyện Bát Xát', 'Huyện', 10),
('083', 'Huyện Mường Khương', 'Huyện', 10),
('084', 'Huyện Si Ma Cai', 'Huyện', 10),
('085', 'Huyện Bắc Hà', 'Huyện', 10),
('086', 'Huyện Bảo Thắng', 'Huyện', 10),
('087', 'Huyện Bảo Yên', 'Huyện', 10),
('088', 'Huyện Sa Pa', 'Huyện', 10),
('089', 'Huyện Văn Bàn', 'Huyện', 10),
('094', 'Thành phố Điện Biên Phủ', 'Thành phố', 11),
('095', 'Thị Xã Mường Lay', 'Thị xã', 11),
('096', 'Huyện Mường Nhé', 'Huyện', 11),
('097', 'Huyện Mường Chà', 'Huyện', 11),
('098', 'Huyện Tủa Chùa', 'Huyện', 11),
('099', 'Huyện Tuần Giáo', 'Huyện', 11),
('100', 'Huyện Điện Biên', 'Huyện', 11),
('101', 'Huyện Điện Biên Đông', 'Huyện', 11),
('102', 'Huyện Mường Ảng', 'Huyện', 11),
('103', 'Huyện Nậm Pồ', 'Huyện', 11),
('105', 'Thành phố Lai Châu', 'Thành phố', 12),
('106', 'Huyện Tam Đường', 'Huyện', 12),
('107', 'Huyện Mường Tè', 'Huyện', 12),
('108', 'Huyện Sìn Hồ', 'Huyện', 12),
('109', 'Huyện Phong Thổ', 'Huyện', 12),
('110', 'Huyện Than Uyên', 'Huyện', 12),
('111', 'Huyện Tân Uyên', 'Huyện', 12),
('112', 'Huyện Nậm Nhùn', 'Huyện', 12),
('116', 'Thành phố Sơn La', 'Thành phố', 14),
('118', 'Huyện Quỳnh Nhai', 'Huyện', 14),
('119', 'Huyện Thuận Châu', 'Huyện', 14),
('120', 'Huyện Mường La', 'Huyện', 14),
('121', 'Huyện Bắc Yên', 'Huyện', 14),
('122', 'Huyện Phù Yên', 'Huyện', 14),
('123', 'Huyện Mộc Châu', 'Huyện', 14),
('124', 'Huyện Yên Châu', 'Huyện', 14),
('125', 'Huyện Mai Sơn', 'Huyện', 14),
('126', 'Huyện Sông Mã', 'Huyện', 14),
('127', 'Huyện Sốp Cộp', 'Huyện', 14),
('128', 'Huyện Vân Hồ', 'Huyện', 14),
('132', 'Thành phố Yên Bái', 'Thành phố', 15),
('133', 'Thị xã Nghĩa Lộ', 'Thị xã', 15),
('135', 'Huyện Lục Yên', 'Huyện', 15),
('136', 'Huyện Văn Yên', 'Huyện', 15),
('137', 'Huyện Mù Căng Chải', 'Huyện', 15),
('138', 'Huyện Trấn Yên', 'Huyện', 15),
('139', 'Huyện Trạm Tấu', 'Huyện', 15),
('140', 'Huyện Văn Chấn', 'Huyện', 15),
('141', 'Huyện Yên Bình', 'Huyện', 15),
('148', 'Thành phố Hòa Bình', 'Thành phố', 17),
('150', 'Huyện Đà Bắc', 'Huyện', 17),
('151', 'Huyện Kỳ Sơn', 'Huyện', 17),
('152', 'Huyện Lương Sơn', 'Huyện', 17),
('153', 'Huyện Kim Bôi', 'Huyện', 17),
('154', 'Huyện Cao Phong', 'Huyện', 17),
('155', 'Huyện Tân Lạc', 'Huyện', 17),
('156', 'Huyện Mai Châu', 'Huyện', 17),
('157', 'Huyện Lạc Sơn', 'Huyện', 17),
('158', 'Huyện Yên Thủy', 'Huyện', 17),
('159', 'Huyện Lạc Thủy', 'Huyện', 17),
('164', 'Thành phố Thái Nguyên', 'Thành phố', 19),
('165', 'Thành phố Sông Công', 'Thành phố', 19),
('167', 'Huyện Định Hóa', 'Huyện', 19),
('168', 'Huyện Phú Lương', 'Huyện', 19),
('169', 'Huyện Đồng Hỷ', 'Huyện', 19),
('170', 'Huyện Võ Nhai', 'Huyện', 19),
('171', 'Huyện Đại Từ', 'Huyện', 19),
('172', 'Thị xã Phổ Yên', 'Thị xã', 19),
('173', 'Huyện Phú Bình', 'Huyện', 19),
('178', 'Thành phố Lạng Sơn', 'Thành phố', 20),
('180', 'Huyện Tràng Định', 'Huyện', 20),
('181', 'Huyện Bình Gia', 'Huyện', 20),
('182', 'Huyện Văn Lãng', 'Huyện', 20),
('183', 'Huyện Cao Lộc', 'Huyện', 20),
('184', 'Huyện Văn Quan', 'Huyện', 20),
('185', 'Huyện Bắc Sơn', 'Huyện', 20),
('186', 'Huyện Hữu Lũng', 'Huyện', 20),
('187', 'Huyện Chi Lăng', 'Huyện', 20),
('188', 'Huyện Lộc Bình', 'Huyện', 20),
('189', 'Huyện Đình Lập', 'Huyện', 20),
('193', 'Thành phố Hạ Long', 'Thành phố', 22),
('194', 'Thành phố Móng Cái', 'Thành phố', 22),
('195', 'Thành phố Cẩm Phả', 'Thành phố', 22),
('196', 'Thành phố Uông Bí', 'Thành phố', 22),
('198', 'Huyện Bình Liêu', 'Huyện', 22),
('199', 'Huyện Tiên Yên', 'Huyện', 22),
('200', 'Huyện Đầm Hà', 'Huyện', 22),
('201', 'Huyện Hải Hà', 'Huyện', 22),
('202', 'Huyện Ba Chẽ', 'Huyện', 22),
('203', 'Huyện Vân Đồn', 'Huyện', 22),
('204', 'Huyện Hoành Bồ', 'Huyện', 22),
('205', 'Thị xã Đông Triều', 'Thị xã', 22),
('206', 'Thị xã Quảng Yên', 'Thị xã', 22),
('207', 'Huyện Cô Tô', 'Huyện', 22),
('213', 'Thành phố Bắc Giang', 'Thành phố', 24),
('215', 'Huyện Yên Thế', 'Huyện', 24),
('216', 'Huyện Tân Yên', 'Huyện', 24),
('217', 'Huyện Lạng Giang', 'Huyện', 24),
('218', 'Huyện Lục Nam', 'Huyện', 24),
('219', 'Huyện Lục Ngạn', 'Huyện', 24),
('220', 'Huyện Sơn Động', 'Huyện', 24),
('221', 'Huyện Yên Dũng', 'Huyện', 24),
('222', 'Huyện Việt Yên', 'Huyện', 24),
('223', 'Huyện Hiệp Hòa', 'Huyện', 24),
('227', 'Thành phố Việt Trì', 'Thành phố', 25),
('228', 'Thị xã Phú Thọ', 'Thị xã', 25),
('230', 'Huyện Đoan Hùng', 'Huyện', 25),
('231', 'Huyện Hạ Hoà', 'Huyện', 25),
('232', 'Huyện Thanh Ba', 'Huyện', 25),
('233', 'Huyện Phù Ninh', 'Huyện', 25),
('234', 'Huyện Yên Lập', 'Huyện', 25),
('235', 'Huyện Cẩm Khê', 'Huyện', 25),
('236', 'Huyện Tam Nông', 'Huyện', 25),
('237', 'Huyện Lâm Thao', 'Huyện', 25),
('238', 'Huyện Thanh Sơn', 'Huyện', 25),
('239', 'Huyện Thanh Thuỷ', 'Huyện', 25),
('240', 'Huyện Tân Sơn', 'Huyện', 25),
('243', 'Thành phố Vĩnh Yên', 'Thành phố', 26),
('244', 'Thị xã Phúc Yên', 'Thị xã', 26),
('246', 'Huyện Lập Thạch', 'Huyện', 26),
('247', 'Huyện Tam Dương', 'Huyện', 26),
('248', 'Huyện Tam Đảo', 'Huyện', 26),
('249', 'Huyện Bình Xuyên', 'Huyện', 26),
('250', 'Huyện Mê Linh', 'Huyện', 1),
('251', 'Huyện Yên Lạc', 'Huyện', 26),
('252', 'Huyện Vĩnh Tường', 'Huyện', 26),
('253', 'Huyện Sông Lô', 'Huyện', 26),
('256', 'Thành phố Bắc Ninh', 'Thành phố', 27),
('258', 'Huyện Yên Phong', 'Huyện', 27),
('259', 'Huyện Quế Võ', 'Huyện', 27),
('260', 'Huyện Tiên Du', 'Huyện', 27),
('261', 'Thị xã Từ Sơn', 'Thị xã', 27),
('262', 'Huyện Thuận Thành', 'Huyện', 27),
('263', 'Huyện Gia Bình', 'Huyện', 27),
('264', 'Huyện Lương Tài', 'Huyện', 27),
('268', 'Quận Hà Đông', 'Quận', 1),
('269', 'Thị xã Sơn Tây', 'Thị xã', 1),
('271', 'Huyện Ba Vì', 'Huyện', 1),
('272', 'Huyện Phúc Thọ', 'Huyện', 1),
('273', 'Huyện Đan Phượng', 'Huyện', 1),
('274', 'Huyện Hoài Đức', 'Huyện', 1),
('275', 'Huyện Quốc Oai', 'Huyện', 1),
('276', 'Huyện Thạch Thất', 'Huyện', 1),
('277', 'Huyện Chương Mỹ', 'Huyện', 1),
('278', 'Huyện Thanh Oai', 'Huyện', 1),
('279', 'Huyện Thường Tín', 'Huyện', 1),
('280', 'Huyện Phú Xuyên', 'Huyện', 1),
('281', 'Huyện Ứng Hòa', 'Huyện', 1),
('282', 'Huyện Mỹ Đức', 'Huyện', 1),
('288', 'Thành phố Hải Dương', 'Thành phố', 30),
('290', 'Thị xã Chí Linh', 'Thị xã', 30),
('291', 'Huyện Nam Sách', 'Huyện', 30),
('292', 'Huyện Kinh Môn', 'Huyện', 30),
('293', 'Huyện Kim Thành', 'Huyện', 30),
('294', 'Huyện Thanh Hà', 'Huyện', 30),
('295', 'Huyện Cẩm Giàng', 'Huyện', 30),
('296', 'Huyện Bình Giang', 'Huyện', 30),
('297', 'Huyện Gia Lộc', 'Huyện', 30),
('298', 'Huyện Tứ Kỳ', 'Huyện', 30),
('299', 'Huyện Ninh Giang', 'Huyện', 30),
('300', 'Huyện Thanh Miện', 'Huyện', 30),
('303', 'Quận Hồng Bàng', 'Quận', 31),
('304', 'Quận Ngô Quyền', 'Quận', 31),
('305', 'Quận Lê Chân', 'Quận', 31),
('306', 'Quận Hải An', 'Quận', 31),
('307', 'Quận Kiến An', 'Quận', 31),
('308', 'Quận Đồ Sơn', 'Quận', 31),
('309', 'Quận Dương Kinh', 'Quận', 31),
('311', 'Huyện Thuỷ Nguyên', 'Huyện', 31),
('312', 'Huyện An Dương', 'Huyện', 31),
('313', 'Huyện An Lão', 'Huyện', 31),
('314', 'Huyện Kiến Thuỵ', 'Huyện', 31),
('315', 'Huyện Tiên Lãng', 'Huyện', 31),
('316', 'Huyện Vĩnh Bảo', 'Huyện', 31),
('317', 'Huyện Cát Hải', 'Huyện', 31),
('318', 'Huyện Bạch Long Vĩ', 'Huyện', 31),
('323', 'Thành phố Hưng Yên', 'Thành phố', 33),
('325', 'Huyện Văn Lâm', 'Huyện', 33),
('326', 'Huyện Văn Giang', 'Huyện', 33),
('327', 'Huyện Yên Mỹ', 'Huyện', 33),
('328', 'Huyện Mỹ Hào', 'Huyện', 33),
('329', 'Huyện Ân Thi', 'Huyện', 33),
('330', 'Huyện Khoái Châu', 'Huyện', 33),
('331', 'Huyện Kim Động', 'Huyện', 33),
('332', 'Huyện Tiên Lữ', 'Huyện', 33),
('333', 'Huyện Phù Cừ', 'Huyện', 33),
('336', 'Thành phố Thái Bình', 'Thành phố', 34),
('338', 'Huyện Quỳnh Phụ', 'Huyện', 34),
('339', 'Huyện Hưng Hà', 'Huyện', 34),
('340', 'Huyện Đông Hưng', 'Huyện', 34),
('341', 'Huyện Thái Thụy', 'Huyện', 34),
('342', 'Huyện Tiền Hải', 'Huyện', 34),
('343', 'Huyện Kiến Xương', 'Huyện', 34),
('344', 'Huyện Vũ Thư', 'Huyện', 34),
('347', 'Thành phố Phủ Lý', 'Thành phố', 35),
('349', 'Huyện Duy Tiên', 'Huyện', 35),
('350', 'Huyện Kim Bảng', 'Huyện', 35),
('351', 'Huyện Thanh Liêm', 'Huyện', 35),
('352', 'Huyện Bình Lục', 'Huyện', 35),
('353', 'Huyện Lý Nhân', 'Huyện', 35),
('356', 'Thành phố Nam Định', 'Thành phố', 36),
('358', 'Huyện Mỹ Lộc', 'Huyện', 36),
('359', 'Huyện Vụ Bản', 'Huyện', 36),
('360', 'Huyện Ý Yên', 'Huyện', 36),
('361', 'Huyện Nghĩa Hưng', 'Huyện', 36),
('362', 'Huyện Nam Trực', 'Huyện', 36),
('363', 'Huyện Trực Ninh', 'Huyện', 36),
('364', 'Huyện Xuân Trường', 'Huyện', 36),
('365', 'Huyện Giao Thủy', 'Huyện', 36),
('366', 'Huyện Hải Hậu', 'Huyện', 36),
('369', 'Thành phố Ninh Bình', 'Thành phố', 37),
('370', 'Thành phố Tam Điệp', 'Thành phố', 37),
('372', 'Huyện Nho Quan', 'Huyện', 37),
('373', 'Huyện Gia Viễn', 'Huyện', 37),
('374', 'Huyện Hoa Lư', 'Huyện', 37),
('375', 'Huyện Yên Khánh', 'Huyện', 37),
('376', 'Huyện Kim Sơn', 'Huyện', 37),
('377', 'Huyện Yên Mô', 'Huyện', 37),
('380', 'Thành phố Thanh Hóa', 'Thành phố', 38),
('381', 'Thị xã Bỉm Sơn', 'Thị xã', 38),
('382', 'Thị xã Sầm Sơn', 'Thị xã', 38),
('384', 'Huyện Mường Lát', 'Huyện', 38),
('385', 'Huyện Quan Hóa', 'Huyện', 38),
('386', 'Huyện Bá Thước', 'Huyện', 38),
('387', 'Huyện Quan Sơn', 'Huyện', 38),
('388', 'Huyện Lang Chánh', 'Huyện', 38),
('389', 'Huyện Ngọc Lặc', 'Huyện', 38),
('390', 'Huyện Cẩm Thủy', 'Huyện', 38),
('391', 'Huyện Thạch Thành', 'Huyện', 38),
('392', 'Huyện Hà Trung', 'Huyện', 38),
('393', 'Huyện Vĩnh Lộc', 'Huyện', 38),
('394', 'Huyện Yên Định', 'Huyện', 38),
('395', 'Huyện Thọ Xuân', 'Huyện', 38),
('396', 'Huyện Thường Xuân', 'Huyện', 38),
('397', 'Huyện Triệu Sơn', 'Huyện', 38),
('398', 'Huyện Thiệu Hóa', 'Huyện', 38),
('399', 'Huyện Hoằng Hóa', 'Huyện', 38),
('400', 'Huyện Hậu Lộc', 'Huyện', 38),
('401', 'Huyện Nga Sơn', 'Huyện', 38),
('402', 'Huyện Như Xuân', 'Huyện', 38),
('403', 'Huyện Như Thanh', 'Huyện', 38),
('404', 'Huyện Nông Cống', 'Huyện', 38),
('405', 'Huyện Đông Sơn', 'Huyện', 38),
('406', 'Huyện Quảng Xương', 'Huyện', 38),
('407', 'Huyện Tĩnh Gia', 'Huyện', 38),
('412', 'Thành phố Vinh', 'Thành phố', 40),
('413', 'Thị xã Cửa Lò', 'Thị xã', 40),
('414', 'Thị xã Thái Hoà', 'Thị xã', 40),
('415', 'Huyện Quế Phong', 'Huyện', 40),
('416', 'Huyện Quỳ Châu', 'Huyện', 40),
('417', 'Huyện Kỳ Sơn', 'Huyện', 40),
('418', 'Huyện Tương Dương', 'Huyện', 40),
('419', 'Huyện Nghĩa Đàn', 'Huyện', 40),
('420', 'Huyện Quỳ Hợp', 'Huyện', 40),
('421', 'Huyện Quỳnh Lưu', 'Huyện', 40),
('422', 'Huyện Con Cuông', 'Huyện', 40),
('423', 'Huyện Tân Kỳ', 'Huyện', 40),
('424', 'Huyện Anh Sơn', 'Huyện', 40),
('425', 'Huyện Diễn Châu', 'Huyện', 40),
('426', 'Huyện Yên Thành', 'Huyện', 40),
('427', 'Huyện Đô Lương', 'Huyện', 40),
('428', 'Huyện Thanh Chương', 'Huyện', 40),
('429', 'Huyện Nghi Lộc', 'Huyện', 40),
('430', 'Huyện Nam Đàn', 'Huyện', 40),
('431', 'Huyện Hưng Nguyên', 'Huyện', 40),
('432', 'Thị xã Hoàng Mai', 'Thị xã', 40),
('436', 'Thành phố Hà Tĩnh', 'Thành phố', 42),
('437', 'Thị xã Hồng Lĩnh', 'Thị xã', 42),
('439', 'Huyện Hương Sơn', 'Huyện', 42),
('440', 'Huyện Đức Thọ', 'Huyện', 42),
('441', 'Huyện Vũ Quang', 'Huyện', 42),
('442', 'Huyện Nghi Xuân', 'Huyện', 42),
('443', 'Huyện Can Lộc', 'Huyện', 42),
('444', 'Huyện Hương Khê', 'Huyện', 42),
('445', 'Huyện Thạch Hà', 'Huyện', 42),
('446', 'Huyện Cẩm Xuyên', 'Huyện', 42),
('447', 'Huyện Kỳ Anh', 'Huyện', 42),
('448', 'Huyện Lộc Hà', 'Huyện', 42),
('449', 'Thị xã Kỳ Anh', 'Thị xã', 42),
('450', 'Thành Phố Đồng Hới', 'Thành phố', 44),
('452', 'Huyện Minh Hóa', 'Huyện', 44),
('453', 'Huyện Tuyên Hóa', 'Huyện', 44),
('454', 'Huyện Quảng Trạch', 'Thị xã', 44),
('455', 'Huyện Bố Trạch', 'Huyện', 44),
('456', 'Huyện Quảng Ninh', 'Huyện', 44),
('457', 'Huyện Lệ Thủy', 'Huyện', 44),
('458', 'Thị xã Ba Đồn', 'Huyện', 44),
('461', 'Thành phố Đông Hà', 'Thành phố', 45),
('462', 'Thị xã Quảng Trị', 'Thị xã', 45),
('464', 'Huyện Vĩnh Linh', 'Huyện', 45),
('465', 'Huyện Hướng Hóa', 'Huyện', 45),
('466', 'Huyện Gio Linh', 'Huyện', 45),
('467', 'Huyện Đa Krông', 'Huyện', 45),
('468', 'Huyện Cam Lộ', 'Huyện', 45),
('469', 'Huyện Triệu Phong', 'Huyện', 45),
('470', 'Huyện Hải Lăng', 'Huyện', 45),
('471', 'Huyện Cồn Cỏ', 'Huyện', 45),
('474', 'Thành phố Huế', 'Thành phố', 46),
('476', 'Huyện Phong Điền', 'Huyện', 46),
('477', 'Huyện Quảng Điền', 'Huyện', 46),
('478', 'Huyện Phú Vang', 'Huyện', 46),
('479', 'Thị xã Hương Thủy', 'Thị xã', 46),
('480', 'Thị xã Hương Trà', 'Thị xã', 46),
('481', 'Huyện A Lưới', 'Huyện', 46),
('482', 'Huyện Phú Lộc', 'Huyện', 46),
('483', 'Huyện Nam Đông', 'Huyện', 46),
('490', 'Quận Liên Chiểu', 'Quận', 48),
('491', 'Quận Thanh Khê', 'Quận', 48),
('492', 'Quận Hải Châu', 'Quận', 48),
('493', 'Quận Sơn Trà', 'Quận', 48),
('494', 'Quận Ngũ Hành Sơn', 'Quận', 48),
('495', 'Quận Cẩm Lệ', 'Quận', 48),
('497', 'Huyện Hòa Vang', 'Huyện', 48),
('498', 'Huyện Hoàng Sa', 'Huyện', 48),
('502', 'Thành phố Tam Kỳ', 'Thành phố', 49),
('503', 'Thành phố Hội An', 'Thành phố', 49),
('504', 'Huyện Tây Giang', 'Huyện', 49),
('505', 'Huyện Đông Giang', 'Huyện', 49),
('506', 'Huyện Đại Lộc', 'Huyện', 49),
('507', 'Thị xã Điện Bàn', 'Thị xã', 49),
('508', 'Huyện Duy Xuyên', 'Huyện', 49),
('509', 'Huyện Quế Sơn', 'Huyện', 49),
('510', 'Huyện Nam Giang', 'Huyện', 49),
('511', 'Huyện Phước Sơn', 'Huyện', 49),
('512', 'Huyện Hiệp Đức', 'Huyện', 49),
('513', 'Huyện Thăng Bình', 'Huyện', 49),
('514', 'Huyện Tiên Phước', 'Huyện', 49),
('515', 'Huyện Bắc Trà My', 'Huyện', 49),
('516', 'Huyện Nam Trà My', 'Huyện', 49),
('517', 'Huyện Núi Thành', 'Huyện', 49),
('518', 'Huyện Phú Ninh', 'Huyện', 49),
('519', 'Huyện Nông Sơn', 'Huyện', 49),
('522', 'Thành phố Quảng Ngãi', 'Thành phố', 51),
('524', 'Huyện Bình Sơn', 'Huyện', 51),
('525', 'Huyện Trà Bồng', 'Huyện', 51),
('526', 'Huyện Tây Trà', 'Huyện', 51),
('527', 'Huyện Sơn Tịnh', 'Huyện', 51),
('528', 'Huyện Tư Nghĩa', 'Huyện', 51),
('529', 'Huyện Sơn Hà', 'Huyện', 51),
('530', 'Huyện Sơn Tây', 'Huyện', 51),
('531', 'Huyện Minh Long', 'Huyện', 51),
('532', 'Huyện Nghĩa Hành', 'Huyện', 51),
('533', 'Huyện Mộ Đức', 'Huyện', 51),
('534', 'Huyện Đức Phổ', 'Huyện', 51),
('535', 'Huyện Ba Tơ', 'Huyện', 51),
('536', 'Huyện Lý Sơn', 'Huyện', 51),
('540', 'Thành phố Qui Nhơn', 'Thành phố', 52),
('542', 'Huyện An Lão', 'Huyện', 52),
('543', 'Huyện Hoài Nhơn', 'Huyện', 52),
('544', 'Huyện Hoài Ân', 'Huyện', 52),
('545', 'Huyện Phù Mỹ', 'Huyện', 52),
('546', 'Huyện Vĩnh Thạnh', 'Huyện', 52),
('547', 'Huyện Tây Sơn', 'Huyện', 52),
('548', 'Huyện Phù Cát', 'Huyện', 52),
('549', 'Thị xã An Nhơn', 'Thị xã', 52),
('550', 'Huyện Tuy Phước', 'Huyện', 52),
('551', 'Huyện Vân Canh', 'Huyện', 52),
('555', 'Thành phố Tuy Hoà', 'Thành phố', 54),
('557', 'Thị xã Sông Cầu', 'Thị xã', 54),
('558', 'Huyện Đồng Xuân', 'Huyện', 54),
('559', 'Huyện Tuy An', 'Huyện', 54),
('560', 'Huyện Sơn Hòa', 'Huyện', 54),
('561', 'Huyện Sông Hinh', 'Huyện', 54),
('562', 'Huyện Tây Hoà', 'Huyện', 54),
('563', 'Huyện Phú Hoà', 'Huyện', 54),
('564', 'Huyện Đông Hòa', 'Huyện', 54),
('568', 'Thành phố Nha Trang', 'Thành phố', 56),
('569', 'Thành phố Cam Ranh', 'Thành phố', 56),
('570', 'Huyện Cam Lâm', 'Huyện', 56),
('571', 'Huyện Vạn Ninh', 'Huyện', 56),
('572', 'Thị xã Ninh Hòa', 'Thị xã', 56),
('573', 'Huyện Khánh Vĩnh', 'Huyện', 56),
('574', 'Huyện Diên Khánh', 'Huyện', 56),
('575', 'Huyện Khánh Sơn', 'Huyện', 56),
('576', 'Huyện Trường Sa', 'Huyện', 56),
('582', 'Thành phố Phan Rang-Tháp Chàm', 'Thành phố', 58),
('584', 'Huyện Bác Ái', 'Huyện', 58),
('585', 'Huyện Ninh Sơn', 'Huyện', 58),
('586', 'Huyện Ninh Hải', 'Huyện', 58),
('587', 'Huyện Ninh Phước', 'Huyện', 58),
('588', 'Huyện Thuận Bắc', 'Huyện', 58),
('589', 'Huyện Thuận Nam', 'Huyện', 58),
('593', 'Thành phố Phan Thiết', 'Thành phố', 60),
('594', 'Thị xã La Gi', 'Thị xã', 60),
('595', 'Huyện Tuy Phong', 'Huyện', 60),
('596', 'Huyện Bắc Bình', 'Huyện', 60),
('597', 'Huyện Hàm Thuận Bắc', 'Huyện', 60),
('598', 'Huyện Hàm Thuận Nam', 'Huyện', 60),
('599', 'Huyện Tánh Linh', 'Huyện', 60),
('600', 'Huyện Đức Linh', 'Huyện', 60),
('601', 'Huyện Hàm Tân', 'Huyện', 60),
('602', 'Huyện Phú Quí', 'Huyện', 60),
('608', 'Thành phố Kon Tum', 'Thành phố', 62),
('610', 'Huyện Đắk Glei', 'Huyện', 62),
('611', 'Huyện Ngọc Hồi', 'Huyện', 62),
('612', 'Huyện Đắk Tô', 'Huyện', 62),
('613', 'Huyện Kon Plông', 'Huyện', 62),
('614', 'Huyện Kon Rẫy', 'Huyện', 62),
('615', 'Huyện Đắk Hà', 'Huyện', 62),
('616', 'Huyện Sa Thầy', 'Huyện', 62),
('617', 'Huyện Tu Mơ Rông', 'Huyện', 62),
('618', 'Huyện Ia H\' Drai', 'Huyện', 62),
('622', 'Thành phố Pleiku', 'Thành phố', 64),
('623', 'Thị xã An Khê', 'Thị xã', 64),
('624', 'Thị xã Ayun Pa', 'Thị xã', 64),
('625', 'Huyện KBang', 'Huyện', 64),
('626', 'Huyện Đăk Đoa', 'Huyện', 64),
('627', 'Huyện Chư Păh', 'Huyện', 64),
('628', 'Huyện Ia Grai', 'Huyện', 64),
('629', 'Huyện Mang Yang', 'Huyện', 64),
('630', 'Huyện Kông Chro', 'Huyện', 64),
('631', 'Huyện Đức Cơ', 'Huyện', 64),
('632', 'Huyện Chư Prông', 'Huyện', 64),
('633', 'Huyện Chư Sê', 'Huyện', 64),
('634', 'Huyện Đăk Pơ', 'Huyện', 64),
('635', 'Huyện Ia Pa', 'Huyện', 64),
('637', 'Huyện Krông Pa', 'Huyện', 64),
('638', 'Huyện Phú Thiện', 'Huyện', 64),
('639', 'Huyện Chư Pưh', 'Huyện', 64),
('643', 'Thành phố Buôn Ma Thuột', 'Thành phố', 66),
('644', 'Thị Xã Buôn Hồ', 'Thị xã', 66),
('645', 'Huyện Ea H\'leo', 'Huyện', 66),
('646', 'Huyện Ea Súp', 'Huyện', 66),
('647', 'Huyện Buôn Đôn', 'Huyện', 66),
('648', 'Huyện Cư M\'gar', 'Huyện', 66),
('649', 'Huyện Krông Búk', 'Huyện', 66),
('650', 'Huyện Krông Năng', 'Huyện', 66),
('651', 'Huyện Ea Kar', 'Huyện', 66),
('652', 'Huyện M\'Đrắk', 'Huyện', 66),
('653', 'Huyện Krông Bông', 'Huyện', 66),
('654', 'Huyện Krông Pắc', 'Huyện', 66),
('655', 'Huyện Krông A Na', 'Huyện', 66),
('656', 'Huyện Lắk', 'Huyện', 66),
('657', 'Huyện Cư Kuin', 'Huyện', 66),
('660', 'Thị xã Gia Nghĩa', 'Thị xã', 67),
('661', 'Huyện Đăk Glong', 'Huyện', 67),
('662', 'Huyện Cư Jút', 'Huyện', 67),
('663', 'Huyện Đắk Mil', 'Huyện', 67),
('664', 'Huyện Krông Nô', 'Huyện', 67),
('665', 'Huyện Đắk Song', 'Huyện', 67),
('666', 'Huyện Đắk R\'Lấp', 'Huyện', 67),
('667', 'Huyện Tuy Đức', 'Huyện', 67),
('672', 'Thành phố Đà Lạt', 'Thành phố', 68),
('673', 'Thành phố Bảo Lộc', 'Thành phố', 68),
('674', 'Huyện Đam Rông', 'Huyện', 68),
('675', 'Huyện Lạc Dương', 'Huyện', 68),
('676', 'Huyện Lâm Hà', 'Huyện', 68),
('677', 'Huyện Đơn Dương', 'Huyện', 68),
('678', 'Huyện Đức Trọng', 'Huyện', 68),
('679', 'Huyện Di Linh', 'Huyện', 68),
('680', 'Huyện Bảo Lâm', 'Huyện', 68),
('681', 'Huyện Đạ Huoai', 'Huyện', 68),
('682', 'Huyện Đạ Tẻh', 'Huyện', 68),
('683', 'Huyện Cát Tiên', 'Huyện', 68),
('688', 'Thị xã Phước Long', 'Thị xã', 70),
('689', 'Thị xã Đồng Xoài', 'Thị xã', 70),
('690', 'Thị xã Bình Long', 'Thị xã', 70),
('691', 'Huyện Bù Gia Mập', 'Huyện', 70),
('692', 'Huyện Lộc Ninh', 'Huyện', 70),
('693', 'Huyện Bù Đốp', 'Huyện', 70),
('694', 'Huyện Hớn Quản', 'Huyện', 70),
('695', 'Huyện Đồng Phú', 'Huyện', 70),
('696', 'Huyện Bù Đăng', 'Huyện', 70),
('697', 'Huyện Chơn Thành', 'Huyện', 70),
('698', 'Huyện Phú Riềng', 'Huyện', 70),
('703', 'Thành phố Tây Ninh', 'Thành phố', 72),
('705', 'Huyện Tân Biên', 'Huyện', 72),
('706', 'Huyện Tân Châu', 'Huyện', 72),
('707', 'Huyện Dương Minh Châu', 'Huyện', 72),
('708', 'Huyện Châu Thành', 'Huyện', 72),
('709', 'Huyện Hòa Thành', 'Huyện', 72),
('710', 'Huyện Gò Dầu', 'Huyện', 72),
('711', 'Huyện Bến Cầu', 'Huyện', 72),
('712', 'Huyện Trảng Bàng', 'Huyện', 72),
('718', 'Thành phố Thủ Dầu Một', 'Thành phố', 74),
('719', 'Huyện Bàu Bàng', 'Huyện', 74),
('720', 'Huyện Dầu Tiếng', 'Huyện', 74),
('721', 'Thị xã Bến Cát', 'Thị xã', 74),
('722', 'Huyện Phú Giáo', 'Huyện', 74),
('723', 'Thị xã Tân Uyên', 'Thị xã', 74),
('724', 'Thị xã Dĩ An', 'Thị xã', 74),
('725', 'Thị xã Thuận An', 'Thị xã', 74),
('726', 'Huyện Bắc Tân Uyên', 'Huyện', 74),
('731', 'Thành phố Biên Hòa', 'Thành phố', 75),
('732', 'Thị xã Long Khánh', 'Thị xã', 75),
('734', 'Huyện Tân Phú', 'Huyện', 75),
('735', 'Huyện Vĩnh Cửu', 'Huyện', 75),
('736', 'Huyện Định Quán', 'Huyện', 75),
('737', 'Huyện Trảng Bom', 'Huyện', 75),
('738', 'Huyện Thống Nhất', 'Huyện', 75),
('739', 'Huyện Cẩm Mỹ', 'Huyện', 75),
('740', 'Huyện Long Thành', 'Huyện', 75),
('741', 'Huyện Xuân Lộc', 'Huyện', 75),
('742', 'Huyện Nhơn Trạch', 'Huyện', 75),
('747', 'Thành phố Vũng Tàu', 'Thành phố', 77),
('748', 'Thành phố Bà Rịa', 'Thành phố', 77),
('750', 'Huyện Châu Đức', 'Huyện', 77),
('751', 'Huyện Xuyên Mộc', 'Huyện', 77),
('752', 'Huyện Long Điền', 'Huyện', 77),
('753', 'Huyện Đất Đỏ', 'Huyện', 77),
('754', 'Huyện Tân Thành', 'Huyện', 77),
('755', 'Huyện Côn Đảo', 'Huyện', 77),
('760', 'Quận 1', 'Quận', 79),
('761', 'Quận 12', 'Quận', 79),
('762', 'Quận Thủ Đức', 'Quận', 79),
('763', 'Quận 9', 'Quận', 79),
('764', 'Quận Gò Vấp', 'Quận', 79),
('765', 'Quận Bình Thạnh', 'Quận', 79),
('766', 'Quận Tân Bình', 'Quận', 79),
('767', 'Quận Tân Phú', 'Quận', 79),
('768', 'Quận Phú Nhuận', 'Quận', 79),
('769', 'Quận 2', 'Quận', 79),
('770', 'Quận 3', 'Quận', 79),
('771', 'Quận 10', 'Quận', 79),
('772', 'Quận 11', 'Quận', 79),
('773', 'Quận 4', 'Quận', 79),
('774', 'Quận 5', 'Quận', 79),
('775', 'Quận 6', 'Quận', 79),
('776', 'Quận 8', 'Quận', 79),
('777', 'Quận Bình Tân', 'Quận', 79),
('778', 'Quận 7', 'Quận', 79),
('783', 'Huyện Củ Chi', 'Huyện', 79),
('784', 'Huyện Hóc Môn', 'Huyện', 79),
('785', 'Huyện Bình Chánh', 'Huyện', 79),
('786', 'Huyện Nhà Bè', 'Huyện', 79),
('787', 'Huyện Cần Giờ', 'Huyện', 79),
('794', 'Thành phố Tân An', 'Thành phố', 80),
('795', 'Thị xã Kiến Tường', 'Thị xã', 80),
('796', 'Huyện Tân Hưng', 'Huyện', 80),
('797', 'Huyện Vĩnh Hưng', 'Huyện', 80),
('798', 'Huyện Mộc Hóa', 'Huyện', 80),
('799', 'Huyện Tân Thạnh', 'Huyện', 80),
('800', 'Huyện Thạnh Hóa', 'Huyện', 80),
('801', 'Huyện Đức Huệ', 'Huyện', 80),
('802', 'Huyện Đức Hòa', 'Huyện', 80),
('803', 'Huyện Bến Lức', 'Huyện', 80),
('804', 'Huyện Thủ Thừa', 'Huyện', 80),
('805', 'Huyện Tân Trụ', 'Huyện', 80),
('806', 'Huyện Cần Đước', 'Huyện', 80),
('807', 'Huyện Cần Giuộc', 'Huyện', 80),
('808', 'Huyện Châu Thành', 'Huyện', 80),
('815', 'Thành phố Mỹ Tho', 'Thành phố', 82),
('816', 'Thị xã Gò Công', 'Thị xã', 82),
('817', 'Thị xã Cai Lậy', 'Huyện', 82),
('818', 'Huyện Tân Phước', 'Huyện', 82),
('819', 'Huyện Cái Bè', 'Huyện', 82),
('820', 'Huyện Cai Lậy', 'Thị xã', 82),
('821', 'Huyện Châu Thành', 'Huyện', 82),
('822', 'Huyện Chợ Gạo', 'Huyện', 82),
('823', 'Huyện Gò Công Tây', 'Huyện', 82),
('824', 'Huyện Gò Công Đông', 'Huyện', 82),
('825', 'Huyện Tân Phú Đông', 'Huyện', 82),
('829', 'Thành phố Bến Tre', 'Thành phố', 83),
('831', 'Huyện Châu Thành', 'Huyện', 83),
('832', 'Huyện Chợ Lách', 'Huyện', 83),
('833', 'Huyện Mỏ Cày Nam', 'Huyện', 83),
('834', 'Huyện Giồng Trôm', 'Huyện', 83),
('835', 'Huyện Bình Đại', 'Huyện', 83),
('836', 'Huyện Ba Tri', 'Huyện', 83),
('837', 'Huyện Thạnh Phú', 'Huyện', 83),
('838', 'Huyện Mỏ Cày Bắc', 'Huyện', 83),
('842', 'Thành phố Trà Vinh', 'Thành phố', 84),
('844', 'Huyện Càng Long', 'Huyện', 84),
('845', 'Huyện Cầu Kè', 'Huyện', 84),
('846', 'Huyện Tiểu Cần', 'Huyện', 84),
('847', 'Huyện Châu Thành', 'Huyện', 84),
('848', 'Huyện Cầu Ngang', 'Huyện', 84),
('849', 'Huyện Trà Cú', 'Huyện', 84),
('850', 'Huyện Duyên Hải', 'Huyện', 84),
('851', 'Thị xã Duyên Hải', 'Thị xã', 84),
('855', 'Thành phố Vĩnh Long', 'Thành phố', 86),
('857', 'Huyện Long Hồ', 'Huyện', 86),
('858', 'Huyện Mang Thít', 'Huyện', 86),
('859', 'Huyện  Vũng Liêm', 'Huyện', 86),
('860', 'Huyện Tam Bình', 'Huyện', 86),
('861', 'Thị xã Bình Minh', 'Thị xã', 86),
('862', 'Huyện Trà Ôn', 'Huyện', 86),
('863', 'Huyện Bình Tân', 'Huyện', 86),
('866', 'Thành phố Cao Lãnh', 'Thành phố', 87),
('867', 'Thành phố Sa Đéc', 'Thành phố', 87),
('868', 'Thị xã Hồng Ngự', 'Thị xã', 87),
('869', 'Huyện Tân Hồng', 'Huyện', 87),
('870', 'Huyện Hồng Ngự', 'Huyện', 87),
('871', 'Huyện Tam Nông', 'Huyện', 87),
('872', 'Huyện Tháp Mười', 'Huyện', 87),
('873', 'Huyện Cao Lãnh', 'Huyện', 87),
('874', 'Huyện Thanh Bình', 'Huyện', 87),
('875', 'Huyện Lấp Vò', 'Huyện', 87),
('876', 'Huyện Lai Vung', 'Huyện', 87),
('877', 'Huyện Châu Thành', 'Huyện', 87),
('883', 'Thành phố Long Xuyên', 'Thành phố', 89),
('884', 'Thành phố Châu Đốc', 'Thành phố', 89),
('886', 'Huyện An Phú', 'Huyện', 89),
('887', 'Thị xã Tân Châu', 'Thị xã', 89),
('888', 'Huyện Phú Tân', 'Huyện', 89),
('889', 'Huyện Châu Phú', 'Huyện', 89),
('890', 'Huyện Tịnh Biên', 'Huyện', 89),
('891', 'Huyện Tri Tôn', 'Huyện', 89),
('892', 'Huyện Châu Thành', 'Huyện', 89),
('893', 'Huyện Chợ Mới', 'Huyện', 89),
('894', 'Huyện Thoại Sơn', 'Huyện', 89),
('899', 'Thành phố Rạch Giá', 'Thành phố', 91),
('900', 'Thị xã Hà Tiên', 'Thị xã', 91),
('902', 'Huyện Kiên Lương', 'Huyện', 91),
('903', 'Huyện Hòn Đất', 'Huyện', 91),
('904', 'Huyện Tân Hiệp', 'Huyện', 91),
('905', 'Huyện Châu Thành', 'Huyện', 91),
('906', 'Huyện Giồng Riềng', 'Huyện', 91),
('907', 'Huyện Gò Quao', 'Huyện', 91),
('908', 'Huyện An Biên', 'Huyện', 91),
('909', 'Huyện An Minh', 'Huyện', 91),
('910', 'Huyện Vĩnh Thuận', 'Huyện', 91),
('911', 'Huyện Phú Quốc', 'Huyện', 91),
('912', 'Huyện Kiên Hải', 'Huyện', 91),
('913', 'Huyện U Minh Thượng', 'Huyện', 91),
('914', 'Huyện Giang Thành', 'Huyện', 91),
('916', 'Quận Ninh Kiều', 'Quận', 92),
('917', 'Quận Ô Môn', 'Quận', 92),
('918', 'Quận Bình Thuỷ', 'Quận', 92),
('919', 'Quận Cái Răng', 'Quận', 92),
('923', 'Quận Thốt Nốt', 'Quận', 92),
('924', 'Huyện Vĩnh Thạnh', 'Huyện', 92),
('925', 'Huyện Cờ Đỏ', 'Huyện', 92),
('926', 'Huyện Phong Điền', 'Huyện', 92),
('927', 'Huyện Thới Lai', 'Huyện', 92),
('930', 'Thành phố Vị Thanh', 'Thành phố', 93),
('931', 'Thị xã Ngã Bảy', 'Thị xã', 93),
('932', 'Huyện Châu Thành A', 'Huyện', 93),
('933', 'Huyện Châu Thành', 'Huyện', 93),
('934', 'Huyện Phụng Hiệp', 'Huyện', 93),
('935', 'Huyện Vị Thuỷ', 'Huyện', 93),
('936', 'Huyện Long Mỹ', 'Huyện', 93),
('937', 'Thị xã Long Mỹ', 'Thị xã', 93),
('941', 'Thành phố Sóc Trăng', 'Thành phố', 94),
('942', 'Huyện Châu Thành', 'Huyện', 94),
('943', 'Huyện Kế Sách', 'Huyện', 94),
('944', 'Huyện Mỹ Tú', 'Huyện', 94),
('945', 'Huyện Cù Lao Dung', 'Huyện', 94),
('946', 'Huyện Long Phú', 'Huyện', 94),
('947', 'Huyện Mỹ Xuyên', 'Huyện', 94),
('948', 'Thị xã Ngã Năm', 'Thị xã', 94),
('949', 'Huyện Thạnh Trị', 'Huyện', 94),
('950', 'Thị xã Vĩnh Châu', 'Thị xã', 94),
('951', 'Huyện Trần Đề', 'Huyện', 94),
('954', 'Thành phố Bạc Liêu', 'Thành phố', 95),
('956', 'Huyện Hồng Dân', 'Huyện', 95),
('957', 'Huyện Phước Long', 'Huyện', 95),
('958', 'Huyện Vĩnh Lợi', 'Huyện', 95),
('959', 'Thị xã Giá Rai', 'Thị xã', 95),
('960', 'Huyện Đông Hải', 'Huyện', 95),
('961', 'Huyện Hoà Bình', 'Huyện', 95),
('964', 'Thành phố Cà Mau', 'Thành phố', 96),
('966', 'Huyện U Minh', 'Huyện', 96),
('967', 'Huyện Thới Bình', 'Huyện', 96),
('968', 'Huyện Trần Văn Thời', 'Huyện', 96),
('969', 'Huyện Cái Nước', 'Huyện', 96),
('970', 'Huyện Đầm Dơi', 'Huyện', 96),
('971', 'Huyện Năm Căn', 'Huyện', 96),
('972', 'Huyện Phú Tân', 'Huyện', 96),
('973', 'Huyện Ngọc Hiển', 'Huyện', 96);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(10) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_status` varchar(255) NOT NULL,
  `size_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinhthanhpho`
--

CREATE TABLE `tbl_tinhthanhpho` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_province` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tbl_tinhthanhpho`
--

INSERT INTO `tbl_tinhthanhpho` (`matp`, `name_province`, `type`) VALUES
('01', 'Thành phố Hà Nội', 'Thành phố Trung ương'),
('02', 'Tỉnh Hà Giang', 'Tỉnh'),
('04', 'Tỉnh Cao Bằng', 'Tỉnh'),
('06', 'Tỉnh Bắc Kạn', 'Tỉnh'),
('08', 'Tỉnh Tuyên Quang', 'Tỉnh'),
('10', 'Tỉnh Lào Cai', 'Tỉnh'),
('11', 'Tỉnh Điện Biên', 'Tỉnh'),
('12', 'Tỉnh Lai Châu', 'Tỉnh'),
('14', 'Tỉnh Sơn La', 'Tỉnh'),
('15', 'Tỉnh Yên Bái', 'Tỉnh'),
('17', 'Tỉnh Hoà Bình', 'Tỉnh'),
('19', 'Tỉnh Thái Nguyên', 'Tỉnh'),
('20', 'Tỉnh Lạng Sơn', 'Tỉnh'),
('22', 'Tỉnh Quảng Ninh', 'Tỉnh'),
('24', 'Tỉnh Bắc Giang', 'Tỉnh'),
('25', 'Tỉnh Phú Thọ', 'Tỉnh'),
('26', 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
('27', 'Tỉnh Bắc Ninh', 'Tỉnh'),
('30', 'Tỉnh Hải Dương', 'Tỉnh'),
('31', 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
('33', 'Tỉnh Hưng Yên', 'Tỉnh'),
('34', 'Tỉnh Thái Bình', 'Tỉnh'),
('35', 'Tỉnh Hà Nam', 'Tỉnh'),
('36', 'Tỉnh Nam Định', 'Tỉnh'),
('37', 'Tỉnh Ninh Bình', 'Tỉnh'),
('38', 'Tỉnh Thanh Hóa', 'Tỉnh'),
('40', 'Tỉnh Nghệ An', 'Tỉnh'),
('42', 'Tỉnh Hà Tĩnh', 'Tỉnh'),
('44', 'Tỉnh Quảng Bình', 'Tỉnh'),
('45', 'Tỉnh Quảng Trị', 'Tỉnh'),
('46', 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
('48', 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
('49', 'Tỉnh Quảng Nam', 'Tỉnh'),
('51', 'Tỉnh Quảng Ngãi', 'Tỉnh'),
('52', 'Tỉnh Bình Định', 'Tỉnh'),
('54', 'Tỉnh Phú Yên', 'Tỉnh'),
('56', 'Tỉnh Khánh Hòa', 'Tỉnh'),
('58', 'Tỉnh Ninh Thuận', 'Tỉnh'),
('60', 'Tỉnh Bình Thuận', 'Tỉnh'),
('62', 'Tỉnh Kon Tum', 'Tỉnh'),
('64', 'Tỉnh Gia Lai', 'Tỉnh'),
('66', 'Tỉnh Đắk Lắk', 'Tỉnh'),
('67', 'Tỉnh Đắk Nông', 'Tỉnh'),
('68', 'Tỉnh Lâm Đồng', 'Tỉnh'),
('70', 'Tỉnh Bình Phước', 'Tỉnh'),
('72', 'Tỉnh Tây Ninh', 'Tỉnh'),
('74', 'Tỉnh Bình Dương', 'Tỉnh'),
('75', 'Tỉnh Đồng Nai', 'Tỉnh'),
('77', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
('79', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
('80', 'Tỉnh Long An', 'Tỉnh'),
('82', 'Tỉnh Tiền Giang', 'Tỉnh'),
('83', 'Tỉnh Bến Tre', 'Tỉnh'),
('84', 'Tỉnh Trà Vinh', 'Tỉnh'),
('86', 'Tỉnh Vĩnh Long', 'Tỉnh'),
('87', 'Tỉnh Đồng Tháp', 'Tỉnh'),
('89', 'Tỉnh An Giang', 'Tỉnh'),
('91', 'Tỉnh Kiên Giang', 'Tỉnh'),
('92', 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
('93', 'Tỉnh Hậu Giang', 'Tỉnh'),
('94', 'Tỉnh Sóc Trăng', 'Tỉnh'),
('95', 'Tỉnh Bạc Liêu', 'Tỉnh'),
('96', 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_xaphuongthitran`
--

CREATE TABLE `tbl_xaphuongthitran` (
  `xaid` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_ward` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `maqh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_xaphuongthitran`
--

INSERT INTO `tbl_xaphuongthitran` (`xaid`, `name_ward`, `type`, `maqh`) VALUES
('00001', 'Phường Phúc Xá', 'Phường', 1),
('00004', 'Phường Trúc Bạch', 'Phường', 1),
('00006', 'Phường Vĩnh Phúc', 'Phường', 1),
('00007', 'Phường Cống Vị', 'Phường', 1),
('00008', 'Phường Liễu Giai', 'Phường', 1),
('00082', 'Phường Trần Hưng Đạo', 'Phường', 2),
('00085', 'Phường Phan Chu Trinh', 'Phường', 2),
('00088', 'Phường Hàng Bài', 'Phường', 2),
('00091', 'Phường Phú Thượng', 'Phường', 3),
('00094', 'Phường Nhật Tân', 'Phường', 3),
('00097', 'Phường Tứ Liên', 'Phường', 3),
('00100', 'Phường Quảng An', 'Phường', 3),
('00103', 'Phường Xuân La', 'Phường', 3),
('00106', 'Phường Yên Phụ', 'Phường', 3),
('00109', 'Phường Bưởi', 'Phường', 3),
('00112', 'Phường Thụy Khuê', 'Phường', 3),
('00115', 'Phường Thượng Thanh', 'Phường', 4),
('00118', 'Phường Ngọc Thụy', 'Phường', 4),
('00121', 'Phường Giang Biên', 'Phường', 4),
('00169', 'Phường Quan Hoa', 'Phường', 5),
('00172', 'Phường Yên Hoà', 'Phường', 5),
('00175', 'Phường Trung Hoà', 'Phường', 5),
('00178', 'Phường Cát Linh', 'Phường', 6),
('00181', 'Phường Văn Miếu', 'Phường', 6),
('00184', 'Phường Quốc Tử Giám', 'Phường', 6),
('00187', 'Phường Láng Thượng', 'Phường', 6),
('00292', 'Phường Quỳnh Lôi', 'Phường', 7),
('00295', 'Phường Minh Khai', 'Phường', 7),
('00298', 'Phường Trương Định', 'Phường', 7),
('00301', 'Phường Thanh Trì', 'Phường', 8),
('00304', 'Phường Vĩnh Hưng', 'Phường', 8),
('00307', 'Phường Định Công', 'Phường', 8),
('00370', 'Phường Thanh Xuân Nam', 'Phường', 9),
('00373', 'Phường Kim Giang', 'Phường', 9),
('00376', 'Thị trấn Sóc Sơn', 'Thị trấn', 16),
('00379', 'Xã Bắc Sơn', 'Xã', 16),
('00382', 'Xã Minh Trí', 'Xã', 16),
('00385', 'Xã Hồng Kỳ', 'Xã', 16),
('00448', 'Xã Phù Lỗ', 'Xã', 16),
('00451', 'Xã Xuân Thu', 'Xã', 16),
('00454', 'Thị trấn Đông Anh', 'Thị trấn', 17),
('00457', 'Xã Xuân Nộn', 'Xã', 17),
('00460', 'Xã Thuỵ Lâm', 'Xã', 17),
('00463', 'Xã Bắc Hồng', 'Xã', 17),
('00583', 'Xã Bát Tràng', 'Xã', 18),
('00586', 'Xã Kim Lan', 'Xã', 18),
('00589', 'Xã Văn Đức', 'Xã', 18),
('00592', 'Phường Cầu Diễn', 'Phường', 19),
('00595', 'Phường Thượng Cát', 'Phường', 21),
('00598', 'Phường Liên Mạc', 'Phường', 21),
('00694', 'Phường Nguyễn Trãi', 'Phường', 24),
('00697', 'Phường Minh Khai', 'Phường', 24),
('00700', 'Xã Ngọc Đường', 'Xã', 24),
('00703', 'Xã Kim Thạch', 'Xã', 30),
('00706', 'Xã Phú Linh', 'Xã', 30),
('00709', 'Xã Kim Linh', 'Xã', 30),
('00712', 'Thị trấn Phó Bảng', 'Thị trấn', 26),
('00715', 'Xã Lũng Cú', 'Xã', 26),
('00815', 'Xã Niêm Tòng', 'Xã', 27),
('00817', 'Xã Niêm Sơn', 'Xã', 27),
('00820', 'Thị trấn Yên Minh', 'Thị trấn', 28),
('00823', 'Xã Thắng Mố', 'Xã', 28),
('00826', 'Xã Phú Lũng', 'Xã', 28),
('00829', 'Xã Sủng Tráng', 'Xã', 28),
('00832', 'Xã Bạch Đích', 'Xã', 28),
('00904', 'Xã Quyết Tiến', 'Xã', 29),
('00907', 'Xã Tả Ván', 'Xã', 29),
('00910', 'Xã Thái An', 'Xã', 29),
('00913', 'Thị trấn Vị Xuyên', 'Thị trấn', 30),
('00916', 'Thị trấn Nông Trường Việt Lâm', 'Thị trấn', 30),
('00919', 'Xã Minh Tân', 'Xã', 30),
('01015', 'Xã Đường Hồng', 'Xã', 31),
('01018', 'Xã Phiêng Luông', 'Xã', 31),
('01021', 'Thị trấn Vinh Quang', 'Thị trấn', 32),
('01024', 'Xã Bản Máy', 'Xã', 32),
('01027', 'Xã Thàng Tín', 'Xã', 32),
('01030', 'Xã Thèn Chu Phìn', 'Xã', 32),
('01033', 'Xã Pố Lồ', 'Xã', 32),
('01150', 'Xã Khuôn Lùng', 'Xã', 33),
('01153', 'Thị trấn Việt Quang', 'Thị trấn', 34),
('01156', 'Thị trấn Vĩnh Tuy', 'Thị trấn', 34),
('01159', 'Xã Tân Lập', 'Xã', 34),
('01162', 'Xã Tân Thành', 'Xã', 34),
('01261', 'Xã Tiên Yên', 'Xã', 35),
('01264', 'Xã Vĩ Thượng', 'Xã', 35),
('01267', 'Phường Sông Hiến', 'Phường', 40),
('01270', 'Phường Sông Bằng', 'Phường', 40),
('01316', 'Xã Thái Sơn', 'Xã', 42),
('01318', 'Xã Yên Thổ', 'Xã', 42),
('01321', 'Thị trấn Bảo Lạc', 'Thị trấn', 43),
('01324', 'Xã Cốc Pàng', 'Xã', 43),
('01390', 'Xã Bình Lãng', 'Xã', 44),
('01392', 'Thị trấn Xuân Hòa', 'Thị trấn', 45),
('01393', 'Xã Lũng Nặm', 'Xã', 45),
('01474', 'Xã Quốc Toản', 'Xã', 46),
('01477', 'Thị trấn Trùng Khánh', 'Thị trấn', 47),
('01573', 'Xã Thị Hoa', 'Xã', 48),
('01576', 'Thị trấn Quảng Uyên', 'Thị trấn', 49),
('01651', 'Xã Mỹ Hưng', 'Xã', 50),
('01654', 'Thị trấn Nước Hai', 'Thị trấn', 51),
('01783', 'Xã Hưng Đạo', 'Xã', 52),
('01786', 'Thị trấn Đông Khê', 'Thị trấn', 53),
('01855', 'Phường Xuất Hóa', 'Phường', 58),
('01858', 'Xã Bằng Thành', 'Xã', 60),
('01933', 'Xã Đồng Phúc', 'Xã', 61),
('01936', 'Thị trấn Nà Phặc', 'Thị trấn', 62),
('02017', 'Xã Quang Thuận', 'Xã', 63),
('02020', 'Thị trấn Bằng Lũng', 'Thị trấn', 64),
('02131', 'Xã Quảng Chu', 'Xã', 65),
('02134', 'Thị trấn Yến Lạc', 'Thị trấn', 66),
('02218', 'Phường Hưng Thành', 'Phường', 70),
('02221', 'Thị trấn Nà Hang', 'Thị trấn', 72),
('02371', 'Xã Bình Nhân', 'Xã', 73),
('02374', 'Thị trấn Tân Yên', 'Thị trấn', 74),
('02632', 'Xã Lâm Xuyên', 'Xã', 76),
('02635', 'Phường Duyên Hải', 'Phường', 80),
('02749', 'Xã Tòng Sành', 'Xã', 82),
('02752', 'Xã Pha Long', 'Xã', 83),
('02836', 'Xã Nàn Xín', 'Xã', 84),
('02839', 'Thị trấn Bắc Hà', 'Thị trấn', 85),
('02944', 'Xã Phú Nhuận', 'Xã', 86),
('02947', 'Thị trấn Phố Ràng', 'Thị trấn', 87),
('03052', 'Xã Nậm Cang', 'Xã', 88),
('03055', 'Thị trấn Khánh Yên', 'Thị trấn', 89),
('03145', 'Xã Thanh Minh', 'Xã', 94),
('03148', 'Phường Sông Đà', 'Phường', 95),
('03164', 'Xã Quảng Lâm', 'Xã', 96),
('03165', 'Xã Pa Tần', 'Xã', 103),
('03172', 'Thị Trấn Mường Chà', 'Thị trấn', 97),
('03203', 'Thị trấn Điện Biên Đông', 'Thị trấn', 101);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_feeship`
--
ALTER TABLE `tbl_feeship`
  ADD PRIMARY KEY (`fee_id`);

--
-- Chỉ mục cho bảng `tbl_ghichu`
--
ALTER TABLE `tbl_ghichu`
  ADD PRIMARY KEY (`Note_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_quanhuyen`
--
ALTER TABLE `tbl_quanhuyen`
  ADD PRIMARY KEY (`maqh`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_tinhthanhpho`
--
ALTER TABLE `tbl_tinhthanhpho`
  ADD PRIMARY KEY (`matp`);

--
-- Chỉ mục cho bảng `tbl_xaphuongthitran`
--
ALTER TABLE `tbl_xaphuongthitran`
  ADD PRIMARY KEY (`xaid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_feeship`
--
ALTER TABLE `tbl_feeship`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_ghichu`
--
ALTER TABLE `tbl_ghichu`
  MODIFY `Note_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
