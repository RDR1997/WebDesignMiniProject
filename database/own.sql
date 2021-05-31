-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ausername` varchar(150) NOT NULL,
  `apassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `name`, `ausername`, `apassword`) VALUES
(3, 'suthan', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doctor_ID` int(5) NOT NULL,
  `patient_ID` int(5) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_ID`, `date`, `time`, `doctor_ID`, `patient_ID`, `description`) VALUES
(10, '2021-05-28', '20:17:00', 3, 1, 'kkkkkkkkkkkk'),
(11, '2021-05-20', '20:37:00', 11, 18, 'llllllllllllllll');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_ID` int(11) NOT NULL,
  `d_first_name` varchar(100) DEFAULT NULL,
  `d_last_name` varchar(50) DEFAULT NULL,
  `NIC` varchar(12) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `speciality` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact_no` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_ID`, `d_first_name`, `d_last_name`, `NIC`, `gender`, `address`, `speciality`, `category`, `username`, `password`, `contact_no`, `Email`) VALUES
(3, ';lkhjghjghcf', 'klghgc', 'd9854', 'female', NULL, '', NULL, '', NULL, '', ''),
(6, 'Benadict', 'suthan', '95654', 'male', 'No.445, Valluvarpuram, Visuvamadu.', 'sdsad', '', 'admin1', '123456', '0771942636', 'amalathassuthans@gmail.com'),
(10, 'qqqqq', 'wwwwwww', '66666666', 'female', 'jjhjhjhjhjh', '6666666666', 'Obstetrician', 'rdr', '22', '0704566278', 'amalathassuthan@ieee.org'),
(11, 'sssss', 'rrrrrrrrrrrrr', '95654', 'male', 'hhhhhhhhhh', 'jjjjjjjjj', 'uuuuuuuu', '444444', '55555', '0771942636', 'amalathassuthans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact_no` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_ID`, `first_name`, `last_name`, `gender`, `DOB`, `address`, `description`, `blood_group`, `username`, `password`, `contact_no`, `Email`) VALUES
(1, 'Benadict', 'suthan', 'male', '2021-05-13', 'No.445, Valluvarpuram, Visuvamadu.', 'vvvvvvv', 'A+', 'admin', '123', '0771942636', 'amalathassuthans@gmail.com'),
(13, 'Benadic', 'sutha', 'mal', '2021-05-24', 'No.445, Valluvarpuram, ', 'vvvvvv', 'A+', 'llllll', '12345', '0771942639', 'amalathassuthans@gmail.co'),
(15, 'Suthan', 'Amalathas', 'male', '2021-05-03', 'No.445, Valluvarpuram, Visuvamadu.', 'qqqqqqqqqqq', 'AB-', 's007', '9999', '0704566278', 'amalathassuthan@ieee.org'),
(18, 'llllll', 'kkkkkkk', 'female', '2021-06-05', '55555', '99999999999', 'AB-', 'mm01', '999', '0704566278', 'amalathassuthan@ieee.org'),
(19, 'Suthan', 'Amalathas', '', '2021-05-11', 'No.445, Valluvarpuram, Visuvamadu.', 'vvvvvvv', 'A+', 'jjjjj', '0000', '0704566278', 'amalathassuthan@ieee.org'),
(20, 'Suthan', 'Amalathas', 'female', '2021-05-20', 'No.445, Valluvarpuram, Visuvamadu.', '222222222', 'A+', 'mm02', 'mm02', '0704566278', 'amalathassuthan@ieee.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`),
  ADD UNIQUE KEY `ausername` (`ausername`),
  ADD UNIQUE KEY `apassword` (`apassword`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_ID`),
  ADD KEY `appointment_ibfk_2` (`doctor_ID`),
  ADD KEY `appointment_ibfk_1` (`patient_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
