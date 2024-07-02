-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 03:42 PM
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
-- Database: `alfhaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `alfhainfo`
--

CREATE TABLE `alfhainfo` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `birth_date` date NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alfhainfo`
--

INSERT INTO `alfhainfo` (`id`, `reg_num`, `password`, `first_name`, `last_name`, `sex`, `birth_date`, `program`) VALUES
(42, 'bedict2920', '2002', 'Arthur', 'Tembo', '', '2002-02-13', 'EDU-ICT'),
(43, 'bedict4020', '200234', 'Yohane', 'Tembo', '', '2000-02-02', 'BICT'),
(45, 'btrs2020', '200234', 'Kenwood', 'Mwase', '', '2003-02-19', 'Theology'),
(46, 'bret1320', '2009', 'Lucky                                             ', 'Qombo', '', '2002-09-25', 'Energy'),
(47, 'bedict2020', '15110', 'enock', 'soza', '', '2022-08-16', 'Edu-ICT'),
(48, 'bedict1420', '2002', 'Sylvester', 'Tembo', '', '2022-08-13', 'BICT'),
(49, 'bedict4000', '20002', 'Morty', 'Willz', '', '2022-08-13', 'MUSICOLOGY'),
(50, 'bedict2930', '2002', 'Herlyis', 'Machimo', '', '2001-02-13', 'BICT'),
(51, 'bedict4009', '4009', 'Marty', 'Kachombo', '', '2022-08-14', 'MUSICOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `business_management`
--

CREATE TABLE `business_management` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_management`
--

INSERT INTO `business_management` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(8, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(9, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(11, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(12, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(13, 'bedict1420', 'Sylvester', 'Tembo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `comm_skills`
--

CREATE TABLE `comm_skills` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comm_skills`
--

INSERT INTO `comm_skills` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(10, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(11, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(12, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(13, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(14, 'bedict1420', 'Sylvester', 'Tembo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `customer_handling`
--

CREATE TABLE `customer_handling` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_handling`
--

INSERT INTO `customer_handling` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(8, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(9, 'bedict4020', 'Yohane', 'Tembo', 'BICT'),
(10, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(11, 'btrs2020', 'Kenwood', 'Mwase', 'Theology'),
(12, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(13, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(14, 'bedict1420', 'Sylvester', 'Tembo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `intro_aa`
--

CREATE TABLE `intro_aa` (
  `id` int(255) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intro_aa`
--

INSERT INTO `intro_aa` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(10, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(11, 'bedict4020', 'Yohane', 'Tembo', 'BICT'),
(12, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(13, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(14, 'bedict2020', 'enock', 'soza', 'Edu-ICT'),
(15, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(16, 'bedict1420', 'Sylvester', 'Tembo', 'BICT'),
(17, 'bedict2930', 'Herlyis', 'Machimo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `intro_fl`
--

CREATE TABLE `intro_fl` (
  `id` int(255) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intro_fl`
--

INSERT INTO `intro_fl` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(12, 'bedict4020', 'Yohane', 'Tembo', 'BICT'),
(13, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(14, 'btrs2020', 'Kenwood', 'Mwase', 'Theology'),
(15, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(16, 'bedict2020', 'enock', 'soza', 'Edu-ICT'),
(17, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(18, 'bedict1420', 'Sylvester', 'Tembo', 'BICT'),
(19, 'bedict2930', 'Herlyis', 'Machimo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `musical_instru_org`
--

CREATE TABLE `musical_instru_org` (
  `id` int(255) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musical_instru_org`
--

INSERT INTO `musical_instru_org` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(29, 'bedict4020', 'Yohane', 'Tembo', 'BICT'),
(30, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(31, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(32, 'btrs2020', 'Kenwood', 'Mwase', 'Theology'),
(33, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(34, 'bedict2020', 'enock', 'soza', 'Edu-ICT'),
(35, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(36, 'bedict1420', 'Sylvester', 'Tembo', 'BICT'),
(37, 'bedict2930', 'Herlyis', 'Machimo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `pc_maintenance`
--

CREATE TABLE `pc_maintenance` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc_maintenance`
--

INSERT INTO `pc_maintenance` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(9, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(10, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(11, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(12, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(13, 'bedict1420', 'Sylvester', 'Tembo', 'BICT');

-- --------------------------------------------------------

--
-- Table structure for table `vocal_melodies`
--

CREATE TABLE `vocal_melodies` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vocal_melodies`
--

INSERT INTO `vocal_melodies` (`id`, `reg_num`, `first_name`, `last_name`, `program`) VALUES
(9, 'bedict2920', 'Arthur', 'Temb', 'EDU-ICT'),
(10, 'bict2919', 'Emmanuel', 'Sogolera', 'EDU-ICT'),
(11, 'bret1320', 'Lucky                                             ', 'Qombo', 'Energy'),
(12, 'bedict4000', 'Morty', 'Willz', 'MUSICOLOGY'),
(13, 'bedict1420', 'Sylvester', 'Tembo', 'BICT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alfhainfo`
--
ALTER TABLE `alfhainfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `business_management`
--
ALTER TABLE `business_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `comm_skills`
--
ALTER TABLE `comm_skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `customer_handling`
--
ALTER TABLE `customer_handling`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `intro_aa`
--
ALTER TABLE `intro_aa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `intro_fl`
--
ALTER TABLE `intro_fl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `musical_instru_org`
--
ALTER TABLE `musical_instru_org`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `pc_maintenance`
--
ALTER TABLE `pc_maintenance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- Indexes for table `vocal_melodies`
--
ALTER TABLE `vocal_melodies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alfhainfo`
--
ALTER TABLE `alfhainfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `business_management`
--
ALTER TABLE `business_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comm_skills`
--
ALTER TABLE `comm_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_handling`
--
ALTER TABLE `customer_handling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `intro_aa`
--
ALTER TABLE `intro_aa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `intro_fl`
--
ALTER TABLE `intro_fl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `musical_instru_org`
--
ALTER TABLE `musical_instru_org`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pc_maintenance`
--
ALTER TABLE `pc_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vocal_melodies`
--
ALTER TABLE `vocal_melodies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
