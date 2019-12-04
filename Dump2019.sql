-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `about_team_slide_data`
--

DROP TABLE IF EXISTS `about_team_slide_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_team_slide_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slide_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_team_slide_data`
--

LOCK TABLES `about_team_slide_data` WRITE;
/*!40000 ALTER TABLE `about_team_slide_data` DISABLE KEYS */;
INSERT INTO `about_team_slide_data` VALUES (1,'testing_slide_data','5dc10c1043ef8.png','2019-11-05 00:13:44','2019-11-05 00:13:44'),(2,'asdsad','5dc14f7078de6.jpeg','2019-11-05 05:01:12','2019-11-05 05:01:12'),(3,'testing_slide_data','5dc26d67ae19c.jpeg','2019-11-06 01:21:19','2019-11-06 01:21:19'),(4,'asdsad','5dc26dbe8ba4c.png','2019-11-06 01:22:46','2019-11-06 01:22:46'),(5,'asdsad','5dc26f34622ce.jpeg','2019-11-06 01:29:00','2019-11-06 01:29:00'),(6,'agsdfg','5dc27604d1185.jpeg','2019-11-06 01:58:04','2019-11-06 01:58:04');
/*!40000 ALTER TABLE `about_team_slide_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_who_we_ares`
--

DROP TABLE IF EXISTS `about_who_we_ares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_who_we_ares` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_who_we_ares`
--

LOCK TABLES `about_who_we_ares` WRITE;
/*!40000 ALTER TABLE `about_who_we_ares` DISABLE KEYS */;
INSERT INTO `about_who_we_ares` VALUES (17,'Who We Are?','<header style=\"font-family: Poppins; font-size: 16px;\"><div class=\"submitted\">By&nbsp;<span lang=\"\" about=\"/user/philipnorton42\" typeof=\"schema:Person\" property=\"schema:name\" datatype=\"\">philipnorton42</span>&nbsp;on 25th D<span style=\"background-color: rgb(255, 255, 0);\">ecember 2007</span></div></header><div class=\"content\" style=\"font-family: Poppins; font-size: 16px;\"><div class=\"field field--name-body field--type-text-with-summary field--label-hidden field__item\" style=\"margin-top: 25px; margin-bottom: 25px;\"><p style=\"margin-top: 3px;\"><span style=\"background-color: rgb(255, 255, 0);\">To find if a number is odd or e</span>ven you can use one of two operators.</p><p style=\"margin-top: 3px;\">The modulo operator (% in PHP) can be used to calculate the remainder of the value divided by 2. This gives a v<u>alue of 0 f</u>or even num<span style=\"font-family: Montserrat;\">bers and a value of 1 for </span>odd numbers. This can be used in an if statement as 0 will equ<b>ate to false and 1 </b>will equate to true.</p></div></div>','5dbbd54502c32.jpeg','2019-11-01 01:18:37','2019-11-01 01:18:37'),(18,'This is a free online calculator','<p style=\"margin-top: 3px; font-family: Poppins; font-size: 16px;\">The second method is to use the &amp; (AND) operator with the number 1. This will perform a bitwise calculation on the number and 1, returning 0 if the number is even and 1 if the number is false. So using the same if statement logic as before we can write.</p><div class=\"geshifilter\" style=\"padding: 0px; margin: 10px 0px; border: 1px solid rgb(204, 204, 204); background-color: rgb(248, 248, 248); color: rgb(34, 34, 34); line-height: 1.3; overflow: auto; font-family: Poppins; font-size: 16px;\"><pre class=\"php geshifilter-php\" style=\"font-family: monospace; font-size: 1em; border: none; margin-bottom: 0px; padding: 0px; line-height: 1.3;\"><ol style=\"padding: 0px 0px 0px 3em; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-position: outside; line-height: 1.3;\"><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray;\"><div class=\"de1\" style=\"margin-left: 5px;\"><span class=\"re0\" style=\"color: rgb(0, 0, 136);\">$value</span> <span class=\"sy0\" style=\"color: rgb(51, 153, 51);\">=</span> <span class=\"nu0\" style=\"color: rgb(204, 102, 204);\">10</span><span class=\"sy0\" style=\"color: rgb(51, 153, 51);\">;</span></div></li><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray; background-color: rgb(255, 255, 255);\"><div class=\"de1\" style=\"margin-left: 5px;\"><span class=\"kw1\" style=\"color: rgb(177, 177, 0);\">if</span><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">(</span><span class=\"re0\" style=\"color: rgb(0, 0, 136);\">$value</span><span class=\"sy0\" style=\"color: rgb(51, 153, 51);\">&amp;</span><span class=\"nu0\" style=\"color: rgb(204, 102, 204);\">1</span><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">)</span><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">{</span></div></li><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray;\"><div class=\"de1\" style=\"margin-left: 5px;\">  <span class=\"kw1\" style=\"color: rgb(177, 177, 0);\">echo</span> <span class=\"st_h\" style=\"color: rgb(0, 0, 255);\">\'$value is odd\'</span><span class=\"sy0\" style=\"color: rgb(51, 153, 51);\">;</span></div></li><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray; background-color: rgb(255, 255, 255);\"><div class=\"de1\" style=\"margin-left: 5px;\"><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">}</span><span class=\"kw1\" style=\"color: rgb(177, 177, 0);\">else</span><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">{</span></div></li><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray;\"><div class=\"de1\" style=\"margin-left: 5px;\">  <span class=\"kw1\" style=\"color: rgb(177, 177, 0);\">echo</span> <span class=\"st_h\" style=\"color: rgb(0, 0, 255);\">\'$value is even\'</span><span class=\"sy0\" style=\"color: rgb(51, 153, 51);\">;</span></div></li><li class=\"li1\" style=\"margin: 0px; padding: 0px; line-height: 1.3; border-left: 1px solid lightgray; background-color: rgb(255, 255, 255);\"><div class=\"de1\" style=\"margin-left: 5px;\"><span class=\"br0\" style=\"color: rgb(0, 153, 0);\">}</span></div></li></ol></pre></div><p style=\"margin-top: 3px; font-family: Poppins; font-size: 16px;\">This method gives better performance than using modulo as it uses bitwise calculations that are native to computers.</p><p style=\"margin-top: 3px; font-family: Poppins; font-size: 16px;\">Finally, you can use the is_long() function to see if the value you return from the division of the number by 2 has a remainder. This is a slightly longer (and more resource intensive) way of doing it than using modulo, but it works.</p>','5dbbd5f3522bf.png','2019-11-01 01:21:31','2019-11-01 01:21:31'),(19,'afafsd','<p>afsddfasdf</p>','5dbc0e56710ad.png','2019-11-01 05:22:06','2019-11-01 05:22:06'),(20,'testing','<p>lksjndghnh\'ia</p><p>odfagb\'</p>','5dc1077e13cf4.jpeg','2019-11-04 23:54:14','2019-11-04 23:54:14'),(21,'ersgg','<p>sdfgsdfg</p>','5dc108acdba61.png','2019-11-04 23:59:16','2019-11-04 23:59:16');
/*!40000 ALTER TABLE `about_who_we_ares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donate_page_data_save`
--

DROP TABLE IF EXISTS `donate_page_data_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donate_page_data_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donate_page_data_save`
--

LOCK TABLES `donate_page_data_save` WRITE;
/*!40000 ALTER TABLE `donate_page_data_save` DISABLE KEYS */;
INSERT INTO `donate_page_data_save` VALUES (1,'Odd and Even Numbers in PHP','<p>adsfsd <br> Multiple lines of text that form the lede, informing new readers quickly and efficiently about what\'s most interesting in this post\'s contents.</p>','5dc4019e1c693.jpeg','2019-11-07 06:05:58','2019-11-07 06:05:58');
/*!40000 ALTER TABLE `donate_page_data_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donates`
--

DROP TABLE IF EXISTS `donates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pay_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `donates_pay_id_unique` (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donates`
--

LOCK TABLES `donates` WRITE;
/*!40000 ALTER TABLE `donates` DISABLE KEYS */;
INSERT INTO `donates` VALUES (38,'5dba6b1b263b7','complete','20191031111212800110168393600959827','test','user@gmail.com','',5.00,'2019-10-30 23:33:23','2019-10-30 23:33:31',''),(39,'5dc3f3735de18','complete','20191107111212800110168856600982824','testing_str','admin@gmail.com','',500.00,'2019-11-07 05:05:31','2019-11-07 05:07:26',''),(40,'5dc3f429ed370','complete','20191107111212800110168535200993114','oasdhgi','nalksg@kjsfg.com','',23.00,'2019-11-07 05:08:33','2019-11-07 05:08:42',''),(41,'5dd24c8be944d','complete','20191118111212800110168544101010276','deepak','user@gmail.com','asdf',500.00,'2019-11-18 02:17:23','2019-11-18 02:18:03','');
/*!40000 ALTER TABLE `donates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education_side_data_save`
--

DROP TABLE IF EXISTS `education_side_data_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education_side_data_save` (
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education_side_data_save`
--

LOCK TABLES `education_side_data_save` WRITE;
/*!40000 ALTER TABLE `education_side_data_save` DISABLE KEYS */;
INSERT INTO `education_side_data_save` VALUES ('Our Works In Education Field','<p>asdgfsdhdfn</p><p>Education - Wikipedia\nhttps://en.wikipedia.org › wiki › Education\nEducation is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include storytelling, discussion, teaching, training, and directed research.\n‎Education in India · ‎History of education · ‎Right to education · ‎Informal education\nMadhya Pradesh Education Portal 2.0</p>','5dc29482c7a81.jpeg','2019-11-15 11:09:35','2019-11-06 04:08:10');
/*!40000 ALTER TABLE `education_side_data_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education_slide`
--

DROP TABLE IF EXISTS `education_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education_slide` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education_slide`
--

LOCK TABLES `education_slide` WRITE;
/*!40000 ALTER TABLE `education_slide` DISABLE KEYS */;
INSERT INTO `education_slide` VALUES (1,'5dc28f0c92265.jpeg','asd','2019-11-06 03:44:52','2019-11-06 03:44:52'),(2,'5dc29176eefe1.png','asdgdsg','2019-11-06 03:55:10','2019-11-06 03:55:10'),(3,'5dc3dd2ceeeef.jpeg','testing_insert','2019-11-07 03:30:28','2019-11-07 03:30:28'),(4,'5dc3dd78dd52d.jpeg','testing_insert','2019-11-07 03:31:44','2019-11-07 03:31:44'),(5,'5dc3de18d9926.jpeg','testing_insert','2019-11-07 03:34:24','2019-11-07 03:34:24'),(6,'5dc3de51e7b78.jpeg','testing_insert','2019-11-07 03:35:21','2019-11-07 03:35:21');
/*!40000 ALTER TABLE `education_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education_specific_work_save`
--

DROP TABLE IF EXISTS `education_specific_work_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education_specific_work_save` (
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education_specific_work_save`
--

LOCK TABLES `education_specific_work_save` WRITE;
/*!40000 ALTER TABLE `education_specific_work_save` DISABLE KEYS */;
INSERT INTO `education_specific_work_save` VALUES ('5dc296b97559b.jpeg','<p>sadgb[ojldfabn</p><p>aSF;BJAODF;LB</p>','2019-11-06 04:17:37','2019-11-06 04:17:37'),('5dc91e968960c.png','<div class=\"I6vAHd h5RoYd ads-creative\" style=\"display: -webkit-box; overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; height: 66px; -webkit-line-clamp: 3; color: rgb(84, 84, 84); font-family: arial, sans-serif;\"><b style=\"color: rgb(106, 106, 106);\">Documentaries</b>&nbsp;With CuriosityStream®. Start Your Free Trial! 4K Ultra HD Streaming. Thousands of Titles. 50+ Hours of 4K Content. Apple TV, Roku &amp; More.</div><div class=\"OFURmb ellip\" style=\"overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: rgb(84, 84, 84); font-family: arial, sans-serif;\"><div class=\"U8Wm4c vSXoXc\" style=\"display: inline-block;\"><div class=\"UM96s\" style=\"color: rgb(84, 84, 84); display: inline-block;\"><a class=\"IMBkIc\" href=\"https://www.google.com/aclk?sa=l&amp;ai=DChcSEwi12aet4eHlAhWINSsKHUP6CSEYABADGgJzZg&amp;sig=AOD64_16jvitULjrzfPS3slLit_cbaAUyA&amp;q=&amp;ved=2ahUKEwjd8qGt4eHlAhXGXisKHSWOC8cQhacBegQIDRAE&amp;adurl=\" style=\"text-decoration: none; color: rgb(102, 0, 153); cursor: pointer;\">Standard HD Monthly Plan</a>&nbsp;-&nbsp;<div class=\"mvK4Fc ellip\" style=\"overflow: hidden; text-overflow: ellipsis; display: inline;\"><span style=\"font-weight: inherit;\"><span dir=\"ltr\" style=\"unicode-bidi: isolate;\">US$2.99</span></span>/mo</div></div>&nbsp;-&nbsp;<div class=\"fJ0dnd\" style=\"color: rgb(112, 117, 122); display: inline-block;\">Watch 2,400+ HD Titles</div></div><span class=\"Uzbfnc\" style=\"color: rgb(112, 117, 122);\">&nbsp;·&nbsp;</span><g-bubble jscontroller=\"BlFnV\"><span class=\"wPrLAb\" style=\"color: rgb(112, 117, 122);\">More</span><span class=\"mn-dwn-arw\" style=\"border-color: rgb(112, 117, 122) transparent; border-style: solid; border-width: 5px 4px 0px; width: 0px; height: 0px; margin: 0px 0px 2px 3px; top: 8px; position: relative; display: inline-block;\"></span></g-bubble></div>','2019-11-11 03:10:54','2019-11-11 03:10:54');
/*!40000 ALTER TABLE `education_specific_work_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_history_data`
--

DROP TABLE IF EXISTS `event_history_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_history_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_details` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_history_data`
--

LOCK TABLES `event_history_data` WRITE;
/*!40000 ALTER TABLE `event_history_data` DISABLE KEYS */;
INSERT INTO `event_history_data` VALUES (1,'history','<p>history</p>','test city','2019-11-07','','2019-11-07 04:23:24','2019-11-07 04:23:24'),(3,'history_1','<p>asfsdafsd</p>','asdf','2019-11-22','','2019-11-07 04:29:32','2019-11-07 04:29:32'),(4,'history','<p>asdfgafsdg</p>','asdgasd','2019-11-21','2019-11-22','2019-11-07 04:31:16','2019-11-07 04:31:16');
/*!40000 ALTER TABLE `event_history_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_slide_save`
--

DROP TABLE IF EXISTS `event_slide_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_slide_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_slide_save`
--

LOCK TABLES `event_slide_save` WRITE;
/*!40000 ALTER TABLE `event_slide_save` DISABLE KEYS */;
INSERT INTO `event_slide_save` VALUES (1,'5dc3df678c649.jpeg','Current Event <br>Cyclone Bulbul (satellite image shown) hits the Indian and Bangladeshi coasts of the Bay of Bengal, killing at least 24 people.\nAfter weeks of protests over electoral fraud, Bolivian president Evo Morales and other high-ranking politicians are forced to resign, and opposition senator Jeanine Áñez becomes interim president.\nThe Supreme Court of India delivers a unanimous verdict in favour of the construction of a Hindu temple at a disputed holy site in Ayodhya.\nA border corridor is opened between Pakistan and India, allowing Indian Sikh pilgrims visa-free access to Kartarpur Sahib for the first time since the partition.\nOngoing: Hong Kong protestsTrump impeachment inquiry','2019-11-07 03:39:59','2019-11-07 03:39:59'),(2,'5dc903ca913c9.jpeg','testing_insert','2019-11-11 01:16:34','2019-11-11 01:16:34'),(3,'5dc903d273c87.png','hlilk','2019-11-11 01:16:42','2019-11-11 01:16:42');
/*!40000 ALTER TABLE `event_slide_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_upcoming_data`
--

DROP TABLE IF EXISTS `event_upcoming_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_upcoming_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_details` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_upcoming_data`
--

LOCK TABLES `event_upcoming_data` WRITE;
/*!40000 ALTER TABLE `event_upcoming_data` DISABLE KEYS */;
INSERT INTO `event_upcoming_data` VALUES (1,'upcoming_event','<p>yes</p>','test city','2019-11-09','','2019-11-07 04:40:19','2019-11-07 04:40:19'),(2,'upcoming_event_test','<p>Find <b>docoment</b> stock images in HD and <u>millions </u>of other royalty-free stock','test city_1','2019-11-17','2019-11-30','2019-11-11 01:37:51','2019-11-11 01:37:51');
/*!40000 ALTER TABLE `event_upcoming_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_side_data_save`
--

DROP TABLE IF EXISTS `health_side_data_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_side_data_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_side_data_save`
--

LOCK TABLES `health_side_data_save` WRITE;
/*!40000 ALTER TABLE `health_side_data_save` DISABLE KEYS */;
INSERT INTO `health_side_data_save` VALUES (2,'Our Works In Health Field','<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">A&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">documentary film</b><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;is a&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Non-fiction\" class=\"mw-redirect\" title=\"Non-fiction\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">nonfictional</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Film\" title=\"Film\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">motion picture</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;intended to document&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Reality\" title=\"Reality\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">reality</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">, primarily for the purposes of instruction, education, or maintaining a&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Recorded_history\" title=\"Recorded history\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">historical record</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">.</span><sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Documentary_film#cite_note-1\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;\"Documentary\" has been described as a \"filmmaking practice, a cinematic tradition, and mode of audience reception\" that is continually evolving and is without clear boundaries.</span><sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: rgb(34, 34, 34); font-family: sans-serif;\"><a href=\"https://en.wikipedia.org/wiki/Documentary_film#cite_note-2\" style=\"text-decoration: none; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[2]</a></sup><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;Documentary films were originally called \"</span><a href=\"https://en.wikipedia.org/wiki/Actuality_film\" title=\"Actuality film\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">actuality</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">\" films and were only a minute or less in length. Over time documentaries have evolved to be longer in length and to include more categories, such as</span><br></p>','5dc9291f36d98.jpeg','2019-11-11 03:55:51','2019-11-11 03:55:51');
/*!40000 ALTER TABLE `health_side_data_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_slide_save`
--

DROP TABLE IF EXISTS `health_slide_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_slide_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_slide_save`
--

LOCK TABLES `health_slide_save` WRITE;
/*!40000 ALTER TABLE `health_slide_save` DISABLE KEYS */;
INSERT INTO `health_slide_save` VALUES (1,'5dc2a1e1bd22c.png','success','2019-11-06 05:05:13','2019-11-06 05:05:13'),(2,'5dc2a21589829.jpeg','dfsdf','2019-11-06 05:06:05','2019-11-06 05:06:05'),(3,'5dc9277bb6e61.png','now_testted','2019-11-11 03:48:51','2019-11-11 03:48:51');
/*!40000 ALTER TABLE `health_slide_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_specific_work_save`
--

DROP TABLE IF EXISTS `health_specific_work_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_specific_work_save` (
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_specific_work_save`
--

LOCK TABLES `health_specific_work_save` WRITE;
/*!40000 ALTER TABLE `health_specific_work_save` DISABLE KEYS */;
INSERT INTO `health_specific_work_save` VALUES ('5dc9297adae06.png','<p><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Polish writer and filmmaker&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Boles%C5%82aw_Matuszewski\" title=\"Bolesław Matuszewski\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">Bolesław Matuszewski</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;was among those who identified the mode of documentary film. He wrote two of the earliest texts on cinema&nbsp;</span><i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Une nouvelle source de l\'histoire</i><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;(eng. A New Source of History) and&nbsp;</span><i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">La photographie animée</i><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;(eng. Animated photography). Both were published in 1898 in&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/French_language\" title=\"French language\" style=\"text-decoration: none; color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">French</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">&nbsp;and among the early written works to consider the historical and documentary value of the film.</span><br></p>','2019-11-11 03:57:22','2019-11-11 03:57:22'),('5dc92b4d79818.png','<p>tested</p>','2019-11-11 04:05:09','2019-11-11 04:05:09');
/*!40000 ALTER TABLE `health_specific_work_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_about_ngo_data`
--

DROP TABLE IF EXISTS `home_about_ngo_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_about_ngo_data` (
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_about_ngo_data`
--

LOCK TABLES `home_about_ngo_data` WRITE;
/*!40000 ALTER TABLE `home_about_ngo_data` DISABLE KEYS */;
INSERT INTO `home_about_ngo_data` VALUES ('about_ngo_insert_data_1','<p>Content for about ngo</p><p><a property=\"url\" href=\"https://htmlcolorcodes.com/color-chart/\" style=\"color: inherit; text-decoration: none; background-color: rgb(255, 255, 255); font-family: proxima-nova-soft, &quot;Proxima Nova Soft&quot;, Helvetica, Arial, sans-serif; font-weight: 700; font-size: 2.25rem; letter-spacing: inherit; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; cursor: pointer; outline: 0px;\">Color Chart</a></p><p><div class=\"buttons row\" style=\"margin: 0px auto; width: 708px; max-width: 75em; float: left;\"><a href=\"https://htmlcolorcodes.com/color-chart/\" style=\"color: inherit; text-decoration: none; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; letter-spacing: inherit; cursor: pointer;\"><span style=\"color: rgb(63, 56, 68); font-family: Lato, Helvetica, Helvetica, sans-serif; font-size: 16px;\"></span></a></div></p><p property=\"description\" style=\"box-sizing: border-box; margin: 0.375em 0px 0px; color: rgb(0, 0, 0); padding: 0px; font-family: proxima-nova-soft, &quot;Proxima Nova Soft&quot;, Helvetica, Arial, sans-serif; line-height: 1.618; letter-spacing: 0.025em; font-size: 1.375rem;\">Looking for some already great color combinations? Our&nbsp;<a href=\"http://htmlcolorcodes.com/color-chart/\" style=\"box-sizing: border-box; color: rgb(176, 176, 176); text-decoration: none; background-color: inherit; font-family: inherit; font-weight: inherit; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; letter-spacing: inherit; cursor: pointer; border-bottom: 2px solid rgb(195, 195, 195);\">color chart</a>&nbsp;features flat design colors, Google\'s Material design scheme and the classic web safe color palette, all with Hex color codes.</p>','5dcbaad2a525d.jpeg','2019-11-13 01:33:46','2019-11-13 01:33:46'),('About NGO_name Foundation','<h3><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif;\">header</span></h3><p><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif;\">that impressed&nbsp;</span><span style=\"font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif;\">us</span><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif;\">&nbsp;about the examples above.<b> Establish a mission </b>statement. Outline your company story. Reveal how you\'ve evolved. State your \"aha!\" <u>Explain who you serve.</u> Explain what you\'re<span style=\"font-family: Helvetica;\"> offering them</span>. Cite examples of who you\'ve served.</span></p>','5dcbc07da21aa.jpg','2019-11-13 03:06:13','2019-11-13 03:06:13');
/*!40000 ALTER TABLE `home_about_ngo_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_creting_impact`
--

DROP TABLE IF EXISTS `home_creting_impact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_creting_impact` (
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_creting_impact`
--

LOCK TABLES `home_creting_impact` WRITE;
/*!40000 ALTER TABLE `home_creting_impact` DISABLE KEYS */;
INSERT INTO `home_creting_impact` VALUES ('Card details for the home 1','Content portion for card details for the are of the value with 250 char lasdasdho;gisg\'phaisdgk;sdfgh;kahngiahglakbnsg;obasdgibaoigbg','5dcbae9c0045a.png','2019-11-13 10:18:22','2019-11-13 01:49:56',1),('Card details for the home 3','detai0ls regarding card 3','5dcbaf040c373.png','2019-11-13 10:19:09','2019-11-13 01:51:40',2),('Card details for the home 2','details regards card 2','5dcbaedfc3937.jpeg','2019-11-13 10:19:17','2019-11-13 01:51:03',3),('about_ngo_insert_data_1','<h2 property=\"headline\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: proxima-nova-soft, &quot;Proxima Nova Soft&quot;, Helvetica, Arial, sans-serif; font-weight: 700; line-height: 1.618; font-size: 2.25rem; padding: 1.5em 0px 0px; letter-spacing: 0.025em; display: inline-block;\"><a property=\"url\" href=\"https://htmlcolorcodes.com/color-chart/\" style=\"color: inherit; text-decoration: none; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; letter-spacing: inherit; cursor: pointer;\">Color Chart</a></h2><p><div class=\"buttons row\" style=\"margin: 0px auto; width: 708px; max-width: 75em; float: left;\"><a href=\"https://htmlcolorcodes.com/color-chart/\" style=\"color: inherit; text-decoration: none; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; letter-spacing: inherit; cursor: pointer;\"><span style=\"color: rgb(63, 56, 68); font-family: Lato, Helvetica, Helvetica, sans-serif; font-size: 16px;\"></span></a></div></p><p property=\"description\" style=\"box-sizing: border-box; margin: 0.375em 0px 0px; color: rgb(0, 0, 0); padding: 0px; font-family: proxima-nova-soft, &quot;Proxima Nova Soft&quot;, Helvetica, Arial, sans-serif; line-height: 1.618; letter-spacing: 0.025em; font-size: 1.375rem;\">Looking for some already great color combinations? Our&nbsp;<a href=\"http://htmlcolorcodes.com/color-chart/\" style=\"box-sizing: border-box; color: rgb(176, 176, 176); text-decoration: none; background-color: inherit; font-family: inherit; font-weight: inherit; transition: all 0.375s cubic-bezier(0.4, 0, 0.2, 1) 0s; font-style: inherit; line-height: inherit; letter-spacing: inherit; cursor: pointer; border-bottom: 2px solid rgb(195, 195, 195);\">color chart</a>&nbsp;features flat design colors, Google\'s Material design scheme and the classic web safe color palette, all with Hex color codes.</p>','5dcbdc93ce584.jpg','2019-11-13 05:06:03','2019-11-13 05:06:03',5),('about_ngo_insert_data_5','<div id=\"hot-network-questions\" class=\"module tex2jax_ignore\" style=\"margin: 0px 0px 1.5em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word; color: rgb(36, 39, 41);\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 15.6px; font-family: inherit; vertical-align: baseline; list-style: square; box-sizing: inherit;\"><li class=\"js-hidden\" style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; list-style-type: none; white-space: nowrap;\"><a href=\"https://workplace.stackexchange.com/questions/147880/a-major-investor-asked-me-the-software-lead-whether-the-board-should-fire-my-b\" class=\"js-gps-track question-hyperlink mb0\" data-gps-track=\"site.switch({ item_type:11, target_site:423 }); posts_hot_network.click({ item_type:2, location:11 })\" style=\"margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: normal; font-stretch: inherit; line-height: 1.3; font-size: 12px; vertical-align: top; box-sizing: inherit; color: rgb(0, 89, 153); text-decoration: none; cursor: pointer; display: inline-block; white-space: normal; width: 270px;\">A major investor asked me (the software lead) whether the board should fire my boss (the Co-Founder and CTO). What should I do?</a></li><li class=\"js-hidden\" style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; list-style-type: none; white-space: nowrap;\"><div class=\"favicon favicon-aviation\" title=\"Aviation Stack Exchange\" style=\"margin: 2px 6px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; width: 16px; height: 16px; background-color: transparent; background-repeat: no-repeat; background-image: url(&quot;../../img/favicons-sprite16.png?v=ff76c9f04fa1&quot;); background-position: 0px -468px; display: inline-block;\"></div><a href=\"https://aviation.stackexchange.com/questions/71577/why-do-new-jet-engines-cost-billions-to-design\" class=\"js-gps-track question-hyperlink mb0\" data-gps-track=\"site.switch({ item_type:11, target_site:528 }); posts_hot_network.click({ item_type:2, location:11 })\" style=\"margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: normal; font-stretch: inherit; line-height: 1.3; font-size: 12px; vertical-align: top; box-sizing: inherit; color: rgb(0, 89, 153); text-decoration: none; cursor: pointer; display: inline-block; white-space: normal; width: 270px;\">Why do new jet engines cost billions to design?</a></li><li class=\"js-hidden\" style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; list-style-type: none; white-space: nowrap;\"><div class=\"favicon favicon-civicrm\" title=\"CiviCRM Stack Exchange\" style=\"margin: 2px 6px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; width: 16px; height: 16px; background-color: transparent; background-repeat: no-repeat; background-image: url(&quot;../../img/favicons-sprite16.png?v=ff76c9f04fa1&quot;); background-position: 0px -1080px; display: inline-block;\"></div><a href=\"https://civicrm.stackexchange.com/questions/33681/may-notes-contain-emoji-graphics\" class=\"js-gps-track question-hyperlink mb0\" data-gps-track=\"site.switch({ item_type:11, target_site:605 }); posts_hot_network.click({ item_type:2, location:11 })\" style=\"margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: normal; font-stretch: inherit; line-height: 1.3; font-size: 12px; vertical-align: top; box-sizing: inherit; color: rgb(0, 89, 153); text-decoration: none; cursor: pointer; display: inline-block; white-space: normal; width: 270px;\">May Notes contain emoji graphics?</a></li></ul></div><div id=\"feed-link\" class=\"js-feed-link\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 13px; vertical-align: baseline; box-sizing: inherit; color: rgb(36, 39, 41);\"><a href=\"https://stackoverflow.com/feeds/question/33393376\" title=\"Feed of this question and its answers\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; box-sizing: inherit; color: rgb(0, 119, 204); text-decoration: none; cursor: pointer;\"><svg aria-hidden=\"true\" class=\"svg-icon fc-orange-400 iconRss\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\"><path d=\"M1 3c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm14.5 12C15.5 8.1 9.9 2.5 3 2.5V5a10 10 0 0 1 10 10h2.5zm-5 0A7.5 7.5 0 0 0 3 7.5V10a5 5 0 0 1 5 5h2.5zm-5 0A2.5 2.5 0 0 0 3 12.5V15h2.5z\"></path></svg>&nbsp;Question feed</a></div>','5dcbe26138d07.png','2019-11-13 05:30:49','2019-11-13 05:30:49',6);
/*!40000 ALTER TABLE `home_creting_impact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_education_slide`
--

DROP TABLE IF EXISTS `home_education_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_education_slide` (
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_education_slide`
--

LOCK TABLES `home_education_slide` WRITE;
/*!40000 ALTER TABLE `home_education_slide` DISABLE KEYS */;
INSERT INTO `home_education_slide` VALUES ('Card details for the home 2','details regards card 2','5dcbaec621e04.jpeg','2019-11-13 01:50:38','2019-11-13 01:50:38'),('Feeding the hungry people','<p><br class=\"Apple-interchange-newline\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</span><br></p>','5dcbcc446e527.jpg','2019-11-13 03:56:28','2019-11-13 03:56:28'),('about_ngo_insert_data_1','<p><br class=\"Apple-interchange-newline\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,</span><br></p>','5dcbcda3a0154.png','2019-11-13 04:02:19','2019-11-13 04:02:19');
/*!40000 ALTER TABLE `home_education_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_health_slide`
--

DROP TABLE IF EXISTS `home_health_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_health_slide` (
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_health_slide`
--

LOCK TABLES `home_health_slide` WRITE;
/*!40000 ALTER TABLE `home_health_slide` DISABLE KEYS */;
INSERT INTO `home_health_slide` VALUES ('health_slide_image_heading_1','our_work_Education_slide_image_Content_1_with_100_words....................................................................................................................................................!!!','5dcbad3db1096.png','2019-11-13 01:44:05','2019-11-13 01:44:05'),('health_slide_image_heading_2','our_work_health_slide_image_Content_2_with_100_words....................................................................................................................................................!!!','5dcbad9d4b89f.png','2019-11-13 01:45:41','2019-11-13 01:45:41'),('about_ngo_insert_data_3','our_work_health_slide_image_Content_3_with_100_words....................................................................................................................................................!!!','5dcbadb4966c6.jpeg','2019-11-13 01:46:04','2019-11-13 01:46:04');
/*!40000 ALTER TABLE `home_health_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_slide`
--

DROP TABLE IF EXISTS `home_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_slide` (
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_slide`
--

LOCK TABLES `home_slide` WRITE;
/*!40000 ALTER TABLE `home_slide` DISABLE KEYS */;
INSERT INTO `home_slide` VALUES ('5dcba8596c442.png','testing_insert_main_slide_3','2019-11-14 08:54:30','2019-11-13 01:23:13'),('5dcba8596c442.png','testing_insert_main_slide_1','2019-11-14 08:54:51','2019-11-13 01:21:01'),('5dcba8596c442.png','testing_insert_main_slide_2','2019-11-14 08:56:10','2019-11-13 01:23:00');
/*!40000 ALTER TABLE `home_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_10_17_105422_users',1),(5,'2019_10_23_061545_create_donates_table',1),(6,'2019_10_24_091159_donate',2),(8,'2019_10_24_092136_add_status_transaction_to_donate_table',3),(9,'2019_10_31_092955_create_about_who_we_are_table',4),(10,'2019_10_31_093720_create_about_who_we_ares_table',5),(11,'2019_11_01_110706_create_about_team_slide_data',6),(12,'2019_11_05_055437_create_new_department_name',7),(13,'2019_11_05_065312_create_new_department_name',8),(14,'2019_11_05_074105_create_for_members_department',9),(15,'2019_11_05_102552_create_team_data',10),(16,'2019_11_05_111959_create_team_datas',11),(17,'2019_11_05_112126_create_team_datas',12),(18,'2019_11_06_062321_create_education_slide_save',13),(19,'2019_11_06_062412_create_education_side_data_save',13),(20,'2019_11_06_062426_create_education_specific_work_save',13),(21,'2019_11_06_070700_create_education_slide_saves',14),(22,'2019_11_06_070912_create_education_slide_saves',15),(23,'2019_11_06_090601_create_education_slide',16),(24,'2019_11_06_100414_create_health_slide_save',17),(25,'2019_11_06_100505_create_health_side_data_save',17),(26,'2019_11_06_100531_create_health_specific_work_save',17),(27,'2019_11_07_051017_create_women_slide_save',18),(28,'2019_11_07_051218_create_women_side_data_save',18),(29,'2019_11_07_051331_create_women_specific_work_save',18),(30,'2019_11_07_083649_create_event_slide_save',19),(31,'2019_11_07_092905_create_event_upcoming_data',20),(32,'2019_11_07_092939_create_event_history_data',20),(33,'2019_11_07_111749_create_donate_page_data_save',21),(34,'2019_11_13_061425_create_home_slide',22),(35,'2019_11_13_061508_create_home_about_ngo_data',22),(36,'2019_11_13_061525_create_home_education_slide',22),(37,'2019_11_13_061543_create_home_health_slide',22),(38,'2019_11_13_061601_create_home_creting_impact',22),(39,'2019_11_14_070259_create__ngo_contact_details',23),(40,'2019_11_14_070655_create_ngo_contact_details',24);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ngo_contact_details`
--

DROP TABLE IF EXISTS `ngo_contact_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ngo_contact_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ngo_contact_details`
--

LOCK TABLES `ngo_contact_details` WRITE;
/*!40000 ALTER TABLE `ngo_contact_details` DISABLE KEYS */;
INSERT INTO `ngo_contact_details` VALUES (1,'<p>testing_address&nbsp;</p><p>testing area new Delhi - <b>110059</b></p>',1234567899,'ngo_mail@ngo.com','2019-11-14 01:47:20','2019-11-14 01:47:20');
/*!40000 ALTER TABLE `ngo_contact_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('admin@gmail.com','$2y$10$lTeHPSpMXNQZGbxA.ZzbLerE6DpunNWuMQ6NpdEFIGVqERh6M0aIW','2019-11-15 01:12:52'),('deepak.kumar@tarkuli.com','$2y$10$RJm0ncYAXvvQbrOE3RAhd.v03wNWEtQAVDCjv7M8a9icEYWq2uQSK','2019-11-19 02:54:19');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_datas`
--

DROP TABLE IF EXISTS `team_datas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_datas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_more_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_datas`
--

LOCK TABLES `team_datas` WRITE;
/*!40000 ALTER TABLE `team_datas` DISABLE KEYS */;
INSERT INTO `team_datas` VALUES (2,'5dc15c86e5dba.png','education','test','test@example.com',NULL,'2019-11-05 05:57:02','2019-11-05 05:57:02'),(3,'5dc8f25f4160c.jpeg','health','ttesting','testing@gmail.com','sdfgsdf','2019-11-11 00:02:15','2019-11-11 00:02:15'),(4,'5dc8f2b5c2134.png','women_enpowerment','test_woen','women@gmail.com','asfasf','2019-11-11 00:03:41','2019-11-11 00:03:41'),(5,'5dc8f4990f989.png','education','deepak','dk@test.com','this is more details column','2019-11-11 00:11:45','2019-11-11 00:11:45'),(6,'5dc8ffcf265a1.png','education','lATEST','sdfgsdf@gmail','asdfa','2019-11-11 00:59:35','2019-11-11 00:59:35');
/*!40000 ALTER TABLE `team_datas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'test user','user','test@gmail.com',NULL,'$2y$10$Kt/c/Dpu5vkuQGETg/IZsuX15j2WHM8zxMoe3RxpgwlYgSEbiQ9Me',NULL,'2019-10-30 01:39:00','2019-11-19 01:44:28'),(3,'Admin',NULL,'admin@gmail.com',NULL,'$2y$10$BZen5qpVi7n17LPMghfFM..Xz.HHnmVLZNKBiVjsmej3H084y1mhi',NULL,'2019-11-19 02:21:38','2019-11-19 02:21:38'),(5,'new persion',NULL,'testing_4@gmail.com',NULL,'$2y$10$mNuId.6WMOjf8DqxbFMDl.3Fnlto/xwRm3GsBCY5lYpGDREtaIqdq',NULL,'2019-11-19 02:40:37','2019-11-19 02:41:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `women_side_data_save`
--

DROP TABLE IF EXISTS `women_side_data_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_side_data_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `women_side_data_save`
--

LOCK TABLES `women_side_data_save` WRITE;
/*!40000 ALTER TABLE `women_side_data_save` DISABLE KEYS */;
INSERT INTO `women_side_data_save` VALUES (1,'Our Works in Women Enpowerment','<p>women_side_detail<br>Image result for women empowermentwww.amazon.in\nEmpowerment includes the action of raising the status of women through education, raising awareness, literacy, and training. Women\'s empowerment is all about equipping and allowing women to make life-determining decisions through the different problems in society</p>','5dc3aaa48fc93.jpeg','2019-11-06 23:54:52','2019-11-06 23:54:52');
/*!40000 ALTER TABLE `women_side_data_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `women_slide_save`
--

DROP TABLE IF EXISTS `women_slide_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_slide_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `women_slide_save`
--

LOCK TABLES `women_slide_save` WRITE;
/*!40000 ALTER TABLE `women_slide_save` DISABLE KEYS */;
INSERT INTO `women_slide_save` VALUES (1,'5dc3aa826c612.jpeg','women_slide','2019-11-06 23:54:18','2019-11-06 23:54:18'),(2,'5dc92cf419e97.png','testing_insert_1','2019-11-11 04:12:12','2019-11-11 04:12:12');
/*!40000 ALTER TABLE `women_slide_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `women_specific_work_save`
--

DROP TABLE IF EXISTS `women_specific_work_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `women_specific_work_save` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(9000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `women_specific_work_save`
--

LOCK TABLES `women_specific_work_save` WRITE;
/*!40000 ALTER TABLE `women_specific_work_save` DISABLE KEYS */;
INSERT INTO `women_specific_work_save` VALUES (1,'5dc3aac910a25.jpeg','<p>women_specific_detail<br>https://en.wikipedia.org › wiki › Women\'s_empowerment\nEmpowerment includes the action of raising the status of women through education, raising awareness, literacy, and training. Women\'s empowerment is all about equipping and allowing women to make life-determining decisions through the different problems in society.</p>','2019-11-06 23:55:29','2019-11-06 23:55:29');
/*!40000 ALTER TABLE `women_specific_work_save` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-19 17:17:19
