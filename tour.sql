-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 02:37 PM
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
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `stt` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `BinhLuan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTour` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`stt`, `MaND`, `BinhLuan`, `idTour`) VALUES
(1, 1, 'hay', '001'),
(2, 1, 'ngu', '002'),
(3, 2, 'hay', '001');

-- --------------------------------------------------------

--
-- Table structure for table `loaitour`
--

CREATE TABLE `loaitour` (
  `MaLoai` int(11) NOT NULL,
  `tentour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitour`
--

INSERT INTO `loaitour` (`MaLoai`, `tentour`) VALUES
(1, 'Tour trong nước'),
(2, 'Tour nước ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `TaiKhoan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`TaiKhoan`, `MatKhau`, `id`) VALUES
('ngoclam', 'abcabc', 1),
('vono', '1412', 2);

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

--
-- Dumping data for table `thongtinchitiet`
--

INSERT INTO `thongtinchitiet` (`ID`, `ThoiGianKhoiHanh`, `ThoiGianKetThuc`, `DiemKhoiHanh`, `DiemDen`) VALUES
('001', '2021-12-15', '2021-12-21', 'Bà Nà', 'Hội An'),
('002', '2021-12-21', '2021-12-20', 'Hà Nội', 'Hà Nam');

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
  `KhuyenMai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoaiTour` int(11) NOT NULL,
  `chitiet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiaTien` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `thongtinchung`
--

INSERT INTO `thongtinchung` (`MaTour`, `ChuTour`, `TenTour`, `DiaDiem`, `SoNgayDiTour`, `TraGop`, `KhuyenMai`, `hinhanh`, `LoaiTour`, `chitiet`, `GiaTien`) VALUES
('001', 'Nguyễn Văn A', 'Đà Nẵng', 'Đà Nẵng', 10, 'không', 'có', NULL, 1, 'một nơi tuyệt vời.', 970000),
('002', 'Nguyễn Văn B', 'Hà Nội', 'Hà Nội', 8, 'không', 'có', NULL, 1, 'Dịch khắp nơi', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `idTour` (`idTour`);

--
-- Indexes for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtinchitiet`
--
ALTER TABLE `thongtinchitiet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thongtinchung`
--
ALTER TABLE `thongtinchung`
  ADD PRIMARY KEY (`MaTour`),
  ADD KEY `LoaiTour` (`LoaiTour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idTour`) REFERENCES `thongtinchung` (`MaTour`);

--
-- Constraints for table `thongtinchitiet`
--
ALTER TABLE `thongtinchitiet`
  ADD CONSTRAINT `thongtinchitiet_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `thongtinchung` (`MaTour`),
  ADD CONSTRAINT `thongtinchitiet_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `thongtinchung` (`MaTour`);

--
-- Constraints for table `thongtinchung`
--
ALTER TABLE `thongtinchung`
  ADD CONSTRAINT `thongtinchung_ibfk_1` FOREIGN KEY (`LoaiTour`) REFERENCES `loaitour` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
