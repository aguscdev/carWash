-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for carwash
CREATE DATABASE IF NOT EXISTS `carwash` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `carwash`;

-- Dumping structure for table carwash.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `jenis_kendaraan` varchar(255) NOT NULL DEFAULT '',
  `no_kendaraan` varchar(20) NOT NULL DEFAULT '',
  `harga` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table carwash.booking: ~1 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`id_booking`, `tgl`, `jenis_kendaraan`, `no_kendaraan`, `harga`, `status`) VALUES
	(2, '2022-07-09', 'Honda Jaz', 'B2345BM', 40000, 'Selesai');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Dumping structure for table carwash.konsumen
CREATE TABLE IF NOT EXISTS `konsumen` (
  `id_konsumen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(55) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `no_tlp` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table carwash.konsumen: ~6 rows (approximately)
/*!40000 ALTER TABLE `konsumen` DISABLE KEYS */;
INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `no_tlp`) VALUES
	(1, 'Agus Cahyadi', 'Tangerang', '081522770415'),
	(2, 'Rohman Hidayat', 'Tangerang', '12345123456'),
	(3, 'Eko AS', 'Tangerang', '12345678911'),
	(4, 'Feri', 'Tangerang', '0181577668899'),
	(5, 'Pujiyati', 'Tangerang', '085693231030'),
	(6, 'mentari', 'Tangerang', '085693231031');
/*!40000 ALTER TABLE `konsumen` ENABLE KEYS */;

-- Dumping structure for table carwash.paket
CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(55) NOT NULL DEFAULT '',
  `harga` int(13) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table carwash.paket: ~2 rows (approximately)
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
INSERT INTO `paket` (`id_paket`, `jenis`, `harga`) VALUES
	(1, 'Paket Exterior', 40000),
	(2, 'Paket Interior', 50000);
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;

-- Dumping structure for table carwash.pembayaran
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `total` int(13) NOT NULL DEFAULT '0',
  `bukti_pembayaran` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table carwash.pembayaran: ~1 rows (approximately)
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
INSERT INTO `pembayaran` (`id_pembayaran`, `tgl`, `total`, `bukti_pembayaran`) VALUES
	(1, '2022-07-07', 100000, 'img/21366838.jpg'),
	(2, '2022-07-09', 40000, 'img/Spanduk - Outing Fun Off Road Gn Pancar BOGOR.png');
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;

-- Dumping structure for table carwash.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL DEFAULT '',
  `email` varchar(55) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `level` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table carwash.pendaftaran: ~4 rows (approximately)
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` (`id_pendaftaran`, `username`, `email`, `password`, `level`) VALUES
	(1, 'agus', 'peri@gmail.com', '1010423d1498c0befb726b7127db52ee', 'ADMIN'),
	(2, 'rohman', 'rohman@gmail.com', '2397977a0e43fb1f5ee26fe993674b5b', 'KONSUMEN'),
	(3, 'eko', 'eko@gmail.com', 'e5ea9b6d71086dfef3a15f726abcc5bf', 'PEMILIK'),
	(4, 'Feri', 'feri@gmail.com', '4c850dbd4128e75d16f407a9188e2aab', 'OPERATOR');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
