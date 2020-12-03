-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 03:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serviceboy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` char(20) NOT NULL,
  `pin` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pin`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `boy`
--

CREATE TABLE `boy` (
  `boyid` int(11) NOT NULL,
  `boyname` char(50) NOT NULL,
  `boyrate` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boy`
--

INSERT INTO `boy` (`boyid`, `boyname`, `boyrate`) VALUES
(1, 'Siddique', 400),
(2, 'Rubel', 200);

-- --------------------------------------------------------

--
-- Table structure for table `maidboy`
--

CREATE TABLE `maidboy` (
  `maidid` int(11) DEFAULT NULL,
  `maidname` char(50) DEFAULT NULL,
  `maidrate` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maidboy`
--

INSERT INTO `maidboy` (`maidid`, `maidname`, `maidrate`) VALUES
(1, 'Joshim', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'iamraufu', '$2y$10$rQWDlcDmWtGwMCDgdsHtU.oKqGtr3F0c0G8C3K1Cvzv5j/3lO1yxu', '2020-12-02 23:18:20'),
(2, 'raufu', '$2y$10$G4wMbXd0cMv00yT2jlxSE.qFLZ7OBOmuRJrb4JGz49ZxUfV7rMjoa', '2020-12-03 17:15:56'),
(3, 'eftykhar', '$2y$10$H8pQ4FfrB8Xnl.0JmxDzpOIuLkBYY5wOmxsOzvGJrI/e./oct/392', '2020-12-03 17:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
