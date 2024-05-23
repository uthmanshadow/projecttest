-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npapts`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--
DROP TABLE IF EXISTS `project_details`;

CREATE TABLE `project_details` (
  `ptbReference` varchar(50) NOT NULL,
  `ptbdate` varchar(64) NOT NULL,
  `projName` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `projAwardDate` varchar(64) NOT NULL,
  `awardExecutionPeriod` varchar(64) NOT NULL,
  `projectSupervisor` varchar(100) NOT NULL,
  `projEndDate` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `project_progress`
--

DROP TABLE IF EXISTS `project_progress`;


CREATE TABLE `project_progress` (
  `projName` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `period_from` time NOT NULL,
  `period_to` time NOT NULL,
  `tasks_accomplished` varchar(500) NOT NULL,
  `pending_tasks` varchar(200) NOT NULL,
  `constraints` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_progress`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`projName`);

--
-- Indexes for table `project_progress`
--
ALTER TABLE `project_progress`
  ADD PRIMARY KEY (`projName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
