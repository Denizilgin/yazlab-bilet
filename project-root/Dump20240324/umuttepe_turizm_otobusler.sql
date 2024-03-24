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
-- Table structure for table `otobusler`
--

DROP TABLE IF EXISTS `otobusler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otobusler` (
  `OtobusID` int(11) NOT NULL AUTO_INCREMENT,
  `KalkisNoktasi` varchar(100) NOT NULL,
  `VarisNoktasi` varchar(100) NOT NULL,
  `KalkisSaati` datetime NOT NULL,
  `Guzergah` text NOT NULL,
  `KoltukNumarasi` int(11) NOT NULL,
  `BiletFiyati` decimal(10,2) NOT NULL,
  PRIMARY KEY (`OtobusID`),
  KEY `idx_otobus` (`KalkisNoktasi`,`VarisNoktasi`,`KalkisSaati`,`KoltukNumarasi`,`BiletFiyati`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otobusler`
--

LOCK TABLES `otobusler` WRITE;
/*!40000 ALTER TABLE `otobusler` DISABLE KEYS */;
INSERT INTO `otobusler` VALUES (1,'Ankara, Turkey','İstanbul, Turkey','0000-00-00 00:00:00','5',6,7.00),(2,'Ankara, Turkey','Kocaeli, Turkey','0000-00-00 00:00:00','',0,0.00),(3,'Ankara, Turkey','İzmir, Turkey','0000-00-00 00:00:00','',0,0.00),(4,'İstanbul, Turkey','Kocaeli, Turkey','0000-00-00 00:00:00','',0,0.00),(5,'İstanbul, Turkey','İzmir, Turkey','0000-00-00 00:00:00','',0,0.00),(6,'İstanbul, Turkey','Ankara, Turkey','0000-00-00 00:00:00','',0,0.00),(7,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(8,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(9,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(10,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(11,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(12,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(13,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(14,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(15,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(16,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(17,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(18,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(19,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(20,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(21,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(22,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(23,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(24,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(25,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(26,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(27,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(28,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(29,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(30,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(31,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(32,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(33,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(34,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(35,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(36,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(37,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(38,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(39,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(40,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(41,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(42,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(43,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(44,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(45,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(46,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(47,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(48,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(49,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(50,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(51,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(52,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(53,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(54,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(55,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(56,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(57,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(58,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(59,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(60,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(61,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(62,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(63,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(64,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(65,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(66,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(67,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(68,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(69,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(70,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(71,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(72,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(73,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(74,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(75,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(76,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(77,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(78,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(79,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(80,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(81,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(82,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(83,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(84,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(85,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(86,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(87,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(88,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(89,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(90,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(91,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(92,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(93,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(94,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(95,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(96,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(97,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(98,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(99,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(100,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(101,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(102,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(103,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(104,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(105,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(106,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00),(107,'$names[$i]','değer2','0000-00-00 00:00:00','',0,0.00);
/*!40000 ALTER TABLE `otobusler` ENABLE KEYS */;
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
