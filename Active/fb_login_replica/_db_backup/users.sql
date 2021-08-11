-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 02:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `gender_custom_pronoun` varchar(50) NOT NULL,
  `gender_custom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `user_name`, `user_password`, `user_dob`, `user_gender`, `gender_custom_pronoun`, `gender_custom`) VALUES
(1, '', '', 'haiderusman', '123456', '0000-00-00', '', '', ''),
(2, 'haider', 'usman', 'haiderusmana', 'ddd', '1947-08-12', 'male', 'select your pronoun', ''),
(3, 'Muhammad', 'Imran', 'imran', 'imran', '1945-06-11', 'male', 'select your pronoun', ''),
(4, 'asdf', 'asdf', 'asdf', 'asdf', '1946-08-08', 'custom', 'select your pronoun', ''),
(5, 'A', 'B', 'C', 'D', '1955-11-17', 'male', 'select your pronoun', ''),
(6, 'asdf', 'asdfas', 'asdfdddddddddddddddddddddd', 'dddddddddddddddddddddddddddddd', '1945-07-08', 'custom', 'he: \'wish him a happy birthday!\'', 'asdfasd'),
(7, 'asdfa', 'adsfa', 'asdfa', 'asdfa', '1948-06-06', 'custom', 'he: \'wish him a happy birthday!\'', 'asdfasd'),
(8, 'Saqib', 'Haider', 'Saqibhaider', '123456', '2010-01-01', 'custom', 'he: \'wish him a happy birthday!\'', 'Male'),
(9, 'Saqib', 'Haider', 'Saqib', 'adsfasdfasd', '2010-01-01', 'custom', 'he: \'wish him a happy birthday!\'', 'Male'),
(10, 'Saqib', 'Haider', 'Haider', '123456', '2010-01-01', 'custom', 'they: \'wish them a happy birthday!\'', 'Male'),
(11, 'ddddddddddd', 'dddggggggggg', 'wwwwwwwwwwwwwwwww', 'ggggggggggggggggggggggggggggggggggggggggggggggggggg', '1947-09-06', 'custom', 'he: \'wish him a happy birthday!\'', 'adfasdf'),
(12, 'aaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddd', '1940-02-03', 'custom', 'she: \'wish her a happy birthday!\'', 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF'),
(13, 'asdf', 'adsf', 'haiderusman@live.com', 'asdfasd', '1946-06-06', 'custom', 'they: \'wish them a happy birthday!\'', 'asdfads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
