-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 02:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `nama` varchar(50) DEFAULT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tahunsekarang` date DEFAULT NULL,
  `tahunlahir` date DEFAULT NULL,
  `telepon` int(13) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`nama`, `nim`, `jurusan`, `alamat`, `tahunsekarang`, `tahunlahir`, `telepon`, `komentar`) VALUES
('', '', '', '', '0000-00-00', '0000-00-00', NULL, ''),
('Furqanil Taqwa', '112131231', 'Sistem Informasi', '12sdasfasfa', '2021-02-17', '1999-02-16', NULL, 'asdasdas'),
('Furqanil Taqwa', '12412441', 'Sistem Informasi', '4124qwaas', '0000-00-00', '0000-00-00', NULL, '232'),
('Adit', '1711522000', 'Sistemsisteman', 'ampang', '2021-02-17', '2006-02-25', NULL, '134143asdasd'),
('Aditya', '1711522012', 'Sistemsisteman', 'ampang', '2021-02-17', '2006-02-25', NULL, '134143asdasd'),
('Furqanil Taqwa', '1711522013', 'Sistem Informasi', 'Ambun Suri', '2021-02-17', '1999-02-17', 22, 'komentar'),
('Furrrrrqan', '2342342', '43434343', 'sdsdsdfse', '0000-00-00', '0000-00-00', NULL, 'zdsfsdf'),
('Furrrrrqan', '52352352', 'Sistemsisteman', 'furqanil', '0000-00-00', '0000-00-00', NULL, '2321313s'),
('qweqaeawr2', '5245234', 'Sistemsisteman', 'qweqw', '2021-02-23', '1974-02-09', 1231244, 'sfsdfefse'),
('qweq', 'q121', 'Sistem Informasi', 'qweqw', '2021-02-17', '2021-02-03', NULL, 'asdasdas'),
('qweqaeawr2', 'q12114', 'Sistem Informasi', 'qweqw', '2021-02-17', '2021-02-03', NULL, 'asdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
