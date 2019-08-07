-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2019 lúc 06:21 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `manga`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(100) NOT NULL,
  `user` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bookmark` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookmark`
--

INSERT INTO `bookmark` (`id`, `user`, `bookmark`) VALUES
(1, 'super0201', 'Tate No Yuusha No Nariagari'),
(2, 'super0201', 'Tate No Yuusha No Nariagari'),
(3, 'super0201', 'Bakemonogatari'),
(4, 'super0201', 'Plastic Memories');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `thumb`, `date_add`, `date_update`) VALUES
(1, 'Romance', 'https://i.imgur.com/N59gL6zh.png', '2019-08-04', '0000-00-00'),
(2, 'Action', 'https://i.imgur.com/hM6OfBuh.png', '2019-08-04', '0000-00-00'),
(3, 'Isekai', 'https://i.imgur.com/TQgAI1xh.jpg', '2019-08-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `comic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `chapter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `comic`, `chapter`, `category`, `thumb`, `date_add`, `date_update`) VALUES
(0, 'Tate No Yuusha No Nariagari', 'Chapter 1', 'Action', 'https://i.imgur.com/RvICVuch.png\r\nhttps://i.imgur.com/fX1gHJJh.png\r\nhttps://i.imgur.com/CMM5VAZh.png\r\nhttps://i.imgur.com/rqj0zNwh.png\r\n', '2019-08-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comic`
--

CREATE TABLE `comic` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comic`
--

INSERT INTO `comic` (`id`, `name`, `category`, `description`, `date_add`, `date_update`) VALUES
(1, 'Tate No Yuusha No Nariagari', 'Action', 'A man equipped with only a shield is chosen to be one of the world\'s great defenders, but when a cruel betrayal shatters his reputation, he tries to regain the public\'s trust while fighting evil alongside a few devoted allies.', '2019-08-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `avatar`, `date_add`, `date_update`) VALUES
(1, 'super0201', '0898992198', 'super20411@gmail.com', 'https://i.imgur.com/N59gL6zh.png', '2019-08-04', '2019-08-04'),
(2, 'admin1', '0', '0', 'https://i.imgur.com/ePy9j1nh.jpg', '2019-08-04', '0000-00-00'),
(3, 'admin2', '123456789', 'daviddiplo999@gmail.com', 'https://i.imgur.com/bNvd99eh.png', '2019-08-03', '0000-00-00'),
(4, 'flower', '12345678', 'nguyenhuuminhhuy@gmail.com', 'https://i.imgur.com/m3zuHrzh.png', '2019-08-04', '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comic`
--
ALTER TABLE `comic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
