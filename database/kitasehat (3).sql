-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 08:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitasehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_ID` int(11) NOT NULL,
  `nama_article` varchar(200) DEFAULT NULL,
  `rilis_article` date DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_ID`, `nama_article`, `rilis_article`, `user_ID`) VALUES
(1, '7 Tips Untuk Menjaga Kesehatan Mental', '2024-05-20', NULL),
(2, '5 Permainan Olahraga Yang Baik dalam Mengasah Otak Dan Pikiran', '2024-05-21', NULL),
(3, 'Yuk Ketahi Tentang Apa Itu Bodybuilding', '2024-05-22', NULL),
(4, 'Apa Saja Bahayanya Merokok Bagi Tubuh Kita?', '2024-05-23', NULL),
(5, 'Inilah Daftar Buah Buahan Yang Kaya Akan Vitamin A', '2024-05-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE `bmi` (
  `bmi_ID` int(11) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `result` decimal(5,2) DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmi`
--

INSERT INTO `bmi` (`bmi_ID`, `weight`, `height`, `result`, `user_ID`) VALUES
(1, 40.00, 150.00, 17.78, NULL),
(2, 39.00, 180.00, 12.04, NULL),
(3, 37.00, 170.00, 12.80, NULL),
(4, 34.00, 149.00, 15.31, NULL),
(6, 50.00, 150.00, 22.22, NULL),
(7, 30.00, 200.00, 7.50, NULL),
(8, 65.55, 176.55, 21.39, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `nama`, `username`, `password`, `level`) VALUES
(105, 'user', 'user', 'user', 'user'),
(111, 'mimin', 'mimin', 'mimin', 'admin'),
(114, 'Garfield', 'Garfield Junior', 'garfield 123', 'user'),
(116, 'sahibulloh', 'Rahmat Syahibullah', 'rahmat123', 'user'),
(117, 'amir', 'Amirullah', 'amir321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_ID`),
  ADD KEY `fk_article_user` (`user_ID`);

--
-- Indexes for table `bmi`
--
ALTER TABLE `bmi`
  ADD PRIMARY KEY (`bmi_ID`),
  ADD KEY `fk_user_bmi` (`user_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bmi`
--
ALTER TABLE `bmi`
  MODIFY `bmi_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_user` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`),
  ADD CONSTRAINT `fk_user_article` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `bmi`
--
ALTER TABLE `bmi`
  ADD CONSTRAINT `fk_user_bmi` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
