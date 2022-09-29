-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 09:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
(4, 'Sajjad', 'mail@mail.com', '0167895556', '$2y$10$O2SKG83Pn.pI8UEQDqmqauLx.5md2oIj1qcxdSC8Q8rL3t5FsNc8K', NULL, NULL, '2022-09-28 06:59:11', NULL, 'inactive', 1),
(5, 'Gausul Azam', 'gausul@mail.com', '01655489', '$2y$10$SX6SPEQS62aOb8jpUv8vKOlGEIxtUjThm2zo5u.dOaa.MxT2bwBhm', NULL, NULL, '2022-09-28 08:33:51', NULL, 'active', 1),
(16, 'Tushi', 'fsaf@gs.dd', '0167945453', '$2y$10$owvpV/I59MRAB4M/Xo/g8eyt/F/XGeeCuHyI6sL4a7SLMn75E/B7m', NULL, NULL, '2022-09-28 10:04:01', NULL, 'active', 1);

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
(2, 'test', 'test@mail.com', '012545877', '$2y$10$o5rjixZNjPpQu2oenCgKVuuz2Bs2NwdbtQjTxaUak.S6nT2ytdVwa', NULL, NULL, '2022-09-29 06:11:25', '2022-09-29 06:11:25', 'active');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
