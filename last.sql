-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 10:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ice-cream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `ipadd` varchar(255) NOT NULL,
  `quin` int(255) NOT NULL,
  `byitem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `ipadd`, `quin`, `byitem`) VALUES
(166, '::1', 3, 2),
(167, '::1', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `message`) VALUES
(13, 'test@gmail.com', 'test1'),
(14, 'test2@gmail.com', 'test3'),
(15, '1@gmail.com', 'test4'),
(16, '2@gmail.com', 'ok test5'),
(17, 'ruvindu@gmail.com', 'best'),
(18, 'ddededed@gmail.com', 'drfededfce'),
(19, 'ruvindu@gmail.com', 'pprprppr'),
(20, 'ddd@gmail.com', 'dddddddd'),
(21, 'cdcdc@gmail.com', 'ccccccc');

-- --------------------------------------------------------

--
-- Table structure for table `ip_ad`
--

CREATE TABLE `ip_ad` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_ad`
--

INSERT INTO `ip_ad` (`id`, `mail`, `ip`) VALUES
(32, 'lasindu@gmail.com', '::1'),
(33, 'admin', '::1'),
(34, 'admin', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `price`, `image`, `item_name`) VALUES
(1, '', '250', 0x66726f7a656e362e6a7067, 'test1'),
(2, '', '150', 0x6963652d637265616d352e6a7067, 'test_ice-cream'),
(3, '', '400', 0x6963652d637265616d362e6a7067, 'test3'),
(4, '', '222', 0x66726f7a656e332e6a7067, 'test4'),
(5, '', '454', 0x66726f7a656e312e6a706567, 'test5'),
(6, '', '227', 0x6963652d637265616d392e6a7067, 'test6'),
(8, '', '250', 0x6963652d637265616d312e6a7067, 'test8'),
(25, '', '200', 0x66726f7a656e342e6a7067, 'test25'),
(37, '', '250', 0x6963652d637265616d31322e6a7067, 'test37'),
(38, '', '150', 0x6963652d637265616d31352e6a7067, 'test38'),
(75, '', '200', 0x6963652d637265616d312e6a7067, 'test75'),
(109, '', '100', 0x6963652d637265616d33302e6a7067, 'test109'),
(181, '', '120', 0x66726f7a656e372e6a706567, 'test181');

-- --------------------------------------------------------

--
-- Table structure for table `special_image`
--

CREATE TABLE `special_image` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_image`
--

INSERT INTO `special_image` (`id`, `name`, `image`) VALUES
(83, '', 0x66726f7a656e202831292e6a706567),
(84, '', 0x66726f7a656e202831292e6a7067),
(85, '', 0x66726f7a656e202831292e706e67),
(86, '', 0x66726f7a656e202832292e6a706567),
(87, '', 0x66726f7a656e202832292e6a7067),
(88, '', 0x66726f7a656e202833292e6a706567),
(89, '', 0x66726f7a656e202833292e6a7067),
(90, '', 0x66726f7a656e202834292e6a7067),
(91, '', 0x66726f7a656e202835292e6a7067),
(92, '', 0x66726f7a656e202836292e6a7067),
(93, '', 0x66726f7a656e202837292e6a7067),
(94, '', 0x66726f7a656e202838292e6a7067),
(95, '', 0x66726f7a656e202839292e6a7067),
(96, '', 0x66726f7a656e20283130292e6a7067),
(97, '', 0x66726f7a656e20283132292e6a7067),
(98, '', 0x66726f7a656e20283136292e6a7067),
(99, '', 0x66726f7a656e20283137292e6a7067),
(100, '', 0x66726f7a656e20283138292e6a7067),
(101, '', 0x66726f7a656e20283139292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `t_image`
--

CREATE TABLE `t_image` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_image`
--

INSERT INTO `t_image` (`id`, `name`, `img`) VALUES
(1, '', 0x66726f7a656e392e6a7067),
(2, '', 0x66726f7a656e372e6a706567),
(63, '', 0x66726f7a656e352e6a7067),
(64, '', 0x66726f7a656e202831292e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user`, `email`, `u_password`) VALUES
(1, 'ruvindu', 'vfvv@gmail.com', 'jahoo'),
(2, 'imcnf', 'vfvv@gmail.com', 'fffff'),
(3, 'lasindu', 'vfvv@gmail.com', 'lasindu'),
(4, 'swd', 'ded@gma.com', 'ff'),
(5, 'imandu', 'cdc@djd.co', 'imandu'),
(7, 'cdcdc', 'ded@gma.com', 'ccccc'),
(9, 'rufmmdc', 'vfvv@gmail.com', 'ggh'),
(10, 'test', 'jage1@gmail.com', 'jayashan'),
(11, 'swxw', 'jhoo48@gmail.com', 'test3'),
(12, 'test5', 'test@gmail.com', '111111'),
(13, 'test5', 'test@gmail.com', 'eeeeee'),
(14, 'lasindu', 'lasindu@gmail.com', 'lasindu'),
(15, '1', 'product1', '720'),
(16, 'jahoo', 'jahoo@gmail.com', 'jahoo'),
(17, 'jahoo', 'jahoo@gmail.com', 'jahoo1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `byitem` (`byitem`),
  ADD UNIQUE KEY `byitem_2` (`byitem`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_ad`
--
ALTER TABLE `ip_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `special_image`
--
ALTER TABLE `special_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_image`
--
ALTER TABLE `t_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ip_ad`
--
ALTER TABLE `ip_ad`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `special_image`
--
ALTER TABLE `special_image`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `t_image`
--
ALTER TABLE `t_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
