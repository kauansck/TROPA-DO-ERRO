-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: time_coffee
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `coffees`
--

DROP TABLE IF EXISTS `coffees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coffees` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `size` varchar(13) NOT NULL,
  `complements` varchar(14) NOT NULL,
  `price` decimal(5,2) unsigned NOT NULL,
  `quantity` tinyint unsigned NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffees`
--

LOCK TABLES `coffees` WRITE;
/*!40000 ALTER TABLE `coffees` DISABLE KEYS */;
INSERT INTO `coffees` VALUES (3,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(4,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(6,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(7,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(9,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(10,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(11,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(12,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(13,'testando de caramelo','Médio 300ml','açúcar-creme',13.00,3,'Testando interface'),(15,'Cafézin expresso','Pequeno 200ml','açucar-mascavo',7.00,1,'Preferencia ao morno.'),(16,'Cafézin expresso P','Pequeno 200ml','açúcar',5.00,2,'th'),(17,'Café gelado','Médio 300ml','caramelo',9.00,1,'Caprichado no caramelo.');
/*!40000 ALTER TABLE `coffees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mariane','mariane@gmail.com','$2y$10$RHo2g5UmT6wru1ePc3XEyezkVjd1DS.6rMc0lRB/K63/zo6dzjY22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-10 21:00:23
