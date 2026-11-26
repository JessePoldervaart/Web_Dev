-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Gegenereerd op: 26 nov 2026 om 11:47
-- Serverversie: 26.10.0
-- PHP-versie: 8.3.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `omschrijving` text,
  `afbeelding` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `naam`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(1, '1:35 Tamiya 35113 Sd.Kfz.250/3 Greif Ausf. A', 29.95, '', 'tamiya_greif.jpg'),
(2, '1:35 Tamiya 35391 M24 Chaffee - European Theater WWII', 35.95, '', 'tamiya_tank.jpg'),
(3, '1:35 Tamiya 35103 Gulaschkanone', 20.95, '', 'tamiya_veldkeuken.jpg'),
(4, '1:48 Tamiya 61098 F-16CJ Lockheed Martin Fighting Falcon Block 50', 50.95, '', 'tamiya_f-16.jpg'),
(5, '1:35 Tamiya 35394 Steyr RSO/01', 30.95, '', 'tamiya_rupsband.jpg'),
(6, '1:350 Tamiya 78025 Japanese Battleship Yamato', 279.95, '', 'tamiya_yamato.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
