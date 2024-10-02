-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 09:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `acters`
--

CREATE TABLE `acters` (
  `aid` varchar(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(20) NOT NULL,
  `agender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acters`
--

INSERT INTO `acters` (`aid`, `aname`, `alastname`, `agender`) VALUES
('001', 'michele ', 'morrone', 'male'),
('002', 'natalia', 'janoszek', 'female'),
('003', 'nadech', 'kugimiya', 'male'),
('004', 'emily', 'rudd', 'female'),
('005', 'bianca', 'oosthuizen', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mtype` varchar(20) NOT NULL,
  `mtime` time NOT NULL,
  `mdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `mtype`, `mtime`, `mdate`) VALUES
('', '', '', '00:00:00', '0000-00-00'),
('101', '365dni', 'romantic', '02:35:00', '2024-08-07'),
('102', 'doctor', 'romantic', '01:43:00', '2024-09-07'),
('103', 'tee yod1', 'horror', '02:01:00', '2024-09-01'),
('104', 'one piece', 'fantasy', '02:25:00', '2024-09-02'),
('105', 'naruto', 'fantasy', '01:43:00', '2024-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `counters` varchar(10) NOT NULL,
  `aid` varchar(3) NOT NULL,
  `mid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`counters`, `aid`, `mid`) VALUES
('1', '001', '102'),
('2', '001', '103'),
('1', '002', '101'),
('1', '003', '104'),
('2', '004', '101'),
('1', '004', '105'),
('2', '005', '103'),
('1', '005', '104');

-- --------------------------------------------------------

--
-- Table structure for table `secusers`
--

CREATE TABLE `secusers` (
  `counters` varchar(10) NOT NULL,
  `uid` varchar(3) NOT NULL,
  `mid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secusers`
--

INSERT INTO `secusers` (`counters`, `uid`, `mid`) VALUES
('1', '1', '101'),
('1', '2', '103'),
('2', '3', '102'),
('1', '3', '105'),
('1', '4', '104'),
('1', '5', '101'),
('2', '5', '105');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(3) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `ulastname` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `ulastname`, `address`, `telephone`) VALUES
('', '', '', '', ''),
('1', 'ชนาธิป', 'ชัยภักดี', '601/271', '0657465229'),
('2', 'อารูมีไร๊ ', 'อะไรไม่รู้', 'โลก', '0928034115'),
('3', 'kujo', 'jotaro', 'jojo', '0895157997'),
('4', 'dio', 'brando', 'zawrudo', '0891126987'),
('5', 'ainz', 'gown', 'nazarick', '0963256713');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acters`
--
ALTER TABLE `acters`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`aid`,`mid`);

--
-- Indexes for table `secusers`
--
ALTER TABLE `secusers`
  ADD PRIMARY KEY (`uid`,`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
