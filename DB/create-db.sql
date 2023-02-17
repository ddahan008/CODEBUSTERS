-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2023 at 12:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

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
CREATE TABLE IF NOT EXISTS `education` (
                                           `uid` int(11) NOT NULL,
                                           `eid` int(11) NOT NULL,
                                           `degree` varchar(50) NOT NULL,
                                           `inst` varchar(50) NOT NULL,
                                           `start` date NOT NULL,
                                           `end` date NOT NULL,
                                           `descr` varchar(255) NOT NULL,
                                           PRIMARY KEY (`uid`,`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
                                        `id` int(11) NOT NULL AUTO_INCREMENT,
                                        `name` varchar(20) NOT NULL,
                                        `descr` varchar(255) NOT NULL,
                                        `date` datetime NOT NULL,
                                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_mem`
--

DROP TABLE IF EXISTS `event_mem`;
CREATE TABLE IF NOT EXISTS `event_mem` (
                                           `eid` int(11) NOT NULL,
                                           `uid` int(11) NOT NULL,
                                           PRIMARY KEY (`eid`,`uid`),
                                           KEY `GROUP_MEM_UID_FK_TO_USER` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
                                            `uid` int(11) NOT NULL,
                                            `eid` int(11) NOT NULL,
                                            `pos` varchar(50) NOT NULL,
                                            `inst` varchar(50) NOT NULL,
                                            `start` date NOT NULL,
                                            `end` date NOT NULL,
                                            `descr` varchar(255) NOT NULL,
                                            PRIMARY KEY (`uid`,`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
                                        `id` int(11) NOT NULL AUTO_INCREMENT,
                                        `name` varchar(20) NOT NULL,
                                        `descr` varchar(255) NOT NULL,
                                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_mem`
--

DROP TABLE IF EXISTS `group_mem`;
CREATE TABLE IF NOT EXISTS `group_mem` (
                                           `gid` int(11) NOT NULL,
                                           `uid` int(11) NOT NULL,
                                           PRIMARY KEY (`gid`,`uid`),
                                           KEY `GROUP_MEM_UID_FK_TO_USER` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
                                         `id` int(11) NOT NULL,
                                         `fname` varchar(25) NOT NULL,
                                         `lname` varchar(25) NOT NULL,
                                         `job_title` varchar(50) NOT NULL,
                                         `location` varchar(50) NOT NULL,
                                         `img_src` varchar(255) NOT NULL,
                                         `skills` varchar(255) NOT NULL,
                                         `about` varchar(255) NOT NULL,
                                         `public` int(1) NOT NULL DEFAULT '1',
                                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
                                      `id` int(11) NOT NULL AUTO_INCREMENT,
                                      `uname` varchar(50) NOT NULL,
                                      `password_hash` varchar(72) NOT NULL,
                                      `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                      PRIMARY KEY (`id`),
                                      UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
                                           `uid` int(11) NOT NULL,
                                           `eid` int(11) NOT NULL,
                                           `pos` varchar(50) NOT NULL,
                                           `inst` varchar(50) NOT NULL,
                                           `start` date NOT NULL,
                                           `end` date NOT NULL,
                                           `descr` varchar(255) NOT NULL,
                                           PRIMARY KEY (`uid`,`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Constraints for table `group_mem`
--
ALTER TABLE `group_mem`
    ADD CONSTRAINT `GROUP_MEM_GID_FK_TO_GROUPS` FOREIGN KEY (`gid`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `GROUP_MEM_UID_FK_TO_USER` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

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