-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 01:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibimpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`, `keterangan`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'universitas', 'ADMIN UNIVERSITAS'),
('FIF', '1f841f3b1ec2c61594ab6855381e4049', 'fakultas', 'ADMIN FAKULTAS INFORMATIKA');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(7) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisibaik` int(5) NOT NULL,
  `kondisiburuk` int(5) NOT NULL,
  `tanggalinput` date NOT NULL,
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `fakultas`, `jumlah`, `kondisibaik`, `kondisiburuk`, `tanggalinput`, `username`) VALUES
('DBR0001', 'Kursi', 'FIF', 500, 300, 200, '2016-12-01', 'admin'),
('DBR0002', 'Meja', 'FIK', 300, 200, 100, '2016-12-01', 'admin'),
('DBR0003', 'Meja', 'FKB', 1000, 1000, 0, '2016-12-01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` varchar(6) NOT NULL,
  `tanggalpengajuan` date NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idpengajuan`, `tanggalpengajuan`, `fakultas`, `keterangan`, `status`, `username`) VALUES
('UN0001', '2016-12-06', 'FIF', 'Mohon segera', 'tunggu', 'admin'),
('UN0002', '2016-12-06', 'FIK', 'Segera di urus pak ya', 'tunggu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE `tanah` (
  `idtanah` varchar(5) NOT NULL,
  `luas` int(5) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tanggalinput` date NOT NULL,
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanah`
--

INSERT INTO `tanah` (`idtanah`, `luas`, `fakultas`, `lokasi`, `tanggalinput`, `username`) VALUES
('DTN01', 100, 'FIK', '-6.972404, 107.630643', '2016-12-01', 'admin'),
('DTN02', 400, 'FRI', '-6.974928, 107.630031', '2016-12-01', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`idtanah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
