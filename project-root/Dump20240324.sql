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

--
-- Table structure for table `kullanicibilgileri`
--

DROP TABLE IF EXISTS `kullanicibilgileri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanicibilgileri` (
  `KullanicibilgiID` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(50) NOT NULL,
  `Soyad` varchar(50) NOT NULL,
  `Eposta` varchar(100) NOT NULL,
  `TelefonNo` varchar(20) NOT NULL,
  `TCKimlikNo` varchar(11) NOT NULL,
  `Cinsiyet` enum('Erkek','Kadın') NOT NULL,
  `DogumTarihi` date NOT NULL,
  `Bakiye` decimal(10,2) NOT NULL,
  PRIMARY KEY (`KullanicibilgiID`),
  UNIQUE KEY `Eposta` (`Eposta`),
  UNIQUE KEY `TCKimlikNo` (`TCKimlikNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanicibilgileri`
--

LOCK TABLES `kullanicibilgileri` WRITE;
/*!40000 ALTER TABLE `kullanicibilgileri` DISABLE KEYS */;
/*!40000 ALTER TABLE `kullanicibilgileri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanicikayit`
--

DROP TABLE IF EXISTS `kullanicikayit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanicikayit` (
  `KullaniciID` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(50) NOT NULL,
  `Soyad` varchar(50) NOT NULL,
  `Eposta` varchar(100) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `TelefonNo` varchar(20) NOT NULL,
  `TCKimlikNo` varchar(11) NOT NULL,
  `Cinsiyet` enum('Erkek','Kadın') NOT NULL,
  `DogumTarihi` date NOT NULL,
  PRIMARY KEY (`KullaniciID`),
  UNIQUE KEY `Eposta` (`Eposta`),
  UNIQUE KEY `TCKimlikNo` (`TCKimlikNo`),
  KEY `idx_kullanici` (`Ad`,`Soyad`),
  KEY `idx_kullanicibilgi` (`Ad`,`Soyad`,`Eposta`,`TelefonNo`,`TCKimlikNo`,`Cinsiyet`,`DogumTarihi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanicikayit`
--

LOCK TABLES `kullanicikayit` WRITE;
/*!40000 ALTER TABLE `kullanicikayit` DISABLE KEYS */;
/*!40000 ALTER TABLE `kullanicikayit` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Dumping events for database 'umuttepe_turizm'
--

--
-- Dumping routines for database 'umuttepe_turizm'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-24 13:18:24
