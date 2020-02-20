-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 03:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eop`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(2) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `edit_members`
--

CREATE TABLE `edit_members` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `member_rule` varchar(33) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `is_hide_phone` varchar(5) DEFAULT 'off',
  `email` varchar(55) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(11) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `parmanent_address` varchar(255) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `batch` varchar(5) NOT NULL,
  `about` varchar(5000) DEFAULT NULL,
  `is_approve` int(2) NOT NULL DEFAULT 0,
  `avater` varchar(255) DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(2) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `member_rule` varchar(33) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `is_hide_phone` varchar(5) DEFAULT 'off',
  `email` varchar(55) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(11) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `parmanent_address` varchar(255) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `batch` varchar(5) NOT NULL,
  `about` varchar(5000) DEFAULT NULL,
  `is_approve` int(2) NOT NULL DEFAULT 0,
  `avater` varchar(255) DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_occupation`
--

CREATE TABLE `member_occupation` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `occ_id` int(2) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_work_here` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_rules`
--

CREATE TABLE `member_rules` (
  `id` int(2) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new_members`
--

CREATE TABLE `new_members` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `member_rule` varchar(33) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `is_hide_phone` varchar(5) DEFAULT 'off',
  `email` varchar(55) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(11) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `parmanent_address` varchar(255) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `batch` varchar(5) NOT NULL,
  `about` varchar(5000) DEFAULT NULL,
  `is_approve` int(2) NOT NULL DEFAULT 0,
  `avater` varchar(255) DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `subject` varchar(225) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `occupatios`
--

CREATE TABLE `occupatios` (
  `id` int(2) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL DEFAULT current_timestamp(),
  `password` varchar(55) NOT NULL,
  `name` varchar(33) NOT NULL,
  `rules` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rules`
--

CREATE TABLE `user_rules` (
  `id` int(2) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_members`
--
ALTER TABLE `edit_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_occupation`
--
ALTER TABLE `member_occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_rules`
--
ALTER TABLE `member_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_members`
--
ALTER TABLE `new_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupatios`
--
ALTER TABLE `occupatios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rules`
--
ALTER TABLE `user_rules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `edit_members`
--
ALTER TABLE `edit_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_occupation`
--
ALTER TABLE `member_occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_rules`
--
ALTER TABLE `member_rules`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_members`
--
ALTER TABLE `new_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occupatios`
--
ALTER TABLE `occupatios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_rules`
--
ALTER TABLE `user_rules`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
