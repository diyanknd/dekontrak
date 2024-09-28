-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 04:01 AM
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
-- Database: `new_jantan`
--

-- --------------------------------------------------------

--
-- Table structure for table `nomor_skppk`
--

CREATE TABLE `nomor_skppk` (
  `id_skppk` int(11) NOT NULL,
  `nomor_skppk` varchar(100) NOT NULL,
  `tanggal_skppk` date NOT NULL,
  `tentang_skppk` text NOT NULL,
  `doc_skppk` varchar(225) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomor_skppk`
--

INSERT INTO `nomor_skppk` (`id_skppk`, `nomor_skppk`, `tanggal_skppk`, `tentang_skppk`, `doc_skppk`, `tahun`) VALUES
(11, '600/806/DPUPR-KAB.UM/XI/2023', '2023-11-07', 'Penetapan Pejabat Pembuat Komitmen, Pejabat Pelaksana Teknis Kegiatan, Staf Pengelola Keuangan, Pejabat Pengadaan Barang/Jasa, Panitia Peneliti Pelaksanaan Kontrak, Tim Teknis dan Pengawas Teknis di Lingkungan Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Berau Tahun Anggaran 2024', '34fc01ce6c8a66746ad4c90a310456fa.pdf', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `report_background_settings`
--

CREATE TABLE `report_background_settings` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_background_settings`
--

INSERT INTO `report_background_settings` (`id`, `year`, `background_image`, `created_at`) VALUES
(1, 2024, '3e9828465fda19fd5ca40c958a2b4a9a.png', '2024-09-04 15:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_addendum`
--

CREATE TABLE `tb_addendum` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `addendumke` varchar(250) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_addendum`
--

INSERT INTO `tb_addendum` (`id`, `id_paket`, `addendumke`, `nomor`, `tanggal`, `upload_file`) VALUES
(1, 12, '', '10', '2024-08-01', 'cd86d30922a50968741449e3ccf5851c.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bast`
--

CREATE TABLE `tb_bast` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `upload_file_jaminan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bast`
--

INSERT INTO `tb_bast` (`id`, `id_paket`, `nomor`, `tanggal`, `upload_file`, `upload_file_jaminan`) VALUES
(1, 12, '10', '2024-08-01', 'a6216ac8b6708f81ee96d7a14cdbf7df.docx', '56a4af12e956015b4feb334702097473.docx'),
(4, 148, '02/ BASTP/PPK-PJ8/PESANTREN RT.20/PJ2/VIII/2024', '2024-08-02', 'bd1eebc40d74f7c9d79201913e2dd715.pdf', 'f7c1e9e05c1c72a375adf25efe32c9c8.pdf'),
(5, 163, '02/BASTHP/PPK-PJ8/JUT RT4 SUARAN/PJ2/VIII/2024', '2024-08-05', '37ac3f9ea6c0df2bdb1f7e2e94bbed2f.pdf', 'c51f6ffd86871d80cf16d75a03e6e3e3.pdf'),
(6, 166, '02/BASTHP/PPK-PJ8/JUT RT6 TD/PJ2/VII/2024', '2024-07-12', 'dd0fbc06e802c3bae2fcb337387ed794.pdf', '4b73e2121e2749acb426134386bb233f.pdf'),
(7, 169, '02/BASTHP/PPK-PJ8/JUT RT7 TD/PJ2/VII/2024', '2024-07-12', '5c5971d74d39a23a95df2075a615c102.pdf', '943b8f736a0fe571e5b505b21c0255fd.pdf'),
(8, 175, '02/BASTHP/PPK-PJ9/MAKASSANG RT 12/PJ2/VIII/2024', '2024-08-08', '6c812b5ae807662fb0e1daa9a3203b10.pdf', '08381a5d4b9b1bce0516a6bb4068b125.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_penyedia`
--

CREATE TABLE `tb_data_penyedia` (
  `id_data_penyedia` int(11) NOT NULL,
  `nama_penyedia` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nama_direktur` varchar(225) NOT NULL,
  `npwp` varchar(225) DEFAULT NULL,
  `id_jenis_penyedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_penyedia`
--

INSERT INTO `tb_data_penyedia` (`id_data_penyedia`, `nama_penyedia`, `alamat`, `nama_direktur`, `npwp`, `id_jenis_penyedia`) VALUES
(4, 'CV. MULTI KARYA CIPTA', 'Jl. Ciptomangunkusumo No. 56 RT. 003 Harapan Baru-Samarinda (Kota) - Kalimantan Timur', 'Andriyadi', '030341028722000', 1),
(8, 'CV. ATSHYR TEKNIK KONSULTAN', 'Jl. Durian III, Komp.Berau Indah Blok. C8-01, Kel. Gunung Panjang-Tanjung Redeb', 'Ir. Ardian Nor, ST, MT', '0', 2),
(9, 'CV. SHYFA CONSULTANT', 'Jl. SM. Aminuddin No 1020 Kel. Bugis Tanjung Redeb', 'Abdul Rahim, ST.', '0', 2),
(10, 'CV. BANGUN KINARYA CONSULTANT', 'Jl. Harm Ayoeb Pasar Adji Dilayas Ruko A.36 RT.05 Kel Rinding Kec. Teluk Bayur', 'Erwin Ananda Lubis', '0', 2),
(11, 'CV. SAPTA WIRA MUDA SEGARA', 'Jl. H. Isa III Kel. Tanjung Redeb', 'Setiadin Musa Alam, A.Md', '0', 2),
(12, 'CV. HORIZON TEKNIK KONSULTAN', 'Jl. Gunung Panjang RT.04 Tanjung Redeb', 'Junaidi', '0', 2),
(13, 'CV. ARCHANTARA CONSULTANT', 'Jalan Mangga II RT. 10 Kel. Gayam Kec. Tanjung Redeb', 'Resahudin, ST', '0', 2),
(14, 'CV. AR-KONSULTAN', 'Jl. Karang Mulyo Gg. Sudi Mampir RT. VII Kel. Karang Ambun Kec. Tanjung Redeb', 'Ahmad Rifai', '0', 2),
(15, 'CV. BINA CIPTA CONSULTANT', 'Jl. Dr.Soetomo No. 503 RT.02 Tanjung Redeb', 'Alvin Widianata, SST', '0', 2),
(16, 'CV. STATIKA DESIGN ENGINEERING CONSULTANT', 'Jl. Harm. Ayoeb Pasar Adji Dlayas Ruko A.35 RT.005 Kel. RInding Kec. Teluk Bayur', 'Endro Budi Cahyono, S.T', '0', 2),
(17, 'CV. YASA PRATAMA CONSULTANT', 'Jl. Pembangunan I, Kel. Gunung Panjang, Kec. Tanjung Redeb', 'Khosidin, ST', '0', 2),
(18, 'CV. PONGGAWA CONSULTANT', 'Jl. Manunggal RT.13 Kel. Bugis Kec. Tanjung Redeb', 'Beny Eko Prasetyo, ST', '0', 2),
(19, 'CV. MARGA CONSULT ASSOCIATE', 'Jl. Gunung Maritam RT. 30 Kelurahan Tanjung Redeb', 'Muhammad Baihaqi', '0', 2),
(20, 'CV. Era Teknik Consultant', 'JL. Durian III Perum. Berau Indah Blok D1 No.2 - Berau (Kab.) - Kalimantan Timur', 'Edwan Rodzalie', '0', 2),
(21, 'CV. DIAYU CONSULTANT', 'Jl. Jend. Sudirman, Kel. Bugis, Kec. Tanjung Redeb, Kab. Berau', 'Agsa Indah Sari', '0', 2),
(22, 'CV. M-PROJECT', 'Jl. Pembangunan I, Kel. Sungai Bedungun, Kec. Tanjjung Redeb, Kab. Berau, Prov. Kalimtan Timur', 'Hadi Suyitno', '0', 2),
(23, 'CV. BRALING KARYATAMA CONSULTANT', 'Jl. Durian III Perumahan Berau Indah Blok D17 No.01 Kec. Gunung Panjang', 'Sarmanto', '0', 2),
(24, 'CV. KARTABHUMI', 'Jl. Padat Karya, Kel. Sambaliung Kec. Tanjung Redeb', 'Bambang Aribowo', '0', 2),
(25, 'PT.PITU BABBANA BINANGA	', 'JL.PADAT KARYA RT.21 KEL.BUGIS - Berau (Kab.) - Kalimantan Timur', 'Suwardi', '0', 1),
(26, 'CV.AULIA JAYA', 'Jl.Siranuddin Rt 06 Kel Gunung tabur - Berau (Kab.) - Kalimantan Timur', 'Lake', '0', 1),
(27, 'PT. Berlian Segitiga Bermuda', 'Jl. Jakarta Blok. W istiqomah 2 no 5 rt. 043 loa bakung , sungai kunjang samarinda - Samarinda (Kota) - Kalimantan Timur', 'Berlian', '0', 1),
(28, 'CV. Berau Borneo Nusantara', 'Jl. Kedaung perum Borneo Indah Kedaung - Berau (Kab.) - Kalimantan Timur', 'Sulo Aji', '0', 1),
(29, 'PT. Megadarian Multi Perkasa', 'Jl. Murjani III Rt.11 No.A55 Kel. Gunung Panjang - Berau (Kab.) - Kalimantan Timur', 'Masdar', '0', 1),
(30, 'PT Maluang Prima', 'Jl. Manggis No 8 - Berau (Kab.) - Kalimantan Timur', 'Andre', '0', 1),
(31, 'CV. Cemara Megah Persada', ' Kampung Maluang No. 08 RT. 06 Gunung Tabur - Berau (Kab.) - Kalimantan Timur', 'Frangky', '0', 1),
(32, 'CV. Anginmewa', 'Jl. Tarap Gg. Dilayas RT. 006 Kel. Sei. Bedungun Kecamatan Tanjung Redeb - Berau (Kab.) - Kalimantan Timur', 'Udin', '84.035.627.3-727.000', 1),
(33, 'PT. BUMI LASINRANG', 'Jl. Solong Durian Rt. 025 Sempaja - Samarinda - Samarinda (Kota) - Kalimantan Timur', 'Sakka.S', '02.576.482.2-722.000', 1),
(34, 'CV. ARINA JAYA', 'Jl. Manunggal RT 010/- Kel. Sambaliung Kec. Sambaliung Kab. Berau - Berau (Kab.) - Kalimantan Timur', 'Hary Cahyono', '92.383.464.2-727.000', 1),
(38, 'PT. ERA BANGUN SARANA', 'JL. LANGGAU NO. 36 RT.002 RW.004 - Makassar (Kota) - Sulawesi Selatan', 'xxxxxx', '02.884.934.7-801.000', 1),
(39, 'PT. VERA HARAPAN JAYA', 'JL.MILONO RT. 11 - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '03.039.517.2-727.000', 1),
(40, 'CV. Syifa Anugrah', 'jl pembangunan 1 rt 29 - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '31.792.405.8-727.000', 1),
(41, 'CV. SUMBERTAMA REZEKY', 'JL. RAPAK INDAH PERUM PURI KENCANA BLOK H NO. 041 RT. 50 - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '03.804.616.5-741.000', 1),
(42, 'CV. Sangrina Nugraha', 'Jl. Gajah Mada N0. 147 Tanjung Redeb - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '01.567.608.3-727.000', 1),
(43, 'PT. PALEM CITRA INDONESIA', 'JL. MANGGA II NO. 09 RT. 13 SAMARINDA - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '02.594.639.3-722.000', 1),
(45, 'PT. Tirta Darma Segah', 'JL. Kapt Tandean, Tanjung Redeb - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '75.923.440.4-727.000', 1),
(46, 'PT. DIMENSI GLOBAL', 'JL. MANGGIS 47 - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '02.756.419.4-722.000', 1),
(47, 'CV. Berkat Kawan', 'Jl. Siradj Salman No. 1A RT. 02 Kel. Sidodadi, Kec. Samarinda Ulu, Kota Samarinda - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '02.467.441.8-722.000', 1),
(48, 'PT. PALANG MAHA KARYA', 'JL. KADRIE OENING KOMP. BERSAMA BLOK B NO.42 RT.033 KEL. AIR HITAM KOTA SAMARINDA - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '75.941.150.7-722.000', 1),
(49, 'PT. TRINANDA KARYA UTAMA', 'Perum. Bukit Pinang Batara Indah Blok C2 RT. 13 No. 13. Jln. P.Suryanata - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '02.503.743.3-722.000', 1),
(50, 'PT. IKA KARYA NUSA', 'Jl. Kadrie Oening Komplek Bersama Permai Blok C Nomor 68 Kota Samarinda - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '50.660.715.9-741.000', 1),
(51, 'CV. PENDEL 95 CONSULTANT', 'JL. RAMBUTAN RT 11 - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '03.232.719.9-727.000', 2),
(52, 'PT. Rimba Nuansa Asri', 'Sidomulyo dusun 1 blok c no.01 rt.002 babulu darat - Penajem Paser Utara (Kab.) - Kalimantan Timur', 'xxxxxx', '95.167.837.4-726.000', 1),
(53, 'CV. Alif Engineering Consultant', 'JL. Bukit Marittam Gg.Pemancar - Berau - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '02.322.918.0-727.000', 2),
(54, 'CV. SAINS ART CONSULINDO', 'Jalan Langsat no. 115 Tanjung Selor Kabupaten Bulungan - Bulungan (Kab.) - Kalimantan Utara', 'xxxxxx', '02.393.547.1-727.000', 2),
(55, 'CV. NAMIRA CONSULTANT', 'JLN. BENGKURING RAYA III B490 RT. 074 SAMARINDA - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '03.014.475.2-722.000', 2),
(56, 'CV. BEKKU JAYA ABADI', 'JL.Manunggal Gg.Ubi No.41 Gayam,Tanjung Redeb Kab.Berau - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '40.142.159.9-727.000', 1),
(57, 'CV. Barokah 77', 'Jl. Mangkupalas No.38 RT.11, Kel. Masjid,Samarinda Seberang, Samarinda Kaltim - Samarinda (Kota) - Kalimantan Timur', 'xxxxxx', '66.400.040.3-722.000', 1),
(58, 'PT. Karyatama Nagasari', 'Jl. Raya Maluang no.08 Tanjung Redeb - Berau (Kab.) - Kalimantan Timur', 'Ir. Gatot', '02.088.802.0-727.000', 1),
(59, 'PT. KALAPA SATANGKAL MAKMUR SEJAHTERA', 'Jl. Jeruk Ragi No.52 Dukuh Dua RT 01/08 Ds. Parakanmanggu Kec. Parigi - Pangandaran (Kab.) - Jawa Barat', 'xxxxx', '21.146.460.7-442.000', 1),
(60, 'PT. RIS PUTRA DELTA', 'Jl. Ketintang Baru XVI No. 07 - Surabaya (Kota) - Jawa Timur', 'xxxxxx', '01.468.045.8-609.000', 1),
(61, 'CV. Cipta Bukit Tanjung', 'Jl. Karang Ambun Gang Swadaya, Kel. Gayam, Kec. Tanjung Redeb', 'Muchtar', '0', 1),
(62, 'CV. Taufik Karya Mandiri', 'Jl. Karang Mulyo, Kel. Karang Ambun, Kec. Tanjung Redeb', 'Rusiansyah', '0', 1),
(63, 'CV. Maheswara Dewa Perkasa', 'Jl. Manunggal RT. 13 Tanjung Redeb', 'Agus Endang Suhartati', '0', 1),
(64, 'CV. RR ARCHITECTURE', 'JL. SA. MAULANA NO. 17 - Berau (Kab.) - Kalimantan Timur', 'xxxxxx', '02.862.245.4-727.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fho`
--

CREATE TABLE `tb_fho` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fho`
--

INSERT INTO `tb_fho` (`id`, `id_paket`, `nomor`, `tanggal`, `upload_file`) VALUES
(1, 12, '12', '2024-08-02', '827dce3fb0bdf64e48e0a82bc7c6c9a2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_dokumentasi`
--

CREATE TABLE `tb_foto_dokumentasi` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_foto_dokumentasi`
--

INSERT INTO `tb_foto_dokumentasi` (`id`, `id_paket`, `keterangan`, `upload_file`, `created_at`, `updated_at`) VALUES
(5, 32, 'Foto Profile Om Beni', 'a4ea81499de5c5d6b6e353f65b9cd060.png', '2024-09-02 01:28:02', '2024-09-02 01:28:02'),
(6, 32, 'coba', 'f26333cd19dfe2cd661cff5e68f75ac6.jpg', '2024-09-02 01:28:14', '2024-09-02 01:28:14'),
(9, 41, '1', '88b0408cf137a1d6a9577ddff89de181.jpeg', '2024-09-03 03:45:29', '2024-09-03 03:45:29'),
(10, 41, '2', '8ed7a6219beb6f846d1e5707af708582.jpeg', '2024-09-03 03:46:34', '2024-09-03 03:46:34'),
(11, 41, '3', '0e2090f4e97e5043f3f22bdca5ac8edf.jpeg', '2024-09-03 03:48:10', '2024-09-03 03:48:10'),
(12, 243, '0%', '4cd8247a7ba9f4d559ed448672ff73b3.jpeg', '2024-09-03 05:24:32', '2024-09-03 05:24:32'),
(13, 243, '0%', '26f593bbd5b16b778c58aeb30d1c4975.jpeg', '2024-09-03 05:25:19', '2024-09-03 05:25:19'),
(17, 241, 'Poto Agustus', '[\"6b48eb7552ab49893db8747d98fa29df.jpeg\",\"f6f3aaf565b227410152c65a4284109f.jpeg\",\"9276997faaba09c230d34cd87c3fc8a4.jpeg\",\"d66f74de43e271fc4804c9c7692bc244.jpeg\",\"0502f169b444ef99f8a9bfee6a96c555.jpeg\",\"d6e1d9f0efd3a92ea446ae15e329d5dd.jpeg\"]', '2024-09-09 09:05:21', '2024-09-09 09:05:21'),
(18, 230, 'Poto Agustus', '[\"eee313d9281a684c65082156e799421f.jpeg\",\"08bf7a86e185207f058c59546727d2b2.jpeg\",\"c7e8adb868732eb19a5efbac83dabf6c.jpeg\",\"738cf686378582619dc10b1e6d67b367.jpeg\"]', '2024-09-09 11:00:11', '2024-09-09 11:59:02'),
(19, 225, 'Kondisi 50%', '[\"f9b2b974025c2aae716f3d0084972f0f.jpeg\",\"d3b648dfbfd1d88163274cc4df888553.jpeg\",\"ec38e46d17368b5123223c180da67093.jpeg\",\"40cf8a89d19736426ddddb848d8f4fcc.jpeg\"]', '2024-09-23 15:08:38', '2024-09-23 15:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_sub_kegiatan`
--

CREATE TABLE `tb_jenis_sub_kegiatan` (
  `id_jenis_sub_kegiatan` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `jenis_sub_kegiatan` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_sub_kegiatan`
--

INSERT INTO `tb_jenis_sub_kegiatan` (`id_jenis_sub_kegiatan`, `id_sub`, `jenis_sub_kegiatan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pembangunan Jalan 1 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:31:57'),
(2, 1, 'Pembangunan Jalan 2 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-09-13 01:09:52'),
(3, 1, 'Pembangunan Jalan 3 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:00'),
(4, 1, 'Pembangunan Jalan 4 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:01'),
(5, 1, 'Pembangunan Jalan 5 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:02'),
(6, 1, 'Pembangunan Jalan 6 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:05'),
(7, 1, 'Pembangunan Jalan 7 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:05'),
(8, 1, 'Pembangunan Jalan 8 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:06'),
(9, 1, 'Pembangunan Jalan 9 (Perubahan)', 2024, '2024-08-09 21:46:03', '2024-08-21 11:32:08'),
(42, 1, 'Pembangunan Jalan 1', 2024, '2024-08-21 23:21:47', '0000-00-00 00:00:00'),
(43, 1, 'Pembangunan Jalan 2', 2024, '2024-08-21 23:22:17', '0000-00-00 00:00:00'),
(44, 1, 'Pembangunan Jalan 3', 2024, '2024-08-21 23:22:28', '0000-00-00 00:00:00'),
(45, 1, 'Pembangunan Jalan 4', 2024, '2024-08-21 23:22:39', '0000-00-00 00:00:00'),
(46, 1, 'Pembangunan Jalan 5', 2024, '2024-08-21 23:22:51', '0000-00-00 00:00:00'),
(47, 1, 'Pembangunan Jalan 6', 2024, '2024-08-21 23:22:59', '0000-00-00 00:00:00'),
(48, 1, 'Pembangunan Jalan 7', 2024, '2024-08-21 23:23:09', '0000-00-00 00:00:00'),
(49, 1, 'Pembangunan Jalan 8', 2024, '2024-08-21 23:23:20', '0000-00-00 00:00:00'),
(50, 1, 'Pembangunan Jalan 9', 2024, '2024-08-21 23:23:31', '0000-00-00 00:00:00'),
(51, 1, 'Pembangunan Jalan 10', 2024, '2024-08-21 23:23:39', '0000-00-00 00:00:00'),
(52, 1, 'Pembangunan Jalan 11', 2024, '2024-08-21 23:23:47', '0000-00-00 00:00:00'),
(53, 1, 'Pembangunan Jalan 12', 2024, '2024-08-21 23:23:58', '0000-00-00 00:00:00'),
(55, 1, 'Pembangunan Jalan 13', 2024, '2024-08-21 23:24:18', '0000-00-00 00:00:00'),
(56, 1, 'Pembangunan Jalan 14', 2024, '2024-08-21 23:24:31', '0000-00-00 00:00:00'),
(57, 1, 'Pembangunan Jalan 15', 2024, '2024-08-21 23:24:42', '0000-00-00 00:00:00'),
(58, 1, 'Pembangunan Jalan (Bankeu Prov)', 2024, '2024-08-21 23:25:20', '0000-00-00 00:00:00'),
(59, 1, 'DAK Penugasan Bidang Jalan', 2024, '2024-08-21 23:25:33', '0000-00-00 00:00:00'),
(60, 1, 'DAK Penugasan Bidang Jalan-Tematik Penguatan Destinasi Pariwisata Prioritas', 2024, '2024-08-21 23:25:43', '0000-00-00 00:00:00'),
(61, 2, 'Pembangunan Jembatan	', 2024, '2024-08-21 23:25:55', '0000-00-00 00:00:00'),
(62, 3, 'Perencanaan Pembangunan Jalan', 2024, '2024-08-21 23:26:17', '0000-00-00 00:00:00'),
(63, 1, 'Pembangunan Jalan 10 (Perubahan)', 2024, '2024-09-13 00:00:30', '0000-00-00 00:00:00'),
(64, 3, 'Perencanaan Dukungan Bankeu dan DAK (Perubahan)', 2024, '2024-09-14 00:29:25', '0000-00-00 00:00:00'),
(65, 3, 'Perencanaan Pembangunan Jalan (Perubahan)', 2024, '2024-09-14 00:31:17', '0000-00-00 00:00:00'),
(66, 3, 'Perencanaan Pembangunan Jembatan (Perubahan)', 2024, '2024-09-14 00:31:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampung`
--

CREATE TABLE `tb_kampung` (
  `id_kampung` int(11) NOT NULL,
  `kampung` varchar(100) NOT NULL,
  `id_kelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kampung`
--

INSERT INTO `tb_kampung` (`id_kampung`, `kampung`, `id_kelurahan`) VALUES
(1, 'Birang', 2),
(2, 'Tasuk', 2),
(3, 'Maluang', 2),
(4, 'Samburakat', 2),
(5, 'Sambakungan', 2),
(6, 'Melati Jaya', 2),
(7, 'Merancang Ilir', 2),
(8, 'Merancang Ulu', 2),
(9, 'Pulau Besing', 2),
(10, 'Batu-Batu', 2),
(11, 'Bebanir', 3),
(12, 'Bena Baru', 3),
(13, 'Gurimbang', 3),
(14, 'Inaran', 3),
(15, 'Long Lanuk', 3),
(16, 'Pegat Bukur', 3),
(17, 'Pesayan', 3),
(18, 'Pilanjau', 3),
(19, 'Rantau Panjang', 3),
(20, 'Suaran', 3),
(21, 'Sukan Tengah', 3),
(22, 'Tanjung Perangat', 3),
(23, 'Tumbit Dayak', 3),
(24, 'Labanan Jaya', 4),
(25, 'Labanan Makarti', 4),
(26, 'Labanan Makmur', 4),
(27, 'Tumbit Melayu', 4),
(28, 'Batu Rajang', 5),
(29, 'Bukit Makmur', 5),
(30, 'Gunung Sari', 5),
(31, 'Harapan Jaya', 5),
(32, 'Long Ayan', 5),
(33, 'Long Ayap', 5),
(34, 'Long Laai', 5),
(35, 'Pandan Sari', 5),
(36, 'Punan Mahakam', 5),
(37, 'Punan Malinau', 5),
(38, 'Punan Segah', 5),
(39, 'Siduung Indah', 5),
(40, 'Tepian Buah', 5),
(41, 'Lesan Dayak', 6),
(42, 'Long Beliu', 6),
(43, 'Long Duhung', 6),
(44, 'Long Keluh', 6),
(45, 'Long Lamcin', 6),
(46, 'Long Pelay', 6),
(47, 'Long Sului', 6),
(48, 'Mapulu', 6),
(49, 'Merabu', 6),
(50, 'Merapun', 6),
(51, 'Merasa', 6),
(52, 'Muara Lesan', 6),
(53, 'Panaan', 6),
(54, 'Sido Bangen', 6),
(55, 'Kasai', 7),
(56, 'Pegat Betumbuk', 7),
(57, 'Pulau Derawan', 7),
(58, 'Tanjung Batu', 7),
(59, 'Teluk Semanting', 7),
(101, 'Gunung Tabur', 2),
(102, 'Sambaliung', 3),
(103, 'Teluk Bayur', 4),
(104, 'Rinding', 4),
(105, 'Batu Putih', 12),
(106, 'Ampen Medang', 12),
(107, 'Balikukup', 12),
(108, 'Kayu Indah', 12),
(109, 'Lobang Kelatak', 12),
(110, 'Sumber Agung', 12),
(111, 'Tembudan', 12),
(112, 'Bumi Jaya', 11),
(113, 'Campur Sari', 11),
(114, 'Capuak', 11),
(115, 'Dumaring', 11),
(116, 'Eka Sapta', 11),
(117, 'Purnasari Jaya', 11),
(118, 'Suka Muria', 11),
(119, 'Sumber Mulia', 11),
(120, 'Talisayan', 11),
(121, 'Tunggal Bumi', 11),
(122, 'Bohesilian', 8),
(123, 'Payung-Payung', 8),
(124, 'Teluk Alulu', 8),
(125, 'Teluk Harapan', 8),
(126, 'Biduk-Biduk', 13),
(127, 'Giring-Giring', 13),
(128, 'Pantai Harapan', 13),
(129, 'Tanjung Perepat', 13),
(130, 'Teluk Sulaiman', 13),
(131, 'Teluk Sumbang', 13),
(132, 'Buyung-Buyung', 9),
(133, 'Harapan Maju', 9),
(134, 'Semurut', 9),
(135, 'Tabalar Muara', 9),
(136, 'Tabalar Ulu', 9),
(137, 'Tubaan', 9),
(138, 'Biatan Bapinang', 10),
(139, 'Biatan Baru', 10),
(140, 'Biatan Ilir', 10),
(141, 'Biatan Lempake', 10),
(142, 'Biatan Ulu', 10),
(143, 'Bukit Makmur Jaya', 10),
(144, 'Karangan', 10),
(145, 'Manunggal Jaya', 10),
(146, 'Bugis', 1),
(147, 'Gayam', 1),
(148, 'Gunung Panjang', 1),
(149, 'Karang Ambun', 1),
(150, 'Sei. Bedungun', 1),
(151, 'Tanjung Redeb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Tanjung Redeb'),
(2, 'Gunung Tabur'),
(3, 'Sambaliung'),
(4, 'Teluk Bayur'),
(5, 'Segah'),
(6, 'Kelay'),
(7, 'Pulau Derawan'),
(8, 'Maratua'),
(9, 'Tabalar'),
(10, 'Biatan'),
(11, 'Talisayan'),
(12, 'Batu Putih'),
(13, 'Biduk-Biduk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `kegiatan` varchar(225) NOT NULL,
  `kode_rek_kegiatan` varchar(225) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `id_program`, `kegiatan`, `kode_rek_kegiatan`, `tahun`) VALUES
(1, 1, 'Penyelenggaraan Jalan Kabupaten/Kota', '2.01', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontrak`
--

CREATE TABLE `tb_kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomor_kontrak` varchar(255) NOT NULL,
  `nilai_kontrak` bigint(111) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `masa_pelaksanaan` int(11) NOT NULL,
  `penyedia_jasa` int(11) NOT NULL,
  `konsultan_pengawas` int(11) NOT NULL,
  `kontrak_konstruksi` varchar(255) DEFAULT NULL,
  `kontrak_konsultan` varchar(255) DEFAULT NULL,
  `jaminan_pelaksanaan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontrak`
--

INSERT INTO `tb_kontrak` (`id_kontrak`, `id_paket`, `id_user`, `nomor_kontrak`, `nilai_kontrak`, `tanggal_kontrak`, `tanggal_mulai`, `tanggal_selesai`, `masa_pelaksanaan`, `penyedia_jasa`, `konsultan_pengawas`, `kontrak_konstruksi`, `kontrak_konsultan`, `jaminan_pelaksanaan`, `created_at`, `updated_at`) VALUES
(2, 72, 0, '04/PPK-PJ.6/KAWASAN WISATA/PJ2/VI/2024', 2147483647, '2024-06-28', '2024-06-30', '2024-11-20', 144, 43, 20, '04233a93493d3350a35df257bd6bbf26.pdf', '1cc4a71ba2e39af5ce72194dab8baa27.pdf', '5cbdc311602ee6166e2cd8cb5b8798ce.pdf', '2024-08-27 08:19:23', '0000-00-00 00:00:00'),
(3, 225, 0, '04/PPK-PJ12/LESAN-MERASA/PJ2/V/2024', 47274000000, '2024-05-06', '2024-05-08', '2024-11-03', 180, 29, 16, '62f1f76e13cfc29a642c60f820b92512.pdf', NULL, 'eb7c4afa722ffc692f5676bcb6555af1.pdf', '2024-08-28 19:54:37', '2024-08-31 16:32:46'),
(4, 222, 0, '04/PPK-PJ11/TL.SULAIMAN-TL.SUMBANG/PJ2/VI/2024', 36642752642, '2024-06-26', '2024-06-28', '2024-12-24', 180, 38, 8, 'd43ecc9fc496d4d784dd4b51bdf0cb97.pdf', 'f02cb064e366808f6aa7599fd334d132.pdf', '80853266feafa176139e0d337f614235.pdf', '2024-08-31 09:10:59', '2024-08-31 16:33:41'),
(5, 41, 0, '04/PPK-PJ2/LANJ.MANTAYUNG/PJ2/V/2024', 16446800000, '2024-05-17', '2024-05-20', '2024-11-15', 180, 45, 16, '50ea0c5489423bb8352e810fea3ecd7d.pdf', 'effd72217b5357024d23f567573b4a22.pdf', '40cdb0fb90f782fbf889380cb08d8293.pdf', '2024-09-03 03:40:30', '0000-00-00 00:00:00'),
(6, 51, 0, '03/PPK-PJ2/JUT MNGKJNG/PJ2/V/2024', 138000242, '2024-06-12', '2024-06-12', '2024-08-10', 60, 4, 8, NULL, NULL, NULL, '2024-09-03 04:24:20', '0000-00-00 00:00:00'),
(7, 0, 0, '03/PPK-PJ2/JUT MNGKJNG/PJ2/V/2024', 138040904, '2024-05-22', '2024-05-22', '2024-07-20', 60, 62, 9, NULL, NULL, NULL, '2024-09-03 04:30:45', '2024-09-12 04:50:47'),
(9, 243, 0, '06/PPK-DAK/PELABUHAN.MANTARITIP/PJ2/II/2024', 13471164335, '2024-02-09', '2024-02-12', '2024-10-08', 240, 32, 15, '75291a83896f2c6fdb19a4587c874a0b.pdf', 'd4441a2f274a5f73fc6355652088e177.pdf', '3b6094fc72dfe04ce8552a73ac9441c5.pdf', '2024-09-03 05:16:51', '0000-00-00 00:00:00'),
(11, 57, 0, '04/PPK-PJ3/BUYUNG-SEMURUT.JALUR2/PJ2/V/2024', 23140000000, '2024-05-27', '2024-05-29', '2024-11-24', 180, 45, 15, '90e837d68ec7210380a26fda44e3bc95.pdf', 'e2c7683f5f76f2fbb3e5fc1d10cdaa83.pdf', 'b2c0b5acfafb618de4f068296dcc337d.pdf', '2024-09-04 16:12:45', '0000-00-00 00:00:00'),
(12, 233, 0, '04/PPK-PJ4/MNJU JMBTN BNA BRU/PJ2/V/2024', 12828778073, '2024-05-13', '2024-05-15', '2024-11-10', 180, 50, 8, 'e0c85911444cf4dbe625f02552bffa51.pdf', '158bfe81d921c5d8c58a972fe9b304df.pdf', '9e5ec00bf5d347e74dfa283cc4106ba5.pdf', '2024-09-04 16:40:25', '0000-00-00 00:00:00'),
(13, 236, 0, '04/PPK-PJ14/JL.POROS-JEMB.INARAN/PJ2/V/2024', 18298575744, '2024-05-13', '2024-05-16', '2024-11-11', 180, 49, 8, 'ef0af87295c19fd6459fbe0d56784f52.pdf', '01b6f0499806cc62d3badeaf00dc0ede.pdf', 'b89ee6d7a4f3c892ab0b2797889491d0.pdf', '2024-09-04 17:06:57', '0000-00-00 00:00:00'),
(14, 241, 0, '04/PPK-BANKEUPROV/TL.SMBG-SNDK-LNDS/PJ2/V/2024', 18142848246, '2024-05-03', '2024-05-06', '2024-11-01', 180, 52, 54, '6041d28f48d93147bc8e55677c841a39.pdf', 'c404070635a5ee2fa2648574ac1b9f6c.pdf', 'e50e3801adf21ed6afb7a1bfe5194db0.pdf', '2024-09-09 08:55:03', '0000-00-00 00:00:00'),
(15, 230, 0, '04/PPK-PJ14/BHU JL SMBKT SMBKGN/PJ2/V/2024', 13898416230, '2024-05-15', '2024-05-17', '2024-11-12', 180, 31, 64, 'aaca7555feffb491526407e3710c39c3.pdf', '6825f3732be0ab9a2834a3c58630e42c.pdf', '45d6448d090265159184caaaf9d42f6e.pdf', '2024-09-09 10:51:17', '2024-09-09 10:54:19'),
(16, 228, 0, '04/PPK-PJ13/KWS.MARATUA/PJ2/V/2024', 9348944921, '2024-05-15', '2024-05-17', '2024-11-12', 180, 47, 10, '6b7d38ab63bde015d3521fe9ea69c5be.pdf', NULL, NULL, '2024-09-10 02:49:19', '0000-00-00 00:00:00'),
(17, 229, 0, '04/PPK-PJ13/PWS-KWS.MARATUA/PJ2/V/2024', 398705340, '2024-05-15', '2024-05-16', '2024-11-11', 180, 47, 10, '0f8fb5f171159e13bfe85e57bb7ada17.pdf', NULL, NULL, '2024-09-10 02:53:21', '0000-00-00 00:00:00'),
(18, 244, 0, '04/PPK-PWS/PELABUHAN-MANTARITIP/PJ2/II/2024', 445460760, '2024-02-09', '2024-02-12', '2024-10-08', 240, 32, 15, NULL, NULL, NULL, '2024-09-10 02:57:29', '0000-00-00 00:00:00'),
(19, 99, 0, '04/PPK-PJ7/PADAT.KRY-CUT.NYADIEN/PJ2/V/2024', 8257466655, '2024-05-27', '2024-05-30', '2024-11-25', 180, 42, 16, NULL, NULL, NULL, '2024-09-10 06:05:24', '2024-09-10 06:20:40'),
(20, 142, 0, '04/PPK-PJ8/KWSNSKN-TGHPJ2/V2024', 11376256477, '2024-05-08', '2024-05-08', '2024-11-03', 180, 40, 0, NULL, NULL, NULL, '2024-09-10 06:55:24', '0000-00-00 00:00:00'),
(21, 187, 0, '04/PPK-PJ9/MALUANG-PARIBAU/PJ2/V/2024', 15144000000, '2024-05-27', '2024-05-29', '2024-11-24', 180, 46, 10, NULL, NULL, NULL, '2024-09-10 07:32:35', '2024-09-10 07:44:37'),
(22, 250, 0, '04/PPK-PJEMB/BOX CLVRT/PJ2/VI/2024', 190000000, '2024-06-04', '2024-06-04', '2024-07-18', 45, 0, 15, 'aea947c404e7c65246b9fbfea324622a.pdf', 'c78a6fc6973bc00562ff19e14e4b523b.pdf', NULL, '2024-09-11 07:42:41', '0000-00-00 00:00:00'),
(23, 251, 0, '04/PPK-PJEMB/PWS-BOXCLVERT/PJ2/VI/2024', 14818500, '2024-06-04', '2024-06-04', '2024-07-18', 45, 0, 15, '979605d9cae091193f92fce9cfd0f18e.pdf', 'b4bd8dd18c886e97af4de4973f30c772.pdf', NULL, '2024-09-11 07:51:29', '0000-00-00 00:00:00'),
(24, 252, 0, '04/PPK-PJEMB/PRC-BOXCLVRT/PJ2/IV/2024', 19957800, '2024-04-19', '2024-04-19', '2024-05-18', 30, 0, 8, '993efe9163dd49614b0d3e6d7373c5fd.pdf', NULL, NULL, '2024-09-11 08:01:58', '0000-00-00 00:00:00'),
(25, 239, 0, '04/PPK-PJ15/JALUR.2.BIDUK/PJ2/V/2024', 30640500594, '2024-05-08', '2024-05-13', '2024-11-08', 180, 33, 54, NULL, NULL, NULL, '2024-09-11 08:40:32', '0000-00-00 00:00:00'),
(26, 186, 0, '04/PPK-PJ9/KP.JAGUNG/PJ2/V/2024', 16724954895, '2024-05-20', '2024-05-22', '2024-11-17', 180, 29, 10, NULL, NULL, NULL, '2024-09-12 02:37:40', '0000-00-00 00:00:00'),
(27, 145, 0, '04/PPK-PJ8/KWS RT16/PJ2/VI/2024', 156378092, '2024-06-05', '2024-06-05', '2024-08-03', 60, 0, 0, NULL, NULL, NULL, '2024-09-12 03:04:04', '2024-09-12 03:11:22'),
(28, 148, 0, '04/PPK-PJ8/PESANTREN RT.20/PJ2/VI/2024', 180554000, '2024-06-05', '2024-06-05', '2024-08-03', 60, 0, 0, 'f11939341041ddc84bfea1d87ae607d6.pdf', NULL, '842a745c4d12d13f8ed94e5b813cb85b.pdf', '2024-09-12 03:18:56', '0000-00-00 00:00:00'),
(29, 151, 0, '004/PPK-PJ8/PELOPOR/PJ2/VI/2024', 180234364, '2024-06-06', '2024-06-06', '2024-08-04', 60, 0, 0, NULL, NULL, 'f4eb30bcffa7770abca0d4cb6a7df3b5.pdf', '2024-09-12 03:26:25', '0000-00-00 00:00:00'),
(30, 157, 0, '04/PPK-PJ8/ANGIN MAMIRI/PJ2/VI/2024', 180561242, '2024-06-19', '2024-06-19', '2024-08-17', 60, 0, 0, NULL, NULL, 'bb85c35c3e6e7ded836f96dd34831891.pdf', '2024-09-12 03:32:19', '0000-00-00 00:00:00'),
(31, 160, 0, '04/PPK-PJ8/CEMPEDAK/PJ2/VI/2024', 180311511, '2024-06-06', '2024-06-06', '2024-08-04', 60, 0, 0, '94a4c8095bb0daadc0e1ca96a8f4daf0.pdf', NULL, 'a6b478a14efc924b53e15c217fd2f4b7.pdf', '2024-09-12 03:37:17', '0000-00-00 00:00:00'),
(32, 163, 0, '04/PPK-PJ8/JUT 04 SUARAN/PJ2/VII/2024', 156280343, '2024-07-01', '2024-07-01', '2024-08-29', 60, 0, 0, '119f0b25bf9ec858335166f2284dda87.pdf', NULL, '25c918a1cba4f3ed9a81e5ecffb4cb56.pdf', '2024-09-12 03:42:43', '0000-00-00 00:00:00'),
(33, 68, 0, '04/PPK-PJ5/RT6 BM JY/PJ2/V/2024', 161161067, '2024-05-29', '2024-05-29', '2024-07-27', 60, 63, 0, NULL, NULL, NULL, '2024-09-12 03:47:05', '0000-00-00 00:00:00'),
(34, 169, 0, '04/PPK-PJ8/JUT RT17 TD/PJ2/V/2024', 156292598, '2024-05-20', '2024-05-20', '2024-07-18', 60, 0, 0, NULL, NULL, '69abb1096f4f2e5b8a29cb5ab7fa0b26.pdf', '2024-09-12 03:50:16', '0000-00-00 00:00:00'),
(35, 66, 0, '04/PPK-PJ5/PURNASARI JAYA-BUMIJAYA/PJ2/V/2024', 14039000000, '2024-05-31', '2024-06-03', '2024-11-29', 180, 32, 53, '152e826a6a6bf7c5e630c3a07a8aba71.pdf', '0282de740f2b3cc8eb7623d26ace3af5.pdf', '4668210c22ca1c71425f2cea134cf2f6.pdf', '2024-09-12 04:41:48', '2024-09-24 03:27:10'),
(36, 240, 0, '04/PPK-PJ15/PWS-JALUR.2.BIDUK/PJ2/VI/2024', 733710000, '2024-06-03', '2024-06-04', '2024-11-30', 180, 33, 54, NULL, NULL, NULL, '2024-09-16 01:38:01', '0000-00-00 00:00:00'),
(37, 245, 0, '04/PPK-DAK/POROS.SEMANTING/PJ2/I/2024', 8536758872, '2024-01-17', '2024-01-18', '2024-09-13', 240, 0, 55, '9cd0397a7d35b514a2a4e75e48eafdfa.jpeg', '8c6d2455adae1a815f59128514fba035.jpeg', NULL, '2024-09-16 15:45:26', '0000-00-00 00:00:00'),
(38, 246, 0, '04/PPK-DAK/PWS-POROS.SEMANTING/PJ2/I/2024', 348451200, '2024-01-17', '2024-01-18', '2024-09-13', 240, 0, 55, '47f521216eee0bd0d05fa59e6e37cc51.jpeg', '1d0ec233cb0aabe416687e1765ed3119.jpeg', NULL, '2024-09-16 15:50:42', '0000-00-00 00:00:00'),
(39, 184, 0, '04/PPK-PJ9/KP.JAGUNG/PJ2/V/2024', 16724954895, '2024-05-20', '2024-05-22', '2024-11-17', 180, 29, 10, NULL, NULL, NULL, '2024-09-17 03:33:31', '2024-09-17 03:36:41'),
(40, 172, 0, '03/PPK-PJ8/JUT RT. 10 SKN TGH/PJ2/VI/2024', 180560000, '2024-06-05', '2024-06-05', '2024-08-03', 60, 0, 0, 'd20c143150fd160a034be0a685b19ce5.pdf', NULL, NULL, '2024-09-18 03:01:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mc`
--

CREATE TABLE `tb_mc` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `mc` varchar(250) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mc`
--

INSERT INTO `tb_mc` (`id`, `id_paket`, `mc`, `nomor`, `tanggal`, `upload_file`) VALUES
(1, 12, '', '12', '2024-08-01', '58090e50883fee0a4fb68b7f99eb8a65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_sub_kegiatan` varchar(255) DEFAULT NULL,
  `id_jenis_sub_kegiatan` int(11) NOT NULL,
  `paket_pekerjaan` varchar(255) DEFAULT NULL,
  `nama_ppk` varchar(255) DEFAULT NULL,
  `nilai_pagu` decimal(15,2) DEFAULT NULL,
  `sumber_dana` varchar(255) DEFAULT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kampung` int(11) NOT NULL,
  `jenis_pengadaan` enum('Barang','Pekerjaan Konstruksi','Jasa Konsultansi Pengawasan','Jasa Lainnya','Jasa Konsultansi Perencanaan') DEFAULT NULL,
  `metode_pemilihan` enum('E-purchasing','Pengadaan Langsung','Penunjukan Langsung','Tender Cepat','Tender','Seleksi','Pengadaan Langsung','Penunjukan Langsung') DEFAULT NULL,
  `tahun_anggaran` int(11) NOT NULL,
  `ket` varchar(250) DEFAULT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `id_program`, `id_kegiatan`, `id_sub_kegiatan`, `id_jenis_sub_kegiatan`, `paket_pekerjaan`, `nama_ppk`, `nilai_pagu`, `sumber_dana`, `id_kecamatan`, `id_kampung`, `jenis_pengadaan`, `metode_pemilihan`, `tahun_anggaran`, `ket`, `hapus`) VALUES
(32, 1, 1, '1', 42, 'Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 1) (APBD+Bankeu Prov)	', '4', '48641600000.00', '2', 3, 18, 'Pekerjaan Konstruksi', 'Tender', 2024, '-', 0),
(33, 1, 1, '1', 42, 'Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 2) (APBD+Bankeu Prov)', '4', '43670400000.00', '2', 3, 18, 'Pekerjaan Konstruksi', 'Tender', 2024, '-', 0),
(34, 1, 1, '1', 42, 'Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 3) (APBD+Bankeu Prov)	', '4', '33957120000.00', '2', 3, 17, 'Pekerjaan Konstruksi', 'Tender', 2024, '-', 0),
(35, 1, 1, '1', 42, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 1) (APBD)', '4', '1000000000.00', '1', 3, 18, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, '-', 0),
(36, 1, 1, '1', 42, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 1) (APBD)', '4', '100000000.00', '1', 3, 18, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, '-', 0),
(37, 1, 1, '1', 42, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 2) (APBD)', '4', '1000000000.00', '1', 3, 18, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, '-', 0),
(38, 1, 1, '1', 42, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 3) (APBD)', '4', '750000000.00', '1', 3, 18, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, '-', 0),
(39, 1, 1, '1', 42, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 2) (APBD)', '4', '100000000.00', '1', 3, 18, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, '-', 0),
(40, 1, 1, '1', 42, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Singkuang - Mantaritip (Paket 3) (APBD)', '4', '100000000.00', '1', 3, 18, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, '-', 0),
(41, 1, 1, '1', 43, 'Lanjutan Pembangunan Jalan Mantaritip - Buyung-Buyung', '8', '16683150000.00', '1', 3, 18, 'Pekerjaan Konstruksi', 'Tender', 2024, '-', 0),
(49, 1, 1, '1', 43, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Mantaritip - Buyung-Buyung', '8', '500000000.00', '1', 3, 18, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(50, 1, 1, '1', 43, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Mantaritip - Buyung-Buyung', '8', '100000000.00', '1', 3, 18, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(51, 1, 1, '1', 43, 'Pembangunan Jalan Usaha Tani Kelompok Tani Hasil Karya Delapan Kampung Buyung-Buyung', '8', '138294000.00', '1', 9, 132, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(52, 1, 1, '1', 43, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Kelompok Tani Hasil Karya Delapan Kampung Buyung-Buyung', '8', '15000000.00', '1', 9, 132, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(53, 1, 1, '1', 43, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Kelompok Tani Hasil Karya Delapan Kampung Buyung-Buyung', '8', '20000000.00', '1', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(54, 1, 1, '1', 43, 'Pembangunan Jalan Usaha Tani Kelompok Tani Hutan Sei Mangkajang Kampung Pesayan', '8', '138294000.00', '1', 3, 17, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(55, 1, 1, '1', 43, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Kelompok Tani Hutan Sei Mangkajang Kampung Pesayan', '8', '15000000.00', '1', 3, 17, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(56, 1, 1, '1', 43, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Kelompok Tani Hutan Sei Mangkajang Kampung Pesayan', '8', '20000000.00', '1', 3, 17, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(57, 1, 1, '1', 44, 'Pembangunan Jalan Buyung-Buyung - Semurut Jalur 2', '10', '23616450000.00', '1', 9, 132, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(58, 1, 1, '1', 44, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Tubaan-Semurut', '10', '500000000.00', '1', 9, 132, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 1),
(59, 1, 1, '1', 44, 'Konsultan Pengawasan Pembangunan Jalan Buyung-Buyung - Semurut Jalur 2', '10', '550000000.00', '1', 9, 132, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(60, 1, 1, '1', 44, 'Konsultan Perencanaan Pembangunan Jalan Buyung-Buyung - Semurut Jalur 2', '10', '100000000.00', '1', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(61, 1, 1, '1', 45, 'Pembangunan Jalan Nangka RT.04 Kampung Tubaan', '4', '199875000.00', '1', 9, 137, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(62, 1, 1, '1', 45, 'Konsultan Pengawasan Pembangunan Jalan Nangka RT.04 Kampung Tubaan', '4', '15000000.00', '1', 9, 137, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(63, 1, 1, '1', 45, 'Konsultan Perencanaan Pembangunan Jalan Nangka RT.04 Kampung Tubaan', '4', '20000000.00', '1', 9, 137, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(64, 1, 1, '1', 45, 'Lanjutan Pembangunan Jalan Tubaan-Semurut', '4', '19286850000.00', '1', 9, 137, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(65, 1, 1, '1', 45, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Tubaan-Semurut', '4', '500000000.00', '1', 9, 137, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(66, 1, 1, '1', 46, 'Pembangunan Jalan Purnasari Jaya - Bumi Jaya', '8', '14363250000.00', '1', 11, 117, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(67, 1, 1, '1', 46, 'Konsultan Pengawasan Pembangunan Jalan Purnasari Jaya - Bumi Jaya', '8', '450000000.00', '1', 11, 117, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(68, 1, 1, '1', 46, 'Pembangunan Jalan RT 06 Kampung Bumi Jaya', '8', '161540000.00', '1', 11, 112, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(70, 1, 1, '1', 46, 'Konsultan Pengawasan Pembangunan Jalan RT 06 Kampung Bumi Jaya', '8', '15000000.00', '1', 11, 112, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(71, 1, 1, '1', 46, 'Konsultan Perencanaan Pembangunan Jalan RT 06 Kampung Bumi Jaya', '8', '20000000.00', '1', 11, 112, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(72, 1, 1, '1', 47, 'Lanjutan Pembangunan Jalan Kawasan Kampung Teluk Sumbang dan Kawasan Wisata Air Terjun Kec. Biduk-Biduk', '4', '17150100000.00', '1', 13, 131, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(73, 1, 1, '1', 47, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kawasan Kampung Teluk Sumbang dan Kawasan Wisata Air Terjun Kec. Biduk-Biduk', '4', '500000000.00', '1', 13, 131, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(74, 1, 1, '1', 47, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kawasan Kampung Teluk Sumbang dan Kawasan Wisata Air Terjun Kec. Biduk-Biduk', '4', '100000000.00', '1', 13, 131, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(75, 1, 1, '1', 47, 'Lanjutan Pembangunan Jalan RT 01 Labuan Kelambu', '4', '163590000.00', '1', 13, 126, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(76, 1, 1, '1', 47, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan RT 01 Labuan Kelambu', '4', '15000000.00', '1', 13, 126, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(77, 1, 1, '1', 47, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan RT 01 Labuan Kelambu', '4', '20000000.00', '1', 13, 126, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(78, 1, 1, '1', 47, 'Pembangunan Jalan Menuju SDN 001 Kampung Giring-Giring', '4', '181630000.00', '1', 13, 127, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(79, 1, 1, '1', 47, 'Konsultan Pengawasan Pembangunan Jalan Menuju SDN 001 Kampung Giring-Giring', '4', '15000000.00', '1', 13, 127, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(80, 1, 1, '1', 47, 'Konsultan Perencanaan Pembangunan Jalan Menuju SDN 001 Kampung Giring-Giring', '4', '20000000.00', '1', 13, 127, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(81, 1, 1, '1', 48, 'Lanjutan Pembangunan Jalan Usaha Tani Gunung Sari', '9', '163825200.00', '1', 5, 30, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(82, 1, 1, '1', 48, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usaha Tani Gunung Sari', '9', '15000000.00', '1', 5, 30, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(83, 1, 1, '1', 48, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usaha Tani Gunung Sari', '9', '20000000.00', '1', 5, 30, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(84, 1, 1, '1', 48, 'Lanjutan Pembangunan Jalan Usaha Tani Sungai Lawe Kampung Gunung Sari', '9', '163825200.00', '1', 5, 30, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(85, 1, 1, '1', 48, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usaha Tani Sungai Lawe Kampung Gunung Sari', '9', '15000000.00', '1', 5, 30, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(86, 1, 1, '1', 48, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usaha Tani Sungai Lawe Kampung Gunung Sari', '9', '20000000.00', '1', 5, 30, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(87, 1, 1, '1', 48, 'Pembangunan Jalan Gang Ujung Bandara RT 15 Teluk Bayur', '9', '183372500.00', '1', 4, 103, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(88, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Gang Ujung Bandara RT 15 Teluk Bayur', '9', '15000000.00', '1', 4, 103, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(89, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Gang Ujung Bandara RT 15 Teluk Bayur', '9', '20000000.00', '1', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(90, 1, 1, '1', 48, 'Pembangunan Jalan HM. Saleh RT 3 Kelurahan Bedungun', '9', '4670400000.00', '1', 1, 150, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(91, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan HM. Saleh RT 3 Kelurahan Bedungun', '9', '200000000.00', '1', 1, 150, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(92, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan HM. Saleh RT 3 Kelurahan Bedungun', '9', '100000000.00', '1', 1, 150, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(93, 1, 1, '1', 48, 'Pembangunan Jalan Kawasan Gg. Nusa Indah Rinding Teluk Bayur', '9', '2662360000.00', '1', 4, 104, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(94, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Kawasan Gg. Nusa Indah Rinding Teluk Bayur', '9', '200000000.00', '1', 4, 104, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(95, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Kawasan Gg. Nusa Indah Rinding Teluk Bayur', '9', '100000000.00', '1', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(96, 1, 1, '1', 48, 'Pembangunan Jalan Makam Datu Si Panaik', '9', '12332880000.00', '1', 4, 103, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(97, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Makam Datu Si Panaik', '9', '450000000.00', '1', 4, 103, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(98, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Makam Datu Si Panaik', '9', '100000000.00', '1', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(99, 1, 1, '1', 48, 'Pembangunan Jalan Padat Karya - Jalan Cut Nyadien dan sekitarnya Kel. Rinding', '9', '8442000000.00', '1', 4, 104, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(100, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Padat Karya - Jalan Cut Nyadien dan sekitarnya Kel. Rinding', '9', '400000000.00', '1', 4, 104, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(101, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Padat Karya - Jalan Cut Nyadien dan sekitarnya Kel. Rinding', '9', '400000000.00', '1', 4, 104, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(102, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Padat Karya - Jalan Cut Nyadien dan sekitarnya Kel. Rinding', '9', '100000000.00', '1', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(103, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Padat Karya - Jalan Cut Nyadien dan sekitarnya Kel. Rinding', '9', '100000000.00', '1', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(104, 1, 1, '1', 48, 'Pembangunan Jalan Usaha Tani RT.03 Tumbit Melayu', '9', '163825200.00', '1', 4, 27, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(105, 1, 1, '1', 48, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.03 Tumbit Melayu', '9', '15000000.00', '1', 4, 27, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(106, 1, 1, '1', 48, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.03 Tumbit Melayu', '9', '20000000.00', '1', 4, 27, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(107, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan Gang Arif Kampung Sukan Tengah', '3', '180707500.00', '1', 3, 21, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(108, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gang Arif Kampung Sukan Tengah', '3', '15000000.00', '1', 3, 21, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(109, 1, 1, '1', 49, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gang Arif Kampung Sukan Tengah', '3', '20000000.00', '1', 3, 21, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(110, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan Gg Karet Seramut-Limunjan', '3', '163282500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(111, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg Karet Seramut-Limunjan', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(112, 1, 1, '1', 49, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg Karet Seramut-Limunjan', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(113, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan Gg. Masdjuni - Sambaliung', '3', '162975000.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(114, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg. Masdjuni - Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(115, 1, 1, '1', 49, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg. Masdjuni - Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(116, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan Poros Kampung Gurimbang', '3', '9527100000.00', '1', 3, 13, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(117, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Poros Kampung Gurimbang', '3', '400000000.00', '1', 3, 13, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(118, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan RT.07 Kearah RT.04 Kampung Gurimbang Kec. Sambaliung', '3', '180707500.00', '1', 3, 13, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(119, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan RT.07 Kearah RT.04 Kampung Gurimbang Kec. Sambaliung', '3', '15000000.00', '1', 3, 13, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(120, 1, 1, '1', 49, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan RT.07 Kearah RT.04 Kampung Gurimbang Kec. Sambaliung', '3', '20000000.00', '1', 3, 13, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(121, 1, 1, '1', 49, 'Lanjutan Pembangunan Jalan Usaha Tani Rizky RT.22 Kel.Sambaliung', '3', '180668700.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(122, 1, 1, '1', 49, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usaha Tani Rizky RT.22 Kel.Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(123, 1, 1, '1', 49, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usaha Tani Rizky RT.22 Kel.Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(124, 1, 1, '1', 49, 'Pembangunan Jalan Alam Berkah RT.20 Sungai Buntu Kel. Sambaliung', '3', '156722500.00', '1', 1, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(125, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Alam Berkah RT.20 Sungai Buntu Kel. Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(126, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Alam Berkah RT.20 Sungai Buntu Kel. Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(127, 1, 1, '1', 49, 'Pembangunan Jalan Brokoli RT 12 Kampung Sei Bebanir Bangun', '3', '185012500.00', '1', 3, 11, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(128, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Brokoli RT 12 Kampung Sei Bebanir Bangun', '3', '15000000.00', '1', 3, 11, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(129, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Brokoli RT 12 Kampung Sei Bebanir Bangun', '3', '20000000.00', '1', 3, 11, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(130, 1, 1, '1', 49, 'Pembangunan Jalan Gang Asmaran 2 RT.19 Kel. Sambaliung', '3', '156722500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(131, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Gang Asmaran 2 RT.19 Kel. Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(132, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Gang Asmaran 2 RT.19 Kel. Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(133, 1, 1, '1', 49, 'Pembangunan Jalan Gang Pelita RT.1 dan 2 Rantau Panjang', '3', '180707500.00', '1', 3, 19, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(134, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Gang Pelita RT.1 dan 2 Rantau Panjang', '3', '15000000.00', '1', 3, 19, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(135, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Gang Pelita RT.1 dan 2 Rantau Panjang', '3', '20000000.00', '1', 3, 19, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(136, 1, 1, '1', 49, 'Pembangunan Jalan Gang Rukersid 888 Kel. Sambaliung', '3', '156722500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(137, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Gang Rukersid 888 Kel. Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(138, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Gang Rukersid 888 Kel. Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(139, 1, 1, '1', 49, 'Pembangunan Jalan gg. Cempaka Putih Rt. 19 Kel. Sambaliung .', '3', '156722500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(140, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Gang Cempaka Putih RT. 19 Kel. Sambaliung', '3', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(141, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Gang Cempaka Putih RT. 19 Kel. Sambaliung', '3', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(142, 1, 1, '1', 49, 'Pembangunan Jalan Kawasan Kampung Sukan Tengah', '6', '11450040000.00', '1', 3, 21, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(143, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Kawasan Kampung Sukan Tengah', '6', '450000000.00', '1', 3, 21, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(144, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Kawasan Kampung Sukan Tengah', '6', '100000000.00', '1', 3, 21, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(145, 1, 1, '1', 49, 'Pembangunan Jalan Kawasan RT. 16 ( Jl. Garuda, Jl. Sunan Kalijaga, Jl. Bonang, Jl. Ampel dan sekitarnya) Trans Sambaliung', '6', '156722500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(146, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Kawasan RT. 16 ( Jl. Garuda, Jl. Sunan Kalijaga, Jl. Bonang, Jl. Ampel dan sekitarnya) Trans Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(147, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Kawasan RT. 16 ( Jl. Garuda, Jl. Sunan Kalijaga, Jl. Bonang, Jl. Ampel dan sekitarnya) Trans Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(148, 1, 1, '1', 49, 'Pembangunan Jalan Pesantren RT. 20 Kel. Sambaliung', '6', '180707500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(149, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Pesantren RT. 20 Kel. Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(150, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Pesantren RT. 20 Kel. Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(151, 1, 1, '1', 49, 'Pembangunan Jalan Poros Limunjan Gang Pelopor RT.22 Kel. Sambaliung', '6', '180707500.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(152, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Poros Limunjan Gang Pelopor RT.22 Kel. Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(153, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Poros Limunjan Gang Pelopor RT.22 Kel. Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(154, 1, 1, '1', 49, 'Pembangunan Jalan SM. Aminuddin Gg Mariamah RT 08 Kec. Sambaliung', '6', '125050000.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(155, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan SM. Aminuddin Gg Mariamah RT 08 Kec. Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(156, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan SM. Aminuddin Gg Mariamah RT 08 Kec. Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(157, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani Angin Mamiri RT.22 Kel. Sambaliung', '6', '180668700.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(158, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Angin Mamiri RT.22 Kel. Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(159, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Angin Mamiri RT.22 Kel. Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(160, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani Cempedak RT.22 Limunjan Kel. Sambaliung', '6', '180668700.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(161, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Cempedak RT.22 Limunjan Kel. Sambaliung', '6', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(162, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Cempedak RT.22 Limunjan Kel. Sambaliung', '6', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(163, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani RT.04 Kampung Suaran', '6', '156733200.00', '1', 3, 20, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(164, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.04 Kampung Suaran', '6', '15000000.00', '1', 3, 20, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(165, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.04 Kampung Suaran', '6', '20000000.00', '1', 3, 20, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(166, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani RT.06 Kampung Tumbit Dayak', '6', '156733200.00', '1', 3, 23, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(167, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.06 Kampung Tumbit Dayak', '6', '15000000.00', '1', 3, 23, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(168, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.06 Kampung Tumbit Dayak', '6', '20000000.00', '1', 3, 23, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(169, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani RT.07 Kampung Tumbit Dayak', '6', '156733200.00', '1', 3, 23, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(170, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.07 Kampung Tumbit Dayak', '6', '15000000.00', '1', 3, 23, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(171, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.07 Kampung Tumbit Dayak', '6', '20000000.00', '1', 3, 23, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(172, 1, 1, '1', 49, 'Pembangunan Jalan Usaha Tani RT. 10 Kampung Sukan Tengah', '6', '180668700.00', '1', 3, 21, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(173, 1, 1, '1', 49, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT. 10 Kampung Sukan Tengah', '6', '15000000.00', '1', 3, 21, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(174, 1, 1, '1', 49, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT. 10 Kampung Sukan Tengah', '6', '20000000.00', '1', 3, 21, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(175, 1, 1, '1', 50, 'Lanjutan Pembangunan Jalan Kawasan Makassang RT 12 Gunung Tabur', '6', '164000000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(176, 1, 1, '1', 50, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kawasan Makassang RT 12 Gunung Tabur', '6', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(177, 1, 1, '1', 50, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kawasan Makassang RT 12 Gunung Tabur', '6', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(178, 1, 1, '1', 50, 'Lanjutan Pembangunan Jalan RT 14 Gunung Tabur', '6', '164000000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(179, 1, 1, '1', 50, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan RT 14 Gunung Tabur', '6', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(180, 1, 1, '1', 50, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan RT 14 Gunung Tabur', '6', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(181, 1, 1, '1', 50, 'Lanjutan Pembangunan Jalan Usaha Tani RT.06 Kampung Merancang Ulu', '6', '191897700.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(182, 1, 1, '1', 50, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usaha Tani RT.06 Kampung Merancang Ulu', '6', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(183, 1, 1, '1', 50, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usaha Tani RT.06 Kampung Merancang Ulu', '6', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(184, 1, 1, '1', 50, 'Pembangunan Jalan Kampung Jagung Samburakat Kec. Gunung Tabur', '6', '17284680000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(185, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Kampung Jagung Samburakat Kec. Gunung Tabur', '6', '500000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(186, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Kampung Jagung Samburakat Kec. Gunung Tabur', '6', '100000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(187, 1, 1, '1', 50, 'Pembangunan Jalan Kampung Maluang (Jalan Poros Tanjung Batu) - Paribau (Jalan Poros Tanjung Selor)', '6', '15470680000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(188, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Kampung Maluang (Jalan Poros Tanjung Batu) - Paribau (Jalan Poros Tanjung Selor)', '6', '400000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(189, 1, 1, '1', 50, 'Pembangunan Jalan Menuju Makam Raja Baddit Dipattung', '40', '181630000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(190, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Menuju Makam Raja Baddit Dipattung', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(191, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Menuju Makam Raja Baddit Dipattung', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(192, 1, 1, '1', 50, 'Pembangunan Jalan Penghubung RT. 01 dan RT. 09 Maluang', '40', '191880000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(193, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Penghubung RT. 01 dan RT. 09 Maluang', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(194, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Penghubung RT. 01 dan RT. 09 Maluang', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(195, 1, 1, '1', 50, 'Pembangunan Jalan Suka Tani RT 14 Gunung Tabur', '40', '138885000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(196, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Suka Tani RT 14 Gunung Tabur', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(197, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Suka Tani RT 14 Gunung Tabur', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(198, 1, 1, '1', 50, 'Pembangunan Jalan Tembusan dari RT.01 ke RT.05 Kampung Tasuk', '40', '191880000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(199, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Tembusan dari RT.01 ke RT.05 Kampung Tasuk', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(200, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Tembusan dari RT.01 ke RT.05 Kampung Tasuk', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(201, 1, 1, '1', 50, 'Pembangunan Jalan Usaha Tani Manggaris RT.3 Kampung Samburakat', '40', '138885000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(202, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Manggaris RT.3 Kampung Samburakat', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(203, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Manggaris RT.3 Kampung Samburakat', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(204, 1, 1, '1', 50, 'Pembangunan Jalan Usaha Tani Paribau Tembus Gg. Family RT. 07 Kelurahan Gunung Tabur', '40', '162347700.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(205, 1, 1, '1', 50, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Paribau Tembus Gg. Family RT. 07 Kelurahan Gunung Tabur', '40', '15000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(206, 1, 1, '1', 50, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Paribau Tembus Gg. Family RT. 07 Kelurahan Gunung Tabur', '40', '20000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(207, 1, 1, '1', 50, 'Pemasangan Lampu Tematik Jembatan Gunung Tabur', '40', '2800000000.00', '1', 2, 101, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(208, 1, 1, '1', 50, 'Konsultan Pengawasan Pemasangan Lampu Tematik Jembatan Gunung Tabur', '40', '100000000.00', '1', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(209, 1, 1, '1', 50, 'Konsultan Perencanaan Pemasangan Lampu Tematik Jembatan Gunung Tabur', '40', '100000000.00', '1', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(210, 1, 1, '1', 51, 'Lanjutan Pembangunan Jalan Kasai - Teluk Semanting', '3', '19173000000.00', '1', 7, 55, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(211, 1, 1, '1', 51, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kasai - Teluk Semanting', '3', '500000000.00', '1', 7, 55, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(212, 1, 1, '1', 51, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kasai - Teluk Semanting', '3', '100000000.00', '1', 7, 55, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(213, 1, 1, '1', 51, 'Lanjutan Pembangunan Jalan Usiran - Kasai', '3', '3672900000.00', '1', 7, 55, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(214, 1, 1, '1', 51, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usiran - Kasai', '3', '200000000.00', '1', 7, 55, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(215, 1, 1, '1', 51, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usiran - Kasai', '3', '100000000.00', '1', 7, 55, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(216, 1, 1, '1', 51, 'Pembangunan Jalan Usaha Tani Kampung Kasai', '3', '163707000.00', '1', 7, 55, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(217, 1, 1, '1', 51, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Kampung Kasai', '3', '15000000.00', '1', 7, 55, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(218, 1, 1, '1', 51, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Kampung Kasai', '3', '20000000.00', '1', 7, 55, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(219, 1, 1, '1', 51, 'Pembangunan Jalan Usaha Tani Kampung Semanting', '3', '163707000.00', '1', 7, 59, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(220, 1, 1, '1', 51, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Kampung Semanting', '3', '15000000.00', '1', 7, 59, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(221, 1, 1, '1', 51, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Kampung Semanting', '3', '20000000.00', '1', 7, 59, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(222, 1, 1, '1', 52, 'Lanjutan Pembangunan Jalan Teluk Sulaiman - Teluk Sumbang', '10', '38572290000.00', '1', 13, 130, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(223, 1, 1, '1', 52, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Teluk Sulaiman - Teluk Sumbang', '10', '1000000000.00', '1', 13, 130, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(224, 1, 1, '1', 52, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Teluk Sulaiman - Teluk Sumbang', '10', '100000000.00', '1', 13, 130, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(225, 1, 1, '1', 53, 'Lanjutan Pembangunan Jalan Poros Muara Lesan - Merasa (APBD + Bankeu) ', '10', '49784750000.00', '2', 6, 52, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(226, 1, 1, '1', 53, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Poros Muara Lesan - Merasa ', '10', '750000000.00', '1', 6, 52, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(227, 1, 1, '1', 53, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Poros Muara Lesan - Merasa', '10', '100000000.00', '1', 6, 52, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(228, 1, 1, '1', 55, 'Lanjutan Pembangunan Jalan Kawasan Maratua', '7', '9405000000.00', '1', 8, 124, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(229, 1, 1, '1', 55, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kawasan Maratua', '7', '400000000.00', '1', 8, 124, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(230, 1, 1, '1', 56, 'Pembangunan Bahu Jalan Ruas Samburakat - Sambakungan Kecamatan Gunung Tabur', '10', '14345960000.00', '1', 2, 4, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(231, 1, 1, '1', 56, 'Konsultan Pengawasan Pembangunan Bahu Jalan Ruas Samburakat - Sambakungan Kecamatan Gunung Tabur', '10', '450000000.00', '1', 2, 4, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(232, 1, 1, '1', 56, 'Konsultan Perencanaan Pembangunan Bahu Jalan Ruas Samburakat - Sambakungan Kecamatan Gunung Tabur', '10', '100000000.00', '1', 2, 4, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(233, 1, 1, '1', 56, 'Pembangunan Jalan Menuju Jembatan Bena Baru Kec. Sambaliung', '10', '13363200000.00', '1', 3, 12, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(234, 1, 1, '1', 56, 'Konsultan Pengawasan Pembangunan Jalan Menuju Jembatan Bena Baru Kec. Sambaliung', '10', '450000000.00', '1', 3, 12, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(235, 1, 1, '1', 56, 'Konsultan Perencanaan Pembangunan Jalan Menuju Jembatan Bena Baru Kec. Sambaliung', '10', '100000000.00', '1', 3, 12, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(236, 1, 1, '1', 56, 'Pembangunan Jalan Poros Menuju Dermaga dan Jembatan Inaran Kec. Sambaliung', '10', '19264000000.00', '1', 3, 14, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(237, 1, 1, '1', 56, 'Konsultan Pengawasan Pembangunan Jalan Poros Menuju Dermaga dan Jembatan Inaran Kec. Sambaliung', '10', '500000000.00', '1', 3, 14, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(238, 1, 1, '1', 56, 'Konsultan Perencanaan Pembangunan Jalan Poros Menuju Dermaga dan Jembatan Inaran Kec. Sambaliung', '10', '100000000.00', '1', 3, 14, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(239, 1, 1, '1', 57, 'Lanjutan Pembangunan Jalan Jalur Dua Kecamatan Biduk-Biduk (APBD+Bankeu Prov)', '7', '31917671000.00', '2', 13, 126, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(240, 1, 1, '1', 57, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Jalur Dua Kecamatan Biduk-Biduk', '7', '750000000.00', '1', 13, 126, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(241, 1, 1, '1', 58, 'Lanjutan Pembangunan Jalan Kampung Teluk Sumbang - Sinondok - Landas Kecamatan Biduk-Biduk (Bankeu Prov)', '10', '19300000000.00', '3', 13, 131, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(242, 1, 1, '1', 58, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kampung Teluk Sumbang - Sinondok - Landas Kecamatan Biduk-Biduk (Bankeu Prov)', '10', '500000000.00', '3', 13, 131, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(243, 1, 1, '1', 59, 'Penanganan Jalan 122969 - Jl Pelabuhan Mantaritip', '7', '14030000000.00', '5', 3, 18, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(244, 1, 1, '1', 59, 'Jasa Konsultan Pengawasan Penanganan Jalan 122969 - Jl Pelabuhan Mantaritip', '7', '450000000.00', '5', 3, 18, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(245, 1, 1, '1', 60, 'Penanganan Jalan 123132-Jl Poros Teluk Semanting', '7', '8910574000.00', '5', 7, 59, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(246, 1, 1, '1', 60, 'Jasa Konsultan Pengawasan Penanganan Jalan 123132-Jl Poros Teluk Semanting', '7', '350000000.00', '5', 7, 59, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(247, 1, 1, '2', 61, 'Lanjutan Pembangunan Jembatan Muara Lesan', '41', '11676000000.00', '1', 6, 52, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(248, 1, 1, '2', 61, 'Konsultan Pengawasan Lanjutan Pembangunan Jembatan Muara Lesan', '41', '450000000.00', '1', 6, 52, 'Jasa Konsultansi Pengawasan', 'Seleksi', 2024, NULL, 0),
(249, 1, 1, '2', 61, 'Review Design Perencanaan Lanjutan Pembangunan Jembatan Muara Lesan', '41', '100000000.00', '1', 6, 52, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(250, 1, 1, '2', 61, 'Pembangunan Box Culvert Gang Tepian Indah 1 RT.01 Kelurahan Sambaliung', '7', '191400000.00', '1', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(251, 1, 1, '2', 61, 'Konsultan Pengawasan Pembangunan Box Culvert Gang Tepian Indah 1 RT.01 Kelurahan Sambaliung', '7', '15000000.00', '1', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(252, 1, 1, '2', 61, 'Konsultan Perencanaan Pembangunan Box Culvert Gang Tepian Indah 1 RT.01 Kelurahan Sambaliung', '7', '20000000.00', '1', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(253, 1, 1, '3', 62, 'Feasibility Study dan Masterplan Pembangunan Jalan Jalur Utara Maratua', '40', '1250000000.00', '1', 8, 124, 'Jasa Konsultansi Perencanaan', 'Seleksi', 2024, NULL, 0),
(254, 1, 1, '3', 62, 'Konsultan Penyusunan Dokumen Lingkungan Jl. Ade Irma Suryani (Jl. H. Isa IV) Kec. Tanjung Redeb', '40', '100000000.00', '1', 1, 151, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(255, 1, 1, '3', 62, 'Perencanaan Pembangunan Jalan Kampung Menado Gg.semar dan kawasan Gg.Prihatin Kecamatan Teluk Bayur', '40', '90000000.00', '1', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(256, 1, 1, '3', 62, 'Perencanaan Pembangunan Jalan Usaha Tani Buyung-Buyung Kelompok Tani Hasil Karya 3 \'', '40', '90000000.00', '1', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(257, 1, 1, '3', 62, 'Perencanaan Pembangunan Jalan Usaha Tani Buyung-Buyung Kelompok Tani Hasil Karya 6 \'', '40', '90000000.00', '1', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(258, 1, 1, '3', 62, 'Perencanaan Pembangunan Jalan Usaha Tani Buyung-Buyung Kelompok Tani Hasil Karya 8 \'', '40', '90000000.00', '1', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(259, 1, 1, '3', 62, 'Perencanan Pembangunan Jalan Poros Gunung Sari Kecamatan Segah', '40', '90000000.00', '1', 5, 30, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(260, 1, 1, '1', 1, 'Lanjutan Pembangunan Jalan Padat Karya - Jalan Cut Nyak Dien dan Sekitarnya', '4', '9658715000.00', '4', 4, 104, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(261, 1, 1, '1', 1, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Padat Karya - Jalan Cut Nyak Dien dan Sekitarnya', '4', '100000000.00', '4', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(262, 1, 1, '1', 1, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Padat Karya - Jalan Cut Nyak Dien dan Sekitarnya', '4', '100000000.00', '4', 4, 104, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(263, 1, 1, '1', 1, 'Pembangunan Jalan Gg. Berkah dan sekitarnya RT.14 Kel. Rinding', '4', '200000000.00', '4', 4, 104, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(264, 1, 1, '1', 1, 'Konsultan Perencanaan Pembangunan Jalan Gg. Berkah dan sekitarnya RT.14 Kel. Rinding', '4', '20000000.00', '4', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(265, 1, 1, '1', 1, 'Konsultan Pengawasan Pembangunan Jalan Gg. Berkah dan sekitarnya RT.14 Kel. Rinding', '4', '15000000.00', '4', 4, 104, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(266, 1, 1, '1', 1, 'Pembangunan Jalan Gg. Simpati Blok D RT.11 Kel. Rinding', '4', '200000000.00', '4', 4, 104, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(267, 1, 1, '1', 1, 'Konsultan Perencanaan Pembangunan Jalan Gg. Simpati Blok D RT.11 Kel. Rinding', '4', '20000000.00', '4', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(268, 1, 1, '1', 1, 'Konsultan Pengawasan Pembangunan Jalan Gg. Simpati Blok D RT.11 Kel. Rinding', '4', '15000000.00', '4', 4, 104, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(269, 1, 1, '1', 1, 'Pembangunan Jalan RT 07, 09, 11 dan 14 Kelurahan Rinding', '4', '2805600000.00', '4', 4, 104, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(270, 1, 1, '1', 1, 'Konsultan Perencanaan Pembangunan Jalan RT 07, 09, 11 dan 14 Kelurahan Rinding', '4', '100000000.00', '4', 4, 104, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(271, 1, 1, '1', 1, 'Konsultan Pengawasan Pembangunan Jalan RT 07, 09, 11 dan 14 Kelurahan Rinding', '4', '100000000.00', '4', 4, 104, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(272, 1, 1, '1', 2, 'Lanjutan Pembangunan Jalan Long Pikat Menuju Kampung Tumbit Melayu', '9', '882000000.00', '4', 4, 27, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(273, 1, 1, '1', 2, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Long Pikat Menuju Kampung Tumbit Melayu', '9', '60000000.00', '4', 4, 27, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(274, 1, 1, '1', 2, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Long Pikat Menuju Kampung Tumbit Melayu', '9', '40000000.00', '4', 4, 27, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(275, 1, 1, '1', 2, 'Lanjutan Pembangunan Jalan Makam Datu Si Panaik', '9', '9714357000.00', '4', 4, 103, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(276, 1, 1, '1', 2, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Makam Datu Si Panaik', '9', '100000000.00', '4', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(277, 1, 1, '1', 2, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Makam Datu Si Panaik', '9', '100000000.00', '4', 4, 103, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(278, 1, 1, '1', 2, 'Pembangunan Jalan Penjaringan Manunggal Karsa Labanan Jaya Teluk Bayur', '9', '882000000.00', '4', 4, 103, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(279, 1, 1, '1', 2, 'Konsultan Perencanaan Pembangunan Jalan Penjaringan Manunggal Karsa Labanan Jaya Teluk Bayur', '9', '60000000.00', '4', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(280, 1, 1, '1', 2, 'Konsultan Pengawasan Pembangunan Jalan Penjaringan Manunggal Karsa Labanan Jaya Teluk Bayur', '9', '40000000.00', '4', 4, 103, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(281, 1, 1, '1', 3, 'Lanjutan Pembangunan Jalan Kampung Maluang (Jalan Poros Tanjung Batu) - Paribau (Jalan Poros Tanjung Selor)', '6', '6237703000.00', '4', 2, 3, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(282, 1, 1, '1', 3, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kampung Maluang (Jalan Poros Tanjung Batu) - Paribau (Jalan Poros Tanjung Selor)', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(283, 1, 1, '1', 3, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kampung Maluang (Jalan Poros Tanjung Batu) - Paribau (Jalan Poros Tanjung Selor)', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(284, 1, 1, '1', 3, 'Lanjutan Pembangunan Jalan RT.5 dan RT 13 Kampung Maluang', '6', '1777440000.00', '4', 2, 3, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(285, 1, 1, '1', 3, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan RT.5 dan RT 13 Kampung Maluang', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(286, 1, 1, '1', 3, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan RT.5 dan RT 13 Kampung Maluang', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(287, 1, 1, '1', 3, 'Pembangunan Jalan Buah Puri RT.11 Kamp. Maluang Poros Bulungan', '6', '1777440000.00', '4', 2, 3, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(288, 1, 1, '1', 3, 'Konsultan Perencanaan Pembangunan Jalan Buah Puri RT.11 Kamp. Maluang Poros Bulungan', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(289, 1, 1, '1', 3, 'Konsultan Pengawasan Pembangunan Jalan Buah Puri RT.11 Kamp. Maluang Poros Bulungan', '6', '100000000.00', '4', 2, 3, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(290, 1, 1, '1', 4, 'Lanjutan Pembangunan Jalan Gg. Suka Maju SD Ibnu Katsir RT.03', '40', '159695000.00', '4', 1, 148, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(291, 1, 1, '1', 4, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg. Suka Maju SD Ibnu Katsir RT.03', '40', '20000000.00', '4', 1, 148, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(292, 1, 1, '1', 4, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg. Suka Maju SD Ibnu Katsir RT.03', '40', '15000000.00', '4', 1, 148, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(293, 1, 1, '1', 4, 'Lanjutan Pembangunan Jalan Usaha Tani Tunas Lestari Km 33 Lama/KM 28', '40', '159570000.00', '4', 2, 3, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0);
INSERT INTO `tb_paket` (`id`, `id_program`, `id_kegiatan`, `id_sub_kegiatan`, `id_jenis_sub_kegiatan`, `paket_pekerjaan`, `nama_ppk`, `nilai_pagu`, `sumber_dana`, `id_kecamatan`, `id_kampung`, `jenis_pengadaan`, `metode_pemilihan`, `tahun_anggaran`, `ket`, `hapus`) VALUES
(294, 1, 1, '1', 4, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Usaha Tani Tunas Lestari Km 33 Lama/KM 28', '40', '20000000.00', '4', 2, 3, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(295, 1, 1, '1', 4, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Usaha Tani Tunas Lestari Km 33 Lama/KM 28', '40', '15000000.00', '4', 2, 3, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(296, 1, 1, '1', 4, 'Pembangunan Jalan dan Jembatan Kampung Pandan Sari', '40', '179170000.00', '4', 5, 35, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(297, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan dan Jembatan Kampung Pandan Sari', '40', '20000000.00', '4', 5, 35, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(298, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan dan Jembatan Kampung Pandan Sari', '40', '15000000.00', '4', 5, 35, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(299, 1, 1, '1', 4, 'Pembangunan Jalan Gg. Danau Paggat Jl. Danau Indah RT 01 Tumbit Melayu', '40', '89810800.00', '4', 4, 27, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(300, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Gg. Danau Paggat Jl. Danau Indah RT 01 Tumbit Melayu', '40', '15000000.00', '4', 4, 27, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(301, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Gg. Danau Paggat Jl. Danau Indah RT 01 Tumbit', '40', '10000000.00', '4', 4, 27, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(302, 1, 1, '1', 4, 'Pembangunan Jalan Gg. Mulia dalam belakang kantor kejaksaan RT. 17 Gunung Panjang', '40', '159695000.00', '4', 1, 148, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(303, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Gg. Mulia dalam belakang kantor kejaksaan RT. 17 Gunung Panjang', '40', '20000000.00', '4', 1, 148, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(304, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Gg. Mulia dalam belakang kantor kejaksaan RT. 17 Gunung Panjang', '40', '15000000.00', '4', 1, 148, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(305, 1, 1, '1', 4, 'Pembangunan Jalan Gg. Perisai Jl. Batiwakkal RT.8 Gunung Tabur', '40', '158875000.00', '4', 2, 101, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(306, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Gg. Perisai Jl. Batiwakkal RT.8 Gunung Tabur', '40', '20000000.00', '4', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(307, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Gg. Perisai Jl. Batiwakkal RT.8 Gunung Tabur', '40', '15000000.00', '4', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(308, 1, 1, '1', 4, 'Pembangunan Jalan Istiqomah Pondok Pesantren Darurrohman RT.15 Teluk Bayur', '40', '139400000.00', '4', 4, 103, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(309, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Istiqomah Pondok Pesantren Darurrohman RT.15 Teluk Bayur', '40', '20000000.00', '4', 4, 103, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(310, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Istiqomah Pondok Pesantren Darurrohman RT.15 Teluk Bayur', '40', '15000000.00', '4', 4, 103, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(311, 1, 1, '1', 4, 'Pembangunan Jalan Kawasan Kampung Tasuk Gg.Tua', '40', '188600000.00', '4', 2, 2, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(312, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Kawasan Kampung Tasuk Gg.Tua', '40', '20000000.00', '4', 2, 2, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(313, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Kawasan Kampung Tasuk Gg.Tua', '40', '15000000.00', '4', 2, 2, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(314, 1, 1, '1', 4, 'Pembangunan Jalan Usaha Tani Gunung Sari Kampung Gunung Sari', '40', '159688200.00', '4', 5, 30, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(315, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Gunung Sari Kampung Gunung Sari', '40', '20000000.00', '4', 5, 30, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(316, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Gunung Sari Kampung Gunung Sari', '40', '15000000.00', '4', 5, 30, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(317, 1, 1, '1', 4, 'Pembangunan Jalan Usaha Tani Makmur Sejahtera RT 05 Kampung Tumbit Dayak', '40', '162295000.00', '4', 3, 23, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(318, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Makmur Sejahtera RT 05 Kampung Tumbit Dayak', '40', '20000000.00', '4', 3, 23, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(319, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Makmur Sejahtera RT 05 Kampung Tumbit Dayak', '40', '15000000.00', '4', 3, 23, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(320, 1, 1, '1', 4, 'Pembangunan JUT Lestari Jaya RT.5 Kampung Sambakungan', '40', '159570000.00', '4', 2, 5, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(321, 1, 1, '1', 4, 'Konsultan Perencanaan Pembangunan JUT Lestari Jaya RT.5 Kampung Sambakungan', '40', '20000000.00', '4', 2, 5, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(322, 1, 1, '1', 4, 'Konsultan Pengawasan Pembangunan JUT Lestari Jaya RT.5 Kampung Sambakungan', '40', '15000000.00', '4', 2, 5, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(323, 1, 1, '1', 5, 'Lanjutan Pembangunan Jalan Kampung Jagung Samburakat dan Sekitarnya', '7', '14664703000.00', '4', 2, 101, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(324, 1, 1, '1', 5, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kampung Jagung Samburakat dan Sekitarnya', '7', '100000000.00', '4', 2, 101, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(325, 1, 1, '1', 5, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kampung Jagung Samburakat dan Sekitarnya', '7', '100000000.00', '4', 2, 101, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(326, 1, 1, '1', 6, 'Lanjutan Pembangunan Jalan Kelompok usaha tani Kampung Teluk Semanting', '7', '161874900.00', '4', 7, 59, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(327, 1, 1, '1', 6, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kelompok usaha tani Kampung Teluk Semanting', '7', '20000000.00', '4', 7, 59, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(328, 1, 1, '1', 6, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kelompok usaha tani Kampung Teluk Semanting', '7', '15000000.00', '4', 7, 59, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(329, 1, 1, '1', 6, 'Pembangunan Dinding Penahan Jalan Majapahit RT 11', '7', '122692500.00', '4', 2, 6, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(330, 1, 1, '1', 6, 'Konsultan Perencanaan Pembangunan Dinding Penahan Jalan Majapahit RT 11', '7', '15000000.00', '4', 2, 6, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(331, 1, 1, '1', 6, 'Konsultan Pengawasan Pembangunan Dinding Penahan Jalan Majapahit RT 11', '7', '10000000.00', '4', 2, 6, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(332, 1, 1, '1', 6, 'Pembangunan Dinding Penahan Jalan RT 7 dan RT 8 Melati Jaya', '7', '122692500.00', '4', 2, 6, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(333, 1, 1, '1', 6, 'Konsultan Perencanaan Pembangunan Dinding Penahan Jalan RT 7 dan RT 8 Melati Jaya', '7', '15000000.00', '4', 2, 6, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(334, 1, 1, '1', 6, 'Konsultan Pengawasan Pembangunan Dinding Penahan Jalan RT 7 dan RT 8 Melati Jaya', '7', '10000000.00', '4', 2, 6, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(335, 1, 1, '1', 6, 'Pembangunan Jalan Gg. RT.2 Kampung Kasai', '7', '161847500.00', '4', 7, 55, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(336, 1, 1, '1', 6, 'Konsultan Perencanaan Pembangunan Jalan Gg. RT.2 Kampung Kasai', '7', '20000000.00', '4', 7, 55, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(337, 1, 1, '1', 6, 'Konsultan Pengawasan Pembangunan Jalan Gg. RT.2 Kampung Kasai', '7', '15000000.00', '4', 7, 55, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(338, 1, 1, '1', 6, 'Penanganan jalan Poros Kampung Teluk Semanting', '7', '1768836600.00', '4', 7, 59, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(339, 1, 1, '1', 6, 'Konsultan Perencanaan Penanganan jalan Poros Kampung Teluk Semanting', '7', '100000000.00', '4', 7, 59, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(340, 1, 1, '1', 6, 'Konsultan Pengawasan Penanganan jalan Poros Kampung Teluk Semanting', '7', '100000000.00', '4', 7, 59, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(341, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Gg. Campur Sari RT 05 Kampung Tanjung Perengat', '3', '183782500.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(342, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg. Campur Sari RT 05 Kampung Tanjung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(343, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg. Campur Sari RT 05 Kampung Tanjung Perengat', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(344, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Gg. H. Perdana Sambaliung', '3', '193725000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(345, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg. H. Perdana Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(346, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg. H. Perdana Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(347, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Gg. Sabar RT.21 Sei Limunjan Sambaliung', '3', '163897500.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(348, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Gg. Sabar RT.21 Sei Limunjan Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(349, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Gg. Sabar RT.21 Sei Limunjan Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(350, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Kawasan Kampung Sukan Tengah', '3', '4740120000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(351, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kawasan Kampung Sukan Tengah', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(352, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Kawasan Kampung Sukan Tengah', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(353, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Pesantren Sungai Buntu Sambaliung', '3', '193725000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(354, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Pesantren Sungai Buntu Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(355, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Pesantren Sungai Buntu Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(356, 1, 1, '1', 7, 'Lanjutan Pembangunan Jalan Yusransyan RT.20 Sambaliung', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(357, 1, 1, '1', 7, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Yusransyan RT.20 Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(358, 1, 1, '1', 7, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Yusransyan RT.20 Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(359, 1, 1, '1', 7, 'Pembangunan Jalan Daeng Manesa RT. 22', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(360, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Daeng Manesa RT. 22', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(361, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Daeng Manesa RT. 22', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(362, 1, 1, '1', 7, 'Pembangunan Jalan Gang Kuburan Kelurahan Sambaliung', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(363, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Gang Kuburan Kelurahan Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(364, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Gang Kuburan Kelurahan Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(365, 1, 1, '1', 7, 'Pembangunan Jalan Gang Pesantren Kelurahan Sambaliung', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(366, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Gang Pesantren Kelurahan Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(367, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Gang Pesantren Kelurahan Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(368, 1, 1, '1', 7, 'Pembangunan Jalan Gang Sawit Kelurahan Sambaliung', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(369, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Gang Sawit Kelurahan Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(370, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Gang Sawit Kelurahan Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(371, 1, 1, '1', 7, 'Pembangunan Jalan Gg. Ratna RT.21 Limunjan Sambaliung', '3', '163897500.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(372, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Gg. Ratna RT.21 Limunjan Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(373, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Gg. Ratna RT.21 Limunjan Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(374, 1, 1, '1', 7, 'Pembangunan Jalan Gg. Sejahtera RT. 22', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(375, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Gg. Sejahtera RT. 22', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(376, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Gg. Sejahtera RT. 22', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(377, 1, 1, '1', 7, 'Pembangunan Jalan Kampung Gang Perjuangan', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(378, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Kampung Gang Perjuangan', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(379, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Kampung Gang Perjuangan', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(380, 1, 1, '1', 7, 'Pembangunan Jalan Kemakmuran RT. 22', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(381, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Kemakmuran RT. 22', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(382, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Kemakmuran RT. 22', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(383, 1, 1, '1', 7, 'Pembangunan Jalan Sanusi RT. 22', '3', '162975000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(384, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Sanusi RT. 22', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(385, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Sanusi RT. 22', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(386, 1, 1, '1', 7, 'Pembangunan Jalan Sepinang RT.07 Trans Gurimbang', '3', '2276233000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(387, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Sepinang RT.07 Trans Gurimbang', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(388, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Sepinang RT.07 Trans Gurimbang', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(389, 1, 1, '1', 7, 'Pembangunan Jalan Tani Arsidin Limunjan Kec. Sambaliung', '3', '433498500.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(390, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Tani Arsidin Limunjan Kec. Sambaliung', '3', '40000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(391, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Tani Arsidin Limunjan Kec. Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(392, 1, 1, '1', 7, 'Pembangunan Jalan Thamrin Sungai Buntu Sambaliung', '3', '193725000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(393, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Thamrin Sungai Buntu Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(394, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Thamrin Sungai Buntu Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(395, 1, 1, '1', 7, 'Pembangunan Jalan Trans Gurimbang RT 6 Kec. Sambaliung', '3', '193725000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(396, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Trans Gurimbang RT 6 Kec. Sambaliung', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(397, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Trans Gurimbang RT 6 Kec. Sambaliung', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(398, 1, 1, '1', 7, 'Pembangunan Jalan Usaha Tani Sekali RT. 22', '3', '163707000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(399, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Sekali RT. 22', '3', '20000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(400, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Sekali RT. 22', '3', '15000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(401, 1, 1, '1', 7, 'Pembangunan Kawasan Jalan Marjan Mutiara Sambaliung dan sekitarnya', '3', '5726291000.00', '4', 3, 102, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(402, 1, 1, '1', 7, 'Konsultan Perencanaan Pembangunan Kawasan Jalan Marjan Mutiara Sambaliung dan sekitarnya', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(403, 1, 1, '1', 7, 'Konsultan Pengawasan Pembangunan Kawasan Jalan Marjan Mutiara Sambaliung dan sekitarnya ', '3', '100000000.00', '4', 3, 102, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(404, 1, 1, '1', 8, 'Lanjutan Pembangunan Jalan Mantaritip - Buyung-Buyung (APBDP)', '8', '14763240200.00', '4', 9, 132, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(405, 1, 1, '1', 8, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Mantaritip - Buyung-Buyung (APBDP)', '8', '100000000.00', '4', 9, 132, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(406, 1, 1, '1', 8, 'Pembangunan Jalan Usaha Tani RT.01 Kampung Buyung-Buyung', '8', '164179800.00', '4', 9, 132, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(407, 1, 1, '1', 8, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.01 Kampung Buyung-Buyung', '8', '20000000.00', '4', 9, 132, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(408, 1, 1, '1', 8, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.01 Kampung Buyung-Buyung', '8', '15000000.00', '4', 9, 132, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(409, 1, 1, '1', 9, 'Lanjutan Pembangunan Jalan Jl.Ulin Kampung Tubaan', '4', '199977500.00', '4', 9, 137, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(410, 1, 1, '1', 9, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Jl.Ulin Kampung Tubaan', '4', '20000000.00', '4', 9, 137, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(411, 1, 1, '1', 9, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Jl.Ulin Kampung Tubaan', '4', '15000000.00', '4', 9, 137, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(412, 1, 1, '1', 9, 'Lanjutan Pembangunan Jalan Nangka RT 4 Kampung Tubaan', '4', '199977500.00', '4', 9, 137, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(413, 1, 1, '1', 9, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Nangka RT 4 Kampung Tubaan', '4', '20000000.00', '4', 9, 137, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(414, 1, 1, '1', 9, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Nangka RT 4 Kampung Tubaan', '4', '15000000.00', '4', 9, 137, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(415, 1, 1, '1', 9, 'Lanjutan Pembangunan Jalan Tubaan - Semurut (APBDP)', '4', '29263307500.00', '4', 9, 137, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(416, 1, 1, '1', 9, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Tubaan - Semurut (APBDP)', '4', '100000000.00', '4', 9, 137, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(417, 1, 1, '1', 9, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Tubaan - Semurut (APBDP)', '4', '100000000.00', '4', 9, 137, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(418, 1, 1, '1', 9, 'Lanjutan Pembangunan Jalan Walet RT 1 Kampung Tubaan', '4', '199977500.00', '4', 9, 137, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(419, 1, 1, '1', 9, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Walet RT 1 Kampung Tubaan', '4', '20000000.00', '4', 9, 137, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(420, 1, 1, '1', 9, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Walet RT 1 Kampung Tubaan', '4', '15000000.00', '4', 9, 137, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(421, 1, 1, '1', 9, 'Pembangunan Jalan RT 01 Labuan Kelambu ( Sungai Lempot ) Biduk-Biduk', '4', '164205000.00', '4', 13, 126, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(422, 1, 1, '1', 9, 'Konsultan Perencanaan Pembangunan Jalan RT 01 Labuan Kelambu ( Sungai Lempot ) Biduk-Biduk', '4', '20000000.00', '4', 13, 126, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(423, 1, 1, '1', 9, 'Konsultan Pengawasan Pembangunan Jalan RT 01 Labuan Kelambu ( Sungai Lempot ) Biduk-Biduk', '4', '15000000.00', '4', 13, 126, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(424, 1, 1, '1', 63, 'Lanjutan Pembangunan Jalan Tubaan -Tabalar Muara', '7', '19391128899.00', '4', 9, 135, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(425, 1, 1, '1', 63, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Tubaan - Tabalar Muara', '7', '100000000.00', '4', 9, 135, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(426, 1, 1, '1', 63, 'Konsultan Pengawasan Lanjutan Pembangunan Jalan Tubaan - Tabalar Muara', '7', '100000000.00', '4', 9, 135, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(427, 1, 1, '1', 63, 'Pembangunan Jalan Usaha Tani RT.02 Kampung Tabalar Ulu', '7', '183978300.00', '4', 9, 136, 'Pekerjaan Konstruksi', 'Pengadaan Langsung', 2024, NULL, 0),
(428, 1, 1, '1', 63, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani RT.02 Kampung Tabalar Ulu', '7', '20000000.00', '4', 9, 136, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(429, 1, 1, '1', 63, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani RT.02 Kampung Tabalar Ulu', '7', '15000000.00', '4', 9, 136, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(430, 1, 1, '1', 63, 'Pembangunan Jalan Usaha Tani Tengkorak RT 03 Tabalar Ulu', '7', '2767500000.00', '4', 9, 136, 'Pekerjaan Konstruksi', 'Tender', 2024, NULL, 0),
(431, 1, 1, '1', 63, 'Konsultan Perencanaan Pembangunan Jalan Usaha Tani Tengkorak RT 03 Tabalar Ulu', '7', '100000000.00', '4', 9, 136, 'Jasa Konsultansi Pengawasan', 'Pengadaan Langsung', 2024, NULL, 0),
(432, 1, 1, '1', 63, 'Konsultan Pengawasan Pembangunan Jalan Usaha Tani Tengkorak RT 03 Tabalar Ulu ', '7', '100000000.00', '4', 9, 136, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(433, 1, 1, '3', 64, 'Perencanaan Lanjutan pembangunan jalan jalur dua Kecamatan Biduk-Biduk', '8', '100000000.00', '4', 13, 135, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(434, 1, 1, '3', 64, 'Perencanaan Lanjutan Pembangunan jalan kawasan objek wisata air terjun kampung Teluk Sumbang', '8', '100000000.00', '4', 13, 131, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(435, 1, 1, '3', 64, 'Perencanaan Lanjutan pembangunan jalan Kp. Teluk Sumbang - Sinondok - Landas', '8', '100000000.00', '4', 13, 131, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(436, 1, 1, '3', 64, 'Perencanaan Lanjutan Pembangunan Jalan menuju RT 04 Kampung Tabalar Muara Kecamatan Tabalar', '8', '100000000.00', '4', 9, 135, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(437, 1, 1, '3', 64, 'Perencanaan Lanjutan Pembangunan Jalan Purnasari Jaya - Tunggal Bumi', '8', '100000000.00', '4', 11, 117, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(438, 1, 1, '3', 64, 'Perencanaan Pembangunan Jalan Jalur Dua Kampung Teluk Sumbang', '8', '100000000.00', '4', 13, 131, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(439, 1, 1, '3', 64, 'Perencanaan Penanganan Jalan Poros Teluk Semanting (Ruas 1446) Mendukung Kawasan Wisata', '8', '100000000.00', '4', 7, 59, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(440, 1, 1, '3', 65, 'DED Pembangunan Jalan Kawasan dari Rantau Panjang (samping pesantren) menuju poros Mayang Mangurai Kecamatan Teluk Bayur', '3', '956200000.00', '4', 4, 103, 'Jasa Konsultansi Perencanaan', 'Seleksi', 2024, NULL, 0),
(441, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Kawasan Kp. Melati Jaya Gunung Tabur', '3', '95000000.00', '4', 2, 6, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(442, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Poros Tasuk Kec. Gunung Tabur', '3', '95000000.00', '4', 2, 2, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(443, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Poros Trans Bribit Kec. Sambaliung', '3', '95000000.00', '4', 3, 21, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(444, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Tepian Buah - Harapan Jaya Kec. Segah', '3', '95000000.00', '4', 5, 40, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(445, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Trans Gurimbang (Jalur 2) Kec. Sambaliung', '3', '95000000.00', '4', 3, 131, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(446, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pembangunan Jalan Tumbit Melayu Kec. Sambaliung', '3', '95000000.00', '4', 3, 59, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(447, 1, 1, '3', 65, 'Konsultan Perencanaan Lanjutan Pengembangan Jalan Pulau Besing Kec. Gunung Tabur', '3', '95000000.00', '4', 2, 9, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(448, 1, 1, '3', 65, 'Konsultan Perencanaan Pembangunan Jalan Bendungan -Bendungan Cabang I Kec. Gunung Tabur', '3', '95000000.00', '4', 2, 7, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(449, 1, 1, '3', 65, 'Konsultan Perencanaan Pembangunan Jalan Kawasan Trans Gurimbang Kec. Sambaliung', '3', '95000000.00', '4', 3, 13, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(450, 1, 1, '3', 65, 'Lanjutan Perencanaan Pembangunan Jalan Long Lanuk - Merasa (Poros Kelay Lingkar Luar)', '3', '95000000.00', '4', 6, 51, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(451, 1, 1, '3', 65, 'Lanjutan Perencanaan Pembangunan Jalan Singkuang - Mantaritif Kecamatan Sambaliung', '3', '95000000.00', '4', 3, 102, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(452, 1, 1, '3', 65, 'Perencanaan Jalan Tembus dermaga Teluk Sulaiman Biduk-Biduk', '3', '95000000.00', '4', 13, 130, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(453, 1, 1, '3', 65, 'Perencanaan Jalur 2 Biduk-Biduk ( RT 01-RT 03 )', '3', '95000000.00', '4', 13, 126, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(454, 1, 1, '3', 65, 'Perencanaan Teknis Pembangunan Jalan Lestari Jaya Kampung Sambakungan', '3', '100000000.00', '4', 2, 5, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(455, 1, 1, '3', 65, 'Review Desain Lanjutan Pembangunan Jalan Kasai - Semanting Kec. Pulau Derawan', '3', '95000000.00', '4', 7, 55, 'Jasa Konsultansi Perencanaan', 'Pengadaan Langsung', 2024, NULL, 0),
(456, 1, 1, '3', 66, 'Perencanaan Pembangunan Jembatan Sei. Arru Talisayan', '10', '600000000.00', '4', 11, 120, 'Jasa Konsultansi Perencanaan', 'Seleksi', 2024, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket_ppk`
--

CREATE TABLE `tb_paket_ppk` (
  `id_paket_ppk` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nomor_kontrak` varchar(255) NOT NULL,
  `nilai_kontrak` decimal(15,2) NOT NULL,
  `pagu_anggaran` decimal(15,2) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `masa_pelaksanaan` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ppk` varchar(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `tahun_anggaran` year(4) NOT NULL,
  `penyedia_jasa` varchar(255) NOT NULL,
  `konsultan_pengawas` varchar(255) NOT NULL,
  `upload_kontrak_konstruksi` varchar(255) NOT NULL,
  `upload_kontrak_konsultan` varchar(255) NOT NULL,
  `upload_jaminan_pelaksanaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_panjang_penanganan`
--

CREATE TABLE `tb_panjang_penanganan` (
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `panjang_ruas` decimal(10,2) NOT NULL,
  `efektif` decimal(10,2) NOT NULL,
  `aspal` decimal(10,2) NOT NULL,
  `rigid_beton` decimal(10,2) NOT NULL,
  `tanah_pilihan` decimal(10,2) NOT NULL,
  `saluran_drainase` decimal(10,2) NOT NULL,
  `box_culvert` int(11) NOT NULL,
  `jembatan` decimal(10,2) NOT NULL,
  `ket` text DEFAULT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_panjang_penanganan`
--

INSERT INTO `tb_panjang_penanganan` (`id`, `id_paket`, `panjang_ruas`, `efektif`, `aspal`, `rigid_beton`, `tanah_pilihan`, `saluran_drainase`, `box_culvert`, `jembatan`, `ket`, `hapus`) VALUES
(3, 12, '10.00', '20.00', '30.00', '40.00', '50.00', '60.00', 70, '80.00', 'test data mantap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_program`
--

CREATE TABLE `tb_program` (
  `id_program` int(11) NOT NULL,
  `program` varchar(225) NOT NULL,
  `kode_rek_program` varchar(225) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_program`
--

INSERT INTO `tb_program` (`id_program`, `program`, `kode_rek_program`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Program Penyelenggaraan Jalan', '1.03.10', '2024', '2024-08-06 17:32:50', '2024-08-23 14:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress`
--

CREATE TABLE `tb_progress` (
  `id_progress` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `fisik` decimal(5,2) DEFAULT NULL,
  `keuangan` decimal(5,2) DEFAULT NULL,
  `deviasi` decimal(5,2) DEFAULT NULL,
  `upload_foto` text DEFAULT NULL,
  `kendala_hambatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_fisik`
--

CREATE TABLE `tb_progress_fisik` (
  `id_progress_fisik` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jenis_fisik` int(11) NOT NULL,
  `panjang_ruas` decimal(10,2) DEFAULT NULL,
  `panjang_penanganan` decimal(10,2) NOT NULL,
  `efektif` decimal(10,2) DEFAULT NULL,
  `aspal` decimal(10,2) DEFAULT NULL,
  `rigid_beton` decimal(10,2) DEFAULT NULL,
  `panjang_rigid` decimal(10,2) DEFAULT NULL,
  `lebar_rigid` decimal(10,2) DEFAULT NULL,
  `panjang_aspal` decimal(10,2) NOT NULL,
  `lebar_aspal` decimal(10,2) NOT NULL,
  `tanah_pilihan` decimal(10,2) DEFAULT NULL,
  `saluran_drainase` decimal(10,2) DEFAULT NULL,
  `box_culvert` int(11) DEFAULT NULL,
  `jembatan` decimal(10,2) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_progress_fisik`
--

INSERT INTO `tb_progress_fisik` (`id_progress_fisik`, `id_paket`, `jenis_fisik`, `panjang_ruas`, `panjang_penanganan`, `efektif`, `aspal`, `rigid_beton`, `panjang_rigid`, `lebar_rigid`, `panjang_aspal`, `lebar_aspal`, `tanah_pilihan`, `saluran_drainase`, `box_culvert`, `jembatan`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 72, 0, '2000.00', '0.00', '2000.00', '900.00', '0.00', '0.00', '0.00', '900.00', '6.00', '0.00', '1000.00', 2, '0.00', '-', '2024-08-27 08:21:55', '2024-08-27 08:21:55'),
(3, 225, 0, '15000.00', '5500.00', '8000.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '8000.00', '0.00', 14, '0.00', '-', '2024-08-29 15:49:13', '2024-09-23 15:12:48'),
(4, 222, 0, '29800.00', '0.00', '26300.00', '1590.00', '0.00', '0.00', '0.00', '1590.00', '6.00', '1590.00', '0.00', 0, '0.00', 'sisa 1950 belum diaspal rencana Tahun 2025 diaspal ', '2024-08-31 17:02:14', '2024-08-31 17:02:14'),
(5, 41, 0, '14000.00', '0.00', '2000.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '2000.00', '2000.00', 1, '0.00', 'galian saluran', '2024-09-03 03:42:06', '2024-09-03 03:42:06'),
(6, 243, 0, '7204.00', '0.00', '1134.00', '0.00', '1134.00', '1134.00', '7.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'Rigid/Beton hanya satu sisi (kiri)', '2024-09-03 05:20:22', '2024-09-03 05:28:13'),
(7, 241, 1, '7925.00', '0.00', '7925.00', NULL, NULL, '0.00', '0.00', '1000.00', '6.00', '0.00', '1265.00', 3, '0.00', '-', '2024-09-09 10:34:44', '2024-09-25 02:41:23'),
(8, 230, 0, '5800.00', '0.00', '5800.00', NULL, NULL, '0.00', '0.00', '5800.00', '6.00', '0.00', '1600.00', 0, '0.00', '-', '2024-09-09 10:59:23', '2024-09-09 10:59:23'),
(9, 99, 0, '1500.00', '0.00', '0.00', NULL, NULL, '800.00', '5.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '', '2024-09-10 06:21:39', '2024-09-10 06:21:39'),
(10, 66, 0, '14500.00', '0.00', '3575.00', NULL, NULL, '0.00', '0.00', '763.00', '6.00', '3575.00', '0.00', 3, '0.00', '0', '2024-09-12 04:44:00', '2024-09-12 04:44:00'),
(11, 245, 0, '5561.00', '840.00', '840.00', NULL, NULL, '0.00', '0.00', '840.00', '6.00', '0.00', '300.00', 0, '0.00', '', '2024-09-16 16:19:50', '2024-09-16 16:19:50'),
(12, 142, 0, '13.08', '0.00', '13080.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '13080.00', '0.00', 3, '0.00', '', '2024-09-17 01:50:16', '2024-09-17 06:18:14'),
(13, 145, 0, '0.00', '128.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '128.00', 0, '0.00', 'pasang batu', '2024-09-17 01:52:49', '2024-09-17 06:21:37'),
(14, 148, 0, '182.00', '0.00', '1820.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '182.00', '0.00', 0, '0.00', '', '2024-09-17 01:53:19', '2024-09-17 06:29:48'),
(15, 151, 0, '0.00', '180.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '180.00', '0.00', 0, '0.00', '', '2024-09-17 01:54:33', '2024-09-17 01:54:33'),
(16, 157, 0, '150.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '150.00', '0.00', 0, '0.00', '', '2024-09-17 01:55:14', '2024-09-17 06:26:54'),
(17, 228, 0, '1800.00', '1800.00', '1800.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '', '2024-09-17 04:16:23', '2024-09-17 04:16:23'),
(18, 239, 0, '8784.00', '3500.00', '3500.00', NULL, NULL, '0.00', '0.00', '3500.00', '6.00', '0.00', '0.00', 3, '0.00', 'Penanganan Jalur dua menangani 3 ruas jalan yang se jalur', '2024-09-17 04:31:08', '2024-09-17 04:31:08'),
(19, 160, 0, '0.00', '300.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '', '2024-09-18 02:20:01', '2024-09-18 02:20:01'),
(20, 163, 0, '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '320.00', '0.00', 0, '0.00', '', '2024-09-18 02:20:25', '2024-09-18 02:20:25'),
(21, 166, 0, '0.00', '125.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '125.00', '0.00', 0, '0.00', '', '2024-09-18 02:46:14', '2024-09-18 02:46:14'),
(22, 169, 0, '0.00', '303.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '', '2024-09-18 02:52:49', '2024-09-18 02:52:49'),
(23, 172, 0, '0.00', '400.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '400.00', '0.00', 0, '0.00', '', '2024-09-18 02:54:54', '2024-09-18 02:54:54'),
(24, 175, 0, '0.00', '56.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '', '2024-09-20 02:30:40', '2024-09-20 02:30:40'),
(25, 242, 3, '1000.00', '1000.00', '950.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '900.00', '25.00', 25, '0.00', 'coba', '2024-09-24 08:03:58', '2024-09-25 02:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_keuangan`
--

CREATE TABLE `tb_progress_keuangan` (
  `id_progress_keu` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(4) NOT NULL,
  `rencana` decimal(5,2) NOT NULL,
  `fisik` decimal(5,2) DEFAULT NULL,
  `keuangan` decimal(5,2) DEFAULT NULL,
  `deviasi` decimal(5,2) DEFAULT NULL,
  `kendala` varchar(200) NOT NULL,
  `upload_foto` text DEFAULT NULL,
  `foto_report` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_progress_keuangan`
--

INSERT INTO `tb_progress_keuangan` (`id_progress_keu`, `id_paket`, `bulan`, `tahun`, `rencana`, `fisik`, `keuangan`, `deviasi`, `kendala`, `upload_foto`, `foto_report`, `created_at`, `updated_at`) VALUES
(3, 72, 'Agustus', 2024, '31.00', '32.00', '20.00', '0.00', 'tidak ada', '[\"67824e0a37dc89e2668cbf27918758e9.jpeg\"]', '[]', '2024-08-27 08:38:57', '2024-09-04 09:03:08'),
(5, 225, 'Agustus', 2024, '33.95', '34.00', '20.00', '0.05', 'tidak ada', '[\"2f0486ffcba43b39c075696e785a1cd0.jpeg\"]', '[\"f9b2b974025c2aae716f3d0084972f0f.jpeg\",\"d3b648dfbfd1d88163274cc4df888553.jpeg\"]', '2024-08-28 19:59:33', '2024-09-23 15:13:25'),
(7, 222, 'Agustus', 2024, '7.14', '3.23', '20.00', '-3.91', 'Belum Ada', '[\"889c91853340bc26903dca3981e9a417.jpeg\",\"71c1a417c08f3c8703e18ee2f13cd50b.jpeg\",\"d4488f1581650e2b6621ba24fd5b724b.jpeg\"]', '[\"a51931210f317a4715807289d3019966.png\"]', '2024-08-31 17:27:28', '2024-09-04 16:04:16'),
(8, 41, 'Agustus', 2024, '49.72', '71.72', '20.00', '22.00', 'tidak ada', '[\"252306f5c454761ee184fcac69764d83.jpeg\"]', '[]', '2024-09-03 03:43:50', '2024-09-04 09:03:11'),
(9, 243, 'Agustus', 2024, '86.00', '92.88', '80.00', '6.88', 'tidak ada', '[\"f939a20d3cdd728534a35825a7c3e79d.jpg\",\"0b59cc148612fbd98c47d911ad7aff3c.jpg\",\"7cf4b8b9c6a72320bcf0dce082b4568e.jpg\",\"363414129f15bd8703d52814e9778873.jpg\"]', '[]', '2024-09-03 05:22:48', '2024-09-04 09:03:13'),
(10, 241, 'Agustus', 2024, '57.13', '49.59', '20.00', '-7.54', 'Kondisi curah hujan tinggi  ', '[\"36199903df3c628a3f225363656bb596.jpeg\"]', '[\"f6f3aaf565b227410152c65a4284109f.jpeg\",\"9276997faaba09c230d34cd87c3fc8a4.jpeg\",\"d66f74de43e271fc4804c9c7692bc244.jpeg\",\"0502f169b444ef99f8a9bfee6a96c555.jpeg\"]', '2024-09-09 10:29:37', '2024-09-11 03:24:25'),
(11, 230, 'Agustus', 2024, '47.22', '47.22', '30.00', '0.00', 'Tidak Ada', '[\"9c2585ebbb9247b9a3a4359731c38228.jpeg\"]', '[\"eee313d9281a684c65082156e799421f.jpeg\",\"08bf7a86e185207f058c59546727d2b2.jpeg\",\"c7e8adb868732eb19a5efbac83dabf6c.jpeg\",\"738cf686378582619dc10b1e6d67b367.jpeg\"]', '2024-09-09 10:58:06', '2024-09-10 00:21:27'),
(12, 236, 'Agustus', 2024, '42.35', '45.77', '20.00', '3.42', 'Tidak Ada', '[\"55c2dc7271d07fe0b6108d4243998c17.jpeg\"]', '[]', '2024-09-09 13:50:05', '2024-09-09 13:50:05'),
(13, 233, 'Agustus', 2024, '27.72', '27.14', '20.00', '-0.58', 'Tidak Ada', '[\"36778ab1238fbb50602a16038b08d0b6.jpeg\"]', '[]', '2024-09-09 13:51:59', '2024-09-09 13:51:59'),
(14, 57, 'Agustus', 2024, '33.70', '32.55', '20.00', '-1.15', 'Tidak Ada', '[\"8010ce68877611e797857a820524c7c0.jpeg\"]', '[]', '2024-09-09 13:55:00', '2024-09-09 13:55:00'),
(19, 184, 'Agustus', 2024, '41.15', '38.78', '0.00', '-2.37', '', NULL, '[]', '2024-09-17 01:47:07', '2024-09-17 01:47:07'),
(20, 142, 'Agustus', 2024, '47.47', '42.74', '0.00', '-4.73', '', NULL, '[]', '2024-09-17 01:48:03', '2024-09-17 01:48:03'),
(22, 187, 'Agustus', 2024, '38.13', '37.51', '0.00', '-0.62', '', NULL, '[]', '2024-09-17 01:49:01', '2024-09-17 01:49:01'),
(23, 148, 'Agustus', 2024, '100.00', '100.00', '100.00', '0.00', '', NULL, '[]', '2024-09-17 02:16:47', '2024-09-17 02:16:47'),
(24, 245, 'Agustus', 2024, '100.00', '100.00', '100.00', '0.00', 'tidak ada', '[\"c655374cb4da460f6fc47874a4a78b6d.jpg\",\"d3e264decc18391c11362f24f9fec784.jpg\",\"f8f37c676c0c7a50926af0c0cc3a6556.jpg\",\"863bd3cc84a65b5a033350a56307c45a.jpg\"]', '[]', '2024-09-17 04:47:48', '2024-09-17 04:47:48'),
(25, 228, 'Agustus', 2024, '37.03', '37.96', '21.05', '0.93', '', '[\"8a2e02c48e4dcec805677e330576f91a.jpeg\",\"5719307239faf94cee4a976a3fb38424.jpeg\",\"b54cab64f263c19f25d3fd764d7af8e4.jpeg\",\"53a8488f59b9bf4e4b6a5e353bedd2ed.jpeg\"]', '[]', '2024-09-17 04:57:38', '2024-09-17 04:57:38'),
(26, 239, 'Agustus', 2024, '63.45', '64.17', '20.00', '0.72', '', '[\"312c8d579d57fe0f5fe9b69fe3a4a02e.jpeg\",\"6e224c70b68865cf349d2d0957e9e086.jpeg\",\"9ae81248b92958a8233feda910aae157.jpeg\",\"9b0c91added3a60ec06216cb6c2d29cb.jpeg\"]', '[]', '2024-09-17 05:04:57', '2024-09-17 05:04:57'),
(27, 166, 'Juli', 2024, '0.00', '100.00', '0.00', '100.00', '', NULL, '[]', '2024-09-18 02:51:33', '2024-09-18 02:51:33'),
(29, 169, 'Juli', 2024, '0.00', '100.00', '0.00', '100.00', '', NULL, '[]', '2024-09-18 02:53:42', '2024-09-18 02:53:42'),
(32, 175, 'Agustus', 2024, '0.00', '100.00', '0.00', '100.00', '', NULL, '[]', '2024-09-20 02:31:48', '2024-09-20 02:31:48'),
(33, 225, 'September', 2024, '72.44', '70.67', '50.08', '-1.77', 'belum ada', '[\"5d42689a137ff3e2e69e3ed09f405777.jpg\"]', '[\"f9b2b974025c2aae716f3d0084972f0f.jpeg\",\"d3b648dfbfd1d88163274cc4df888553.jpeg\",\"ec38e46d17368b5123223c180da67093.jpeg\",\"40cf8a89d19736426ddddb848d8f4fcc.jpeg\"]', '2024-09-23 14:46:20', '2024-09-23 15:09:26'),
(34, 41, 'September', 2024, '82.08', '79.73', '0.00', '-2.35', '', '[\"8e5a65a086f2f9571ad53abc5ae2895f.jpeg\"]', '[]', '2024-09-24 03:32:23', '2024-09-24 03:32:23'),
(35, 66, 'September', 2024, '60.11', '56.49', '20.00', '-3.62', 'tidak ada', NULL, '[]', '2024-09-24 04:15:29', '2024-09-24 04:15:29'),
(36, 242, 'Agustus', 2024, '50.00', '50.00', '50.00', '0.00', 'coba data saja', '[\"0d5054fe5c4b3dbf291ec2d48a77fb12.jpg\",\"172e08d04b83cb7ca31d5738eb158e65.jpg\",\"29d61e6df8fd461f6e86122c5ef6a1b0.jpg\",\"dbfd5618f937412678eb771c50a593ac.jpg\"]', '[]', '2024-09-25 08:38:07', '2024-09-25 08:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kegiatan`
--

CREATE TABLE `tb_sub_kegiatan` (
  `id_sub` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `sub_kegiatan` varchar(225) NOT NULL,
  `kode_rek_sub` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sub_kegiatan`
--

INSERT INTO `tb_sub_kegiatan` (`id_sub`, `id_kegiatan`, `sub_kegiatan`, `kode_rek_sub`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pembangunan Jalan', '0032', '2024', '2024-08-08 13:54:41', '2024-09-14 00:18:25'),
(2, 1, 'Pembangunan Jembatan', '0040', '2024', '2024-08-08 13:54:41', '2024-09-14 00:20:41'),
(3, 1, 'Penyusunan Rencana, Kebijakan, Strategi dan Teknis Pengembangan Jaringan Jalan serta Perencanaan Teknis Penyelenggaraan Jalan dan Jembatan', '0029', '2024', '2024-08-08 13:54:41', '2024-09-14 00:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumber_dana`
--

CREATE TABLE `tb_sumber_dana` (
  `id_sumber_dana` int(11) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sumber_dana`
--

INSERT INTO `tb_sumber_dana` (`id_sumber_dana`, `sumber_dana`) VALUES
(1, 'APBD'),
(2, 'APBD + Bankeu'),
(3, 'Bankeu Provinsi'),
(4, 'APBD Perubahan'),
(5, 'DAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jenis_user` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pas_photo` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nip`, `jenis_user`, `nama_lengkap`, `gelar`, `alamat`, `email`, `nomor_telp`, `tanggal_lahir`, `pas_photo`, `hak_akses`, `id_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'operator', '827ccb0eea8a706c4c34a16891f84e7b', '0', '1', 'Operator', '0', 'Berau', NULL, NULL, NULL, '49be09c0f5920f958a7f32d422422e6f.jpg', 0, 0, '2023-09-09 02:06:09', '2024-08-19 18:26:07'),
(2, 'admin_md', '827ccb0eea8a706c4c34a16891f84e7b', '0', '3', 'Admin Master Data', NULL, NULL, NULL, NULL, NULL, '800fa698dcca8bff0b7b170f0afa5f29.jpg', 1, 4, '2023-11-09 12:26:12', '2024-09-14 00:56:14'),
(3, 'bambangppk', '827ccb0eea8a706c4c34a16891f84e7b', '19780305 200701 1 011', '2', 'Bambang Edy Maryono, S.E., M.AP', NULL, NULL, NULL, NULL, NULL, '9f80bb67c248b50c1223d161ccf79b1a.jpg', 3, 3, '2023-11-10 09:01:42', '2024-09-21 05:49:03'),
(4, 'ammahppk', 'e10adc3949ba59abbe56e057f20f883e', '19750909 200212 2 005', '2', 'Noer Rahmadani, ST', NULL, 'Berau', 'xxxx@gmail.com', '081212121212', NULL, '4dd5fd7edd44e94c05d5aa451fb80e2f.jpg', 3, 3, '2023-11-10 09:02:30', '2024-09-09 07:21:08'),
(6, 'ruslippk', 'e10adc3949ba59abbe56e057f20f883e', '19700903 200901 1 002', '2', 'Muhammad Rusli, ST', NULL, NULL, NULL, NULL, NULL, '69a51e426ecfa961e08e0ddfcc72c8f3.jpg', 3, 3, '2023-11-10 09:04:00', '2024-09-09 07:19:39'),
(7, 'nainppk', 'e10adc3949ba59abbe56e057f20f883e', '19920712 201903 1 008', '2', 'Dzulqarnain, S.T', NULL, NULL, NULL, NULL, NULL, 'd6e1dff511ebede6711bc9fe98768ed6.jpg', 3, 3, '2023-11-10 09:04:32', '2024-09-09 07:19:55'),
(8, 'nizarppk', '5c5c30712f3d471e111781ff76b88b78', '19940301 201903 1 003', '2', 'Muhammad Nizar, ST', NULL, NULL, NULL, NULL, NULL, '5b5b0c8138d4891a98227a044325ab52.png', 3, 3, '2023-11-10 09:05:18', '2024-09-14 00:26:39'),
(9, 'elmippk', 'e10adc3949ba59abbe56e057f20f883e', '19870620 201903 2 010', '2', 'Elmi Rizka Rahmania, ST', NULL, NULL, NULL, NULL, NULL, '43f19e8f699d9c8ada439e11fc6b3590.jpg', 3, 3, '2023-11-10 09:06:59', '2024-09-14 00:26:50'),
(10, 'bennyppk', 'fad2070b99c1f05339efa1d80948f4f6', '123', '2', 'Benny S. Panjaitan, ST., MT', NULL, 'ssss', 'benotika@gmail.com', '0881', NULL, 'fa8f0359a30806a9b124d82dcc22ed65.png', 2, 3, '2023-12-12 11:59:54', '2024-09-05 16:34:17'),
(11, 'kabidpj2', '827ccb0eea8a706c4c34a16891f84e7b', '0', '6', 'Administrator', NULL, 'Berau', 'xxxx@gmail.com', '08121212122323', NULL, '52359e754934b1405af9acfef1fab2a4.jpg', 6, 2, '2024-01-15 05:08:41', '2024-09-14 01:04:24'),
(12, 'opr_surat', '827ccb0eea8a706c4c34a16891f84e7b', '1', '5', 'Operator Surat', NULL, NULL, NULL, NULL, NULL, '6419f1cc4d1512806307f3a794602cb7.png', 5, 1, '2024-01-15 05:26:32', '2024-09-03 04:51:01'),
(40, 'awangppk', 'e10adc3949ba59abbe56e057f20f883e', '1979', '2', 'A. Awang Idris, SE, MT', NULL, 'Jl. Pemuda', 'xxxx@gmail.com', '081212121212', '1979-05-15', '00ddca97448e69d449a4ae5b279b05e6.png', 0, 0, '2024-08-23 16:22:00', '2024-09-09 07:20:28'),
(41, 'ammarppk', '7c53261cc17b8bfe1c0a87a4250a5a8f', '1980', '2', 'Ammar Fanani, ST., MT', NULL, 'Berau', 'xxxx@gmail.com', '08121212122323', '1981-07-29', 'ec5bc2c5250d49471b09acbdd8e34ed1.png', 0, 0, '2024-08-28 17:22:58', '2024-09-09 07:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nomor_skppk`
--
ALTER TABLE `nomor_skppk`
  ADD PRIMARY KEY (`id_skppk`);

--
-- Indexes for table `report_background_settings`
--
ALTER TABLE `report_background_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_addendum`
--
ALTER TABLE `tb_addendum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bast`
--
ALTER TABLE `tb_bast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_penyedia`
--
ALTER TABLE `tb_data_penyedia`
  ADD PRIMARY KEY (`id_data_penyedia`);

--
-- Indexes for table `tb_fho`
--
ALTER TABLE `tb_fho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_foto_dokumentasi`
--
ALTER TABLE `tb_foto_dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_sub_kegiatan`
--
ALTER TABLE `tb_jenis_sub_kegiatan`
  ADD PRIMARY KEY (`id_jenis_sub_kegiatan`);

--
-- Indexes for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  ADD PRIMARY KEY (`id_kampung`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `tb_mc`
--
ALTER TABLE `tb_mc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket_ppk`
--
ALTER TABLE `tb_paket_ppk`
  ADD PRIMARY KEY (`id_paket_ppk`);

--
-- Indexes for table `tb_panjang_penanganan`
--
ALTER TABLE `tb_panjang_penanganan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tb_progress`
--
ALTER TABLE `tb_progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `tb_progress_fisik`
--
ALTER TABLE `tb_progress_fisik`
  ADD PRIMARY KEY (`id_progress_fisik`);

--
-- Indexes for table `tb_progress_keuangan`
--
ALTER TABLE `tb_progress_keuangan`
  ADD PRIMARY KEY (`id_progress_keu`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `tb_sub_kegiatan`
--
ALTER TABLE `tb_sub_kegiatan`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tb_sumber_dana`
--
ALTER TABLE `tb_sumber_dana`
  ADD PRIMARY KEY (`id_sumber_dana`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nomor_skppk`
--
ALTER TABLE `nomor_skppk`
  MODIFY `id_skppk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_background_settings`
--
ALTER TABLE `report_background_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_addendum`
--
ALTER TABLE `tb_addendum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bast`
--
ALTER TABLE `tb_bast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_data_penyedia`
--
ALTER TABLE `tb_data_penyedia`
  MODIFY `id_data_penyedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_fho`
--
ALTER TABLE `tb_fho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_foto_dokumentasi`
--
ALTER TABLE `tb_foto_dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_jenis_sub_kegiatan`
--
ALTER TABLE `tb_jenis_sub_kegiatan`
  MODIFY `id_jenis_sub_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  MODIFY `id_kampung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_mc`
--
ALTER TABLE `tb_mc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `tb_paket_ppk`
--
ALTER TABLE `tb_paket_ppk`
  MODIFY `id_paket_ppk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_panjang_penanganan`
--
ALTER TABLE `tb_panjang_penanganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_progress_fisik`
--
ALTER TABLE `tb_progress_fisik`
  MODIFY `id_progress_fisik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_progress_keuangan`
--
ALTER TABLE `tb_progress_keuangan`
  MODIFY `id_progress_keu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_sub_kegiatan`
--
ALTER TABLE `tb_sub_kegiatan`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_sumber_dana`
--
ALTER TABLE `tb_sumber_dana`
  MODIFY `id_sumber_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_progress_keuangan`
--
ALTER TABLE `tb_progress_keuangan`
  ADD CONSTRAINT `tb_progress_keuangan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
