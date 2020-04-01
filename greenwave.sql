-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 02:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `materialID` varchar(10) NOT NULL,
  `materialName` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `pointsPerKg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`materialID`, `materialName`, `description`, `pointsPerKg`) VALUES
('35', 'can', 'Aluminium cans are shredded, removing any coloured', 50),
('36', 'paper', 'Tering, conterminal removal and De-Inking', 60);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(11) NOT NULL,
  `materialID` int(2) NOT NULL,
  `recycler` varchar(30) NOT NULL,
  `collector` varchar(30) NOT NULL,
  `proposedDate` date NOT NULL,
  `actualDate` date NOT NULL,
  `weightInKg` int(11) NOT NULL,
  `pointsAwarded` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`submissionID`, `materialID`, `recycler`, `collector`, `proposedDate`, `actualDate`, `weightInKg`, `pointsAwarded`, `status`) VALUES
(1, 0, '', 'hanz', '0000-00-00', '2020-04-01', 7, 0, 'Submitted'),
(2, 35, 'jacky', 'hanz', '0000-00-00', '2020-04-14', 6, 0, 'Submitted'),
(9, 36, 'lala', 'l', '2020-02-11', '0000-00-00', 0, 0, 'submitted'),
(26, 36, 'jinxi', 'Hanz', '0000-00-00', '0000-00-00', 0, 0, 'Submitted'),
(38, 35, 'lala', 'Hanz', '6666-06-06', '6666-06-07', 8, 0, 'Submitted'),
(39, 35, 'lala', 'Hanz', '0000-00-00', '2020-04-01', 0, 0, 'Submitted'),
(40, 36, 'Pramila', 'Jane', '2020-04-01', '2020-04-03', 8, 0, 'Submitted'),
(41, 35, 'Pramila', 'Hanz', '2018-03-03', '0000-00-00', 0, 0, 'proposed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `totalPoints` int(10) NOT NULL,
  `ecolevel` varchar(20) NOT NULL,
  `schedule` varchar(20) NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `userType` varchar(10) NOT NULL,
  `materialID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fullname`, `address`, `totalPoints`, `ecolevel`, `schedule`, `timeFrom`, `timeTo`, `userType`, `materialID`) VALUES
('Austin', '1234', 'Austin ', 'kl', 0, 'Newbie', '', '00:00:00', '00:00:00', 'recycler', '0'),
('Dev', '12345', 'Dev', 'Kl', 0, '', 'Friday', '10:00:00', '12:00:00', 'collector', '35'),
('Hanz', '1234', 'Hanz', 'kl', 0, '', 'Thursday', '16:00:00', '18:00:00', 'collector', '35'),
('Jane', '1234', 'Jane ', 'Cheras', 0, '', 'Monday', '12:00:00', '14:00:00', 'collector', '36'),
('lala', '12345', 'Lala', '', 0, 'Newbie', '', '00:00:00', '00:00:00', 'recycler', '0'),
('Pramila', '1234', 'Pramila', 'KL', 0, 'Newbie', '', '00:00:00', '00:00:00', 'recycler', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`materialID`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submissionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
