-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           10.5.4-MariaDB-log - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour annuaire
CREATE DATABASE IF NOT EXISTS `d5_mvc_tp2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `d5_mvc_tp2`;

-- Listage de la structure de la table annuaire. membres
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(59) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table annuaire.membres : ~9 rows (environ)
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
INSERT INTO `membres` (`id`, `nom`, `prenom`) VALUES
	(1, 'Sionne', 'Jacques'),
	(2, 'Itechnique', 'Paule'),
	(3, 'Hinique', 'Marthe'),
	(4, 'Kiéss', 'Jacques'),
	(5, 'Gnole', 'Guy'),
	(6, 'Iversaire', 'Anne'),
	(7, 'Bonnot', 'Jean'),
	(9, 'Himum', 'Max');
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
