-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2022 pada 10.00
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-laku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub-categories`
--

CREATE TABLE `sub-categories` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub-categories`
--

INSERT INTO `sub-categories` (`id`, `id_categories`, `name`, `slug`) VALUES
(1, 2, 'memory', 'memory'),
(2, 2, 'test', 'test'),
(3, 2, 'jajal', 'jajal'),
(4, 2, 'a', 'a'),
(5, 2, 'bebek', 'bebek'),
(6, 2, 'mencoba', 'mencoba'),
(7, 2, 'babababab', 'babababab'),
(8, 2, 'ssd', 'ssd'),
(9, 2, 'gagal', 'gagal'),
(10, 2, 'babb', 'babb');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sub-categories`
--
ALTER TABLE `sub-categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sub-categories`
--
ALTER TABLE `sub-categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
