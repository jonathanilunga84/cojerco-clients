-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 29 Décembre 2020 à 18:13
-- Version du serveur :  5.7.26-0ubuntu0.19.04.1
-- Version de PHP :  7.2.17-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cojercoActivite`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume_activite` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateposte` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `titre`, `resume_activite`, `idUser`, `dateposte`) VALUES
(33, '29 decembre', 'une tres bonne jour', 2, '2020-12-29 17:53:49'),
(34, '29 decembre 3', 'hggh', 2, '2020-12-29 17:59:29'),
(35, '29 decembre 4', 'fjckjdjl', 2, '2020-12-29 18:00:44');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `id_activite` int(11) NOT NULL,
  `dateposte` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `photos`, `id_activite`, `dateposte`) VALUES
(72, 'assets/images/upload/637950(29-12-2020).png', 33, '2020-12-29 17:53:49'),
(73, 'assets/images/upload/700146(29-12-2020).png', 33, '2020-12-29 17:53:49'),
(74, 'assets/images/upload/910364(29-12-2020).png', 33, '2020-12-29 17:53:49'),
(75, 'assets/images/upload/228256(29-12-2020).png', 34, '2020-12-29 17:59:29'),
(76, 'assets/images/upload/953551(29-12-2020).png', 34, '2020-12-29 17:59:29'),
(77, 'assets/images/upload/289245(29-12-2020).png', 35, '2020-12-29 18:00:44'),
(78, 'assets/images/upload/482162(29-12-2020).png', 35, '2020-12-29 18:00:44'),
(79, 'assets/images/upload/ 33_604313(29-12-2020).png', 33, '2020-12-29 18:05:14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `roles` varchar(25) NOT NULL,
  `pwd` text NOT NULL,
  `datacreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pseudo`, `roles`, `pwd`, `datacreation`) VALUES
(2, 'ilunga', 'jonathan', 'msi', 'Administrateur', '$2y$10$5Q3kXbTGO8hE0UUxvTBpZu3o1Ukdx0SWJ2AW2om4Tvzy4z9dU0evu', '2020-11-14 20:58:16'),
(12, 'jkaka', 'jkaka', 'jkaka1', 'Coordonateur', '555', '2020-11-24 14:56:55'),
(16, 'cojerco1', 'cojerco2.35', 'COJERCO', 'Administrateur', '$2y$10$ogPrgh6rrBW/nQncMG6PLuMX/lJvRn3rVsD97ltYStLexia.CQn8u', '2020-11-26 13:32:30'),
(17, 'mena1', 'mena11', 'mena', 'Administrateur', '$2y$10$88TQ75OWgfH8GbE7l0lQGe.CKnLi32ozEMQkLTJn51ptFIkPQvr32', '2020-12-03 23:33:08'),
(18, 'MOSENGO', 'Steve', 'stevemosengo7@yahoo.com', 'Administrateur', '$2y$10$d2UNSZJ2hErtJd7V0OOKx.MPgJaKJTxHnoErFu/1rKE7jv.G4Mdn.', '2020-12-03 23:35:38'),
(19, 'phone1', 'Phone11', 'phone', 'Coordonateur', '$2y$10$IJymfecaUFz9LxIDIN0SoODG6j1V/MApUxwC.1NdeLoXM3dSHPGsC', '2020-12-03 23:47:48');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_activite` (`id_activite`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
