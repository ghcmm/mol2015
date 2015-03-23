-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2015 at 07:16 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mollar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE IF NOT EXISTS `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_foreign` (`user_id`),
  KEY `assigned_roles_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_text` text COLLATE utf8_unicode_ci NOT NULL,
  `block_active` tinyint(1) NOT NULL,
  `block_index` int(11) NOT NULL,
  `notice` tinyint(1) NOT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `block_title`, `block_text`, `block_active`, `block_index`, `notice`, `page_id`, `created_at`, `updated_at`) VALUES
(2, 'Opening Hours', '<h2 style="text-align:center"><strong>OPENING HOURS</strong></h2>\r\n\r\n<p style="text-align:center">Our opening hours are</p>\r\n\r\n<h3 style="text-align:center">Monday to Friday</h3>\r\n\r\n<h2 style="text-align:center">9.15am to 5.00pm</h2>\r\n\r\n<h3 style="text-align:center"><br />\r\nSaturday</h3>\r\n\r\n<h2 style="text-align:center">10.00am to 4.00pm</h2>\r\n', 1, 3, 0, 0, '2015-02-10 15:16:11', '2015-02-10 15:59:39'),
(3, 'Welcome to Maries', '<h2 style="text-align: center;">Welcome to Maries</h2>\r\n\r\n<p>Clothing alteration services and Haberdashery in Ludlow and the surrounding areas.</p>\r\n', 1, 1, 0, 0, '2015-02-10 15:47:52', '2015-02-14 07:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'TROUSERS AND JEANS SHORTENINGS', NULL, '2015-02-10 13:32:18', '2015-02-10 13:32:18', NULL),
(2, 'TROUSERS OTHER', NULL, '2015-02-10 13:32:30', '2015-02-10 13:32:30', NULL),
(3, 'SKIRTS DRESSES SHORTENINGS', NULL, '2015-02-10 13:32:40', '2015-02-10 13:32:40', NULL),
(4, 'OTHER SKIRTS', NULL, '2015-02-10 13:32:51', '2015-02-10 13:32:51', NULL),
(5, 'DRESSES OTHER', NULL, '2015-02-10 13:33:03', '2015-02-10 13:33:03', NULL),
(6, 'SLEEVES', NULL, '2015-02-10 13:33:14', '2015-02-10 13:33:14', NULL),
(7, 'ZIPS', NULL, '2015-02-10 13:33:22', '2015-02-10 13:33:22', NULL),
(8, 'COATS AND JACKETS', NULL, '2015-02-10 13:33:32', '2015-02-10 13:33:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `house_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2014_12_03_122830_create_services_table', 1),
('2014_12_04_115219_create_categories_table', 1),
('2014_12_04_120206_create_users_table', 1),
('2014_12_05_104454_entrust_setup_tables', 1),
('2014_12_06_170528_create_customers_table', 1),
('2015_01_23_125445_create_blocks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_description`, `price`, `cat_id`, `subcat_id`, `created_at`, `updated_at`) VALUES
(1, 'Jeans', NULL, 7.50, 1, 0, '2015-02-10 13:34:26', '2015-02-10 13:34:26'),
(2, 'Original hems', NULL, 10.00, 1, 0, '2015-02-10 13:34:52', '2015-02-10 13:34:52'),
(3, 'Plain hand hems', NULL, 9.00, 1, 0, '2015-02-10 13:35:11', '2015-02-10 13:35:11'),
(4, 'With kick tape', NULL, 9.50, 1, 0, '2015-02-10 13:35:27', '2015-02-10 13:35:27'),
(5, 'Slanted military', NULL, 10.00, 1, 0, '2015-02-10 13:35:48', '2015-02-10 13:35:48'),
(6, 'Turn ups', NULL, 10.00, 1, 0, '2015-02-10 13:36:03', '2015-02-10 13:36:03'),
(7, 'Waists let out', NULL, 8.50, 1, 2, '2015-02-10 13:37:31', '2015-02-10 13:37:31'),
(8, 'Waists taken', NULL, 8.50, 1, 2, '2015-02-10 13:37:50', '2015-02-10 13:37:50'),
(9, 'Repair pockets', NULL, 7.50, 1, 2, '2015-02-10 13:38:10', '2015-02-10 13:38:10'),
(10, 'Half lined', NULL, 15.00, 1, 2, '2015-02-10 13:38:28', '2015-02-10 13:38:28'),
(11, 'Tapered', NULL, 9.00, 1, 2, '2015-02-10 13:38:47', '2015-02-10 13:38:47'),
(12, 'Plain unlined machined', NULL, 7.50, 3, 0, '2015-02-10 13:39:34', '2015-02-10 13:39:34'),
(13, 'Plain hand hem', NULL, 9.00, 3, 0, '2015-02-10 13:44:58', '2015-02-10 13:44:58'),
(14, 'Plain hand hem', NULL, 10.00, 3, 0, '2015-02-10 13:45:17', '2015-02-10 13:45:17'),
(15, 'Full pleated machined', NULL, 9.00, 3, 0, '2015-02-10 13:45:40', '2015-02-10 13:45:40'),
(16, 'Full pleated hand', NULL, 14.00, 3, 0, '2015-02-10 13:46:01', '2015-02-10 13:46:01'),
(17, 'Waists let out', NULL, 10.00, 3, 4, '2015-02-10 13:46:25', '2015-02-10 13:46:25'),
(18, 'Waits taken', NULL, 10.00, 3, 4, '2015-02-10 13:47:01', '2015-02-10 13:47:01'),
(19, 'Side seams only taken in', NULL, 8.00, 3, 4, '2015-02-10 13:47:25', '2015-02-10 13:47:25'),
(20, 'Side seams with zips', NULL, 15.00, 3, 4, '2015-02-10 13:47:44', '2015-02-10 13:47:44'),
(21, 'Reline (excluding fabrics)', NULL, 15.00, 3, 4, '2015-02-10 13:48:31', '2015-02-10 13:48:31'),
(22, 'Zips replaced', NULL, 12.00, 3, 5, '2015-02-10 13:48:57', '2015-02-10 13:48:57'),
(23, 'Under arms taken in', NULL, 8.00, 3, 5, '2015-02-10 13:49:28', '2015-02-10 13:49:28'),
(24, 'Lift shoulders', NULL, 9.00, 3, 5, '2015-02-10 13:49:49', '2015-02-10 13:49:49'),
(25, 'Jackets shortened plain', NULL, 10.00, 6, 0, '2015-02-10 13:51:44', '2015-02-10 13:51:44'),
(26, 'Jackets with buttons', NULL, 12.00, 6, 0, '2015-02-10 13:51:58', '2015-02-10 13:51:58'),
(27, 'Shirts', NULL, 7.50, 6, 0, '2015-02-10 13:52:17', '2015-02-10 13:52:17'),
(28, 'Jackets', NULL, 10.00, 7, 0, '2015-02-10 13:52:35', '2015-02-10 13:52:35'),
(29, 'Trousers', NULL, 8.50, 7, 0, '2015-02-10 13:52:54', '2015-02-10 13:52:54'),
(30, 'Shortened', NULL, 18.00, 8, 0, '2015-02-10 13:53:32', '2015-02-10 13:53:32'),
(31, 'Shoulders narrowed', NULL, 25.00, 8, 0, '2015-02-10 13:53:59', '2015-02-10 13:53:59'),
(32, 'Side seams tailored', NULL, 15.00, 8, 0, '2015-02-10 13:54:16', '2015-02-10 13:54:16'),
(33, 'Relined (excluding fabrics)', NULL, 40.00, 8, 0, '2015-02-10 13:55:00', '2015-02-10 13:55:00'),
(34, 'Turn collars', NULL, 8.00, 8, 0, '2015-02-10 13:55:19', '2015-02-10 13:55:19'),
(35, 'Sewing on buttons', NULL, 1.00, 8, 0, '2015-02-10 13:55:42', '2015-02-10 13:55:42'),
(36, 'Repairs to crutch', NULL, 7.50, 8, 0, '2015-02-10 13:56:08', '2015-02-10 13:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$PSmlotJHadzYHe7UTgneXeQRz1hpwdl3ymFs0N.gziXj.PuSkjRsW', 'zaZPCyq5OMf8xYzskP2ohvZhxCZ1TmYmBMsJ8sPtgQcgdLwCQypbUue97puS', '2015-02-10 13:30:43', '2015-02-18 20:27:23'),
(13, 'marie', 'marie@yapp10.f9.co.uk', '$2y$10$WXQeoLGSzgYwFYeBp5ws6egwtKmK2a2cCphaIXwKbiM3I/fo7OUBa', NULL, '2015-02-17 16:14:29', '2015-02-17 16:14:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
