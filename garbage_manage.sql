-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 08:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garbage_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `drain_sensor`
--

CREATE TABLE `drain_sensor` (
  `sen_id` int(11) NOT NULL,
  `sen_address` int(11) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `government_data`
--

CREATE TABLE `government_data` (
  `gid` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government_data`
--

INSERT INTO `government_data` (`gid`, `password`, `state`, `country`) VALUES
(1, 345, 'Odisha', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `health_care_data`
--

CREATE TABLE `health_care_data` (
  `hid` int(11) NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `hgender` varchar(3) DEFAULT NULL,
  `hdept` varchar(30) DEFAULT NULL,
  `hdp` varchar(50) DEFAULT NULL,
  `hpassword` varchar(10) NOT NULL,
  `hphone` bigint(15) NOT NULL,
  `hemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_care_data`
--

INSERT INTO `health_care_data` (`hid`, `hname`, `hgender`, `hdept`, `hdp`, `hpassword`, `hphone`, `hemail`) VALUES
(2443, 'shyam kumar', 'M', 'provider', 'shyam.jpg', 'fgh', 5678765645, 'shyam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `health_care_work`
--

CREATE TABLE `health_care_work` (
  `hwid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `h_w_desc` varchar(100) NOT NULL,
  `w_image` varchar(50) NOT NULL,
  `w_address` varchar(30) NOT NULL,
  `w_city` varchar(30) NOT NULL,
  `w_type` varchar(30) NOT NULL,
  `w_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_care_work`
--

INSERT INTO `health_care_work` (`hwid`, `hid`, `name`, `phone`, `email`, `h_w_desc`, `w_image`, `w_address`, `w_city`, `w_type`, `w_status`) VALUES
(1, 2443, 'shyam kumar', 5678765645, 'shyam@gmail.com', 'mjbjkgbjkgbjkgbjkm', 'san.jfif', 'jagamara,jganmohan nagar', 'Bhubaneswar', 'type-1', 'Approved'),
(2, 2443, 'shyam kumar', 5678765645, 'shyam@gmail.com', 'jkfaskfhaifiasjnkassj', 'bus.png', 'jagamara,jganmohan nagar', 'Bhubaneswar', 'type-3', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `officer_data`
--

CREATE TABLE `officer_data` (
  `ofid` int(11) DEFAULT NULL,
  `ofname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `gender` varchar(3) NOT NULL,
  `profile_img` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer_data`
--

INSERT INTO `officer_data` (`ofid`, `ofname`, `email`, `dob`, `dept`, `password`, `gender`, `profile_img`, `phone`) VALUES
(234, 'ranjan kumar', 'ranjan@gmail.com', '2022-11-16', 'Cleaning Authority', 'dfg', 'M', '2141013024.jpg', 347689657);

-- --------------------------------------------------------

--
-- Table structure for table `ppp_data`
--

CREATE TABLE `ppp_data` (
  `ppp_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ppp_dp` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppp_data`
--

INSERT INTO `ppp_data` (`ppp_id`, `name`, `gender`, `password`, `ppp_dp`, `email`, `phone`) VALUES
(2, 'sankar mohanty', 'M', 'dfg', 'sankar.jfif', 'sankar@gmail.com', 3453465734);

-- --------------------------------------------------------

--
-- Table structure for table `ppp_work_update`
--

CREATE TABLE `ppp_work_update` (
  `work_id` int(11) NOT NULL,
  `ppp_id` int(11) NOT NULL,
  `work_image` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `amount_recycle` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppp_work_update`
--

INSERT INTO `ppp_work_update` (`work_id`, `ppp_id`, `work_image`, `type`, `amount_recycle`, `status`, `date`) VALUES
(8, 2, 'Untitled.png', 'plastic', 5, 'Approved', '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `public_complaint`
--

CREATE TABLE `public_complaint` (
  `cid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `comp_type` varchar(30) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `comp_sts` varchar(10) NOT NULL,
  `comp_desc` varchar(100) NOT NULL,
  `c_img` varchar(30) NOT NULL,
  `c_address` varchar(30) NOT NULL,
  `c_city` varchar(30) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_complaint`
--

INSERT INTO `public_complaint` (`cid`, `id`, `comp_type`, `c_phone`, `comp_sts`, `comp_desc`, `c_img`, `c_address`, `c_city`, `c_date`) VALUES
(1, 14, 'garbage', 8117830811, 'open', 'wasdfcaesfdcdase', 'f3.JPG', 'wsdwasfdcasw', 'bbsr', '2022-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `public_data`
--

CREATE TABLE `public_data` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `sig_in_dt` datetime NOT NULL,
  `file_name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_data`
--

INSERT INTO `public_data` (`id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `password`, `sig_in_dt`, `file_name`) VALUES
(14, 'Saugat', 'Mahapatra', '2003-08-14', 'M', 'saugatm3@gmail.com', 2147483647, 'asd', '2022-11-26 19:21:18', '2141013024.jpg'),
(20, 'sambit', 'meher', '2003-09-12', 'M', 'sambit@gmail.com', 2147483647, 'dvb', '2023-05-21 10:48:49', 'IMG_20220220_173809.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `public_work`
--

CREATE TABLE `public_work` (
  `wid` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `UNIT` varchar(10) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `idate` date DEFAULT NULL,
  `employee` varchar(30) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_work`
--

INSERT INTO `public_work` (`wid`, `id`, `address`, `UNIT`, `city`, `image`, `idate`, `employee`, `latitude`, `longitude`, `status`) VALUES
(28, 14, 'Boudh', 'UNIT-1', 'BHUBANESWAR', 'bus.png', '2022-11-28', '1', 20.2449896, 85.7974041, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `worker_data`
--

CREATE TABLE `worker_data` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(30) NOT NULL,
  `wor_email` varchar(30) NOT NULL,
  `wor_phone` bigint(15) NOT NULL,
  `wor_gender` varchar(3) NOT NULL,
  `wor_dp` varchar(30) NOT NULL,
  `wor_dept` varchar(30) NOT NULL,
  `wor_address` varchar(50) NOT NULL,
  `wor_city` varchar(30) NOT NULL,
  `w_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_data`
--

INSERT INTO `worker_data` (`worker_id`, `worker_name`, `wor_email`, `wor_phone`, `wor_gender`, `wor_dp`, `wor_dept`, `wor_address`, `wor_city`, `w_password`) VALUES
(1, 'santosh kumar', 'santosh@gmail.com', 3546284638, 'M', 'santosh.JPG', 'cleaning', 'jagamara', 'Bhubaneswar', 'vbn'),
(2, 'haris kumar', 'harish@gmail.com', 7865674534, 'M', 'harish.jpg', 'cleaning', 'jagamara', 'Bhubaneswar', 'zxc');

-- --------------------------------------------------------

--
-- Table structure for table `worker_work`
--

CREATE TABLE `worker_work` (
  `wid` int(11) NOT NULL,
  `w_image` varchar(30) NOT NULL,
  `worker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_work`
--

INSERT INTO `worker_work` (`wid`, `w_image`, `worker_id`) VALUES
(28, 'bus.png', 1),
(29, '', 2),
(28, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_care_work`
--
ALTER TABLE `health_care_work`
  ADD PRIMARY KEY (`hwid`);

--
-- Indexes for table `ppp_data`
--
ALTER TABLE `ppp_data`
  ADD PRIMARY KEY (`ppp_id`);

--
-- Indexes for table `ppp_work_update`
--
ALTER TABLE `ppp_work_update`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `public_complaint`
--
ALTER TABLE `public_complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `public_data`
--
ALTER TABLE `public_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_work`
--
ALTER TABLE `public_work`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `worker_data`
--
ALTER TABLE `worker_data`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health_care_work`
--
ALTER TABLE `health_care_work`
  MODIFY `hwid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppp_data`
--
ALTER TABLE `ppp_data`
  MODIFY `ppp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppp_work_update`
--
ALTER TABLE `ppp_work_update`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `public_complaint`
--
ALTER TABLE `public_complaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `public_data`
--
ALTER TABLE `public_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `public_work`
--
ALTER TABLE `public_work`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `worker_data`
--
ALTER TABLE `worker_data`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
