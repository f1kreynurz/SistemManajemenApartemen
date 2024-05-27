-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 04:10 PM
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
-- Database: `manajemen-apartemen`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah_lantai` int(11) NOT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `id_penyewa` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `nama`, `alamat`, `jumlah_lantai`, `jumlah_unit`, `id_penyewa`, `created_at`, `updated_at`) VALUES
(1, 'Apartemen Pondok Indah Residence', 'Jl. Metro Pondok Indah, Jakarta Selatan', 25, 400, 1, '2024-05-26 14:48:17', '2024-05-27 01:20:03'),
(2, 'Apartemen Tamansari Semanggi', 'Jl. Semanggi, Jakarta Pusat', 20, 300, 2, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 'Apartemen Gunawangsa Merr', 'Jl. Gunawangsa, Surabaya', 18, 250, 3, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 'Apartemen Bale Hinggil', 'Jl. Bale Hinggil, Bandung', 22, 350, 4, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 'Apartemen Yogya Residences', 'Jl. Affandi, Yogyakarta', 16, 200, 5, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_apartemen` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_apartemen`, `nama`, `deskripsi`, `status`, `jam_operasional`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kolam Renang', 'Kolam renang outdoor dengan area berjemur', 'Non Aktif', '07:00 - 19:30', 20, '2024-05-26 14:48:17', '2024-05-27 02:04:35'),
(2, 2, 'Gym', 'Fasilitas gym lengkap dengan peralatan modern', 'Aktif', '06:00 - 22:00', 15, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 3, 'Taman Bermain', 'Taman bermain anak dengan ayunan dan perosotan', 'Aktif', '08:00 - 18:00', 12, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 4, 'Lapangan Basket', 'Lapangan basket dengan lampu penerangan', 'Perbaikan', '09:00 - 21:00', 18, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 5, 'Ruang Serbaguna', 'Ruang serbaguna untuk acara dan pertemuan', 'Aktif', '08:00 - 22:00', 100, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_penyewa` bigint(20) UNSIGNED NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `biaya_sewa` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id`, `id_unit`, `id_penyewa`, `tanggal_mulai`, `tanggal_berakhir`, `biaya_sewa`, `created_at`, `updated_at`) VALUES
(1, 101, 1, '2023-01-01', '2024-12-31', '3500000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(2, 102, 2, '2023-03-01', '2025-02-28', '4800000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 103, 3, '2023-05-01', '2025-04-30', '3200000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 104, 4, '2023-07-01', '2024-06-30', '3700000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 105, 5, '2023-09-01', '2025-08-31', '4500000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17');

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2024_05_26_213148_create_apartments_table', 1),
(28, '2024_05_26_213525_create_fasilitas_table', 1),
(29, '2024_05_26_213550_create_kontrak_table', 1),
(30, '2024_05_26_213620_create_pembayaran_table', 1),
(31, '2024_05_26_213701_create_pemeliharaan_table', 1),
(32, '2024_05_26_213803_create_penyewa_table', 1),
(33, '2024_05_26_213827_create_unit_table', 1);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kontrak` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `id_penyewa` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_kontrak`, `tanggal`, `jumlah`, `metode`, `id_penyewa`, `created_at`, `updated_at`) VALUES
(1, 10, '2023-05-01', '3500000.00', 'KPA', 1, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(2, 20, '2023-04-15', '4800000.00', 'Tunai', 2, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 30, '2023-03-20', '3200000.00', 'Transfer Bank', 3, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 40, '2023-02-28', '3700000.00', 'Tunai Bertahap', 4, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 50, '2023-01-10', '4500000.00', 'KPA', 5, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `biaya` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`id`, `id_unit`, `tanggal`, `deskripsi`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 101, '2023-05-01', 'Perbaikan AC', '600000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(2, 102, '2023-04-15', 'Pengecatan dinding', '1200000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 103, '2023-03-20', 'Ganti karpet', '800000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 104, '2023-02-28', 'Perbaikan keran air', '250000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 105, '2023-01-10', 'Pembersihan saluran air', '350000.00', '2024-05-26 14:48:17', '2024-05-26 14:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `id_apartemen` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id`, `nama`, `nomor_telepon`, `email`, `pekerjaan`, `id_apartemen`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Reia Samantha', '081234567890', 'reia.samantha@email.com', 'Karyawan Swasta', 1, 3, '2024-05-26 14:48:17', '2024-05-27 06:07:35'),
(2, 'Sitha cleora', '089876543210', 'sitha.cleora@email.com', 'Guru', 2, 2, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 'Adi Pratama', '085678901234', 'adi.pratama@email.com', 'Dokter', 3, 3, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 'Rico Fabian', '087654321098', 'rico.fabian@email.com', 'Pengusaha', 4, 4, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 'Rizal Eroza', '082345678901', 'rizal.eroza@email.com', 'Insinyur', 5, 5, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

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
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_apartemen` bigint(20) UNSIGNED NOT NULL,
  `nomor_unit` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `id_penyewa` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `id_apartemen`, `nomor_unit`, `tipe`, `luas`, `id_penyewa`, `created_at`, `updated_at`) VALUES
(1, 1, '12A', 'Studio', 45, 4, '2024-05-26 14:48:17', '2024-05-27 05:39:22'),
(2, 2, '8B', '2 Kamar', 75, 2, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 3, '16C', '3 Kamar', 90, 3, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 4, '20D', '2 Kamar', 70, 4, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 5, '5E', 'Studio', 40, 5, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

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
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reia Samantha', 'reia.samantha@email.com', NULL, '$2y$12$f9jE66XL9gJu5VBgW3L1wu0YlB5TRPcKw.1lcIz69HKVEbCxaVZ6K', 0, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(2, 'Sitha cleora', 'sitha.cleora@email.com', NULL, '$2y$12$jI/p7EjOXP3tywzOWvMKYO/xwu0k5mp6kRhSaTnq7f9aWT4NBCkiS', 0, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(3, 'Adi Pratama', 'adi.pratama@email.com', NULL, '$2y$12$DU17WwxQQVdiumt1XUBrNeDwmhJnKWbEW2YppA28q/w0rhsF19aIK', 0, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(4, 'Rico Fabian', 'rico.fabian@email.com', NULL, '$2y$12$h/XKvY89mDe6izbRNxNNyuBI2/fNw.ZJ7G.f7iTrFpVm4oKCJtOKe', 0, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(5, 'Rizal Eroza', 'rizal.eroza@email.com', NULL, '$2y$12$g2Kq5/o5hO2pjDaWZci0S.rlLBOv4JkNRGXTCHKAW4BOC6mQsctGu', 0, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(6, 'Admin', 'admin@example.com', NULL, '$2y$12$StDCUQkt3IZvygfKnx5b7.7h/NHY7JKRJwYoL0CcabX6CCHH8qqXG', 1, NULL, '2024-05-26 14:48:18', '2024-05-26 14:48:18'),
(7, 'Fikri', 'fikri@gmail.com', NULL, '$2y$12$UDiQ.pEft/H9eZtmC1pEcORbueb22VCh1ty4hhq/ZKHvwLBC9XtzS', 0, NULL, '2024-05-27 02:09:00', '2024-05-27 02:09:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_apartments_penyewa` (`id_penyewa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fasilitas_apartments` (`id_apartemen`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartments`
--
ALTER TABLE `apartments`
  ADD CONSTRAINT `fk_apartments_penyewa` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id`);

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fk_fasilitas_apartments` FOREIGN KEY (`id_apartemen`) REFERENCES `apartments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
