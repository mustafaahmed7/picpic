-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 10:03 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pictagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'uCwsPO4QAm.jpg', '2018-10-18 09:30:02', '2018-10-18 09:30:02', 1),
(4, '57UtYU2AZL.jpg', '2018-10-18 09:30:10', '2018-10-18 09:30:10', 1),
(5, 'UIkN5s23MO.jpeg', '2018-10-18 09:31:05', '2018-10-18 09:31:05', 1),
(6, '3LFzSxtRO9.jpg', '2018-10-18 09:31:10', '2018-10-18 09:31:10', 1),
(7, '8WV3AGMFUg.jpg', '2018-10-18 09:31:14', '2018-10-18 09:31:14', 1),
(8, 'mRZXht98Oz.jpeg', '2018-10-18 09:31:17', '2018-10-18 09:31:17', 1),
(9, 'PSD6hAnVk1.jpg', '2018-10-18 09:31:21', '2018-10-18 09:31:21', 1),
(10, 'Ja9xd2yIzS.jpg', '2018-10-18 09:31:24', '2018-10-18 09:31:24', 1),
(11, 'YXvFshyhVv.jpeg', '2018-10-18 09:31:27', '2018-10-18 09:31:27', 1),
(12, 'gNV2d7Io6Q.jpg', '2018-10-18 09:31:31', '2018-10-18 09:31:31', 1),
(13, 'uJWu2fxVG5.jpg', '2018-10-18 09:31:35', '2018-10-18 09:31:35', 1),
(15, 'BFZhXTsxYd.jpeg', '2018-10-18 10:01:56', '2018-10-18 10:01:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_admin` bit(1) DEFAULT NULL,
  `upload_limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `updated_at`, `created_at`, `is_admin`, `upload_limit`) VALUES
(1, 'Admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-16 22:36:09', '2018-10-16 22:37:36', b'1', NULL),
(2, 'User', 'user@user.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-16 22:37:39', '2018-10-16 22:37:40', b'0', NULL),
(3, 'qqqq', 'q@q.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-17 17:59:15', '2018-10-17 17:59:17', b'0', NULL),
(4, 'testing', 'www@w.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-17 07:58:15', '2018-10-17 07:58:15', b'0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_users` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_uindex` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
