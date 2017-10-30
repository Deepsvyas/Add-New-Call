-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 07:44 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advanz101`
--
CREATE DATABASE IF NOT EXISTS `advanz101` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `advanz101`;

-- --------------------------------------------------------

--
-- Table structure for table `newcall`
--

DROP TABLE IF EXISTS `newcall`;
CREATE TABLE IF NOT EXISTS `newcall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answertype` varchar(50) NOT NULL,
  `answer` text NOT NULL,
  `subquestions` longtext NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newcall`
--

INSERT INTO `newcall` (`id`, `question`, `answertype`, `answer`, `subquestions`, `created`) VALUES
(14, 'Question 2', 'singlechoice', 'anser for the question 2', '{\"1\":{\"question\":\"sub question 2 -1\",\"answertype\":\"multiline\",\"answer\":[\"sub question multi line text\"]},\"2\":{\"question\":\"sub questjion 2 - 2\",\"answertype\":\"singlechoice\",\"answer\":[\"single choice answer\"]},\"3\":{\"question\":\"sub question 2-3\",\"answertype\":\"multichoice\",\"answer\":[\"multi choice 1\",\"multichoise 2\",\"multichocee 3\",\"multi choice 4\",\"multi choice 5\"]}}', '2017-10-30 18:21:30'),
(16, 'Question 1', 'multiline', 'Answer for the question 1', '', '2017-10-30 18:21:56'),
(17, 'Question 2', 'singlechoice', 'anser for the question 2', '{\"1\":{\"question\":\"sub question 2 -1\",\"answertype\":\"multiline\",\"answer\":[\"sub question multi line text\"]},\"2\":{\"question\":\"sub questjion 2 - 2\",\"answertype\":\"singlechoice\",\"answer\":[\"single choice answer\"]},\"3\":{\"question\":\"sub question 2-3\",\"answertype\":\"multichoice\",\"answer\":[\"multi choice 1\",\"multichoise 2\",\"multichocee 3\",\"multi choice 4\",\"multi choice 5\"]}}', '2017-10-30 18:21:56'),
(18, 'Question 3', 'multichoice', '[\"Answer question 3 multi choice 1\",\"Answer question 3 multi choice 2\",\"Answer question 3 multi choice 3\",\"Answer question 3 multi choice 4\",\"Answer question 3 multi choice 5\"]', '', '2017-10-30 18:21:56'),
(19, 'Question 1', 'multiline', 'Answer for the question 1', '', '2017-10-30 18:24:48'),
(20, 'Question 2', 'singlechoice', 'anser for the question 2', '{\"1\":{\"question\":\"sub question 2 -1\",\"answertype\":\"multiline\",\"answer\":[\"sub question multi line text\"]},\"2\":{\"question\":\"sub questjion 2 - 2\",\"answertype\":\"singlechoice\",\"answer\":[\"single choice answer\"]},\"3\":{\"question\":\"sub question 2-3\",\"answertype\":\"multichoice\",\"answer\":[\"multi choice 1\",\"multichoise 2\",\"multichocee 3\",\"multi choice 4\",\"multi choice 5\"]}}', '2017-10-30 18:24:48'),
(21, 'Question 3', 'multichoice', '[\"Answer question 3 multi choice 1\",\"Answer question 3 multi choice 2\",\"Answer question 3 multi choice 3\",\"Answer question 3 multi choice 4\",\"Answer question 3 multi choice 5\"]', '', '2017-10-30 18:24:48'),
(23, 'question 1', 'multiline', 'Mulit line answer for the question 1', '', '2017-10-30 19:05:24'),
(24, 'question 2', 'singlechoice', 'single choice answer', '{\"1\":{\"question\":\"sub question 1 of question 2\",\"answertype\":\"multiline\",\"answer\":[\"answer of sub question 1 of quesiton 2 in multi line\"]},\"2\":{\"question\":\"sub question 2 of question 2\",\"answertype\":\"singlechoice\",\"answer\":[\"answer of sub question 1 of quesiton 2 in single choice\"]},\"3\":{\"question\":\"sub question 3 of question 2\",\"answertype\":\"multichoice\",\"answer\":[\"answer of sub question 3 of quesiton 2 in multi choice\",\"answer of sub question 3 of quesiton 2 in multi choice\",\"answer of sub question 3 of quesiton 2 in multi choice\",\"answer of sub question 3 of quesiton 2 in multi choice\",\"answer of sub question 3 of quesiton 2 in multi choice\"]}}', '2017-10-30 19:05:24'),
(25, 'Question 3', 'multichoice', '[\"Answer question 3 multi choice 1\",\"Answer question 3 multi choice 2\",\"Answer question 3 multi choice 3\",\"Answer question 3 multi choice 4\",\"Answer question 3 multi choice 5\"]', '', '2017-10-30 19:05:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
