-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2022 at 12:16 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakibrah_pds`
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`fld_id`, `fld_name`, `fld_status`, `created_at`) VALUES
(1, 'ML', 'active', '2022-11-16 06:11:12'),
(2, 'Image Processing', 'active', '2022-11-16 06:11:24'),
(3, 'Software Development', 'active', '2022-11-16 06:11:36'),
(4, 'NLP', 'active', '2022-11-16 06:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `msg_file` varchar(255) DEFAULT NULL,
  `msg_text` varchar(255) DEFAULT NULL,
  `fk_stdnt_id` int(20) DEFAULT NULL,
  `fk_teacher_id` int(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `msg_file`, `msg_text`, `fk_stdnt_id`, `fk_teacher_id`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test', 20, NULL, 'active', '2022-11-16 05:55:27', '2022-11-16 05:55:27'),
(2, NULL, 'Test message from me', 20, NULL, 'active', '2022-11-16 06:31:16', '2022-11-16 06:31:16'),
(3, NULL, 'Contact me asap', NULL, 2, 'active', '2022-11-16 00:36:44', '2022-11-16 00:36:44'),
(4, NULL, 'ok sir', 20, NULL, 'active', '2022-11-16 06:37:05', '2022-11-16 06:37:05'),
(5, NULL, 'Dear sir, my topic is ready', 20, NULL, 'active', '2022-11-16 06:42:35', '2022-11-16 06:42:35'),
(6, NULL, 'Share your topic.', NULL, 2, 'active', '2022-11-16 06:42:59', '2022-11-16 06:42:59'),
(7, NULL, 'I want to work with license detector', 20, NULL, 'active', '2022-11-16 06:43:30', '2022-11-16 06:43:30'),
(8, 'message-files/x3eGYUcaS7Bgoacn9QqRxkIvHUPhUaSVKXAj4SG4.rar', NULL, NULL, 2, 'active', '2022-11-23 10:02:41', '2022-11-23 10:02:41'),
(9, 'message-files/MqKCqjoSoYpBWODOKAVJcp2Imn9lA010OMwDFjjA.rar', NULL, 20, NULL, 'active', '2022-11-23 10:03:22', '2022-11-23 10:03:22'),
(10, NULL, 'Plese start your project', NULL, 2, 'active', '2022-11-23 15:31:08', '2022-11-23 15:31:08'),
(11, NULL, 'ok sir', 21, NULL, 'active', '2022-11-23 15:31:34', '2022-11-23 15:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `registered_fields`
--

CREATE TABLE `registered_fields` (
  `reg_fld_id` int(11) NOT NULL,
  `fk_timeline_id` int(20) NOT NULL,
  `fk_fld_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_fields`
--

INSERT INTO `registered_fields` (`reg_fld_id`, `fk_timeline_id`, `fk_fld_id`, `created_at`) VALUES
(1, 1, 4, '2022-11-16 06:14:52'),
(2, 1, 3, '2022-11-16 06:14:52'),
(3, 1, 2, '2022-11-16 06:14:52'),
(4, 1, 1, '2022-11-16 06:14:53');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_name`, `sem_year`, `sem_title`, `sem_status`, `created_at`) VALUES
(1, 'Fall', 2022, 'Fall - 2022', 'active', '2022-11-16 06:11:00');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT 'Assigned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_project`
--

INSERT INTO `std_project` (`std_proj_id`, `std_proj_name`, `fk_std_id`, `fk_teacher_id`, `fk_sem_id`, `public_project`, `created_at`, `status`) VALUES
(1, 'License detector', 20, 2, 1, 'yes', '2022-11-16 06:29:36', 'Assigned'),
(2, 'Ecommerce', 21, 2, 1, 'no', '2022-11-23 15:26:21', 'Done');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `std_reg_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`std_reg_id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `field14`, `field15`, `fk_std_id`, `fk_tl_id`, `fk_sem_id`, `created_at`, `std_reg_status`) VALUES
(1, 'Software Development', 'NLP', 'Image Processing', 'ML', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 1, 1, '2022-11-16 06:16:15', 'done'),
(2, 'Software Development', 'NLP', 'Image Processing', 'ML', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, 1, 1, '2022-11-23 15:25:42', 'done');

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `std_status` varchar(20) DEFAULT 'active',
  `fk_teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_varsity_id`, `std_name`, `std_email`, `std_phone`, `password`, `fk_std_project`, `fk_std_registration`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `std_status`, `fk_teacher_id`) VALUES
(20, 'CSE202103130', 'Sazzad', 'sazzad@gmail.com', '01679383667', '$2y$10$k.1Qf1CzvUXxnQzGhy67AepI7GaITFzZJEp74rJXjfcjJ0hU0zGY6', 1, 1, NULL, NULL, '2022-11-14 18:26:47', '2022-11-16 06:16:15', 'active', 2),
(21, 'ASDS202201130', 'Saikat', 'saikat@gmail.com', '01685472156', '$2y$10$InifSW35ynouN3JFgl0o6.BAgyRjtQS0DVjaQ1vr8ktjO8RSqi2Mu', 2, 2, NULL, NULL, '2022-11-16 05:57:07', '2022-11-23 15:25:42', 'active', 2);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tchr_id`, `tchr_name`, `tchr_email`, `tchr_phone`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Zahid Hasan', 'zahid@gmail.com', '017546677', '$2y$10$LiwOu.CPYoZdA7zF4M8lvuCBFZsUTw/Cu3ZVtYZ959TzVJGFSlp/a', NULL, NULL, '2022-11-16 06:08:39', '2022-11-16 06:08:39', 'active'),
(2, 'Liton Jude Rozario', 'liton@gmail.com', '01356482216', '$2y$10$0g9h.ndDBpP4JF9fwUnw5.6ZniIeDh075DMf4PCS9j8DUzaFCopiO', NULL, NULL, '2022-11-16 06:29:07', '2022-11-16 06:29:07', 'active');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`tl_id`, `tl_start`, `tl_end`, `fk_sem_id`, `tl_status`, `created_at`) VALUES
(1, '2022-11-16 06:14:00', '2022-11-30 06:14:00', 1, 'active', '2022-11-16 06:14:51');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registered_fields`
--
ALTER TABLE `registered_fields`
  MODIFY `reg_fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_project`
--
ALTER TABLE `std_project`
  MODIFY `std_proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `std_registration`
--
ALTER TABLE `std_registration`
  MODIFY `std_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tchr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
