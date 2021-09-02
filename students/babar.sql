-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 11:56 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babar`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` int(30) NOT NULL,
  `StudentName` varchar(60) NOT NULL,
  `FatherName` varchar(60) NOT NULL,
  `Age` int(40) NOT NULL,
  `Course` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `StudentName`, `FatherName`, `Age`, `Course`) VALUES
(1001, 'Babar', 'Ahsan', 20, 'web design'),
(1002, 'ASIM', 'KHALID', 22, 'GRAPHIC DESIGN'),
(1003, 'Arslan', 'KHALID', 22, 'SEO'),
(1004, 'Dilshad', 'ishaque', 23, 'Web dev'),
(1005, 'Hassan', 'Rashid', 20, 'Programing'),
(1006, 'Usama', 'Ahsan', 20, 'Programing'),
(1001, '', '', 20, ''),
(1001, '', '', 20, ''),
(1001, '', '', 20, ''),
(1001, '', '', 20, ''),
(1010, 'hira', 'Ahsan', 22, 'Graphic Design'),
(2, 'ali', 'ahsan', 22, 'Graphic Design'),
(2, 'ali', 'ahsan', 22, 'Graphic Design'),
(99, 'babar', 'ahasn', 22, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `studentsdata`
--

CREATE TABLE `studentsdata` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `StudentFather` varchar(60) NOT NULL,
  `StudentAge` int(30) NOT NULL,
  `StudentCourse` varchar(40) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsdata`
--

INSERT INTO `studentsdata` (`StudentId`, `StudentName`, `StudentFather`, `StudentAge`, `StudentCourse`, `username`, `password`) VALUES
(1003, 'ali', 'M.Ali', 18, 'Web Development', 'babar', 'admin'),
(1005, 'asim', 'amir', 18, 'Web Development', '', ''),
(1008, 'babar', 'ahsan', 21, 'web development', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentsdata`
--
ALTER TABLE `studentsdata`
  ADD PRIMARY KEY (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentsdata`
--
ALTER TABLE `studentsdata`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
