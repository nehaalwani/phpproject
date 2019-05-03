-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 04:47 AM
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
-- Database: `tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  `project_time` varchar(255) NOT NULL,
  `developers` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_description`, `project_time`, `developers`, `manager`, `project_status`) VALUES
(1, 'Managment Tool', 'uploads/1552992300A Form.docx', '7 Days', 'Nitu, Punit, Abas', 'Pawan', 'In process'),
(2, 'Login System', 'uploads/1552992443admin.php', '1 Week', 'Abas', 'Ankita', 'Completed'),
(3, 'Managment System', 'uploads/1552992512department_cs.php', '2  Days', 'Nitu, Hunnypreet', 'Ankita', 'In Process'),
(4, 'Face Recorgnisation', 'uploads/1552992735airport.sql', ' 20 Days', 'Hunnypreet, Abas', 'Pawan', 'In Process');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'manager\r\n'),
(3, 'developer\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `task_members` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `task_deadline` date NOT NULL,
  `task_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_name`, `project_name`, `task_members`, `task_description`, `task_deadline`, `task_status`) VALUES
(1, 'Check Validations', 'Login', 'Nitu', 'Check all the validation and process further', '2019-03-29', 'In Process'),
(2, 'Design UI', 'Login', 'Hunnypreet', 'Design a user friendly user interface', '2019-02-24', 'Experied'),
(3, 'Expression Validation', 'Face', 'Abas', ' validate all the expression using facial recorgnisation technique', '2019-03-27', 'In Process');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `user_name`, `user_pass`, `role_id`, `email`, `dob`, `gender`, `phone`) VALUES
(1, 'Anurag Singh', 'anu78', 'anu78', 1, 'anu.singh@gmail.com', '1990-10-12', 'Male', 9087654312),
(2, 'Pawan Raj', 'pkraj', 'pkraj', 2, 'pawan@gmail.com', '1993-09-08', 'Male', 9087653412),
(3, 'Nitu', 'nitu45', 'nitu45', 3, 'nitu456@gmail.com', '1980-02-10', 'Female', 6789054321),
(4, 'Punit kumar', 'punitkt89', '67ty54', 3, 'punittasharma@gmail.com', '1889-07-12', 'Male', 9087651234),
(5, 'Ankita', 'ank90', 'ankit56', 2, 'ankita@gmail.com', '1997-08-07', 'Female', 6785443212),
(6, 'Hunnypreet', 'hunny', 'hunny123', 3, 'hunny@gmail.com', '1997-12-13', 'Female', 8976665656),
(7, 'Abas Khan', 'abaskh', 'abas98', 3, 'abas@gmail.com', '1998-02-12', 'Male', 9000897665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
