-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 10:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `is_admin` varchar(50) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Name`, `Job`, `image`, `cv`, `is_admin`) VALUES
(1, 'Mohamedelmansy', '12345', 'mohamed', 'developer', 'img1.jpg', 'cv1', 'true'),
(2, 'youmna1', '12345', 'youmna', 'developer', 'img2.jpg', 'cv2', 'false'),
(3, 'ali30', '12345', 'asdlsnkadlk', 'sandlnas', '4tOINMsu_400x400.jpg', 'cv.pdf', ''),
(4, '12345', 'ali', 'ali20', 'dev', '3E15C70900000578-4295170-image-a-28_1489023487876.jpg', 'cv.pdf', ''),
(7, 'sdsd', 'ddddd', 'dsd', 'sdsd', '31_nchold.jpg', 'cv.pdf', ''),
(12, '1231315', 'zzzzz', 'zzzzzzzzzz', 'xccasd', '4tOINMsu_400x400.jpg', 'cv.pdf', 'false'),
(13, 'ccccccccc', 'zzzzzzzz', 'cccccccccc', 'aasdsad', '3E15C70900000578-4295170-image-a-28_1489023487876.jpg', 'cv.pdf', 'false'),
(14, 'username', 'pass', 'name', 'hob', '4tOINMsu_400x400.jpg', 'cv.pdf', 'false'),
(15, 'sadsad', '12345', 'aliali', 'masd;ma', '3E15C70900000578-4295170-image-a-28_1489023487876.jpg', 'cv.pdf', 'false'),
(17, 'mmmmmm', 'mmmmm', 'mmmmmm', 'mmmmmm', '4tOINMsu_400x400.jpg', 'cv.pdf', 'false'),
(19, 'nlnasdl', 'sa315dsa', 'aaaaaaaaaa', 'asdjkasnd', '3E15C70900000578-4295170-image-a-28_1489023487876.jpg', 'cv.pdf', 'false'),
(21, 'aslnklsadn', 'nlsandlsa', 'sadnlskandl', 'naskdnsa;', '3E15C70900000578-4295170-image-a-28_1489023487876.jpg', 'cv.pdf', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
