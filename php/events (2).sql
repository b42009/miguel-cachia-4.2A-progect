-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 03:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` int(11) NOT NULL,
  `className` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classId`, `className`) VALUES
(5, 'backRow'),
(3, 'frontRow'),
(4, 'middleRow'),
(1, 'Normal'),
(2, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientId` int(11) NOT NULL,
  `clientName` varchar(150) NOT NULL,
  `clientSurname` varchar(150) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `passWord` varchar(100) NOT NULL,
  `bankId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientId`, `clientName`, `clientSurname`, `dateOfBirth`, `email`, `userName`, `passWord`, `bankId`) VALUES
(1, 'miguel', 'cachia', '1999-12-27', 'cachiamiguel@gmail.com', 'mig', 'Qa.1999', NULL),
(2, 'jhon', 'smith', '1996-04-04', 'jhonsmith@gmail.com', 'jhons', 'j.123', NULL),
(21, 'clayton', 'cachia', '1996-06-25', 'cachia@gmail.com', 'nuzzi', 'nuz123', NULL),
(22, 'julia', 'musu', '2011-01-01', 'julia@gmail.com', 'julia11', 'ajj', NULL),
(23, 'elaine', 'farrugia', '1987-02-01', 'gdhgfh@sad.com', 'Elaine', 'Elaine1.1', NULL),
(25, 'miguel', 'cachia', '1999-12-27', 'miguel@gmail.com', 'migu', 'Mig.1234567', NULL),
(26, 'miguel', 'cachia', '1999-12-27', 'miguel@gmail.com', 'migu', 'miguelL.123', NULL),
(27, 'miguel', 'cachia', '1999-12-27', 'cachiam@gmail.com', 'migu', 'Miguel.123', NULL),
(28, 'clayton', 'cachia', '0000-00-00', 'clay@gmail.com', 'clay', 'Clay.1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `imagLink` varchar(50) NOT NULL,
  `eventDate` date NOT NULL,
  `addres` varchar(50) NOT NULL,
  `Tikkitimag` varchar(50) NOT NULL,
  `type` int(20) NOT NULL,
  `imgcategory` int(11) NOT NULL,
  `durationInDays` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `name`, `edate`, `imagLink`, `eventDate`, `addres`, `Tikkitimag`, `type`, `imgcategory`, `durationInDays`) VALUES
(9, 'Cafe Del Mar Party', '2018-04-25', 'uploads\\CDMposter.jpg', '2018-08-04', 'Cafe del mar Qawra', '', 1, 1, 1),
(10, 'Summer Party', '2018-04-25', 'uploads\\p1.jpg', '2018-06-07', 'tetingers', '', 1, 1, 1),
(11, 'Entheos', '2018-04-25', 'uploads\\p2.jpg', '2018-06-02', 'velvid club', '', 1, 1, 1),
(12, 'Glow Party', '2018-04-25', 'uploads\\p3.jpg', '2018-05-31', 'tetingers Club', '', 1, 1, 1),
(13, 'Night Party', '2018-04-25', 'uploads\\p4.jpg', '2018-06-06', 'Havana club', '', 1, 1, 1),
(14, 'The Rose Tatto', '2018-04-25', 'uploads\\pl1.jpg', '2018-06-02', 'Manuel Teather', '', 2, 1, 3),
(16, 'Summer carnival', '2018-04-25', 'uploads\\basic2.jpg', '2018-08-15', 'carnival summer party', '', 1, 2, 1),
(85, 'champions leag final', '2018-05-18', 'uploads/champions.jpg', '2018-06-16', ' sports bar attard', '', 3, 1, 1),
(86, 'party giga', '2018-05-18', 'uploads/allgigsfree.jpg', '2018-05-18', 'velvid club', '', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `eventtypes`
--

CREATE TABLE `eventtypes` (
  `typeId` int(20) NOT NULL,
  `typeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventtypes`
--

INSERT INTO `eventtypes` (`typeId`, `typeName`) VALUES
(1, 'Party'),
(2, 'Play'),
(3, 'SportEvent');

-- --------------------------------------------------------

--
-- Table structure for table `imagcategory`
--

CREATE TABLE `imagcategory` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagcategory`
--

INSERT INTO `imagcategory` (`id`, `categoryname`) VALUES
(1, 'normal'),
(2, 'big');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL,
  `jobName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `jobName`) VALUES
(1, 'Boss'),
(2, 'Manager'),
(3, 'Worker');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tiketId` int(11) NOT NULL,
  `tiketCode` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `classType` int(11) NOT NULL,
  `cliantId` int(11) DEFAULT NULL,
  `eventId` int(11) NOT NULL,
  `checkIn` tinyint(1) NOT NULL,
  `timeStart` time NOT NULL,
  `durationTime` int(11) DEFAULT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tiketId`, `tiketCode`, `price`, `classType`, `cliantId`, `eventId`, `checkIn`, `timeStart`, `durationTime`, `edate`) VALUES
(1, 'TRS100', 20, 3, 28, 14, 0, '20:00:00', 120, '2018-06-02'),
(2, 'TRS101', 20, 3, 28, 14, 0, '20:00:00', 120, '2018-06-02'),
(3, 'TRS103', 20, 3, NULL, 14, 0, '20:00:00', 120, '2018-06-02'),
(4, 'TRS104', 20, 3, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(5, 'TRS105', 20, 3, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(6, 'TRS106', 20, 3, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(7, 'TRS107', 20, 3, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(8, 'TRS200', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-02'),
(9, 'TRS202', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-02'),
(10, 'TRS203', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-02'),
(11, 'TRS205', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(12, 'TRS204', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(13, 'TRS206', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(14, 'TRS207', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(15, 'TRS208', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(16, 'TRS209', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(17, 'TRS210', 10, 4, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(18, 'TRS300', 5, 5, 1, 14, 1, '20:00:00', 120, '2018-06-02'),
(19, 'TRS301', 5, 5, 1, 14, 1, '20:00:00', 120, '2018-06-02'),
(20, 'TRS302', 5, 5, 1, 14, 1, '20:00:00', 120, '2018-06-02'),
(21, 'TRS303', 5, 5, 1, 14, 0, '20:00:00', 120, '2018-06-02'),
(22, 'TRS304', 5, 5, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(23, 'TRS305', 5, 5, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(24, 'TRS306', 5, 5, NULL, 14, 0, '20:00:00', 120, '2018-06-03'),
(25, 'np01', 5, 1, 28, 13, 0, '08:00:00', NULL, '2018-06-06'),
(26, 'np02', 5, 1, 28, 13, 0, '08:00:00', 6, '2018-06-06'),
(27, 'np03', 5, 1, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(29, 'np11', 10, 2, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(30, 'np12', 10, 2, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(31, 'np13', 10, 2, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(32, 'np04', 5, 1, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(33, 'np04', 5, 1, NULL, 13, 0, '08:00:00', NULL, '2018-06-06'),
(34, 'TRS309', 5, 5, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(35, 'TRS300', 5, 5, NULL, 14, 0, '20:00:00', 120, '2018-06-04'),
(39, 'ch001', 5, 1, 28, 85, 0, '20:00:00', NULL, '2018-06-16'),
(40, 'ch002', 5, 1, NULL, 85, 0, '20:00:00', NULL, '2018-06-16'),
(41, 'gig01', 5, 1, NULL, 86, 0, '20:00:00', NULL, '2018-05-25'),
(42, 'gig02', 5, 1, NULL, 86, 0, '20:00:00', NULL, '2018-05-26'),
(43, 'gig03', 5, 1, NULL, 86, 0, '20:00:00', NULL, '2018-05-27'),
(44, 'gig04', 10, 2, NULL, 86, 0, '20:00:00', NULL, '2018-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `workerId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `jobid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`workerId`, `name`, `surname`, `dateOfBirth`, `email`, `jobid`, `username`, `password`) VALUES
(1, 'miguel', 'cachia', '1999-12-27', 'cachiamiguel@gmail.com', 1, 'tickB001', 'B.100'),
(2, 'claud', 'bugeja', '2000-12-25', 'claud@gmail.com', 3, 'tickW001', 'W.100'),
(3, 'clayton', 'borg', '1996-06-25', 'claytonborg@gmail.com', 2, 'tickM001', 'M.100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`),
  ADD KEY `className` (`className`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `type` (`type`),
  ADD KEY `imgcategory` (`imgcategory`);

--
-- Indexes for table `eventtypes`
--
ALTER TABLE `eventtypes`
  ADD PRIMARY KEY (`typeId`);

--
-- Indexes for table `imagcategory`
--
ALTER TABLE `imagcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tiketId`),
  ADD KEY `classType` (`classType`),
  ADD KEY `cliantId` (`cliantId`,`eventId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`workerId`),
  ADD KEY `jobid` (`jobid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `eventtypes`
--
ALTER TABLE `eventtypes`
  MODIFY `typeId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagcategory`
--
ALTER TABLE `imagcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tiketId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `workerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`type`) REFERENCES `eventtypes` (`typeId`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`imgcategory`) REFERENCES `imagcategory` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `event` (`eventId`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`cliantId`) REFERENCES `client` (`clientId`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`classType`) REFERENCES `class` (`classId`) ON DELETE CASCADE;

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`jobid`) REFERENCES `job` (`jobId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
