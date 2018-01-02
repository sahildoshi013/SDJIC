-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 07:25 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `project`
--
CREATE DATABASE `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE IF NOT EXISTS `faculty_login` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `f_address` varchar(250) NOT NULL,
  `f_b_day` int(2) NOT NULL,
  `f_b_month` int(2) NOT NULL,
  `f_b_year` int(4) NOT NULL,
  `f_stream` varchar(50) NOT NULL,
  `f_mail` varchar(50) NOT NULL,
  `f_cono` varchar(10) NOT NULL,
  `f_ex` float NOT NULL,
  `f_degree` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`f_id`, `f_name`, `f_address`, `f_b_day`, `f_b_month`, `f_b_year`, `f_stream`, `f_mail`, `f_cono`, `f_ex`, `f_degree`, `username`, `password`) VALUES
(2, 'Vimal Vaiwala', 'vesu,Surat', 15, 1, 1985, 'B.C.A', 'vimal@gmail.com', '5555555555', 8, 'M.sc.IT', 'vimal', 'welcome'),
(3, 'Vaibhav Desai', 'Surat', 2, 2, 1980, 'B.C.A', 'vaibhav@gmail.com', '2222222222', 10, 'M.sc.IT', 'vaibhav', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `paper_info`
--

CREATE TABLE IF NOT EXISTS `paper_info` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `stream` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `day` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `paper_info`
--

INSERT INTO `paper_info` (`paper_id`, `stream`, `semester`, `subject`, `day`, `month`, `year`, `username`) VALUES
(2, 'B.B.A', 3, 'da', '27', '09', '2016', 'sir'),
(7, 'B.C.A', 3, 'PHP', '28', '09', '2016', 'sir'),
(8, 'B.C.A', 5, 'Networking', '29', '09', '2016', 'sir'),
(5, 'B.C.A', 3, 'PHP', '22', '10', '2016', 'sir'),
(10, 'B.C.A', 5, 'Networking', '07', '10', '2016', 'sir'),
(13, 'B.C.A', 5, 'PHP', '30', '09', '2016', 'sir'),
(12, 'B.C.A', 5, 'Asp.net', '30', '09', '2016', 'sir');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `answerA` varchar(256) NOT NULL,
  `answerB` varchar(256) NOT NULL,
  `answerC` varchar(256) NOT NULL,
  `answerD` varchar(256) NOT NULL,
  `currect_answer` varchar(256) NOT NULL,
  `chapter` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `question`, `answerA`, `answerB`, `answerC`, `answerD`, `currect_answer`, `chapter`, `paper_id`) VALUES
(15, 'Which Control Is Exit Control Loop?', 'While', 'For', 'Do..While', 'For each', 'Do..While', 2, 5),
(8, 'q', 'a', 'b', 'c', 'd', 'b', 1, 2),
(21, 'MAC', 'Media access Control ', 'Media Addressing Control', 'Media And Chanel', 'None', 'Media access Control ', 2, 8),
(16, 'q', 'w', 'e', 'r', 't', 'r', 4, 2),
(14, 'PHP', 'Personal Home Page', 'Hypertext Protocol', 'Personal Home Protocol', 'Private Home Page', 'Personal Home Page', 1, 5),
(20, 'PHP', 'Hypertext Preprocesser', 'personal home page', 'Hypertext Protocol', 'Personal HTML Page', 'Hypertext Preprocesser', 1, 7),
(22, 'gd', 'g', 'dg', 'g', 'h', 'g', 1, 10),
(23, 'yeh sahil kon he?', 'janavar', 'manas', 'gogo', 'lasan', 'manas', 1, 11),
(24, 'q', 'w', 'e', 'e', 'r', 'r', 2, 12),
(25, 'fownder of php?', 'vimal', 'vaibhav', 'rasmus leford', 'raj', 'rasmus leford', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `paper_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `o_marks` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`paper_id`, `s_id`, `total_marks`, `o_marks`) VALUES
(13, 1, 1, 1),
(12, 1, 0, 1),
(13, 1, 0, 1),
(12, 1, 1, 1),
(13, 1, 1, 1),
(13, 1, 1, 1),
(5, 1, 0, 2),
(5, 1, 1, 2),
(5, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_rollno` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_address` varchar(250) NOT NULL,
  `s_cono` int(10) NOT NULL,
  `s_p_cono` int(10) NOT NULL,
  `s_stream` varchar(20) NOT NULL,
  `s_year` varchar(10) NOT NULL,
  `s_b_day` int(2) NOT NULL,
  `s_b_month` int(2) NOT NULL,
  `s_b_year` int(4) NOT NULL,
  `s_mail` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s_id`, `s_rollno`, `s_name`, `s_address`, `s_cono`, `s_p_cono`, `s_stream`, `s_year`, `s_b_day`, `s_b_month`, `s_b_year`, `s_mail`, `username`, `password`) VALUES
(1, 26, 'Sahil Doshi', 'Adajan,Surat', 2147483647, 2147483647, 'B.C.A', 'Third', 29, 5, 1997, 'sahil@gmail.com', 'tybca026', 'welcome');
