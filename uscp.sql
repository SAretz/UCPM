-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Mai 2017 um 14:20
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
(1, 5, 'Mal schauen', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rank`
--

CREATE TABLE `rank` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `NeuerBericht` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rank`
--

INSERT INTO `rank` (`ID`, `Name`, `NeuerBericht`) VALUES
(1, 'Abteilungsleiter', 1),
(2, 'Gast', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Passwort` varchar(255) NOT NULL,
  `Rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `rank`
--
ALTER TABLE `rank`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `rank`
--
ALTER TABLE `rank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
