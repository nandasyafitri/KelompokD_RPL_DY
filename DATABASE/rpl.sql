-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 04:51 AM
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
  `feedback` varchar(1000) NOT NULL,
  `balasan` varchar(1000) NOT NULL DEFAULT 'Belum ada tanggapan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `username`, `feedback`, `balasan`) VALUES
(1, 'Nanda Syafitri', 'Awesome', 'Thanks'),
(7, 'Rinaldi Udra Suhanda', 'Halo, terimakasih atas pelayanannya yang sangat memuaskan.', 'Belum ada tanggapan'),
(8, 'Budi Gunawan', 'Sukses Terus D''Caffe-in', 'Terimakasih, anda senang kami bangga'),
(9, 'Kurniadinur', 'Menu yang tersedia sangat kekinian hehe', 'Belum ada tanggapan'),
(10, 'No name', 'Tambahin lagi menunya', 'Belum ada tanggapan'),
(12, 'Rinaldi aja', 'Semoga sukses terus', 'Terima Kasih'),
(14, 'nana', 'cafenya bagus banget', 'Terima Kasih'),
(15, 'lala', 'enak makanannya', 'Terima Kasih ya'),
(17, 'teslagi', 'hehehe', 'terimakasih'),
(18, 'nandasyafitri', 'tttttttttttt', 'Belum ada tanggapan'),
(19, 'nandasyafitri', 'ttttt', 'Belum ada tanggapan');

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
-- Table structure for table `listorder`
--

CREATE TABLE `listorder` (
  `id_order` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `username` varchar(255) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'tersedia',
  `jumlah_kursi` int(11) NOT NULL DEFAULT '0',
  `jam` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `hp` varchar(20) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`username`, `no_meja`, `status`, `jumlah_kursi`, `jam`, `tanggal`, `hp`) VALUES
('', 1, 'tersedia', 0, NULL, NULL, '-'),
('', 2, 'tersedia', 0, NULL, NULL, '-'),
('', 3, 'tersedia', 0, NULL, NULL, '-'),
('', 4, 'tersedia', 0, NULL, NULL, '-'),
('', 5, 'tersedia', 0, NULL, NULL, '-'),
('', 6, 'tersedia', 0, NULL, NULL, '-'),
('', 7, 'tersedia', 0, NULL, NULL, '-'),
('', 8, 'tersedia', 0, NULL, NULL, '-'),
('', 9, 'tersedia', 0, NULL, NULL, '-'),
('', 10, 'tersedia', 0, NULL, NULL, '-'),
('', 11, 'tersedia', 0, NULL, NULL, '-'),
('', 12, 'tersedia', 0, NULL, NULL, '-'),
('', 13, 'tersedia', 0, NULL, NULL, '-'),
('', 14, 'tersedia', 0, NULL, NULL, '-'),
('', 15, 'tersedia', 0, NULL, NULL, '-'),
('', 16, 'tersedia', 0, NULL, NULL, '-'),
('', 17, 'tersedia', 0, NULL, NULL, '-'),
('', 18, 'tersedia', 0, NULL, NULL, '-'),
('', 19, 'tersedia', 0, NULL, NULL, '-');

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
  `gambar` varchar(255) DEFAULT NULL,
  `jenis_menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `harga`, `rating`, `lama_pembuatan`, `gambar`, `jenis_menu`) VALUES
('drink_01', 'Teh Dingin', 4000, 4, 10, 'tehdingin.jpg', 'Minuman'),
('drink_02', 'Teh Hijau Dingin', 8000, 0, 10, 'tehhijaudingin.JPG', 'Minuman'),
('drink_03', 'Milo Dingin', 7000, 0, 15, 'milodingin.jpg', 'Minuman'),
('drink_04', 'Teh Tarik Dingin', 9000, 0, 8, 'tehtarikdingin.jpg', 'Minuman'),
('drink_05', 'Jus Mangga', 12000, 0, 15, 'jusmangga.JPG', 'Minuman'),
('drink_06', 'Jus Pisang', 12000, 0, 20, 'juspisang.jpg', 'Minuman'),
('food_01', 'Nasi Goreng', 10000, 0, 20, 'nasigoreng.jpg', 'Makanan'),
('food_02', 'Nasi Goreng Pattaya', 15000, 0, 10, 'nasigorengpattaya.jpg', 'Makanan'),
('food_03', 'Nasi Uduk', 15000, 0, 15, 'nasiuduk.jpg', 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'belum bayar',
  `username` varchar(255) NOT NULL,
  `no_meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `status`, `username`, `no_meja`) VALUES
(15, 'sudah bayar', 'nandasyafitri', 12),
(15, 'sudah bayar', 'nandasyafitri', 12),
(0, 'sudah bayar', 'nandasyafitri', 1),
(0, 'belum bayar', 'rinaldiudra', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(50) NOT NULL,
  `id_menu` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'belum bayar',
  `jumlah_pesanan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_meja` int(11) DEFAULT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_menu` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_menu`, `rating`) VALUES
('food_02', 0),
('food_01', 4),
('drink_03', 5),
('drink_05', 0),
('drink_06', 2),
('drink_01', 3),
('drink_02', 5),
('drink_05', 4),
('drink_04', 4),
('drink_05', 5),
('food_02', 3),
('food_04', 5),
('food_04', 5),
('food_03', 5),
('food_02', 0),
('food_02', 2);

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
('nanda99', 'nanda99@mhs.unsyiah.ac.id', '81dc9bdb52d04dc20036dbd8313ed055', '9266e86334f659a02f36aa120f892667', '0'),
('nandasyafitri', 'syafitrinanda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '8c214d94c1a0dc75907c1b1dd752e979', '1');

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
-- Indexes for table `listorder`
--
ALTER TABLE `listorder`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `listorder`
--
ALTER TABLE `listorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
