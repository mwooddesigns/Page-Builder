-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: page-builder
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `page_id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `headline` varchar(200) DEFAULT NULL,
  `subhead` varchar(200) DEFAULT NULL,
  `content_one` varchar(1000) DEFAULT NULL,
  `content_two` varchar(1000) DEFAULT NULL,
  `content_three` varchar(1000) DEFAULT NULL,
  `content_four` varchar(1000) DEFAULT NULL,
  `content_five` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (3,123,'Get Your Forex Ebook + Live Webinar Access FREE','100% Crucial Tips for Every Trader Looking to Succeed in This Market','<h1>Heading 1</h1><h2>Subhead</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus pretium urna, in pellentesque purus. Nunc arcu diam, sollicitudin nec nisl id, porttitor congue ex. Cras feugiat lobortis felis, sed dapibus ligula varius id. Duis suscipit sapien lectus, at feugiat urna sollicitudin a. Sed sapien erat, feugiat in ipsum nec, tempus rhoncus magna. Aliquam gravida dolor ac felis hendrerit, nec sollicitudin felis bibendum. Aenean felis augue, auctor a dictum eget, fermentum non nisi.</p><p>Lorem ipsum dolor sit amet:</p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Sed dapibus pretium urna, in pellentesque purus.</li><li>Nunc arcu diam, sollicitudin nec nisl id, porttitor congue ex.</li></ul>',NULL,NULL,NULL,NULL),(8,123,'Testing another template','Awwww yeah','Here is where some primary content would go if I had any!','Aint nobody got time to write meaningful content!',NULL,NULL,NULL),(9,123,'Woo Plugins!','Using a nifty visual editor','<h1>Heading About a Cool eBook</h1>\r\n\r\n<h2>Look at that form! -&gt;</h2>\r\n\r\n<p>Reasons you should fill it out:</p>\r\n\r\n<ul>\r\n	<li>Free stuff!</li>\r\n	<li>Creepy tracking!</li>\r\n	<li>More advertisements you won&#39;t read!</li>\r\n</ul>\r\n','',NULL,NULL,NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(100) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `head_content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (3,'Test Page','Basic-2-col','mwood',''),(8,'Test 3 Col','Basic-3-col','mwood',''),(9,'Testing CKEditor','Basic-2-col','mwood','');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mwood','Password123');
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

-- Dump completed on 2016-03-22 10:05:50
