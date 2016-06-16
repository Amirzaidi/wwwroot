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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (5,'Amir Zaidi','azaidi@live.nl','I want to test something','Ayy\r\nLmao','192.168.2.11');
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
) ENGINE=InnoDB AUTO_INCREMENT=416 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contest`
--

LOCK TABLES `contest` WRITE;
/*!40000 ALTER TABLE `contest` DISABLE KEYS */;
INSERT INTO `contest` VALUES (1,'Test1','Test1',1460835240,1460835240),(2,'Test1','Test1',1460835240,1460835270),(3,'Test2','Test2',1460835270,1460835300),(4,'Test3','Test3',1460835300,1460835330),(5,'Test3','Test3',1460835330,1460835360),(6,'Test2','Test2',1460835360,1460835390),(7,'Test1','Test1',1460835390,1460835420),(8,'Test3','Test3',1460835420,1460835540),(9,'Test2','Test2',1460835540,1460835600),(10,'Test1','Test1',1460835600,1460835660),(11,'Test2','Test2',1460835660,1460835720),(12,'Test3','Test3',1460835720,1460835840),(13,'Test1','Test1',1460835840,1460835960),(14,'Test3','Test3',1460835960,1460836080),(15,'Test2','Test2',1460836080,1460836200),(16,'Test1','Test1',1460836200,1460836320),(17,'Test3','Test3',1460836320,1460836440),(18,'Test2','Test2',1460836440,1460836560),(19,'Test2','Test2',1460836560,1460836680),(20,'Test1','Test1',1460836680,1460836800),(21,'Test3','Test3',1460836800,1460836920),(22,'Test1','Test1',1460836920,1460837040),(23,'Test2','Test2',1460837040,1460837160),(24,'Test3','Test3',1460837160,1460837280),(25,'Test3','Test3',1460837280,1460837400),(26,'Test2','Test2',1460837400,1460837640),(27,'Test1','Test1',1460837640,1460837760),(28,'Test3','Test3',1460837760,1460837880),(29,'Test2','Test2',1460837880,1460838000),(30,'Test1','Test1',1460838000,1460899080),(31,'Test2','Test2',1460899080,1460899200),(32,'Test1','Test1',1460899200,1460899320),(33,'Test3','Test3',1460899320,1460899440),(34,'Test2','Test2',1460899440,1460900100),(35,'Test1','Test1',1460900100,1460900220),(36,'Test3','Test3',1460900220,1460900340),(37,'Test2','Test2',1460900340,1460900460),(38,'Test3','Test3',1460900460,1460901660),(39,'Test1','Test1',1460901660,1460901780),(40,'Test1','Test1',1460901780,1460901900),(41,'Test2','Test2',1460901900,1460902020),(42,'Test3','Test3',1460902020,1460902140),(43,'Test3','Test3',1460902140,1460902260),(44,'Test1','Test1',1460902260,1460902380),(45,'Test2','Test2',1460902380,1460902500),(46,'Test2','Test2',1460902500,1460902620),(47,'Test3','Test3',1460902620,1460902740),(48,'Test1','Test1',1460902740,1460903430),(49,'Test3','Test3',1460903430,1460903550),(50,'Test1','Test1',1460903550,1460903670),(51,'Test2','Test2',1460903670,1460903790),(52,'Test3','Test3',1460903790,1460903910),(53,'Test1','Test1',1460903910,1460904030),(54,'Test2','Test2',1460904030,1460904150),(55,'Test1','Test1',1460904150,1460904270),(56,'Test3','Test3',1460904270,1460904390),(57,'Test2','Test2',1460904390,1460904510),(58,'Test1','Test1',1460904510,1460904630),(59,'Test3','Test3',1460904630,1460997990),(60,'Test2','Test2',1460997990,1460998110),(61,'Test2','Test2',1460998110,1460998230),(62,'Test3','Test3',1460998230,1460998350),(63,'Test1','Test1',1460998350,1460999010),(64,'Test3','Test3',1460999010,1460999130),(65,'Test1','Test1',1460999130,1460999250),(66,'Test2','Test2',1460999250,1460999370),(67,'Test3','Test3',1460999370,1460999490),(68,'Test1','Test1',1460999490,1460999610),(69,'Test2','Test2',1460999610,1460999730),(70,'Test2','Test2',1460999730,1460999850),(71,'Test1','Test1',1460999850,1460999970),(72,'Test3','Test3',1460999970,1461000090),(73,'Test2','Test2',1461000090,1461000210),(74,'Test3','Test3',1461000210,1461000330),(75,'Test1','Test1',1461000330,1461000450),(76,'Test3','Test3',1461000450,1461000570),(77,'Test1','Test1',1461000570,1461000690),(78,'Test2','Test2',1461000690,1461000810),(79,'Test1','Test1',1461000810,1461000930),(80,'Test3','Test3',1461000930,1461001050),(81,'Test2','Test2',1461001050,1461001410),(82,'Test3','Test3',1461001410,1461001530),(83,'Test1','Test1',1461001530,1461001650),(84,'Test2','Test2',1461001650,1461001770),(85,'Test3','Test3',1461001770,1461001890),(86,'Test1','Test1',1461001890,1461002010),(87,'Test2','Test2',1461002010,1461002130),(88,'Test3','Test3',1461002130,1461002250),(89,'Test2','Test2',1461002250,1461002370),(90,'Test1','Test1',1461002370,1461002490),(91,'Test3','Test3',1461002490,1461002610),(92,'Test1','Test1',1461002610,1461002730),(93,'Test2','Test2',1461002730,1461002850),(94,'Test1','Test1',1461002850,1461002970),(95,'Test3','Test3',1461002970,1461003090),(96,'Test2','Test2',1461003090,1461003210),(97,'Test1','Test1',1461003210,1461003330),(98,'Test2','Test2',1461003330,1461003450),(99,'Test3','Test3',1461003450,1461003570),(100,'Test2','Test2',1461003570,1461003810),(101,'Test3','Test3',1461003810,1461003930),(102,'Test1','Test1',1461003930,1461004050),(103,'Test1','Test1',1461004050,1461004170),(104,'Test3','Test3',1461004170,1461004290),(105,'Test2','Test2',1461004290,1461006030),(106,'Test2','Test2',1461006030,1461006150),(107,'Test3','Test3',1461006150,1461006270),(108,'Test1','Test1',1461006270,1461006390),(109,'Test1','Test1',1461006390,1461006510),(110,'Test3','Test3',1461006510,1461006690),(111,'Test2','Test2',1461006690,1461006810),(112,'Test2','Test2',1461006810,1461006930),(113,'Test3','Test3',1461006930,1461007050),(114,'Test1','Test1',1461007050,1461007170),(115,'Test1','Test1',1461007170,1461007680),(116,'Test2','Test2',1461007680,1461007800),(117,'Test3','Test3',1461007800,1461007920),(118,'Test3','Test3',1461007920,1461008040),(119,'Test1','Test1',1461008040,1461008160),(120,'Test2','Test2',1461008160,1461008280),(121,'Test1','Test1',1461008280,1461008400),(122,'Test2','Test2',1461008400,1461008520),(123,'Test3','Test3',1461008520,1461008790),(124,'Test2','Test2',1461008790,1461008910),(125,'Test1','Test1',1461008910,1461009030),(126,'Test3','Test3',1461009030,1461009150),(127,'Test3','Test3',1461009150,1461009270),(128,'Test1','Test1',1461009270,1461009390),(129,'Test2','Test2',1461009390,1461009510),(130,'Test2','Test2',1461009510,1461009630),(131,'Test3','Test3',1461009630,1461009750),(132,'Test1','Test1',1461009750,1461009870),(133,'Test2','Test2',1461009870,1461009990),(134,'Test1','Test1',1461009990,1461010110),(135,'Test3','Test3',1461010110,1463131050),(136,'Test2','Test2',1463131050,1463131170),(137,'Test1','Test1',1463131170,1463131290),(138,'Test3','Test3',1463131290,1463131410),(139,'Test3','Test3',1463131410,1463131530),(140,'Test1','Test1',1463131530,1463131650),(141,'Test2','Test2',1463131650,1463131770),(142,'Test1','Test1',1463131770,1463131890),(143,'Test2','Test2',1463131890,1463132010),(144,'Test3','Test3',1463132010,1463132130),(145,'Test1','Test1',1463132130,1463132250),(146,'Test3','Test3',1463132250,1463132520),(147,'Test2','Test2',1463132520,1463135430),(148,'Test3','Test3',1463135430,1463135550),(149,'Test1','Test1',1463135550,1463135670),(150,'Test2','Test2',1463135670,1463135790),(151,'Test1','Test1',1463135790,1463135910),(152,'Test3','Test3',1463135910,1464095340),(153,'Test2','Test2',1464095340,1464095460),(154,'Test1','Test1',1464095460,1464095580),(155,'Test2','Test2',1464095580,1464095700),(156,'Test3','Test3',1464095700,1464095820),(157,'Test3','Test3',1464095820,1464698730),(158,'Test1','Test1',1464698730,1464698850),(159,'Test2','Test2',1464698850,1464698970),(160,'Test1','Test1',1464698970,1464699090),(161,'Test2','Test2',1464699090,1464699210),(162,'Test3','Test3',1464699210,1465891380),(163,'Test3','Test3',1465891380,1465891500),(164,'Test1','Test1',1465891500,1465891620),(165,'Test2','Test2',1465891620,1465891740),(166,'Test3','Test3',1465891740,1465891860),(167,'Test1','Test1',1465891860,1465891980),(168,'Test2','Test2',1465891980,1465893930),(169,'Test3','Test3',1465893930,1465894050),(170,'Test2','Test2',1465894050,1465894170),(171,'Test1','Test1',1465894170,1465894290),(172,'Test3','Test3',1465894290,1465897050),(173,'Test2','Test2',1465897050,1465897170),(174,'Test1','Test1',1465897170,1465897290),(175,'Test1','Test1',1465897290,1465897410),(176,'Test2','Test2',1465897410,1465897530),(177,'Test3','Test3',1465897530,1465897650),(178,'Test2','Test2',1465897650,1465897770),(179,'Test3','Test3',1465897770,1465897890),(180,'Test1','Test1',1465897890,1465898010),(181,'Test3','Test3',1465898010,1465898130),(182,'Test1','Test1',1465898130,1465898250),(183,'Test2','Test2',1465898250,1465898370),(184,'Test3','Test3',1465898370,1465898490),(185,'Test1','Test1',1465898490,1465898610),(186,'Test2','Test2',1465898610,1465898730),(187,'Test3','Test3',1465898730,1465898850),(188,'Test2','Test2',1465898850,1465898970),(189,'Test1','Test1',1465898970,1465899090),(190,'Test3','Test3',1465899090,1465899210),(191,'Test2','Test2',1465899210,1465899330),(192,'Test1','Test1',1465899330,1465899450),(193,'Test2','Test2',1465899450,1465899570),(194,'Test1','Test1',1465899570,1465899690),(195,'Test3','Test3',1465899690,1465899810),(196,'Test3','Test3',1465899810,1465899930),(197,'Test1','Test1',1465899930,1465900050),(198,'Test2','Test2',1465900050,1465900170),(199,'Test1','Test1',1465900170,1465900290),(200,'Test2','Test2',1465900290,1465900410),(201,'Test3','Test3',1465900410,1465900530),(202,'Test2','Test2',1465900530,1465907250),(203,'Test3','Test3',1465907250,1465907370),(204,'Test1','Test1',1465907370,1465907490),(205,'Test1','Test1',1465907490,1465907610),(206,'Test3','Test3',1465907610,1465908390),(207,'Test2','Test2',1465908390,1465908510),(208,'Test2','Test2',1465908510,1465908630),(209,'Test3','Test3',1465908630,1465908750),(210,'Test1','Test1',1465908750,1465908990),(211,'Test1','Test1',1465908990,1465909170),(212,'Test2','Test2',1465909170,1465909350),(213,'Test3','Test3',1465909350,1465909530),(214,'Test1','Test1',1465909530,1465909710),(215,'Test2','Test2',1465909710,1465909770),(216,'Test3','Test3',1465909770,1465909920),(217,'Test2','Test2',1465909920,1465910070),(218,'Test3','Test3',1465910070,1465910220),(219,'Test1','Test1',1465910220,1465910370),(220,'Test1','Test1',1465910370,1465910520),(221,'Test3','Test3',1465910520,1465910670),(222,'Test2','Test2',1465910670,1465910820),(223,'Test2','Test2',1465910820,1465910970),(224,'Test1','Test1',1465910970,1465911120),(225,'Test3','Test3',1465911120,1465911270),(226,'Test2','Test2',1465911270,1465911420),(227,'Test1','Test1',1465911420,1465982940),(228,'Test3','Test3',1465982940,1465983090),(229,'Test1','Test1',1465983090,1465983240),(230,'Test2','Test2',1465983240,1465983390),(231,'Test3','Test3',1465983390,1465983540),(232,'Test1','Test1',1465983540,1465983690),(233,'Test2','Test2',1465983690,1465983840),(234,'Test3','Test3',1465983840,1465983990),(235,'Test2','Test2',1465983990,1465984140),(236,'Test3','Test3',1465984140,1465984290),(237,'Test1','Test1',1465984290,1465984440),(238,'Test2','Test2',1465984440,1465984590),(239,'Test3','Test3',1465984590,1465984740),(240,'Test1','Test1',1465984740,1465984890),(241,'Test2','Test2',1465984890,1465985040),(242,'Test1','Test1',1465985040,1465985190),(243,'Test3','Test3',1465985190,1465985340),(244,'Test3','Test3',1465985340,1465985490),(245,'Test1','Test1',1465985490,1465985640),(246,'Test2','Test2',1465985640,1465985790),(247,'Test1','Test1',1465985790,1465985940),(248,'Test2','Test2',1465985940,1465986090),(249,'Test3','Test3',1465986090,1465986240),(250,'Test3','Test3',1465986240,1465986390),(251,'Test1','Test1',1465986390,1465986540),(252,'Test2','Test2',1465986540,1465986690),(253,'Test3','Test3',1465986690,1465986840),(254,'Test2','Test2',1465986840,1465986990),(255,'Test1','Test1',1465986990,1465987140),(256,'Test1','Test1',1465987140,1465987290),(257,'Test3','Test3',1465987290,1465987440),(258,'Test2','Test2',1465987440,1465987590),(259,'Test3','Test3',1465987590,1465987950),(260,'Test2','Test2',1465987950,1465988100),(261,'Test1','Test1',1465988100,1465988250),(262,'Test2','Test2',1465988250,1465988400),(263,'Test3','Test3',1465988400,1465988550),(264,'Test1','Test1',1465988550,1465988700),(265,'Test3','Test3',1465988700,1465988940),(266,'Test2','Test2',1465988940,1465989090),(267,'Test1','Test1',1465989090,1465989240),(268,'Test2','Test2',1465989240,1465989390),(269,'Test3','Test3',1465989390,1465989540),(270,'Test1','Test1',1465989540,1465989690),(271,'Test3','Test3',1465989690,1465989840),(272,'Test1','Test1',1465989840,1465989990),(273,'Test2','Test2',1465989990,1466002710),(274,'Test1','Test1',1466002710,1466002860),(275,'Test2','Test2',1466002860,1466003010),(276,'Test3','Test3',1466003010,1466003160),(277,'Test3','Test3',1466003160,1466003310),(278,'Test2','Test2',1466003310,1466003460),(279,'Test1','Test1',1466003460,1466003790),(280,'Test1','Test1',1466003790,1466003940),(281,'Test2','Test2',1466003940,1466004090),(282,'Test3','Test3',1466004090,1466004240),(283,'Test3','Test3',1466004240,1466004390),(284,'Test2','Test2',1466004390,1466004540),(285,'Test1','Test1',1466004540,1466004690),(286,'Test3','Test3',1466004690,1466005860),(287,'Test1','Test1',1466005860,1466006010),(288,'Test2','Test2',1466006010,1466006160),(289,'Test2','Test2',1466006160,1466006310),(290,'Test3','Test3',1466006310,1466006460),(291,'Test1','Test1',1466006460,1466006610),(292,'Test1','Test1',1466006610,1466006760),(293,'Test2','Test2',1466006760,1466006910),(294,'Test3','Test3',1466006910,1466007060),(295,'Test2','Test2',1466007060,1466007210),(296,'Test3','Test3',1466007210,1466007360),(297,'Test1','Test1',1466007360,1466007510),(298,'Test3','Test3',1466007510,1466007660),(299,'Test1','Test1',1466007660,1466007810),(300,'Test2','Test2',1466007810,1466007960),(301,'Test3','Test3',1466007960,1466008110),(302,'Test1','Test1',1466008110,1466008260),(303,'Test2','Test2',1466008260,1466008410),(304,'Test2','Test2',1466008410,1466008740),(305,'Test1','Test1',1466008740,1466008890),(306,'Test3','Test3',1466008890,1466009040),(307,'Test1','Test1',1466009040,1466009190),(308,'Test3','Test3',1466009190,1466009340),(309,'Test2','Test2',1466009340,1466009490),(310,'Test3','Test3',1466009490,1466009640),(311,'Test1','Test1',1466009640,1466009790),(312,'Test2','Test2',1466009790,1466009940),(313,'Test3','Test3',1466009940,1466010090),(314,'Test1','Test1',1466010090,1466010240),(315,'Test2','Test2',1466010240,1466010390),(316,'Test3','Test3',1466010390,1466010540),(317,'Test2','Test2',1466010540,1466010690),(318,'Test1','Test1',1466010690,1466010840),(319,'Test2','Test2',1466010840,1466010990),(320,'Test3','Test3',1466010990,1466011140),(321,'Test1','Test1',1466011140,1466011290),(322,'Test1','Test1',1466011290,1466011440),(323,'Test3','Test3',1466011440,1466011590),(324,'Test2','Test2',1466011590,1466011740),(325,'Test1','Test1',1466011740,1466011890),(326,'Test2','Test2',1466011890,1466012040),(327,'Test3','Test3',1466012040,1466012190),(328,'Test3','Test3',1466012190,1466012340),(329,'Test2','Test2',1466012340,1466012490),(330,'Test1','Test1',1466012490,1466012640),(331,'Test3','Test3',1466012640,1466012790),(332,'Test1','Test1',1466012790,1466012940),(333,'Test2','Test2',1466012940,1466013090),(334,'Test3','Test3',1466013090,1466013450),(335,'Test2','Test2',1466013450,1466013600),(336,'Test1','Test1',1466013600,1466013750),(337,'Test1','Test1',1466013750,1466013900),(338,'Test3','Test3',1466013900,1466017800),(339,'Test2','Test2',1466017800,1466017950),(340,'Test2','Test2',1466017950,1466018100),(341,'Test3','Test3',1466018100,1466018250),(342,'Test1','Test1',1466018250,1466018400),(343,'Test3','Test3',1466018400,1466018550),(344,'Test1','Test1',1466018550,1466018700),(345,'Test2','Test2',1466018700,1466018850),(346,'Test3','Test3',1466018850,1466019000),(347,'Test1','Test1',1466019000,1466019150),(348,'Test2','Test2',1466019150,1466019300),(349,'Test3','Test3',1466019300,1466019450),(350,'Test2','Test2',1466019450,1466019600),(351,'Test1','Test1',1466019600,1466019750),(352,'Test3','Test3',1466019750,1466019900),(353,'Test1','Test1',1466019900,1466020050),(354,'Test2','Test2',1466020050,1466020200),(355,'Test3','Test3',1466020200,1466020350),(356,'Test2','Test2',1466020350,1466020500),(357,'Test1','Test1',1466020500,1466020650),(358,'Test1','Test1',1466020650,1466020800),(359,'Test2','Test2',1466020800,1466020950),(360,'Test3','Test3',1466020950,1466021100),(361,'Test2','Test2',1466021100,1466021250),(362,'Test3','Test3',1466021250,1466021400),(363,'Test1','Test1',1466021400,1466021550),(364,'Test1','Test1',1466021550,1466024280),(365,'Test3','Test3',1466024280,1466024430),(366,'Test2','Test2',1466024430,1466024580),(367,'Test3','Test3',1466024580,1466088420),(368,'Test2','Test2',1466088420,1466088570),(369,'Test1','Test1',1466088570,1466088720),(370,'Test2','Test2',1466088720,1466088870),(371,'Test1','Test1',1466088870,1466089020),(372,'Test3','Test3',1466089020,1466089170),(373,'Test3','Test3',1466089170,1466089320),(374,'Test1','Test1',1466089320,1466089470),(375,'Test2','Test2',1466089470,1466089620),(376,'Test2','Test2',1466089620,1466089770),(377,'Test1','Test1',1466089770,1466089920),(378,'Test3','Test3',1466089920,1466090070),(379,'Test1','Test1',1466090070,1466090400),(380,'Test2','Test2',1466090400,1466090550),(381,'Test3','Test3',1466090550,1466090700),(382,'Test1','Test1',1466090700,1466090850),(383,'Test3','Test3',1466090850,1466091000),(384,'Test2','Test2',1466091000,1466091150),(385,'Test1','Test1',1466091150,1466091300),(386,'Test2','Test2',1466091300,1466091450),(387,'Test3','Test3',1466091450,1466091600),(388,'Test3','Test3',1466091600,1466091750),(389,'Test1','Test1',1466091750,1466091900),(390,'Test2','Test2',1466091900,1466092050),(391,'Test2','Test2',1466092050,1466092200),(392,'Test1','Test1',1466092200,1466092350),(393,'Test3','Test3',1466092350,1466092500),(394,'Test3','Test3',1466092500,1466092650),(395,'Test2','Test2',1466092650,1466092800),(396,'Test1','Test1',1466092800,1466092950),(397,'Test1','Test1',1466092950,1466093100),(398,'Test3','Test3',1466093100,1466093250),(399,'Test2','Test2',1466093250,1466098290),(400,'Test3','Test3',1466098290,1466098440),(401,'Test1','Test1',1466098440,1466098590),(402,'Test2','Test2',1466098590,1466098740),(403,'Test2','Test2',1466098740,1466098890),(404,'Test1','Test1',1466098890,1466099040),(405,'Test3','Test3',1466099040,1466099190),(406,'Test2','Test2',1466099190,1466099340),(407,'Test1','Test1',1466099340,1466099490),(408,'Test3','Test3',1466099490,1466099640),(409,'Test3','Test3',1466099640,1466099790),(410,'Test2','Test2',1466099790,1466099940),(411,'Test1','Test1',1466099940,1466100090),(412,'Test1','Test1',1466100090,1466100240),(413,'Test3','Test3',1466100240,1466100390),(414,'Test2','Test2',1466100390,1466100540),(415,'Test3','Test3',1466100540,0);
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
INSERT INTO `continent` VALUES (1,'Europe','Where cso was born'),(2,'Africa','Gold... gold everywhere!'),(3,'North America','The bigger, the better'),(4,'South America','Partying through the night'),(5,'Asia','Most productive continent ever'),(6,'Oceania','My islands are as big as your continent');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'China','The best country to fabricate stuff!','finale',0,5),(2,'India','Colourful culture','finale',0,5),(3,'United States','Everything should be big','eliminated',0,3),(4,'Indonesia','The kings of the jungle','eliminated',0,5),(5,'Brazil','It is carnival yet?','finale',0,4),(6,'Pakistan','Hot spices that will burn you','eliminated',0,5),(7,'Bangladesh','We can make everything with electronics','eliminated',0,5),(8,'Russian Federation','Comrade, we do what we want!','active',0,5),(9,'Japan','We love technology','eliminated',0,5),(10,'Vietnam','Get into the choppa!','eliminated',0,5),(11,'Egypt','The land of the Pharaohs, Emperors and Kings','eliminated',0,2),(12,'Iran','The country where nothing is allowed, but everything still happens','eliminated',0,5),(13,'Germany','Just give me beer dude','active',0,1),(14,'Turkey','Turkish delight!','active',0,1),(15,'France','You cannot compete with our cheese and wine','active',0,1),(16,'United Kingdom','Tea, the Queen and London. Nothing more','eliminated',0,1),(17,'Italy','If you touch my pancetta, I will hurt you','eliminated',0,1),(18,'South Korea','Kimchi masterrace','eliminated',0,5),(19,'Spain','GRAB YOUR TOMATOES','active',0,1),(20,'Afghanistan','We produce top quality drugs','eliminated',0,5);
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
INSERT INTO `cronjob` VALUES ('clearvotes',5,1466100645),('pickrandom',30,1466100630);
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
INSERT INTO `medal` VALUES ('gold',0,210,1),('silver',0,210,2),('bronze',0,210,3),('gold',0,211,1),('silver',0,211,2),('bronze',0,211,3),('gold',0,212,1),('silver',0,212,2),('bronze',0,212,5),('gold',0,213,1),('silver',0,213,2),('bronze',0,213,4),('gold',0,214,1),('silver',0,214,2),('bronze',0,214,4),('gold',0,216,1),('silver',0,216,2),('bronze',0,216,3),('gold',0,217,2),('silver',0,217,3),('bronze',0,217,9),('gold',0,218,2),('silver',0,218,3),('bronze',0,218,4),('gold',0,219,1),('silver',0,219,2),('bronze',0,219,4),('gold',0,220,1),('silver',0,220,2),('bronze',0,220,3),('gold',0,221,1),('silver',0,221,2),('bronze',0,221,3),('gold',0,222,1),('silver',0,222,2),('bronze',0,222,6),('gold',0,223,1),('silver',0,223,2),('bronze',0,223,3),('gold',0,224,1),('silver',0,224,2),('bronze',0,224,5),('gold',0,225,1),('silver',0,225,3),('bronze',0,225,5),('gold',0,226,1),('silver',0,226,2),('bronze',0,226,3),('gold',0,227,1),('silver',0,227,3),('bronze',0,227,4),('gold',0,228,1),('silver',0,228,2),('bronze',0,228,3),('gold',0,229,1),('silver',0,229,2),('bronze',0,229,3),('gold',0,230,1),('silver',0,230,2),('bronze',0,230,3),('gold',0,231,1),('silver',0,231,3),('bronze',0,231,5),('gold',0,232,1),('silver',0,232,2),('bronze',0,232,3),('gold',0,233,3),('silver',0,233,4),('bronze',0,233,5),('gold',0,234,1),('silver',0,234,3),('bronze',0,234,4),('gold',0,235,1),('silver',0,235,3),('bronze',0,235,4),('gold',0,236,1),('silver',0,236,2),('bronze',0,236,3),('gold',0,237,1),('silver',0,237,2),('bronze',0,237,3),('gold',0,238,1),('silver',0,238,2),('bronze',0,238,3),('gold',0,239,1),('silver',0,239,2),('bronze',0,239,3),('gold',0,240,1),('silver',0,240,2),('bronze',0,240,3),('gold',0,241,1),('silver',0,241,2),('bronze',0,241,4),('gold',0,242,1),('silver',0,242,2),('bronze',0,242,5),('gold',0,243,1),('silver',0,243,3),('bronze',0,243,4),('gold',0,244,1),('silver',0,244,2),('bronze',0,244,3),('gold',0,245,1),('silver',0,245,2),('bronze',0,245,4),('gold',0,246,1),('silver',0,246,2),('bronze',0,246,4),('gold',0,247,1),('silver',0,247,2),('bronze',0,247,6),('gold',0,248,1),('silver',0,248,2),('bronze',0,248,6),('gold',0,249,1),('silver',0,249,2),('bronze',0,249,3),('gold',0,250,1),('silver',0,250,2),('bronze',0,250,9),('gold',0,251,1),('silver',0,251,2),('bronze',0,251,4),('gold',0,252,1),('silver',0,252,2),('bronze',0,252,4),('gold',0,253,1),('silver',0,253,4),('bronze',0,253,6),('gold',0,254,1),('silver',0,254,2),('bronze',0,254,3),('gold',0,255,1),('silver',0,255,2),('bronze',0,255,3),('gold',0,256,2),('silver',0,256,4),('bronze',0,256,6),('gold',0,257,1),('silver',0,257,2),('bronze',0,257,3),('gold',0,258,1),('silver',0,258,2),('bronze',0,258,4),('gold',0,259,1),('silver',0,259,3),('bronze',0,259,4),('gold',0,260,1),('silver',0,260,3),('bronze',0,260,8),('gold',0,261,1),('silver',0,261,2),('bronze',0,261,5),('gold',0,262,1),('silver',0,262,3),('bronze',0,262,4),('gold',0,263,1),('silver',0,263,2),('bronze',0,263,3),('gold',0,264,1),('silver',0,264,2),('bronze',0,264,3),('gold',0,265,3),('silver',0,265,4),('bronze',0,265,6),('gold',0,266,1),('silver',0,266,2),('bronze',0,266,5),('gold',0,267,1),('silver',0,267,2),('bronze',0,267,3),('gold',0,268,2),('silver',0,268,4),('bronze',0,268,8),('silver',0,269,3),('bronze',0,269,4),('gold',5,269,12),('gold',0,270,1),('silver',0,270,3),('bronze',0,270,4),('gold',0,271,1),('silver',0,271,2),('bronze',0,271,4),('gold',0,272,1),('silver',0,272,2),('bronze',0,272,3),('gold',0,273,1),('silver',0,273,4),('bronze',0,273,5),('gold',0,274,1),('silver',0,274,2),('bronze',0,274,3),('gold',0,275,1),('silver',0,275,2),('bronze',0,275,5),('gold',0,276,1),('silver',0,276,3),('bronze',0,276,5),('gold',0,277,1),('silver',0,277,3),('bronze',0,277,4),('gold',0,278,1),('silver',0,278,2),('bronze',0,278,4),('silver',0,279,1),('bronze',0,279,3),('gold',1,279,8),('silver',0,280,1),('bronze',0,280,2),('gold',1,280,5),('gold',0,281,2),('silver',0,281,3),('bronze',0,281,5),('gold',0,282,1),('silver',0,282,2),('bronze',0,282,3),('gold',0,283,1),('silver',0,283,3),('bronze',0,283,5),('gold',0,284,1),('silver',0,284,2),('bronze',0,284,7),('gold',0,285,1),('silver',0,285,2),('bronze',0,285,3),('gold',0,286,1),('silver',0,286,2),('bronze',0,286,4),('gold',0,287,1),('silver',0,287,3),('bronze',0,287,4),('gold',0,288,1),('silver',0,288,2),('bronze',0,288,5),('gold',0,289,1),('silver',0,289,2),('bronze',0,289,7),('gold',0,290,1),('silver',0,290,3),('bronze',0,290,7),('gold',0,291,1),('silver',0,291,2),('bronze',0,291,3),('gold',0,292,1),('silver',0,292,4),('bronze',0,292,5),('gold',0,293,1),('silver',0,293,2),('bronze',0,293,3),('gold',0,294,1),('silver',0,294,2),('bronze',0,294,3),('gold',0,295,1),('silver',0,295,2),('bronze',0,295,3),('gold',0,296,3),('silver',0,296,5),('bronze',0,296,6),('gold',0,297,1),('silver',0,297,2),('bronze',0,297,3),('gold',0,298,1),('silver',0,298,2),('bronze',0,298,3),('gold',0,299,1),('silver',0,299,2),('bronze',0,299,3),('gold',0,300,1),('silver',0,300,2),('bronze',0,300,6),('gold',0,301,1),('silver',0,301,2),('bronze',0,301,4),('gold',0,302,1),('silver',0,302,2),('bronze',0,302,3),('gold',0,303,1),('silver',0,303,2),('bronze',0,303,3),('gold',0,304,1),('silver',0,304,4),('bronze',0,304,6),('gold',0,305,1),('silver',0,305,2),('bronze',0,305,4),('gold',0,306,1),('silver',0,306,2),('bronze',0,306,3),('gold',0,307,1),('silver',0,307,3),('bronze',0,307,6),('gold',0,308,1),('silver',0,308,2),('bronze',0,308,3),('silver',0,309,2),('bronze',0,309,5),('gold',2,309,20),('gold',0,310,1),('silver',0,310,2),('bronze',0,310,5),('gold',0,311,1),('silver',0,311,3),('bronze',0,311,4),('gold',0,312,1),('silver',0,312,2),('bronze',0,312,4),('gold',0,313,1),('silver',0,313,2),('bronze',0,313,4),('gold',0,314,1),('silver',0,314,3),('bronze',0,314,4),('gold',0,315,1),('silver',0,315,2),('bronze',0,315,4),('gold',0,316,1),('silver',0,316,4),('bronze',0,316,5),('gold',0,317,1),('silver',0,317,2),('bronze',0,317,5),('gold',0,318,1),('silver',0,318,2),('bronze',0,318,3),('bronze',0,319,1),('gold',4,319,12),('silver',1,319,14),('gold',0,320,1),('silver',0,320,4),('bronze',0,320,5),('gold',0,321,1),('silver',0,321,2),('bronze',0,321,3),('gold',0,322,1),('silver',0,322,2),('bronze',0,322,4),('gold',0,323,1),('silver',0,323,2),('bronze',0,323,4),('silver',0,324,1),('bronze',0,324,2),('gold',3,324,12),('gold',0,325,2),('silver',0,325,3),('bronze',0,325,4),('gold',0,326,1),('silver',0,326,3),('bronze',0,326,4),('gold',0,327,1),('silver',0,327,2),('bronze',0,327,3),('gold',0,328,1),('silver',0,328,2),('bronze',0,328,3),('gold',0,329,1),('silver',0,329,2),('bronze',0,329,5),('gold',0,330,1),('silver',0,330,2),('bronze',0,330,4),('gold',0,331,1),('silver',0,331,2),('bronze',0,331,5),('gold',0,332,1),('silver',0,332,2),('bronze',0,332,3),('gold',0,333,1),('silver',0,333,2),('bronze',0,333,5),('gold',0,334,1),('silver',0,334,4),('bronze',0,334,5),('gold',0,335,1),('silver',0,335,3),('bronze',0,335,4),('gold',0,336,1),('silver',0,336,3),('bronze',0,336,4),('gold',0,337,1),('silver',0,337,2),('bronze',0,337,4),('gold',0,338,1),('silver',0,338,2),('bronze',0,338,4),('gold',0,339,1),('silver',0,339,2),('bronze',0,339,3),('gold',0,340,1),('silver',0,340,2),('bronze',0,340,4),('gold',0,341,1),('silver',0,341,2),('bronze',0,341,4),('gold',0,342,1),('silver',0,342,2),('bronze',0,342,6),('gold',0,343,1),('silver',0,343,2),('bronze',0,343,4),('silver',0,344,1),('bronze',0,344,2),('gold',1,344,5),('silver',0,345,2),('bronze',0,345,3),('gold',1,345,12),('gold',0,346,1),('silver',0,346,2),('bronze',0,346,5),('gold',0,347,1),('silver',0,347,3),('bronze',0,347,7),('gold',0,348,1),('silver',0,348,2),('bronze',0,348,3),('gold',0,349,1),('silver',0,349,2),('bronze',0,349,4),('gold',0,350,1),('silver',0,350,3),('bronze',0,350,4),('silver',0,351,1),('bronze',0,351,2),('gold',1,351,10),('gold',0,352,1),('silver',0,352,2),('bronze',0,352,6),('gold',0,353,1),('silver',0,353,2),('bronze',0,353,4),('gold',0,354,1),('silver',0,354,2),('bronze',0,354,3),('gold',0,355,1),('silver',0,355,2),('bronze',0,355,3),('gold',0,356,1),('silver',0,356,2),('bronze',0,356,3),('gold',0,357,1),('silver',0,357,3),('bronze',0,357,5),('gold',0,358,1),('silver',0,358,2),('bronze',0,358,6),('gold',0,359,1),('silver',0,359,2),('bronze',0,359,6),('gold',0,360,1),('silver',0,360,2),('bronze',0,360,3),('gold',0,361,1),('silver',0,361,2),('bronze',0,361,4),('gold',0,362,1),('silver',0,362,2),('bronze',0,362,3),('gold',0,363,1),('silver',0,363,3),('bronze',0,363,5),('gold',0,364,1),('silver',0,364,2),('bronze',0,364,3),('gold',0,365,1),('silver',0,365,2),('bronze',0,365,3),('gold',0,366,1),('silver',0,366,3),('bronze',0,366,4),('gold',0,367,1),('silver',0,367,2),('bronze',0,367,4),('gold',0,368,1),('silver',0,368,3),('bronze',0,368,4),('gold',0,369,1),('silver',0,369,2),('bronze',0,369,3),('gold',0,370,1),('silver',0,370,3),('bronze',0,370,6),('gold',0,371,1),('silver',0,371,3),('bronze',0,371,6),('gold',0,372,1),('silver',0,372,2),('bronze',0,372,3),('gold',0,373,1),('silver',0,373,2),('bronze',0,373,4),('gold',0,374,1),('silver',0,374,2),('bronze',0,374,3),('gold',0,375,1),('silver',0,375,2),('bronze',0,375,4),('gold',0,376,1),('silver',0,376,2),('bronze',0,376,3),('gold',0,377,1),('silver',0,377,3),('bronze',0,377,4),('gold',0,378,1),('silver',0,378,2),('bronze',0,378,3),('gold',0,379,1),('silver',0,379,3),('bronze',0,379,4),('gold',0,380,1),('silver',0,380,2),('bronze',0,380,4),('gold',0,381,1),('silver',0,381,3),('bronze',0,381,5),('gold',0,382,1),('silver',0,382,2),('bronze',0,382,6),('gold',0,383,1),('silver',0,383,2),('bronze',0,383,3),('gold',0,384,1),('silver',0,384,2),('bronze',0,384,4),('gold',0,385,1),('silver',0,385,3),('bronze',0,385,4),('gold',0,386,1),('silver',0,386,2),('bronze',0,386,3),('gold',0,387,1),('silver',0,387,2),('bronze',0,387,3),('gold',0,388,1),('silver',0,388,2),('bronze',0,388,4),('gold',0,389,1),('silver',0,389,2),('bronze',0,389,4),('silver',0,390,1),('bronze',0,390,2),('gold',2,390,12),('gold',0,391,1),('silver',0,391,2),('bronze',0,391,3),('gold',0,392,1),('silver',0,392,2),('bronze',0,392,3),('gold',0,393,1),('silver',0,393,5),('bronze',0,393,10),('silver',0,394,1),('bronze',0,394,3),('gold',1,394,9),('silver',0,395,7),('bronze',0,395,9),('gold',3,395,12),('gold',0,396,3),('silver',0,396,4),('bronze',0,396,7),('gold',0,397,1),('silver',0,397,2),('bronze',0,397,3),('gold',0,398,1),('silver',0,398,2),('bronze',0,398,3),('gold',0,399,1),('silver',0,399,2),('bronze',0,399,3),('gold',0,400,1),('silver',0,400,2),('bronze',0,400,3),('gold',0,401,1),('silver',0,401,2),('bronze',0,401,4),('gold',0,402,1),('silver',0,402,2),('bronze',0,402,3),('gold',0,403,1),('silver',0,403,2),('bronze',0,403,5),('gold',0,404,1),('silver',0,404,2),('bronze',0,404,3),('gold',0,405,1),('silver',0,405,2),('bronze',0,405,3),('gold',0,406,1),('silver',0,406,2),('bronze',0,406,4),('gold',0,407,1),('silver',0,407,2),('bronze',0,407,7),('gold',0,408,1),('silver',0,408,2),('bronze',0,408,3),('gold',0,409,1),('silver',0,409,3),('bronze',0,409,4),('gold',0,410,1),('silver',0,410,2),('bronze',0,410,3),('gold',0,411,1),('silver',0,411,4),('bronze',0,411,6),('gold',0,412,1),('silver',0,412,2),('bronze',0,412,6),('gold',0,413,1),('silver',0,413,2),('bronze',0,413,4),('gold',0,414,1),('silver',0,414,3),('bronze',0,414,4);
/*!40000 ALTER TABLE `medal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reason`
--

DROP TABLE IF EXISTS `reason`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reason` (
  `reason_id` int(11) NOT NULL AUTO_INCREMENT,
  `reason_name` varchar(64) NOT NULL,
  `reason_desc` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  PRIMARY KEY (`reason_name`),
  UNIQUE KEY `reason_id` (`reason_id`),
  KEY `country` (`country`),
  CONSTRAINT `reason_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reason`
--

LOCK TABLES `reason` WRITE;
/*!40000 ALTER TABLE `reason` DISABLE KEYS */;
INSERT INTO `reason` VALUES (18,'Air Force','The largest air force in the world is the U.S. Air Force. The world’s second-largest air force is the U.S. Navy and Marine Corps combined.',3),(27,'Airports','Brazil has more than 4,000 airports – more than any other country other than the US. ',5),(76,'Alcohol','French people are the second biggest consumers of alcohol per capita in the Western world - after Luxembourg... ',15),(35,'Ambulances','Edhi Foundation is the world’s largest non-profit social welfare organization. This organization provides 24-hour emergency services, medical & healthcare services and shelter for orphans.',6),(48,'Anime','Animated Japanese films and television shows (i.e., anime) account for 60% of the world’s animation.',9),(12,'B.C. Tech','By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.',1),(51,'Balanced cuisine','Their cuisine is well known for its balance of the five Asian elements; spicy, sour, bitter, salty and sweet.',10),(101,'Bamiyan','Did you know that the world’s two largest standing Buddhas once stood in Bamiyan, Afghanistan  until the Taliban destroyed them in 2001. ',20),(63,'Beer','German people are the second biggest consumers of beer in the world (after the Czechs), with an average of 107 litres per person per year in 2010 (or 0.30 l per day). ',13),(36,'Bengal Tiger','The Royal Bengal Tiger is Bangladesh’s national animal. This majestic creature has a roar that can be heard up to 3 kilometers away. Unfortunately, it is now an endangered species.',7),(42,'Billionaires','Moscow actually has more billionaires living in the area than any other city in the world. With a total of 74 billionaires, Moscow beats New York City\'s statistic by three.',8),(22,'Biodiversity','Indonesia is home to thousands of different flora and fauna, making it the country with the second highest level of biodiversity in the world.',4),(56,'Calendar','The ancient Egyptians were the first people to have a year consisting of 365 days divided into 12 months. They also invented clocks.',11),(49,'Cashews','Vietnam is the largest exporter of cashews in the world, and the second largest exporter of rice.',10),(78,'Cheese','There are over 300 kinds of cheese made in France. ',15),(77,'Cheques','France is the only continental European country or Eurozone member where cheques are still used as one of the main forms of payment. Most of European countries stopped using them since the 1990\'s because it was not deemed a safe method of payment. ',15),(7,'Civilization','China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language.',1),(31,'Coffee','Brazil has been the world’s largest exporter of coffee for 150 years. It supplied around 80 per cent of the world’s coffee in the 1920s; that figure has fallen to around a third. ',5),(39,'Cricket','Cricket is the most popular sport in Bangladesh, closely followed by football.',7),(41,'Cyrillic','Russian language uses the Cyrillic alphabet instead of the Latin and is one of the 5 most spoken languages in the world',8),(95,'Density','Spain is the least densely populated country in Europe, with just 202 inhabitants per square mile.',19),(28,'Descendance','Some 1.5 million-2.5 million Brazilians are of Japanese descent. Many immigrants brought with them seedlings of cherry trees and cherry blossoms can be viewed outside homes in Sao Paulo, and in public parks in Curitiba.',5),(33,'Desert','The Thar desert is located on the border between Pakistan and India. It’s the world’s ninth largest sub-tropical desert. This desert is about 10,000 years old and was once a water source for the Indus Valley Civilization.',6),(70,'Discovery','The Germans can be credited for the discovery of insulin, the invention of the clarinet, the pocket watch, the automated calculator, the light bulb, television (partly), paraffin, petrol/gasoline & Diesel engines, the automobile and lots more!',13),(46,'Earthquakes','There are over 1,500 earthquakes in Japan each year, though most of them are very minor.',9),(23,'Ethnic groups','Indonesia is extremely culturally diverse. In fact, there are over 300 ethnic groups in Indonesia, each with their own customs, traditions, and dialects.',4),(47,'Exercise','Many Japanese companies have morning exercise sessions for their workers.',9),(68,'Exporter','Since 2003, Germany is the world\'s largest exporter of goods with $1.016 trillion exported in 2005. 10.1% of world exports come from Germany. ',13),(37,'Farmers','More than half of Bangladesh’s population is composed of farmers.',7),(87,'Fashion','Italy is among the world’s leaders of the fashion industry. In the 1950s, Italian designers such as Nino Cerruti and Valentino led the world in creating stylish fashions. Armani, Versace, Gucci, Prada, Ferrari etc. have become internationally recognized.',17),(19,'Fire Fighters','Case in point: Slightly more than 69 percent of firefighters in the United States are volunteers.',3),(17,'Flag','The current 50-star American flag was designed by a 17-year-old as a school project in 1958. He got a B-.',3),(82,'Football','United Kingdom is the only country in the world with four national football teams - England, Scotland, Wales and Northern Ireland. ',16),(40,'Forests','Bangladesh has one of the largest coastal mangrove forests in the world; it forms part of the Sundarbans National Park, a World Heritage site. ',7),(94,'Gold','Spain has some of the largest gold deposits in Europe. It is also one of the world\'s biggest producers of granite and marble.',19),(30,'Heritage','Rio de Janeiro became a World Heritage Site in 2012. Its annual Carnival attracts around 2 million revellers each day. ',5),(20,'Highway 550','US Highway 550 in Colorado became known as Million Dollar Highway because its roadbed was paved with low-grade gold ore.',3),(57,'Imhotep','The Egyptian polymath Imhotep (“the one who comes in peace”) is known as the first physician, the first engineer, and the first architect.',11),(44,'Intelligence','The intelligency level is of Russian people is considered up to 99%. There are more than 600 universities in the country.',8),(8,'Inventions','The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.',1),(34,'Irrigation','The world’s largest irrigation network is present in Pakistan. It serves 14.4 million hectares of cultivated land. The irrigation system is fed by water from the Indus River.',6),(21,'Islands','Indonesia is huge. Composed of 17,508 islands covering approximately 1,919,440 square kilometers, it takes over 12 hours of flying time to get from one end of the country (say, Northern Sumatra) to the other end (West Papua Guinea).',4),(90,'Kimchi','South Korea’s national dish is kimchi, which is a combination of vegetables and spices that have been fermented underground for months. It is served with almost everything.',18),(81,'Library','British Library in London is the largest library in the world. It has more than 170 million items catalogued.',16),(80,'London','More languages (300) are spoken in London than in any other country in the world.',16),(14,'Martial Arts','Martial Arts were first created in India, and later spread to Asia by Buddhist missionaries. ',2),(16,'Medicine','Ayurveda is the earliest school of medicine known to mankind. The Father of Medicine, Charaka, consolidated Ayurveda 2500 years ago. ',2),(26,'Mines','The Grasberg mine, located near Puncak Jaya, is the largest gold mine and the third largest copper mine in the world.',4),(13,'Mosques','There are 300,000 active mosques in India , more than in any other country, including the Muslim world ',2),(50,'Motor bikes','An estimated ten million motor bikes travel on the roads of Vietnam every day.',10),(32,'Mountains','Pakistan is home to some of the world’s highest mountain ranges. They include the Himalayas and the Hindu Kush range, in which four mountains out of the fourteen highest peaks in the world are located. K-2, the world’s second highest peak, is also located',6),(64,'Nature','Germany has nearly 700 zoological gardens, wildlife parks, aquariums, bird parks, animal reserves, or safari parks, including 414 registered zoos (more than the USA).',13),(102,'Nowruz','Afghans celebrate their new year, Nowruz, on 21 March, the first day of spring. Thousands travel to the northern city of Mazar-e-Sharif to welcome in Nawroz, a pre-Islamic festival. Nowruz is also celebrated in Iran.',20),(100,'Oil paintings','The world\'s first oil paintings were drawn not in Renaissance Europe but in the caves of Bamiyan, in the central highlands of Afghanistan around 650BC.',20),(73,'Oil wrestling','The spectacle of two bulky men stripped to the waist, doused with olive oil, and grappling under the hot Thracian sun is a 654-year-old sporting tradition and sight to behold.',14),(58,'Oldest civilization','Iran is the world’s oldest continuous major civilization, with historical and urban settlements dating back to 4000 BC.',12),(43,'Outer space','Soviet Cosmonaut Yuri Gagarin was the first human to journey into  outer space when his Vostok spacecraft  completed an  orbit of the Earth on April 12, 1961.',8),(83,'Parmesan','Parmesan cheese originated in the area around Parma, Italy. Italians also created many other cheeses, including gorgonzola, mozzarella, provolone, and ricotta. No one knows when the pizza was invented, but the people of Naples made it popular.',17),(79,'Pesticide free','According to the Soil Association, a leading organic-food campaign, more than 85% of the people in Britain want pesticide-free food.',16),(99,'Poetry',' Poetry is a cherished part of Afghan culture. Afghans have told their stories in verse for more than 1,000 years. ',20),(55,'Population','As of July 2011, the population of Egypt was 82,079,663, making it the 15th most populated country in the world. Approximately 99% of the population lives on about 5.5% of the land.',11),(54,'Pyramids','The shape of ancient Egyptian pyramids is thought to have been inspired by the spreading rays of the sun.',11),(15,'Railways','One of the largest employer in the world is the Indian Railways , employing over a million people.',2),(89,'Relationship','South Koreans enjoy showing off their relationship statuses publically. It is common to see couples holding hands, kissing, and even wearing matching outfits.',18),(59,'Religion','Islam is the dominant religion in Iran. Other religions, such as Zoroastrianism, Judaism, Christianity, and the Baha’i have their fans in Iran.',12),(62,'Resources','Iran holds the world’s fourth-largest proven oil reserves and the world’s second-largest natural gas reserves.',12),(75,'Rivers','Rivers played a major role in French history, acting as the main transportation routes before the advent of the railway. 24 rivers in France exceed 300 km in length',15),(85,'Rome','The capital of Italy is Rome (also known as the Eternal City) and is almost 3,000 years old. It has been the capital since 1871 and is home to the Dome of St. Peter\'s, the Sistine Chapel, the Coliseum, and the famous Trevi Fountain.',17),(53,'Ruou ran','A Vietnamese speciality is ruou ran, a rice wine with a pickled snake in it that is said to cure all illnesses.',10),(88,'Samsung','The microchips for Apple’s iPhones are made by the South Korean company Samsung.',18),(72,'Santa Claus','Saint Nicholas was born far from the North Pole, in Patara. And he’s not the only saint with connections to Turkey — the Virgin Mary’s resting place could be near Ephesus, while Saint Paul was from Tarsus in the south.',14),(45,'Slurping','Slurping your food is a sign that the food is delicious and is considered a compliment to the cook.',9),(84,'Spaghetti','When McDonald\'s opened in 1986 in Rome, food purists outside the restaurant gave away free spaghetti to remind people of their culinary heritage.',17),(71,'Tavuk Gogsu','The signature Ottoman treat is tavuk göğsü, or chicken breast pudding. It’s a strange blend of boiled chicken, milk, and sugar, dusted with cinnamon. And it’s delicious. Look for it on menus across the country.',14),(93,'Teeth','When a child loses a tooth in Spain, a small mouse called “Ratoncito Pérez” leaves a surprise under the pillow.',19),(97,'The Macaque','Spain is home to a type of tailless monkey, the macaque, which is the only type of wild monkey that lives in Europe.',19),(74,'Turkish Airlines','You can fly to just about everywhere from Istanbul Atatürk Airport, thanks to flag carrier Turkish Airlines’ 260-and-counting destinations. A modern fleet of aircraft served by kid-friendly crew has helped the fast-growing airline win Best Airline in Euro',14),(10,'Weaponry','The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.',1),(91,'Work','The average South Korean works 55 hours a week, or 2,316 hours a year, compared to the 40-hour week of the average factory worker in the United States.',18),(60,'Young','Iran is one of the youngest countries in the world. Approximately 70% of Iran’s population is under the age of 30.',12);
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
INSERT INTO `slang` VALUES ('communism',1),('colourful',2),('freedom',3),('jungle',4),('carnival',5),('spices',6),('pineapple',7),('comrade',8),('kalashnikov',8),('anime',9),('pharoah',11),('independent',12),('dasauto',13),('erdogan',14),('wrestling',14);
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

-- Dump completed on 2016-06-16 20:12:41
