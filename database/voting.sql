-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2020 at 09:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_masyarakat`
--

CREATE TABLE `table_masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_masyarakat`
--

INSERT INTO `table_masyarakat` (`id_masyarakat`, `id_user`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `agama`, `foto_ktp`, `status_perkawinan`, `status`) VALUES
(1, 0, '123', 'yahdi', 'malalo', 'padang', '03-09-2999', 'laki', '083862743', 'islam', '', 'kawin', 'aktif'),
(2, 0, '44', 't', 't', 't', '09-09-1999', 'l', '09737263723', 'p', '', 'p', 'belum aktif'),
(3, 0, '1771070307960005', 'yahdi almukaram', 'd', 'padang', '1996-07-03', 'Laki Laki', '082169074845', 'Islam', '', 'Sudah Menikah', ''),
(4, 0, '1771070307960005', 'yahdi almukaram', 'd', 'padang', '1996-07-03', 'Laki Laki', '082169074845', 'Islam', '', 'Sudah Menikah', ''),
(5, 0, '3333', 'nadia', 'e', 'padang panjang', '17.10.2020', 'Perempuan', '0982273673', 'Islam', '', 'Sudah Menikah', ''),
(6, 0, '222221', 'mala', 'padang', 'padang', '1996-07-03', 'Laki Laki', '082169074845', 'Islam', '', 'Sudah Menikah', ''),
(7, 0, '1771070307960005', 'mala', 'padang', 'padang', '1996-07-03', 'Laki Laki', '082169074845', 'Islam', '', 'Sudah Menikah', ''),
(8, 0, '222221', 'mala', 'padang', 'padang', '1996-07-03', 'Laki Laki', '0982273673', 'Islam', '', 'Sudah Menikah', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_paslon`
--

CREATE TABLE `table_paslon` (
  `id_paslon` int(11) NOT NULL,
  `nama_paslon` varchar(255) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `image_paslon` varchar(255) NOT NULL,
  `image_wakil` varchar(255) NOT NULL,
  `jumlah_suara` int(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_paslon`
--

INSERT INTO `table_paslon` (`id_paslon`, `nama_paslon`, `nama_wakil`, `image_paslon`, `image_wakil`, `jumlah_suara`, `visi`) VALUES
(2, 'A', 'B', 'ccf7f34028403d0ad279359461240229.PNG', 'afb87f6f59831ff69181485514d8c0ff.jpg', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `password`, `nama`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'yahdi', 'yahdi@gmail.com', 'admin', '0'),
(2, 'yahdi', '58d432c74ad12fc7d0f30300771bec18', 'almukaram', 'yahd@gmail.com', 'admin', '0'),
(23, 'sasa', 'f45731e3d39a1b2330bbf93e9b3de59e', 'sasa', 'yahdialmukaram03@gmail.com', 'admin', '0'),
(30, 'haha', '4e4d6c332b6fe62a63afe56171fd3725', 'haha', 'yahdialmukaram03@gmail.com', 'admin', ''),
(37, 'mala', '7c42f80240d018223a59c64bde548d08', 'mala', 'yahdialmukaram03@gmail.com', 'masyarakat', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_masyarakat`
--
ALTER TABLE `table_masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indexes for table `table_paslon`
--
ALTER TABLE `table_paslon`
  ADD PRIMARY KEY (`id_paslon`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_masyarakat`
--
ALTER TABLE `table_masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_paslon`
--
ALTER TABLE `table_paslon`
  MODIFY `id_paslon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
