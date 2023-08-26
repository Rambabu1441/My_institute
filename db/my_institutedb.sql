-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 04:36 PM
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
-- Database: `my_institutedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `field` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `uname` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cpass` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`name`, `no`, `field`, `uname`, `pass`, `cpass`) VALUES
('kullu', '154875412', 'grafic', 'kullu', '1234', '1234'),
('ram', '1245784512', 'java', 'ram', 'ram', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup2`
--

CREATE TABLE `admin_signup2` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `field` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `uname` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cpass` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `fname` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fathername` varchar(20) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `mothername` varchar(20) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nationality` varchar(20) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `state` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `qualification` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `course` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `photo` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `no` varchar(10) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `uname` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(10) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `cpass` varchar(10) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`name`, `no`, `uname`, `pass`, `cpass`) VALUES
('KULDEEP VISHWAKARMA', '7233053142', 'Kuldeep', 'kuldeep', 'kuldeep'),
('Lavlesh kumar', '6958462992', 'Kuldeep', '1234', '1234'),
('ragini vishwakaram', '5414145', 'ThePhenom', '1212', '1212'),
('rambabu', '7233053142', 'ram', 'ram', 'ram'),
('sneha gupta', '1254879856', 'sneha', 'sneha', 'sneha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `admin_signup2`
--
ALTER TABLE `admin_signup2`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
