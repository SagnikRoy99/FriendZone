-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2010 at 09:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashish24`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountdetails`
--

CREATE TABLE `accountdetails` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountdetails`
--

INSERT INTO `accountdetails` (`id`, `username`, `phno`, `email`, `password`, `profile`) VALUES
(5, 'Lord William', '7980247796', 'ash@gmail.com', '5600', 'profile/challenge.jpg'),
(6, 'ashish', '798024734', 'lord@gmail.com', '798031', 'profile/challenge.jpg'),
(7, 'debarghya chakraborty', '6290159212', 'debarghyachakrab041@gmail.com', '23456789', 'profile/DSC_7181.JPG'),
(8, 'Subhajit', '8901234567', 'Subh@gmail.com', '98340', 'profile/challenge.jpg'),
(9, 'dfnkdfkd', '3', 'sss@gmail.com', '46646464', 'profile/challenge.jpg'),
(10, 'jshdkjsakjf', '12', 'ash1234@gmail.com', '12345678', 'profile/challenge.jpg'),
(11, 'eeeee', '7980247793', 'fd123hf@gmail.com', '87654321', 'profile/challenge.jpg'),
(12, 'Ashish Chakraborty', '7980247720', 'ashish123@gmail.com', '12345678910', 'profile/ashish .jpg'),
(13, 'Ashish Chakraborty ', '7980123456', 'ash543219@gmail.com', '123456', 'profile/20180808_163314.jpg'),
(14, 'ashish chakraborty vines', '7980567891', 'vines@gmail.com', '5678910', 'profile/20191229_173448.jpg'),
(15, 'Rahul Roy', '6290134590', 'rahulroy@gmail.com', '6290134', 'profile/6290134590.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `sender name` varchar(200) DEFAULT NULL,
  `send` varchar(200) DEFAULT NULL,
  `recieve` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admissionform`
--

CREATE TABLE `admissionform` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phno` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `marks` varchar(3) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admissionform`
--

INSERT INTO `admissionform` (`id`, `name`, `phno`, `email`, `marks`, `adress`, `nationality`, `city`) VALUES
(23, 'william', '7980247792', 'ashish200227march@gmail.com', '600', 'england', 'Indian', 'Kolkata'),
(24, 'lord Ash', '123456789', 'ashish200227@gmail.com', '700', 'lkflds', 'Indian', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `as1ch`
--

CREATE TABLE `as1ch` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as1ch`
--

INSERT INTO `as1ch` (`id`, `fullname`, `rollno`, `dob`, `email`, `date_time`) VALUES
(4, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', NULL),
(5, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', NULL),
(6, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', NULL),
(7, 'Ashish', '5', '2022-07-06', NULL, NULL),
(8, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 11:08:58'),
(9, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '0000-00-00 00:00:00'),
(10, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 11:11:24'),
(11, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 11:14:48'),
(12, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 14:45:15'),
(13, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 14:51:34'),
(14, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 14:51:50'),
(15, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 14:52:42'),
(16, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 15:05:04'),
(17, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 15:20:51'),
(18, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 15:20:56'),
(19, 'Ashish', '5', '2022-07-06', 'ashish@gmail.com', '2022-07-16 15:22:26'),
(20, 'Ashish', '1', '2022-07-13', 'ashish@gmail.com', '2022-07-16 15:45:18'),
(21, 'Ashish', '1', '2022-07-13', 'ashish@gmail.com', '2022-07-16 15:45:33'),
(22, 'Ashishch', '1', '2022-07-13', 'ashish@gmail.com', '2022-07-16 15:46:00'),
(23, 'Ashishch', '1', '2022-07-13', 'ashish@gmail.com', '2022-07-16 15:46:16'),
(24, 'Ashishch', '1', '2022-07-13', 'ashish@gmail.com', '2022-07-16 15:47:15'),
(25, 'Ashish', '4', '2022-07-07', 'ashish1@gmail.com', '2022-07-16 16:14:47'),
(26, 'Ashish', '4', '2022-07-07', 'ashish2@gmail.com', '2022-07-16 16:16:10'),
(27, 'Ashish', '4', '2022-07-07', 'ashish3@gmail.com', '2022-07-16 16:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `sendername` varchar(200) NOT NULL,
  `senderphno` varchar(200) NOT NULL,
  `time` date NOT NULL,
  `time2` time NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `phno`, `sendername`, `senderphno`, `time`, `time2`, `comment`) VALUES
(1, 'Ashsih Chakraborty', '7980247720', 'Debarghya chakraborty', '6290159212', '2010-09-02', '10:22:01', 'hi'),
(2, 'Ashsih Chakraborty', '7980247720', 'Ashsih Chakraborty', '7980247720', '2010-09-02', '11:02:54', 'Hello'),
(3, 'Ashish Chakraborty', '7980247720', 'debarghya chakraborty', '6290159212', '2010-09-02', '09:02:20', 'hi'),
(4, 'Ashish Chakraborty', '7980247720', 'Lord William', '7980247796', '2010-09-02', '09:06:03', 'Are You ready'),
(5, 'Ashish Chakraborty', '7980247720', 'Lord William', '7980247796', '2010-09-02', '09:10:00', 'Wonderful\r\n'),
(6, 'Ashish Chakraborty', '7980247720', 'ashish chakraborty vines', '7980567891', '2010-09-02', '10:18:18', 'helllo'),
(7, 'Ashish Chakraborty', '7980247720', 'Rahul Roy', '6290134590', '2010-09-02', '08:55:13', 'Hello Bhai Kamon Achis');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `sendername` varchar(200) DEFAULT NULL,
  `senderphno` varchar(10) NOT NULL,
  `recieve` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `phno`, `sendername`, `senderphno`, `recieve`) VALUES
(2, '', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(3, '', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(4, '', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(5, 'Lord William', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(6, 'Lord William', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(7, 'Lord William', '7980247796', 'Subhajit', '8901234567', 'Hello'),
(8, 'Lord William', '7980247796', 'Subhajit', '8901234567', 'Hi'),
(9, 'debarghya chakraborty', '6290159212', 'ashish', '798024734', 'Hi'),
(10, 'debarghya chakraborty', '6290159212', 'ashish', '798024734', 'Hello'),
(11, 'ashish', '798024734', 'debarghya chakraborty', '6290159212', 'Hello'),
(12, 'ashish', '798024734', 'debarghya chakraborty', '6290159212', 'How Are You'),
(13, 'debarghya chakraborty', '6290159212', 'ashish', '798024734', 'How Are You'),
(14, 'ashish', '798024734', 'debarghya chakraborty', '6290159212', 'Hello'),
(15, 'debarghya chakraborty', '6290159212', 'ashish', '798024734', 'Martin Garrix'),
(16, 'ashish', '798024734', 'debarghya chakraborty', '6290159212', 'Whats up?'),
(17, 'debarghya chakraborty', '6290159212', 'Ashsih Chakraborty', '7980247720', 'Hello'),
(18, 'Ashsih Chakraborty', '7980247720', 'Debarghya chakraborty', '6290159212', 'Hi'),
(19, 'debarghya chakraborty', '6290159212', 'Ashsih Chakraborty', '7980247720', 'Hello'),
(20, 'debarghya chakraborty', '6290159212', 'Lord William', '7980247796', ''),
(21, 'debarghya chakraborty', '6290159212', 'Lord William', '7980247796', 'Hi'),
(22, 'debarghya chakraborty', '6290159212', 'ashish chakraborty vines', '7980567891', 'Hello Bhai'),
(23, 'debarghya chakraborty', '6290159212', 'ashish chakraborty vines', '7980567891', 'Hello Ki korchis');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phno` varchar(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `edu` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `name`, `phno`, `age`, `gender`, `edu`) VALUES
(9, 'Ashok Maurya', '2147483647', 35, 'male', 'md'),
(10, 'Lord Starc', '7980247793', 35, 'male', 'md'),
(11, 'Lord Carry', '7980247794', 35, 'male', 'UG'),
(12, 'Lord Williamson', '7980247798', 25, 'female', 'Hs'),
(13, 'Lord Ash', '7980247799', 12, 'male', 'md'),
(14, 'Lord Ash', '7980247789', 12, 'male', 'md'),
(15, 'Lord Ash', '7980247710', 12, 'male', 'md'),
(16, 'Lord Ash', '7980247780', 44, 'male', 'md'),
(17, 'Lord Ash', '7980247790', 44, 'male', 'md'),
(18, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `uploadfile` varchar(50) DEFAULT NULL,
  `uploadtext` text DEFAULT NULL,
  `time` date NOT NULL,
  `time2` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `username`, `phno`, `uploadfile`, `uploadtext`, `time`, `time2`) VALUES
(13, 'ashish', '798024734', NULL, 'Hello Ashhish vines', '2010-09-02', '08:46:54'),
(15, 'ashish', '798024734', NULL, 'Hello good morning', '2010-09-02', '08:51:23'),
(16, 'ashish', '798024734', NULL, 'Hello Good Morning', '2010-09-02', '08:52:24'),
(17, 'debarghya chakraborty', '6290159212', NULL, 'hello india', '2010-09-02', '08:37:06'),
(18, 'debarghya chakraborty', '6290159212', 'upload/DSC_7181.JPG', NULL, '2010-09-02', '09:51:05'),
(19, 'debarghya chakraborty', '6290159212', 'upload/20180808_162811.jpg', NULL, '2010-09-02', '10:04:40'),
(20, 'Ashsih Chakraborty', '7980247720', NULL, 'Hello Guys', '2010-09-02', '09:47:58'),
(21, 'ashish chakraborty vines', '7980567891', 'upload/20180823_154247.jpg', NULL, '2010-09-02', '10:13:17'),
(22, 'ashish chakraborty vines', '7980567891', 'upload/20181014_175337.jpg', NULL, '2010-09-02', '10:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `username` varchar(200) NOT NULL,
  `story` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountdetails`
--
ALTER TABLE `accountdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissionform`
--
ALTER TABLE `admissionform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `as1ch`
--
ALTER TABLE `as1ch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountdetails`
--
ALTER TABLE `accountdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admissionform`
--
ALTER TABLE `admissionform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `as1ch`
--
ALTER TABLE `as1ch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
