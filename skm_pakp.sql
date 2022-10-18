-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 04:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skm_pakp`
--

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `usia` int(3) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pihak` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `keterkaitan` varchar(50) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `suku_bangsa` varchar(50) NOT NULL,
  `question_1` int(2) NOT NULL,
  `question_2` int(2) NOT NULL,
  `question_3` int(2) NOT NULL,
  `question_4` int(2) NOT NULL,
  `question_5` int(2) NOT NULL,
  `question_6` int(2) NOT NULL,
  `question_7` int(2) NOT NULL,
  `question_8` int(2) NOT NULL,
  `question_9` int(2) NOT NULL,
  `question_10` int(2) NOT NULL,
  `question_11` int(2) NOT NULL,
  `question_12` int(2) NOT NULL,
  `question_13` int(2) NOT NULL,
  `question_14` int(2) NOT NULL,
  `question_15` int(2) NOT NULL,
  `question_16` int(2) NOT NULL,
  `question_17` int(2) NOT NULL,
  `question_18` int(2) NOT NULL,
  `question_19` int(2) NOT NULL,
  `question_20` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
