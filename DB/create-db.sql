-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2023 at 04:43 AM
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
-- Table structure for table `connection`
--

DROP TABLE IF EXISTS `connection`;
CREATE TABLE `connection` (
                              `master` int(11) NOT NULL,
                              `slave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
                          `id` int(11) NOT NULL,
                          `name` varchar(20) NOT NULL,
                          `descr` varchar(255) NOT NULL,
                          `date` datetime NOT NULL,
                          `creator_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_mem`
--

DROP TABLE IF EXISTS `event_mem`;
CREATE TABLE `event_mem` (
                             `eid` int(11) NOT NULL,
                             `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
                          `id` int(11) NOT NULL,
                          `name` varchar(20) NOT NULL,
                          `descr` varchar(255) NOT NULL,
                          `creator_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_follower`
--

DROP TABLE IF EXISTS `company_follower`;
CREATE TABLE `company_follower` (
                             `cid` int(11) NOT NULL,
                             `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
                          `id` int(11) NOT NULL,
                          `name` varchar(20) NOT NULL,
                          `descr` varchar(255) NOT NULL,
                          `creator_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_mem`
--

DROP TABLE IF EXISTS `group_mem`;
CREATE TABLE `group_mem` (
                             `gid` int(11) NOT NULL,
                             `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
                           `id` int(11) NOT NULL,
                           `fname` varchar(25) NOT NULL,
                           `lname` varchar(25) NOT NULL,
                           `email` varchar(50) NOT NULL,
                           `job_title` varchar(50) NOT NULL,
                           `location` varchar(50) NOT NULL,
                           `img_src` varchar(255) NOT NULL,
                           `skills` varchar(255) NOT NULL,
                           `about` varchar(255) NOT NULL,
                           `public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `uname` varchar(50) NOT NULL,
                        `password_hash` varchar(72) NOT NULL,
                        `user_type` varchar(11) NOT NULL,
                        `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
    ADD PRIMARY KEY (`master`,`slave`),
    ADD KEY `CONNECTION_SLAVE_FK_TO_USER_ID` (`slave`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_mem`
--
ALTER TABLE `event_mem`
    ADD PRIMARY KEY (`eid`,`uid`),
    ADD KEY `EVENT_MEM_UID_FK_TO_USER` (`uid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_follower`
--
ALTER TABLE `company_follower`
    ADD PRIMARY KEY (`cid`,`uid`),
    ADD KEY `company_follower_UID_FK_TO_USER` (`uid`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
    ADD PRIMARY KEY (`id`),
    ADD KEY `GROUPS_CREATOR_UID_FK_TO_USER_ID` (`creator_uid`);

--
-- Indexes for table `group_mem`
--
ALTER TABLE `group_mem`
    ADD PRIMARY KEY (`gid`,`uid`),
    ADD KEY `GROUP_MEM_UID_FK_TO_USER` (`uid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
    ADD CONSTRAINT `EVENTS_CREATOR_UID_FK_TO_USER_ID` FOREIGN KEY (`creator_uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
    ADD CONSTRAINT `COMPANY_CREATOR_UID_FK_TO_USER_ID` FOREIGN KEY (`creator_uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
    ADD CONSTRAINT `CONNECTION_MASTER_FK_TO_USER_ID` FOREIGN KEY (`master`) REFERENCES `user` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `CONNECTION_SLAVE_FK_TO_USER_ID` FOREIGN KEY (`slave`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
    ADD CONSTRAINT `EDUCATION_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_mem`
--
ALTER TABLE `event_mem`
    ADD CONSTRAINT `EVENT_MEM_EID_FK_TO_EVENTS` FOREIGN KEY (`eid`) REFERENCES `events` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `EVENT_MEM_UID_FK_TO_USER` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_follower`
--
ALTER TABLE `company_follower`
    ADD CONSTRAINT `company_follower_CID_FK_TO_COMPANY` FOREIGN KEY (`cid`) REFERENCES `company` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `company_follower_UID_FK_TO_USER` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
    ADD CONSTRAINT `EXPERIENCE_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
    ADD CONSTRAINT `GROUPS_CREATOR_UID_FK_TO_USER_ID` FOREIGN KEY (`creator_uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

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
