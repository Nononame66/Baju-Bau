-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2026 at 09:10 AM
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
(1, 'BK-001', 'Baju Koko', 'Koko', 150000, 'Bahan katun halus, motif batik modern, cocok untuk acara formal dan casual', 'baju1.jpg'),
(2, 'BR-002', 'Baju Running', 'Olahraga', 200000, 'Bahan cotton combed 30s, nyaman dipakai, tersedia berbagai warna', 'baju2.jpg'),
(3, 'CS-003', 'Costum Supardi', 'Fashion', 350000, 'Bahan denim premium, desain modern, tahan lama dan fashionable', 'baju3.jpg');

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
(1, 'fgf', '4444-05-04', 'fgfrt', 'rtrt', 'rtr', 1, 1, 4444),
(2, 'fgf', '0000-00-00', 'fgfrt', 'rtrt', 'rtr', 1, 1, 4444),
(3, 't7', '2026-08-03', 'rr', 'rr', 'rrr', 1, 1, 4444),
(4, 'fgf', '2222-02-22', 'rr', 'rr', 'rtr', 2, 1, 200000),
(5, 'fgf', '2222-02-22', 'rr', 'rr', 'rtr', 2, 1, 200000);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
