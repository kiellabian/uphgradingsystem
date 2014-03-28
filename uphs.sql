-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2014 at 10:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uphs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `student_id` int(255) NOT NULL,
  `year_id` int(255) NOT NULL,
  `month_id` int(255) NOT NULL,
  `attendance_trait_id` int(255) NOT NULL,
  `value` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `month_id` (`month_id`),
  KEY `attendance_trait_id` (`attendance_trait_id`),
  KEY `attendance_ibfk_1` (`year_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `attendance`
--


-- --------------------------------------------------------

--
-- Table structure for table `attendance_trait`
--

CREATE TABLE IF NOT EXISTS `attendance_trait` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attendance_trait`
--

INSERT INTO `attendance_trait` (`id`, `name`) VALUES
(1, 'No. of School Days'),
(2, 'No. of Days Present'),
(3, 'No. of Times Tardy'),
(4, 'No. of Classes Cut');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year_sem_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year_sem_id` (`year_sem_id`),
  KEY `subject_id` (`subject_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `year_sem_id`, `subject_id`, `teacher_id`, `section_id`) VALUES
(5, 13, 1, 1, 10),
(6, 13, 2, 1, 11),
(7, 13, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `student_year_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `period` int(2) DEFAULT NULL,
  `grade` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grades_ibfk_2` (`class_id`),
  KEY `student_year_id` (`student_year_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grades`
--


-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`) VALUES
(1, 'August'),
(2, 'September'),
(3, 'October'),
(4, 'November'),
(5, 'December'),
(6, 'January'),
(7, 'February'),
(8, 'March'),
(9, 'April'),
(10, 'May');

-- --------------------------------------------------------

--
-- Table structure for table `pces`
--

CREATE TABLE IF NOT EXISTS `pces` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `student_id` int(255) NOT NULL,
  `year_id` int(255) NOT NULL,
  `trait_id` int(255) NOT NULL,
  `period` int(255) NOT NULL,
  `grade` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trait_id` (`trait_id`),
  KEY `pces_ibfk_1` (`year_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pces`
--


-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year_level_id` int(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year_level_id` (`year_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `year_level_id`, `section_name`) VALUES
(1, 1, 'Bartlett'),
(8, 2, 'Villamor'),
(9, 3, 'Benton'),
(10, 4, 'Palma'),
(11, 5, 'Bocobo'),
(12, 6, 'Sison');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `year_of_admission` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year_of_admission` (`year_of_admission`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `middle_name`, `gender`, `age`, `year_of_admission`) VALUES
(1, 'John', 'Dino', '', 'male', 68, 9),
(2, 'Asiong', 'Kingpin', '', 'male', 18, 9),
(3, 'Jessa May', 'Sayson', 'Robledo', 'Female', 19, 12),
(4, 'Jay Arnel', 'Bilocura', 'dela Peña', 'Male', 18, 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_year`
--

CREATE TABLE IF NOT EXISTS `student_year` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `student_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL,
  `sys_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sys_id` (`sys_id`),
  KEY `student_id` (`student_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_year`
--

INSERT INTO `student_year` (`id`, `student_id`, `section_id`, `sys_id`) VALUES
(3, 1, 1, 13),
(4, 2, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`) VALUES
(1, 'Biology 8'),
(2, 'Pornography 69');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `middle_name`, `last_name`, `age`, `gender`) VALUES
(1, 'Kiel', NULL, 'Labian', 19, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_sections`
--

CREATE TABLE IF NOT EXISTS `teacher_sections` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL,
  `year_sem_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `year_sem_id` (`year_sem_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `teacher_sections`
--

INSERT INTO `teacher_sections` (`id`, `teacher_id`, `section_id`, `year_sem_id`) VALUES
(21, 1, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `traits`
--

CREATE TABLE IF NOT EXISTS `traits` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `traits`
--

INSERT INTO `traits` (`id`, `name`) VALUES
(1, 'Manners'),
(2, 'Appearance'),
(3, 'Dependability'),
(4, 'Cooperation'),
(5, 'Attendance'),
(6, 'Initiative & Resourcefulness'),
(7, 'Leadership');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'paw2', 'paw2', 'teacher'),
(2, 'paw2', 'paw2', 'teacher'),
(3, '10-0001', 'jisa', 'student'),
(4, '10-0002', 'arnil', 'student'),
(5, '11-0001', 'paw2', 'student'),
(6, '11-0002', 'paw2', 'student'),
(17, 'kiel', 'kiel', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE IF NOT EXISTS `years` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, '2011 - 2012'),
(2, '2012 - 2013'),
(3, '2013 - 2014'),
(4, '2014 - 2015');

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE IF NOT EXISTS `year_level` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year_level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`id`, `year_level`) VALUES
(1, 'Grade 7'),
(2, 'Grade 8'),
(3, 'I'),
(4, 'II'),
(5, 'II'),
(6, 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `year_sem`
--

CREATE TABLE IF NOT EXISTS `year_sem` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year_id` int(255) NOT NULL,
  `sem` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year_id` (`year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `year_sem`
--

INSERT INTO `year_sem` (`id`, `year_id`, `sem`) VALUES
(6, 1, 1),
(7, 1, 2),
(8, 2, 1),
(9, 2, 2),
(10, 3, 1),
(11, 3, 2),
(12, 4, 1),
(13, 4, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`attendance_trait_id`) REFERENCES `attendance_trait` (`id`);

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`year_sem_id`) REFERENCES `year_sem` (`id`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `classes_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `classes_ibfk_5` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`student_year_id`) REFERENCES `student_year` (`id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

--
-- Constraints for table `pces`
--
ALTER TABLE `pces`
  ADD CONSTRAINT `pces_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `pces_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`),
  ADD CONSTRAINT `pces_ibfk_2` FOREIGN KEY (`trait_id`) REFERENCES `traits` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`year_level_id`) REFERENCES `year_level` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`year_of_admission`) REFERENCES `year_sem` (`id`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `student_year`
--
ALTER TABLE `student_year`
  ADD CONSTRAINT `student_year_ibfk_4` FOREIGN KEY (`sys_id`) REFERENCES `year_sem` (`id`),
  ADD CONSTRAINT `student_year_ibfk_5` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `student_year_ibfk_6` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_fk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `teacher_sections`
--
ALTER TABLE `teacher_sections`
  ADD CONSTRAINT `teacher_sections_ibfk_4` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `teacher_sections_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `teacher_sections_ibfk_3` FOREIGN KEY (`year_sem_id`) REFERENCES `year_sem` (`id`);

--
-- Constraints for table `year_sem`
--
ALTER TABLE `year_sem`
  ADD CONSTRAINT `year_sem_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`);
