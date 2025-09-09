-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- Host: mariadb
-- Gegenereerd op: 07 nov 2024 om 12:57
-- Serverversie: 11.5.2-MariaDB-ubu2404
-- PHP-versie: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `m6prog`

-- --------------------------------------------------------

-- Tabelstructuur voor tabel `weer`

CREATE TABLE `weer` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `weer` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Gegevens voor tabel `weer`

INSERT INTO `weer` (`id`, `datum`, `weer`) VALUES
(1, '2024-01-01', '20 °C'),
(2, '2024-01-02', '22 °C'),
(3, '2024-01-03', '18 °C'),
(4, '2024-01-04', '15 °C'),
(5, '2024-01-05', '13 °C'),
(6, '2024-01-06', '17 °C'),
(7, '2024-01-07', '23 °C');

-- --------------------------------------------------------

-- Tabelstructuur voor tabel `plaats`

CREATE TABLE `plaats` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `plaats` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Gegevens voor tabel `plaats`

INSERT INTO `plaats` (`id`, `datum`, `plaats`) VALUES
(1, '2024-01-01', 'amsterdam'),
(2, '2024-01-02', 'rotterdam'),
(3, '2024-01-03', 'utrecht'),
(4, '2024-01-04', 'den haag'),
(5, '2024-01-05', 'zwolle'),
(6, '2024-01-06', 'brussel'),
(7, '2024-01-07', 'eindhoven');

-- --------------------------------------------------------

-- Tabelstructuur voor tabel `waterval`

CREATE TABLE `waterval` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `hoeveelheid_mm` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Gegevens voor tabel `waterval`

INSERT INTO `waterval` (`id`, `datum`, `hoeveelheid_mm`) VALUES
(1, '2024-01-01', 12),
(2, '2024-01-02', 15),
(3, '2024-01-03', 8),
(4, '2024-01-04', 20),
(5, '2024-01-05', 18),
(6, '2024-01-06', 25),
(7, '2024-01-07', 10);

-- --------------------------------------------------------

-- Tabelstructuur voor tabel `windkracht`

CREATE TABLE `windkracht` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `windkracht` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Gegevens voor tabel `windkracht`

INSERT INTO `windkracht` (`id`, `datum`, `windkracht`) VALUES
(1, '2024-01-01', '12 mph'),
(2, '2024-01-02', '10 mph'),
(3, '2024-01-03', '14 mph'),
(4, '2024-01-04', '17 mph'),
(5, '2024-01-05', '9 mph'),
(6, '2024-01-06', '15 mph'),
(7, '2024-01-07', '11 mph');

-- --------------------------------------------------------

-- Tabelstructuur voor tabel `WeersomstandighedenPerDag`

CREATE TABLE `WeersomstandighedenPerDag` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL,
  `waterval` INT(11) NOT NULL,
  `weer` INT(11) NOT NULL,
  `plaats` INT(11) NOT NULL,
  `windkracht` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`waterval`) REFERENCES `waterval` (`id`),
  FOREIGN KEY (`weer`) REFERENCES `weer` (`id`),
  FOREIGN KEY (`plaats`) REFERENCES `plaats` (`id`),
  FOREIGN KEY (`windkracht`) REFERENCES `windkracht` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Gegevens voor tabel `WeersomstandighedenPerDag`

INSERT INTO `WeersomstandighedenPerDag` (`id`, `datum`, `waterval`, `plaats`, `weer`, `windkracht`) VALUES
(1, '2024-01-01', 1, 1, 1, 1),
(2, '2024-01-02', 2, 2, 2, 2),
(3, '2024-01-03', 3, 3, 3, 3),
(4, '2024-01-04', 4, 4, 4, 4),
(5, '2024-01-05', 5, 5, 5, 5),
(6, '2024-01-06', 6, 6, 6, 6),
(7, '2024-01-07', 7, 7, 7, 7);

COMMIT;
