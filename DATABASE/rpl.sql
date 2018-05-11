-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 03:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `username`, `feedback`) VALUES
(1, 'Nanda Syafitri', 'Awesome'),
(7, 'Rinaldi Udra Suhanda', 'Halo, terimakasih atas pelayanannya yang sangat memuaskan.'),
(8, 'Budi Gunawan', 'Sukses Terus D''Caffe-in'),
(9, 'Kurniadinur', 'Menu yang tersedia sangat kekinian hehe'),
(10, 'No name', 'Tambahin lagi menunya');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `password`, `jabatan`) VALUES
(0, 'staff', '1253208465b1efa876f982d8a9e73eef', 'barista'),
(1, 'staff', '1253208465b1efa876f982d8a9e73eef', 'pelayan'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kasir'),
(3, 'staff', '1253208465b1efa876f982d8a9e73eef', 'pelayan');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'tersedia',
  `jumlah_kursi` int(11) NOT NULL DEFAULT '0',
  `jam` time DEFAULT '00:00:00',
  `tanggal` date DEFAULT '0000-00-00',
  `pemesan` varchar(50) DEFAULT NULL,
  `hp` varchar(20) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `no_meja`, `status`, `jumlah_kursi`, `jam`, `tanggal`, `pemesan`, `hp`) VALUES
(1, 1, 'tidak tersedia', 12, NULL, NULL, NULL, '-'),
(2, 2, 'tersedia', 0, NULL, NULL, NULL, '-'),
(3, 3, 'tersedia', 0, NULL, NULL, NULL, '-'),
(4, 4, 'tersedia', 0, NULL, NULL, NULL, '-'),
(5, 5, 'tersedia', 0, NULL, NULL, NULL, '-'),
(6, 6, 'tersedia', 0, NULL, NULL, NULL, '-'),
(7, 7, 'tersedia', 0, NULL, NULL, NULL, '-'),
(8, 8, 'tersedia', 0, NULL, NULL, NULL, '-'),
(9, 9, 'tersedia', 0, NULL, NULL, NULL, '-'),
(10, 10, 'tersedia', 0, NULL, NULL, NULL, '-'),
(11, 11, 'tersedia', 0, NULL, NULL, NULL, '-'),
(12, 12, 'tidak tersedia', 5, '12:00:00', '2018-09-09', 'Nanda Syafitri', '082211276007'),
(13, 13, 'tersedia', 0, NULL, NULL, NULL, '-'),
(14, 14, 'tersedia', 0, NULL, NULL, NULL, '-'),
(15, 15, 'tersedia', 0, NULL, NULL, NULL, '-'),
(16, 16, 'tersedia', 0, NULL, NULL, NULL, '-'),
(17, 17, 'tersedia', 0, NULL, NULL, NULL, '-'),
(18, 18, 'tersedia', 0, NULL, NULL, NULL, '-'),
(19, 0, 'tersedia', 0, '00:00:00', '0000-00-00', NULL, '-');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` varchar(255) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `lama_pembuatan` int(11) NOT NULL DEFAULT '0',
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `harga`, `rating`, `lama_pembuatan`, `gambar`) VALUES
('drink_01', 'Teh Dingin', 5000, 0, 10, NULL),
('drink_02', 'Teh Hijau Dingin', 8000, 0, 10, NULL),
('drink_03', 'Milo Dingin', 7000, 0, 15, NULL),
('drink_04', 'Teh Tarik Dingin', 9000, 0, 8, NULL),
('drink_05', 'Jus Mangga', 12000, 0, 15, NULL),
('drink_06', 'Jus Pisang', 12000, 0, 20, NULL),
('food_01', 'Nasi Goreng', 10000, 0, 20, NULL),
('food_02', 'Nasi Goreng Pattaya', 15000, 0, 10, NULL),
('food_03', 'Nasi Uduk', 15000, 0, 15, NULL),
('food_04', 'Nasi Ayam Geprek', 15000, 0, 15, NULL),
('food_05', 'Mie Aceh', 10000, 0, 15, NULL),
('food_06', 'Martabak Telur', 8000, 0, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activation` varchar(300) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `activation`, `status`) VALUES
('budi99', 'budi99@mhs.unsyiah.ac.id', '81dc9bdb52d04dc20036dbd8313ed055', 'dd3f6f2e8583eb607116c95eab7429ec', '1'),
('budigunawan99', 'gunawanbudi930@gmail.com', '4cdf11b1de19a55eb57f8f8826c22cb4', '9741507dfca92688481c6b940d4e5ff6', '0'),
('nandasy', 'nanda99@mhs.unsyiah.ac.id', '974433564a9f1295406ecb56b2305837', 'c9c1b483aea2c77a99f5b3980aa30a4d', '1'),
('syafitrinanda', 'syafitrinanda@gmail.com', 'c2354a5be4f5b86ebcade4a8c65db7dc', '9f7c4b2c6c9a452a41719bc4b4ebf90b', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
