-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyphoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(255) NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `waktu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `rUsername` varchar(255) NOT NULL,
  `rPassword` varchar(255) NOT NULL,
  `konfirPass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(255) NOT NULL,
  `id_pengguna` int(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `fotografer` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `waktu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `fk_id` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_id2` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_id2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
