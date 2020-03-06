-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 07:57 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comments` text,
  `commented_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `comments`, `commented_at`) VALUES
(1, 7, 7, 'Informative (y)', '2019-08-11 05:47:43'),
(2, 3, 7, 'Amazing content', '2019-08-11 06:06:16'),
(3, 3, 7, 'nice', '2019-08-11 06:20:53'),
(4, 3, 7, 'wow', '2019-08-11 06:22:53'),
(5, 2, 7, 'great', '2019-08-11 06:25:15'),
(6, 3, 7, 'Great', '2019-08-11 03:59:12'),
(7, 5, 7, 'Well done.', '2019-08-11 04:00:56'),
(8, 5, 7, 'great work', '2019-08-11 04:01:22'),
(9, 5, 4, 'Amazing', '2019-08-11 04:02:04'),
(10, 3, 4, 'Testing...', '2019-08-11 04:11:18'),
(11, 1, 4, 'wow', '2019-08-15 22:08:09'),
(12, 3, 4, 'nice work', '2019-08-15 23:13:55'),
(13, 5, 4, 'nice', '2019-08-19 03:17:54'),
(14, 4, 4, 'nice content', '2019-08-19 05:47:42'),
(15, 6, 4, 'nice', '2019-08-19 06:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body` text,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `title`, `body`, `posted_at`) VALUES
(1, 2, 'Programming Language', 'Java is an Object Oriented Programming language.', '2019-03-13 22:49:55'),
(2, 2, 'Big Data Analytics', 'Big data analytics helps organizations harness their data and use it to identify new opportunities. That, in turn, leads to smarter business moves, more efficient operations, higher profits and happier customers. In his report Big Data in Big Companies, IIA Director of Research Tom Davenport interviewed more than 50 businesses to understand how they used big data. He found they got value in the following ways:\n\nCost reduction. Big data technologies such as Hadoop and cloud-based analytics bring significant cost advantages when it comes to storing large amounts of data â€“ plus they can identify more efficient ways of doing business.\nFaster, better decision making. With the speed of Hadoop and in-memory analytics, combined with the ability to analyze new sources of data, businesses are able to analyze information immediately â€“ and make decisions based on what theyâ€™ve learned.\nNew products and services. With the ability to gauge customer needs and satisfaction through analytics comes the power to give customers what they want. Davenport points out that with big data analytics, more companies are creating new products to meet customersâ€™ needs.', '2019-03-30 05:29:54'),
(3, 2, 'Object Oriented Programming Language', 'Java is an object oriented programming Language.', '2019-04-12 21:22:04'),
(4, 2, 'Artificial Intelligence', 'Autonomous weapons\n\nAI programmed to do something dangerous, as is the case with autonomous weapons programmed to kill, is one way AI can pose risks. It might even be plausible to expect that the nuclear arms race will be replaced with a global autonomous weapons race. Russiaâ€™s president Vladimir Putin said: â€œArtificial intelligence is the future, not only for Russia, but for all humankind. It comes with enormous opportunities, but also threats that are difficult to predict. Whoever becomes the leader in this sphere will become the ruler of the world.â€\nAside from being concerned that autonomous weapons might gain a â€œmind of their own,â€ a more imminent concern is the dangers autonomous weapons might have with an individual or government that doesnâ€™t value human life. Once deployed, they will likely be difficult to dismantle or combat.', '2019-04-28 05:02:23'),
(5, 3, 'Human-Computer Interaction (HCI)', 'Human-Computer Interaction (HCI) is a multidisciplinary field of study focusing on the design of computer technology and, in particular, the interaction between humans (the users) and computers. While initially concerned with computers, HCI has since expanded to cover almost all forms of information technology design.\n               HCI became a crucial instrument in popularizing the idea that the interaction between a computer and the user should resemble a human-to-human, open-ended dialogue. Initially HCI researchers focused on improving the usability of desktop computers (i.e., practitioners concentrated on how easy computers are to learn and use). However, thanks to the rise of technologies such as the Internet and the smartphone, computer use has increasingly moved away from the desktop to embrace the mobile world, and HCI has steadily encompassed more fields.', '2019-05-10 22:04:02'),
(6, 4, 'Computer Network', 'A computer network is a set of connected computers. Computers on a network are called nodes. The connection between computers can be done via cabling, most commonly the Ethernet cable, or wirelessly through radio waves. Connected computers can share resources, like access to the Internet, printers, file servers, and others. A network is a multipurpose connection, which allows a single computer to do more.', '2019-05-11 02:19:01'),
(7, 6, 'Classifier', 'A classifier is a special case of a hypothesis (nowadays, often learned by a machine learning algorithm). A classifier is a hypothesis or discrete-valued function that is used to assign (categorical) class labels to particular data points. In the email classification example, this classifier could be a hypothesis for labeling emails as spam or non-spam. However, a hypothesis must not necessarily be synonymous to a classifier.', '2019-07-17 06:17:32'),
(8, 4, 'Lab', 'tasshkjashdjh', '2019-08-11 04:08:02'),
(9, 4, 'Lab2', 'new lab 2', '2019-08-11 06:46:08'),
(10, 4, 'SWE', 'Department of software engineering.', '2019-08-16 02:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(2, 'xyz', 'xyz@gmail.com', 'd16fb36f0911f878998c136191af705e'),
(3, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(4, 'pooja', 'pooja@gmail.com', '9cbb6aebcf5ae14a9248b4c08165212e'),
(5, 'asdf', 'asdf@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(6, 'anabia', 'anabia123@gmail.com', 'f5612a08178da398c6b273093558cf27'),
(7, 'sapna', 'sapna@gmail.com', '907175e69298b3b6ce23e929159a7728');

-- --------------------------------------------------------

--
-- Table structure for table `userschat`
--

CREATE TABLE `userschat` (
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `with_user_id` int(11) DEFAULT NULL,
  `chat` text,
  `chat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userschat`
--

INSERT INTO `userschat` (`chat_id`, `user_id`, `with_user_id`, `chat`, `chat_at`) VALUES
(1, 4, 6, 'hi', '2019-08-12 16:17:27'),
(2, 6, 4, 'hello', '2019-08-12 16:47:22'),
(3, 4, 6, 'how r u?', '2019-08-12 05:19:08'),
(4, 4, 5, 'Hi :-)', '2019-08-12 05:21:00'),
(5, 4, 6, '?', '2019-08-12 05:24:44'),
(6, 4, 7, 'hi', '2019-08-12 05:25:11'),
(7, 7, 4, 'hi', '2019-08-12 05:26:05'),
(8, 7, 5, 'hi', '2019-08-12 05:26:20'),
(9, 6, 4, 'i am fine :-)', '2019-08-12 05:27:10'),
(10, 6, 4, 'what about you?', '2019-08-12 05:27:25'),
(11, 6, 3, 'hey!', '2019-08-12 05:31:24'),
(12, 6, 4, '??', '2019-08-12 05:37:53'),
(13, 4, 6, '??', '2019-08-14 07:53:15'),
(14, 4, 6, 'reply to de do ?', '2019-08-19 03:18:19'),
(15, 4, 3, 'hi', '2019-08-19 05:45:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userschat`
--
ALTER TABLE `userschat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `chatUser_fk` (`user_id`),
  ADD KEY `chatwithUser_fk` (`with_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userschat`
--
ALTER TABLE `userschat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `userschat`
--
ALTER TABLE `userschat`
  ADD CONSTRAINT `chatUser_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `chatwithUser_fk` FOREIGN KEY (`WITH_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
