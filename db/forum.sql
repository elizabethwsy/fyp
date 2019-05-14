-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `userid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `userid`, `date`, `message`) VALUES
(1, 0, 'aaaa2222', '12-04-2019 01:19:38', 'hi'),
(2, 1, 'aaaa2222', '12-04-2019 05:21:10', 'Super module to take. There are like 10000 questions in the testbank so you just need to go through all of them with a sick level of discipline. And after the finals - go and aggregate the number of mistakes you have to determine your score.\r\n\r\nI had a group of 20 to 30 friends and we did a normal distribution curve to figure out our grades. \r\n\r\nEnd result? I S/U-ed the module.....'),
(4, 2, 'swun001', '12-04-2019 08:57:21', 'You can definitely SU your UEs. \r\nHowever, for Cores and GER-PEs, the SU option is not available for that'),
(6, 3, 'billy1123', '15-04-2019 15:05:25', 'There are 4 main types of internships:<br><br>\r\n- <strong>Summer: </strong> Internship period from May to August <br>\r\n- <b>Winter:</b> Internship period from December to late January<br>\r\n- <b>Part-time: </b>Internship period during semester, which may comprise between 2 days to 4 days / week<br>\r\n- <b>Leave of Absence: </b>Internship period instead of the academic semester, which would require you to take a 4 to 6 months LOA, and subsequently either delay graduation by 1 semester, or you overload modules to rush in the other semesters<br>\r\n'),
(7, 3, 'billy1123', '15-04-2019 15:20:42', 'Internships are useful because you get real-life experience and exposure to certain industries/ sectors, and zeng your CV up for grad applications. You get to learn more about yourself (do you work well in unstructured environments or need guidance from seniors? do you function well in high-stress places?)\r\n\r\nBut most importantly, you get to connect and develop your professional network. For those of us who do not have family connections, what we need to really to exploit these relationships at our internships and leave a good impression. This will maximize your chances of transitioning Into a full-time offer too.'),
(8, 6, 'swun001', '15-04-2019 17:32:08', 'Sharing the links for this module - notes are collated from friends! (:\r\n\r\n<a href=\"https://app.box.com/s/csttm1auac8bx309siic2dfpu2o3bofm\">link is here</a>\r\n\r\nWhat do you think of this mod?');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `question` varchar(640) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(640) COLLATE utf8_unicode_ci NOT NULL,
  `topic_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `question`, `description`, `topic_id`, `time`) VALUES
(1, 'Notes for EE8086 - Astronomy - Stars Galaxies and Cosmology', 'Description:\r\nThe basic goal of this course is to give students a fundamental understanding of astronomy. Through the course, the students will learn about the birth of the universe, the origin of galaxies, the evolution of stars and the formation of planets. Our solar system will be one of the main topics to be studied. Some unanswered mysteries of the universe and mankind will be discussed and hopefully lead the students to further their own exploration. During this course, the diverse facts that form the context of a science will be delivered. During the course, students will also have opportunities to participate in various prac', 'Road to GPA 5.0', '12-04-2019 (Fri) 03:14:04'),
(2, 'SU', 'Can I SU my Cores/GER PE/UE whatever those are? ', 'Midnight SOS', '12-04-2019 (Fri) 08:42:51'),
(3, 'Types of internships', 'What are the different types of internship we can do during our semester?', 'Internships & Career Advice', '15-04-2019 (Mon) 14:37:03'),
(5, 'Is eCommerce a good place to start after graduation? Can anybody compare Shopee vs Lazada vs Zalora?', 'y4 graduating soon', 'Internships & Career Advice', '15-04-2019 (Mon) 16:51:44'),
(6, 'EE8092 Digital Lifestyle Notes', 'NTU Science, Technology & Society (STS) Elective\r\n\r\nModule:\r\nEE8092 Digital Lifestyle\r\n\r\nDescription:\r\nHome Entertainment Systems and Game Consoles. Digital Audio Systems. Digital Cameras and Video Camcorders. Personal Computers. Mobile Phones and PDA', 'Road to GPA 5.0', '15-04-2019 (Mon) 17:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `userid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `comment_id`, `userid`, `date`, `message`) VALUES
(1, 0, 'billy1123', '15-04-2019 16:25:19', 'What is SU?'),
(2, 0, 'billy1123', '15-04-2019 16:26:53', 'hi'),
(3, 4, 'billy1123', '15-04-2019 16:35:26', 'test reply'),
(4, 4, 'billy1123', '15-04-2019 16:36:34', 'What is su?'),
(5, 2, 'swun001', '16-04-2019 13:28:21', 'Thanks!');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `t_description` varchar(640) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic`, `t_description`, `slug`) VALUES
('2', 'Road to GPA 5.0', 'All things related to academics. You can post notes, tips etc. for the benefit of others', 'gpa'),
('1', 'Midnight SOS', 'Anything about that keeps you awake all night and you need urgent answers for', 'sos'),
('3', 'EEE', 'Matters related to EEE', 'eee'),
('4', 'IEM', 'Matters related to IEM', 'iem'),
('5', 'Exams & Quizzes', 'Any questions you have about exams or quizzes ', 'exam'),
('6', 'Internships & Career Advice', 'Ask anything about future internship or career opportunities here', 'intern');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Author','Admin') COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'awa@awa.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '2018-01-07 20:52:58', '2018-01-07 20:52:58'),
(2, 'aaaa1111', 'aaaa1111@gmail.com', 'Admin', 'd41d8cd98f00b204e9800998ecf8427e', '2019-01-20 09:46:39', '2019-01-20 09:46:39'),
(3, 'aaaa2222', 'aaaa2222@gmail.com', NULL, '103b70723e4dc645882f46323c2f6d44', '2019-01-20 09:49:43', '2019-01-20 09:49:43'),
(4, 'swun001', 'swun001@e.ntu.edu.sg', NULL, '1d89afe2b63aee6f8a1957107757b277', '2019-04-07 08:53:44', '2019-04-07 08:53:44'),
(5, 'billy1123', 'billy1123@e.ntu.edu.sg', NULL, '4880c12b3844142b9c271d8228642393', '2019-04-15 06:37:50', '2019-04-15 06:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
