-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 06:54 AM
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
(1, 1, 'Kolam Renang', 'Kolam renang outdoor dengan area berjemur', 'Aktif', '07:00 - 19:00', 20, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(2, 2, 'Gym', 'Fasilitas gym lengkap dengan peralatan modern', 'Aktif', '06:00 - 22:00', 15, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(3, 3, 'Taman Bermain', 'Taman bermain anak dengan ayunan dan perosotan', 'Aktif', '08:00 - 18:00', 12, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(4, 4, 'Lapangan Basket', 'Lapangan basket dengan lampu penerangan', 'Perbaikan', '09:00 - 21:00', 18, '2024-05-26 14:48:17', '2024-05-26 14:48:17'),
(5, 5, 'Ruang Serbaguna', 'Ruang serbaguna untuk acara dan pertemuan', 'Aktif', '08:00 - 22:00', 100, '2024-05-26 14:48:17', '2024-05-26 14:48:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
