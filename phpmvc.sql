-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2023 at 06:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id_barang` int NOT NULL,
  `namaBarang` varchar(255) NOT NULL,
  `penyimpanan` varchar(10) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `stock` int NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `namaBarang`, `penyimpanan`, `merek`, `harga`, `stock`, `img`) VALUES
(35, 'Vivo V29 5G', '8+256', 'Vivo', 5999000, 100, 'vivo v29.png'),
(36, 'Redmi Note 12 Pro 5G', '8+256', 'Xiaomi', 4399000, 50, 'redmi note 12pro.png'),
(37, 'Samsung A24 LTE', '6+128', 'Samsung', 3499000, 150, 'samsung a24 LTE.png'),
(38, 'Realme 10', '6+128', 'Realme', 3299000, 145, 'realme 10.png'),
(39, 'Iphone 12', '6+128', 'Iphone', 9999000, 55, 'iphone12.png'),
(40, 'Oppo A78', '8+256', 'oppo', 3299000, 550, 'oppo a78.png'),
(41, 'Realme GT 2', '6+128', 'Realme', 4899000, 12, 'Realme GT 2.png'),
(42, 'Xiaomi 11T Pro 5G', '12+256', 'Xiaomi', 7599000, 100, 'xiaomi 11t pro 5g.png'),
(43, 'Samsung M33 5G', '6+128', 'Samsung', 3999000, 65, 'Samsung m33 5g.png'),
(44, 'Iphone 15', '6+128', 'Iphone', 15399000, 200, 'iphone 15.png'),
(45, 'Poco M5', '4+128', 'Xiaomi', 2399000, 12, 'Poco M5.png'),
(46, 'Realme 11 Pro 5G', '6+128', 'Realme', 6599000, 300, 'Realme 11 Pro 5G.png');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
