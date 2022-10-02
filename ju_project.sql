-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 08:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ju_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `fld_id` int(11) NOT NULL,
  `fld_name` varchar(200) DEFAULT NULL,
  `fld_status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`fld_id`, `fld_name`, `fld_status`, `created_at`) VALUES
(1, 'Data Science and ML', 'active', '2022-09-30 18:50:56'),
(2, 'Software Eng', 'active', '2022-09-30 18:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL,
  `sem_name` varchar(20) DEFAULT NULL,
  `sem_year` int(10) DEFAULT NULL,
  `sem_title` varchar(50) DEFAULT NULL,
  `sem_status` varchar(50) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_name`, `sem_year`, `sem_title`, `sem_status`, `created_at`) VALUES
(1, 'Fall', 2022, 'Fall - 2022', 'active', '2022-09-30 08:13:23'),
(2, 'Summer', 2021, 'Summer - 2021', 'active', '2022-09-30 08:43:48'),
(3, 'Spring', 2022, 'Spring - 2022', 'active', '2022-10-02 09:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(30) DEFAULT NULL,
  `std_email` varchar(50) DEFAULT NULL,
  `std_phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `std_status` varchar(20) DEFAULT 'active',
  `fk_teacher_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_email`, `std_phone`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `std_status`, `fk_teacher_id`) VALUES
(4, 'Sajjad', 'mail@mail.com', '0167895556', '$2y$10$40JWpNoEL4DlABxutbys8eO5Bv/zpL3/Ei.ObQUY4tX32LxHL4VPK', NULL, NULL, '2022-09-28 06:59:11', NULL, 'active', 1),
(5, 'Gausul Asam', 'gausul@mail.com', '01655489', '$2y$10$SX6SPEQS62aOb8jpUv8vKOlGEIxtUjThm2zo5u.dOaa.MxT2bwBhm', NULL, NULL, '2022-09-28 08:33:51', NULL, 'active', 1),
(16, 'Tushi', 'fsaf@gs.dd', '0167945453', '$2y$10$owvpV/I59MRAB4M/Xo/g8eyt/F/XGeeCuHyI6sL4a7SLMn75E/B7m', NULL, NULL, '2022-09-28 10:04:01', NULL, 'inactive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tchr_id` int(11) NOT NULL,
  `tchr_name` varchar(30) DEFAULT NULL,
  `tchr_email` varchar(30) DEFAULT NULL,
  `tchr_phone` varchar(15) DEFAULT NULL,
  `tchr_password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tchr_id`, `tchr_name`, `tchr_email`, `tchr_phone`, `tchr_password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'test', 'test@email.com', '0165878999', '$2y$10$kYKjlwcXjLiUBy7TaSimKugo/BmTZHgOxwwPlWnJJtQoCzs0cGgk.', NULL, NULL, '2022-09-29 06:04:30', '2022-09-29 06:04:30', 'active'),
(2, 'test ok', 'test@mail.com', '012545877', '$2y$10$gZFvA/MTX9hmg20vy0udOeJJ0OBVCFSkn74zBbLPjJm5yOuOqFumm', NULL, NULL, '2022-09-29 06:11:25', '2022-09-29 06:11:25', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `tl_id` int(11) NOT NULL,
  `tl_start` timestamp NULL DEFAULT NULL,
  `tl_end` timestamp NULL DEFAULT NULL,
  `fk_sem_id` int(11) DEFAULT NULL,
  `fk_fld_id` varchar(255) DEFAULT NULL,
  `tl_status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`tl_id`, `tl_start`, `tl_end`, `fk_sem_id`, `fk_fld_id`, `tl_status`, `created_at`) VALUES
(3, '2022-10-03 18:45:00', '2022-10-04 18:45:00', 2, '[\"2\"]', 'active', '2022-10-02 18:49:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tchr_id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`tl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tchr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
