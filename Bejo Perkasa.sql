-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bejo_perkasa
CREATE DATABASE IF NOT EXISTS `bejo_perkasa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bejo_perkasa`;

-- Dumping structure for table bejo_perkasa.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id_kriteria` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kriteria` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai_kriteria` decimal(10,3) NOT NULL,
  `tipe_kriteria` enum('Benefit','Cost') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kriteria`),
  UNIQUE KEY `kode_kriteria` (`kode_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table bejo_perkasa.data_kriteria: ~8 rows (approximately)
REPLACE INTO `data_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`, `tipe_kriteria`) VALUES
	(1, 'C1', 'Kreativitas', 3.000, 'Benefit'),
	(2, 'C2', 'Absensi', 5.000, 'Benefit'),
	(3, 'C3', 'Profesionalitas', 3.000, 'Benefit'),
	(4, 'C4', 'Kebersihan', 4.000, 'Benefit'),
	(5, 'C5', 'Kerjasama', 2.000, 'Benefit'),
	(6, 'C6', 'Tanggung Jawab', 3.000, 'Benefit'),
	(7, 'C7', 'Tatakrama', 3.000, 'Benefit'),
	(8, 'C8', 'Penampilan', 2.000, 'Benefit');
	
-- Dumping structure for view bejo_perkasa.normalisasi_bobot
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `normalisasi_bobot` (
	`kode_kriteria` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nama_kriteria` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nilai_kriteria` DECIMAL(10,3) NOT NULL,
	`bobot_normalisasi` DECIMAL(14,3) NULL
) ENGINE=MyISAM;

-- Dumping structure for table bejo_perkasa.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table bejo_perkasa.pegawai: ~10 rows (approximately)
REPLACE INTO `pegawai` (`id_pegawai`, `nama_karyawan`) VALUES
	(1, 'Wawan'),
	(2, 'Andi'),
	(3, 'Pitri'),
	(4, 'Suryana'),
	(5, 'Agus'),
	(6, 'Dudi'),
	(7, 'Asep'),
	(8, 'Topik'),
	(9, 'Sukisno'),
	(10, 'Ridwan');

-- Dumping structure for table bejo_perkasa.konversi_penilaian
CREATE TABLE IF NOT EXISTS `konversi_penilaian` (
  `id_konversi` int NOT NULL AUTO_INCREMENT,
  `id_pegawai` int NOT NULL,
  `kode_kriteria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai_kriteria` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_konversi`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `kode_kriteria` (`kode_kriteria`),
  CONSTRAINT `konversi_penilaian_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  CONSTRAINT `konversi_penilaian_ibfk_2` FOREIGN KEY (`kode_kriteria`) REFERENCES `data_kriteria` (`kode_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table bejo_perkasa.konversi_penilaian: ~80 rows (approximately)
REPLACE INTO `konversi_penilaian` (`id_konversi`, `id_pegawai`, `kode_kriteria`, `nilai_kriteria`) VALUES
	(1, 1, 'C1', 80.00),
	(2, 1, 'C2', 85.00),
	(3, 1, 'C3', 75.00),
	(4, 1, 'C4', 80.00),
	(5, 1, 'C5', 50.00),
	(6, 1, 'C6', 60.00),
	(7, 1, 'C7', 70.00),
	(8, 1, 'C8', 70.00),
	(9, 2, 'C1', 70.00),
	(10, 2, 'C2', 80.00),
	(11, 2, 'C3', 70.00),
	(12, 2, 'C4', 85.00),
	(13, 2, 'C5', 65.00),
	(14, 2, 'C6', 80.00),
	(15, 2, 'C7', 75.00),
	(16, 2, 'C8', 75.00),
	(17, 3, 'C1', 70.00),
	(18, 3, 'C2', 70.00),
	(19, 3, 'C3', 75.00),
	(20, 3, 'C4', 80.00),
	(21, 3, 'C5', 75.00),
	(22, 3, 'C6', 85.00),
	(23, 3, 'C7', 75.00),
	(24, 3, 'C8', 80.00),
	(25, 4, 'C1', 85.00),
	(26, 4, 'C2', 70.00),
	(27, 4, 'C3', 65.00),
	(28, 4, 'C4', 60.00),
	(29, 4, 'C5', 80.00),
	(30, 4, 'C6', 55.00),
	(31, 4, 'C7', 65.00),
	(32, 4, 'C8', 75.00),
	(33, 5, 'C1', 65.00),
	(34, 5, 'C2', 80.00),
	(35, 5, 'C3', 65.00),
	(36, 5, 'C4', 75.00),
	(37, 5, 'C5', 70.00),
	(38, 5, 'C6', 65.00),
	(39, 5, 'C7', 80.00),
	(40, 5, 'C8', 65.00),
	(41, 6, 'C1', 70.00),
	(42, 6, 'C2', 75.00),
	(43, 6, 'C3', 65.00),
	(44, 6, 'C4', 50.00),
	(45, 6, 'C5', 55.00),
	(46, 6, 'C6', 65.00),
	(47, 6, 'C7', 60.00),
	(48, 6, 'C8', 70.00),
	(49, 7, 'C1', 75.00),
	(50, 7, 'C2', 80.00),
	(51, 7, 'C3', 80.00),
	(52, 7, 'C4', 85.00),
	(53, 7, 'C5', 70.00),
	(54, 7, 'C6', 65.00),
	(55, 7, 'C7', 60.00),
	(56, 7, 'C8', 70.00),
	(57, 8, 'C1', 80.00),
	(58, 8, 'C2', 90.00),
	(59, 8, 'C3', 85.00),
	(60, 8, 'C4', 70.00),
	(61, 8, 'C5', 50.00),
	(62, 8, 'C6', 60.00),
	(63, 8, 'C7', 75.00),
	(64, 8, 'C8', 85.00),
	(65, 9, 'C1', 55.00),
	(66, 9, 'C2', 65.00),
	(67, 9, 'C3', 75.00),
	(68, 9, 'C4', 70.00),
	(69, 9, 'C5', 80.00),
	(70, 9, 'C6', 65.00),
	(71, 9, 'C7', 70.00),
	(72, 9, 'C8', 50.00),
	(73, 10, 'C1', 90.00),
	(74, 10, 'C2', 70.00),
	(75, 10, 'C3', 80.00),
	(76, 10, 'C4', 90.00),
	(77, 10, 'C5', 85.00),
	(78, 10, 'C6', 70.00),
	(79, 10, 'C7', 70.00),
	(80, 10, 'C8', 70.00);

-- Dumping structure for view bejo_perkasa.nilai_v
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilai_v` 
) ENGINE=MyISAM;


-- Dumping structure for view bejo_perkasa.ranking_pegawai
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `ranking_pegawai` 
) ENGINE=MyISAM;

-- Dumping structure for view bejo_perkasa.vektor_s
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vektor_s` 
) ENGINE=MyISAM;

-- Dumping structure for view bejo_perkasa.normalisasi_bobot
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `normalisasi_bobot`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `normalisasi_bobot` AS select `data_kriteria`.`kode_kriteria` AS `kode_kriteria`,`data_kriteria`.`nama_kriteria` AS `nama_kriteria`,`data_kriteria`.`nilai_kriteria` AS `nilai_kriteria`,round((`data_kriteria`.`nilai_kriteria` / (select sum(`data_kriteria`.`nilai_kriteria`) from `data_kriteria`)),3) AS `bobot_normalisasi` from `data_kriteria`;

-- Dumping structure for view bejo_perkasa.vektor_s
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vektor_s`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vektor_s` AS select `p`.`id_pegawai` AS `id_pegawai`,`p`.`nama_karyawan` AS `nama_karyawan`,round(exp(sum(log((case when (`dk`.`bobot_normalisasi` is not null) then pow(`kp`.`nilai_kriteria`,`dk`.`bobot_normalisasi`) end)))),5) AS `nilai_s` from ((`pegawai` `p` join `konversi_penilaian` `kp` on((`p`.`id_pegawai` = `kp`.`id_pegawai`))) join `normalisasi_bobot` `dk` on((`kp`.`kode_kriteria` = `dk`.`kode_kriteria`))) group by `p`.`id_pegawai`;

-- Dumping structure for view bejo_perkasa.nilai_v
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilai_v`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `nilai_v` AS select `vs`.`id_pegawai` AS `id_pegawai`,`vs`.`nama_karyawan` AS `nama_karyawan`,`vs`.`nilai_s` AS `nilai_s`,round((`vs`.`nilai_s` / (select sum(`vektor_s`.`nilai_s`) from `vektor_s`)),5) AS `nilai_v` from `vektor_s` `vs` order by round((`vs`.`nilai_s` / (select sum(`vektor_s`.`nilai_s`) from `vektor_s`)),5) desc;

-- Dumping structure for view bejo_perkasa.ranking_pegawai
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `ranking_pegawai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `ranking_pegawai` AS select `nv`.`id_pegawai` AS `id_pegawai`,`nv`.`nama_karyawan` AS `nama_karyawan`,`nv`.`nilai_s` AS `nilai_s`,`nv`.`nilai_v` AS `nilai_v`,rank() OVER (ORDER BY `nv`.`nilai_v` desc )  AS `ranking` from `nilai_v` `nv`;


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
