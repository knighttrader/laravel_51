-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 07:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_51`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_login`
--

CREATE TABLE `crud_login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_rights` varchar(50) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_login`
--

INSERT INTO `crud_login` (`id`, `username`, `password`, `access_rights`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'info@admin.com', '$2y$10$Cx.kXyzqi1INwV4ncwEkneHNhN4rS/DGmEFEZtNfOcAYoVT0nFHaa', 'user', 'lNPG5KKlM96a2JhsDlLKpvE4bKb9ELVBTsbodbJmUKYsyqx1L3qCGt884KkU', '2018-08-11 06:20:12', '2019-03-28 23:29:14'),
(5, 'admin@mail.com', '$2y$10$771c0YgwMy4Dy8umKGeA7.RPlIHgUR6dRP7CbsvQCIseBGw0RVei2', 'admin', 'kvKavrAmjOBhotdZs8oX6GL2eNxYDOAo123wbxUw9lPgLPLmpHAJS8DBzcP9', '2019-03-28 10:18:23', '2019-03-28 21:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `crud_siswa`
--

CREATE TABLE `crud_siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_siswa`
--

INSERT INTO `crud_siswa` (`id`, `nama`, `alamat`, `kelas`, `no_hp`, `email`) VALUES
(1, 'Adi Nurhuda', 'Jakarta Barat', 'Laravel', '081234567890', 'adi@gmail.com'),
(2, 'Budi Juanda', 'Bekasi', 'Android Development', '08187654321', 'budi@gmail.com'),
(3, 'Cahaya', 'Tangerang', 'PHP and MySQL', '081111111111', 'cahaya@gmail.com'),
(4, 'Dian Ningrum', 'Bandung', 'Web Master', '08155555555555', 'dianningrum@gmail.com'),
(9, 'Jhony', 'Jakarta Timur', 'Graphic Design', '081778713813', 'jhony@yahoo.com'),
(11, 'Iwan', 'Cilacap', 'PHP OOP', '0819238723232', 'iwan@mail.com'),
(16, 'Eka', 'Blitar', 'Laravel', '081223322323', 'eka@outlook.com'),
(17, 'Agus', 'Tangerang Selatan', 'OOP PHP', '081866996777', 'a@b.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_login`
--
ALTER TABLE `crud_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_siswa`
--
ALTER TABLE `crud_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_login`
--
ALTER TABLE `crud_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crud_siswa`
--
ALTER TABLE `crud_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
