-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 06 juin 2023 à 12:30
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour09`
--

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_etage` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_etage`, `capacite`, `id`, `nom`, `numero`, `superficie`) VALUES
(1, 'Lounge', 1, 100, 1, 'RDC', 0, 500),
(2, 'Studio Son', 1, 5, 1, 'RDC', 0, 500),
(3, 'Broadcasting', 2, 50, 2, 'R+1', 1, 500),
(4, 'Bocal Peda', 2, 4, 2, 'R+1', 1, 500),
(5, 'Coworking', 2, 80, 2, 'R+1', 1, 500),
(6, 'Studio Video', 2, 5, 2, 'R+1', 1, 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

MariaDB:3307/jour09/salles/		http://localhost/phpmyadmin/index.php?route=/database/sql&db=jour09&server=2

   Affichage des lignes 0 -  5 (total de 6, traitement en 0,0004 seconde(s).)


SELECT * FROM `salles`
JOIN `etage`
ON `salles`.`id_etage`=`etage`.`id`;


id	nom	id_etage	capacite	id	nom	numero	superficie	
1	Lounge	1	100	1	RDC	0	500	
2	Studio Son	1	5	1	RDC	0	500	
3	Broadcasting	2	50	2	R+1	1	500	
4	Bocal Peda	2	4	2	R+1	1	500	
5	Coworking	2	80	2	R+1	1	500	
6	Studio Video	2	5	2	R+1	1	500	
