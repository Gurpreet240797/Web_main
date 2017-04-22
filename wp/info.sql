-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 06:01 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

CREATE TABLE `inform` (
  `name` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `department` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`name`, `class`, `department`, `email`, `contact`, `id`, `gender`) VALUES
('Gurpreet', 'SE', 'Information Technology', 'gurpreet@visionhub24.com', '8286950726', 2015134210, ''),
('Gurpreet', 'SE', 'Information Technology', 'gurpreet@gmail.com', '9930505395', 2015134268, ''),
('jagveer', 'TE', 'Information Technology', 'jagveer@gmail.com', '8286950726', 2015134210, 'Male'),
('jagveer', 'TE', 'Information Technology', 'jagveer@gmail.com', '8286950726', 2015134210, 'Male'),
('Gurdeep', 'SE', 'Information Technology', 'gurdeep@gmail.com', '9996661234', 2015134220, 'Male'),
('joel', 'SE', 'Information Technology', 'joel@gmail.com', '9569321177', 2015151515, 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
