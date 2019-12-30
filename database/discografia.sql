-- MySQL dump 10.13  Distrib 5.7.16, for Win64 (x86_64)
--
-- Host: localhost    Database: pruebas_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autores`
--

DROP TABLE IF EXISTS `autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `estilo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autores`
--

LOCK TABLES `autores` WRITE;
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
INSERT INTO `autores` VALUES (1,'Bon Jovi','Rock'),(2,'Mike Oldfield','New Age'),(3,'Pepe Benavente','Extraño');
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discos`
--

DROP TABLE IF EXISTS `discos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anyo` int(11) DEFAULT NULL,
  `id_autores` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_autores` (`id_autores`),
  CONSTRAINT `discos_ibfk_1` FOREIGN KEY (`id_autores`) REFERENCES `autores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discos`
--

LOCK TABLES `discos` WRITE;
/*!40000 ALTER TABLE `discos` DISABLE KEYS */;
INSERT INTO `discos` VALUES (1,'Cositas mias',2019,3),(4,'Up in the Wind',2008,3),(5,'Halls of Montezuma',2008,2),(7,'Today\'s Special',1998,1),(8,'Jackass: The Movie',2004,2),(9,'Weird Woman',2007,3),(10,'Legend of Boggy Creek, The',2011,2),(11,'Dragon ball Z 04: Lord Slug',1994,1),(12,'Once Bitten',1989,2),(14,'Measuring the World (Die Vermessung der Welt)',2004,1),(15,'Trees Lounge',2001,3),(16,'Eve\'s Bayou',2003,1),(17,'Romantics Anonymous (Les émotifs anonymes)',2004,1),(18,'Make Believe',2005,2),(19,'Othello',2005,2),(20,'Paying the Price: Killing the Children of Iraq',1996,2),(21,'Three and Out (Deal Is a Deal, A)',1995,2),(22,'South of Heaven, West of Hell',2012,3),(23,'Bakeneko: A Vengeful Spirit (Kaibyô nori no numa) (Ghost-Cat Cursed Pond, The)',1997,1),(24,'My Name Is Bruce',1989,2),(25,'Angela\'s Ashes',1994,1),(26,'L.A. Without a Map',1998,1),(27,'Monster in a Box',2003,1),(28,'Grease',2007,3),(29,'Seven (a.k.a. Se7en)',1997,3),(30,'Sucker Punch',2000,2),(31,'Puppet Master 4',1996,2),(32,'Blink',1998,1),(33,'Pistol Opera (Pisutoru opera)',1998,1),(34,'Vanity Fair',1988,2),(35,'Which Way to the Front?',2010,2),(36,'Brigham City',1973,1),(37,'Faithless (Trolösa)',2001,2),(38,'Pauline & Paulette (Pauline en Paulette)',1984,3),(39,'Silvestre',2004,1),(40,'Two Cents Worth of Hope (Due soldi di speranza)',2010,2),(41,'Mercredi, folle journée!',2009,3),(42,'All About Lily Chou-Chou (Riri Shushu no subete)',1998,1),(43,'As Good as Dead',2006,2),(44,'Now!',1996,1),(45,'Kamikaze Girls (Shimotsuma monogatari)',1965,3),(46,'700 Sundays',2012,2),(47,'The Magnet',1992,1),(48,'Taxi 2',1996,2),(49,'Dance with the Devil (Perdita Durango)',1986,3),(50,'Big Bad Wolves',2002,3),(51,'Imitation of Life',2005,3),(52,'Wrestling (Bræðrabylta)',1999,1);
/*!40000 ALTER TABLE `discos` ENABLE KEYS */;
UNLOCK TABLES;


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-29  0:59:10
