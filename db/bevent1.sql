-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: bevent
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,2,'additional_2_fc94902fe354b23d.png','2_fc94902fe354b23d.png','2019-02-18 09:54:57','2019-02-18 09:54:57'),(2,2,'additional_2_97719cfb00e7f519.png','2_97719cfb00e7f519.png','2019-02-18 09:54:57','2019-02-18 09:54:57'),(3,2,'additional_2_5bf3ec64360dd351.png','2_5bf3ec64360dd351.png','2019-02-18 09:54:57','2019-02-18 09:54:57'),(4,2,'additional_2_4e23295375b253c3.png','2_4e23295375b253c3.png','2019-02-18 09:54:57','2019-02-18 09:54:57'),(5,1,'additional_1_c9fc08af28fa60f1.png','1_c9fc08af28fa60f1.png','2019-02-18 09:55:18','2019-02-18 09:55:18'),(6,1,'additional_1_b6b9cd60747968b2.png','1_b6b9cd60747968b2.png','2019-02-18 09:55:18','2019-02-18 09:55:18'),(7,1,'additional_1_75a5f366885b5184.png','1_75a5f366885b5184.png','2019-02-18 09:55:18','2019-02-18 09:55:18'),(8,1,'additional_1_2edee985e58323e9.png','1_2edee985e58323e9.png','2019-02-18 09:55:18','2019-02-18 09:55:18'),(9,3,'additional_3_dfd730cbb5e0e914.png','3_dfd730cbb5e0e914.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(10,3,'additional_3_50e9d797c4f60fed.png','3_50e9d797c4f60fed.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(11,3,'additional_3_ade442f123b48db2.png','3_ade442f123b48db2.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(12,3,'additional_3_326fb4a7c952a35e.png','3_326fb4a7c952a35e.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(13,3,'additional_3_6868c6992ccfab88.png','3_6868c6992ccfab88.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(14,3,'additional_3_689fc42cf3c7b0b6.png','3_689fc42cf3c7b0b6.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(15,3,'additional_3_ddbfcbf792614baf.png','3_ddbfcbf792614baf.png','2019-02-18 10:05:46','2019-02-18 10:05:46'),(16,3,'additional_3_aeb0260d9ff3f366.png','3_aeb0260d9ff3f366.png','2019-02-18 10:05:46','2019-02-18 10:05:46');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_02_04_144614_create_images_table',1),(4,'2019_02_05_074159_create_sliders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('admin@gmail.com','$2y$10$u9kD/LynS3PyLaXcGjzzY.hzgcjJpgWn2KeGLbqGDDxxcHj2L1hF2','2019-02-13 02:07:19');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portfolios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `event_address` text,
  `event_date` datetime DEFAULT NULL,
  `client_feedback` text,
  `priority` int(3) DEFAULT NULL,
  `banner` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` VALUES (1,'Singapore International Film Festival','Singapore, Capitol Theatre','2018-12-08 00:00:00','Client feedback1',1,'1.png','2019-02-18 09:51:15','2019-02-23 14:32:49'),(2,'Event 2','Event 2','2019-02-01 00:00:00','Event 2',2,'2.png','2019-02-18 09:51:44','2019-02-18 09:51:44'),(3,'Event -3','Event 3','2019-02-01 00:00:00','Client Feedback',3,'3.png','2019-02-18 10:04:55','2019-02-18 10:04:55'),(4,'Event 4','Event','2019-02-21 00:00:00','Client Feedback',1,'4.png','2019-02-18 10:06:53','2019-02-18 10:06:53');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT '0',
  `main_text` text COLLATE utf8mb4_unicode_ci,
  `sub_text` text COLLATE utf8mb4_unicode_ci,
  `path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (9,'Slider-9',1,'Welcome','Let’s start something Brilliant together!','9.png','2019-02-18 10:04:11','2019-02-23 13:18:43'),(11,'Slider-10',2,'Welcome','Let’s start something Brilliant together!','11.png','2019-02-23 13:24:21','2019-02-23 13:24:21');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','awadhesh@techphant.com','$2y$10$A3yIqn1emqWNTHFK1XvkY.TMoumPybHO67uaYvWAUn3XQeWtMn1em','EAJk5dFtsir7C8zorZpHzhNHjz9i2K1jQO3sHW8788lNYWTYulHWWgWoecqE','2019-02-05 02:17:27','2019-02-05 05:19:59'),(2,'Administrator','admin@gmail.com','$2y$10$aEa5yWuLu/I3BiOiZRbJXOg1BtON7fM7kP43olmzSH6OkfQGcdEG2','mkjIzfVyid3lyXqONELzGXBPd4PEqizYHLa1g8PPK6YMsiRcBlIIrZWLXWYp','2019-02-05 09:55:12','2019-02-05 09:55:12');
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

-- Dump completed on 2019-03-01 10:06:47
