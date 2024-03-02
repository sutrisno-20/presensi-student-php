-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nis`, `username`, `email`, `password`, `image`) VALUES
(1, 101, 'admin', 'admin@gmail.com', 'admin@gmail.com', NULL),
(2, 103, 'testing', 'testing@gmail.com', 'testing@gmail.com', '65e30017b8501_IMG-20240117-WA0001.jpg'),
(3, 1727, 'ajsdakdak', 'testing@gmail.com', 'testing@gmail.com', '65e3036b64a41_Sutrisno.jpg'),
(4, 1727, 'ajsdakdak', 'testing@gmail.com', 'testing@gmail.com', '65e3064e8056c_Sutrisno.jpg'),
(5, 105, 'Reinaldo', 'reinaldo@gmail.com', 'reinaldo@gmail.com', NULL),
(6, 105, 'Reinaldo', 'reinaldo@gmail.com', 'reinaldo@gmail.com', '2024-03-02_12-07-26_boy.png'),
(7, 108, 'teststds', 'lagilagi@gmail.com', 'lagilagi@gmail.com', '65e30aea11760_woman.png'),
(8, 107, 'adasdad', 'adasd@gmail.com', 'adasd@gmail.com', '65e30ba3ab296_man.png'),
(9, 107, 'adasdad', 'adasd@gmail.com', 'adasd@gmail.com', '65e30bf10e47a_man.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
