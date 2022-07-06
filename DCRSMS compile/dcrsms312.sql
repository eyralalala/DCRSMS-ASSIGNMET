-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcrsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(10) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_type`, `name`, `phone_no`, `email`, `password`) VALUES
('1', 'Customer', 'Qila', '01161013172', 'qila@gmail.com', 'chanyeol');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `account_id` varchar(10) NOT NULL,
  `custName` text NOT NULL,
  `custAddress` text NOT NULL,
  `custNo` varchar(20) NOT NULL,
  `custItem` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`account_id`, `custName`, `custAddress`, `custNo`, `custItem`, `date`) VALUES
('C01', 'Muhammad Hakimi bin Amri', 'Taman Wawasan', '01156279843', 'Monitor', '2021-05-01'),
('C02', 'Natasya binti Aziz', 'Taman Gambang Damai', '0175644187', 'Monitor', '2021-05-04'),
('C03', 'Lukman bin Wahid', 'Taman Indera Mahkota 1', '01132457895', 'Motherboard', '2021-05-12'),
('C04', 'Muhd Amir', 'Johor Bahru', '0145632564', 'SSD Card', '2021-05-25'),
('c05', 'test', 'test', '45454', 'test', '2021-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `rstaff`
--

CREATE TABLE `rstaff` (
  `account_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `account_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `custID` (`account_id`);

--
-- Indexes for table `rstaff`
--
ALTER TABLE `rstaff`
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD KEY `account_id` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
