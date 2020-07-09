-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Jun 2020 um 10:06
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hardware`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Festplatten`
--

CREATE TABLE `Festplatten` (
  `id` int(11) NOT NULL,
  `hersteller` varchar(55) DEFAULT NULL,
  `typ` varchar(35) DEFAULT NULL,
  `gb` int(11) DEFAULT NULL,
  `prod` date DEFAULT NULL,
  `artnummer` varchar(35) DEFAULT NULL,
  `preis` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `Festplatten`
--

INSERT INTO `Festplatten` (`id`, `hersteller`, `typ`, `gb`, `prod`, `artnummer`, `preis`) VALUES
(1, 'IBM Coroperation', 'DJNA', 240, '2008-05-15', 'HDA-140', '230.00'),
(2, 'Seagate', '310232A', 60, '2008-11-15', 'HDA-144', '122.00'),
(3, 'Quantum', 'Fireball plus', 80, '2008-03-15', 'HDA-163', '128.00'),
(4, 'Fujitsu', 'MPE 3136', 160, '2008-09-01', 'HDA-171', '160.00'),
(5, 'Quantum', 'Fireball CX', 40, '2008-10-01', 'HDA-164', '122.00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Festplatten`
--
ALTER TABLE `Festplatten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Festplatten`
--
ALTER TABLE `Festplatten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

SELECT hersteller, SUM(preis) FROM festplatten GROUP BY hersteller;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
