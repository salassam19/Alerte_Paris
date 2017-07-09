-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Juillet 2017 à 10:07
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alerte_paris`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `aut_id` int(11) NOT NULL,
  `aut_pseudo` varchar(255) NOT NULL,
  `aut_nom` text NOT NULL,
  `aut_prenom` text NOT NULL,
  `aut_email` text NOT NULL,
  `aut_password` text NOT NULL,
  `aut_birthday` date NOT NULL,
  `aut_sexe` text NOT NULL,
  `aut_adresse` varchar(255) NOT NULL,
  `aut_code_postal` varchar(5) NOT NULL,
  `aut_ville` varchar(255) NOT NULL,
  `aut_pays` varchar(255) NOT NULL,
  `aut_mobile` varchar(10) NOT NULL,
  `aut_fix` varchar(10) NOT NULL,
  `aut_hebergeur` int(1) NOT NULL,
  `aut_pro` int(1) NOT NULL,
  `aut_id_pro` varchar(255) NOT NULL,
  `aut_societe` text NOT NULL,
  `aut_create` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `com_id` int(11) NOT NULL,
  `com_lien_auteur` int(11) NOT NULL,
  `com_lien_message` int(11) NOT NULL,
  `com_corp` longtext NOT NULL,
  `com_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `mes_id` int(11) NOT NULL,
  `mes_title` text NOT NULL,
  `mes_lien_auteur` int(11) NOT NULL,
  `mes_corps` longtext NOT NULL,
  `mes_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `prive`
--

CREATE TABLE `prive` (
  `pri_id` int(11) NOT NULL,
  `pri_lien_auteur_envoyeur` int(11) NOT NULL,
  `pri_lien_auteur_receveur` int(11) NOT NULL,
  `pri_titre` text NOT NULL,
  `pri_corp` longtext NOT NULL,
  `pri_date` date NOT NULL,
  `pri_vu` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`aut_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`com_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mes_id`);

--
-- Index pour la table `prive`
--
ALTER TABLE `prive`
  ADD PRIMARY KEY (`pri_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `aut_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `prive`
--
ALTER TABLE `prive`
  MODIFY `pri_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
