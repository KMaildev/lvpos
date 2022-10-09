-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2022 at 07:56 PM
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

--
-- Dumping data for table `bill_infos`
--

INSERT INTO `bill_infos` (`id`, `total_amount`, `bill_date`, `bill_time`, `bill_date_time`, `order_info_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '14400', '27/Sep/2022', '09:49:03 PM', '2022-09-27 09:49:03 PM', '1', '1', '2022-09-27 15:19:03', '2022-09-27 15:19:03'),
(2, '13700', '27/Sep/2022', '09:49:06 PM', '2022-09-27 09:49:06 PM', '7', '1', '2022-09-27 15:19:06', '2022-09-27 15:19:06'),
(3, '11900', '27/Sep/2022', '09:49:09 PM', '2022-09-27 09:49:09 PM', '9', '1', '2022-09-27 15:19:09', '2022-09-27 15:19:09'),
(4, '9500', '06/Oct/2022', '12:47:08 PM', '2022-10-06 12:47:08 PM', '10', '1', '2022-10-06 06:17:08', '2022-10-06 06:17:08'),
(5, '13700', '06/Oct/2022', '03:16:38 PM', '2022-10-06 03:16:38 PM', '2', '1', '2022-10-06 08:46:38', '2022-10-06 08:46:38'),
(6, '6000', '06/Oct/2022', '03:16:41 PM', '2022-10-06 03:16:41 PM', '17', '1', '2022-10-06 08:46:41', '2022-10-06 08:46:41'),
(7, '13700', '06/Oct/2022', '03:16:46 PM', '2022-10-06 03:16:46 PM', '5', '1', '2022-10-06 08:46:46', '2022-10-06 08:46:46'),
(8, NULL, '09/Oct/2022', '11:16:27 PM', '2022-10-09 11:16:27 PM', '0', '1', '2022-10-09 16:46:27', '2022-10-09 16:46:27');

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
(1, 'Chicken', 'G', 1, '2022-09-19 11:26:10', '2022-09-19 11:26:10'),
(3, 'Pork', 'G', 1, '2022-09-19 18:30:56', '2022-09-19 18:30:56'),
(4, 'Beef', 'G', 1, '2022-09-19 18:31:04', '2022-09-19 18:31:04'),
(5, 'Fish', 'G', 1, '2022-09-19 18:31:13', '2022-09-19 18:31:13'),
(6, 'Fish Domo', 'G', 13, '2022-09-19 18:31:31', '2022-09-19 18:32:20');

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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `mobile`, `address`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'U Aung', 'aung@gmail.com', '09123123123', 'Yangon', 'No', '2022-09-21 00:51:54', '2022-09-21 00:51:54'),
(2, 'Mg Mg', NULL, NULL, NULL, NULL, '2022-09-21 00:57:05', '2022-09-21 00:57:05'),
(3, 'Aung', NULL, NULL, NULL, NULL, '2022-09-21 00:57:22', '2022-09-21 00:57:22'),
(4, 'asdf', NULL, NULL, NULL, NULL, '2022-09-21 00:59:53', '2022-09-21 00:59:53'),
(5, 'sdf', NULL, NULL, NULL, NULL, '2022-09-21 01:00:26', '2022-09-21 01:00:26'),
(6, 'sdf', NULL, NULL, NULL, NULL, '2022-09-21 01:00:48', '2022-09-21 01:00:48');

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
(3, 'VIP Block 1', '2022-09-19 21:02:02', '2022-09-19 21:04:39'),
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

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `unit`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Banan', 'G', 'public/images/ipZ3ochZDmUwSGHK364syjSCn1ZF4WSdCiWyq71E.jpg', 1, '2022-09-19 19:51:37', '2022-09-19 19:55:42'),
(2, 'Apple', '10', 'public/images/EXCj5fYWKX9UOLBGTAs31RWB2pvZogteHbcjDuue.jpg', 1, '2022-09-19 19:51:53', '2022-09-19 19:51:53');

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
(1, 'MEAT', 'food', '2022-09-19 10:52:27', '2022-09-19 11:02:09'),
(3, 'POULTRY', 'food', '2022-09-19 10:52:39', '2022-09-19 10:52:39'),
(4, 'PRODUCE', 'food', '2022-09-19 10:52:44', '2022-09-19 10:52:44'),
(5, 'DAIRY', 'food', '2022-09-19 10:52:49', '2022-09-19 10:52:49'),
(6, 'BAKERY', 'food', '2022-09-19 10:52:54', '2022-09-19 10:52:54'),
(7, 'GROCERY / DRY GOODS', 'food', '2022-09-19 10:53:06', '2022-09-19 10:53:06'),
(8, 'SOFT BEVERAGE', 'food', '2022-09-19 10:53:11', '2022-09-19 10:53:11'),
(9, 'LIQUOR', 'bar', '2022-09-19 10:53:18', '2022-09-19 10:53:18'),
(10, 'BOTTEL BEER', 'bar', '2022-09-19 10:53:25', '2022-09-19 10:53:25'),
(12, 'Wine', 'bar', '2022-09-19 11:12:32', '2022-09-19 11:12:42'),
(13, 'SEAFOOD', 'food', '2022-09-19 18:32:02', '2022-09-19 18:32:02');

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

--
-- Dumping data for table `menu_ingredients`
--

INSERT INTO `menu_ingredients` (`id`, `no_of_unit`, `price`, `ingredient_id`, `user_id`, `menu_list_id`, `created_at`, `updated_at`) VALUES
(3, '1', '3000', 2, 1, 2, '2022-09-19 20:53:51', '2022-09-19 20:53:51'),
(4, '1', '2', 1, 1, 2, '2022-09-19 20:53:56', '2022-09-19 20:53:56');

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
(2, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 3, 1, 1, '2022-09-19 19:19:51', '2022-09-20 08:32:57'),
(3, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(4, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(5, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(6, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(7, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 3, 1, 1, '2022-09-19 19:20:54', '2022-09-20 08:33:14'),
(8, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(9, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(10, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(11, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(12, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(13, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(14, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(15, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 4, 1, 1, '2022-09-19 19:20:12', '2022-09-20 08:33:33'),
(16, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(17, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(18, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(19, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(20, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 1, 1, 1, '2022-09-19 19:19:51', '2022-09-19 19:32:35'),
(21, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(22, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54'),
(23, 'Sweet & Sour Chicken', '4200', 'public/images/OSoY9sICE7lXGj7OmcTFj44g4vIMKm3h1oTATMOc.jpg', 4, 1, 1, '2022-09-19 19:19:51', '2022-09-20 08:33:48'),
(24, 'Round Chicken', '3500', 'public/images/Irs2J3uspEhzPyJ5VqWoLZCnUTFtTqQqhvPLxOwH.jpg', 1, 1, 1, '2022-09-19 19:20:12', '2022-09-19 19:20:12'),
(25, 'Fried Fish', '6000', 'public/images/QJj8yO0AZT9MN3JwX9ru4T30Q507vQaCbDhWVrr8.jpg', 5, 1, 1, '2022-09-19 19:20:54', '2022-09-19 19:20:54');

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
(27, '2022_10_10_002258_add_order_preparation_fields_to_order_infos_table', 21);

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
  `order_preparation_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_infos`
--

INSERT INTO `order_infos` (`id`, `customer_id`, `table_list_id`, `order_date`, `check_in_time`, `check_out_time`, `user_id`, `created_at`, `updated_at`, `order_no`, `bill_no`, `check_out_status`, `order_preparation_status`, `order_preparation_date`, `order_preparation_user_id`) VALUES
(1, '0', '1', '2022-09-27 09:55:39 AM', '2022-09-27 09:55:39 AM', '2022-09-27 09:49:03 PM', '1', '2022-09-27 03:25:39', '2022-09-27 15:19:03', '000001', 'B00001', 'finished', NULL, NULL, NULL),
(2, '0', '2', '2022-09-27 09:56:12 AM', '2022-09-27 09:56:12 AM', '2022-10-06 03:16:38 PM', '1', '2022-09-27 03:26:12', '2022-10-06 08:46:38', '000002', 'B00002', 'finished', NULL, NULL, NULL),
(3, '0', '3', '2022-09-27 09:56:19 AM', '2022-09-27 09:56:19 AM', NULL, '1', '2022-09-27 03:26:19', '2022-10-09 17:55:44', '000003', 'B00003', 'finished', 'Done', '2022-10-10 12:25:44 AM', '1'),
(4, '0', '4', '2022-09-27 09:56:26 AM', '2022-09-27 09:56:26 AM', NULL, '1', '2022-09-27 03:26:26', '2022-09-27 03:48:09', '000004', 'B00004', 'finished', NULL, NULL, NULL),
(5, '0', '3', '2022-09-27 10:15:10 AM', '2022-09-27 10:15:10 AM', '2022-10-06 03:16:46 PM', '1', '2022-09-27 03:45:10', '2022-10-06 08:46:46', '000005', 'B00005', 'finished', NULL, NULL, NULL),
(6, '0', '1', '2022-09-27 10:21:25 AM', '2022-09-27 10:21:25 AM', NULL, '1', '2022-09-27 03:51:25', '2022-09-27 03:55:00', '000006', 'B00006', 'finished', NULL, NULL, NULL),
(7, '0', '3', '2022-09-27 08:54:17 PM', '2022-09-27 08:54:17 PM', '2022-09-27 09:49:06 PM', '1', '2022-09-27 14:24:17', '2022-09-27 15:19:06', '000007', 'B00007', 'finished', NULL, NULL, NULL),
(8, '0', '4', '2022-09-27 08:54:39 PM', '2022-09-27 08:54:39 PM', NULL, '1', '2022-09-27 14:24:39', '2022-09-27 14:24:39', '000008', 'B00008', NULL, NULL, NULL, NULL),
(9, '0', '2', '2022-09-27 09:08:13 PM', '2022-09-27 09:08:13 PM', '2022-09-27 09:49:09 PM', '1', '2022-09-27 14:38:13', '2022-09-27 15:19:09', '000009', 'B00009', 'finished', NULL, NULL, NULL),
(10, '1', '3', '2022-10-06 12:46:57 PM', '2022-10-06 12:46:57 PM', '2022-10-06 12:47:08 PM', '1', '2022-10-06 06:16:57', '2022-10-06 06:17:08', '000010', 'B00010', 'finished', NULL, NULL, NULL),
(11, '0', '3', '2022-10-06 02:50:57 PM', '2022-10-06 02:50:57 PM', NULL, '1', '2022-10-06 08:20:57', '2022-10-06 08:20:57', '000011', 'B00011', NULL, NULL, NULL, NULL),
(12, '5', '2', '2022-10-06 02:58:42 PM', '2022-10-06 02:58:42 PM', NULL, '1', '2022-10-06 08:28:42', '2022-10-06 08:28:42', '000012', 'B00012', NULL, NULL, NULL, NULL),
(13, '5', '2', '2022-10-06 02:59:23 PM', '2022-10-06 02:59:23 PM', NULL, '1', '2022-10-06 08:29:23', '2022-10-06 08:29:23', '000013', 'B00013', NULL, NULL, NULL, NULL),
(14, '0', '1', '2022-10-06 03:05:09 PM', '2022-10-06 03:05:09 PM', NULL, '1', '2022-10-06 08:35:09', '2022-10-06 08:35:09', '000014', 'B00014', NULL, NULL, NULL, NULL),
(15, '0', '1', '2022-10-06 03:06:18 PM', '2022-10-06 03:06:18 PM', NULL, '1', '2022-10-06 08:36:18', '2022-10-06 08:36:18', '000015', 'B00015', NULL, NULL, NULL, NULL),
(16, '0', '2', '2022-10-06 03:07:14 PM', '2022-10-06 03:07:14 PM', NULL, '1', '2022-10-06 08:37:14', '2022-10-06 08:37:14', '000016', 'B00016', NULL, NULL, NULL, NULL),
(17, '0', '3', '2022-10-06 03:12:11 PM', '2022-10-06 03:12:11 PM', '2022-10-06 03:16:41 PM', '1', '2022-10-06 08:42:11', '2022-10-06 08:46:41', '000017', 'B00017', 'finished', NULL, NULL, NULL),
(18, '0', '3', '2022-10-06 03:13:08 PM', '2022-10-06 03:13:08 PM', NULL, '1', '2022-10-06 08:43:08', '2022-10-06 08:43:08', '000018', 'B00018', NULL, NULL, NULL, NULL),
(19, '0', '3', '2022-10-06 03:19:49 PM', '2022-10-06 03:19:49 PM', NULL, '1', '2022-10-06 08:49:49', '2022-10-06 08:49:49', '000019', 'B00019', NULL, NULL, NULL, NULL),
(20, '0', '1', '2022-10-06 03:19:59 PM', '2022-10-06 03:19:59 PM', NULL, '1', '2022-10-06 08:49:59', '2022-10-09 17:55:39', '000020', 'B00020', NULL, 'Done', '2022-10-10 12:25:39 AM', '1'),
(21, '0', '1', '2022-10-06 03:20:41 PM', '2022-10-06 03:20:41 PM', NULL, '1', '2022-10-06 08:50:41', '2022-10-09 17:55:37', '000021', 'B00021', NULL, 'Done', '2022-10-10 12:25:37 AM', '1'),
(22, '0', '1', '2022-10-06 03:20:46 PM', '2022-10-06 03:20:46 PM', NULL, '1', '2022-10-06 08:50:46', '2022-10-09 17:55:36', '000022', 'B00022', NULL, 'Done', '2022-10-10 12:25:36 AM', '1'),
(23, '0', '1', '2022-10-06 03:20:58 PM', '2022-10-06 03:20:58 PM', NULL, '1', '2022-10-06 08:50:58', '2022-10-09 17:55:34', '000023', 'B00023', NULL, 'Done', '2022-10-10 12:25:34 AM', '1'),
(24, '0', '1', '2022-10-06 03:22:15 PM', '2022-10-06 03:22:15 PM', NULL, '1', '2022-10-06 08:52:15', '2022-10-09 17:55:32', '000024', 'B00024', NULL, 'Done', '2022-10-10 12:25:32 AM', '1'),
(25, '0', '3', '2022-10-09 05:12:48 PM', '2022-10-09 05:12:48 PM', NULL, '1', '2022-10-09 10:42:48', '2022-10-09 17:54:55', '000025', 'B00025', NULL, 'Done', '2022-10-10 12:24:55 AM', '1');

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

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `menu_list_id`, `qty`, `price`, `remark`, `order_info_id`, `user_id`, `created_at`, `updated_at`, `preparation_status`, `preparation_date`, `preparation_user_id`) VALUES
(1, '2', '1', '4200', '', 1, 1, '2022-09-27 03:25:39', '2022-09-27 03:25:39', NULL, NULL, NULL),
(2, '4', '1', '6000', '', 1, 1, '2022-09-27 03:25:39', '2022-09-27 03:25:39', NULL, NULL, NULL),
(3, '5', '1', '4200', '', 1, 1, '2022-09-27 03:25:39', '2022-09-27 03:25:39', NULL, NULL, NULL),
(4, '6', '1', '3500', '', 2, 1, '2022-09-27 03:26:12', '2022-09-27 03:26:12', NULL, NULL, NULL),
(5, '7', '1', '6000', '', 2, 1, '2022-09-27 03:26:12', '2022-09-27 03:26:12', NULL, NULL, NULL),
(6, '8', '1', '4200', '', 2, 1, '2022-09-27 03:26:12', '2022-09-27 03:26:12', NULL, NULL, NULL),
(7, '17', '1', '4200', '', 3, 1, '2022-09-27 03:26:19', '2022-10-09 17:55:44', 'Done', '2022-10-10 12:25:44 AM', '1'),
(8, '16', '1', '6000', '', 3, 1, '2022-09-27 03:26:19', '2022-10-09 17:55:44', 'Done', '2022-10-10 12:25:44 AM', '1'),
(9, '15', '1', '3500', '', 3, 1, '2022-09-27 03:26:19', '2022-10-09 17:55:44', 'Done', '2022-10-10 12:25:44 AM', '1'),
(10, '14', '1', '4200', '', 3, 1, '2022-09-27 03:26:19', '2022-10-09 17:55:44', 'Done', '2022-10-10 12:25:44 AM', '1'),
(11, '11', '1', '4200', '', 3, 1, '2022-09-27 03:26:19', '2022-10-09 17:55:44', 'Done', '2022-10-10 12:25:44 AM', '1'),
(12, '13', '1', '6000', '', 4, 1, '2022-09-27 03:26:26', '2022-10-09 17:29:36', 'Ready', '2022-10-09 11:59:36 PM', '1'),
(13, '25', '1', '6000', '', 4, 1, '2022-09-27 03:26:26', '2022-09-27 03:26:26', NULL, NULL, NULL),
(14, '21', '1', '3500', '', 4, 1, '2022-09-27 03:26:26', '2022-09-27 03:26:26', NULL, NULL, NULL),
(15, '20', '1', '4200', '', 4, 1, '2022-09-27 03:26:26', '2022-09-27 03:26:26', NULL, NULL, NULL),
(16, '19', '1', '6000', '', 4, 1, '2022-09-27 03:26:26', '2022-09-27 03:26:26', NULL, NULL, NULL),
(17, '7', '1', '6000', '', 5, 1, '2022-09-27 03:45:10', '2022-09-27 03:45:10', NULL, NULL, NULL),
(18, '8', '1', '4200', '', 5, 1, '2022-09-27 03:45:10', '2022-09-27 03:45:10', NULL, NULL, NULL),
(19, '12', '1', '3500', '', 5, 1, '2022-09-27 03:45:10', '2022-09-27 03:45:10', NULL, NULL, NULL),
(20, '8', '1', '4200', '', 6, 1, '2022-09-27 03:51:25', '2022-09-27 03:51:25', NULL, NULL, NULL),
(21, '5', '1', '4200', '', 7, 1, '2022-09-27 14:24:17', '2022-09-27 14:24:17', NULL, NULL, NULL),
(22, '12', '1', '3500', '', 7, 1, '2022-09-27 14:24:17', '2022-09-27 14:24:17', NULL, NULL, NULL),
(23, '13', '1', '6000', '', 7, 1, '2022-09-27 14:24:17', '2022-09-27 14:24:17', NULL, NULL, NULL),
(24, '8', '1', '4200', '', 8, 1, '2022-09-27 14:24:39', '2022-10-09 17:48:08', 'Preparation', '2022-10-10 12:18:08 AM', '1'),
(25, '12', '1', '3500', '', 8, 1, '2022-09-27 14:24:39', '2022-10-09 17:48:08', 'Preparation', '2022-10-10 12:18:08 AM', '1'),
(26, '17', '1', '4200', '', 8, 1, '2022-09-27 14:24:39', '2022-10-09 17:48:10', 'Reject', '2022-10-10 12:18:10 AM', '1'),
(27, '8', '1', '4200', '', 9, 1, '2022-09-27 14:38:13', '2022-09-27 14:38:13', NULL, NULL, NULL),
(28, '12', '1', '3500', '', 9, 1, '2022-09-27 14:38:13', '2022-09-27 14:38:13', NULL, NULL, NULL),
(29, '17', '1', '4200', '', 9, 1, '2022-09-27 14:38:13', '2022-09-27 14:38:13', NULL, NULL, NULL),
(30, '3', '1', '3500', '', 10, 1, '2022-10-06 06:16:57', '2022-10-06 06:16:57', NULL, NULL, NULL),
(31, '4', '1', '6000', '', 10, 1, '2022-10-06 06:16:57', '2022-10-06 06:16:57', NULL, NULL, NULL),
(32, '7', '1', '6000', '', 11, 1, '2022-10-06 08:20:57', '2022-10-06 08:20:57', NULL, NULL, NULL),
(33, '8', '1', '4200', '', 11, 1, '2022-10-06 08:20:57', '2022-10-09 16:54:37', 'Preparation', '2022-10-09 11:24:37 PM', '1'),
(34, '2', '1', '4200', '', 12, 1, '2022-10-06 08:28:42', '2022-10-06 08:28:42', NULL, NULL, NULL),
(35, '3', '1', '3500', '', 12, 1, '2022-10-06 08:28:42', '2022-10-09 17:08:21', 'Reject', '2022-10-09 11:38:21 PM', '1'),
(36, '8', '1', '4200', '', 13, 1, '2022-10-06 08:29:23', '2022-10-06 08:29:23', NULL, NULL, NULL),
(37, '9', '1', '3500', '', 13, 1, '2022-10-06 08:29:23', '2022-10-06 08:29:23', NULL, NULL, NULL),
(38, '3', '1', '3500', 'Less Sp', 14, 1, '2022-10-06 08:35:09', '2022-10-06 08:35:09', NULL, NULL, NULL),
(39, '13', '1', '6000', '', 14, 1, '2022-10-06 08:35:09', '2022-10-06 08:35:09', NULL, NULL, NULL),
(40, '10', '1', '6000', '', 14, 1, '2022-10-06 08:35:09', '2022-10-06 08:35:09', NULL, NULL, NULL),
(41, '16', '1', '6000', '', 15, 1, '2022-10-06 08:36:18', '2022-10-09 17:12:32', 'Ready', '2022-10-09 11:42:32 PM', '1'),
(42, '13', '1', '6000', '', 16, 1, '2022-10-06 08:37:14', '2022-10-09 17:48:05', 'Preparation', '2022-10-10 12:18:05 AM', '1'),
(43, '16', '1', '6000', '', 17, 1, '2022-10-06 08:42:11', '2022-10-06 08:42:11', NULL, NULL, NULL),
(44, '7', '1', '6000', '', 18, 1, '2022-10-06 08:43:08', '2022-10-06 08:43:08', NULL, NULL, NULL),
(45, '12', '1', '3500', '', 19, 1, '2022-10-06 08:49:49', '2022-10-06 08:49:49', NULL, NULL, NULL),
(46, '13', '1', '6000', '', 19, 1, '2022-10-06 08:49:49', '2022-10-06 08:49:49', NULL, NULL, NULL),
(47, '12', '1', '3500', '', 20, 1, '2022-10-06 08:49:59', '2022-10-09 17:55:39', 'Done', '2022-10-10 12:25:39 AM', '1'),
(48, '13', '1', '6000', '', 21, 1, '2022-10-06 08:50:41', '2022-10-09 17:55:37', 'Done', '2022-10-10 12:25:37 AM', '1'),
(49, '13', '1', '6000', '', 24, 1, '2022-10-06 08:52:15', '2022-10-09 17:55:32', 'Done', '2022-10-10 12:25:32 AM', '1'),
(50, '2', '1', '4200', '', 25, 1, '2022-10-09 10:42:48', '2022-10-09 17:54:55', 'Done', '2022-10-10 12:24:55 AM', '1'),
(51, '3', '1', '3500', '', 25, 1, '2022-10-09 10:42:48', '2022-10-09 17:54:55', 'Done', '2022-10-10 12:24:55 AM', '1');

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
(4, '005', 'public/table_icons/oRe3wNbQDjbFOBLUgVjNgOobhPZK02nZLPFtuVFS.png', '6', 1, '2022-09-19 21:24:57', '2022-09-19 21:24:57');

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

--
-- Dumping data for table `temporary_order_items`
--

INSERT INTO `temporary_order_items` (`id`, `menu_list_id`, `qty`, `price`, `remark`, `session_id`, `user_id`, `created_at`, `updated_at`) VALUES
(19, 3, '1', '3500', '', 'JUmVs7v3zXlSh3hhujRwsYtNWSrOKv8yoPzU3VbL', '1', '2022-09-25 21:33:25', '2022-09-25 21:33:25');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members_lists`
--
ALTER TABLE `members_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_ingredients`
--
ALTER TABLE `menu_ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_lists`
--
ALTER TABLE `menu_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_infos`
--
ALTER TABLE `order_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- AUTO_INCREMENT for table `table_lists`
--
ALTER TABLE `table_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temporary_order_items`
--
ALTER TABLE `temporary_order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
