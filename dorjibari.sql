-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorjibari`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodysize`
--

CREATE TABLE `bodysize` (
  `id` int(11) NOT NULL,
  `collar` varchar(8) NOT NULL,
  `length` varchar(8) NOT NULL,
  `sleeve` varchar(8) NOT NULL,
  `shoulders` varchar(8) NOT NULL,
  `chest` varchar(8) NOT NULL,
  `tummy` varchar(8) NOT NULL,
  `hips` varchar(8) NOT NULL,
  `cuff` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bodysize`
--

INSERT INTO `bodysize` (`id`, `collar`, `length`, `sleeve`, `shoulders`, `chest`, `tummy`, `hips`, `cuff`) VALUES
(1, 'adf', 'adfaf', 'adfd', 'fadfdasf', 'adfdas', 'fadfad', 'fdafdas', 'fadf'),
(3, 'a', 'aa', 'aaa', 'sss', 'dd', 'ss', 'ddd', 'dddddd');

-- --------------------------------------------------------

--
-- Table structure for table `_tbl_user`
--

CREATE TABLE `_tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_tbl_user`
--

INSERT INTO `_tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Hasan', 'password', 'email@gmail.com'),
(2, 'riyadh3902', '1111', 'riyadh.hasan.920@gmail.com'),
(3, '', '', ''),
(4, 'hasan', '1111', 'riyadh.hasan.920@gmail.com'),
(5, 'a', 'dd', 'ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bodysize`
--
ALTER TABLE `bodysize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_tbl_user`
--
ALTER TABLE `_tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bodysize`
--
ALTER TABLE `bodysize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_tbl_user`
--
ALTER TABLE `_tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
