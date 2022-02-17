-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 08:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vista`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, '12345', '12345'),
(2, 'satyendra', 'satyendra'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `NAME` varchar(50) DEFAULT NULL,
  `FATHERNAME` varchar(50) DEFAULT NULL,
  `MOTHERNAME` varchar(50) DEFAULT NULL,
  `DATEOFBIRTH` date DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `MOBILE` bigint(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `NATIONALITY` varchar(50) DEFAULT NULL,
  `COURSE` varchar(50) DEFAULT NULL,
  `QUALIFICATION` varchar(50) DEFAULT NULL,
  `ID` bigint(20) UNSIGNED NOT NULL,
  `DEGREE` varchar(50) DEFAULT NULL,
  `TIME` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`DATE`, `NAME`, `FATHERNAME`, `MOTHERNAME`, `DATEOFBIRTH`, `GENDER`, `MOBILE`, `ADDRESS`, `CITY`, `STATE`, `NATIONALITY`, `COURSE`, `QUALIFICATION`, `ID`, `DEGREE`, `TIME`) VALUES
('2021-12-08', 'Rohit Kumar Singh', 'SHYAM NARAYAN VERMA ', 'jvjvjmnm', '2021-12-23', 'Male', 7408076562, 'VILL GHAMAHAPUR POST GANGAPUR DIST VARANASI UTTAR PRADESH PIN CODE 221302', 'VARANASI', 'Uttar Pradesh', 'india', 'ADCAP', 'Intermediate', 13, NULL, '07:00 AM t');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `NAME` varchar(50) DEFAULT NULL,
  `FATHERNAME` varchar(50) DEFAULT NULL,
  `MOTHERNAME` varchar(50) DEFAULT NULL,
  `MOBILE` bigint(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `COURSE` varchar(50) DEFAULT NULL,
  `DATEOFBIRTH` date DEFAULT NULL,
  `SNO` bigint(20) UNSIGNED NOT NULL,
  `DEGREE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`DATE`, `NAME`, `FATHERNAME`, `MOTHERNAME`, `MOBILE`, `ADDRESS`, `COURSE`, `DATEOFBIRTH`, `SNO`, `DEGREE`) VALUES
('2021-06-01', 'Suraj Kumar Patel', 'Ram Kumar Patel', 'Shushila Devi', 8112463607, 'Chandpur Varanasi', 'MCA', '1999-05-06', 13, 'UG'),
('2021-06-01', 'MOHIT KUMAR SINGH', 'SHYAM NARAYAN VERMA', 'RAMAWATI DEVI', 8004568424, 'VILL GHAMAHAPUR POST GANGAPUR DIST VARANASI', 'BE/B.Tech', '2004-04-04', 14, 'UG'),
('2021-10-18', 'Kamlesh ', 'hgghhh', 'jvjvjmnm', 33333133313, 'skcnds,vnmd,nc', 'DCA', '2021-10-23', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `MESSAGE` varchar(50) DEFAULT NULL,
  `ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`DATE`, `NAME`, `EMAIL`, `MESSAGE`, `ID`) VALUES
('2021-05-06', 'ROHIT', 'csm20054@tezu.ac.in', 'hello', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `SNO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
