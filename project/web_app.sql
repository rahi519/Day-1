-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 09:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `mobile`, `password`, `image`, `login_time`, `update_time`) VALUES
(1, 'vraj', 'vraj@gmail.com', '6352168504', 'vraj123', '685220.jpg', '2021-05-15 07:25:47', '2021-05-15 07:25:47'),
(29, 'Ritik patel', 'ritik@gmail.com', '9909674271', 'ritik123', '685219.jpg', '2021-05-15 07:28:40', '2021-05-15 07:28:40'),
(30, 'shaman Patel', 'shaman@gmail.com', '6362666223', 'shaman123', 'IMG_20200927_111342.jpg', '2021-05-18 07:37:32', '2021-05-18 07:37:32'),
(31, 'Siddarth', 'siddarth@gmail.com', '9924431766', 'sid1234', '38589.jpg', '2021-05-18 07:39:06', '2021-05-18 07:39:06'),
(32, 'Sarvesh', 'sarvesh@gmail.com', '9267815623', 'sarvesh123', '469924.jpg', '2021-05-18 07:52:18', '2021-05-18 07:52:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
