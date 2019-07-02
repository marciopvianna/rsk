-- MySQL dump 10.15  Distrib 10.0.20-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: marcio
-- ------------------------------------------------------
-- Server version	10.0.20-MariaDB-log

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
-- Table structure for table `atletas`
--

DROP TABLE IF EXISTS `atletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atletas` (
  `id_atletas` int(2) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_atletas`),
  UNIQUE KEY `id_atletas_UNIQUE` (`id_atletas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atletas`
--

LOCK TABLES `atletas` WRITE;
/*!40000 ALTER TABLE `atletas` DISABLE KEYS */;
INSERT INTO `atletas` VALUES (1,'Kbeca'),(2,'Caxa'),(3,'Guedera'),(4,'Burns'),(5,'Milho'),(6,'Nariga'),(7,'Vaqueiro'),(8,'Kombi'),(9,'Maca'),(10,'Davala'),(11,'Chines'),(12,'Guto'),(13,'Gigante'),(14,'Marcio'),(15,'Lingue'),(16,'Drup');
/*!40000 ALTER TABLE `atletas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juizes`
--

DROP TABLE IF EXISTS `juizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juizes` (
  `id_juiz` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `teste` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `data_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_juiz`),
  UNIQUE KEY `id_UNIQUE` (`id_juiz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juizes`
--

LOCK TABLES `juizes` WRITE;
/*!40000 ALTER TABLE `juizes` DISABLE KEYS */;
INSERT INTO `juizes` VALUES (1,'marcio','123',NULL,'2019-03-03 07:24:35','127.0.0.7'),(2,'teste','teste',NULL,'2019-03-15 20:02:28','127.0.0.7');
/*!40000 ALTER TABLE `juizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `juiz` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `hora` datetime DEFAULT CURRENT_TIMESTAMP,
  `round` int(11) DEFAULT NULL,
  `heat` int(11) DEFAULT NULL,
  `atleta` int(2) NOT NULL,
  `onda` int(11) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `chave` double AS ((round * 100) + heat) VIRTUAL,
  PRIMARY KEY (`id_nota`),
  UNIQUE KEY `id_nota_UNIQUE` (`id_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (55,'marcio','192.168.0.117','2019-04-04 10:32:19',1,1,1,1,7,101),(56,'marcio','192.168.0.117','2019-04-04 10:51:22',1,1,2,1,8,101),(60,'marcio','192.168.0.117','2019-04-04 11:23:21',1,1,3,1,3,101),(63,'marcio','192.168.0.117','2019-04-04 11:28:08',1,1,4,2,5,101),(66,'marcio','127.0.0.1','2019-04-04 15:25:00',1,1,1,2,5,101),(67,'marcio','192.168.0.117','2019-04-04 15:27:39',1,1,1,3,2,101),(68,'marcio','192.168.0.117','2019-04-04 15:32:54',1,1,2,2,9,101),(69,'marcio','192.168.0.116','2019-04-04 16:47:02',1,1,3,2,8,101),(70,'marcio','192.168.0.117','2019-04-04 16:54:57',1,1,3,3,2,101),(71,'marcio','192.168.0.116','2019-04-04 16:56:24',1,1,3,4,1.5,101),(72,'marcio','192.168.3.214','2019-04-05 00:16:36',1,1,3,5,9.25,101);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sorteio_round1`
--

DROP TABLE IF EXISTS `sorteio_round1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sorteio_round1` (
  `idsorteio_round1` int(11) NOT NULL,
  `atleta` int(2) NOT NULL,
  `resultado` int(2) NOT NULL,
  UNIQUE KEY `atleta_UNIQUE` (`atleta`),
  CONSTRAINT `atleta` FOREIGN KEY (`atleta`) REFERENCES `atletas` (`id_atletas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorteio_round1`
--

LOCK TABLES `sorteio_round1` WRITE;
/*!40000 ALTER TABLE `sorteio_round1` DISABLE KEYS */;
INSERT INTO `sorteio_round1` VALUES (8,1,8),(9,2,9),(15,3,15),(5,4,5),(11,5,11),(13,6,13),(12,7,12),(3,8,3),(14,9,14),(2,10,2),(6,11,6),(10,12,10),(7,13,7),(16,14,16),(4,15,4),(1,16,1);
/*!40000 ALTER TABLE `sorteio_round1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teste`
--

DROP TABLE IF EXISTS `teste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `juiz` varchar(30) DEFAULT NULL,
  `nota` varchar(5) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste`
--

LOCK TABLES `teste` WRITE;
/*!40000 ALTER TABLE `teste` DISABLE KEYS */;
INSERT INTO `teste` VALUES (1,'marcio','10','127.0.0.1'),(2,'teste','9','127.0.0.2'),(3,'marcio','8','127.0.0.1'),(4,'marcio','1','127.0.0.1'),(5,'marcio','1','127.0.0.1'),(6,'marcio','8','127.0.0.1'),(7,'marcio','0,25','127.0.0.1');
/*!40000 ALTER TABLE `teste` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-08 18:23:21
