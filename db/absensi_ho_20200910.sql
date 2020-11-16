-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_ho_20200910`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_ho`
--

CREATE TABLE `absensi_ho` (
  `id_absen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_absen` date NOT NULL,
  `in_time` datetime NOT NULL,
  `in_ket` varchar(100) NOT NULL,
  `in_ip` varchar(100) NOT NULL,
  `in_loc` varchar(100) NOT NULL,
  `rest_time` datetime NOT NULL,
  `rest_ket` varchar(100) NOT NULL,
  `rest_ip` varchar(100) NOT NULL,
  `rest_loc` varchar(100) NOT NULL,
  `done_rest_time` datetime NOT NULL,
  `done_rest_ket` varchar(100) NOT NULL,
  `done_rest_ip` varchar(100) NOT NULL,
  `done_rest_loc` varchar(100) NOT NULL,
  `gohome_time` datetime NOT NULL,
  `gohome_ket` varchar(100) NOT NULL,
  `gohome_ip` varchar(100) NOT NULL,
  `gohome_loc` varchar(100) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_ho`
--

CREATE TABLE `user_ho` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `akses` enum('user_g','user_a') NOT NULL,
  `last_seen` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ho`
--

INSERT INTO `user_ho` (`id_user`, `username`, `nama`, `email`, `password`, `akses`, `last_seen`) VALUES
(46, '', 'User 1', '', '0', 'user_g', '0000-00-00 00:00:00'),
(82, 'user_admin', 'User Admin', 'useradmin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user_a', '2020-11-12 10:53:31'),
(91, '', 'User 2', '', '0', 'user_g', '0000-00-00 00:00:00'),
(92, '', 'User 3', '', '0', 'user_g', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_ho`
--
ALTER TABLE `absensi_ho`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `user_ho`
--
ALTER TABLE `user_ho`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_ho`
--
ALTER TABLE `absensi_ho`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1531;

--
-- AUTO_INCREMENT for table `user_ho`
--
ALTER TABLE `user_ho`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
