-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2024 pada 06.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `isdel` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `isdel`) VALUES
(1, 'PHP', 1997, 1, '2024-12-16 12:35:07', NULL, NULL, NULL, NULL, 0),
(2, 'PHP', 1999, 1, '2024-12-16 12:36:11', NULL, NULL, 1, '2024-12-16 12:36:31', 1),
(3, 'PHP', 1990, 1, '2024-12-16 12:36:28', NULL, NULL, 1, '2024-12-16 12:42:25', 1),
(4, 'PHP', 1990, 1, '2024-12-16 12:42:14', NULL, NULL, 1, '2024-12-16 12:42:35', 1),
(5, 'PHP', 1999, 1, '2024-12-16 12:42:24', NULL, NULL, 1, '2024-12-16 12:42:34', 1),
(6, 'PHP', 1999, 1, '2024-12-16 12:57:53', NULL, NULL, 1, '2024-12-16 13:21:59', 1),
(7, 'CSS', 1992, 1, '2024-12-16 12:58:10', 1, '2024-12-18 12:43:03', NULL, NULL, 0),
(8, 'JavaScript', 2001, 1, '2024-12-16 12:58:34', 1, '2024-12-18 12:43:15', NULL, NULL, 0),
(9, 'PHP', 1998, 1, '2024-12-16 12:58:43', NULL, NULL, 1, '2024-12-18 12:01:27', 1),
(10, 'C++', 2003, 1, '2024-12-16 13:29:46', 1, '2024-12-22 12:55:05', NULL, NULL, 0),
(11, 'PHP', 1999, 1, '2024-12-18 12:01:44', NULL, NULL, NULL, NULL, 0),
(12, 'Python', 2003, 1, '2024-12-18 12:09:43', NULL, NULL, NULL, NULL, 0),
(13, 'HTML', 1995, 1, '2024-12-18 12:12:48', NULL, NULL, NULL, NULL, 0),
(14, 'pkn', 2002, 1, '2024-12-23 06:42:18', 1, '2024-12-23 06:42:25', 1, '2024-12-23 06:42:28', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'lab2j', 'example@example.com', '$2y$10$fv/9sV2aeuq8Iod1XqJspOPVVt8/icH6PxDEYmbLqaEkz/B0AEPzu', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
