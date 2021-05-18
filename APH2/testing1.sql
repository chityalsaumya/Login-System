-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2021 at 01:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing1`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`fullname`, `username`, `email`, `password`) VALUES
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'sss'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'sss'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'sss'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'j'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'saumya'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'saumya'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'vv'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'bb'),
('saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', 'ss'),
('mm', 'mm', 'mmm@gmail.com', 'mmm'),
('kiran', 'kiranmay', 'kiran@gmail.com', '$2y$10$bRr4GkvmqiZRf9JZLYNXsufOnw8V.crj6Aw/mCOhawoyEF8WkRsoK'),
('mo', 'mo', 'mo@gmail.com', '$2y$10$Ka6DpkNsxXQgBQFp/bQ9geojLwtArM7tHB3/XTHdjwJotzXmS49TW'),
('nn', 'nn', 'nn@gmail.com', '$2y$10$1VT88.2XCJWnbOaREMp2BuSa/ZeNqlZCxlILQj7UzsHoGSp/ky3HW'),
('ssaa', 'ssaa', 'ssaa@gmail.com', '$2y$10$jfDbdivAlxxJeOCtzSgISuxU8NRx7zl1Aboki4ydTKh8tL.kICBv2');

-- --------------------------------------------------------
