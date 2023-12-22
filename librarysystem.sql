-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2023 lúc 12:07 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `librarysystem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `PublicationYear` int(11) DEFAULT NULL,
  `GenreID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`BookID`, `Title`, `Author`, `PublicationYear`, `GenreID`) VALUES
(1, 'title01', 'author01', 2003, 1),
(2, 'title02', 'author02', 2003, 1),
(3, 'title03', 'author02', 2003, 1),
(4, 'title04', 'author03', 2003, 2),
(5, 'title05', 'author04', 2003, 2),
(6, 'title06', 'author04', 2003, 2),
(7, 'title07', 'author03', 2003, 3),
(8, 'title08', 'author01', 2003, 3),
(9, 'title09', 'author04', 2003, 3),
(10, 'title10', 'author05', 2003, 4),
(11, 'title11', 'author06', 2003, 4),
(12, 'title12', 'author06', 2003, 4),
(13, 'title13', 'author07', 2003, 5),
(14, 'title14', 'author07', 2003, 5),
(15, 'title15', 'author08', 2003, 5),
(16, 'afdafaf', 'dafdf', 2323, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `geners`
--

CREATE TABLE `geners` (
  `GenreID` int(11) NOT NULL,
  `GenreName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `geners`
--

INSERT INTO `geners` (`GenreID`, `GenreName`) VALUES
(1, 'genre01'),
(2, 'genre02'),
(3, 'genre03'),
(4, 'genre04'),
(5, 'genre05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `GenreID` (`GenreID`);

--
-- Chỉ mục cho bảng `geners`
--
ALTER TABLE `geners`
  ADD PRIMARY KEY (`GenreID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `geners`
--
ALTER TABLE `geners`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`GenreID`) REFERENCES `geners` (`GenreID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
