-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 12:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webquangautattoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'Lan'),
(3, 'Lan', 'Lan'),
(5, 'Phong Lan', 'Lan');

-- --------------------------------------------------------

--
-- Table structure for table `detailsproduct`
--

CREATE TABLE `detailsproduct` (
  `id_product` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_producttype` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailsproduct`
--

INSERT INTO `detailsproduct` (`id_product`, `img`, `price`, `soluong`, `description`, `id_producttype`, `no`) VALUES
(78, 'plant4.jpg', 450000, 4, 'Hình xăm hoa sen mang nhiều ý nghĩa tốt đẹp như hòa hợp vợ chồng, vinh hiển, hưng thịnh, thăng quan, phát tài… Bạn có thể xăm lên vai, lưng, gáy, cổ, sau tai, cổ tay hay chân đều rất đẹp. Xăm hình hoa sen tượng trưng cho nam nữ hòa hợp, vợ chồng ân ái, và tượng trưng cho tính cách con người trong sạch, liêm khiết.', '81', 1),
(86, 'animal1.jpg', 570000, 8, 'zcxvzsdvdv', '83', 3),
(87, 'animal5.jpg', 570000, 6, 'Ý nghĩa chung của hình xăm chim Hạc\r\nHạc là vật tượng trưng cho sự cát tường, trường thọ, lòng trung thành, sự cao nhã và vẻ đẹp toàn mỹ. Hạc vốn có tiên phong đạo cốt, được xem là “đứng đầu trong các loài chim”. ... Hạc có tuổi thọ rất cao, cùng với rùa được xem là linh vật tượng trưng cho sự trường thọ.', '83', 9),
(88, 'other6.jpeg', 456000, 5, 'ảnh gia đình đẹp ', '91', 1);

-- --------------------------------------------------------

--
-- Table structure for table `managementnews`
--

CREATE TABLE `managementnews` (
  `id_news` int(100) NOT NULL,
  `articlename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `summary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managementnews`
--

INSERT INTO `managementnews` (`id_news`, `articlename`, `img`, `summary`, `content`) VALUES
(2, 'Ý nghĩa hình xăm cá sấu', 'animal3.jpg', 'vì nó rất đẹp', 'vì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpv'),
(3, 'Ý nghĩa hình xăm cá chép', 'animal3.jpg', 'Hình xăm cá chép mang rất nhiều ý nghĩa ', 'Hình xăm cá chép có thể được hiểu theo nhiều cách khác nhau. một hình xăm cá chép bơi ngược dòng và bơi xuôi dòng có ý nghĩa khác nhau. Ngoài ra, một hình xăm cá chép đơn giản trong nước có nghĩa riêng của nó. Một con cá chép bơi trong nước tượng trưng cho lòng dũng cảm, khả năng đạt được mục tiêu và vượt qua khó khăn của cuộc sống. Khi nó được miêu tả đang bơi ngược dòng, tượng trưng cho người xăm, vẫn đang phải vật lộn với vấn đề của mình. Mặt khác, nếu nó được mô tả bơi xuôi dòng, ngụ ý rằng người đó đã vượt qua khó khăn của mình. Trong Phật giáo, nó đại diện cho lòng can đảm và gan dạ.\r\n\r\nQuyền lực\r\nSức mạnh\r\nsự Kiên trì\r\nLòng dũng cảm\r\nmay mắn\r\nĐam mê tình yêu\r\nĐộc lập\r\nNam tính\r\nHữu nghị\r\nHình xăm cá chép được thực hiện trong nhiều màu sắc tươi sáng mỗi màu sắc mô tả ý nghĩa đặc biệt của nó.'),
(4, 'Phong Lan ', 'sdvasdv', 'xinh gái ơi là xinh gái', 'xinh gái và chắc chắn giàu');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id_producttype` int(11) NOT NULL,
  `producttypename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id_producttype`, `producttypename`, `no`) VALUES
(81, ' Plants and Leaves Tattoo', 7),
(82, 'Animal Tattoo', 2),
(83, 'Simple Tattoo', 3),
(84, 'Tattoo for Women', 4),
(85, 'Couple Tattoo ', 5),
(86, 'Other Tattoo', 6),
(87, ' Mini Sticker', 12),
(88, 'Biceps Sticker', 8),
(89, 'Butterfly Sticker', 9),
(90, 'Hand Sealed Sticket', 10),
(91, '  Big Sticket', 11),
(94, 'Product Sale ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id_cus` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id_cus`, `email`, `password`) VALUES
(21, 'lan1243@gmail.com', 'lan'),
(23, 'lethiphonglan.cntt58b@gmail.com', 'phonglan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_product`, `img`, `price`, `soluong`) VALUES
(1, 1, 'sdvsd', 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infororder`
--

CREATE TABLE `tbl_infororder` (
  `id_custormer` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhthucgiao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_infororder`
--

INSERT INTO `tbl_infororder` (`id_custormer`, `name`, `phone`, `email`, `address`, `note`, `hinhthucgiao`) VALUES
(5, 'Lan', 369556290, 'lethiphonglan.cntt58b@gmail.com', '74 Phương Liệt', 'nhanh nhé ', 0),
(6, 'panther', 369556290, 'lan1243@gmail.com', '104 acbhacs', 'nhanh nhé ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_custormer` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detailsproduct`
--
ALTER TABLE `detailsproduct`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `managementnews`
--
ALTER TABLE `managementnews`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id_producttype`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_infororder`
--
ALTER TABLE `tbl_infororder`
  ADD PRIMARY KEY (`id_custormer`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detailsproduct`
--
ALTER TABLE `detailsproduct`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `managementnews`
--
ALTER TABLE `managementnews`
  MODIFY `id_news` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id_producttype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_infororder`
--
ALTER TABLE `tbl_infororder`
  MODIFY `id_custormer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
