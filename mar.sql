-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 01:55 PM
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
-- Database: `mar`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Months` varchar(10) NOT NULL,
  `Total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Months`, `Total`) VALUES
('April', '62'),
('March', '65'),
('May', '60');

-- --------------------------------------------------------

--
-- Table structure for table `dropout`
--

CREATE TABLE `dropout` (
  `Dropout` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropout`
--

INSERT INTO `dropout` (`Dropout`, `Total`) VALUES
('droupout', '31.3%'),
('non_dropout', '68.8%');

-- --------------------------------------------------------

--
-- Table structure for table `ethnic`
--

CREATE TABLE `ethnic` (
  `id` int(11) NOT NULL,
  `Ethnic` varchar(111) NOT NULL,
  `Weight` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ethnic`
--

INSERT INTO `ethnic` (`id`, `Ethnic`, `Weight`) VALUES
(5, 'Chinese', '34.75'),
(7, 'Indian', '43.31'),
(5, 'Malay', '21.94');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `Gender` varchar(200) NOT NULL,
  `Total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`Gender`, `Total`) VALUES
('Female', '66.14'),
('Male', '33.86');

-- --------------------------------------------------------

--
-- Table structure for table `mar_campaign`
--

CREATE TABLE `mar_campaign` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Ethnic` varchar(10) NOT NULL,
  `Initial_weight` varchar(10) NOT NULL,
  `Final_weight` varchar(10) NOT NULL,
  `Weight_loss` varchar(10) NOT NULL,
  `Goals` varchar(10) NOT NULL,
  `Dropout` varchar(10) NOT NULL,
  `Non-Dropout` varchar(5) NOT NULL,
  `Target_weight` varchar(10) NOT NULL,
  `Attendance` varchar(10) NOT NULL,
  `March` varchar(200) NOT NULL,
  `April` varchar(20) NOT NULL,
  `May` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mar_campaign`
--

INSERT INTO `mar_campaign` (`id`, `Name`, `Gender`, `Ethnic`, `Initial_weight`, `Final_weight`, `Weight_loss`, `Goals`, `Dropout`, `Non-Dropout`, `Target_weight`, `Attendance`, `March`, `April`, `May`) VALUES
(1, 'Azman', 'Male', 'Malay', '80', '77', '3.75', '0.625', 'No', 'No', '74', '75', '2', '3', '4'),
(2, 'Clarkson', 'Female', 'Indian', '60', '51', '8.33', '0.92', 'No', 'No', '51', '91.7', '4', '4', '3'),
(3, 'Kamal', 'Male', 'Malay', '80', '77', '3.75', '0.375', 'Yes', '', '70', '25', '2', '1', '0'),
(4, 'Kim', 'Male', 'Chinese', '66', '66', '0', '0', 'Yes', '', '62', '25', '2', '1', '0'),
(5, 'Kong', 'Male', 'Chinese', '70', '66', '5.71', '0.95', 'No', 'No', '64', '75', '3', '3', '3'),
(6, 'Lim', 'Female', 'Chinese', '62', '57', '8.06', '1', 'No', 'No', '54', '91.7', '4', '3', '4'),
(7, 'Monica', 'Female', 'Indian', '60', '60', '0', '0', 'Yes', '', '55', '0', '0', '0', '0'),
(8, 'Naseer', 'Male', 'Malay', '67', '65', '2.99', '0.598', 'No', 'No', '62', '66.7', '2', '3', '3'),
(9, 'Nurin', 'Female', 'Malay', '75', '72', '4', '0.444', 'Yes', '', '66', '16.7', '2', '0', '0'),
(10, 'Priya', 'Female', 'Indian', '55', '53', '3.63', '0.726', 'No', 'No', '50', '83.3', '3', '3', '4'),
(11, 'Sabrina', 'Female', 'Malay', '65', '59', '9.23', '0.923', 'No', 'No', '55', '100', '4', '4', '4'),
(12, 'Sally', 'Female', 'Indian', '60', '57', '5.00', '0.833', 'No', 'No', '54', '66.7', '3', '2', '3'),
(13, 'Shafiq', 'Male', 'Malay', '74', '72', '2', '0.675', 'No', 'No', '70', '66.7', '2', '3', '3'),
(14, 'Shu', 'Female', 'Chinese', '88', '79', '10.23', '0.93', 'No', 'No', '77', '100', '4', '4', '4'),
(15, 'Sony', 'Male', 'Chinese', '80', '79', '1.25', '0.25', 'Yes', '', '75', '33.3', '2', '2', '0'),
(16, 'Vinoth', 'Male', 'Indian', '65', '57', '0.12', '0.015', 'No', 'No', '57', '91.7', '3', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Months`);

--
-- Indexes for table `dropout`
--
ALTER TABLE `dropout`
  ADD PRIMARY KEY (`Dropout`);

--
-- Indexes for table `ethnic`
--
ALTER TABLE `ethnic`
  ADD PRIMARY KEY (`Ethnic`);

--
-- Indexes for table `mar_campaign`
--
ALTER TABLE `mar_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
