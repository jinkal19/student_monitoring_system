-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 12:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `fname`, `email`, `password`, `cpassword`) VALUES
(13, 'Admin', 'admin@gmail.com', 'admin1234', 'admin1234'),
(14, 'Pallavi', 'pallavisingh.ps25@gmail.com', 'pal1234', 'pal1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `st_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile_num` int(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `aadhar` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`st_id`, `fname`, `lname`, `father_name`, `mother_name`, `email`, `birth_date`, `city`, `mobile_num`, `nation`, `district`, `aadhar`, `state`, `gender`, `photo`) VALUES
(7, 'Sonali', 'Sharma', 'Dev Sharma', 'Vashali Sharma', 'sona@gmail.com', '2000-06-15', 'Bangalore', 2147483647, ' Indian', 'RT Nagar', 47851651, 'Karnataka', 'female', 'girl2.jpg'),
(8, 'Parth', 'Joshi', 'Bharat Joshi', 'Harsha Joshi', 'pjoshi1999@yahoo.com', '2000-09-01', 'Bangalore', 2147483647, ' Indian', 'CBI ', 2147483647, 'Karnataka', 'male', 'boy2.jpg'),
(9, 'Kurnal', 'Singh', 'Manpreet Singh', 'Jasmine Singh', 'singh1967@outlook.com', '1999-10-15', 'Bangalore', 2147483647, 'Indian', 'Ganganagar', 456798123, 'Karnataka', 'male', 'boy1.jpg'),
(10, 'Devanshi', 'Thanki', 'Raj Thanki', 'Joti Thanki', 'dev1234@gmail.com', '1999-11-11', 'Bangalore', 2147483647, 'Indian', 'Jallahalli', 459713268, 'Karnataka', 'female', 'girl3.jpg'),
(11, 'Khushi', 'S', 'Sanketh S', 'Vashali S', 'khus@gmail.com', '1999-06-17', 'Bangalore', 2147483647, 'Indian', 'Sanjay Nagar', 2147483647, 'Karnataka', 'female', 'girl1.jpg'),
(12, 'Rishi', 'Shah', 'Das Shah', 'Preeti Shah', 'shahrishi@gmail.com', '1998-03-10', 'Bangalore', 2147483647, ' Indian', 'Hebbal', 2147483647, 'Karnataka', 'male', 'boy3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detail`
--

CREATE TABLE `teacher_detail` (
  `td_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_detail`
--

INSERT INTO `teacher_detail` (`td_id`, `fname`, `lname`, `email`, `birth_date`, `city`, `mobile_num`, `nation`, `aadhar`, `subject`, `gender`, `photo`) VALUES
(9, 'Raj ', 'Shekhar', 'raj@gmail.com', '1985-06-22', 'Bangalore', '88662245', ' Indian', '784781155', 'Computer', 'male', 'sir1.jpg'),
(10, 'Siddharth', 'S', 'sid@gmail.com', '1983-12-26', 'Pune', '83647195', ' Indian', '45568179', 'PE', 'male', 'sir3.jpg'),
(11, 'Hina ', 'Khan', 'hina@gmail.com', '1986-10-15', 'Delhi', '55854622', 'Indian', '445125548', 'Biology', 'female', 'maam1.jpg'),
(12, 'Shilpa', 'SS', 'ssshipa@yahoo.com', '0000-00-00', 'Bangalore', '7541689531', ' Indian', '45489489', 'Biology', 'female', 'maam3.jpg'),
(13, 'Vikas', 'Das', 'das@gmail.com', '1985-06-15', 'Pune', '8674692131', ' Indian', '457716581', 'Geography ', 'male', 'sir2.jpg'),
(14, 'Jayshree', 'Raj', 'jayraj@outlook.com', '1984-12-21', 'Delhi ', '7856415987', ' Indian', '4571596645', 'History', 'female', 'maam2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  ADD PRIMARY KEY (`td_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `st_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  MODIFY `td_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
