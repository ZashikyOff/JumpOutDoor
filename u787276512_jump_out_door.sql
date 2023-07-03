-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 juil. 2023 à 14:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u787276512_jump_out_door`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL COMMENT 'email admin',
  `hash_mdp` varchar(60) NOT NULL COMMENT 'Hash du mot de passe',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `hash_mdp`) VALUES
(1, 'zashiky@gmail.com', '$2y$12$C6hKga4a3lfsWhsBH2SFveElyMLc4WPw48cNsqkZY1KF54JGDoF.a'),
(2, 'test@test.fr', '$2y$10$.M77WzNCAl5cfrHtfje8gOzM0t0qQ50vDeU4gmLf.c8dICgMIbpe2');

-- --------------------------------------------------------

--
-- Structure de la table `figures`
--

DROP TABLE IF EXISTS `figures`;
CREATE TABLE IF NOT EXISTS `figures` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `label` varchar(100) DEFAULT NULL,
  `explication` text NOT NULL,
  `img` varchar(255) DEFAULT NULL COMMENT 'url de l''image de la figure',
  `video` varchar(255) DEFAULT NULL COMMENT 'video demonstrative de la figure',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `figures`
--

INSERT INTO `figures` (`id`, `label`, `explication`, `img`, `video`) VALUES
(1, 'Saut de Chat', 'Poser ses mains le plus loin sur l\'obstacle en plongeant pour le passer avec aisance.', NULL, 'https://www.youtube.com/embed/7guTBeFGCak'),
(2, 'Passe-muraille', 'Effectuer une course d\'élan, poser son pied sur le mur et donner une impulsion vers le haut afin de saisir le sommet du mur pour le franchir.', NULL, 'https://www.youtube.com/embed/B8Lrwy0dv7w'),
(3, 'Pied de lune', 'Salto arrière exécuté après une course', NULL, NULL),
(4, 'Tic tac', 'Prendre appui sur un mur ou un petit obstacle pour en franchir un autre', NULL, NULL),
(5, 'Saut de détente', 'Se propulser vers l\'avant avec la force des jambes, avec ou sans élan.', NULL, NULL),
(6, 'Saut de bras', 'Sauter d\'un mur à l\'autre en se réceptionnant avec les mains au bord de l\'autre mur et en amortissant avec les pieds', NULL, NULL),
(7, 'Passe barrière', 'Franchir un obstacle à l\'aide d\'un saut suivi d\'un appui des mains et d\'un passement des jambes sur le côté', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

DROP TABLE IF EXISTS `lieux`;
CREATE TABLE IF NOT EXISTS `lieux` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `label` varchar(100) DEFAULT NULL COMMENT 'nom du spot de parkour',
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(7) NOT NULL,
  `url_map` varchar(255) NOT NULL COMMENT 'Url du point gps sur google maps',
  `img_lieu` varchar(255) DEFAULT NULL COMMENT 'image du lieu',
  `lieuxlike` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lieux`
--

INSERT INTO `lieux` (`id`, `label`, `ville`, `code_postal`, `url_map`, `img_lieu`, `lieuxlike`) VALUES
(3, 'Tour PAs Efeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(4, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(10, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(11, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(9, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(8, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(6, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(7, 'Palais Des Papes', 'Avignon', '84000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/palais.jpg', 0),
(12, 'Palais Des Papes', 'Avignon', '84000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/palais.jpg', 0),
(13, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(14, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(15, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(16, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(17, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(18, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(19, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(20, 'Tour Effeil', 'Paris', '78000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/eiffel.jpg', 0),
(21, 'Palais Des Papes', 'Avignon', '84000', 'https://goo.gl/maps/WQfYRgvCp4o65v7s5', 'core/imgdb/palais.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
