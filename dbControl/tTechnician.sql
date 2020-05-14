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
-- Table structure for table `tTechnician`
--

CREATE TABLE `tTechnician` (
  `id` int(50) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  `catagory` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tTechnician`
--

INSERT INTO `tTechnician` (`id`, `Fullname`, `username`, `mobile`, `gender`, `password`, `email`, `birth`, `experience`, `catagory`, `address`, `file`) VALUES
(24, 'ifte', 'ifte123', '01792348322', 'male', '123456', 'avc@gmail.com', '10-12-1998', 'high', 'computer technician', 'nikunjo-2,khelkhet,Dhaka', 'abc.jpg'),
(26, 'sohan', 'sohan123', '01779247455', 'Male', '123456', 'sohan09@gmail.com', '08-09-1992', 'medium', 'Industrial Technician', 'uttora dhaka', 'saqib.jpg'),
(27, 'Hasin', 'Hasin123', '01821419750', 'Male', 'hasin45', 'hasin@gmail.com', '02-05-1990', 'medium', 'Plumber', 'mirpur-11,Dhaka', 'saqib.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tTechnician`
--
ALTER TABLE `tTechnician`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tTechnician`
--
ALTER TABLE `tTechnician`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
