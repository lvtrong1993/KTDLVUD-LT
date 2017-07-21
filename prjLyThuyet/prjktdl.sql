-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 11:03 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prjktdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mausac` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `kichthuoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `mausac`, `soluong`, `ngaynhap`, `kichthuoc`) VALUES
(1, 'Gấu Bông', 'rgb(102, 102, 102)', 5, '2017-06-07', 1),
(2, 'Bột giặt Omo', 'rgb(122, 8, 8)', 3, '2017-07-05', 1),
(3, 'Chảo chống dính', 'rgb(63, 68, 236)', 4, '2017-07-20', 1),
(4, 'Áo sơ mi', 'rgb(187, 43, 43)', 10, '2017-07-05', 1),
(5, 'Bình giữ nhiệt', 'rgb(106, 195, 16)', 3, '2017-07-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa_ke`
--

CREATE TABLE `hanghoa_ke` (
  `hh_id` int(11) NOT NULL,
  `make` int(11) NOT NULL,
  `thoigianthem` datetime NOT NULL,
  `ngan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa_ke`
--

INSERT INTO `hanghoa_ke` (`hh_id`, `make`, `thoigianthem`, `ngan`) VALUES
(1, 1, '2017-07-04 00:00:00', 2),
(1, 1, '2017-07-29 00:00:00', 5),
(1, 3, '2017-07-19 00:00:00', 4),
(2, 1, '2017-07-13 00:00:00', 1),
(4, 9, '2017-07-05 00:00:00', 3),
(4, 12, '2017-07-21 00:00:00', 4),
(4, 19, '2017-07-20 00:00:00', 2),
(5, 18, '2017-07-27 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ke`
--

CREATE TABLE `ke` (
  `make` int(11) NOT NULL,
  `chieucao` int(11) NOT NULL,
  `songan` int(11) NOT NULL,
  `soluongsanpham` int(11) NOT NULL,
  `makv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ke`
--

INSERT INTO `ke` (`make`, `chieucao`, `songan`, `soluongsanpham`, `makv`) VALUES
(1, 2, 10, 0, 1),
(2, 2, 10, 0, 1),
(3, 2, 10, 0, 1),
(4, 2, 10, 0, 1),
(5, 2, 10, 0, 1),
(6, 2, 10, 0, 1),
(7, 2, 10, 0, 2),
(8, 2, 10, 0, 3),
(9, 2, 10, 0, 4),
(10, 2, 10, 0, 4),
(11, 2, 10, 0, 4),
(12, 2, 10, 0, 4),
(13, 2, 10, 0, 4),
(14, 3, 15, 0, 5),
(15, 3, 15, 0, 5),
(16, 3, 15, 0, 5),
(17, 3, 15, 0, 5),
(18, 3, 15, 0, 5),
(19, 3, 15, 0, 6),
(20, 3, 15, 0, 6),
(21, 3, 15, 0, 6),
(22, 3, 15, 0, 6),
(23, 3, 15, 0, 6),
(24, 3, 15, 0, 6),
(25, 3, 15, 0, 7),
(26, 4, 20, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE `khuvuc` (
  `makv` int(11) NOT NULL,
  `toadox` int(11) NOT NULL,
  `toadoy` int(11) NOT NULL,
  `gocxoay` int(11) NOT NULL,
  `soluongke` int(11) NOT NULL,
  `chieucao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`makv`, `toadox`, `toadoy`, `gocxoay`, `soluongke`, `chieucao`) VALUES
(1, 220, 20, 0, 0, 0),
(2, 10, 40, -30, 0, 0),
(3, 0, 350, 30, 0, 0),
(4, 170, 125, 0, 0, 0),
(5, 170, 235, 0, 0, 0),
(6, 220, 360, 0, 0, 0),
(7, 1140, 115, 0, 0, 0),
(8, 1140, 232, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Indexes for table `hanghoa_ke`
--
ALTER TABLE `hanghoa_ke`
  ADD PRIMARY KEY (`hh_id`,`make`,`thoigianthem`),
  ADD KEY `make` (`make`);

--
-- Indexes for table `ke`
--
ALTER TABLE `ke`
  ADD PRIMARY KEY (`make`),
  ADD KEY `makv` (`makv`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`makv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ke`
--
ALTER TABLE `ke`
  MODIFY `make` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `makv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hanghoa_ke`
--
ALTER TABLE `hanghoa_ke`
  ADD CONSTRAINT `hanghoa_ke_ibfk_1` FOREIGN KEY (`hh_id`) REFERENCES `hanghoa` (`mahh`),
  ADD CONSTRAINT `hanghoa_ke_ibfk_2` FOREIGN KEY (`make`) REFERENCES `ke` (`make`);

--
-- Constraints for table `ke`
--
ALTER TABLE `ke`
  ADD CONSTRAINT `ke_ibfk_1` FOREIGN KEY (`makv`) REFERENCES `khuvuc` (`makv`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
