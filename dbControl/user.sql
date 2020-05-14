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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth-date` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `mobile`, `sex`, `password`, `email`, `birth-date`, `address`) VALUES
(14, 'ifte khar ', 'ifte123', '01792348322', 'Male', 'ifte2580', 'iftekharislam111@gmail.com', '25-10-1997', 'nikunjo-2'),
(35, 'lian', 'iftekharislam', '01521419804', 'Male', 'islam12', 'lian@gmail.com', '05-07-1995', 'khelkhet,nikunjo-2 dhaka'),
(37, 'sabbir', 'sabbir123', '01756263838', 'Male', 'sabbir123', 'sabbir@gmail.com', '18-12-1993', 'Gazipur,dhaka'),
(42, 'sabbir', 'sabbir12i', '01756263838', 'Male', '123456', 'sabbi@gmail.com', '18-12-1993', 'Gazipur,dhaka'),
(44, 'noman', 'noman12', '01715032597', 'Male', 'noman123', 'noman@gmail.com', '12-03-1998', 'Dhanmondi,Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
