-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 03:26 PM
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
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `From1` varchar(25) NOT NULL,
  `To1` varchar(25) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `From1`, `To1`, `message`) VALUES
(1, 'ifte1', 'khar231', 'hey how are you ?'),
(6, 'mdfk', 'ifte123', 'kk'),
(7, 'dfdsf', 'ifte123', 'hi ifte how are you'),
(8, 'ifte123', 'mdfk', 'so good'),
(9, 'new12', 'old12', 'all new'),
(13, 'ifte123', 'dfdsf', 'not bad boy'),
(14, 'ifte123', 'abc', 'i miss you dear'),
(15, 'abc', 'ifte123', 'me too'),
(16, 'abc', 'admin', 'i have some problem can you solve it'),
(17, 'admin', 'abc', 'describe your problem'),
(18, 'uname', 'tname', 'abc'),
(19, 'lian12', 'khar', 'who?'),
(20, 'khar', 'lian12', 'i am khar.'),
(21, 'ifte123', 'abc', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
