-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 11:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuktajd6_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `userName` varchar(54) NOT NULL,
  `emailID` varchar(54) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `college` varchar(80) NOT NULL,
  `department` varchar(40) NOT NULL,
  `year` varchar(10) NOT NULL,
  `mobile` int(13) NOT NULL,
  `code blitz` int(2) DEFAULT NULL,
  `carbine coders` int(2) DEFAULT NULL,
  `androxous` int(2) DEFAULT NULL,
  `poster mania` int(2) DEFAULT NULL,
  `web ninja` int(2) DEFAULT NULL,
  `innovia` int(2) DEFAULT NULL,
  `phineas` int(2) DEFAULT NULL,
  `trussure` int(2) DEFAULT NULL,
  `zenith edifice` int(2) DEFAULT NULL,
  `virtuoso` int(2) DEFAULT NULL,
  `en route` int(2) DEFAULT NULL,
  `cad n code` int(2) DEFAULT NULL,
  `tech vibes` int(2) DEFAULT NULL,
  `micropiling` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `userName`, `emailID`, `pass`, `college`, `department`, `year`, `mobile`, `code blitz`, `carbine coders`, `androxous`, `poster mania`, `web ninja`, `innovia`, `phineas`, `trussure`, `zenith edifice`, `virtuoso`, `en route`, `cad n code`, `tech vibes`, `micropiling`) VALUES
(1003, 'z', 'zdmm@g.com', 'z', 'z', 'z', 'z', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1009, 'qw', 'harikrishnaselva@gmail.com', '123asd', 'asd', 'asda', '21213', 12442, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1010, 'hak', 'harikrishnaselva@gmail.com', '21', 'asda', 'asda', 'asd', 1342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1005, 'q', 'q@gmail.com', 'q', 'q', 'q', '1st', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1006, 'q', 'q@gmail.com', 'A', 'q', 'q', '1st', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1007, 'q', 'q@gmail.com', 'A', 'q', 'q', '1st', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1008, '1', '1@g.com', '1', '1', '1', '1st', 2342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1011, 'haks', 'harikrishnaselva@gmail.com', 'asd', 'asd', 'asda', '231', 121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1012, 'as', 'harikrishnaselva@gmail.com', 'Asdsaa', 'sda', 'asda', 'asda', 123412, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1013, 'as', 'harikrishnaselva@gmail.com', 'Asdsaa', 'sda', 'asda', 'asda', 123412, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
