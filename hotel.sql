-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 06:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_room`
--

CREATE TABLE `booking_room` (
  `room_id` int(10) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_number` int(10) NOT NULL,
  `active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_room`
--

INSERT INTO `booking_room` (`room_id`, `room_type`, `room_number`, `active`) VALUES
(1, 'dormitory', 1, 'y'),
(2, 'dormitory', 2, 'y'),
(3, 'suite', 1, 'y'),
(4, 'suite', 2, 'y'),
(5, 'mini-suite', 1, 'y'),
(6, 'mini-suite', 2, 'y'),
(7, 'superior', 1, 'y'),
(8, 'superior', 2, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'fook', 'fook@gmail.com', '$2y$10$OrFE/nCMInHFf4YYVR2d7uoIczpDJU0Zt4ULGB6QY2AGV8I6ThjaS'),
(2, 'fook', 'fook123@gmail.com', '$2y$10$tun5xhWJlhhr0uUTiGbpOe/K2iV372NfqnBiOUpT51WDMm.0v7Yri'),
(3, 'abc', 'abc123@gmail.com', '$2y$10$9mNWnwkGhBEpI7Pmv0tRhe3HfHfgujiDn7I/USYC6YyaYB.qj9mKu'),
(4, 'abcd', 'abcd@gmail.com', '$2y$10$.jlnn66y22IdpyCfz1IHhunK8PFHeXy7/5aY39Bu0lHYeyIxufshW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
