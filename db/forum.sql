CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL, 
  `post_id` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  message TEXT NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `topics`(
  `topic_id` varchar(128) NOT NULL,
  `topic` varchar(128) NOT NULL,
  `description` varchar(640) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `question` varchar(640) NOT NULL,
  `description` varchar(640) NOT NULL,
  `topic_id` varchar(128) NOT NULL,
  `time` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL, 
  `comment_id` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  date datetime NOT NULL
, message TEXT NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'awa@awa.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '2018-01-08 04:52:58', '2018-01-08 04:52:58'),
(2, 'aaaa1111', 'aaaa1111@gmail.com', 'Admin', 'd41d8cd98f00b204e9800998ecf8427e', '2019-01-20 17:46:39', '2019-01-20 17:46:39'),
(3, 'aaaa2222', 'aaaa2222@gmail.com', NULL, '103b70723e4dc645882f46323c2f6d44', '2019-01-20 17:49:43', '2019-01-20 17:49:43');


INSERT INTO `topics` (`topic_id`, `topic`, `description`) VALUES ('1', 'Midnight SOS', 'Anything about that keeps you awake all night and you need urgent answers for'), ('2', 'Road to GPA 5.0', 'All things related to academics. You can post notes, tips etc. for the benefit of others'),  ('3', 'EEE', 'Matters related to EEE'), ('4', 'IEM', 'Matters related to IEM'), ('5', 'Exams & Quizzes', 'Any questions you have about exams or quizzes '), ('6', 'Internships & Career Advice', 'Ask anything about future internship or career opportunities here');