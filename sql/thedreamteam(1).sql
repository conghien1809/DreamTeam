-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2024 lúc 07:24 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thedreamteam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calam`
--

CREATE TABLE `calam` (
  `maCa` int(11) NOT NULL,
  `thu` int(11) NOT NULL,
  `tenCa` varchar(20) NOT NULL,
  `thoigian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `calam`
--

INSERT INTO `calam` (`maCa`, `thu`, `tenCa`, `thoigian`) VALUES
(619, 3, 'a', 'b'),
(621, 4, 'ccc', 'ccc'),
(625, 5, 'a', 'a'),
(626, 5, 'a', 'a'),
(628, 7, 'a', 'a'),
(629, 4, 'ac', 'ac');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` varchar(26) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `soluong` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `soluong`) VALUES
('HD67592342cbe13', 1, 1),
('HD6759269084632', 2, 3),
('HD6759269084632', 5, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `IDLoaiSP` int(11) NOT NULL,
  `TenLoaiSP` varchar(100) NOT NULL,
  `mota` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`IDLoaiSP`, `TenLoaiSP`, `mota`) VALUES
(1, 'ƯU ĐÃI', 'ưu đãi'),
(2, 'GÀ RÁN - GÀ QUAY', 'gà rán, gà quay'),
(3, 'BURGER - CƠM - MỲ Ý', 'burger, cơm, mỳ ý'),
(4, 'THỨC ĂN NHẸ', 'thức ăn nhẹ'),
(5, 'THỨC UỐNG & TRÁNG MIỆNG', 'thức uống và tráng miệng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(26) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL CHECK (`status` = 0 or `status` = 1),
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `createdAt`, `status`, `MaKH`) VALUES
('HD67592342cbe13', '2024-12-11 05:29:38', 1, 1),
('HD6759269084632', '2024-12-11 05:43:44', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Username`, `Password`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Hồ Văn A', 'khachhang', '123', '034356372', 'khachhang123@gmal.com', '24 Lê Văn Lương, quận 7, TP.HCM'),
(2, 'Lê Quang Khoa', 'quangkhoa11', '123', '0986356372', 'khoa110303@gmail.com', 'Bình Định'),
(3, 'Nguyễn Công Hiến', 'conghien', '123', '0912347283', 'conghien@gmail.com', 'TP.HCM'),
(4, 'Trần Chính', 'tranchinh', '123', '0927348291', 'tranchinh@gmail.com', 'TP.HCM'),
(5, 'Dương Đức Quý', 'ducquy', '123', '0972634738', 'ducquy1234@gmail.com', 'Hà Nội'),
(6, 'Lê Tuấn Khang', 'tuankhang123', '123', '0928475839', 'tuankhanf@gmail.com', 'Hải Phòng'),
(7, 'Trịnh Trần Phương Tuấn', 'jack97', '123', '0972536721', 'j97@gmail.com', 'Bến Tre'),
(8, 'Hà Anh Tuấn', 'anhtuan', '123', '0983647384', 'haanhtuan@gmail.com', 'Bình Dương'),
(9, 'Nguyễn Trường Giang', 'truonggiang', '123', '0937463273', 'truonggiangk17iuh@gmail.com', 'TP.HCM'),
(10, 'Mỹ Duyên', 'myduyen12', 'Duyen*1234', '0374839234', 'myduyen@gmail.com', 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainv`
--

CREATE TABLE `loainv` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loainv`
--

INSERT INTO `loainv` (`MaLoai`, `TenLoai`) VALUES
(1, 'Quản lý'),
(2, 'Nhân viên bán hàng'),
(3, 'Nhân viên bếp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `MaLoai` int(11) DEFAULT NULL,
  `SDT` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `Username`, `Password`, `MaLoai`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Quản Lý Dream', 'quanly1', '123', 1, '0986356372', 'quanlydream@gmal.com', '13 Nguyễn Văn Linh, phường 3, quận 7, TP.HCM'),
(4, 'Nguyễn Văn A', 'nhanvienbanhang', '123', 2, '0346356372', 'nhanvien@gmal.com', '26 Nguyễn Văn Linh, phường 3, quận 7, TP.HCM'),
(5, 'Nhân viên Bếp', 'nhanvienbep', '123', 3, '0986356372', 'quanlydream@gmal.com', '13 Nguyễn Văn Linh, phường 3, quận 7, TP.HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `IDLoaiSP` int(11) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `dongia` int(11) NOT NULL,
  `MotaSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `IDLoaiSP`, `TenSP`, `img`, `dongia`, `MotaSP`) VALUES
(1, 1, 'Combo Cơm & Gà Rán', 'Combo Cơm & Gà Rán.png', 59000, '1 Cơm + 1 Gà Rán + 1 Pepsi'),
(2, 1, 'Combo Cơm & Gà Rán', 'Combo Cơm & Gà Rán.png', 69000, '3 Miếng Gà Rán + 2 Pepsi + 1 Gà Viên Vừa + 1 Khoai...'),
(3, 1, 'Combo Cơm & Gà Rán', 'Combo Cơm & Gà Rán.png', 89000, '3 Miếng Gà Rán + 3 Pepsi + 1 Mỳ ý'),
(4, 1, 'Combo Cơm & Gà Rán', 'Combo Cơm & Gà Rán.png', 69000, '1 Miếng Gà Rán + 1 Pepsi + 1 Burger'),
(5, 2, '1 Miếng Gà Rán', '1 Miếng Gà Rán.png', 35000, '1 Miếng Gà Giòn Cay/Gà Truyền Thống/Gà Giòn Không ...'),
(6, 2, '1 Miếng Gà Rán', '1 Miếng Gà Rán.png', 39000, '1 Miếng Phi-lê Gà Quay Flava/Phi-lê Gà Quay Tiêu'),
(7, 2, '3 Gà Rán Tenders Vị Nguyên Bản', '3 Gà Rán Tenders Vị Nguyên Bản.png', 41000, '3 Gà Rán Tenders Vị Nguyên Bản'),
(8, 2, '3 Miếng Gà Rán', '3 Miếng Gà Rán.png', 104000, '3 Miếng Gà Giòn Cay/Gà Truyền Thống/Gà Giòn Không ...'),
(9, 2, '5 Gà Rán Tenders Vị Nguyên Bản', '5 Gà Rán Tenders Vị Nguyên Bản.png', 66000, '01 Cơm Gà Viên Nanban + 01 Miếng Gà Rán + 01 Pepsi...'),
(10, 3, 'Burger Bánh Mì HDA', 'Burger Bánh Mì HDA.png', 77000, '1 Burger Bánh Mì + 1 Khoai Tây Chiên (vừa) + 1 Lon...'),
(11, 3, 'Burger Bánh Mì HDb', 'Burger Bánh Mì HDB.png', 189000, '2 Burger Bánh Mì + 2 Miếng Gà Rán + 2 Lon Pepsi'),
(12, 3, 'Cơm Gà Rán', 'Cơm Gà Rán.png', 48000, '1 Cơm Gà Rán'),
(13, 3, 'Cơm Gà Viên Nanban', 'Cơm Gà Viên Nanban.png', 39000, '01 Cơm Gà Viên Nanban'),
(14, 3, 'Combo Cơm Gà Viên Nanban HDA', 'Combo Cơm Gà Viên Nanban HDA.png', 86000, '01 Cơm Gà Viên Nanban + 01 Miếng Gà Rán + 01 Pepsi...'),
(15, 3, 'Combo Cơm Gà Viên Nanban HDB', 'Combo Cơm Gà Viên Nanban HDB.png', 189000, '01 Cơm Gà Viên Nanban + 03 Miếng Gà Rán + 01 Khoai...'),
(16, 3, 'Mì Ý Gà Viên', 'Mì Ý Gà Viên.jpg', 40000, '1 Mì Ý Gà Viên'),
(17, 3, 'Mì Ý Gà Viên', 'Mì Ý Gà Viên.jpg', 58000, '1 Mì Ý Gà Zinger'),
(18, 4, '3 Cá Thanh', '3 Cá Thanh.png', 40000, '3 Cá Thanh'),
(19, 4, '4 Phô Mai Viên', '4 Phô Mai Viên.jpg', 36000, '4 Phô Mai Viên'),
(20, 4, 'Bắp Cải Trộn (Vừa)', 'Bắp Cải Trộn (Vừa).jpg', 12000, 'Bắp Cải Trộn (Vừa)'),
(21, 4, 'Khoai Tây Chiên (Vừa)', 'Khoai Tây Chiên (Vừa).jpg', 12000, 'Khoai Tây Chiên (Vừa)'),
(22, 4, 'Khoai Tây Nghiền (Vừa)', 'Khoai Tây Nghiền (Vừa).png', 12000, 'Khoai Tây Nghiền (Vừa)'),
(23, 4, 'Salad Hạt', 'Salad Hạt.jpg', 38000, '1 Salad Hạt'),
(24, 4, 'Súp Rong Biển', 'Súp Rong Biển.png', 12000, 'Súp Rong Biển'),
(25, 5, '1 Bánh Trứng', '1 Bánh Trứng.png', 18000, '1 Bánh Trứng'),
(26, 5, '2 Thanh Bí Phô Mai', '2 Thanh Bí Phô Mai.png', 29000, '2 Thanh Bí Phô Mai'),
(27, 5, '2 Viên Khoai Môn Kim Sa', '2 Viên Khoai Môn Kim Sa.png', 26000, '2 Viên Khoai Môn Kim Sa'),
(28, 5, '1 Sô-cô-la Sữa Đá', '1 Sô-cô-la Sữa Đá.jpg', 20000, '1 Sô-cô-la Sữa Đá'),
(29, 5, '7Up', '7Up.jpg', 19000, '7Up lon'),
(30, 5, 'Aquafina 500ml', 'Aquafina 500ml.png', 15000, 'Aquafina 500ml'),
(31, 5, 'Lon Sting', 'Lon Sting.png', 19000, 'Lon Sting'),
(32, 5, 'Pepsi Không Calo', 'Pepsi Không Calo.jpg', 19000, 'Pepsi Không Calo lon'),
(33, 5, 'Pepsi', 'Pepsi.jpg', 19000, 'Pepsi lon'),
(34, 5, 'Trà Chanh Lipton (Vừa)', 'Trà Chanh Lipton (Vừa).png', 12000, 'Trà Chanh Lipton (Vừa)');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`IDLoaiSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Chỉ mục cho bảng `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `IDLoaiSP` (`IDLoaiSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `IDLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loainv`
--
ALTER TABLE `loainv`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loainv` (`MaLoai`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDLoaiSP`) REFERENCES `danhmucsp` (`IDLoaiSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
