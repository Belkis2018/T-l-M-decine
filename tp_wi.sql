-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 14 fév. 2020 à 16:16
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_wi`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `signupdr`
--

CREATE TABLE `signupdr` (
  `idDr` int(10) NOT NULL,
  `prenomdr` varchar(30) NOT NULL,
  `nomdr` varchar(30) NOT NULL,
  `sexe` text NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `motpasse` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `signupdr`
--

INSERT INTO `signupdr` (`idDr`, `prenomdr`, `nomdr`, `sexe`, `specialite`, `telephone`, `email`, `motpasse`) VALUES
(0, 'bbb', 'kkkk', 'homme', 'gggg', '0677777777', 'belkis@gmail.com', 'ccc');

-- --------------------------------------------------------

--
-- Structure de la table `signupma`
--

CREATE TABLE `signupma` (
  `idMa` int(10) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `sexe` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `motpasse` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signupdr`
--
ALTER TABLE `signupdr`
  ADD PRIMARY KEY (`idDr`);

--
-- Index pour la table `signupma`
--
ALTER TABLE `signupma`
  ADD PRIMARY KEY (`idMa`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `signupma`
--
ALTER TABLE `signupma`
  MODIFY `idMa` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
