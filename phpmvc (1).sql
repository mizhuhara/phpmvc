-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 09:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `namaBarang` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namaBarang`, `merek`, `stock`, `img`) VALUES
(2, 'xiaomi 12ttt', 'xiaomi', 111, '710578__qt3dvwudb6mvgigetd9t4pji.jpg'),
(15, 'xiaomi 12t', 'xiaomi', 111, '/PHPMVC/public/img/gambar/nepila.jpg'),
(18, 'xiaomi 12t', 'samsung', 222, '/PHPMVC/public/img/gambar/redmi 12.jpg'),
(19, 'oppo', 'oppo', 3, '/PHPMVC/public/img/gambar/redmi 12.jpg'),
(28, 'jjjj', 'samsung', 2, '/PHPMVC/public/img/gambar/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(3, 'Dwipa kumis lele', '0987663', 'dwipakumis@gmail.com', 'Rekayasa Perangkat Lunak'),
(5, 'ningbual', '82929200', 'tisu@gmail.com', 'Rekayasa Perangkat Lunak'),
(7, 'dwika', '9980909', 'dwika@gmail.com', 'Multimedia'),
(10, 'budiweda', '920920920', 'budiweda@gmail.com', 'Teknik Jaringan Kompuer'),
(11, 'budiweda', '920920920', 'budiweda@gmail.com', 'Teknik Jaringan Kompuer'),
(13, 'kazuya222', '7777733', 'nyenkaden@gmail.com', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `akses`) VALUES
(1, 'mangde', 'mangde@gmail.com', '123', 'user'),
(19, 'kazuya', 'kazuya@gmail.com', '12345678', 'admin'),
(21, 'sukro', 'sukro@gmail.com', '12344', 'user'),
(22, 'budiweda', 'budiweda@gmail.com', 'budi', 'user'),
(23, 'anal buana', 'analbuana@gmail.com', 'ningtai', 'user'),
(24, 'yoruichi', 'yoruichi@gmail.com', '12344', 'user'),
(25, 'dery gede', 'duval@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
