-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 07:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_detai`
--

-- --------------------------------------------------------

--
-- Table structure for table `newspagers`
--

CREATE TABLE `newspagers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `magazine_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `magazine_issue` int(11) NOT NULL,
  `magazine_page` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `part` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_auth_tnu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newspagers`
--

INSERT INTO `newspagers` (`id`, `name`, `magazine_name`, `magazine_issue`, `magazine_page`, `address`, `part`, `year`, `category`, `location`, `auth`, `is_auth_tnu`, `created_at`, `updated_at`) VALUES
(1, 'suwar ddc roi ne ddad', 'dấd', 21, 123, 'thai nguyen', 23, 2011, 'dsadasdasd', 'Trong nước', 'đâsda', 1, NULL, NULL),
(2, 'đâ', 'dấd', 21, 123, 'đâsdasdas', 23, 123131, 'dsadasdasd', 'on', 'đâsda', 0, NULL, NULL),
(3, 'đâ', 'dấd', 21, 123, 'đâsdasdas', 23, 1992, 'dsadasdasd', 'Trong nước', 'đâsda', 0, NULL, NULL),
(4, 'đâ', 'dấd', 21, 123, 'đâsdasdas', 23, 123131, 'dsadasdasd', 'on', 'đâsda', 0, NULL, NULL),
(5, 'đâ', 'dấd', 21, 123, 'đâsdasdas', 23, 123131, 'dsadasdasd', 'on', 'đâsda', 0, NULL, NULL),
(6, 'ahihi', 'time', 2, 4, 'mỹ', 1, 2016, 'mmo', 'Trong nước', 'khang, khang', 1, NULL, NULL),
(7, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(8, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(9, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 0, 'ádad', 'Trong nước', 'edas', 1, NULL, NULL),
(10, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(11, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(12, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(13, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(14, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(15, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL),
(16, 'đâsd', 'đấ', 13, 313, 'ádas', 31, 123, 'ádad', 'Nước ngoài', 'edas', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `id` varchar(50) NOT NULL,
  `TenCanBo` char(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `ChucVu` char(50) NOT NULL,
  `HocVi` char(50) NOT NULL,
  `HocHam` char(50) NOT NULL,
  `DonVi` char(254) NOT NULL,
  `DiaChi` char(254) NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `Email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`id`, `TenCanBo`, `NgaySinh`, `ChucVu`, `HocVi`, `HocHam`, `DonVi`, `DiaChi`, `DienThoai`, `Email`) VALUES
('dtc123', 'nguyen van a', '1995-08-27', 'hs', 'Thac Si', 'Giao Su', 'ictu', 'ha nam', 1646449533, '123123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_capdetai`
--

CREATE TABLE `tbl_capdetai` (
  `id` int(10) NOT NULL,
  `TenCapDeTai` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_capdetai`
--

INSERT INTO `tbl_capdetai` (`id`, `TenCapDeTai`) VALUES
(31, 'nha nuoc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_capdetai1`
--

CREATE TABLE `tbl_capdetai1` (
  `id` int(10) NOT NULL,
  `CapDeTai_id` int(10) NOT NULL,
  `TenCapDeTai1` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_capdetai1`
--

INSERT INTO `tbl_capdetai1` (`id`, `CapDeTai_id`, `TenCapDeTai1`) VALUES
(1, 31, 'nha nuoc 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detai`
--

CREATE TABLE `tbl_detai` (
  `id` int(10) NOT NULL,
  `TenDeTai` char(254) NOT NULL,
  `CapDeTai_id` int(10) NOT NULL,
  `CanBo_id` varchar(50) NOT NULL,
  `LinhVuc_id` int(10) NOT NULL,
  `ThoiGianBatDau` date NOT NULL,
  `ThoiGianKetThuc` date NOT NULL,
  `KetQua` char(254) NOT NULL,
  `XepLoai` char(254) NOT NULL,
  `MucTieuDeTai` char(254) NOT NULL,
  `NoiDung` char(254) NOT NULL,
  `SanPham` char(254) NOT NULL,
  `DiaChiUngDung` char(254) NOT NULL,
  `HieuQuaMangLai` char(254) NOT NULL,
  `GhiChu` char(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kinhphi`
--

CREATE TABLE `tbl_kinhphi` (
  `id` int(10) NOT NULL,
  `DeTai_id` int(10) NOT NULL,
  `LanCap` int(10) NOT NULL,
  `NgayCap` date NOT NULL,
  `SoTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_linhvuc`
--

CREATE TABLE `tbl_linhvuc` (
  `id` int(10) NOT NULL,
  `TenLinhVuc` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_linhvuc`
--

INSERT INTO `tbl_linhvuc` (`id`, `TenLinhVuc`) VALUES
(2, 'kkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_linhvuc1`
--

CREATE TABLE `tbl_linhvuc1` (
  `id` int(10) NOT NULL,
  `LinhVuc_id` int(10) NOT NULL,
  `TenLinhVuc1` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_linhvuc1`
--

INSERT INTO `tbl_linhvuc1` (`id`, `LinhVuc_id`, `TenLinhVuc1`) VALUES
(4, 2, 'ahiahiahia'),
(5, 2, 'fsdfsd'),
(6, 2, '?dasda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_muckinhphi`
--

CREATE TABLE `tbl_muckinhphi` (
  `id` int(10) NOT NULL,
  `DeTai_id` int(10) NOT NULL,
  `NguonKinhPhi_id` int(10) NOT NULL,
  `SoTienPheDuyet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoithamgia`
--

CREATE TABLE `tbl_nguoithamgia` (
  `id` int(10) NOT NULL,
  `DeTai_id` int(10) NOT NULL,
  `HoTen` char(50) NOT NULL,
  `DonVi` char(254) NOT NULL,
  `NhiemVu` char(254) NOT NULL,
  `GhiChu` char(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguonkinhphi`
--

CREATE TABLE `tbl_nguonkinhphi` (
  `id` int(10) NOT NULL,
  `TenNguon` char(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nguonkinhphi`
--

INSERT INTO `tbl_nguonkinhphi` (`id`, `TenNguon`) VALUES
(4, 'nguon kinh phi 2'),
(5, 'nguon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_username`
--

CREATE TABLE `tbl_username` (
  `id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` char(254) NOT NULL,
  `Level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_username`
--

INSERT INTO `tbl_username` (`id`, `Username`, `Password`, `HoTen`, `NgaySinh`, `DiaChi`, `Level`) VALUES
(1, 'admin', 'admin', 'nguyen lap duc', '1994-01-01', 'ha nam', 1),
(2, 'quantrivien', 'quantrivien', 'nguyen lap duc 1', '1994-01-01', 'ha nam', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newspagers`
--
ALTER TABLE `newspagers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_capdetai`
--
ALTER TABLE `tbl_capdetai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_capdetai1`
--
ALTER TABLE `tbl_capdetai1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CapDeTai_id` (`CapDeTai_id`);

--
-- Indexes for table `tbl_detai`
--
ALTER TABLE `tbl_detai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CapDeTai_id` (`CapDeTai_id`),
  ADD KEY `CanBo_id` (`CanBo_id`),
  ADD KEY `LinhVuc_id` (`LinhVuc_id`);

--
-- Indexes for table `tbl_kinhphi`
--
ALTER TABLE `tbl_kinhphi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DeTai_id` (`DeTai_id`);

--
-- Indexes for table `tbl_linhvuc`
--
ALTER TABLE `tbl_linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_linhvuc1`
--
ALTER TABLE `tbl_linhvuc1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LinhVuc_id` (`LinhVuc_id`);

--
-- Indexes for table `tbl_muckinhphi`
--
ALTER TABLE `tbl_muckinhphi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DeTai_id` (`DeTai_id`),
  ADD KEY `NguonKinhPhi_id` (`NguonKinhPhi_id`);

--
-- Indexes for table `tbl_nguoithamgia`
--
ALTER TABLE `tbl_nguoithamgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DeTai_id` (`DeTai_id`);

--
-- Indexes for table `tbl_nguonkinhphi`
--
ALTER TABLE `tbl_nguonkinhphi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_username`
--
ALTER TABLE `tbl_username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newspagers`
--
ALTER TABLE `newspagers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_capdetai`
--
ALTER TABLE `tbl_capdetai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_capdetai1`
--
ALTER TABLE `tbl_capdetai1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_detai`
--
ALTER TABLE `tbl_detai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kinhphi`
--
ALTER TABLE `tbl_kinhphi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_linhvuc`
--
ALTER TABLE `tbl_linhvuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_linhvuc1`
--
ALTER TABLE `tbl_linhvuc1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_muckinhphi`
--
ALTER TABLE `tbl_muckinhphi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nguoithamgia`
--
ALTER TABLE `tbl_nguoithamgia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nguonkinhphi`
--
ALTER TABLE `tbl_nguonkinhphi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_username`
--
ALTER TABLE `tbl_username`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_capdetai1`
--
ALTER TABLE `tbl_capdetai1`
  ADD CONSTRAINT `tbl_capdetai1_ibfk_1` FOREIGN KEY (`CapDeTai_id`) REFERENCES `tbl_capdetai` (`id`);

--
-- Constraints for table `tbl_detai`
--
ALTER TABLE `tbl_detai`
  ADD CONSTRAINT `tbl_detai_ibfk_2` FOREIGN KEY (`CapDeTai_id`) REFERENCES `tbl_capdetai` (`id`),
  ADD CONSTRAINT `tbl_detai_ibfk_3` FOREIGN KEY (`LinhVuc_id`) REFERENCES `tbl_linhvuc` (`id`),
  ADD CONSTRAINT `tbl_detai_ibfk_4` FOREIGN KEY (`CanBo_id`) REFERENCES `tbl_canbo` (`id`);

--
-- Constraints for table `tbl_kinhphi`
--
ALTER TABLE `tbl_kinhphi`
  ADD CONSTRAINT `tbl_kinhphi_ibfk_1` FOREIGN KEY (`DeTai_id`) REFERENCES `tbl_detai` (`id`);

--
-- Constraints for table `tbl_linhvuc1`
--
ALTER TABLE `tbl_linhvuc1`
  ADD CONSTRAINT `tbl_linhvuc1_ibfk_1` FOREIGN KEY (`LinhVuc_id`) REFERENCES `tbl_linhvuc` (`id`);

--
-- Constraints for table `tbl_muckinhphi`
--
ALTER TABLE `tbl_muckinhphi`
  ADD CONSTRAINT `tbl_muckinhphi_ibfk_1` FOREIGN KEY (`DeTai_id`) REFERENCES `tbl_detai` (`id`),
  ADD CONSTRAINT `tbl_muckinhphi_ibfk_2` FOREIGN KEY (`NguonKinhPhi_id`) REFERENCES `tbl_nguonkinhphi` (`id`);

--
-- Constraints for table `tbl_nguoithamgia`
--
ALTER TABLE `tbl_nguoithamgia`
  ADD CONSTRAINT `tbl_nguoithamgia_ibfk_1` FOREIGN KEY (`DeTai_id`) REFERENCES `tbl_detai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
