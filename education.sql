-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: education
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.04.1

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `exercises_id` int(10) unsigned NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `is_right` int(10) DEFAULT '0',
  `number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`exercises_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_answer_exercises1_idx` (`exercises_id`),
  CONSTRAINT `fk_answer_exercises1` FOREIGN KEY (`exercises_id`) REFERENCES `exercises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'1',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0,NULL),(2,'2',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0,NULL),(3,'3',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0,NULL),(4,'4',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0,NULL),(5,'A. have suffered from',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0,NULL),(6,'B. suffered',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0,NULL),(7,'C. have suffered',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0,NULL),(8,'D. suffered from',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0,NULL),(9,'A. have suffered from',8,'2014-01-09 00:28:17','2014-01-09 00:28:17',1,NULL),(10,'A. have suffered from',9,'2014-01-09 00:28:35','2014-01-09 00:28:35',1,NULL),(11,'B. suffered',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL,NULL),(12,'C. have suffered',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL,NULL),(13,'D. suffered fromA. have suffered from',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL,NULL),(14,'A. have suffered from',14,'2014-01-09 00:31:57','2014-01-09 00:31:57',1,NULL),(15,'A. have suffered from',15,'2014-01-09 00:32:14','2014-01-09 00:32:14',1,NULL),(16,'A. have suffered from',16,'2014-01-09 00:34:49','2014-01-09 00:34:49',1,NULL),(17,'A. have suffered from',17,'2014-01-09 00:35:27','2014-01-09 00:35:27',1,NULL),(18,'11',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',1,NULL),(19,'111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',1,NULL),(20,'111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',0,NULL),(21,'1111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',0,NULL),(22,'1111',19,'2014-01-11 23:57:16','2014-01-11 23:57:16',1,NULL),(23,'2222',19,'2014-01-11 23:57:16','2014-01-11 23:57:16',0,NULL),(24,'3333',19,'2014-01-11 23:57:16','2014-01-11 23:57:16',0,NULL),(25,'4444',19,'2014-01-11 23:57:16','2014-01-11 23:57:16',0,NULL),(26,'112',20,'2014-01-20 23:22:04','2014-01-20 23:22:04',0,'A'),(27,'2222',20,'2014-01-20 23:22:04','2014-01-20 23:22:04',0,'B'),(28,'safkj',20,'2014-01-20 23:22:04','2014-01-20 23:22:04',0,'C'),(29,'daskjfak',20,'2014-01-20 23:22:04','2014-01-20 23:22:04',0,'D'),(30,'daskjfdsa',20,'2014-01-20 23:22:04','2014-01-20 23:22:04',0,'E'),(31,'111',21,'2014-01-20 23:30:52','2014-01-20 23:30:52',0,'A'),(32,'111',21,'2014-01-20 23:30:52','2014-01-20 23:30:52',0,'B'),(33,'1111',21,'2014-01-20 23:30:52','2014-01-20 23:30:52',0,'C'),(34,'1111',21,'2014-01-20 23:30:52','2014-01-20 23:30:52',0,'D'),(35,'1111',21,'2014-01-20 23:30:52','2014-01-20 23:30:52',0,'E'),(36,'aaaaaa',22,'2014-01-21 00:01:12','2014-01-21 00:01:12',0,'a'),(37,'bbbbbbb',22,'2014-01-21 00:01:12','2014-01-21 00:01:12',0,'b'),(38,'ccccccc',22,'2014-01-21 00:01:12','2014-01-21 00:01:12',0,'c'),(39,'ddddddd',22,'2014-01-21 00:01:12','2014-01-21 00:01:12',0,'d'),(40,'eeeeeeee',22,'2014-01-21 00:01:12','2014-01-21 00:01:12',0,'e'),(41,'2222222',23,'2014-01-21 00:01:41','2014-01-21 00:01:41',0,'a'),(42,'222222222',23,'2014-01-21 00:01:41','2014-01-21 00:01:41',0,'b'),(43,'333333333333',23,'2014-01-21 00:01:41','2014-01-21 00:01:41',0,'c'),(44,'44444444444444',23,'2014-01-21 00:01:41','2014-01-21 00:01:41',0,'d'),(45,'5555555555555',23,'2014-01-21 00:01:41','2014-01-21 00:01:41',0,'e');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (2,9,'ddsadadas',2,'2014-01-08 13:09:04','2014-01-08 13:09:04'),(3,9,'sdafsfsfsdsfs',2,'2014-01-08 13:11:14','2014-01-08 13:11:14'),(4,9,'sdffssf',2,'2014-01-08 13:12:06','2014-01-08 13:12:06'),(5,2,'safdsafsadf',9,'2014-01-08 13:13:32','2014-01-08 13:13:32'),(6,2,'ddddd',9,'2014-01-08 13:33:25','2014-01-08 13:33:25'),(7,2,'dsfsafsaf',9,'2014-01-08 13:59:14','2014-01-08 13:59:14'),(8,2,'jhgkhjk',9,'2014-01-08 17:01:24','2014-01-08 17:01:24');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compositions`
--

DROP TABLE IF EXISTS `compositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compositions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compositions`
--

LOCK TABLES `compositions` WRITE;
/*!40000 ALTER TABLE `compositions` DISABLE KEYS */;
/*!40000 ALTER TABLE `compositions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `answers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exams`
--

LOCK TABLES `exams` WRITE;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
INSERT INTO `exams` VALUES (8,'2014-01-21 02:34:53','2014-01-21 02:34:58',2,3,'22+b;23+b;','','2014-01-20 18:34:53','2014-01-20 18:34:58'),(9,'2014-01-21 02:45:43','2014-01-21 02:45:47',2,3,'22+b;23+b;','','2014-01-20 18:45:43','2014-01-20 18:45:47'),(10,'2014-01-22 00:40:02','2014-01-22 00:40:06',2,3,'22+a;23+d;','','2014-01-21 16:40:02','2014-01-21 16:40:06'),(11,'2014-01-22 07:56:45','2014-01-22 08:26:45',2,3,'','','2014-01-21 23:56:45','2014-01-21 23:56:45'),(12,'2014-01-22 15:55:17','2014-01-22 16:25:17',2,1,'','','2014-01-22 07:55:17','2014-01-22 07:55:17'),(13,'2014-01-22 15:55:21','2014-01-22 16:25:21',2,3,'','','2014-01-22 07:55:21','2014-01-22 07:55:21'),(14,'2014-01-22 15:55:32','2014-01-22 16:25:32',2,2,'','','2014-01-22 07:55:32','2014-01-22 07:55:32'),(15,'2014-01-22 15:55:40','2014-01-22 16:25:40',2,1,'','','2014-01-22 07:55:40','2014-01-22 07:55:40'),(16,'2014-01-22 15:55:44','2014-01-22 16:25:44',2,2,'','','2014-01-22 07:55:44','2014-01-22 07:55:44'),(17,'2014-01-22 15:56:07','2014-01-22 15:56:11',2,3,'22+b;23+b;','','2014-01-22 07:56:07','2014-01-22 07:56:11'),(18,'2014-01-22 16:00:48','2014-01-22 16:00:52',2,3,'22+d;23+d;','0','2014-01-22 08:00:48','2014-01-22 08:00:52'),(19,'2014-01-22 16:49:49','2014-01-22 16:53:00',2,3,'22+a;23+b;','0','2014-01-22 08:49:49','2014-01-22 08:53:00'),(20,'2014-01-22 16:53:09','2014-01-22 16:53:46',2,3,'22+a;23+b;','0','2014-01-22 08:53:09','2014-01-22 08:53:46'),(21,'2014-01-22 16:54:14','2014-01-22 16:54:21',2,3,'22+a;23+b;','0','2014-01-22 08:54:14','2014-01-22 08:54:21'),(22,'2014-01-22 16:54:58','2014-01-22 16:55:03',2,3,'22+a;23+b;','0','2014-01-22 08:54:58','2014-01-22 08:55:03'),(23,'2014-01-22 16:55:47','2014-01-22 16:55:51',2,3,'22+a;23+b;','0','2014-01-22 08:55:47','2014-01-22 08:55:51'),(24,'2014-01-22 16:56:24','2014-01-22 16:56:29',2,3,'22+a;23+b;','0','2014-01-22 08:56:24','2014-01-22 08:56:29'),(25,'2014-01-22 16:56:53','2014-01-22 16:57:20',2,3,'22+a;23+b;','0','2014-01-22 08:56:53','2014-01-22 08:57:20'),(26,'2014-01-22 16:58:17','2014-01-22 17:18:28',2,3,'22+a;23+b;','2','2014-01-22 08:58:17','2014-01-22 09:18:28'),(27,'2014-01-22 17:23:05','2014-01-22 17:53:05',2,3,'','','2014-01-22 09:23:05','2014-01-22 09:23:05'),(28,'2014-01-22 17:24:06','2014-02-17 05:20:38',2,3,'22+a;23+b;','2','2014-01-22 09:24:06','2014-02-16 21:20:38'),(29,'2014-02-17 06:39:00','2014-02-17 07:09:00',2,1,'','','2014-02-16 22:39:00','2014-02-16 22:39:00');
/*!40000 ALTER TABLE `exams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `paper_id` int(10) unsigned NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `right_answer` varchar(50) DEFAULT NULL,
  `hard` int(10) DEFAULT NULL,
  `note` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`paper_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_exercises_paper_idx` (`paper_id`),
  CONSTRAINT `fk_exercises_paper` FOREIGN KEY (`paper_id`) REFERENCES `papers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (5,'2','2222',1,'2014-01-08 22:52:14','2014-01-08 23:15:53',NULL,NULL,NULL),(6,'1','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-08 22:59:04','2014-01-08 22:59:04',NULL,NULL,NULL),(7,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:06','2014-01-09 00:28:06',NULL,NULL,NULL),(8,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:17','2014-01-09 00:28:17',NULL,NULL,NULL),(9,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:35','2014-01-09 00:28:35',NULL,NULL,NULL),(10,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:43','2014-01-09 00:28:43',NULL,NULL,NULL),(11,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL,NULL,NULL),(12,'4','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:22','2014-01-09 00:31:22',NULL,NULL,NULL),(13,'5','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:43','2014-01-09 00:31:43',NULL,NULL,NULL),(14,'5','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:57','2014-01-09 00:31:57',NULL,NULL,NULL),(15,'6','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:32:14','2014-01-09 00:32:14',NULL,NULL,NULL),(16,'6','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:34:49','2014-01-09 00:34:49',NULL,NULL,NULL),(17,'7','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:35:27','2014-01-09 00:35:27',NULL,NULL,NULL),(18,'111','1111',1,'2014-01-09 00:56:31','2014-01-09 00:56:31',NULL,NULL,NULL),(19,'1','11111',2,'2014-01-11 23:57:16','2014-01-11 23:57:16',NULL,NULL,NULL),(20,'A','11111',1,'2014-01-20 23:22:04','2014-01-20 23:22:04',NULL,NULL,NULL),(21,'1111','1111',2,'2014-01-20 23:30:52','2014-01-20 23:30:52','A',NULL,NULL),(22,'1','abcdefg',3,'2014-01-21 00:01:12','2014-01-21 00:01:12','a',NULL,NULL),(23,'2','22222222222222222222',3,'2014-01-21 00:01:41','2014-01-21 00:01:41','b',NULL,NULL);
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homeworks`
--

DROP TABLE IF EXISTS `homeworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homeworks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exercise_ids` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homeworks`
--

LOCK TABLES `homeworks` WRITE;
/*!40000 ALTER TABLE `homeworks` DISABLE KEYS */;
INSERT INTO `homeworks` VALUES (1,'2222','',0,'2014-01-20 20:15:21','2014-01-20 20:15:21','TEST'),(2,'222','',0,'2014-01-20 20:15:51','2014-01-20 20:15:51','TEST'),(3,'1111','',0,'2014-01-20 20:16:05','2014-01-20 20:16:05','TEST'),(4,'2222','Array',0,'2014-01-20 20:18:50','2014-01-20 20:18:50','TEST'),(5,'2222','Array',0,'2014-01-20 20:19:22','2014-01-20 20:19:22','TEST'),(6,'1111','',0,'2014-01-20 20:20:40','2014-01-20 20:20:40','TEST'),(7,'1111','5,6',0,'2014-01-20 20:25:16','2014-01-20 20:25:16','TEST'),(8,'111','5,6,7',0,'2014-01-20 20:26:35','2014-01-20 20:26:35','HOMEWORK');
/*!40000 ALTER TABLE `homeworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `is_read` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'11','111',1,'2222',1,'2014-01-08 10:09:30','2014-01-08 10:09:30'),(2,'111','111',0,'111',2,'2014-01-21 08:32:22','2014-01-21 08:32:22');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2013_11_04_064301_create_users_table',1),('2013_11_04_071957_create_tweets_table',2),('2013_12_26_150325_create_topics_table',3),('2013_12_29_030300_create_videos_table',4),('2014_01_05_130719_create_papers_table',5),('2014_01_05_130836_create_exercises_table',6),('2014_01_05_130926_create_answers_table',6),('2014_01_08_142111_create_news_table',6),('2014_01_08_174201_create_messages_table',7),('2014_01_08_181536_create_mywords_table',8),('2014_01_08_181624_create_words_table',8),('2014_01_08_204439_create_comments_table',9),('2014_01_11_135848_create_teachers_table',10),('2014_01_11_152633_create_plans_table',11),('2014_01_19_021314_create_plan_tasks_table',12),('2014_01_19_035724_create_payments_table',13),('2014_01_20_234038_create_exams_table',14),('2014_01_21_032201_create_excersicesets_table',15),('2014_01_21_033615_create_homeworks_table',16),('2014_01_21_151111_create_userplans_table',17),('2014_01_21_153308_create_reports_table',18),('2014_01_21_153455_create_compositions_table',19),('2014_01_21_154216_create_userteachers_table',20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mywords`
--

DROP TABLE IF EXISTS `mywords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chinese` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mywords`
--

LOCK TABLES `mywords` WRITE;
/*!40000 ALTER TABLE `mywords` DISABLE KEYS */;
/*!40000 ALTER TABLE `mywords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `overlay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (5,'22','2013-1-1','111','111','2014-01-08 15:49:09','2014-01-08 15:49:09','/uploads/news/JyEUUF_thumb (2).jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `papers`
--

DROP TABLE IF EXISTS `papers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `papers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `published_date` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papers`
--

LOCK TABLES `papers` WRITE;
/*!40000 ALTER TABLE `papers` DISABLE KEYS */;
INSERT INTO `papers` VALUES (1,'2013nian shjua','2013-1-1','2014-01-05 16:26:52','2014-01-05 16:26:52',NULL),(2,'201309yufa','201309','2014-01-11 23:56:35','2014-01-11 23:56:35','语法'),(3,'SAT水平测试卷','2014.1.1','2014-01-20 23:50:47','2014-01-20 23:50:47','整套');
/*!40000 ALTER TABLE `papers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `fee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (4,'exam',6,'30',180,2,'2014-01-20 14:29:07','2014-01-20 14:29:07');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_tasks`
--

DROP TABLE IF EXISTS `plan_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `plan_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_tasks`
--

LOCK TABLES `plan_tasks` WRITE;
/*!40000 ALTER TABLE `plan_tasks` DISABLE KEYS */;
INSERT INTO `plan_tasks` VALUES (9,'1','3','1','TEST','2014-01-21 07:06:20','2014-01-21 07:06:20',5),(10,'1','3','8','HOMEWORK','2014-02-16 22:41:02','2014-02-16 22:41:02',8),(11,'6','8','8','HOMEWORK','2014-02-16 22:41:16','2014-02-16 22:41:16',8);
/*!40000 ALTER TABLE `plan_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `days` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_sprint` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` VALUES (1,'','HOMEWORK','2014-01-18 18:05:17','2014-01-18 18:05:17',20,'zuoyemoban',0),(2,'','HOMEWORK','2014-01-18 18:42:50','2014-01-18 18:42:50',30,'zuoyemoban',1),(3,'','HOMEWORK','2014-01-18 18:52:53','2014-01-18 18:52:53',2222,'2222',0),(4,'','TEST','2014-01-18 18:54:13','2014-01-18 18:54:13',11,'111',0),(5,'','TEST','2014-01-18 18:55:09','2014-01-18 18:55:09',222,'222',0),(6,'','TEST','2014-01-18 18:55:53','2014-01-18 18:55:53',222,'222',0),(7,'','TEST','2014-01-18 18:56:17','2014-01-18 18:56:17',222,'222',0),(8,'','HOMEWORK','2014-01-18 18:57:27','2014-01-18 18:57:27',60,'vissul',0),(9,'','HOMEWORK','2014-01-20 14:26:57','2014-01-20 14:26:57',30,'1111',1);
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (2,'wanglei','wanglei','$2y$08$NmK7yOYnbPXCB1enpyaOiO.jO3ocmOOQw/kSJEu5DpA6bSRX241yu','2014-01-11 06:26:12','2014-01-11 06:26:12'),(3,'vissul','vissul','$2y$08$YGBkkgcNcGYw1WjymoFIM.NaUThgfCY3ALuO3rq/IuhwIU6kvgKPu','2014-02-16 21:47:24','2014-02-16 21:47:24'),(4,'wanglei1','wanglei1','$2y$08$HZyVcYW9NuxOo0lCXPJdLe3XzPY3X9PD9ejScuZajB7mXngqU4AOC','2014-02-16 21:59:15','2014-02-16 21:59:15'),(5,'wanglei2','wanglei2','eyJpdiI6IlRXNXNnNk0yZG9aWjNRSENRV09JT1wvY1VzT2xLNTNJN2x6cmtyTUoyeEhZPSIsInZhbHVlIjoiZWZWbmVTXC9ZRUluNGNod29IRlpHYjIzTlExa2xqazg4XC9jWWh6Q1RVN1pNPSIsIm1hYyI6IjQ3YTEyM2FmOGI0Y2IyOTI4ZGJlYTA4NmI5MWUwYzU0NjAzZGY1MmJlZDEwNTM2MTI4NjNmODEwN2NlNWY0NjQifQ==','2014-02-16 22:06:56','2014-02-16 22:06:56'),(6,'wanglei3','wanglei3','eyJpdiI6IkJ4K05IKzlRek45dlYxeGc1dEN4cmlJU1RSZzRpMStxajhHSERtWUtkTTg9IiwidmFsdWUiOiJBUGIrM3dWbUxTTVdYeFM0dlB5Vm1QakdMaE4zUFVZQVd0WVhRbHpsYWdNPSIsIm1hYyI6IjJkNTVjMTEzMDc1MmMyMmVjYWYxY2Q1ZjEwODllOGUxYTY3Zjc2OGIyMzI2NWM0MGFjMmI2YzgyMzRlMTY4MTIifQ==','2014-02-16 22:12:57','2014-02-16 22:12:57'),(7,'wanglei4','wanglei4','woaixuexi','2014-02-16 22:14:34','2014-02-16 22:14:34');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (7,'111','111','111','111',111,'111','2013-12-26 07:39:13','2013-12-26 07:39:13'),(8,'222','222','222','222',222,'2222','2014-01-08 10:12:49','2014-01-08 10:12:49'),(9,'222','222','222','2222',222,'2222','2014-01-08 10:13:17','2014-01-08 10:13:17');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userplans`
--

DROP TABLE IF EXISTS `userplans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userplans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userplans`
--

LOCK TABLES `userplans` WRITE;
/*!40000 ALTER TABLE `userplans` DISABLE KEYS */;
INSERT INTO `userplans` VALUES (3,2,8,'2014-01-21 23:42:10','2014-01-21 23:42:10');
/*!40000 ALTER TABLE `userplans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dream_school` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sat_hope_grade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `study_time_everyweek` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `learn_words` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hope_learn_words` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hope_compisition_times` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user@example.com','vissul','2014-01-04 16:16:31','2014-01-04 16:16:31','woaixuexi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'gvissul@gmail.com','name','2014-01-04 16:22:37','2014-01-20 18:43:19','woaixuexi','11','','1111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'2222','2222','2014-01-04 17:19:44','2014-01-04 17:25:20','222211',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'111','111','2014-01-04 17:28:12','2014-01-04 17:28:12','1111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'user@example.com111','111','2014-01-05 04:17:32','2014-01-05 04:17:32','111111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'222','222','2014-01-08 06:19:07','2014-01-08 06:19:07','2222',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'gvissul@gmail.com11','vissul','2014-01-08 11:04:26','2014-01-08 11:04:26','woaixuexi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'wanglei','wanglei','2014-01-20 14:30:07','2014-01-20 14:30:07','12345678',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userteachers`
--

DROP TABLE IF EXISTS `userteachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userteachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userteachers`
--

LOCK TABLES `userteachers` WRITE;
/*!40000 ALTER TABLE `userteachers` DISABLE KEYS */;
INSERT INTO `userteachers` VALUES (1,1,2,'2014-01-21 08:11:14','2014-01-21 08:11:14');
/*!40000 ALTER TABLE `userteachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `overlay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (9,'222','http://player.youku.com/player.php/sid/XNjYwMjY2NTg0/v.swf','2014-01-08 12:27:47','2014-01-08 12:27:47','/uploads/videos/xnL01C_thumb.jpg','222');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chinese` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words`
--

LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (1,'wode','mine','2014-01-08 10:31:26','2014-01-08 10:31:26');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-17 14:52:40
