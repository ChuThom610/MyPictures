-- phpMyAdmin SQL Dump

-- version 4.7.4
-- 
https://www.phpmyadmin.net/
--
-- 
Máy chủ: 127.0.0.1
-- 
Thời gian đã tạo: Th10 16, 2017 lúc 07:03 AM

-- Phiên bản máy phục vụ: 10.1.26-MariaDB

-- Phiên bản PHP: 7.0.23


	SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

	SET AUTOCOMMIT = 0;
START TRANSACTION;

	SET time_zone = "+00:00";


/*!40101 
	SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 
	SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 
	SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 
	SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thietkeweb`
--

-- --------------------------------------------------------

--
-- 
Cấu trúc bảng cho bảng `tblanh`

--

CREATE TABLE `tblanh` (
  `ID` int(100) NOT NULL,
  
			`title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  
			`anh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  
			`anh_thumb` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  
			`link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  
			`ordernum` int(10) NOT NULL,
  
			`status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Đang đổ dữ liệu cho bảng `tblanh`

--

INSERT INTO `tblanh` (`ID`, `title`, `anh`, `anh_thumb`, `link`, `ordernum`, `status`) 
	VALUES
(3, 'ahihi', 'upload/Ã¡da.PNG', NULL, '', 0, 1),

		(4, 'Ã¡das', 'upload/hkg.PNG', NULL, '', 0, 1),
		
(5, 'dffs', 'upload/jsjsk.PNG', NULL, '', 0, 1),
		
(6, 'agagaga', 'upload/13255924_1602322263413841_8833853965884099893_n.jpg', NULL, '', 0, 1),

		(7, 'uuuu', 'upload/dá.PNG', NULL, '', 0, 1);


--
-- Chỉ mục cho các bảng đã đổ

	--

--
-- Chỉ mục cho bảng `tblanh`

		--
ALTER TABLE `tblanh`
  ADD PRIMARY KEY (`ID`);


--
-- AUTO_INCREMENT cho các bảng đã đổ

	--

--
-- AUTO_INCREMENT cho bảng `tblanh`

		--
ALTER TABLE `tblanh`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;


		/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
		
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

		/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
