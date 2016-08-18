-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 03:46 PM
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
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giaohang`
--

CREATE TABLE `giaohang` (
  `magd` int(11) NOT NULL,
  `mahd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon_chitiet`
--

CREATE TABLE `hoadon_chitiet` (
  `stt` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `name`, `birthday`, `gender`, `email`, `phonenumber`, `comment`) VALUES
(27, 'dsdsd', '2015-11-19', 'Nam', 'ds@gmail.com', '23123123123', 'adsasdadsautocomplete="off"'),
(28, 'dssdsd', '2012-10-29', 'Nam', '123ds@gmaisd', '123123123', 'dâsdasd'),
(29, 'Nguyễn Đức Anh', '2014-08-29', 'Nam', 'nda@gmail.com', '0123456879', 'nguyễn đức anhnguyễn đức anhnguyễn đức anhnguyễn đức anhnguyễn đức anh'),
(30, 'dsds', '2013-11-30', 'Nam', 'dsds@dsds', '23232323', 'dsdsd'),
(31, 'dsds', '2013-11-30', 'Nam', 'dsds@dsds', '23232323', 'dsdsd'),
(32, 'quangqquang', '0003-02-02', 'Nam', '2ewsd@fdf', '2222222', 'dsdssds'),
(33, 'sds', '0232-03-23', 'Nam', '32ds@sdds', '232323', '2332'),
(34, 'sds', '0232-03-23', 'Nam', '32ds@sdds', '232323', '2332'),
(35, 'dsd', '2013-11-30', 'Nam', 'wsda@sds', '232323', '232323'),
(36, 'dsd', '2013-11-30', 'Nam', 'wsda@sds', '232323', '232323'),
(37, 'ádas', '2013-10-30', 'Nam', 'dsdsd2@sdsd', '123123123', 'sadzxsdxzc'),
(38, 'dsdsdsdsd', '2015-11-02', 'Nam', 'sadsd@SDSD', '23232323', 'SDSDSDS');

-- --------------------------------------------------------

--
-- Table structure for table `maloai`
--

CREATE TABLE `maloai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `mancc` int(11) NOT NULL,
  `tenncc` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `matk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `mansp` int(11) NOT NULL,
  `tennsp` varchar(255) NOT NULL,
  `maloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `mapn` int(11) NOT NULL,
  `manv` int(11) NOT NULL,
  `mancc` int(11) NOT NULL,
  `ngaynhap` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap_chitiet`
--

CREATE TABLE `phieunhap_chitiet` (
  `stt` int(11) NOT NULL,
  `mapn` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
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
  `mansp` int(11) NOT NULL,
  `madein` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `saleoff`, `iimages`, `productname`, `giaban`, `thongtinhsp`, `ngaynhap`, `loaisp`, `size`, `gianhap`, `soluongco`, `mansp`, `madein`) VALUES
(46, 5, 'aokhoac.jpg', 'Áo khoác nỉ đà', 1000, '<p>&Aacute;o c&oacute; chất liệu nĩ bền</p>\r\n', '2011-10-29', '1', 'XL, L, M', 0, 0, 0, ''),
(48, 10, 'chanvay.jpg', 'Chân váy đỏ', 250000, '<p>Ch&acirc;n v&aacute;y đỏ c&aacute; t&iacute;nh</p>\n', '2015-12-31', '2', 'XL, L, M', 0, 0, 0, ''),
(49, 10, 'aokhoac2.jpg', 'Áo khoác đen', 510000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(50, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(51, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(52, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(53, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(54, 10, 'aokhoac2.jpg', 'Áo khoác đen', 1276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(55, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(56, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(57, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(58, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(59, 10, 'aokhoac2.jpg', 'Áo khoác đen', 276000, '', '2016-12-31', '1', 'XL, L, M', 0, 0, 0, ''),
(60, 5, 'chanvay.jpg', 'Váy đỏ', 276000, '', '2013-11-04', '2', '', 0, 0, 0, ''),
(61, 5, 'chanvay.jpg', 'Váy đỏ', 2147483647, '', '2013-11-04', '2', 'Váy đỏ', 0, 0, 0, ''),
(73, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(74, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(75, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(76, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(77, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(78, 23, 'aokhoac3.jpg', 'testmade', 2232323, '<p>dsdsdsd</p>\r\n', '2013-11-29', '1', 'XL', 0, 0, 0, 'Việt Nam'),
(79, 290000, 'banner.png', 'demo', 300000, '<p>blo &aacute;dasczxczx</p>\r\n', '2016-05-27', '4', 'M', 0, 0, 0, 'Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` char(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `phonenumber` int(15) NOT NULL,
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
(0, 'admin', 'admin', 'admin1', 2147483647, 'asdasd@gmail.com', 'Đà Nẵng', '2015-11-17', 'Nam', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`,`makh`,`masp`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`magd`,`mahd`),
  ADD KEY `mahd` (`mahd`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`,`makh`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD PRIMARY KEY (`stt`,`mahd`,`masp`),
  ADD KEY `mahd` (`mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `maloai`
--
ALTER TABLE `maloai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`mancc`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`,`matk`),
  ADD KEY `matk` (`matk`);

--
-- Indexes for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD PRIMARY KEY (`mansp`,`maloai`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`mapn`,`manv`,`mancc`),
  ADD KEY `manv` (`manv`),
  ADD KEY `mancc` (`mancc`);

--
-- Indexes for table `phieunhap_chitiet`
--
ALTER TABLE `phieunhap_chitiet`
  ADD PRIMARY KEY (`stt`,`mapn`,`masp`),
  ADD KEY `mapn` (`mapn`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`,`mansp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`,`level`);

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
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `maloai`
--
ALTER TABLE `maloai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `mancc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  MODIFY `mansp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `mapn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phieunhap_chitiet`
--
ALTER TABLE `phieunhap_chitiet`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `giaohang_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon_chitiet` (`mahd`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `donhang` (`makh`);

--
-- Constraints for table `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD CONSTRAINT `hoadon_chitiet_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`);

--
-- Constraints for table `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD CONSTRAINT `nhomsanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `maloai` (`maloai`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`mancc`) REFERENCES `nhacungcap` (`mancc`);

--
-- Constraints for table `phieunhap_chitiet`
--
ALTER TABLE `phieunhap_chitiet`
  ADD CONSTRAINT `phieunhap_chitiet_ibfk_1` FOREIGN KEY (`mapn`) REFERENCES `phieunhap` (`mapn`),
  ADD CONSTRAINT `phieunhap_chitiet_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
