-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 06:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem_stb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_bem`
--

CREATE TABLE `anggota_bem` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `gambar_anggota` longtext NOT NULL,
  `posisi_anggota` varchar(100) NOT NULL,
  `jabatan_anggota` varchar(100) NOT NULL,
  `jurusan_anggota` varchar(100) NOT NULL,
  `angkatan_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota_bem`
--

INSERT INTO `anggota_bem` (`id_anggota`, `nama_anggota`, `gambar_anggota`, `posisi_anggota`, `jabatan_anggota`, `jurusan_anggota`, `angkatan_anggota`) VALUES
(1, 'Khafid Ilhan Al-Manjiz', '/asets/images/IMG_0001.JPG', 'PRESIDEN MAHASISWA', 'PRESIDEN MAHASISWA', 'INFORMATIKA', 2022),
(2, 'Rasyid Naufal Saputra', '/asets/images/IMG_0001.JPG', 'WAKIL PRESIDEN MAHASISWA', 'WAKIL PRESIDEN MAHASISWA', 'INFORMATIKA', 2022),
(3, 'Ayu Wira Safitri', '/asets/images/IMG_0001.JPG', 'SEKRETARIS', 'SEKRETARIS 1', 'INFORMATIKA', 2022),
(4, 'Sukainah Khanum', '/asets/images/IMG_0001.JPG', 'SEKRETARIS', 'SEKRETARIS 2', 'INFORMATIKA', 2022),
(5, 'Irna Sofiyawati', '/asets/images/IMG_0001.JPG', 'BENDAHARA', 'BENDAHARA 1', 'INFORMATIKA', 2022),
(6, 'Shintya Wahyu Ramadhan', '/asets/images/IMG_0001.JPG', 'BENDAHARA', 'BENDAHARA 2', 'INFORMATIKA', 2022),
(7, 'Fegi Lutfiantoro', '/asets/images/IMG_0001.JPG', 'PENGEMBANGAN SUMBER DAYA MANUSIA', 'MENTERI PSDM', 'INFORMATIKA', 2022),
(8, 'Agus Rianto', '/asets/images/IMG_0001.JPG', 'PENGEMBANGAN SUMBER DAYA MANUSIA', 'PSDM', 'INFORMATIKA', 2022),
(9, 'Atik Nurkhayati', '/asets/images/IMG_0001.JPG', 'PENGEMBANGAN SUMBER DAYA MANUSIA', 'PSDM', 'INFORMATIKA', 2022),
(10, 'Al Wahab Abdul Ghozin Muslimin', '/asets/images/IMG_0001.JPG', 'PENGEMBANGAN SUMBER DAYA MANUSIA', 'PSDM', 'INFORMATIKA', 2022),
(11, 'Amelia Ramadhani', '/asets/images/IMG_0001.JPG', 'PENGEMBANGAN SUMBER DAYA MANUSIA', 'PSDM', 'INFORMATIKA', 2022),
(12, 'Anas Tri Setyo', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'MENTERI LSM', 'INFORMATIKA', 2022),
(13, 'Agustian Maolana Ibrohin', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'HUMAS', 'INFORMATIKA', 2022),
(14, 'Yayan Multasa\'Ali', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'HUMAS', 'INFORMATIKA', 2022),
(15, 'Riska Apriliana', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'HUMAS', 'INFORMATIKA', 2022),
(16, 'Agus Ungguh Setiadi', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'HUMAS', 'INFORMATIKA', 2022),
(17, 'Dika', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'HUMAS', 'INFORMATIKA', 2022),
(18, 'Miftah Dwi Yulianingsih', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'KEAGAMAAN', 'INFORMATIKA', 2022),
(19, 'Wike Nurhidayah', '/asets/images/IMG_0001.JPG', 'LEMBAGA SOSIAL MASYARAKAT', 'KEAGAMAAN', 'INFORMATIKA', 2022),
(20, 'Moh. Afif Septianto', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', 'MENTERI KOMINFO', 'INFORMATIKA', 2022),
(21, 'Sindi Prasetiyani', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', 'MULTIMEDIA', 'INFORMATIKA', 2022),
(22, 'Imam nurfalah', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', 'MULTIMEDIA', 'INFORMATIKA', 2022),
(23, 'Yuniarti', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', 'SOSIAL MEDIA', 'INFORMATIKA', 2022),
(24, 'Ana Fadilah', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', 'SOSIAL MEDIA', 'INFORMATIKA', 2022),
(25, 'Wagimin', '/asets/images/IMG_0001.JPG', 'SENI BUDAYA DAN OLAHRAGA', 'MENTERI SENBORA', 'INFORMATIKA', 2022),
(26, 'Bagas Saputra', '/asets/images/IMG_0001.JPG', 'SENI BUDAYA DAN OLAHRAGA', 'SENBORA', 'INFORMATIKA', 2022),
(27, 'Riska Damayanti', '/asets/images/IMG_0001.JPG', 'SENI BUDAYA DAN OLAHRAGA', 'SENBORA', 'INFORMATIKA', 2022),
(28, 'Sefa Wahyu Safitri', '/asets/images/IMG_0001.JPG', 'SENI BUDAYA DAN OLAHRAGA', 'SENBORA', 'INFORMATIKA', 2022),
(29, 'Riyan Nur Muarif', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN LUAR NEGERI', 'MENTERI KEMENLU', 'INFORMATIKA', 2022),
(30, 'Erlunsya Rizqi Hidayatullah', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN LUAR NEGERI', 'KEMENLU', 'INFORMATIKA', 2022),
(31, 'Anzalna Fresky', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN LUAR NEGERI', 'KEMENLU', 'INFORMATIKA', 2022),
(32, 'Sultan', '/asets/images/IMG_0001.JPG', 'KEMENTRIAN LUAR NEGERI', 'KEMENLU', 'INFORMATIKA', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departemen_bem`
--

CREATE TABLE `departemen_bem` (
  `id_departemen` int(11) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `gambar_departemen` longtext NOT NULL,
  `proker_departemen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen_bem`
--

INSERT INTO `departemen_bem` (`id_departemen`, `departemen`, `nama_departemen`, `gambar_departemen`, `proker_departemen`) VALUES
(1, 'PSDM', 'PENGEMBANGAN SUMBER DAYA MANUSIA', '/asets/images/KOMINFO.jpg', 'Tahunan\r\n-  Membuat Video Profil BEM\r\n-  Membuat web BEM\r\n-  Mengadakan lomba design online\r\n\r\nBulanan\r\n-  Design rutin konten sosmed\r\n-  Cari cara supaya insight ig BEM naik\r\n-  Give Away\r\n\r\nMenyesuaikan\r\n-  Dokumentasi Setiap Kegiatan'),
(2, 'LSM', 'LEMBAGA SOSIAL MASYARAKAT', '/asets/images/KOMINFO.jpg', 'Tahunan\r\n-  Membuat Video Profil BEM\r\n-  Membuat web BEM\r\n-  Mengadakan lomba design online\r\n\r\nBulanan\r\n-  Design rutin konten sosmed\r\n-  Cari cara supaya insight ig BEM naik\r\n-  Give Away\r\n\r\nMenyesuaikan\r\n-  Dokumentasi Setiap Kegiatan'),
(3, 'KOMINFO', 'KEMENTRIAN KOMUNIKASI DAN INFORMASI', '/asets/images/KOMINFO.jpg', 'Tahunan\r\n-  Membuat Video Profil BEM\r\n-  Membuat web BEM\r\n-  Mengadakan lomba design online\r\n\r\nBulanan\r\n-  Design rutin konten sosmed\r\n-  Cari cara supaya insight ig BEM naik\r\n-  Give Away\r\n\r\nMenyesuaikan\r\n-  Dokumentasi Setiap Kegiatan'),
(4, 'SENBORA', 'SENI BUDAYA DAN OLAHRAGA', '/asets/images/KOMINFO.jpg', 'Tahunan\r\n-  Membuat Video Profil BEM\r\n-  Membuat web BEM\r\n-  Mengadakan lomba design online\r\n\r\nBulanan\r\n-  Design rutin konten sosmed\r\n-  Cari cara supaya insight ig BEM naik\r\n-  Give Away\r\n\r\nMenyesuaikan\r\n-  Dokumentasi Setiap Kegiatan'),
(5, 'KEMENLU', 'KEMENTRIAN LUAR NEGERI\r\n', '/asets/images/KOMINFO.jpg', 'Tahunan\r\n-  Membuat Video Profil BEM\r\n-  Membuat web BEM\r\n-  Mengadakan lomba design online\r\n\r\nBulanan\r\n-  Design rutin konten sosmed\r\n-  Cari cara supaya insight ig BEM naik\r\n-  Give Away\r\n\r\nMenyesuaikan\r\n-  Dokumentasi Setiap Kegiatan');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi_bem`
--

CREATE TABLE `dokumentasi_bem` (
  `id_dokumentasi` int(11) NOT NULL,
  `nama_dokumentasi` varchar(100) NOT NULL,
  `waktu_dokumentasi` datetime NOT NULL,
  `gambar_dokumentasi` longtext NOT NULL,
  `deskripsi_dokumentasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumentasi_bem`
--

INSERT INTO `dokumentasi_bem` (`id_dokumentasi`, `nama_dokumentasi`, `waktu_dokumentasi`, `gambar_dokumentasi`, `deskripsi_dokumentasi`) VALUES
(1, 'Nama kegiatan 1', '2024-05-07 14:26:08', 'http://127.0.0.1:8000/asets/images/WhatsApp%20Image%202024-03-10%20at%2010.49.13.jpeg', 'To sort everything out, it is worth mentioning that the internal resources has common features with The Attitude of Cognitive Dimension\r\n(Avery Pantoja in The Book of the Constructive Criticism)\r\n\r\nLink Dokumentasi :\r\nhttps://drive.google.com/drive/u/2/folders/1DS7twClvqweuuqnxtf0eaashJJTnAM\r\nhttps://drive.google.com/drive/u/2/folders/1DS7twClvqweuuqnxtf0eaashJJTnAM\r\n          '),
(2, 'Nama kegiatan 2', '2024-05-07 16:26:08', 'http://127.0.0.1:8000/asets/images/WhatsApp%20Image%202024-03-10%20at%2010.49.13.jpeg', 'To sort everything out, it is worth mentioning that the internal resources has common features with The Attitude of Cognitive Dimension\r\n(Avery Pantoja in The Book of the Constructive Criticism)\r\n\r\nLink Dokumentasi :\r\nhttps://drive.google.com/drive/u/2/folders/1DS7twClvqweuuqnxtf0eaashJJTnAM\r\nhttps://drive.google.com/drive/u/2/folders/1DS7twClvqweuuqnxtf0eaashJJTnAM\r\n          ');

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
-- Table structure for table `informasi_bem`
--

CREATE TABLE `informasi_bem` (
  `id_informasi` int(11) NOT NULL,
  `nama_informasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_informasi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi_bem`
--

INSERT INTO `informasi_bem` (`id_informasi`, `nama_informasi`, `isi_informasi`) VALUES
(1, 'Sambutan Presiden Mahasiswa', 'To put it mildly, a surprising flexibility in a description of the bilateral act the independent knowledge.'),
(2, 'VISI', 'In a word, the example of the strategic decisions can partly be used for The Metaphor of Evident Base (Bart Calhoun in The Book of the Preliminary Network Design) In a loose sense an basic component of within the framework of the technical requirements should correlate with the positive influence of any ability bias.\r\nThere is no doubt, that Santiago Beattie is the firs person who formulated that details of the skills involves some problems with the strategic decisions. The development sequence turns it into something formally real.\r\nOne should, however, not forget that the patterns of the formal action the minor details of referential arguments the sustainability of the project and the conceptual design.'),
(3, 'MISI', 'it is very clear from these observations that violations of the internal policy provides rich insights into The Content of Early Formula (Calvin Block in The Book of the Consequential Risks) However, we can also agree that dimensions of the criterion makes no difference to the quality guidelines. Thus a complete understanding is missing.\r\nThe majority of examinations of the crucial impacts show that either major area of expertise or strategic decisions involves some problems with the entire picture.\r\nWhat is more, the edge of the essential component provides a deep insight into the entire picture.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JVBkqVIRr6fPAyZmp5VeL5CQJH3oDAEusP1chZxV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXJhb2M1WDlJdERzVklja2RUaDZkR1VxVGhTblBweHFlMkFwUEpmYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb2t1bWVudGFzaS9OYW1hJTIwa2VnaWF0YW4lMjAyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715095150),
('oJKezNKMKsJkidX5BKBaxF67mQSlbfglVT8WzwjV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3lKSzdFdm5zNGg0RmtSRDJ0ZW9ERzFGdTZJdktFTTVlZDZBN29UTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9ncmFtLWtlcmphL0tPTUlORk8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714902200);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_bem`
--
ALTER TABLE `anggota_bem`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departemen_bem`
--
ALTER TABLE `departemen_bem`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `dokumentasi_bem`
--
ALTER TABLE `dokumentasi_bem`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi_bem`
--
ALTER TABLE `informasi_bem`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `anggota_bem`
--
ALTER TABLE `anggota_bem`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `departemen_bem`
--
ALTER TABLE `departemen_bem`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dokumentasi_bem`
--
ALTER TABLE `dokumentasi_bem`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
