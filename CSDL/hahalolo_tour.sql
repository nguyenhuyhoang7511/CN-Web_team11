-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 04:45 PM
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
-- Table structure for table `db_comment`
--

CREATE TABLE `db_comment` (
  `id` int(11) NOT NULL,
  `user_comment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_cmt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_comment`
--

INSERT INTO `db_comment` (`id`, `user_comment`, `message`, `time_cmt`) VALUES
(32, '', 'Xin chào các bạn ', '2021-12-31 14:49:18'),
(33, '', 'Xin chào các bạn 2', '2021-12-31 15:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `db_images`
--

CREATE TABLE `db_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_images`
--

INSERT INTO `db_images` (`id`, `file_name`, `uploaded_on`, `status`, `id_tour`) VALUES
(8, 'dolan.PNG', '2021-12-30 14:40:02', '1', 1),
(9, 'Bài tập lớn - Hệ quản trị CSDL.docx', '2021-12-30 15:15:00', '1', 1),
(10, 'driver.PNG', '2021-12-30 15:15:55', '1', 2),
(11, 'sdt.PNG', '2021-12-30 23:29:21', '1', 2),
(12, 'MYSQL.PNG', '2021-12-30 23:29:33', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `ma_nguoidung` int(11) NOT NULL,
  `ten_nguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`ma_nguoidung`, `ten_nguoidung`, `email`, `mat_khau`) VALUES
(1, 'Nguyễn Huy Hoàng', 'nguyenhoang080721@gmail.com', '$2y$10$IZ5zLDqnDwSjp.n6ZJ0W4O/v9zJ53DuKd4dZoxVcFskWKJNCDI1cm'),
(2, 'Nguyễn Ngọc Lâm', 'ngoclam2001@gmail.com', '$2y$10$92UP4QTltZBxzmjrv9Pd/OX8Wmd77I5YLARuWpCIvWcMTS7JFQlcm'),
(3, 'Nguyễn Thị Lan Anh', 'lananh1997@gmail.com', '$2y$10$VS8DaFRaFRPPAtaJdl0MkOXPBtnxul.JdqHdPoz10tN3896PTXipC'),
(4, 'Lê khắc Minh Đức ', 'minhduc@gmail.com', '$2y$10$sgSyphVkP4SO82evNbmtU.mP3VBxIpr8h5y.fFE1fHdsM.0bK4U66'),
(5, 'Nguyễn Khánh Linh', 'khanhlinh24022002@gmail.com', '$2y$10$g0UIlq9DinMu8eJ0jZJVVOMWsLe4Ol4u40U5QLEoMkiNaKLvS6cyy');

-- --------------------------------------------------------

--
-- Table structure for table `db_thongtinchitiet`
--

CREATE TABLE `db_thongtinchitiet` (
  `ID` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiGianKhoiHanh` date NOT NULL,
  `ThoiGianKetThuc` date NOT NULL,
  `DiemKhoiHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiemDen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_ngay` int(11) NOT NULL,
  `tra_gop` tinyint(1) NOT NULL,
  `khuyen_mai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_thongtintour`
--

CREATE TABLE `db_thongtintour` (
  `id_tour` int(11) NOT NULL,
  `images` tinyblob NOT NULL,
  `chu_tour` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` date NOT NULL,
  `gia_tour` int(11) NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_thongtintour`
--

INSERT INTO `db_thongtintour` (`id_tour`, `images`, `chu_tour`, `loai_tour`, `name_tour`, `dia_diem`, `thoi_gian`, `gia_tour`, `mo_ta`) VALUES
(1, '', 'Nguyễn Huy Hoàng', 'Tour miền bắc', '', '26 Sơn La', '2021-12-16', 3500000, '26 Sơn La chào ae cả nước'),
(2, '', 'Nguyễn Ngọc Lâm', 'Tour miền bắc', '', 'Thành Phố Hà Nam', '2021-12-01', 1500000, 'Một trải nghiệm mới lạ tại Hà Nam'),
(3, '', 'Lê Khắc Minh Đức', 'Tour Miền Bắc', '', 'Thành Phố Thanh Hóa', '2021-12-21', 4300000, 'Trải nghiệm thú vị ở biển Sầm Sơn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_comment`
--
ALTER TABLE `db_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_images`
--
ALTER TABLE `db_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indexes for table `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `ten_nguoidung` (`ten_nguoidung`);

--
-- Indexes for table `db_thongtinchitiet`
--
ALTER TABLE `db_thongtinchitiet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `db_thongtintour`
--
ALTER TABLE `db_thongtintour`
  ADD PRIMARY KEY (`id_tour`),
  ADD UNIQUE KEY `only_name` (`chu_tour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_comment`
--
ALTER TABLE `db_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `db_images`
--
ALTER TABLE `db_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  MODIFY `ma_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_images`
--
ALTER TABLE `db_images`
  ADD CONSTRAINT `db_images_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `db_thongtintour` (`id_tour`);

--
-- Constraints for table `db_thongtinchitiet`
--
ALTER TABLE `db_thongtinchitiet`
  ADD CONSTRAINT `db_thongtinchitiet_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `db_thongtinchung` (`MaTour`),
  ADD CONSTRAINT `db_thongtinchitiet_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `db_thongtinchung` (`MaTour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
