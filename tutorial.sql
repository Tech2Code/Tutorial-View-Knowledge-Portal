-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 03:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `uid`, `dob`, `gender`, `mob`, `email`, `add`) VALUES
('Gaurav', 'kumar', 'gaurav', '1994-01-01', 'male', 9045642302, 'kgaurav281194@gmail.com', 'jhajha'),
('zahir', 'akhtar', 'zahir', '1990-12-27', 'male', 8126570737, 'mrzahirakhtar@gmail.com', 'pachahi'),
('chandan', 'singh', 'singh', '1996-12-30', 'male', 987654321, 'abc@mailinator.com', 'delhi'),
('keshav', 'kumar', 'keshav', '1999-06-16', 'male', 8956781245, 'keshav313@gmail.com', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE `userid` (
  `uid` varchar(15) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `auth` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`uid`, `pwd`, `auth`) VALUES
('singh', 'singh', 1),
('keshav', 'keshav', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
