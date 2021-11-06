-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 11:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmr_travels`
--
CREATE DATABASE IF NOT EXISTS `cmr_travels` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cmr_travels`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `gender`, `phone`, `email`, `password`) VALUES
(1, 'C.M.R', 'Admin', 'male', 713677319, 'test@gmail.com', '5cdb22744b3ab3b52db97ce7086a26376027e355');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `passengerNIC` int(20) NOT NULL,
  `seatId` int(11) DEFAULT NULL,
  `routeId` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `passengerNIC`, `seatId`, `routeId`, `date`) VALUES
(9, 263213213, 1, 4, '2021-10-13'),
(10, 263213213, 3, 1, '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE `bus` (
  `busNumber` varchar(20) NOT NULL,
  `busName` varchar(50) NOT NULL,
  `busType` enum('Normal','Semi Luxury','Luxury') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busNumber`, `busName`, `busType`) VALUES
('BGU2234', 'Bus Name 01', 'Normal'),
('BHG6675', 'Bus Name 08', 'Normal'),
('BHS5567', 'Bus Name 02', 'Normal'),
('CAS3356', 'Testing', 'Semi Luxury'),
('CAW2224', 'Car 2', 'Normal'),
('FDB1243', 'Bus Name 05', 'Luxury'),
('HJI9976', 'Bus Name 04', 'Luxury'),
('UUT8876', 'Bus Name 07', 'Normal'),
('YTT2356', 'Bus Name 06', 'Semi Luxury');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE `passenger` (
  `nic` int(20) NOT NULL DEFAULT 0,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('male','female','-') NOT NULL DEFAULT '-',
  `phone` int(12) NOT NULL DEFAULT 0,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`nic`, `fname`, `lname`, `gender`, `phone`, `email`, `password`) VALUES
(263213213, 'Himansa', 'Katulanda', 'male', 765322986, 'test@gmail.com', '5cdb22744b3ab3b52db97ce7086a26376027e355');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `routeFrom` varchar(50) DEFAULT NULL,
  `routeTo` varchar(50) DEFAULT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL,
  `busNumber` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `routeFrom`, `routeTo`, `departureTime`, `arrivalTime`, `busNumber`, `price`) VALUES
(1, 'Kadawatha', 'Mathara', '00:30:00', '04:30:00', 'CAS3356', 250),
(2, 'wathtala', 'Mathara', '00:30:00', '04:30:00', 'CAS3356', 100),
(4, 'Jaffna', 'Kaduwela', '04:00:00', '08:00:00', 'BHS5567', 500),
(5, 'Pannipitiya', 'Nugegoda', '03:00:00', '12:00:00', 'BHS5567', 450),
(6, 'Maharagama', 'Koswaththa', '17:50:00', '03:10:00', 'CAS3356', 200),
(7, 'Waththala', 'Makola', '10:00:00', '08:00:00', 'CAW2224', 500),
(8, 'Nugegoda', 'Koswaththa', '14:00:00', '08:20:00', 'CAS3356', 88);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `seatNumber` varchar(11) NOT NULL,
  `seatType` enum('window','non window') NOT NULL DEFAULT 'non window',
  `busNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `seatNumber`, `seatType`, `busNumber`) VALUES
(1, 'G44', 'window', 'CAW2224'),
(3, 'G31', 'non window', 'CAW2224'),
(4, 'H54', 'non window', 'BHS5567'),
(5, 'H66', 'window', 'CAS3356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seatId` (`seatId`),
  ADD KEY `routeId` (`routeId`),
  ADD KEY `passengerNIC` (`passengerNIC`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busNumber`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busNumber` (`busNumber`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busNumber` (`busNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`seatId`) REFERENCES `seat` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`routeId`) REFERENCES `route` (`id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`passengerNIC`) REFERENCES `passenger` (`nic`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`busNumber`) REFERENCES `bus` (`busNumber`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`busNumber`) REFERENCES `bus` (`busNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
