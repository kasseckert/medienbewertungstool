-- phpMyAdmin SQL Dump
-- Erstellungszeit: 15. Jun 2023 um 15:14
-- Server-Version: 10.6.8-MariaDB-log
-- PHP-Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db84947`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medienprojekt_daten`
--

CREATE TABLE `medienprojekt_daten` (
  `id` int(5) NOT NULL,
  `projektname` varchar(500) NOT NULL,
  `art` varchar(300) NOT NULL,
  `passwort` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medienprojekt_ergebnisse`
--

CREATE TABLE `medienprojekt_ergebnisse` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `vorname` varchar(200) NOT NULL,
  `passwort` int(20) NOT NULL,
  `item1` int(10) NOT NULL,
  `item2` int(10) NOT NULL,
  `item3` int(10) NOT NULL,
  `item4` int(10) NOT NULL,
  `feedback` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `medienprojekt_daten`
--
ALTER TABLE `medienprojekt_daten`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `medienprojekt_ergebnisse`
--
ALTER TABLE `medienprojekt_ergebnisse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `medienprojekt_daten`
--
ALTER TABLE `medienprojekt_daten`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `medienprojekt_ergebnisse`
--
ALTER TABLE `medienprojekt_ergebnisse`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
