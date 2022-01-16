-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 05:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
  `nama_task` varchar(155) NOT NULL,
  `content` longtext NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL,
  `status` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
