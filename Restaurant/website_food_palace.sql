-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 04:02 PM
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
(4, 'Schw?bischer Zwiebelkuchen', 4),
(5, 'Carpaccio vom Rind', 5.5),
(6, '\0Rucola-Salat mit Piniernkernen und Parmesan', 6),
(7, '\0Spargel-Salat deutsch', 6.5),
(8, 'Sommer-Salat mit Eisbergsalat, Tomaten, Gurken und Paprika', 5),
(9, '\0Gemischter Feldsalat mit Dressing', 6.5),
(10, 'Schnitzel Wiener Art', 8.5),
(11, '\0J?gerschnitzel mit herzhafter Pilzrahmsauce', 8.5),
(12, 'Rahmschnitzel Zigeuner Art', 9),
(13, 'Schweinesteak mit Pommes', 8.5),
(14, 'Rindersteak mit Pommes', 9),
(15, 'H?hnchenkeule mit Rosmarinkartoffeln', 8.5),
(16, '\0Seelachs mit Rosmarinkartoffeln', 9.5),
(17, 'Kassler mit Sauerkraut', 9),
(18, 'Pfannkuchen mit pikanter F?llung und mit K?se ?berbacken', 8.5),
(19, '\0Flammkuchen Ells?sser Art', 9),
(20, 'K?sesp?tzle mit R?stzwiebeln', 7.5),
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
(34, 'Fassbrause 0.33L', 3.2),
(35, 'üöäüöäü', 99.99),
(36, 'öüäß', 0),
(37, 'üöäß', 69.69);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `speisentabelle`
--
ALTER TABLE `speisentabelle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `speisentabelle`
--
ALTER TABLE `speisentabelle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
