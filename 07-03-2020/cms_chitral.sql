-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 05:59 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.3.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_chitral`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(10) NOT NULL,
  `author_name` varchar(255) COLLATE utf16_bin NOT NULL,
  `author_email` varchar(255) COLLATE utf16_bin NOT NULL,
  `author_password` varchar(255) COLLATE utf16_bin NOT NULL,
  `author_profile_pic` varchar(100) COLLATE utf16_bin NOT NULL,
  `author_intro` text COLLATE utf16_bin NOT NULL,
  `author_signup_date` datetime NOT NULL,
  `author_phone` varchar(20) COLLATE utf16_bin NOT NULL,
  `author_address` varchar(255) COLLATE utf16_bin NOT NULL,
  `author_approve` enum('yes','no') COLLATE utf16_bin NOT NULL,
  `gender` enum('male','female') COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `author_email`, `author_password`, `author_profile_pic`, `author_intro`, `author_signup_date`, `author_phone`, `author_address`, `author_approve`, `gender`) VALUES
(1, 'Mubashir', 'mubashir@domain.com', '12345', 'mubashir.jpg', 'bla bla bla bla', '2020-03-07 00:00:00', '1233455', 'abc 123', 'yes', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_date` date NOT NULL,
  `blog_approve` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `author_id`, `blog_title`, `blog_details`, `blog_date`, `blog_approve`) VALUES
(1, 1, 'my first blog', 'blog details bla bla bla bla', '2020-03-07', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
