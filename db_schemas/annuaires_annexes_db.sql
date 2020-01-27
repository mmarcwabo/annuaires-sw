-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.3.16-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour annuaires-sw
DROP DATABASE IF EXISTS `annuaires-sw`;
CREATE DATABASE IF NOT EXISTS `annuaires-sw` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `annuaires-sw`;

-- Listage de la structure de la table annuaires-sw. categorie
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `description` longtext DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table annuaires-sw. servicereferenced
DROP TABLE IF EXISTS `servicereferenced`;
CREATE TABLE IF NOT EXISTS `servicereferenced` (
  `idservice_referenced` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(45) NOT NULL,
  `contacts` longtext NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `horairedisponibilite` varchar(45) NOT NULL,
  `idville` int(11) NOT NULL DEFAULT 1,
  `details` longtext DEFAULT NULL,
  `categorie_idcategorie` int(11) NOT NULL,
  PRIMARY KEY (`idservice_referenced`),
  KEY `fk_service_referenced_categorie_idx` (`categorie_idcategorie`),
  CONSTRAINT `fk_service_referenced_categorie` FOREIGN KEY (`categorie_idcategorie`) REFERENCES `categorie` (`idcategorie`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
