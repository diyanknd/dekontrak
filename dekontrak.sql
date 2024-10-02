-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 03:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dekontrak`
--

-- --------------------------------------------------------

--
-- Table structure for table `spmk`
--

CREATE TABLE `spmk` (
  `id_spmk` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nomor_spmk` varchar(225) NOT NULL,
  `tanggal_spmk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sppbj`
--

CREATE TABLE `sppbj` (
  `id_sppbj` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal_sppbj` date NOT NULL,
  `nomor_sppbj` varchar(225) NOT NULL,
  `no_surat_penawaran` varchar(225) NOT NULL,
  `tanggal_surat_penawaran` date NOT NULL,
  `hasil_negoisasi` int(11) NOT NULL,
  `kode_paket` int(11) NOT NULL,
  `tanggal_kode_paket` date NOT NULL,
  `tentang_kode_paket` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_perjanjian`
--

CREATE TABLE `surat_perjanjian` (
  `id_surat_perjanjian` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jenis_kontrak` varchar(225) NOT NULL,
  `nomor_surat_perjanjian` varchar(225) NOT NULL,
  `tanggal_surat_perjanjian` date NOT NULL,
  `nomor_bahp` varchar(225) NOT NULL,
  `tanggal_bahp` date NOT NULL,
  `no_skpad` varchar(225) NOT NULL,
  `tanggal_skpad` date NOT NULL,
  `ruang_lingkup` text NOT NULL,
  `harga_penawaran` int(11) NOT NULL,
  `no_supl` varchar(225) NOT NULL,
  `tanggal_supl` date NOT NULL,
  `dokumen_penunjang` text NOT NULL,
  `uang_muka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spmk`
--
ALTER TABLE `spmk`
  ADD PRIMARY KEY (`id_spmk`);

--
-- Indexes for table `sppbj`
--
ALTER TABLE `sppbj`
  ADD PRIMARY KEY (`id_sppbj`);

--
-- Indexes for table `surat_perjanjian`
--
ALTER TABLE `surat_perjanjian`
  ADD PRIMARY KEY (`id_surat_perjanjian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spmk`
--
ALTER TABLE `spmk`
  MODIFY `id_spmk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sppbj`
--
ALTER TABLE `sppbj`
  MODIFY `id_sppbj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_perjanjian`
--
ALTER TABLE `surat_perjanjian`
  MODIFY `id_surat_perjanjian` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
