-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 10:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_gi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_visit`
--

CREATE TABLE `tabel_visit` (
  `id` int(11) NOT NULL,
  `idCard` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `visitDate` date NOT NULL DEFAULT current_timestamp(),
  `tujuan` varchar(11) NOT NULL,
  `covid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_visit`
--

INSERT INTO `tabel_visit` (`id`, `idCard`, `fullname`, `wa`, `email`, `visitDate`, `tujuan`, `covid`) VALUES
(1, 112233445, 'sususus', '0856566', 'dasd@dfas.cs', '2021-01-11', 'visit', ''),
(3, 4, 'df', '5445', 'wsdf@edf', '2021-01-12', 'pelamar', ''),
(5, 4553, 'ffg', '35', 'g@rg', '2021-01-20', 'tamu', ''),
(11, 43, 'ef', '35', 'g@rg', '2021-01-20', 'tamu', ''),
(12, 0, '', '', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_visit`
--
ALTER TABLE `tabel_visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_visit`
--
ALTER TABLE `tabel_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
