-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 03:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `meldingen`
--

CREATE TABLE `meldingen` (
  `Meldingid` int(255) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Datum` varchar(255) NOT NULL,
  `Reden` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meldingen`
--

INSERT INTO `meldingen` (`Meldingid`, `Naam`, `Datum`, `Reden`) VALUES
(1, 'Marlon', '24-04-2024', 'Ziek'),
(2, 'Roald', '23-04-2024', 'Dood'),
(3, 'Bradley', '22-04-2024', 'Vermist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meldingen`
--
ALTER TABLE `meldingen`
  ADD PRIMARY KEY (`Meldingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meldingen`
--
ALTER TABLE `meldingen`
  MODIFY `Meldingid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
