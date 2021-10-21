-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:57 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QuanLyThuoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `cost_price` float DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `production_date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
(1, 'Thuốc thần kinh', 'thân kinh', 'asdfsd', '4', 1111, 1500, 1400, '2022-12-03 00:00:00', 'CT Than Kinh', '2022-12-03 00:00:00', '2022-10-02 00:00:00', 'Ha Noi', 100000),
(2, 'Thuốc đau dạ dày', 'rối loạn', 'asdfsdds', '15', 2222, 1500, 1400, '2021-04-03 00:00:00', 'CT Than Kinh', '2022-10-04 00:00:00', '2022-10-04 00:00:00', 'Ha Noi', 100000),
(3, 'Thuốc đau bụng', 'rôi loạn', 'Mt2234', '15', 3333, 1500, 1400, '2020-04-03 00:00:00', 'CT Than Kinh', '2021-10-04 00:00:00', '2022-10-04 00:00:00', 'Hai duong', 100000),
(4, 'Thuốc đau Mắt', 'mắt', 'mt435322', '15', 4444, 1500, 1400, '2021-08-12 00:00:00', 'CT Than Kinh', '2021-10-04 00:00:00', '2022-10-04 00:00:00', 'Bac Ninh', 100000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
