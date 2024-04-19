-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 08:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveydb`
--
CREATE DATABASE IF NOT EXISTS `surveydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `surveydb`;

-- --------------------------------------------------------

--
-- Table structure for table `user_survey`
--
-- Creation: Apr 19, 2024 at 12:35 PM
-- Last update: Apr 19, 2024 at 06:00 PM
--

DROP TABLE IF EXISTS `user_survey`;
CREATE TABLE `user_survey` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `fav_food` text NOT NULL,
  `scale_eat` int(11) NOT NULL,
  `scale_mov` int(11) NOT NULL,
  `scale_tv` int(11) NOT NULL,
  `scale_radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user_survey`:
--

--
-- Dumping data for table `user_survey`
--

INSERT INTO `user_survey` (`user_id`, `full_name`, `email`, `contact`, `age`, `fav_food`, `scale_eat`, `scale_mov`, `scale_tv`, `scale_radio`) VALUES
(55, 'Noel Mthembu', 'noel01.com@hotmail.com', '0839890988', 26, 'Pizza, Pasta, Pap & Wors', 1, 2, 3, 4),
(56, 'Noel Ayanda', 'noel01@gmail.com', '0986674444', 5, 'Pasta, Other', 1, 2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_survey`
--
ALTER TABLE `user_survey`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_survey`
--
ALTER TABLE `user_survey`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table user_survey
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'surveydb', 'user_survey', '{\"CREATE_TIME\":\"2024-04-19 12:19:13\",\"sorted_col\":\"`scale_tv` ASC\"}', '2024-04-19 17:56:12');

--
-- Metadata for database surveydb
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
