-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 02:27 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentName` varchar(120) NOT NULL,
  `userReview` varchar(120) NOT NULL,
  `userSuggestion` varchar(120) NOT NULL,
  `adminSuggestion` varchar(120) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`, `userReview`, `userSuggestion`, `adminSuggestion`, `status`) VALUES
(1, 'volvo', 'sff', 'Very Good', 'jhfjh', 'issue'),
(2, 'airport@gmail.com', 'sff', 'bdbdd', 'fjhfjh', 'issue'),
(3, 'checkin@gmail.com', '', '', '', 'issue'),
(4, 'baggage@gmail.com', 'sdasda', 'Good', '', 'issue'),
(5, 'food@gmail.com', 'nice good ', 'bjbjb hkha ', 'jhjgb', 'issue'),
(6, 'food@gmail.com', 'dssgsg', 'vgvhvh', 'uoity hf ', 'issue'),
(7, 'baggage@gmail.com', 'dssgsg', 'vgvhvh', 'jhhjb', 'issue'),
(8, 'checkin@gmail.com', 'dssgsg', 'vgvhvh', 'you can improve more', 'issue'),
(9, 'pickup@gmail.com', 'dssgsg', 'vgvhvh', 'good suggestions', 'issue');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `baggage` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `cleanliness` varchar(255) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `waiting_area` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `sbox` varchar(255) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `name`, `review`, `experience`, `checkin`, `baggage`, `food`, `security`, `cleanliness`, `pickup`, `waiting_area`, `facilities`, `rate`, `sbox`, `status`) VALUES
(1, 0, 'njhsdjf', 'dssgsg', 'Very Good', 'Good', 'Good', '', 'Very Good', 'Very Good', 'Very Good', 'Good', '', 3, 'vgvhvh', 'done'),
(2, 0, 'hjskhskjhs', 'sff', 'Very Good', 'Good', 'Good', 'Very Good', 'Good', 'Good', 'Good', 'Good', '', 3, 'bdbdd', 'done'),
(3, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 'done'),
(5, 0, 'mitali', 'nice good ', 'Very Good', 'Good', 'Fair', 'Poor', 'Fair', 'Good', '', '', '', 1, 'bjbjb hkha ', 'done'),
(6, 0, 'naman', '', '', '', '', '', '', '', '', '', '', 0, '', 'done'),
(7, 0, 'praveen', '', '', '', '', '', '', '', '', '', '', 0, '', 'done'),
(8, 0, '', 'Type here', '', '', '', '', '', '', '', '', '', 2, 'Type here', ''),
(9, 0, '', 'Type here', '', '', '', '', '', '', '', '', '', 2, 'Type here', ''),
(10, 0, '', 'it was an amazing journey.', 'Very Good', 'Good', 'Good', 'Good', 'Good', 'Very Good', 'Good', '', 'Good', 4, 'Type here', ''),
(11, 0, '', 'adgfdfc uhyuh ', 'Very Good', 'Good', 'Fair', 'Poor', 'Fair', 'Good', 'Good', 'Good', 'Very Good', 4, 'vvbvnb ibjb ', 'done'),
(12, 0, '', 'Type here', 'Very Good', 'Good', 'Fair', 'Good', 'Very Good', 'Very Good', 'Good', 'Good', '', 2, 'very ggod amazing  fantastic', 'done'),
(13, 0, '', 'nice \r\nbest application', 'Very Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Good', 'Very Good', 4, 'you can improve ', 'done'),
(14, 0, '', 'lhjjkhkjhj', 'Very Good', 'Very Good', 'Very Good', '', '', '', '', '', '', 2, 'Type here', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `gender`, `phone`, `email`, `password`) VALUES
(1, 'naman', 'singh', '1234567890', 'Male', 'naman@gmail.com', ''),
(2, 'praveen', 'sharma', '7890653412', 'Male', 'pr.df@gmail.com', '908765'),
(3, 'ankii', 'agarwal', '7890653412aki@gmail.com', 'Female', 'aki@gmail.com', '098'),
(4, 'ankita', 'sharma', '8824037784', 'Female', 'ankitasharma@gmail.com', 'sanorita'),
(5, 'suman', 'sharma', '8907654312', 'Female', 'suman@gmail.com', '345'),
(6, 'pawan', 'singh', '8907652345', 'Male', 'pw@gmail.com', '789'),
(7, 'dev', 'kumar', '5678432167', 'Male', 'devkum@gmail.com', '6789'),
(8, '', '', '', '', '', ''),
(9, 'punit', 'akhil', '6789045321', 'Male', 'pu@gmail.com', '5678'),
(10, 'hermoine', 'granger', '9834567901', 'Female', 'granger@gmail.com', 'rita'),
(11, 'arun', 'bhatra', '7890654312', 'Male', 'ar@gmail.com', '7890'),
(12, 'arun', 'bhatra', '7890654312', 'Male', 'ar@gmail.com', '7890'),
(13, 'admin', 'admin', 'male', '9876543210', 'admin@gmail.com', 'admin'),
(14, 'me', 'e', 'female', '9632587410', 'airport@gmail.com', 'airport'),
(15, 'checkin', '.', 'male', '7890654312', 'checkin@gmail.com', 'checkin'),
(16, 'baggage', '.', 'male', '7890654312', 'baggage@gmail.com', 'baggage'),
(17, 'food', '.', 'male', '7890654312', 'food@gmail.com', 'food'),
(18, 'security', '.', 'male', '7890654312', 'security@gmail.com', 'security'),
(19, 'cleanliness', '.', 'male', '7890654312', 'cleanliness@gmail.com', 'cleanliness'),
(20, 'pickup', '.', 'male', '7890654312', 'pickup@gmail.com', 'pickup'),
(21, 'waitingarea', '.', 'male', '7890654312', 'waitingarea@gmail.com', 'waitingarea'),
(22, 'facilities', '.', 'male', '7890654312', 'facilities@gmail.com', 'facilities'),
(23, 'mitali', 'jangid', '8907654238', 'Female', 'mj@gmail.com', 'mj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
