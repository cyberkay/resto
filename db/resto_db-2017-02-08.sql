-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 11:45 PM
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
('RAMSIP01', 'Ramen Seafood', 'ramen_seafood.jpg', 'makanan', '<p>Mie Ramen Original dengan tambahan seafood.</p>', 0, 15000, 1, '2017-02-08 16:27:18', '2017-02-08 16:27:18'),
('RAMSOS01', 'Ramen Sosi', 'ramen_sosi.jpg', 'makanan', '<p>Mie Ramen dengan Telur, Sosis, dan Naget.</p>', 0, 15000, 1, '2017-02-08 16:26:05', '2017-02-08 16:26:05');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin', 'yessysima@gmail.com', 1, 'active');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
