-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Dez 2021 um 15:29
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `banking`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `angestellter`
--

CREATE TABLE `angestellter` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `angestellter`
--

INSERT INTO `angestellter` (`id`, `username`, `password`) VALUES
(1, 'Julia', '123');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `transaktion`
--

CREATE TABLE `transaktion` (
  `id` int(11) NOT NULL,
  `betrag` double NOT NULL,
  `sender` int(11) NOT NULL,
  `empfaenger` int(11) NOT NULL,
  `zahlungsreferenz` text NOT NULL,
  `verwendungszweck` text NOT NULL,
  `datum` date NOT NULL,
  `uhrzeit` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `transaktion`
--

INSERT INTO `transaktion` (`id`, `betrag`, `sender`, `empfaenger`, `zahlungsreferenz`, `verwendungszweck`, `datum`, `uhrzeit`) VALUES
(18, 20, 9, 8, 'Referenz', 'Schutzgeld', '2021-12-19', '03:27:47'),
(19, 69, 9, 7, 'Referenz', 'Schutzgeld', '2021-12-19', '03:28:12'),
(20, 23, 8, 9, 'Referenz', 'Schutzgeld', '2021-12-19', '03:28:44');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `guthaben` double NOT NULL,
  `bic` text NOT NULL,
  `iban` text NOT NULL,
  `geburtsdatum` date NOT NULL,
  `strasse` text NOT NULL,
  `stadt` text NOT NULL,
  `plz` int(11) NOT NULL,
  `land` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `vorname`, `nachname`, `username`, `password`, `guthaben`, `bic`, `iban`, `geburtsdatum`, `strasse`, `stadt`, `plz`, `land`) VALUES
(7, 'Max', 'Mustermann', 'max', '123', 892, 'AGENAT69', 'AT 38 9807 4661 6881 6441', '2021-11-30', 'Hinterseberweg', 'Imst', 6460, 'Austria'),
(8, 'Niklas', 'Heim', 'niklas', '123', 252, 'AGENAT69', 'AT 38 1655 8099 9098 9257', '2021-12-01', 'neue Heimat 7', 'Salzburg', 5026, 'Austria'),
(9, 'Michael', 'Bogensberger', 'michi', '123', 509, 'AGENAT69', 'AT 38 8254 3846 5358 3075', '2021-12-08', 'Ziegelstadelstrasse', 'Salzburg', 5026, 'Austria');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zahlung`
--

CREATE TABLE `zahlung` (
  `id` int(11) NOT NULL,
  `betrag` double NOT NULL,
  `art` tinyint(1) NOT NULL,
  `user` int(11) NOT NULL,
  `angestellter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `zahlung`
--

INSERT INTO `zahlung` (`id`, `betrag`, `art`, `user`, `angestellter`) VALUES
(8, 123, 1, 7, 1),
(9, 55, 1, 8, 1),
(10, 75, 1, 9, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `angestellter`
--
ALTER TABLE `angestellter`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `transaktion`
--
ALTER TABLE `transaktion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `empfaenger` (`empfaenger`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indizes für die Tabelle `zahlung`
--
ALTER TABLE `zahlung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `angestellter` (`angestellter`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `angestellter`
--
ALTER TABLE `angestellter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `transaktion`
--
ALTER TABLE `transaktion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `zahlung`
--
ALTER TABLE `zahlung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `transaktion`
--
ALTER TABLE `transaktion`
  ADD CONSTRAINT `transaktion_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaktion_ibfk_2` FOREIGN KEY (`empfaenger`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `zahlung`
--
ALTER TABLE `zahlung`
  ADD CONSTRAINT `zahlung_ibfk_1` FOREIGN KEY (`angestellter`) REFERENCES `angestellter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zahlung_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
