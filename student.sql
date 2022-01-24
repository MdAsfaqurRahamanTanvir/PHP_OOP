-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `phone`) VALUES
('tanvir', 'tanvir', 10254);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `email`, `phone`, `address`, `gender`, `image`) VALUES
(2, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1258, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643735306533386631302e6a7067),
(3, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643735613062356530392e6a7067),
(4, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643736326531326239392e6a7067),
(5, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643738386436373664352e6a7067),
(6, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643739333035623861632e6a7067),
(7, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643739386663346263302e6a7067),
(8, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643766353934313666382e6a7067),
(9, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643830656339626238322e6a7067),
(10, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643831633336656536652e6a7067),
(11, 'Md. Hasibur Rahman', 'hasiburrahman7@gmail.com', 1624491666, '139/1 Pathantola,Dhamrai,Dhaka', 1, 0x75706c6f6164732f363165643831633930633764612e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
