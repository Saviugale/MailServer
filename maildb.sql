-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maildb`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `draftid` bigint(20) NOT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `send_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`draftid`, `emailid`, `subject`, `msg`, `send_date`) VALUES
(1, 'ajitmore.1977@gmail.com', 'Resume', 'Completed B.E Computers in 1998 from Pune university.', '2020-12-28 22:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `mailid` bigint(20) NOT NULL,
  `to_id` varchar(50) DEFAULT NULL,
  `from_id` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `send_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` text NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `img_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`emailid`, `password`, `full_name`, `gender`, `mobile`, `dob`, `img_path`) VALUES
('ajitmore.1977@gmail.com', 'ajm', 'Avani Ajit more', 'm', '9823374979', '1976-12-19', 'IMG-20180718-WA0169.jpg'),
('ajitmore1977@gmail.com', 'ajm77', 'Ajit Jairam More', 'm', '9823374979', '1976-05-17', 'DSC_0799.JPG'),
('nishamore@gmail.com', 'nisha', 'Nisha More', 'f', '9823374979', '1918-11-20', '14095772_1379169548778471_3091595301165517019_n.jpg'),
('parag21kulkarni@gmail.com', 'parag12', 'Parag Narayan kulkarni', 'm', '7276743428', '1911-09-16', '10_Dagdusheth_Halwai_Ganpati_Ganesha_Deity_India.jpg'),
('piyushakul06@gmail.com', 'piyu1234', 'Piyusha Narayan Kulkarni', 'f', '7263960623', '1916-07-15', '10_Dagdusheth_Halwai_Ganpati_Ganesha_Deity_India.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE `usermail` (
  `mailid` bigint(20) NOT NULL,
  `to_id` varchar(50) DEFAULT NULL,
  `from_id` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `send_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mailid`, `to_id`, `from_id`, `subject`, `msg`, `send_date`) VALUES
(1, 'swati.1977@gmail.com', 'swati.1977@gmail.com', 'Remainder', 'Don\'t forget me this weekend.', '2020-12-27 22:23:18'),
(2, 'savi.1977@gmail.com', 'savi.1977@gmail.com', 'Resume', 'Completed B.E Computers with distinction.', '2020-12-28 20:43:41'),
(3, 'parag21kulkarni@gmail.com', 'parag21kulkarni@gmail.com', 'eer--msg failed', 'hiiii', '2020-12-29 11:29:43'),
(4, 'parag21kulkarni@gmail.com', 'piyushakul06@gmail.com', 'hi', 'hii', '2020-12-29 14:11:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`draftid`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`mailid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `usermail`
--
ALTER TABLE `usermail`
  ADD PRIMARY KEY (`mailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `draftid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trash`
--
ALTER TABLE `trash`
  MODIFY `mailid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usermail`
--
ALTER TABLE `usermail`
  MODIFY `mailid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

