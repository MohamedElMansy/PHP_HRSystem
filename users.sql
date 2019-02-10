-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 06:36 PM
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
(1, 'youmna', '25f9e794323b453885f5181f1b624d0b', 'youmna', 'developer', 'youmna.jpg', 'youmna.pdf', 'true'),
(2, 'Mohamedelmansy', '25f9e794323b453885f5181f1b624d0b', 'mohamedelmansy', 'developer', 'Mohamedelmansy.jpg', 'Mohamedelmansy.pdf', 'false'),
(54, 'ali', '25f9e794323b453885f5181f1b624d0b', 'ali', 'developer', 'ali.jpg', 'ali.pdf', 'false'),
(55, 'ziad', '25f9e794323b453885f5181f1b624d0b', 'ziad', 'aaa', 'ziad.jpg', 'ziad.pdf', 'false'),
(56, 'tarek', 'bbb8aae57c104cda40c93843ad5e6db8', 'tarek', 'mmm', 'tarek.jpg', 'tarek.pdf', 'false'),
(57, 'ibrahim', '25f9e794323b453885f5181f1b624d0b', 'ibrahim', 'developer', 'ibrahim.jpg', 'ibrahim.pdf', 'false'),
(58, 'mostafa', '25f9e794323b453885f5181f1b624d0b', 'mostafa', 'aaa', 'mostafa.jpg', 'mostafa.pdf', 'false');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
