-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: usedphones
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

CREATE DATABASE IF NOT EXISTS usedPhones;
USE usedPhones;

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
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `nodes` int(11) DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `storageSize` int(11) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `adRelease` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` VALUES (12,'Aggelos','Samsung','Galaxy A14 Dual S','2020-02-06',6,16,'2',128,'Black',120.00,'2024-02-19','Perfect condition'),(14,'Aggelos123','Samsung','A34 5G ','2023-08-17',8,16,'2',64,'White',200.00,'2024-02-13','I never used it'),(15,'Aggelos1234','Apple','iPhone 15 Pro Max 5','2023-10-29',-1,-1,'-1',256,'Gray',900.00,'2024-02-17','Its a new phone I used it only twice!!'),(16,'Aggelos12345','Apple','iPhone 13 5g','2021-10-21',-1,-1,'-1',128,'white',400.00,'2024-02-15','It is perfect!!'),(17,'Aggelos123456','Samsung ','Galaxy A54 5G','2024-02-03',12,8,'2',64,'blue',200.00,'2024-02-16',''),(18,'Aggelos1234567','Samsung',' Galaxy S24 Ultra ','2024-02-01',12,32,'2',512,'Black',800.00,'2024-02-07','I have not used it yet'),(19,'Aggelos12345678','Xiaomi Redmi','Note 12 Pro ','2018-06-08',12,32,'2',256,'Black',150.00,'2024-02-09','The phone was never used!!'),(20,'Aggelos123456789','Apple','iPhone 14 5G','2023-10-05',12,32,'1',128,'Black',300.00,'2024-02-06','The phone has a broken screen'),(22,'Aggelos10','Xiaomi','Poco F5 5G','2022-03-24',12,32,'1',128,'Black',250.00,'2024-01-18',''),(23,'Aggelos11','Xiaomi','Redmi Note 12 Pro+','2022-07-09',12,8,'2',256,'Black',200.00,'2024-02-18','The phone is PERFECT!!'),(24,'Aggelos12','Samsung ','Galaxy S23 5G','2021-07-09',8,4,'2',64,'Black',30.00,'2024-02-15','The phone is old and not that good but it works'),(25,'Aggelos13','Xiaomi ','Poco C65','2024-02-11',8,16,'2',128,'Red',300.00,'2024-02-16','It has the best camera'),(26,'Aggelos14','Apple','iPhone 14 Plus 5G ','2023-06-21',8,32,'1',128,'Yellow',1000.00,'2024-02-09',''),(27,'Aggelos15','Oukitel','K9 Pro','2017-07-06',4,4,'2',32,'Black',80.00,'2024-02-16','This phone is old but I formated it and it works perfectly');
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-25 19:52:11
