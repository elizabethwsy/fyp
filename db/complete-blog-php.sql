-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 10:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complete-blog-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Read every day', 1, '2018-02-02 23:58:02', '2018-02-01 11:14:31'),
(2, 1, 'Second post on LifeBlog', 'second-post-on-lifeblog', 0, '', '<p>This is the body of the second post on this site</p>\r\n\r\n<p>This is the body of the second post on this site</p>\r\n\r\n<p>This is the body of the second post on this site</p>\r\n\r\n<p>This is the body of the second post on this site</p>\r\n', 1, '2019-01-23 01:27:27', '2019-01-23 01:27:24'),
(3, 1, 'Title of the Post', 'title-of-the-post', 0, '', '<p>This is the body of the third post on this site</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>This is the body of the third post on this site</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>This is the body of the third post on this site</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>\\\\r\\\\n</p>\r\n\r\n<p>\\r\\n</p>\r\n', 1, '2019-01-25 14:58:28', '2019-01-25 14:58:26'),
(4, 1, 'New motivation Post', 'new-motivation-post', 0, '', '<p>Testing for new motivation post&nbsp;</p>\r\n\r\n<p>test</p>\r\n\r\n<p>test</p>\r\n\r\n<p>test</p>\r\n\r\n<p>test</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2019-01-25 15:07:11', '2019-01-25 15:06:59'),
(5, 1, 'new motivation post 2', 'new-motivation-post-2', 0, 'flat,800x800,075,f.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper bibendum tellus eget vulputate. Suspendisse vel varius neque. Sed lorem neque, viverra vel leo sit amet, congue elementum nibh. Donec bibendum scelerisque fringilla. Aliquam sed felis non elit lobortis pretium. Aliquam sed varius lorem. Mauris sem dolor, sollicitudin et odio sed, hendrerit laoreet orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mauris consequat nunc diam, sit amet euismod metus varius sit amet. Proin malesuada nisi nec dui cursus tempus. In ultricies, massa id venenatis feugiat, risus mi efficitur est, non sollicitudin felis ligula in dolor. Donec ac quam et nisi ultrices euismod. Integer viverra sed urna et efficitur. Praesent sed sem eget nisi lobortis condimentum. Ut gravida faucibus ante, non hendrerit orci tempus eget. Fusce erat sem, mollis non risus ut, posuere sodales purus. In sem dui, pretium at est eleifend, rhoncus laoreet neque.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cras aliquam aliquet blandit. Aliquam sed sem a augue scelerisque dapibus. Ut mi ex, accumsan a leo non, lobortis facilisis magna. Aenean finibus felis erat, ut vehicula enim dignissim porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ornare quis lacus ac dictum. Curabitur nec tincidunt mauris. Aliquam pretium urna ac aliquet sollicitudin.&lt;/p&gt;\r\n\r\n&lt;p&gt;Morbi lobortis lorem quam. Morbi a elit justo. Nam libero nisi, gravida eu eleifend ac, ultrices consectetur eros. Pellentesque tempor tempus neque eu tempus. Nunc venenatis sed massa vitae iaculis. Nulla facilisi. Curabitur nec luctus erat. Etiam eu pulvinar lacus. Morbi pharetra metus ut orci iaculis, a mollis risus dictum. Suspendisse feugiat sed eros gravida pharetra. Vivamus eu cursus quam. Integer auctor placerat odio, eget sodales lorem porttitor eleifend.&lt;/p&gt;\r\n\r\n&lt;p&gt;Donec sit amet neque in tortor condimentum laoreet. Nam tincidunt urna nec egestas vulputate. Sed interdum tellus nec cursus efficitur. Proin lobortis et orci sit amet mollis. Vestibulum eros metus, egestas a viverra eget, maximus at sapien. Maecenas tincidunt pretium lectus sed suscipit. Suspendisse elementum, ipsum vel faucibus dictum, nisi ante suscipit lacus, non mattis lorem ex id leo. Praesent eget porta velit. Phasellus et libero eu elit interdum ultrices a quis nisl. Suspendisse sit amet risus et dui malesuada iaculis nec eget mi. Sed placerat tellus eu augue imperdiet ullamcorper.&lt;/p&gt;\r\n', 1, '2019-01-25 15:08:13', '2019-01-25 15:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'awa@awa.com', '', 'd41d8cd98f00b204e9800998ecf8427e', '2018-01-08 04:52:58', '2018-01-08 04:52:58'),
(2, 'aaaa1111', 'aaaa1111@gmail.com', 'Admin', 'd41d8cd98f00b204e9800998ecf8427e', '2019-01-20 17:46:39', '2019-01-20 17:46:39'),
(3, 'aaaa2222', 'aaaa2222@gmail.com', NULL, '103b70723e4dc645882f46323c2f6d44', '2019-01-20 17:49:43', '2019-01-20 17:49:43'),
(4, 'aaaa3333', 'aaaa3333@gmail.com', 'Author', '13506d53f0ba479e04812be7dd81a783', '2019-01-23 01:28:11', '2019-01-23 01:28:11'),
(5, 'asdf1234', 'asdf1234@1234', NULL, '1adbb3178591fd5bb0c248518f39bf6d', '2019-01-27 17:24:59', '2019-01-27 17:24:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD UNIQUE KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_topic`
--
ALTER TABLE `post_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
