-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2020 pada 06.59
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `profesi` varchar(25) NOT NULL,
  `namaayah` varchar(40) NOT NULL,
  `tempatlahirayah` varchar(20) NOT NULL,
  `tgllahirayah` date NOT NULL,
  `agamaayah` varchar(15) NOT NULL,
  `profesiayah` varchar(25) NOT NULL,
  `namaibu` varchar(40) NOT NULL,
  `tempatlahiribu` varchar(20) NOT NULL,
  `tgllahiribu` date NOT NULL,
  `agamaibu` varchar(15) NOT NULL,
  `profesiibu` varchar(25) NOT NULL,
  `tanggal_regist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nik`, `no_kk`, `nama`, `tempatlahir`, `tanggallahir`, `agama`, `alamat`, `provinsi`, `profesi`, `namaayah`, `tempatlahirayah`, `tgllahirayah`, `agamaayah`, `profesiayah`, `namaibu`, `tempatlahiribu`, `tgllahiribu`, `agamaibu`, `profesiibu`, `tanggal_regist`) VALUES
(14, '18082010001', '1234', '13214352442', '436564672353', 'arrandi', 'sidoarjo', '2020-03-03', 'Islam', 'jsNSj', 'jawa timur', 'Pelajar/Mahasiswa', 'agus', 'gresik', '2020-01-29', 'Islam', 'Karyawan Swasta', 'aefa', 'magetan', '2020-03-16', 'Islam', 'Tidak Bekerja', '2020-03-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
