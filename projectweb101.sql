-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 08:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb101`
-- 
-- -------------------------------------------------------- 
--
-- Table structure for table `tbl_invitation`
--

CREATE TABLE `tbl_invitation` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invitation`
--

INSERT INTO `tbl_invitation` (`id`, `email`, `created_at`, `status`) VALUES
(1, 'jrcrubenial@sdssu.edu.ph', '2021-10-21 14:32:37', 0),
(2, 'rdcadenas@sdssu.edu.ph', '2021-10-21 15:36:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registers`
--

CREATE TABLE `tbl_registers` (
  `id` int(11) NOT NULL,
  `id_` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registers`
--

INSERT INTO `tbl_registers` (`id`, `id_`, `title`, `fullname`, `email`, `gender`, `mobile`, `affiliation`, `designation`, `created_at`, `updated_at`, `active`) VALUES
(4, '616ce156c6eb7', 'fds', 'fdsf', 'rdcadenas1@gmail.com', 'Male', '3244324', 'fdsfds', 'ddsfdsfd', '', '', ''),
(5, '616d27f321cdd', 'hello world', 'Bob Uy pig', 'rdcadenas1@gmail.com', 'Male', '09312321341412', 'fdsfdsf', 'dsfsdfsdfds', '', '', ''),
(6, '6171058f02cdc', 'fdsaf', 'Bob Uy pig', 'rdcadenas1@gmail.com', 'Male', '234242424', 'fsdfdsfsd', 'fdsfsdfs', '', '', ''),
(7, '61710652b77ec', 'fdsfs', 'fsfds', 'rdcadenas1@gmail.com', 'Female', '3244324', 'fsfsfs', 'fs', '', '', ''),
(8, '617119117a770', 'sadasds', 'sadsadsa', 'dsadsa@gmail.com', 'Male', '4324234324', 'fsdfsd', 'fsfsfs', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `id_` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `id_`, `fname`, `mname`, `lname`, `username`, `pass`, `role`, `active`) VALUES
(2, '6163872fa1b48', 'Tom', 'Daano', 'Cadenas', 'admin', '$2y$10$qS9DDi5f.WRBUkH2sxPIguxdrXqOZZx8gESJTVoqFR4QO1NBCnDGi', 'superadmin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_invitation`
--
ALTER TABLE `tbl_invitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registers`
--
ALTER TABLE `tbl_registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_` (`id_`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_invitation`
--
ALTER TABLE `tbl_invitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_registers`
--
ALTER TABLE `tbl_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
