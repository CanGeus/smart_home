-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2023 at 05:28 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21518738_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `relay1`
--

CREATE TABLE `relay1` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relay1`
--

INSERT INTO `relay1` (`id`, `kondisi`, `date`) VALUES
(1, 'on', '2023-11-07 08:17:10'),
(2, 'off', '2023-11-08 11:47:52'),
(3, 'off', '2023-11-08 11:48:14'),
(4, 'on', '2023-11-08 12:18:29'),
(5, 'on', '2023-11-08 12:18:38'),
(6, 'off', '2023-11-08 12:34:16'),
(7, 'on', '2023-11-08 12:34:56'),
(8, 'off', '2023-11-08 12:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `relay2`
--

CREATE TABLE `relay2` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relay2`
--

INSERT INTO `relay2` (`id`, `kondisi`, `date`) VALUES
(1, 'off', '2023-11-07 08:17:22'),
(2, 'off', '2023-11-08 11:48:22'),
(3, 'on', '2023-11-08 11:48:27'),
(4, 'off', '2023-11-08 12:36:27'),
(5, 'on', '2023-11-08 12:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `kondisi`, `date`) VALUES
(1, 'manual', '2023-11-07 08:17:33'),
(2, 'auto', '2023-11-08 13:06:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relay1`
--
ALTER TABLE `relay1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relay2`
--
ALTER TABLE `relay2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relay1`
--
ALTER TABLE `relay1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `relay2`
--
ALTER TABLE `relay2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
