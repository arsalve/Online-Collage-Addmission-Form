-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 03:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `Sr` bigint(20) UNSIGNED NOT NULL,
  `Uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `Year` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `c_address` varchar(30) NOT NULL,
  `sscma` int(10) NOT NULL,
  `hscma` int(10) NOT NULL,
  `dse` varchar(10) NOT NULL,
  `s1` int(10) NOT NULL,
  `s2` int(10) NOT NULL,
  `s3` int(10) NOT NULL,
  `s4` int(10) NOT NULL,
  `s5` int(10) NOT NULL,
  `s6` int(10) NOT NULL,
  `s7` int(10) NOT NULL,
  `s8` int(10) NOT NULL,
  `add_date` year(4) NOT NULL,
  `cast` varchar(30) NOT NULL,
  `s_cast` varchar(30) NOT NULL,
  `schol` varchar(10) NOT NULL,
  `g_cont1` int(11) NOT NULL,
  `g_cont2` int(11) NOT NULL,
  `image` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`Sr`, `Uname`, `name`, `dob`, `Year`, `branch`, `p_address`, `c_address`, `sscma`, `hscma`, `dse`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `add_date`, `cast`, `s_cast`, `schol`, `g_cont1`, `g_cont2`, `image`) VALUES
(8, '', '', '0000-00-00', '', '', '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0000, '', '', '', 0, 0, 0),
(1, 'a.r.salve', 'Ashish R Salve', '1996-01-06', '3', 'IT', 'Badlapur', 'BAD', 100, 100, 'Yes', 100, 100, 100, 100, 100, 100, 100, 100, 2016, 'OBC', 'KASAR(86)', 'YES', 123456789, 123456789, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr`, `Username`, `Email`, `Password`) VALUES
(2, 'a.r.salve', 'a.r.salve@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`Uname`),
  ADD UNIQUE KEY `Sr` (`Sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Sr` (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `Sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
