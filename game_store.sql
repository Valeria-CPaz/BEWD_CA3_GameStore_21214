-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 12:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `console` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `available` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `price`, `console`, `genre`, `available`, `image`) VALUES
(2, 'Mass Effect L. Edition', 52, 'ps4', 'rpg', 'yes', 'uploads/masseffect.jpg'),
(4, 'Prey', 10, 'ps4', 'shooter', 'yes', 'uploads/prey.jpg'),
(5, 'Crackdown 3', 32, 'xbox', 'shooter', 'no', 'uploads/crackdown.jpg'),
(6, 'Destiny', 15, 'Select Console', 'shooter', 'yes', 'uploads/destiny.jpg'),
(7, 'Dishonored 2', 25, 'ps4', 'rpg', 'yes', 'uploads/dishonored.jpg'),
(8, 'Far Cry 6', 22, 'xbox', 'shooter', 'yes', 'uploads/farcry.jpg'),
(9, 'Fornite', 5, 'xbox', 'moba', 'yes', 'uploads/fortnite.jpg'),
(10, 'Friday The 13th', 13, 'xbox', 'shooter', 'yes', 'uploads/friday13.jpg'),
(11, 'Halo Infinite', 45, 'xbox', 'shooter', 'yes', 'uploads/halo.jpg'),
(12, 'Titanfall 2', 6, 'ps4', 'shooter', 'yes', 'uploads/titanfall.jpg'),
(13, 'Uncharted 4', 15, 'ps4', 'shooter', 'yes', 'uploads/uncharted 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Valeria', '$2y$10$TfudoKLZL1HB.fhLot/bU.3ZHGb71DpWQNWulJ.EJoF/VEfsiuL0e', 'val.paz@gmail.com'),
(2, 'John', '$2y$10$xCvF57gnUST7DPeBFPEgi.mC1JFalcqTZXjda77zp6Fd.0Cf43xYa', 'joe@joe.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
