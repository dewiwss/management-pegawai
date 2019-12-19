-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 07:31 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Cuti Sakit','Cuti Tahunan','Cuti Harian','Cuti Bulanan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `hari` int(11) NOT NULL,
  `status` enum('ditolak','disetujui','menunggu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `jenis`, `tgl_pengajuan`, `hari`, `status`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(1, 'Cuti Sakit', '2019-12-19', 3, 'menunggu', 13, NULL, '2019-12-19 10:40:30'),
(2, 'Cuti Sakit', '2019-12-20', 12, 'menunggu', 2, '2019-12-19 10:36:14', '2019-12-19 10:36:14'),
(3, 'Cuti Bulanan', '2019-12-20', 30, 'ditolak', 23, '2019-12-19 11:17:23', '2019-12-19 11:17:23'),
(4, 'Cuti Tahunan', '2019-12-21', 34, 'disetujui', 13, '2019-12-19 11:17:52', '2019-12-19 11:17:52'),
(5, 'Cuti Harian', '2019-12-21', 12, 'disetujui', 3, '2019-12-19 11:19:53', '2019-12-19 11:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_golongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `kode_golongan`, `gaji`, `created_at`, `updated_at`) VALUES
(1, 'IA', 1000000, NULL, NULL),
(2, 'IIA', 1500000, NULL, NULL),
(3, 'IB', 3000000, NULL, NULL),
(5, 'IC', 89000000, '2019-12-19 11:16:06', '2019-12-19 11:16:06'),
(6, 'IIB', 12000000, '2019-12-19 11:16:25', '2019-12-19 11:16:25'),
(7, 'IIC', 780000, '2019-12-19 11:16:43', '2019-12-19 11:16:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_09_110614_create_pegawai_table', 1),
(4, '2019_12_09_111433_create_golongan_table', 1),
(5, '2019_12_09_141718_create_pelatihan_table', 1),
(6, '2019_12_09_143224_create_cuti_table', 1),
(7, '2019_12_09_145422_create_pegawai_pelatihan_table', 1);

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Belum Menikah','Menikah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_darah` enum('O','A','B','AB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`, `tgl_lahir`, `tmp_lahir`, `jk`, `no_telp`, `status`, `email`, `gol_darah`, `agama`, `jabatan`, `departemen`, `pelatihan`, `golongan_id`, `created_at`, `updated_at`) VALUES
(2, 177006022, 'Keyla Salsabila', 'Dusun Nagrog RT06 RW02 Desa Sukasenang Kecamatan Sindangkasih 46268', '1998-09-09', 'Tasikmalaya', 'Laki-Laki', '085797106894', 'Belum Menikah', 'keyla@admin.com', 'AB', 'Islam', 'Sekertaris', 'IT & Technology', 'Network Administrator Madya', '2', '2019-12-13 01:28:05', '2019-12-13 01:28:05'),
(3, 177006075, 'Dewi Wulan Sari', 'Dusun Nagrog RT06 RW02 Desa Sukasenang Kecamatan Sindangkasih', '1998-07-06', 'Ciamis', 'Perempuan', '0857-9718-6894', 'Menikah', 'ihsan@email.com', 'A', 'Islam', 'Direktur Utama', 'Founder', 'Network Administrator Madya', '1', '2019-12-13 01:30:48', '2019-12-19 11:18:38'),
(4, 177006006, 'Agung MN', 'Dusun Nagrog RT06 RW02 Desa Sukasenang Kecamatan Sindangkasih', '1998-09-09', 'Ciamis', 'Laki-Laki', '283962985', 'Belum Menikah', 'dewiwss@ee', 'O', 'Islam', 'Bendahara', 'Human Resource', 'Designer', '2', '2019-12-13 01:32:41', '2019-12-13 01:32:41'),
(13, 1770060312, 'Doni Agistira', 'akcbasbsakc', '1999-08-27', 'Ciamis', 'Laki-Laki', '98498', 'Belum Menikah', 'admin@admin.com', 'A', 'Islam', 'Sekertaris', 'IT & Technology', 'Network Administrator Madya', '1', '2019-12-13 04:57:21', '2019-12-19 11:19:16'),
(22, 1770060327, 'Dewi 293ry0', 'Dusun Nagrog RT06 RW02 Desa Sukasenang Kecamatan Sindangkasih', '1999-08-27', 'Ciamis', 'Laki-Laki', '0857-9718-6894', 'Belum Menikah', 'dewiwss@gmail.com', 'A', 'WEFWE', 'Sekertaris', 'IT & Technology', 'Junior Web Programming', '1', '2019-12-18 09:10:47', '2019-12-18 09:10:47'),
(23, 1770060329823, 'meli', 'Dusun Nagrog RT06 RW02 Desa Sukasenang Kecamatan Sindangkasih', '1998-07-06', 'Ciamis', 'Perempuan', '0857-9718-6894', 'Menikah', 'dewiwss@ee', 'A', 'WEFWE', 'Direktur Utama', 'Founder', 'Designer', '1', '2019-12-18 09:11:15', '2019-12-18 09:11:15'),
(24, 177006012, 'Harry potter', 'dimana aja boleh', '2019-12-20', 'Panjalu', 'Perempuan', '29836892', 'Menikah', 'wadiooo@email.com', 'A', 'Islam', 'Sales', 'Marketing', 'Network Administrator Madya', '1', '2019-12-19 11:30:45', '2019-12-19 11:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_pelatihan`
--

CREATE TABLE `pegawai_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `pelatihan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai_pelatihan`
--

INSERT INTO `pegawai_pelatihan` (`id`, `pegawai_id`, `pelatihan_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pelatihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelatihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruktur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_pelatihan` date NOT NULL,
  `akhir_pelatihan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `kode_pelatihan`, `nama_pelatihan`, `tempat`, `instruktur`, `mulai_pelatihan`, `akhir_pelatihan`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Junior Web Programming', 'ciamis', 'rianto', '2019-12-03', '2019-12-04', NULL, NULL),
(2, 'L001', 'Ethical Hacking', 'Ciamisff', 'Dewi Wulan Sari', '2019-12-27', '2019-12-28', '2019-12-19 10:56:14', '2019-12-19 10:59:20'),
(3, 'p001', 'Network', 'Unsil', 'Hauu', '2019-12-25', '2019-12-28', '2019-12-19 11:20:32', '2019-12-19 11:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dewi Wulan Sari', 'dewiws27@gmail.com', NULL, '$2y$10$V8bjzeNC0Nb9R87ceJQvj.ncwa/u7AnBJN.RmYzcBd69wpUBR1zMy', 'RCLobuvJuzLPAvpVYoM2dNf0dWGUwoZH9hCpBkidJa8zwCC9idM8RNmKCsFA', '2019-12-13 00:46:44', '2019-12-13 00:46:44'),
(2, 'ADMIN', 'admin@admin.com', NULL, '$2y$10$YKuuo2teblcouuJqm76h2eKzI2Ibujz/CvgpgebirItXrbNG7TZdm', NULL, '2019-12-19 11:11:37', '2019-12-19 11:11:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`);

--
-- Indexes for table `pegawai_pelatihan`
--
ALTER TABLE `pegawai_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
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
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pegawai_pelatihan`
--
ALTER TABLE `pegawai_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
