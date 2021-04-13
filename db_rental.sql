-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2020 pada 13.10
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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nm_adm` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `kd_tipe`, `merek`, `no_plat`, `warna`, `tahun`, `status`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'minibus', 'daihatsu', 'BD 9879 CC', 'merah', 1990, 'Tersedia', 'car/a89dCHzLqqpeJB1EkQ1PdFQLP6WybnrTZsUwNxQQ.jpeg', '2020-10-26 07:40:43', '2020-11-08 04:12:09'),
(6, 'minibus', 'Toyota Altos', 'BD 9879 CC', 'Silver', 1990, 'Tersedia', 'car/nN20LGje8Hw3CESLdMJQCVTEMsKRH9uaYKai0LdF.jpeg', '2020-10-26 07:43:04', '2020-11-08 04:12:45'),
(14, 'Sport', 'Toyota Altos', 'BD 9879 CC', 'Silver', 1990, 'Tidak Tersedia', 'car/xwLR348sN13fmOY6LWxFRPRQik6txT3JsendwbBx.jpeg', '2020-10-29 06:46:41', '2020-11-08 04:14:09'),
(25, 'Sedan', 'daihatsu', 'xvxcvx', 'ggggggg', 2011, 'Tersedia', 'car/T4yeM06P7VBwx9Pl8ltE2J3X67jYZNXXzUUsSUW5.jpeg', '2020-11-08 07:50:15', '2020-11-08 07:50:15'),
(27, 'Sedan', 'Toyota Altos', 'BD 9879 CC', 'Silver', 2009, 'Tidak Tersedia', 'car/0jPNwVWdabtmdW5RtOBC3WHtxTIZhndVTR9nHwAx.jpeg', '2020-11-08 07:51:15', '2020-11-08 07:51:15'),
(29, 'Sport', 'Aston Martin', 'BD 9879 CC', 'merah', 1990, 'Tersedia', 'car/qltr8LSJ9lcXdNGRzO049yNwsCs9ZqwVHS3GhRRg.jpeg', '2020-11-08 07:52:46', '2020-11-08 07:52:46'),
(31, 'Sedan', 'Toyota Altos', 'BD 9879 CC', 'vxdd', 2011, 'Tersedia', 'car/cufIJaQGGfPkqneOwW2ABSpKHDxPxG2nLuNACwrm.jpeg', '2020-11-08 08:01:59', '2020-11-08 08:01:59'),
(33, 'minibus', 'daihatsu', 'xvxcvx', 'merah', 1990, 'Tersedia', 'car/U19tGQqi6whlSzaHdNLGKO6IS3jW3jJ7bMjNPk9f.jpeg', '2020-11-08 08:09:19', '2020-11-08 08:09:19'),
(34, 'Sedan', 'Toyota Altos', 'BD 9879 CC', 'merah', 2008, 'Tersedia', 'car/8hSTM0jpntmZRBKyPMUeQpRC82O8H0Lfnl9x6QHx.jpeg', '2020-11-08 08:12:28', '2020-11-08 08:12:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nm_plg` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `jn_kl` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rental`
--

CREATE TABLE `tb_rental` (
  `id_rental` int(11) NOT NULL,
  `id_plg` int(11) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe`
--

CREATE TABLE `tb_tipe` (
  `id_tipe` int(11) NOT NULL,
  `kd_tipe` varchar(50) NOT NULL,
  `nm_tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tipe`
--

INSERT INTO `tb_tipe` (`id_tipe`, `kd_tipe`, `nm_tipe`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'MNB', 'Mini Bus'),
(3, 'TRK', 'Truk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_plg` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_rental`
--
ALTER TABLE `tb_rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `tb_tipe`
--
ALTER TABLE `tb_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_rental`);

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
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rental`
--
ALTER TABLE `tb_rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tipe`
--
ALTER TABLE `tb_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
