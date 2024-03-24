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
-- Table structure for table `seferler`
--

DROP TABLE IF EXISTS `seferler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seferler` (
  `SeferID` int(11) NOT NULL AUTO_INCREMENT,
  `KalkisNoktasi` varchar(100) NOT NULL,
  `VarisNoktasi` varchar(100) NOT NULL,
  `KalkisSaati` varchar(10) NOT NULL,
  `Tarih` varchar(100) NOT NULL,
  `KoltukSayisi` int(11) NOT NULL,
  `BiletFiyati` decimal(10,2) NOT NULL,
  `Plaka` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SeferID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seferler`
--

LOCK TABLES `seferler` WRITE;
/*!40000 ALTER TABLE `seferler` DISABLE KEYS */;
INSERT INTO `seferler` VALUES (1,'İstanbul, Turkey','Ankara, Turkey','00:00','2024-12-16',41,0.00,'41BSM3406'),(2,'İstanbul, Turkey','Ankara, Turkey','08:00','2024-12-16',50,0.00,'34DK442'),(3,'İstanbul, Turkey','Ankara, Turkey','16:00','2024-12-16',50,0.00,'41SB34'),(4,'İstanbul, Turkey','İzmir, Turkey','00:00','2024-12-16',33,0.00,'41BSM3406'),(5,'İstanbul, Turkey','İzmir, Turkey','08:00','2024-12-16',23,0.00,'41SB34'),(6,'İstanbul, Turkey','İzmir, Turkey','16:00','2024-12-16',19,0.00,'34DK442'),(7,'İstanbul, Turkey','Kocaeli, Turkey','00:00','2024-12-16',45,0.00,'41SB34'),(8,'İstanbul, Turkey','Kocaeli, Turkey','08:00','2024-12-16',50,0.00,'41BSM3406'),(9,'İstanbul, Turkey','Kocaeli, Turkey','16:00','2024-12-16',50,0.00,'34DK442'),(10,'Kocaeli, Turkey','İzmir, Turkey','00:00','2024-12-16',50,0.00,'41BSM3406'),(11,'Kocaeli, Turkey','İzmir, Turkey','08:00','2024-12-16',50,0.00,'41SB34'),(12,'Kocaeli, Turkey','İzmir, Turkey','16:00','2024-12-16',50,0.00,'34DK442'),(13,'Kocaeli, Turkey','İstanbul, Turkey','00:00','2024-12-16',50,0.00,''),(14,'Kocaeli, Turkey','İstanbul, Turkey','08:00','2024-12-16',50,0.00,NULL),(15,'Kocaeli, Turkey','İstanbul, Turkey','16:00','2024-12-16',50,0.00,NULL),(16,'Kocaeli, Turkey','Ankara, Turkey','00:00','2024-12-16',50,0.00,NULL),(17,'Kocaeli, Turkey','Ankara, Turkey','08:00','2024-12-16',50,0.00,NULL),(18,'Kocaeli, Turkey','Ankara, Turkey','16:00','2024-12-16',50,0.00,NULL),(19,'Ankara, Turkey','Kocaeli, Turkey','00:00','2024-12-16',50,0.00,NULL),(20,'Ankara, Turkey','Kocaeli, Turkey','08:00','2024-12-16',50,0.00,NULL),(21,'Ankara, Turkey','Kocaeli, Turkey','16:00','2024-12-16',50,0.00,NULL),(22,'Ankara, Turkey','İzmir, Turkey','00:00','2024-12-16',50,0.00,NULL),(23,'Ankara, Turkey','İzmir, Turkey','08:00','2024-12-16',50,0.00,NULL),(24,'Ankara, Turkey','İzmir, Turkey','16:00','2024-12-16',50,0.00,NULL),(25,'Ankara, Turkey','İstanbul, Turkey','00:00','2024-12-16',50,0.00,NULL),(26,'Ankara, Turkey','İstanbul, Turkey','08:00','2024-12-16',50,0.00,NULL),(27,'Ankara, Turkey','İstanbul, Turkey','16:00','2024-12-16',50,0.00,NULL),(28,'İzmir, Turkey','Ankara, Turkey','00:00','2024-12-16',50,0.00,NULL),(29,'İzmir, Turkey','Ankara, Turkey','08:00','2024-12-16',50,0.00,NULL),(30,'İzmir, Turkey','Ankara, Turkey','16:00','2024-12-16',50,0.00,NULL),(31,'İzmir, Turkey','Kocaeli, Turkey','00:00','2024-12-16',50,0.00,NULL),(32,'İzmir, Turkey','Kocaeli, Turkey','08:00','2024-12-16',50,0.00,NULL),(33,'İzmir, Turkey','Kocaeli, Turkey','16:00','2024-12-16',50,0.00,NULL),(34,'İzmir, Turkey','İstanbul, Turkey','00:00','2024-12-16',50,0.00,NULL),(35,'İzmir, Turkey','İstanbul, Turkey','08:00','2024-12-16',50,0.00,NULL),(36,'İzmir, Turkey','İstanbul, Turkey','16:00','2024-12-16',50,0.00,NULL),(37,'','','','',0,0.00,NULL),(38,'İstanbul, Turkey','Ankara, Turkey','00:00','2024-12-16',41,0.00,'41BSM3406'),(39,'İstanbul, Turkey','Ankara, Turkey','16:00','2024-04-01',60,0.00,'34DK442'),(40,'İstanbul, Turkey','İzmir, Turkey','00:00','2024-04-01',60,0.00,'41BSM3406'),(41,'İstanbul, Turkey','İzmir, Turkey','08:00','2024-04-01',60,0.00,'41SB34'),(42,'İstanbul, Turkey','İzmir, Turkey','16:00','2024-04-01',60,0.00,'34DK442'),(43,'İstanbul, Turkey','Kocaeli, Turkey','00:00','2024-04-01',60,0.00,'41BSM3406'),(44,'İstanbul, Turkey','Kocaeli, Turkey','08:00','2024-04-01',60,0.00,'41SB34'),(45,'İstanbul, Turkey','Kocaeli, Turkey','16:00','2024-04-01',60,0.00,'34DK442');
/*!40000 ALTER TABLE `seferler` ENABLE KEYS */;
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
