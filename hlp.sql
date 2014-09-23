-- MySQL dump 10.13  Distrib 5.6.20, for osx10.7 (x86_64)
--
-- Host: localhost    Database: hlp
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,1,0,'First Item','First Item Contents'),(2,11,0,'First Item','First Item Contents'),(109,11,1,'Test','Test again!'),(110,11,1,'Testing@!!!$U','WLUV US!'),(111,11,1,'The next item','This is another item!'),(112,11,1,'The next item','This is another item!'),(113,11,1,'The next item','This is another item!'),(114,11,1,'Test ','123 123 123 123 ');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `hashed_pw` varchar(50) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','','2014-09-18 19:05:40'),(2,'bob','bobby','2014-09-22 18:39:35'),(3,'test23','b48cca5aebb82a328227b78d899506f5','2014-09-22 18:57:55'),(4,'test23','b48cca5aebb82a328227b78d899506f5','2014-09-22 18:58:24'),(5,'test123','cc03e747a6afbbcbf8be7668acfebee5','2014-09-22 19:01:17'),(6,'test123','cc03e747a6afbbcbf8be7668acfebee5','2014-09-22 19:01:49'),(7,'tarek','175076f9a90d14a4823d64c7728610ae','2014-09-22 20:32:25'),(8,'tarek123','905939769c9dba36248681eaf0c99ca2','2014-09-22 20:35:15'),(9,'test','098f6bcd4621d373cade4e832627b4f6','2014-09-22 20:36:12'),(10,'tarek','175076f9a90d14a4823d64c7728610ae','2014-09-22 20:36:34'),(11,'123123','4297f44b13955235245b2497399d7a93','2014-09-22 21:28:14'),(12,'234234','0e9212587d373ca58e9bada0c15e6fe4','2014-09-22 22:04:36'),(13,'123','202cb962ac59075b964b07152d234b70','2014-09-22 22:19:00'),(14,'234','289dff07669d7a23de0ef88d2f7129e7','2014-09-22 22:19:15'),(15,'111','698d51a19d8a121ce581499d7b701668','2014-09-22 22:20:06'),(16,'3','eccbc87e4b5ce2fe28308fd9f2a7baf3','2014-09-22 22:35:30'),(17,'4','a87ff679a2f3e71d9181a67b7542122c','2014-09-22 22:43:30'),(18,'ana','cf886fb16b28eed1395218ce62b8509f','2014-09-23 05:32:18'),(19,'ana123','5390489da3971cbbcd22c159d54d24da','2014-09-23 05:32:33');
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

-- Dump completed on 2014-09-23  0:53:49
