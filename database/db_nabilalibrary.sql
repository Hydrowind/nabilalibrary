-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2023 at 05:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nabilalibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `page` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `coverUrl` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `year`, `author`, `publisher`, `page`, `category`, `quantity`, `coverUrl`, `description`, `created_at`, `updated_at`) VALUES
('9796650096', 'BELAJAR SAINS DENGAN BAHAN MAKANAN SEHARI-HARI', 1996, 'MURIEL MANDELL', 'PENERBIT ANGKASA BANDUNG', 120, 'sains', 9, 'https://res.cloudinary.com/hydrowind/image/upload/v1672441696/nabilalibrary/book1_jrvtpa.png', 'viii + 120hlm', '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
('9797570339', 'Rangkuman Rumus Matematika, Fisika & Kimia SMA', 2005, 'Redaksi Kawan Pustaka', 'KAWAN PUSTAKA', 282, 'sains', 3, 'https://res.cloudinary.com/hydrowind/image/upload/v1672441696/nabilalibrary/book2_ks3rl6.png', 'VI, 282hlm, 19cm', '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
('9797571162', 'Rumus Lengkap Fisika SMA', 2010, 'Drs. JOKO UNTORO', 'PT WAHYUMEDIA', 264, 'sains', 1, 'https://res.cloudinary.com/hydrowind/image/upload/v1672441692/nabilalibrary/book3_sf8y6g.png', '264hlm, 19cm', '2022-12-30 16:50:08', '2022-12-30 16:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(61, '2022_11_09_235332_create_categories_table', 1),
(62, '2022_11_24_235703_create_books_table', 1),
(63, '2022_11_26_044635_create_transactions_table', 1);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `date`, `return_date`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 'pengembalian', '2023-01-14', '2023-01-29', 5, 9796650096, '2023-01-14 01:03:18', '2023-01-28 17:52:54'),
(2, 'pengembalian', '2023-01-17', '2023-01-27', 4, 9796650096, '2023-01-17 07:43:03', '2023-01-28 17:41:14'),
(3, 'pengembalian', '2022-01-17', '2023-01-24', 4, 9796650096, '2023-01-17 08:13:44', '2023-01-28 17:40:11'),
(5, 'pengembalian', '2023-01-29', '2023-01-29', 4, 9797570339, '2023-01-28 17:27:05', '2023-01-28 17:39:12'),
(6, 'pengembalian', '2023-01-29', '2023-01-29', 4, 9796650096, '2023-01-28 17:43:33', '2023-01-28 18:02:02'),
(9, 'pengembalian', '2023-01-29', '2023-01-29', 5, 9796650096, '2023-01-28 17:48:48', '2023-01-28 17:52:13'),
(10, 'peminjaman', '2023-01-29', NULL, 6, 9796650096, '2023-01-28 17:49:02', '2023-01-28 17:49:02'),
(11, 'peminjaman', '2023-01-29', NULL, 4, 9796650096, '2023-01-28 17:52:40', '2023-01-28 17:52:40');

--
-- Triggers `transactions`
--
DELIMITER $$
CREATE TRIGGER `update_stock` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
	IF NEW.type = 'peminjaman' THEN 
    	UPDATE books SET quantity = quantity-1 WHERE id = NEW.book_id;
	ELSEIF NEW.type = 'pengembalian' THEN 
    	UPDATE books SET quantity = quantity+1 WHERE id = NEW.book_id;
	END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stock2` AFTER UPDATE ON `transactions` FOR EACH ROW BEGIN
	IF NEW.type = 'peminjaman' THEN 
    	UPDATE books SET quantity = quantity-1 WHERE id = NEW.book_id;
	ELSEIF NEW.type = 'pengembalian' THEN 
    	UPDATE books SET quantity = quantity+1 WHERE id = NEW.book_id;
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `photoUrl` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `photoUrl`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'superadmin@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
(2, 'Admin', 'admin@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
(3, 'Nabila', 'nabila@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
(4, 'Ayunda', 'ayunda@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
(5, 'Herdhi', 'herdhi@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08'),
(6, 'Daru', 'daru@email.com', '2022-12-30 16:50:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2, NULL, NULL, '2022-12-30 16:50:08', '2022-12-30 16:50:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
