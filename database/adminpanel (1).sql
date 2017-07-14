-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 01:06 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` int(10) UNSIGNED NOT NULL,
  `buttonable_id` int(11) NOT NULL,
  `buttonable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`id`, `buttonable_id`, `buttonable_type`, `name`, `href`, `created_at`, `updated_at`) VALUES
(13, 101, 'App\\feature', NULL, '#', '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(14, 102, 'App\\feature', NULL, '#', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(15, 103, 'App\\feature', NULL, '#', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(16, 104, 'App\\feature', NULL, '#', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(30, 17, 'App\\page', NULL, '#', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(31, 17, 'App\\page', NULL, '#', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(50, 169, 'App\\feature', 'Sign up now', '#', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(51, 170, 'App\\feature', 'Sign up now', '#', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(52, 171, 'App\\feature', 'Sign up now', '#', '2017-07-13 15:27:02', '2017-07-13 15:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(58, 'UP TO 365 DAYS/YEAR', 'Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that\'s your style.', 1, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(59, 'READY IN 20 MINUTES', 'You\'re only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you\'re 100% happy.', 1, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(60, '100% ORGANIC', 'All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!', 1, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(61, 'ORDER ANYTHING', 'We don\'t limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It\'s up to you!', 1, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(62, '1', 'Choose the subscription plan that best fits your needs and sign up today.', 1, '2017-07-12 14:28:00', '2017-07-12 14:28:00'),
(63, '2', 'Order your delicious meal using our mobile app or website. Or you can even call us!', 1, '2017-07-12 14:28:00', '2017-07-12 14:28:00'),
(64, '3', 'Enjoy your meal after less than 20 minutes. See you the next time!', 1, '2017-07-12 14:28:01', '2017-07-12 14:28:01'),
(101, 'lisbon', NULL, 1, '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(102, 'SAN FRANCISCO', NULL, 1, '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(103, 'BERLIN', NULL, 1, '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(104, 'LONDON', NULL, 1, '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(105, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(106, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(107, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(108, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(109, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(110, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(111, NULL, NULL, 1, '2017-07-12 18:12:16', '2017-07-12 18:12:16'),
(112, NULL, NULL, 1, '2017-07-12 18:12:17', '2017-07-12 18:12:17'),
(157, 'Alberto Duncan', 'Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn\'t live without my daily meals!', 1, '2017-07-13 08:54:30', '2017-07-13 08:54:30'),
(158, 'Joana Silva', 'Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!', 1, '2017-07-13 08:54:30', '2017-07-13 08:54:30'),
(159, 'Milton Chapman', 'I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!', 1, '2017-07-13 08:54:30', '2017-07-13 08:54:30'),
(169, 'PREMIUM', 'That’s only 13.30$ per meal', 1, '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(170, 'PRO', 'That’s only 14.90$ per meal', 1, '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(171, 'STARTER', NULL, 1, '2017-07-13 15:27:02', '2017-07-13 15:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `feature_page`
--

CREATE TABLE `feature_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_page`
--

INSERT INTO `feature_page` (`id`, `feature_id`, `page_id`) VALUES
(58, 58, 16),
(59, 59, 16),
(60, 60, 16),
(61, 61, 16),
(62, 62, 17),
(63, 63, 17),
(64, 64, 17),
(101, 101, 30),
(102, 102, 30),
(103, 103, 30),
(104, 104, 30),
(105, 105, 32),
(106, 106, 32),
(107, 107, 32),
(108, 108, 32),
(109, 109, 32),
(110, 110, 32),
(111, 111, 32),
(112, 112, 32),
(157, 157, 48),
(158, 158, 48),
(159, 159, 48),
(169, 169, 52),
(170, 170, 52),
(171, 171, 52);

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `feature_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(57, 58, 'ion-ios-infinite-outline', NULL, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(58, 59, 'ion-ios-stopwatch-outline', NULL, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(59, 60, 'ion-ios-nutrition-outline', NULL, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(60, 61, 'ion-ios-nutrition-outline', NULL, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(61, 101, 'ion-ios-person', '1600+ happy eaters', '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(62, 101, 'ion-ios-star', '60+ top chefs', '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(63, 101, 'ion-social-twitter', '@omnifood_lx', '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(64, 102, 'ion-ios-person', '3700+ happy eaters', '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(65, 102, 'ion-ios-star', '160+ top chefs', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(66, 102, 'ion-social-twitter', '@omnifood_sf', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(67, 103, 'ion-ios-person', '2300+ happy eaters', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(68, 103, 'ion-ios-star', '110+ top chefs', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(69, 103, 'ion-social-twitter', '@omnifood_berlin', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(70, 104, 'ion-ios-person', '1200+ happy eaters', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(71, 104, 'ion-ios-star', '50+ top chefs', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(72, 104, 'ion-social-twitter', '@omnifood_london', '2017-07-12 16:05:40', '2017-07-12 16:05:40'),
(179, 169, NULL, '$399', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(180, 169, NULL, '/ month', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(181, 169, 'ion-ios-checkmark-empty', '1 meal every day', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(182, 169, 'ion-ios-checkmark-empty', 'Order 24/7', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(183, 169, 'ion-ios-checkmark-empty', 'Access to newest creations', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(184, 169, 'ion-ios-checkmark-empty', 'Free delivery', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(185, 170, NULL, '$149', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(186, 170, NULL, '/ month', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(187, 170, 'ion-ios-checkmark-empty', '1 meal 10 days/month', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(188, 170, 'ion-ios-checkmark-empty', 'Order 24/7', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(189, 170, 'ion-ios-checkmark-empty', 'Access to newest creations', '2017-07-13 15:27:01', '2017-07-13 15:27:01'),
(190, 170, 'ion-ios-checkmark-empty', 'Free delivery', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(191, 171, NULL, '$19', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(192, 171, NULL, '/ meal', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(193, 171, 'ion-ios-checkmark-empty', '1 meal', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(194, 171, 'ion-ios-checkmark-empty', 'Order from 8 am to 12 pm', '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(195, 171, 'ion-ios-close-empty', NULL, '2017-07-13 15:27:02', '2017-07-13 15:27:02'),
(196, 171, 'ion-ios-checkmark-empty', 'Free delivery', '2017-07-13 15:27:02', '2017-07-13 15:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `imageables`
--

CREATE TABLE `imageables` (
  `image_id` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imageables`
--

INSERT INTO `imageables` (`image_id`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\feature', NULL, NULL),
(3, 17, 'App\\page', NULL, NULL),
(4, 17, 'App\\page', NULL, NULL),
(5, 17, 'App\\page', NULL, NULL),
(7, 101, 'App\\feature', NULL, NULL),
(8, 102, 'App\\feature', NULL, NULL),
(9, 103, 'App\\feature', NULL, NULL),
(10, 104, 'App\\feature', NULL, NULL),
(11, 105, 'App\\feature', NULL, NULL),
(12, 106, 'App\\feature', NULL, NULL),
(13, 107, 'App\\feature', NULL, NULL),
(14, 108, 'App\\feature', NULL, NULL),
(15, 109, 'App\\feature', NULL, NULL),
(16, 110, 'App\\feature', NULL, NULL),
(17, 111, 'App\\feature', NULL, NULL),
(18, 112, 'App\\feature', NULL, NULL),
(19, 157, 'App\\feature', NULL, NULL),
(20, 158, 'App\\feature', NULL, NULL),
(21, 159, 'App\\feature', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `description`, `created_at`, `updated_at`) VALUES
(3, 'iPhone', 'resources/img/app-iPhone.png', NULL, NULL, NULL),
(4, 'AppStore', 'resources/img/download-app.svg', NULL, NULL, NULL),
(5, 'Android', 'resources/img/download-app-android.png', NULL, NULL, NULL),
(7, 'lisbon', 'resources/img/lisbon-3.jpg', NULL, NULL, NULL),
(8, 'francisco', 'resources/img/san-francisco.jpg', NULL, NULL, NULL),
(9, 'berlin', 'resources/img/berlin.jpg', NULL, NULL, NULL),
(10, 'london', 'resources/img/london.jpg', NULL, NULL, NULL),
(11, '1', 'resources/img/1.jpg', NULL, NULL, NULL),
(12, '2', 'resources/img/2.jpg', NULL, NULL, NULL),
(13, '3', 'resources/img/3.jpg', NULL, NULL, NULL),
(14, '4', 'resources/img/4.jpg', NULL, NULL, NULL),
(15, '5', 'resources/img/5.jpg', NULL, NULL, NULL),
(16, '6', 'resources/img/6.jpg', NULL, NULL, NULL),
(17, '7', 'resources/img/7.jpg', NULL, NULL, NULL),
(18, '8', 'resources/img/8.jpg', NULL, NULL, NULL),
(19, 'customer-1', 'resources/img/customer-1.jpg', NULL, NULL, NULL),
(20, 'customer-2', 'resources/img/customer-2.jpg', NULL, NULL, NULL),
(21, 'customer-3', 'resources/img/customer-3.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2017_07_10_111822_create_templates_table', 1),
(15, '2017_07_10_111831_create_pages_table', 1),
(16, '2017_07_10_111836_create_images_table', 1),
(17, '2017_07_10_111842_create_features_table', 1),
(18, '2017_07_10_111849_create_icons_table', 1),
(19, '2017_07_10_111902_create_buttons_table', 1),
(20, '2017_07_10_113045_create_imageables_table', 1),
(21, '2017_07_10_115344_create_feature_page_table', 1),
(22, '2017_07_10_144516_create_navs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navs`
--

CREATE TABLE `navs` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `template_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `template_id`, `title`, `description`, `placement`, `status`, `created_at`, `updated_at`) VALUES
(16, 3, 'GET FOOD FAST — NOT FAST FOOD.', 'Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!', 1, 1, '2017-07-12 14:13:27', '2017-07-12 14:13:27'),
(17, 1, 'HOW IT WORKS — SIMPLE AS 1, 2, 3', NULL, 4, 1, '2017-07-12 14:28:00', '2017-07-12 14:28:00'),
(30, 2, 'WE\'RE CURRENTLY IN THESE CITIES', NULL, 3, 1, '2017-07-12 16:05:39', '2017-07-12 16:05:39'),
(32, 6, NULL, NULL, 2, 1, '2017-07-12 18:12:15', '2017-07-12 18:12:15'),
(48, 4, 'OUR CUSTOMERS CAN\'T LIVE WITHOUT US', NULL, 5, 1, '2017-07-13 08:54:30', '2017-07-13 08:54:30'),
(52, 5, 'START EATING HEALTHY TODAY', NULL, 6, 1, '2017-07-13 15:27:01', '2017-07-13 15:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', 'introduction', NULL, NULL),
(2, 'Extra Information', 'extrainfo', NULL, NULL),
(3, 'Feature', 'feature', NULL, NULL),
(4, 'Feedbacks Custumer', 'feedbackpanel', NULL, NULL),
(5, 'Product', 'product', NULL, NULL),
(6, 'Slayt', 'slayt', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_page`
--
ALTER TABLE `feature_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icons_feature_id_foreign` (`feature_id`),
  ADD KEY `icons_name_index` (`name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_name_index` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navs`
--
ALTER TABLE `navs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navs_page_id_foreign` (`page_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_placement_unique` (`placement`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `feature_page`
--
ALTER TABLE `feature_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `navs`
--
ALTER TABLE `navs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `icons`
--
ALTER TABLE `icons`
  ADD CONSTRAINT `icons_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navs`
--
ALTER TABLE `navs`
  ADD CONSTRAINT `navs_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
