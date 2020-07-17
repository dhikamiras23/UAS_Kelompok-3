-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 18.22
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bansos`
--

CREATE TABLE `tb_bansos` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `dana` int(11) NOT NULL,
  `sty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bansos`
--

INSERT INTO `tb_bansos` (`id`, `nama`, `hp`, `email`, `jenis`, `dana`, `sty`) VALUES
(5, 'oded', '085123457', 'oded@gmail.com', 'Alat Pelindung Diri', 5000000, 1),
(6, 'michael', '08132345', 'michael@hotmail.com', 'Logistik Mahasiswa', 8000000, 1),
(7, 'nugraha', '082475', 'nugraha@yahoo.com', 'Bantuan Kuota Mahasiswa', 600000, 1),
(8, 'dea', '089834723', 'dea@ymail.com', 'Hand Sanitizer', 300000, 1),
(9, 'doed05', '0842742454', 'doed05@rocketmail.com', 'Sembako Masyarakat', 4000000, 1),
(11, 'dea nugraha', '082427457', 'nugraha@yahoo.co.id', 'Sembako Masyarakat', 85050204, 1),
(12, 'nugraha', '347572848', 'nunu@gmail.com', 'Alat Pelindung Diri', 695388, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bansos`
--
ALTER TABLE `tb_bansos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bansos`
--
ALTER TABLE `tb_bansos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
