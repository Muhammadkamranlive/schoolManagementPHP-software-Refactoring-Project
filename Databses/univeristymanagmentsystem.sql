-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 07:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univeristymanagmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `placeOfBirth` varchar(100) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstName`, `lastName`, `Gender`, `dateOfBirth`, `address`, `Phone`, `email`, `placeOfBirth`, `note`) VALUES
(1, 'Mom', 'Vannak', 'Male', '1991-03-01', 'Phnom Penh', 88, 'vannakkmum@gmail.com', 'Takeo Province', 'Student'),
(2, 'Chon', 'Phearak', 'Male', '1990-05-04', '  Phnom Penh', 15, 'phearakchon@yahoo.com  ', 'Takeo Province  ', 'Student'),
(3, 'Soa', 'Muny', 'Male', '1988-05-05', '   Phnom Penh', 97, 'munysoa@gmail.com   ', 'Takeo Province   ', 'Student'),
(4, 'Sok', 'Cheatha', 'Female', '1989-06-06', 'Phnom Penh', 99, 'cheatasok@gmail.com', 'Kompot', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `placeOfBirth` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `salary` bigint(20) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `married` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `firstName`, `lastName`, `Gender`, `dateOfBirth`, `address`, `Phone`, `email`, `placeOfBirth`, `note`, `salary`, `degree`, `married`) VALUES
(2, 'Pheng', 'Tola', 'Male', '1986-03-08', 'Kompong Cham Province', 0, '016 572 393', 'tolapheng@gmail.com', 'Teacher and Staff', 1500, 'Bachelor', 'Yes'),
(3, 'Sann', 'Vannthoeun', 'Male', '1990-07-03', 'Kandal Province', 0, '087 666 55 ', 'vannthoeunsann@gmail.com', 'English', 1000, 'Bachelor', 'Yes'),
(4, 'Tang', 'Hay', 'Male', '0000-00-00', 'Kroches', 0, '099 77 66 33', 'haytang@gmail.com', 'network', 1000, 'Bachelor', 'Yes'),
(5, 'Chi', 'Kim  Y', 'Male', '0000-00-00', 'Phnom Penh', 0, '097 66 55 423', 'kimychi@gmail.com', 'VB', 1500, 'Bachelor', 'Yes'),
(6, 'Sann', 'Sotherath', 'Male', '1985-02-01', 'Kandal Province', 0, '012 33 44 55', 'sotherathsann@gmail.com', 'Database', 1300, 'Bachelor', 'Yes'),
(17, 'kamran', 'kami', 'male', '2021-07-31T09:55', 'ntu  fsd pakistan', 2147483647, 'muhammadkamranntu@gmail.com', 'fsd', 'Teachers', 7656676, 'BS', 'Single'),
(18, 'kamran', 'kami', 'male', '2021-07-31T09:57', 'ntu  fsd pakistan', 2147483647, 'muhammadkamranntu@gmail.com', 'fsd', 'Student\r\n', 7656676, 'BS', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `typeOfUser` varchar(50) NOT NULL,
  `notForUser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `typeOfUser`, `notForUser`) VALUES
(1, 'admin', 'admin', 'Admin', 'Kamran'),
(2, 'admin', 'admin', 'creator', 'creator'),
(3, 'everyone', 'viewonly', 'visitor', 'visitor'),
(4, 'vannak', 'vannak', 'creator', 'assignment\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
