-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 01:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disa_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `idlo` int(11) NOT NULL,
  `perusahaan` varchar(500) NOT NULL,
  `definisi` varchar(500) NOT NULL,
  `lowongan` varchar(500) NOT NULL,
  `penerimaan` int(12) NOT NULL,
  `kontak` varchar(500) NOT NULL,
  `bintang` int(1) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`idlo`, `perusahaan`, `definisi`, `lowongan`, `penerimaan`, `kontak`, `bintang`, `foto`) VALUES
(1, 'Perusahaan Aqua', 'Merupakan perusahaan yang bergerak di bidang minuman mineral. ', 'administrasi', 17, 'Dicky Geraldi - 089670033905', 1, 'assets/img/person_1.jpg'),
(2, 'Perusahaan Ternak', 'Perusahaan yang bergerak di bidang peternakan.', 'administrasi', 27, 'Arisandi - 089670033907', 3, 'assets/img/person_2.jpg'),
(3, 'Bank BRI', 'Bank yang bergerak di bidang industri perbankan. ', 'Teller', 38, 'Kokom - 087436728121', 5, 'assets/img/person_3.jpg'),
(4, 'Toko Kue - Fabian', 'Toko kue yang menyediakan berbagai macam aneka kue.', 'Kasir', 5, 'Fabian - 086462134782', 4, 'assets/img/person_1.jpg'),
(5, 'Dotwiki', 'Perusahaan dibidang penerbitan novel dan cerpen', 'Pengetikan', 19, 'Ini - 087325521738', 3, 'assets/img/person_2.jpg'),
(6, 'Bakery', 'Perusahaan yang menyediakan beragam macam kue.', 'Kasir', 4, 'Kimin - 086421345212', 2, 'assets/img/person_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(300) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `password` varchar(32) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `keahlian` varchar(300) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `linked` varchar(50) NOT NULL,
  `tentang` varchar(1000) NOT NULL,
  `pengalaman` varchar(500) NOT NULL,
  `pengalaman1` varchar(500) NOT NULL,
  `sd` varchar(500) NOT NULL,
  `smp` varchar(500) NOT NULL,
  `sma` varchar(500) NOT NULL,
  `perkuliahan` varchar(400) NOT NULL,
  `keahlian0` varchar(400) NOT NULL,
  `keahlian1` varchar(400) NOT NULL,
  `keahlian2` varchar(400) NOT NULL,
  `minat` varchar(400) NOT NULL,
  `minat_1` varchar(400) NOT NULL,
  `minat_2` varchar(400) NOT NULL,
  `minat_nilai` int(12) NOT NULL,
  `minat_nilai1` int(12) NOT NULL,
  `minat_nilai2` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email`, `nama`, `alamat`, `password`, `no_hp`, `keahlian`, `facebook`, `linked`, `tentang`, `pengalaman`, `pengalaman1`, `sd`, `smp`, `sma`, `perkuliahan`, `keahlian0`, `keahlian1`, `keahlian2`, `minat`, `minat_1`, `minat_2`, `minat_nilai`, `minat_nilai1`, `minat_nilai2`) VALUES
('daki@gmail.com', 'Geraldi Anwar', 'Sukabumi', 'e107335d2ac4831d55c74fa5fa335eb1', '089670033901', '', 'facebook.com', 'linkedin.com', 'Aku adalah orang yang dibenci olehnya', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('daku@gmail.com', 'Geraldi', 'Sukabumi', 'e107335d2ac4831d55c74fa5fa335eb1', '089670033905', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('dickygeraldi@gmail.com', 'Dicky', 'MAjalengka', '8de9f5bb0337cf2dea14fb20c67057f0', '089670033905', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
('dickygeraldi_1@gmail.com', 'Ganis', 'mekarsari', 'e107335d2ac4831d55c74fa5fa335eb1', '089670033212', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idlo` int(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idlo`, `email`, `status`) VALUES
(1, 'lo@gmail.com', ''),
(2, 'lo@gmail.com', ''),
(2, 'lo@gmail.com', ''),
(3, 'lo@gmail.com', ''),
(3, 'lo@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_1`
--

CREATE TABLE `transaksi_1` (
  `id_transaksi` int(11) NOT NULL,
  `idlo` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_1`
--

INSERT INTO `transaksi_1` (`id_transaksi`, `idlo`, `email`, `status`) VALUES
(1, 1, 'lo@gmail.com', 'Wawancara'),
(2, 5, 'lo@gmail.com', 'Wawancara'),
(3, 1, 'lo@gmail.com', 'Wawancara'),
(4, 1, 'lo@gmail.com', 'Wawancara'),
(5, 2, 'dickygeraldi_2@gmail.com', 'Wawancara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`idlo`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `transaksi_1`
--
ALTER TABLE `transaksi_1`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `idlo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi_1`
--
ALTER TABLE `transaksi_1`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
