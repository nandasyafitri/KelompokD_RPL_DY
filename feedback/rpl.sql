-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 06:02 PM
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
(1, 'staff', '1253208465b1efa876f982d8a9e73eef', 'pelayan');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'tersedia',
  `jumlah_kursi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `no_meja`, `status`, `jumlah_kursi`) VALUES
(1, 1, 'tidak tersedia', 1),
(2, 2, 'tidak tersedia', 4),
(3, 3, 'tidak tersedia', 12),
(4, 4, 'tidak tersedia', 12),
(5, 5, 'tersedia', 0),
(6, 6, 'tersedia', 0),
(7, 7, 'tersedia', 0),
(8, 8, 'tidak tersedia', 5),
(9, 8, 'tersedia', 0),
(10, 10, 'tersedia', 0),
(11, 11, 'tersedia', 0),
(12, 12, 'tersedia', 0),
(13, 13, 'tersedia', 0),
(14, 14, 'tidak tersedia', 5),
(15, 15, 'tersedia', 0),
(16, 16, 'tersedia', 0),
(17, 17, 'tersedia', 0),
(18, 18, 'tersedia', 0),
(19, 19, 'tersedia', 0),
(20, 20, 'tersedia', 0),
(21, 19, 'tersedia', 0),
(22, 19, 'tersedia', 0),
(23, 22, 'tersedia', 0),
(24, 50, 'tersedia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'nanda syafitri', 'nanda', 'nanda@example.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'fulan', 'fulan', 'fulan@gmail.com', '59ee8bd9e54c300ed35f1ead57cfdcf0');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
