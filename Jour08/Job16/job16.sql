SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

MariaDB:3307/jour09/		http://localhost/phpmyadmin/index.php?route=/database/sql&db=jour09&server=2

   Affichage des lignes 0 -  0 (total de 1, traitement en 0,0141 seconde(s).)


SELECT etage.nom AS nom_etage, 
salles.nom AS `Biggest Room`, 
salles.capacite AS capacite 
FROM salles 
JOIN etage 
ON salles.id_etage = etage.id 
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);



RDC	Lounge	100	

