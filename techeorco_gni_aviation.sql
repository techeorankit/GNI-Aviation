-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2025 at 04:08 PM
-- Server version: 8.0.41
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techeorco_gni_aviation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'd0aabe9a362cb2712ee90e04810902f3'),
(2, 'admin@gmail.com', 'Ravinder');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int NOT NULL,
  `notification_cont` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification_cont`, `date`) VALUES
(3, '<strong>Jewar International Airport Phase-1 Construction Update </strong> – Work progressing at rapid speed. Latest reports available now.', '2025-11-26 11:19:01'),
(4, '<strong>Land Acquisition Notice (Jewar Area) </strong> – New guidelines released. Farmers are advised to review updated compensation details.', '2025-11-26 11:19:25'),
(5, '<strong>Traffic Advisory  </strong> – Diversion near Jewar–Bulandshahr Road due to ongoing development work.', '2025-11-26 11:19:33'),
(6, '<strong>Industrial Plot Allocation </strong> – YEIDA announces new industrial plot scheme for Jewar region.', '2025-11-26 11:19:43'),
(7, '<strong>Public Hearing Announcement </strong> – Environmental clearance meeting scheduled next week.', '2025-11-26 11:19:50'),
(8, '<strong>Metro Expansion Update</strong> – Proposed Noida–Jewar Metro route approved for DPR review.', '2025-11-26 11:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `registration_number` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `language` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apply_for` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exam_location` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `exam_venue` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `registration_number`, `first_name`, `last_name`, `email`, `phone`, `dob`, `language`, `apply_for`, `status`, `password`, `exam_location`, `doe`, `exam_time`, `exam_venue`, `date`) VALUES
(1, '990710', 'Ravinder', 'Gupta', 'ravinderg631@gmail.com', '9315585244', '1999-03-21', 'English', 'CSA Application', 'Active', 'admin', 'test', '2025-11-22', '14:00:00', 'testdfdff dfdfdf ', '2025-11-14 09:42:22'),
(2, '999185', 'DEEP', 'SHIKHA', 'DECENTDEEP15@GMAIL.COM', '9958373710', '1991-04-15', 'English', 'CSA Application', 'InActive', 'rock@12345', NULL, NULL, NULL, NULL, '2025-11-22 07:55:10'),
(3, '530846', 'Deepak', 'Kumar', 'deepak@gmail.com', '9315585244', '2000-01-01', 'English', 'CSA Application', 'InActive', 'admin', NULL, NULL, NULL, NULL, '2025-11-25 07:48:41'),
(4, 'GNI', 'Nitin', 'kumar', 'nitin@gmail.com', '8860432736', '1999-02-02', 'English', 'Housekeeping Application', 'InActive', 'admin', NULL, NULL, NULL, NULL, '2025-11-25 07:54:03'),
(5, 'GNI1973122383', 'Ram', 'Kumar', 'ram@gmail.com', '9999999999', '1985-03-21', 'English', 'CSA Application', 'InActive', 'admin', NULL, NULL, NULL, NULL, '2025-11-25 07:54:58'),
(6, 'GNI4090059357', 'RAJNEESH', 'KUMAR', 'rajneeshkumar.kiwitech@gmail.com', '8010383536', '1988-01-30', 'English', 'CSA Application', 'InActive', 'Delhi@110085', NULL, NULL, NULL, NULL, '2025-11-25 08:31:18'),
(7, 'GNI4318224308', 'Sourav', 'Kumar', 'souravrajput314@gmail.com', '456789087654367890876543678908765435678908765436789hfgjkl', '1998-10-26', 'English', 'CSA Application', 'InActive', 'Test@123', NULL, NULL, NULL, NULL, '2025-11-25 11:11:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
