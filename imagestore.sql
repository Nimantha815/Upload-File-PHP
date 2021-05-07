-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `post_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imageName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`post_id`, `description`, `imageName`) VALUES
(255, 'iwguefygwuef', 'e9cb2623c9dbae334e5dfdc3c8ca9f0de0ac29bd.jpg'),
(256, 'mata chithrayak one', '2018-07-31.jpg'),
(257, 'mata chithrayak one', 'picture/images (2).jpg'),
(258, 'I Want a picture using \"Diya sayam\" like this below', 'picture/images (1).jpg'),
(259, 'iwguefygwuef', 'picture/OFF_Overtime_Product_Collections_Large_2X.jpg'),
(260, 'ss', 'picture/OFF_US_FamCare_Collection_Large_2X.png'),
(261, 'Nimantha Aravinda', 'picture/Screenshot (4).png'),
(262, 'mata chithrayak one', 'picture/2018-07-31.jpg'),
(263, 'mata chithrayak one', 'picture/2018-07-31.jpg'),
(266, 'dbuweyeg7fu', 'picture/36-362597_wallpaper-of-the-week-iphone-7-plus-wallpaper.jpg'),
(268, 'ef6t2fwyqiu', 'picture/36-362597_wallpaper-of-the-week-iphone-7-plus-wallpaper.jpg'),
(269, 'jiug', 'picture/36-362597_wallpaper-of-the-week-iphone-7-plus-wallpaper.jpg'),
(270, 'jiug', 'picture/36-362597_wallpaper-of-the-week-iphone-7-plus-wallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
