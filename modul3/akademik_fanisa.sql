-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 14.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik_fanisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mhs_npm` varchar(20) NOT NULL,
  `mk_kode` varchar(20) NOT NULL,
  `sem` enum('GANJIL','GENAP') NOT NULL,
  `ta_id` varchar(20) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `alamat`) VALUES
('2013030086', 'Fanisa Dia Ayu K', 'Kediri'),
('2013030095', 'Virginia Diah K', 'Pare');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk`
--

CREATE TABLE `mk` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk`
--

INSERT INTO `mk` (`kode`, `nama`) VALUES
('321', 'PEMROGRAMAN WEB'),
('322', 'INOVASI TEKNOLOGI'),
('323', 'PEMROGRAMAN BASIS DATA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta`
--

CREATE TABLE `ta` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ta`
--

INSERT INTO `ta` (`id`, `nama`) VALUES
('001', 'Tahun 2020/2021'),
('002', 'Tahun 2021/2022'),
('003', 'Tahun 2022/2023');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mhs_npm` (`mhs_npm`),
  ADD UNIQUE KEY `mk_kode_3` (`mk_kode`),
  ADD UNIQUE KEY `ta_id_3` (`ta_id`),
  ADD UNIQUE KEY `sem_2` (`sem`),
  ADD KEY `mhs_npm_2` (`mhs_npm`),
  ADD KEY `mhs_npm_3` (`mhs_npm`),
  ADD KEY `mk_kode` (`mk_kode`),
  ADD KEY `sem` (`sem`),
  ADD KEY `ta_id` (`ta_id`),
  ADD KEY `mk_kode_2` (`mk_kode`),
  ADD KEY `ta_id_2` (`ta_id`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`mhs_npm`) REFERENCES `mhs` (`npm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`mk_kode`) REFERENCES `mk` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_3` FOREIGN KEY (`ta_id`) REFERENCES `ta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
