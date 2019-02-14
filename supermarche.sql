-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Février 2019 à 09:31
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `supermarche`
--

-- --------------------------------------------------------

--
-- Structure de la table `achateurs`
--

CREATE TABLE `achateurs` (
  `Id_acheteur` int(10) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Compte` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `achateurs`
--

INSERT INTO `achateurs` (`Id_acheteur`, `Nom`, `Compte`) VALUES
(1, 'riani', '1500 '),
(2, 'Hedach', '2240'),
(4, 'Boualrcha', '3467'),
(5, 'Hedach', '6691'),
(6, 'PauseFlow', '1109'),
(7, 'kassimi', '3360'),
(8, 'youssfi', '3363'),
(9, 'fennane', '3366');

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `Id_achat` int(10) NOT NULL,
  `Id_achateur` int(10) NOT NULL,
  `Id_produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `achats`
--

INSERT INTO `achats` (`Id_achat`, `Id_achateur`, `Id_produit`) VALUES
(1, 3, 1),
(2, 2, 1),
(3, 5, 1),
(4, 5, 1),
(5, 9, 3);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id_produit` int(10) NOT NULL,
  `Libelle` varchar(30) NOT NULL,
  `Prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`Id_produit`, `Libelle`, `Prix`) VALUES
(1, 'Souris Microsoft', 70),
(2, 'Ordinateur', 8000),
(3, 'Clavier', 300);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achateurs`
--
ALTER TABLE `achateurs`
  ADD PRIMARY KEY (`Id_acheteur`);

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`Id_achat`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_produit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
