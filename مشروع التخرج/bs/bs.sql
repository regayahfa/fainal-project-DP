-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 أكتوبر 2022 الساعة 23:51
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `full Name` varchar(255) NOT NULL,
  `id number` int(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` int(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `age` set('15-25','26-35','36-45','46-55','more 56') NOT NULL,
  `gender` enum('female','male') NOT NULL,
  `weight` int(255) NOT NULL,
  `lengith` int(255) NOT NULL,
  `date of birth` date NOT NULL,
  `program` enum('fitt','yoga','loss weight','mother hood','creat your program') NOT NULL,
  `subscription` enum('1 month','3 months','6 months','9 months','1 year') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
