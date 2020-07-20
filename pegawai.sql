-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 03:30 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `status` enum('PNS','Non-PNS') NOT NULL,
  `kota` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpegawai`
--

INSERT INTO `tbpegawai` (`nip`, `nama`, `pangkat`, `status`, `kota`, `foto`, `jabatan`) VALUES
('32323535753636', 'Jajang kumala', 'aduh', 'PNS', 'adwa', 'foto/6767.jpg', 'Staff'),
('63257434387257', 'kOHGUAN', 'I/AB', 'PNS', 'KALTENG', 'foto/kb3.jpg', 'KADIS'),
('652882353322', 'TERATERI', 'S3', 'Non-PNS', 'BANJARMASIN', 'foto/pc1.png', 'RESEPSIONIS');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `level`) VALUES
(32, 'admin', 'admin', 'admin'),
(33, 'operator', 'operator', 'operator'),
(36, 'ujang', 'ujang', 'operator'),
(37, 'KUMAHA', 'KUMAHA', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
