-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 03:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaohang`
--

CREATE TABLE `giaohang` (
  `magd` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `manv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hd_chitiet`
--

CREATE TABLE `hd_chitiet` (
  `masp` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `matk` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaygiao` date NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `matk` int(10) NOT NULL,
  `manv` int(11) NOT NULL,
  `tennv` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `saleoff` int(20) NOT NULL,
  `iimages` varchar(250) CHARACTER SET utf8 NOT NULL,
  `productname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `thongtinhsp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `loaisp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gianhap` int(11) NOT NULL,
  `soluongco` int(11) NOT NULL,
  `madein` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `saleoff`, `iimages`, `productname`, `giaban`, `thongtinhsp`, `ngaynhap`, `loaisp`, `size`, `gianhap`, `soluongco`, `madein`) VALUES
(93, 5, 'aonam1.jpg', 'Áo nam 1', 32000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-06-04', '1', 'M', 0, 0, 'Viet Nam'),
(94, 10, 'aonam2.png', 'Áo nam 2', 50000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-05-02', '1', 'M', 0, 0, 'Viet Nam'),
(95, 5, 'aonam3.jpg', 'Áo nam 3', 200000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-03-09', '1', 'L', 0, 0, 'Viet Nam'),
(96, 10, 'aonu1.jpg', 'Áo nữ 1', 500000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-04', '2', 'M', 0, 0, 'Viet Nam'),
(97, 10, 'aonu2.jpg', 'Áo nữ 2', 400000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-01', '2', 'L', 0, 0, 'Viet Nam'),
(98, 5, 'aonu3.jpg', 'Áo nữ 3', 200000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-02', '2', 'M', 0, 0, 'Viet Nam'),
(99, 5, 'giay1.jpg', 'Giày Nam 1', 300000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-02', '3', '29', 0, 0, 'Viet Nam'),
(100, 5, 'giay2.jpg', 'Giày Nam 2', 500000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-03', '3', '31', 0, 0, 'Viet Nam'),
(101, 5, 'giay3.jpg', 'Giày Nam 3', 300000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-03', '1', '30', 0, 0, 'Viet Nam'),
(102, 5, 'giaynu1.jpg', 'Giày Nữ 1', 500000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-03', '1', '31', 0, 0, 'Viet Nam'),
(103, 10, 'giaynu2.jpg', 'Giày Nữ 2', 400000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-02', '4', '32', 0, 0, 'Viet Nam'),
(104, 12, 'giaynu3.jpg', 'Giày Nữ 3', 600000, '<p>H&agrave;ng Việt Nam</p>\r\n', '2016-08-05', '4', '33', 0, 0, 'Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` char(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `phonenumber` char(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `user`, `pass`, `fullname`, `phonenumber`, `email`, `address`, `birthday`, `gioitinh`, `level`) VALUES
(26, 'admin', 'admin', 'Nguyễn Đức Thành', '0905098817', 'thanhndpd01239@fpt.edu.vn', 'Đà Nẵng', '1996-12-30', 'Nam', '1'),
(28, 'khachhang', 'khachhang', 'nguyễn a', '0905226337', 'khach@gmail.com', 'Đà Nẵng', '1986-12-27', 'Nam', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tt_lienhe`
--

CREATE TABLE `tt_lienhe` (
  `stt` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `matk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`magd`),
  ADD KEY `mahd` (`mahd`),
  ADD KEY `manv` (`manv`);

--
-- Indexes for table `hd_chitiet`
--
ALTER TABLE `hd_chitiet`
  ADD KEY `masp` (`masp`),
  ADD KEY `mahd` (`mahd`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `tongtien` (`tongtien`),
  ADD KEY `matk` (`matk`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`,`matk`),
  ADD KEY `matk` (`matk`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`,`level`);
ALTER TABLE `taikhoan` ADD FULLTEXT KEY `level` (`level`);

--
-- Indexes for table `tt_lienhe`
--
ALTER TABLE `tt_lienhe`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `makh` (`matk`),
  ADD KEY `makh_2` (`matk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giaohang`
--
ALTER TABLE `giaohang`
  MODIFY `magd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tt_lienhe`
--
ALTER TABLE `tt_lienhe`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `giaohang_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giaohang_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hd_chitiet`
--
ALTER TABLE `hd_chitiet`
  ADD CONSTRAINT `hd_chitiet_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hd_chitiet_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`);

--
-- Constraints for table `tt_lienhe`
--
ALTER TABLE `tt_lienhe`
  ADD CONSTRAINT `tt_lienhe_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
