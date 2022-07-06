-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 07:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `request`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_details`
--

CREATE TABLE `request_details` (
  `id` int(11) NOT NULL,
  `requestid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `damage` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_details`
--

INSERT INTO `request_details` (`id`, `requestid`, `name`, `date`, `time`, `email`, `phone_number`, `damage`, `status`) VALUES
(27, 1, 'Syera', '2021-06-10', '22:08:00', 'norsyahira0707@gmail.com', '01425364357', 'Virus', 'accepted'),
(28, 2, 'Afrina', '2021-06-10', '23:07:00', 'norsyahira0707@gmail.com', '0165589769', 'Virus', 'accepted'),
(29, 3, 'syamila', '2021-06-10', '23:07:00', 'norsyahirashahidul@gmail.com', '0194945637', 'Hard Disk Broken', 'Pending'),
(30, 4, 'Aziela', '2021-06-10', '23:13:00', 'norshera_07@yahoo.com', '0165589769', 'Hard Disk Broken', 'Pending'),
(31, 5, 'Azika', '2021-06-10', '23:33:00', 'norsyahira0707@gmail.com', '0165589769', 'Virus', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `request_details2`
--

CREATE TABLE `request_details2` (
  `id` int(11) NOT NULL,
  `requestid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `damage` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_details2`
--

INSERT INTO `request_details2` (`id`, `requestid`, `name`, `date`, `time`, `email`, `phone_number`, `damage`, `status`) VALUES
(47, '1', 'Syera', '2021-06-10', '23:44:00', 'norsyahira0707@gmail.com', '0194945637', 'Virus', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_details`
--
ALTER TABLE `request_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_details2`
--
ALTER TABLE `request_details2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_details`
--
ALTER TABLE `request_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `request_details2`
--
ALTER TABLE `request_details2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
