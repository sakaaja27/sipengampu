-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2024 at 03:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipengampu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang_ilmu`
--

CREATE TABLE `cabang_ilmu` (
  `id` int NOT NULL,
  `id_pohon` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cabang_ilmu`
--

INSERT INTO `cabang_ilmu` (`id`, `id_pohon`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'ADMINISTRASI INFORMASI KOMPUTER', '2024-10-20 20:00:34', '04:35:22'),
(2, 1, 'ADMINISTRASI SISTEM INFORMASI TEKNOLOGI', '2024-10-20 21:36:00', '04:36:00'),
(3, 3, 'Logika', '2024-10-20 21:37:22', '04:37:22'),
(4, 4, 'MATEMATIKA', '2024-10-20 21:37:37', '04:37:37'),
(5, 4, 'MATEMATIKA TERAPAN', '2024-10-20 21:38:01', '04:38:01'),
(6, 5, 'DESAIN', '2024-10-20 21:38:15', '04:38:15'),
(7, 5, 'DESAIN DIGITAL', '2024-10-20 21:38:31', '04:38:31'),
(8, 6, 'BISNIS DIGITAL', '2024-10-20 21:38:48', '04:38:48'),
(9, 6, 'BISNIS DIGITAL PARIWISATA', '2024-10-20 21:39:06', '04:39:06'),
(10, 9, 'ANIMASI', '2024-10-20 21:40:09', '04:40:09'),
(11, 9, 'DESAIN ANIMASI DIGITAL', '2024-10-20 21:40:37', '04:40:37'),
(12, 7, 'MANAJEMEN PENDIDIKAN', '2024-10-20 21:40:51', '04:40:51'),
(13, 7, 'PENDIDIKAN AGAMA ISLAM', '2024-10-20 21:41:04', '04:41:04'),
(14, 8, 'ADMINISTRASI JARINGAN KOMPUTER', '2024-10-20 21:43:04', '04:43:04'),
(15, 8, 'PENGUJIAN PERANGKAT LUNAK', '2024-10-20 21:43:20', '04:43:20'),
(16, 8, 'TEKNIK JARINGAN KOMPUTER', '2024-10-20 21:56:56', '04:57:14'),
(17, 10, 'kosong', '2024-10-21 20:22:55', '03:22:55'),
(18, 11, 'Kewarganegaraan', '2024-10-21 22:10:07', '05:10:07'),
(19, 1, 'APLIKASI PERANGKAT LUNAK SITUS', '2024-10-31 02:51:40', '09:51:40'),
(20, 1, 'DUKUNGAN TEKNIS TEKNOLOGI INFORMASI', '2024-10-31 02:52:14', '09:52:14'),
(21, 1, 'ILMU KOMPUTER ATAU INFORMATIKA', '2024-10-31 02:52:30', '09:52:30'),
(22, 1, 'KEAMANAN SISTEM INFORMASI', '2024-10-31 02:52:49', '09:52:49'),
(23, 1, 'KECERDASAN BUATAN', '2024-10-31 02:53:09', '09:53:09'),
(24, 1, 'KECERDASAN BUATAN DAN ROBOTIK', '2024-10-31 02:53:24', '09:53:24'),
(25, 1, 'LAYANAN INTERNET', '2024-10-31 02:53:37', '09:53:37'),
(26, 1, 'MANAJEMEN BASIS DATA', '2024-10-31 02:53:53', '09:53:53'),
(27, 1, 'PENGEMBANGAN APLIKASI BERGERAK', '2024-10-31 02:54:18', '09:54:18'),
(28, 1, 'PENGEMBANGAN APLIKASI MULTIPLATFORM', '2024-10-31 02:54:44', '09:54:44'),
(29, 1, 'PENGEMBANGAN PERANGKAT LUNAK SITUS', '2024-10-31 02:55:14', '09:55:14'),
(30, 1, 'PERANCANGAN PERMAINAN', '2024-10-31 02:55:35', '09:55:35'),
(31, 1, 'REKAYASA KEAMANAN SIBER', '2024-10-31 02:56:00', '09:56:00'),
(32, 1, 'REKAYASA PERANGKAT LUNAK', '2024-10-31 02:56:20', '09:56:20'),
(33, 1, 'REKAYASA PERANGKAT LUNAK APLIKASI', '2024-10-31 02:56:51', '09:56:51'),
(34, 1, 'REKAYASA SISTEM KOMPUTER', '2024-10-31 02:57:04', '09:57:04'),
(35, 1, 'REKAYASA TEKNOLOGI INFORMASI', '2024-10-31 02:58:12', '09:58:12'),
(36, 1, 'SISTEM DAN TEKNOLOGI INFORMASI', '2024-10-31 02:58:36', '09:58:36'),
(37, 1, 'SISTEM INFORMASI', '2024-10-31 02:58:57', '09:58:57'),
(38, 1, 'TEKNIK PENGAMANAN SIBER', '2024-10-31 02:59:20', '09:59:20'),
(39, 1, 'TEKNOLOGI INFORMASI', '2024-10-31 02:59:37', '09:59:37'),
(40, 1, 'TEKNOLOGI KOMPUTER GRAFIS', '2024-10-31 02:59:52', '09:59:52'),
(41, 1, 'TEKNOLOGI PERMAINAN', '2024-10-31 03:00:11', '10:00:11'),
(42, 1, 'TEKNOLOGI REKAYASA KOMPUTER GRAFIS', '2024-10-31 03:00:31', '10:00:31'),
(43, 1, 'TEKNOLOGI REKAYASA MULTIMEDIA', '2024-10-31 03:00:44', '10:00:44'),
(44, 1, 'TEKNOLOGI REKAYASA MULTIMEDIA GRAFIS', '2024-10-31 03:00:56', '10:00:56'),
(45, 1, 'TEKNOLOGI REKAYASA PERANGKAT LUNAK', '2024-10-31 03:01:08', '10:01:08'),
(46, 4, 'STATISTIKA', '2024-10-31 03:02:04', '10:02:04'),
(47, 4, 'STATISTIKA BISNIS', '2024-10-31 03:02:17', '10:02:17'),
(48, 4, 'STATISTIKA TERAPAN', '2024-10-31 03:02:33', '10:02:33'),
(49, 5, 'DESAIN GRAFIS', '2024-10-31 03:04:26', '10:04:26'),
(50, 5, 'DESAIN INTERIOR', '2024-10-31 03:04:43', '10:04:43'),
(51, 5, 'DESAIN KOMUNIKASI VISUAL', '2024-10-31 03:04:53', '10:04:53'),
(52, 5, 'DESAIN MODE', '2024-10-31 03:05:06', '10:05:06'),
(53, 5, 'DESAIN PRODUK', '2024-10-31 03:05:16', '10:05:16'),
(54, 5, 'DESAIN PRODUK INDUSTRI', '2024-10-31 03:05:27', '10:05:27'),
(55, 5, 'MULTIMEDIA', '2024-10-31 03:05:38', '10:05:38'),
(56, 5, 'PENDIDIKAN PROFESI ARSITEK', '2024-10-31 03:05:51', '10:05:51'),
(57, 5, 'PERCETAKAN', '2024-10-31 03:06:11', '10:06:11'),
(58, 5, 'TEKNOLOGI CETAK', '2024-10-31 03:06:29', '10:06:29'),
(59, 6, 'MANAJEMEN OPERASI BISNIS DIGITAL', '2024-10-31 03:06:54', '10:06:54'),
(60, 6, 'OPERASIONALISASI PERKANTORAN DIGITAL', '2024-10-31 03:07:05', '10:07:05'),
(61, 9, 'DESAIN MEDIA', '2024-10-31 03:08:09', '10:08:09'),
(62, 9, 'DESAIN MEDIA KOMUNIKASI GRAFIS', '2024-10-31 03:08:21', '10:08:21'),
(63, 9, 'FORENSIK DIGITAL DAN KEAMANAN SIBER', '2024-10-31 03:08:33', '10:08:33'),
(64, 9, 'ILMU ATAU SAINS FORENSIK', '2024-10-31 03:09:39', '10:09:39'),
(65, 9, 'ILMU ATAU SAINS KOMPUTASI', '2024-10-31 03:09:50', '10:09:50'),
(66, 9, 'INFORMATIKA MEDIS ATAU INFORMATIKA KESEHATAN', '2024-10-31 03:10:00', '10:10:00'),
(67, 9, 'INOVASI SISTEM DAN TEKNOLOGI', '2024-10-31 03:10:12', '10:10:12'),
(68, 9, 'KOMUNIKASI GRAFIS', '2024-10-31 03:10:26', '10:10:26'),
(69, 9, 'MULTI-MEDIA DIGITAL', '2024-10-31 03:10:40', '10:10:40'),
(70, 9, 'PENDIDIKAN DIGITAL', '2024-10-31 03:11:47', '10:11:47'),
(71, 9, 'REKAYASA SISTEM', '2024-10-31 03:11:58', '10:11:58'),
(72, 9, 'SAINS DATA', '2024-10-31 03:12:11', '10:12:11'),
(73, 9, 'SAINS DATA SPASIAL', '2024-10-31 03:12:22', '10:12:22'),
(74, 9, 'SAINS DATA TERAPAN', '2024-10-31 03:12:32', '10:12:32'),
(75, 9, 'SENI MEDIA DIGITAL', '2024-10-31 03:12:44', '10:12:44'),
(77, 9, 'SISTEM INFORMASI AKUNTANSI', '2024-10-31 03:13:07', '10:13:07'),
(78, 9, 'SISTEM INFORMASI BISNIS', '2024-10-31 03:13:18', '10:13:18'),
(79, 9, 'SISTEM INFORMASI GEOGRAFIS', '2024-10-31 03:13:32', '10:13:32'),
(80, 9, 'SISTEM SIBER-FISIK', '2024-10-31 03:13:42', '10:13:42'),
(81, 9, 'TEKNIK ANIMASI DAN PERMAINAN 3D', '2024-10-31 03:13:56', '10:13:56'),
(82, 9, 'TEKNIK CETAK DAN GRAFIS', '2024-10-31 03:14:14', '10:14:14'),
(83, 9, 'TEKNIK PENGEMASAN', '2024-10-31 03:14:24', '10:14:24'),
(84, 9, 'TEKNOLOGI CETAK DAN GRAFIS', '2024-10-31 03:14:34', '10:14:34'),
(85, 9, 'TEKNOLOGI PENGEMASAN', '2024-10-31 03:14:45', '10:14:45'),
(86, 9, 'TEKNOLOGI REKAYASA CETAK DAN GRAFIS 3 DIMENSI', '2024-10-31 03:14:55', '10:14:55'),
(87, 7, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA', '2024-10-31 03:15:27', '10:15:27'),
(88, 7, 'PENDIDIKAN BAHASA INDONESIA', '2024-10-31 03:15:37', '10:15:37'),
(89, 7, 'PENDIDIKAN BAHASA INGGRIS', '2024-10-31 03:16:30', '10:16:30'),
(90, 7, 'PENDIDIKAN BISNIS', '2024-10-31 03:16:53', '10:16:53'),
(91, 7, 'PENDIDIKAN KOMPUTER ATAU INFORMATIKA', '2024-10-31 03:17:55', '10:17:55'),
(92, 7, 'PENDIDIKAN MATEMATIKA', '2024-10-31 03:18:08', '10:18:08'),
(93, 7, 'PENDIDIKAN SASTRA INDONESIA', '2024-10-31 03:18:18', '10:18:18'),
(94, 7, 'PENDIDIKAN TEKNOLOGI INFORMASI', '2024-10-31 03:18:29', '10:18:29'),
(95, 7, 'TEKNOLOGI PENDIDIKAN', '2024-10-31 03:18:41', '10:18:41'),
(96, 8, 'TEKNOLOGI KOMPUTER', '2024-10-31 03:19:10', '10:19:10'),
(97, 8, 'TEKNOLOGI REKAYASA INFORMATIKA INDUSTRI', '2024-10-31 03:19:30', '10:19:30'),
(98, 8, 'TEKNOLOGI REKAYASA JARINGAN', '2024-10-31 03:19:41', '10:19:41'),
(99, 8, 'TEKNOLOGI REKAYASA KOMPUTER', '2024-10-31 03:19:52', '10:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('g31nucfs7jgr2tovd5md1e3nt5ft873n', '::1', 1727757621, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373735373632313b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('hasg8v6klea3iovc4b942m52f7j2cat6', '::1', 1727757994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373735373939343b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('3hlipn2al23vmi075808e7rctkt6095t', '::1', 1727758389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373735383338393b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('e5k3mb9m2gnucks3gabue7n1q8sbj635', '::1', 1727759214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373735393231343b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('q381uhuu6hbqojtr61jg2lt6q6o6himo', '::1', 1727762021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373736323032313b),
('8hb97h5bg9be1l5lnrjaog4t65acef3m', '::1', 1727763160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373736333136303b),
('rsrvpj5bg2n4dgva2gubinpd5qg7duct', '::1', 1727767038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373736373033383b),
('qiu9lcuka7nptqcs6r17k9o86ncs955i', '::1', 1727768413, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373736383431333b),
('itjgtuv5pa1grlfkdeuf6qr67vr1qr5l', '::1', 1727768868, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373736383836383b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('dsinq9b0jbmu948drmv2ko07e3pbp6ov', '::1', 1727770612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373737303631323b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('3ct1lpgsj302lusthbnjo3toh6hrfdno', '::1', 1727771312, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373737313331323b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2231223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('2ej9dv0tg5bh8bh1b68gfog83mtmbql1', '::1', 1727771319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373737313331323b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2230223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b),
('g8cfglma0ua4uf2mslp4d5qvk64k73on', '::1', 1727842154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373834323035303b69647c733a313a2231223b69645f70726f64697c733a313a2230223b6e69707c733a383a223132333435363738223b6e616d617c733a353a2241646d696e223b6e69646e7c733a383a223132333435363738223b676c725f646570616e7c733a303a22223b676c725f62656c616b616e677c733a303a22223b676f6c6f6e67616e7c733a303a22223b6a61626174616e7c733a313a2236223b7374617475735f706567617761697c733a313a2233223b70617373776f72647c733a33323a223235643535616432383361613430306166343634633736643731336330376164223b);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_rumpun`
--

CREATE TABLE `dosen_rumpun` (
  `id` int NOT NULL,
  `id_dosen` int NOT NULL,
  `id_pohon` int NOT NULL,
  `id_cabang` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dosen_rumpun`
--

INSERT INTO `dosen_rumpun` (`id`, `id_dosen`, `id_pohon`, `id_cabang`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2024-10-21 04:25:37', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nominal` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'Lektor Kepala', '100000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Lektor', '75000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Asisten Ahli', '50000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tenaga Pengajar', '50000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Tidak Ada', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, '0', '444', 1, 0, 0, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(1, 'api/prodi', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757622, 1727760000, '1', 200),
(2, 'api/jabatan', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757622, 1727760000, '1', 200),
(3, 'api/tahun-akademik', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757622, 1727760000, '1', 200),
(4, 'api/prodi', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757634, 1727760000, '1', 200),
(5, 'api/jabatan', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757634, 1727760000, '1', 200),
(6, 'api/tahun-akademik', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=hasg8v6klea3iovc4b942m52f7j2cat6\";}', '444', '::1', 1727757634, 1727760000, '1', 200),
(7, 'api/jabatan', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=3hlipn2al23vmi075808e7rctkt6095t\";}', '444', '::1', 1727757997, 1727760000, '1', 200),
(8, 'api/tahun-akademik', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=3hlipn2al23vmi075808e7rctkt6095t\";}', '444', '::1', 1727757997, 1727760000, '1', 200),
(9, 'api/prodi', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:49:\"http://localhost/sipengampu/index.php/admin/rekap\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=3hlipn2al23vmi075808e7rctkt6095t\";}', '444', '::1', 1727757997, 1727760000, '1', 200),
(10, 'api/admin', 'get', 'a:17:{s:1:\"_\";s:13:\"1727758389151\";s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:46:\"application/json, text/javascript, */*; q=0.01\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758389, 1727760000, '1', 200),
(11, 'api/prodi', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758389, 1727760000, '1', 200),
(12, 'api/admin', 'post', 'a:28:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:14:\"Content-Length\";s:3:\"112\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:12:\"Content-Type\";s:48:\"application/x-www-form-urlencoded; charset=UTF-8\";s:6:\"Origin\";s:16:\"http://localhost\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";s:2:\"id\";s:0:\"\";s:8:\"id_prodi\";s:1:\"1\";s:3:\"nip\";s:8:\"sasasasa\";s:9:\"glr_depan\";s:5:\"sasaa\";s:4:\"nama\";s:5:\"sasas\";s:12:\"glr_belakang\";s:0:\"\";s:8:\"golongan\";s:2:\"sa\";s:14:\"status_pegawai\";s:1:\"2\";s:8:\"password\";s:5:\"sasaa\";}', '444', '::1', 1727758405, 1727760000, '1', 200),
(13, 'api/admin', 'get', 'a:17:{s:1:\"_\";s:13:\"1727758389152\";s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:46:\"application/json, text/javascript, */*; q=0.01\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758405, 1727760000, '1', 200),
(14, 'api/admin', 'post', 'a:28:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:14:\"Content-Length\";s:3:\"112\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:12:\"Content-Type\";s:48:\"application/x-www-form-urlencoded; charset=UTF-8\";s:6:\"Origin\";s:16:\"http://localhost\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";s:2:\"id\";s:0:\"\";s:8:\"id_prodi\";s:1:\"1\";s:3:\"nip\";s:8:\"sasasasa\";s:9:\"glr_depan\";s:5:\"sasaa\";s:4:\"nama\";s:5:\"sasas\";s:12:\"glr_belakang\";s:0:\"\";s:8:\"golongan\";s:2:\"sa\";s:14:\"status_pegawai\";s:1:\"2\";s:8:\"password\";s:5:\"sasaa\";}', '444', '::1', 1727758420, 1727760000, '1', 200),
(15, 'api/admin', 'get', 'a:17:{s:1:\"_\";s:13:\"1727758389153\";s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:46:\"application/json, text/javascript, */*; q=0.01\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758420, 1727760000, '1', 200),
(16, 'api/prodi', 'get', 'a:16:{s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758423, 1727760000, '1', 200),
(17, 'api/admin', 'get', 'a:17:{s:1:\"_\";s:13:\"1727758423712\";s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:46:\"application/json, text/javascript, */*; q=0.01\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";}', '444', '::1', 1727758423, 1727760000, '1', 200),
(18, 'api/admin/1', 'get', 'a:18:{i:0;N;s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:18:\"sec-ch-ua-platform\";s:9:\"\"Windows\"\";s:16:\"X-Requested-With\";s:14:\"XMLHttpRequest\";s:10:\"User-Agent\";s:125:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0\";s:6:\"Accept\";s:3:\"*/*\";s:9:\"sec-ch-ua\";s:65:\"\"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"\";s:9:\"x-api-key\";s:3:\"444\";s:16:\"sec-ch-ua-mobile\";s:2:\"?0\";s:14:\"Sec-Fetch-Site\";s:11:\"same-origin\";s:14:\"Sec-Fetch-Mode\";s:4:\"cors\";s:14:\"Sec-Fetch-Dest\";s:5:\"empty\";s:7:\"Referer\";s:56:\"http://localhost/sipengampu/index.php/admin/master-admin\";s:15:\"Accept-Encoding\";s:23:\"gzip, deflate, br, zstd\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:43:\"ci_session=e5k3mb9m2gnucks3gabue7n1q8sbj635\";i:1;N;}', '444', '::1', 1727758432, 1727760000, '1', 200);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int NOT NULL,
  `kode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prodi_id` int NOT NULL DEFAULT '1',
  `semester` int NOT NULL,
  `tot_teori` int NOT NULL,
  `tot_praktik` int NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `nama`, `prodi_id`, `semester`, `tot_teori`, `tot_praktik`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TIF1207078', 'Workshop Sistem Informasi Berbasis Desktop', 6, 2, 0, 4, 2, '0000-00-00 00:00:00', '2024-10-08 23:39:48'),
(2, 'TIF120704', 'Interaksi Manusia dan Komputer', 6, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'TIF120705', 'Sistem Aplikasi Berbasis Obyek', 6, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'TIF120706', 'Perencanaan Proyek Perangkat Lunak', 6, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TIF120708', 'Workshop Manajemen Proyek', 6, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'TIF120701', 'Bahasa Indonesia', 6, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'TIF120702', 'Kewarganegaraan', 6, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'TIF120703', 'Intermediate English', 6, 2, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'MIF130706', 'Literasi Digital', 4, 3, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'TIF140702', 'Kewirausahaan', 6, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'TIF140703', 'Manajemen Kualitas Perangkat Lunak', 6, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'TIF140704', 'Perawatan Perangkat Lunak', 6, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'TIF140705', 'Pengujian Perangkat Lunak', 6, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'TIF140706', 'Workshop Sistem Informasi Web Framework', 6, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'TIF140707', 'Workshop Mobile Applications Framework', 6, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'TIF160701', 'Teknik Penulisan Ilmiah', 6, 6, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'TIF160703', 'Trend Teknologi', 6, 6, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'TIF160704', 'Data Warehouse', 6, 6, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'TIF160705', 'Workshop Developer Operasi', 6, 6, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'TIF160706', 'Workshop Tata Kelola Teknologi Informasi', 6, 6, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'TIF160707', 'Workshop Proyek Sistem Informasi', 6, 6, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'TIF180701', 'Skripsi', 6, 8, 0, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'TKK20701', 'Bahasa Indonesia', 1, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'MIF140703', 'Pemrograman Mobile', 4, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'TKK20702', 'Kewarganegaraan', 1, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'TKK20703', 'Intermediate English', 1, 2, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'TKK20704', 'SISTEM KONTROL ELEKTRONIK', 1, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'TKK20705', 'JARINGAN KOMPUTER', 1, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'TKK20706', 'WORKSHOP INFRASTRUKTUR JARINGAN KOMPUTER', 1, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'TKK20707', 'WORKSHOP PEMROGRAMAN WEB', 1, 2, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'TKK20708', 'WORKSHOP ELEKTRONIKA TERAPAN', 1, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'TKK40701', 'Teknik Penulisan Ilmiah', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'TKK40702', 'INTERPERSONAL SKILL', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'TKK40703', 'KOMPUTASI AWAN', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'TKK40704', 'JARINGAN BERBASIS SOFTWARE', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'TKK40705', 'SISTEM OTOMASI', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'TKK40706', 'INTERNET OF THINGS', 1, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'TKK40707', 'WORKSHOP KOMPUTASI AWAN', 1, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'TKK40708', 'WORKSHOP SISTEM KOMPUTER KONTROL', 1, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'TKK60701', 'KEWIRAUSAHAAN', 1, 6, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'TKK60702', 'TUGAS AKHIR', 1, 6, 0, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'MIF120701', 'Bahasa Indonesia', 4, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'MIF120702', 'Kewarganegaraan', 4, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'MIF120703', 'Intermediate English', 4, 2, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'MIF120704', 'Pemrograman Berorientasi Objek', 4, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'MIF120705', 'Design Web', 4, 2, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'MIF120706', 'Analisis dan Desain Sistem Informasi', 4, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'MIF120707', 'Workshop Pengembangan Aplikasi', 4, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'MIF120708', 'Workshop Manajemen Basis data', 4, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'MIF140701', 'Teknik Penulisan', 4, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'MIF140702', 'Data Mining', 4, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'MIF140704', 'Interpersonal Skill', 4, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'MIF140705', 'Argoinformatika', 4, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'MIF140706', 'Customer Relationship Management', 4, 4, 2, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'MI1F40707', 'Workshop Progressive Web Apps', 1, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'MIF140708', 'Workshop Basisdata Lanjut', 4, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'MIF160701', 'Bisnis Jasa Informatika', 4, 6, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'MIF160702', 'Manajemen Proyek Sistem Informasi', 4, 6, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'MIF160703', 'Tugas Akhir', 4, 6, 0, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'TKK10701', 'AGAMA', 1, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'TKK10702', 'PANCASILA', 1, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'TKK10703', 'BASIC ENGLISH', 1, 1, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'TKK10706', 'SISTEM OPERASI', 1, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'TKK10705', 'LOGIKA DAN ALGORITMA PEMROGRAMAN', 1, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'TKK10704', 'LITERASI DIGITAL', 1, 1, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'TKK10707', 'WORKSHOP ADMINISTRASI SISTEM', 1, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'TKK10708', 'WORKSHOP PEMROGRAMAN DASAR', 1, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'TKK3601', 'SISTEM PERTANIAN DIGITAL', 1, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'TKK3602', 'MANAJEMEN BASIS DATA', 1, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'TKK3603', 'ROUTING DAN SWITCHING', 1, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'TKK3604', 'KEAMANAN JARINGAN', 1, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'TKK3605', 'MIKROKOMPUTER', 1, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'TKK3606', 'WORKSHOP SISTEM TERTANAM', 1, 3, 0, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'TKK3607', 'WORKSHOP JARINGAN WAN', 1, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'TKK3608', 'WORKSHOP APLIKASI MOBILE', 1, 3, 0, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'TKK5601', 'PRAKTEK KERJA LAPANG', 1, 7, 0, 20, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'MIF110701', 'Agama', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'MIF110702', 'Pancasila', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'MIF110703', 'Basic English', 4, 1, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'MIF110704', 'Algoritma Pemrograman', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'MIF110705', 'Dasar Manajemen', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'MIF110706', 'Basisdata', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'MIF110707', 'Statistika Terapan', 4, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'MIF110708', 'Workshop Basis Data Relational', 4, 1, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'MIF110709', 'Workshop Pemrograman Dasar', 4, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'MIF130701', 'Kewirausahaan', 4, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'MIF130702', 'Sistem Informasi Geografis', 4, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'MIF130703', 'Manajemen Operasional', 4, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'MIF130704', 'Kecerdasan Bisnis Terapan', 4, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'MIF130705', 'Komunikasi Visual', 4, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'MIF130707', 'Workshop Sistem Informasi', 4, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'MIF130708', 'Workshop Visualisasi Data', 4, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'MIF150701', 'Praktek Kerja Lapang', 4, 5, 0, 20, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'TIF10701', 'Agama', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'TIF10702', 'Pancasila', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'TIF10703', 'Basic English', 6, 1, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'TIF10704', 'Logika dan Algoritma', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'TIF10705', 'Konsep Basis Data', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'TIF10706', 'Pemrograman Dasar', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'TIF10707', 'Workshop Pengembangan Perangkat Lunak', 6, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'TIF10708', 'Workshop Basis Data', 6, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'TIF130702', 'Matematika Diskrit', 6, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'TIF130703', 'Konsep Jaringan Komputer', 6, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'TIF30704', 'Struktur Data', 6, 3, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'TIF30705', 'Workshop Kualitas Perangkat Lunak', 6, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'TIF30706', 'Workshop Sistem Informasi Berbasis Web', 6, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'TIF30707', 'Workshop Mobile Applications', 6, 3, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'TIF50701', 'Aplikasi Sistem Tertanam', 6, 5, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'TIF50702', 'Sistem Cerdas', 6, 5, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'TIF50703', 'Agroinformatika', 6, 5, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'TIF50704', 'Multimedia Permainan', 6, 5, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'TIF50705', 'Workshop Pengolahan Citra dan Vision', 6, 5, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'TIF50706', 'Workshop Sistem Tertanam', 6, 5, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'TIF50707', 'Workshop Sistem Cerdas', 6, 5, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'TIF70701', 'Magang', 6, 7, 0, 20, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'TIF150704', 'Multimedia Permainan', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'TIF160701', 'Teknik Penulisan Ilmiah', 6, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'TIF150707', 'Workshop Sistem Cerdas', 6, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'BID1601', 'Pancasila', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'BID1602', 'Agama', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'BID1603', 'Basic English', 13, 1, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'BID1605', 'Algoritma dan Pemrograman Dasar', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'BID1606', 'Konsep Basis Data', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'BID1607', 'Pengantar Bisnis', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'BID1608', 'Dasar-Dasar Manajemen', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'BID1604', 'Literasi Digital', 13, 1, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'BID1609', 'Wokshop Sistem Informasi Manajemen', 13, 1, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'MIF140707', 'Workshop Progressive Web App', 4, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'TIF140701', 'Literasi Digital', 6, 4, 0, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'TIF160702', 'Statistika', 6, 6, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'BID2601', 'Kewarganegaraan', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'BID2602', 'Bahasa Indonesia', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'BID2603', 'Intermediate English', 13, 2, 1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'BID2604', 'Manajemen Basis Data', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'BID2605', 'Pemrograman Berbasis Obyek', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'BID2606', 'Matematika Bisnis', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'BID2607', 'Manajemen Pemasaran Digital', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'BID2608', 'Statistika Ekonomi dan Bisnis', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'BID2609', 'Workshop Analisis Pemasaran  Digital', 13, 2, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'BID4601', 'Manajemen Proyek Sistem  Informasi', 13, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'BID4602', 'E-Commerce', 13, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'BID4603', 'Keamanan Jaringan', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'BID460', 'Perilaku Organisasi', 13, 2, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'BID4605', 'Manajemen Mutu', 13, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'BID4606', 'Manajemen Resiko', 13, 4, 2, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'BID4607', 'Workshop Sistem Informasi  Lanjutan', 13, 4, 0, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'BID4608', 'Techno-Sociopreneur', 13, 4, 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Saka', 'saka', 1, 3, 3, 3, 3, '2024-10-10 05:12:56', '2024-10-10 05:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `pengampu`
--

CREATE TABLE `pengampu` (
  `id` int NOT NULL,
  `id_tahun_akademik` int DEFAULT NULL,
  `id_prodi` int DEFAULT NULL,
  `id_matkul` int DEFAULT NULL,
  `id_dosen` int DEFAULT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengampu`
--

INSERT INTO `pengampu` (`id`, `id_tahun_akademik`, `id_prodi`, `id_matkul`, `id_dosen`, `status_dosen`, `created_at`, `updated_at`) VALUES
(24, 7, 6, 1, 72, '2', '0000-00-00 00:00:00', '2024-10-10 04:23:51'),
(87, 7, 7, 19, 16, '1', '0000-00-00 00:00:00', '2024-10-11 20:33:43'),
(243, 7, 6, 1, 7, '2', '0000-00-00 00:00:00', '2024-10-11 20:26:07'),
(244, 7, 6, 1, 15, '1', '0000-00-00 00:00:00', '2024-10-11 20:28:24'),
(245, 7, 6, 1, 3, '1', '0000-00-00 00:00:00', '2024-10-11 20:28:55'),
(246, 7, 7, 1, 6, '2', '0000-00-00 00:00:00', '2024-10-11 20:29:08'),
(247, 7, 10, 1, 9, '1', '0000-00-00 00:00:00', '2024-10-11 20:29:34'),
(252, 7, 4, 10, 14, '1', '0000-00-00 00:00:00', '2024-10-11 20:30:37'),
(485, 1, 1, 75, 13, '2', '2024-10-08 07:48:59', '2024-10-08 07:48:59'),
(486, 1, 1, 78, 16, '1', '2024-10-08 07:49:35', '2024-10-08 07:49:35'),
(488, 7, 1, 20, 17, '1', '2024-10-08 07:53:30', '2024-10-09 22:42:40'),
(489, 7, 4, 9, 14, '1', '2024-10-08 07:54:08', '2024-10-09 07:27:31'),
(491, 7, 10, 1, 13, '2', '2024-10-09 07:27:48', '2024-10-09 07:27:56'),
(492, 7, 7, 19, 41, '2', '2024-10-09 22:41:13', '2024-10-09 22:41:13'),
(496, 7, 1, 36, 72, '2', '2024-10-10 07:54:30', '2024-10-10 07:54:30'),
(497, 7, 6, 19, 100, '2', '2024-10-11 20:24:01', '2024-10-11 20:24:01'),
(498, 1, 6, 9, 16, '1', '2024-10-11 20:40:08', '2024-10-11 20:40:08'),
(499, 3, 6, 1, 12, '1', '2024-10-11 20:52:28', '2024-10-11 20:52:28'),
(500, 7, 1, 1, 15, '2', '2024-10-11 20:53:16', '2024-10-29 01:39:30'),
(501, 5, 6, 20, 14, '1', '2024-10-11 20:53:31', '2024-10-11 20:53:31'),
(502, 1, 5, 52, 16, '1', '2024-10-11 20:57:14', '2024-10-29 01:44:22'),
(503, 2, 8, 1, 3, '1', '2024-10-11 20:57:27', '2024-10-11 20:57:27'),
(506, 7, 1, 44, 106, '2', '2024-10-21 21:58:57', '2024-10-21 21:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `pohon_ilmu`
--

CREATE TABLE `pohon_ilmu` (
  `id` int NOT NULL,
  `id_rumpun` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pohon_ilmu`
--

INSERT INTO `pohon_ilmu` (`id`, `id_rumpun`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Komputer', '2024-10-20 19:18:52', '04:32:56'),
(3, 1, 'Logika', '2024-10-20 21:33:07', '04:33:07'),
(4, 1, 'Matematika', '2024-10-20 21:33:17', '04:33:17'),
(5, 3, 'Arsitektur,Desain dan Perencanaan Desain', '2024-10-20 21:33:45', '09:50:51'),
(6, 3, 'Bisnis digital', '2024-10-20 21:33:59', '04:33:59'),
(7, 3, 'Pendidikan', '2024-10-20 21:34:10', '04:34:10'),
(8, 3, 'Teknik atau Rekayasa Komputer', '2024-10-20 21:34:29', '04:34:29'),
(9, 3, 'Jejaring Keilmuan Multi, Inter, Atau Transdisiplin', '2024-10-20 21:39:49', '10:07:43'),
(10, 6, 'kosong', '2024-10-21 20:05:30', '03:05:30'),
(11, 1, 'Kewarganegaraan', '2024-10-21 22:09:51', '05:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'TKK', '0000-00-00 00:00:00', '2024-10-08 21:48:07'),
(3, 'TKK-WXIT', '0000-00-00 00:00:00', '2024-10-08 23:12:56'),
(4, 'MIF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'D3-MIF INTERNASIONAL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'D4 - TIF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'D4-TIF BONDOWOSO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'D4 - TIF NGANJUK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'D4 - TIF SIDOARJO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'D4-TIF INTERNASIONAL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'D4 - BISNIS DIGITAL', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rumpun_ilmu`
--

CREATE TABLE `rumpun_ilmu` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rumpun_ilmu`
--

INSERT INTO `rumpun_ilmu` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rumpun Ilmu Formal', '2024-10-19 01:43:18', '04:31:20'),
(3, 'Rumpun Ilmu Terapan', '2024-10-20 18:19:30', '04:31:36'),
(6, 'kosong', '2024-10-21 20:05:19', '03:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `sipengampu`
--

CREATE TABLE `sipengampu` (
  `id` int NOT NULL,
  `id_tahun_akademik` int DEFAULT NULL,
  `id_prodi` int DEFAULT NULL,
  `id_matkul` int DEFAULT NULL,
  `id_dosen` int DEFAULT NULL,
  `status_dosen` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sipengampu`
--

INSERT INTO `sipengampu` (`id`, `id_tahun_akademik`, `id_prodi`, `id_matkul`, `id_dosen`, `status_dosen`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, '1', '2024-10-09 13:24:11', '2024-10-09 13:24:11'),
(2, 7, 6, 21, 17, '2', '2024-10-09 04:16:24', '2024-10-09 04:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int NOT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `tahun_ajaran`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, '2026/2027', 'GANJIL', 1, '2024-10-09 04:21:59', '2024-10-09 04:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` int NOT NULL,
  `tahun_ajaran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id`, `tahun_ajaran`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, '2021/2022', 'GANJIL', 1, '0000-00-00 00:00:00', '2024-10-29 01:30:31'),
(2, '2021/2022', 'GENAP', 1, '0000-00-00 00:00:00', '2024-10-29 01:30:38'),
(3, '2022/2023', 'GANJIL', 1, '0000-00-00 00:00:00', '2024-10-29 01:30:44'),
(5, '2022/2023', 'GENAP', 1, '0000-00-00 00:00:00', '2024-10-29 01:30:50'),
(7, '2024/2025', 'GANJIL', 1, '2024-10-04 08:08:21', '2024-10-12 01:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `id_prodi` int NOT NULL,
  `nip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nidn` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `glr_depan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `glr_belakang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bidang_studi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_pohon` int DEFAULT '10',
  `id_cabang` int DEFAULT '17',
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `golongan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_pegawai` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_prodi`, `nip`, `nama`, `nidn`, `glr_depan`, `glr_belakang`, `bidang_studi`, `id_pohon`, `id_cabang`, `perguruan_tinggi`, `golongan`, `jabatan`, `status_pegawai`, `password`, `created_at`, `updated_at`) VALUES
(1, 5, '12345678', 'Admin', '12345678', 'oke', 'gg', NULL, 10, 17, NULL, 'c', '2', 1, '01677a6ba542c1b664deb29548cc75cf', '0000-00-00 00:00:00', '2024-10-12 01:44:31'),
(2, 5, '199002272018032001', 'Trismayanti Dwi Puspitasari', '0027029002', NULL, 'S.Kom, M.Cs', NULL, 10, 17, NULL, 'VVIIB', '3', 2, 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '2024-10-18 04:42:11'),
(3, 6, '197405192003121002', 'Nugroho Setyo Wibowo', '0019057403', '', 'ST. MT', NULL, 10, 17, NULL, 'Pembina/IV', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 6, '197111151998021001', 'Adi Heru Utomo', '0015117106', 'DR.', 'S.Kom, M.Kom', NULL, 10, 17, NULL, 'Pembina/IV', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 6, '198012122005011001', 'Prawidya Destarianto', '0012128001', '', 'S.Kom, M.T', NULL, 10, 17, NULL, 'Penata Tk.', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, '197008311998031001', 'Moh. Munih Dian Widianta', '0031087001', '', 'S.Kom, M.T', NULL, 10, 17, NULL, 'Penata/III', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 13, '197909212005011001', 'I Putu Dody Lesmana', '0021097903', '', 'ST, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 6, '19781011 200501 2 00', 'Elly Antika', '0011107802', '', 'ST, M.Kom', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 6, '198511282008121002', 'Aji Seto Arifianto', '0028118502', '', 'S.ST., M.T.', NULL, 10, 17, NULL, 'Penata ', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 6, '199205282018032001', 'Bety Etikasari', '0028053202', '', 'S.Pd, M.Pd', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 6, '198608022015042002', 'Ratih Ayuninghemi', '0702088601', '', 'S.ST, M.Kom', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, '199112112018031001', 'Khafidurrohman Agustianto', '0011129102', '', 'S.Pd, M.Eng', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 6, '199203022018032001', 'Zilvanhisna Emka Fitri', '0002039203', '', 'ST. MT', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 6, '198907102019031010', 'Ery Setiyawan Jullev Atmadji', '0010078903', '', 'S.Kom, M.Cs', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, '198801172019031008', 'I Gede Wiryawan', '0017018808', '', 'S.Kom., M.Kom.', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 6, '199408122019031013', 'Mukhamad Angga Gumilang', '0012089401', '', 'S. Pd., M. Eng.', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 13, 'D198901152021041', 'Lukman Hakim', '0015018910', NULL, 'S.Kom., M.Kom.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:17:51'),
(18, 1, 'D199305102021032', 'Lukie Perdanasari', '0010059304', NULL, 'S.Kom., M.T.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:19:12'),
(19, 6, 'D199308312021032', 'Arvita Agus Kurniasari', '0031089301', NULL, 'S.ST.,M.Tr.Kom', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:18:29'),
(20, 6, '198106152006041002', 'Syamsul Arifin', '0015068202', '', 'S.Kom, M.Cs', NULL, 10, 17, NULL, 'Penata/III', '2', 4, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 4, '19710408 2001121003', 'Wahyu Kurnia Dewanto', '0008047103', '', ' S.Kom, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 4, '198302032006041003', 'Hendra Yufit Riskiawan', '0003028302', '', 'S.Kom, M.Cs', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 4, '197808192005012001', 'Ika Widiastuti', '0019087803', '', 'S.ST, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 4, '198005172008121002', 'Dwi Putro Sarwo Setyohadi', '0017058003', '', 'S.Kom, M.Kom', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 6, '197709292005011003', 'Didit Rahmat Hartadi', '0029097704', '', 'S.Kom, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 6, '198301092018031001', 'Hermawan Arief Putranto', '0009018304', '', 'ST, MT', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, '19880702 201903 1 01', 'Husin', '0002078803', '', 'S.Kom, M.MT', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, '199104292019031011', 'Faisal Lutfi Afriansyah', '0029049102', '', 'S.Kom, MT', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, '198804042020122013', 'Pramuditha Shinta Dewi Puspitasari', '0004039801', '', 'S.Kom., M.Kom.', NULL, 10, 17, NULL, '', '4', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, '197306172018051001', 'Ely Mulyadi', '0017067306', NULL, 'SE, M.Kom', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '3', 5, 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '2024-10-31 08:16:57'),
(36, 6, '198907102019031010', 'Ery Setiyawan Jullev Atmadji', 'S.Kom, M.Cs', '', 'S.Kom, M.Cs', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 6, '199408122019031013', 'Mukhamad Angga Gumilang', '0012089401', '', 'S. Pd., M. Eng.', NULL, 10, 17, NULL, '', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 1, '12345678910', 'Muhammad Hafidh Firmansyah', '12345678910', NULL, 'S.Tr.Kom., M.Sc.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:13:30'),
(41, 1, '197907032003121001', 'Surateno', '0003077902', NULL, 'S.Kom., M.Kom', NULL, 10, 17, NULL, 'Pembina/IV', '1', 5, '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '2024-10-13 07:41:58'),
(42, 1, '197808172003121005', 'Agus Hariyanto', '0017087804', '', 'ST, M.Kom', NULL, 10, 17, NULL, 'Pembina/IV', '1', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 1, '197011282003121001', 'Hariyono Rakhmad', '0028117002', '', 'S.Pd, M.Kom', NULL, 10, 17, NULL, 'Penata Tk.', '1', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 1, '197809082005011001', 'Denny Wijanarko', '0008097803', '', 'ST, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 1, '197808162005011002', 'Beni Widiawan', '0016087806', '', 'S.ST, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 1, '197009292003121001', 'Yogiswara', '0029097005', '', 'ST, MT', NULL, 10, 17, NULL, 'Penata/III', '2', 2, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 3, '197308312008011003', 'Agus Purwadi', '0031087306', '', 'ST.MT', NULL, 10, 17, NULL, '', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 1, '198406252015041004', 'Bekti Maryuni Susanto', '0025068404', '', 'S.Pd.T, M.Kom', NULL, 10, 17, NULL, 'Penata', '2', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 1, '198510312018031001', 'Victor Phoa', '0031108503', '', 'S.Si, M.Cs', NULL, 10, 17, NULL, 'Penata Mud', '3', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 1, '199411232020122010', 'Lalitya Nindita Sahenda', '0023119402', '', 'S.Pd., M.T', NULL, 10, 17, NULL, '', '4', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 13, '198606092008122004', 'Nanik Anita Mukhlisoh', '0009068601', '', 'S.ST, MT', NULL, 10, 17, NULL, 'Penata', '2', 2, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 8, 'D199510302021032', 'Puji Hastuti', '0030109502', NULL, 'ST., M.Eng', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:21:14'),
(53, 8, 'D199405092021032', 'Qonitatul Hasanah', '0009059403', NULL, 'S.ST., M.Tr.T', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:19:48'),
(54, 8, 'D199310092021031', 'Raditya Arief Pratama', '0009109304', NULL, 'S.Kom., M.Eng', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:20:44'),
(55, 8, '199706282022032018', 'Ulfa Emi Rahmawati', '0028069702', '', 'S.Kom., M.Kom.', NULL, 10, 17, NULL, '', '4', 2, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 9, '197110092003121001', 'Denny Trias Utomo', '0009107104', 'DR.', 'S.Si, MT', NULL, 10, 17, NULL, 'Penata Tk.', '2', 2, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 6, '199305082022032013', 'Dia Bitari Mei Yuana', '0008059304', NULL, 'S.ST., M.Tr.Kom.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:22:21'),
(58, 9, 'PKD.199440423202105', 'Mochammad Rifki Ulil Albab', '0023049404', NULL, 'ST., M.Tr.T.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '3', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:23:03'),
(59, 9, 'PKD.19931124202105', 'Sholihah Ayu Wulandari', '0024119301', NULL, 'S.ST., M.Tr.T.', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:23:36'),
(60, 9, 'PKD.19920803202105', 'Ahmad Fahriyannur Rosyady', '0003089203', NULL, 'S.Kom., M.MT', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '2024-10-31 08:24:10'),
(71, 1, '197009292003121001', 'Yogiswara', '', '', '', NULL, 10, 17, NULL, '', '2', 1, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 4, '198903292019031007', 'Taufiq Rizaldi', '0029058906', NULL, 'S.ST., MT', NULL, 10, 17, NULL, 'VVIB', '3', 3, 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '2024-10-10 04:11:19'),
(73, 6, '199212272022031007', 'Choirul Huda', '0027129205', '', 'S.Kom., M.Kom.', NULL, 10, 17, NULL, 'Penata/III', '6', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 1, '199304252022032008', 'Shabrina Choirunnisa', '0025049303', '', 'S.Kom., M.Kom.', NULL, 10, 17, NULL, 'Penata/III', '6', 5, '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 1, '111', '1', '111', '1', '1', NULL, 10, 17, NULL, '1', '1', 1, 'c4ca4238a0b923820dcc509a6f75849b', '2024-10-08 21:15:20', '2024-10-08 21:15:20'),
(100, 1, '123', 'TESTING V2', '123', 'Ir', 'tr', 'Matematika', 1, 2, 'Politeknik Negeri Malang', 'VVIC', '4', 5, '01677a6ba542c1b664deb29548cc75cf', '2024-10-11 20:23:17', '2024-10-21 21:02:53'),
(105, 1, 'finaltestingv2', 'Sakav2', 'finaltestingv2', 'Ir.', 'M.Cs', 'Teknik Komputer', 5, 6, 'Universitas Brawijaya', 'C', '1', 5, '01677a6ba542c1b664deb29548cc75cf', '2024-10-21 21:24:56', '2024-10-21 21:26:53'),
(106, 1, 'finaltestingv3', 'Sakav3', 'finaltestingv3', 'Ir.', 'M.Cs', 'Teknik Komputer', 1, 1, 'Universitas Brawijaya', 'C', '1', 5, 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-21 21:54:19', '2024-10-21 22:05:17'),
(107, 6, 'Afis Asryullah Pratama', 'Afis Asryullah Pratama', 'Afis Asryullah Pratama', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-31 08:28:19', '2024-10-31 08:28:36'),
(108, 1, 'Khen Dedes', 'Khen dedes', 'Khen Dedes', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:29:27', '2024-10-31 08:29:27'),
(110, 1, 'Mauthauddin Mustaqim', 'Mauthauddin Mustaqim', 'Mauthauddin Mustaqim', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:33:18', '2024-10-31 08:33:18'),
(111, 5, 'Reza Putra Pradana', 'Reza Putra Pradana', 'Reza Putra Pradana', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:33:59', '2024-10-31 08:46:30'),
(112, 4, 'Akas Bagus Setiawan', 'Akas Bagus Setiawan', 'Akas Bagus Setiawan', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-31 08:34:59', '2024-10-31 08:35:23'),
(113, 6, 'Fatimatuzzahra', 'Fatimatuzzahra', 'Fatimatuzzahra', NULL, 'M.Kom', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:35:59', '2024-10-31 08:49:09'),
(114, 13, 'Mas\'ud Hermansyah', 'Mas\'ud Hermansyah', 'Mas\'ud Hermansyah', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:37:18', '2024-10-31 08:37:18'),
(116, 13, 'David Juli Ariadi', 'David Juli Ariadi', 'David Juli Ariadi', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:39:31', '2024-10-31 08:39:31'),
(117, 13, 'Prisilia Angel Tantri', 'Prisilia Angel Tantri', 'Prisilia Angel Tantri', NULL, 'SE,M.M', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-31 08:40:17', '2024-10-31 08:40:36'),
(118, 13, 'Rizky Adhitya Nugroho', 'Rizky Adhitya Nugroho', 'Rizky Adhitya Nugroho', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:41:16', '2024-10-31 08:41:16'),
(119, 13, 'Muhammad Bahanan', 'Muhammad Bahanan', 'Muhammad Bahanan', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-31 08:41:53', '2024-10-31 08:42:09'),
(120, 13, 'Mujiono', 'Mujiono', 'Mujiono', NULL, '-', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:42:37', '2024-10-31 08:42:37'),
(121, 1, 'Dhony Manggala Putra', 'Dhony Manggala Putra', 'Dhony Manggala Putra', NULL, 'SE,M.M', 'Teknik Informatika', 10, 17, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:43:22', '2024-10-31 08:43:22'),
(122, 1, 'Muhammad Ainul Fikri', 'Muhammad Ainul Fikri', 'Muhammad Ainul Fikri', NULL, 'S.T,M.Eng', 'Teknik Informatika', 7, 12, 'Politeknik Negeri Jember', '-', '4', 5, '25d55ad283aa400af464c76d713c07ad', '2024-10-31 08:44:06', '2024-10-31 08:51:19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_matakuliah`
-- (See below for the actual view)
--
CREATE TABLE `view_matakuliah` (
`id` int
,`kode` varchar(20)
,`nama` varchar(255)
,`nama_prodi` varchar(255)
,`semester` int
,`tot_teori` int
,`tot_praktik` int
,`status` int
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pengampu_`
-- (See below for the actual view)
--
CREATE TABLE `view_pengampu_` (
`id` int
,`id_tahun_akademik` int
,`id_prodi` int
,`id_matkul` int
,`id_dosen` int
,`status_dosen` varchar(20)
,`status_ajaran` int
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dosen`
-- (See below for the actual view)
--
CREATE TABLE `v_dosen` (
`id` int
,`nama` varchar(255)
,`nip` varchar(50)
,`nidn` varchar(50)
,`glr_depan` varchar(100)
,`glr_belakang` varchar(100)
,`golongan` varchar(10)
,`jabatan` varchar(255)
,`status_pegawai` int
,`password` varchar(255)
,`nama_prodi` varchar(255)
,`nama_jabatan` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_matakuliah`
--
DROP TABLE IF EXISTS `view_matakuliah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_matakuliah`  AS SELECT `m`.`id` AS `id`, `m`.`kode` AS `kode`, `m`.`nama` AS `nama`, `p`.`nama` AS `nama_prodi`, `m`.`semester` AS `semester`, `m`.`tot_teori` AS `tot_teori`, `m`.`tot_praktik` AS `tot_praktik`, `m`.`status` AS `status` FROM (`matkul` `m` join `prodi` `p` on((`m`.`prodi_id` = `p`.`id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_pengampu_`
--
DROP TABLE IF EXISTS `view_pengampu_`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pengampu_`  AS SELECT `p`.`id` AS `id`, `p`.`id_tahun_akademik` AS `id_tahun_akademik`, `p`.`id_prodi` AS `id_prodi`, `p`.`id_matkul` AS `id_matkul`, `p`.`id_dosen` AS `id_dosen`, `p`.`status_dosen` AS `status_dosen`, `ta`.`status` AS `status_ajaran`, `p`.`created_at` AS `created_at`, `p`.`updated_at` AS `updated_at` FROM (`pengampu` `p` join `tahun_akademik` `ta` on((`p`.`id_tahun_akademik` = `ta`.`id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_dosen`
--
DROP TABLE IF EXISTS `v_dosen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dosen`  AS SELECT `users`.`id` AS `id`, `users`.`nama` AS `nama`, `users`.`nip` AS `nip`, `users`.`nidn` AS `nidn`, `users`.`glr_depan` AS `glr_depan`, `users`.`glr_belakang` AS `glr_belakang`, `users`.`golongan` AS `golongan`, `users`.`jabatan` AS `jabatan`, `users`.`status_pegawai` AS `status_pegawai`, `users`.`password` AS `password`, `prodi`.`nama` AS `nama_prodi`, `jabatan`.`nama` AS `nama_jabatan` FROM ((`users` join `prodi` on((`users`.`id_prodi` = `prodi`.`id`))) join `jabatan` on((`users`.`jabatan` = `jabatan`.`id`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang_ilmu`
--
ALTER TABLE `cabang_ilmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen_rumpun`
--
ALTER TABLE `dosen_rumpun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `pengampu`
--
ALTER TABLE `pengampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tahun_akademik` (`id_tahun_akademik`);

--
-- Indexes for table `pohon_ilmu`
--
ALTER TABLE `pohon_ilmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumpun_ilmu`
--
ALTER TABLE `rumpun_ilmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sipengampu`
--
ALTER TABLE `sipengampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
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
-- AUTO_INCREMENT for table `cabang_ilmu`
--
ALTER TABLE `cabang_ilmu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `dosen_rumpun`
--
ALTER TABLE `dosen_rumpun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `pengampu`
--
ALTER TABLE `pengampu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `pohon_ilmu`
--
ALTER TABLE `pohon_ilmu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rumpun_ilmu`
--
ALTER TABLE `rumpun_ilmu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sipengampu`
--
ALTER TABLE `sipengampu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
