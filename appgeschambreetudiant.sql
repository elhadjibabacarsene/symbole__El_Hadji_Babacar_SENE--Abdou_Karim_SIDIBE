-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 24 juin 2020 à 19:51
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appgeschambreetudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_batiment` int(11) NOT NULL,
  `id_type_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `inshoused` tinyint(1) DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL,
  `id_type_bourse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_bourse`
--

CREATE TABLE `type_bourse` (
  `id` int(11) NOT NULL,
  `libelle` enum('entiere','demi') NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_chambre`
--

CREATE TABLE `type_chambre` (
  `id` int(11) NOT NULL,
  `type` enum('individuel','a_deux') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_batiment` (`id_batiment`),
  ADD KEY `id_type_chambre` (`id_type_chambre`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_chambre` (`id_chambre`),
  ADD KEY `id_type_bourse` (`id_type_bourse`);

--
-- Index pour la table `type_bourse`
--
ALTER TABLE `type_bourse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_bourse`
--
ALTER TABLE `type_bourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_batiment`) REFERENCES `batiment` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`id_type_chambre`) REFERENCES `type_chambre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`id_type_bourse`) REFERENCES `type_bourse` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
