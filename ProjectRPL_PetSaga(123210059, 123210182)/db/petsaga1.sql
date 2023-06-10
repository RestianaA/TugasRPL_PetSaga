-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 04:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsaga1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cathotel`
--

CREATE TABLE `cathotel` (
  `id_cathotel` int(11) NOT NULL,
  `nama_owner` varchar(100) NOT NULL,
  `nama_pet` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cathotel`
--

INSERT INTO `cathotel` (`id_cathotel`, `nama_owner`, `nama_pet`, `no_wa`) VALUES
(3, 'Restiana ', 'Holly', '08271613'),
(5, 'Diandra', 'Pony', '0191717');

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `id_grooming` int(11) NOT NULL,
  `nama_owner` varchar(100) NOT NULL,
  `nama_pet` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grooming`
--

INSERT INTO `grooming` (`id_grooming`, `nama_owner`, `nama_pet`, `no_wa`) VALUES
(1, 'Febrian', 'Shine', '082672'),
(2, 'Gabriel', 'George', '08136'),
(3, 'Otniel', 'Felli', '08136');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE `sched` (
  `id_sched` int(11) NOT NULL,
  `cat_pic` varchar(100) NOT NULL,
  `nama_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sched`
--

INSERT INTO `sched` (`id_sched`, `cat_pic`, `nama_cat`) VALUES
(1, 'charcoal.jpeg', 'Charcoal'),
(2, 'grey.jpeg', 'Grey'),
(3, 'miso.jpeg', 'Miso'),
(4, 'noir.jpeg', 'Noir'),
(5, 'paipai.jpeg', 'Paipai'),
(6, 'shiro.jpeg', 'Shiro'),
(7, 'silver.jpeg', 'Silver'),
(8, 'sora.jpeg', 'Sora'),
(9, 'sunset.jpeg', 'Sunset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cathotel`
--
ALTER TABLE `cathotel`
  ADD PRIMARY KEY (`id_cathotel`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indexes for table `sched`
--
ALTER TABLE `sched`
  ADD PRIMARY KEY (`id_sched`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cathotel`
--
ALTER TABLE `cathotel`
  MODIFY `id_cathotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sched`
--
ALTER TABLE `sched`
  MODIFY `id_sched` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
