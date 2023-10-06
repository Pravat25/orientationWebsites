-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 04:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orientation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `user_type`) VALUES
(1, 'sagar', 'sagar123', 'admin'),
(2, 'rajkumar', 'rajkumar', 'user'),
(3, 'test', 'test', 'user'),
(4, 'pravat', 'pravat', 'user'),
(5, 'pravat', 'pravat', 'user'),
(6, 'samir', 'samir', 'user'),
(7, 'raj', 'raj', 'admin'),
(8, 'raj', 'raj', 'user'),
(9, 'pravat1', 'pravat1', 'admin'),
(10, 'anupa', 'anupa', 'admin'),
(11, 'rajkumar2', 'rajkumar', 'admin'),
(12, 'prashat', 'prashat', 'admin'),
(13, 'reza', 'reza', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `Title` varchar(255) DEFAULT NULL,
  `studentId` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `usiNo` varchar(255) DEFAULT NULL,
  `docType` varchar(255) DEFAULT NULL,
  `docNo` varchar(255) DEFAULT NULL,
  `issueDate` date DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `issueCountry` varchar(255) DEFAULT NULL,
  `currentAddress` varchar(255) DEFAULT NULL,
  `suburb` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postCode` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `emergencyContact` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `emergencyContactNo` varchar(255) DEFAULT NULL,
  `permanentAddress` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `countryCode` varchar(255) DEFAULT NULL,
  `qualifications` varchar(255) DEFAULT NULL,
  `otherQualification` varchar(255) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `disabilityType` varchar(255) DEFAULT NULL,
  `medicalCondition` varchar(255) DEFAULT NULL,
  `employementStatus` varchar(255) DEFAULT NULL,
  `studyReasons` varchar(255) DEFAULT NULL,
  `campusLocation` varchar(255) DEFAULT NULL,
  `courseEnrolled` varchar(255) DEFAULT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `q4` varchar(255) DEFAULT NULL,
  `q5` varchar(255) DEFAULT NULL,
  `q6` varchar(255) DEFAULT NULL,
  `studentDeclaration` varchar(255) DEFAULT NULL,
  `mediaPermission` varchar(255) DEFAULT NULL,
  `orientationChecklist` varchar(255) DEFAULT NULL,
  `agentName` varchar(255) DEFAULT NULL,
  `q1_1` varchar(255) DEFAULT NULL,
  `q1_2` varchar(255) DEFAULT NULL,
  `q1_3` varchar(255) DEFAULT NULL,
  `q1_4` varchar(255) DEFAULT NULL,
  `q1_5` varchar(255) DEFAULT NULL,
  `q1_6` varchar(255) DEFAULT NULL,
  `q1_7` varchar(255) DEFAULT NULL,
  `q1_8` varchar(255) DEFAULT NULL,
  `q1_9` varchar(255) DEFAULT NULL,
  `q10` varchar(255) DEFAULT NULL,
  `agentInfo` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `form_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`Title`, `studentId`, `firstName`, `LastName`, `usiNo`, `docType`, `docNo`, `issueDate`, `expiryDate`, `issueCountry`, `currentAddress`, `suburb`, `state`, `postCode`, `email`, `mobile`, `emergencyContact`, `relationship`, `emergencyContactNo`, `permanentAddress`, `country`, `countryCode`, `qualifications`, `otherQualification`, `disability`, `disabilityType`, `medicalCondition`, `employementStatus`, `studyReasons`, `campusLocation`, `courseEnrolled`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `studentDeclaration`, `mediaPermission`, `orientationChecklist`, `agentName`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q1_5`, `q1_6`, `q1_7`, `q1_8`, `q1_9`, `q10`, `agentInfo`, `service`, `form_date`) VALUES
('mr', 0, 'Raj kumar', 'Shrestha', '3214151', '432111', '123433', '2023-10-14', '2023-10-22', 'Australia', '145 copland dr', 'belconen', 'New South Wales', '2141', 'raj@gmail.com', '043365343343', 'rajendra', 'friend', '9845662262', '143 spence der', 'Australia', '321113', 'Bachelor Degree or Higher', 'diploma of IT', 'yes', ', , ', 'cannot stand properly', 'Full-time employee', '', 'canberra', 'Bachelors In Information Technology', 'SA', 'A', 'D', 'A', 'A', 'A', 'yes', 'yes', 'yes', 'Surya thapa', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04'),
('mr', 87654, 'Raj', 'Raj', '9876', 'vbdflhsk', '8765', '0056-04-23', '0567-04-23', 'Australia', 'mdmsxsn', 'nnbgf', 'New South Wales', '4567', 'tt9yi0pwp@gmail.com', '98765654', 'Raj', 'rlhmosh;k', '98765', 'sdfgjhkkjyhd', 'Australia', '98765', 'Certificate III', '98765', 'yes', ', , Intellectual', '98765', 'Part-time employee', ', To start my own business, To get a better job or promotion', 'canberra', 'kuytfdr', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'yes', 'yes', 'yes', 'kjhgf', 'TS', 'S', 'D', '', 'TD', 'NA', 'TD', 'D', 'S', 'TS', 'jhgfe', 'mhgf', '2023-10-03'),
('mr', 798594, 'raj ', 'shresth', '6970508', 'vaccination ', '896949339', '6555-05-05', '4444-03-31', 'Australia', 'canberra', 'belconnoc', 'New South Wales', '5969', 'tt9yi0pwp@gmail.com', '8998765432', 'kjhgfds', 'kjhgfd', '98765', 'kjhgfdsafrehjsrah', 'Australia', '9876', 'Bachelor Degree or Higher', 'jhfdjsafha', 'yes', ', , ', 'tfdstREHT', 'Employer', '', 'canberra', 'TRJSDHR', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'yes', 'yes', 'no', 'LKJHGFFAERHSJD', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04'),
('mr', 876543, 'gdhh', 'ytr', '8765', 'dhdns', 'uytr', '0567-04-23', '0056-04-23', 'Australia', 'fdgfh', 'dfg', 'New South Wales', '876', 'tt9yi0pwp@gmail.com', '9876543', 'fhd', 'xdfgfhg', '9876', 'nhgfgdf', 'Nepal', '98', 'Diploma /Associate Diploma', 'g', 'no', ', , ', 'xfb', 'Full-time employee', ', To start my own business, To get a better job or promotion', 'canberra', 'IT', 'SA', 'A', 'D', 'A', 'SA', 'SA', 'yes', 'yes', 'yes', 'thksk', 'TS', 'S', '', '', '', '', '', '', '', '', 'dfhd', 'uu', '2023-10-04'),
('gdfgfd', 4353454, 'etretret', 'tretretr', '4354354', 'tertertr', 'ertertret', '2023-10-04', '2023-10-05', 'Australia', 'rtertretr', 'ertretr', 'New South Wales', '435435', 'saagar.neupane123@gmail.com', '443453454', 'tretret', 'ertertr', '3454354', 'fdggfg', 'Australia', '3454', 'Bachelor Degree or Higher', 'fgdfgfd', 'no', ', , ', 'ertrt', 'Full-time employee', 'To get a job', 'australia', 'etretr', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'declaration', 'permission', 'on', 'tyrtyrty', '', '', '', '', '', '', '', '', '', 'S', 'retrt', 'dgdfgfdg', '2023-10-01'),
('mrs', 5345345, 'kljljlkj', 'dfgdfgfd', '9808098098', 'dgdfgf', '6576576', '2023-08-28', '2023-11-03', 'Nepal', '3/29 Totterdell street', 'Belconnen', 'Australian Capital Territory', '2617', 'saagar.neupane123@gmail.com', '897987897', 'tretret', 'Brother', '0433825258', 'daldale', 'Nepal', '00977', ', Diploma /Associate Diploma, Certificate III', 'n/a', 'yes', 'Hearing/Deaf, Physical, Intellectual', 'n/a', 'Full-time employee', 'To get a job', 'australia', 'IT', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'yes', 'yes', 'on', 'Rajkumar Shrestha', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'yes', 'yes', '2023-10-02'),
('mrs', 11111111, 'kljljlkj', 'dfgdfgfd', '9808098098', 'dgdfgf', '6576576', '2023-08-28', '2023-11-03', 'Nepal', '3/29 Totterdell street', 'Belconnen', 'Australian Capital Territory', '2617', 'saagar.neupane123@gmail.com', '897987897', 'tretret', 'Brother', '0433825258', 'daldale', 'Nepal', '00977', ', Diploma /Associate Diploma, Certificate III', 'n/a', 'yes', 'Hearing/Deaf, Physical, Intellectual', 'n/a', 'Full-time employee', 'To get a job', 'australia', 'IT', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'yes', 'yes', 'on', 'Rajkumar Shrestha', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'TS', 'yes', 'yes', '2023-10-02'),
('mr', 55678974, 'raj ', 'shreatha', '09876', '98765', '876543', '0000-00-00', '0000-00-00', 'Australia', 'wer', 'adsfdgnh', 'New South Wales', '87654', 'tt9yi0pwp@gmail.com', '98765', 'fsghxd', 'rgxc', '76543', 'nffsnx', 'Australia', '3467', 'Diploma /Associate Diploma', '876544', 'yes', ', Physical, ', '', 'Part-time employee', ', To try for a different career, It was a requirement of my job', 'canberra', 'hgf', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'yes', 'yes', 'yes', 'uytr', 'TS', 'S', 'D', 'TD', 'NA', 'TD', 'D', 'S', 'TS', 'TS', 'hgf', 'jhg', '2023-10-04'),
('mr', 56600770, 'raj ', 'shresth', '6970503', 'vaccination ', '896949339', '6555-05-05', '4444-03-31', 'Australia', 'canberra', 'belconnoc', 'New South Wales', '5969', 'tt9yi0pwp@gmail.com', '8998765432', 'kjhgfds', 'kjhgfd', '98765', 'kjhgfdsafrehjsrah', 'Australia', '9876', 'Bachelor Degree or Higher', 'jhfdjsafha', 'yes', 'Hearing/Deaf, Physical, ', 'tfdstREHT', 'Employer', 'To get a job, To start my own business', 'australia', 'TRJSDHR', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'yes', 'yes', 'on', 'LKJHGFFAERHSJD', 'TS', 'S', 'D', 'TD', 'TD', 'TD', 'D', 'S', 'TS', 'TS', 'KUYHTREJ', 'DYJHSR', '2023-10-02'),
('Mr', 97987987, 'Sagar', 'Neupane', '345454', 'passport', '54654656', '2022-01-01', '2027-01-01', 'USA', '3/29 Totterdell street', 'Belconnen', 'Australian Capital Territory', '2617', 'raj@gmail.com', '98789789787', 'Sundeep Neupane', 'Brother', '9798789', 'devchuli -13 ', 'USA', '00977', 'Bachelor Degree or Higher, Certificate III', '', 'yes', 'Hearing/Deaf, , ', 'n/a', 'Full-time employee', 'To get a job, To get a better job or promotion, I wanted extra skills for my job', 'australia', 'IT', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'declaration', 'permission', 'on', 'Rajkumar Shrestha', '', '', '', '', '', '', '', '', '', 'S', 'No, he was very helpful', 'Yes, Thank You.', '2023-10-01'),
('dfgdf', 987897897, 'dafdf', 'sdfsdfsdf', '4345345', 'dfgdfgfg', 'tertertert', '2023-09-25', '2023-10-27', 'Nepal', '3/29 Totterdell street', 'Belconnen', 'Australian Capital Territory', '2617', 'raj@gmail.com', '353453454', 'tretret', 'ertertr', '0433825258', '3/29 Totterdell street', 'Nepal', '3534534', ', None', 'n/a', 'no', ', , ', 'n/a', 'Unemployed -seeking part-time work', ', For personal interest / self-development', 'australia', 'IT', 'A', 'A', 'A', 'A', 'A', 'A', 'on', 'on', 'on', 'tyrtyrty', '', '', '', '', '', '', '', '', '', 'TD', 'yes', 'yes', '2023-10-02'),
('mr', 2147483647, 'raj ', 'shresth', '6970503', 'vaccination ', '896949339', '6555-05-05', '4444-03-31', 'Australia', 'canberra', 'belconnoc', 'New South Wales', '5969', 'tt9yi0pwp@gmail.com', '8998765432', 'kjhgfds', 'kjhgfd', '98765', 'kjhgfdsafrehjsrah', 'Australia', '9876', 'Bachelor Degree or Higher', 'jhfdjsafha', 'yes', 'Hearing/Deaf, Physical, ', 'tfdstREHT', 'Employer', 'To get a job, To start my own business', 'australia', 'TRJSDHR', 'SA', 'A', 'D', 'SD', 'NA', 'SD', 'yes', 'yes', 'on', 'LKJHGFFAERHSJD', 'TS', 'S', 'D', 'TD', 'TD', 'TD', 'D', 'S', 'TS', 'TS', 'KUYHTREJ', 'DYJHSR', '2023-10-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
