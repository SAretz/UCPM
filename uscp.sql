-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mai 2017 um 22:58
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `uscp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Bewertung` int(11) NOT NULL,
  `Kurztext` varchar(255) NOT NULL,
  `Projekt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `feedback`
--

INSERT INTO `feedback` (`ID`, `Bewertung`, `Kurztext`, `Projekt`) VALUES
(16, 5, 'Projekt 4', 4),
(17, 5, 'Anna ist cool', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `konzepte`
--

CREATE TABLE `konzepte` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Text` longtext NOT NULL,
  `Letzter_Bearbeiter` int(11) NOT NULL,
  `Zeit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `konzepte`
--

INSERT INTO `konzepte` (`ID`, `Name`, `Text`, `Letzter_Bearbeiter`, `Zeit`) VALUES
(1, 'Test Konzept 1', 'Test', 0, '10.05.2017 22:0'),
(2, 'Konzept 2', 'Konzept zur Belustigung der Mitarbeiter \r\n-> Bar in die Lounge bauen\r\n->Lounge bauen\r\n->Mitarbeiter für Lounge besuch bezahlen\r\n->Teste das auch', 0, '10.05.2017 22:4'),
(4, 'Test', 'Dies ist ein neues Konzept', 1, '10.05.2017 22:5'),
(5, 'Geil', 'Funktioniert Sehr schön', 1, '10.05.2017 22:56');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rank`
--

CREATE TABLE `rank` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rank`
--

INSERT INTO `rank` (`ID`, `Name`, `Rang`) VALUES
(1, 'Gast', 1),
(2, 'Mitarbeiter', 2),
(3, 'Abteilungleiter', 3),
(4, 'Geschäftleitung', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `times`
--

CREATE TABLE `times` (
  `ID` int(11) NOT NULL,
  `Projekt` int(11) NOT NULL,
  `Von` varchar(255) NOT NULL,
  `Bis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `times`
--

INSERT INTO `times` (`ID`, `Projekt`, `Von`, `Bis`) VALUES
(1, 1, '10:00', '10:00'),
(2, 1, '10:00', '10:00'),
(3, 1, '10:00', '10:00'),
(4, 1, '10:00', '10:00'),
(6, 1, '13:31', '15:32'),
(7, 1, '16:23', '23:32'),
(8, 2, '10:33', '11:22'),
(13, 1, '22:03', '22:03'),
(14, 2, '22:04', '22:05'),
(15, 2, '22:42', '22:43'),
(16, 2, '22:43', '22:43'),
(17, 0, '22:45', '22:45'),
(18, 5, '22:56', '22:56');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Passwort` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `Name`, `Passwort`, `Email`, `Rang`) VALUES
(1, 'Sebastian', 'Test', 'Sebastian.Aretz@alumni.fh-aachen.de', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `konzepte`
--
ALTER TABLE `konzepte`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT für Tabelle `konzepte`
--
ALTER TABLE `konzepte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `rank`
--
ALTER TABLE `rank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `times`
--
ALTER TABLE `times`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
