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
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest`
--

LOCK TABLES `contest` WRITE;
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
INSERT INTO `contest` VALUES (1,'Test1','Test1',1460835240,1460835240),(2,'Test1','Test1',1460835240,1460835270),(3,'Test2','Test2',1460835270,1460835300),(4,'Test3','Test3',1460835300,1460835330),(5,'Test3','Test3',1460835330,1460835360),(6,'Test2','Test2',1460835360,1460835390),(7,'Test1','Test1',1460835390,1460835420),(8,'Test3','Test3',1460835420,1460835540),(9,'Test2','Test2',1460835540,1460835600),(10,'Test1','Test1',1460835600,1460835660),(11,'Test2','Test2',1460835660,1460835720),(12,'Test3','Test3',1460835720,1460835840),(13,'Test1','Test1',1460835840,1460835960),(14,'Test3','Test3',1460835960,1460836080),(15,'Test2','Test2',1460836080,1460836200),(16,'Test1','Test1',1460836200,1460836320),(17,'Test3','Test3',1460836320,1460836440),(18,'Test2','Test2',1460836440,1460836560),(19,'Test2','Test2',1460836560,1460836680),(20,'Test1','Test1',1460836680,1460836800),(21,'Test3','Test3',1460836800,1460836920),(22,'Test1','Test1',1460836920,1460837040),(23,'Test2','Test2',1460837040,1460837160),(24,'Test3','Test3',1460837160,1460837280),(25,'Test3','Test3',1460837280,1460837400),(26,'Test2','Test2',1460837400,1460837640),(27,'Test1','Test1',1460837640,1460837760),(28,'Test3','Test3',1460837760,1460837880),(29,'Test2','Test2',1460837880,1460838000),(30,'Test1','Test1',1460838000,1460899080),(31,'Test2','Test2',1460899080,1460899200),(32,'Test1','Test1',1460899200,1460899320),(33,'Test3','Test3',1460899320,1460899440),(34,'Test2','Test2',1460899440,1460900100),(35,'Test1','Test1',1460900100,1460900220),(36,'Test3','Test3',1460900220,1460900340),(37,'Test2','Test2',1460900340,1460900460),(38,'Test3','Test3',1460900460,1460901660),(39,'Test1','Test1',1460901660,1460901780),(40,'Test1','Test1',1460901780,1460901900),(41,'Test2','Test2',1460901900,1460902020),(42,'Test3','Test3',1460902020,1460902140),(43,'Test3','Test3',1460902140,1460902260),(44,'Test1','Test1',1460902260,1460902380),(45,'Test2','Test2',1460902380,1460902500),(46,'Test2','Test2',1460902500,1460902620),(47,'Test3','Test3',1460902620,1460902740),(48,'Test1','Test1',1460902740,1460903430),(49,'Test3','Test3',1460903430,1460903550),(50,'Test1','Test1',1460903550,1460903670),(51,'Test2','Test2',1460903670,1460903790),(52,'Test3','Test3',1460903790,1460903910),(53,'Test1','Test1',1460903910,1460904030),(54,'Test2','Test2',1460904030,1460904150),(55,'Test1','Test1',1460904150,1460904270),(56,'Test3','Test3',1460904270,1460904390),(57,'Test2','Test2',1460904390,1460904510),(58,'Test1','Test1',1460904510,1460904630),(59,'Test3','Test3',1460904630,1460997990),(60,'Test2','Test2',1460997990,1460998110),(61,'Test2','Test2',1460998110,1460998230),(62,'Test3','Test3',1460998230,1460998350),(63,'Test1','Test1',1460998350,1460999010),(64,'Test3','Test3',1460999010,1460999130),(65,'Test1','Test1',1460999130,1460999250),(66,'Test2','Test2',1460999250,1460999370),(67,'Test3','Test3',1460999370,1460999490),(68,'Test1','Test1',1460999490,1460999610),(69,'Test2','Test2',1460999610,1460999730),(70,'Test2','Test2',1460999730,1460999850),(71,'Test1','Test1',1460999850,1460999970),(72,'Test3','Test3',1460999970,1461000090),(73,'Test2','Test2',1461000090,1461000210),(74,'Test3','Test3',1461000210,1461000330),(75,'Test1','Test1',1461000330,1461000450),(76,'Test3','Test3',1461000450,1461000570),(77,'Test1','Test1',1461000570,1461000690),(78,'Test2','Test2',1461000690,1461000810),(79,'Test1','Test1',1461000810,1461000930),(80,'Test3','Test3',1461000930,1461001050),(81,'Test2','Test2',1461001050,1461001410),(82,'Test3','Test3',1461001410,1461001530),(83,'Test1','Test1',1461001530,1461001650),(84,'Test2','Test2',1461001650,1461001770),(85,'Test3','Test3',1461001770,1461001890),(86,'Test1','Test1',1461001890,1461002010),(87,'Test2','Test2',1461002010,1461002130),(88,'Test3','Test3',1461002130,1461002250),(89,'Test2','Test2',1461002250,1461002370),(90,'Test1','Test1',1461002370,1461002490),(91,'Test3','Test3',1461002490,0);
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
INSERT INTO `country` VALUES (1,'The Netherlands','The cheesiest country','active',0,1),(2,'United Kingdom','Lets all drink tea!yes!','finale',0,1),(3,'United States','Trump4Prez','eliminated',0,3),(4,'Brazil','Got some more of that coca cola?','finale',0,4),(5,'South Africa','WK20??','eliminated',0,2),(6,'Japan','Weeaboo!','eliminated',0,5),(7,'China','Coal factories everywhere','eliminated',0,5),(8,'Australia','Too damn hot','eliminated',0,6),(9,'Germany','Heil Worstenbrot','eliminated',0,1);
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
INSERT INTO `cronjob` VALUES ('clearvotes',5,1461002570),('pickrandom',30,1461002550);
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
INSERT INTO `medal` VALUES ('gold',0,1,1),('silver',0,1,2),('gold',0,8,2),('gold',0,9,1),('gold',1,10,1),('gold',0,11,1),('silver',1,12,1),('bronze',0,12,2),('gold',2,12,4),('gold',0,13,1),('silver',0,13,3),('bronze',0,13,7),('gold',0,14,1),('silver',0,14,2),('bronze',0,14,3),('silver',1,15,2),('bronze',1,15,3),('gold',4,15,5),('gold',0,16,2),('silver',0,16,3),('bronze',0,16,8),('gold',0,17,1),('silver',0,17,3),('bronze',0,17,5),('gold',0,18,1),('silver',0,18,2),('bronze',0,18,5),('gold',0,19,1),('silver',0,19,2),('bronze',0,19,4),('gold',0,20,1),('silver',0,20,2),('bronze',0,20,6),('gold',0,21,1),('silver',0,21,3),('bronze',0,21,9),('gold',0,22,1),('silver',0,22,2),('bronze',0,22,9),('gold',0,23,1),('silver',0,23,4),('bronze',0,23,8),('gold',0,24,1),('silver',0,24,3),('bronze',0,24,6),('gold',0,25,1),('silver',0,25,3),('bronze',0,25,6),('gold',0,26,1),('silver',0,26,2),('bronze',0,26,4),('gold',0,27,1),('silver',0,27,2),('bronze',0,27,9),('gold',0,28,1),('silver',0,28,3),('bronze',0,28,5),('gold',0,29,1),('silver',0,29,3),('bronze',0,29,5),('gold',0,30,1),('silver',0,30,2),('bronze',0,30,6),('gold',0,31,1),('silver',0,31,2),('bronze',0,31,5),('gold',0,32,1),('silver',0,32,2),('bronze',0,32,5),('gold',0,33,1),('silver',0,33,3),('bronze',0,33,5),('gold',0,34,1),('silver',0,34,2),('bronze',0,34,5),('gold',0,35,1),('silver',0,35,3),('bronze',0,35,4),('gold',0,36,1),('silver',0,36,4),('bronze',0,36,6),('gold',0,37,1),('silver',0,37,3),('bronze',0,37,4),('gold',0,38,1),('silver',0,38,3),('bronze',0,38,6),('gold',0,39,1),('silver',0,39,3),('bronze',0,39,6),('gold',0,40,1),('silver',0,40,3),('bronze',0,40,6),('gold',0,41,1),('silver',0,41,2),('bronze',0,41,4),('gold',0,42,1),('silver',0,42,2),('bronze',0,42,9),('gold',0,43,1),('silver',0,43,2),('bronze',0,43,5),('gold',0,44,1),('silver',0,44,2),('bronze',0,44,3),('gold',0,45,1),('silver',0,45,3),('bronze',0,45,4),('gold',0,46,1),('silver',0,46,2),('bronze',0,46,7),('gold',0,47,1),('silver',0,47,3),('bronze',0,47,4),('gold',0,48,1),('silver',0,48,2),('bronze',0,48,6),('gold',0,49,1),('silver',0,49,2),('bronze',0,49,3),('gold',0,50,1),('silver',0,50,3),('bronze',0,50,4),('gold',0,51,1),('silver',0,51,4),('bronze',0,51,6),('gold',0,52,1),('silver',0,52,3),('bronze',0,52,7),('gold',0,53,1),('silver',0,53,3),('bronze',0,53,5),('gold',0,54,1),('silver',0,54,2),('bronze',0,54,9),('gold',0,55,1),('silver',0,55,2),('bronze',0,55,8),('gold',0,56,1),('silver',0,56,2),('bronze',0,56,6),('gold',0,57,1),('silver',0,57,2),('bronze',0,57,3),('gold',0,58,1),('silver',0,58,3),('bronze',0,58,8),('gold',0,59,1),('silver',0,59,2),('bronze',0,59,7),('gold',0,60,1),('silver',0,60,2),('bronze',0,60,3),('gold',0,61,1),('silver',0,61,2),('bronze',0,61,7),('gold',0,62,1),('silver',0,62,4),('bronze',0,62,6),('gold',0,63,1),('silver',0,63,2),('bronze',0,63,3),('gold',0,64,1),('silver',0,64,2),('bronze',0,64,3),('gold',0,65,1),('silver',0,65,2),('bronze',0,65,3),('gold',0,66,1),('silver',0,66,2),('bronze',0,66,6),('gold',0,67,1),('silver',0,67,2),('bronze',0,67,5),('gold',0,68,1),('silver',0,68,3),('bronze',0,68,5),('gold',0,69,1),('silver',0,69,2),('bronze',0,69,7),('gold',0,70,1),('silver',0,70,3),('bronze',0,70,6),('gold',0,71,1),('silver',0,71,2),('bronze',0,71,9),('gold',0,72,1),('silver',0,72,3),('bronze',0,72,9),('gold',0,73,1),('silver',0,73,2),('bronze',0,73,4),('gold',0,74,1),('silver',0,74,2),('bronze',0,74,3),('gold',0,75,1),('silver',0,75,2),('bronze',0,75,4),('gold',0,76,1),('silver',0,76,2),('bronze',0,76,6),('gold',0,77,1),('silver',0,77,2),('bronze',0,77,5),('gold',0,78,1),('silver',0,78,2),('bronze',0,78,6),('gold',0,79,1),('silver',0,79,2),('bronze',0,79,4),('gold',0,80,1),('silver',0,80,3),('bronze',0,80,7),('gold',0,81,1),('silver',0,81,5),('bronze',0,81,7),('gold',0,82,1),('silver',0,82,2),('bronze',0,82,9),('gold',0,83,1),('silver',0,83,3),('bronze',0,83,5),('gold',0,84,1),('silver',0,84,2),('bronze',0,84,4),('gold',0,85,1),('silver',0,85,2),('bronze',0,85,9),('gold',0,86,1),('silver',0,86,5),('bronze',0,86,6),('gold',0,87,1),('silver',0,87,3),('bronze',0,87,4),('gold',0,88,1),('silver',0,88,2),('bronze',0,88,5),('gold',0,89,1),('silver',0,89,2),('bronze',0,89,5),('gold',0,90,1),('silver',0,90,2),('bronze',0,90,3);
/*!40000 ALTER TABLE `medal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reason`
--

DROP TABLE IF EXISTS `reason`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reason` (
  `reason_name` varchar(64) NOT NULL,
  `reason_desc` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reason_name`),
  KEY `country` (`country`),
  CONSTRAINT `reason_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reason`
--

LOCK TABLES `reason` WRITE;
/*!40000 ALTER TABLE `reason` DISABLE KEYS */;
INSERT INTO `reason` VALUES ('cheese','This country has cheese hehe',1),('freedom','FREEDOM!',3),('tea','Tea is delicious',2);
/*!40000 ALTER TABLE `reason` ENABLE KEYS */;
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
INSERT INTO `slang` VALUES ('ned',1),('nl',1),('uk',2),('us',3),('sa',5),('jap',6),('jp',6),('aus',8),('de',9);
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

-- Dump completed on 2016-04-18 20:03:49
