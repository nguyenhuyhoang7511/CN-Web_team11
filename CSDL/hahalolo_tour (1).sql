-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 09:31 AM
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
-- Database: `hahalolo_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_images`
--

CREATE TABLE `db_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_images`
--

INSERT INTO `db_images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(8, 'dolan.PNG', '2021-12-30 14:40:02', '1'),
(9, 'Bài tập lớn - Hệ quản trị CSDL.docx', '2021-12-30 15:15:00', '1'),
(10, 'driver.PNG', '2021-12-30 15:15:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `ma_nguoidung` int(50) UNSIGNED NOT NULL,
  `ten_nguoidung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`ma_nguoidung`, `ten_nguoidung`, `email`, `mat_khau`) VALUES
(0, 'Nguyễn Ngọc Lâm', 'ngoclam2001@gmail.com', '321');

-- --------------------------------------------------------

--
-- Table structure for table `db_thongtintour`
--

CREATE TABLE `db_thongtintour` (
  `id_tour` int(11) NOT NULL,
  `images` tinyblob NOT NULL,
  `chu_tour` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` date NOT NULL,
  `gia_tour` int(11) NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_thongtintour`
--

INSERT INTO `db_thongtintour` (`id_tour`, `images`, `chu_tour`, `loai_tour`, `dia_diem`, `thoi_gian`, `gia_tour`, `mo_ta`) VALUES
(1, '', 'Nguyễn Huy Hoàng', 'Tour miền bắc', '26 Sơn La', '2021-12-16', 3500000, '26 Sơn La chào ae cả nước'),
(2, '', 'Nguyễn Ngọc Lâm', 'Tour miền bắc', 'Thành Phố Hà Nam', '2021-12-01', 1500000, 'Một trải nghiệm mới lạ tại Hà Nam'),
(3, '', 'Lê Khắc Minh Đức', 'Tour Miền Bắc', 'Thành Phố Thanh Hóa', '2021-12-21', 4300000, 'Trải nghiệm thú vị ở biển Sầm Sơn');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongtinchung`
--

INSERT INTO `thongtinchung` (`MaTour`, `ChuTour`, `TenTour`, `DiaDiem`, `SoNgayDiTour`, `TraGop`, `KhuyenMai`) VALUES
('008', 'Kiều Tuấn Dũng', 'Du lịch Hà Nội', '175 Tây Sơn  - Đống Đa- Hà Nội', 5, 'có', 'không');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_images`
--
ALTER TABLE `db_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `ten_nguoidung` (`ten_nguoidung`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `db_thongtintour`
--
ALTER TABLE `db_thongtintour`
  ADD PRIMARY KEY (`id_tour`),
  ADD UNIQUE KEY `only_name` (`chu_tour`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_images`
--
ALTER TABLE `db_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
