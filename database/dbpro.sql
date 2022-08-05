-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 05:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `serial` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `cls` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gpa` varchar(7) NOT NULL,
  `pdn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `serial` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `record` varchar(5) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`serial`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `img`, `record`, `psn`, `address`, `password`) VALUES
(203, 'Muhammad ILyas', 'male', '1111111111111', 'Muhammad Ashraf', '2020-12-02', 9, 'bitf19m018@gmail.com', 'loginsign.png', '2.7', 'Quaid e Azam Public High School', 'MDK, 39000', ''),
(236, 'Muhammad ILyas', 'male', '3544534545656', 'Muhammad Ashraf', '2021-01-13', 5, 'bitf19m018@pucit.edu.pk', 'blueshade.jpg', '3.40', '', '', ''),
(214, 'Muhammad ILyas', 'male', '4364656567567', 'Muhammad Ashraf', '2021-01-21', 3, 'bitf19m018@gmail.com', 'pic.jpg', '2.7', '', '', ''),
(227, 'Muhammad ILyas', 'male', '4565656765745', 'Muhammad Ashraf', '2021-01-28', 3, 'bitf19m018@gmail.com', 'blueshade.jpg', '2.7', 'rtyrtyrt', 'etyrtyr', ''),
(239, 'unknown', 'male', '4657657643534', 'No name', '2021-01-01', 5, 'bitf19m006@puciit.edu.pk', 'blueshade.jpg', '3.5', 'gfhdgh', 'sdfgdfgsd', ''),
(237, 'Huzaifa Yaseen', 'male', '4837457834678', 'Yaseen', '2021-01-27', 3, 'bitf19m006@gmail.com', 'blueshade.jpg', '3.40', '', '', ''),
(235, 'unknown', 'male', '6374736766782', 'No name', '2020-12-31', 4, 'huzaifayaseen0@gmail.com', 'login.png', '2.7', '', '', ''),
(233, 'Huzaifa Yaseen', 'male', '6378676676345', 'Yaseen', '2021-01-01', 1, 'mailto.huzaifayaseen0@gmail.com', 'blueshade.jpg', '3.5', 'No psn', 'No address', ''),
(230, 'Anmol Hafza', 'female', '6534563546574', 'djkfhjskd', '2021-01-01', 5, 'anmolhafza29@gmail.com', 'login.png', '3.0', 'NO PSN', 'NO address', ''),
(208, 'Muhammad ILyas', 'male', '7364782384678', 'Father name', '2021-01-15', 6, 'bitf19m018@gmail.com', 'msg.png', '2.7', 'NO address', 'NO PSN', ''),
(238, 'subtain', 'male', '8678678687686', 'hgjkgj', '2021-01-22', 1, 'bitf19m008@pucit.edu.pk', 'blueshade.jpg', '3.7', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `grade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`grade`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `serial` int(3) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`serial`, `file`) VALUES
(1, 'timetable.png');

-- --------------------------------------------------------

--
-- Table structure for table `studentid`
--

CREATE TABLE `studentid` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(5) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid`
--

INSERT INTO `studentid` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(0, '', '', '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(1, '', '', '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(101, 'Muhammad Rizwan', 'male', '123456789107', 'Muhammad Ilyas', '2020-07-14', 12, 'abc@abc.com', 'NO', '', '', '', ''),
(102, 'unknown', 'male', '1234567890367', 'Muhammad Ashraf', '2021-01-06', 1, 'rizwan.mdk.018@gmail.com', 'q4p2.png', '2.7', 'yffghfj', 'hghfhk', ''),
(103, 'unknown', 'male', '1234567890156', 'hjkahj', '2020-12-21', 8, 'bitf19m018@gmail.com', 'q2.png', '2.7', 'gahbhsa ksh hj k', 'yiuowyubdhj s', ''),
(106, 'Muhammad ILyas', 'male', '7567587567588', 'hjkahj', '2020-12-30', 6, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', '', '', ''),
(107, '', '', '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(109, 'Muhammad ILyas', 'male', '1234567890162', 'Father name', '2020-11-30', 1, 'rizwan.mdk.018@gmail.com', 'q2.png', '2.7', 'hjkfhkljsdhkjf kjashdjkfhal', 'hjahjdsl j', ''),
(111, 'Muhammad ILyas', 'male', '1234567890132', 'No name', '2020-12-15', 1, 'bitf19m018@gmail.com', 'q4.png', '2.7', 'bhvh', 'hvhgjvh', ''),
(113, 'unknown', 'male', '1234567890134', 'fname', '2020-12-21', 1, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', 'jhsghjsk hjsbhj ', 'hdusgdhb', ''),
(200, 'unknown', 'male', '1234567890367', 'Muhammad Ashraf', '2021-01-06', 2, 'rizwan.mdk.018@gmail.com', 'q4p2.png', '2.7', 'yffghfj', 'hghfhk', ''),
(201, 'Muhammad ILyas', 'male', '5656565656565', 'No name', '2020-12-07', 1, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', 'nO name', 'NO address', ''),
(202, 'Muhammad ilyas', 'male', '6896767567465', 'Fname', '2020-12-12', 1, 'bitf19m018@gmail.com', 'q4p.png', '2', 'ghvyivhvb ', 'tffuigih', ''),
(203, 'Muhammad ILyas', 'male', '1346235245637', 'No name', '2020-12-02', 1, 'bitf19m018@gmail.com', 'q4.png', '2.7', 'No School Name', 'No Address', ''),
(206, 'Muhammad ILyas', 'male', '5658756585685', 'unknown', '2020-12-06', 1, 'bitf19m018@gmail.com', 'q6.png', '2.7', 'fgh hvhjvk', 'ftyfuyfu', ''),
(210, '', '', '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(211, '', '', '', '', '0000-00-00', 0, '', '', '', '', '', ''),
(212, 'Muhammad ILyas', 'male', '5684543535674', 'adfa', '2020-12-02', 7, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', 'hgkhjh hvjhvk', 'uyfuyfuigu', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentid1`
--

CREATE TABLE `studentid1` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid1`
--

INSERT INTO `studentid1` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(101, 'Muhammad ILyas', 'male', '1234567890132', 'Muhammad Ashraf', '2020-12-12', 1, 'bitf19m018@gmail.com', 'a.jpg', '2.7', 'NO ', 'NO', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid2`
--

CREATE TABLE `studentid2` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid2`
--

INSERT INTO `studentid2` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(201, 'Muhammad ILyas', 'male', '9788346872687', 'Muhammad Ashraf', '2020-12-02', 2, 'bitf19m018@gmail.com', 'q4p3.png', '2.7', '', '', 'NOT PAID'),
(202, 'Muhammad ILyas', 'male', '9827346872735', 'Muhammad Ashraf', '2020-12-16', 2, 'bitf19m018@gmail.com', '', '2.7', 'NO ', 'NO', 'NOT PAID'),
(203, 'Muhammad ILyas', 'male', '8786786756564', 'Muhammad Ashraf', '2021-01-02', 2, 'bitf19m018@gmail.com', 'pic.jpg', '2.7', 'tgyufirtr', 'yfyyiu', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid3`
--

CREATE TABLE `studentid3` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid3`
--

INSERT INTO `studentid3` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(301, 'Muhammad ILyas', 'male', '1234567890132', 'Muhammad Ashraf', '0000-00-00', 0, 'bitf19m018@gmail.com', '', '2.7', 'NO ', 'NO', 'NOT PAID'),
(302, 'Muhammad ILyas', 'male', '8786873675356', 'Muhammad Ashraf', '2020-12-09', 3, 'bitf19m018@gmail.com', '', '2.7', 'NO ', 'NO', 'NOT PAID'),
(303, 'Muhammad ILyas', 'male', '3457567524672', 'Muhammad Ashraf', '2020-12-02', 3, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', '', '', 'NOT PAID'),
(304, 'unknown', 'female', '7867867867867', 'No name', '2021-01-05', 3, 'bitf19m032@puciit.edu.pk', 'blueshade.jpg', '2.7', 'yuyuiu', 'tyuiyty', 'NOT PAID'),
(305, 'unknown', 'female', '1523654652836', 'father name', '2021-01-01', 3, 'anmolhafza29@gmail.com', 'blueshade.jpg', '3.0', 'NO PSN', 'NO address', 'NOT PAID'),
(306, 'Huzaifa Yaseen', 'male', '5763452342456', 'Yaseen', '2000-01-01', 3, 'bitf19m006@puciit.edu.pk', 'login.png', '3.0', 'No Confirmed', 'Gujranwla', 'NOT PAID'),
(307, 'unknown', 'male', '7878577487478', 'No name', '2021-01-14', 3, 'bitf19m006@gmail.com', 'login.png', '2.7', 'hjjf', 'djfkdj', 'NOT PAID'),
(308, 'Huzaifa Yaseen', 'male', '3787483793278', 'Yaseen', '2021-01-14', 4, 'huzaifayaseen0@gmail.com', 'blueshade.jpg', '3.40', 'hjhjd', 'dshfsjdkj', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid4`
--

CREATE TABLE `studentid4` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` int(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid4`
--

INSERT INTO `studentid4` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(401, 'Muhammad ILyas', 'male', 2147483647, 'Muhammad Ashraf', '2020-12-02', 4, 'bitf19m018@gmail.com', 'q4.png', '2.7', '', '', 'NOT PAID'),
(402, 'Luqman', 'male', 2147483647, 'Gulzar', '2021-01-08', 4, 'bitf19m013@pucit.edu.pk', 'login.png', '3.0', 'shhskjdkjsa', 'usayudyui', 'NOT PAID'),
(403, 'unknown', 'male', 2147483647, 'No name', '2021-01-16', 4, 'anmolhafza29@gmail.com', 'msg.png', '2.7', 'hsjkhdjs', 'yiuyui', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid5`
--

CREATE TABLE `studentid5` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid5`
--

INSERT INTO `studentid5` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(501, 'Muhammad ILyas', 'male', '4444444444444', 'Muhammad Ashraf', '2020-12-09', 5, 'bitf19m018@gmail.com', 'q4.png', '2.7', '', '', 'NOT PAID'),
(502, 'Huzaifa Yaseen', 'male', '8374687634637', 'Yaseen', '2021-01-15', 5, 'bitf19m006@puciit.edu.pk', 'blueshade.jpg', '3.2', 'No psn', 'No Address', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid6`
--

CREATE TABLE `studentid6` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid6`
--

INSERT INTO `studentid6` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(601, 'Muhammad ILyas', 'male', '6666666666666', 'Muhammad Ashraf', '2020-12-02', 6, 'bitf19m018@gmail.com', 'q1.png', '2.7', '', '', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid7`
--

CREATE TABLE `studentid7` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid7`
--

INSERT INTO `studentid7` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(701, 'Muhammad ILyas', 'male', '7777777777777', 'Muhammad Ashraf', '2020-12-24', 7, 'bitf19m018@gmail.com', 'q4p2.png', '2.7', '', '', 'NOT PAID'),
(702, 'sda', 'male', '1231231231234', 'aass', '2021-01-21', 7, 'ak3274093@gmail.com', 'pic.jpg', '3.3', 'zxmajsdj', 'XJCJCJC', 'NOT PAID'),
(703, 'Muhammad Rizwan', 'male', '1234567890132', 'Muhammad Ilyas', '2002-09-25', 7, 'bitf19m018@pucit.edu.pk', 'Pic.jpg', '3.40', 'Govt Degree College MDK', 'MDK, 39000', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid8`
--

CREATE TABLE `studentid8` (
  `rollno` int(3) NOT NULL,
  `name` int(50) NOT NULL,
  `gender` int(7) NOT NULL,
  `cnic` int(13) NOT NULL,
  `fname` int(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid8`
--

INSERT INTO `studentid8` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(801, 0, 0, 2147483647, 0, '2020-12-23', 8, 'bitf19m018@gmail.com', 'q2.png', '2.7', 0, '', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid9`
--

CREATE TABLE `studentid9` (
  `rollno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid9`
--

INSERT INTO `studentid9` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(901, 'Muhammad ILyas', 'male', '9999999999999', 'Muhammad Ashraf', '2020-12-09', 9, 'bitf19m018@gmail.com', 'q4p3.png', '2.7', '', '', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `studentid10`
--

CREATE TABLE `studentid10` (
  `rollno` int(4) NOT NULL,
  `name` int(50) NOT NULL,
  `gender` int(7) NOT NULL,
  `cnic` int(13) NOT NULL,
  `fname` int(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nimg` varchar(50) NOT NULL,
  `record` varchar(6) NOT NULL,
  `psn` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `fee` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentid10`
--

INSERT INTO `studentid10` (`rollno`, `name`, `gender`, `cnic`, `fname`, `dob`, `class`, `email`, `nimg`, `record`, `psn`, `address`, `fee`) VALUES
(1001, 1, 2, 2147483647, 3, '2020-12-12', 10, 'bitf19m018@gmail.com', '', '2.7', 'NO ', 'NO address', 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `class` varchar(10) NOT NULL,
  `l1` varchar(20) NOT NULL,
  `l2` varchar(20) NOT NULL,
  `l3` varchar(20) NOT NULL,
  `l4` varchar(20) NOT NULL,
  `l5` varchar(20) NOT NULL,
  `l6` varchar(20) NOT NULL,
  `l7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`cnic`),
  ADD UNIQUE KEY `serial` (`serial`),
  ADD UNIQUE KEY `serial_2` (`serial`),
  ADD UNIQUE KEY `serial_3` (`serial`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`grade`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `studentid`
--
ALTER TABLE `studentid`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `studentid1`
--
ALTER TABLE `studentid1`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid2`
--
ALTER TABLE `studentid2`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid3`
--
ALTER TABLE `studentid3`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid4`
--
ALTER TABLE `studentid4`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid5`
--
ALTER TABLE `studentid5`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid6`
--
ALTER TABLE `studentid6`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid7`
--
ALTER TABLE `studentid7`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid8`
--
ALTER TABLE `studentid8`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid9`
--
ALTER TABLE `studentid9`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentid10`
--
ALTER TABLE `studentid10`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `serial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `grade` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `serial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentid1`
--
ALTER TABLE `studentid1`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `studentid2`
--
ALTER TABLE `studentid2`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `studentid3`
--
ALTER TABLE `studentid3`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `studentid4`
--
ALTER TABLE `studentid4`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `studentid5`
--
ALTER TABLE `studentid5`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `studentid6`
--
ALTER TABLE `studentid6`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;

--
-- AUTO_INCREMENT for table `studentid7`
--
ALTER TABLE `studentid7`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=704;

--
-- AUTO_INCREMENT for table `studentid8`
--
ALTER TABLE `studentid8`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT for table `studentid9`
--
ALTER TABLE `studentid9`
  MODIFY `rollno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=902;

--
-- AUTO_INCREMENT for table `studentid10`
--
ALTER TABLE `studentid10`
  MODIFY `rollno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
