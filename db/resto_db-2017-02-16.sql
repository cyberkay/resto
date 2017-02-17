-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2017 at 07:23 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(5) UNSIGNED NOT NULL,
  `level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level_name`) VALUES
(1, 'Admin'),
(2, 'Pemilik'),
(3, 'Kasir'),
(4, 'Waiters'),
(5, 'Bartender'),
(6, 'Dapur');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_code` varchar(12) NOT NULL,
  `menu_name` varchar(32) NOT NULL,
  `menu_photo` varchar(128) NOT NULL DEFAULT 'default.gif',
  `menu_jenis` enum('makanan','minuman') NOT NULL,
  `menu_desc` varchar(128) NOT NULL,
  `menu_harga_modal` int(12) NOT NULL,
  `menu_harga_jual` int(12) NOT NULL,
  `menu_stok` int(12) NOT NULL,
  `menu_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `menu_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_code`, `menu_name`, `menu_photo`, `menu_jenis`, `menu_desc`, `menu_harga_modal`, `menu_harga_jual`, `menu_stok`, `menu_created`, `menu_updated`) VALUES
('AQ01', 'Aqua Medium', 'default.gif', 'minuman', '<p>Air Mineral Ukuran Medium.</p>', 0, 3000, 1, '2017-02-08 16:30:06', '2017-02-08 16:30:06'),
('ESTEH01', 'Es Teh Manis - Medium', 'default.gif', 'minuman', '<p>Es Teh Manis ukuran Medium</p>', 0, 7000, 1, '2017-02-08 16:30:44', '2017-02-08 16:30:44'),
('KOP01', 'Kopi Hitam', 'default.gif', 'minuman', '<p>Kopi Hitam Panas Original Kapal Api.</p>', 0, 5000, 1, '2017-02-08 16:31:26', '2017-02-08 16:31:26'),
('RAMBEF01', 'Ramen Beef', 'ramen_beef.png', 'makanan', '<p>Mie Ramen Original dengan taburan daging sapi dan kuah original.</p>', 0, 15000, 1, '2017-02-08 16:28:19', '2017-02-08 16:28:19'),
('RAMBEN01', 'Ramen Bento Beef', 'bento_beef.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 15000, 100, '2017-02-15 11:41:07', '2017-02-15 11:41:07'),
('RAMBENCHI01', 'Ramen Bento Chiken', 'bento_chicken.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 17000, 0, '2017-02-15 11:57:14', '2017-02-15 11:57:14'),
('RAMCURI', 'Ramen Curry Rice', 'curry_rice.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 19000, 0, '2017-02-15 11:54:55', '2017-02-15 11:54:55'),
('RAMKA01', 'Ramen Kaniyaki', 'kaniyaki.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 10000, 0, '2017-02-15 11:52:18', '2017-02-15 11:52:18'),
('RAMKAROL01', 'Ramen Kabuki Roll', 'kabuki_roll.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 18000, 0, '2017-02-15 11:53:22', '2017-02-15 11:53:22'),
('RAMOKO01', 'Ramen Okonomiyaki', 'Okonomiyaki.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 20000, 0, '2017-02-15 11:48:58', '2017-02-15 11:48:58'),
('RAMSIP01', 'Ramen Seafood', 'ramen_seafood.jpg', 'makanan', '<p>Mie Ramen Original dengan tambahan seafood.</p>', 0, 15000, 1, '2017-02-08 16:27:18', '2017-02-08 16:27:18'),
('RAMSOS01', 'Ramen Sosi', 'ramen_sosi.jpg', 'makanan', '<p>Mie Ramen dengan Telur, Sosis, dan Naget.</p>', 0, 15000, 1, '2017-02-08 16:26:05', '2017-02-08 16:26:05'),
('RAMSUBEF01', 'Ramen Sushi Beef', 'sushi_beef.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 25000, 0, '2017-02-15 11:47:01', '2017-02-15 11:47:01'),
('RAMSUKAN01', 'Ramen Sushi Ikan', 'susi_ikan.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 20000, 0, '2017-02-15 11:44:55', '2017-02-15 11:44:55'),
('RAMSUYAN', 'Ramen Sushi Ayam', 'susi_ayam.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 15000, 0, '2017-02-15 11:45:54', '2017-02-15 11:45:54'),
('RAMYAK01', 'Ramen Yakiniku', 'yakiniku.JPG', 'makanan', '<p>Deskripsi Makanan</p>', 0, 15000, 0, '2017-02-15 11:43:43', '2017-02-15 11:43:43'),
('RAYAM01', 'Ramen Ayam', 'ramen_ayam.jpg', 'makanan', '<p>Deskripsi Makanan</p>', 0, 15000, 0, '2017-02-15 11:50:29', '2017-02-15 11:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `trx_id` int(11) NOT NULL,
  `trx_code` varchar(14) NOT NULL,
  `trx_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trx_user` int(12) NOT NULL DEFAULT '1',
  `trx_status` varchar(12) NOT NULL DEFAULT 'pending',
  `trx_note` varchar(225) DEFAULT NULL,
  `trx_subtotal` int(14) NOT NULL DEFAULT '0',
  `trx_disc` int(14) NOT NULL DEFAULT '0',
  `trx_tax` int(14) NOT NULL DEFAULT '0',
  `trx_total` int(14) NOT NULL DEFAULT '0',
  `trx_bayar` int(14) NOT NULL DEFAULT '0',
  `trx_kembali` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`trx_id`, `trx_code`, `trx_date`, `trx_user`, `trx_status`, `trx_note`, `trx_subtotal`, `trx_disc`, `trx_tax`, `trx_total`, `trx_bayar`, `trx_kembali`) VALUES
(1, 'P201702091', '2017-02-09 14:43:58', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(2, 'P201702092', '2017-02-09 15:08:42', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(3, 'P201702093', '2017-02-09 15:08:58', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(4, 'P201702094', '2017-02-09 15:26:52', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(5, 'P201702095', '2017-02-09 16:31:36', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(6, 'P201702096', '2017-02-09 16:40:55', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(7, 'P201702121', '2017-02-12 09:56:29', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(8, 'P201702122', '2017-02-12 15:23:56', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(9, 'P201702151', '2017-02-15 07:00:00', 3, 'canceled', NULL, 0, 0, 0, 0, 0, 0),
(10, 'P201702152', '2017-02-15 11:05:18', 3, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(11, 'P201702153', '2017-02-15 12:45:38', 1, 'canceled', NULL, 0, 0, 0, 0, 0, 0),
(12, 'P201702154', '2017-02-15 13:03:46', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(13, 'P201702155', '2017-02-15 13:15:09', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0),
(14, 'P201702156', '2017-02-15 14:03:06', 1, 'pending', NULL, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `td_id` int(12) NOT NULL,
  `td_trx` varchar(24) NOT NULL,
  `td_menu` varchar(32) NOT NULL,
  `td_harga_active` int(14) NOT NULL DEFAULT '0',
  `td_qty` int(14) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`td_id`, `td_trx`, `td_menu`, `td_harga_active`, `td_qty`) VALUES
(1, 'P201702094', 'RAMBEF01', 40000, 2),
(2, 'P201702094', 'AQ01', 3000, 1),
(3, 'P201702094', 'KOP01', 5000, 1),
(4, 'P201702094', 'RAMSOS01', 15000, 1),
(5, 'P201702095', 'RAMSOS01', 15000, 1),
(6, 'P201702095', 'ESTEH01', 7000, 1),
(7, 'P201702095', 'AQ01', 3000, 1),
(8, 'P201702095', 'AQ01', 2, 1),
(9, 'P201702096', 'RAMSIP01', 15000, 2),
(10, 'P201702096', 'AQ01', 3000, 2),
(11, 'P201702096', 'RAMBEF01', 15000, 1),
(12, 'P201702096', 'KOP01', 5000, 2),
(13, 'P201702121', 'KOP01', 5000, 1),
(14, 'P201702121', 'ESTEH01', 7000, 1),
(15, 'P201702121', 'RAMSOS01', 15000, 1),
(16, 'P201702122', 'ESTEH01', 7000, 1),
(17, 'P201702151', 'RAMSOS01', 15000, 2),
(18, 'P201702152', 'KOP01', 5000, 1),
(19, 'P201702152', 'ESTEH01', 7000, 1),
(20, 'P201702153', 'RAMBENCHI01', 17000, 1),
(21, 'P201702153', 'RAMBEN01', 15000, 1),
(22, 'P201702154', 'RAMBENCHI01', 17000, 2),
(25, 'P201702155', 'ESTEH01', 7000, 2),
(26, 'P201702156', 'KOP01', 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `level` int(64) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin', 'yessysima@gmail.com', 1, 'active'),
(2, 'owner', '72122ce96bfec66e2396d2e25225d70a', 'Owner Oramen', 'owner@kedaioramen.com', 2, 'active'),
(3, 'kasir', 'c7911af3adbd12a035b289556d96470a', 'Kasir Oramen', 'kasir@kedaioramen.com', 3, 'active'),
(4, 'waiters', 'f4c12413d02f5efd359e06eebd344aad', 'Waiters Oramen', 'waiters@kedaioramen.com', 4, 'active'),
(5, 'bartender', '7bb0b63fe7ca769b3e05fc6200931b82', 'Bartender Oramen', 'bartender@kedaioramen.com', 5, 'active'),
(6, 'dapur', 'de20b1d289dd6005ba8116085122f144', 'Dapur Oramen', 'dapur@kedaioramen.com', 6, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_code`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`trx_id`),
  ADD UNIQUE KEY `trx_code` (`trx_code`),
  ADD KEY `trx_user` (`trx_user`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`td_id`),
  ADD KEY `td_menu` (`td_menu`),
  ADD KEY `td_trx` (`td_trx`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `trx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `td_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
