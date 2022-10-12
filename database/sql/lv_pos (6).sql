-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2022 at 07:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lv_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_infos`
--

CREATE TABLE `bill_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_date_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_info_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_categorie_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `unit`, `main_categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'One Portion', 'G', 7, '2022-10-12 16:51:00', '2022-10-12 16:51:52'),
(2, 'Appetizer', 'G', 7, '2022-10-12 16:52:20', '2022-10-12 16:52:20'),
(3, 'Vegetables', 'G', 8, '2022-10-12 16:52:37', '2022-10-12 16:52:37'),
(4, 'Thai Salad', 'G', 9, '2022-10-12 16:52:54', '2022-10-12 16:52:54'),
(5, 'Salad', 'G', 9, '2022-10-12 16:53:13', '2022-10-12 16:53:13'),
(6, 'Soup', 'G', 4, '2022-10-12 16:53:45', '2022-10-12 16:53:45'),
(7, 'GROUPER', 'G', 5, '2022-10-12 16:54:25', '2022-10-12 16:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '2022-09-19 02:21:21', '2022-09-19 02:21:21'),
(2, 'HR', '2022-09-19 02:22:46', '2022-09-19 02:22:46'),
(3, 'Kitchen', '2022-09-19 02:24:11', '2022-09-19 21:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Ground Floor', '2022-09-19 21:01:52', '2022-09-19 21:01:52'),
(2, '1st Floor', '2022-09-19 21:01:58', '2022-09-19 21:01:58'),
(3, '2nd Floor', '2022-09-19 21:02:02', '2022-10-12 16:23:20'),
(4, 'VIP Block 2', '2022-09-19 21:04:49', '2022-09-19 21:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'LIQUOR', 'bar', '2022-10-12 16:46:34', '2022-10-12 16:46:34'),
(2, 'BOTTEL BEER', 'bar', '2022-10-12 16:46:42', '2022-10-12 16:46:42'),
(3, 'Wine', 'bar', '2022-10-12 16:46:49', '2022-10-12 16:46:49'),
(4, 'MEAT', 'food', '2022-10-12 16:46:56', '2022-10-12 16:46:56'),
(5, 'SEAFOOD', 'food', '2022-10-12 16:47:02', '2022-10-12 16:47:02'),
(6, 'SOFT BEVERAGE', 'bar', '2022-10-12 16:47:14', '2022-10-12 16:47:14'),
(7, 'Appetizer', 'food', '2022-10-12 16:48:11', '2022-10-12 16:48:11'),
(8, 'Vegetables', 'food', '2022-10-12 16:48:41', '2022-10-12 16:48:41'),
(9, 'Salad', 'food', '2022-10-12 16:49:10', '2022-10-12 16:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `members_lists`
--

CREATE TABLE `members_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `members_list_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `insert_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_lists`
--

INSERT INTO `members_lists` (`id`, `members_list_file`, `original_name`, `user_id`, `insert_user_id`, `created_at`, `updated_at`) VALUES
(1, 'public/members_list_file/Q9eRqa7Zpt3m3eSj0TRLT59fO3CgaHxmHY8FBxYS.png', '8.png', 4, 1, '2022-09-19 04:22:12', '2022-09-19 04:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ingredients`
--

CREATE TABLE `menu_ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_of_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredient_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_list_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_lists`
--

CREATE TABLE `menu_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `main_categorie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_lists`
--

INSERT INTO `menu_lists` (`id`, `name`, `price`, `photo`, `categorie_id`, `main_categorie_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Fride Rice (Chicken,Pork)', '3500', 'public/images/noimage.png', 1, 7, 1, '2022-10-12 16:55:48', '2022-10-12 16:55:48'),
(2, 'Fried Rice (Shrimp, Crab, Squid, Seafood)', '5500', 'public/images/noimage.png', 1, 7, 1, '2022-10-12 17:02:36', '2022-10-12 17:02:36'),
(3, 'Fried Rice with shrimp paste', '4500', 'public/images/rOVDyewhThxo21ZYvYqBivaGoaNIpI33I0Mn3EPI.jpg', 1, 7, 1, '2022-10-12 17:03:52', '2022-10-12 17:03:52'),
(4, 'Fried Rice with Thai Sour Pork', '3500', 'public/images/Lz1vgq1r5OT9pKOjor1eEwPXj60wL9hObRfZ7wZP.jpg', 1, 7, 1, '2022-10-12 17:06:25', '2022-10-12 17:06:25');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_19_083606_create_departments_table', 2),
(6, '2022_09_19_101527_create_permission_tables', 3),
(7, '2022_09_19_103957_create_members_lists_table', 4),
(8, '2022_09_19_104328_add_fields_to_users_table', 5),
(9, '2022_09_19_171705_create_main_categories_table', 6),
(10, '2022_09_19_174442_create_categories_table', 7),
(11, '2022_09_20_010544_create_menu_lists_table', 8),
(12, '2022_09_20_021159_create_ingredients_table', 9),
(14, '2022_09_20_022840_create_menu_ingredients_table', 10),
(15, '2022_09_20_032625_create_floors_table', 11),
(16, '2022_09_20_034128_create_table_lists_table', 12),
(17, '2022_09_20_161339_create_temporary_order_items_table', 13),
(18, '2022_09_21_070830_create_customers_table', 14),
(19, '2022_09_21_121330_create_order_infos_table', 15),
(20, '2022_09_22_144125_add_order_no_to_order_infos_table', 16),
(21, '2022_09_22_145406_create_order_items_table', 17),
(23, '2022_09_27_092956_create_bill_infos_table', 18),
(24, '2022_09_27_095049_add_bill_no_to_order_infos_table', 18),
(25, '2022_09_27_101427_add_check_out_status_to_order_infos_table', 19),
(26, '2022_10_09_231843_add_preparation_fields_to_order_items_table', 20),
(27, '2022_10_10_002258_add_order_preparation_fields_to_order_infos_table', 21),
(28, '2022_10_10_135623_add_preparation_date_to_order_infos_table', 22),
(30, '2022_10_12_134508_create_table_icons_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_infos`
--

CREATE TABLE `order_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_preparation_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_preparation_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_preparation_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_list_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_info_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `preparation_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'hr_module', 'web', '2022-09-19 03:52:32', '2022-09-19 03:59:52'),
(2, 'kitchen_module', 'web', '2022-09-19 04:00:15', '2022-09-19 04:00:15'),
(3, 'counter_module', 'web', '2022-09-19 04:00:24', '2022-09-19 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-09-19 04:00:45', '2022-09-19 04:00:45'),
(2, 'Kitchen', 'web', '2022-09-19 10:12:25', '2022-09-19 10:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_icons`
--

CREATE TABLE `table_icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_icons`
--

INSERT INTO `table_icons` (`id`, `icon`, `icon_path`, `created_at`, `updated_at`) VALUES
(1, '8 copy.png', 'public/table_icons/IX4CRuX7UOm83Y2aM3BEzGBw4uzcVfJDm2k31rcz.png', NULL, NULL),
(2, '8.png', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', NULL, NULL),
(3, 'avatar-11.png', 'public/table_icons/NlmWD5pKzn9mx2P5FpS3EqLuwRb8Ogr9rZZvociC.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_lists`
--

CREATE TABLE `table_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reservation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_lists`
--

INSERT INTO `table_lists` (`id`, `table_name`, `table_icon`, `reservation`, `floor_id`, `created_at`, `updated_at`) VALUES
(1, '001', '', '1', 1, '2022-09-19 21:23:54', '2022-09-19 21:23:54'),
(2, '002', 'public/table_icons/lwVSk3xpjIthE6gXZOoHO7bEyBKBzDfQJC6zVxRL.png', '8', 1, '2022-09-19 21:24:20', '2022-09-19 21:36:55'),
(3, '003', 'public/table_icons/Yjdhpd7j5o5Xz4LsI4feGKXocyNpwq2vh0AVXNZ4.png', '4', 1, '2022-09-19 21:24:35', '2022-09-19 21:24:35'),
(4, '004', 'public/table_icons/oRe3wNbQDjbFOBLUgVjNgOobhPZK02nZLPFtuVFS.png', '6', 1, '2022-09-19 21:24:57', '2022-10-12 07:37:39'),
(5, '005', 'public/table_icons/IX4CRuX7UOm83Y2aM3BEzGBw4uzcVfJDm2k31rcz.png', '6', 1, '2022-10-12 07:34:16', '2022-10-12 07:37:49'),
(6, '006', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:38:04'),
(7, '010', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(8, '011', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(9, '012', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(10, '013', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(11, '014', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(12, '015', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(13, '016', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(14, '017', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(15, '018', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(16, '019', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(17, '020', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(18, '021', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(19, '022', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(20, '023', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(21, '024', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(22, '025', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(23, '026', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(24, '027', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(25, '028', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(26, '029', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(27, '030', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(28, '031', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(29, '032', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(30, '033', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(31, '034', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(32, '035', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(33, '036', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(34, '037', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(35, '038', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(36, '039', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(37, '040', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(38, '041', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(39, '042', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(40, '043', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(41, '044', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(42, '045', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(43, '046', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(44, '047', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(45, '048', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(46, '049', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(47, '050', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(48, '051', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(49, '052', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(50, '053', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(51, '054', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(52, '055', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(53, '056', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(54, '057', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(55, '058', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(56, '059', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(57, '060', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(58, '061', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(59, '062', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(60, '063', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(61, '064', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(62, '065', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(63, '066', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(64, '067', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(65, '068', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(66, '069', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(67, '070', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(68, '071', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(69, '072', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(70, '073', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(71, '074', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(72, '075', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(73, '076', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(74, '077', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(75, '078', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(76, '079', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(77, '080', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(78, '081', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(79, '082', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(80, '083', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(81, '084', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(82, '085', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(83, '086', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(84, '087', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(85, '088', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(86, '089', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(87, '090', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(88, '091', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(89, '092', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(90, '093', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(91, '094', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(92, '095', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(93, '096', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(94, '097', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(95, '098', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(96, '099', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30'),
(97, '0100', 'public/table_icons/5QSNHOqP2LsX5KOvrf7mIeDf1S9hsEPXo8IXVOTf.png', '6', 1, '2022-10-12 07:34:30', '2022-10-12 07:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_order_items`
--

CREATE TABLE `temporary_order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_list_id` int(11) DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_banned` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_front` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_back` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `members_list_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_by` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `department_id`, `is_banned`, `created_at`, `updated_at`, `last_login_at`, `last_login_ip`, `agent`, `nrc_front`, `nrc_back`, `members_list_file`, `other_file`, `leave_date`, `leave_remark`, `leave_by`, `contact_person`, `emergency_contact`, `passport_photo`, `join_date`, `employment_type`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$6wLmx5kwZfgDyAPAS3yt6OhReBlrlEeqXJSmgd6IofipLGwSDGnfu', NULL, '000001', '09123123123', '1/abc(n)009112', 'male', 'Yangon', '1', 1, '2022-09-19 00:38:43', '2022-09-19 10:07:48', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Probation'),
(2, 'Mg Mg', 'mgmg@gmail.com', NULL, '$2y$10$RN2tKz.zeLSygmqUdzN.7uBEulRsc4JEPCDJ5Yztc2SXHASI0ft.K', NULL, '000002', '09123123122', '1/abc(n)009221', 'male', 'Yangon', '2', 1, '2022-09-19 04:15:56', '2022-09-19 04:15:56', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'Probation'),
(3, 'asdf', 'asdf@gmail.com', NULL, '$2y$10$GQkXculsBdYmnNlQ3HyxUOCt85WnpEKanEy8Z/DtbR/Vr0AOhiYWy', NULL, 'asdf', '0912312313', 'asdf', 'male', 'asdf', '2', 1, '2022-09-19 04:20:24', '2022-09-19 04:20:24', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'Probation'),
(4, 'asf', 'adsf@gmail.com', NULL, '$2y$10$egircmGYILEHTPazzRTwpe1kf2pSJn2V.QzFtpuALMw7TvNOiSzWe', NULL, 'EMP-000212', 'asdfasdfas', 'asdfasdf', 'male', 'Yangon', '2', 1, '2022-09-19 04:22:12', '2022-09-19 10:15:25', NULL, NULL, NULL, 'public/photo/4IOEyGZhdYWVqad8OM0WgiN2aPnT5hs69h8wMOOs.png', 'public/photo/bAj8Mpw5Pa9hZfwZwn1WuCAKZU9FlT95UDySMaKG.png', '', NULL, NULL, NULL, NULL, 'sadf', 'asdf', 'public/passport/nRW0cutoedslYBDEhkq7wUkBqPta0ykH4IjokMld.png', 'asdf', 'Probation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_infos`
--
ALTER TABLE `bill_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_lists`
--
ALTER TABLE `members_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_ingredients`
--
ALTER TABLE `menu_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_lists`
--
ALTER TABLE `menu_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `order_infos`
--
ALTER TABLE `order_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `table_icons`
--
ALTER TABLE `table_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_lists`
--
ALTER TABLE `table_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_order_items`
--
ALTER TABLE `temporary_order_items`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bill_infos`
--
ALTER TABLE `bill_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members_lists`
--
ALTER TABLE `members_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_ingredients`
--
ALTER TABLE `menu_ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_lists`
--
ALTER TABLE `menu_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_infos`
--
ALTER TABLE `order_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_icons`
--
ALTER TABLE `table_icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_lists`
--
ALTER TABLE `table_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `temporary_order_items`
--
ALTER TABLE `temporary_order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
