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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
                        `id` int(11) NOT NULL,
                        `sid` int(11) NOT NULL,
                        `rid` int(11) NOT NULL,
                        `type` int(1) NOT NULL,
                        `content` varchar(255) NOT NULL,
                        `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
                             `id` int(11) NOT NULL,
                             `uid` int(11) NOT NULL,
							 `file_name` TINYTEXT NOT NULL,
							 `resume` BLOB NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cletter`
--

DROP TABLE IF EXISTS `cletter`;
CREATE TABLE `cletter` (
                             `id` int(11) NOT NULL,
                             `uid` int(11) NOT NULL,
							 `file_name` TINYTEXT NOT NULL,
							 `cletter` BLOB NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
                             `id` int(11) NOT NULL,
                             `jid` int(11) NOT NULL,
                             `applier_id` int(11) NOT NULL,
                             `resume_id` int(11) NOT NULL,
                             `cletter_id` int(11) NOT NULL
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
-- Table structure for table `invitation`
--

DROP TABLE IF EXISTS `invitation`;
CREATE TABLE `invitation` (
                              `master` int(11) NOT NULL,
                              `slave` int(11) NOT NULL
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

DROP TABLE IF EXISTS `u_types`;
CREATE TABLE `u_types` (
                        `id` int(1) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                        `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Pre-inserts for u_types
INSERT INTO `u_types` (type) VALUES ('Recruiter');
INSERT INTO `u_types` (type) VALUES ('Seeker');
INSERT INTO `u_types` (type) VALUES ('Admin');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `uname` varchar(50) NOT NULL,
                        `password_hash` varchar(72) NOT NULL,
                        `u_type` int(1) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
                             `id` int(11) NOT NULL,
                             `title` varchar(50) NOT NULL,
                             `deadline` date NOT NULL,
                             `location` varchar(50) NOT NULL,
                             `easy_apply` int(1) NOT NULL,
                             `apply_on_web` int(1) NOT NULL,
                             `web_link` varchar(255),
                             `descr` varchar(255) NOT NULL,
                             `creator_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `application_rule`
--

DROP TABLE IF EXISTS `application_rule`;
CREATE TABLE `application_rule` (
                             `id` int(11) NOT NULL,
                             `jid` int(11) NOT NULL,
                             `prefix_mandatory` int(1) NOT NULL,
                             `fname_mandatory` int(1) NOT NULL,
                             `lname_mandatory` int(1) NOT NULL,
                             `pronouns_mandatory` int(1) NOT NULL,
                             `email_mandatory` int(1) NOT NULL,
                             `work_phone_mandatory` int(1) NOT NULL,
                             `cell_phone_mandatory` int(1) NOT NULL,
                             `upload_cv_mandatory` int(1) NOT NULL,
                             `custom_question_1` varchar(255),
                             `custom_question_1_mandatory` int(1) NOT NULL,
                             `custom_question_2` varchar(255),
                             `custom_question_2_mandatory` int(1) NOT NULL,
                             `custom_question_3` varchar(255),
                             `custom_question_3_mandatory` int(1) NOT NULL,
                             `custom_question_4` varchar(255),
                             `custom_question_4_mandatory` int(1) NOT NULL,
                             `custom_question_5` varchar(255),
                             `custom_question_5_mandatory` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table notification
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
                            `id` int(11) NOT NULL,
                            `type` varchar(255) NOT NULL,
                            `content` varchar(255) NOT NULL,
                            `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
    ADD PRIMARY KEY (`id`),
    ADD KEY `RESUME_UID_FK_TO_USER_ID` (`uid`);
	
--
-- Indexes for table `cletter`
--
ALTER TABLE `cletter`
    ADD PRIMARY KEY (`id`),
    ADD KEY `CLETTER_UID_FK_TO_USER_ID` (`uid`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
    ADD PRIMARY KEY (`id`),
    ADD KEY `APLICATION_JID_FK_TO_JOBS_ID` (`jid`),
    ADD KEY `APLICATION_APPLIER_ID_FK_TO_USER` (`applier_id`),
    ADD KEY `APLICATION_RESUME_ID_FK_TO_RESUME` (`resume_id`),
    ADD KEY `APLICATION_CLETTER_ID_FK_TO_CLETTER` (`cletter_id`);

--
-- Indexes for table notification
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NOTIFICATION_UID_FK_TO_USER_UID` (`uid`);

--
-- Indexes for table `application_rule`
--
ALTER TABLE `application_rule`
    ADD PRIMARY KEY (`id`),
    ADD KEY `APLICATION_RULE_JID_FK_TO_JOBS_ID` (`jid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
    ADD PRIMARY KEY (`id`),
    ADD KEY `SENDER_SID_FK_TO_USER_ID` (`sid`),
    ADD KEY `SENDER_RID_FK_TO_USER_ID` (`rid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
    ADD PRIMARY KEY (`id`),
    ADD KEY `COMPANY_CREATOR_UID_FK_TO_USER_ID` (`creator_uid`);

--
-- Indexes for table `company_follower`
--
ALTER TABLE `company_follower`
    ADD PRIMARY KEY (`cid`,`uid`),
    ADD KEY `COMPANY_FOLLOWER_UID_FK_TO_USER` (`uid`);

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
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
    ADD PRIMARY KEY (`master`,`slave`),
    ADD KEY `INVITATION_SLAVE_FK_TO_USER_ID` (`slave`) USING BTREE;

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
    ADD UNIQUE KEY `uname` (`uname`),
    ADD KEY `USER_U_TYPE_FK_TO_U_TYPES` (`u_type`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
    ADD PRIMARY KEY (`uid`,`eid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
    ADD PRIMARY KEY (`id`),
    ADD KEY `JOBS_CREATOR_UID_FK_TO_USER_ID` (`creator_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table cletter
--
ALTER TABLE `cletter`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
	
--
-- AUTO_INCREMENT for table resume
--
ALTER TABLE `resume`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table application
--
ALTER TABLE `application`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `jobs`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table notification
--
ALTER TABLE `notification`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table notification
--
ALTER TABLE `application_rule`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_rule`
--
ALTER TABLE `application_rule`
    ADD CONSTRAINT `APLICATION_RULE_JID_FK_TO_JOBS_ID` FOREIGN KEY (`jid`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table notification
--
ALTER TABLE `notification`
    ADD CONSTRAINT `NOTIFICATION_UID_FK_TO_USER_UID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
    ADD CONSTRAINT `SENDER_RID_FK_TO_USER_ID` FOREIGN KEY (`rid`) REFERENCES `user` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `SENDER_SID_FK_TO_USER_ID` FOREIGN KEY (`sid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
    ADD CONSTRAINT `COMPANY_CREATOR_UID_FK_TO_USER_ID` FOREIGN KEY (`creator_uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_follower`
--
ALTER TABLE `company_follower`
    ADD CONSTRAINT `COMPANY_FOLLOWER_CID_FK_TO_COMPANY` FOREIGN KEY (`cid`) REFERENCES `company` (`id`) ON DELETE CASCADE,
    ADD CONSTRAINT `COMPANY_FOLLOWER_UID_FK_TO_USER` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `user`
--
ALTER TABLE `user`
    ADD CONSTRAINT `USER_U_TYPE_FK_TO_U_TYPES` FOREIGN KEY (`u_type`) REFERENCES `u_types` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
    ADD CONSTRAINT `JOBS_CREATOR_UID_FK_TO_USER_ID` FOREIGN KEY (`creator_uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
    ADD CONSTRAINT `RESUME_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cletter`
--
ALTER TABLE `cletter`
    ADD CONSTRAINT `CLETTER_UID_FK_TO_USER_ID` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application`
--
ALTER TABLE `application`
    ADD CONSTRAINT `APLICATION_JID_FK_TO_JOBS_ID` FOREIGN KEY (`jid`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
	ADD CONSTRAINT `APLICATION_APPLIER_ID_FK_TO_USER` FOREIGN KEY (`applier_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
	ADD CONSTRAINT `APLICATION_RESUME_ID_FK_TO_RESUME` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`id`) ON DELETE CASCADE,
	ADD CONSTRAINT `APLICATION_CLETTER_ID_FK_TO_CLETTER` FOREIGN KEY (`cletter_id`) REFERENCES `cletter` (`id`) ON DELETE CASCADE;