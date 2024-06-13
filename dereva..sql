-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 12:37 PM
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
-- Database: `dereva`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `idNo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `idNo`, `email`, `password`, `usertype`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', '23123451', 'admin@gmail.com1', '$2y$12$Vuku9epcsPqCsJYxNMVSMuneBptLdibmtyqT7jIexMT6fII6P1HyS', '0', '2024-05-22 00:16:58', '2024-05-22 00:16:58'),
(2, 'Admin2', '23123452', 'admin@gmail.com2', '$2y$12$Erw0Hvsq96uqwWxrzOO5YeBpWnbj4o/9xAF8Fl0mTtLvIdGDPjgaa', '0', '2024-05-22 00:16:59', '2024-05-22 00:16:59'),
(3, 'Admin3', '23123453', 'admin@gmail.com3', '$2y$12$tE1.myZKvdXFWPKSiZvCXuPu31sNDlOHOTWCEPXC9Lp9lem4HsLUO', '0', '2024-05-22 00:16:59', '2024-05-22 00:16:59'),
(4, 'Admin4', '23123454', 'admin@gmail.com4', '$2y$12$q7PiADpKE6XzFFlZIaaq/uVncaA5FfLDeKAjGRA7EVqcLUMxhaiPG', '0', '2024-05-22 00:17:00', '2024-05-22 00:17:00'),
(5, 'Admin5', '23123455', 'admin@gmail.com5', '$2y$12$jTC3s7svr6LAcYhfYNB4JO6mnpk6EGRJBh0kYOXFrYOlCWpgpuedK', '0', '2024-05-22 00:17:00', '2024-05-22 00:17:00'),
(6, 'Admin6', '23123456', 'admin@gmail.com6', '$2y$12$0.1LQiw351Ma7b6pvIcIzuUL5IUELtNXQTTUCvIboENrNwoBdmdgS', '0', '2024-05-22 00:17:01', '2024-05-22 00:17:01'),
(7, 'Admin7', '23123457', 'admin@gmail.com7', '$2y$12$HavZkr2RZNWVPL6fsFbtR.A0XVBZHgolDp4EvpOfVO/9h/2jTqBxO', '0', '2024-05-22 00:17:01', '2024-05-22 00:17:01'),
(8, 'Admin8', '23123458', 'admin@gmail.com8', '$2y$12$pwJAEkf77sw7tQgLwMzljeFthJ4cRFvTurjfhQYx4mhnx9ekvRwkK', '0', '2024-05-22 00:17:02', '2024-05-22 00:17:02'),
(9, 'Admin9', '23123459', 'admin@gmail.com9', '$2y$12$Pu94V1ZBgyuFY8fpGfedru5zGik6JcPj4ZDxgHYSIv/9HN1KN2jne', '0', '2024-05-22 00:17:02', '2024-05-22 00:17:02'),
(10, 'Admin10', '231234510', 'admin@gmail.com10', '$2y$12$wtI3ukep.Z.i4lJ7/QmcQO6eOwShR96.E4eiBRwx89Z6RM/4uXKzC', '0', '2024-05-22 00:17:03', '2024-05-22 00:17:03'),
(11, 'john doe', '34564424', 'johndoe@gmail.com', '$2y$12$QQB1WOEOzoJo/mBlXHVnAufZBfgANeILByITbUrether00x2VL96G', '0', '2024-05-22 00:18:06', '2024-05-22 00:18:06'),
(12, 'john doe', '112345554', 'saremy@tuposite.com', '$2y$12$eZwpZCODJEE1JKeMlU2sHuOtGNwDcTdk4yEbaIM.PK6NaO8Kp.z4q', '0', '2024-05-22 00:28:18', '2024-05-22 00:28:18'),
(14, 'john doe', '1123455542', 'saremy@tuposit.com', '$2y$12$Iq6WTNh/qxnABxD8fTKlZOMWYnHTjc6xGZR2nJBWhGhLz8RbWufdG', '0', '2024-05-22 00:29:19', '2024-05-22 00:29:19'),
(15, 'john doe', '44665663', 'shelby@gmail.com', '$2y$12$oW2A/qS/u50bKPfdpJq3BOPKUgEj27JvkJJoZ3L.5pwbf1bTS/M6a', '0', '2024-05-22 00:39:56', '2024-05-22 00:39:56'),
(16, 'Papatunde', '23456643', 'patunde@tuposite.com', '$2y$12$n89Euu.xONhaU/u5LGIIeuppMOaIugBavVV3BxjKIfK65gvCMc7Ra', '0', '2024-05-22 01:58:41', '2024-05-22 01:58:41'),
(17, 'Papa Tunde', '234566432', 'patunde@gmail.com', '$2y$12$b48eWyBdYI8eyZPU8fOyaOh4.5oYjGJBSGskhbmAu0RQc6Sh.O1ua', '0', '2024-05-22 02:00:30', '2024-05-22 02:00:30'),
(18, 'Papa Tunde', '2345664323', 'patund@gmail.com', '$2y$12$AI8xnJBOSo.8vyTWzzMmEOmT7jxdTb0Nj5dNEoLHez2Go2H.VtRri', '0', '2024-05-22 02:02:47', '2024-05-22 02:02:47'),
(19, 'reddington', '234566668', 'reddington@gmail.com', '$2y$12$j8MIPaa1xuLv3JJtSWX2COEvqOHDD16PtGEdhYsN6iCJpNKNf4kP.', '0', '2024-05-22 02:09:52', '2024-05-22 02:09:52'),
(20, 'reddington', '2345666683', 'reddingto@gmail.com', '$2y$12$j5IYhdMzKAWr9pO2jcTuuuudpbb9UlbCnGr0yboHzZR6ERW.qyJla', '0', '2024-05-22 02:11:02', '2024-05-22 02:11:02'),
(22, 'john doe', '33344111', 'patu4nde@tuposite.com', '$2y$12$8HOg0MFrHv78vWDRSYJ9IeD3qOKqUPb37BCxwT7zq2wQQVebzm13C', '0', '2024-05-22 02:13:18', '2024-05-22 02:13:18'),
(23, 'john doe', '333441113', 'papatunde@tuposite.com', '$2y$12$zIYtUSLNwWHSjuOVMf3tUekC.AWfk8YLvipz.msFFsbM9vFomwzp6', '0', '2024-05-22 02:15:45', '2024-05-22 02:15:45'),
(24, 'scoffield', '224488349', 'scoffield@gmail.com', '$2y$12$Pdx2LpoSzY.j4kvraIeRcuuSg5VOWw2KQbvlVrVtKJynN.egNG9xK', '0', '2024-05-22 04:43:42', '2024-05-22 04:43:42'),
(25, '12qweert', '434354545', 'patunded@tuposite.com', '$2y$12$VRrcBzfRTd174STvHDcXL.XAK176i7IDw01L4XpQ3pjSSVCM/t/hK', '0', '2024-05-22 10:44:45', '2024-05-22 10:44:45'),
(26, 'reddington', '334455334', 'shelbyt@gmail.com', '$2y$12$wNmPPZGW9CEN45HJKSKtVeHQpqBRjUsh2Ti0v3dhUTHQmOcY8WPNK', '0', '2024-05-22 10:49:13', '2024-05-22 10:49:13'),
(27, '12qweert', '4455566565', 'shelbyg@gmail.com', '$2y$12$Zt90cRtaKSARpgJ8UHf5lultiKoeINNG0MOx6ydo0pzaAdGnOKCfC', '0', '2024-05-27 07:06:17', '2024-05-27 07:06:17'),
(28, 'Nellynelson', '12345678', 'Nellynelson@gmail.com', '$2y$12$1rGpQ9FmwfhnYcKFoJ2xBeLlu8ES7EtmcQUJTuWIaBMrOGM3ASnj.', '0', '2024-05-27 08:31:27', '2024-05-27 08:31:27'),
(29, 'Nelson Mulatya', '39375684', 'np9082330@gmail.com', '$2y$12$ufjBxBzrAdg4cJ3CWuPJw.AKS76oH9OHVXPz4T5s/OjNNMrtv0jga', '0', '2024-05-27 08:49:56', '2024-05-27 08:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `identityNo` varchar(255) NOT NULL,
  `tdbNo` varchar(255) NOT NULL,
  `drivingSch` varchar(255) NOT NULL,
  `results` varchar(255) DEFAULT 'Pending',
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `identityNo`, `tdbNo`, `drivingSch`, `results`, `class`, `created_at`, `updated_at`) VALUES
(1, 'johndoe', '22445554', 'sdsvrrfcceert', 'rocky', 'Failed', 'C', '2024-05-22 10:53:51', '2024-05-22 10:57:10'),
(2, 'evansmwanzia', '254456645', 'evbnjnvmjm', 'wings', 'Passed', 'B', '2024-05-27 06:40:32', '2024-05-27 09:06:58'),
(3, 'Mimi Yobi', '39485969', 'qwertylfc', 'rocky', 'Failed', 'CE', '2024-05-27 09:28:43', '2024-05-27 09:35:14'),
(4, 'john doe', '1345659968', 'ffhfhggjgj', 'Petanns', 'Pending', 'B', '2024-05-27 12:23:57', '2024-05-27 12:23:57'),
(5, 'john doe', '134565996', 'ffhfhggjg5', 'Petanns', 'Pending', 'B', '2024-05-27 12:24:17', '2024-05-27 12:24:17'),
(6, 'john doe', '13456599689', 'ffhf234hggjg5', 'Petann', 'Pending', 'B', '2024-05-27 12:25:25', '2024-05-27 12:25:25');

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
(233, '2024_03_05_182309_create_clients_table', 1),
(235, '2024_03_28_160559_create_searches_table', 1),
(245, '2014_10_12_000000_create_users_table', 2),
(246, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(247, '2019_08_19_000000_create_failed_jobs_table', 2),
(248, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(249, '2024_03_05_182155_create_admins_table', 2),
(250, '2024_03_05_182224_create_sellers_table', 2),
(251, '2024_03_22_085754_create_tests_table', 2),
(252, '2024_04_06_142100_create_bookings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `guard` varchar(255) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `officerId` bigint(20) UNSIGNED NOT NULL,
  `candidateId` bigint(20) UNSIGNED NOT NULL,
  `theoryTest` varchar(255) NOT NULL,
  `practicalTest` varchar(255) DEFAULT NULL,
  `practicalTestAdmin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `officerId`, `candidateId`, `theoryTest`, `practicalTest`, `practicalTestAdmin`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Passed', 'Failed', '2', '2024-05-22 10:55:55', '2024-05-22 10:56:31'),
(2, 29, 2, 'Passed', 'Passed', '29', '2024-05-27 08:58:54', '2024-05-27 09:05:57'),
(3, 29, 3, 'Failed', 'Passed', '29', '2024-05-27 09:33:02', '2024-05-27 09:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'john doe', 'johndoe@gmail.com', '0703255449', NULL, '$2y$12$FCetLRJTlSTHT78fH8L1g.9Rhqwu8vwOBE/F5CQFjKTPyQ2e4HN1y', 'wpPXSbud2OwsNZQDZex4zq35ue2jZsTM7VfoKwIo0WGtGvUmY9I9zdWhZq1V', '2024-05-22 10:37:26', '2024-05-22 10:37:26'),
(2, 'evansmwanzia', 'evansmwanzia@gmail.com', '0719748422', NULL, '$2y$12$tpxzEb9iUvVmSnOcHksY0efvoFWUAAbIx0mHU9BN7z1A0mEgy9fSa', NULL, '2024-05-27 06:19:33', '2024-05-27 06:19:33'),
(3, 'Mimi Yobi', 'mimiyobi@gmail.com', '0704255447', NULL, '$2y$12$6YwijEmLykfih7/noI1ojeqUR3bk22r0P50MOZpBcwUwfT5Qum7Fa', NULL, '2024-05-27 09:26:44', '2024-05-27 09:26:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_idno_unique` (`idNo`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_identityno_unique` (`identityNo`),
  ADD UNIQUE KEY `bookings_tdbno_unique` (`tdbNo`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tests_candidateid_unique` (`candidateId`),
  ADD KEY `tests_officerid_foreign` (`officerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_candidateid_foreign` FOREIGN KEY (`candidateId`) REFERENCES `sellers` (`id`),
  ADD CONSTRAINT `tests_officerid_foreign` FOREIGN KEY (`officerId`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
