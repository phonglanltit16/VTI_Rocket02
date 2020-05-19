-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 01:25 PM
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
(0, 'admin', 'admin'),
(0, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `detailsproduct`
--

CREATE TABLE `detailsproduct` (
  `id_product` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_producttype` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailsproduct`
--

INSERT INTO `detailsproduct` (`id_product`, `img`, `price`, `description`, `id_producttype`, `no`) VALUES
(49, 'animal11.jpg', 250000, '\0zvzxcvx  ', '82', 2),
(51, 'plant5.jpg', 450000, 'zv zc ds', '81', 1),
(53, 'simple1.jpg', 190000, '\0cv advsv ', '83', 1),
(55, 'simple4.jpg', 500000, 'zcdsv ', '83', 3),
(59, 'other1.jpg', 270000, 'đây là ảnh đẹp', '86', 1),
(61, 'plant4.jpg', 350000, '\0lác hjcasc', '81', 4),
(64, 'animal7.jpg', 520000, 'con chó rất xinh và đẹp', '82', 10);

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
(2, 'Ý nghĩa hình xăm cá Sấu ', 'animal3.jpg', 'vì nó rất đẹp', 'vì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpvì nó rất đẹpv');

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
(81, 'Plants and Leaves Tattoo', 1),
(82, 'Animal Tattoo', 2),
(83, 'Simple Tattoo', 3),
(84, 'Tattoo for Women', 4),
(85, 'Couple Tattoo ', 5),
(86, 'Other Tattoo', 6),
(87, 'Mini Sticker', 7),
(88, 'Biceps Sticker', 8),
(89, 'Butterfly Sticker', 9),
(90, 'Hand Sealed Sticket', 10),
(91, 'Big Sticket', 11);

-- --------------------------------------------------------

--
-- Table structure for table `registernewaccount`
--

CREATE TABLE `registernewaccount` (
  `id_cus` int(11) NOT NULL,
  `namecus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `shoppingaddress` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registernewaccount`
--

INSERT INTO `registernewaccount` (`id_cus`, `namecus`, `email`, `password`, `phonenumber`, `shoppingaddress`) VALUES
(1, 'LAn', 'lan123@gmail.com', '123456', 974521347, '74 Phương Liệt');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `registernewaccount`
--
ALTER TABLE `registernewaccount`
  ADD PRIMARY KEY (`id_cus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailsproduct`
--
ALTER TABLE `detailsproduct`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `managementnews`
--
ALTER TABLE `managementnews`
  MODIFY `id_news` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id_producttype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `registernewaccount`
--
ALTER TABLE `registernewaccount`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
