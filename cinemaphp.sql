-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 31 mars 2020 à 06:27
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

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
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8_bin NOT NULL,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `note` int(11) NOT NULL,
  `film` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `message`, `login`, `note`, `film`) VALUES
(1, 'cool', 'test', 5, 'joker'),
(2, 'bien', 'test', 5, 'joker'),
(5, 'ee', 'test', 4, 'joker'),
(6, 'Super', 'test', 5, 'miserables');

-- --------------------------------------------------------

--
-- Structure de la table `reservationplace`
--

DROP TABLE IF EXISTS `reservationplace`;
CREATE TABLE IF NOT EXISTS `reservationplace` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `place` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `heure` time NOT NULL,
  `film` varchar(30) COLLATE utf8_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `3D` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservationplace`
--

INSERT INTO `reservationplace` (`id`, `login`, `place`, `date`, `heure`, `film`, `prix`, `3D`) VALUES
(1, 'test', 2, '2020-03-26', '16:00:00', 'Drive', 17, 0),
(3, 'TestA', 1, '2020-03-18', '15:00:00', 'Bleds Genocide', 8, NULL),
(4, 'TestA', 1, '2020-03-18', '15:00:00', 'Bleds Genocide', 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sallefilm`
--

DROP TABLE IF EXISTS `sallefilm`;
CREATE TABLE IF NOT EXISTS `sallefilm` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `salle` varchar(30) COLLATE utf8_bin NOT NULL,
  `film` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `place` int(11) NOT NULL,
  `3D` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `mail` varchar(30) COLLATE utf8_bin NOT NULL,
  `mdpc` text COLLATE utf8_bin NOT NULL,
  `mdp` varchar(30) COLLATE utf8_bin NOT NULL,
  `admin` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `mail`, `mdpc`, `mdp`, `admin`) VALUES
(1, 'test', 'test', 'test', 'Test@l@gmail.com', '560f6c297fa06fcddb6bf4cdcb801554', 'azertyu', '0'),
(2, 'testA', 'testA', 'TestA', 'TestA@gmail.com', '560f6c297fa06fcddb6bf4cdcb801554', 'azertyu', '1'),
(9, 'est', 'un', 'ceci', 'teest@gmail.com', '560f6c297fa06fcddb6bf4cdcb801554', 'azertyu', '0');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`login`) REFERENCES `user` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
