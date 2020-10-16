-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2020 at 03:22 PM
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
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_masyarakat`
--

INSERT INTO `table_masyarakat` (`id_masyarakat`, `nik`, `nama`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `foto_ktp`, `status`) VALUES
(1, '123', 'yahdi', 'malalo', '03-09-2999', 'laki', 'islam', '', 'belum aktif\r\n');

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
  `tanggal_lahir` varchar(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'lutvi', '7e96f0a92e84e79e04c4da1c83b64755', 'lutvi', 'lutvi@gmail.com', 'admin', ''),
(9, 'nadia', 'a2e8cea3392da09d1d31be3fca68efed', 'nadia', 'anggi@gmail.com', 'admin', ''),
(10, 'anggi', '4a283e1f5eb8628c8631718fe87f5917', 'anggi', 'anggi@gmail.com', 'admin', ''),
(11, 'a', '0cc175b9c0f1b6a831c399e269772661', 'yahdi almukaram', 'yahdialmukaram03@gmail.com', 'admin', '');

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
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_paslon`
--
ALTER TABLE `table_paslon`
  MODIFY `id_paslon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
