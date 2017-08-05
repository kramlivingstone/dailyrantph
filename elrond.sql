-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 01:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elrond`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Hi', '2017-07-28 22:02:15', '2017-07-28 22:02:15'),
(2, 1, 2, 'Hello', '2017-07-28 22:05:03', '2017-07-28 22:05:03'),
(3, 8, 1, 'Really', '2017-07-29 08:01:56', '2017-07-29 08:01:56'),
(4, 7, 2, 'Lorem your face', '2017-07-29 08:09:16', '2017-07-29 08:09:16'),
(5, 8, 1, 'Hi', '2017-07-29 09:06:18', '2017-07-29 09:06:18'),
(6, 8, 1, 'Test', '2017-07-29 09:16:52', '2017-07-29 09:16:52'),
(7, 8, 1, 'Hello', '2017-07-29 09:18:22', '2017-07-29 09:18:22'),
(8, 8, 1, 'Test', '2017-07-29 09:27:38', '2017-07-29 09:27:38'),
(9, 7, 2, 'Test', '2017-07-29 09:31:00', '2017-07-29 09:31:00'),
(10, 8, 1, 'Test', '2017-07-29 09:38:26', '2017-07-29 09:38:26'),
(11, 8, 1, 'Test', '2017-07-29 10:05:58', '2017-07-29 10:05:58'),
(12, 8, 1, 'Test', '2017-07-29 10:06:41', '2017-07-29 10:06:41'),
(13, 7, 1, 'Hi', '2017-07-29 10:14:45', '2017-07-29 10:14:45'),
(14, 4, 1, 'Test', '2017-07-29 21:57:32', '2017-07-29 21:57:32'),
(15, 8, 1, 'Hi', '2017-07-29 22:12:46', '2017-07-29 22:12:46'),
(16, 9, 1, 'Test', '2017-08-01 01:43:30', '2017-08-01 01:43:30'),
(17, 9, 1, 'Hi', '2017-08-01 01:44:24', '2017-08-01 01:44:24'),
(18, 9, 1, 'TEst', '2017-08-01 01:51:17', '2017-08-01 01:51:17'),
(19, 9, 1, 'qwerty', '2017-08-01 02:05:27', '2017-08-01 02:05:27'),
(20, 8, 1, 'hi', '2017-08-01 02:07:33', '2017-08-01 02:07:33'),
(21, 7, 1, 'ayaw kay marc', '2017-08-01 02:07:50', '2017-08-01 02:07:50'),
(22, 9, 1, 'Hi', '2017-08-01 02:36:30', '2017-08-01 02:36:30'),
(23, 9, 1, 'Hi20', '2017-08-01 02:36:34', '2017-08-01 02:36:34'),
(24, 9, 1, '20', '2017-08-01 02:36:36', '2017-08-01 02:36:36'),
(25, 9, 1, '50', '2017-08-01 02:37:06', '2017-08-01 02:37:06'),
(26, 9, 1, 'Post', '2017-08-01 02:37:13', '2017-08-01 02:37:13'),
(27, 6, 1, 'Test', '2017-08-01 02:37:18', '2017-08-01 02:37:18'),
(28, 2, 1, 'Hi', '2017-08-01 02:39:00', '2017-08-01 02:39:00'),
(29, 9, 1, 'Final Test Comment', '2017-08-01 03:18:25', '2017-08-01 03:18:25'),
(30, 12, 2, 'Lul', '2017-08-01 06:36:23', '2017-08-01 06:36:23');

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
(7, '2017_07_23_131811_createTicketsTable', 1),
(12, '2014_10_12_000000_create_users_table', 2),
(13, '2014_10_12_100000_create_password_resets_table', 2),
(14, '2017_07_24_162028_create_posts_table', 2),
(16, '2017_07_27_101534_create_comments_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', '2017-07-27 01:31:34', '2017-07-27 01:31:34'),
(2, 2, 'Test', '2017-07-27 01:31:58', '2017-07-27 01:31:58'),
(3, 1, 'Hello There', '2017-07-28 03:39:54', '2017-07-28 03:39:54'),
(4, 1, 'Cult of Personality', '2017-07-28 03:42:05', '2017-07-28 03:42:05'),
(5, 1, 'Look in my eyes', '2017-07-28 03:43:35', '2017-07-28 03:43:35'),
(6, 1, 'After Earth', '2017-07-28 04:02:48', '2017-07-28 04:02:48'),
(7, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-07-28 04:34:49', '2017-07-28 04:34:49'),
(8, 1, 'I hate my job!', '2017-07-28 09:27:30', '2017-07-28 09:27:30'),
(9, 1, 'Good day, dickheads!', '2017-07-30 08:27:34', '2017-07-30 08:27:34'),
(10, 1, 'Good day, Assholes!', '2017-08-01 05:46:37', '2017-08-01 06:35:46'),
(11, 1, 'Good day, Classmates!', '2017-08-01 05:49:14', '2017-08-01 05:49:14'),
(12, 1, 'Good day, Jackasses!', '2017-08-01 05:50:07', '2017-08-01 06:35:29');

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
(1, 'Mark Marasigan', 'kramlivingstone@yahoo.com.ph', '$2y$10$0h/CWFbNC0cJ3Z41QAyg4uUZfWdfyC7pnJE0Jy4llvGScf1fqbRTe', 'ssPBqPgfKx7SArJnrPjNXgNSbjpZpNegZWLc0wumT0lcdRTohPE0onl0zquL', '2017-07-26 05:39:39', '2017-07-26 05:39:39'),
(2, 'Rea Shanarra Pulgar', 'rea_bubblez30@yahoo.com', '$2y$10$MYhERMJvvHMo6rGeBr6FtO4FKmsQqYsnKa1pxO0CWGknJaOM32Ju.', 'BPjuCsfzIbvXd81KTh8f2lUmZxHplx6xIpHLbpF7nEeejbS6t5IdB5kdrB9z', '2017-07-26 07:33:40', '2017-07-26 07:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
