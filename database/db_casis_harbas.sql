-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 08:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_casis_harbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `casis`
--

CREATE TABLE `casis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai_tertulis` int(3) NOT NULL,
  `nilai_raport` int(3) NOT NULL,
  `prestasi_internasional` int(3) NOT NULL,
  `prestasi_nasional` int(3) NOT NULL,
  `prestasi_lokal` int(3) NOT NULL,
  `skbn` int(1) NOT NULL,
  `cek_fisik` int(1) NOT NULL,
  `skck` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casis`
--

INSERT INTO `casis` (`id`, `nama`, `nilai_tertulis`, `nilai_raport`, `prestasi_internasional`, `prestasi_nasional`, `prestasi_lokal`, `skbn`, `cek_fisik`, `skck`) VALUES
(1, 'Nendra Janu Prasetyo', 358, 621, 0, 0, 0, 1, 1, 1),
(2, 'Muhammad Fikriansyah', 355, 616, 0, 0, 0, 1, 1, 1),
(3, 'Imam Akbar Asyauqi', 351, 618, 0, 0, 0, 1, 1, 1),
(4, 'Ridho Fauzi Grafika', 358, 623, 0, 0, 0, 1, 1, 1),
(5, 'Indra Taufiq', 366, 630, 0, 0, 1, 1, 1, 1),
(6, 'Fahrezi', 357, 624, 0, 0, 1, 1, 1, 1),
(7, 'Izzi Rizki', 361, 629, 0, 1, 0, 1, 1, 1),
(8, 'Naufal Shidiq', 351, 614, 0, 0, 0, 1, 1, 1),
(9, 'Laila Syaban Khairani', 361, 630, 0, 0, 0, 1, 1, 1),
(10, 'Kayla Maharani', 363, 633, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ranking_casis`
--

CREATE TABLE `ranking_casis` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranking_casis`
--

INSERT INTO `ranking_casis` (`id`, `nama`, `score`) VALUES
('RCH0001IZZ', 'Izzi Rizki', 0.999994),
('RCH0002IND', 'Indra Taufiq', 0.654665),
('RCH0003FAH', 'Fahrezi', 0.654649),
('RCH0004KAY', 'Kayla Maharani', 0.000033233),
('RCH0005LAI', 'Laila Syaban Khairani', 0.0000279083),
('RCH0006RID', 'Ridho Fauzi Grafika', 0.000017218),
('RCH0007NEN', 'Nendra Janu Prasetyo', 0.0000150737),
('RCH0008MUH', 'Muhammad Fikriansyah', 0.00000647333),
('RCH0009IMA', 'Imam Akbar Asyauqi', 0.00000431775),
('RCH0010NAU', 'Naufal Shidiq', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casis`
--
ALTER TABLE `casis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranking_casis`
--
ALTER TABLE `ranking_casis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casis`
--
ALTER TABLE `casis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
