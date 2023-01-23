-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_casis_harbas
DROP DATABASE IF EXISTS `db_casis_harbas`;
CREATE DATABASE IF NOT EXISTS `db_casis_harbas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_casis_harbas`;

-- Dumping structure for table db_casis_harbas.casis
DROP TABLE IF EXISTS `casis`;
CREATE TABLE IF NOT EXISTS `casis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nilai_tertulis` int(3) NOT NULL,
  `nilai_raport` int(3) NOT NULL,
  `prestasi_internasional` int(3) NOT NULL,
  `prestasi_nasional` int(3) NOT NULL,
  `prestasi_lokal` int(3) NOT NULL,
  `skbn` int(1) NOT NULL,
  `cek_fisik` int(1) NOT NULL,
  `skck` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_casis_harbas.casis: ~10 rows (approximately)
DELETE FROM `casis`;
INSERT INTO `casis` (`id`, `nama`, `nilai_tertulis`, `nilai_raport`, `prestasi_internasional`, `prestasi_nasional`, `prestasi_lokal`, `skbn`, `cek_fisik`, `skck`) VALUES
	(1, 'Nendra Janu Prasetyo', 358, 621, 0, 0, 0, 1, 1, 1),
	(2, 'Muhammad Fikriansyah', 355, 616, 0, 0, 0, 1, 1, 1),
	(3, 'Imam Akbar Asyauqi', 351, 618, 0, 0, 0, 1, 1, 1),
	(4, 'Ridho Fauzi Grafika', 358, 623, 0, 0, 0, 1, 1, 1),
	(5, 'Indra Taufiq', 366, 630, 0, 0, 1, 1, 1, 1),
	(6, 'Fahrezi', 357, 624, 0, 0, 1, 1, 1, 1),
	(7, 'Izzi Rizki', 361, 629, 0, 1, 0, 1, 1, 1),
	(8, 'Naufal Shidiq', 351, 614, 0, 0, 0, 1, 1, 1),
	(9, 'Laila Syaban Khairani', 361, 630, 0, 0, 0, 1, 1, 1),
	(10, 'Kayla Maharani', 363, 633, 0, 0, 0, 1, 1, 1);

-- Dumping structure for table db_casis_harbas.ranking_casis
DROP TABLE IF EXISTS `ranking_casis`;
CREATE TABLE IF NOT EXISTS `ranking_casis` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `score` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_casis_harbas.ranking_casis: ~10 rows (approximately)
DELETE FROM `ranking_casis`;
INSERT INTO `ranking_casis` (`id`, `nama`, `score`) VALUES
	('RCH0001IZZ', 'Izzi Rizki', 0.999994),
	('RCH0002IND', 'Indra Taufiq', 0.654665),
	('RCH0003FAH', 'Fahrezi', 0.654649),
	('RCH0004KAY', 'Kayla Maharani', 0.000033233),
	('RCH0005LAI', 'Laila Syaban Khairani', 0.0000279083),
	('RCH0006RID', 'Ridho Fauzi Grafika', 0.000017218),
	('RCH0007NEN', 'Nendra Janu Prasetyo', 0.0000150737),
	('RCH0008MUH', 'Muhammad Fikriansyah', 0.00000647333),
	('RCH0009IMA', 'Imam Akbar Asyauqi', 0.00000431775),
	('RCH0010NAU', 'Naufal Shidiq', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
