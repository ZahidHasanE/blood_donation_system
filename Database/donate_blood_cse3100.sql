-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 04:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_blood_cse3100`
--

-- --------------------------------------------------------

--
-- Table structure for table `advise`
--

CREATE TABLE `advise` (
  `username` varchar(20) NOT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advise`
--

INSERT INTO `advise` (`username`, `comment`) VALUES
('zahid', '		Very needful for our society\r\n					\r\n						');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `full_name` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `date_of_last_donation` varchar(50) DEFAULT NULL,
  `present_address` varchar(50) DEFAULT NULL,
  `parmanent_address` varchar(50) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `any_disease` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`full_name`, `username`, `email`, `gender`, `blood_group`, `date_of_last_donation`, `present_address`, `parmanent_address`, `contact_no`, `weight`, `any_disease`, `password`, `date_of_birth`) VALUES
('Arnob', 'arnob', 'arnob@gmail.com', 'Male', 'B+', '2021-11-23', 'Dhaka', 'Bogura', '01717562323', '56.00', 'No', 'b42c18398af61ac00c47790352e7b399', '1997-01-15'),
('Md Jamil', 'jamil', 'jamil@gmail.com', 'Male', 'B+', '2022-03-19', 'Bogura', 'Bogura', '01719162020', '51.00', 'No', 'd7e944847dd9ddf7bc1648703c4348c1', '1984-09-14'),
('Komol', 'komol', 'komol@gmail.com', 'Male', 'B+', '0', 'Dhaka', 'Bogura', '01749677738', '66.00', 'No', '3473db8ac51398ed912681dd9c7c141c', '1997-12-28'),
('Nafiz Ahmed', 'nafiz', 'nafiz@gmail.com', 'Male', '0', '0', 'Rajshahi', 'Rajshahi', '01756648945', '65.00', 'No', '46813b234da735434ab3ad0fbe306048', '1982-05-11'),
('Roki Chandra', 'roki', 'roki@gmail.com', 'Male', 'AB+', '2022-03-18', 'Joypurhat', 'Joypurhat', '01710409405', '55.00', 'No', '905717e241bf4b1cccc14cfe5abd97cf', '2000-02-17'),
('Sobug', 'sobug', 'sobug@gmail.com', 'Male', 'AB-', '0', 'Rajshahi', 'Rangpur', '01722565455', '53.00', 'No', '4ee95da6ac88d0ba20ef279bdb87f923', '1993-10-13'),
('Sukanta Roy', 'sukanto', 'sukanta@gmail.com', 'Male', 'B+', '0', 'Joypurhat', 'Joypurhat', '01785237057', '60.00', 'No', 'aa053ae141ac0eaa0557efb61da9c961', '1980-04-12'),
('Md Zahid Hasan', 'zahid', 'zahid@gmail.com', 'Male', 'B+', '2021-12-31', 'Rajshahi', 'Joypurhat', '01735460996', '58.00', 'No', 'e053adc433342045de0ed2aabd95fefe', '1982-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `erase_donar`
--

CREATE TABLE `erase_donar` (
  `username` varchar(20) NOT NULL,
  `reason` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erase_donar`
--

INSERT INTO `erase_donar` (`username`, `reason`) VALUES
('nafiz', 'I am Weak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advise`
--
ALTER TABLE `advise`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `erase_donar`
--
ALTER TABLE `erase_donar`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
