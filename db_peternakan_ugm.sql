-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 08:39 AM
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
  `Name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Category_id` int(11) DEFAULT NULL,
  `Number_of_rack` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `image` text,
  `description` text,
  `stok` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `Name`, `Category_id`, `Number_of_rack`, `image`, `description`, `stok`, `Create_at`, `Update_at`) VALUES
(1, 'Microscope', 1, '21', 'alat_20190805104034.jpg', 'Alat pancingt', NULL, '2019-08-05 03:40:34', '2019-08-05 10:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `Category_id` int(10) NOT NULL,
  `Name_Category` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`Category_id`, `Name_Category`, `Create_at`, `Update_at`) VALUES
(1, 'Besar', '2019-08-05 03:40:01', '2019-08-05 10:40:01');

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
  `Update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_level`, `Description`, `Create_at`, `Update_at`) VALUES
(1, 'Superadmin', '2019-06-20 03:00:55', '0000-00-00 00:00:00'),
(2, 'Admin', '2019-06-20 03:00:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `Kegiatan` varchar(30) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_karyawan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `Name`, `Gender`, `Address`, `Status`, `Phone`, `Create_at`, `update_at`, `email_karyawan`) VALUES
(1, 'Ajeng', 'P', 'Baran', 'Aktif', '0819999977', '2019-07-11 07:10:24', '2019-07-11 14:10:24', 'Ajeng300@gmail.com'),
(2, 'Sinta', 'P', 'Bandung', 'Aktif', '087666222331', '2019-06-20 07:15:12', '2019-06-20 14:15:08', 'Sinta@gmail.com'),
(3, 'Dita', 'P', 'kalasan', 'Aktif', '0872233111', '2019-06-20 07:34:22', '2019-06-20 14:34:04', 'Dita@gmail.com'),
(4, 'Nanang', 'L', 'Kalasan Yogyakarta', 'Aktif', '0896677743', '2019-07-11 07:11:54', '2019-07-11 14:11:50', 'nanang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `Keterangan` text
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
  `Status` varchar(10) DEFAULT 'Off',
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime DEFAULT NULL,
  `Email_mahasiswa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `Nim`, `Name`, `Gender`, `Address`, `Phone`, `Status`, `Create_at`, `Update_at`, `Email_mahasiswa`) VALUES
(1, '0120120002', 'Ndaru', 'L', 'Ngentak', '08125362536', 'Aktif', '2019-08-05 08:40:50', NULL, 'ndarualbert21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_alat`
--

CREATE TABLE `tb_peminjaman_alat` (
  `id_peminjaman` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(10) CHARACTER SET latin1 DEFAULT 'NotAprove'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `Username`, `Password`, `id_level`, `id_karyawan`, `Create_at`, `Update_at`, `Status`) VALUES
(1, 'Ajeng', 'Ajeng123', 1, 1, '2019-06-20 03:03:45', '2019-06-20 10:03:45', 'Aprove'),
(2, 'Sinta', 'sinta123', 1, 2, '2019-06-20 07:32:25', '2019-06-20 14:32:25', 'Aprove'),
(3, 'pradyta', 'Dita123', 2, 3, '2019-06-20 07:36:27', '2019-06-20 14:36:27', 'Aprove'),
(4, 'Nanang', 'nanang123', 2, 4, '2019-07-11 07:13:05', '2019-07-11 14:13:05', 'Aprove');

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
-- Dumping data for table `tb_user_mahasiswa`
--

INSERT INTO `tb_user_mahasiswa` (`id_user_mahasiswa`, `id_mahasiswa`, `Password`) VALUES
(1, 1, 'jarumblack1');

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
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_jadwal` (`id_jadwal`);

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
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `Category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_user_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD CONSTRAINT `tb_alat_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `tb_category` (`Category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman_alat` (`id_peminjaman`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_3` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD CONSTRAINT `tb_kerusakan_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_peminjaman_alat`
--
ALTER TABLE `tb_peminjaman_alat`
  ADD CONSTRAINT `tb_peminjaman_alat_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `tb_jadwal` (`id_jadwal`) ON UPDATE CASCADE;

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
