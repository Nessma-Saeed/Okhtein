-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 09:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okhtein_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(256) NOT NULL,
  `collection` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `price`, `image`, `collection`, `user_id`) VALUES
(8, 'For every one', 100.00, 'uploads/AI_for_Everyone(AI4E).png', 'THE JASMINE CAPSULE', 3),
(9, 'For every two', 200.00, 'uploads/Ischool certificate.png', 'THE GODDESS COLLECTION', 3),
(10, 'bbb', 50.00, 'uploads/Ischool certificate.png', 'JEWELRY', 3),
(11, 'yalahwaay', 300.00, 'uploads/iti_Certificate.jpg', 'THE GODDESS COLLECTION', 3),
(14, 'gold', 200.00, 'uploads/Screenshot 2025-04-08 011042.png', 'THE GODDESS COLLECTION', 3),
(15, 'silver', 121.00, 'uploads/Screenshot 2024-02-12 201304.png', 'THE GODDESS COLLECTION', 3),
(16, 'sosoosos', 300.00, 'uploads/Screenshot 2025-04-08 232932.png', 'GOLDEN COLLECTION', 3),
(17, 'nessssss', 50.00, 'uploads/Screenshot 2024-05-20 204708.png', 'THE GODDESS COLLECTION', 4),
(18, 'Blban', 200.00, 'uploads/Screenshot 2025-05-01 122505.png', 'THE GODDESS COLLECTION', 3),
(19, 'dasdasdadas', 200.00, 'uploads/Screenshot 2024-02-16 220201.png', 'TOP PICKS', 3),
(20, 'bobobo', 300.00, 'uploads/Intro to Software Engineering.jpeg', 'THE JASMINE CAPSULE', 3),
(21, 'aaaaaaaaaaaaaaaaaaaaaaa', 10.00, 'uploads/Screenshot 2025-05-01 204644.png', 'GOLDEN COLLECTION', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `email`, `Password`) VALUES
(3, 'Badawy', 'badawy@gmail.com', '$2y$10$IFcSJlXwOMnHJ.3wGTPOteejKp0EortqweCwjDSAfL4HPNxb4GBbi'),
(4, 'nessma', 'nessma@gamil.com', '$2y$10$pbE/TmmzhPkOGLlWnuxVbuI4LvIItC2lu2mzSdWjkTbWLpJxrAsA.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
