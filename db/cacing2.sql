-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 05:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cacing`
--

-- --------------------------------------------------------

--
-- Table structure for table `done`
--

CREATE TABLE `done` (
  `id` int(11) NOT NULL,
  `nama_task` varchar(155) NOT NULL,
  `content` longtext NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dotoday`
--

CREATE TABLE `dotoday` (
  `id` int(11) NOT NULL,
  `nama_task` varchar(155) NOT NULL,
  `content` longtext NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inprogress`
--

CREATE TABLE `inprogress` (
  `id` int(11) NOT NULL,
  `nama_task` varchar(155) NOT NULL,
  `content` longtext NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inprogress`
--

INSERT INTO `inprogress` (`id`, `nama_task`, `content`, `start_date`, `start_time`, `due_date`, `due_time`) VALUES
(1, 'in progress', 'progrss', '2022-01-14', '06:14:25', '2022-01-15', '08:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `users_id` int(150) NOT NULL,
  `nama_task` varchar(155) NOT NULL,
  `content` longtext NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL,
  `status` int(33) NOT NULL,
  `mark_done` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `users_id`, `nama_task`, `content`, `start_date`, `start_time`, `due_date`, `due_time`, `status`, `mark_done`) VALUES
(1, 1, 'sdsds', '&lt;p&gt;fasdasd&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;sdasd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '2021-03-27', '11:46:00', '2022-02-05', '12:46:00', 1, NULL),
(2, 1, 'tes2', '&lt;p&gt;fasdasd&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;sdasd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '2021-03-27', '11:46:00', '2022-02-05', '12:46:00', 1, NULL),
(3, 1, 'tes3', '&lt;p&gt;fasdasd&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;sdasd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '2021-03-27', '11:46:00', '2022-02-05', '12:46:00', 1, 0),
(4, 1, 'tes4', '&lt;p&gt;fasdasd&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;sdasd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '2021-03-27', '11:46:00', '2022-02-05', '12:46:00', 1, 0),
(5, 4, 'tes4', '&lt;p&gt;fasdasd&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;sdasd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;sd&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '2021-03-27', '11:46:00', '2022-02-05', '12:46:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `is_active` int(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `terms` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama`, `is_active`, `created_date`, `terms`) VALUES
(1, 'robby@ardhacodes.com', 'robby@ardhacodes.com', '$2y$10$NHNLpNPg7OgwjrvuA8HBS.Tg6MJgExOIMdvuT4IVmi0rhmblYv6DG', 'Robby Firmansyah Ardha', 1, '2022-01-17 06:46:55', 'Agree'),
(2, 'testes', 'testes@testes.cc', '$2y$10$TeD03rUbyALLtTyS6qrtj.M2XCkkP6HyCdAV5ockyTP/pqTSuq2Jy', 'testes', 1, '2022-01-17 06:49:22', 'Agree'),
(3, 'yoiyoi', 'yoiyoi@ac.c', '$2y$10$nEQXBpCfwE3gsKF4U9AvOOIGK3NWiiGEFDWYk09.5zyBifHjrmbkG', 'yoiyoiyoiyoi', 1, '2022-01-17 06:50:21', 'Agree'),
(4, 'tess@asdasd.cc', 'tess@asdasd.cc', '$2y$10$2TuT8N1AZjsqv5mWQL0juOyL2uL2jl90/gvhPWv.F5eMc9IkhsOTe', 'hellooo', 1, '2022-01-24 03:51:59', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `done`
--
ALTER TABLE `done`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dotoday`
--
ALTER TABLE `dotoday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprogress`
--
ALTER TABLE `inprogress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `done`
--
ALTER TABLE `done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dotoday`
--
ALTER TABLE `dotoday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inprogress`
--
ALTER TABLE `inprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
