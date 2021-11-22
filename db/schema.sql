-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 08:26 AM
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
-- Database: `onlineexam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_admin`
--

CREATE TABLE `exam_admin` (
  `admin_id` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_admin`
--

INSERT INTO `exam_admin` (`admin_id`, `name`, `branch`, `admin_pass`, `post`) VALUES
('1bi16is012', 'ayesha', 'ise', 'student', 'student'),
('1bi16is026', 'Kirthana', 'ISE', 'student', 'Student'),
('1bi16is040', 'Rachita', 'ISE', 'student', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `exam_user`
--

CREATE TABLE `exam_user` (
  `usn` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `year_join` varchar(5) NOT NULL,
  `userpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_user`
--

INSERT INTO `exam_user` (`usn`, `username`, `branch`, `gender`, `year_join`, `userpass`) VALUES
('1BI16IS007', 'ANOOSHA', 'ISE', 'FEMALE', '2016', 'ANOOSHA'),
('1BI16IS012', 'AYESHA', 'ISE', 'FEMALE', '2016', 'AYESHA'),
('1BI16IS026', 'KIRTHANA', 'ISE', 'FEMALE', '2016', 'KIRTHANA'),
('1BI16IS027', 'MADHURIKA', 'ISE', 'FEMALE', '2016', 'MADHURIKA'),
('1BI16IS040', 'RACHITA', 'ISE', 'FEMALE', '2016', 'RACHITA');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `usn` varchar(12) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`usn`, `message`) VALUES
('1bi16is026', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) NOT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'In SQL, which command is used to add a column or integrity constraint to a table', 'ADD COLUMN', 'INSERT COLUMN', 'MODIFY TABLE', 'ALTER TABLE', 4),
(1, 2, 'Correct HTML tag for the largest heading is', 'head', 'h1', 'h6', 'heading', 2),
(2, 1, 'In a relational schema, each tuple is divided into fields called', 'Relations', 'Domains', 'Queries', 'All of the above', 2),
(2, 2, 'the attribute of <form > tag', 'method', 'post', 'value', 'get', 1),
(3, 1, 'Cartesian product in relational algebra is ', 'a Unary operator', 'a binary operator', 'a ternary operator', 'not defined ', 2),
(3, 2, 'Inside which HTML element do we put the javaScript', 'scripting', 'script', 'javascript', 'js', 2),
(4, 1, 'DML is provided for', 'Description of logical structure of database', 'The addition of new structures in the database system', 'Manipulate & processing of database', 'Definition of physical structure of the database system', 3),
(4, 2, 'Which one of the following functions is used to determine object type in php ?', 'type()', 'is_a()', 'is_obj()', 'object()', 3),
(5, 1, 'AS clause is used in SQL for', 'Selection operation', 'Rename operation', 'Join operation', 'Projection operation', 2),
(5, 2, 'Is PHP case sensitive ?', 'false', 'true', 'undefined', 'none', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `usn` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` varchar(11) DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`usn`, `test_id`, `test_date`, `score`) VALUES
('1BI16IS040', 2, '2019-11-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
(1, 'DBMS'),
(2, 'WEB TECHNOLOGY'),
(3, 'DATA STRUCTURE');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'DBMS TEST', '5'),
(2, 2, 'Web technology', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_admin`
--
ALTER TABLE `exam_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `exam_user`
--
ALTER TABLE `exam_user`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`,`test_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
