-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for somafiam
CREATE DATABASE IF NOT EXISTS `somafiam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `somafiam`;

-- Dumping structure for table somafiam.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.cache: ~0 rows (approximately)
DELETE FROM `cache`;

-- Dumping structure for table somafiam.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table somafiam.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.categories: ~5 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(3003, 'Entraînement électrique', 'categories/MKrEIqoeWXif3NiHf3Og977dpX0oZac5ejgu8RK1.jpg', '2024-08-27 11:43:18', '2024-08-27 11:43:18'),
	(3004, 'Énergie renouvelable', 'categories/ts0hoT6eyUYKpEj9tgjomJUIykySS9oACvGKLNZ0.jpg', '2024-08-27 12:15:31', '2024-08-27 12:15:31'),
	(3005, 'Éolienne', 'categories/29riYXBprVuLU07vjpPGnlJvWRvXkn7YHy6kvhfd.jpg', '2024-08-27 12:26:04', '2024-08-27 12:26:04'),
	(3006, 'Panneaux Solaires', 'categories/fdcrMqUcv1AXMtVOesnIRwjOV4YavinEKmfgpQNu.jpg', '2024-08-27 12:55:51', '2024-08-27 12:55:51'),
	(3007, 'Stockage d\'énergie', 'categories/IXGdMFp493Jkivaf2Hg9CXj8OmCD440l87Eu4rEr.jpg', '2024-08-27 14:08:42', '2024-08-27 14:08:42'),
	(3008, 'Cable électrique MT-HT', 'categories/qbGl3fa0YGzAWoCVyCPImhasEO4nFKYcHMa6YeRn.jpg', '2024-09-07 22:29:14', '2024-09-07 22:29:14');

-- Dumping structure for table somafiam.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table somafiam.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table somafiam.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table somafiam.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_08_27_121735_create_categories_table', 1),
	(5, '2024_08_27_121751_create_sub_categories_table', 1),
	(6, '2024_08_27_125402_create_produits_table', 2);

-- Dumping structure for table somafiam.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table somafiam.produits
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_produit` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sub_category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produits_sub_category_id_foreign` (`sub_category_id`),
  CONSTRAINT `produits_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.produits: ~96 rows (approximately)
DELETE FROM `produits`;
INSERT INTO `produits` (`id`, `name_produit`, `img`, `sub_category_id`, `created_at`, `updated_at`) VALUES
	(3001, 'Variateur de fréquence série AC310', 'Ryd1afxG3NtHp8JW2bekMMfB1ePkkKV2ahdB9iPJ.jpg', 3001, '2024-08-27 12:06:47', '2024-08-27 12:06:47'),
	(3002, 'Variateur de fréquence de la série AC10', 'OpaLLpbI5DCqjWQsqSEzF3dmMELtt8TIOziFVOln.jpg', 3001, '2024-08-27 12:07:45', '2024-08-27 12:07:45'),
	(3003, 'Convertisseur de fréquence spécial AC330 pour moteur à réluctance synchrone', 'bB2rnAS98PuLxX0wUZcPBmEH9cl3ZAyDN6av2spX.jpg', 3001, '2024-08-27 12:08:06', '2024-08-27 12:08:06'),
	(3004, 'Variateur AC AC200 à contrôle vectoriel hautes performances', 'JPdRbIZQGwFeorwhv6XcNKzoO07dszhBhOF4ZXCB.jpg', 3001, '2024-08-27 12:09:46', '2024-08-27 12:09:46'),
	(3005, 'Variateur de fréquence de la série AC70', 'EAhhvAmLi6gS4IBdlKBjwPlAWpdQItcDs6Do2N2s.jpg', 3001, '2024-08-27 12:10:23', '2024-08-27 12:10:23'),
	(3006, 'Mini variateurs de vitesse de fréquence portable AC70E', 'poDmXODmPDIDLDPavO9NvNWudzIx4xggGEZqUw1w.jpg', 3001, '2024-08-27 12:10:49', '2024-08-27 12:10:49'),
	(3007, 'Onduleur moyenne tension ACH100', 'QJ7autrwTfCi5RzNPgvi4wDpgiqftTA7HsalMIFG.jpg', 3002, '2024-08-27 12:12:34', '2024-08-27 12:12:34'),
	(3008, 'Onduleur de pompe solaire SI23', 'omGBapdq74samB9wH2IeMHYKGfEaQtTGr7sfgmDf.jpg', 3003, '2024-08-27 12:16:38', '2024-08-27 12:16:38'),
	(3009, 'Onduleur de pompe solaire SI30', 'WhL2GAiL6YiaVHOgEbK4nnUDYUoCnZb2HYTc0eo2.jpg', 3003, '2024-08-27 12:17:00', '2024-08-27 12:17:00'),
	(3010, 'Système de pompe solaire SIxV BLDC', '9ZdyTAgpbMwSb2bLVfLRVX724H8YGi4259c2PwEc.jpg', 3003, '2024-08-27 12:17:28', '2024-08-27 12:17:28'),
	(3011, 'Onduleur de pompe solaire SI21', 'NoSuKBmubAqBIbnAV6Htwu9kQScEzD4OIQqnEtco.jpg', 3003, '2024-08-27 12:17:57', '2024-08-27 12:17:57'),
	(3012, 'Onduleur de pompe solaire SI22', 'ImseuHJz0y0iAyY6HoS5SccyDEnnoOKs5DbE5usO.jpg', 3003, '2024-08-27 12:18:17', '2024-08-27 12:18:17'),
	(3013, 'Contrôleur de moteur de véhicule électrique série EV', 'PlXkALtvTiiPQGlH5Rbmt6TbF5QGrRDo2O5ylOqZ.jpg', 3004, '2024-08-27 12:19:50', '2024-08-27 12:19:50'),
	(3014, 'Éolienne à entraînement direct à aimant permanent', 'h0f8Ap5XiKPyX3uHj8GpAJoMk3WYn8vAlWAXvJ3j.jpg', 3005, '2024-08-27 12:29:00', '2024-08-27 12:29:00'),
	(3015, '3.6/4MW SERIES', 'KX45qj6wIKi7tkxghFW5HbCt2Skic63X78qnotwq.jpg', 3005, '2024-08-27 12:29:36', '2024-08-27 12:29:36'),
	(3016, 'Éolienne asynchrone', 'M0u3L2CK8avBAXPbkAtVU8N5fUsgHC3R8KsK7dWj.jpg', 3006, '2024-08-27 12:31:36', '2024-08-27 12:31:36'),
	(3017, '2.XMW SERIES', 'vYXz85RozaNT0riaFbz2tLzrZX4Lp8AsCAob2hoc.jpg', 3006, '2024-08-27 12:31:59', '2024-08-27 12:31:59'),
	(3018, '2.5MW SERIES', 'mbmYpeuhRhWQLQc8Fe89HS2KTuywajreLNivokw1.jpg', 3006, '2024-08-27 12:32:23', '2024-08-27 12:32:23'),
	(3019, '3.XMW SERIES', 'yTyxLikQc17Uqf3x17GGLWHLIa37DBWOK7gCEvl9.jpg', 3006, '2024-08-27 12:33:05', '2024-08-27 12:33:05'),
	(3020, '4.XMW SERIES', '0rwQ2Uhj4ZF4Or9bN4oSInO69LWHS80DaYlETUCW.jpg', 3006, '2024-08-27 12:33:45', '2024-08-27 12:33:45'),
	(3021, 'Vente à chaud 2021 demi-cellules 450W panneau solaire monocristallin', 'tnzSPzPRcDVAWhR9lKIsB6J8DapP9EKBPMVoWTuN.png', 3007, '2024-08-27 13:04:51', '2024-08-27 13:04:51'),
	(3022, 'Panneau solaire monocristallin 445 W 450 W 455 W à haut rendement', '2xdqQ8B71wglmX2BPVpoYPjyIAHMNIHJEzUKfaBL.png', 3007, '2024-08-27 13:06:15', '2024-08-27 13:06:15'),
	(3023, '2021 Nouvelle technologie panneau solaire monocristallin demi-cellule 450 W.', 'dbIgWr9Z40xN00kfU4mbFx1FrdoayNIjkNzgf0PN.png', 3007, '2024-08-27 13:08:58', '2024-08-27 13:08:58'),
	(3024, 'JF Solar 445W panneau solaire monocristallin pour système d′alimentation Home Intelligent', 'pXjtiTCgT4IFac46WQUlBYxR2oRYg4eqACEg0yw8.png', 3007, '2024-08-27 13:10:39', '2024-08-27 13:10:39'),
	(3025, 'Panneau solaire monocristallin 440 W à demi-cellule en Europe', 'foG1BCcohwFIFf6A9zF8v9yLYN3TunTFplRzuTUE.png', 3007, '2024-08-27 13:12:34', '2024-08-27 13:12:34'),
	(3026, 'Usine solaire JF Prix de gros bonne qualité panneau solaire Mono 370W', 'yTmADfV5LgxsPO6uFFNn9yoF8PKaoLXkwLk7MLmO.png', 3007, '2024-08-27 13:13:44', '2024-08-27 13:13:44'),
	(3027, 'Module PV mono demi-cellule haute efficacité 455W', 'Fr0jUYJ2srLU5f7lMWyCDb9vsxhJXhNyppqBM072.png', 3007, '2024-08-27 13:15:17', '2024-08-27 13:15:17'),
	(3028, 'JF Solar meilleure vente utilisation domestique 430W 440W 450W Solar Panneaux d′alimentation', 'xfW08AJ41eVbucrLoDhQV7dLhxTsSEJXwpuI78kZ.png', 3007, '2024-08-27 13:16:33', '2024-08-27 13:16:33'),
	(3029, 'Panneau solaire double verre mono JF 525 à 545 W.', '5J1crfZt6kZXXdi2qzTsJY6KddUzMz4LHEBQIYGo.png', 3008, '2024-08-27 13:20:20', '2024-08-27 13:20:20'),
	(3030, 'JF Solar 540W haute efficacité puissance de sortie solaire monocristallin Panneau', 'zMlBtEMQaA4hkCIUJA4bccZac2jK1PMsqJ5VWfzj.png', 3008, '2024-08-27 13:22:31', '2024-08-27 13:22:31'),
	(3031, 'Nous sommes le panneau solaire mono demi-cellule de 550 W d′usine avec Prix raisonnable', 'qnjXa6UDzhRrB5FsIjHQd5iXEtwqMUSUcigb7Loy.png', 3008, '2024-08-27 13:23:44', '2024-08-27 13:23:44'),
	(3032, 'Prix usine panneau solaire mono demi-cellule 545W de haute qualité', 't582kTnRtLn123GeJlqRbF2KUEwzsAT3L2ITx7N7.png', 3008, '2024-08-27 13:24:59', '2024-08-27 13:24:59'),
	(3033, 'Module solaire double verre mono JF Solar 525~545 W.', 'TvCxgO6j5NRVNWG5QuzqNxtDqvEyxTCckfSce0Yx.png', 3008, '2024-08-27 13:26:13', '2024-08-27 13:26:13'),
	(3034, 'Module solaire de conception nouvelle 540W Half Cell Mono avec usine Prix', 'fgyHXFbPydxPZTbxcaocc9siI83opDLc2i4MMN7c.png', 3008, '2024-08-27 13:27:42', '2024-08-27 13:27:42'),
	(3035, 'Panneau solaire 545W mono demi-cellule à haut rendement avec prix d′usine', 'fOQT3CQXIWuQ1Od3EjvzCElIQzfkX0vs8dDaLHMt.png', 3008, '2024-08-27 13:28:01', '2024-08-27 13:28:01'),
	(3036, 'JF Solar 182*182mm demi-coupe cellules 540W panneau solaire monocristallin', 'BiX06aNNtH3IHVanDhvaERmw0ZA7heSirW3rySsl.png', 3008, '2024-08-27 13:28:44', '2024-08-27 13:28:44'),
	(3037, 'Panneau solaire de haute qualité 550 W Nouveau design solaire à chaud Panneau', 'XrTthTvV9Oh4fdG9j458NKrCIOU5zFkOBXoJZk3H.png', 3009, '2024-08-27 13:31:16', '2024-08-27 13:31:16'),
	(3038, 'Nouveau module solaire populaire 550 W panneau solaire bas prix', 'kAWBG1jiXMYI0aTQxWti62KIDgOTYlHr990y0v8M.png', 3009, '2024-08-27 13:32:58', '2024-08-27 13:32:58'),
	(3039, '545W Hot sale cellules solaires sensibles à l′énergie solaire et Panneaux', 'jKzhqZwLffchvcvbtfcnOONpsUCuI9PZFGoIkx51.png', 3009, '2024-08-27 13:34:31', '2024-08-27 13:34:31'),
	(3040, 'Module solaire à haut efficacité 540W panneau solaire monocristallin', '5YI9L2bkBrJs2lIHO8dwfrMqMb1CEkxFvPptnFlP.png', 3009, '2024-08-27 13:35:41', '2024-08-27 13:35:41'),
	(3041, 'Panneaux solaires haute efficacité et durables de 540W pour l′industrie légère', 'Q5REefF2AgSsl1tX6LIYAiAbF8cL3gPjt9GGswSC.png', 3009, '2024-08-27 13:37:08', '2024-08-27 13:37:08'),
	(3042, 'Nouveaux panneaux et cellules solaires à chaud 540W avec TUV Certification', 'JxhBITZqUFcH1Y9weTDXnDtbW2lpALuxgyLTrkha.png', 3009, '2024-08-27 13:38:13', '2024-08-27 13:38:13'),
	(3043, '540W produit solaire bon marché panneau solaire monocristallin pour l′industrie légère', 'iW1C9q0q4QytYTNIeJfFUEQHMQApr6uJ7CZ6q36l.png', 3010, '2024-08-27 13:40:24', '2024-08-27 13:40:24'),
	(3044, 'Générateur solaire portable de charge de voiture', 'lsOcMNumYh0q9aPY4IK8wEd8XpLZBGj1yZMwwQaw.png', 3011, '2024-09-07 20:51:37', '2024-09-07 20:51:37'),
	(3045, 'Camping extérieur utiliser 500 W portable Power Station énergie solaire', 'NhCqydL4Zr1VA0JKvxQxnEQMbP0BaOGTQrwdGHeM.png', 3011, '2024-09-07 20:53:28', '2024-09-07 20:53:28'),
	(3046, 'Panneau solaire Folable en silicium monocristallin', 'v1aMpNMzIlIVX11UaafatZvevzcMGgapip3IQtCs.png', 3011, '2024-09-07 20:55:30', '2024-09-07 20:55:30'),
	(3047, 'Camping extérieur Power Station portable Solar', 'hP9uhfPvcEIZyBAu7tqAK5GTlLMyduKKX7963Fib.png', 3011, '2024-09-07 20:59:11', '2024-09-07 20:59:11'),
	(3048, 'Station d′alimentation Portable recharge sans', '88Gf94QS9EIR1MLLdvrzsO54iqK50m9x23BNoQAX.png', 3011, '2024-09-07 21:01:23', '2024-09-07 21:01:23'),
	(3049, 'Station d′alimentation portable et pratique de 150W/155Wh avec batterie au lithium et système solaire.', '98tlTbrWXGOpzbyLuzrRRpWjWgO8UI5g8EAb1Adb.png', 3011, '2024-09-07 21:03:26', '2024-09-07 21:03:26'),
	(3050, '2 heures de charge rapide de batterie LiFePO4 Générateur solaire portable 1200W', 'shjZcI4qll1xHR4hG3swWNz6QDmvwIYzc4cXz6zJ.png', 3011, '2024-09-07 21:04:49', '2024-09-07 21:04:49'),
	(3051, 'Accueil urgence alimentation de secours Camping extérieur Station d′alimentation portable 2 000 W.', 'iTQNO6DHzdaepumOUk19yB9ev5YhQAUA22OwN0XS.png', 3011, '2024-09-07 21:09:58', '2024-09-07 21:09:58'),
	(3052, 'Station d′alimentation portable 1800W extérieur Camping utiliser jeûne charge solaire Générateur', 'Nd04MGdAMPGkeyROTgAAyniIkLyWn41frgT0wrbl.png', 3011, '2024-09-07 21:11:38', '2024-09-07 21:11:38'),
	(3053, 'Station d′alimentation portable compacte 300 W pour le camping', 'MqY1rUZtlEP1Vuhh1DYHB91INffEQcrD231ZVtjR.png', 3011, '2024-09-07 21:12:48', '2024-09-07 21:12:48'),
	(3054, 'Générateur solaire portable de 2 000 W pour travaux extérieurs haute capacité', 'uNmNHY1GSt6qNIyB8ZivHqALWJCCjDqtdgr9v5ti.png', 3012, '2024-09-07 21:15:27', '2024-09-07 21:15:27'),
	(3055, 'Système solaire hybride 2000W Générateur solaire portable Batterie LiFePO4', 'pVO0Jd3d3ZOAoHDfXEwodJrHv4ujSPWApwSkPAlP.png', 3012, '2024-09-07 21:16:07', '2024-09-07 21:16:07'),
	(3056, 'Système solaire hybride 2.5Hours recharge solaire Générateur solaire portable 1000W', 'Umr69iPsAYBwL9c5PyisJrckDXbs8XNHQJpR67DI.png', 3012, '2024-09-07 21:17:00', '2024-09-07 21:17:00'),
	(3057, 'Station d′alimentation 2 heures de charge rapide de 2 000 W pour les opérations de secours', 'SPV40FfvAbFl4hsNSv57j6LP83jPb5dJB0hvkhXb.png', 3012, '2024-09-07 21:17:44', '2024-09-07 21:17:44'),
	(3058, '2 heures de charge rapide batterie LiFePO4 Générateur solaire 2 000 W.', 'HGEtAQ6Dg3XP1mqokyitHBVAIBAmcFFmGvsFmAmy.png', 3012, '2024-09-07 21:18:30', '2024-09-07 21:18:30'),
	(3059, 'Charge de la batterie de stockage d′énergie par une centrale solaire/murale/voiture de 2 000 W.', 'IT8SLDWGe1q8yC9FmFvTelxKyg9qVoh0faNQ6OIu.png', 3012, '2024-09-07 21:19:30', '2024-09-07 21:19:30'),
	(3060, 'LiFePO4 batterie 2 000 W charge de l′alimentation par solaire/prise murale/voiture', 'iMM8tArFLh49y2boMjiwKc1MKRuekANLJr35auLN.png', 3012, '2024-09-07 21:20:27', '2024-09-07 21:20:27'),
	(3061, 'LiFePO4 batterie MPPT contrôleur 2 000 W Power Station Solar Generator', 'UvKDBCldDmYQVx7X9sdT3OaZfyCgRqspcFHD2nEO.png', 3012, '2024-09-07 21:21:14', '2024-09-07 21:21:14'),
	(3062, '1100W pour l′extérieur de la station d′alimentation Portable Camping Pêche Sauvegarde d′accueil', 'ix41ak4hHy3J030ap5lY0Ns5gFc4VM6b6JMJSCME.png', 3012, '2024-09-07 21:22:01', '2024-09-07 21:22:01'),
	(3063, 'Centrale électrique 1 000 W, batterie au lithium, générateur solaire portable', 'YmdIv2QV8wilnLuwegia1b5ODOVyLTxKYRm4ih6G.png', 3013, '2024-09-07 21:24:00', '2024-09-07 21:24:00'),
	(3064, 'L′énergie solaire système portable de la station d′alimentation 500W AC/DC/sortie USB', 'CkxAQlj0eRJSVEQxTrCYjSYHZuzmDhm9f3cjA4YQ.png', 3013, '2024-09-07 21:24:38', '2024-09-07 21:24:38'),
	(3065, 'Alimentation d′urgence 500 W pour station d′alimentation portable', 'zPmE9jyXmg20wEcE1eDTpt3E8pjdCFb5OxAbiJmD.png', 3013, '2024-09-07 21:25:26', '2024-09-07 21:25:26'),
	(3066, 'Station d′alimentation solaire 500W Générateur solaire portable pour le camping', 'Tbr2Q0z2ZdPyq85BrdwG7TqzFuzEuwlzaOG8bwzv.png', 3013, '2024-09-07 21:25:49', '2024-09-07 21:25:49'),
	(3067, 'Batterie de stockage d′énergie solaire, station d′alimentation portable 300 W, banc d′alimentation', 'AKTSrn5Pob6LO9FVNXFSZqZnqwfwT4ME2ij0peNY.png', 3013, '2024-09-07 21:26:35', '2024-09-07 21:26:35'),
	(3068, 'Indoor lumière solaire Accueil batterie portable de stockage de station d′alimentation 300W', 'xp8amUyHyqnfrMBqqQXchArnyJtyUd5Y99bGhHlB.png', 3013, '2024-09-07 21:26:51', '2024-09-07 21:26:51'),
	(3069, 'Station d′alimentation de la banque d′alimentation de port 300 W CA/CC/USB/Type-C.', 'sfOID4gOhWPBQoeJfpmkedQtmk9kGdCIAfyXwZdg.png', 3013, '2024-09-07 21:28:03', '2024-09-07 21:28:03'),
	(3070, 'Système d′énergie solaire grande capacité 3000W portable Power Suplly', 'hdaMUOnP0V1tz9pi3TciDxv7g7wbzKIsUAwwzBf8.png', 3013, '2024-09-07 21:30:38', '2024-09-07 21:30:38'),
	(3071, 'Centrale électrique 1 000 W du générateur solaire de batterie LiFePO4', 'FSOlx0COU3J8asm472EnroW81gjKHivE42966gV2.png', 3013, '2024-09-07 21:31:47', '2024-09-07 21:31:47'),
	(3072, 'Outdoor recharge solaire 500W Générateur solaire portable Portable Power Station pour le camping', 'h8Cr5IQCEBTqVXnJ1qjW6naQ2zXEBVOWQNYrF1VU.png', 3013, '2024-09-07 21:32:58', '2024-09-07 21:32:58'),
	(3073, 'Système de stockage de l′énergie domestique 5kw 10kw 15kw Batterie LiFePO4 20kw', 'ZAxSeZ0Mhw3OFifjGrBJAWNBbd6racmm1rERzEEq.png', 3013, '2024-09-07 21:40:23', '2024-09-07 21:40:23'),
	(3074, 'Alimentation de la batterie de l′énergie Syestem de stockage 10kw 15kw 20kw', 'bjScrvbLd01Dp1zulFdfdDoZdPYzJdoPRUIbomcl.png', 3014, '2024-09-07 21:41:21', '2024-09-07 21:41:21'),
	(3075, 'Accueil du système de stockage de l′énergie tout en un seul 5kw-20kw', 'oWLolYQNkrKlIN9KZTuZ1JxKYPiDLjCSN4BYx2oG.png', 3014, '2024-09-07 21:42:02', '2024-09-07 21:42:02'),
	(3076, 'Système d′énergie solaire mural domestique 5.12kw 10,24kw stockage d′énergie Batterie', '3MVwiBy6RMGCQLz1Nl0vihlMD3E6ezewRg3MLBlA.png', 3014, '2024-09-07 21:43:07', '2024-09-07 21:43:07'),
	(3077, '5-30kw packs batterie tout en un système de stockage de l′énergie hors réseau', 'KKdru6d9euP13qDmNQLWVW8DLIRYaZBDilFM54NH.png', 3014, '2024-09-07 21:43:51', '2024-09-07 21:43:51'),
	(3078, 'OEM ODM Accueil utiliser 220V 5kw 5.12kwh convertisseur de puissance système de stockage de l′énergie solaire', '5qmlJJaVAyyqapOjPoH97R3iTYV54joWe5GVAOIo.png', 3014, '2024-09-07 21:45:19', '2024-09-07 21:45:19'),
	(3079, 'Utilisation de gros de l′usine Accueil 220V 5kw 5.12kwh convertisseur de puissance système de stockage de l′énergie solaire', '5wvKKqDttXfXxlhOPcPR1t3r4N3cuoG3lr5GthkK.png', 3014, '2024-09-07 21:46:10', '2024-09-07 21:46:10'),
	(3080, 'Batterie LiFePO4 Système de stockage d′énergie solaire pour la maison Batterie murale 5,12 kWh', 'rwaXkrs8tVnNzbpmhEQK1O8YuSbYrU9ztakxZDKT.png', 3014, '2024-09-07 21:46:59', '2024-09-07 21:46:59'),
	(3081, 'Accueil Système de stockage de l′Énergie Solaire 10.24kwh batterie Lithium-ion', 'AWiDbXcbmXOYaMABJbsnr06Rskj5SExIxR826wDY.png', 3014, '2024-09-07 21:48:00', '2024-09-07 21:48:00'),
	(3082, 'Accueil du système de stockage de l′énergie 5kw-30kw pile batterie LiFePO4', '5hPbY7PnKREIeAwJGzcsAHiNPwUvWqevUkqLgaOG.png', 3014, '2024-09-07 21:49:02', '2024-09-07 21:49:02'),
	(3083, 'Home Solar système pile stockage batterie 5kwh lithium batterie', 'rqblnYdKE1Uw0kLUZviO8klllsiuR0NLuHhEKhfE.png', 3014, '2024-09-07 21:49:57', '2024-09-07 21:49:57'),
	(3084, 'Inverseur hybride On-Grid et Off-Grid 3,5kw 5,5kw solaire Inverseur', 'JQ2udVfAR6RsHIz10CPc1XVVFzSxMeupRbJzrVfA.png', 3015, '2024-09-07 21:51:08', '2024-09-07 21:51:08'),
	(3085, 'Hybride 3kw 24V de l′onduleur monté sur un mur de convertisseur de puissance solaire intégré', '8MUIPj5y4J4bXCLsgy9dFruSvidXsHbMbiaCFQYg.png', 3015, '2024-09-07 21:51:55', '2024-09-07 21:51:55'),
	(3086, 'Onduleur hybride 5,5kw, système de stockage d′énergie triphasé monophasé Inverseur', '1SLOd9iR5CD05HSVO73InHe1B7x5sVTRP2PWXlFl.png', 3015, '2024-09-07 21:52:14', '2024-09-07 21:52:14'),
	(3087, 'Prise en charge du Wi-Fi et du Bluetooth sur le système d′alimentation solaire hybride de 4 kW en mode réseau et hors réseau.', 'wjzpJ1o4EuHA9Xh2D0RcraOMUHxqIHUJCUvttgy3.png', 3015, '2024-09-07 21:52:56', '2024-09-07 21:52:56'),
	(3088, 'Hors réseau onduleur solaire MPPT 5,5 Kw avec boutons tactiles', 'OCQg3OksaXWHliofNyqWokeboQJH8DzCQQObLgEU.png', 3015, '2024-09-07 21:54:31', '2024-09-07 21:54:31'),
	(3089, 'Sur hybride&Stockage d′énergie hors réseau inverseur triphasé 8kw', 'PKagEezccvwpnxV3T7hRyn5K4R6JKDhQ34ypBbx7.png', 3015, '2024-09-07 21:55:49', '2024-09-07 21:55:49'),
	(3090, 'Inverseur solaire Micorinverter 300 W 500 W monophasé avec Wi-Fi', 'ZZXgN6WOVHMQEs2XyWBHY4NTPd3GCl14KicvF6Zl.png', 3016, '2024-09-07 21:56:09', '2024-09-07 21:56:09'),
	(3091, 'Câble-Opgw optique Centre-Basé d′Opgw de tube d′acier inoxydable', 'TCtwM0gA51ejQZr7URVIVogDWc3yIxHf5RXUpSmm.png', 3016, '2024-09-07 22:24:02', '2024-09-07 22:24:02'),
	(3092, 'Tube en acier inoxydable échoués Opgw Cable-Opgw optique', 'iON1ioarclUQk64f9ld9zjzxpEgoBzp6TBJFABhI.png', 3016, '2024-09-07 22:24:32', '2024-09-07 22:24:32'),
	(3093, 'Opgw-Aluminum vêtu de tube de câble optique Opgw desserrés', 'ofHRCQVDvIy8dKabTyPzlpOfulg6FA0tM6H1vM1f.png', 3016, '2024-09-07 22:25:10', '2024-09-07 22:25:10'),
	(3094, 'Tube en acier inoxydable Opgw multibrins', 'OQ88VFQhJ3MLcxb2KfEdN6nSNI3ZcieOMECRkBVT.png', 3016, '2024-09-07 22:25:47', '2024-09-07 22:25:47'),
	(3096, 'Tube en acier inoxydable à revêtement aluminium Opgw', '9hO48lGe184hG7MPdLNBIcTTZhjQ2yzGjX458cdz.png', 3016, '2024-09-07 22:31:50', '2024-09-07 22:31:50'),
	(3097, 'Revêtement aluminium Tube PBT de fibre optique composite le fil de masse de frais généraux', 'CJp5CprRzQnt9VY6NyAJeyLoo6Tw5UorUNDUBwYO.png', 3016, '2024-09-07 22:32:06', '2024-09-07 22:32:06');

-- Dumping structure for table somafiam.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.sessions: ~2 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('leqd25zaMM3zJOeijtkOaMUEtmZL6RGA2pFMaoRU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHFZRDFkcFF5UGxnTExUWWVwVGhmZlFjbVFQNDl0T0NKc3BleTkxWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGUtcHJvZHVpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725751926),
	('LwxA8Y3gaq1bntEF4CU8aKgV5ra4Vdwh5vLd2Jmb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDhnMjA0Vjl1TG1sU1RMdjBQYU8yWkkzbWx6eDRpaklLdmNRbjhnYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGUtcHJvZHVpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725745736);

-- Dumping structure for table somafiam.sub_categories
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.sub_categories: ~16 rows (approximately)
DELETE FROM `sub_categories`;
INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
	(3001, 'Entraînements basse tension', 3003, '2024-08-27 11:51:14', '2024-08-27 11:51:14'),
	(3002, 'Variateurs moyenne tension', 3003, '2024-08-27 12:11:16', '2024-08-27 12:11:16'),
	(3003, 'Inverseur de pompe à eau solaire', 3004, '2024-08-27 12:16:06', '2024-08-27 12:16:06'),
	(3004, 'Contrôleur EV', 3004, '2024-08-27 12:18:40', '2024-08-27 12:18:40'),
	(3005, 'Éoliennes terrestres', 3005, '2024-08-27 12:27:09', '2024-08-27 12:27:09'),
	(3006, 'Éoliennes offshore', 3005, '2024-08-27 12:30:30', '2024-08-27 12:30:30'),
	(3007, 'Hot Products-JFS1-166', 3006, '2024-08-27 12:56:47', '2024-08-27 12:56:47'),
	(3008, 'Popular Products-JFS2-182', 3006, '2024-08-27 13:17:24', '2024-08-27 13:17:24'),
	(3009, 'Spot Goods-JFS2', 3006, '2024-08-27 13:29:35', '2024-08-27 13:29:35'),
	(3010, 'recommandation du vendeur', 3006, '2024-08-27 13:40:03', '2024-08-27 13:40:03'),
	(3011, 'Générateur solaire portable', 3007, '2024-09-07 20:49:20', '2024-09-07 20:49:20'),
	(3012, 'Générateur solaire portable à charge rapide', 3007, '2024-09-07 21:14:25', '2024-09-07 21:14:25'),
	(3013, 'Value Station d\'alimentation portable', 3007, '2024-09-07 21:23:01', '2024-09-07 21:23:01'),
	(3014, 'Batterie à énergie domestique', 3007, '2024-09-07 21:39:26', '2024-09-07 21:39:26'),
	(3015, 'Inverseur solaire', 3007, '2024-09-07 21:50:20', '2024-09-07 21:50:20'),
	(3016, 'Câble optique', 3008, '2024-09-07 22:29:33', '2024-09-07 22:29:33');

-- Dumping structure for table somafiam.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table somafiam.users: ~0 rows (approximately)
DELETE FROM `users`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
