-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2023 at 08:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cutflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `subject`, `name`, `message`, `created_at`, `updated_at`) VALUES
(10, 'fawocat@mailinator.com', 'Digital Marketing', 'Carson', 'Voluptatem et optio', '2023-12-25 04:42:32', '2023-12-25 04:42:32'),
(11, 'kyduhaxy@mailinator.com', 'Graphic Design', 'Galena', 'Nihil sapiente vel e', '2023-12-25 06:04:20', '2023-12-25 06:04:20'),
(12, 'sisyqiner@mailinator.com', 'Digital Marketing', 'Jermaine', 'Dolor dolorem pariat', '2023-12-25 06:21:39', '2023-12-25 06:21:39'),
(13, 'tyvipopi@mailinator.com', 'Digital Marketing', 'Leroy', 'Qui expedita totam i', '2023-12-25 08:21:22', '2023-12-25 08:21:22'),
(14, 'cacolys@mailinator.com', 'Graphic Design', 'Brenda', 'Recusandae Doloribu', '2023-12-25 08:45:47', '2023-12-25 08:45:47'),
(15, 'fikuqi@mailinator.com', 'Graphic Design', 'Audra', 'Facere ipsa est de', '2023-12-25 08:47:41', '2023-12-25 08:47:41'),
(16, 'tubudafa@mailinator.com', 'Digital Marketing', 'Darryl', 'Inventore aliqua Co', '2023-12-25 09:14:55', '2023-12-25 09:14:55'),
(17, 'goqofyb@mailinator.com', 'Development', 'Nash', 'Dolorum ea placeat', '2023-12-25 09:20:06', '2023-12-25 09:20:06'),
(18, 'hydotiw@mailinator.com', 'Digital Marketing', 'Karina', 'Dolore voluptatem no', '2023-12-25 10:24:15', '2023-12-25 10:24:15'),
(19, 'huwudoxeto@mailinator.com', 'Graphic Design', 'Libby', 'Animi omnis quis ma', '2023-12-25 10:26:33', '2023-12-25 10:26:33'),
(20, 'tetoqe@mailinator.com', 'Graphic Design', 'Bryar', 'Sit non voluptatem', '2023-12-25 13:44:45', '2023-12-25 13:44:45'),
(21, 'xukaqenys@mailinator.com', 'Video', 'Raja', 'Ut perferendis conse', '2023-12-25 13:45:37', '2023-12-25 13:45:37'),
(22, 'deby@mailinator.com', 'Video', 'Yoshi', 'Nulla aut obcaecati', '2023-12-25 14:08:18', '2023-12-25 14:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_21_004920_create_settings_table', 1),
(6, '2023_11_21_034025_create_messages_table', 1),
(7, '2023_12_02_032216_create_portfolios_table', 1),
(9, '2023_12_02_084142_create_blogs_table', 2),
(10, '2023_12_03_033619_create_skills_table', 3),
(16, '2023_12_03_064354_create_abouts_table', 4),
(17, '2023_12_19_095028_create_notifications_table', 4),
(18, '2023_12_19_104936_create_comments_table', 5),
(20, '2023_12_20_040307_create_banners_table', 6),
(21, '2023_12_20_062437_create_reviews_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('10aa64b3-f9dc-48e2-9f3c-0e7a564bc899', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Raja\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 13:45:37', '2023-12-25 13:45:37'),
('12d664a8-f8ba-419f-a72e-bca3481a9164', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Leroy\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 08:21:22', '2023-12-25 08:21:22'),
('2a699136-b8d0-4806-a9d3-9ba091005a95', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Carson\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 04:42:32', '2023-12-25 04:42:32'),
('2af3339d-aad6-4340-a970-b28f21c07e43', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Audra\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 08:47:41', '2023-12-25 08:47:41'),
('2be1d36b-9b40-4664-8096-1be3a43aeabf', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Jermaine\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 06:21:39', '2023-12-25 06:21:39'),
('4944a9aa-a8c2-4a8e-a805-8f7497681fda', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Darryl\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 09:14:55', '2023-12-25 09:14:55'),
('5f159aca-a250-4b63-85e8-98ccb87a2f7f', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Regan Beasley\",\"action\":\"sent a Message\"}', NULL, '2023-12-19 23:48:07', '2023-12-19 23:48:07'),
('6aa5e95c-53b0-493b-a265-39f9c84e9469', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Bryar\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 13:44:45', '2023-12-25 13:44:45'),
('6ee09e65-fc74-4c10-ba44-7a1d5f20bab7', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"meheid\",\"action\":\"sent a Message\"}', NULL, '2023-12-20 14:04:54', '2023-12-20 14:04:54'),
('8e0bfda0-ddb0-4f3c-94aa-73d885a11e6f', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Yoshi\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 14:08:18', '2023-12-25 14:08:18'),
('a07ac68f-8f8b-4b6d-8fd0-ab0edd013369', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Galena\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 06:04:20', '2023-12-25 06:04:20'),
('a252ff74-e750-4d85-9dfa-57b1710c615d', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Nash\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 09:20:06', '2023-12-25 09:20:06'),
('b3e57eba-5fa2-4779-969f-869961fe5496', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Reagan\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 04:42:19', '2023-12-25 04:42:19'),
('b7fc2025-234d-43ef-992a-dccac6010994', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Libby\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 10:26:33', '2023-12-25 10:26:33'),
('cd73124b-3303-4fa3-8191-7cd8f23f4344', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Karina\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 10:24:15', '2023-12-25 10:24:15'),
('eaac095a-c803-4333-b72d-0641ce9034ac', 'App\\Notifications\\MessageNotification', 'App\\Models\\User', 1, '{\"name\":\"Brenda\",\"action\":\"sent a Message\"}', NULL, '2023-12-25 08:45:47', '2023-12-25 08:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `address`, `phone`, `email`, `meta_keyword`, `meta_description`, `facebook`, `twitter`, `instragram`, `linked_in`, `tiktok`, `site_logo`, `fav_icon`, `created_at`, `updated_at`) VALUES
(1, 'Victor Navarro', 'Porro ipsum perfere', '+1 (147) 799-3491', 'jyvynoje@mailinator.com', 'Rerum et repellendus', 'Vel dicta non fugiat', 'Error reprehenderit', 'Dolores minim labori', 'In sit voluptatem ad', 'Nemo tempore et do', 'Et corrupti fugiat', 'admin/assets/upoad/logo/1703501330.png', 'admin/assets/upoad/logo/1703043424.jpg', '2023-12-02 22:50:35', '2023-12-25 04:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_type` tinyint NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `image`, `role_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Veda Michael', 'admin@gmail.com', '+1 (571) 198-8694', 'Nemo excepturi et qu', 'admin/assets/upoad/1703513513.webp', 0, NULL, '$2y$12$BK2xkI/BjbQR.adWAGBSkOZiX.wxr3tGKzXvE8nvdwf41JwzC2GBS', NULL, '2023-12-02 02:20:24', '2023-12-25 13:48:55'),
(3, 'Rakibul Islam', 'admin@admin.info', NULL, NULL, NULL, 0, NULL, '$2y$12$WJXChKR4LKQrBngf/W8Uoe5eVWRWZxmnUBsIuHAZwbnhF3t.L8t8G', NULL, '2023-12-19 06:45:42', '2023-12-19 06:45:42'),
(6, 'Marny Crane', 'weqyput@mailinator.com', NULL, NULL, NULL, 1, NULL, '$2y$12$5c7GQgcKAURW9SDojMvPw.Gk3pGkWsT4CNnd.C1Om75zYvm/OTtBS', NULL, '2023-12-25 09:16:31', '2023-12-25 09:16:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
