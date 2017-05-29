-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 29, 2017 at 11:04 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel54`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meadmin', 'kuwarsaurav21@gmail.com', '$2y$10$iQY5zfh4EwMrnL11YIBaPuwg/HG9SFWO5ErhX6c/lqtI0bhC6LvOO', 'kEzxMY0OKNR4hZYeZ2gBzXmdyfWDto15viAGLTsCN0d9y28EIwJyEOclf8kn', '2017-04-12 23:45:37', '2017-05-29 06:44:23'),
(2, 'essaurav', 'es.developer12@gmail.com', '$2y$10$p39mS/R9CoTxUYxlsrsXYOzdo4mRGTYUq1NIK0YOnpN6yzfpQiGmq', 'NNi7glIAZMLtI0UEjqdFwQYg4dkhXR3ZwiJtbl8anxLPHorrVekQ2nVrzqaC', '2017-05-25 17:12:59', '2017-05-26 05:58:23'),
(3, 'adminadmin', 'sauravkuwar@yahoo.com', '$2y$10$d3ACVcof9c7GiGx7XC8WA.RPBXZOCzRK11pib3/3Ik23p3QNUbVHm', NULL, '2017-05-29 01:12:15', '2017-05-29 06:57:15');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook_page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube_page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googleolus_page_url` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `default_page_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default_meta_keys` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default_meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_site_maintenance` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `site_status` enum('online','offline') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'online',
  `site_offline_msg` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_app_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_secret_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `contact_email`, `contact_phone`, `contact_address`, `facebook_page_url`, `twitter_page_url`, `youtube_page_url`, `googleolus_page_url`, `default_page_title`, `default_meta_keys`, `default_meta_desc`, `is_site_maintenance`, `site_status`, `site_offline_msg`, `facebook_app_id`, `facebook_secret_key`, `updated_at`) VALUES
(1, 'Laravel 5.4', 'admin@laravel54.com', '(041) 242-9682', '21 Pembridge Pl, Carindale QLD', 'http://www.facebook.com', 'http://www.twitter.com/', 'http://www.youtube.com/', 'https://plus.google.com/', 'iClinic PROZ', 'After Hours Medical Deputising Service Software', 'A practice management software for after hours medical deputising services.', 'no', 'online', 'This site is temporarily under construction.  We will be back soon. \n\nThank you\n24x7 Doctors \nDevelopment Team', '0', '', '2017-05-29 08:58:40');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saurav1', 'kuwarsaurav21@gmail.com', '$2y$10$Q352.yGNczQBfiZtwLCkNO4pbC7mSv9ie3rzv.buyl0lm1f2aZBxO', '9VI0bKUlGBKb5YfoaT8SrBR3n41nseG30hbfDfACbhAPiIbm0zta0PNtK8I1', '2017-04-13 05:30:37', '2017-05-26 00:20:54'),
(2, 'essaurav', 'es.developer12@gmail.com', '$2y$10$p39mS/R9CoTxUYxlsrsXYOzdo4mRGTYUq1NIK0YOnpN6yzfpQiGmq', NULL, '2017-05-25 22:57:59', '2017-05-26 05:58:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
