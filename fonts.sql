/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: logomaker
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-ubu2204

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fonts`
--

DROP TABLE IF EXISTS `fonts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fonts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonts`
--

LOCK TABLES `fonts` WRITE;
/*!40000 ALTER TABLE `fonts` DISABLE KEYS */;
INSERT INTO `fonts` VALUES
(21,'Stifly.ttf','stifly.ttf','2024-08-17 15:23:19','2024-08-17 15:23:19'),
(22,'Rohgaz-DemoVersion-Regular.ttf','rohgaz-demoversion-regular.ttf','2024-08-17 15:23:29','2024-08-17 15:23:29'),
(23,'Poppins-Regular.ttf','poppins-regular.ttf','2024-08-17 15:23:46','2024-08-17 15:23:46'),
(24,'Light Sport DEMO.otf','light-sport-demo.otf','2024-08-17 17:58:30','2024-08-17 17:58:30'),
(25,'GOWES-PersonalUse.otf','gowes-personaluse.otf','2024-08-17 18:06:19','2024-08-17 18:06:19'),
(26,'THUNKY DEMO.OTF','thunky-demo.OTF','2024-08-19 12:16:35','2024-08-19 12:16:35'),
(27,'SUGAR PEACHY DEMO.OTF','sugar-peachy-demo.OTF','2024-08-19 12:37:13','2024-08-19 12:37:13'),
(28,'Thunky DEMO.otf','thunky-demo.otf','2024-08-19 13:53:18','2024-08-19 13:53:18'),
(29,'Klemer Display DEMO.ttf','klemer-display-demo.ttf','2024-08-19 14:05:58','2024-08-19 14:05:58'),
(30,'The Auratype DEMO.otf','the-auratype-demo.otf','2024-08-19 14:12:59','2024-08-19 14:12:59'),
(31,'Raleway-ExtraBold.ttf','raleway-extrabold.ttf','2024-08-19 14:28:19','2024-08-19 14:28:19'),
(32,'Raleway-ExtraBold.ttf','raleway-extrabold.ttf','2024-08-19 14:36:46','2024-08-19 14:36:46');
/*!40000 ALTER TABLE `fonts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-21 15:42:51
