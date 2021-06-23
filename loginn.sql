-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 01:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `id`) VALUES
('jenry', '123', 1),
('Admin', 'Admin1234!@', 2),
('Admin', 'Admin1234!@', 3),
('Admin', 'Admin123!@', 4),
('jenry', 'Admin123!@', 5),
('Admin', 'Admin123!@', 6),
('Admin', 'Admin123!@', 7),
('admin', 'jenjen1234', 8),
('Jenrypogi', 'pogiako', 9);

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`user`, `pass`) VALUES
('admin', 'admin123'),
('admin', '!Admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `wew`
--

CREATE TABLE `wew` (
  `id` int(100) NOT NULL,
  `user` int(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `code` int(100) NOT NULL,
  `created` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weww`
--

CREATE TABLE `weww` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weww`
--

INSERT INTO `weww` (`id`, `user`, `activity`, `Time`) VALUES
(1, 'jenry', 'Login', '0000-00-00 00:00:00.000000'),
(2, 'admin', 'Create account', '0000-00-00 00:00:00.000000'),
(3, 'admin', 'Login', '0000-00-00 00:00:00.000000'),
(4, 'admin', 'Login', '0000-00-00 00:00:00.000000'),
(5, 'Jenrypogi', 'Create account', '0000-00-00 00:00:00.000000'),
(6, 'jenry', 'Login', '2021-06-23 10:55:23.790123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wew`
--
ALTER TABLE `wew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weww`
--
ALTER TABLE `weww`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wew`
--
ALTER TABLE `wew`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weww`
--
ALTER TABLE `weww`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
