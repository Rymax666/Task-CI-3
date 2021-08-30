-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 09:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nip` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nip`, `nama`, `email`, `gender`) VALUES
(11111, 'Bendy Alattas', 'bendy@gmail.com', 'Pria'),
(21309, 'Kimoy Basna', 'kimoy@gmail.com', 'Pria'),
(22222, 'Murayama Hosiki', 'murayama@gmail.com', 'Pria'),
(33333, 'Melody Marks', 'melody@gmail.com', 'Wanita'),
(44444, 'Kagney Linn Carter', 'kagney@gmail.com', 'Wanita'),
(55555, 'Jordi Alba', 'jordi@gmail.com', 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Bendy Santoryu', 'bendy666', '$2y$10$BVEQCkRVmL3lPDt4uxRiI.G5gaiAgwQp79SMtB5whXsrMNQPraJaW'),
(2, 'baby lonia', 'baby', '$2y$10$0w/OaTpYRUhBTqGZcA.PBukPkl2o.BZzfk1QKyMjG2GmwuKAzraTm'),
(3, 'abatu', 'abatu', '$2y$10$f5hdCjbc/81bxiculv/kR.VR9oUN4wOBe4iovipvZ9zzFELaCcmDm'),
(4, 'aaa', 'aaa', '$2y$10$2QqI4cCIe.uw7cmRZZVH0.UARgHNDS4oYV31LUb..d6FRv02eAiLO'),
(5, 'bbb', 'bbb', '$2y$10$6FuH3n66b/pVtZNpbeIngesQDmbhT0Y3zR37UXi25U8Ol7P6ZA4yW'),
(6, 'Bendy Santoryu', 'asd', '$2y$10$FSYet1B2u9/5DBDX7VNB/OcC1AE2.4LX3KSePyFyuA.aD.E9xCAw.'),
(7, 'adssdaads', 'asdsadsad', '$2y$10$xcRfSObg5aBrR7MHNywdo.Rc8KQ1AqRBpOETSlOUxicPbXN8heR4i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `nip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
