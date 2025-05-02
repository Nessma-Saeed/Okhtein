-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 10:54 AM
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
(1, 'Mini Studded', 26000.00, 'uploads/tblack1.jpg', 'TOP PICKS', 7),
(2, 'Dome Clutch', 30000.00, 'uploads/tbrown2.jpg', 'TOP PICKS', 7),
(3, 'Duo Top Handle Charm', 45000.00, 'uploads/tblack2.jpg', 'TOP PICKS', 7),
(4, 'YASMINE BAG', 38500.00, 'uploads/yblack.jpg', 'THE JASMINE CAPSULE', 7),
(5, 'YASMINE BAG', 38500.00, 'uploads/yred.jpg', 'THE JASMINE CAPSULE', 7),
(6, 'YASMINE BAG', 38500.00, 'uploads/ybeige.jpg', 'THE JASMINE CAPSULE', 7),
(7, 'Palmette Hexagon Minaudiere', 80000.00, 'uploads/ggreen.jpg', 'THE GODDESS COLLECTION', 7),
(8, 'Palmette Oval Minaudiere', 80000.00, 'uploads/gmint.jpg', 'THE GODDESS COLLECTION', 7),
(9, 'Palmette Oval Minaudiere', 70000.00, 'uploads/gpink.jpg', 'THE GODDESS COLLECTION', 7),
(10, 'Mini Dome Embossed', 30000.00, 'uploads/bag1.jpg', 'GOLDEN COLLECTION', 7),
(11, 'Mini Dome Embossed', 30000.00, 'uploads/bag2.jpg', 'GOLDEN COLLECTION', 7),
(12, 'Mini Dome Embossed', 28000.00, 'uploads/bag3.jpg', 'GOLDEN COLLECTION', 7),
(13, 'Oumoum Charm', 10000.00, 'uploads/gold pink1.jpg', 'JEWELRY', 7),
(14, 'Snake Rod Swirly Ring', 15000.00, 'uploads/gold red1.jpg', 'JEWELRY', 7),
(15, 'Oumoum Charm', 10000.00, 'uploads/goldsilver ring 1.jpg', 'JEWELRY', 7);

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
(4, 'nessma', 'nessma@gamil.com', '$2y$10$pbE/TmmzhPkOGLlWnuxVbuI4LvIItC2lu2mzSdWjkTbWLpJxrAsA.'),
(7, 'Saeed', 'smsa@gmail.com', '$2y$10$eT2rapH92D/JU9M.nyNNu.BD5NYgltHMPrXRxD6s6ZzUCzZbJOux.');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
