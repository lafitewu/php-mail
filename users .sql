-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2017 at 01:35 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pay`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(16) UNSIGNED NOT NULL,
  `username` char(16) NOT NULL,
  `password` char(64) NOT NULL,
  `email` char(64) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`, `info`) VALUES
(20, 'wfc123', '14e1b600b1fd579f47433b88e8d85291', '863512936@qq.com', 0, 'fac176275ec327d4b977f04cd44b817c1481251789'),
(21, 'wfc1234', '14e1b600b1fd579f47433b88e8d85291', '15608422643@163.com', 0, '39e1363011ec60cd06e5894063a030111481251933'),
(22, 'wfc12345', '14e1b600b1fd579f47433b88e8d85291', '15608422643@163.com', 1, '0c13db44c166b56335b2f154aecc77131481252247'),
(23, 'jky1', 'a44f978858ee56f606aa60b618f794ce', '863512936@qq.com', 1, 'c1b9a6e5f116e159c88b3a60c9b18e9e1481682340'),
(24, 'wfc666', '14e1b600b1fd579f47433b88e8d85291', '863512936@qq.com', 1, 'c491adbe1ed30d9e5d17c3c82ea9581a1482281489'),
(25, 'jky666', '14e1b600b1fd579f47433b88e8d85291', '863512936@qq.com', 1, '29b0107b70ab64e3b1c430b75997f16d1482306060');

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
  MODIFY `id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
