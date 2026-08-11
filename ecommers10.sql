-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2026 at 04:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers10`
--

-- --------------------------------------------------------

--
-- Table structure for table `tmbbrg`
--

CREATE TABLE `tmbbrg` (
  `id_barang` int(11) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tmbbrg`
--

INSERT INTO `tmbbrg` (`id_barang`, `seri`, `nama_barang`, `jenis`, `harga`, `deskripsi`, `foto`) VALUES
(1, 'rrt', 'tr', 'trtr', 4444, 'rtrtr', 'baju2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_faktur`, `tanggal`, `nama_pembeli`, `alamat`, `ktp`, `id_barang`, `jumlah`, `total`) VALUES
(1, 'fgf', '4444-05-04', 'fgfrt', 'rtrt', 'rtr', 1, 1, 4444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmbbrg`
--
ALTER TABLE `tmbbrg`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tmbbrg`
--
ALTER TABLE `tmbbrg`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
