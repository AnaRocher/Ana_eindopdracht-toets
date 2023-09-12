-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2023 at 08:18 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindopdracht_puntenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leerlingen`
--

INSERT INTO `leerlingen` (`id`, `voornaam`, `naam`) VALUES
(1, 'John', 'Doe'),
(2, 'Jane', 'Doe'),
(4, 'Raf', 'Lempens');

-- --------------------------------------------------------

--
-- Table structure for table `resultaten`
--

CREATE TABLE `resultaten` (
  `id` int(11) NOT NULL,
  `toets_id` int(11) NOT NULL,
  `leerling_id` int(11) NOT NULL,
  `cijfer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resultaten`
--

INSERT INTO `resultaten` (`id`, `toets_id`, `leerling_id`, `cijfer`) VALUES
(1, 1, 1, 6),
(2, 1, 2, 3),
(3, 2, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `toetsen`
--

CREATE TABLE `toetsen` (
  `id` int(11) NOT NULL,
  `onderwerp` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `max` int(11) NOT NULL,
  `vak_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toetsen`
--

INSERT INTO `toetsen` (`id`, `onderwerp`, `datum`, `max`, `vak_id`) VALUES
(1, 'Tafels', '2022-11-02', 10, 1),
(2, 'Hoofdstuk 2 Vocabulaire', '2022-11-05', 20, 2),
(3, 'Hoofdstuk 3 Grammatica', '2023-01-18', 10, 2),
(4, 'Hoofdstuk 3 Grammatica', '2023-01-18', 10, 2),
(5, 'Hoofdstuk 3 Grammatica', '2023-01-18', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vakken`
--

CREATE TABLE `vakken` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vakken`
--

INSERT INTO `vakken` (`id`, `naam`) VALUES
(1, 'Wiskunde'),
(2, 'Frans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultaten`
--
ALTER TABLE `resultaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toetsen`
--
ALTER TABLE `toetsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vakken`
--
ALTER TABLE `vakken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resultaten`
--
ALTER TABLE `resultaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `toetsen`
--
ALTER TABLE `toetsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vakken`
--
ALTER TABLE `vakken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
