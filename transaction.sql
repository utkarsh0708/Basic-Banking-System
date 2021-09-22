-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 08:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customerdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(0, 'Aman Bhatia', 'Gaurav Kumar', 3000, '2021-09-22 23:30:34'),
(1, 'Aman Bhatia', 'Utkarsh Bhosekar', 5000, '2021-09-22 18:58:27'),
(2, 'Aman Bhatia', 'Rohan Shah', 1000, '2021-09-22 19:00:31'),
(3, 'John Smith', 'Aryan Patel', 10000, '2021-09-22 19:01:32'),
(4, 'Liam Jones', 'Aryan Patel', 7000, '2021-09-22 19:06:15'),
(5, 'Tom Thompson', 'Sanket Shirsat', 7500, '2021-09-22 19:28:24'),
(6, 'John Smith', 'Ethan Williams', 10500, '2021-09-22 19:30:31'),
(7, 'Ethan Williams', 'Utkarsh Bhosekar', 25000, '2021-09-22 19:31:22'),
(8, 'Utkarsh Bhosekar', 'Aryan Patel', 9800, '2021-09-23 07:39:58'),
(9, 'Gaurav Kumar', 'Liam Jones', 6700, '2021-09-23 09:37:08'),
(10, 'Gaurav Kumar', 'Rohan Shah', 3200, '2021-09-23 11:52:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
