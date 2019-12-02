-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 08:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peternakan_ugm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `id_alat` int(11) NOT NULL,
  `Name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Category_id` int(11) DEFAULT NULL,
  `Number_of_rack` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Update_at` datetime DEFAULT current_timestamp(),
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `Name`, `Category_id`, `Number_of_rack`, `image`, `description`, `stok`, `Create_at`, `Update_at`, `deleted`) VALUES
(5, 'Oven', 1, '012', 'alat_20191122221316.jpg', 'Untuk memamaskan atau mengeringkan alat-alat laboratorium atau objek-objek lainnya. Biasanya digunakan untuk mengeringkan peralatan gelas laboratorium, zat-zat kimia maupun pelarut organik.', 4, '2019-11-22 15:13:16', '2019-11-29 21:06:07', 0),
(6, 'Hotplate', 1, '002', 'alat_20191122221420.jpg', 'Alat di laboratorium kimia yang digunakan untuk memanaskan campuran/sampel.', 0, '2019-11-22 15:14:20', '2019-11-29 21:04:00', 0),
(7, 'Tanur Besar', 1, '001', 'alat_20191122230404.jpg', 'Suatu alat sejenis oven berukuran besar, berupa ruangan dengan penyekat termal yang dapat dipanaskan hingga mencapai suhu tertentu, untuk menyelesaikan tugas atau proses tertentu seperti pengeringan, pengerasan, atau perubahan kimiawi.', 5, '2019-11-22 16:04:04', '2019-11-22 23:04:04', 0),
(8, 'Neraca Analitik', 1, '003', 'alat_20191122230521.jpg', 'Neraca Analitik merupakan alat untuk mengukur berat (terutama yang berukuran kecil) atau alat untuk menimbang suatu zat. alat ini biasanya diletakkan di laboratorium sebagai alat ukur dalam kegiatan penelitian', 29, '2019-11-22 16:05:21', '2019-11-22 23:05:21', 0),
(9, 'Jar Fermentor MBF', 1, '004', 'alat_20191122230827.jpg', 'Sebuah peralatan atau sistem yang mampu menyediakan sebuah lingkungan biologis yang dapat menunjang terjadinya reaksi biokimia dari bahan mentah menjadi bahan yang dikehendaki.', 5, '2019-11-22 16:08:27', '2019-11-22 23:08:27', 0),
(10, 'Water Still Distillation', 1, '005', 'alat_20191122231140.jpg', 'Untuk memurnikan air adalah dengan proses distilasi. Proses ini dilakukan dengan merebus air dan uap panasnya dikondensasikan menggunakan condenser', 10, '2019-11-22 16:11:40', '2019-11-22 23:11:40', 0),
(11, 'Kompor Destruksi', 1, '006', 'alat_20191123003155.jpg', 'Untuk perombakan logam organik dengan menggunakan asam kuat, baik tunggal maupun campuran, kemudian dioksidasi menggunakan zat oksidator sehingga dihasilkan logam anorganik bebas', 7, '2019-11-22 17:31:55', '2019-11-23 00:31:55', 0),
(12, 'Mikroskop', 1, '007', 'alat_20191123003535.jpg', 'Melihat obyek yang tidak dapat dilihat dengan kasat mata karena ukurannya sangat kecil (mikroskopis), terutama mikroorganisme.', 20, '2019-11-22 17:35:35', '2019-11-23 00:35:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bahan`
--

INSERT INTO `tb_bahan` (`id_bahan`, `nama_bahan`, `stok`, `satuan`, `create_at`, `update_at`, `deleted`) VALUES
(4, 'Cairan Rumen', 3, 'L', '2019-11-22 15:05:17', NULL, 0),
(6, 'Benih/biji', 50, '', '2019-11-22 15:08:45', NULL, 0),
(7, 'Ternak Fistula', 50, '', '2019-11-22 15:09:09', NULL, 0),
(8, 'Inokulum', 55, '', '2019-11-22 15:09:24', NULL, 0),
(9, 'Pols', 46, '', '2019-11-22 15:09:37', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `Category_id` int(10) NOT NULL,
  `Name_Category` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`Category_id`, `Name_Category`, `Create_at`, `Update_at`, `deleted`) VALUES
(1, 'Besar', '2019-11-04 02:56:11', '2019-11-04 09:56:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_paket`
--

CREATE TABLE `tb_detail_paket` (
  `id_detail_paket` int(11) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_paket`
--

INSERT INTO `tb_detail_paket` (`id_detail_paket`, `id_alat`, `jumlah`, `id_paket`, `create_at`, `update_at`, `deleted`) VALUES
(15, 5, 1, 6, '2019-11-22 16:12:26', NULL, 0),
(16, 6, 1, 6, '2019-11-22 16:12:26', NULL, 0),
(17, 7, 1, 6, '2019-11-22 16:12:27', NULL, 0),
(18, 5, 1, 7, '2019-11-22 16:13:03', NULL, 0),
(19, 8, 1, 7, '2019-11-22 16:13:03', NULL, 0),
(20, 9, 1, 7, '2019-11-22 16:13:03', NULL, 0),
(22, 6, 1, 8, '2019-11-22 16:14:01', NULL, 0),
(23, 7, 1, 8, '2019-11-22 16:14:02', NULL, 0),
(24, 8, 1, 8, '2019-11-22 16:14:02', NULL, 0),
(25, 5, 1, 10, '2019-11-22 16:14:59', NULL, 0),
(26, 8, 1, 10, '2019-11-22 16:14:59', NULL, 0),
(27, 9, 1, 10, '2019-11-22 16:14:59', NULL, 0),
(55, 8, 1, 11, '2019-11-22 16:48:22', NULL, 0),
(56, 9, 1, 11, '2019-11-22 16:48:22', NULL, 0),
(57, 10, 1, 11, '2019-11-22 16:48:22', NULL, 0),
(58, 6, 1, 12, '2019-11-22 17:35:57', NULL, 0),
(59, 10, 1, 12, '2019-11-22 17:35:57', NULL, 0),
(60, 11, 1, 12, '2019-11-22 17:35:57', NULL, 0),
(61, 12, 1, 12, '2019-11-22 17:35:57', NULL, 0),
(62, 5, 1, 14, '2019-11-22 17:36:43', NULL, 0),
(63, 7, 1, 14, '2019-11-22 17:36:43', NULL, 0),
(64, 9, 1, 14, '2019-11-22 17:36:43', NULL, 0),
(65, 10, 1, 14, '2019-11-22 17:36:43', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_level` int(11) NOT NULL,
  `Description` varchar(40) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_level`, `Description`, `Create_at`, `Update_at`) VALUES
(1, 'SuperAdmin', '2019-10-31 04:17:17', '0000-00-00 00:00:00'),
(2, 'Admin', '2019-11-24 17:30:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `Kegiatan` varchar(30) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Off',
  `Phone` varchar(15) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp(),
  `email_karyawan` varchar(30) DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `Name`, `Gender`, `Address`, `Status`, `Phone`, `Create_at`, `update_at`, `email_karyawan`, `deleted`) VALUES
(5, 'Ajeng', 'P', 'Baran Kalitirto', 'Aktif', '089608000446', '2019-11-22 17:37:28', '2019-11-23 00:37:24', 'ajeng300@gmail.com', 0),
(6, 'Ajeng WP', 'P', 'baran berbah sleman', 'Aktif', '08766662222', '2019-11-24 17:31:44', '2019-11-25 00:31:42', 'ajengpraswi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `Jumlah_kerusakan` int(50) DEFAULT NULL,
  `Status` enum('Dalam Perbaikan','Rusak Parah','Selesai Perbaikan') DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `id_alat`, `Jumlah_kerusakan`, `Status`, `Create_at`, `Update_at`) VALUES
(1, 8, 1, 'Dalam Perbaikan', '2019-12-02 07:24:09', '2019-11-25 20:21:06'),
(2, 6, 1, 'Dalam Perbaikan', '2019-12-02 07:24:11', '2019-11-25 20:21:50'),
(3, 7, 1, 'Dalam Perbaikan', '2019-12-02 07:24:13', '2019-11-28 15:38:14'),
(8, 5, 14, 'Dalam Perbaikan', '2019-12-02 07:24:17', '2019-11-29 18:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `Nim` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Status` varchar(10) DEFAULT 'Off',
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime DEFAULT NULL,
  `Email_mahasiswa` varchar(50) DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `Nim`, `Name`, `Gender`, `Address`, `Phone`, `Status`, `Create_at`, `Update_at`, `Email_mahasiswa`, `deleted`) VALUES
(6, '17/414826/PT/07515', 'Ajeng Wuriprastiwi', 'P', 'baran berbah sleman', '089608000446', 'Aktif', '2019-11-29 09:44:20', NULL, 'ajeng300@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `create_at`, `update_at`, `deleted`) VALUES
(6, 'Paket Analisis Proksimat', '2019-11-22 16:12:14', NULL, 0),
(7, 'Paket Analisis Van Soest', '2019-11-22 16:12:51', NULL, 0),
(8, 'Paket Kecernaan in vitro', '2019-11-22 16:13:51', NULL, 0),
(10, 'Paket Kecernaan In sacco', '2019-11-22 16:14:47', NULL, 0),
(11, 'Paket Kecernaan in vivo', '2019-11-22 16:19:09', NULL, 0),
(12, 'Paket Kecernaan gas tes', '2019-11-22 17:19:51', NULL, 0),
(14, 'Wiley Mill', '2019-11-22 17:20:13', NULL, 0),
(15, 'Hammer Mill', '2019-11-22 17:20:26', NULL, 0),
(16, 'Mesin Giling', '2019-11-22 17:20:35', NULL, 0),
(17, 'Chopper', '2019-11-22 17:20:51', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_alat`
--

CREATE TABLE `tb_peminjaman_alat` (
  `id_peminjaman` varchar(40) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `analisa` text DEFAULT NULL,
  `bahan` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `tanggal_penggunaan` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman_alat`
--

INSERT INTO `tb_peminjaman_alat` (`id_peminjaman`, `id_paket`, `analisa`, `bahan`, `status`, `id_mahasiswa`, `tanggal_penggunaan`, `tanggal_selesai`, `Create_at`, `Update_at`) VALUES
('17/409737/PT/0732620191128233142', 6, 'Serat kasar#ADF', 'Pols-5', 2, 3, '2019-11-29', '2019-12-03', '2019-11-28 16:33:54', NULL),
('17/409737/PT/0732620191128234329', 6, 'Kalsium#NDF', 'Cairan Rumen-3', 2, 3, '2019-12-17', '2019-12-17', '2019-11-28 16:46:00', NULL),
('17/414826/PT/0751520191123004216', 6, 'Mikrobiologi', '', 2, 2, NULL, NULL, '2019-11-22 17:45:00', NULL),
('17/414826/PT/0751520191123111601', 6, 'Air#ADF', 'Pols-5', 2, 2, NULL, NULL, '2019-11-23 04:17:15', NULL),
('17/414826/PT/0751520191125200323', 12, 'Fosfor#Aminia (Nh³)#ADF#Selulosa', '', 2, 2, '2019-12-24', '2019-11-30', '2019-11-25 13:04:47', NULL),
('17/414826/PT/0751520191125201104', 6, 'Fosfor#ADF#Energi brutto', '', 2, 2, '2019-11-25', '2019-12-25', '2019-11-25 13:51:24', NULL),
('17/414826/PT/0751520191128153546', 6, 'Air#ADF', 'Pols-3', 2, 2, '2019-11-12', '2019-11-21', '2019-11-28 08:44:33', NULL),
('17/414826/PT/0751520191129164725', 11, 'Air#Serat kasar', 'Cairan Rumen-2#Pols-1', 2, 6, '2019-11-30', '2019-12-01', '2019-11-29 09:48:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `Username` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Update_at` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(10) CHARACTER SET latin1 DEFAULT 'NotAprove',
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `Username`, `Password`, `id_level`, `id_karyawan`, `Create_at`, `Update_at`, `Status`, `deleted`) VALUES
(1, 'Ndaru', '12345', 1, 5, '2019-10-31 06:21:21', '2019-10-31 13:21:21', 'Aprove', 0),
(2, 'Ajeng', '12345', 1, 5, '2019-11-22 17:38:07', '2019-11-23 00:38:07', 'Aprove', 0),
(3, 'AjengW', '12345', 2, 6, '2019-11-24 17:32:11', '2019-11-25 00:32:11', 'Aprove', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_mahasiswa`
--

CREATE TABLE `tb_user_mahasiswa` (
  `id_user_mahasiswa` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_mahasiswa`
--

INSERT INTO `tb_user_mahasiswa` (`id_user_mahasiswa`, `id_mahasiswa`, `Password`, `deleted`) VALUES
(4, 6, '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `Categori_id` (`Category_id`);

--
-- Indexes for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `tb_detail_paket`
--
ALTER TABLE `tb_detail_paket`
  ADD PRIMARY KEY (`id_detail_paket`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `tb_detail_paket_ibfk_2` (`id_paket`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`),
  ADD KEY `tb_kerusakan_ibfk_1` (`id_alat`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `Nim` (`Nim`),
  ADD UNIQUE KEY `Email_mahasiswa` (`Email_mahasiswa`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_jadwal` (`nama_paket`);

--
-- Indexes for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `Update_at` (`Update_at`),
  ADD KEY `id_kegiatan` (`id_paket`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `tb_user_mahasiswa`
--
ALTER TABLE `tb_user_mahasiswa`
  ADD PRIMARY KEY (`id_user_mahasiswa`),
  ADD KEY `fk_id_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alat`
--
ALTER TABLE `tb_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `Category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_paket`
--
ALTER TABLE `tb_detail_paket`
  MODIFY `id_detail_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user_mahasiswa`
--
ALTER TABLE `tb_user_mahasiswa`
  MODIFY `id_user_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD CONSTRAINT `tb_alat_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `tb_category` (`Category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_paket`
--
ALTER TABLE `tb_detail_paket`
  ADD CONSTRAINT `tb_detail_paket_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_detail_paket_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD CONSTRAINT `tb_kerusakan_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  ADD CONSTRAINT `tb_peminjaman_alat_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_id_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_hak_akses` (`id_level`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tb_user_mahasiswa`
--
ALTER TABLE `tb_user_mahasiswa`
  ADD CONSTRAINT `fk_id_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
