-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliofpr1`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `link`, `created_at`, `updated_at`) VALUES
(1, 'How can you print a document from your laptop at HZ?', 'Select the following printer for your job: HZ Printer, use your HZ Pass and choose your format', 'link', '2025-02-16 13:54:36', '2025-02-16 13:54:37'),
(2, 'How can you scan a document and send it to your laptop at HZ?', 'Log on to the printer using your HZ card and choose the scan option', 'link', '2025-02-16 13:55:40', '2025-02-16 13:55:41'),
(3, 'How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?', 'Search at the HZ Web Shop', 'link', '2025-02-16 13:56:42', '2025-02-16 13:56:43'),
(4, 'How can you book a project space?', 'With the self service portal, click on the new reservation button and you can choose where you want and when to be in the room.', 'link', '2025-02-16 13:59:02', '2025-02-16 13:59:04'),
(5, 'What are the instructions if you want to park your car at the HZ parking lot?', 'Since I don\'t own or drive a car, maybe you can use your HZ student card and reserve your time there', 'link', '2025-02-16 13:59:05', '2025-02-16 13:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(10) NOT NULL,
  `title` char(225) NOT NULL,
  `slug` char(225) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Study Choice', 'Iuliabac', 'If you have read my profile page, you know that I want to do data management in the future. Because My parents thought of me becoming one and I got interested on the subject. A data manager is someone who collects and rearranges data in a specific order, so that it world be easier for others.', '2025-02-16 13:46:30', '2025-02-16 13:46:33'),
(2, 'SWOT', 'Iuliabac', '<p>Strengths: Understanding, fast learner, good listener, can solve most problems without any help</p>\r\n    <p>Weaknesses: Writing</p>\r\n    <p>Opportunities: Organization, Ideas</p>\r\n    <p>Threats: discrimination because of a learning disability</p>', '2025-02-16 13:46:31', '2025-02-16 13:46:34'),
(3, 'Programming experience', 'Iuliabac', 'The fist time I ever learned programing was in 7th grade, on HTML. All of our stuff were coded using, NOTEPAD? yes, thats right! all of the coding in middle school were on notepad. Then in High School, I used python for Computer Science classes, however we didn\'t use that much... Right now, I am rediscovering this thing called \"Programming\" and all of this is made using \"Visual Studio Code\", and let me tell you. It\'s much more easier than using notepad that\'s for sure!', '2025-02-16 13:46:31', '2025-02-16 13:46:35'),
(4, 'Feedback', 'Iuliabac', 'My colleges really liked the nostalgic aesthetic that I have going on with the site (e.g: Old-school GIFs and the amateurish coding). However all of my files were not organised as it was intended. all of the were in one folder and the files were all hosted on github instead of the projects folder. and all of my pictures were from the internete and the link redirected to the website, that is a bad thing because the web pictures can get deleted and won\'t be able to see it. so instead I organised my folders, downloaded my Pictures and have everything well organised and well done!', '2025-02-16 13:46:32', '2025-02-16 13:46:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
