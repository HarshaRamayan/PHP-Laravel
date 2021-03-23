-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 02:18 AM
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
-- Database: `php project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(7, 'Sriharsha Ramayanam', 'sriharsharamayan@gmail.com', '2147483647', 'Ronaldo'),
(13, 'Sriharsha Ramayanam', 'sriharsharamayan3@gmail.com', '8073720330', 'Iphone'),
(21, 'Sudheer', 'sudhirsuri43@gmail.com', '8074567890', 'Iphone@123'),
(22, 'Sriharsha Ramayanam', 'harshar44@gmail.com', '8073720330', 'Ronaldo'),
(23, 'Anish Kumar', 'anish.panchadar111@gmail.com', '8073579757', 'Anish@9032'),
(24, 'harsha', 'hero@hero.com', '8075679876', 'Iphone@123'),
(25, 'Chase Silvestri', 'cbostic829@yahoo.com', '8016335890', 'qwerty'),
(26, 'Sriharsha Ramayanam', 'sriharsharamayan345@gmail.com', '8073725768', 'popo'),
(27, 'yank', 'yank@hero.com', '8908909876', 'popopo'),
(28, 'harrypotter', 'harrypotter@gmail.com', '8908900987', 'yuyu'),
(29, 'harsha', 'gmail@heman.com', '8907897896', 'momo'),
(30, 'Sriharsha Ramayanam', 'sriharsharamayan@gmail.com', '8073720330', '212'),
(31, 'Sriharsha Ramayanam', 'sramayan@confederationcollege.', '8073720330', '123'),
(32, 'ap', 'anish.panchadar111@gmail.com', '8073579757', 'anish'),
(33, 'ap', 'anish.panchadar111@gmail.com', '8073579757', 'Anish'),
(34, 'anish', 'anishp@gmail.com', '0000', 'Anish'),
(35, 'harsha12', 'jikn@gmail.com', '9090909090', 'Iphone'),
(36, 'kishore', 'rmkkishore@gmail.com', '8908909876', 'Iphone'),
(37, 'srikar', 'srikar@gmail.com', '8978963897', 'Iphone'),
(38, 'leela', 'leela@gmail.com', '8989898989', 'popo'),
(39, 'jkasfn', 'email@gmail.com', '909499', 'uio'),
(40, 'Sriharsha Ramayanam', 'sriharsharamayan@gmail.com', '8073720330', 'Ronaldo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
