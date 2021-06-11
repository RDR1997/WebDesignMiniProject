-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
(3, 'suthan', 'admin', '123');

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
(10, '2021-06-10', '14:27:00', 10, 1, 'qwerty'),
(11, '2021-05-06', '13:55:00', 6, 1, 'xyz123');

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
(6, 'xyz', 'a', '555555555V', 'male', '35', 'Dermatology', 'dermatology', 'admin1', '123', '0714444444', 'dsk@gmail.com'),
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
(1, 'Benadict', 'suthan', 'male', '2021-05-13', 'No.445, Valluvarpuram, Visuvamadu.', 'vvvvvvv', 'A+', 'admin', '1234', '0771942636', 'amalathassuthans@gmail.com'),
(15, 'Suthan', 'Amalathas', 'male', '2021-05-03', 'No.445, Valluvarpuram, Visuvamadu.', 'qqqqqqqqqqq', 'AB-', 's007', '9999', '0704566278', 'amalathassuthan@ieee.org'),
(18, 'llllll', 'kkkkkkk', 'female', '2021-06-05', '55555', '99999999999', 'AB-', 'mm01', '999', '0704566278', 'amalathassuthan@ieee.org'),
(19, 'Suthan', 'Amalathas', '', '2021-05-11', 'No.445, Valluvarpuram, Visuvamadu.', 'vvvvvvv', 'A+', 'jjjjj', '0000', '0704566278', 'amalathassuthan@ieee.org'),
(20, 'Suthan', 'Amalathas', 'female', '2021-05-20', 'No.445, Valluvarpuram, Visuvamadu.', '222222222', 'A+', 'mm02', 'mm02', '0704566278', 'amalathassuthan@ieee.org'),
(21, 'DS', 'K', 'female', '1998-01-31', 'Matale', 'xyz', 'O+', 'dsk', '1234', '071 5555555', 'dinithikw@gmail.com'),
(23, 'Dinithi', 'Kapuwatte', 'female', '1998-01-31', '35/1, Kotuwegedara, Matale', 'xyz', 'A+', 'dsk123', 'xyz', '0712175512', 'dsk@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history`
--

CREATE TABLE `treatment_history` (
  `patient_ID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `treatment` varchar(500) NOT NULL,
  `doctor_notes` varchar(1000) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `doctor_ID` int(10) NOT NULL,
  `d_first_name` varchar(100) NOT NULL,
  `d_last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_history`
--

INSERT INTO `treatment_history` (`patient_ID`, `username`, `treatment`, `doctor_notes`, `date_time`, `doctor_ID`, `d_first_name`, `d_last_name`) VALUES
(1, 'admin', 'abc treatment', 'X-ray taken. weekly checkup recommended', '2021-06-02 04:30:00.000000', 1, 'abc', 'dsk'),
(0, '', '', '', '0000-00-00 00:00:00.000000', 0, '', ''),
(1, '', 'X-ray taken', 'weekly checkup recommended', '0000-00-00 00:00:00.000000', 6, '', ''),
(15, '', 'immunotherapy', '', '0000-00-00 00:00:00.000000', 10, '', ''),
(1, '', 'X-ray taken', '', '2021-06-11 12:12:35.658816', 10, '', ''),
(1, '6', 'vitamin C', 'xyz', '2021-06-11 12:33:35.212890', 6, '', ''),
(1, '6', 'X-ray taken', 'weekly check up recommended', '2021-06-11 12:44:19.519284', 6, 'xyz', 'xyz'),
(1, '6', 'Immunotherapy ', 'qwerty', '2021-06-11 12:49:58.749122', 6, 'xyz', 'xyz'),
(1, '6', 'Immunotherapy ', 'qwerty', '2021-06-11 12:52:04.655317', 6, 'xyz', 'xyz'),
(1, '6', 'immunotherapy', 'weekly check up recommended', '2021-06-11 12:53:28.473739', 6, 'xyz', 'a'),
(15, '6', 'immunotherapy', '', '2021-06-11 12:54:53.367496', 6, 'xyz', 'a');

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
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_ID`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `appointment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
