-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2024 pada 04.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataguru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbguru`
--

CREATE TABLE `tbguru` (
  `no` int(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nuptk` int(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `sk_awal` varchar(50) NOT NULL,
  `tmt` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `prog_studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbguru`
--

INSERT INTO `tbguru` (`no`, `nama`, `nuptk`, `jk`, `tempat`, `tanggal`, `gelar`, `sk_awal`, `tmt`, `jabatan`, `prog_studi`) VALUES
(2, 'Dra.Midah Samidah M.pd ', 2147483647, 'P', 'Garut', '20 Januari 1965', 'S2', '423.5/019-Smk', '17 juli 1995', 'Guru', 'Bahasa Indonesia'),
(3, 'Cecep Harry Setiana, M.pd', 2147483647, 'L', 'Garut', '01 Oktober 1980', 'S1', '423.5/026-Smk', '14 Juli 2005', 'Guru', 'PJOK'),
(4, 'Yani Mulyani S.pt', 2147483647, 'P', 'Bandung', '21 Januari 1973', 'S1', '423.5/014-Smk', '17 Juli 2006', 'Guru', 'Fisika, IPA, Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin`
--

CREATE TABLE `tblogin` (
  `no` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblogin`
--

INSERT INTO `tblogin` (`no`, `nama`, `tgl`, `alamat`, `usn`, `pass`) VALUES
(4, 'GERGRGR', 'GRGRGR', 'GRGRG', 'RGRG', 'RGGRGRG'),
(5, 'YTYTY', 'TYYT', 'YTYT', 'TYYT', 'TYTYTY'),
(6, 'GRTGRG', 'GRGR', 'GRG', 'GRG', 'G'),
(8, 'qw', 'qw', 'qw', 'qw', 'qw'),
(9, 'we', 'we', 'we', 'we', 'we');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `no` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
