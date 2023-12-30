-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 08:03 AM
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
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jprovider`
--

CREATE TABLE `jprovider` (
  `sno` int(11) NOT NULL,
  `imageA` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jprovider`
--

INSERT INTO `jprovider` (`sno`, `imageA`) VALUES
(6, 'img/64b6d3ffc5b0aLondon-Resume-Template-Professional.pdf'),
(7, 'img/64b6d4072cd97Sydney-Resume-Template-Modern.pdf'),
(8, 'img/64b6d40de2347Vienna-Modern-Resume-Template.pdf'),
(9, 'img/64b6d4151c3b4New-York-Resume-Template-Creative.pdf'),
(10, 'img/64b6d41b99700Stockholm-Resume-Template-Simple.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jseeker`
--

CREATE TABLE `jseeker` (
  `sno` int(11) NOT NULL,
  `imageA` varchar(500) NOT NULL,
  `Ftype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jseeker`
--

INSERT INTO `jseeker` (`sno`, `imageA`, `Ftype`) VALUES
(7, 'img/64b6d28228b41Rio-Creative-Resume-Template.pdf', 'Resume'),
(8, 'img/64b6d2a91a685Geneva-Resume-Template-Retro-Simple.pdf', 'Resume'),
(9, 'img/64b6d2e76569eBerlin-Simple-Resume-Template.pdf', 'Resume'),
(10, 'img/64b6d2fd3e102Paris-Resume-Template-Modern.pdf', 'Resume'),
(11, 'img/64b6d3047b668Cape-Town-Resume-Template-Retro-Creative.pdf', 'Resume'),
(12, 'img/64b6d31aaaf4dMadrid-Resume-Template-Modern (1).pdf', 'CV'),
(13, 'img/64b6d34b7d452Madrid-Resume-Template-Modern.pdf', 'CV'),
(14, 'img/64b6d357d46f8Amsterdam-Modern-Resume-Template.pdf', 'CV'),
(15, 'img/64b6d35fd2e8eMoscow-Creative-Resume-Template.pdf', 'CV'),
(16, 'img/64b6d36819277Dublin-Resume-Template-Modern.pdf', 'CV');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `sno` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `EPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`sno`, `FullName`, `LastName`, `Email`, `EPassword`) VALUES
(1, 'Anmol', 'Saxena', 'anmcap@gmail.com', 'anmcap12'),
(2, 'cap', 'anom', 'capanom@gmail.com', 'capanom222'),
(3, 'Apoorva', 'Saxena', 'apoorvasaxena121@gmail.com', 'apoor121'),
(4, 'Demo', 'User', 'demouser@gmail.com', 'demouser123'),
(5, 'Captain', 'Brhamand', 'captainbrhamand@gmail.com', 'capanom121@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jprovider`
--
ALTER TABLE `jprovider`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `jseeker`
--
ALTER TABLE `jseeker`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jprovider`
--
ALTER TABLE `jprovider`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jseeker`
--
ALTER TABLE `jseeker`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
