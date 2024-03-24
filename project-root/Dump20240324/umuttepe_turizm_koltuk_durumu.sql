CREATE DATABASE  IF NOT EXISTS `umuttepe_turizm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `umuttepe_turizm`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: umuttepe_turizm
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `koltuk_durumu`
--

DROP TABLE IF EXISTS `koltuk_durumu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `koltuk_durumu` (
  `KoltukID` int(11) NOT NULL AUTO_INCREMENT,
  `SeferID` int(11) DEFAULT NULL,
  `KoltukNumarasi` int(11) NOT NULL,
  `DoluMu` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`KoltukID`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koltuk_durumu`
--

LOCK TABLES `koltuk_durumu` WRITE;
/*!40000 ALTER TABLE `koltuk_durumu` DISABLE KEYS */;
INSERT INTO `koltuk_durumu` VALUES (1,3,2,1),(2,2,5,1),(3,3,4,1),(27,3,27,1),(28,5,0,1),(29,5,5,1),(30,8,0,1),(31,5,6,1),(32,5,10,1),(33,5,13,1),(34,5,0,1),(35,5,0,1),(36,5,0,1),(37,5,0,1),(38,5,0,1),(39,5,0,1),(40,5,0,1),(41,5,0,1),(42,5,0,1),(43,5,0,1),(44,5,0,1),(45,5,0,1),(46,5,0,1),(47,5,0,1),(48,5,0,1),(49,5,0,1),(50,5,0,1),(51,5,0,1),(52,5,0,1),(53,5,0,1),(54,5,0,1),(55,5,0,1),(56,5,0,1),(57,5,0,1),(58,5,0,1),(59,5,0,1),(60,5,0,1),(61,5,0,1),(62,5,0,1),(63,5,0,1),(64,5,0,1),(65,5,0,1),(66,5,0,1),(67,5,0,1),(68,5,0,1),(69,5,0,1),(70,5,0,1),(71,5,0,1),(72,5,0,1),(73,5,0,1),(74,6,0,1),(75,6,0,1),(76,6,0,1),(77,6,6,1),(78,6,11,1),(79,6,6,1),(80,6,11,1),(81,6,6,1),(82,6,11,1),(83,6,6,1),(84,6,11,1),(85,6,6,1),(86,6,11,1),(87,6,6,1),(88,6,11,1),(89,6,6,1),(90,6,11,1),(91,6,6,1),(92,6,11,1),(93,6,6,1),(94,6,11,1),(95,6,6,1),(96,6,11,1),(97,6,6,1),(98,6,11,1),(99,6,6,1),(100,6,11,1),(101,7,9,1),(102,7,10,1),(103,7,26,1),(104,7,30,1),(105,7,26,1),(106,7,30,1),(107,1,0,1),(108,1,0,1),(109,1,0,1),(110,1,0,1),(111,1,0,1),(112,1,0,1),(113,1,0,1),(114,4,0,1),(115,4,0,1),(116,4,0,1),(117,4,0,1),(118,4,17,1),(119,4,18,1),(120,4,17,1),(121,4,18,1),(122,4,17,1),(123,4,18,1),(124,3,17,1),(125,3,18,1),(126,3,17,1),(127,3,18,1),(128,4,17,1),(129,4,18,1),(130,6,50,1),(131,6,51,1),(132,6,50,1),(133,6,51,1);
/*!40000 ALTER TABLE `koltuk_durumu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-24 13:17:49
