-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_food_palace`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestellungen`
--

CREATE TABLE `bestellungen` (
  `id` int(200) NOT NULL,
  `speise` text NOT NULL,
  `anzahl` int(200) NOT NULL,
  `tisch` int(3) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestellungen`
--

INSERT INTO `bestellungen` (`id`, `speise`, `anzahl`, `tisch`) VALUES
(1, 'Pilzsuppe', 4, 002),
(2, 'Carpaccio vom Rind', 5, 001),
(3, 'blabla', 3, 001),
(4, 'klakla', 3, 003),
(5, 'nanana', 4, 003),
(6, 'brabrabra', 34, 003),
(7, 'test1', 4, 002),
(8, 'test3', 4, 002),
(9, 'test4', 26, 006),
(10, 'test6', 7, 008);

-- --------------------------------------------------------

--
-- Table structure for table `speisentabelle`
--

CREATE TABLE `speisentabelle` (
  `ID` int(11) NOT NULL,
  `speise` text NOT NULL,
  `preis` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `speisentabelle`
--

INSERT INTO `speisentabelle` (`ID`, `speise`, `preis`) VALUES
(1, '\0Pilzsuppe', 4.5),
(2, 'Kürbissuppe', 4.5),
(3, '\0Spargelcremesuppe', 4.5),
(4, 'Schwäbischer Zwiebelkuchen', 4),
(5, 'Carpaccio vom Rind', 5.5),
(6, '\0Rucola-Salat mit Piniernkernen und Parmesan', 6),
(7, '\0Spargel-Salat deutsch', 6.5),
(8, 'Sommer-Salat mit Eisbergsalat, Tomaten, Gurken und Paprika', 5),
(9, '\0Gemischter Feldsalat mit Dressing', 6.5),
(10, 'Schnitzel Wiener Art', 8.5),
(11, 'Jägerschnitzel mit herzhafter Pilzrahmsauce', 8.5),
(12, 'Rahmschnitzel Zigeuner Art', 9),
(13, 'Schweinesteak mit Pommes', 8.5),
(14, 'Rindersteak mit Pommes', 9),
(15, 'Hähnchenkeule mit Rosmarinkartoffeln', 8.5),
(16, '\0Seelachs mit Rosmarinkartoffeln', 9.5),
(17, 'Kassler mit Sauerkraut', 9),
(18, 'Pfannkuchen mit pikanter Füllung und mit Käse überbacken', 8.5),
(19, 'Flammkuchen Ellsässer Art', 9),
(20, 'Käsespätzle mit Röstzwiebeln', 7.5),
(21, 'Kaiserschmarrn', 4),
(22, 'Apfelstrudel mit Sahne', 4.5),
(23, 'Mousse au Chocolat\r\n', 5),
(24, '\0Eiscreme (versch. Sorten)', 1.5),
(25, 'Hauseigene Torte', 3.5),
(26, 'Fruchtsaft-Schorle (Apfel / Waldbeere)', 3),
(27, 'Klassische Softdrinks(Cola, Fanta, Sprite, Mezzo-Mix,Orangina)', 3),
(28, '\0Pilz 0.5L', 3.75),
(29, 'Hefeweizen', 3.85),
(30, 'Radler 0.33L', 3.2),
(31, 'Malzbier 0.33L', 3.2),
(32, '\0Mineralwasser 0.33L', 2.5),
(33, 'Wein (weiß / rot / rosé)', 4.2),
(34, 'Fassbrause 0.33L', 3.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speisentabelle`
--
ALTER TABLE `speisentabelle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `speisentabelle`
--
ALTER TABLE `speisentabelle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
