-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2019 lúc 09:58 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`id`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`) VALUES
(7, 'Nguyá»…n ThÃ nh LuÃ¢n', 'Nam', '19/06/1997', 'Tp.hcm'),
(8, 'Phan Thá»‹ Diá»‡u Hoa', 'ná»¯', '15/05/1997', 'Thanh HÃ³a'),
(9, 'Táº¡ TÃ i Linh', 'ná»¯', '06/08/1997', 'lÃ¢m thao'),
(10, 'Nguyá»…n Tháº¿ Duy', 'nam', '04/05/1995', 'Ninh HÃ²a'),
(11, 'Tráº§n ÄÃ¬nh CÆ°Æ¡ng', 'nam', '19/08/1997', 'Ninh MÄ©'),
(12, 'Nguyá»…n Há»¯u ThÃ´ng', 'nam', '11/04/1999', 'Báº¯c Ninh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congnhan`
--

CREATE TABLE `congnhan` (
  `id` int(11) NOT NULL,
  `bac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynangluong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mucluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
