-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2021 at 06:16 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulimine_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_registrations`
--

CREATE TABLE `event_registrations` (
  `id` int NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `second_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `organization_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_registrations`
--

INSERT INTO `event_registrations` (`id`, `first_name`, `second_name`, `email`, `phone_number`, `organization`, `organization_phone`) VALUES
(1, 'Test first', 'Test last', 'test@testzxc.com', '1234567890', 'Test Org', '0987654321'),
(2, 'test1', 't1', 'test1t1@gmail.com', '123123', 'abc', '234234234'),
(3, 'abab', 'a', 'abab19@gmail.com', '456456', '456456', '678678'),
(4, 'johntest', 'jt', 'johntestem123@gmail.com', '5656756756', 'bnm\'s', '456456456'),
(5, 'marytest', 'm', 'marytestghgh@gmail.com', '5645645', 'fghfgh', '56456'),
(6, 'Paul', 'Lokende', 'paullokende@gmail.com', '61559855', 'Paradox Investments Limited', '0968341554');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
