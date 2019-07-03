-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 04:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
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

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` varchar(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `umur`) VALUES
('0', 'coba', '12'),
('1', 'aita', '21'),
('2', 'dinda', '21'),
('3', 'neelam', '19');

-- --------------------------------------------------------

--
-- Table structure for table `stock_opname`
--

CREATE TABLE `stock_opname` (
  `WH_SO` varchar(50) NOT NULL,
  `ONT_ZTE_F609` int(11) DEFAULT NULL,
  `ONT_ZTE_F670` int(11) DEFAULT NULL,
  `ONT_HUAWEI_HG8245H5` int(11) DEFAULT NULL,
  `ONT_HUAWEI_HG8245HU` int(11) DEFAULT NULL,
  `ONT_NOKIA_G240WF` int(11) DEFAULT NULL,
  `STB_ZTE_B7005` int(11) DEFAULT NULL,
  `STB_HUAWEI_EC6108V9` int(11) DEFAULT NULL,
  `STB_FIBERHOME_HG680P` int(11) DEFAULT NULL,
  `WIFI_EXTENDER_EDIMAX_EW7438RPN` int(11) DEFAULT NULL,
  `TLC_TPLINK_TLPA4010` int(11) DEFAULT NULL,
  `INDIBOX_AKARI_AZ117ATV` int(11) DEFAULT NULL,
  `WIRELESS_IOT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_opname`
--

INSERT INTO `stock_opname` (`WH_SO`, `ONT_ZTE_F609`, `ONT_ZTE_F670`, `ONT_HUAWEI_HG8245H5`, `ONT_HUAWEI_HG8245HU`, `ONT_NOKIA_G240WF`, `STB_ZTE_B7005`, `STB_HUAWEI_EC6108V9`, `STB_FIBERHOME_HG680P`, `WIFI_EXTENDER_EDIMAX_EW7438RPN`, `TLC_TPLINK_TLPA4010`, `INDIBOX_AKARI_AZ117ATV`, `WIRELESS_IOT`) VALUES
('WH MALANG', 1639, 90, 200, NULL, 631, 238, 904, 3000, 537, 60, 320, 330),
('WH SO INV BATU', 181, 6, 228, NULL, 63, NULL, 283, NULL, NULL, 4, NULL, NULL),
('WH SO INV BLIMBING', 328, 5, NULL, NULL, NULL, NULL, 300, 77, 3, 9, NULL, NULL),
('WH SO INV KEPANJEN', 293, 6, NULL, 1, NULL, NULL, 200, 167, NULL, NULL, NULL, NULL),
('WH SO INV KLOJEN', 546, 1, 202, 7, NULL, NULL, 308, 138, NULL, 11, NULL, NULL),
('WH SO INV MALANG KOTA', 534, NULL, 204, 5, 34, NULL, 43, 232, NULL, 3, NULL, NULL),
('WH SO INV SAWOJAJAR', 518, 12, 200, NULL, 48, NULL, 181, 200, 2, NULL, NULL, NULL),
('WH SO INV SINGOSARI', 301, 1, 163, NULL, 18, NULL, 156, 197, NULL, NULL, NULL, NULL),
('WH SO INV TUREN', 318, 5, NULL, NULL, NULL, NULL, 281, 92, NULL, NULL, NULL, NULL),
('WH MALANG', 1639, 90, 200, NULL, 631, 238, 904, 3000, 537, 60, 320, 330),
('WH SO INV BATU', 181, 6, 228, NULL, 63, NULL, 283, NULL, NULL, 4, NULL, NULL),
('WH SO INV BLIMBING', 328, 5, NULL, NULL, NULL, NULL, 300, 77, 3, 9, NULL, NULL),
('WH SO INV KEPANJEN', 293, 6, NULL, 1, NULL, NULL, 200, 167, NULL, NULL, NULL, NULL),
('WH SO INV KLOJEN', 546, 1, 202, 7, NULL, NULL, 308, 138, NULL, 11, NULL, NULL),
('WH SO INV MALANG KOTA', 534, NULL, 204, 5, 34, NULL, 43, 232, NULL, 3, NULL, NULL),
('WH SO INV SAWOJAJAR', 518, 12, 200, NULL, 48, NULL, 181, 200, 2, NULL, NULL, NULL),
('WH SO INV SINGOSARI', 301, 1, 163, NULL, 18, NULL, 156, 197, NULL, NULL, NULL, NULL),
('WH SO INV TUREN', 318, 5, NULL, NULL, NULL, NULL, 281, 92, NULL, NULL, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
