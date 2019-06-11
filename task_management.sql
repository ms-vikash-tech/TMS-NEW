-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2019 at 08:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `percentage_cgpa` double NOT NULL,
  `college_school` varchar(255) NOT NULL,
  `university_board` varchar(255) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `batch_no` int(11) NOT NULL,
  `time_slot` varchar(20) NOT NULL,
  `internship_type` tinyint(2) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`s_no`, `user_id`, `email`, `password`, `name`, `father_name`, `dob`, `qualification`, `percentage_cgpa`, `college_school`, `university_board`, `aadhar`, `address`, `mobile_no`, `registration_date`, `batch_no`, `time_slot`, `internship_type`, `status`) VALUES
(1, '', 'ravi8298922623@gmail.com', 'r', 'ravi', 'kripa', '0000-00-00', '12th', 73.8, 'Govt. High school', 'BSEB', 2147483647, '', '8298922623', '0000-00-00 00:00:00', 0, '10:00', 0, 1),
(8, '', 'nidhi@gmail.com', 'n', 'nidhi', 'jdhcsklj', '2015-05-21', '', 67, 'asdfsghfd', 'swregttr', 2147483647, '', '34567890', '0000-00-00 00:00:00', 0, '', 1, 1),
(9, '', 'nidhi@gmail.com', '', 'nidhi', 'jdhcsklj', '2015-05-21', '', 67, 'asdfsghfd', 'swregttr', 2147483647, '', '34567890', '0000-00-00 00:00:00', 0, '', 1, 1),
(12, '', 'vikash@gmail.com', '', 'Vikash', 'father name', '1887-09-13', '', 89, 'hjkjhjdjdj', 'dsdjsjdhsjd', 2147483647, '', '45678909876', '0000-00-00 00:00:00', 0, '', 2, 1),
(13, '', 'vikash@gmail.com', '', 'Vikash', 'father name', '1887-09-13', '', 89, 'hjkjhjdjdj', 'dsdjsjdhsjd', 2147483647, '', '45678909876', '0000-00-00 00:00:00', 0, '', 2, 1),
(14, '', 'vikash@gmail.com', '', 'Vikash', 'father name', '1887-09-13', '', 89, 'hjkjhjdjdj', 'dsdjsjdhsjd', 2147483647, '', '45678909876', '0000-00-00 00:00:00', 0, '', 2, 1),
(15, '', 'vikash@gmail.com', '', 'Vikash', 'father name', '1887-09-13', '', 89, 'hjkjhjdjdj', 'dsdjsjdhsjd', 2147483647, '', '45678909876', '0000-00-00 00:00:00', 0, '', 2, 1),
(16, '', 'vikash@gmail.com', '', 'Vikash', 'father name', '1887-09-13', '', 89, 'hjkjhjdjdj', 'dsdjsjdhsjd', 2147483647, '', '45678909876', '0000-00-00 00:00:00', 0, '', 2, 1),
(17, '', 'rohan@gmail.com', '', 'Rohan', 'name', '1889-09-12', '', 89, 'hjkjnjkdj', 'dkjkksdjk', 2147483647, '', '6788767887', '0000-00-00 00:00:00', 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worksheet`
--

CREATE TABLE `worksheet` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date_of_insertion` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worksheet`
--

INSERT INTO `worksheet` (`s_no`, `user_id`, `date_of_insertion`, `title`, `description`) VALUES
(1, 'ravi8298922623@gmail.com', '2019-06-08', 'today', 'jhbidsjoihvguhijcoksdbvhjsjbh'),
(2, 'ravi8298922623@gmail.com', '2019-06-10', 'gyuewihkfkn', 'heioljfdlsk'),
(3, 'ravi8298922623@gmail.com', '2019-06-11', 'TMS', 'Work on TMS Edit\n'),
(4, 'ravi8298922623@gmail.com', '2019-06-11', 'TMS', 'Work on TMS Edit\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `worksheet`
--
ALTER TABLE `worksheet`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `worksheet`
--
ALTER TABLE `worksheet`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
