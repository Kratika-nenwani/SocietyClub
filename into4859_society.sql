-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 28, 2024 at 11:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `into4859_society`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `society_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_08_22_132153_add_role_to_users_table', 2),
(10, '2024_08_24_082454_property_unapproved', 2),
(11, '2024_08_30_035012_create_facility_partners_table', 2),
(12, '2024_08_30_164552_add_google_id_to_users_table', 2),
(13, '2024_09_02_053254_add_user_id_to_facility_partners_table', 3),
(17, '2024_09_02_115147_add_user_id_to_societymembers_table', 7),
(18, '2024_09_04_105656_add_society_name_to_users_table', 8),
(20, '2024_09_02_100154_create_society_members_table', 9),
(22, '2024_09_09_122723_add_user_id_to_property_unapproveds_table', 10),
(23, '2024_09_11_102557_create_user_profiles_table', 11),
(24, '2024_09_11_112358_add_profile_photo_to_user_profiles_table', 12),
(25, '2024_09_02_062727_create_business_partners_table', 13),
(26, '2024_09_02_063239_add_user_id_to_business_partners_table', 14),
(27, '2024_09_16_104622_create_notices_table', 15),
(28, '2024_09_17_135734_create_galleries_table', 16),
(31, '2024_09_18_115559_add_user_id_to_galleries_table', 18),
(32, '2024_09_26_124041_create_requests_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `society_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `society_id`, `title`, `date`, `description`, `created_at`, `updated_at`) VALUES
(2, 9, 'Navratri Celebration', '2024-09-25', '<p>pay rs 500 for celebration&nbsp;</p>', '2024-09-25 06:42:24', '2024-09-25 06:42:24'),
(4, 17, 'test', '2024-09-25', '<p>test</p>', '2024-09-25 07:44:27', '2024-09-25 07:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 38, 'MyApp', '2ad7bb05e29674e5c72330df8363a31bca39d69166ea50b55551c49d848b587c', '[\"*\"]', NULL, NULL, '2024-09-19 06:05:21', '2024-09-19 06:05:21'),
(3, 'App\\Models\\User', 25, 'MyApp', '11f0d41147714466e2592e4b5d7300027cf2511eef86eb137ecba3a5cb47461d', '[\"*\"]', NULL, NULL, '2024-09-19 06:47:08', '2024-09-19 06:47:08'),
(4, 'App\\Models\\User', 41, 'MyApp', '5dd0a4eabaca0f8ac52e6fc439b176f70714e6b34383b13be9301d7f7827e787', '[\"*\"]', NULL, NULL, '2024-09-21 03:49:58', '2024-09-21 03:49:58'),
(5, 'App\\Models\\User', 41, 'MyApp', 'ca7e698f4f740b05c07ffd6673238dc6098831154a81e5a46b88731d1b573234', '[\"*\"]', '2024-09-21 05:09:33', NULL, '2024-09-21 03:51:16', '2024-09-21 05:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('approved','rejected','pending') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 55, 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `societies`
--

CREATE TABLE `societies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` enum('India','Spain') NOT NULL,
  `map_link` varchar(255) DEFAULT NULL,
  `property_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`property_details`)),
  `amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`amenities`)),
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `societies`
--

INSERT INTO `societies` (`id`, `user_id`, `title`, `description`, `city`, `address`, `zip`, `country`, `map_link`, `property_details`, `amenities`, `images`, `updated_at`, `created_at`) VALUES
(9, 46, 'harsingar', 'ewr3rfe', 'Indore', 'ef34g3ftrfg', 'rgbrtb', 'India', 'egrtg', '[\"1BHK:20\",\"3BHK:2\"]', '[\"swimming pool\",\"club house\"]', '[\"17244934061.jfif\",\"17244934061.jfif\"]', NULL, NULL),
(10, 46, 'gulmohar', 'ewr3rfe', 'Indore', 'ef34g3ftrfg', 'rgbrtb', 'India', 'egrtg', '[\"7BHK:10\",\"1BHK:2\"]', '[\"gym\",\"underground parking\"]', '[\"17244934061.jfif\",\"17244934061.jfif\"]', NULL, NULL),
(16, 58, 'hello', '1234567', 'Indore', 'Block B,121,niranjanpur Indore (M.P)', '452010', 'India', NULL, '[\"1bhk:4\"]', '[\"pool\"]', '[\"17244934061.jfif\"]', '2024-09-25 06:57:21', '2024-09-25 06:57:21'),
(17, 58, 'test', 'best', 'Indore', 'Block B,121,Harsingar Society near niranjanpur Indore (M.P)', '452010', 'India', NULL, '[\"1bhk:8\",\"2bhk:7\"]', '[\"club\"]', '[\"17244934061.jfif\"]', '2024-09-25 07:32:58', '2024-09-25 07:32:58'),
(22, 46, 'test', 'test', 'Indore', 'Block B,121,Harsingar Society near niranjanpur Indore (M.P)', '452010', 'India', NULL, '[\"test:3\"]', '[\"test\"]', '[\"1727270962.jpg\",\"1727270962.jpg\"]', '2024-09-25 07:59:22', '2024-09-25 07:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `society_members`
--

CREATE TABLE `society_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `flat` varchar(255) NOT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `society_members`
--

INSERT INTO `society_members` (`id`, `user_id`, `flat`, `document`, `created_at`, `updated_at`) VALUES
(7, 62, '121', NULL, '2024-09-26 06:35:40', '2024-09-26 06:35:40'),
(9, 64, '54', NULL, '2024-09-26 06:51:05', '2024-09-26 06:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('super-admin','society-admin','business-partner','facility-partner','user','society-member') NOT NULL DEFAULT 'user',
  `society_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`society_name`)),
  `service` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `Profile Image` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `google_id`, `email_verified_at`, `password`, `remember_token`, `role`, `society_name`, `service`, `description`, `Profile Image`, `image`, `updated_at`, `created_at`) VALUES
(46, 'Kratika Nenwani', 'kratikanenwani@gmail.com', NULL, NULL, NULL, '$2y$10$mMT41Ti7q844Si6RC6JrBO5fwpoSWFAXTjCGBRT5MmLBfabCVXkMu', NULL, 'society-admin', '[9,10,22]', NULL, NULL, '', NULL, '2024-09-25 07:59:22', '2024-09-23 05:06:37'),
(50, 'Shreya Singh', 'shreya.xa02@gmail.com', '8848149049', NULL, NULL, '$2y$10$MNimg3UAIw5jN0sbcdFzOOdOTuS/AwJnfFdKuk9KUN.cgcbSgC4fa', NULL, 'super-admin', NULL, NULL, NULL, '', NULL, '2024-09-24 04:27:35', '2024-09-23 06:52:21'),
(51, 'test', 'admin@gmail.com', '900993016', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, NULL, '2024-09-24 04:42:48', '2024-09-24 04:38:22'),
(52, 'Cipla', 'callagent1@gmail.com', '9898989898', NULL, NULL, NULL, NULL, 'facility-partner', NULL, 'milk parlour', 'dwef', NULL, NULL, '2024-09-24 04:42:02', '2024-09-24 04:42:02'),
(54, 'isha', 'isha@gmail.com', '08848149049', NULL, NULL, NULL, NULL, 'facility-partner', NULL, 'CA', 'Testing', NULL, NULL, '2024-09-25 05:42:48', '2024-09-25 05:42:48'),
(55, 'sneha', 'sneha@gmail.com', '7316667777', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, NULL, '2024-09-25 05:48:13', '2024-09-25 05:47:41'),
(56, 'kartik', 'kartik@gmail.com', '1234567890', NULL, NULL, NULL, NULL, 'business-partner', NULL, 'electrician', 'ganda baccha', NULL, NULL, '2024-09-25 05:54:42', '2024-09-25 05:54:42'),
(57, 'ghu', 'ghu@gmail.com', '1234567890', NULL, NULL, NULL, NULL, 'business-partner', NULL, 'red', 'test', NULL, NULL, '2024-09-25 05:57:14', '2024-09-25 05:57:14'),
(58, 'bbu', 'bbu@gmail.com', '1234567890', NULL, NULL, '$2y$10$mMT41Ti7q844Si6RC6JrBO5fwpoSWFAXTjCGBRT5MmLBfabCVXkMu', NULL, 'society-admin', '[16,17,18]', NULL, NULL, NULL, NULL, '2024-09-25 07:36:05', '2024-09-25 05:58:23'),
(62, 'Kratika Nenwani', 'ani@gmail.com', '9232330165', NULL, NULL, '$2y$10$YV0No/pUPBPKxBA1cKzGPezhHmF/fagPjAy8rAJmCEjfoqCMbteZW', NULL, 'society-member', '[9]', NULL, NULL, NULL, NULL, '2024-09-26 06:35:40', '2024-09-26 06:35:40'),
(64, 'Kratika Nenwani', 'dmin@gmail.com', '6775767784', NULL, NULL, '$2y$10$AMg8V7Y83OYRVMw0ZqMWYekeb5Cgj3Lz/mx90YUd2EfCpycqfB45C', NULL, 'society-member', '[9]', NULL, NULL, NULL, NULL, '2024-09-26 06:51:05', '2024-09-26 06:51:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_user_id_foreign` (`society_id`),
  ADD KEY `issues_user_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_user_id_foreign` (`society_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `societies`
--
ALTER TABLE `societies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_unapproveds_user_id_foreign` (`user_id`);

--
-- Indexes for table `society_members`
--
ALTER TABLE `society_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `society_members_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `societies`
--
ALTER TABLE `societies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `society_members`
--
ALTER TABLE `society_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_society_id_foreign` FOREIGN KEY (`society_id`) REFERENCES `societies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issues_user_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_society_id_foreign` FOREIGN KEY (`society_id`) REFERENCES `societies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `societies`
--
ALTER TABLE `societies`
  ADD CONSTRAINT `property_unapproveds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `society_members`
--
ALTER TABLE `society_members`
  ADD CONSTRAINT `society_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
