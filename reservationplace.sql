-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 mars 2020 à 10:32
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinemaphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservationplace`
--

DROP TABLE IF EXISTS `reservationplace`;
CREATE TABLE IF NOT EXISTS `reservationplace` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `place` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `film` varchar(30) COLLATE utf8_bin NOT NULL,
  `prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservationplace`
--

INSERT INTO `reservationplace` (`id`, `login`, `place`, `date`, `heure`, `film`, `prix`) VALUES
(1, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Three Kingdoms', NULL),
(2, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Three Kingdoms', NULL),
(3, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Three Kingdoms', NULL),
(4, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Three Kingdoms', 0),
(5, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Bleds Génocide', 0),
(6, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Bleds Génocide', 150),
(7, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Bleds Génocide', 0),
(8, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Bleds Génocide', 0),
(9, 'kikichaton', 2, '0232-02-11', '12:30:00', 'Bleds Génocide', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
