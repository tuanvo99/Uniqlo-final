-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2024 lúc 10:11 AM
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
-- Cơ sở dữ liệu: `web1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `createAt`, `updateAt`) VALUES
('vohuutuan', '123123', NULL, NULL),
('duongtrongkhoi', '123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_code`, `order_date`, `order_status`, `user_email`) VALUES
(1, 30087205, 12, 1, ''),
(2, 96110334, 12, 0, ''),
(3, 7483697, 12, 0, ''),
(4, 84543481, 12, 0, ''),
(5, 62807073, 12, 0, ''),
(6, 15189155, 12, 0, ''),
(7, 32325543, 12, 0, ''),
(8, 46576540, 12, 0, ''),
(9, 3746817, 12, 0, ''),
(10, 42212460, 12, 0, ''),
(11, 22237574, 12, 0, ''),
(12, 94830163, 12, 0, ''),
(13, 85900874, 12, 0, ''),
(14, 97188005, 12, 0, ''),
(15, 66416373, 12, 0, ''),
(16, 61138766, 12, 0, ''),
(17, 80083330, 12, 0, ''),
(18, 51991945, 12, 0, ''),
(19, 90523893, 12, 0, ''),
(20, 17839288, 12, 0, ''),
(21, 81996382, 12, 0, ''),
(22, 69133272, 12, 0, ''),
(23, 28915270, 12, 0, ''),
(24, 99735183, 12, 0, ''),
(25, 64074399, 12, 0, ''),
(26, 29683498, 12, 0, ''),
(27, 37179045, 12, 0, ''),
(28, 23756075, 14, 0, ''),
(29, 38710871, 14, 0, ''),
(30, 93775828, 14, 0, ''),
(31, 19628781, 14, 0, ''),
(32, 89246877, 14, 0, ''),
(33, 66355117, 14, 0, 'beta@gmail.com'),
(34, 92139475, 14, 0, 'beta@gmail.com'),
(35, 97108842, 14, 1, 'beta@gmail.com'),
(36, 63158353, 15, 0, 'beta@gmail.com'),
(37, 52692569, 4, 0, 'duongtrongkhoi.03@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_size` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `proof` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `product_size`, `name`, `phone`, `email`, `location`, `method`, `proof`) VALUES
(1, '30087205', 2, 1, '', 'Du', '0856684801', 'alpha@gmail.com', 'Phạm Ngũ Lão', '', NULL),
(2, '30087205', 1, 1, '', 'Du', '0856684801', 'alpha@gmail.com', 'Phạm Ngũ Lão', '', NULL),
(22, '85900874', 1, 1, '', 'Du', '0856684801', 'alpha@gmail.com', 'Bachs Khoa', '', NULL),
(27, '37179045', 2, 1, '', 'Kai Du', '0856684801', 'alpha@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán bằng mã QR', 'assets/images/2023_12_12_12_03_28pm.jpg'),
(28, '37179045', 6, 7, '', 'Kai Du', '0856684801', 'alpha@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán bằng mã QR', 'assets/images/2023_12_12_12_03_28pm.jpg'),
(30, '89246877', 22, 1, '', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_14_08_07_40pm.'),
(31, '66355117', 2, 0, '', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_14_08_09_29pm.'),
(32, '92139475', 42, 5, '', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_14_10_08_20pm.'),
(33, '97108842', 42, 1, '', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_14_10_09_25pm.'),
(34, '97108842', 2, 1, '', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_14_10_09_25pm.'),
(35, '63158353', 42, 4, 'S', 'Beta', '0865684801', 'beta@gmail.com', '29 Phạm Ngũ Lão, Lâm Đồng, 12, Vũng Tàu', 'Thanh toán khi nhận hàng', 'assets/images/2023_12_15_12_42_53am.'),
(36, '52692569', 11, 1, 'S', 'cc', '0916963953', 'duongtrongkhoi.03@gmail.com', 'xx, xx, xx, xx', 'Thanh toán khi nhận hàng', 'assets/images/2024_12_04_11_10_34pm.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'public/img/default/df.jpeg',
  `img1` varchar(255) DEFAULT 'public/img/default/df.jpeg',
  `img2` varchar(255) DEFAULT 'public/img/default/df.jpeg',
  `img3` varchar(255) DEFAULT 'public/img/default/df.jpeg',
  `sale` int(11) NOT NULL,
  `vote_number` int(11) NOT NULL,
  `total_stars` int(11) NOT NULL,
  `typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`, `img1`, `img2`, `img3`, `sale`, `vote_number`, `total_stars`, `typeid`) VALUES
(1, 200000, 'Áo polo nam in sọc premium', 'Áo polo nam', 'Cách để được tư vấn chính xác ', 'public/img/products/men/011.jpeg', 'public/img/products/men/012.jpeg', 'public/img/products/men/013.jpeg', 'public/img/products/men/014.jpeg', 30, 20, 100, 0),
(2, 220000, 'Áo thun nam ngắn tay S Cafe có thêu', 'Áo thun nam', ' nỉ cao cấp 2 lớp', 'public/img/products/men/021.jpeg', 'public/img/products/men/022.jpeg', 'public/img/products/men/023.jpeg', 'public/img/products/men/024.jpeg', 30, 20, 90, 0),
(3, 200000, 'Quần short nam nylon', 'Quần short nam', 'quan nam', 'public/img/products/men/031.jpeg', 'public/img/products/men/032.jpeg', 'public/img/products/men/033.jpeg', 'public/img/products/men/034.jpeg', 10, 0, 0, 0),
(4, 300000, 'Quần jeans nam', 'Quần jean nam', 'cc', 'public/img/products/men/041.jpeg', 'public/img/products/men/042.jpeg', 'public/img/products/men/043.jpeg', 'public/img/products/men/044.jpeg', 0, 9, 45, 0),
(5, 350000, 'Áo khoác không tay túi hộp', 'Áo khoác nam', 'cc', 'public/img/products/men/051.jpeg', 'public/img/products/men/052.jpeg', 'public/img/products/men/053.jpeg', 'public/img/products/men/054.jpeg', 8, 0, 0, 0),
(6, 380000, 'Áo khoác cổ trụ phối màu', 'Áo khoác nam', 'cc', 'public/img/products/men/061.jpeg', 'public/img/products/men/062.jpeg', 'public/img/products/men/063.jpeg', 'public/img/products/men/064.jpeg', 10, 2, 20, 0),
(7, 500000, 'Áo blazer sọc', 'Áo vest nam', 'cc', 'public/img/products/men/071.jpeg', 'public/img/products/men/072.jpeg', 'public/img/products/men/073.jpeg', 'public/img/products/men/074.jpeg', 15, 0, 0, 0),
(8, 200000, 'Daily Suit Trouser', 'Quần lửng nam', 'Sản xuất trực tiếp tại Việt Nam.', 'public/img/products/men/081.jpeg', 'public/img/products/men/082.jpeg', 'public/img/products/men/083.jpeg', 'public/img/products/men/084.jpeg', 10, 0, 0, 0),
(9, 175000, 'UT ONE PIECE Anime 25th Áo Thun', 'Áo thun nam', 'cc', 'public/img/products/men/091.jpeg', 'public/img/products/men/092.jpeg', 'public/img/products/men/093.jpeg', 'public/img/products/men/094.jpeg', 10, 0, 0, 0),
(10, 150000, 'UT Harry Potter Áo Thun Ngắn Tay (Slytherin)', 'Áo thun nam', 'cc', 'public/img/products/men/101.jpeg', 'public/img/products/men/102.jpeg', 'public/img/products/men/103.jpeg', 'public/img/products/men/104.jpeg', 10, 0, 0, 0),
(11, 600000, 'Áo Khoác Giả Lông Cừu Kéo Khóa', 'Áo khoác nam', 'cc', 'public/img/products/men/111.jpeg', 'public/img/products/men/112.jpeg', 'public/img/products/men/113.jpeg', 'public/img/products/men/114.jpeg', 10, 0, 0, 0),
(12, 370000, 'Quần Vải Dạ Dài Đến Mắt Cá | Caro', 'Quần nam', 'cc', 'public/img/products/men/121.jpeg', 'public/img/products/men/122.jpeg', 'public/img/products/men/123.jpeg', 'public/img/products/men/124.jpeg', 10, 0, 0, 0),
(21, 500000, 'PUFFTECH Áo Khoác Chần Bông | Có Mũ', 'Áo khoác nữ', 'cc', 'public/img/products/women/011.jpg', 'public/img/products/women/012.jpg', 'public/img/products/women/013.jpg', 'public/img/products/women/014.jpg', 30, 0, 0, 1),
(22, 150000, 'Áo khoác kaki lửng DT phối lé', 'Áo khoác', ' tđược tư vấn chính xác nhất', 'public/img/products/women/021.jpg', 'public/img/products/women/022.jpg', 'public/img/products/women/023.jpg', 'public/img/products/women/024.jpg', 20, 0, 0, 1),
(23, 150000, 'Áo phao ngắn túi cơi có mũ', 'áo nữ', 'hất liệu cúa áo khoác nỉ nam', 'public/img/products/women/031.jpg', 'public/img/products/women/032.jpg', 'public/img/products/women/033.jpg', 'public/img/products/women/034.jpg', 10, 0, 0, 1),
(24, 200000, 'Áo khoác kaki dài đai eo', 'Áo khoác nữ', 'Áo Krdiganformrong', 'public/img/products/women/041.jpg', 'public/img/products/women/042.jpg', 'public/img/products/women/043.jpg', 'public/img/products/women/044.jpg', 30, 0, 0, 1),
(25, 85000, 'Áo khoác kaki lửng lá cổ kèm đai', 'Áo sơ mi nam', ' chất lượng dịch vụ tốt hơn.', 'public/img/products/women/051.jpg', 'public/img/products/women/052.jpg', 'public/img/products/women/053.jpg', 'public/img/products/women/054.jpg', 30, 0, 0, 1),
(26, 79000, 'Áo khoác croptop DT vạt bung', 'Quần Jean nam', 'THÔNG TIN SẢNhào liên quan đến chất lượng', 'public/img/products/women/061.jpg', 'public/img/products/women/062.jpg', 'public/img/products/women/063.jpg', 'public/img/products/women/064.jpg', 10, 0, 0, 1),
(27, 129000, 'Khoác kaki can bong ngực thắt đai', 'Quần Jean nam', ' ở đến chất lượng', 'public/img/products/women/071.jpg', 'public/img/products/women/072.jpg', 'public/img/products/women/073.jpg', 'public/img/products/women/074.jpg', 30, 0, 0, 1),
(28, 100000, 'Áo thun ôm LT lệch vai', 'áo nữ', 'Không nhận đổi trả với lí do không vừa ý ', 'public/img/products/women/081.jpg', 'public/img/products/women/082.jpg', 'public/img/products/women/083.jpg', 'public/img/products/women/084.jpg', 30, 0, 0, 1),
(29, 208000, 'Đầm Vest ôm xếp ly', 'Quần lửng nam', 'QUẦN ĐÙI THần sp tại Việt Nam.', 'public/img/products/women/091.jpg', 'public/img/products/women/092.jpg', 'public/img/products/women/093.jpg', 'public/img/products/women/094.jpg', 30, 0, 0, 1),
(30, 175000, 'Chân váy xoè cạp to can diễu', 'Quần lửng nam', ' chống nhăn', 'public/img/products/women/101.jpg', 'public/img/products/women/102.jpg', 'public/img/products/women/103.jpg', 'public/img/products/women/104.jpg', 35, 0, 0, 1),
(31, 398000, 'Chân váy A phối cơi ', 'Quần lửng nam', 'dịch vụ của GENVIET', 'public/img/products/women/111.jpg', 'public/img/products/women/112.jpg', 'public/img/products/women/113.jpg', 'public/img/products/women/114.jpg', 30, 0, 0, 1),
(32, 68000, 'Đầm party 2 dây in hoạ tiết', 'váy nữ', 'vá hàng yêu quý của shop ', 'public/img/products/women/121.jpg', 'public/img/products/women/122.jpg', 'public/img/products/women/123.jpg', 'public/img/products/women/124.jpg', 20, 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT 'public/img/default/avtdf.jpg',
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('duongtrongkhoi.03@gmail.com', 'public/img/user/2024_12_04_05_17_01pm.jpg', 'tuan', 'vo huu', 1, 21, '0916963953', '2024-12-03 18:13:53', '2024-12-04 23:17:01', '4c17eced432a3b7e15a039ef51eae110e7e0263ba2bb256b180b2d26c02112b9'),
('hihi@gmail.com', NULL, 'Michael', 'Jordan', 1, 15, '0123456789', NULL, NULL, ''),
('hihihi@gmail.com', NULL, 'Kim', 'Jong Un', 0, 30, '0123456789', NULL, NULL, ''),
('alpha@gmail.com', 'public/img/default/avtdf.jpg', 'Kai', 'Du', 1, 19, '0856684801', '2023-12-12 00:41:22', '2023-12-12 00:41:22', '8fa5f7c11a174d22e187c65963e053d3827dc4701281f4e0f706577cb47a7cce');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sale` (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
