-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dbfarhan
DROP DATABASE IF EXISTS `dbfarhan`;
CREATE DATABASE IF NOT EXISTS `dbfarhan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbfarhan`;

-- Dumping structure for table dbfarhan.pengiriman_detail
DROP TABLE IF EXISTS `pengiriman_detail`;
CREATE TABLE IF NOT EXISTS `pengiriman_detail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `itemDesc` char(50) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Satuan` char(50) DEFAULT NULL,
  `GoodCategory` char(15) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table dbfarhan.pengiriman_header
DROP TABLE IF EXISTS `pengiriman_header`;
CREATE TABLE IF NOT EXISTS `pengiriman_header` (
  `pengirimanId` char(15) NOT NULL,
  `requestType` char(15) DEFAULT NULL,
  `portOrigin` char(100) DEFAULT NULL,
  `portDestination` char(100) DEFAULT NULL,
  `shipmenMode` char(15) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Dimension` char(30) DEFAULT NULL,
  `RequestDate` date DEFAULT NULL,
  `RequestBy` char(20) DEFAULT NULL,
  PRIMARY KEY (`pengirimanId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table dbfarhan.port_list
DROP TABLE IF EXISTS `port_list`;
CREATE TABLE IF NOT EXISTS `port_list` (
  `port_id` char(20) NOT NULL,
  `port_country` char(30) DEFAULT NULL,
  `port_name` char(30) DEFAULT NULL,
  PRIMARY KEY (`port_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table dbfarhan.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` char(15) NOT NULL,
  `Name` char(30) DEFAULT NULL,
  `level` char(50) DEFAULT NULL,
  `Username` char(50) DEFAULT NULL,
  `Password` char(100) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
