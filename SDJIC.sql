-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 03:47 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `f_id` int(11) NOT NULL,
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
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `paper_info` (
  `paper_id` int(11) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `day` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(12, 'B.C.A', 5, 'Asp.net', '30', '09', '2016', 'sir'),
(15, 'B.C.A', 5, 'SA', '29', '07', '2017', 'vimal'),
(16, 'B.C.A', 6, 'ANDROID', '8', '1', '2018', 'vimal');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `answerA` varchar(256) NOT NULL,
  `answerB` varchar(256) NOT NULL,
  `answerC` varchar(256) NOT NULL,
  `answerD` varchar(256) NOT NULL,
  `currect_answer` varchar(256) NOT NULL,
  `chapter` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(25, 'fownder of php?', 'vimal', 'vaibhav', 'rasmus leford', 'raj', 'rasmus leford', 1, 13),
(26, 'a', 'b', 'c', 'd', 'e', 'd', 1, 15),
(27, 'wsws', '1', '2', '3', '4', '1', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
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
(5, 1, 2, 2),
(15, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `s_id` int(11) NOT NULL,
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
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s_id`, `s_rollno`, `s_name`, `s_address`, `s_cono`, `s_p_cono`, `s_stream`, `s_year`, `s_b_day`, `s_b_month`, `s_b_year`, `s_mail`, `username`, `password`) VALUES
(1, 26, 'Sahil Doshi', 'Adajan,Surat', 2147483647, 2147483647, 'B.C.A', 'Third', 29, 5, 1997, 'sahil@gmail.com', 'tybca026', 'welcome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `paper_info`
--
ALTER TABLE `paper_info`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_login`
--
ALTER TABLE `faculty_login`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paper_info`
--
ALTER TABLE `paper_info`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
