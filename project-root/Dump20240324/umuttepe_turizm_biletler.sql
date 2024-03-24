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
-- Table structure for table `biletler`
--

DROP TABLE IF EXISTS `biletler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biletler` (
  `BiletID` int(11) NOT NULL AUTO_INCREMENT,
  `SeferID` int(10) NOT NULL,
  `KullaniciEposta` varchar(100) NOT NULL,
  `KullaniciAdi` varchar(100) NOT NULL,
  `KullaniciSoyadi` varchar(100) NOT NULL,
  `KalkisNoktasi` varchar(100) NOT NULL,
  `VarisNoktasi` varchar(100) NOT NULL,
  `KalkisSaati` varchar(100) NOT NULL,
  `KoltukNumarasi` int(11) NOT NULL,
  `BiletFiyati` decimal(10,2) NOT NULL,
  `SatinAlmaTarihiSaati` datetime NOT NULL,
  PRIMARY KEY (`BiletID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biletler`
--

LOCK TABLES `biletler` WRITE;
/*!40000 ALTER TABLE `biletler` DISABLE KEYS */;
INSERT INTO `biletler` VALUES (1,4,'dasdsad@gmai.com','asdas','sss','İstanbul, Turkey','İzmir, Turkey','00:00',0,100.00,'2024-03-24 09:21:33'),(2,4,'dasdsad@gmai.com','Deniz Ilgın','Koca','İstanbul, Turkey','İzmir, Turkey','00:00',0,185.00,'2024-03-24 09:22:31'),(3,4,'dasdsad@gmai.com','Deniz Ilgın','Koca','İstanbul, Turkey','İzmir, Turkey','00:00',17,185.00,'2024-03-24 09:23:00'),(4,4,'dasdsad@gmai.com','Kagan','wwW','İstanbul, Turkey','İzmir, Turkey','00:00',18,185.00,'2024-03-24 09:23:00'),(5,6,'dasdsad@gmai.com','Deniz Ilgın','Koca','İstanbul, Turkey','İzmir, Turkey','16:00',50,200.00,'2024-03-24 09:25:25'),(6,6,'dasdsad@gmai.com','Kagan','wwW','İstanbul, Turkey','İzmir, Turkey','16:00',51,200.00,'2024-03-24 09:25:25');
/*!40000 ALTER TABLE `biletler` ENABLE KEYS */;
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
