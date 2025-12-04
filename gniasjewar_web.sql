-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2025 at 11:05 AM
-- Server version: 5.7.34
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
-- Database: `gniasjewar_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `notification_cont` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `registration_number` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `father_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `language` varchar(250) DEFAULT NULL,
  `apply_for` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `exam_location` varchar(250) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `exam_venue` varchar(250) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
