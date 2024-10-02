-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 01:30 PM
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
  `lima_persen` int(11) NOT NULL,
  `kode_paket` int(11) NOT NULL,
  `tanggal_kode_paket` date NOT NULL,
  `tentang_kode_paket` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sppbj`
--

INSERT INTO `sppbj` (`id_sppbj`, `id_paket`, `tanggal_sppbj`, `nomor_sppbj`, `no_surat_penawaran`, `tanggal_surat_penawaran`, `hasil_negoisasi`, `lima_persen`, `kode_paket`, `tanggal_kode_paket`, `tentang_kode_paket`) VALUES
(6, 72, '2024-10-02', '1231231', '23123123', '2024-10-02', 13123123, 500000, 123123, '2024-10-02', '12312313'),
(7, 0, '2024-10-02', '1231231', '23123123', '2024-10-02', 13123123, 0, 123123, '2024-10-02', '12312313'),
(8, 68, '2024-10-02', '123456789', '123456789', '2024-10-02', 2147483647, 500000000, 1234, '2024-10-02', 'tentang kode paket'),
(9, 51, '2024-10-02', '12345', '12345', '2024-10-02', 12345, 12345, 12345, '2024-10-02', '12345'),
(10, 236, '2024-10-02', '123456789', '12354525134', '2024-10-02', 123123, 500000, 123456, '2024-10-02', '123455'),
(11, 233, '2024-10-03', '123123', '123123', '2024-10-03', 12312312, 123123123, 12312312, '2024-10-03', '3123123');

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
  `no_skpd` varchar(225) NOT NULL,
  `tanggal_skpd` date NOT NULL,
  `ruang_lingkup` text NOT NULL,
  `harga_penawaran` int(11) NOT NULL,
  `no_supl` varchar(225) NOT NULL,
  `tanggal_supl` date NOT NULL,
  `dokumen_penunjang` text NOT NULL,
  `uang_muka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_perjanjian`
--

INSERT INTO `surat_perjanjian` (`id_surat_perjanjian`, `id_paket`, `jenis_kontrak`, `nomor_surat_perjanjian`, `tanggal_surat_perjanjian`, `nomor_bahp`, `tanggal_bahp`, `no_skpd`, `tanggal_skpd`, `ruang_lingkup`, `harga_penawaran`, `no_supl`, `tanggal_supl`, `dokumen_penunjang`, `uang_muka`) VALUES
(1, 233, '123123', '123123', '2024-10-02', '123123', '2024-10-02', '12312', '2024-10-02', '312312', 123123, '31231', '2024-10-02', '3', 12323);

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
  MODIFY `id_sppbj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat_perjanjian`
--
ALTER TABLE `surat_perjanjian`
  MODIFY `id_surat_perjanjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
