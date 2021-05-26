-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2021 at 04:10 PM
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
-- Database: `testing3`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `fullname`, `username`, `email`, `password`, `action`) VALUES
(1, 'sam', 'sam', 'sam@gmail.com', '$2y$10$P7n/b8l1Oct9.YTqTpIbcuL3mLdS/vhCJvA9PeLFxl/7t6mEYmrP2', '0'),
(2, 'saumya', 'chityalsaumya', 'chityalsaumya@gmail.com', '$2y$10$ze4qW0WCt2.RsbkAS5kPG.tde6vCE/DN4zF1.Sz1.BnzyYid7reR2', '1'),
(3, 'sss', 'sssss', 'ssss@gmail.com', '$2y$10$Fji9pbR091nx.4rysO6ouuvHNqPJCPD3REfHY7ozX6xQl6Un8OFB.', '0'),
(4, 'ssns', 'ssnsss', 'sssns@gmail.com', '$2y$10$yfnM605kX//8Lm/otKQ0re4.4mEH62GNpXlsGncTUKUKPzPdQ/z2i', '1'),
(5, 'ssns', 'snsss', 'ssns@gmail.com', '$2y$10$k86gjZuij/C9prrc.ZVfnOBb24SvSPgmnyvVqv9pqs6/heJ3TjaR.', '0'),
(6, 's', 's', 's@gmail.com', '$2y$10$/etmd5C4wAWrWFCx9ycszO6qc9mBITi/lDyPUbzO/tsERF0BtYlP2', '0'),
(7, 'man', 'man', 'man@gmail.com', '$2y$10$axKd7kKc0e4BSjs5NUjtLOWDrh7mZU5nGqCHoHW93lpv4CK5qOrEO', '0'),
(8, 'anu sharma', 'anu', 'anu@gmail.com', '$2y$10$0siroM90s8yuFlq3564ixOcQSkJY6bLSTJcQgG6Q1YUDKZf9n.4ES', '0'),
(9, 'vinod T', 'vinod', 'vinod@gmail.com', '$2y$10$76n9mIpUolbCU6fhyP6X6.7c.obdYD7ef/7/seFfzV8EuoQthqbqe', '1'),
(10, 'vinay h', 'vinay', 'vinay@gmail.com', '$2y$10$O4nPxBEY4uEty/1usVo2ZON7fBSJTSD7S.lB.qdryMd.1.82icRUe', '0'),
(11, 'mani a', 'mani', 'mani@gmail.com', '$2y$10$oycXVSEb2faWLEv/AdDNUeB6c5QxCA4AwS6m7KzvF5HzY7kwHdCCS', '0'),
(12, 'max s', 'max', 'max@gmail.com', '$2y$10$lxFF.bLUh4ZENE5gPZQ3ceTV8wvyBA./id7KdF7naGLbUFihfmU9e', '1'),
(13, 'ram s', 'ram', 'ram@gmail.com', '$2y$10$t21TcMogJW1RzxqbnrOjru/jPpbtPpDUSbW3bqSn/6TaUeQdhggX.', '1'),
(14, 'niel b', 'niel', 'niel@gmail.com', '$2y$10$h37XadrX00UhFYnuRTp1qOo/vuBe6j42Tc6dPuVOyMV9Bh1CBafwi', '0'),
(15, 'kim s', 'kim', 'kim@gmail.com', '$2y$10$t27jmynCEuOC6miGrcRtheOETe84SoHTm/67csP6MnYSEx2fMgQKG', '0'),
(16, 'nancy', 'nancy', 'nancy@gmail.com', '$2y$10$yiDyESWkA/o4HtS51r0KgeHcEaz/1yoxCAxybg5lZPT2EaCwqzJbS', '0'),
(17, 'raman s', 'raman', 'raman@gmail.com', '$2y$10$23Tzna0uC9AzQDAt86E7PeT4FjrvdpKwK9Gnxd/eFkU6I/Z7vOm1e', '1'),
(18, 'ian s', 'ian', 'ian@gmail.com', '$2y$10$5nwTTE7fm21G3rnJbQ.Awudk/eZikao.1/FwN2wSzkAHk91KSbv76', '0'),
(19, 'faisal nawaz', 'fais89', 'faisal@gmail.com', '$2y$10$ybG3vkXeKnpMa6x4HBUJ3ufLzvJ/WL7KiPMhsICnrLnpsZ9AreAzK', '1'),
(20, 'paul d', 'paul', 'paul@gmail.com', '$2y$10$OjL9sX9LnqlUNK0UNx8nreoCHOOfVnbtvz5PD5WRiw0tnIU3BaX5u', '1'),
(21, 'kirann b', 'kirann', 'kirann@gmail.com', '$2y$10$qIjgQzo76WEnmsRWMre20eDxyBYppyqRAMUk6xy4VMyh4Va.x8182', '1'),
(22, 'klaus', 'klaus', 'klaus@gmail.com', '$2y$10$Z0t9Y7yXybvoInu0308YveBrNccwiwyswx7nU.b24Wt5BPww9XHh2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
