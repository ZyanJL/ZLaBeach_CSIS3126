-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql.labeach.jwuclasses.com
-- Generation Time: May 02, 2022 at 09:13 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labeach`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `user_id` int NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`user_id`, `user_name`, `password`, `date`) VALUES
(1, 'zyan', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(2, 'tagen', '01cfcd4f6b8770febfb40cb906715822', NULL),
(3, 'Smith362', '41bec553dd9f9cd350efd29b3ae303e8', NULL),
(4, 'jordin', 'c01ba40c87acee033621c336ac71d197', NULL),
(5, 'alexxus', '5f4dcc3b5aa765d61d8327deb882cf99', '2022-05-01 22:51:23'),
(6, '     ', '1545e945d5c3e7d9fa642d0a57fc8432', '2022-05-01 23:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `phone_swings`
--

CREATE TABLE `phone_swings` (
  `filename` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone_swings`
--

INSERT INTO `phone_swings` (`filename`, `user_id`, `date`) VALUES
('zyan1649702782.txt', 1, '2022-04-11 18:46:22'),
('zyan1649704992.txt', 1, '2022-04-11 19:23:12'),
('zyan1649774953.txt', 1, '2022-04-12 14:49:13'),
('Smith3621649867452.txt', 3, '2022-04-13 16:30:52'),
('zyan1651377067.txt', 1, '2022-05-01 03:51:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
