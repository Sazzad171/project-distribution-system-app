-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 03:07 PM
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
-- Table structure for table `admin-user`
--

CREATE TABLE `admin-user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin-user`
--

INSERT INTO `admin-user` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `email_verified_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$k.1Qf1CzvUXxnQzGhy67AepI7GaITFzZJEp74rJXjfcjJ0hU0zGY6', '', '2022-10-15 11:01:59', '2022-10-31 18:54:30', 'active', NULL);

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
(2, 'Software Eng', 'active', '2022-09-30 18:51:42'),
(3, 'Image Processing', 'active', '2022-10-14 16:49:00'),
(4, 'Software Testing', 'active', '2022-11-01 16:56:50'),
(5, 'ML', 'active', '2022-11-01 16:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `msg_text` varchar(255) DEFAULT NULL,
  `fk_stdnt_id` int(20) DEFAULT NULL,
  `fk_teacher_id` int(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registered_fields`
--

CREATE TABLE `registered_fields` (
  `reg_fld_id` int(11) NOT NULL,
  `fk_timeline_id` int(20) NOT NULL,
  `fk_fld_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_fields`
--

INSERT INTO `registered_fields` (`reg_fld_id`, `fk_timeline_id`, `fk_fld_id`, `created_at`) VALUES
(3, 10, 2, '2022-10-05 07:41:00'),
(4, 10, 1, '2022-10-05 07:41:00'),
(5, 11, 2, '2022-10-05 08:35:44'),
(6, 12, 2, '2022-10-05 08:55:18'),
(7, 11, 2, '2022-10-05 08:56:18'),
(8, 11, 1, '2022-10-05 08:56:18'),
(9, 10, 2, '2022-10-05 08:56:37'),
(10, 10, 1, '2022-10-05 08:56:37'),
(11, 11, 3, '2022-10-14 16:55:00'),
(12, 11, 2, '2022-10-14 16:55:00'),
(13, 11, 1, '2022-10-14 16:55:00'),
(14, 13, 3, '2022-10-17 16:18:50'),
(15, 13, 2, '2022-10-17 16:18:50'),
(16, 13, 1, '2022-10-17 16:18:50'),
(17, 10, 3, '2022-10-24 17:55:37'),
(18, 10, 2, '2022-10-24 17:55:37'),
(19, 10, 1, '2022-10-24 17:55:37'),
(20, 15, 5, '2022-11-01 17:25:26'),
(21, 15, 4, '2022-11-01 17:25:26'),
(22, 15, 3, '2022-11-01 17:25:26'),
(23, 15, 2, '2022-11-01 17:25:26'),
(24, 15, 1, '2022-11-01 17:25:26');

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
(2, 'Summer', 2022, 'Summer - 2022', 'active', '2022-09-30 08:43:48'),
(3, 'Spring', 2022, 'Spring - 2022', 'active', '2022-10-02 09:39:50'),
(4, 'Spring', 2023, 'Spring - 2023', 'active', '2022-11-01 16:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `std_project`
--

CREATE TABLE `std_project` (
  `std_proj_id` int(11) NOT NULL,
  `std_proj_name` varchar(255) DEFAULT NULL,
  `fk_std_id` int(20) DEFAULT NULL,
  `fk_teacher_id` int(20) DEFAULT NULL,
  `fk_sem_id` int(20) DEFAULT NULL,
  `public_project` varchar(50) NOT NULL DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'Assigned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_project`
--

INSERT INTO `std_project` (`std_proj_id`, `std_proj_name`, `fk_std_id`, `fk_teacher_id`, `fk_sem_id`, `public_project`, `created_at`, `status`) VALUES
(6, NULL, 1, 2, 1, 'no', '2022-10-26 16:16:32', 'Assigned'),
(7, NULL, 17, 2, 1, 'no', '2022-10-31 19:09:43', 'Assigned'),
(8, 'License detector', 19, 3, 4, 'no', '2022-11-01 18:41:00', 'Assigned'),
(9, 'PM System', 5, 3, 4, 'yes', '2022-11-05 15:40:16', 'Started');

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

CREATE TABLE `std_registration` (
  `std_reg_id` int(11) NOT NULL,
  `field1` varchar(255) DEFAULT NULL,
  `field2` varchar(255) DEFAULT NULL,
  `field3` varchar(255) DEFAULT NULL,
  `field4` varchar(255) DEFAULT NULL,
  `field5` varchar(255) DEFAULT NULL,
  `field6` varchar(255) DEFAULT NULL,
  `field7` varchar(255) DEFAULT NULL,
  `field8` varchar(255) DEFAULT NULL,
  `field9` varchar(255) DEFAULT NULL,
  `field10` varchar(255) DEFAULT NULL,
  `field11` varchar(255) DEFAULT NULL,
  `field12` varchar(255) DEFAULT NULL,
  `field13` varchar(255) DEFAULT NULL,
  `field14` varchar(255) DEFAULT NULL,
  `field15` varchar(255) DEFAULT NULL,
  `fk_std_id` int(20) DEFAULT NULL,
  `fk_tl_id` int(20) DEFAULT NULL,
  `fk_sem_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `std_reg_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`std_reg_id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `field14`, `field15`, `fk_std_id`, `fk_tl_id`, `fk_sem_id`, `created_at`, `std_reg_status`) VALUES
(6, 'Software Eng', 'Data Science and ML', 'Image Processing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 10, 1, '2022-10-24 18:44:53', 'done'),
(20, 'Select Field/Area', 'Select Field/Area', 'Select Field/Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 10, 1, '2022-10-31 18:51:47', 'done'),
(21, 'Software Eng', 'Software Testing', 'Data Science and ML', 'Image Processing', 'Select Field/Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 15, 4, '2022-11-01 17:51:57', 'done'),
(22, 'Software Testing', 'Software Eng', 'ML', 'Data Science and ML', 'Image Processing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 15, 4, '2022-11-05 15:35:31', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `std_varsity_id` varchar(255) DEFAULT NULL,
  `std_name` varchar(30) DEFAULT NULL,
  `std_email` varchar(50) DEFAULT NULL,
  `std_phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fk_std_project` int(20) DEFAULT NULL,
  `fk_std_registration` int(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `std_status` varchar(20) DEFAULT 'active',
  `fk_teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_varsity_id`, `std_name`, `std_email`, `std_phone`, `password`, `fk_std_project`, `fk_std_registration`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `std_status`, `fk_teacher_id`) VALUES
(1, 'cse234', 'Sajjad', 'mail@mail.com', '0167895556', '$2y$10$3Qj6W.GwLKR4QDrmMYMLS.UhNEZuPkOGMzulzigFGV40i68Q7H01G', 6, 6, NULL, NULL, '2022-09-28 06:59:11', '2022-10-31 12:41:15', 'active', 1),
(5, 'cse200', 'Gausul Asam', 'gausul@mail.com', '016554893433', '$2y$10$1PPnSuBf4eV9fMf25bLP2ebJ9EHGBcNjMBI6xFzWrUPqN15XkxMK.', 9, 22, NULL, NULL, '2022-09-28 08:33:51', '2022-11-05 09:59:02', 'active', 3),
(16, NULL, 'Tushi', 'fsaf@gs.dd', '0167945453', '$2y$10$k.1Qf1CzvUXxnQzGhy67AepI7GaITFzZJEp74rJXjfcjJ0hU0zGY6', NULL, NULL, NULL, NULL, '2022-09-28 10:04:01', NULL, 'inactive', 1),
(17, 'cse100', 'Bristy', 'br@mail.com', '01679453331', '$2y$10$k.1Qf1CzvUXxnQzGhy67AepI7GaITFzZJEp74rJXjfcjJ0hU0zGY6', 7, 20, NULL, NULL, '2022-10-24 18:56:12', '2022-10-31 12:51:48', 'active', 1),
(19, 'asds201', 'Saikat Chandra Himel', 'saikat@gmail.com', '016788555', '$2y$10$jI1DYhws42yCI3tVV9CRzueVZPEATrucVFZdJP37nBoOpYC/dQ6Vi', 8, 21, NULL, NULL, '2022-11-01 16:38:04', '2022-11-01 11:51:57', 'active', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tchr_id` int(11) NOT NULL,
  `tchr_name` varchar(30) DEFAULT NULL,
  `tchr_email` varchar(30) DEFAULT NULL,
  `tchr_phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tchr_id`, `tchr_name`, `tchr_email`, `tchr_phone`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'test', 'test@email.com', '0165878999', '$2y$10$kYKjlwcXjLiUBy7TaSimKugo/BmTZHgOxwwPlWnJJtQoCzs0cGgk.', NULL, NULL, '2022-09-29 06:04:30', '2022-09-29 06:04:30', 'active'),
(2, 'test ok', 'test@mail.com', '012545877', '$2y$10$gZFvA/MTX9hmg20vy0udOeJJ0OBVCFSkn74zBbLPjJm5yOuOqFumm', NULL, NULL, '2022-09-29 06:11:25', '2022-09-29 06:11:25', 'active'),
(3, 'Liton Jude Rozario', 'liton@gmail.com', '01844353245', '$2y$10$Joau6ijoiWexlMUJNR4RM.DbFn6TMtkcKYLNhi5RHUJ7JVELlI0rq', NULL, NULL, '2022-11-01 16:46:53', '2022-11-06 08:03:33', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `tl_id` int(11) NOT NULL,
  `tl_start` timestamp NULL DEFAULT NULL,
  `tl_end` timestamp NULL DEFAULT NULL,
  `fk_sem_id` int(11) DEFAULT NULL,
  `tl_status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`tl_id`, `tl_start`, `tl_end`, `fk_sem_id`, `tl_status`, `created_at`) VALUES
(10, '2022-10-10 07:40:00', '2022-10-26 16:13:55', 1, 'active', '2022-10-05 07:41:00'),
(11, '2022-10-24 08:35:00', '2022-09-25 08:35:00', 2, 'active', '2022-10-05 08:35:44'),
(12, '2022-10-10 07:40:00', '2022-09-20 07:40:00', 3, 'active', '2022-10-05 08:55:18'),
(15, '2022-11-01 17:24:00', '2022-11-10 17:25:00', 4, 'active', '2022-11-01 17:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-user`
--
ALTER TABLE `admin-user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `registered_fields`
--
ALTER TABLE `registered_fields`
  ADD PRIMARY KEY (`reg_fld_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `std_project`
--
ALTER TABLE `std_project`
  ADD PRIMARY KEY (`std_proj_id`);

--
-- Indexes for table `std_registration`
--
ALTER TABLE `std_registration`
  ADD PRIMARY KEY (`std_reg_id`);

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
-- AUTO_INCREMENT for table `admin-user`
--
ALTER TABLE `admin-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_fields`
--
ALTER TABLE `registered_fields`
  MODIFY `reg_fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_project`
--
ALTER TABLE `std_project`
  MODIFY `std_proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `std_registration`
--
ALTER TABLE `std_registration`
  MODIFY `std_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tchr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
