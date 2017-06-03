-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2017 at 03:35 PM
-- Server version: 10.0.28-MariaDB-2
-- PHP Version: 7.0.16-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatableServer`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `email`, `alamat`) VALUES
(1, 'abc', 'abc@abc.com', 'alamat abc'),
(2, 'def', 'def@def.com', 'alamat def'),
(3, 'misaka', 'misaka@misaka.com', 'alamat misaka'),
(4, 'mikoto', 'mikoto@mikoto.com', 'alamat mikoto'),
(5, 'ghi', 'ghi@ghi.com', 'alamat ghi'),
(6, 'jkl', 'jkl@jkl.com', 'alamat jkl'),
(7, 'touma', 'touma@touma.com', 'alamat touma'),
(8, 'fadli', 'fadli@fadli.com', 'alamat fadli'),
(9, 'azure', 'azure@tes.com', 'alamat azure'),
(10, 'aaa', 'aaa@aaa.com', 'alamat aaaa'),
(11, 'bbb', 'bbb@bbb.com', 'alamat bbb'),
(12, 'ccc', 'ccc@ccc.com', 'alamat ccc'),
(13, 'ddd', 'ddd@ddd.com', 'alamat dddd'),
(14, 'eee', 'eee@eee.com', 'alamat eee'),
(15, 'fff', 'fff@fff.com', 'alamat fff'),
(16, 'yyy', 'yyy@yyy.com', 'alamat yyy'),
(17, 'hhh', 'hhh@hh.com', 'alamat hhh'),
(18, 'iii', 'ii@ii.com', 'alamat ii'),
(19, 'uu', 'uu@uu.com', 'alamat uu'),
(20, 'jj', 'jj@jj.com', 'alamat jj'),
(21, 'kkk', 'kkk@kkk.com', 'alamat kkk'),
(22, 'ooo', 'ooo@ooo.com', 'alamat ooo'),
(23, 'ppp', 'ppp@ppp.com', 'alamat ppp'),
(24, 'lllllll', 'llllll@llll.com', 'alamat llllll'),
(25, 'rr', 'rr@rr.com', 'alamat rr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
