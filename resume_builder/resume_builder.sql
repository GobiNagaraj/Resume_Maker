-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 07:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `password`) VALUES
(16, 'gobi@gobi.com', 'b0acdc819ec691485fcb57feb6a6fe34'),
(17, 'usha@gobi.com', 'b0acdc819ec691485fcb57feb6a6fe34');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_details`
--

CREATE TABLE IF NOT EXISTS `user_personal_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `gender` text NOT NULL,
  `nationality` text NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `languages_known` varchar(255) NOT NULL,
  `user_place` varchar(255) NOT NULL,
  `location_date` date NOT NULL,
  `course_clg` varchar(255) NOT NULL,
  `university_clg` varchar(255) NOT NULL,
  `passing_year_clg` varchar(255) NOT NULL,
  `percentage_clg` varchar(255) NOT NULL,
  `course_hsc` varchar(255) NOT NULL,
  `university_hsc` varchar(255) NOT NULL,
  `passing_year_hsc` varchar(255) NOT NULL,
  `percentage_hsc` varchar(255) NOT NULL,
  `course_sslc` varchar(255) NOT NULL,
  `university_sslc` varchar(255) NOT NULL,
  `passing_year_sslc` varchar(255) NOT NULL,
  `percentage_sslc` varchar(255) NOT NULL,
  `fileToUpload` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user_personal_details`
--

INSERT INTO `user_personal_details` (`id`, `dob`, `age`, `gender`, `nationality`, `father_name`, `mother_name`, `languages_known`, `user_place`, `location_date`, `course_clg`, `university_clg`, `passing_year_clg`, `percentage_clg`, `course_hsc`, `university_hsc`, `passing_year_hsc`, `percentage_hsc`, `course_sslc`, `university_sslc`, `passing_year_sslc`, `percentage_sslc`, `fileToUpload`, `customer_id`) VALUES
(30, '1996-11-28', 21, 'MALE', 'indian', 'NAGARAJ', 'USHARANI', 'TAMIL', 'BE', '0000-00-00', '78', 'HSC', 'CSI', '2013', '78', 'SSLC', 'CSI', '2011', '83', 'ERODE', '2017-06-15', '16', 'IMG_20170326_064323.jpg', 2017),
(31, '2017-06-16', 65, 'MALE', 'INDIAN', 'JACK', 'KUNG', 'CHINESE', 'ERODE', '2017-06-15', 'KJHKKJ', 'BJBJHB', 'BJHBJH', '43', 'KJJNKJ', 'JBHB', 'JHBH', '65', 'KJKJJ', 'BJHB', 'JB', '65', '360wallpaper201422720033_&_15e74971-aef2-42bd-a6cd-438d27c7420c.jpg', 17),
(32, '2017-06-14', 44, 'hjbh', 'vhvg', 'vhvhvg', 'hvhvhgv', 'nb', 'hvhvg', '2017-06-22', 'bjhbjhb', 'bjh', 'bhjb', 'jhbj', 'bj', 'hbjh', 'bj', 'hbj', 'hbj', 'hbhj', 'bj', 'hbj', 'camera20_&_54e1f332-56de-4bce-ad90-5a7f4a26746d.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_resume_details`
--

CREATE TABLE IF NOT EXISTS `user_resume_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile_number` varchar(10) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_career_obj` varchar(255) NOT NULL,
  `user_edu_qua` int(10) NOT NULL,
  `user_tech_skills` varchar(255) NOT NULL,
  `user_area_interest` varchar(255) NOT NULL,
  `user_project_title` varchar(255) NOT NULL,
  `user_project_description` varchar(255) NOT NULL,
  `user_strength` varchar(255) NOT NULL,
  `user_hobbies` varchar(255) NOT NULL,
  `user_references_1` varchar(255) NOT NULL,
  `user_references_2` varchar(255) NOT NULL,
  `user_references_add` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user_resume_details`
--

INSERT INTO `user_resume_details` (`id`, `first_name`, `last_name`, `user_email`, `user_mobile_number`, `user_address`, `user_career_obj`, `user_edu_qua`, `user_tech_skills`, `user_area_interest`, `user_project_title`, `user_project_description`, `user_strength`, `user_hobbies`, `user_references_1`, `user_references_2`, `user_references_add`, `customer_id`) VALUES
(21, 'GOBI', 'NAGARAH', 'GOBI@GMAIL.COM', '9043808501', 'ADDRESS', 'CAREER', 2, 'C-C++-JAVA-ANDROID', 'WEB DESIGN-APP DEVELOP', 'GTTMS', 'GTTMS FOR TRANSPORT', 'POSITIVE-STRAIGHT FORWARD-CREATOR', 'DRAWING-FILM MAKING', 'GOBI', 'NAGARAJ', 'COLLEGE', 16),
(22, 'JACKIE', 'CHAN', 'JACK@KARATE.COM', '9087654321', 'CHINA', 'FIGHT', 3, 'KUNG FU-FIGHT-RUN-BLOCK', 'CHINA WALL-INDIAN GATE', 'KARATE KID', 'TRANSLATE TO TAMIL', 'BLA-BLA-BLA', 'HMM-HMM-HMM', 'GOBI', 'NAGARAJ', 'CHINNA,TAMILNADU,DELHI,MUMBAI', 17);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
