-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 14 juin 2022 à 13:57
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd-cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `demarche`
--

DROP TABLE IF EXISTS `demarche`;
CREATE TABLE IF NOT EXISTS `demarche` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date_contact` date NOT NULL,
  `Type_demarche` varchar(50) NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `Id_Utilisateur` int(11) NOT NULL,
  `Id_Entreprise` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Demarche_Utilisateur0_FK` (`Id_Utilisateur`),
  KEY `Demarche_Entreprise0_FK` (`Id_Entreprise`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demarche`
--

INSERT INTO `demarche` (`Id`, `Date_contact`, `Type_demarche`, `Etat`, `Id_Utilisateur`, `Id_Entreprise`) VALUES
(1, '2022-06-01', 'Email', 'En attente d\'une réponse', 1, 1),
(2, '2022-06-10', 'Téléphone', 'Il faut envoyer le CV', 1, 1),
(3, '2022-06-05', 'Sur place', 'Entretien', 1, 1),
(8, '2022-06-11', 'Email', 'Entretien', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Secteur` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`Id`, `Nom`, `Secteur`, `Adresse`) VALUES
(2, 'Ok', 'OKOK', 'LOL'),
(3, 'Array', 'OKOK', 'LOL'),
(4, 'coucou c\'est moi', 'OKOK', 'LOL'),
(5, 'Test', 'fromage', 'LOL'),
(8, 'test', 'pc', 'LOL'),
(29, 'chepa', 'jsp', 'ouioui'),
(30, 'fini', 'yep', 'ouioiu'),
(31, '', '', ''),
(32, '', '', ''),
(33, 'c', 'c', 'c'),
(34, '', '', ''),
(35, 'fsfsf', 'fsfs', 'fsffs'),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

DROP TABLE IF EXISTS `entretien`;
CREATE TABLE IF NOT EXISTS `entretien` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Lieu` varchar(50) NOT NULL,
  `Id_Demarche` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Entretien_Demarche_AK` (`Id_Demarche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Statut` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Experience` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `Nom`, `Prenom`, `Adresse`, `Tel`, `Email`, `Statut`, `Experience`, `Photo`, `Password`) VALUES
(1, 'Arthur', 'arthur', '11', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinepassimortqueca'),
(2, 'Arthur', 'arthur', '11', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinepassimortqueca'),
(3, 'Arthur', 'arthur', '11', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinepassimortqueca'),
(9, 'Arthur', 'arthur', '11 rue tinquiete', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinemort'),
(13, 'Arthur', 'arthur', '11', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinepassimortqueca'),
(14, 'Arthur', 'arthur', '11', '123456543', 'arthur@jedetesteantoine.com', '', '', '', 'antoinepassimortqueca'),
(15, 'Admin', '', '', '', 'Admin', NULL, NULL, NULL, 'Admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demarche`
--
ALTER TABLE `demarche`
  ADD CONSTRAINT `Demarche_Utilisateur0_FK` FOREIGN KEY (`Id_Utilisateur`) REFERENCES `utilisateur` (`Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `Entretien_Demarche_FK` FOREIGN KEY (`Id_Demarche`) REFERENCES `demarche` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
