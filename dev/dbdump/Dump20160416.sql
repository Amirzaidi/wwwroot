-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: csodb
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
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(64) NOT NULL,
  `contact_mail` varchar(64) NOT NULL,
  `contact_subject` varchar(128) NOT NULL,
  `contact_content` text NOT NULL,
  `contact_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'','test@test.nl','test','idk','127.0.0.1'),(2,'','test@test.nl','test','idk','127.0.0.1'),(3,'','test@test.nl','test','idk','127.0.0.1'),(4,'','test@test.nl','test','idk','127.0.0.1'),(5,'Amir Zaidi','azaidi@live.nl','I want to test something','Ayy\r\nLmao','192.168.2.11');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contest`
--

DROP TABLE IF EXISTS `contest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contest` (
  `contest_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contest_name` varchar(64) NOT NULL,
  `contest_desc` varchar(255) NOT NULL,
  `contest_start` int(10) unsigned DEFAULT '0',
  `contest_end` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`contest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest`
--

LOCK TABLES `contest` WRITE;
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
INSERT INTO `contest` VALUES (1,'Test1','Test1',1460835240,1460835240),(2,'Test1','Test1',1460835240,1460835270),(3,'Test2','Test2',1460835270,1460835300),(4,'Test3','Test3',1460835300,1460835330),(5,'Test3','Test3',1460835330,1460835360),(6,'Test2','Test2',1460835360,1460835390),(7,'Test1','Test1',1460835390,1460835420),(8,'Test3','Test3',1460835420,1460835540),(9,'Test2','Test2',1460835540,1460835600),(10,'Test1','Test1',1460835600,1460835660),(11,'Test2','Test2',1460835660,1460835720),(12,'Test3','Test3',1460835720,1460835840),(13,'Test1','Test1',1460835840,1460835960),(14,'Test3','Test3',1460835960,1460836080),(15,'Test2','Test2',1460836080,1460836200),(16,'Test1','Test1',1460836200,1460836320),(17,'Test3','Test3',1460836320,1460836440),(18,'Test2','Test2',1460836440,1460836560),(19,'Test2','Test2',1460836560,1460836680),(20,'Test1','Test1',1460836680,1460836800),(21,'Test3','Test3',1460836800,0);
/*!40000 ALTER TABLE `contest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `continent`
--

DROP TABLE IF EXISTS `continent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `continent` (
  `continent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(64) NOT NULL,
  `continent_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`continent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continent`
--

LOCK TABLES `continent` WRITE;
/*!40000 ALTER TABLE `continent` DISABLE KEYS */;
INSERT INTO `continent` VALUES (1,'Europe','Test1'),(2,'Africa','Test2'),(3,'North America','Test3'),(4,'South America','Test4'),(5,'Asia','Test5'),(6,'Oceania','Test6');
/*!40000 ALTER TABLE `continent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(64) NOT NULL,
  `country_desc` varchar(255) NOT NULL,
  `country_state` enum('active','queued','finale','eliminated') DEFAULT 'eliminated',
  `country_votes` int(11) DEFAULT '0',
  `continent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `continent` (`continent`),
  CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent`) REFERENCES `continent` (`continent_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'The Netherlands','The cheesiest country','finale',0,1),(2,'United Kingdom','Lets all drink tea!yes!','eliminated',0,1),(3,'United States','Trump4Prez','active',1,3),(4,'Brazil','Got some more of that coca cola?','active',0,4),(5,'South Africa','WK20??','active',0,2),(6,'Japan','Weeaboo!','active',0,5),(7,'China','Coal factories everywhere','eliminated',0,5),(8,'Australia','Too damn hot','eliminated',0,6),(9,'Germany','Heil Worstenbrot','queued',0,1);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cronjob`
--

DROP TABLE IF EXISTS `cronjob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cronjob` (
  `cronjob_name` varchar(64) NOT NULL,
  `cronjob_interval` int(10) unsigned NOT NULL,
  `cronjob_lastrun` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cronjob_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cronjob`
--

LOCK TABLES `cronjob` WRITE;
/*!40000 ALTER TABLE `cronjob` DISABLE KEYS */;
INSERT INTO `cronjob` VALUES ('clearvotes',5,1460836830),('pickrandom',30,1460836830);
/*!40000 ALTER TABLE `cronjob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medal`
--

DROP TABLE IF EXISTS `medal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medal` (
  `medal_type` enum('gold','silver','bronze') NOT NULL,
  `medal_votes` int(10) unsigned DEFAULT '0',
  `contest` int(10) unsigned NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`contest`,`country`),
  KEY `country` (`country`),
  CONSTRAINT `medal_ibfk_1` FOREIGN KEY (`contest`) REFERENCES `contest` (`contest_id`) ON DELETE CASCADE,
  CONSTRAINT `medal_ibfk_2` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medal`
--

LOCK TABLES `medal` WRITE;
/*!40000 ALTER TABLE `medal` DISABLE KEYS */;
INSERT INTO `medal` VALUES ('gold',0,1,1),('silver',0,1,2),('gold',0,8,2),('gold',0,9,1),('gold',1,10,1),('gold',0,11,1),('silver',1,12,1),('bronze',0,12,2),('gold',2,12,4),('gold',0,13,1),('silver',0,13,3),('bronze',0,13,7),('gold',0,14,1),('silver',0,14,2),('bronze',0,14,3),('silver',1,15,2),('bronze',1,15,3),('gold',4,15,5),('gold',0,16,2),('silver',0,16,3),('bronze',0,16,8),('gold',0,17,1),('silver',0,17,3),('bronze',0,17,5),('gold',0,18,1),('silver',0,18,2),('bronze',0,18,5),('gold',0,19,1),('silver',0,19,2),('bronze',0,19,4),('gold',0,20,1),('silver',0,20,2),('bronze',0,20,6);
/*!40000 ALTER TABLE `medal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slang`
--

DROP TABLE IF EXISTS `slang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slang` (
  `slang_name` varchar(64) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`slang_name`),
  KEY `country` (`country`),
  CONSTRAINT `slang_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slang`
--

LOCK TABLES `slang` WRITE;
/*!40000 ALTER TABLE `slang` DISABLE KEYS */;
/*!40000 ALTER TABLE `slang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vote` (
  `vote_ip` varchar(15) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vote_ip`),
  KEY `country` (`country`),
  CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vote`
--

LOCK TABLES `vote` WRITE;
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
INSERT INTO `vote` VALUES ('192.168.2.11',3);
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-16 22:01:04
