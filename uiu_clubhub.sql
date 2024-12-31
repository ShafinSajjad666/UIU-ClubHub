-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 05:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_clubhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_name` varchar(30) DEFAULT NULL,
  `a_id` int(11) NOT NULL,
  `a_designation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_name`, `a_id`, `a_designation`) VALUES
('Sadia Islam', 201001, 'Head of CCC'),
('Akib Zaman', 201002, 'Finance'),
('Adiba Shaira', 2012003, 'Head of Events');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `name` varchar(30) DEFAULT NULL,
  `club_id` int(11) NOT NULL,
  `club_email` varchar(30) DEFAULT NULL,
  `president` varchar(30) DEFAULT NULL,
  `pres_id` int(11) DEFAULT NULL,
  `mentor` varchar(30) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`name`, `club_id`, `club_email`, `president`, `pres_id`, `mentor`, `mentor_id`) VALUES
('Computer Club', 1001, 'ccl@gmail.com', 'Mubin', 11201259, 'Fahim', 101001),
('Robotics Club', 1002, 'robo@gmail.com', 'Sajjad', 11201250, 'Fariha', 101003),
('Cultural Club', 1003, 'cul@gmail.com', 'Rayhan', 11201455, 'Shoaib', 101002);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_name` varchar(30) DEFAULT NULL,
  `f_id` int(11) NOT NULL,
  `f_email` varchar(30) DEFAULT NULL,
  `f_department` varchar(30) DEFAULT NULL,
  `f_bloodGroup` varchar(10) DEFAULT NULL,
  `f_contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_name`, `f_id`, `f_email`, `f_department`, `f_bloodGroup`, `f_contact`) VALUES
('Fahim Hafiz', 101001, 'fahim@gmail.com', 'CSE', 'b+', '123456789'),
('Shoaib', 101002, 'shoaib@gmail.com', 'EEE', 'o+', '321456987'),
('Fariha Tabassum', 101003, 'fariha@gmail.com', 'ECO', 'a+', '987456321');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_name` varchar(30) DEFAULT NULL,
  `m_id` int(11) NOT NULL,
  `m_clubID` int(11) DEFAULT NULL,
  `m_email` varchar(30) DEFAULT NULL,
  `m_contact` varchar(15) DEFAULT NULL,
  `m_bloodGroup` varchar(20) DEFAULT NULL,
  `m_skills` varchar(30) DEFAULT NULL,
  `m_payment` varchar(10) DEFAULT NULL,
  `m_department` varchar(10) DEFAULT NULL,
  `current_trimester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_name`, `m_id`, `m_clubID`, `m_email`, `m_contact`, `m_bloodGroup`, `m_skills`, `m_payment`, `m_department`, `current_trimester`) VALUES
('Shazid Hossain', 501, 1001, 'shazid@gmail.com', '125896314', 'ab-', 'Singing', 'Clear', NULL, NULL),
('Abu Bakar', 502, 1003, 'bakar@gmail.com', '7458963214', 'ab+', 'Reciting', 'Due', NULL, NULL),
('Rajeet Chowdhury', 503, 1002, 'rajeet@gmail.com', '458967123', 'b-', 'Dance', 'Clear', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_name` varchar(30) DEFAULT NULL,
  `s_id` int(11) NOT NULL,
  `s_email` varchar(30) DEFAULT NULL,
  `s_department` varchar(30) DEFAULT NULL,
  `s_bloodGroup` varchar(10) DEFAULT NULL,
  `s_contact` varchar(15) DEFAULT NULL,
  `s_skills` varchar(50) DEFAULT NULL,
  `s_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_name`, `s_id`, `s_email`, `s_department`, `s_bloodGroup`, `s_contact`, `s_skills`, `s_pass`) VALUES
('Sajjad Ullah', 11201250, 'sullah@gmail.com', 'EEE', 'O +(ve)', '01521763309', 'Football, Web programming', '201250'),
('Mehefujur R Mubin', 11201259, 'mehefujurrmubin@gmail.com', 'CSE', 'B +(ve)', '01521763308', 'Cricket, C Programming, Java, DBMS', '201259'),
('Nazmus Rayhan', 11201455, 'rayhan@hoyran.com', 'ECO', 'AB+', '01521763310', 'Stand up comedy, Graphics design', '201455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`),
  ADD KEY `pres_id` (`pres_id`),
  ADD KEY `mentor_id` (`mentor_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`pres_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `club_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `faculty` (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
