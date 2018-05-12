-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 12:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_works`
--

CREATE TABLE `tb_works` (
  `id` int(11) NOT NULL,
  `work_name` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1: planning, 2: doing, 3: complete'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tb_works`
--

INSERT INTO `tb_works` (`id`, `work_name`, `start_date`, `end_date`, `status`) VALUES
(1, 'Hello  Work Name', '2018-05-10', '2018-05-18', 1),
(2, 'World', '2018-05-08', '2018-05-17', 2),
(3, 'PHP', '2018-05-10', '2018-05-18', 3),
(4, 'Java', '2018-05-08', '2018-05-17', 2),
(5, 'Node ', '2018-05-10', '2018-05-25', 1),
(6, 'Angularjs', '2018-05-05', '2018-05-19', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_works`
--
ALTER TABLE `tb_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_works`
--
ALTER TABLE `tb_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
