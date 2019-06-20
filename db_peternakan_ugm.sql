-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 08:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `Name` varchar(30) DEFAULT NULL,
  `Categori_id` int(11) DEFAULT NULL,
  `Number_of_rack` varchar(20) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `Category_id` int(10) NOT NULL,
  `Name_Category` varchar(30) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`Category_id`, `Name_Category`, `Create_at`, `Update_at`) VALUES
(6, 'Test sadsfsfsdfsd sdfdsf', '2019-05-17 15:53:22', '2019-05-16 14:20:50'),
(9, 'test kategori 4', '2019-05-17 15:58:20', '2019-05-17 22:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_peminjaman`
--

CREATE TABLE `tb_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `id_peminjaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_level` int(11) NOT NULL,
  `Description` varchar(40) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_level`, `Description`, `Create_at`, `Update_at`) VALUES
(1, 'Superadmin', '2019-06-14 03:27:00', '2019-06-14 10:27:00'),
(2, 'Admin', '2019-06-14 03:27:00', '2019-06-14 10:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_karyawan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `Name`, `Gender`, `Address`, `Status`, `Phone`, `Create_at`, `update_at`, `email_karyawan`) VALUES
(1, 'Ajeng', 'P', 'Berbah', 'Aktif', '0876543332', '2019-06-17 15:54:12', '2019-06-17 22:54:12', 'ajeng300@gmail.com'),
(4, 'nina', 'P', 'magelang', 'Aktif', '087665544444', '2019-06-17 15:18:32', '2019-06-13 22:11:01', 'ninabobo@gmail.com'),
(5, 'Fani', 'P', 'banguntapan', 'Aktif', '089674075180', '2019-06-17 15:07:57', '2019-06-17 22:07:35', 'fani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `Kegiatan` varchar(30) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `Jumlah_kerusakan` int(50) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `Nim` varchar(20) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(2) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime DEFAULT NULL,
  `Email_mahasiswa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `Nim`, `Name`, `Gender`, `Address`, `Phone`, `Status`, `Create_at`, `Update_at`, `Email_mahasiswa`) VALUES
(1, '3163111043', 'Ajeng Wuriprastiwi A', 'P', 'baran', '089608000446', 'Off', '2019-06-14 02:53:57', '2019-05-17 23:19:59', 'ajengpraswi@gmail.com'),
(3, '3163111042', 'Ajeng WP', 'P', 'baran', '089608000446', 'Aktif', '2019-06-14 02:56:05', NULL, 'ajengpraswi@gmail.com'),
(5, '0140126553', 'Wuri', 'P', 'baran berbah sleman', '08765555777', 'Aktif', '2019-06-19 06:57:16', NULL, 'ajeng300@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_alat`
--

CREATE TABLE `tb_peminjaman_alat` (
  `id_peminjaman` int(11) NOT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime DEFAULT NULL,
  `id_kegiatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(10) DEFAULT 'Not Aprove'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `Username`, `Password`, `id_level`, `id_karyawan`, `Create_at`, `Update_at`, `Status`) VALUES
(1, 'Ajeng', 'Ajeng123', 1, 1, '2019-06-17 16:40:14', '2019-06-17 23:40:14', 'Aprove'),
(3, 'AjengW', 'ajeng123', NULL, NULL, '2019-06-17 16:31:13', '2019-06-17 23:31:13', 'Aprove');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_mahasiswa`
--

CREATE TABLE `tb_user_mahasiswa` (
  `id_user_mahasiswa` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `Categori_id` (`Categori_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

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
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `Update_at` (`Update_at`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

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
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `Category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_mahasiswa`
--
ALTER TABLE `tb_user_mahasiswa`
  MODIFY `id_user_mahasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD CONSTRAINT `tb_alat_ibfk_1` FOREIGN KEY (`Categori_id`) REFERENCES `tb_category` (`Category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman_alat` (`id_peminjaman`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_3` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD CONSTRAINT `tb_kerusakan_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  ADD CONSTRAINT `tb_peminjaman_alat_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `tb_kegiatan` (`id_kegiatan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_id_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_hak_akses` (`id_level`);

--
-- Constraints for table `tb_user_mahasiswa`
--
ALTER TABLE `tb_user_mahasiswa`
  ADD CONSTRAINT `fk_id_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
