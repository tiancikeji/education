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
  PRIMARY KEY (`id`,`exercises_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_answer_exercises1_idx` (`exercises_id`),
  CONSTRAINT `fk_answer_exercises1` FOREIGN KEY (`exercises_id`) REFERENCES `exercises` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'1',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0),(2,'2',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0),(3,'3',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0),(4,'4',5,'2014-01-08 22:52:14','2014-01-08 22:52:14',0),(5,'A. have suffered from',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0),(6,'B. suffered',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0),(7,'C. have suffered',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0),(8,'D. suffered from',6,'2014-01-08 22:59:04','2014-01-08 22:59:04',0),(9,'A. have suffered from',8,'2014-01-09 00:28:17','2014-01-09 00:28:17',1),(10,'A. have suffered from',9,'2014-01-09 00:28:35','2014-01-09 00:28:35',1),(11,'B. suffered',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL),(12,'C. have suffered',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL),(13,'D. suffered fromA. have suffered from',11,'2014-01-09 00:29:59','2014-01-09 00:29:59',NULL),(14,'A. have suffered from',14,'2014-01-09 00:31:57','2014-01-09 00:31:57',1),(15,'A. have suffered from',15,'2014-01-09 00:32:14','2014-01-09 00:32:14',1),(16,'A. have suffered from',16,'2014-01-09 00:34:49','2014-01-09 00:34:49',1),(17,'A. have suffered from',17,'2014-01-09 00:35:27','2014-01-09 00:35:27',1),(18,'11',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',1),(19,'111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',1),(20,'111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',0),(21,'1111',18,'2014-01-09 00:56:31','2014-01-09 00:56:31',0);
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
  PRIMARY KEY (`id`,`paper_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_exercises_paper_idx` (`paper_id`),
  CONSTRAINT `fk_exercises_paper` FOREIGN KEY (`paper_id`) REFERENCES `papers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (5,'2','2222',1,'2014-01-08 22:52:14','2014-01-08 23:15:53'),(6,'1','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-08 22:59:04','2014-01-08 22:59:04'),(7,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:06','2014-01-09 00:28:06'),(8,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:17','2014-01-09 00:28:17'),(9,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:35','2014-01-09 00:28:35'),(10,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:28:43','2014-01-09 00:28:43'),(11,'3','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:29:59','2014-01-09 00:29:59'),(12,'4','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:22','2014-01-09 00:31:22'),(13,'5','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:43','2014-01-09 00:31:43'),(14,'5','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:31:57','2014-01-09 00:31:57'),(15,'6','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:32:14','2014-01-09 00:32:14'),(16,'6','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:34:49','2014-01-09 00:34:49'),(17,'7','As a result of the heavy rain, the whole city ______ great losses',1,'2014-01-09 00:35:27','2014-01-09 00:35:27'),(18,'111','1111',1,'2014-01-09 00:56:31','2014-01-09 00:56:31');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'11','111',1,'2222',1,'2014-01-08 10:09:30','2014-01-08 10:09:30');
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
INSERT INTO `migrations` VALUES ('2013_11_04_064301_create_users_table',1),('2013_11_04_071957_create_tweets_table',2),('2013_12_26_150325_create_topics_table',3),('2013_12_29_030300_create_videos_table',4),('2014_01_05_130719_create_papers_table',5),('2014_01_05_130836_create_exercises_table',6),('2014_01_05_130926_create_answers_table',6),('2014_01_08_142111_create_news_table',6),('2014_01_08_174201_create_messages_table',7),('2014_01_08_181536_create_mywords_table',8),('2014_01_08_181624_create_words_table',8),('2014_01_08_204439_create_comments_table',9);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papers`
--

LOCK TABLES `papers` WRITE;
/*!40000 ALTER TABLE `papers` DISABLE KEYS */;
INSERT INTO `papers` VALUES (1,'2013nian shjua','2013-1-1','2014-01-05 16:26:52','2014-01-05 16:26:52');
/*!40000 ALTER TABLE `papers` ENABLE KEYS */;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user@example.com','vissul','2014-01-04 16:16:31','2014-01-04 16:16:31','woaixuexi'),(2,'gvissul@gmail.com','name','2014-01-04 16:22:37','2014-01-04 16:22:37','woaixuexi'),(4,'2222','2222','2014-01-04 17:19:44','2014-01-04 17:25:20','222211'),(5,'111','111','2014-01-04 17:28:12','2014-01-04 17:28:12','1111'),(6,'user@example.com111','111','2014-01-05 04:17:32','2014-01-05 04:17:32','111111'),(7,'222','222','2014-01-08 06:19:07','2014-01-08 06:19:07','2222'),(8,'gvissul@gmail.com11','vissul','2014-01-08 11:04:26','2014-01-08 11:04:26','woaixuexi');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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

-- Dump completed on 2014-01-09  9:07:37
