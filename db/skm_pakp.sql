-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 01:48 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakup4ng_skmipk`
--

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
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
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `tanggal`, `jenis_kelamin`, `pendidikan`, `usia`, `pekerjaan`, `pihak`, `instansi`, `keterkaitan`, `jenis_layanan`, `suku_bangsa`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`, `question_11`, `question_12`, `question_13`, `question_14`, `question_15`, `question_16`, `question_17`, `question_18`, `question_19`, `question_20`) VALUES
(1, '2022-01-03', 'perempuan', 'SMA', 27, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(2, '2022-01-03', 'laki-laki', 'SMA', 33, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Denpal/TNI AD', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sulawesi', 4, 3, 3, 4, 3, 3, 4, 3, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(3, '2022-01-05', 'laki-laki', 'SMA', 37, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Polres kupang', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(4, '2022-01-06', 'perempuan', 'diploma', 35, 'PNS/TNI/POLRI', 'Diri Sendiri', 'PTA Kupang', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bima', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(5, '2022-01-07', 'laki-laki', 'SMA', 43, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 3, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(6, '2022-01-11', 'laki-laki', 'SMA', 28, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(7, '2022-01-11', 'perempuan', 'S1', 46, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 3, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(8, '2022-01-14', 'perempuan', 'SMP', 40, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 3, 4, 3, 4, 4, 4, 4, 4, 3, 4, 2, 2, 4, 1, 4, 4, 3, 4, 4, 4),
(9, '2022-01-17', 'laki-laki', 'SD', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 2, 1, 1, 2, 3, 2, 1, 4),
(10, '2022-01-17', 'perempuan', 'diploma', 31, 'Pegawai Swasta', 'Diri Sendiri', 'Ni louh komang candra dewi', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 3, 4, 4, 3, 3, 3, 3, 3, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(11, '2022-01-17', 'perempuan', 'S2', 34, 'Pegawai Swasta', 'Diri Sendiri', 'Biro Jasa', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(12, '2022-01-18', 'perempuan', 'SMA', 31, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Tionghoa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4),
(13, '2022-01-19', 'perempuan', 'SD', 46, 'Ibu Rumah Tangga', 'Diri Sendiri', 'Tidak ada', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 3, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(14, '2022-01-21', 'laki-laki', 'S2', 34, 'PNS/TNI/POLRI', 'Diri Sendiri', 'KLHK', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sasak', 3, 3, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(15, '2022-01-21', 'laki-laki', 'SMA', 42, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(16, '2022-01-24', 'perempuan', 'SMA', 44, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bali', 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(17, '2022-01-24', 'laki-laki', 'SMA', 25, 'Pelajar/Mahasiswa', 'Diri Sendiri', 'Pengunjung', 'PKL ', 'PKL ', 'Sunda', 3, 4, 3, 3, 4, 3, 4, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(18, '2022-01-25', 'laki-laki', 'S1', 21, 'Pelajar/Mahasiswa', 'Diri Sendiri', 'Universitas Nusa Cendana', 'Kebutuhan penelitian', 'Kebutuhan penelitian', 'Sasak', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(19, '2022-01-26', 'perempuan', 'SMA', 25, 'Pegawai Swasta', 'Diri Sendiri', 'Jnt express Kupang ', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(20, '2022-01-26', 'perempuan', 'SMP', 19, 'Wiraswasta', 'Diri Sendiri', 'Swasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(21, '2022-01-26', 'laki-laki', 'S2', 47, 'PNS/TNI/POLRI', 'Dinas', 'Bawas Mahkamah Agung', 'Pengawasan', 'Pemeriksaan Rutin', 'Jawa', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(22, '2022-01-27', 'perempuan', 'SMP', 28, 'Pegawai Swasta', 'Diri Sendiri', 'Ratna ika lusiana', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(23, '2022-01-27', 'perempuan', 'diploma', 35, 'PNS/TNI/POLRI', 'Diri Sendiri', 'PTA Kupang', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bima', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(24, '2022-01-28', 'perempuan', 'SMA', 44, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(25, '2022-01-28', 'laki-laki', 'SD', 39, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(26, '2022-01-28', 'perempuan', 'SMP', 42, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(27, '2022-01-31', 'perempuan', 'S1', 30, 'Pegawai Swasta', 'Orang Lain', '', 'Saudara', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(28, '2022-02-01', 'perempuan', 'SD', 58, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(29, '2022-02-02', 'perempuan', 'SMA', 45, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 3, 3, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(30, '2022-02-03', 'laki-laki', 'diploma', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(31, '2022-02-07', 'perempuan', 'S1', 32, 'Honorer', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 3, 4, 4, 4, 4, 4, 3, 1, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4),
(32, '2022-02-07', 'perempuan', 'SMA', 34, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 3, 4, 3, 3, 4, 4, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(33, '2022-02-07', 'perempuan', 'SMP', 27, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sulawesi', 4, 4, 3, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(34, '2022-02-08', 'laki-laki', 'SD', 57, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 3, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(35, '2022-02-08', 'perempuan', 'SMA', 54, 'Ibu Rumah Tangga', 'Diri Sendiri', '-', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(36, '2022-02-08', 'perempuan', 'S1', 28, 'Pelajar/Mahasiswa', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 3, 3, 3, 3, 3, 4, 3, 3, 4, 4, 4, 4, 4, 4, 1, 1, 4, 4, 4),
(37, '2022-02-08', 'laki-laki', 'SMA', 35, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sulawesi', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4, 3, 3, 4, 4, 3, 4, 4, 4),
(38, '2022-02-08', 'laki-laki', 'S1', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(39, '2022-02-09', 'perempuan', 'diploma', 37, 'PTT', 'Diri Sendiri', 'Puskesmas Bakunase', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4),
(40, '2022-02-10', 'laki-laki', 'SMA', 48, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(41, '2022-02-10', 'perempuan', 'SMA', 49, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 3, 4, 3, 3, 3, 3, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(42, '2022-02-10', 'laki-laki', 'SMA', 22, 'Pelajar/Mahasiswa', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(43, '2022-02-11', 'perempuan', 'S1', 42, 'Wiraswasta', 'Diri Sendiri', 'Linda Bete', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 3, 4, 3, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(44, '2022-02-11', 'perempuan', 'SMA', 46, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Suku rote', 3, 3, 3, 4, 4, 4, 3, 3, 3, 4, 4, 4, 4, 3, 4, 4, 1, 4, 4, 4),
(45, '2022-02-11', 'perempuan', 'S1', 34, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(46, '2022-02-15', 'perempuan', 'SMA', 31, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(47, '2022-02-15', 'perempuan', 'SMP', 37, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(48, '2022-02-15', 'perempuan', 'SMP', 47, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(49, '2022-02-17', 'perempuan', 'SD', 43, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(50, '2022-02-17', 'perempuan', 'SD', 45, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(51, '2022-02-18', 'laki-laki', 'SD', 50, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4),
(52, '2022-02-18', 'laki-laki', 'SD', 48, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(53, '2022-02-18', 'laki-laki', 'SMP', 55, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(54, '2022-02-18', 'laki-laki', 'SMA', 48, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(55, '2022-02-21', 'laki-laki', 'SMP', 49, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(56, '2022-02-21', 'laki-laki', 'SD', 55, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(57, '2022-02-22', 'laki-laki', 'SD', 60, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(58, '2022-02-22', 'perempuan', 'SMA', 38, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(59, '2022-02-22', 'laki-laki', 'SMP', 47, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(60, '2022-02-22', 'laki-laki', 'SD', 57, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(61, '2022-02-22', 'laki-laki', 'SMA', 30, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(62, '2022-02-23', 'laki-laki', 'SMA', 29, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(63, '2022-02-23', 'perempuan', 'SMP', 27, 'Ibu Rumah Tangga ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(64, '2022-02-23', 'laki-laki', 'SMP', 32, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(65, '2022-02-23', 'laki-laki', 'SD', 65, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(66, '2022-02-23', 'laki-laki', 'SMA', 25, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(67, '2022-02-23', 'laki-laki', 'SD', 40, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(68, '2022-02-23', 'laki-laki', 'SMP', 44, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(69, '2022-02-23', 'laki-laki', 'SMP', 42, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(70, '2022-02-24', 'laki-laki', 'SMA', 39, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(71, '2022-02-24', 'laki-laki', 'SMA', 29, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(72, '2022-02-24', 'laki-laki', 'SMA', 41, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(73, '2022-02-24', 'laki-laki', 'SMP', 36, 'Nelayan ', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bajo ', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(74, '2022-02-24', 'laki-laki', 'SD', 41, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(75, '2022-02-24', 'laki-laki', 'SMA', 34, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(76, '2022-02-24', 'laki-laki', 'SD', 40, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(77, '2022-02-28', 'laki-laki', 'SMP', 47, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4),
(78, '2022-02-28', 'laki-laki', 'SMP', 32, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(79, '2022-02-28', 'laki-laki', 'SMP', 50, 'Sopir', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Makassar', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(80, '2022-03-01', 'laki-laki', 'SMA', 40, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(81, '2022-03-01', 'laki-laki', 'S1', 27, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(82, '2022-03-01', 'perempuan', 'SMA', 27, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(83, '2022-03-02', 'laki-laki', 'SMA', 33, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(84, '2022-03-02', 'laki-laki', 'SMA', 27, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(85, '2022-03-07', 'perempuan', 'diploma', 33, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(86, '2022-03-07', 'laki-laki', 'SMA', 37, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(87, '2022-03-08', 'laki-laki', 'SMA', 35, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(88, '2022-03-08', 'perempuan', 'S1', 43, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(89, '2022-03-09', 'perempuan', 'SMP', 28, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Tionghoa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(90, '2022-03-10', 'laki-laki', 'SD', 46, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(91, '2022-03-14', 'perempuan', 'diploma', 40, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4),
(92, '2022-03-17', 'perempuan', 'S1', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(93, '2022-03-21', 'perempuan', 'SMA', 31, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 3),
(94, '2022-03-23', 'perempuan', 'SMA', 34, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(95, '2022-03-24', 'laki-laki', 'S2', 31, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(96, '2022-03-24', 'laki-laki', 'SMA', 46, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4),
(97, '2022-03-24', 'perempuan', 'SMA', 34, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(98, '2022-03-29', 'laki-laki', 'SMA', 42, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(99, '2022-03-29', 'laki-laki', 'S1', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Tionghoa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3),
(100, '2022-03-30', 'perempuan', 'SMA', 25, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(101, '2022-03-30', 'perempuan', 'SMP', 21, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4),
(102, '2022-03-30', 'laki-laki', 'S1', 25, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(103, '2022-04-04', 'Perempuan', 'SMP', 19, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bali', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(104, '2022-04-04', 'Perempuan', 'diploma', 47, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sunda', 4, 3, 4, 4, 4, 3, 4, 3, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(105, '2022-04-04', 'Perempuan', 'SMA', 28, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(106, '2022-04-05', 'Laki-laki', 'SD', 35, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(107, '2022-04-06', 'Perempuan', 'SMP', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 3, 4, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(108, '2022-04-07', 'Perempuan', 'S1', 39, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(109, '2022-04-07', 'Perempuan', 'S1', 42, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(110, '2022-04-11', 'Perempuan', 'SMA', 30, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(111, '2022-04-11', 'Laki-laki', 'diploma', 58, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(112, '2022-04-13', 'Perempuan', 'S1', 45, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(113, '2022-04-14', 'Perempuan', 'SMA', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(114, '2022-04-14', 'Perempuan', 'SMP', 32, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Tionghoa', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 1, 4, 4, 4),
(115, '2022-04-18', 'Laki-laki', 'SD', 34, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(116, '2022-04-19', 'Perempuan', 'SMA', 27, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(117, '2022-04-19', 'Perempuan', 'S1', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(118, '2022-04-19', 'Laki-laki', 'SMA', 37, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bali', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(119, '2022-04-20', 'Laki-laki', 'S1', 35, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sunda', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(120, '2022-04-20', 'Perempuan', 'diploma', 43, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(121, '2022-04-21', 'Laki-laki', 'SMA', 28, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(122, '2022-04-25', 'Perempuan', 'SMA', 46, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(123, '2022-04-25', 'Laki-laki', 'SMA', 40, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(124, '2022-04-25', 'Perempuan', 'S1', 44, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(125, '2022-04-26', 'Perempuan', 'SMA', 31, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bima', 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(126, '2022-04-26', 'Perempuan', 'S1', 34, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(127, '2022-04-26', 'Perempuan', 'SMA', 31, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(128, '2022-04-27', 'Perempuan', 'SMP', 46, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 1, 4, 4, 4),
(129, '2022-04-28', 'Perempuan', 'SMP', 34, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(130, '2022-04-28', 'Laki-laki', 'SMA', 42, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4),
(131, '2022-04-28', 'Laki-laki', 'SMA', 44, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 1, 2, 4, 1, 2, 1, 2, 1, 4),
(132, '2022-04-29', 'Perempuan', 'SMA', 25, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(133, '2022-04-29', 'Laki-laki', 'SMA', 26, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(134, '2022-04-29', 'Laki-laki', 'diploma', 25, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(135, '2022-04-29', 'Perempuan', 'SMA', 19, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 3, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(136, '2022-05-02', 'Perempuan', 'SMA', 47, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(137, '2022-05-02', 'Laki-laki', 'S1', 28, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(138, '2022-05-02', 'Perempuan', 'SMP', 35, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(139, '2022-05-03', 'Perempuan', 'SD', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(140, '2022-05-03', 'Perempuan', 'diploma', 39, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Tionghoa', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(141, '2022-05-03', 'Perempuan', 'S2', 42, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(142, '2022-05-04', 'Perempuan', 'SMA', 30, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(143, '2022-05-04', 'Laki-laki', 'SD', 58, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(144, '2022-05-05', 'Laki-laki', 'S1', 45, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bali', 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(145, '2022-05-05', 'Perempuan', 'SMA', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sunda', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(146, '2022-05-09', 'Laki-laki', 'SMA', 32, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 3, 4, 4),
(147, '2022-05-09', 'Laki-laki', 'SMA', 34, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(148, '2022-05-11', 'Perempuan', 'S1', 27, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(149, '2022-05-12', 'Perempuan', 'SMA', 57, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(150, '2022-05-12', 'Laki-laki', 'SMA', 54, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4),
(151, '2022-05-17', 'Perempuan', 'S1', 49, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bima', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(152, '2022-05-17', 'Perempuan', 'SMP', 22, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(153, '2022-05-17', 'Perempuan', 'diploma', 42, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(154, '2022-05-18', 'Perempuan', 'SMA', 46, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(155, '2022-05-18', 'Laki-laki', 'SD', 34, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(156, '2022-05-19', 'Laki-laki', 'SMP', 31, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(157, '2022-05-19', 'Perempuan', 'S1', 37, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 3, 4, 4),
(158, '2022-05-20', 'Laki-laki', 'SD', 47, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(159, '2022-05-23', 'Laki-laki', 'SMA', 43, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(160, '2022-05-23', 'Perempuan', 'diploma', 45, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(161, '2022-05-24', 'Perempuan', 'S1', 50, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 3, 4, 4),
(162, '2022-05-24', 'Laki-laki', 'SMA', 48, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 3, 4, 4),
(163, '2022-05-24', 'Perempuan', 'SMP', 55, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(164, '2022-05-25', 'Perempuan', 'S1', 48, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(165, '2022-05-30', 'Perempuan', 'SMA', 49, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(166, '2022-05-30', 'Laki-laki', 'S1', 55, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(167, '2022-05-30', 'Perempuan', 'SMA', 47, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4),
(168, '2022-05-31', 'Perempuan', 'S1', 38, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Tionghoa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(169, '2022-06-01', 'Perempuan', 'diploma', 47, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(170, '2022-06-01', 'Perempuan', 'SMA', 57, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(171, '2022-06-01', 'Laki-laki', 'SMA', 30, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(172, '2022-06-02', 'Perempuan', 'SMA', 29, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bali', 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(173, '2022-06-02', 'Perempuan', 'S1', 38, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sunda', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(174, '2022-06-06', 'Perempuan', 'SMA', 47, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(175, '2022-06-06', 'Laki-laki', 'S1', 57, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(176, '2022-06-07', 'Perempuan', 'SMA', 30, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 3, 4, 4, 3, 4, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(177, '2022-06-09', 'Perempuan', 'SMP', 29, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 3, 4, 3, 3, 4, 4, 3, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(178, '2022-06-09', 'Laki-laki', 'SMP', 27, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4),
(179, '2022-06-09', 'Laki-laki', 'SMA', 32, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(180, '2022-06-13', 'Perempuan', 'SD', 41, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(181, '2022-06-13', 'Laki-laki', 'SD', 25, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(182, '2022-06-14', 'Perempuan', 'SD', 40, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(183, '2022-06-14', 'Laki-laki', 'SMP', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(184, '2022-06-14', 'Perempuan', 'SMA', 42, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(185, '2022-06-14', 'Perempuan', 'SMP', 39, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(186, '2022-06-15', 'Perempuan', 'SD', 29, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Tionghoa', 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3),
(187, '2022-06-15', 'Perempuan', 'SD', 41, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 1, 4, 4, 4),
(188, '2022-06-16', 'Perempuan', 'SMA', 36, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(189, '2022-06-06', 'Perempuan', 'SMP', 41, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(190, '2022-06-16', 'Perempuan', 'SD', 34, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bali', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(191, '2022-06-20', 'Perempuan', 'S1', 39, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(192, '2022-06-20', 'Laki-laki', 'SMA', 29, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sasak', 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3),
(193, '2022-06-20', 'Laki-laki', 'SMA', 41, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(194, '2022-06-21', 'Laki-laki', 'SMA', 36, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(195, '2022-06-21', 'Laki-laki', 'S1', 41, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 3, 4),
(196, '2022-06-21', 'Laki-laki', 'SMA', 34, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(197, '2022-06-22', 'Laki-laki', 'SMA', 40, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bima', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3),
(198, '2022-06-24', 'Laki-laki', 'S1', 47, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4),
(199, '2022-06-24', 'Perempuan', 'S1', 32, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Bugis', 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(200, '2022-06-27', 'Laki-laki', 'SMA', 50, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 3, 2, 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4),
(201, '2022-06-27', 'Laki-laki', 'SMA', 40, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 3, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(202, '2022-06-28', 'Laki-laki', 'SMA', 27, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bima', 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3),
(203, '2022-06-29', 'Laki-laki', 'SMP', 41, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(204, '2022-06-29', 'Perempuan', 'SD', 36, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(205, '2022-06-28', 'Laki-laki', 'SMA', 41, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 3, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(206, '2022-07-06', 'Perempuan', 'SD', 28, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(207, '2022-07-06', 'Perempuan', 'S1', 37, 'Honorer', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(208, '2022-07-11', 'Laki-Laki', 'S2', 32, 'Pengacara', 'Diri Sendiri', 'Jimmy Daud & Associates', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Sabu', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(209, '2022-07-14', 'Laki-Laki', 'SD', 36, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Banten', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(210, '2022-07-14', 'Perempuan', 'S1', 37, 'Pelajar/Mahasiswa', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(211, '2022-07-15', 'Laki-Laki', 'SMA', 62, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(212, '2022-07-18', 'Laki-Laki', 'SMP', 43, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Timor', 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(213, '2022-07-18', 'Laki-Laki', 'S1', 38, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Kemenkumham', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(214, '2022-07-21', 'Laki-Laki', 'S1', 32, 'Advokat', 'Orang Lain', 'Kantor advokat ahmad azis ismail', 'Kuasa Hukum/Penasehat Hukum', 'Mediasi', 'Flores', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 1, 4, 4, 4, 4),
(215, '2022-07-22', 'Laki-Laki', 'SMA', 49, 'Wiraswasta', 'Diri Sendiri', 'Wiraswasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Rupiah', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(216, '2022-07-27', 'Perempuan', 'SMA', 17, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2),
(217, '2022-08-04', 'Laki-Laki', 'S1', 32, 'Wiraswasta', 'Orang Lain', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4, 4, 1, 4, 4, 4, 4),
(218, '2022-08-05', 'Perempuan', 'diploma', 55, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 3, 3, 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(219, '2022-08-05', 'Perempuan', 'diploma', 33, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(220, '2022-08-09', 'Laki-Laki', 'diploma', 35, 'Pegawai Swasta', 'Diri Sendiri', 'Rsia Dedari', 'Saksi', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3),
(221, '2022-08-15', 'Perempuan', 'SMA', 44, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4, 4, 4, 2, 4),
(222, '2022-08-16', 'Laki-Laki', 'SMP', 30, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(223, '2022-08-22', 'Perempuan', 'SD', 40, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(224, '2022-08-22', 'Perempuan', 'diploma', 33, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Saksi', 'Gugatan', 'Flores', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(225, '2022-08-24', 'Perempuan', 'SMA', 29, 'Wiraswasta', 'Diri Sendiri', 'Bengkel mobil', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sunda', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4),
(226, '2022-08-25', 'Laki-Laki', 'SMA', 46, 'Pegawai Swasta', 'Diri Sendiri', 'Proyek', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(227, '2022-09-02', 'Perempuan', 'SMP', 27, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(228, '2022-09-22', 'Perempuan', 'SMA', 34, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(229, '2022-09-26', 'Laki-Laki', 'SMA', 35, 'Pegawai Swasta', 'Diri Sendiri', 'Balai monitor spektrum frekuensi radio kelas 1 kup', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4),
(230, '2022-09-28', 'Perempuan', 'SMA', 37, 'Wiraswasta', 'Diri Sendiri', '-', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Madura', 4, 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(231, '2022-09-29', 'Laki-Laki', 'SMA', 34, 'Pegawai Swasta', 'Diri Sendiri', 'Swasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 3, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4),
(232, '2022-10-01', 'Perempuan', 'diploma', 36, 'ibu rumah tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'bugis', 4, 4, 4, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(233, '2022-10-03', 'Perempuan', 'SMA', 41, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sabu', 4, 4, 3, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(234, '2022-10-03', 'Laki-Laki', 'SMA', 45, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 3, 4, 3, 4, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4),
(235, '2022-10-03', 'Perempuan', 'SMA', 44, 'Ibu Rumah Tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sumba', 3, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 1, 4, 4, 4),
(236, '2022-10-03', 'Perempuan', 'SMP', 43, 'Wiraswasta', 'Diri Sendiri', '-', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 3, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(237, '2022-10-05', 'Perempuan', 'SMA', 28, 'Pegawai Swasta', 'Diri Sendiri', 'Linguo go LTD', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Ambon', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(238, '2022-10-05', 'Perempuan', 'SMA', 64, 'Ibu rumah tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Alor', 4, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 3, 4, 2, 4, 4, 4, 4, 4, 4),
(239, '2022-10-06', 'Laki-Laki', 'S1', 29, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 1, 4, 4, 4),
(240, '2022-10-07', 'Perempuan', 'SMA', 25, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Flores', 4, 3, 4, 3, 3, 3, 3, 3, 4, 4, 4, 4, 2, 4, 4, 1, 4, 4, 4, 4),
(241, '2022-10-07', 'Laki-Laki', 'SMA', 45, 'Pegawai Swasta', 'Diri Sendiri', 'Pegawai swasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 3, 4, 4, 4, 4, 4, 1, 4, 4, 4),
(242, '2022-10-10', 'Perempuan', 'SMA', 20, 'Wiraswasta', 'Diri Sendiri', 'Widia stama', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sulawesi tenggara', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 2, 3, 4, 4, 1),
(243, '2022-10-10', 'Perempuan', 'SMA', 47, 'Wiraswasta', 'Diri Sendiri', '-', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(244, '2022-10-12', 'Perempuan', 'SMP', 40, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4),
(245, '2022-10-14', 'Perempuan', 'SD', 30, 'Ibu rumah tangga', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(246, '2022-10-17', 'Laki-Laki', 'S1', 28, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 3, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(247, '2022-10-21', 'Laki-Laki', 'S1', 33, 'Advokat', 'Orang Lain', 'Kantor advokat arif rahman SH', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Sabu', 4, 4, 4, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);
INSERT INTO `responden` (`id`, `tanggal`, `jenis_kelamin`, `pendidikan`, `usia`, `pekerjaan`, `pihak`, `instansi`, `keterkaitan`, `jenis_layanan`, `suku_bangsa`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`, `question_11`, `question_12`, `question_13`, `question_14`, `question_15`, `question_16`, `question_17`, `question_18`, `question_19`, `question_20`) VALUES
(248, '2022-10-21', 'Perempuan', 'S1', 30, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Dinas pertanian dan ketahanan pangan provinsi ntt', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(249, '2022-10-25', 'Laki-Laki', 'S2', 51, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Balai Pelaksanaan Jalan Nasional NTT', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(250, '2022-11-01', 'Perempuan', 'diploma', 32, 'Wiraswasta', 'Diri Sendiri', 'Swasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 2, 3, 4, 4, 3, 4, 4, 4),
(251, '2022-11-03', 'Laki-Laki', 'SMA', 23, 'Nelayan', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Indonesia', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 1, 2, 4),
(252, '2022-11-07', 'Laki-Laki', 'S1', 54, 'Pelajar/Mahasiswa', 'Orang Lain', '', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(253, '2022-11-07', 'Perempuan', 'SD', 44, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(254, '2022-11-07', 'Laki-Laki', 'SMA', 27, 'PNS/TNI/POLRI', 'Orang Lain', 'LBH SURYA NTT', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Indonesia', 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(255, '2022-11-09', 'Laki-Laki', 'SMA', 38, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Direktorat lantas polda ntt', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 1, 4, 4, 4),
(256, '2022-11-14', 'laki-laki', 'S1', 29, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(257, '2022-11-15', 'laki-laki', 'S1', 27, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(258, '2022-11-15', 'perempuan', 'S1', 32, 'Honorer', 'Diri Sendiri', 'SD gmit camplong 1', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 3, 4, 3, 3, 3, 4, 4, 4, 1, 4, 4, 1, 4, 4, 4, 4),
(259, '2022-11-20', 'perempuan', 'SMA', 25, 'Pegawai Swasta', 'Diri Sendiri', 'Arjuna mart', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Makassar', 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 1, 4, 1, 4, 4, 4, 4, 4),
(260, '2022-11-21', 'laki-laki', 'S1', 26, 'Advokat', 'Orang Lain', 'LBH SURYA NTT', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(512, '2022-11-23', 'perempuan', 'SMA', 24, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 2, 4, 4, 3, 4, 4, 4, 1, 4, 1, 1, 4, 4, 2, 4),
(513, '2022-11-25', 'laki-laki', 'SD', 53, 'Pegawai Swasta', 'Diri Sendiri', 'Las', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 3, 4, 3, 3, 3, 4, 4, 3, 3, 4, 3, 4, 2, 3, 1, 4, 4, 4, 4, 4),
(514, '2022-11-29', 'perempuan', 'SMA', 28, 'Wiraswasta', '', 'Irt', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4),
(515, '2022-12-05', 'perempuan', 'SMA', 48, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 3, 3, 3, 3, 3, 4, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(516, '2022-12-06', 'perempuan', 'S1', 35, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 1, 4, 4, 4),
(517, '2022-12-07', 'perempuan', 'SMA', 33, 'Pelajar/Mahasiswa', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 3, 3, 3, 4, 3, 4, 3, 4, 4, 4, 2, 4, 3, 3, 4, 4, 4, 4),
(518, '2022-12-07', 'perempuan', 'SMP', 25, 'Wiraswasta', 'Diri Sendiri', 'Kayu putih', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 2, 4, 4, 4, 4, 4, 4, 1, 2, 1, 1, 4, 4, 4, 4),
(519, '2022-12-08', 'perempuan', 'S1', 35, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(520, '2022-12-08', 'perempuan', 'S2', 30, 'PNS/TNI/POLRI', 'Orang Lain', 'PeMerintah provinsi', '', 'Permohonan', 'Flores', 3, 3, 3, 1, 2, 2, 2, 3, 3, 3, 3, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(521, '2022-12-13', 'perempuan', 'SMA', 42, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 3, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4),
(522, '2023-01-04', 'laki-laki', 'S2', 52, 'Pengacara', 'Orang Lain', 'PBH Kencana Kasih NTT', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Alor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(523, '2023-01-04', 'laki-laki', 'S1', 44, 'PNS/TNI/POLRI', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(524, '2023-01-09', 'perempuan', 'Diploma', 52, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(525, '2023-01-09', 'perempuan', 'SMA', 48, '', 'Diri Sendiri', 'Irt', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 3, 3, 3, 3, 3, 4, 4, 4, 3, 3, 3, 4, 4, 1, 1, 4, 1, 4, 4, 4),
(526, '2023-01-10', 'perempuan', 'SMA', 42, '', 'Orang Lain', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(527, '2023-01-10', 'laki-laki', 'SMA', 30, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 3, 3, 3, 3, 3, 4, 3, 3, 3, 4, 4, 4, 3, 1, 1, 4, 3, 4, 4, 4),
(528, '2023-01-11', 'laki-laki', 'S1', 29, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Mahkamah Agung RI', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Jawa', 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(529, '2023-01-16', 'laki-laki', 'SMA', 43, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Pribadi', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Rote', 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4, 4, 4, 4),
(530, '2023-01-16', 'laki-laki', 'S1', 35, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(531, '2023-01-16', 'perempuan', 'S1', 25, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(532, '2023-01-16', 'laki-laki', 'SMA', 30, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Buton', 4, 4, 3, 3, 4, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(533, '2023-01-19', 'perempuan', 'SMA', 18, 'Pelajar/Mahasiswa', '0', 'Orang tua', 'Saksi', 'Gugatan', 'Bugis', 3, 4, 3, 4, 3, 4, 4, 4, 3, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(534, '2023-01-19', 'laki-laki', 'SMA', 36, 'Wiraswasta', 'Orang Lain', 'Bakunase', 'Sepupu', 'Gugatan', 'Bugis', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(535, '2023-01-19', 'perempuan', 'SMA', 35, 'PNS/TNI/POLRI', 'Diri Sendiri', 'Polda NTT', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(536, '2023-01-24', 'laki-laki', 'S1', 53, 'Pegawai Swasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(537, '2023-01-24', 'perempuan', 'Diploma', 32, '', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Sumba', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(538, '2023-01-25', 'laki-laki', 'Diploma', 35, 'Wiraswasta', 'Orang Lain', '', 'Kuasa', 'Akta cerai', 'Timor', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(539, '2023-01-25', 'laki-laki', 'Diploma', 44, 'Pegawai Swasta', 'Diri Sendiri', 'swasta', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Jawa', 3, 3, 3, 3, 3, 2, 3, 3, 3, 4, 4, 4, 1, 4, 3, 2, 3, 4, 4, 4),
(540, '2023-01-25', 'perempuan', 'S1', 25, '', 'Diri Sendiri', 'Pengadilan agama', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Alor', 4, 4, 3, 4, 4, 3, 3, 4, 3, 4, 4, 4, 4, 4, 1, 1, 4, 4, 4, 4),
(541, '2023-01-26', 'laki-laki', 'SMA', 22, 'Pelajar/Mahasiswa', 'Diri Sendiri', '', 'Penelitian', 'Penelitian', 'Rote', 3, 4, 3, 3, 3, 4, 3, 4, 3, 4, 3, 4, 1, 4, 3, 2, 1, 4, 3, 3),
(542, '2023-02-01', 'laki-laki', 'SMA', 55, 'Wiraswasta', 'Diri Sendiri', '', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Boti', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4),
(543, '2023-02-03', 'laki-laki', 'S1', 28, '', 'Orang Lain', 'P.1 & Partner', 'Pemohon/Termohon/Penggugat/Tergugat', 'Permohonan', 'Flores', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 4, 4, 4, 4),
(544, '2023-02-03', 'laki-laki', 'S1', 34, '', 'Orang Lain', 'Law firm robert Israel', 'Pemohon/Termohon/Penggugat/Tergugat', 'Gugatan', 'Helong', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(545, '2023-02-03', 'laki-laki', 'S1', 30, 'Advokat', 'Orang Lain', 'KANTOR ADVOKAT RENO N. JUNAEDY, SH & REKAN', 'Kuasa Hukum/Penasehat Hukum', 'Gugatan', 'Bajawa', 3, 4, 3, 3, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'adminpakp', '138652c8b5f6287788cedc602c1b0c9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
