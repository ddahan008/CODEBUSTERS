-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2023 at 08:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `codebusters`
--
CREATE DATABASE IF NOT EXISTS `codebusters` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `codebusters`;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
                             `uid` int(11) NOT NULL,
                             `eid` int(11) NOT NULL,
                             `degree` varchar(50) NOT NULL,
                             `inst` varchar(50) NOT NULL,
                             `start` date NOT NULL,
                             `end` date NOT NULL,
                             `descr` varchar(255) NOT NULL
) CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
                              `uid` int(11) NOT NULL,
                              `eid` int(11) NOT NULL,
                              `pos` varchar(50) NOT NULL,
                              `inst` varchar(50) NOT NULL,
                              `start` date NOT NULL,
                              `end` date NOT NULL,
                              `descr` varchar(255) NOT NULL
) CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
                           `id` int(11) NOT NULL,
                           `fname` varchar(25) NOT NULL,
                           `lname` varchar(25) NOT NULL,
                           `job_title` varchar(50) NOT NULL,
                           `location` varchar(50) NOT NULL,
                           `img_src` varchar(255) NOT NULL,
                           `skills` varchar(255) NOT NULL,
                           `about` varchar(255) NOT NULL
) CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `uname` varchar(50) NOT NULL,
                        `password_hash` varchar(72) NOT NULL,
                        `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE `volunteer` (
                             `uid` int(11) NOT NULL,
                             `eid` int(11) NOT NULL,
                             `pos` varchar(50) NOT NULL,
                             `inst` varchar(50) NOT NULL,
                             `start` date NOT NULL,
                             `end` date NOT NULL,
                             `descr` varchar(255) NOT NULL
) CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
    ADD CONSTRAINT `EDUCATION_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
    ADD CONSTRAINT `EXPERIENCE_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
    ADD CONSTRAINT `PROFILE_ID_FK_TO_USER_ID` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
    ADD CONSTRAINT `VOLUNTEER_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;
