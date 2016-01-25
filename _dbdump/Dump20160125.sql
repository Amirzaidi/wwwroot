CREATE DATABASE  IF NOT EXISTS `cso` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cso`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: cso
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `content` mediumtext,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip_UNIQUE` (`ip`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'azaidi@live.nl','xx','xx','127.0.0.1');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contests`
--

DROP TABLE IF EXISTS `contests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` enum('0','1') DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `start` int(11) DEFAULT '-1',
  `end` int(11) DEFAULT '-1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contests`
--

LOCK TABLES `contests` WRITE;
/*!40000 ALTER TABLE `contests` DISABLE KEYS */;
INSERT INTO `contests` VALUES (1,'1','Food','Delicious Food',1453750927,-1),(2,'1','Food','Delicious Food',1453753308,-1),(3,'1','Food','Delicious Food',1453753334,-1),(4,'1','Food','Delicious Food',1453753511,-1),(5,'1','Food','Delicious Food',1453753511,-1),(6,'1','Food','Delicious Food',1453753511,-1),(7,'1','Food','Delicious Food',1453753511,-1),(8,'1','Food','Delicious Food',1453753525,1453753638),(9,'1','Food','Delicious Food',1453753638,1453753638),(10,'1','Food','Delicious Food',1453753638,1453753638),(11,'1','Food','Delicious Food',1453753638,1453753638),(12,'1','Food','Delicious Food',1453753638,1453753638),(13,'1','Food','Delicious Food',1453753638,1453753638),(14,'1','Food','Delicious Food',1453753638,1453753638),(15,'1','Food','Delicious Food',1453753638,1453753652),(16,'1','Food','Delicious Food',1453753652,1453753670),(17,'1','Food','Delicious Food',1453753670,1453753735),(18,'1','Food','Delicious Food',1453753735,1453753920),(19,'1','Food','Delicious Food',1453753735,1453753735),(20,'1','Food','Delicious Food',1453753735,1453753735),(21,'1','Food','Delicious Food',1453753735,1453753735),(22,'1','Food','Delicious Food',1453753735,-1),(23,'1','Food','Delicious Food',1453753920,1453753920),(24,'1','Food','Delicious Food',1453753920,1453753920),(25,'1','Food','Delicious Food',1453753920,1453753920),(26,'1','Food','Delicious Food',1453753920,1453753920),(27,'1','Food','Delicious Food',1453753920,1453753920),(28,'1','Food','Delicious Food',1453753920,1453753920),(29,'1','Food','Delicious Food',1453753920,1453753920),(30,'1','Food','Delicious Food',1453753920,1453753952),(31,'1','Food','Delicious Food',1453753952,1453754063),(32,'1','Food','Delicious Food',1453754063,1453754080),(33,'1','Food','Delicious Food',1453754080,1453754491),(34,'1','Food','Delicious Food',1453754491,1453754491),(35,'1','Food','Delicious Food',1453754491,1453754491),(36,'1','Food','Delicious Food',1453754491,1453754520),(37,'1','Food','Delicious Food',1453754520,1453754603),(38,'1','Food','Delicious Food',1453754603,1453754929),(39,'1','Food','Delicious Food',1453754929,1453754930),(40,'1','Food','Delicious Food',1453754930,1453754930),(41,'1','Food','Delicious Food',1453754930,1453754973),(42,'1','Food','Delicious Food',1453754973,1453755073),(43,'1','Food','Delicious Food',1453755073,1453755149),(44,'1','Food','Delicious Food',1453755149,-1);
/*!40000 ALTER TABLE `contests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `continents`
--

DROP TABLE IF EXISTS `continents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `continents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continents`
--

LOCK TABLES `continents` WRITE;
/*!40000 ALTER TABLE `continents` DISABLE KEYS */;
INSERT INTO `continents` VALUES (1,'Europe',NULL),(2,'North America',NULL),(3,'South America',NULL),(4,'Africa',NULL),(5,'Asia',NULL),(6,'Oceania',NULL);
/*!40000 ALTER TABLE `continents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `continent` int(11) NOT NULL,
  `desc` mediumtext,
  `votes` int(11) DEFAULT '0',
  `state` enum('queue','active','won','lost') DEFAULT 'queue',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'The Netherlands',1,'The cheesiest country',0,'queue'),(2,'United Kingdom',1,'Lets all drink tea!yes!',0,'active'),(3,'United States',2,'Trump4Prez',0,'queue'),(4,'Brazil',3,'Got some more of that coca cola?',0,'active'),(5,'South Africa',4,'WK20??',0,'queue'),(6,'Japan',5,'Weeaboo!',0,'active'),(7,'China',5,'Coal factories everywhere',0,'active'),(8,'Australia',6,'Too damn hot',0,'active');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cronjobs`
--

DROP TABLE IF EXISTS `cronjobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cronjobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `interval` int(11) DEFAULT NULL,
  `lastrun` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cronjobs`
--

LOCK TABLES `cronjobs` WRITE;
/*!40000 ALTER TABLE `cronjobs` DISABLE KEYS */;
INSERT INTO `cronjobs` VALUES (1,'clearvotes',5,1453755145),(2,'pickrandom',30,1453755130);
/*!40000 ALTER TABLE `cronjobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipvotes`
--

DROP TABLE IF EXISTS `ipvotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipvotes` (
  `ip` varchar(45) NOT NULL,
  `country` int(11) NOT NULL,
  UNIQUE KEY `ip_UNIQUE` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipvotes`
--

LOCK TABLES `ipvotes` WRITE;
/*!40000 ALTER TABLE `ipvotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ipvotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medals`
--

DROP TABLE IF EXISTS `medals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contest` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `rank` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medals`
--

LOCK TABLES `medals` WRITE;
/*!40000 ALTER TABLE `medals` DISABLE KEYS */;
INSERT INTO `medals` VALUES (1,33,1,0,'1'),(2,33,3,0,'2'),(3,34,1,0,'1'),(4,34,2,0,'2'),(5,35,1,0,'1'),(6,35,2,0,'2'),(7,36,1,0,'1'),(8,36,3,0,'2'),(9,37,1,3,'1'),(10,37,8,2,'2'),(11,38,6,2,'1'),(12,38,1,0,'2'),(13,39,1,0,'1'),(14,39,3,0,'2'),(15,40,1,0,'1'),(16,40,4,0,'2'),(17,41,1,0,'1'),(18,41,4,0,'2'),(19,42,2,0,'1'),(20,42,6,0,'2'),(21,43,2,1,'1'),(22,43,1,0,'2');
/*!40000 ALTER TABLE `medals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slang`
--

DROP TABLE IF EXISTS `slang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slang` (
  `text` varchar(45) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slang`
--

LOCK TABLES `slang` WRITE;
/*!40000 ALTER TABLE `slang` DISABLE KEYS */;
INSERT INTO `slang` VALUES ('nl',1),('uk',2),('netherlands',1),('england',2);
/*!40000 ALTER TABLE `slang` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-25 21:53:39
