-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaitour`
--

CREATE TABLE `loaitour` (
  `MaLoai` int(11) NOT NULL,
  `TenTour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `TaiKhoan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinchitiet`
--

CREATE TABLE `thongtinchitiet` (
  `ID` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiGianKhoiHanh` date NOT NULL,
  `ThoiGianKetThuc` date NOT NULL,
  `DiemKhoiHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiemDen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinchung`
--

CREATE TABLE `thongtinchung` (
  `MaTour` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChuTour` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenTour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaDiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoNgayDiTour` int(11) NOT NULL,
  `TraGop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KhuyenMai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MaLoai`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `thongtinchitiet`
--
ALTER TABLE `thongtinchitiet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thongtinchung`
--
ALTER TABLE `thongtinchung`
  ADD PRIMARY KEY (`MaTour`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD CONSTRAINT `loaitour_ibfk_1` FOREIGN KEY (`id`) REFERENCES `thongtinchitiet` (`ID`);

--
-- Constraints for table `thongtinchitiet`
--
ALTER TABLE `thongtinchitiet`
  ADD CONSTRAINT `thongtinchitiet_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `thongtinchung` (`MaTour`),
  ADD CONSTRAINT `thongtinchitiet_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `thongtinchung` (`MaTour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
