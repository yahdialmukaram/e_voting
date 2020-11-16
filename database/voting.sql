-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2020 at 01:58 PM
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
  `status` varchar(50) NOT NULL,
  `suara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_masyarakat`
--

INSERT INTO `table_masyarakat` (`id_masyarakat`, `id_user`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `agama`, `foto_ktp`, `status_perkawinan`, `status`, `suara`) VALUES
(11, 44, '1771070307960001', 'xaxa', 'xaxa', 'padang', '1996-07-03', 'Laki Laki', '0982273673', 'Islam', '', 'Sudah Menikah', '1', ''),
(12, 38, '1771070307960005', 'jala', 'padang', 'padang', '14.10.2020', 'Laki Laki', '082169074845', 'Islam', '', 'Sudah Menikah', '1', ''),
(15, 45, '1771070307960005', 'caca', 'caca', 'padang', '13.10.2020', 'Laki Laki', '082169074845', 'Islam', '53296e7f4128ac458d0d18ab1659c86b.jpg', 'Belum Menikah', '0', ''),
(16, 48, '1771070307960001', 'yahdi almukaram', 'rere', 'padang', '1996-07-03', 'Perempuan', '0982273673', 'Kristen', 'a027375533fbe40226c9b376472953e4.jpg', 'Belum Menikah', '0', ''),
(24, 51, '1771070307960005', 'sasabila', 'sasa', 'baba', '16.10.2020', 'Laki Laki', '082169074845', 'Islam', 'a1447963ff2e8f6623fad9dbfe55d389.PNG', 'Sudah Menikah', '1', ''),
(25, 57, '1771070307960001', 'dada', 'dada', 'padang', '1996-07-03', 'Laki Laki', '082169074845', 'Islam', 'a1ad89143d644795317b87cfa5ea33e9.jpg', 'Sudah Menikah', '0', '');

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
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_paslon`
--

INSERT INTO `table_paslon` (`id_paslon`, `nama_paslon`, `nama_wakil`, `image_paslon`, `image_wakil`, `visi`) VALUES
(2, 'A', 'B', 'ccf7f34028403d0ad279359461240229.PNG', 'afb87f6f59831ff69181485514d8c0ff.jpg', ''),
(3, 'yaya hama', 'sasa dada', '2ce12aef175a4d335c2476129c2b3b7b.PNG', '3b5b686b2867072df2e20e5ac842001a.jpg', 'yahdi'),
(6, 'caca', 'acaa', '6dcb746aee9af615efb10f22ee774488.jpg', 'a15436e0c86dcabf4afbbda929ead71e.jpg', ' misi ini adalah perang semata adalah misi ini adalah peran  misi ini adalah perang semata adalahmisi ini adalah perang semata adalahmisi ini adalah perang semata adalah misi ini adalah perang semata adalahg semata adalah misi ini adalah perang semata adalah  misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah misi ini adalah perang semata adalah');

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
(51, 'sasa', 'f45731e3d39a1b2330bbf93e9b3de59e', 'saa', 'yahdialmukaram03@gmail.com', 'masyarakat', '2'),
(57, 'dada', 'b01abf84324066bdb4eed4d5bf20f887', 'dada', 'yahdialmukaram03@gmail.com', 'masyarakat', '2');

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
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `table_paslon`
--
ALTER TABLE `table_paslon`
  MODIFY `id_paslon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
