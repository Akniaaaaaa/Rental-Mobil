-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 13.42
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id` int(11) NOT NULL,
  `kd_tipe` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `harga` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `kd_tipe`, `merek`, `no_plat`, `warna`, `tahun`, `status`, `gambar`, `created_at`, `updated_at`, `harga`, `nama`) VALUES
(5, 'TRD Sportivo', 'Toyota Agya', 'BD 1962 CK', 'Hitam', 2017, 'Tersedia', 'car/Hzdmq7YlMhOWsa6rR3V32y7KxAeDd1GqwfULJ7Go.jpeg', '2020-11-08 08:01:59', '2021-01-11 22:38:54', 250000, ''),
(29, 'TRD Sportivo', 'Toyota Agya', 'BD 1982 CI', 'Silver', 2017, 'Tersedia', 'car/aJNPxUPvsW7dn7HMGAjs8pVnIab3atflxbzpxB3b.jpeg', '2020-11-08 07:52:46', '2021-01-18 12:05:49', 250000, ''),
(33, 'RS CC 1300', 'Toyota Yaris', 'BD 1526 CC', 'Silver Metalic', 2010, 'Tersedia', 'car/1AGRqLRoIAj3e7kg6YzEvtJOHQt36r4lrs3nDaUE.jpeg', '2020-11-28 12:06:31', '2021-01-05 16:00:12', 300000, ''),
(37, 'Sport', 'Toyota Fortuner', 'BD 1433 P', 'Hitam', 2008, 'Tersedia', 'car/nLBwHoDIeIp5AjdC92q86PRpgMJvFB8PenzPx0DB.jpeg', '2020-12-17 03:45:05', '2021-01-05 15:58:41', 850000, NULL),
(39, 'G CC 1300', 'Toyota Avanza', 'B 2444 SQP', 'Silver', 2017, 'Tersedia', 'car/ByOnRGzkH1PuNr4TkZK7ApMo2ft2158FZyIwN00l.jpeg', '2020-12-17 09:54:29', '2021-01-05 16:00:55', 250000, NULL),
(40, 'Double Cabin', 'Toyota Hilux', 'BG 8214 HG', 'Hitam', 2014, 'Tersedia', 'car/qvGWBdM9YmFQSa2Ulae1gmstwpxc0585D59JcCL8.jpeg', '2021-01-10 12:22:07', '2021-01-18 12:30:35', 1250000, NULL),
(41, 'Double Cabin', 'Triton Mitshubishi', 'BD 9790 AR', 'Putih', 2017, 'Tersedia', 'car/OhPTaEqu1WybVMcq39hAuoipleTLwuu8RW9U94fu.jpeg', '2021-01-11 12:04:57', '2021-01-18 12:24:48', 1250000, NULL),
(43, 'G 2500 Diesel', 'Toyota Fortuner', 'BM 1151 GM', 'Hitam Stone', 2008, 'Tersedia', 'car/vqNfv2QZ1MqmWahWnaoGoYsKnnZqH52knXep753O.jpeg', '2021-01-11 12:09:14', '2021-01-18 12:28:43', 850000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--
-- Kesalahan membaca struktur untuk tabel db_rental.tb_transaksi: #1932 - Table 'db_rental.tb_transaksi' doesn't exist in engine
-- Kesalahan membaca data untuk tabel db_rental.tb_transaksi: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_rental`.`tb_transaksi`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx`
--

CREATE TABLE `tb_trx` (
  `id` int(11) NOT NULL,
  `id_plg` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `pengambilan` varchar(225) DEFAULT NULL,
  `status_sewa` varchar(255) DEFAULT NULL,
  `status_kembali` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_trx`
--

INSERT INTO `tb_trx` (`id`, `id_plg`, `id_mobil`, `tgl_rental`, `tgl_kembali`, `tgl_pengembalian`, `pengambilan`, `status_sewa`, `status_kembali`, `created_at`, `Updated_at`) VALUES
(6, 5, 29, '2020-12-26', '2021-01-02', '2020-12-23', 'ambil ke toko', 'baguss', 'lecet bodi', '2020-12-03 13:16:59', '2020-12-22 07:52:23'),
(53, 13, 5, '2020-12-18', '2020-12-22', '2020-12-24', 'ambil ke toko', 'baguss', 'lecet bodi', '2020-12-22 08:30:01', '2021-01-11 23:02:08'),
(54, 10, 33, '2020-12-22', '2020-12-30', '2020-12-31', 'ambil ke toko', 'baguss', 'lecet bodi', '2020-12-22 09:27:34', '2021-01-10 12:48:55'),
(55, 5, 5, '2020-12-22', '2020-12-31', '2020-12-23', 'ambil ke toko', 'baguss', 'lecet bodi', '2020-12-22 09:38:17', '2020-12-22 09:38:17'),
(56, 1, 33, '2020-12-22', '2020-12-23', '2020-12-24', 'ambil ke toko', 'baguss', 'lecet bodi', '2020-12-22 09:39:45', '2020-12-22 09:39:45'),
(59, 12, 5, '2021-01-20', '2020-12-21', '2021-01-22', 'ambil ke toko', 'baguss', 'adiscpicis elit', '2020-12-27 08:26:42', '2021-01-02 14:36:01'),
(60, 12, 39, '2021-01-02', '2021-01-08', '2021-01-21', 'ambil ke toko', 'baguss', 'xxxxxxxxxxxx', '2021-01-02 14:19:23', '2021-01-02 14:36:38'),
(62, 12, 40, '2021-01-03', '2021-01-05', '2021-01-06', 'antar alamat', 'baguss', 'xxxxxxxxxxxxxxxxxxxxxxxx', '2021-01-03 13:38:45', '2021-01-10 12:49:28'),
(63, 1, 5, '2021-01-05', '2021-01-07', '2021-01-10', 'ambil ke toko', 'baguss', 'lecet bodi', '2021-01-05 15:39:42', '2021-01-10 12:39:07'),
(65, 14, 33, '2021-01-15', '2021-01-16', '2021-01-10', 'ambil ke toko', 'aaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbb', '2021-01-10 11:20:17', '2021-01-10 12:51:41'),
(66, 1, 33, '2021-01-19', '2021-01-23', '2021-01-10', 'ambil ke toko', 'ssssssssss', 'zzzzzzzzzz', '2021-01-10 11:21:30', '2021-01-10 12:53:25'),
(67, 14, 5, '2021-01-18', '2021-01-23', '2021-01-10', 'ambil ke toko', 'baguss', 'lecet bodi', '2021-01-10 11:22:30', '2021-01-10 12:41:36'),
(71, 14, 33, '2021-01-10', '2021-01-13', NULL, 'ambil ke toko', 'baguss', NULL, '2021-01-10 12:53:59', '2021-01-10 12:53:59'),
(72, 14, 33, '2021-01-26', '2021-01-28', NULL, 'antar alamat', 'aaaaaaaaaaaaaaaaaaa', NULL, '2021-01-12 00:45:45', '2021-01-12 00:45:45'),
(73, 14, 29, '2020-12-26', '2020-12-31', NULL, 'ambil ke toko', 'lorem ipsum', NULL, '2021-01-12 00:46:56', '2021-01-12 00:46:56'),
(74, 1, 39, '2021-01-28', '2021-01-29', NULL, 'ambil ke toko', NULL, NULL, '2021-01-12 01:14:49', '2021-01-12 01:14:49'),
(75, 1, 39, '2021-01-24', '2021-01-25', NULL, 'ambil ke toko', NULL, NULL, '2021-01-12 01:16:25', '2021-01-12 01:16:25'),
(76, 1, 39, '2021-01-21', '2021-01-21', NULL, 'ambil ke toko', NULL, NULL, '2021-01-12 01:16:55', '2021-01-12 01:16:55'),
(77, 1, 40, '2021-01-17', '2021-01-18', NULL, 'ambil ke toko', NULL, NULL, '2021-01-17 06:14:32', '2021-01-17 06:14:32'),
(78, 1, 43, '2021-01-17', '2021-01-17', NULL, 'ambil ke toko', NULL, NULL, '2021-01-17 06:15:43', '2021-01-17 06:15:43'),
(79, 1, 33, '2021-01-17', '2021-01-17', NULL, 'ambil ke toko', NULL, NULL, '2021-01-17 06:36:12', '2021-01-17 06:36:12'),
(80, 1, 33, '2021-01-18', '2021-01-18', NULL, 'ambil ke toko', NULL, NULL, '2021-01-17 06:38:47', '2021-01-17 06:38:47'),
(81, 1, 29, '2021-01-18', '2021-01-18', NULL, 'ambil ke toko', NULL, NULL, '2021-01-17 06:39:31', '2021-01-17 06:39:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `no_hp` bigint(12) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `jk`, `alamat`, `no_ktp`, `no_hp`, `gambar`) VALUES
(1, 'pelanggan', 'aknia fazax', 'akniaheryuanti@gmail.com', NULL, '$2y$10$2BFbxjRFPA2c2zNpbBik.OZxNbSinJ.BEsanBj40rHOX9cY3hebk2', NULL, '2020-11-26 03:56:42', '2021-01-11 05:13:43', 'Perempuan', 'sawah lebar', 17718879921112233, 8739090, 'pelanggan/Hel7GgGZRLTpcNY3KaQFiY4ITwZQZ2lBfdpxLUKf.jpeg'),
(4, 'admin', 'Reni Lestari', 'yoexreni@gmail.com', NULL, '$2y$10$lsepTqlfQOgwk0qJPx.60uCcJyYopTGoWiiehUqhH18w/TKS234mS', 'iSe2eXMLPWsyvYBTveZmAhhGaKaT31eHHBEHe5X7BSGUz4OkwMTyvn8CZZIC', '2020-11-26 05:35:24', '2020-11-26 05:35:24', '', '', 0, 0, ''),
(5, 'pelanggan', 'teresiaa', 'akniaheryuanti@gmail.com', NULL, '1234678', NULL, NULL, '2020-12-28 05:49:43', 'Perempuan', 'rawa makmur', 19287627618717861, 89735820283, 'pelanggan/W3tdVXRpxdwFiiKgLzRxFKpTi5af6c4hYNMdatN5.jpeg'),
(10, 'pelanggan', 'cecece', 'nadeak56@gmail.com', NULL, '$2y$10$Hk9Yylt16yhGsKxWwKwFBeP.jpAMr9PJ4RZRCtxABCRvzm76Fdiey', 'cp1fxwgVRwnJNoGoMcSNvjKHYVVWrkwKmvgkzQwmNGUbTGEH2FwEsymGI1zc', '2020-12-08 05:55:26', '2020-12-28 05:31:16', 'Laki-laki', 'pulau baii', 2345123412341234, 12340822, 'pelanggan/rfdBbcqyJis891CKlqvIOgLX8CcqHBJN498LerJF.jpeg'),
(12, 'pelanggan', 'ferdii', 'ferdiis@gmail.com', NULL, NULL, NULL, '2020-12-28 05:50:33', '2020-12-28 05:50:33', 'Laki-laki', 'sawah lebar', 4646346412341234, 811732424, 'pelanggan/GTO33SRPFKBSwMm9FZmBZ2ZFZURjXT2h1aGcBikE.jpeg'),
(13, 'pelanggan', 'ellennn', 'cici88@gmail.com', NULL, '21212121', NULL, '2020-12-08 03:57:42', '2020-12-28 01:39:59', 'Laki-laki', 'sawah lebar', 1771234625871234, 811732424, 'pelanggan/MqNH2pOxNOF7cI71sbrEt6kdAgG5ofGEDXJVNNga.jpeg'),
(14, 'pelanggan', 'lorem ipsum', 'dolorsit@gmail.com', NULL, '$2y$10$y0lH8bLKrbhENLUaPOVRbOyZgaopqQPaxnmoN7HNJARBXBBXZyLQO', NULL, '2021-01-09 06:51:00', '2021-01-09 06:51:00', 'Laki-laki', 'oasdkopo', 21083, 293801983, 'pelanggan/foT2EK7hRaxCm7ktrdVaxZGndJxz63DrJ5WNOTEB.jpeg'),
(15, 'pelanggan', 'erna dewianti', 'mhkjhl@gmail.com', NULL, '$2y$10$719L5cANLxs7vLZdP9znpuvYDdGQ6DniMoKYszdB.To4qBd06Deqq', NULL, '2021-01-09 06:55:27', '2021-01-09 06:55:27', 'Perempuan', 'mnkklhj', 124336, 868768, 'pelanggan/hf4EPKyjDQd8lv7ITUYxjtun81uWLLjN9mQDoep5.jpeg'),
(16, 'pelanggan', 'cinta kasih', 'kasihh@gmail.com', NULL, NULL, NULL, '2021-01-10 05:56:20', '2021-01-10 05:56:20', 'Laki-laki', 'sawah lebar', 1771234625872222, 811732424, 'pelanggan/6w9xzkJxTWFy7tVbFYVslZ64joCPFxfgiIQXdy5o.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_trx`
--
ALTER TABLE `tb_trx`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_trx`
--
ALTER TABLE `tb_trx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
