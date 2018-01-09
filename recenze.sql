-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Úte 09. led 2018, 10:20
-- Verze serveru: 5.7.19
-- Verze PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `konference`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `recenze`
--

DROP TABLE IF EXISTS `recenze`;
CREATE TABLE IF NOT EXISTS `recenze` (
  `ID_recenze` int(4) NOT NULL AUTO_INCREMENT,
  `ID_clanku` int(4) NOT NULL,
  `ID_user_rec` int(4) NOT NULL,
  `struktura` int(2) NOT NULL,
  `myslenky` int(2) NOT NULL,
  `zdroje` int(2) NOT NULL,
  `prumer` float NOT NULL,
  PRIMARY KEY (`ID_recenze`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
