-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Technician`
--

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `Fullname`, `username`, `mobile`, `gender`, `password`, `email`, `birth`, `experience`, `category`, `address`, `file`) VALUES
(5, 'khar123', 'khar', '  01792348322', 'Male', 'khar123', 'asd@gmail.com', '02-08-2002', 'high', 'Plumber', 'rajshahi', 'abc.jpg'),
(7, 'iftekhar', 'abc', ' 01792348322', 'mnjk', 'ifte123', 'iiuit@gmail.com', '10-12-10', 'kjhkjh', 'jkhkj', 'dhaka', 'abc.jpg'),
(8, 'saqib', 'saqib123', '01723432376', 'Male', '123456', 'saqib@gmail.com', '12-10-1997', 'low', 'Computer Technician', 'badda,notun bazar', 'saqib.jpg'),
(9, 'khairul', 'khairul43', '01521419872', 'Male', '222222', 'khairul@gmail.com', '10-12-2010', '10-15 years', 'Industrial Technician', 'dhaka', 'abc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
