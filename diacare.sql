-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2023 at 04:11 AM
-- Server version: 10.6.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u875987994_diacare`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose_results`
--

CREATE TABLE `diagnose_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnose_results`
--

INSERT INTO `diagnose_results` (`id`, `created_at`, `updated_at`, `user_id`, `result`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 'Diabetes Gestational'),
(2, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Negative'),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Diabetes Gestational'),
(4, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Diabetes Mellitus 1'),
(5, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Diabetes Mellitus 2'),
(7, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Negative'),
(8, '2023-05-21 17:41:36', '2023-05-21 17:41:36', 1, 'Negative'),
(9, '2023-05-21 17:41:56', '2023-05-21 17:41:56', 1, 'Diabetes Mellitus 1'),
(11, '2023-05-21 17:42:40', '2023-05-21 17:42:40', 1, 'Diabetes Gestational'),
(12, '2023-05-21 17:43:11', '2023-05-21 17:43:11', 1, 'Diabetes Mellitus 2'),
(14, '2023-05-21 17:43:59', '2023-05-21 17:43:59', 1, 'Negative'),
(19, '2023-05-22 13:53:05', '2023-05-22 13:53:05', 4, 'Negative'),
(20, '2023-05-22 14:01:32', '2023-05-22 14:01:32', 4, 'Negative'),
(21, '2023-05-22 14:19:06', '2023-05-22 14:19:06', 5, 'Diabetes Mellitus 1'),
(22, '2023-05-22 14:22:25', '2023-05-22 14:22:25', 6, 'Diabetes Mellitus 2'),
(23, '2023-05-22 14:23:57', '2023-05-22 14:23:57', 7, 'Diabetes Gestational'),
(25, '2023-05-26 15:40:42', '2023-05-26 15:40:42', 12, 'Diabetes Mellitus 1'),
(26, '2023-05-26 15:41:31', '2023-05-26 15:41:31', 11, 'Negative'),
(29, '2023-05-26 15:52:58', '2023-05-26 15:52:58', 13, 'Negative'),
(30, '2023-05-26 15:54:34', '2023-05-26 15:54:34', 13, 'Diabetes Mellitus 1'),
(31, '2023-05-26 16:06:52', '2023-05-26 16:06:52', 14, 'Negative'),
(32, '2023-05-26 16:07:48', '2023-05-26 16:07:48', 15, 'Negative'),
(33, '2023-05-26 16:23:04', '2023-05-26 16:23:04', 16, 'Negative'),
(34, '2023-05-26 16:34:31', '2023-05-26 16:34:31', 17, 'Negative'),
(35, '2023-05-26 16:42:42', '2023-05-26 16:42:42', 18, 'Negative'),
(36, '2023-05-26 16:43:16', '2023-05-26 16:43:16', 18, 'Negative'),
(37, '2023-05-26 16:43:47', '2023-05-26 16:43:47', 18, 'Negative'),
(38, '2023-05-26 17:34:32', '2023-05-26 17:34:32', 19, 'Negative'),
(39, '2023-05-26 17:59:20', '2023-05-26 17:59:20', 21, 'Negative'),
(40, '2023-05-26 18:39:18', '2023-05-26 18:39:18', 22, 'Negative'),
(41, '2023-05-26 18:59:01', '2023-05-26 18:59:01', 24, 'Negative'),
(42, '2023-05-26 23:27:03', '2023-05-26 23:27:03', 25, 'Negative'),
(43, '2023-05-27 12:58:12', '2023-05-27 12:58:12', 26, 'Negative'),
(44, '2023-05-27 13:00:12', '2023-05-27 13:00:12', 26, 'Negative'),
(45, '2023-05-27 13:09:50', '2023-05-27 13:09:50', 1, 'Negative'),
(46, '2023-05-27 13:12:33', '2023-05-27 13:12:33', 26, 'Negative'),
(47, '2023-05-27 19:46:08', '2023-05-27 19:46:08', 27, 'Negative'),
(48, '2023-05-27 01:55:48', '2023-05-27 01:55:48', 28, 'Diabetes Mellitus 1'),
(49, '2023-05-27 01:58:44', '2023-05-27 01:58:44', 29, 'Negative'),
(50, '2023-05-28 02:04:33', '2023-05-28 02:04:33', 29, 'Diabetes Mellitus 1'),
(51, '2023-05-27 08:12:12', '2023-05-27 08:12:12', 30, 'Diabetes Mellitus 2'),
(52, '2023-05-27 08:15:59', '2023-05-27 08:15:59', 31, 'Negative'),
(53, '2023-05-27 08:21:40', '2023-05-27 08:21:40', 33, 'Negative'),
(54, '2023-05-27 08:25:32', '2023-05-27 08:25:32', 34, 'Diabetes Mellitus 2'),
(55, '2023-05-27 08:30:35', '2023-05-27 08:30:35', 35, 'Diabetes Mellitus 2'),
(56, '2023-05-27 08:34:46', '2023-05-27 08:34:46', 36, 'Diabetes Mellitus 2'),
(57, '2023-05-28 08:39:29', '2023-05-28 08:39:29', 37, 'Negative'),
(58, '2023-05-28 08:46:46', '2023-05-28 08:46:46', 38, 'Diabetes Mellitus 2'),
(59, '2023-05-28 08:55:37', '2023-05-28 08:55:37', 39, 'Negative'),
(60, '2023-05-28 10:36:46', '2023-05-28 10:36:46', 40, 'Diabetes Mellitus 2'),
(61, '2023-05-28 12:35:24', '2023-05-28 12:35:24', 42, 'Negative'),
(62, '2023-05-28 12:36:58', '2023-05-28 12:36:58', 43, 'Negative'),
(63, '2023-05-28 12:45:43', '2023-05-28 12:45:43', 44, 'Diabetes Mellitus 2'),
(64, '2023-05-28 12:47:51', '2023-05-28 12:47:51', 45, 'Negative'),
(65, '2023-05-28 13:16:36', '2023-05-28 13:16:36', 46, 'Diabetes Mellitus 2'),
(66, '2023-05-28 13:23:53', '2023-05-28 13:23:53', 5, 'Negative'),
(67, '2023-05-28 13:27:17', '2023-05-28 13:27:17', 47, 'Negative'),
(68, '2023-05-28 13:28:16', '2023-05-28 13:28:16', 47, 'Diabetes Mellitus 2'),
(69, '2023-05-28 13:29:53', '2023-05-28 13:29:53', 48, 'Negative'),
(70, '2023-05-28 13:53:41', '2023-05-28 13:53:41', 49, 'Negative'),
(71, '2023-05-28 14:03:29', '2023-05-28 14:03:29', 50, 'Negative'),
(72, '2023-05-28 14:37:57', '2023-05-28 14:37:57', 51, 'Negative'),
(73, '2023-05-28 14:41:48', '2023-05-28 14:41:48', 53, 'Negative'),
(74, '2023-05-28 14:49:43', '2023-05-28 14:49:43', 54, 'Negative'),
(75, '2023-05-29 09:40:32', '2023-05-29 09:40:32', 56, 'Negative'),
(76, '2023-05-29 09:42:41', '2023-05-29 09:42:41', 56, 'Negative'),
(77, '2023-05-29 15:10:42', '2023-05-29 15:10:42', 17, 'Negative'),
(78, '2023-05-29 16:21:41', '2023-05-29 16:21:41', 57, 'Negative'),
(79, '2023-05-29 22:12:01', '2023-05-29 22:12:01', 58, 'Negative'),
(80, '2023-05-29 22:45:35', '2023-05-29 22:45:35', 59, 'Negative'),
(81, '2023-05-31 09:09:27', '2023-05-31 09:09:27', 60, 'Negative'),
(82, '2023-06-01 14:34:28', '2023-06-01 14:34:28', 61, 'Negative'),
(83, '2023-06-01 14:36:36', '2023-06-01 14:36:36', 61, 'Negative'),
(84, '2023-06-10 00:42:26', '2023-06-10 00:42:26', 62, 'Negative'),
(105, '2023-06-13 21:28:58', '2023-06-13 21:28:58', 62, 'Negative'),
(110, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(111, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(112, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(113, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(114, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(115, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(116, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(117, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(118, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(119, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(120, '2023-06-14 10:20:34', '2023-06-14 10:20:34', 75, 'Diabetes Mellitus 2'),
(121, '2023-06-14 10:20:35', '2023-06-14 10:20:35', 75, 'Diabetes Mellitus 2'),
(122, '2023-06-14 10:26:08', '2023-06-14 10:26:08', 1, 'Diabetes Z'),
(123, '2023-06-19 18:34:09', '2023-06-19 18:34:09', 76, 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(50) NOT NULL,
  `diseases_code` varchar(10) NOT NULL,
  `diseases` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `created_at`, `updated_at`, `img`, `diseases_code`, `diseases`, `type`, `description`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-26 15:32:37', 'https://source.unsplash.com/-mMoKrWFBjw', 'P00', 'Negative', 'Negative', 'You don\'t have diabetes mellitus.'),
(2, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'P01', 'Diabetes Mellitus 1', 'Type 1', 'Type 1 diabetes is thought to be caused by an autoimmune reaction (the body attacks itself by mistake). This reaction stops your body from making insulin. <br> Approximately 5-10% of the people who have diabetes have type 1. Symptoms of type 1 diabetes often develop quickly. It’s usually diagnosed in children, teens, and young adults. If you have type 1 diabetes, you’ll need to take insulin every day to survive.'),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'P02', 'Diabetes Mellitus 2', 'Type 2', 'With type 2 diabetes, your body doesn’t use insulin well and can’t keep blood sugar at normal levels. About 90-95% of people with diabetes have type 2. It develops over many years and is usually diagnosed in adults (but more and more in children, teens, and young adults). You may not notice any symptoms, so it’s important to get your blood sugar tested if you’re at risk.'),
(4, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'P03', 'Diabetes Gestational', 'Gestational', 'Gestational diabetes develops in pregnant women who have never had diabetes. If you have gestational diabetes, your baby could be at higher risk for health problems. Gestational diabetes usually goes away after your baby is born. However, it increases your risk for type 2 diabetes later in life. Your baby is more likely to have obesity as a child or teen and develop type 2 diabetes later in life.');

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
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `composition` varchar(100) NOT NULL,
  `dose` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `created_at`, `updated_at`, `disease_id`, `name`, `img`, `description`, `composition`, `dose`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Insulin Basal', 'https://source.unsplash.com/w8p9cQDLX7I', 'Insulin Basal merupakan jenis insulin kerja menengah atau long-acting insulin, merupakan jenis insulin yang umumnya diberikan kepada penderita diabetes yang baru pertama kali menggunakan insulin.', 'Insulin Degludec dan Insulin Glargine U-300.', 'diberikan satu kali injeksi pada saat setelah makan dalam sehari.'),
(2, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Insulin Pradinal', 'https://source.unsplash.com/w8p9cQDLX7I', 'Insulin Prandial merupakan jenis insulin kerja sangat cepat diindikasikan pada pasien dengan kadar HbA1c tetap tinggi meskipun mencapai kadar glukosa puasa dengan menggunakan insulin basal.', 'Insulin Lispro, Insulin Aspart, dan Insulin Glulisine.', 'diberikan satu kali injeksi dalam sehari.'),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Insulin Premix', 'https://source.unsplash.com/w8p9cQDLX7I', 'Insulin Premixed merupakan jenis insulin campuran yaitu campuran fixed insulin Basal dan Prandial.', 'Insulin Degludeg dan Insulin Aspart.', 'diberikan dua kali injeksi dalam sehari.'),
(4, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Norizec', 'https://source.unsplash.com/w8p9cQDLX7I', 'NORIZEC TABLET merupakan obat anti diabetes mengandung Glimepiride yang termasuk ke dalam golongan sulfonilurea. Norizec digunakan sebagai obat anti diabetes mellitus tipe 2 atau Non-Insulin-Dependent (type II) Diabetes Melitus (NIDDM) dimana kadar glukosa darah tidak dapat hanya dikontrol dengan diet dan olahraga saja.', 'Setiap kaplet mengandung Glimepiride 2 mg.', 'Dosis awal: 1-2 mg, satu kali sehari - Dosis pemeliharaan: 1-4 mg, satu kali sehari, dosis maksimum 8 mg.'),
(5, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Acarbose', 'https://source.unsplash.com/w8p9cQDLX7I', 'ACARBOSE TABLET merupakan obat yang digunakan untuk pasien diabetes melitus yang tidak dapat diatur hanya dengan diet saja. Obat ini termasuk dalam golongan penghambat alfa glukosidase dan bekerja dengan cara memperlambat penyerapan glukosa dalam usus halus, sehingga memberikan efek menurunkan kadar glukosa darah sesudah makan.', 'Setiap kaplet mengandung Acarbose 100 mg.', 'Dosis awal: 3 kali sehari 50 mg. Dosis selanjutnya: 3 kali sehari 100-200 mg.'),
(6, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Galvusmet', 'https://source.unsplash.com/w8p9cQDLX7I', 'Galvusmet adalah obat yang mengandung zat aktif Vildagliptin dan Metformin HCl.Metformin adalah agen antidiabetes biguanide yang mengurangi produksi glukosa hati melalui penghambatan glukoneogenesis dan glikogenolisis, meningkatkan pemanfaatan perifer dan penyerapan glukosa dengan meningkatkan sensitivitas insulin, dan menunda penyerapan glukosa usus.', 'Setiap kaplet mengandung Vildagliptin 50 mg, Metformin HCl 850 mg.', 'Dewasa : 2 kali sehari 1 tablet (pagi dan sore).'),
(7, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Pioglitazone', 'https://source.unsplash.com/w8p9cQDLX7I', 'PIOGLITAZONE merupakan obat yang digunakan untuk menangani penyakit diabetes tipe 2. Obat ini digunakan sebagai terapi kombinasi dengan sulfonilurea atau metformin pada pasien diabetes melitus tipe 2 yang tidak terkontrol dengan monoterapi sulfonilurea dan metformin.', 'Setiap kaplet mengandung Pioglitazone HCl 30 mg', 'Monoterapi : 15 atau 30 mg sekali sehari. Kombinasi dengan Metformin atau Sulfonilurea : 15 atau 30 mg sekali sehari.'),
(8, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Diamicron', 'https://source.unsplash.com/w8p9cQDLX7I', 'DIAMICRON MR TABLET merupakan sediaan tablet Modified Relesase dengan kandungan Gliclazide yang termasuk dalam obat anti diabetes golongan sulfonilurea. Obat ini digunakan pada pasien Diabetes Melitus tipe 2 atau Non-Insulin-Dependent (type II).', 'Setiap kaplet mengandung Gliclazide 60 mg.', 'Dosis dapat diawali dengan 30 mg per hari dan dapat ditingkatkan hingga dosis maksimum 120 mg per hari.'),
(9, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 'Metformin', 'https://source.unsplash.com/w8p9cQDLX7I', 'Obat antidiabetes generik yang dapat mengontrol dan menurunkan kadar gula darah pada penderita diabetes tipe gestasional. Metformin termasuk ke dalam obat antidiabetes golongan Biguanide, yang bekerja dengan cara menghambat produksi glukosa (glukoneogenesis) di hati. Metformin juga bekerja dengan memperbaiki sensitivitas insulin dengan cara meningkatkan ambilan dan penggunaan glukosa di jaringan perifer.', 'Setiap kaplet mengandung Metformin 500 mg.', 'Sehari 2 x 500 mg atau 2 x 850 mg. Dosis dapat ditingkatkan sesuai dengan respon pasien. Dosis maksimal 3000 mg/hari.'),
(10, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 'Glibenclamide', 'https://source.unsplash.com/w8p9cQDLX7I', 'obat anti diabetes tipe gestasional yang termasuk golongan sulfonilurea. glibenclamide menurunkan kadar gula darah dengan cara meningkatkan kalsium intraseluler dalam sel beta pankreas sehingga menstimulasi produksi insulin. Glibenclamide da[at di gunakan sebagai terapi tunggal atau kombinasi dengan obat anti diabetes oral lainnya.', 'Setiap kaplet mengandung Glibenclamide 5 mg.', 'Dosis awal 1 kaptab sehari sesudah makan pagi, setiap 7 hari ditingkatkan dengan 1/2 - 1 kaptab sehari sampai kontrol metabolit optimal tercapai.');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_31_065211_create_symptoms_table', 1),
(6, '2023_03_31_073036_create_diseases_table', 1),
(7, '2023_03_31_083512_create_medicines_table', 1),
(8, '2023_04_24_072240_create_rules_table', 1),
(9, '2023_05_10_063722_create_solutions_table', 1),
(10, '2023_05_11_102512_create_diagnose_results_table', 1);

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
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `symptom_id` bigint(20) UNSIGNED NOT NULL,
  `rule_value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `created_at`, `updated_at`, `disease_id`, `symptom_id`, `rule_value`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 1, 0),
(2, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 2, 0),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 3, 0),
(4, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 4, 0),
(5, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 5, 0),
(6, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 6, 0),
(7, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 7, 0),
(8, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 8, 0),
(9, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 9, 0),
(10, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 10, 0),
(11, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 1, 11, 0),
(12, '2023-05-21 12:54:46', '2023-05-24 13:26:36', 1, 12, 0),
(13, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 1, 1),
(14, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 2, 0),
(15, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 3, 0),
(16, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 4, 0),
(17, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 5, 1),
(18, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 6, 1),
(19, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 7, 1),
(20, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 8, 1),
(21, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 9, 0),
(22, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 10, 0),
(23, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 11, 0),
(24, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 12, 1),
(25, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 1, 0),
(26, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 2, 0),
(27, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 3, 0),
(28, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 4, 1),
(29, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 5, 1),
(30, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 6, 1),
(31, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 7, 1),
(32, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 8, 1),
(33, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 9, 0),
(34, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 10, 1),
(35, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 11, 1),
(36, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 12, 1),
(37, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 1, 0),
(38, '2023-05-21 12:54:46', '2023-05-21 17:08:40', 4, 2, 1),
(39, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 3, 1),
(40, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 4, 0),
(41, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 5, 1),
(42, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 6, 1),
(43, '2023-05-21 12:54:46', '2023-05-21 17:08:40', 4, 7, 1),
(44, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 8, 1),
(45, '2023-05-21 12:54:46', '2023-05-21 17:08:40', 4, 9, 1),
(46, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 10, 0),
(47, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 11, 0),
(48, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `solution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `created_at`, `updated_at`, `disease_id`, `solution`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.'),
(2, '2023-05-21 12:54:46', '2023-05-26 15:34:57', 2, 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.'),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 2, 'Eat foods with more fiber, such as whole grain cereals, breads, crackers, rice, or pasta.'),
(4, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.'),
(5, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.'),
(6, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Drink water instead of juice and regular soda.'),
(7, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 3, 'Work out at least 150 minutes of exercise each week, divided into 5 sessions or days, 30 minutes per session. Use stretch bands, do yoga, heavy gardening (digging and planting with tools), or try push-ups.'),
(8, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 4, 'Choose foods such as fruits, vegetables, whole grains, bread and cereals, and low-fat or skim milk and cheese.');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `symptoms_code` varchar(30) NOT NULL,
  `symptoms` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `created_at`, `updated_at`, `symptoms_code`, `symptoms`) VALUES
(1, '2023-05-21 12:54:46', '2023-05-26 15:31:34', 'G01', 'Apakah umur anda dibawah 17 tahun?'),
(2, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G02', 'Apakah anda sedang hamil?'),
(3, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G03', 'Apakah mata anda sering kelelahan?'),
(4, '2023-05-21 12:54:46', '2023-05-28 02:12:06', 'G04', 'Apakah anda sedang mengalami obesitas?'),
(5, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G05', 'Apakah anda mudah merasa haus (polydipsi)?'),
(6, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G06', 'Apakah anda mudah merasa lapar (polifagia)?'),
(7, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G07', 'Apakah anda sering buang air kecil (polipuria)?'),
(8, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G08', 'Apakah anda sering mengalami kesemutan?'),
(9, '2023-05-21 12:54:46', '2023-05-28 02:12:34', 'G09', 'Apakah anda sering mengalami pusing?'),
(10, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G10', 'Apakah anda pernah mengalami rasa gatal disekitar kemaluan?'),
(11, '2023-05-21 12:54:46', '2023-06-14 10:42:05', 'G11', 'Apakah anda sering mengalami diare? x'),
(12, '2023-05-21 12:54:46', '2023-05-21 12:54:46', 'G12', 'Apakah luka yang anda alami sungkar sembuh?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2a$12$doLoRLYBa9s2yXMbQzRo0OqwOVKvWd3szEf9biM7eb3JIl6ymQhM6', 1, NULL, '2023-05-21 12:54:46', '2023-05-21 12:54:46'),
(2, 'vincent', 'vincent@gmail.com', '$2y$10$6x8HD4IrTpk2c43zIBctuuimLjcJxkIJCHqJ/WMX8Ze9Ga1y8E73G', 0, NULL, '2023-05-21 12:54:46', '2023-05-21 12:54:46'),
(3, 'rucci', 'rucci@gmail.com', '$2y$10$pHjNYKmH/c5G.dYyqHU3o.UNmeiLEW/2gGfZ5yTbqCDAuXhNwxGFe', 0, NULL, '2023-05-21 12:54:46', '2023-05-21 12:54:46'),
(4, 'darren', 'darren@gmail.com', '$2y$10$OB44MVhg8E4uOooSUzRlseFapgB2l3wODdwOadhPLNSeH3VfgFJUy', 0, NULL, '2023-05-21 12:54:46', '2023-05-21 12:54:46'),
(5, 'martin', 'martin@gmail.com', '$2y$10$J16dXsmAp4eSGmVJ64d2je2gcXNNGTryzQRKaamfwRxQ/brohvGB2', 0, NULL, '2023-05-22 14:18:35', '2023-05-22 14:18:35'),
(6, 'jason', 'jason@gmail.com', '$2y$10$M9KqfwNHvrJRGX7bsA8AtuaFxESc2QpyEqy6YBAro7drjnT3/e8oS', 0, NULL, '2023-05-22 14:21:51', '2023-05-22 14:21:51'),
(7, 'leonardo', 'leonardo@gmail.com', '$2y$10$xdzStnyVP6EpNYD77NHn4uy1tYCsphiyZTu98A4TsF2R/pFXvb5Ba', 0, NULL, '2023-05-22 14:23:01', '2023-05-22 14:23:01'),
(11, 'Leonardo Steven', 'leonardosteven050@gmail.com', '$2y$10$kGulfwgx7zHqDWBVmLJSoOqRl6GirJ.gx/BgNrE6xD4jc6.vXKFP2', 0, NULL, '2023-05-26 15:39:03', '2023-05-26 15:39:03'),
(12, 'Ping', 'hernando.martin23@gmail.com', '$2y$10$6ygiYyAwPrYUZHv8iODQy.MeGxsyNs0ixckSv86WNhgiYBQoH.wca', 0, NULL, '2023-05-26 15:39:11', '2023-05-26 15:39:11'),
(13, 'Andi', 'andi@gmail.com', '$2y$10$unGNnIEkjHmsoPcTiScV9OO8ixUT6ATqYkO.b/6oz3aOAULb6aZFS', 0, NULL, '2023-05-26 15:52:06', '2023-05-26 15:52:06'),
(14, 'Cinthya', 'cinthya@student.umn.ac.id', '$2y$10$j7IxWnS85akbjZPFbZ4jN.UWS.IvpPJiJz.XDAVDmT0gJ6la8omAy', 0, NULL, '2023-05-26 16:05:59', '2023-05-26 16:05:59'),
(15, 'bambang', 'qwert@gmail.com', '$2y$10$0xRAtHsDc3n.UQrE/xGB/uetVUfWDPHyZ.okEhsWTHJ4yl.jzMUWu', 0, NULL, '2023-05-26 16:06:03', '2023-05-26 16:06:03'),
(16, 'oktavia', 'oktavia.lindari10@gmail.com', '$2y$10$Il4sffeF455nJDMts0tUGeDZJUqRqZbXd215KKL4WCazZROrvb0l2', 0, NULL, '2023-05-26 16:21:59', '2023-05-26 16:21:59'),
(17, 'Hansel Ricardo', 'hanselricardo20@gmail.com', '$2y$10$hEruKrkhS/T03LNcseSRDu8ZO6E36gKlOkJRN7Vc0EZFXuikUvqHC', 0, NULL, '2023-05-26 16:33:48', '2023-05-26 16:33:48'),
(18, 'chika', 'chika@gmail.com', '$2y$10$OVeQ9GHr0U/KKKtigXx5a.xSsoNnh.sSELrrBCfU6eaNQnJg9jjMS', 0, NULL, '2023-05-26 16:41:52', '2023-05-26 16:41:52'),
(19, 'Umar', 'umar.haqi@student.com', '$2y$10$oKsT.j4F15KyKYEufhqOieynrhfOY7ynVCfoD1lZrIxc8lpSKd9JG', 0, NULL, '2023-05-26 17:33:00', '2023-05-26 17:33:00'),
(21, 'Ryan', 'ryanherrtanto@gmail.com', '$2y$10$s7fMgDys68ys7KcjSE1F/uyNyI1AGfP4urm5PGGN61sv1WVG5dmRi', 0, NULL, '2023-05-26 17:57:47', '2023-05-26 17:57:47'),
(22, 'inggrid widjaya', 'inggridwid45@email.com', '$2y$10$yGPMoPRhnoarKszj6SociuZ.pyCpp150Rmr25j3kh8YOB.zUGofa2', 0, NULL, '2023-05-26 18:38:23', '2023-05-26 18:38:23'),
(24, 'Audric', 'audric.lysander@student.umn.ac.id', '$2y$10$Q.oH2xOphb21We9mBz/UF.wytKBOWFRU6QHGnn5wh./a777rXrL.y', 0, NULL, '2023-05-26 18:57:49', '2023-05-26 18:57:49'),
(25, 'kristina', '123@gmail.com', '$2y$10$.Ao7/dR6QkqEuFHTQFxuqu4/RTrLWlakTvuV8QWkYY3ZFvRF929jC', 0, NULL, '2023-05-26 23:26:18', '2023-05-26 23:26:18'),
(26, 'lerucco', 'lerucco@gmail.com', '$2y$10$03u4FGed4stxUfIXe1fii.bRtbtfFK2QPLwLRncpGpGxJ8pH.V7Q.', 0, NULL, '2023-05-27 12:55:58', '2023-05-27 12:55:58'),
(27, 'Steven Yohanes', 'epen.yohanes93@gmail.com', '$2y$10$p0xJPTjj5504KZmwlxGjveZeiDZpR1WFGaNdLa051tyCPq2USWbOO', 0, NULL, '2023-05-27 18:50:07', '2023-05-27 18:50:07'),
(28, 'nicholas', 'nicholas.89@gmail.com', '$2y$10$wBiQIaFPhX243qIl3o6.4OYorVmV15FBp7p9ahYkEIF.qjLWkfcD.', 0, NULL, '2023-05-28 01:55:02', '2023-05-28 01:55:02'),
(29, 'jessyca', 'jessyca.novia@gmail.com', '$2y$10$GtAve2GvqktOhfKB/vbJsuE91wXh0fbKeZnNK8pm6A5XKtZrg37fq', 0, NULL, '2023-05-28 01:58:06', '2023-05-28 01:58:06'),
(30, 'lili', 'katarinalilisusanna@gmail.com', '$2y$10$NfHOiEsM9omj7OPoRADQ9u8EzNGryVvl4DZRDuaZtFslpCa/VrvH.', 0, NULL, '2023-05-28 08:11:24', '2023-05-28 08:11:24'),
(31, 'suwardi', 'suwardi.tan@gmail.com', '$2y$10$DQQ2VCVvTkR3ke8MBnZz7.3G29x1FyHAROo/VQQY89CRzVZrkcxyy', 0, NULL, '2023-05-28 08:15:23', '2023-05-28 08:15:23'),
(33, 'juliana', 'lilisjuliana@gmail.com', '$2y$10$qMebFl0VCdi0DDmxjk9kyewvm9i78pcq7ykjCsdZKtvKiJe1Nfibu', 0, NULL, '2023-05-28 08:20:48', '2023-05-28 08:20:48'),
(34, 'hermanto', 'hermanto.hermedy@gmail.com', '$2y$10$0f8LEtFPW77rGaojj2NAwuBypuzIFGais6kal67Waw7TjivhdpcgS', 0, NULL, '2023-05-28 08:23:50', '2023-05-28 08:23:50'),
(35, 'kelvin candiago', 'kelvincandiago11@gmail.com', '$2y$10$beCHyKFfJrvGx7nzVdEsauMPptW3dLT.XLcVs.wV2R1PBlx4pem7.', 0, NULL, '2023-05-28 08:29:52', '2023-05-28 08:29:52'),
(36, 'michael candiago', 'candiago910@gmail.com', '$2y$10$VS96WOLiatbuN1BcDwiFuekGvl1M1LRufxKwDUQf.kUdd1aWXo9ry', 0, NULL, '2023-05-28 08:33:53', '2023-05-28 08:33:53'),
(37, 'eric', 'goewin.eric@gmail.com', '$2y$10$T18EhYYo7G5F1eatJsWl4eKz33rdqqUdPDstxVwzvnrmLhPZLTn4a', 0, NULL, '2023-05-28 08:38:53', '2023-05-28 08:38:53'),
(38, 'alex', 'alex@gmail.com', '$2y$10$WjmctkLslmg7QG8UrMvuxOSY2sz5k1sMiApsDzZ.sxufov5X3q3jW', 0, NULL, '2023-05-28 08:46:14', '2023-05-28 08:46:14'),
(39, 'wendy', 'wendywendy10@gmail.com', '$2y$10$DjILm6SXYd6BIPOIshY74ewb/i1JkAeiFQLa4/0qlZxxmO1KaMmDq', 0, NULL, '2023-05-28 08:55:15', '2023-05-28 08:55:15'),
(40, 'nilson tandiono', 'nilson@gmail.com', '$2y$10$SwTtNyG.skvyUdlRn64q2uEWqIK2G67skHzBqTYRceavBXftsWr66', 0, NULL, '2023-05-28 10:35:57', '2023-05-28 10:35:57'),
(42, 'filbert', 'filbert.khouwira@umn.ac.id', '$2y$10$jqvEgn884RbTbos7qbUSMOGA97Dfa9mbx2iVYGUhrKfQ/o9FjxcyW', 0, NULL, '2023-05-28 12:34:55', '2023-05-28 12:34:55'),
(43, 'rico', 'rico.ferdinand@umn.ac.id', '$2y$10$XCBC0zOXk510CuxMlsqLTe33HVURocMh6bqtjBY70R2uCxONyU4fq', 0, NULL, '2023-05-28 12:36:36', '2023-05-28 12:36:36'),
(44, 'angel anderson', 'anderson256@gmail.com', '$2y$10$lF6fxdg2RylD2YKEhGGL7u.TfESS0DZy0WCYiIcOLxdcACX69zG9m', 0, NULL, '2023-05-28 12:45:06', '2023-05-28 12:45:06'),
(45, 'thea', 'hillary.dorothea@umn.ac.id', '$2y$10$SGx72Kqsag.b6PCJK8U.Zu61QT983V/JetZQDWFZ63hjYkZ/1F5p6', 0, NULL, '2023-05-28 12:47:27', '2023-05-28 12:47:27'),
(46, 'david h r', 'david.haryanto21@gmail.com', '$2y$10$LgraC/xxG3crAZpABbO0uencBdcMsuy20dzARaFc8VLO6h8MB2NkK', 0, NULL, '2023-05-28 13:14:03', '2023-05-28 13:14:03'),
(47, 'rachel', 'rachel1901@gmail.com', '$2y$10$AZ32rfaFu1VaOp2Qd0OnJulmynPXOqpweKzLXW/Mhx4jfjZpHpiP6', 0, NULL, '2023-05-28 13:26:48', '2023-05-28 13:26:48'),
(48, 'ericko', 'ericko@gmail.com', '$2y$10$dk0POaVonZXOW6tjV2c8GOOUh40UVwNwRkAv3Ob08/4WL.5j52Gz.', 0, NULL, '2023-05-28 13:29:27', '2023-05-28 13:29:27'),
(49, 'irfan', 'irfan@gmail.com', '$2y$10$k0.KLZxvWd8bI3gGiJcRNOIB/lnZXDqW0Aq2CK7uOsBc7Fh9Gl9Gy', 0, NULL, '2023-05-28 13:53:22', '2023-05-28 13:53:22'),
(50, 'karnedy', 'karnedy@gmail.com', '$2y$10$bTqSm2wm.O/oCA6jXATvKet/pKn4WCpgvhZdgQGhHJeYkbYvxFbOS', 0, NULL, '2023-05-28 14:03:04', '2023-05-28 14:03:04'),
(51, 'debby', 'debby@gmail.com', '$2y$10$pJ9dEIbKtkBsCfjjgIgxBeL/yeGFx6Xu6IlIF6WvWZfGECLljW/wq', 0, NULL, '2023-05-28 14:37:40', '2023-05-28 14:37:40'),
(53, 'theodora tedja', 'theodora.tedja@gmail.com', '$2y$10$2QoUAkB4kIB0OJpMWj1kJeGkrbHRfp0h9IkrJ05KUQkF95LHevl06', 0, NULL, '2023-05-28 14:41:27', '2023-05-28 14:41:27'),
(54, 'verina', 'verina@gmail.com', '$2y$10$QkJBTeCyTTCpQHKX5kXhVOsqpHdCbkLBsP78FSpNNVX87RMAIORpe', 0, NULL, '2023-05-28 14:49:22', '2023-05-28 14:49:22'),
(55, 'rucco', 'rucco@gmail.com', '$2y$10$qoJfmeCC97XxoUsEZwUfgODwAfIc50f0wQSEctYrKsxSYx8YPnQ4C', 0, NULL, '2023-05-28 16:10:02', '2023-05-28 16:10:02'),
(56, 'wewe', 'debug@gmail.com', '$2y$10$ekrdjL8ZDAtDS6GhJk.lkeMvvTNVPsziDVXMJ4EXebWVQTO15GcRa', 0, NULL, '2023-05-29 09:39:49', '2023-05-29 09:39:49'),
(57, 'Hendry', 'hendry.tjahaja@student.umn.ac.id', '$2y$10$d4GD8oSJDXS9ge4uvs70W.4fWDSjgo3SUbGoSjmj7OVoojYUT/pHu', 0, NULL, '2023-05-29 16:21:01', '2023-05-29 16:21:01'),
(58, 'Mamang gans', 'Ferdikings03@gmail.com', '$2y$10$/0DczTjrYkK3MPsqFnf4ReKLooJwuKtYqD/hGnC0lcPL.GjMc3Uhq', 0, NULL, '2023-05-29 22:10:59', '2023-05-29 22:10:59'),
(59, 'Grivia', 'grivia@gmail.com', '$2y$10$5MuFKPfKKUdPtUmEs7GcWOtiMaJyd7zytTKlAYema0dETbkEgt60q', 0, NULL, '2023-05-29 22:44:14', '2023-05-29 22:44:14'),
(60, 'Akmal', 'mcyuutogaming@gmail.com', '$2y$10$GmvEFVJXtIR8sIc0BGPj1.p.AzqqBMtLZ88NUfdUmsqr1gXSyn44K', 0, NULL, '2023-05-31 09:07:44', '2023-05-31 09:07:44'),
(61, 'ev', 'evev@gmail.com', '$2y$10$sOc7q7YGBJ34Pyn8PrqTyeRk5Thu3u233U3QrFdW8lulNFm1p3rIa', 0, NULL, '2023-06-01 14:33:28', '2023-06-01 14:33:28'),
(62, 'Adobe', 'user@gmail.com', '$2y$10$5vnbh10V0RvfLvGCwCB.u.QoZMlvb06tn0CZrfcyEYFxJxJnh84c6', 0, NULL, '2023-06-10 00:41:46', '2023-06-10 00:41:46'),
(75, 'testing12', 'testing12@gmail.com', '$2y$10$8UClaFSm93YVnzuYFO6FG.TqXjHsvQiRe3b4gDslIXt/6MYbkTsdG', 0, NULL, '2023-06-14 10:18:50', '2023-06-14 10:18:50'),
(76, 'Koukami', 'Rolandhighest@gmail.com', '$2y$10$Jzn1ccaSzLLOanM9KsSW/OJ7uA2IfbeSoHtwMmoPjV1dGbbs0U7EO', 0, NULL, '2023-06-19 18:33:16', '2023-06-19 18:33:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnose_results`
--
ALTER TABLE `diagnose_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnose_results_user_id_foreign` (`user_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_disease_id_foreign` (`disease_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_disease_id_foreign` (`disease_id`),
  ADD KEY `rules_symptom_id_foreign` (`symptom_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solutions_disease_id_foreign` (`disease_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
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
-- AUTO_INCREMENT for table `diagnose_results`
--
ALTER TABLE `diagnose_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnose_results`
--
ALTER TABLE `diagnose_results`
  ADD CONSTRAINT `diagnose_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
