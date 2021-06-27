-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 24, 2021 at 07:01 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
('admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int NOT NULL,
  `workload_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int NOT NULL,
  `mime` varchar(255) NOT NULL,
  `downloads` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_assignment_workload_id_` (`workload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_answer`
--

DROP TABLE IF EXISTS `assignment_answer`;
CREATE TABLE IF NOT EXISTS `assignment_answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `assignment_id` int NOT NULL,
  `enroll_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int NOT NULL,
  `mime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_assignment_answer_enroll_id` (`enroll_id`),
  KEY `fk_assignment_answer_assignment_id` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

DROP TABLE IF EXISTS `enroll`;
CREATE TABLE IF NOT EXISTS `enroll` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` varchar(11) NOT NULL,
  `workload_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_enroll_student_id` (`student_id`),
  KEY `fk_enroll_workload_id` (`workload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_admin_id_mod_by_lecturer` (`mod_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `mult_quiz`
--

DROP TABLE IF EXISTS `mult_quiz`;
CREATE TABLE IF NOT EXISTS `mult_quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int NOT NULL,
  `question` text NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_quiz_mult__workload_id` (`quiz_id`),
  KEY `fk_quiz_lecturer_id_mod` (`mod_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `workload_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_quiz_workload_id` (`workload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_marks`
--

DROP TABLE IF EXISTS `quiz_marks`;
CREATE TABLE IF NOT EXISTS `quiz_marks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enroll_id` int NOT NULL,
  `quiz_id` int NOT NULL,
  `marks` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_quiz_marks_quiz_id` (`quiz_id`),
  KEY `fk_quiz_marks_enroll_id` (`enroll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_admin_id_mod_by_student` (`mod_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_admin_id_mod_by_subject` (`mod_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `tf_quiz`
--

DROP TABLE IF EXISTS `tf_quiz`;
CREATE TABLE IF NOT EXISTS `tf_quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int NOT NULL,
  `question` text NOT NULL,
  `answer` tinyint(1) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_tf_quiz_quiz_id` (`quiz_id`),
  KEY `fk_mod_by_lecturer_d` (`mod_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

-- --------------------------------------------------------

--
-- Table structure for table `workload`
--

DROP TABLE IF EXISTS `workload`;
CREATE TABLE IF NOT EXISTS `workload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(11) NOT NULL,
  `subject_id` varchar(11) NOT NULL,
  `mod_by` varchar(11) NOT NULL,
  `mod_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`lecturer_id`,`subject_id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_admin_id_mod_by_workload_admin` (`mod_by`),
  KEY `fk_workload_subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `fk_assignment_workload_id_` FOREIGN KEY (`workload_id`) REFERENCES `workload` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignment_answer`
--
ALTER TABLE `assignment_answer`
  ADD CONSTRAINT `fk_assignment_answer_assignment_id` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_assignment_answer_enroll_id` FOREIGN KEY (`enroll_id`) REFERENCES `enroll` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `fk_enroll_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enroll_workload_id` FOREIGN KEY (`workload_id`) REFERENCES `workload` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `fk_admin_id_mod_by_lecturer` FOREIGN KEY (`mod_by`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mult_quiz`
--
ALTER TABLE `mult_quiz`
  ADD CONSTRAINT `fk_quiz_lecturer_id_mod` FOREIGN KEY (`mod_by`) REFERENCES `lecturer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_quiz_mult__workload_id` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_quiz_workload_id` FOREIGN KEY (`workload_id`) REFERENCES `workload` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz_marks`
--
ALTER TABLE `quiz_marks`
  ADD CONSTRAINT `fk_quiz_marks_enroll_id` FOREIGN KEY (`enroll_id`) REFERENCES `enroll` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_quiz_marks_quiz_id` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_admin_id_mod_by_student` FOREIGN KEY (`mod_by`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_admin_id_mod_by_subject` FOREIGN KEY (`mod_by`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tf_quiz`
--
ALTER TABLE `tf_quiz`
  ADD CONSTRAINT `fk_mod_by_lecturer_d` FOREIGN KEY (`mod_by`) REFERENCES `lecturer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tf_quiz_quiz_id` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workload`
--
ALTER TABLE `workload`
  ADD CONSTRAINT `fk_admin_id_mod_by_workload_admin` FOREIGN KEY (`mod_by`) REFERENCES `admin` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_workload_lecturer_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_workload_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
