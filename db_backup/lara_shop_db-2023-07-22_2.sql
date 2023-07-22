-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 11:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_05_13_184419_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Comment 1', 'This is my first comment.', '2023-07-22 05:11:53', '2023-07-22 05:11:53'),
(2, 1, 'Comment 2', 'This is my second comment.', '2023-07-23 05:11:53', '2023-07-23 05:11:53'),
(3, 1, 'Comment 3', 'This is my third comment.', '2023-07-24 05:11:53', '2023-07-24 05:11:53'),
(4, 2, 'Comm 1', 'This is my first comment.', '2023-07-20 05:11:53', '2023-07-20 05:11:53'),
(5, 2, 'Comm 2', 'This is my second comment.', '2023-07-23 05:11:53', '2023-07-23 05:11:53'),
(6, 6, 'The special one', 'The content of the special one.', '2023-07-22 00:09:38', '2023-07-22 00:09:38'),
(7, 6, 'The special two', 'The content of the special two.', '2023-07-22 00:09:38', '2023-07-22 00:09:38'),
(8, 6, 'The special three', 'The content of the special three.', '2023-07-22 00:09:38', '2023-07-22 00:09:38'),
(9, 6, 'My title one', 'The content of my title one.', '2023-07-22 00:36:48', '2023-07-22 00:36:48'),
(10, 6, 'Updated awesome title', 'Updated great and awesome content', '2023-07-22 00:36:48', '2023-07-22 00:58:25'),
(11, 6, 'My title three', 'The content of my title three.', '2023-07-22 00:36:48', '2023-07-22 00:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `unit_type_short_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_per_unit` decimal(11,2) DEFAULT NULL,
  `unit_price` decimal(11,2) DEFAULT NULL,
  `unit_in_stock` decimal(11,2) DEFAULT NULL,
  `unit_on_order` decimal(11,2) NOT NULL DEFAULT 0.00,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `unit_type_short_code`, `quantity_per_unit`, `unit_price`, `unit_in_stock`, `unit_on_order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bryar Orr', 5, 'dp', '559.00', '832.00', '94.00', '14.00', '2023-01-25 19:39:25', '2023-06-23 22:59:48', '2023-06-23 22:59:48'),
(2, 'Bryar Orr 2', 5, 'dp', '559.00', '832.00', '94.00', '14.00', NULL, '2023-06-23 22:59:57', '2023-06-23 22:59:57'),
(4, 'Bryar Orr 3', 5, 'dp', '559.00', '832.00', '94.00', '14.00', NULL, '2023-06-24 10:48:26', '2023-06-24 10:48:26'),
(5, 'bryar-orr-3', 3, 'in', '557.00', '221.00', '82.00', '89.00', NULL, '2023-07-12 11:34:32', '2023-07-12 11:34:32'),
(6, 'bryar-orr-4', 1, 'sqm', '150.00', '111.00', '16.00', '9.00', NULL, '2023-07-12 11:35:15', '2023-07-12 11:35:15'),
(7, 'bryar-orr 5', 2, 'c', '495.00', '794.00', '63.00', '50.00', NULL, '2023-07-12 11:42:13', '2023-07-12 11:42:13'),
(8, 'bryar-orr-6', 4, 'kg', '245.00', '916.00', '15.00', '97.00', NULL, '2023-07-12 11:43:03', '2023-07-12 11:43:03'),
(9, 'bryar-orr-7', 4, 'mg', '517.00', '755.00', '88.00', '46.00', NULL, '2023-07-13 10:06:47', '2023-07-13 10:06:47'),
(10, 'bryar-orr-8', 4, 'sqm', '157.00', '160.00', '8.00', '50.00', NULL, '2023-07-13 10:17:47', '2023-07-13 10:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `age`, `gender`) VALUES
(1, 1, 'Raihan', 'Chowdhury', 30, 'Male'),
(2, 2, 'Nahiyan', 'Chowdhury', 24, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-07-22 09:16:03', '2023-07-22 09:16:03'),
(2, 'Editor', '2023-07-22 09:16:03', '2023-07-22 09:16:03'),
(3, 'Author', '2023-07-22 09:17:36', '2023-07-22 09:17:36'),
(4, 'User', '2023-07-22 09:17:36', '2023-07-22 09:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-07-22 09:18:48', '2023-07-22 09:18:48'),
(2, 3, 6, '2023-07-22 09:18:48', '2023-07-22 09:18:48'),
(3, 2, 2, '2023-07-22 09:21:21', '2023-07-22 09:21:21'),
(4, 4, 7, '2023-07-22 09:21:21', '2023-07-22 09:21:21'),
(5, 2, 6, '2023-07-22 09:18:48', '2023-07-22 09:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'raihan01', 'raihan01@email.com', '2023-07-20 15:57:49', '2023-07-20 15:57:49'),
(2, 'raihan02', 'test@email.com', '2023-07-20 15:57:49', '2023-07-20 10:30:24'),
(6, 'Abdur Rahman', 'rahman@email.com', '2023-07-22 00:09:38', '2023-07-22 00:09:38'),
(7, 'Suleiman', 'suleiman@email.com', '2023-07-22 00:09:38', '2023-07-22 00:09:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
