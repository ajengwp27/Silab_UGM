-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 08:45 AM
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
  `Update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`id_alat`, `Name`, `Category_id`, `Number_of_rack`, `image`, `description`, `stok`, `Create_at`, `Update_at`) VALUES
(1, 'Microscope', 1, '23', 'alat_20191104095641.jpg', 'asdasdasdasd', 10, '2019-11-04 02:56:41', '2019-11-04 09:56:41'),
(2, 'Microscope besar', 1, '23', 'alat_20191104101033.jpg', 'sdsadasd', 20, '2019-11-04 03:10:33', '2019-11-04 10:10:33'),
(3, 'adasdsada', 1, '21', 'alat_20191104101050.jpg', 'dasdadasd', 10, '2019-11-04 03:10:50', '2019-11-04 10:10:50');

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
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bahan`
--

INSERT INTO `tb_bahan` (`id_bahan`, `nama_bahan`, `stok`, `satuan`, `create_at`, `update_at`) VALUES
(2, 'dsadsadsad', 0, NULL, '2019-11-08 04:00:36', NULL),
(3, 'asasasa', 0, 'L', '2019-11-22 02:16:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `Category_id` int(10) NOT NULL,
  `Name_Category` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`Category_id`, `Name_Category`, `Create_at`, `Update_at`) VALUES
(1, 'Besar', '2019-11-04 02:56:11', '2019-11-04 09:56:11');

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
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_paket`
--

INSERT INTO `tb_detail_paket` (`id_detail_paket`, `id_alat`, `jumlah`, `id_paket`, `create_at`, `update_at`) VALUES
(6, 1, 1, 3, '2019-11-04 03:28:41', NULL),
(8, 3, 1, 3, '2019-11-04 03:28:41', NULL),
(9, 1, 1, 4, '2019-11-05 02:14:03', NULL),
(10, 2, 1, 4, '2019-11-05 02:14:03', NULL),
(11, 3, 1, 4, '2019-11-05 02:14:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_peminjaman`
--

CREATE TABLE `tb_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT 0,
  `id_peminjaman` varchar(40) DEFAULT NULL,
  `analisis` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'SuperAdmin', '2019-10-31 04:17:17', '0000-00-00 00:00:00');

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
  `email_karyawan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `Name`, `Gender`, `Address`, `Status`, `Phone`, `Create_at`, `update_at`, `email_karyawan`) VALUES
(4, 'Ndaru', 'L', 'Ngentak', 'Aktif', '081329040621', '2019-11-08 04:00:10', '2019-11-08 11:00:08', 'ndarualbert21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `Jumlah_kerusakan` int(50) DEFAULT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `id_alat`, `Jumlah_kerusakan`, `Create_at`, `Update_at`) VALUES
(1, 1, 8, '2019-11-25 07:33:29', '2019-11-25 14:33:29'),
(2, 2, 1, '2019-11-25 07:33:59', '2019-11-25 14:33:59'),
(3, 3, 9, '2019-11-25 07:34:15', '2019-11-25 14:34:15');

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
  `Email_mahasiswa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `Nim`, `Name`, `Gender`, `Address`, `Phone`, `Status`, `Create_at`, `Update_at`, `Email_mahasiswa`) VALUES
(1, '17/409762/PT/07351', 'Ndaru', 'L', 'Ngentak', '08125362536', 'Aktif', '2019-11-05 01:38:04', NULL, 'ndarualbert21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `create_at`, `update_at`) VALUES
(3, 'Paket A', '2019-11-04 03:28:28', NULL),
(4, 'Paket AB', '2019-11-05 02:13:56', NULL);

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
  `Update_at` datetime DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman_alat`
--

INSERT INTO `tb_peminjaman_alat` (`id_peminjaman`, `id_paket`, `analisa`, `bahan`, `status`, `id_mahasiswa`, `tanggal_penggunaan`, `tanggal_selesai`, `Create_at`, `Update_at`, `tanggal_pengembalian`) VALUES
('17/409762/PT/0735120191122094236', 3, 'Air#Serat kasar#Fosfor#ADF', '2#3-2#3', 2, 1, NULL, NULL, '2019-11-22 05:28:25', NULL, NULL),
('17/409762/PT/0735120191122094351', 4, 'Lemak kasar#Aminia (Nh³)#Selulosa#Kec. In-Vitro#Mikrobiologi', '2#3-1#3', 2, 1, NULL, NULL, '2019-11-22 05:37:31', NULL, NULL),
('17/409762/PT/0735120191122094616', 3, 'Air#Serat kasar#Fosfor', '2#3-4#4', 2, 1, NULL, NULL, '2019-11-22 05:37:33', NULL, NULL),
('17/409762/PT/0735120191125115520', 3, 'Air#Serat kasar#Fosfor#Energi brutto#Kec. In-Sacco', 'dsadsadsad-3', 2, 1, NULL, NULL, '2019-11-25 05:10:21', NULL, NULL),
('17/409762/PT/0735120191125121618', 3, 'Air#Serat kasar#Fosfor#ADF', 'dsadsadsad-2', 1, 1, '2019-11-25', '2019-12-24', '2019-11-25 05:16:18', NULL, NULL);

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
  `Status` varchar(10) CHARACTER SET latin1 DEFAULT 'NotAprove'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `Username`, `Password`, `id_level`, `id_karyawan`, `Create_at`, `Update_at`, `Status`) VALUES
(1, 'Ndaru', '12345', 1, 4, '2019-10-31 06:21:21', '2019-10-31 13:21:21', 'Aprove');

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
-- Indexes for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_paket` (`id_paket`);

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
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `Category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_paket`
--
ALTER TABLE `tb_detail_paket`
  MODIFY `id_detail_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `tb_detail_paket`
--
ALTER TABLE `tb_detail_paket`
  ADD CONSTRAINT `tb_detail_paket_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat` (`id_alat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_paket_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_peminjaman`
--
ALTER TABLE `tb_detail_peminjaman`
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_3` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_4` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman_alat` (`id_peminjaman`),
  ADD CONSTRAINT `tb_detail_peminjaman_ibfk_5` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON UPDATE CASCADE;

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
