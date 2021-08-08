-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 04:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`) VALUES
(3, 'rami kh', '12345'),
(5, 'rami1111', '123456789'),
(6, 'Johnson', 'valitr'),
(7, 'Mean Chey University', 'admin'),
(8, 'Information and Technology', 'cpu'),
(12, 'cambodia', 'mcu'),
(13, 'mcu', '123'),
(14, 'mcu', '123'),
(15, 'mcu', '123'),
(16, 'IT', 'adminIT'),
(18, 'IT', 'adminIT'),
(19, 'IT', 'adminIT'),
(20, 'MBR', 'wtf'),
(21, 'WIFI', 'slow'),
(22, 'ICT', 'admin'),
(23, 'dfdfdf', 'dfdf'),
(25, 'rami\'s hourse', 'bam'),
(26, 'kakaka %^$$#%^&*&', 'dfdfdf'),
(27, 'here we crupt', '$3UJk14FL7pz.'),
(28, 'decrypt pass', '$2ngluNRzx.5w'),
(29, 'decrypt pass', '*0'),
(30, 'ffffff', '*0'),
(31, 'sdsdsd', 'iuMgqzHVumZqA'),
(32, 'sdsd', '$2y$10$iusesomecazystring224ue45dI./zwEFXFnmw7Tp2mCM3.axm9sW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
