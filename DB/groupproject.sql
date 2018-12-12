-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 07:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupproject`
--
CREATE DATABASE groupproject;
USE groupproject;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

 INSERT INTO `admin` (`admin_id`, `username`, `hash`, `salt`) VALUES
(5, 'William', '$2a$07$PDFisDEmkNExIkILYMhqaOuNHf0wFhTMV1SOtF/mLtYv8OfPjFhwS\n', 'PDFisDEmkNExIkILYMhqaP');


-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_id` int(6) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(6) NOT NULL,
  `eventName` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `eventName`) VALUES
(1, 'Movie Night'),
(2, 'Augusta Developer'),
(3, 'Py Night'),
(4, 'Hackathon');

-- --------------------------------------------------------

--
-- Table structure for table `event_has_date`
--

CREATE TABLE `event_has_date` (
  `hasdate_id` int(6) NOT NULL,
  `event_id` int(6) NOT NULL,
  `date_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_has_guest`
--

CREATE TABLE `event_has_guest` (
  `hasguest_id` int(6) NOT NULL,
  `event_id` int(6) NOT NULL,
  `guest_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_has_guest`
--

INSERT INTO `event_has_guest` (`hasguest_id`, `event_id`, `guest_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 8),
(4, 1, 9),
(6, 4, 11),
(7, 3, 12),
(8, 1, 13),
(9, 2, 14),
(10, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(6) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Nestor', 'Peralta', 'bijirita009@gmail.com'),
(2, 'Selim', 'TA', 'selim@gmail.com'),
(3, 'Decoded', 'Petal', 'fractal@gmail.com'),
(4, 'Decoded', 'Petal', 'fractal@gmail.com'),
(5, 'Nestor Jr', 'Peralta', 'earth@gmail.com'),
(8, 'Decoded', 'Petal', 'earth@gmail.com'),
(9, 'Ultra', 'alloy', 'uAlloy@gmail.com')
(11, 'Peace', 'alloy', 'nperj@gmail.com')
(12, 'Decoded', 'Petal', 'r3cklessf1re@gmail.com'),
(13, 'shoe', 'alloy', 'nperj@gmail.com'),
(14, 'Ultra', 'Peralta', 'bijirita009@gmail.com'),
(15, 'Ultra', 'Petal', 'trythis@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_has_date`
--
ALTER TABLE `event_has_date`
  ADD PRIMARY KEY (`hasdate_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `date_id` (`date_id`);

--
-- Indexes for table `event_has_guest`
--
ALTER TABLE `event_has_guest`
  ADD PRIMARY KEY (`hasguest_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `date_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_has_date`
--
ALTER TABLE `event_has_date`
  MODIFY `hasdate_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_has_guest`
--
ALTER TABLE `event_has_guest`
  MODIFY `hasguest_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_has_date`
--
ALTER TABLE `event_has_date`
  ADD CONSTRAINT `event_has_date_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `event_has_date_ibfk_2` FOREIGN KEY (`date_id`) REFERENCES `date` (`date_id`);

--
-- Constraints for table `event_has_guest`
--
ALTER TABLE `event_has_guest`
  ADD CONSTRAINT `event_has_guest_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `event_has_guest_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
