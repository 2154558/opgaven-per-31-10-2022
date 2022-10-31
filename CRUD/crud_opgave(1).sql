-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jun 2022 om 12:39
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_opgave`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student_te_laat`
--

CREATE TABLE `student_te_laat` (
  `studentnummer` int(20) NOT NULL,
  `klas` varchar(3) NOT NULL,
  `minuten_te_laat` int(40) NOT NULL,
  `reden` longtext NOT NULL,
  `student_naam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `student_te_laat`
--

INSERT INTO `student_te_laat` (`studentnummer`, `klas`, `minuten_te_laat`, `reden`, `student_naam`) VALUES
(123, '3a', 30, 'verslapen', 'abdel'),
(321, '4a', 20, 'kaas eten', 'geert jan'),
(987, '987', 9879879, '988798', '87878987');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `student_te_laat`
--
ALTER TABLE `student_te_laat`
  ADD PRIMARY KEY (`studentnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `student_te_laat`
--
ALTER TABLE `student_te_laat`
  MODIFY `studentnummer` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
