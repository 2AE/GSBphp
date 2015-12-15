-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 15 Décembre 2015 à 14:41
-- Version du serveur :  5.5.46-0+deb8u1
-- Version de PHP :  5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gsbphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `Etat`
--

CREATE TABLE IF NOT EXISTS `Etat` (
  `id` char(2) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FicheFrais`
--

CREATE TABLE IF NOT EXISTS `FicheFrais` (
  `idVisiteur` char(4) NOT NULL,
  `mois` char(6) NOT NULL,
  `nbJustificatifs` int(11) DEFAULT NULL,
  `montantValide` decimal(10,2) DEFAULT NULL,
  `dateModif` date DEFAULT NULL,
  `idEtat` char(2) DEFAULT 'CR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FraisForfait`
--

CREATE TABLE IF NOT EXISTS `FraisForfait` (
  `id` char(3) NOT NULL,
  `libelle` char(20) DEFAULT NULL,
  `montant` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LigneFraisForfait`
--

CREATE TABLE IF NOT EXISTS `LigneFraisForfait` (
  `idVisiteur` char(4) NOT NULL,
  `mois` char(6) NOT NULL,
  `idFraisForfait` char(3) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LigneFraisHorsForfait`
--

CREATE TABLE IF NOT EXISTS `LigneFraisHorsForfait` (
`id` int(11) NOT NULL,
  `idVisiteur` char(4) NOT NULL,
  `mois` char(6) NOT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Visiteur`
--

CREATE TABLE IF NOT EXISTS `Visiteur` (
  `id` char(4) NOT NULL,
  `nom` char(30) DEFAULT NULL,
  `prenom` char(30) DEFAULT NULL,
  `login` char(20) DEFAULT NULL,
  `mdp` char(20) DEFAULT NULL,
  `adresse` char(30) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` char(30) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Etat`
--
ALTER TABLE `Etat`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `FicheFrais`
--
ALTER TABLE `FicheFrais`
 ADD PRIMARY KEY (`idVisiteur`,`mois`), ADD KEY `fk_d577c40c-a28d-11e5-86c1-080027494c75` (`idEtat`);

--
-- Index pour la table `FraisForfait`
--
ALTER TABLE `FraisForfait`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `LigneFraisForfait`
--
ALTER TABLE `LigneFraisForfait`
 ADD PRIMARY KEY (`idVisiteur`,`mois`,`idFraisForfait`), ADD KEY `fk_d577c41c-a28d-11e5-86c1-080027494c75` (`idFraisForfait`);

--
-- Index pour la table `LigneFraisHorsForfait`
--
ALTER TABLE `LigneFraisHorsForfait`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_d577c428-a28d-11e5-86c1-080027494c75` (`idVisiteur`,`mois`);

--
-- Index pour la table `Visiteur`
--
ALTER TABLE `Visiteur`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `LigneFraisHorsForfait`
--
ALTER TABLE `LigneFraisHorsForfait`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `FicheFrais`
--
ALTER TABLE `FicheFrais`
ADD CONSTRAINT `fk_d577c40c-a28d-11e5-86c1-080027494c75` FOREIGN KEY (`idEtat`) REFERENCES `Etat` (`id`),
ADD CONSTRAINT `fk_d577c40e-a28d-11e5-86c1-080027494c75` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteur` (`id`);

--
-- Contraintes pour la table `LigneFraisForfait`
--
ALTER TABLE `LigneFraisForfait`
ADD CONSTRAINT `fk_d577c41a-a28d-11e5-86c1-080027494c75` FOREIGN KEY (`idVisiteur`, `mois`) REFERENCES `FicheFrais` (`idVisiteur`, `mois`),
ADD CONSTRAINT `fk_d577c41c-a28d-11e5-86c1-080027494c75` FOREIGN KEY (`idFraisForfait`) REFERENCES `FraisForfait` (`id`);

--
-- Contraintes pour la table `LigneFraisHorsForfait`
--
ALTER TABLE `LigneFraisHorsForfait`
ADD CONSTRAINT `fk_d577c428-a28d-11e5-86c1-080027494c75` FOREIGN KEY (`idVisiteur`, `mois`) REFERENCES `FicheFrais` (`idVisiteur`, `mois`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
