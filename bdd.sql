-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.6.5-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table site_candice_dietetique. newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table site_candice_dietetique.newsletters : 4 rows
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
INSERT INTO `newsletters` (`id`, `mail`, `is_active`, `created`) VALUES
	(4, 'test@sfr.fr', 1, '2022-07-06 19:01:46'),
	(3, 'tata@sfr.fr', 1, '2022-07-06 16:32:33'),
	(5, 'test2@sfr.fr', 1, '2022-07-06 19:02:54'),
	(6, 'test3@sfr.fr', 1, '2022-07-06 19:03:12');
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Listage de la structure de table site_candice_dietetique. sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `position` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `titre` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table site_candice_dietetique.sliders : 8 rows
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `src`, `position`, `is_active`, `titre`) VALUES
	(1, '/img/saison/aubergine.png', 1, 1, 'aubergine'),
	(2, '/img/saison/poivron.png', 2, 1, 'poivron'),
	(3, '/img/saison/radis.png', 3, 1, 'radis'),
	(4, '/img/saison/Tomate.png', 4, 1, 'tomate'),
	(5, '/img/saison/Cerise.png', 5, 1, 'cerise'),
	(6, '/img/saison/melon.png', 6, 1, 'melon'),
	(7, '/img/saison/pasteque.png', 7, 1, 'pasteque'),
	(8, '/img/saison/peche.png', 8, 1, 'peche');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Listage de la structure de table site_candice_dietetique. tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'Tâche...',
  `priority` int(3) DEFAULT 0,
  `due_date` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '01/01/2022',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `comment` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `done` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table site_candice_dietetique.tasks : 1 rows
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` (`id`, `task`, `priority`, `due_date`, `is_active`, `comment`, `done`) VALUES
	(19, 'test', 2, '01/01/2022', 1, NULL, 1);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;

-- Listage de la structure de table site_candice_dietetique. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table site_candice_dietetique.users : 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
	(1, 'test@test.fr', '$2y$10$CoXtw8ziN7w8Vvv8BEGwl.eKo7Iib.2wF31RLhyeqRY3gLaOS3Rny', '2022-06-27 08:16:03', '2022-06-27 08:58:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
