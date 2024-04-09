-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 07:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users2810`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee table`
--

CREATE TABLE `employee table` (
  `Adm_Emp id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Email id` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone No` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee table`
--

INSERT INTO `employee table` (`Adm_Emp id`, `username`, `Email id`, `Password`, `Phone No`) VALUES
(1, 'Emp01', '9687265753', '$2y$10$PgXKYqZ5Ydqw601s6FzkZeaU51z5x1NcMRHqtCkP6M4SqtLLFs2XG', 'nippatel38@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile_no` text NOT NULL,
  `securtyquestion` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `emailid`, `date_of_birth`, `country`, `State`, `city`, `mobile_no`, `securtyquestion`, `answer`) VALUES
(1, 'nip patel', '$2y$10$rjJmG7C3dpsqdWs/ZrpBY.ZtRdCAdt7MRPouIdPUGdXGDLpNz.XNW', 'nippatel48@gmail.com', '2003-10-28', 'India', 'Gujarat', 'Ahmedabad', '9687265753', '', ''),
(2, 'nip1', '$2y$10$wUBBKP85nAiBChYf4uz/1unPyaa0vfIrt/okriPg94V4bvPGhfnpm', 'nip@gmail.com', '2003-10-28', 'india', 'Gujarat', 'AHMEDABAD', '7284936249', '', ''),
(3, 'Prince', '$2y$10$bT.USsofKMCBD.DvYBmUM.ADSbh4LwHfCvWynevuEdb1tRX80uTz2', 'prince4@gmail.com', '2002-05-12', 'India', 'Gujrat', 'Ahmedabad', '7046568086', '', ''),
(4, 'Priyansh', '$2y$10$rlFU3I0kehylV0nooMY7m.kHbWq1osd8zO6qTSvqAZXuQoqxjiGD.', 'priyansh23@gmail.com', '2003-08-05', 'India', 'Gujarat', 'Ahmedabad', '9725644036', '', ''),
(5, 'Ravi Patel', '$2y$10$6SUMZG0tfYsh3UQzAo1.SeMIJPYVbIukLotmF5PaQzcjIUtrCh2pm', 'ravipatel127@gmail.com', '2004-04-16', 'India', 'Gujarat', 'Ahmedabad', '7854296412', 'first_pet', 'chamu'),
(6, 'samrth', '$2y$10$dnYfTPDTl79Dfg887KXZA.OUWTjrwtQZJDC2RC3pHKGPJeBT261UK', 'smarth@gmail.com', '2003-11-03', 'India', 'Gujarat', 'Ahmedabad', '1234567890', '', ''),
(7, 'Yagnesh', '$2y$10$g.wDWQy1uVqhWK5MZDweYuGWg.s3HSKOIkPl/owYMjZLrg2voCB56', 'yagnesh3540@gmail.com', '2001-01-04', 'india', 'Gujarat', 'Ahmedabad', '9712671956', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee table`
--
ALTER TABLE `employee table`
  ADD PRIMARY KEY (`Adm_Emp id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee table`
--
ALTER TABLE `employee table`
  MODIFY `Adm_Emp id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
