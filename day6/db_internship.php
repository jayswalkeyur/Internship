-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 09:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `st_id` bigint(15) NOT NULL,
  `st_name` text NOT NULL,
  `st_gender` text NOT NULL,
  `st_dob` date NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_area` varchar(50) NOT NULL,
  `st_pincode` bigint(10) NOT NULL,
  `st_mobile` bigint(15) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_password` varchar(50) NOT NULL,
  `st_bloodgroup` varchar(5) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`st_id`, `st_name`, `st_gender`, `st_dob`, `st_address`, `st_area`, `st_pincode`, `st_mobile`, `st_email`, `st_password`, `st_bloodgroup`, `is_delete`) VALUES
(9, 'Jay Acha', 'male', '1998-06-15', '31 Devpath flats, nava vadaj', 'vadaj', 380013, 7226910888, 'jayacharya28@gmail.com', '145', 'A+', 0),
(456, 'kamla', 'male', '1999-03-08', '69 rajwadi gam ', 'ranip', 456789, 72269108, 'jayacharya28@gmail.com', '123', 'A+', 1),
(546, 'Jay Acharya', 'male', '2002-05-05', '31 Devpath flats, nava vadaj', 'ranip', 380013, 7226910888, 'jayacharya28@gmail.com', '165', 'A+', 1),
(789, 'Jay Acharya', 'male', '2003-03-18', '31 Devpath flats, nava vadaj', 'ranip', 380013, 7226910888, 'jayacharya28@gmail.com', '254', 'A+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` text NOT NULL,
  `user_mobile` bigint(10) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_mobile`, `is_delete`) VALUES
(1, 'Jay', 'male', 7226910888, 0),
(7, 'raju', 'male', 789984644, 0),
(8, 'ramesh', 'male', 564899, 1),
(9, 'jasu', 'male', 7894561231, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;