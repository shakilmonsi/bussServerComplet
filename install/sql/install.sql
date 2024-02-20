-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: bus365
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'About page title lorem ipsum','About Page sub-Title Lorem Ipsum Lorem Ipsum','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2021-12-19 12:45:25','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounthead`
--

DROP TABLE IF EXISTS `accounthead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounthead` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `parentid` varchar(100) DEFAULT NULL,
  `chield` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounthead`
--

LOCK TABLES `accounthead` WRITE;
/*!40000 ALTER TABLE `accounthead` DISABLE KEYS */;
INSERT INTO `accounthead` VALUES (1,'assets','parent',1),(2,'expence','parent',1),(3,'income','parent',0),(4,'liability','parent',1),(5,'current Assect','1',1),(6,'Non current Assect','1',0),(7,'account','4',1),(8,'account recieve','5',1),(9,'add new','8',0),(10,'test data','7',0);
/*!40000 ALTER TABLE `accounthead` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `detail` text,
  `amount` varchar(100) NOT NULL,
  `doc_location` text,
  `system_user_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (134,'income','Ticket Booking (TB8E4G57FO) ','983',NULL,1,'2022-06-28 15:08:21','2023-01-21 10:11:38',NULL),(135,'income','Ticket Booking (TBFKS8YEBW) ','500',NULL,1,'2022-06-28 15:15:21','2023-01-21 10:11:38',NULL),(136,'income','Ticket Booking (TBJ3D2RY0P) ','896',NULL,1,'2022-06-28 15:16:50','2023-01-21 10:11:38',NULL),(137,'income','Ticket Booking (TBNYFQET3S) ','600',NULL,1,'2022-06-28 15:17:58','2023-01-21 10:11:38',NULL),(138,'income','Ticket Booking (TB76DFM1CA) ','500',NULL,1,'2022-06-28 15:19:44','2023-01-21 10:11:38',NULL),(139,'income','Ticket Booking (TBXT8KPHV2) ','896',NULL,1,'2022-06-28 15:20:54','2023-01-21 10:11:38',NULL),(140,'income','Ticket Booking (TBA9X180HU) ','1008',NULL,1,'2022-06-28 15:22:26','2023-01-21 10:11:38',NULL),(141,'income','Refund (TBA9X180HU) ','100',NULL,1,'2022-06-28 15:23:04','2023-01-21 10:11:38',NULL),(142,'expense','Refund (TBA9X180HU) ','1008',NULL,1,'2022-06-28 15:23:04','2023-01-21 10:11:38',NULL),(143,'income','Cancel (TBXT8KPHV2) ','50',NULL,1,'2022-06-28 15:23:32','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adds`
--

DROP TABLE IF EXISTS `adds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adds` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image_path` text NOT NULL,
  `pagename` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adds`
--

LOCK TABLES `adds` WRITE;
/*!40000 ALTER TABLE `adds` DISABLE KEYS */;
INSERT INTO `adds` VALUES (1,'image/add/1656243275_8031ce51369f5d9a2e44.jpg','checkout','www.test.com','2021-12-18 18:18:16','2023-01-21 10:11:38',NULL),(3,'image/add/1656243290_54a91ec1ebe9ad09ed62.jpg','ticket','www.test.com.xyz','2021-12-18 18:23:57','2023-01-21 10:11:38',NULL),(4,'image/add/1656243309_69abd52471e8262753f0.jpg','customer','www.test.com fdfd','2021-12-18 18:45:56','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `adds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agentcommissions`
--

DROP TABLE IF EXISTS `agentcommissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agentcommissions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int unsigned NOT NULL,
  `booking_id` tinytext NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `grandtotal` tinytext NOT NULL,
  `commission` tinytext NOT NULL,
  `rate` tinytext NOT NULL,
  `detail` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agentcommissions_agent_id_foreign` (`agent_id`),
  KEY `agentcommissions_subtrip_id_foreign` (`subtrip_id`),
  KEY `agentcommissions_user_id_foreign` (`user_id`),
  CONSTRAINT `agentcommissions_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  CONSTRAINT `agentcommissions_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `agentcommissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agentcommissions`
--

LOCK TABLES `agentcommissions` WRITE;
/*!40000 ALTER TABLE `agentcommissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `agentcommissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agents` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `location_id` int unsigned NOT NULL,
  `country_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `blood` tinytext,
  `id_number` varchar(255) DEFAULT NULL,
  `id_type` tinytext,
  `nid_picture` tinytext,
  `commission` tinytext NOT NULL,
  `profile_picture` tinytext,
  `address` tinytext NOT NULL,
  `city` tinytext,
  `zip` tinytext,
  `discount` float DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_number` (`id_number`),
  KEY `agents_location_id_foreign` (`location_id`),
  KEY `agents_country_id_foreign` (`country_id`),
  KEY `agents_user_id_foreign` (`user_id`),
  CONSTRAINT `agents_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  CONSTRAINT `agents_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
INSERT INTO `agents` VALUES (5,32,18,169,'Test','Agent','A+','abc765','Passport','','2','image/agent/1656328540_a7591bcf2d9661a3b504.jpg','dhaka, bangladesh','dhaka','1213',0,'2022-06-27 17:15:40','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agenttotals`
--

DROP TABLE IF EXISTS `agenttotals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agenttotals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int unsigned NOT NULL,
  `booking_id` text,
  `income` text,
  `expense` text,
  `detail` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agenttotals_agent_id_foreign` (`agent_id`),
  CONSTRAINT `agenttotals_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenttotals`
--

LOCK TABLES `agenttotals` WRITE;
/*!40000 ALTER TABLE `agenttotals` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenttotals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `serial` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_user_id_foreign` (`user_id`),
  CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `serial` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancels`
--

DROP TABLE IF EXISTS `cancels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cancels` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `cancel_fee` varchar(100) DEFAULT NULL,
  `pay_type_id` varchar(100) DEFAULT NULL,
  `track_table_id` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `detail` tinytext,
  `cancel_by` int unsigned NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cancels_cancel_by_foreign` (`cancel_by`),
  CONSTRAINT `cancels_cancel_by_foreign` FOREIGN KEY (`cancel_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancels`
--

LOCK TABLES `cancels` WRITE;
/*!40000 ALTER TABLE `cancels` DISABLE KEYS */;
INSERT INTO `cancels` VALUES (3,'TBXT8KPHV2','50','1','126','ticket','Lorme Ipsum Lorme cancel',1,'2022-06-28 15:23:32','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `cancels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cookes`
--

DROP TABLE IF EXISTS `cookes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cookes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cookes`
--

LOCK TABLES `cookes` WRITE;
/*!40000 ALTER TABLE `cookes` DISABLE KEYS */;
INSERT INTO `cookes` VALUES (1,'Cookies Page Title Lorem Ipsum','cookies page title lorem inpsum','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2021-12-19 13:03:55','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `cookes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'AF','AFGHANISTAN','Afghanistan','AFG',4,93),(2,'AL','ALBANIA','Albania','ALB',8,355),(3,'DZ','ALGERIA','Algeria','DZA',12,213),(4,'AS','AMERICAN SAMOA','American Samoa','ASM',16,1684),(5,'AD','ANDORRA','Andorra','AND',20,376),(6,'AO','ANGOLA','Angola','AGO',24,244),(7,'AI','ANGUILLA','Anguilla','AIA',660,1264),(8,'AQ','ANTARCTICA','Antarctica',NULL,NULL,0),(9,'AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28,1268),(10,'AR','ARGENTINA','Argentina','ARG',32,54),(11,'AM','ARMENIA','Armenia','ARM',51,374),(12,'AW','ARUBA','Aruba','ABW',533,297),(13,'AU','AUSTRALIA','Australia','AUS',36,61),(14,'AT','AUSTRIA','Austria','AUT',40,43),(15,'AZ','AZERBAIJAN','Azerbaijan','AZE',31,994),(16,'BS','BAHAMAS','Bahamas','BHS',44,1242),(17,'BH','BAHRAIN','Bahrain','BHR',48,973),(18,'BD','BANGLADESH','Bangladesh','BGD',50,880),(19,'BB','BARBADOS','Barbados','BRB',52,1246),(20,'BY','BELARUS','Belarus','BLR',112,375),(21,'BE','BELGIUM','Belgium','BEL',56,32),(22,'BZ','BELIZE','Belize','BLZ',84,501),(23,'BJ','BENIN','Benin','BEN',204,229),(24,'BM','BERMUDA','Bermuda','BMU',60,1441),(25,'BT','BHUTAN','Bhutan','BTN',64,975),(26,'BO','BOLIVIA','Bolivia','BOL',68,591),(27,'BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70,387),(28,'BW','BOTSWANA','Botswana','BWA',72,267),(29,'BV','BOUVET ISLAND','Bouvet Island',NULL,NULL,0),(30,'BR','BRAZIL','Brazil','BRA',76,55),(31,'IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL,246),(32,'BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96,673),(33,'BG','BULGARIA','Bulgaria','BGR',100,359),(34,'BF','BURKINA FASO','Burkina Faso','BFA',854,226),(35,'BI','BURUNDI','Burundi','BDI',108,257),(36,'KH','CAMBODIA','Cambodia','KHM',116,855),(37,'CM','CAMEROON','Cameroon','CMR',120,237),(38,'CA','CANADA','Canada','CAN',124,1),(39,'CV','CAPE VERDE','Cape Verde','CPV',132,238),(40,'KY','CAYMAN ISLANDS','Cayman Islands','CYM',136,1345),(41,'CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140,236),(42,'TD','CHAD','Chad','TCD',148,235),(43,'CL','CHILE','Chile','CHL',152,56),(44,'CN','CHINA','China','CHN',156,86),(45,'CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL,61),(46,'CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL,672),(47,'CO','COLOMBIA','Colombia','COL',170,57),(48,'KM','COMOROS','Comoros','COM',174,269),(49,'CG','CONGO','Congo','COG',178,242),(50,'CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180,242),(51,'CK','COOK ISLANDS','Cook Islands','COK',184,682),(52,'CR','COSTA RICA','Costa Rica','CRI',188,506),(53,'CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384,225),(54,'HR','CROATIA','Croatia','HRV',191,385),(55,'CU','CUBA','Cuba','CUB',192,53),(56,'CY','CYPRUS','Cyprus','CYP',196,357),(57,'CZ','CZECH REPUBLIC','Czech Republic','CZE',203,420),(58,'DK','DENMARK','Denmark','DNK',208,45),(59,'DJ','DJIBOUTI','Djibouti','DJI',262,253),(60,'DM','DOMINICA','Dominica','DMA',212,1767),(61,'DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214,1809),(62,'EC','ECUADOR','Ecuador','ECU',218,593),(63,'EG','EGYPT','Egypt','EGY',818,20),(64,'SV','EL SALVADOR','El Salvador','SLV',222,503),(65,'GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226,240),(66,'ER','ERITREA','Eritrea','ERI',232,291),(67,'EE','ESTONIA','Estonia','EST',233,372),(68,'ET','ETHIOPIA','Ethiopia','ETH',231,251),(69,'FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238,500),(70,'FO','FAROE ISLANDS','Faroe Islands','FRO',234,298),(71,'FJ','FIJI','Fiji','FJI',242,679),(72,'FI','FINLAND','Finland','FIN',246,358),(73,'FR','FRANCE','France','FRA',250,33),(74,'GF','FRENCH GUIANA','French Guiana','GUF',254,594),(75,'PF','FRENCH POLYNESIA','French Polynesia','PYF',258,689),(76,'TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL,0),(77,'GA','GABON','Gabon','GAB',266,241),(78,'GM','GAMBIA','Gambia','GMB',270,220),(79,'GE','GEORGIA','Georgia','GEO',268,995),(80,'DE','GERMANY','Germany','DEU',276,49),(81,'GH','GHANA','Ghana','GHA',288,233),(82,'GI','GIBRALTAR','Gibraltar','GIB',292,350),(83,'GR','GREECE','Greece','GRC',300,30),(84,'GL','GREENLAND','Greenland','GRL',304,299),(85,'GD','GRENADA','Grenada','GRD',308,1473),(86,'GP','GUADELOUPE','Guadeloupe','GLP',312,590),(87,'GU','GUAM','Guam','GUM',316,1671),(88,'GT','GUATEMALA','Guatemala','GTM',320,502),(89,'GN','GUINEA','Guinea','GIN',324,224),(90,'GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624,245),(91,'GY','GUYANA','Guyana','GUY',328,592),(92,'HT','HAITI','Haiti','HTI',332,509),(93,'HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL,0),(94,'VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336,39),(95,'HN','HONDURAS','Honduras','HND',340,504),(96,'HK','HONG KONG','Hong Kong','HKG',344,852),(97,'HU','HUNGARY','Hungary','HUN',348,36),(98,'IS','ICELAND','Iceland','ISL',352,354),(99,'IN','INDIA','India','IND',356,91),(100,'ID','INDONESIA','Indonesia','IDN',360,62),(101,'IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364,98),(102,'IQ','IRAQ','Iraq','IRQ',368,964),(103,'IE','IRELAND','Ireland','IRL',372,353),(104,'IL','ISRAEL','Israel','ISR',376,972),(105,'IT','ITALY','Italy','ITA',380,39),(106,'JM','JAMAICA','Jamaica','JAM',388,1876),(107,'JP','JAPAN','Japan','JPN',392,81),(108,'JO','JORDAN','Jordan','JOR',400,962),(109,'KZ','KAZAKHSTAN','Kazakhstan','KAZ',398,7),(110,'KE','KENYA','Kenya','KEN',404,254),(111,'KI','KIRIBATI','Kiribati','KIR',296,686),(112,'KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408,850),(113,'KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410,82),(114,'KW','KUWAIT','Kuwait','KWT',414,965),(115,'KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417,996),(116,'LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418,856),(117,'LV','LATVIA','Latvia','LVA',428,371),(118,'LB','LEBANON','Lebanon','LBN',422,961),(119,'LS','LESOTHO','Lesotho','LSO',426,266),(120,'LR','LIBERIA','Liberia','LBR',430,231),(121,'LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434,218),(122,'LI','LIECHTENSTEIN','Liechtenstein','LIE',438,423),(123,'LT','LITHUANIA','Lithuania','LTU',440,370),(124,'LU','LUXEMBOURG','Luxembourg','LUX',442,352),(125,'MO','MACAO','Macao','MAC',446,853),(126,'MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807,389),(127,'MG','MADAGASCAR','Madagascar','MDG',450,261),(128,'MW','MALAWI','Malawi','MWI',454,265),(129,'MY','MALAYSIA','Malaysia','MYS',458,60),(130,'MV','MALDIVES','Maldives','MDV',462,960),(131,'ML','MALI','Mali','MLI',466,223),(132,'MT','MALTA','Malta','MLT',470,356),(133,'MH','MARSHALL ISLANDS','Marshall Islands','MHL',584,692),(134,'MQ','MARTINIQUE','Martinique','MTQ',474,596),(135,'MR','MAURITANIA','Mauritania','MRT',478,222),(136,'MU','MAURITIUS','Mauritius','MUS',480,230),(137,'YT','MAYOTTE','Mayotte',NULL,NULL,269),(138,'MX','MEXICO','Mexico','MEX',484,52),(139,'FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583,691),(140,'MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498,373),(141,'MC','MONACO','Monaco','MCO',492,377),(142,'MN','MONGOLIA','Mongolia','MNG',496,976),(143,'MS','MONTSERRAT','Montserrat','MSR',500,1664),(144,'MA','MOROCCO','Morocco','MAR',504,212),(145,'MZ','MOZAMBIQUE','Mozambique','MOZ',508,258),(146,'MM','MYANMAR','Myanmar','MMR',104,95),(147,'NA','NAMIBIA','Namibia','NAM',516,264),(148,'NR','NAURU','Nauru','NRU',520,674),(149,'NP','NEPAL','Nepal','NPL',524,977),(150,'NL','NETHERLANDS','Netherlands','NLD',528,31),(151,'AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530,599),(152,'NC','NEW CALEDONIA','New Caledonia','NCL',540,687),(153,'NZ','NEW ZEALAND','New Zealand','NZL',554,64),(154,'NI','NICARAGUA','Nicaragua','NIC',558,505),(155,'NE','NIGER','Niger','NER',562,227),(156,'NG','NIGERIA','Nigeria','NGA',566,234),(157,'NU','NIUE','Niue','NIU',570,683),(158,'NF','NORFOLK ISLAND','Norfolk Island','NFK',574,672),(159,'MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580,1670),(160,'NO','NORWAY','Norway','NOR',578,47),(161,'OM','OMAN','Oman','OMN',512,968),(162,'PK','PAKISTAN','Pakistan','PAK',586,92),(163,'PW','PALAU','Palau','PLW',585,680),(164,'PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL,970),(165,'PA','PANAMA','Panama','PAN',591,507),(166,'PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598,675),(167,'PY','PARAGUAY','Paraguay','PRY',600,595),(168,'PE','PERU','Peru','PER',604,51),(169,'PH','PHILIPPINES','Philippines','PHL',608,63),(170,'PN','PITCAIRN','Pitcairn','PCN',612,0),(171,'PL','POLAND','Poland','POL',616,48),(172,'PT','PORTUGAL','Portugal','PRT',620,351),(173,'PR','PUERTO RICO','Puerto Rico','PRI',630,1787),(174,'QA','QATAR','Qatar','QAT',634,974),(175,'RE','REUNION','Reunion','REU',638,262),(176,'RO','ROMANIA','Romania','ROM',642,40),(177,'RU','RUSSIAN FEDERATION','Russian Federation','RUS',643,70),(178,'RW','RWANDA','Rwanda','RWA',646,250),(179,'SH','SAINT HELENA','Saint Helena','SHN',654,290),(180,'KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659,1869),(181,'LC','SAINT LUCIA','Saint Lucia','LCA',662,1758),(182,'PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666,508),(183,'VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670,1784),(184,'WS','SAMOA','Samoa','WSM',882,684),(185,'SM','SAN MARINO','San Marino','SMR',674,378),(186,'ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678,239),(187,'SA','SAUDI ARABIA','Saudi Arabia','SAU',682,966),(188,'SN','SENEGAL','Senegal','SEN',686,221),(189,'CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL,381),(190,'SC','SEYCHELLES','Seychelles','SYC',690,248),(191,'SL','SIERRA LEONE','Sierra Leone','SLE',694,232),(192,'SG','SINGAPORE','Singapore','SGP',702,65),(193,'SK','SLOVAKIA','Slovakia','SVK',703,421),(194,'SI','SLOVENIA','Slovenia','SVN',705,386),(195,'SB','SOLOMON ISLANDS','Solomon Islands','SLB',90,677),(196,'SO','SOMALIA','Somalia','SOM',706,252),(197,'ZA','SOUTH AFRICA','South Africa','ZAF',710,27),(198,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL,0),(199,'ES','SPAIN','Spain','ESP',724,34),(200,'LK','SRI LANKA','Sri Lanka','LKA',144,94),(201,'SD','SUDAN','Sudan','SDN',736,249),(202,'SR','SURINAME','Suriname','SUR',740,597),(203,'SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744,47),(204,'SZ','SWAZILAND','Swaziland','SWZ',748,268),(205,'SE','SWEDEN','Sweden','SWE',752,46),(206,'CH','SWITZERLAND','Switzerland','CHE',756,41),(207,'SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760,963),(208,'TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158,886),(209,'TJ','TAJIKISTAN','Tajikistan','TJK',762,992),(210,'TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834,255),(211,'TH','THAILAND','Thailand','THA',764,66),(212,'TL','TIMOR-LESTE','Timor-Leste',NULL,NULL,670),(213,'TG','TOGO','Togo','TGO',768,228),(214,'TK','TOKELAU','Tokelau','TKL',772,690),(215,'TO','TONGA','Tonga','TON',776,676),(216,'TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780,1868),(217,'TN','TUNISIA','Tunisia','TUN',788,216),(218,'TR','TURKEY','Turkey','TUR',792,90),(219,'TM','TURKMENISTAN','Turkmenistan','TKM',795,7370),(220,'TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796,1649),(221,'TV','TUVALU','Tuvalu','TUV',798,688),(222,'UG','UGANDA','Uganda','UGA',800,256),(223,'UA','UKRAINE','Ukraine','UKR',804,380),(224,'AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784,971),(225,'GB','UNITED KINGDOM','United Kingdom','GBR',826,44),(226,'US','UNITED STATES','United States','USA',840,1),(227,'UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL,1),(228,'UY','URUGUAY','Uruguay','URY',858,598),(229,'UZ','UZBEKISTAN','Uzbekistan','UZB',860,998),(230,'VU','VANUATU','Vanuatu','VUT',548,678),(231,'VE','VENEZUELA','Venezuela','VEN',862,58),(232,'VN','VIET NAM','Viet Nam','VNM',704,84),(233,'VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92,1284),(234,'VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850,1340),(235,'WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876,681),(236,'EH','WESTERN SAHARA','Western Sahara','ESH',732,212),(237,'YE','YEMEN','Yemen','YEM',887,967),(238,'ZM','ZAMBIA','Zambia','ZMB',894,260),(239,'ZW','ZIMBABWE','Zimbabwe','ZWE',716,263);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupondiscounts`
--

DROP TABLE IF EXISTS `coupondiscounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupondiscounts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `code` tinytext NOT NULL,
  `coupon_id` int unsigned NOT NULL,
  `booking_id` tinytext NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `amount` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coupondiscounts_coupon_id_foreign` (`coupon_id`),
  KEY `coupondiscounts_subtrip_id_foreign` (`subtrip_id`),
  CONSTRAINT `coupondiscounts_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`),
  CONSTRAINT `coupondiscounts_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupondiscounts`
--

LOCK TABLES `coupondiscounts` WRITE;
/*!40000 ALTER TABLE `coupondiscounts` DISABLE KEYS */;
INSERT INTO `coupondiscounts` VALUES (4,'BUS1656332357',6,'TB8E4G57FO',38,'25','2022-06-28 15:08:21','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `coupondiscounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subtrip_id` int unsigned NOT NULL,
  `code` tinytext NOT NULL,
  `start_date` tinytext NOT NULL,
  `end_date` tinytext NOT NULL,
  `discount` tinytext NOT NULL,
  `condition` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (6,38,'BUS1656332357','2022-06-01','2029-01-01','25','Lorem Ipsum ','2022-06-27 18:20:06','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currencies` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `code` varchar(4) NOT NULL,
  `minor_unit` smallint NOT NULL,
  `symbol` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` VALUES (1,'Afghanistan','Afghani','AFN',2,'؋'),(2,'Åland Islands','Euro','EUR',2,'€'),(3,'Albania','Lek','ALL',2,'Lek'),(4,'Algeria','Algerian Dinar','DZD',2,''),(5,'American Samoa','US Dollar','USD',2,'$'),(6,'Andorra','Euro','EUR',2,'€'),(7,'Angola','Kwanza','AOA',2,''),(8,'Anguilla','East Caribbean Dollar','XCD',2,''),(9,'Antigua And Barbuda','East Caribbean Dollar','XCD',2,''),(10,'Argentina','Argentine Peso','ARS',2,'$'),(11,'Armenia','Armenian Dram','AMD',2,''),(12,'Aruba','Aruban Florin','AWG',2,''),(13,'Australia','Australian Dollar','AUD',2,'$'),(14,'Austria','Euro','EUR',2,'€'),(15,'Azerbaijan','Azerbaijan Manat','AZN',2,''),(16,'Bahamas','Bahamian Dollar','BSD',2,'$'),(17,'Bahrain','Bahraini Dinar','BHD',3,''),(18,'Bangladesh','Taka','BDT',2,'৳'),(19,'Barbados','Barbados Dollar','BBD',2,'$'),(20,'Belarus','Belarusian Ruble','BYN',2,''),(21,'Belgium','Euro','EUR',2,'€'),(22,'Belize','Belize Dollar','BZD',2,'BZ$'),(23,'Benin','CFA Franc BCEAO','XOF',0,''),(24,'Bermuda','Bermudian Dollar','BMD',2,''),(25,'Bhutan','Indian Rupee','INR',2,'₹'),(26,'Bhutan','Ngultrum','BTN',2,''),(27,'Bolivia','Boliviano','BOB',2,''),(28,'Bolivia','Mvdol','BOV',2,''),(29,'Bonaire, Sint Eustatius And Saba','US Dollar','USD',2,'$'),(30,'Bosnia And Herzegovina','Convertible Mark','BAM',2,''),(31,'Botswana','Pula','BWP',2,''),(32,'Bouvet Island','Norwegian Krone','NOK',2,''),(33,'Brazil','Brazilian Real','BRL',2,'R$'),(34,'British Indian Ocean Territory','US Dollar','USD',2,'$'),(35,'Brunei Darussalam','Brunei Dollar','BND',2,''),(36,'Bulgaria','Bulgarian Lev','BGN',2,'лв'),(37,'Burkina Faso','CFA Franc BCEAO','XOF',0,''),(38,'Burundi','Burundi Franc','BIF',0,''),(39,'Cabo Verde','Cabo Verde Escudo','CVE',2,''),(40,'Cambodia','Riel','KHR',2,'៛'),(41,'Cameroon','CFA Franc BEAC','XAF',0,''),(42,'Canada','Canadian Dollar','CAD',2,'$'),(43,'Cayman Islands','Cayman Islands Dollar','KYD',2,''),(44,'Central African Republic','CFA Franc BEAC','XAF',0,''),(45,'Chad','CFA Franc BEAC','XAF',0,''),(46,'Chile','Chilean Peso','CLP',0,'$'),(47,'Chile','Unidad de Fomento','CLF',4,''),(48,'China','Yuan Renminbi','CNY',2,'¥'),(49,'Christmas Island','Australian Dollar','AUD',2,''),(50,'Cocos (keeling) Islands','Australian Dollar','AUD',2,''),(51,'Colombia','Colombian Peso','COP',2,'$'),(52,'Colombia','Unidad de Valor Real','COU',2,''),(53,'Comoros','Comorian Franc ','KMF',0,''),(54,'Congo (the Democratic Republic Of The)','Congolese Franc','CDF',2,''),(55,'Congo','CFA Franc BEAC','XAF',0,''),(56,'Cook Islands','New Zealand Dollar','NZD',2,'$'),(57,'Costa Rica','Costa Rican Colon','CRC',2,''),(58,'Côte D\'ivoire','CFA Franc BCEAO','XOF',0,''),(59,'Croatia','Kuna','HRK',2,'kn'),(60,'Cuba','Cuban Peso','CUP',2,''),(61,'Cuba','Peso Convertible','CUC',2,''),(62,'Curaçao','Netherlands Antillean Guilder','ANG',2,''),(63,'Cyprus','Euro','EUR',2,'€'),(64,'Czechia','Czech Koruna','CZK',2,'Kč'),(65,'Denmark','Danish Krone','DKK',2,'kr'),(66,'Djibouti','Djibouti Franc','DJF',0,''),(67,'Dominica','East Caribbean Dollar','XCD',2,''),(68,'Dominican Republic','Dominican Peso','DOP',2,''),(69,'Ecuador','US Dollar','USD',2,'$'),(70,'Egypt','Egyptian Pound','EGP',2,''),(71,'El Salvador','El Salvador Colon','SVC',2,''),(72,'El Salvador','US Dollar','USD',2,'$'),(73,'Equatorial Guinea','CFA Franc BEAC','XAF',0,''),(74,'Eritrea','Nakfa','ERN',2,''),(75,'Estonia','Euro','EUR',2,'€'),(76,'Eswatini','Lilangeni','SZL',2,''),(77,'Ethiopia','Ethiopian Birr','ETB',2,''),(78,'European Union','Euro','EUR',2,'€'),(79,'Falkland Islands [Malvinas]','Falkland Islands Pound','FKP',2,''),(80,'Faroe Islands','Danish Krone','DKK',2,''),(81,'Fiji','Fiji Dollar','FJD',2,''),(82,'Finland','Euro','EUR',2,'€'),(83,'France','Euro','EUR',2,'€'),(84,'French Guiana','Euro','EUR',2,'€'),(85,'French Polynesia','CFP Franc','XPF',0,''),(86,'French Southern Territories','Euro','EUR',2,'€'),(87,'Gabon','CFA Franc BEAC','XAF',0,''),(88,'Gambia','Dalasi','GMD',2,''),(89,'Georgia','Lari','GEL',2,'₾'),(90,'Germany','Euro','EUR',2,'€'),(91,'Ghana','Ghana Cedi','GHS',2,''),(92,'Gibraltar','Gibraltar Pound','GIP',2,''),(93,'Greece','Euro','EUR',2,'€'),(94,'Greenland','Danish Krone','DKK',2,''),(95,'Grenada','East Caribbean Dollar','XCD',2,''),(96,'Guadeloupe','Euro','EUR',2,'€'),(97,'Guam','US Dollar','USD',2,'$'),(98,'Guatemala','Quetzal','GTQ',2,''),(99,'Guernsey','Pound Sterling','GBP',2,'£'),(100,'Guinea','Guinean Franc','GNF',0,''),(101,'Guinea-bissau','CFA Franc BCEAO','XOF',0,''),(102,'Guyana','Guyana Dollar','GYD',2,''),(103,'Haiti','Gourde','HTG',2,''),(104,'Haiti','US Dollar','USD',2,'$'),(105,'Heard Island And Mcdonald Islands','Australian Dollar','AUD',2,''),(106,'Holy See (Vatican)','Euro','EUR',2,'€'),(107,'Honduras','Lempira','HNL',2,''),(108,'Hong Kong','Hong Kong Dollar','HKD',2,'$'),(109,'Hungary','Forint','HUF',2,'ft'),(110,'Iceland','Iceland Krona','ISK',0,''),(111,'India','Indian Rupee','INR',2,'₹'),(112,'Indonesia','Rupiah','IDR',2,'Rp'),(113,'International Monetary Fund (IMF)','SDR (Special Drawing Right)','XDR',0,''),(114,'Iran','Iranian Rial','IRR',2,''),(115,'Iraq','Iraqi Dinar','IQD',3,''),(116,'Ireland','Euro','EUR',2,'€'),(117,'Isle Of Man','Pound Sterling','GBP',2,'£'),(118,'Israel','New Israeli Sheqel','ILS',2,'₪'),(119,'Italy','Euro','EUR',2,'€'),(120,'Jamaica','Jamaican Dollar','JMD',2,''),(121,'Japan','Yen','JPY',0,'¥'),(122,'Jersey','Pound Sterling','GBP',2,'£'),(123,'Jordan','Jordanian Dinar','JOD',3,''),(124,'Kazakhstan','Tenge','KZT',2,''),(125,'Kenya','Kenyan Shilling','KES',2,'Ksh'),(126,'Kiribati','Australian Dollar','AUD',2,''),(127,'Korea (the Democratic People’s Republic Of)','North Korean Won','KPW',2,''),(128,'Korea (the Republic Of)','Won','KRW',0,'₩'),(129,'Kuwait','Kuwaiti Dinar','KWD',3,''),(130,'Kyrgyzstan','Som','KGS',2,''),(131,'Lao People’s Democratic Republic','Lao Kip','LAK',2,''),(132,'Latvia','Euro','EUR',2,'€'),(133,'Lebanon','Lebanese Pound','LBP',2,''),(134,'Lesotho','Loti','LSL',2,''),(135,'Lesotho','Rand','ZAR',2,''),(136,'Liberia','Liberian Dollar','LRD',2,''),(137,'Libya','Libyan Dinar','LYD',3,''),(138,'Liechtenstein','Swiss Franc','CHF',2,''),(139,'Lithuania','Euro','EUR',2,'€'),(140,'Luxembourg','Euro','EUR',2,'€'),(141,'Macao','Pataca','MOP',2,''),(142,'North Macedonia','Denar','MKD',2,''),(143,'Madagascar','Malagasy Ariary','MGA',2,''),(144,'Malawi','Malawi Kwacha','MWK',2,''),(145,'Malaysia','Malaysian Ringgit','MYR',2,'RM'),(146,'Maldives','Rufiyaa','MVR',2,''),(147,'Mali','CFA Franc BCEAO','XOF',0,''),(148,'Malta','Euro','EUR',2,'€'),(149,'Marshall Islands','US Dollar','USD',2,'$'),(150,'Martinique','Euro','EUR',2,'€'),(151,'Mauritania','Ouguiya','MRU',2,''),(152,'Mauritius','Mauritius Rupee','MUR',2,''),(153,'Mayotte','Euro','EUR',2,'€'),(154,'Member Countries Of The African Development Bank Group','ADB Unit of Account','XUA',0,''),(155,'Mexico','Mexican Peso','MXN',2,'$'),(156,'Mexico','Mexican Unidad de Inversion (UDI)','MXV',2,''),(157,'Micronesia','US Dollar','USD',2,'$'),(158,'Moldova','Moldovan Leu','MDL',2,''),(159,'Monaco','Euro','EUR',2,'€'),(160,'Mongolia','Tugrik','MNT',2,''),(161,'Montenegro','Euro','EUR',2,'€'),(162,'Montserrat','East Caribbean Dollar','XCD',2,''),(163,'Morocco','Moroccan Dirham','MAD',2,' .د.م '),(164,'Mozambique','Mozambique Metical','MZN',2,''),(165,'Myanmar','Kyat','MMK',2,''),(166,'Namibia','Namibia Dollar','NAD',2,''),(167,'Namibia','Rand','ZAR',2,''),(168,'Nauru','Australian Dollar','AUD',2,''),(169,'Nepal','Nepalese Rupee','NPR',2,''),(170,'Netherlands','Euro','EUR',2,'€'),(171,'New Caledonia','CFP Franc','XPF',0,''),(172,'New Zealand','New Zealand Dollar','NZD',2,'$'),(173,'Nicaragua','Cordoba Oro','NIO',2,''),(174,'Niger','CFA Franc BCEAO','XOF',0,''),(175,'Nigeria','Naira','NGN',2,'₦'),(176,'Niue','New Zealand Dollar','NZD',2,'$'),(177,'Norfolk Island','Australian Dollar','AUD',2,''),(178,'Northern Mariana Islands','US Dollar','USD',2,'$'),(179,'Norway','Norwegian Krone','NOK',2,'kr'),(180,'Oman','Rial Omani','OMR',3,''),(181,'Pakistan','Pakistan Rupee','PKR',2,'Rs'),(182,'Palau','US Dollar','USD',2,'$'),(183,'Panama','Balboa','PAB',2,''),(184,'Panama','US Dollar','USD',2,'$'),(185,'Papua New Guinea','Kina','PGK',2,''),(186,'Paraguay','Guarani','PYG',0,''),(187,'Peru','Sol','PEN',2,'S'),(188,'Philippines','Philippine Peso','PHP',2,'₱'),(189,'Pitcairn','New Zealand Dollar','NZD',2,'$'),(190,'Poland','Zloty','PLN',2,'zł'),(191,'Portugal','Euro','EUR',2,'€'),(192,'Puerto Rico','US Dollar','USD',2,'$'),(193,'Qatar','Qatari Rial','QAR',2,''),(194,'Réunion','Euro','EUR',2,'€'),(195,'Romania','Romanian Leu','RON',2,'lei'),(196,'Russian Federation','Russian Ruble','RUB',2,'₽'),(197,'Rwanda','Rwanda Franc','RWF',0,''),(198,'Saint Barthélemy','Euro','EUR',2,'€'),(199,'Saint Helena, Ascension And Tristan Da Cunha','Saint Helena Pound','SHP',2,''),(200,'Saint Kitts And Nevis','East Caribbean Dollar','XCD',2,''),(201,'Saint Lucia','East Caribbean Dollar','XCD',2,''),(202,'Saint Martin (French Part)','Euro','EUR',2,'€'),(203,'Saint Pierre And Miquelon','Euro','EUR',2,'€'),(204,'Saint Vincent And The Grenadines','East Caribbean Dollar','XCD',2,''),(205,'Samoa','Tala','WST',2,''),(206,'San Marino','Euro','EUR',2,'€'),(207,'Sao Tome And Principe','Dobra','STN',2,''),(208,'Saudi Arabia','Saudi Riyal','SAR',2,''),(209,'Senegal','CFA Franc BCEAO','XOF',0,''),(210,'Serbia','Serbian Dinar','RSD',2,''),(211,'Seychelles','Seychelles Rupee','SCR',2,''),(212,'Sierra Leone','Leone','SLL',2,''),(213,'Singapore','Singapore Dollar','SGD',2,'$'),(214,'Sint Maarten (Dutch Part)','Netherlands Antillean Guilder','ANG',2,''),(215,'Sistema Unitario De Compensacion Regional De Pagos \"sucre\"\"\"','Sucre','XSU',0,''),(216,'Slovakia','Euro','EUR',2,'€'),(217,'Slovenia','Euro','EUR',2,'€'),(218,'Solomon Islands','Solomon Islands Dollar','SBD',2,''),(219,'Somalia','Somali Shilling','SOS',2,''),(220,'South Africa','Rand','ZAR',2,'R'),(221,'South Sudan','South Sudanese Pound','SSP',2,''),(222,'Spain','Euro','EUR',2,'€'),(223,'Sri Lanka','Sri Lanka Rupee','LKR',2,'Rs'),(224,'Sudan (the)','Sudanese Pound','SDG',2,''),(225,'Suriname','Surinam Dollar','SRD',2,''),(226,'Svalbard And Jan Mayen','Norwegian Krone','NOK',2,''),(227,'Sweden','Swedish Krona','SEK',2,'kr'),(228,'Switzerland','Swiss Franc','CHF',2,''),(229,'Switzerland','WIR Euro','CHE',2,''),(230,'Switzerland','WIR Franc','CHW',2,''),(231,'Syrian Arab Republic','Syrian Pound','SYP',2,''),(232,'Taiwan','New Taiwan Dollar','TWD',2,''),(233,'Tajikistan','Somoni','TJS',2,''),(234,'Tanzania, United Republic Of','Tanzanian Shilling','TZS',2,''),(235,'Thailand','Baht','THB',2,'฿'),(236,'Timor-leste','US Dollar','USD',2,'$'),(237,'Togo','CFA Franc BCEAO','XOF',0,''),(238,'Tokelau','New Zealand Dollar','NZD',2,'$'),(239,'Tonga','Pa’anga','TOP',2,''),(240,'Trinidad And Tobago','Trinidad and Tobago Dollar','TTD',2,''),(241,'Tunisia','Tunisian Dinar','TND',3,''),(242,'Turkey','Turkish Lira','TRY',2,'₺'),(243,'Turkmenistan','Turkmenistan New Manat','TMT',2,''),(244,'Turks And Caicos Islands','US Dollar','USD',2,'$'),(245,'Tuvalu','Australian Dollar','AUD',2,''),(246,'Uganda','Uganda Shilling','UGX',0,''),(247,'Ukraine','Hryvnia','UAH',2,'₴'),(248,'United Arab Emirates','UAE Dirham','AED',2,'د.إ'),(249,'United Kingdom Of Great Britain And Northern Ireland','Pound Sterling','GBP',2,'£'),(250,'United States Minor Outlying Islands','US Dollar','USD',2,'$'),(251,'United States Of America','US Dollar','USD',2,'$'),(252,'United States Of America','US Dollar (Next day)','USN',2,''),(253,'Uruguay','Peso Uruguayo','UYU',2,''),(254,'Uruguay','Uruguay Peso en Unidades Indexadas (UI)','UYI',0,''),(255,'Uruguay','Unidad Previsional','UYW',4,''),(256,'Uzbekistan','Uzbekistan Sum','UZS',2,''),(257,'Vanuatu','Vatu','VUV',0,''),(258,'Venezuela','Bolívar Soberano','VES',2,''),(259,'Vietnam','Dong','VND',0,'₫'),(260,'Virgin Islands (British)','US Dollar','USD',2,'$'),(261,'Virgin Islands (U.S.)','US Dollar','USD',2,'$'),(262,'Wallis And Futuna','CFP Franc','XPF',0,''),(263,'Western Sahara','Moroccan Dirham','MAD',2,''),(264,'Yemen','Yemeni Rial','YER',2,''),(265,'Zambia','Zambian Kwacha','ZMW',2,''),(266,'Zimbabwe','Zimbabwe Dollar','ZWL',2,'');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `protocol` varchar(100) NOT NULL,
  `smtphost` varchar(100) NOT NULL,
  `smtpuser` varchar(100) NOT NULL,
  `smtppass` varchar(100) NOT NULL,
  `smtpport` varchar(100) NOT NULL,
  `smtpcrypto` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,'smtp','soft31.bdtask.com','bus365@soft31.bdtask.com','bus365email','465','ssl','2022-05-19 14:13:02','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `employeetype_id` int unsigned NOT NULL,
  `country_id` int unsigned NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood` tinytext NOT NULL,
  `id_type` varchar(100) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `nid_picture` tinytext NOT NULL,
  `profile_picture` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `zip` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nid` (`nid`),
  KEY `employees_employeetype_id_foreign` (`employeetype_id`),
  KEY `employees_country_id_foreign` (`country_id`),
  CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  CONSTRAINT `employees_employeetype_id_foreign` FOREIGN KEY (`employeetype_id`) REFERENCES `employeetypes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (10,1,18,'Driver','A','111111100000','da@d.com','A+','Nid','nid1111','','image/employee/1656319423_aba22ab1e1a60a722da2.jpg','lorem ipsum, lorem inpsum','dhaka','1213','2022-06-27 14:43:43','2023-01-21 10:11:38',NULL),(11,1,18,'Driver','B','222222211111','db@d.com','A+','Nid','nid1122','','image/employee/1656319507_fab58576cf417cae5003.jpg','lorem ipsum, lorem ipsume','dhaka','1213','2022-06-27 14:45:07','2023-01-21 10:11:38',NULL),(12,1,18,'Driver','C','333332222','dc@d.com','A+','Nid','dc1111','','image/employee/1656319592_cdd3f1f37a964ed1ef88.jpg','lorem ipsum, lorem ipsum','dhaka','1213','2022-06-27 14:46:32','2023-01-21 10:11:38',NULL),(13,2,18,'Assistant','A','44444433333','aa@a.cm','A+','Nid','aa111','','image/employee/1656319755_29d3dd5d516de7d8ee73.jpg','lorem ipsum, lorem ipsum','dhaka','1213','2022-06-27 14:49:15','2023-01-21 10:11:38',NULL),(14,2,18,'Assistant','B','555554444','ab@a.cm','A+','Nid','ab111','','image/employee/1656319814_01dd3f25eb37cfd16ce6.jpg','lorem ipsum, lorem ipsum','dhaka','1213','2022-06-27 14:50:14','2023-01-21 10:11:38',NULL),(15,2,18,'Assistant','C','66666655555','ac@a.cm','A+','Nid','ac111','','image/employee/1656319856_9ef2b1e9d13146f3588d.jpg','lorem ipsum, lorem ipsum','dhaka','1213','2022-06-27 14:50:56','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeetypes`
--

DROP TABLE IF EXISTS `employeetypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employeetypes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeetypes`
--

LOCK TABLES `employeetypes` WRITE;
/*!40000 ALTER TABLE `employeetypes` DISABLE KEYS */;
INSERT INTO `employeetypes` VALUES (1,'Driver','','2022-06-27 11:01:56','2023-01-21 10:11:38',NULL),(2,'Assistant ','','2022-06-27 11:01:56','2023-01-21 10:11:38',NULL),(3,'Ohter ','','2022-06-27 11:02:56','2023-01-21 10:12:38',NULL);
/*!40000 ALTER TABLE `employeetypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilitys`
--

DROP TABLE IF EXISTS `facilitys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facilitys` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilitys`
--

LOCK TABLES `facilitys` WRITE;
/*!40000 ALTER TABLE `facilitys` DISABLE KEYS */;
INSERT INTO `facilitys` VALUES (1,'Water Bottol','2021-11-05 23:36:47','2023-01-21 10:11:38',NULL),(2,'Blanket','2021-11-05 23:37:07','2023-01-21 10:11:38',NULL),(3,'Wifi','2021-11-05 23:37:14','2023-01-21 10:11:38',NULL),(4,'Lunch','2022-06-21 16:47:56','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `facilitys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqquestions`
--

DROP TABLE IF EXISTS `faqquestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqquestions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `question` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqquestions`
--

LOCK TABLES `faqquestions` WRITE;
/*!40000 ALTER TABLE `faqquestions` DISABLE KEYS */;
INSERT INTO `faqquestions` VALUES (3,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n','2022-06-27 13:08:53','2023-01-21 10:11:38',NULL),(4,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n','2022-06-27 13:11:09','2023-01-21 10:11:38',NULL),(5,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:11:35','2023-01-21 10:11:38',NULL),(6,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:11:51','2023-01-21 10:11:38',NULL),(7,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:11:59','2023-01-21 10:11:38',NULL),(8,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:12:07','2023-01-21 10:11:38',NULL),(9,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:12:29','2023-01-21 10:11:38',NULL),(10,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:12:38','2023-01-21 10:11:38',NULL),(11,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:12:55','2023-01-21 10:11:38',NULL),(12,'Lorem Ipsum is simply dummy text of the printing and typesetting industry ?','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>\r\n','2022-06-27 13:13:04','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `faqquestions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Faq Page Title Lorem Ipsum','Faq Page sub-Title Lorem Ipsum','2021-12-19 14:27:00','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fitnesses`
--

DROP TABLE IF EXISTS `fitnesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fitnesses` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int unsigned NOT NULL,
  `fitness_name` tinytext NOT NULL,
  `start_date` tinytext NOT NULL,
  `end_date` tinytext NOT NULL,
  `start_milage` tinytext NOT NULL,
  `end_milage` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitnesses`
--

LOCK TABLES `fitnesses` WRITE;
/*!40000 ALTER TABLE `fitnesses` DISABLE KEYS */;
/*!40000 ALTER TABLE `fitnesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fleets`
--

DROP TABLE IF EXISTS `fleets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fleets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `layout` text NOT NULL,
  `last_seat` varchar(100) NOT NULL,
  `total_seat` int NOT NULL,
  `seat_number` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `luggage_service` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fleets`
--

LOCK TABLES `fleets` WRITE;
/*!40000 ALTER TABLE `fleets` DISABLE KEYS */;
INSERT INTO `fleets` VALUES (6,'AC','2-2','1',36,'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,I1,I2,I3,I4,Z','1','1','2022-06-27 14:52:27','2023-01-21 10:11:38',NULL),(7,'BUSINESS-CLASS','1-1','1',22,'A1,A2,B1,B2,C1,C2,D1,D2,E1,E2,F1,F2,G1,G2,H1,H2,I1,I2,J1,J2,K1,K2,Z','1','1','2022-06-27 14:53:06','2023-01-21 10:11:38',NULL),(8,'NON-AC','2-2','1',40,'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,I1,I2,I3,I4,J1,J2,J3,J4,Z','1','1','2022-06-27 14:53:25','2023-01-21 10:11:38',NULL),(9,'LOCAL','2-2','0',42,'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,I1,I2,I3,I4,J1,J2,J3,J4,K1,K2','1','1','2022-06-27 14:54:19','2023-01-21 10:11:38',NULL),(10,'WORLD-CLASS','2-1','1',26,'A1,A2,A3,B1,B2,B3,C1,C2,C3,D1,D2,D3,E1,E2,E3,F1,F2,F3,G1,G2,G3,H1,H2,H3,I1,I2,Z','1','1','2022-06-27 14:54:56','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `fleets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flutterwaves`
--

DROP TABLE IF EXISTS `flutterwaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `flutterwaves` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `live_public_key` varchar(100) NOT NULL,
  `live_secret_key` varchar(100) NOT NULL,
  `live_encryption_key` varchar(100) NOT NULL,
  `test_public_key` varchar(100) NOT NULL,
  `test_secret_key` varchar(100) NOT NULL,
  `test_encryption_key` varchar(100) NOT NULL,
  `environment` tinyint NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flutterwaves`
--

LOCK TABLES `flutterwaves` WRITE;
/*!40000 ALTER TABLE `flutterwaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `flutterwaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonts`
--

DROP TABLE IF EXISTS `fonts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fonts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `font_name` tinytext NOT NULL,
  `font_display` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1335 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonts`
--

LOCK TABLES `fonts` WRITE;
/*!40000 ALTER TABLE `fonts` DISABLE KEYS */;
INSERT INTO `fonts` VALUES (1,'ABeeZee','ABeeZee'),(2,'Abel','Abel'),(3,'Abhaya Libre','Abhaya Libre'),(4,'Abril Fatface','Abril Fatface'),(5,'Aclonica','Aclonica'),(6,'Acme','Acme'),(7,'Actor','Actor'),(8,'Adamina','Adamina'),(9,'Advent Pro','Advent Pro'),(10,'Aguafina Script','Aguafina Script'),(11,'Akaya Kanadaka','Akaya Kanadaka'),(12,'Akaya Telivigala','Akaya Telivigala'),(13,'Akronim','Akronim'),(14,'Aladin','Aladin'),(15,'Alata','Alata'),(16,'Alatsi','Alatsi'),(17,'Aldrich','Aldrich'),(18,'Alef','Alef'),(19,'Alegreya','Alegreya'),(20,'Alegreya SC','Alegreya SC'),(21,'Alegreya Sans','Alegreya Sans'),(22,'Alegreya Sans SC','Alegreya Sans SC'),(23,'Aleo','Aleo'),(24,'Alex Brush','Alex Brush'),(25,'Alfa Slab One','Alfa Slab One'),(26,'Alice','Alice'),(27,'Alike','Alike'),(28,'Alike Angular','Alike Angular'),(29,'Allan','Allan'),(30,'Allerta','Allerta'),(31,'Allerta Stencil','Allerta Stencil'),(32,'Allison','Allison'),(33,'Allura','Allura'),(34,'Almarai','Almarai'),(35,'Almendra','Almendra'),(36,'Almendra Display','Almendra Display'),(37,'Almendra SC','Almendra SC'),(38,'Alumni Sans','Alumni Sans'),(39,'Amarante','Amarante'),(40,'Amaranth','Amaranth'),(41,'Amatic SC','Amatic SC'),(42,'Amethysta','Amethysta'),(43,'Amiko','Amiko'),(44,'Amiri','Amiri'),(45,'Amita','Amita'),(46,'Anaheim','Anaheim'),(47,'Andada Pro','Andada Pro'),(48,'Andika','Andika'),(49,'Andika New Basic','Andika New Basic'),(50,'Angkor','Angkor'),(51,'Annie Use Your Telescope','Annie Use Your Telescope'),(52,'Anonymous Pro','Anonymous Pro'),(53,'Antic','Antic'),(54,'Antic Didone','Antic Didone'),(55,'Antic Slab','Antic Slab'),(56,'Anton','Anton'),(57,'Antonio','Antonio'),(58,'Arapey','Arapey'),(59,'Arbutus','Arbutus'),(60,'Arbutus Slab','Arbutus Slab'),(61,'Architects Daughter','Architects Daughter'),(62,'Archivo','Archivo'),(63,'Archivo Black','Archivo Black'),(64,'Archivo Narrow','Archivo Narrow'),(65,'Are You Serious','Are You Serious'),(66,'Aref Ruqaa','Aref Ruqaa'),(67,'Arima Madurai','Arima Madurai'),(68,'Arimo','Arimo'),(69,'Arizonia','Arizonia'),(70,'Armata','Armata'),(71,'Arsenal','Arsenal'),(72,'Artifika','Artifika'),(73,'Arvo','Arvo'),(74,'Arya','Arya'),(75,'Asap','Asap'),(76,'Asap Condensed','Asap Condensed'),(77,'Asar','Asar'),(78,'Asset','Asset'),(79,'Assistant','Assistant'),(80,'Astloch','Astloch'),(81,'Asul','Asul'),(82,'Athiti','Athiti'),(83,'Atkinson Hyperlegible','Atkinson Hyperlegible'),(84,'Atma','Atma'),(85,'Atomic Age','Atomic Age'),(86,'Aubrey','Aubrey'),(87,'Audiowide','Audiowide'),(88,'Autour One','Autour One'),(89,'Average','Average'),(90,'Average Sans','Average Sans'),(91,'Averia Gruesa Libre','Averia Gruesa Libre'),(92,'Averia Libre','Averia Libre'),(93,'Averia Sans Libre','Averia Sans Libre'),(94,'Averia Serif Libre','Averia Serif Libre'),(95,'Azeret Mono','Azeret Mono'),(96,'B612','B612'),(97,'B612 Mono','B612 Mono'),(98,'Bad Script','Bad Script'),(99,'Bahiana','Bahiana'),(100,'Bahianita','Bahianita'),(101,'Bai Jamjuree','Bai Jamjuree'),(102,'Bakbak One','Bakbak One'),(103,'Ballet','Ballet'),(104,'Baloo 2','Baloo 2'),(105,'Baloo Bhai 2','Baloo Bhai 2'),(106,'Baloo Bhaijaan 2','Baloo Bhaijaan 2'),(107,'Baloo Bhaina 2','Baloo Bhaina 2'),(108,'Baloo Chettan 2','Baloo Chettan 2'),(109,'Baloo Da 2','Baloo Da 2'),(110,'Baloo Paaji 2','Baloo Paaji 2'),(111,'Baloo Tamma 2','Baloo Tamma 2'),(112,'Baloo Tammudu 2','Baloo Tammudu 2'),(113,'Baloo Thambi 2','Baloo Thambi 2'),(114,'Balsamiq Sans','Balsamiq Sans'),(115,'Balthazar','Balthazar'),(116,'Bangers','Bangers'),(117,'Barlow','Barlow'),(118,'Barlow Condensed','Barlow Condensed'),(119,'Barlow Semi Condensed','Barlow Semi Condensed'),(120,'Barriecito','Barriecito'),(121,'Barrio','Barrio'),(122,'Basic','Basic'),(123,'Baskervville','Baskervville'),(124,'Battambang','Battambang'),(125,'Baumans','Baumans'),(126,'Bayon','Bayon'),(127,'Be Vietnam Pro','Be Vietnam Pro'),(128,'Bebas Neue','Bebas Neue'),(129,'Belgrano','Belgrano'),(130,'Bellefair','Bellefair'),(131,'Belleza','Belleza'),(132,'Bellota','Bellota'),(133,'Bellota Text','Bellota Text'),(134,'BenchNine','BenchNine'),(135,'Benne','Benne'),(136,'Bentham','Bentham'),(137,'Berkshire Swash','Berkshire Swash'),(138,'Besley','Besley'),(139,'Beth Ellen','Beth Ellen'),(140,'Bevan','Bevan'),(141,'Big Shoulders Display','Big Shoulders Display'),(142,'Big Shoulders Inline Display','Big Shoulders Inline Display'),(143,'Big Shoulders Inline Text','Big Shoulders Inline Text'),(144,'Big Shoulders Stencil Display','Big Shoulders Stencil Display'),(145,'Big Shoulders Stencil Text','Big Shoulders Stencil Text'),(146,'Big Shoulders Text','Big Shoulders Text'),(147,'Bigelow Rules','Bigelow Rules'),(148,'Bigshot One','Bigshot One'),(149,'Bilbo','Bilbo'),(150,'Bilbo Swash Caps','Bilbo Swash Caps'),(151,'BioRhyme','BioRhyme'),(152,'BioRhyme Expanded','BioRhyme Expanded'),(153,'Birthstone','Birthstone'),(154,'Birthstone Bounce','Birthstone Bounce'),(155,'Biryani','Biryani'),(156,'Bitter','Bitter'),(157,'Black And White Picture','Black And White Picture'),(158,'Black Han Sans','Black Han Sans'),(159,'Black Ops One','Black Ops One'),(160,'Blinker','Blinker'),(161,'Bodoni Moda','Bodoni Moda'),(162,'Bokor','Bokor'),(163,'Bona Nova','Bona Nova'),(164,'Bonbon','Bonbon'),(165,'Bonheur Royale','Bonheur Royale'),(166,'Boogaloo','Boogaloo'),(167,'Bowlby One','Bowlby One'),(168,'Bowlby One SC','Bowlby One SC'),(169,'Brawler','Brawler'),(170,'Bree Serif','Bree Serif'),(171,'Brygada 1918','Brygada 1918'),(172,'Bubblegum Sans','Bubblegum Sans'),(173,'Bubbler One','Bubbler One'),(174,'Buda','Buda'),(175,'Buenard','Buenard'),(176,'Bungee','Bungee'),(177,'Bungee Hairline','Bungee Hairline'),(178,'Bungee Inline','Bungee Inline'),(179,'Bungee Outline','Bungee Outline'),(180,'Bungee Shade','Bungee Shade'),(181,'Butcherman','Butcherman'),(182,'Butterfly Kids','Butterfly Kids'),(183,'Cabin','Cabin'),(184,'Cabin Condensed','Cabin Condensed'),(185,'Cabin Sketch','Cabin Sketch'),(186,'Caesar Dressing','Caesar Dressing'),(187,'Cagliostro','Cagliostro'),(188,'Cairo','Cairo'),(189,'Caladea','Caladea'),(190,'Calistoga','Calistoga'),(191,'Calligraffitti','Calligraffitti'),(192,'Cambay','Cambay'),(193,'Cambo','Cambo'),(194,'Candal','Candal'),(195,'Cantarell','Cantarell'),(196,'Cantata One','Cantata One'),(197,'Cantora One','Cantora One'),(198,'Capriola','Capriola'),(199,'Caramel','Caramel'),(200,'Carattere','Carattere'),(201,'Cardo','Cardo'),(202,'Carme','Carme'),(203,'Carrois Gothic','Carrois Gothic'),(204,'Carrois Gothic SC','Carrois Gothic SC'),(205,'Carter One','Carter One'),(206,'Castoro','Castoro'),(207,'Catamaran','Catamaran'),(208,'Caudex','Caudex'),(209,'Caveat','Caveat'),(210,'Caveat Brush','Caveat Brush'),(211,'Cedarville Cursive','Cedarville Cursive'),(212,'Ceviche One','Ceviche One'),(213,'Chakra Petch','Chakra Petch'),(214,'Changa','Changa'),(215,'Changa One','Changa One'),(216,'Chango','Chango'),(217,'Charm','Charm'),(218,'Charmonman','Charmonman'),(219,'Chathura','Chathura'),(220,'Chau Philomene One','Chau Philomene One'),(221,'Chela One','Chela One'),(222,'Chelsea Market','Chelsea Market'),(223,'Chenla','Chenla'),(224,'Cherish','Cherish'),(225,'Cherry Cream Soda','Cherry Cream Soda'),(226,'Cherry Swash','Cherry Swash'),(227,'Chewy','Chewy'),(228,'Chicle','Chicle'),(229,'Chilanka','Chilanka'),(230,'Chivo','Chivo'),(231,'Chonburi','Chonburi'),(232,'Cinzel','Cinzel'),(233,'Cinzel Decorative','Cinzel Decorative'),(234,'Clicker Script','Clicker Script'),(235,'Coda','Coda'),(236,'Coda Caption','Coda Caption'),(237,'Codystar','Codystar'),(238,'Coiny','Coiny'),(239,'Combo','Combo'),(240,'Comfortaa','Comfortaa'),(241,'Comforter','Comforter'),(242,'Comforter Brush','Comforter Brush'),(243,'Comic Neue','Comic Neue'),(244,'Coming Soon','Coming Soon'),(245,'Commissioner','Commissioner'),(246,'Concert One','Concert One'),(247,'Condiment','Condiment'),(248,'Content','Content'),(249,'Contrail One','Contrail One'),(250,'Convergence','Convergence'),(251,'Cookie','Cookie'),(252,'Copse','Copse'),(253,'Corben','Corben'),(254,'Corinthia','Corinthia'),(255,'Cormorant','Cormorant'),(256,'Cormorant Garamond','Cormorant Garamond'),(257,'Cormorant Infant','Cormorant Infant'),(258,'Cormorant SC','Cormorant SC'),(259,'Cormorant Unicase','Cormorant Unicase'),(260,'Cormorant Upright','Cormorant Upright'),(261,'Courgette','Courgette'),(262,'Courier Prime','Courier Prime'),(263,'Cousine','Cousine'),(264,'Coustard','Coustard'),(265,'Covered By Your Grace','Covered By Your Grace'),(266,'Crafty Girls','Crafty Girls'),(267,'Creepster','Creepster'),(268,'Crete Round','Crete Round'),(269,'Crimson Pro','Crimson Pro'),(270,'Croissant One','Croissant One'),(271,'Crushed','Crushed'),(272,'Cuprum','Cuprum'),(273,'Cute Font','Cute Font'),(274,'Cutive','Cutive'),(275,'Cutive Mono','Cutive Mono'),(276,'DM Mono','DM Mono'),(277,'DM Sans','DM Sans'),(278,'DM Serif Display','DM Serif Display'),(279,'DM Serif Text','DM Serif Text'),(280,'Damion','Damion'),(281,'Dancing Script','Dancing Script'),(282,'Dangrek','Dangrek'),(283,'Darker Grotesque','Darker Grotesque'),(284,'David Libre','David Libre'),(285,'Dawning of a New Day','Dawning of a New Day'),(286,'Days One','Days One'),(287,'Dekko','Dekko'),(288,'Dela Gothic One','Dela Gothic One'),(289,'Delius','Delius'),(290,'Delius Swash Caps','Delius Swash Caps'),(291,'Delius Unicase','Delius Unicase'),(292,'Della Respira','Della Respira'),(293,'Denk One','Denk One'),(294,'Devonshire','Devonshire'),(295,'Dhurjati','Dhurjati'),(296,'Didact Gothic','Didact Gothic'),(297,'Diplomata','Diplomata'),(298,'Diplomata SC','Diplomata SC'),(299,'Do Hyeon','Do Hyeon'),(300,'Dokdo','Dokdo'),(301,'Domine','Domine'),(302,'Donegal One','Donegal One'),(303,'Dongle','Dongle'),(304,'Doppio One','Doppio One'),(305,'Dorsa','Dorsa'),(306,'Dosis','Dosis'),(307,'DotGothic16','DotGothic16'),(308,'Dr Sugiyama','Dr Sugiyama'),(309,'Duru Sans','Duru Sans'),(310,'Dynalight','Dynalight'),(311,'EB Garamond','EB Garamond'),(312,'Eagle Lake','Eagle Lake'),(313,'East Sea Dokdo','East Sea Dokdo'),(314,'Eater','Eater'),(315,'Economica','Economica'),(316,'Eczar','Eczar'),(317,'El Messiri','El Messiri'),(318,'Electrolize','Electrolize'),(319,'Elsie','Elsie'),(320,'Elsie Swash Caps','Elsie Swash Caps'),(321,'Emblema One','Emblema One'),(322,'Emilys Candy','Emilys Candy'),(323,'Encode Sans','Encode Sans'),(324,'Encode Sans Condensed','Encode Sans Condensed'),(325,'Encode Sans Expanded','Encode Sans Expanded'),(326,'Encode Sans SC','Encode Sans SC'),(327,'Encode Sans Semi Condensed','Encode Sans Semi Condensed'),(328,'Encode Sans Semi Expanded','Encode Sans Semi Expanded'),(329,'Engagement','Engagement'),(330,'Englebert','Englebert'),(331,'Enriqueta','Enriqueta'),(332,'Ephesis','Ephesis'),(333,'Epilogue','Epilogue'),(334,'Erica One','Erica One'),(335,'Esteban','Esteban'),(336,'Estonia','Estonia'),(337,'Euphoria Script','Euphoria Script'),(338,'Ewert','Ewert'),(339,'Exo','Exo'),(340,'Exo 2','Exo 2'),(341,'Expletus Sans','Expletus Sans'),(342,'Explora','Explora'),(343,'Fahkwang','Fahkwang'),(344,'Fanwood Text','Fanwood Text'),(345,'Farro','Farro'),(346,'Farsan','Farsan'),(347,'Fascinate','Fascinate'),(348,'Fascinate Inline','Fascinate Inline'),(349,'Faster One','Faster One'),(350,'Fasthand','Fasthand'),(351,'Fauna One','Fauna One'),(352,'Faustina','Faustina'),(353,'Federant','Federant'),(354,'Federo','Federo'),(355,'Felipa','Felipa'),(356,'Fenix','Fenix'),(357,'Festive','Festive'),(358,'Finger Paint','Finger Paint'),(359,'Fira Code','Fira Code'),(360,'Fira Mono','Fira Mono'),(361,'Fira Sans','Fira Sans'),(362,'Fira Sans Condensed','Fira Sans Condensed'),(363,'Fira Sans Extra Condensed','Fira Sans Extra Condensed'),(364,'Fjalla One','Fjalla One'),(365,'Fjord One','Fjord One'),(366,'Flamenco','Flamenco'),(367,'Flavors','Flavors'),(368,'Fleur De Leah','Fleur De Leah'),(369,'Flow Block','Flow Block'),(370,'Flow Circular','Flow Circular'),(371,'Flow Rounded','Flow Rounded'),(372,'Fondamento','Fondamento'),(373,'Fontdiner Swanky','Fontdiner Swanky'),(374,'Forum','Forum'),(375,'Francois One','Francois One'),(376,'Frank Ruhl Libre','Frank Ruhl Libre'),(377,'Fraunces','Fraunces'),(378,'Freckle Face','Freckle Face'),(379,'Fredericka the Great','Fredericka the Great'),(380,'Fredoka One','Fredoka One'),(381,'Freehand','Freehand'),(382,'Fresca','Fresca'),(383,'Frijole','Frijole'),(384,'Fruktur','Fruktur'),(385,'Fugaz One','Fugaz One'),(386,'Fuggles','Fuggles'),(387,'Fuzzy Bubbles','Fuzzy Bubbles'),(388,'GFS Didot','GFS Didot'),(389,'GFS Neohellenic','GFS Neohellenic'),(390,'Gabriela','Gabriela'),(391,'Gaegu','Gaegu'),(392,'Gafata','Gafata'),(393,'Galada','Galada'),(394,'Galdeano','Galdeano'),(395,'Galindo','Galindo'),(396,'Gamja Flower','Gamja Flower'),(397,'Gayathri','Gayathri'),(398,'Gelasio','Gelasio'),(399,'Gemunu Libre','Gemunu Libre'),(400,'Genos','Genos'),(401,'Gentium Basic','Gentium Basic'),(402,'Gentium Book Basic','Gentium Book Basic'),(403,'Geo','Geo'),(404,'Georama','Georama'),(405,'Geostar','Geostar'),(406,'Geostar Fill','Geostar Fill'),(407,'Germania One','Germania One'),(408,'Gideon Roman','Gideon Roman'),(409,'Gidugu','Gidugu'),(410,'Gilda Display','Gilda Display'),(411,'Girassol','Girassol'),(412,'Give You Glory','Give You Glory'),(413,'Glass Antiqua','Glass Antiqua'),(414,'Glegoo','Glegoo'),(415,'Gloria Hallelujah','Gloria Hallelujah'),(416,'Glory','Glory'),(417,'Gluten','Gluten'),(418,'Goblin One','Goblin One'),(419,'Gochi Hand','Gochi Hand'),(420,'Goldman','Goldman'),(421,'Gorditas','Gorditas'),(422,'Gothic A1','Gothic A1'),(423,'Gotu','Gotu'),(424,'Goudy Bookletter 1911','Goudy Bookletter 1911'),(425,'Gowun Batang','Gowun Batang'),(426,'Gowun Dodum','Gowun Dodum'),(427,'Graduate','Graduate'),(428,'Grand Hotel','Grand Hotel'),(429,'Grandstander','Grandstander'),(430,'Gravitas One','Gravitas One'),(431,'Great Vibes','Great Vibes'),(432,'Grechen Fuemen','Grechen Fuemen'),(433,'Grenze','Grenze'),(434,'Grenze Gotisch','Grenze Gotisch'),(435,'Grey Qo','Grey Qo'),(436,'Griffy','Griffy'),(437,'Gruppo','Gruppo'),(438,'Gudea','Gudea'),(439,'Gugi','Gugi'),(440,'Gupter','Gupter'),(441,'Gurajada','Gurajada'),(442,'Gwendolyn','Gwendolyn'),(443,'Habibi','Habibi'),(444,'Hachi Maru Pop','Hachi Maru Pop'),(445,'Hahmlet','Hahmlet'),(446,'Halant','Halant'),(447,'Hammersmith One','Hammersmith One'),(448,'Hanalei','Hanalei'),(449,'Hanalei Fill','Hanalei Fill'),(450,'Handlee','Handlee'),(451,'Hanuman','Hanuman'),(452,'Happy Monkey','Happy Monkey'),(453,'Harmattan','Harmattan'),(454,'Headland One','Headland One'),(455,'Heebo','Heebo'),(456,'Henny Penny','Henny Penny'),(457,'Hepta Slab','Hepta Slab'),(458,'Herr Von Muellerhoff','Herr Von Muellerhoff'),(459,'Hi Melody','Hi Melody'),(460,'Hina Mincho','Hina Mincho'),(461,'Hind','Hind'),(462,'Hind Guntur','Hind Guntur'),(463,'Hind Madurai','Hind Madurai'),(464,'Hind Siliguri','Hind Siliguri'),(465,'Hind Vadodara','Hind Vadodara'),(466,'Holtwood One SC','Holtwood One SC'),(467,'Homemade Apple','Homemade Apple'),(468,'Homenaje','Homenaje'),(469,'Hurricane','Hurricane'),(470,'IBM Plex Mono','IBM Plex Mono'),(471,'IBM Plex Sans','IBM Plex Sans'),(472,'IBM Plex Sans Arabic','IBM Plex Sans Arabic'),(473,'IBM Plex Sans Condensed','IBM Plex Sans Condensed'),(474,'IBM Plex Sans Devanagari','IBM Plex Sans Devanagari'),(475,'IBM Plex Sans Hebrew','IBM Plex Sans Hebrew'),(476,'IBM Plex Sans KR','IBM Plex Sans KR'),(477,'IBM Plex Sans Thai','IBM Plex Sans Thai'),(478,'IBM Plex Sans Thai Looped','IBM Plex Sans Thai Looped'),(479,'IBM Plex Serif','IBM Plex Serif'),(480,'IM Fell DW Pica','IM Fell DW Pica'),(481,'IM Fell DW Pica SC','IM Fell DW Pica SC'),(482,'IM Fell Double Pica','IM Fell Double Pica'),(483,'IM Fell Double Pica SC','IM Fell Double Pica SC'),(484,'IM Fell English','IM Fell English'),(485,'IM Fell English SC','IM Fell English SC'),(486,'IM Fell French Canon','IM Fell French Canon'),(487,'IM Fell French Canon SC','IM Fell French Canon SC'),(488,'IM Fell Great Primer','IM Fell Great Primer'),(489,'IM Fell Great Primer SC','IM Fell Great Primer SC'),(490,'Ibarra Real Nova','Ibarra Real Nova'),(491,'Iceberg','Iceberg'),(492,'Iceland','Iceland'),(493,'Imbue','Imbue'),(494,'Imprima','Imprima'),(495,'Inconsolata','Inconsolata'),(496,'Inder','Inder'),(497,'Indie Flower','Indie Flower'),(498,'Inika','Inika'),(499,'Inknut Antiqua','Inknut Antiqua'),(500,'Inria Sans','Inria Sans'),(501,'Inria Serif','Inria Serif'),(502,'Inter','Inter'),(503,'Irish Grover','Irish Grover'),(504,'Istok Web','Istok Web'),(505,'Italiana','Italiana'),(506,'Italianno','Italianno'),(507,'Itim','Itim'),(508,'Jacques Francois','Jacques Francois'),(509,'Jacques Francois Shadow','Jacques Francois Shadow'),(510,'Jaldi','Jaldi'),(511,'JetBrains Mono','JetBrains Mono'),(512,'Jim Nightshade','Jim Nightshade'),(513,'Jockey One','Jockey One'),(514,'Jolly Lodger','Jolly Lodger'),(515,'Jomhuria','Jomhuria'),(516,'Jomolhari','Jomolhari'),(517,'Josefin Sans','Josefin Sans'),(518,'Josefin Slab','Josefin Slab'),(519,'Jost','Jost'),(520,'Joti One','Joti One'),(521,'Jua','Jua'),(522,'Judson','Judson'),(523,'Julee','Julee'),(524,'Julius Sans One','Julius Sans One'),(525,'Junge','Junge'),(526,'Jura','Jura'),(527,'Just Another Hand','Just Another Hand'),(528,'Just Me Again Down Here','Just Me Again Down Here'),(529,'K2D','K2D'),(530,'Kadwa','Kadwa'),(531,'Kaisei Decol','Kaisei Decol'),(532,'Kaisei HarunoUmi','Kaisei HarunoUmi'),(533,'Kaisei Opti','Kaisei Opti'),(534,'Kaisei Tokumin','Kaisei Tokumin'),(535,'Kalam','Kalam'),(536,'Kameron','Kameron'),(537,'Kanit','Kanit'),(538,'Kantumruy','Kantumruy'),(539,'Karantina','Karantina'),(540,'Karla','Karla'),(541,'Karma','Karma'),(542,'Katibeh','Katibeh'),(543,'Kaushan Script','Kaushan Script'),(544,'Kavivanar','Kavivanar'),(545,'Kavoon','Kavoon'),(546,'Kdam Thmor','Kdam Thmor'),(547,'Keania One','Keania One'),(548,'Kelly Slab','Kelly Slab'),(549,'Kenia','Kenia'),(550,'Khand','Khand'),(551,'Khmer','Khmer'),(552,'Khula','Khula'),(553,'Kings','Kings'),(554,'Kirang Haerang','Kirang Haerang'),(555,'Kite One','Kite One'),(556,'Kiwi Maru','Kiwi Maru'),(557,'Klee One','Klee One'),(558,'Knewave','Knewave'),(559,'KoHo','KoHo'),(560,'Kodchasan','Kodchasan'),(561,'Koh Santepheap','Koh Santepheap'),(562,'Kosugi','Kosugi'),(563,'Kosugi Maru','Kosugi Maru'),(564,'Kotta One','Kotta One'),(565,'Koulen','Koulen'),(566,'Kranky','Kranky'),(567,'Kreon','Kreon'),(568,'Kristi','Kristi'),(569,'Krona One','Krona One'),(570,'Krub','Krub'),(571,'Kufam','Kufam'),(572,'Kulim Park','Kulim Park'),(573,'Kumar One','Kumar One'),(574,'Kumar One Outline','Kumar One Outline'),(575,'Kumbh Sans','Kumbh Sans'),(576,'Kurale','Kurale'),(577,'La Belle Aurore','La Belle Aurore'),(578,'Lacquer','Lacquer'),(579,'Laila','Laila'),(580,'Lakki Reddy','Lakki Reddy'),(581,'Lalezar','Lalezar'),(582,'Lancelot','Lancelot'),(583,'Langar','Langar'),(584,'Lateef','Lateef'),(585,'Lato','Lato'),(586,'League Script','League Script'),(587,'Leckerli One','Leckerli One'),(588,'Ledger','Ledger'),(589,'Lekton','Lekton'),(590,'Lemon','Lemon'),(591,'Lemonada','Lemonada'),(592,'Lexend','Lexend'),(593,'Lexend Deca','Lexend Deca'),(594,'Lexend Exa','Lexend Exa'),(595,'Lexend Giga','Lexend Giga'),(596,'Lexend Mega','Lexend Mega'),(597,'Lexend Peta','Lexend Peta'),(598,'Lexend Tera','Lexend Tera'),(599,'Lexend Zetta','Lexend Zetta'),(600,'Libre Barcode 128','Libre Barcode 128'),(601,'Libre Barcode 128 Text','Libre Barcode 128 Text'),(602,'Libre Barcode 39','Libre Barcode 39'),(603,'Libre Barcode 39 Extended','Libre Barcode 39 Extended'),(604,'Libre Barcode 39 Extended Text','Libre Barcode 39 Extended Text'),(605,'Libre Barcode 39 Text','Libre Barcode 39 Text'),(606,'Libre Barcode EAN13 Text','Libre Barcode EAN13 Text'),(607,'Libre Baskerville','Libre Baskerville'),(608,'Libre Caslon Display','Libre Caslon Display'),(609,'Libre Caslon Text','Libre Caslon Text'),(610,'Libre Franklin','Libre Franklin'),(611,'Life Savers','Life Savers'),(612,'Lilita One','Lilita One'),(613,'Lily Script One','Lily Script One'),(614,'Limelight','Limelight'),(615,'Linden Hill','Linden Hill'),(616,'Literata','Literata'),(617,'Liu Jian Mao Cao','Liu Jian Mao Cao'),(618,'Livvic','Livvic'),(619,'Lobster','Lobster'),(620,'Lobster Two','Lobster Two'),(621,'Londrina Outline','Londrina Outline'),(622,'Londrina Shadow','Londrina Shadow'),(623,'Londrina Sketch','Londrina Sketch'),(624,'Londrina Solid','Londrina Solid'),(625,'Long Cang','Long Cang'),(626,'Lora','Lora'),(627,'Love Ya Like A Sister','Love Ya Like A Sister'),(628,'Loved by the King','Loved by the King'),(629,'Lovers Quarrel','Lovers Quarrel'),(630,'Luckiest Guy','Luckiest Guy'),(631,'Lusitana','Lusitana'),(632,'Lustria','Lustria'),(633,'Luxurious Script','Luxurious Script'),(634,'M PLUS 1','M PLUS 1'),(635,'M PLUS 1 Code','M PLUS 1 Code'),(636,'M PLUS 1p','M PLUS 1p'),(637,'M PLUS 2','M PLUS 2'),(638,'M PLUS Code Latin','M PLUS Code Latin'),(639,'M PLUS Rounded 1c','M PLUS Rounded 1c'),(640,'Ma Shan Zheng','Ma Shan Zheng'),(641,'Macondo','Macondo'),(642,'Macondo Swash Caps','Macondo Swash Caps'),(643,'Mada','Mada'),(644,'Magra','Magra'),(645,'Maiden Orange','Maiden Orange'),(646,'Maitree','Maitree'),(647,'Major Mono Display','Major Mono Display'),(648,'Mako','Mako'),(649,'Mali','Mali'),(650,'Mallanna','Mallanna'),(651,'Mandali','Mandali'),(652,'Manjari','Manjari'),(653,'Manrope','Manrope'),(654,'Mansalva','Mansalva'),(655,'Manuale','Manuale'),(656,'Marcellus','Marcellus'),(657,'Marcellus SC','Marcellus SC'),(658,'Marck Script','Marck Script'),(659,'Margarine','Margarine'),(660,'Markazi Text','Markazi Text'),(661,'Marko One','Marko One'),(662,'Marmelad','Marmelad'),(663,'Martel','Martel'),(664,'Martel Sans','Martel Sans'),(665,'Marvel','Marvel'),(666,'Mate','Mate'),(667,'Mate SC','Mate SC'),(668,'Maven Pro','Maven Pro'),(669,'McLaren','McLaren'),(670,'Meddon','Meddon'),(671,'MedievalSharp','MedievalSharp'),(672,'Medula One','Medula One'),(673,'Meera Inimai','Meera Inimai'),(674,'Megrim','Megrim'),(675,'Meie Script','Meie Script'),(676,'Meow Script','Meow Script'),(677,'Merienda','Merienda'),(678,'Merienda One','Merienda One'),(679,'Merriweather','Merriweather'),(680,'Merriweather Sans','Merriweather Sans'),(681,'Metal','Metal'),(682,'Metal Mania','Metal Mania'),(683,'Metamorphous','Metamorphous'),(684,'Metrophobic','Metrophobic'),(685,'Michroma','Michroma'),(686,'Milonga','Milonga'),(687,'Miltonian','Miltonian'),(688,'Miltonian Tattoo','Miltonian Tattoo'),(689,'Mina','Mina'),(690,'Miniver','Miniver'),(691,'Miriam Libre','Miriam Libre'),(692,'Mirza','Mirza'),(693,'Miss Fajardose','Miss Fajardose'),(694,'Mitr','Mitr'),(695,'Mochiy Pop One','Mochiy Pop One'),(696,'Mochiy Pop P One','Mochiy Pop P One'),(697,'Modak','Modak'),(698,'Modern Antiqua','Modern Antiqua'),(699,'Mogra','Mogra'),(700,'Mohave','Mohave'),(701,'Molengo','Molengo'),(702,'Molle','Molle'),(703,'Monda','Monda'),(704,'Monofett','Monofett'),(705,'Monoton','Monoton'),(706,'Monsieur La Doulaise','Monsieur La Doulaise'),(707,'Montaga','Montaga'),(708,'Montagu Slab','Montagu Slab'),(709,'MonteCarlo','MonteCarlo'),(710,'Montez','Montez'),(711,'Montserrat','Montserrat'),(712,'Montserrat Alternates','Montserrat Alternates'),(713,'Montserrat Subrayada','Montserrat Subrayada'),(714,'Moul','Moul'),(715,'Moulpali','Moulpali'),(716,'Mountains of Christmas','Mountains of Christmas'),(717,'Mouse Memoirs','Mouse Memoirs'),(718,'Mr Bedfort','Mr Bedfort'),(719,'Mr Dafoe','Mr Dafoe'),(720,'Mr De Haviland','Mr De Haviland'),(721,'Mrs Saint Delafield','Mrs Saint Delafield'),(722,'Mrs Sheppards','Mrs Sheppards'),(723,'Mukta','Mukta'),(724,'Mukta Mahee','Mukta Mahee'),(725,'Mukta Malar','Mukta Malar'),(726,'Mukta Vaani','Mukta Vaani'),(727,'Mulish','Mulish'),(728,'Murecho','Murecho'),(729,'MuseoModerno','MuseoModerno'),(730,'Mystery Quest','Mystery Quest'),(731,'NTR','NTR'),(732,'Nanum Brush Script','Nanum Brush Script'),(733,'Nanum Gothic','Nanum Gothic'),(734,'Nanum Gothic Coding','Nanum Gothic Coding'),(735,'Nanum Myeongjo','Nanum Myeongjo'),(736,'Nanum Pen Script','Nanum Pen Script'),(737,'Nerko One','Nerko One'),(738,'Neucha','Neucha'),(739,'Neuton','Neuton'),(740,'New Rocker','New Rocker'),(741,'New Tegomin','New Tegomin'),(742,'News Cycle','News Cycle'),(743,'Newsreader','Newsreader'),(744,'Niconne','Niconne'),(745,'Niramit','Niramit'),(746,'Nixie One','Nixie One'),(747,'Nobile','Nobile'),(748,'Nokora','Nokora'),(749,'Norican','Norican'),(750,'Nosifer','Nosifer'),(751,'Notable','Notable'),(752,'Nothing You Could Do','Nothing You Could Do'),(753,'Noticia Text','Noticia Text'),(754,'Noto Kufi Arabic','Noto Kufi Arabic'),(755,'Noto Music','Noto Music'),(756,'Noto Naskh Arabic','Noto Naskh Arabic'),(757,'Noto Nastaliq Urdu','Noto Nastaliq Urdu'),(758,'Noto Rashi Hebrew','Noto Rashi Hebrew'),(759,'Noto Sans','Noto Sans'),(760,'Noto Sans Adlam','Noto Sans Adlam'),(761,'Noto Sans Adlam Unjoined','Noto Sans Adlam Unjoined'),(762,'Noto Sans Anatolian Hieroglyphs','Noto Sans Anatolian Hieroglyphs'),(763,'Noto Sans Arabic','Noto Sans Arabic'),(764,'Noto Sans Armenian','Noto Sans Armenian'),(765,'Noto Sans Avestan','Noto Sans Avestan'),(766,'Noto Sans Balinese','Noto Sans Balinese'),(767,'Noto Sans Bamum','Noto Sans Bamum'),(768,'Noto Sans Bassa Vah','Noto Sans Bassa Vah'),(769,'Noto Sans Batak','Noto Sans Batak'),(770,'Noto Sans Bengali','Noto Sans Bengali'),(771,'Noto Sans Bhaiksuki','Noto Sans Bhaiksuki'),(772,'Noto Sans Brahmi','Noto Sans Brahmi'),(773,'Noto Sans Buginese','Noto Sans Buginese'),(774,'Noto Sans Buhid','Noto Sans Buhid'),(775,'Noto Sans Canadian Aboriginal','Noto Sans Canadian Aboriginal'),(776,'Noto Sans Carian','Noto Sans Carian'),(777,'Noto Sans Caucasian Albanian','Noto Sans Caucasian Albanian'),(778,'Noto Sans Chakma','Noto Sans Chakma'),(779,'Noto Sans Cham','Noto Sans Cham'),(780,'Noto Sans Cherokee','Noto Sans Cherokee'),(781,'Noto Sans Coptic','Noto Sans Coptic'),(782,'Noto Sans Cuneiform','Noto Sans Cuneiform'),(783,'Noto Sans Cypriot','Noto Sans Cypriot'),(784,'Noto Sans Deseret','Noto Sans Deseret'),(785,'Noto Sans Devanagari','Noto Sans Devanagari'),(786,'Noto Sans Display','Noto Sans Display'),(787,'Noto Sans Duployan','Noto Sans Duployan'),(788,'Noto Sans Egyptian Hieroglyphs','Noto Sans Egyptian Hieroglyphs'),(789,'Noto Sans Elbasan','Noto Sans Elbasan'),(790,'Noto Sans Elymaic','Noto Sans Elymaic'),(791,'Noto Sans Georgian','Noto Sans Georgian'),(792,'Noto Sans Glagolitic','Noto Sans Glagolitic'),(793,'Noto Sans Gothic','Noto Sans Gothic'),(794,'Noto Sans Grantha','Noto Sans Grantha'),(795,'Noto Sans Gujarati','Noto Sans Gujarati'),(796,'Noto Sans Gunjala Gondi','Noto Sans Gunjala Gondi'),(797,'Noto Sans Gurmukhi','Noto Sans Gurmukhi'),(798,'Noto Sans HK','Noto Sans HK'),(799,'Noto Sans Hanifi Rohingya','Noto Sans Hanifi Rohingya'),(800,'Noto Sans Hanunoo','Noto Sans Hanunoo'),(801,'Noto Sans Hatran','Noto Sans Hatran'),(802,'Noto Sans Hebrew','Noto Sans Hebrew'),(803,'Noto Sans Imperial Aramaic','Noto Sans Imperial Aramaic'),(804,'Noto Sans Indic Siyaq Numbers','Noto Sans Indic Siyaq Numbers'),(805,'Noto Sans Inscriptional Pahlavi','Noto Sans Inscriptional Pahlavi'),(806,'Noto Sans Inscriptional Parthian','Noto Sans Inscriptional Parthian'),(807,'Noto Sans JP','Noto Sans JP'),(808,'Noto Sans Javanese','Noto Sans Javanese'),(809,'Noto Sans KR','Noto Sans KR'),(810,'Noto Sans Kaithi','Noto Sans Kaithi'),(811,'Noto Sans Kannada','Noto Sans Kannada'),(812,'Noto Sans Kayah Li','Noto Sans Kayah Li'),(813,'Noto Sans Kharoshthi','Noto Sans Kharoshthi'),(814,'Noto Sans Khmer','Noto Sans Khmer'),(815,'Noto Sans Khojki','Noto Sans Khojki'),(816,'Noto Sans Khudawadi','Noto Sans Khudawadi'),(817,'Noto Sans Lao','Noto Sans Lao'),(818,'Noto Sans Lepcha','Noto Sans Lepcha'),(819,'Noto Sans Limbu','Noto Sans Limbu'),(820,'Noto Sans Linear A','Noto Sans Linear A'),(821,'Noto Sans Linear B','Noto Sans Linear B'),(822,'Noto Sans Lisu','Noto Sans Lisu'),(823,'Noto Sans Lycian','Noto Sans Lycian'),(824,'Noto Sans Lydian','Noto Sans Lydian'),(825,'Noto Sans Mahajani','Noto Sans Mahajani'),(826,'Noto Sans Malayalam','Noto Sans Malayalam'),(827,'Noto Sans Mandaic','Noto Sans Mandaic'),(828,'Noto Sans Manichaean','Noto Sans Manichaean'),(829,'Noto Sans Marchen','Noto Sans Marchen'),(830,'Noto Sans Masaram Gondi','Noto Sans Masaram Gondi'),(831,'Noto Sans Math','Noto Sans Math'),(832,'Noto Sans Mayan Numerals','Noto Sans Mayan Numerals'),(833,'Noto Sans Medefaidrin','Noto Sans Medefaidrin'),(834,'Noto Sans Meetei Mayek','Noto Sans Meetei Mayek'),(835,'Noto Sans Meroitic','Noto Sans Meroitic'),(836,'Noto Sans Miao','Noto Sans Miao'),(837,'Noto Sans Modi','Noto Sans Modi'),(838,'Noto Sans Mongolian','Noto Sans Mongolian'),(839,'Noto Sans Mono','Noto Sans Mono'),(840,'Noto Sans Mro','Noto Sans Mro'),(841,'Noto Sans Multani','Noto Sans Multani'),(842,'Noto Sans Myanmar','Noto Sans Myanmar'),(843,'Noto Sans N Ko','Noto Sans N Ko'),(844,'Noto Sans Nabataean','Noto Sans Nabataean'),(845,'Noto Sans New Tai Lue','Noto Sans New Tai Lue'),(846,'Noto Sans Newa','Noto Sans Newa'),(847,'Noto Sans Nushu','Noto Sans Nushu'),(848,'Noto Sans Ogham','Noto Sans Ogham'),(849,'Noto Sans Ol Chiki','Noto Sans Ol Chiki'),(850,'Noto Sans Old Hungarian','Noto Sans Old Hungarian'),(851,'Noto Sans Old Italic','Noto Sans Old Italic'),(852,'Noto Sans Old North Arabian','Noto Sans Old North Arabian'),(853,'Noto Sans Old Permic','Noto Sans Old Permic'),(854,'Noto Sans Old Persian','Noto Sans Old Persian'),(855,'Noto Sans Old Sogdian','Noto Sans Old Sogdian'),(856,'Noto Sans Old South Arabian','Noto Sans Old South Arabian'),(857,'Noto Sans Old Turkic','Noto Sans Old Turkic'),(858,'Noto Sans Oriya','Noto Sans Oriya'),(859,'Noto Sans Osage','Noto Sans Osage'),(860,'Noto Sans Osmanya','Noto Sans Osmanya'),(861,'Noto Sans Pahawh Hmong','Noto Sans Pahawh Hmong'),(862,'Noto Sans Palmyrene','Noto Sans Palmyrene'),(863,'Noto Sans Pau Cin Hau','Noto Sans Pau Cin Hau'),(864,'Noto Sans Phags Pa','Noto Sans Phags Pa'),(865,'Noto Sans Phoenician','Noto Sans Phoenician'),(866,'Noto Sans Psalter Pahlavi','Noto Sans Psalter Pahlavi'),(867,'Noto Sans Rejang','Noto Sans Rejang'),(868,'Noto Sans Runic','Noto Sans Runic'),(869,'Noto Sans SC','Noto Sans SC'),(870,'Noto Sans Samaritan','Noto Sans Samaritan'),(871,'Noto Sans Saurashtra','Noto Sans Saurashtra'),(872,'Noto Sans Sharada','Noto Sans Sharada'),(873,'Noto Sans Shavian','Noto Sans Shavian'),(874,'Noto Sans Siddham','Noto Sans Siddham'),(875,'Noto Sans Sinhala','Noto Sans Sinhala'),(876,'Noto Sans Sogdian','Noto Sans Sogdian'),(877,'Noto Sans Sora Sompeng','Noto Sans Sora Sompeng'),(878,'Noto Sans Soyombo','Noto Sans Soyombo'),(879,'Noto Sans Sundanese','Noto Sans Sundanese'),(880,'Noto Sans Syloti Nagri','Noto Sans Syloti Nagri'),(881,'Noto Sans Symbols','Noto Sans Symbols'),(882,'Noto Sans Symbols 2','Noto Sans Symbols 2'),(883,'Noto Sans Syriac','Noto Sans Syriac'),(884,'Noto Sans TC','Noto Sans TC'),(885,'Noto Sans Tagalog','Noto Sans Tagalog'),(886,'Noto Sans Tagbanwa','Noto Sans Tagbanwa'),(887,'Noto Sans Tai Le','Noto Sans Tai Le'),(888,'Noto Sans Tai Tham','Noto Sans Tai Tham'),(889,'Noto Sans Tai Viet','Noto Sans Tai Viet'),(890,'Noto Sans Takri','Noto Sans Takri'),(891,'Noto Sans Tamil','Noto Sans Tamil'),(892,'Noto Sans Tamil Supplement','Noto Sans Tamil Supplement'),(893,'Noto Sans Telugu','Noto Sans Telugu'),(894,'Noto Sans Thaana','Noto Sans Thaana'),(895,'Noto Sans Thai','Noto Sans Thai'),(896,'Noto Sans Thai Looped','Noto Sans Thai Looped'),(897,'Noto Sans Tifinagh','Noto Sans Tifinagh'),(898,'Noto Sans Tirhuta','Noto Sans Tirhuta'),(899,'Noto Sans Ugaritic','Noto Sans Ugaritic'),(900,'Noto Sans Vai','Noto Sans Vai'),(901,'Noto Sans Wancho','Noto Sans Wancho'),(902,'Noto Sans Warang Citi','Noto Sans Warang Citi'),(903,'Noto Sans Yi','Noto Sans Yi'),(904,'Noto Sans Zanabazar Square','Noto Sans Zanabazar Square'),(905,'Noto Serif','Noto Serif'),(906,'Noto Serif Ahom','Noto Serif Ahom'),(907,'Noto Serif Armenian','Noto Serif Armenian'),(908,'Noto Serif Balinese','Noto Serif Balinese'),(909,'Noto Serif Bengali','Noto Serif Bengali'),(910,'Noto Serif Devanagari','Noto Serif Devanagari'),(911,'Noto Serif Display','Noto Serif Display'),(912,'Noto Serif Dogra','Noto Serif Dogra'),(913,'Noto Serif Ethiopic','Noto Serif Ethiopic'),(914,'Noto Serif Georgian','Noto Serif Georgian'),(915,'Noto Serif Grantha','Noto Serif Grantha'),(916,'Noto Serif Gujarati','Noto Serif Gujarati'),(917,'Noto Serif Gurmukhi','Noto Serif Gurmukhi'),(918,'Noto Serif Hebrew','Noto Serif Hebrew'),(919,'Noto Serif JP','Noto Serif JP'),(920,'Noto Serif KR','Noto Serif KR'),(921,'Noto Serif Kannada','Noto Serif Kannada'),(922,'Noto Serif Khmer','Noto Serif Khmer'),(923,'Noto Serif Lao','Noto Serif Lao'),(924,'Noto Serif Malayalam','Noto Serif Malayalam'),(925,'Noto Serif Myanmar','Noto Serif Myanmar'),(926,'Noto Serif Nyiakeng Puachue Hmong','Noto Serif Nyiakeng Puachue Hmong'),(927,'Noto Serif SC','Noto Serif SC'),(928,'Noto Serif Sinhala','Noto Serif Sinhala'),(929,'Noto Serif TC','Noto Serif TC'),(930,'Noto Serif Tamil','Noto Serif Tamil'),(931,'Noto Serif Tangut','Noto Serif Tangut'),(932,'Noto Serif Telugu','Noto Serif Telugu'),(933,'Noto Serif Thai','Noto Serif Thai'),(934,'Noto Serif Tibetan','Noto Serif Tibetan'),(935,'Noto Serif Yezidi','Noto Serif Yezidi'),(936,'Noto Traditional Nushu','Noto Traditional Nushu'),(937,'Nova Cut','Nova Cut'),(938,'Nova Flat','Nova Flat'),(939,'Nova Mono','Nova Mono'),(940,'Nova Oval','Nova Oval'),(941,'Nova Round','Nova Round'),(942,'Nova Script','Nova Script'),(943,'Nova Slim','Nova Slim'),(944,'Nova Square','Nova Square'),(945,'Numans','Numans'),(946,'Nunito','Nunito'),(947,'Nunito Sans','Nunito Sans'),(948,'Odibee Sans','Odibee Sans'),(949,'Odor Mean Chey','Odor Mean Chey'),(950,'Offside','Offside'),(951,'Oi','Oi'),(952,'Old Standard TT','Old Standard TT'),(953,'Oldenburg','Oldenburg'),(954,'Oleo Script','Oleo Script'),(955,'Oleo Script Swash Caps','Oleo Script Swash Caps'),(956,'Open Sans','Open Sans'),(957,'Open Sans Condensed','Open Sans Condensed'),(958,'Oranienbaum','Oranienbaum'),(959,'Orbitron','Orbitron'),(960,'Oregano','Oregano'),(961,'Orelega One','Orelega One'),(962,'Orienta','Orienta'),(963,'Original Surfer','Original Surfer'),(964,'Oswald','Oswald'),(965,'Otomanopee One','Otomanopee One'),(966,'Outfit','Outfit'),(967,'Over the Rainbow','Over the Rainbow'),(968,'Overlock','Overlock'),(969,'Overlock SC','Overlock SC'),(970,'Overpass','Overpass'),(971,'Overpass Mono','Overpass Mono'),(972,'Ovo','Ovo'),(973,'Oxanium','Oxanium'),(974,'Oxygen','Oxygen'),(975,'Oxygen Mono','Oxygen Mono'),(976,'PT Mono','PT Mono'),(977,'PT Sans','PT Sans'),(978,'PT Sans Caption','PT Sans Caption'),(979,'PT Sans Narrow','PT Sans Narrow'),(980,'PT Serif','PT Serif'),(981,'PT Serif Caption','PT Serif Caption'),(982,'Pacifico','Pacifico'),(983,'Padauk','Padauk'),(984,'Palanquin','Palanquin'),(985,'Palanquin Dark','Palanquin Dark'),(986,'Palette Mosaic','Palette Mosaic'),(987,'Pangolin','Pangolin'),(988,'Paprika','Paprika'),(989,'Parisienne','Parisienne'),(990,'Passero One','Passero One'),(991,'Passion One','Passion One'),(992,'Passions Conflict','Passions Conflict'),(993,'Pathway Gothic One','Pathway Gothic One'),(994,'Patrick Hand','Patrick Hand'),(995,'Patrick Hand SC','Patrick Hand SC'),(996,'Pattaya','Pattaya'),(997,'Patua One','Patua One'),(998,'Pavanam','Pavanam'),(999,'Paytone One','Paytone One'),(1000,'Peddana','Peddana'),(1001,'Peralta','Peralta'),(1002,'Permanent Marker','Permanent Marker'),(1003,'Petemoss','Petemoss'),(1004,'Petit Formal Script','Petit Formal Script'),(1005,'Petrona','Petrona'),(1006,'Philosopher','Philosopher'),(1007,'Piazzolla','Piazzolla'),(1008,'Piedra','Piedra'),(1009,'Pinyon Script','Pinyon Script'),(1010,'Pirata One','Pirata One'),(1011,'Plaster','Plaster'),(1012,'Play','Play'),(1013,'Playball','Playball'),(1014,'Playfair Display','Playfair Display'),(1015,'Playfair Display SC','Playfair Display SC'),(1016,'Podkova','Podkova'),(1017,'Poiret One','Poiret One'),(1018,'Poller One','Poller One'),(1019,'Poly','Poly'),(1020,'Pompiere','Pompiere'),(1021,'Pontano Sans','Pontano Sans'),(1022,'Poor Story','Poor Story'),(1023,'Poppins','Poppins'),(1024,'Port Lligat Sans','Port Lligat Sans'),(1025,'Port Lligat Slab','Port Lligat Slab'),(1026,'Potta One','Potta One'),(1027,'Pragati Narrow','Pragati Narrow'),(1028,'Praise','Praise'),(1029,'Prata','Prata'),(1030,'Preahvihear','Preahvihear'),(1031,'Press Start 2P','Press Start 2P'),(1032,'Pridi','Pridi'),(1033,'Princess Sofia','Princess Sofia'),(1034,'Prociono','Prociono'),(1035,'Prompt','Prompt'),(1036,'Prosto One','Prosto One'),(1037,'Proza Libre','Proza Libre'),(1038,'Public Sans','Public Sans'),(1039,'Puppies Play','Puppies Play'),(1040,'Puritan','Puritan'),(1041,'Purple Purse','Purple Purse'),(1042,'Qahiri','Qahiri'),(1043,'Quando','Quando'),(1044,'Quantico','Quantico'),(1045,'Quattrocento','Quattrocento'),(1046,'Quattrocento Sans','Quattrocento Sans'),(1047,'Questrial','Questrial'),(1048,'Quicksand','Quicksand'),(1049,'Quintessential','Quintessential'),(1050,'Qwigley','Qwigley'),(1051,'Racing Sans One','Racing Sans One'),(1052,'Radley','Radley'),(1053,'Rajdhani','Rajdhani'),(1054,'Rakkas','Rakkas'),(1055,'Raleway','Raleway'),(1056,'Raleway Dots','Raleway Dots'),(1057,'Ramabhadra','Ramabhadra'),(1058,'Ramaraja','Ramaraja'),(1059,'Rambla','Rambla'),(1060,'Rammetto One','Rammetto One'),(1061,'Rampart One','Rampart One'),(1062,'Ranchers','Ranchers'),(1063,'Rancho','Rancho'),(1064,'Ranga','Ranga'),(1065,'Rasa','Rasa'),(1066,'Rationale','Rationale'),(1067,'Ravi Prakash','Ravi Prakash'),(1068,'Readex Pro','Readex Pro'),(1069,'Recursive','Recursive'),(1070,'Red Hat Display','Red Hat Display'),(1071,'Red Hat Mono','Red Hat Mono'),(1072,'Red Hat Text','Red Hat Text'),(1073,'Red Rose','Red Rose'),(1074,'Redacted','Redacted'),(1075,'Redacted Script','Redacted Script'),(1076,'Redressed','Redressed'),(1077,'Reem Kufi','Reem Kufi'),(1078,'Reenie Beanie','Reenie Beanie'),(1079,'Reggae One','Reggae One'),(1080,'Revalia','Revalia'),(1081,'Rhodium Libre','Rhodium Libre'),(1082,'Ribeye','Ribeye'),(1083,'Ribeye Marrow','Ribeye Marrow'),(1084,'Righteous','Righteous'),(1085,'Risque','Risque'),(1086,'Road Rage','Road Rage'),(1087,'Roboto','Roboto'),(1088,'Roboto Condensed','Roboto Condensed'),(1089,'Roboto Mono','Roboto Mono'),(1090,'Roboto Slab','Roboto Slab'),(1091,'Rochester','Rochester'),(1092,'Rock Salt','Rock Salt'),(1093,'RocknRoll One','RocknRoll One'),(1094,'Rokkitt','Rokkitt'),(1095,'Romanesco','Romanesco'),(1096,'Ropa Sans','Ropa Sans'),(1097,'Rosario','Rosario'),(1098,'Rosarivo','Rosarivo'),(1099,'Rouge Script','Rouge Script'),(1100,'Rowdies','Rowdies'),(1101,'Rozha One','Rozha One'),(1102,'Rubik','Rubik'),(1103,'Rubik Beastly','Rubik Beastly'),(1104,'Rubik Mono One','Rubik Mono One'),(1105,'Ruda','Ruda'),(1106,'Rufina','Rufina'),(1107,'Ruge Boogie','Ruge Boogie'),(1108,'Ruluko','Ruluko'),(1109,'Rum Raisin','Rum Raisin'),(1110,'Ruslan Display','Ruslan Display'),(1111,'Russo One','Russo One'),(1112,'Ruthie','Ruthie'),(1113,'Rye','Rye'),(1114,'STIX Two Text','STIX Two Text'),(1115,'Sacramento','Sacramento'),(1116,'Sahitya','Sahitya'),(1117,'Sail','Sail'),(1118,'Saira','Saira'),(1119,'Saira Condensed','Saira Condensed'),(1120,'Saira Extra Condensed','Saira Extra Condensed'),(1121,'Saira Semi Condensed','Saira Semi Condensed'),(1122,'Saira Stencil One','Saira Stencil One'),(1123,'Salsa','Salsa'),(1124,'Sanchez','Sanchez'),(1125,'Sancreek','Sancreek'),(1126,'Sansita','Sansita'),(1127,'Sansita Swashed','Sansita Swashed'),(1128,'Sarabun','Sarabun'),(1129,'Sarala','Sarala'),(1130,'Sarina','Sarina'),(1131,'Sarpanch','Sarpanch'),(1132,'Sassy Frass','Sassy Frass'),(1133,'Satisfy','Satisfy'),(1134,'Sawarabi Gothic','Sawarabi Gothic'),(1135,'Sawarabi Mincho','Sawarabi Mincho'),(1136,'Scada','Scada'),(1137,'Scheherazade New','Scheherazade New'),(1138,'Schoolbell','Schoolbell'),(1139,'Scope One','Scope One'),(1140,'Seaweed Script','Seaweed Script'),(1141,'Secular One','Secular One'),(1142,'Sedgwick Ave','Sedgwick Ave'),(1143,'Sedgwick Ave Display','Sedgwick Ave Display'),(1144,'Sen','Sen'),(1145,'Sevillana','Sevillana'),(1146,'Seymour One','Seymour One'),(1147,'Shadows Into Light','Shadows Into Light'),(1148,'Shadows Into Light Two','Shadows Into Light Two'),(1149,'Shalimar','Shalimar'),(1150,'Shanti','Shanti'),(1151,'Share','Share'),(1152,'Share Tech','Share Tech'),(1153,'Share Tech Mono','Share Tech Mono'),(1154,'Shippori Antique','Shippori Antique'),(1155,'Shippori Antique B1','Shippori Antique B1'),(1156,'Shippori Mincho','Shippori Mincho'),(1157,'Shippori Mincho B1','Shippori Mincho B1'),(1158,'Shojumaru','Shojumaru'),(1159,'Short Stack','Short Stack'),(1160,'Shrikhand','Shrikhand'),(1161,'Siemreap','Siemreap'),(1162,'Sigmar One','Sigmar One'),(1163,'Signika','Signika'),(1164,'Signika Negative','Signika Negative'),(1165,'Simonetta','Simonetta'),(1166,'Single Day','Single Day'),(1167,'Sintony','Sintony'),(1168,'Sirin Stencil','Sirin Stencil'),(1169,'Six Caps','Six Caps'),(1170,'Skranji','Skranji'),(1171,'Slabo 13px','Slabo 13px'),(1172,'Slabo 27px','Slabo 27px'),(1173,'Slackey','Slackey'),(1174,'Smokum','Smokum'),(1175,'Smooch','Smooch'),(1176,'Smythe','Smythe'),(1177,'Sniglet','Sniglet'),(1178,'Snippet','Snippet'),(1179,'Snowburst One','Snowburst One'),(1180,'Sofadi One','Sofadi One'),(1181,'Sofia','Sofia'),(1182,'Solway','Solway'),(1183,'Song Myung','Song Myung'),(1184,'Sonsie One','Sonsie One'),(1185,'Sora','Sora'),(1186,'Sorts Mill Goudy','Sorts Mill Goudy'),(1187,'Source Code Pro','Source Code Pro'),(1188,'Source Sans 3','Source Sans 3'),(1189,'Source Sans Pro','Source Sans Pro'),(1190,'Source Serif Pro','Source Serif Pro'),(1191,'Space Grotesk','Space Grotesk'),(1192,'Space Mono','Space Mono'),(1193,'Spartan','Spartan'),(1194,'Special Elite','Special Elite'),(1195,'Spectral','Spectral'),(1196,'Spectral SC','Spectral SC'),(1197,'Spicy Rice','Spicy Rice'),(1198,'Spinnaker','Spinnaker'),(1199,'Spirax','Spirax'),(1200,'Squada One','Squada One'),(1201,'Sree Krushnadevaraya','Sree Krushnadevaraya'),(1202,'Sriracha','Sriracha'),(1203,'Srisakdi','Srisakdi'),(1204,'Staatliches','Staatliches'),(1205,'Stalemate','Stalemate'),(1206,'Stalinist One','Stalinist One'),(1207,'Stardos Stencil','Stardos Stencil'),(1208,'Stick','Stick'),(1209,'Stick No Bills','Stick No Bills'),(1210,'Stint Ultra Condensed','Stint Ultra Condensed'),(1211,'Stint Ultra Expanded','Stint Ultra Expanded'),(1212,'Stoke','Stoke'),(1213,'Strait','Strait'),(1214,'Style Script','Style Script'),(1215,'Stylish','Stylish'),(1216,'Sue Ellen Francisco','Sue Ellen Francisco'),(1217,'Suez One','Suez One'),(1218,'Sulphur Point','Sulphur Point'),(1219,'Sumana','Sumana'),(1220,'Sunflower','Sunflower'),(1221,'Sunshiney','Sunshiney'),(1222,'Supermercado One','Supermercado One'),(1223,'Sura','Sura'),(1224,'Suranna','Suranna'),(1225,'Suravaram','Suravaram'),(1226,'Suwannaphum','Suwannaphum'),(1227,'Swanky and Moo Moo','Swanky and Moo Moo'),(1228,'Syncopate','Syncopate'),(1229,'Syne','Syne'),(1230,'Syne Mono','Syne Mono'),(1231,'Syne Tactile','Syne Tactile'),(1232,'Tajawal','Tajawal'),(1233,'Tangerine','Tangerine'),(1234,'Taprom','Taprom'),(1235,'Tauri','Tauri'),(1236,'Taviraj','Taviraj'),(1237,'Teko','Teko'),(1238,'Telex','Telex'),(1239,'Tenali Ramakrishna','Tenali Ramakrishna'),(1240,'Tenor Sans','Tenor Sans'),(1241,'Text Me One','Text Me One'),(1242,'Texturina','Texturina'),(1243,'Thasadith','Thasadith'),(1244,'The Girl Next Door','The Girl Next Door'),(1245,'Tienne','Tienne'),(1246,'Tillana','Tillana'),(1247,'Timmana','Timmana'),(1248,'Tinos','Tinos'),(1249,'Titan One','Titan One'),(1250,'Titillium Web','Titillium Web'),(1251,'Tomorrow','Tomorrow'),(1252,'Tourney','Tourney'),(1253,'Trade Winds','Trade Winds'),(1254,'Train One','Train One'),(1255,'Trirong','Trirong'),(1256,'Trispace','Trispace'),(1257,'Trocchi','Trocchi'),(1258,'Trochut','Trochut'),(1259,'Truculenta','Truculenta'),(1260,'Trykker','Trykker'),(1261,'Tulpen One','Tulpen One'),(1262,'Turret Road','Turret Road'),(1263,'Ubuntu','Ubuntu'),(1264,'Ubuntu Condensed','Ubuntu Condensed'),(1265,'Ubuntu Mono','Ubuntu Mono'),(1266,'Uchen','Uchen'),(1267,'Ultra','Ultra'),(1268,'Uncial Antiqua','Uncial Antiqua'),(1269,'Underdog','Underdog'),(1270,'Unica One','Unica One'),(1271,'UnifrakturCook','UnifrakturCook'),(1272,'UnifrakturMaguntia','UnifrakturMaguntia'),(1273,'Unkempt','Unkempt'),(1274,'Unlock','Unlock'),(1275,'Unna','Unna'),(1276,'Urbanist','Urbanist'),(1277,'VT323','VT323'),(1278,'Vampiro One','Vampiro One'),(1279,'Varela','Varela'),(1280,'Varela Round','Varela Round'),(1281,'Varta','Varta'),(1282,'Vast Shadow','Vast Shadow'),(1283,'Vesper Libre','Vesper Libre'),(1284,'Viaoda Libre','Viaoda Libre'),(1285,'Vibes','Vibes'),(1286,'Vibur','Vibur'),(1287,'Vidaloka','Vidaloka'),(1288,'Viga','Viga'),(1289,'Voces','Voces'),(1290,'Volkhov','Volkhov'),(1291,'Vollkorn','Vollkorn'),(1292,'Vollkorn SC','Vollkorn SC'),(1293,'Voltaire','Voltaire'),(1294,'Waiting for the Sunrise','Waiting for the Sunrise'),(1295,'Wallpoet','Wallpoet'),(1296,'Walter Turncoat','Walter Turncoat'),(1297,'Warnes','Warnes'),(1298,'Wellfleet','Wellfleet'),(1299,'Wendy One','Wendy One'),(1300,'WindSong','WindSong'),(1301,'Wire One','Wire One'),(1302,'Work Sans','Work Sans'),(1303,'Xanh Mono','Xanh Mono'),(1304,'Yaldevi','Yaldevi'),(1305,'Yanone Kaffeesatz','Yanone Kaffeesatz'),(1306,'Yantramanav','Yantramanav'),(1307,'Yatra One','Yatra One'),(1308,'Yellowtail','Yellowtail'),(1309,'Yeon Sung','Yeon Sung'),(1310,'Yeseva One','Yeseva One'),(1311,'Yesteryear','Yesteryear'),(1312,'Yomogi','Yomogi'),(1313,'Yrsa','Yrsa'),(1314,'Yuji Boku','Yuji Boku'),(1315,'Yuji Mai','Yuji Mai'),(1316,'Yuji Syuku','Yuji Syuku'),(1317,'Yusei Magic','Yusei Magic'),(1318,'ZCOOL KuaiLe','ZCOOL KuaiLe'),(1319,'ZCOOL QingKe HuangYou','ZCOOL QingKe HuangYou'),(1320,'ZCOOL XiaoWei','ZCOOL XiaoWei'),(1321,'Zen Antique','Zen Antique'),(1322,'Zen Antique Soft','Zen Antique Soft'),(1323,'Zen Dots','Zen Dots'),(1324,'Zen Kaku Gothic Antique','Zen Kaku Gothic Antique'),(1325,'Zen Kaku Gothic New','Zen Kaku Gothic New'),(1326,'Zen Kurenaido','Zen Kurenaido'),(1327,'Zen Loop','Zen Loop'),(1328,'Zen Maru Gothic','Zen Maru Gothic'),(1329,'Zen Old Mincho','Zen Old Mincho'),(1330,'Zen Tokyo Zoo','Zen Tokyo Zoo'),(1331,'Zeyada','Zeyada'),(1332,'Zhi Mang Xing','Zhi Mang Xing'),(1333,'Zilla Slab','Zilla Slab'),(1334,'Zilla Slab Highlight','Zilla Slab Highlight');
/*!40000 ALTER TABLE `fonts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `footers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `contact` text NOT NULL,
  `email` tinytext NOT NULL,
  `opentime` text NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footers`
--

LOCK TABLES `footers` WRITE;
/*!40000 ALTER TABLE `footers` DISABLE KEYS */;
INSERT INTO `footers` VALUES (1,'01xxxxxxxxx','example@example.com','24x7','lorem ipsume 6th Floor, lorem ipsume, Road , lorem ipsume, City, lorem ipsume Country','2021-12-18 17:00:44','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `footers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gatewaytotals`
--

DROP TABLE IF EXISTS `gatewaytotals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gatewaytotals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` tinytext NOT NULL,
  `gateway_id` int unsigned NOT NULL,
  `amount` text NOT NULL,
  `detail` text,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gatewaytotals_gateway_id_foreign` (`gateway_id`),
  KEY `gatewaytotals_trip_id_foreign` (`trip_id`),
  KEY `gatewaytotals_subtrip_id_foreign` (`subtrip_id`),
  KEY `gatewaytotals_user_id_foreign` (`user_id`),
  CONSTRAINT `gatewaytotals_gateway_id_foreign` FOREIGN KEY (`gateway_id`) REFERENCES `paymentgateways` (`id`),
  CONSTRAINT `gatewaytotals_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `gatewaytotals_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  CONSTRAINT `gatewaytotals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gatewaytotals`
--

LOCK TABLES `gatewaytotals` WRITE;
/*!40000 ALTER TABLE `gatewaytotals` DISABLE KEYS */;
/*!40000 ALTER TABLE `gatewaytotals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inquiries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `mobile` tinytext NOT NULL,
  `subject` tinytext NOT NULL,
  `message` text NOT NULL,
  `email` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiries`
--

LOCK TABLES `inquiries` WRITE;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` VALUES (39,'00000000000','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','l1@p.com','lorem ipsum','2022-06-27 17:17:58','2023-01-21 10:11:38',NULL),(40,'000000000000','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','l2@p.com','lorem ipsum','2022-06-27 17:19:27','2023-01-21 10:11:38',NULL),(41,'000000000000','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','l3@p.com','lorem ipsum','2022-06-27 17:20:46','2023-01-21 10:11:38',NULL),(42,'0000000000000','Lorem Ipsum is simply dummy text of the printing and typesetting industry','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','l4@p.com','lorem ipsum','2022-06-27 17:21:27','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journeylists`
--

DROP TABLE IF EXISTS `journeylists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `journeylists` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `pick_location_id` int unsigned NOT NULL,
  `drop_location_id` int unsigned NOT NULL,
  `pick_stand_id` int unsigned NOT NULL,
  `drop_stand_id` int unsigned NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext,
  `journeydate` tinytext NOT NULL,
  `id_number` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `journeylists_trip_id_foreign` (`trip_id`),
  KEY `journeylists_subtrip_id_foreign` (`subtrip_id`),
  KEY `journeylists_pick_location_id_foreign` (`pick_location_id`),
  KEY `journeylists_drop_location_id_foreign` (`drop_location_id`),
  KEY `journeylists_pick_stand_id_foreign` (`pick_stand_id`),
  KEY `journeylists_drop_stand_id_foreign` (`drop_stand_id`),
  CONSTRAINT `journeylists_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `journeylists_drop_stand_id_foreign` FOREIGN KEY (`drop_stand_id`) REFERENCES `pickdrops` (`id`),
  CONSTRAINT `journeylists_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `journeylists_pick_stand_id_foreign` FOREIGN KEY (`pick_stand_id`) REFERENCES `pickdrops` (`id`),
  CONSTRAINT `journeylists_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `journeylists_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=376 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journeylists`
--

LOCK TABLES `journeylists` WRITE;
/*!40000 ALTER TABLE `journeylists` DISABLE KEYS */;
INSERT INTO `journeylists` VALUES (369,'TB8E4G57FO',23,38,32,30,95,96,'Customer','One','711111111','2022-06-28','666999','2022-06-28 15:08:21','2023-01-21 10:11:38',NULL),(370,'TBFKS8YEBW',23,38,32,30,95,96,'Customer','Two','885555','2022-06-28','98868','2022-06-28 15:15:21','2023-01-21 10:11:38',NULL),(371,'TBJ3D2RY0P',24,41,25,43,97,99,'Customer','One','711111111','2022-06-28','666999','2022-06-28 15:16:50','2023-01-21 10:11:38',NULL),(372,'TBNYFQET3S',25,43,43,33,101,102,'Customer','Two','885555','2022-06-28','98868','2022-06-28 15:17:58','2023-01-21 10:11:38',NULL),(373,'TB76DFM1CA',24,40,30,32,97,100,' Mr Customer','Two','885555','2022-06-28','98868','2022-06-28 15:19:21','2023-01-21 10:11:38',NULL),(374,'TBXT8KPHV2',24,41,25,43,98,99,'LOREM','IPSUM','77777777777','2022-06-28','abc098','2022-06-28 15:20:54','2023-01-21 10:11:38',NULL),(375,'TBA9X180HU',23,38,32,30,95,96,'LOREM','IPSUM','77777777777','2022-06-28','abc098','2022-06-28 15:22:26','2023-01-21 10:11:38',NULL);
/*!40000 ALTER TABLE `journeylists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langstrings`
--

DROP TABLE IF EXISTS `langstrings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `langstrings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=599 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langstrings`
--

LOCK TABLES `langstrings` WRITE;
/*!40000 ALTER TABLE `langstrings` DISABLE KEYS */;
INSERT INTO `langstrings` VALUES (16,'dashboard','2022-03-10 14:11:04','2023-01-21 10:11:38',NULL),(17,'book_time','2022-03-10 14:11:13','2023-01-21 10:11:38',NULL),(18,'book_time_list','2022-03-10 14:14:25','2023-01-21 10:11:38',NULL),(19,'refund_list','2022-03-10 16:15:05','2023-01-21 10:11:38',NULL),(20,'agent','2022-03-13 16:39:28','2023-01-21 10:11:38',NULL),(21,'ticket_booking','2022-03-15 11:40:41','2023-01-21 10:11:38',NULL),(22,'book_ticket','2022-03-15 12:55:25','2023-01-21 10:11:38',NULL),(23,'ticket_list','2022-03-15 13:06:30','2023-01-21 10:11:38',NULL),(24,'journey_list','2022-03-15 13:06:45','2023-01-21 10:11:38',NULL),(25,'cancel_list','2022-03-15 13:07:04','2023-01-21 10:11:38',NULL),(26,'add_booking_time','2022-03-15 13:10:29','2023-01-21 10:11:38',NULL),(27,'booking_time_list','2022-03-15 13:11:43','2023-01-21 10:11:38',NULL),(28,'add_agent','2022-03-15 17:26:19','2023-01-21 10:11:38',NULL),(29,'agent_list','2022-03-15 17:26:38','2023-01-21 10:11:38',NULL),(30,'account','2022-03-15 17:33:29','2023-01-21 10:11:38',NULL),(31,'account_chart','2022-03-15 17:33:50','2023-01-21 10:11:38',NULL),(32,'add_transaction','2022-03-15 17:34:47','2023-01-21 10:11:38',NULL),(33,'transaction_list','2022-03-15 17:34:59','2023-01-21 10:11:38',NULL),(34,'location','2022-03-15 17:52:20','2023-01-21 10:11:38',NULL),(35,'add_location','2022-03-15 17:52:30','2023-01-21 10:11:38',NULL),(36,'location_list','2022-03-15 17:52:44','2023-01-21 10:11:38',NULL),(37,'add_stand','2022-03-15 17:52:56','2023-01-21 10:11:38',NULL),(38,'stand_list','2022-03-15 17:53:11','2023-01-21 10:11:38',NULL),(39,'schedule','2022-03-15 18:35:06','2023-01-21 10:11:38',NULL),(40,'add_schedule','2022-03-15 18:35:15','2023-01-21 10:11:38',NULL),(41,'schedule_list','2022-03-15 18:35:27','2023-01-21 10:11:38',NULL),(42,'add_schedule_filter','2022-03-15 18:35:47','2023-01-21 10:11:38',NULL),(43,'schedule_filter_list','2022-03-15 18:36:03','2023-01-21 10:11:38',NULL),(44,'advertisement','2022-05-11 11:32:37','2023-01-21 10:11:38',NULL),(45,'add_advertisement','2022-05-11 11:34:11','2023-01-21 10:11:38',NULL),(46,'advertisement_list','2022-05-11 11:35:45','2023-01-21 10:11:38',NULL),(47,'coupon','2022-05-11 11:46:10','2023-01-21 10:11:38',NULL),(48,'add_coupon','2022-05-11 11:47:04','2023-01-21 10:11:38',NULL),(49,'coupon_list','2022-05-11 11:48:38','2023-01-21 10:11:38',NULL),(50,'employee','2022-05-11 11:52:32','2023-01-21 10:11:38',NULL),(51,'add_employee_type','2022-05-11 11:58:05','2023-01-21 10:11:38',NULL),(52,'employee_type_list','2022-05-11 12:03:29','2023-01-21 10:11:38',NULL),(53,'add_employee','2022-05-11 12:05:54','2023-01-21 10:11:38',NULL),(54,'employee_list','2022-05-11 12:06:46','2023-01-21 10:11:38',NULL),(55,'fitness','2022-05-11 12:20:57','2023-01-21 10:11:38',NULL),(56,'add_fitness','2022-05-11 12:21:57','2023-01-21 10:11:38',NULL),(57,'fitness_list','2022-05-11 12:22:37','2023-01-21 10:11:38',NULL),(58,'fleet','2022-05-11 12:23:52','2023-01-21 10:11:38',NULL),(59,'add_fleet','2022-05-11 12:24:46','2023-01-21 10:11:38',NULL),(60,'fleet_list','2022-05-11 12:25:47','2023-01-21 10:11:38',NULL),(61,'add_vehicle','2022-05-11 12:26:57','2023-01-21 10:11:38',NULL),(62,'vehicle_list','2022-05-11 12:30:48','2023-01-21 10:11:38',NULL),(63,'frontend','2022-05-11 12:32:27','2023-01-21 10:11:38',NULL),(64,'sectionone','2022-05-11 12:34:23','2023-01-21 10:11:38',NULL),(65,'sectiontwo','2022-05-11 12:35:40','2023-01-21 10:11:38',NULL),(66,'sectiontwo_two','2022-05-11 12:36:50','2023-01-21 10:11:38',NULL),(67,'how_works_add','2022-05-11 12:41:10','2023-01-21 10:11:38',NULL),(68,'how_works_list','2022-05-11 12:52:58','2023-01-21 10:11:38',NULL),(69,'sectionthree','2022-05-11 12:54:27','2023-01-21 10:11:38',NULL),(70,'sectionfour','2022-05-11 12:58:24','2023-01-21 10:11:38',NULL),(71,'sectionfour_four','2022-05-11 13:04:21','2023-01-21 10:11:38',NULL),(72,'add_comment','2022-05-11 13:05:19','2023-01-21 10:11:38',NULL),(73,'comment_list','2022-05-11 13:05:59','2023-01-21 10:11:38',NULL),(74,'sectionfive','2022-05-11 13:11:16','2023-01-21 10:11:38',NULL),(75,'sectionsix','2022-05-11 13:11:57','2023-01-21 10:11:38',NULL),(76,'sectionseven','2022-05-11 13:40:29','2023-01-21 10:11:38',NULL),(77,'footer','2022-05-11 13:41:12','2023-01-21 10:11:38',NULL),(78,'blog','2022-05-11 13:46:04','2023-01-21 10:11:38',NULL),(79,'add_blog','2022-05-11 13:51:41','2023-01-21 10:11:38',NULL),(80,'blog_list','2022-05-11 13:52:20','2023-01-21 10:11:38',NULL),(81,'social_media','2022-05-11 13:56:45','2023-01-21 10:11:38',NULL),(82,'add_social_media','2022-05-11 13:57:35','2023-01-21 10:11:38',NULL),(83,'social_media_list','2022-05-11 13:58:18','2023-01-21 10:11:38',NULL),(84,'page','2022-05-11 13:59:36','2023-01-21 10:11:38',NULL),(85,'about','2022-05-11 14:00:18','2023-01-21 10:11:38',NULL),(86,'privacy','2022-05-11 14:01:17','2023-01-21 10:11:38',NULL),(87,'terms_conditions','2022-05-11 14:03:32','2023-01-21 10:11:38',NULL),(88,'faq','2022-05-11 14:04:26','2023-01-21 10:11:38',NULL),(89,'page_setup','2022-05-11 14:05:29','2023-01-21 10:11:38',NULL),(90,'add_question','2022-05-11 14:06:52','2023-01-21 10:11:38',NULL),(91,'question_list','2022-05-11 14:07:29','2023-01-21 10:11:38',NULL),(92,'inquiry','2022-05-11 14:10:17','2023-01-21 10:11:38',NULL),(93,'language','2022-05-11 14:21:50','2023-01-21 10:11:38',NULL),(94,'language_add','2022-05-11 14:23:19','2023-01-21 10:11:38',NULL),(95,'language_list','2022-05-11 14:25:02','2023-01-21 10:11:38',NULL),(96,'passanger','2022-05-11 14:30:37','2023-01-21 10:11:38',NULL),(97,'add_passanger','2022-05-11 14:38:17','2023-01-21 10:11:38',NULL),(98,'passanger_list','2022-05-11 14:39:08','2023-01-21 10:11:38',NULL),(99,'inquiry_list','2022-05-11 14:41:17','2023-01-21 10:11:38',NULL),(100,'payment_method','2022-05-11 14:46:22','2023-01-21 10:11:38',NULL),(101,'add_payment_method','2022-05-11 14:47:14','2023-01-21 10:11:38',NULL),(102,'payment_method_list','2022-05-11 14:48:01','2023-01-21 10:11:38',NULL),(103,'payment_gateway','2022-05-11 14:50:55','2023-01-21 10:11:38',NULL),(104,'add_payment_gateway','2022-05-11 14:51:48','2023-01-21 10:11:38',NULL),(105,'payment_gateway_list','2022-05-11 14:52:54','2023-01-21 10:11:38',NULL),(106,'rating','2022-05-11 14:57:06','2023-01-21 10:11:38',NULL),(107,'rating_list','2022-05-11 14:57:56','2023-01-21 10:11:38',NULL),(108,'report','2022-05-11 15:01:17','2023-01-21 10:11:38',NULL),(109,'ticket_sold','2022-05-11 15:02:04','2023-01-21 10:11:38',NULL),(110,'agent_report','2022-05-11 15:03:15','2023-01-21 10:11:38',NULL),(111,'role','2022-05-11 15:04:57','2023-01-21 10:11:38',NULL),(112,'add_role','2022-05-11 15:05:33','2023-01-21 10:11:38',NULL),(113,'role_list','2022-05-11 15:06:26','2023-01-21 10:11:38',NULL),(114,'add_menu','2022-05-11 15:07:11','2023-01-21 10:11:38',NULL),(115,'menu_list','2022-05-11 15:08:15','2023-01-21 10:11:38',NULL),(116,'add_permission','2022-05-11 15:09:09','2023-01-21 10:11:38',NULL),(117,'permission_list','2022-05-11 15:09:22','2023-01-21 10:11:38',NULL),(118,'tax','2022-05-11 15:12:30','2023-01-21 10:11:38',NULL),(119,'add_tax','2022-05-11 15:13:01','2023-01-21 10:11:38',NULL),(120,'tax_list','2022-05-11 15:13:36','2023-01-21 10:11:38',NULL),(121,'facility','2022-05-11 15:14:30','2023-01-21 10:11:38',NULL),(122,'add_facility','2022-05-11 15:14:50','2023-01-21 10:11:38',NULL),(123,'facility_list','2022-05-11 15:15:01','2023-01-21 10:11:38',NULL),(124,'trip','2022-05-11 15:28:28','2023-01-21 10:11:38',NULL),(125,'add_trip','2022-05-11 15:28:35','2023-01-21 10:11:38',NULL),(126,'trip_list','2022-05-11 15:28:42','2023-01-21 10:11:38',NULL),(127,'website_setting','2022-05-11 15:52:50','2023-01-21 10:11:38',NULL),(128,'webconfig','2022-05-11 15:53:44','2023-01-21 10:11:38',NULL),(129,'db_backup','2022-05-11 15:54:31','2023-01-21 10:11:38',NULL),(130,'edit','2022-05-15 11:58:14','2023-01-21 10:11:38',NULL),(131,'add','2022-05-15 11:58:21','2023-01-21 10:11:38',NULL),(132,'delete','2022-05-15 11:58:33','2023-01-21 10:11:38',NULL),(133,'update','2022-05-15 11:58:43','2023-01-21 10:11:38',NULL),(134,'show','2022-05-15 15:54:49','2023-01-21 10:11:38',NULL),(135,'details','2022-05-15 17:53:44','2023-01-21 10:11:38',NULL),(136,'cookies','2022-05-16 14:21:36','2023-01-21 10:11:38',NULL),(137,'add_language_string','2022-05-16 16:16:54','2023-01-21 10:11:38',NULL),(138,'language_string_list','2022-05-16 16:17:49','2023-01-21 10:11:38',NULL),(139,'paypal','2022-05-17 10:08:04','2023-01-21 10:11:38',NULL),(140,'paystack','2022-05-17 10:08:17','2023-01-21 10:11:38',NULL),(141,'stripe','2022-05-17 10:08:25','2023-01-21 10:11:38',NULL),(142,'razorpay','2022-05-17 10:08:31','2023-01-21 10:11:38',NULL),(143,'software_settings','2022-05-18 13:02:50','2023-01-21 10:11:38',NULL),(144,'web_settings','2022-05-18 13:03:03','2023-01-21 10:11:38',NULL),(145,'email','2022-05-19 12:03:31','2023-01-21 10:11:38',NULL),(146,'subscribe_list','2022-05-22 11:05:57','2023-01-21 10:11:38',NULL),(147,'first_name','2022-05-24 14:16:20','2023-01-21 10:11:38',NULL),(148,'last_name','2022-05-24 14:16:53','2023-01-21 10:11:38',NULL),(149,'mobile','2022-05-24 14:18:14','2023-01-21 10:11:38',NULL),(150,'blood','2022-05-24 14:20:27','2023-01-21 10:11:38',NULL),(151,'id_type','2022-05-24 14:20:46','2023-01-21 10:11:38',NULL),(152,'nid_passport_number','2022-05-24 14:21:09','2023-01-21 10:11:38',NULL),(153,'commission','2022-05-24 14:21:28','2023-01-21 10:11:38',NULL),(154,'country_name','2022-05-24 14:26:29','2023-01-21 10:11:38',NULL),(155,'city_name','2022-05-24 14:26:51','2023-01-21 10:11:38',NULL),(156,'zip_code','2022-05-24 14:27:25','2023-01-21 10:11:38',NULL),(157,'address','2022-05-24 14:29:09','2023-01-21 10:11:38',NULL),(158,'nid_passport_image','2022-05-24 14:29:23','2023-01-21 10:11:38',NULL),(159,'profile_image','2022-05-24 14:30:49','2023-01-21 10:11:38',NULL),(160,'submit','2022-05-24 14:31:14','2023-01-21 10:11:38',NULL),(161,'name','2022-05-24 15:19:54','2023-01-21 10:11:38',NULL),(162,'action','2022-05-24 15:21:28','2023-01-21 10:11:38',NULL),(163,'to','2022-05-24 15:51:38','2023-01-21 10:11:38',NULL),(164,'from','2022-05-24 15:52:02','2023-01-21 10:11:38',NULL),(165,'date','2022-05-24 16:22:03','2023-01-21 10:11:38',NULL),(166,'booking','2022-05-24 16:22:57','2023-01-21 10:11:38',NULL),(167,'id','2022-05-24 16:23:15','2023-01-21 10:11:38',NULL),(168,'income','2022-05-24 16:23:35','2023-01-21 10:11:38',NULL),(169,'expense','2022-05-24 16:24:08','2023-01-21 10:11:38',NULL),(170,'total_balance','2022-05-24 16:24:42','2023-01-21 10:11:38',NULL),(171,'tranjection_type','2022-05-24 19:04:49','2023-01-21 10:11:38',NULL),(172,'amount','2022-05-24 19:05:11','2023-01-21 10:11:38',NULL),(173,'tranjection','2022-05-24 19:05:42','2023-01-21 10:11:38',NULL),(174,'create_by','2022-05-24 19:06:06','2023-01-21 10:11:38',NULL),(175,'type','2022-05-24 19:19:07','2023-01-21 10:11:38',NULL),(176,'document','2022-05-24 19:29:39','2023-01-21 10:11:38',NULL),(177,'subject','2022-05-24 20:16:07','2023-01-21 10:11:38',NULL),(178,'message','2022-05-24 20:22:49','2023-01-21 10:11:38',NULL),(179,'nid_passport','2022-05-24 20:54:52','2023-01-21 10:11:38',NULL),(180,'main','2022-05-25 17:40:39','2023-01-21 10:11:38',NULL),(181,'sub','2022-05-25 17:40:49','2023-01-21 10:11:38',NULL),(182,'ticket','2022-05-25 17:54:42','2023-01-21 10:11:38',NULL),(183,'journey','2022-05-25 17:55:31','2023-01-21 10:11:38',NULL),(184,'total','2022-05-25 17:55:56','2023-01-21 10:11:38',NULL),(185,'seat','2022-05-25 17:56:13','2023-01-21 10:11:38',NULL),(186,'number','2022-05-25 17:56:30','2023-01-21 10:11:38',NULL),(187,'price','2022-05-25 17:56:49','2023-01-21 10:11:38',NULL),(188,'discount','2022-05-25 17:57:32','2023-01-21 10:11:38',NULL),(189,'cancel','2022-05-25 18:01:05','2023-01-21 10:11:38',NULL),(190,'refund','2022-05-25 18:01:17','2023-01-21 10:11:38',NULL),(191,'sold','2022-05-25 18:01:25','2023-01-21 10:11:38',NULL),(192,'rate','2022-05-26 11:04:15','2023-01-21 10:11:38',NULL),(193,'pick_up','2022-05-26 11:35:17','2023-01-21 10:11:38',NULL),(194,'drop','2022-05-26 11:35:23','2023-01-21 10:11:38',NULL),(195,'search','2022-05-26 12:02:39','2023-01-21 10:11:38',NULL),(196,'book','2022-05-26 12:04:44','2023-01-21 10:11:38',NULL),(197,'hr','2022-05-26 12:12:30','2023-01-21 10:11:38',NULL),(198,'km','2022-05-26 12:12:35','2023-01-21 10:11:38',NULL),(199,'fair','2022-05-26 12:13:05','2023-01-21 10:11:38',NULL),(200,'process_book','2022-05-26 12:13:53','2023-01-21 10:11:38',NULL),(201,'no_trip_found','2022-05-26 12:15:52','2023-01-21 10:11:38',NULL),(202,'payment','2022-05-26 13:36:37','2023-01-21 10:11:38',NULL),(203,'paid','2022-05-26 13:36:48','2023-01-21 10:11:38',NULL),(204,'partial','2022-05-26 13:37:43','2023-01-21 10:11:38',NULL),(205,'unpaid','2022-05-26 13:37:52','2023-01-21 10:11:38',NULL),(206,'pay','2022-05-26 13:38:37','2023-01-21 10:11:38',NULL),(207,'apply','2022-05-26 13:38:49','2023-01-21 10:11:38',NULL),(208,'status','2022-05-26 13:45:27','2023-01-21 10:11:38',NULL),(209,'stand','2022-05-26 15:13:37','2023-01-21 10:11:38',NULL),(210,'make','2022-05-26 15:17:29','2023-01-21 10:11:38',NULL),(211,'invoice','2022-05-26 15:17:40','2023-01-21 10:11:38',NULL),(212,'fee','2022-05-26 16:10:13','2023-01-21 10:11:38',NULL),(213,'minutes','2022-05-26 17:29:34','2023-01-21 10:11:38',NULL),(214,'max_time_cancel','2022-05-26 17:35:44','2023-01-21 10:11:38',NULL),(215,'assiatant','2022-05-26 18:18:09','2023-01-21 10:11:38',NULL),(216,'driver','2022-05-26 18:18:14','2023-01-21 10:11:38',NULL),(217,'pos','2022-05-29 11:37:38','2023-01-21 10:11:38',NULL),(218,'due','2022-05-29 11:50:10','2023-01-21 10:11:38',NULL),(219,'special','2022-05-29 11:52:39','2023-01-21 10:11:38',NULL),(220,'end','2022-05-29 11:54:26','2023-01-21 10:11:38',NULL),(221,'start','2022-05-29 11:54:38','2023-01-21 10:11:38',NULL),(222,'adult','2022-05-29 12:05:01','2023-01-21 10:11:38',NULL),(223,'child','2022-05-29 12:06:18','2023-01-21 10:11:38',NULL),(224,'grand','2022-05-29 12:14:00','2023-01-21 10:11:38',NULL),(225,'time','2022-05-29 13:06:33','2023-01-21 10:11:38',NULL),(226,'layout','2022-05-29 14:50:08','2023-01-21 10:11:38',NULL),(227,'last_seat_check','2022-05-29 14:50:41','2023-01-21 10:11:38',NULL),(228,'luggage','2022-05-29 14:51:25','2023-01-21 10:11:38',NULL),(229,'service','2022-05-29 14:51:34','2023-01-21 10:11:38',NULL),(230,'active','2022-05-29 14:51:43','2023-01-21 10:11:38',NULL),(231,'disable','2022-05-29 14:51:51','2023-01-21 10:11:38',NULL),(232,'no','2022-05-29 16:03:43','2023-01-21 10:11:38',NULL),(233,'reg','2022-05-29 16:03:54','2023-01-21 10:11:38',NULL),(234,'eng','2022-05-29 16:04:05','2023-01-21 10:11:38',NULL),(235,'model','2022-05-29 16:04:15','2023-01-21 10:11:38',NULL),(236,'chassis','2022-05-29 16:04:44','2023-01-21 10:11:38',NULL),(237,'woner','2022-05-29 16:04:59','2023-01-21 10:11:38',NULL),(238,'company','2022-05-29 16:05:39','2023-01-21 10:11:38',NULL),(239,'bus','2022-05-29 16:10:43','2023-01-21 10:11:38',NULL),(240,'image','2022-05-29 16:10:55','2023-01-21 10:11:38',NULL),(241,'assign','2022-05-29 17:16:01','2023-01-21 10:11:38',NULL),(242,'milage','2022-05-29 18:04:53','2023-01-21 10:11:38',NULL),(243,'vehicle','2022-05-29 18:05:21','2023-01-21 10:11:38',NULL),(244,'comment','2022-05-29 19:16:41','2023-01-21 10:11:38',NULL),(245,'filter','2022-05-29 20:32:25','2023-01-21 10:11:38',NULL),(246,'value','2022-05-29 20:52:02','2023-01-21 10:11:38',NULL),(247,'condition','2022-05-29 21:15:11','2023-01-21 10:11:38',NULL),(248,'code','2022-05-29 21:18:27','2023-01-21 10:11:38',NULL),(249,'test','2022-05-30 11:48:57','2023-01-21 10:11:38',NULL),(250,'live','2022-05-30 11:49:06','2023-01-21 10:11:38',NULL),(251,'secret','2022-05-30 11:54:40','2023-01-21 10:11:38',NULL),(252,'client','2022-05-30 11:58:38','2023-01-21 10:11:38',NULL),(253,'key','2022-05-30 12:01:09','2023-01-21 10:11:38',NULL),(254,'merchant','2022-05-30 12:05:42','2023-01-21 10:11:38',NULL),(255,'environment','2022-05-30 12:25:27','2023-01-21 10:11:38',NULL),(256,'private','2022-05-30 12:50:42','2023-01-21 10:11:38',NULL),(257,'stoppage','2022-05-30 16:24:50','2023-01-21 10:11:38',NULL),(258,'children','2022-05-30 16:26:09','2023-01-21 10:11:38',NULL),(259,'distance','2022-05-30 16:26:31','2023-01-21 10:11:38',NULL),(260,'approximate','2022-05-30 16:28:13','2023-01-21 10:11:38',NULL),(261,'weekend','2022-05-30 16:28:29','2023-01-21 10:11:38',NULL),(262,'assistant','2022-05-30 16:31:39','2023-01-21 10:11:38',NULL),(263,'section','2022-05-30 17:14:09','2023-01-21 10:11:38',NULL),(264,'point','2022-05-30 17:16:37','2023-01-21 10:11:38',NULL),(265,'boarding','2022-05-30 17:18:16','2023-01-21 10:11:38',NULL),(266,'select','2022-05-30 17:21:22','2023-01-21 10:11:38',NULL),(267,'dropping','2022-05-30 17:23:52','2023-01-21 10:11:38',NULL),(268,'list','2022-05-30 17:46:02','2023-01-21 10:11:38',NULL),(269,'hour','2022-05-31 15:56:05','2023-01-21 10:11:38',NULL),(270,'show_in_home_page','2022-05-31 18:47:32','2023-01-21 10:11:38',NULL),(271,'password','2022-06-01 11:25:11','2023-01-21 10:11:38',NULL),(272,'repassword','2022-06-01 11:54:47','2023-01-21 10:11:38',NULL),(273,'oldpassword','2022-06-01 11:54:54','2023-01-21 10:11:38',NULL),(274,'newpassword','2022-06-01 11:56:12','2023-01-21 10:11:38',NULL),(275,'profile','2022-06-01 14:28:06','2023-01-21 10:11:38',NULL),(276,'settings','2022-06-01 14:28:18','2023-01-21 10:11:38',NULL),(277,'menu','2022-06-01 16:56:40','2023-01-21 10:11:38',NULL),(278,'url','2022-06-01 16:56:57','2023-01-21 10:11:38',NULL),(279,'module','2022-06-01 16:57:25','2023-01-21 10:11:38',NULL),(280,'title','2022-06-01 16:59:26','2023-01-21 10:11:38',NULL),(281,'parent','2022-06-01 17:36:44','2023-01-21 10:11:38',NULL),(282,'permission','2022-06-01 17:53:09','2023-01-21 10:11:38',NULL),(283,'read','2022-06-01 18:02:45','2023-01-21 10:11:38',NULL),(284,'create','2022-06-01 18:02:58','2023-01-21 10:11:38',NULL),(285,'protocol','2022-06-01 18:33:52','2023-01-21 10:11:38',NULL),(286,'host','2022-06-01 18:34:14','2023-01-21 10:11:38',NULL),(287,'smtp','2022-06-01 18:34:22','2023-01-21 10:11:38',NULL),(288,'user','2022-06-01 18:34:37','2023-01-21 10:11:38',NULL),(289,'port','2022-06-01 18:34:52','2023-01-21 10:11:38',NULL),(290,'crypto','2022-06-01 18:35:05','2023-01-21 10:11:38',NULL),(291,'link','2022-06-01 18:51:07','2023-01-21 10:11:38',NULL),(292,'picture','2022-06-01 18:51:16','2023-01-21 10:11:38',NULL),(293,'logo_picture','2022-06-01 19:09:15','2023-01-21 10:11:38',NULL),(294,'inclusive','2022-06-02 09:40:28','2023-01-21 10:11:38',NULL),(295,'exclusive','2022-06-02 09:40:37','2023-01-21 10:11:38',NULL),(296,'favicon','2022-06-02 09:41:05','2023-01-21 10:11:38',NULL),(297,'header','2022-06-02 09:43:09','2023-01-21 10:11:38',NULL),(298,'button','2022-06-02 09:43:22','2023-01-21 10:11:38',NULL),(299,'text','2022-06-02 09:43:31','2023-01-21 10:11:38',NULL),(300,'color','2022-06-02 09:43:41','2023-01-21 10:11:38',NULL),(301,'hover','2022-06-02 09:43:52','2023-01-21 10:11:38',NULL),(302,'background','2022-06-02 09:44:01','2023-01-21 10:11:38',NULL),(303,'zone','2022-06-02 09:44:41','2023-01-21 10:11:38',NULL),(304,'country','2022-06-02 09:44:54','2023-01-21 10:11:38',NULL),(305,'font','2022-06-02 09:45:05','2023-01-21 10:11:38',NULL),(306,'max_ticket_for_one_person','2022-06-02 09:45:36','2023-01-21 10:11:38',NULL),(307,'copy_right_text','2022-06-02 09:45:51','2023-01-21 10:11:38',NULL),(308,'app','2022-06-02 09:46:06','2023-01-21 10:11:38',NULL),(309,'logo','2022-06-02 09:46:30','2023-01-21 10:11:38',NULL),(310,'family','2022-06-02 09:52:59','2023-01-21 10:11:38',NULL),(312,'check_out','2022-06-02 11:45:24','2023-01-21 10:11:38',NULL),(313,'string','2022-06-02 12:09:52','2023-01-21 10:11:38',NULL),(314,'description','2022-06-02 13:05:57','2023-01-21 10:11:38',NULL),(315,'how_it_works','2022-06-02 13:10:46','2023-01-21 10:11:38',NULL),(316,'question','2022-06-02 14:36:12','2023-01-21 10:11:38',NULL),(317,'answer','2022-06-02 14:36:37','2023-01-21 10:11:38',NULL),(318,'upload','2022-06-02 14:53:35','2023-01-21 10:11:38',NULL),(319,'by','2022-06-02 14:53:46','2023-01-21 10:11:38',NULL),(320,'serial','2022-06-02 14:54:01','2023-01-21 10:11:38',NULL),(321,'designation','2022-06-02 17:34:39','2023-01-21 10:11:38',NULL),(322,'one','2022-06-05 09:26:16','2023-01-21 10:11:38',NULL),(323,'two','2022-06-05 09:26:30','2023-01-21 10:11:38',NULL),(324,'hide','2022-06-05 09:29:08','2023-01-21 10:11:38',NULL),(325,'office_open_time','2022-06-05 10:01:28','2023-01-21 10:11:38',NULL),(326,'contact_number','2022-06-05 10:02:34','2023-01-21 10:11:38',NULL),(327,'customer','2022-06-26 17:37:07','2023-01-21 10:11:38',NULL),(328,'currency','2022-07-25 10:31:31','2023-01-21 10:11:38',NULL),(329,'today','2022-07-28 09:54:57','2023-01-21 10:11:38',NULL),(330,'income_expense','2022-07-28 09:56:41','2023-01-21 10:11:38',NULL),(331,'yearly','2022-07-28 09:57:03','2023-01-21 10:11:38',NULL),(332,'weekly','2022-07-28 09:57:19','2023-01-21 10:11:38',NULL),(333,'monthly','2022-07-28 09:57:55','2023-01-21 10:11:38',NULL),(334,'agent_payment','2022-07-28 09:57:55','2023-01-21 10:11:38',NULL),(335,'discount_round_trip','2022-07-28 09:57:55','2023-01-21 10:11:38',NULL),(336,'sum_report','2022-07-28 09:57:55','2023-01-21 10:11:38',NULL),(337,'profit','2022-07-28 09:57:55','2023-01-21 10:11:38',NULL),(338,'public','2023-02-08 16:01:00','2023-02-08 16:01:00',NULL),(339,'encryption','2023-02-08 16:02:15','2023-02-08 16:02:15',NULL),(340,'flutterwavepay','2023-02-08 16:02:36','2023-02-08 16:02:36',NULL),(341,'store','2023-02-08 16:02:44','2023-02-08 16:02:44',NULL),(342,'confirm','2023-02-08 16:02:53','2023-02-08 16:02:53',NULL),(343,'please_enter_password','2023-02-08 16:03:04','2023-02-08 16:03:04',NULL),(344,'re_enter_password','2023-02-08 16:03:11','2023-02-08 16:03:11',NULL),(345,'view','2023-02-08 16:03:18','2023-02-08 16:03:18',NULL),(346,'full_privilege','2023-02-08 16:03:24','2023-02-08 16:03:24',NULL),(347,'all_create','2023-02-08 16:03:29','2023-02-08 16:03:29',NULL),(348,'all_read','2023-02-08 16:03:40','2023-02-08 16:03:40',NULL),(349,'all_edit','2023-02-08 16:03:46','2023-02-08 16:03:46',NULL),(350,'all_delete','2023-02-08 16:03:52','2023-02-08 16:03:52',NULL),(351,'navigation_home_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(352,'navigation_work_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(353,'navigation_blog_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(354,'navigation_track_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(355,'navigation_login_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(356,'hero_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(357,'search_form_from_input','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(358,'search_form_to_input','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(359,'search_form_start_date','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(360,'search_form_retrurn_date','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(361,'search_form_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(362,'search_form_button_booking_page','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(363,'journey_page_booking_price','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(364,'journey_page_booking_btn','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(365,'card_read_more_btn','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(366,'subscribe_component_input','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(367,'subscribe_component_bnt','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(368,'footer_top_about_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(369,'footer_top_blog_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(370,'footer_top_FAQ_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(371,'footer_top_contact_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(372,'footer_top_privacy_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(373,'footer_top_cookies_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(374,'footer_top_terms_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(375,'footer_top_download_app','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(376,'footer_bottom_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(377,'blog_page_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(378,'blog_page_sub_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(379,'track_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(380,'track_sub_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(381,'track_button_text','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(382,'login_page_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(383,'login_page_email_input','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(384,'login_page_password_input','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(385,'login_page_checkbox_text','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(386,'login_page_forgot_password_link_text','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(387,'login_page_submit_button','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(388,'login_page_question_text','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(389,'login_page_sign_up_link_text','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(390,'forgot_page_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(391,'forgot_page_sub_title','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(392,'forgot_page_email_input','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(393,'forgot_page_submit_button','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(394,'sign_up_page_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(395,'sign_up_page_sub_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(396,'sign_up_page_input_email','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(397,'sign_up_page_input_phone','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(398,'sign_up_page_input_password','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(399,'sign_up_page_input_re_password','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(400,'sign_up_page_input_name','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(401,'sign_up_page_input_last_name','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(402,'sign_up_page_checkbox_text','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(403,'sign_up_page_terms_link_text','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(404,'sign_up_page_submit_button','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(405,'sign_up_page_qustion_text','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(406,'sign_up_page_sign_in_link_text','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(407,'booking_page_departure_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(408,'booking_page_return_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(409,'booking_page_card_title_buses_found','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(410,'booking_page_card_title_departure','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(411,'booking_page_card_title_duration','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(412,'booking_page_card_title_arraival','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(413,'booking_page_card_title_ratings','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(414,'booking_page_card_title_fare','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(415,'booking_page_card_title_seat_available','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(416,'booking_page_card_bus_photos_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(417,'booking_page_card_reviews_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(418,'booking_page_card_booking_policies_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(419,'booking_page_card_reveiw_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(420,'booking_page_card_view_seats_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(421,'booking_page_card_book_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(422,'mobile_booking_page_card_book_btn','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(423,'booking_page_seat_legend','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(424,'booking_page_unavailable','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(425,'booking_page_available','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(426,'booking_page_book','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(427,'booking_page_adul_seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(428,'booking_page_children_seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(429,'booking_page_special_seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(430,'booking_page_bus_facilities','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(431,'booking_page_boarding_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(432,'booking_page_dropping_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(433,'selected_boarding_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(434,'selected_dropping_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(435,'booking_page_fare_details_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(436,'booking_page_child_price_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(437,'booking_page_adult_price_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(438,'booking_page_special_price_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(439,'booing_page_total_ammount_title','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(440,'booing_page_total_ammount_currency','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(441,'booking_page_Proccess_to_book_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(442,'booking_page_tax_message','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(443,'side_bar_price_range_start','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(444,'side_bar_price_range_end','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(445,'side_bar_bus_types_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(446,'side_bar_departure_time_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(447,'side_bar_arrival_times_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(448,'side_bar_fare_summery_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(449,'side_bar_base_fare_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(450,'side_bar_tax_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(451,'side_bar_return_ticket_fare_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(452,'side_bar_return_ticket_tax_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(453,'side_bar_sub_total_ammount_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(454,'side_bar_total_discount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(455,'side_bar_total_ammount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(456,'side_bar_dicount_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(457,'side_bar_dicount_sub_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(458,'side_bar_promo_code_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(459,'side_bar_promo_code_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(460,'checkout_page_sub_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(461,'checkout_page_question','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(462,'checkout_page_login_page_link','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(463,'checkout_page_contact_details_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(464,'checkout_page_contact_details_input_email','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(465,'checkout_page_contact_details_input_phone','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(466,'checkout_page_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(467,'checkout_page_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(468,'checkout_page_passenger_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(469,'checkout_page_passenger_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(470,'checkout_page_nid_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(471,'checkout_page_nid_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(472,'checkout_page_zip_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(473,'checkout_page_zip_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(474,'checkout_page_city_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(475,'checkout_page_address_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(476,'checkout_page_address_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(477,'checkout_page_country_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(478,'checkout_page_country_input_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(479,'checkout_page_checkbox_text','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(480,'checkout_page_payNow_radio_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(481,'checkout_page_payLatter_radio_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(482,'checkout_page_cancel_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(483,'checkout_page_make_payment_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(484,'checkout_page_book_your_ticket_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(485,'tickets_page_navigation_laguess_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(486,'tickets_page_navigation_profile_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(487,'tickets_page_navigation_change_password_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(488,'tickets_page_navigation_logout_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(489,'tickets_page_navigation_tickets_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(490,'tickets_page_booking_id','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(491,'tickets_page_payment_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(492,'tickets_page_view_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(493,'tickets_page_new_password_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(494,'tickets_page_new_password_input','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(495,'tickets_page_re_password_input','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(496,'tickets_page_old_password_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(497,'tickets_page_old_password_input','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(498,'tickets_page_change_password_confirm_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(499,'ticket_traking_page_name','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(500,'ticket_traking_page_phone','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(501,'ticket_traking_page_booking_id','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(502,'ticket_traking_page_pick_laction','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(503,'ticket_traking_page_drop_laction','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(504,'ticket_traking_page_booking_date','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(505,'ticket_traking_page_journey_date','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(506,'ticket_traking_page_seat_number','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(507,'ticket_traking_page_ammount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(508,'ticket_traking_page_discount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(509,'ticket_traking_page_total_tax','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(510,'ticket_traking_page_total','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(511,'ticket_traking_page_due','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(512,'ticket_traking_page_print_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(513,'ticket_traking_page_download_btn','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(514,'conact_us_page_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(515,'conact_us_page_email_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(516,'conact_us_page_phone_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(517,'conact_us_page_followon_title','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(518,'sslcommerz','2023-02-19 11:16:47','2023-02-19 11:16:47',NULL),(520,'view_deleted','2023-03-21 11:46:01','2023-03-21 11:46:01',NULL),(521,'view_all','2023-03-21 11:46:09','2023-03-21 11:46:09',NULL),(522,'restore','2023-03-21 11:46:09','2023-03-21 11:46:09',NULL),(523,'flutterwave','2023-02-23 12:48:40','2023-02-23 12:48:40',NULL),(524,'bulk_upload','2023-09-07 10:31:38','2023-09-07 10:31:38',NULL),(525,'select_file','2023-09-07 10:31:38','2023-09-07 10:31:38',NULL),(526,'download_sample_file','2023-09-07 10:31:38','2023-09-07 10:31:38',NULL),(527,'tab_title','2023-09-07 11:12:05','2023-09-07 11:12:05',NULL),(528,'home_tab-title','2023-09-07 11:12:50','2023-09-07 11:12:50',NULL),(529,'work_tab_title','2023-09-07 11:13:12','2023-09-07 11:13:12',NULL),(530,'blog_tab_title','2023-09-07 11:13:25','2023-09-07 11:13:25',NULL),(531,'account_tab_title','2023-09-07 11:13:45','2023-09-07 11:13:45',NULL),(532,'booking_page_card_title_distance','2023-09-07 13:07:08','2023-09-07 13:07:08',NULL),(533,'home_tab_title','2023-09-10 14:45:20','2023-09-10 14:45:20',NULL),(534,'hero_button_text','2023-09-12 16:35:08','2023-09-12 16:35:08',NULL),(535,'hero_title','2023-09-12 16:41:32','2023-09-12 16:41:32',NULL),(536,'hero_sub_title','2023-09-12 16:45:47','2023-09-12 16:45:47',NULL),(537,'profile_passenger_label','2023-09-14 09:06:46','2023-09-14 09:06:46',NULL),(538,'profile_nid_label','2023-09-14 09:07:09','2023-09-14 09:07:09',NULL),(539,'profile_zip_code_label','2023-09-14 09:07:34','2023-09-14 09:07:34',NULL),(540,'profile_address_label','2023-09-14 09:07:55','2023-09-14 09:07:55',NULL),(541,'profile_country_label','2023-09-14 09:08:20','2023-09-14 09:08:20',NULL),(542,'profile_update_button','2023-09-14 09:11:18','2023-09-14 09:11:18',NULL),(543,'profile_new_password_label','2023-09-14 09:31:14','2023-09-14 09:31:14',NULL),(544,'profile_old_password_label','2023-09-14 09:31:14','2023-09-14 09:31:14',NULL),(545,'profile_change_password_button','2023-09-14 09:32:37','2023-09-14 09:32:37',NULL),(546,'profile_old_password_placeholder','2023-09-14 09:41:18','2023-09-14 09:41:18',NULL),(547,'profile_new_password_placeholder','2023-09-14 09:41:18','2023-09-14 09:41:18',NULL),(548,'profile_re_password_placeholder','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(549,'return','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(550,'showing_result_for','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(551,'round','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(552,'single','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(553,'all','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(554,'none','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(555,'application_setting','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(556,'sign_out','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(557,'joined_at','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(558,'sign_in','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(559,'remind','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(560,'the_following_data_will_be_deleted','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(561,'stuff','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(562,'pick','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(563,'temporary','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(564,'saturday','2023-10-11 10:43:13','2023-10-11 10:43:13',NULL),(565,'sunday','2023-10-11 10:43:39','2023-10-11 10:43:39',NULL),(566,'monday','2023-10-11 10:44:03','2023-10-11 10:44:03',NULL),(567,'tuesday','2023-10-11 10:44:13','2023-10-11 10:44:13',NULL),(568,'wednesday','2023-10-11 10:44:23','2023-10-11 10:44:23',NULL),(569,'thursday','2023-10-11 10:44:31','2023-10-11 10:44:31',NULL),(570,'friday','2023-10-11 10:44:39','2023-10-11 10:44:39',NULL),(571,'difference','2023-10-11 11:12:31','2023-10-11 11:12:31',NULL),(572,'january','2023-10-11 11:20:57','2023-10-11 11:20:57',NULL),(573,'february','2023-10-11 11:21:04','2023-10-11 11:21:04',NULL),(574,'march','2023-10-11 11:21:10','2023-10-11 11:21:10',NULL),(575,'april','2023-10-11 11:21:17','2023-10-11 11:21:17',NULL),(576,'may','2023-10-11 11:21:24','2023-10-11 11:21:24',NULL),(577,'june','2023-10-11 11:21:30','2023-10-11 11:21:30',NULL),(578,'july','2023-10-11 11:21:36','2023-10-11 11:21:36',NULL),(579,'august','2023-10-11 11:21:43','2023-10-11 11:21:43',NULL),(580,'september','2023-10-11 11:21:50','2023-10-11 11:21:50',NULL),(581,'october','2023-10-11 11:21:57','2023-10-11 11:21:57',NULL),(582,'november','2023-10-11 11:22:04','2023-10-11 11:22:04',NULL),(583,'december','2023-10-11 11:22:11','2023-10-11 11:22:11',NULL),(584,'display','2023-10-11 16:57:28','2023-10-11 16:57:28',NULL),(585,'records_per_page','2023-10-11 16:57:43','2023-10-11 16:57:43',NULL),(586,'no_matching_records','2023-10-11 16:57:53','2023-10-11 16:57:53',NULL),(587,'showing','2023-10-11 16:58:01','2023-10-11 16:58:01',NULL),(588,'of','2023-10-11 16:58:10','2023-10-11 16:58:10',NULL),(589,'entries','2023-10-11 16:58:18','2023-10-11 16:58:18',NULL),(590,'no_records_available','2023-10-11 16:58:29','2023-10-11 16:58:29',NULL),(591,'filtered_from','2023-10-11 16:58:39','2023-10-11 16:58:39',NULL),(592,'total_records','2023-10-11 16:58:46','2023-10-11 16:58:46',NULL),(593,'first','2023-10-11 16:58:53','2023-10-11 16:58:53',NULL),(594,'previous','2023-10-11 16:59:02','2023-10-11 16:59:02',NULL),(595,'next','2023-10-11 16:59:09','2023-10-11 16:59:09',NULL),(596,'last','2023-10-11 16:59:17','2023-10-11 16:59:17',NULL),(597,'factory_reset','2023-10-11 18:13:01','2023-10-11 18:13:01',NULL),(598,'are_you_sure','2023-10-11 18:13:01','2023-10-11 18:13:01',NULL);
/*!40000 ALTER TABLE `langstrings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` char(49) NOT NULL,
  `lngcode` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en'),(2,'Afar','aa'),(3,'Abkhazian','ab'),(4,'Afrikaans','af'),(5,'Amharic','am'),(6,'Arabic','ar'),(7,'Assamese','as'),(8,'Aymara','ay'),(9,'Azerbaijani','az'),(10,'Bashkir','ba'),(11,'Belarusian','be'),(12,'Bulgarian','bg'),(13,'Bihari','bh'),(14,'Bislama','bi'),(15,'Bangla','bn'),(16,'Tibetan','bo'),(17,'Breton','br'),(18,'Catalan','ca'),(19,'Corsican','co'),(20,'Czech','cs'),(21,'Welsh','cy'),(22,'Danish','da'),(23,'German','de'),(24,'Bhutani','dz'),(25,'Greek','el'),(26,'Esperanto','eo'),(27,'Spanish','es'),(28,'Estonian','et'),(29,'Basque','eu'),(30,'Persian','fa'),(31,'Finnish','fi'),(32,'Fiji','fj'),(33,'Faeroese','fo'),(34,'French','fr'),(35,'Frisian','fy'),(36,'Irish','ga'),(37,'Scots/Gaelic','gd'),(38,'Galician','gl'),(39,'Guarani','gn'),(40,'Gujarati','gu'),(41,'Hausa','ha'),(42,'Hindi','hi'),(43,'Croatian','hr'),(44,'Hungarian','hu'),(45,'Armenian','hy'),(46,'Interlingua','ia'),(47,'Interlingue','ie'),(48,'Inupiak','ik'),(49,'Indonesian','in'),(50,'Icelandic','is'),(51,'Italian','it'),(52,'Hebrew','iw'),(53,'Japanese','ja'),(54,'Yiddish','ji'),(55,'Javanese','jw'),(56,'Georgian','ka'),(57,'Kazakh','kk'),(58,'Greenlandic','kl'),(59,'Cambodian','km'),(60,'Kannada','kn'),(61,'Korean','ko'),(62,'Kashmiri','ks'),(63,'Kurdish','ku'),(64,'Kirghiz','ky'),(65,'Latin','la'),(66,'Lingala','ln'),(67,'Laothian','lo'),(68,'Lithuanian','lt'),(69,'Latvian/Lettish','lv'),(70,'Malagasy','mg'),(71,'Maori','mi'),(72,'Macedonian','mk'),(73,'Malayalam','ml'),(74,'Mongolian','mn'),(75,'Moldavian','mo'),(76,'Marathi','mr'),(77,'Malay','ms'),(78,'Maltese','mt'),(79,'Burmese','my'),(80,'Nauru','na'),(81,'Nepali','ne'),(82,'Dutch','nl'),(83,'Norwegian','no'),(84,'Occitan','oc'),(85,'(Afan)/Oromoor/Oriya','om'),(86,'Punjabi','pa'),(87,'Polish','pl'),(88,'Pashto/Pushto','ps'),(89,'Portuguese','pt'),(90,'Quechua','qu'),(91,'Rhaeto-Romance','rm'),(92,'Kirundi','rn'),(93,'Romanian','ro'),(94,'Russian','ru'),(95,'Kinyarwanda','rw'),(96,'Sanskrit','sa'),(97,'Sindhi','sd'),(98,'Sangro','sg'),(99,'Serbo-Croatian','sh'),(100,'Singhalese','si'),(101,'Slovak','sk'),(102,'Slovenian','sl'),(103,'Samoan','sm'),(104,'Shona','sn'),(105,'Somali','so'),(106,'Albanian','sq'),(107,'Serbian','sr'),(108,'Siswati','ss'),(109,'Sesotho','st'),(110,'Sundanese','su'),(111,'Swedish','sv'),(112,'Swahili','sw'),(113,'Tamil','ta'),(114,'Telugu','te'),(115,'Tajik','tg'),(116,'Thai','th'),(117,'Tigrinya','ti'),(118,'Turkmen','tk'),(119,'Tagalog','tl'),(120,'Setswana','tn'),(121,'Tonga','to'),(122,'Turkish','tr'),(123,'Tsonga','ts'),(124,'Tatar','tt'),(125,'Twi','tw'),(126,'Ukrainian','uk'),(127,'Urdu','ur'),(128,'Uzbek','uz'),(129,'Vietnamese','vi'),(130,'Volapuk','vo'),(131,'Wolof','wo'),(132,'Xhosa','xh'),(133,'Yoruba','yo'),(134,'Chinese','zh'),(135,'Zulu','zu');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lngstngvalues`
--

DROP TABLE IF EXISTS `lngstngvalues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lngstngvalues` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `string_id` int unsigned NOT NULL,
  `localize_id` int unsigned NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lngstngvalues_string_id_foreign` (`string_id`),
  KEY `lngstngvalues_localize_id_foreign` (`localize_id`),
  CONSTRAINT `lngstngvalues_localize_id_foreign` FOREIGN KEY (`localize_id`) REFERENCES `localizes` (`id`),
  CONSTRAINT `lngstngvalues_string_id_foreign` FOREIGN KEY (`string_id`) REFERENCES `langstrings` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2879 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lngstngvalues`
--

LOCK TABLES `lngstngvalues` WRITE;
/*!40000 ALTER TABLE `lngstngvalues` DISABLE KEYS */;
INSERT INTO `lngstngvalues` VALUES (73,19,1,'Refund List','2022-03-13 16:30:39','2023-01-21 10:11:39',NULL),(74,18,1,'Book Time List','2022-03-13 16:30:39','2023-01-21 10:11:39',NULL),(75,17,1,'Book Time','2022-03-13 16:30:39','2023-01-21 10:11:39',NULL),(76,16,1,'Dashboard','2022-03-13 16:30:39','2023-01-21 10:11:39',NULL),(82,20,1,'Agent','2022-03-13 16:39:28','2023-01-21 10:11:39',NULL),(90,21,1,'Ticket Booking','2022-03-15 11:40:41','2023-01-21 10:11:39',NULL),(93,22,1,'Book Ticket','2022-03-15 12:55:25','2023-01-21 10:11:39',NULL),(96,23,1,'Ticket List ','2022-03-15 13:06:30','2023-01-21 10:11:39',NULL),(99,24,1,'Journey List','2022-03-15 13:06:45','2023-01-21 10:11:39',NULL),(102,25,1,'Cancel List','2022-03-15 13:07:04','2023-01-21 10:11:39',NULL),(105,26,1,'Add Booking Time','2022-03-15 13:10:29','2023-01-21 10:11:39',NULL),(108,27,1,'Boooking Time List','2022-03-15 13:11:43','2023-01-21 10:11:39',NULL),(111,28,1,'Add Agent','2022-03-15 17:26:19','2023-01-21 10:11:39',NULL),(114,29,1,'Agent List','2022-03-15 17:26:38','2023-01-21 10:11:39',NULL),(117,30,1,'Account','2022-03-15 17:33:29','2023-01-21 10:11:39',NULL),(120,31,1,'Account Chart','2022-03-15 17:33:50','2023-01-21 10:11:39',NULL),(123,32,1,'Account Transaction','2022-03-15 17:34:47','2023-01-21 10:11:39',NULL),(126,33,1,'Transaction List','2022-03-15 17:34:59','2023-01-21 10:11:39',NULL),(129,34,1,'Location','2022-03-15 17:52:20','2023-01-21 10:11:39',NULL),(132,35,1,'Add Location','2022-03-15 17:52:30','2023-01-21 10:11:39',NULL),(135,36,1,'Location List','2022-03-15 17:52:44','2023-01-21 10:11:39',NULL),(138,37,1,'Add Stand','2022-03-15 17:52:56','2023-01-21 10:11:39',NULL),(141,38,1,'Stand List','2022-03-15 17:53:11','2023-01-21 10:11:39',NULL),(144,39,1,'Schedule','2022-03-15 18:35:06','2023-01-21 10:11:39',NULL),(147,40,1,'Add Schedule','2022-03-15 18:35:15','2023-01-21 10:11:39',NULL),(150,41,1,'Schedule List','2022-03-15 18:35:27','2023-01-21 10:11:39',NULL),(153,42,1,'Add Schedule Filter','2022-03-15 18:35:47','2023-01-21 10:11:39',NULL),(156,43,1,'Schedule Filter List','2022-03-15 18:36:03','2023-01-21 10:11:39',NULL),(159,44,1,'Advertisement','2022-05-11 11:32:37','2023-01-21 10:11:39',NULL),(162,45,1,'Add Advertisement','2022-05-11 11:34:11','2023-01-21 10:11:39',NULL),(165,46,1,'Advertisement List','2022-05-11 11:35:45','2023-01-21 10:11:39',NULL),(168,47,1,'Coupon','2022-05-11 11:46:10','2023-01-21 10:11:39',NULL),(171,48,1,'Add Coupon','2022-05-11 11:47:04','2023-01-21 10:11:39',NULL),(174,49,1,'Coupon List','2022-05-11 11:48:38','2023-01-21 10:11:39',NULL),(177,50,1,'Employee','2022-05-11 11:52:32','2023-01-21 10:11:39',NULL),(180,51,1,'Add Employee Type','2022-05-11 11:58:05','2023-01-21 10:11:39',NULL),(183,52,1,'Employee Type List','2022-05-11 12:03:29','2023-01-21 10:11:39',NULL),(186,53,1,'Add Employee','2022-05-11 12:05:54','2023-01-21 10:11:39',NULL),(189,54,1,'Employee List','2022-05-11 12:06:46','2023-01-21 10:11:39',NULL),(192,55,1,'Fitness','2022-05-11 12:20:57','2023-01-21 10:11:39',NULL),(195,56,1,'Add Fitness','2022-05-11 12:21:57','2023-01-21 10:11:39',NULL),(198,57,1,'Fitness List','2022-05-11 12:22:37','2023-01-21 10:11:39',NULL),(201,58,1,'Fleet','2022-05-11 12:23:52','2023-01-21 10:11:39',NULL),(204,59,1,'Add Fleet','2022-05-11 12:24:46','2023-01-21 10:11:39',NULL),(207,60,1,'Fleet List','2022-05-11 12:25:47','2023-01-21 10:11:39',NULL),(210,61,1,'Add Vehicle','2022-05-11 12:26:57','2023-01-21 10:11:39',NULL),(213,62,1,'Vehicle List','2022-05-11 12:30:48','2023-01-21 10:11:39',NULL),(216,63,1,'Frontend','2022-05-11 12:32:27','2023-01-21 10:11:39',NULL),(219,64,1,'Section One','2022-05-11 12:34:23','2023-01-21 10:11:39',NULL),(222,65,1,'Section Two','2022-05-11 12:35:40','2023-01-21 10:11:39',NULL),(225,66,1,'Section Two  Content','2022-05-11 12:36:50','2023-01-21 10:11:39',NULL),(228,67,1,'Add How Work','2022-05-11 12:41:10','2023-01-21 10:11:39',NULL),(231,68,1,'How Work List','2022-05-11 12:52:58','2023-01-21 10:11:39',NULL),(234,69,1,'Section Three','2022-05-11 12:54:27','2023-01-21 10:11:39',NULL),(237,70,1,'Section Four','2022-05-11 12:58:24','2023-01-21 10:11:39',NULL),(240,71,1,'Section Four Content','2022-05-11 13:04:21','2023-01-21 10:11:39',NULL),(243,72,1,'Add Comment','2022-05-11 13:05:19','2023-01-21 10:11:39',NULL),(246,73,1,'Comment List','2022-05-11 13:05:59','2023-01-21 10:11:39',NULL),(249,74,1,'Section Five','2022-05-11 13:11:16','2023-01-21 10:11:39',NULL),(252,75,1,'Section Six','2022-05-11 13:11:57','2023-01-21 10:11:39',NULL),(255,76,1,'Section Seven','2022-05-11 13:40:29','2023-01-21 10:11:39',NULL),(258,77,1,'Footer','2022-05-11 13:41:12','2023-01-21 10:11:39',NULL),(261,78,1,'Blog','2022-05-11 13:46:04','2023-01-21 10:11:39',NULL),(264,79,1,'Add Blog','2022-05-11 13:51:41','2023-01-21 10:11:39',NULL),(267,80,1,'Blog List','2022-05-11 13:52:20','2023-01-21 10:11:39',NULL),(270,81,1,'Social Media ','2022-05-11 13:56:45','2023-01-21 10:11:39',NULL),(273,82,1,'Add Social Media ','2022-05-11 13:57:35','2023-01-21 10:11:39',NULL),(276,83,1,'Social Media List','2022-05-11 13:58:18','2023-01-21 10:11:39',NULL),(279,84,1,'Page','2022-05-11 13:59:36','2023-01-21 10:11:39',NULL),(282,85,1,'About','2022-05-11 14:00:18','2023-01-21 10:11:39',NULL),(285,86,1,'Privacy','2022-05-11 14:01:17','2023-01-21 10:11:39',NULL),(288,87,1,'Terms & Conditions','2022-05-11 14:03:32','2023-01-21 10:11:39',NULL),(291,88,1,'Faq','2022-05-11 14:04:26','2023-01-21 10:11:39',NULL),(294,89,1,'Page Setup','2022-05-11 14:05:29','2023-01-21 10:11:39',NULL),(297,90,1,'Add Question','2022-05-11 14:06:52','2023-01-21 10:11:39',NULL),(300,91,1,'Question List','2022-05-11 14:07:29','2023-01-21 10:11:39',NULL),(303,92,1,'Inquiry','2022-05-11 14:10:17','2023-01-21 10:11:39',NULL),(306,93,1,'Language','2022-05-11 14:21:50','2023-01-21 10:11:39',NULL),(309,94,1,'Add Language','2022-05-11 14:23:19','2023-01-21 10:11:39',NULL),(312,95,1,'Language List','2022-05-11 14:25:02','2023-01-21 10:11:39',NULL),(315,96,1,'Passenger','2022-05-11 14:30:37','2023-01-21 10:11:39',NULL),(318,97,1,'Add Passenger','2022-05-11 14:38:17','2023-01-21 10:11:39',NULL),(321,98,1,'Passenger List','2022-05-11 14:39:08','2023-01-21 10:11:39',NULL),(324,99,1,'Inquiry List','2022-05-11 14:41:17','2023-01-21 10:11:39',NULL),(327,100,1,'Payment Method','2022-05-11 14:46:22','2023-01-21 10:11:39',NULL),(330,101,1,'Add Payment Method','2022-05-11 14:47:14','2023-01-21 10:11:39',NULL),(333,102,1,'Payment Method List','2022-05-11 14:48:01','2023-01-21 10:11:39',NULL),(336,103,1,'Payment Gateway','2022-05-11 14:50:55','2023-01-21 10:11:39',NULL),(339,104,1,'Add Payment Gateway','2022-05-11 14:51:48','2023-01-21 10:11:39',NULL),(342,105,1,'Payment Gateway List','2022-05-11 14:52:54','2023-01-21 10:11:39',NULL),(345,106,1,'Rating','2022-05-11 14:57:06','2023-01-21 10:11:39',NULL),(348,107,1,'Rating List','2022-05-11 14:57:56','2023-01-21 10:11:39',NULL),(351,108,1,'Report','2022-05-11 15:01:17','2023-01-21 10:11:39',NULL),(354,109,1,'Ticket Sold','2022-05-11 15:02:04','2023-01-21 10:11:39',NULL),(357,110,1,'Agent Report','2022-05-11 15:03:15','2023-01-21 10:11:39',NULL),(360,111,1,'Role','2022-05-11 15:04:57','2023-01-21 10:11:39',NULL),(363,112,1,'Add Role','2022-05-11 15:05:33','2023-01-21 10:11:39',NULL),(366,113,1,'Role List ','2022-05-11 15:06:26','2023-01-21 10:11:39',NULL),(369,114,1,'add Menu','2022-05-11 15:07:11','2023-01-21 10:11:39',NULL),(372,115,1,'Menu List','2022-05-11 15:08:15','2023-01-21 10:11:39',NULL),(375,116,1,'Add Permission ','2022-05-11 15:09:09','2023-01-21 10:11:39',NULL),(378,117,1,'Permission List','2022-05-11 15:09:22','2023-01-21 10:11:39',NULL),(381,118,1,'Tax','2022-05-11 15:12:30','2023-01-21 10:11:39',NULL),(384,119,1,'Add Tax','2022-05-11 15:13:01','2023-01-21 10:11:39',NULL),(387,120,1,'Tax List','2022-05-11 15:13:36','2023-01-21 10:11:39',NULL),(390,121,1,'Facility','2022-05-11 15:14:30','2023-01-21 10:11:39',NULL),(393,122,1,'Add Facility','2022-05-11 15:14:50','2023-01-21 10:11:39',NULL),(396,123,1,'Facility List','2022-05-11 15:15:01','2023-01-21 10:11:39',NULL),(399,124,1,'Trip ','2022-05-11 15:28:28','2023-01-21 10:11:39',NULL),(402,125,1,'Add Trip ','2022-05-11 15:28:35','2023-01-21 10:11:39',NULL),(405,126,1,'Trip List','2022-05-11 15:28:42','2023-01-21 10:11:39',NULL),(408,127,1,'Website Setting','2022-05-11 15:52:50','2023-01-21 10:11:39',NULL),(411,128,1,'Webconfig','2022-05-11 15:53:44','2023-01-21 10:11:39',NULL),(414,129,1,'Db Backup','2022-05-11 15:54:31','2023-01-21 10:11:39',NULL),(417,130,1,'Edit','2022-05-15 11:58:14','2023-01-21 10:11:39',NULL),(420,131,1,'add','2022-05-15 11:58:21','2023-01-21 10:11:39',NULL),(423,132,1,'delete','2022-05-15 11:58:33','2023-01-21 10:11:39',NULL),(426,133,1,'update','2022-05-15 11:58:43','2023-01-21 10:11:39',NULL),(429,134,1,'show','2022-05-15 15:54:49','2023-01-21 10:11:39',NULL),(432,135,1,'Details','2022-05-15 17:53:44','2023-01-21 10:11:39',NULL),(673,135,6,'Détails','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(674,134,6,'montrer','2022-05-16 13:36:29','2023-03-15 12:34:24',NULL),(675,133,6,'mise à jour','2022-05-16 13:36:29','2023-03-15 12:34:27',NULL),(676,132,6,'supprimer','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(677,131,6,'ajouter','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(678,130,6,'Modifier','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(679,129,6,'Sauvegarde de la base de données','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(680,128,6,'Webconfig','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(681,127,6,'Paramètres du site Web','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(682,126,6,'Liste de voyage','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(683,125,6,'Ajouter un voyage','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(684,124,6,'Voyage','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(685,123,6,'Liste des installations','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(686,122,6,'Ajouter un établissement','2022-05-16 13:36:29','2023-03-15 12:31:49',NULL),(687,121,6,'Facilité','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(688,120,6,'Liste des taxes','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(689,119,6,'Ajouter une taxe','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(690,118,6,'Impôt','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(691,117,6,'Liste des autorisations','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(692,116,6,'Ajouter une autorisation','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(693,115,6,'Liste des menus','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(694,114,6,'ajouter Menu','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(695,113,6,'Liste des rôles','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(696,112,6,'Ajouter un rôle','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(697,111,6,'Rôle','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(698,110,6,'Rapport d\'agent','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(699,109,6,'Billet vendu','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(700,108,6,'Rapport','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(701,107,6,'Liste de classement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(702,106,6,'Notation','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(703,105,6,'Liste des passerelles de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(704,104,6,'Ajouter une passerelle de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(705,103,6,'Passerelle de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(706,102,6,'Liste des méthodes de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(707,101,6,'Ajouter un mode de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(708,100,6,'Mode de paiement','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(709,99,6,'Liste de demande','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(710,98,6,'Liste des passagers','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(711,97,6,'Ajouter un passager','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(712,96,6,'Passager','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(713,95,6,'Liste des langues','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(714,94,6,'Ajouter une langue','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(715,93,6,'Langue','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(716,92,6,'Demande','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(717,91,6,'Liste de questions','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(718,90,6,'Ajouter une question','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(719,89,6,'Mise en page','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(720,88,6,'FAQ','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(721,87,6,'termes et conditions','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(722,86,6,'Confidentialité','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(723,85,6,'À propos','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(724,84,6,'Page','2022-05-16 13:36:29','2023-03-15 12:35:14',NULL),(725,83,6,'Liste des médias sociaux','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(726,82,6,'Ajouter des médias sociaux','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(727,81,6,'Réseaux sociaux','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(728,80,6,'Liste des blogs','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(729,79,6,'Ajouter un blog','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(730,78,6,'Blog','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(731,77,6,'Bas de page','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(732,76,6,'Section sept','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(733,75,6,'Section Six','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(734,74,6,'Cinquième section','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(735,73,6,'Liste des commentaires','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(736,72,6,'Ajouter un commentaire','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(737,71,6,'Contenu de la section quatre','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(738,70,6,'Section quatre','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(739,69,6,'Section trois','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(740,68,6,'Comment fonctionne la liste','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(741,67,6,'Ajouter comment ça marche','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(742,66,6,'Contenu de la deuxième section','2022-05-16 13:36:29','2023-03-15 12:31:49',NULL),(743,65,6,'Deuxième partie','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(744,64,6,'Section un','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(745,63,6,'L\'extrémité avant','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(746,62,6,'Liste des véhicules','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(747,61,6,'Ajouter un véhicule','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(748,60,6,'Liste de flotte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(749,59,6,'Ajouter une flotte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(750,58,6,'Flotte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(751,57,6,'Liste de remise en forme','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(752,56,6,'Ajouter une forme physique','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(753,55,6,'Aptitude','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(754,54,6,'Liste des employés','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(755,53,6,'Ajouter un employé','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(756,52,6,'Liste des types d\'employés','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(757,51,6,'Ajouter un type d\'employé','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(758,50,6,'Employé','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(759,49,6,'Liste des coupons','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(760,48,6,'Ajouter un coupon','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(761,47,6,'Coupon','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(762,46,6,'Liste des publicités','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(763,45,6,'Ajouter une publicité','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(764,44,6,'Publicité','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(765,43,6,'Programmer la liste des filtres','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(766,42,6,'Ajouter un filtre de planification','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(767,41,6,'Liste des horaires','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(768,40,6,'Ajouter un horaire','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(769,39,6,'Calendrier','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(770,38,6,'Liste des stands','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(771,37,6,'Ajouter un support','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(772,36,6,'Liste des emplacements','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(773,35,6,'Ajouter un emplacement','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(774,34,6,'Emplacement','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(775,33,6,'Liste des transactions','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(776,32,6,'Opération de compte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(777,31,6,'Tableau de compte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(778,30,6,'Compte','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(779,29,6,'Liste des agents','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(780,28,6,'Ajouter un agent','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(781,27,6,'Liste de temps de réservation','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(782,26,6,'Ajouter une heure de réservation','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(783,25,6,'Annuler la liste','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(784,24,6,'Liste des trajets','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(785,23,6,'Liste des billets','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(786,22,6,'Réserver un billet','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(787,21,6,'Réservation de billets','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(788,20,6,'Agent','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(789,19,6,'Liste de remboursement','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(790,18,6,'Réserver la liste de temps','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(791,17,6,'Temps de réservation','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(792,16,6,'Tableau de bord','2022-05-16 13:36:29','2023-03-15 12:35:15',NULL),(793,136,6,'Biscuit','2022-05-16 14:21:36','2023-03-15 12:35:14',NULL),(794,136,1,'Cookie','2022-05-16 14:21:36','2023-01-21 10:11:39',NULL),(795,137,6,'Ajouter une chaîne de langue','2022-05-16 16:16:54','2023-03-15 12:35:14',NULL),(796,137,1,'Add Language String','2022-05-16 16:16:54','2023-01-21 10:11:39',NULL),(797,138,6,'Liste de chaînes de langue','2022-05-16 16:17:49','2023-03-15 12:35:14',NULL),(798,138,1,'Language String List','2022-05-16 16:17:49','2023-01-21 10:11:39',NULL),(799,139,6,'PAY PAL','2022-05-17 10:08:04','2023-03-15 12:35:14',NULL),(800,139,1,'PAYPAL','2022-05-17 10:08:04','2023-02-20 15:51:41',NULL),(801,140,6,'Pile de paie','2022-05-17 10:08:17','2023-03-15 12:35:14',NULL),(802,140,1,'Paystack','2022-05-17 10:08:17','2023-01-21 10:11:39',NULL),(803,141,6,'Bande','2022-05-17 10:08:25','2023-03-15 12:35:14',NULL),(804,141,1,'Stripe','2022-05-17 10:08:25','2023-01-21 10:11:39',NULL),(805,142,6,'Razorpay','2022-05-17 10:08:31','2023-03-15 12:35:14',NULL),(806,142,1,'Razorpay','2022-05-17 10:08:31','2023-01-21 10:11:39',NULL),(807,143,6,'Paramètres du logiciel','2022-05-18 13:02:50','2023-03-15 12:35:14',NULL),(808,143,1,'Software Settings','2022-05-18 13:02:50','2023-01-21 10:11:39',NULL),(809,144,6,'Paramètres Web','2022-05-18 13:03:03','2023-03-15 12:35:14',NULL),(810,144,1,'Web Settings','2022-05-18 13:03:03','2023-01-21 10:11:39',NULL),(811,145,6,'E-mail','2022-05-19 12:03:31','2023-03-15 12:35:14',NULL),(812,145,1,'Email','2022-05-19 12:03:31','2023-01-21 10:11:39',NULL),(813,146,6,'S\'abonner à la liste','2022-05-22 11:05:57','2023-03-15 12:35:14',NULL),(814,146,1,'Subscribe List','2022-05-22 11:05:57','2023-01-21 10:11:39',NULL),(815,147,6,'Prénom','2022-05-24 14:16:20','2023-03-15 12:35:14',NULL),(816,147,1,'First Name','2022-05-24 14:16:20','2023-01-21 10:11:39',NULL),(817,148,6,'Nom de famille','2022-05-24 14:16:53','2023-03-15 12:35:14',NULL),(818,148,1,'Last Name','2022-05-24 14:16:53','2023-01-21 10:11:39',NULL),(819,149,6,'Mobile','2022-05-24 14:18:14','2023-03-15 12:35:14',NULL),(820,149,1,'Mobile','2022-05-24 14:18:14','2023-01-21 10:11:39',NULL),(821,150,6,'Sang','2022-05-24 14:20:27','2023-03-15 12:35:14',NULL),(822,150,1,'BLood','2022-05-24 14:20:27','2023-01-21 10:11:39',NULL),(823,151,6,'Type d\'identifiant','2022-05-24 14:20:46','2023-03-15 12:35:14',NULL),(824,151,1,'Id Type','2022-05-24 14:20:46','2023-01-21 10:11:39',NULL),(825,152,6,'Numéro de nid/passeport','2022-05-24 14:21:09','2023-03-15 12:35:14',NULL),(826,152,1,'Nid/Passport Number','2022-05-24 14:21:09','2023-01-21 10:11:39',NULL),(827,153,6,'Commission','2022-05-24 14:21:28','2023-03-15 12:35:14',NULL),(828,153,1,'Commission','2022-05-24 14:21:28','2023-01-21 10:11:39',NULL),(829,154,6,'Nom du pays','2022-05-24 14:26:29','2023-03-15 12:35:14',NULL),(830,154,1,'Country Name ','2022-05-24 14:26:29','2023-01-21 10:11:39',NULL),(831,155,6,'Nom de Ville','2022-05-24 14:26:51','2023-03-15 12:35:14',NULL),(832,155,1,'City Name','2022-05-24 14:26:51','2023-01-21 10:11:39',NULL),(833,156,6,'Code postal..!!','2022-05-24 14:27:25','2023-03-15 12:35:14',NULL),(834,156,1,'Zip Code..!!','2022-05-24 14:27:25','2023-03-07 15:40:29',NULL),(835,157,6,'Adresse','2022-05-24 14:29:09','2023-03-15 12:35:14',NULL),(836,157,1,'Address','2022-05-24 14:29:09','2023-01-21 10:11:39',NULL),(837,158,6,'Nid/Image de passeport','2022-05-24 14:29:23','2023-03-15 12:35:14',NULL),(838,158,1,'Nid/Passport Image','2022-05-24 14:29:23','2023-01-21 10:11:39',NULL),(839,159,6,'Image de profil','2022-05-24 14:30:49','2023-03-15 12:35:14',NULL),(840,159,1,'Profile Image','2022-05-24 14:30:49','2023-01-21 10:11:39',NULL),(841,160,6,'Soumettre','2022-05-24 14:31:14','2023-03-15 12:35:14',NULL),(842,160,1,'Submit','2022-05-24 14:31:14','2023-01-21 10:11:39',NULL),(843,161,6,'Nom','2022-05-24 15:19:54','2023-03-15 12:35:14',NULL),(844,161,1,'Name','2022-05-24 15:19:54','2023-01-21 10:11:39',NULL),(845,162,6,'Action','2022-05-24 15:21:28','2023-03-15 12:35:14',NULL),(846,162,1,'Action','2022-05-24 15:21:28','2023-01-21 10:11:39',NULL),(847,163,6,'Pour','2022-05-24 15:51:38','2023-03-15 12:35:14',NULL),(848,163,1,'To','2022-05-24 15:51:38','2023-01-21 10:11:39',NULL),(849,164,6,'Depuis','2022-05-24 15:52:02','2023-03-15 12:35:14',NULL),(850,164,1,'From','2022-05-24 15:52:02','2023-01-21 10:11:39',NULL),(851,165,6,'Date','2022-05-24 16:22:03','2023-03-15 12:35:14',NULL),(852,165,1,'Date','2022-05-24 16:22:03','2023-01-21 10:11:39',NULL),(853,166,6,'Réservation','2022-05-24 16:22:57','2023-03-15 12:35:14',NULL),(854,166,1,'Booking','2022-05-24 16:22:57','2023-01-21 10:11:39',NULL),(855,167,6,'Identifiant','2022-05-24 16:23:15','2023-03-15 12:35:14',NULL),(856,167,1,'Id','2022-05-24 16:23:15','2023-01-21 10:11:39',NULL),(857,168,6,'Revenu','2022-05-24 16:23:35','2023-03-15 12:35:14',NULL),(858,168,1,'Income','2022-05-24 16:23:35','2023-01-21 10:11:39',NULL),(859,169,6,'Frais','2022-05-24 16:24:08','2023-03-15 12:35:14',NULL),(860,169,1,'Expense','2022-05-24 16:24:08','2023-01-21 10:11:39',NULL),(861,170,6,'Solde total','2022-05-24 16:24:42','2023-03-15 12:35:14',NULL),(862,170,1,'Total Balance','2022-05-24 16:24:42','2023-01-21 10:11:39',NULL),(863,171,6,'Type de transaction','2022-05-24 19:04:49','2023-03-15 12:35:14',NULL),(864,171,1,'Transaction Type','2022-05-24 19:04:49','2023-01-21 10:11:39',NULL),(865,172,6,'Montant','2022-05-24 19:05:11','2023-03-15 12:35:14',NULL),(866,172,1,'Amount','2022-05-24 19:05:11','2023-01-21 10:11:39',NULL),(867,173,6,'Transaction','2022-05-24 19:05:42','2023-03-15 12:35:14',NULL),(868,173,1,'Transaction','2022-05-24 19:05:42','2023-01-21 10:11:39',NULL),(869,174,6,'Crée par','2022-05-24 19:06:06','2023-03-15 12:35:14',NULL),(870,174,1,'Create By','2022-05-24 19:06:06','2023-01-21 10:11:39',NULL),(871,175,6,'Taper','2022-05-24 19:19:07','2023-03-15 12:35:14',NULL),(872,175,1,'Type','2022-05-24 19:19:07','2023-01-21 10:11:39',NULL),(873,176,6,'Document','2022-05-24 19:29:39','2023-03-15 12:35:14',NULL),(874,176,1,'Document','2022-05-24 19:29:39','2023-01-21 10:11:39',NULL),(875,177,6,'Sujet','2022-05-24 20:16:07','2023-03-15 12:35:14',NULL),(876,177,1,'Subject','2022-05-24 20:16:07','2023-01-21 10:11:39',NULL),(877,178,6,'Message','2022-05-24 20:22:49','2023-03-15 12:35:14',NULL),(878,178,1,'Message','2022-05-24 20:22:49','2023-01-21 10:11:39',NULL),(879,179,6,'Nid/Passeport','2022-05-24 20:54:52','2023-03-15 12:35:14',NULL),(880,179,1,'Nid/Passport','2022-05-24 20:54:52','2023-01-21 10:11:39',NULL),(881,180,6,'Principal','2022-05-25 17:40:39','2023-03-15 12:35:14',NULL),(882,180,1,'Main','2022-05-25 17:40:39','2023-01-21 10:11:39',NULL),(883,181,6,'Sous','2022-05-25 17:40:49','2023-03-15 12:35:14',NULL),(884,181,1,'Sub','2022-05-25 17:40:49','2023-01-21 10:11:39',NULL),(885,182,6,'Billet','2022-05-25 17:54:42','2023-03-15 12:35:14',NULL),(886,182,1,'Ticket','2022-05-25 17:54:42','2023-01-21 10:11:39',NULL),(887,183,6,'Voyage','2022-05-25 17:55:31','2023-03-15 12:35:14',NULL),(888,183,1,'Journey','2022-05-25 17:55:31','2023-01-21 10:11:39',NULL),(889,184,6,'Total','2022-05-25 17:55:56','2023-03-15 12:35:14',NULL),(890,184,1,'Total','2022-05-25 17:55:56','2023-01-21 10:11:39',NULL),(891,185,6,'Siège','2022-05-25 17:56:13','2023-03-15 12:35:14',NULL),(892,185,1,'Seat','2022-05-25 17:56:13','2023-01-21 10:11:39',NULL),(893,186,6,'Nombre','2022-05-25 17:56:30','2023-03-15 12:35:14',NULL),(894,186,1,'Number','2022-05-25 17:56:30','2023-01-21 10:11:39',NULL),(895,187,6,'Prix','2022-05-25 17:56:49','2023-03-15 12:35:14',NULL),(896,187,1,'Price','2022-05-25 17:56:49','2023-01-21 10:11:39',NULL),(897,188,6,'Rabais','2022-05-25 17:57:32','2023-03-15 12:35:14',NULL),(898,188,1,'Discount','2022-05-25 17:57:32','2023-01-21 10:11:39',NULL),(899,189,6,'Annuler','2022-05-25 18:01:05','2023-03-15 12:35:14',NULL),(900,189,1,'Cancel','2022-05-25 18:01:05','2023-01-21 10:11:39',NULL),(901,190,6,'Remboursement','2022-05-25 18:01:17','2023-03-15 12:35:14',NULL),(902,190,1,'Refund','2022-05-25 18:01:17','2023-01-21 10:11:39',NULL),(903,191,6,'Vendu','2022-05-25 18:01:25','2023-03-15 12:35:14',NULL),(904,191,1,'Sold','2022-05-25 18:01:25','2023-01-21 10:11:39',NULL),(905,192,6,'Taux','2022-05-26 11:04:15','2023-03-15 12:35:14',NULL),(906,192,1,'Rate','2022-05-26 11:04:15','2023-01-21 10:11:39',NULL),(907,193,6,'Ramasser','2022-05-26 11:35:17','2023-03-15 12:35:14',NULL),(908,193,1,'Pick Up','2022-05-26 11:35:17','2023-01-21 10:11:39',NULL),(909,194,6,'Goutte','2022-05-26 11:35:23','2023-03-15 12:31:49',NULL),(910,194,1,'Drop','2022-05-26 11:35:23','2023-01-21 10:11:39',NULL),(911,195,6,'Recherche','2022-05-26 12:02:39','2023-03-15 12:35:14',NULL),(912,195,1,'Search','2022-05-26 12:02:39','2023-01-21 10:11:39',NULL),(913,196,6,'Livre','2022-05-26 12:04:44','2023-03-15 12:35:14',NULL),(914,196,1,'Book','2022-05-26 12:04:44','2023-01-21 10:11:39',NULL),(915,197,6,'Heure','2022-05-26 12:12:30','2023-03-15 12:35:14',NULL),(916,197,1,'Hr','2022-05-26 12:12:30','2023-01-21 10:11:39',NULL),(917,198,6,'kilomètres','2022-05-26 12:12:35','2023-03-15 12:35:14',NULL),(918,198,1,'Km','2022-05-26 12:12:35','2023-01-21 10:11:39',NULL),(919,199,6,'Équitable','2022-05-26 12:13:05','2023-03-15 12:35:14',NULL),(920,199,1,'Fair','2022-05-26 12:13:05','2023-01-21 10:11:39',NULL),(921,200,6,'Processus de réservation','2022-05-26 12:13:53','2023-03-15 12:35:14',NULL),(922,200,1,'Process to Book','2022-05-26 12:13:53','2023-01-21 10:11:39',NULL),(923,201,6,'Aucun trajet trouvé','2022-05-26 12:15:52','2023-03-15 12:35:14',NULL),(924,201,1,'No Trip Found','2022-05-26 12:15:52','2023-01-21 10:11:39',NULL),(925,202,6,'Paiement','2022-05-26 13:36:37','2023-03-15 12:35:14',NULL),(926,202,1,'Payment','2022-05-26 13:36:37','2023-01-21 10:11:39',NULL),(927,203,6,'Payé','2022-05-26 13:36:48','2023-03-15 12:35:14',NULL),(928,203,1,'Paid','2022-05-26 13:36:48','2023-01-21 10:11:39',NULL),(929,204,6,'Partiel','2022-05-26 13:37:43','2023-03-15 12:35:14',NULL),(930,204,1,'Partial','2022-05-26 13:37:43','2023-01-21 10:11:39',NULL),(931,205,6,'Non payé','2022-05-26 13:37:52','2023-03-15 12:35:14',NULL),(932,205,1,'Unpaid','2022-05-26 13:37:52','2023-01-21 10:11:39',NULL),(933,206,6,'Payer','2022-05-26 13:38:37','2023-03-15 12:35:14',NULL),(934,206,1,'Pay','2022-05-26 13:38:37','2023-01-21 10:11:39',NULL),(935,207,6,'Appliquer','2022-05-26 13:38:49','2023-03-15 12:35:14',NULL),(936,207,1,'Apply','2022-05-26 13:38:49','2023-01-21 10:11:39',NULL),(937,208,6,'Statut','2022-05-26 13:45:27','2023-03-15 12:35:14',NULL),(938,208,1,'Status','2022-05-26 13:45:27','2023-01-21 10:11:39',NULL),(939,209,6,'Rester','2022-05-26 15:13:37','2023-03-15 12:35:14',NULL),(940,209,1,'Stand','2022-05-26 15:13:37','2023-01-21 10:11:39',NULL),(941,210,6,'Faire','2022-05-26 15:17:29','2023-03-15 12:35:14',NULL),(942,210,1,'Make','2022-05-26 15:17:29','2023-01-21 10:11:39',NULL),(943,211,6,'Facture','2022-05-26 15:17:40','2023-03-15 12:35:14',NULL),(944,211,1,'Invoice','2022-05-26 15:17:40','2023-01-21 10:11:39',NULL),(945,212,6,'Frais','2022-05-26 16:10:13','2023-03-15 12:35:14',NULL),(946,212,1,'Fee','2022-05-26 16:10:13','2023-01-21 10:11:39',NULL),(947,213,6,'Minutes','2022-05-26 17:29:34','2023-03-15 12:35:14',NULL),(948,213,1,'Minutes','2022-05-26 17:29:34','2023-01-21 10:11:39',NULL),(949,214,6,'Temps maximum pour annuler un billet impayé','2022-05-26 17:35:44','2023-03-15 12:35:14',NULL),(950,214,1,'Max time For Cancel Unpaid Ticket','2022-05-26 17:35:44','2023-01-21 10:11:39',NULL),(951,215,6,'Assistant','2022-05-26 18:18:09','2023-03-15 12:35:14',NULL),(952,215,1,'Assistant','2022-05-26 18:18:09','2023-01-21 10:11:39',NULL),(953,216,6,'Conducteur','2022-05-26 18:18:14','2023-03-15 12:35:14',NULL),(954,216,1,'Driver','2022-05-26 18:18:14','2023-01-21 10:11:39',NULL),(955,217,6,'Pos','2022-05-29 11:37:38','2023-03-15 12:35:14',NULL),(956,217,1,'Pos','2022-05-29 11:37:38','2023-01-21 10:11:39',NULL),(957,218,6,'Exigible','2022-05-29 11:50:10','2023-03-15 12:35:14',NULL),(958,218,1,'Due','2022-05-29 11:50:10','2023-01-21 10:11:39',NULL),(959,219,6,'Spécial','2022-05-29 11:52:39','2023-03-15 12:35:14',NULL),(960,219,1,'Special','2022-05-29 11:52:39','2023-01-21 10:11:39',NULL),(961,220,6,'Fin','2022-05-29 11:54:26','2023-03-15 12:35:14',NULL),(962,220,1,'End','2022-05-29 11:54:26','2023-01-21 10:11:39',NULL),(963,221,6,'Commencer','2022-05-29 11:54:38','2023-03-15 12:35:14',NULL),(964,221,1,'Start','2022-05-29 11:54:38','2023-01-21 10:11:39',NULL),(965,222,6,'Adulte','2022-05-29 12:05:01','2023-03-15 12:35:14',NULL),(966,222,1,'Adult','2022-05-29 12:05:01','2023-01-21 10:11:39',NULL),(967,223,6,'Enfant','2022-05-29 12:06:18','2023-03-15 12:35:14',NULL),(968,223,1,'Child','2022-05-29 12:06:18','2023-01-21 10:11:39',NULL),(969,224,6,'Grandiose','2022-05-29 12:14:00','2023-03-15 12:35:14',NULL),(970,224,1,'Grand','2022-05-29 12:14:00','2023-01-21 10:11:39',NULL),(971,225,6,'Temps','2022-05-29 13:06:33','2023-03-15 12:35:14',NULL),(972,225,1,'Time','2022-05-29 13:06:33','2023-01-21 10:11:39',NULL),(973,226,6,'Mise en page','2022-05-29 14:50:08','2023-03-15 12:35:14',NULL),(974,226,1,'Layout','2022-05-29 14:50:08','2023-01-21 10:11:39',NULL),(975,227,6,'Dernière vérification de siège','2022-05-29 14:50:41','2023-03-15 12:35:14',NULL),(976,227,1,'Last Seat Check','2022-05-29 14:50:41','2023-01-21 10:11:39',NULL),(977,228,6,'Bagage','2022-05-29 14:51:25','2023-03-15 12:35:14',NULL),(978,228,1,'Luggage','2022-05-29 14:51:25','2023-01-21 10:11:39',NULL),(979,229,6,'Service','2022-05-29 14:51:34','2023-03-15 12:35:14',NULL),(980,229,1,'Service','2022-05-29 14:51:34','2023-01-21 10:11:39',NULL),(981,230,6,'Actif','2022-05-29 14:51:43','2023-03-15 12:35:14',NULL),(982,230,1,'Active','2022-05-29 14:51:43','2023-01-21 10:11:39',NULL),(983,231,6,'Désactiver','2022-05-29 14:51:51','2023-03-15 12:35:14',NULL),(984,231,1,'Disable','2022-05-29 14:51:51','2023-01-21 10:11:39',NULL),(985,232,6,'Non','2022-05-29 16:03:43','2023-03-15 12:35:14',NULL),(986,232,1,'No','2022-05-29 16:03:43','2023-01-21 10:11:39',NULL),(987,233,6,'Reg','2022-05-29 16:03:54','2023-03-15 12:35:14',NULL),(988,233,1,'Reg','2022-05-29 16:03:54','2023-01-21 10:11:39',NULL),(989,234,6,'Eng','2022-05-29 16:04:05','2023-03-15 12:35:14',NULL),(990,234,1,'Eng','2022-05-29 16:04:05','2023-01-21 10:11:39',NULL),(991,235,6,'Modèle','2022-05-29 16:04:15','2023-03-15 12:35:14',NULL),(992,235,1,'Model','2022-05-29 16:04:15','2023-01-21 10:11:39',NULL),(993,236,6,'Châssis','2022-05-29 16:04:44','2023-03-15 12:35:14',NULL),(994,236,1,'Chassis','2022-05-29 16:04:44','2023-01-21 10:11:39',NULL),(995,237,6,'Propriétaire','2022-05-29 16:04:59','2023-03-15 12:35:14',NULL),(996,237,1,'Owner','2022-05-29 16:04:59','2023-02-18 13:44:20',NULL),(997,238,6,'Entreprise','2022-05-29 16:05:39','2023-03-15 12:35:14',NULL),(998,238,1,'Company','2022-05-29 16:05:39','2023-02-18 13:44:20',NULL),(999,239,6,'Bus','2022-05-29 16:10:43','2023-03-15 12:35:14',NULL),(1000,239,1,'Bus','2022-05-29 16:10:43','2023-02-18 13:44:20',NULL),(1001,240,6,'Image','2022-05-29 16:10:55','2023-03-15 12:35:14',NULL),(1002,240,1,'Image','2022-05-29 16:10:55','2023-02-18 13:44:20',NULL),(1003,241,6,'Attribuer','2022-05-29 17:16:01','2023-03-15 12:35:14',NULL),(1004,241,1,'Assign','2022-05-29 17:16:01','2023-02-18 13:44:20',NULL),(1005,242,6,'Kilométrage','2022-05-29 18:04:53','2023-03-15 12:35:14',NULL),(1006,242,1,'Milage','2022-05-29 18:04:53','2023-02-18 13:44:20',NULL),(1007,243,6,'Véhicule','2022-05-29 18:05:21','2023-03-15 12:35:14',NULL),(1008,243,1,'Vehicle','2022-05-29 18:05:21','2023-02-18 13:44:20',NULL),(1009,244,6,'Commentaire','2022-05-29 19:16:41','2023-03-15 12:35:14',NULL),(1010,244,1,'Comment','2022-05-29 19:16:41','2023-02-18 13:44:20',NULL),(1011,245,6,'Filtre','2022-05-29 20:32:25','2023-03-15 12:35:14',NULL),(1012,245,1,'Filter','2022-05-29 20:32:25','2023-02-18 13:44:20',NULL),(1013,246,6,'Valeur','2022-05-29 20:52:02','2023-03-15 12:35:14',NULL),(1014,246,1,'Value','2022-05-29 20:52:02','2023-02-18 13:44:20',NULL),(1015,247,6,'Condition','2022-05-29 21:15:11','2023-03-15 12:35:14',NULL),(1016,247,1,'Condition','2022-05-29 21:15:11','2023-01-21 10:11:39',NULL),(1017,248,6,'Code','2022-05-29 21:18:27','2023-03-15 12:35:14',NULL),(1018,248,1,'Code','2022-05-29 21:18:27','2023-01-21 10:11:39',NULL),(1019,249,6,'Test','2022-05-30 11:48:57','2023-03-15 12:35:14',NULL),(1020,249,1,'Test','2022-05-30 11:48:57','2023-01-21 10:11:39',NULL),(1021,250,6,'En direct','2022-05-30 11:49:06','2023-03-15 12:35:14',NULL),(1022,250,1,'Live','2022-05-30 11:49:06','2023-01-21 10:11:39',NULL),(1023,251,6,'Secret','2022-05-30 11:54:40','2023-03-15 12:35:14',NULL),(1024,251,1,'Secret ','2022-05-30 11:54:40','2023-01-21 10:11:39',NULL),(1025,252,6,'Client','2022-05-30 11:58:38','2023-03-15 12:35:14',NULL),(1026,252,1,'Client','2022-05-30 11:58:38','2023-01-21 10:11:39',NULL),(1027,253,6,'Clé','2022-05-30 12:01:09','2023-03-15 12:35:14',NULL),(1028,253,1,'Key','2022-05-30 12:01:09','2023-01-21 10:11:39',NULL),(1029,254,6,'Marchand','2022-05-30 12:05:42','2023-03-15 12:35:14',NULL),(1030,254,1,'Merchant','2022-05-30 12:05:42','2023-01-21 10:11:39',NULL),(1031,255,6,'Environnement','2022-05-30 12:25:27','2023-03-15 12:35:14',NULL),(1032,255,1,'Environment','2022-05-30 12:25:27','2023-01-21 10:11:39',NULL),(1033,256,6,'Privé','2022-05-30 12:50:42','2023-03-15 12:35:14',NULL),(1034,256,1,'Private ','2022-05-30 12:50:42','2023-01-21 10:11:39',NULL),(1035,257,6,'Arrêt','2022-05-30 16:24:50','2023-03-15 12:35:14',NULL),(1036,257,1,'Stoppage','2022-05-30 16:24:50','2023-03-14 10:58:39',NULL),(1037,258,6,'Enfants','2022-05-30 16:26:09','2023-03-15 12:35:14',NULL),(1038,258,1,'Children','2022-05-30 16:26:09','2023-01-21 10:11:39',NULL),(1039,259,6,'Distance','2022-05-30 16:26:31','2023-03-15 12:35:14',NULL),(1040,259,1,'Distance','2022-05-30 16:26:31','2023-01-21 10:11:39',NULL),(1041,260,6,'Approximatif','2022-05-30 16:28:13','2023-03-15 12:35:14',NULL),(1042,260,1,'Approximate','2022-05-30 16:28:13','2023-01-21 10:11:39',NULL),(1043,261,6,'Fin de semaine','2022-05-30 16:28:29','2023-03-15 12:35:14',NULL),(1044,261,1,'Weekend','2022-05-30 16:28:29','2023-01-21 10:11:39',NULL),(1045,262,6,'assistant','2022-05-30 16:31:39','2023-03-15 12:35:14',NULL),(1046,262,1,'assistant','2022-05-30 16:31:39','2023-01-21 10:11:39',NULL),(1047,263,6,'Section','2022-05-30 17:14:09','2023-03-15 12:35:14',NULL),(1048,263,1,'Section','2022-05-30 17:14:09','2023-01-21 10:11:39',NULL),(1049,264,6,'Indiquer','2022-05-30 17:16:37','2023-03-15 12:35:14',NULL),(1050,264,1,'Point','2022-05-30 17:16:37','2023-01-21 10:11:39',NULL),(1051,265,6,'Embarquement','2022-05-30 17:18:16','2023-03-15 12:35:14',NULL),(1052,265,1,'Boarding','2022-05-30 17:18:16','2023-01-21 10:11:39',NULL),(1053,266,6,'Sélectionner','2022-05-30 17:21:22','2023-03-15 12:35:14',NULL),(1054,266,1,'Select','2022-05-30 17:21:22','2023-01-21 10:11:39',NULL),(1055,267,6,'Goutte','2022-05-30 17:23:52','2023-03-15 12:35:14',NULL),(1056,267,1,'Dropping','2022-05-30 17:23:52','2023-01-21 10:11:39',NULL),(1057,268,6,'Liste','2022-05-30 17:46:02','2023-03-15 12:35:14',NULL),(1058,268,1,'List','2022-05-30 17:46:02','2023-01-21 10:11:39',NULL),(1059,269,6,'Heure','2022-05-31 15:56:05','2023-03-15 12:35:14',NULL),(1060,269,1,'Hour','2022-05-31 15:56:05','2023-01-21 10:11:39',NULL),(1061,270,6,'Afficher dans la page d\'accueil','2022-05-31 18:47:32','2023-03-15 12:35:14',NULL),(1062,270,1,'Show In Home Page','2022-05-31 18:47:32','2023-01-21 10:11:39',NULL),(1063,271,6,'Mot de passe','2022-06-01 11:25:11','2023-03-15 12:35:14',NULL),(1064,271,1,'Password','2022-06-01 11:25:11','2023-01-21 10:11:39',NULL),(1065,272,6,'Retaper le mot de passe','2022-06-01 11:54:47','2023-03-15 12:31:49',NULL),(1066,272,1,'Re-Type Password','2022-06-01 11:54:47','2023-01-21 10:11:39',NULL),(1067,273,6,'Ancien mot de passe','2022-06-01 11:54:54','2023-03-15 12:35:14',NULL),(1068,273,1,'Old-Password','2022-06-01 11:54:54','2023-01-21 10:11:39',NULL),(1069,274,6,'Nouveau mot de passe','2022-06-01 11:56:12','2023-03-15 12:35:14',NULL),(1070,274,1,'New-password','2022-06-01 11:56:12','2023-01-21 10:11:39',NULL),(1071,275,6,'Profil','2022-06-01 14:28:06','2023-03-15 12:35:14',NULL),(1072,275,1,'Profile','2022-06-01 14:28:06','2023-01-21 10:11:39',NULL),(1073,276,6,'Paramètres','2022-06-01 14:28:18','2023-03-15 12:35:14',NULL),(1074,276,1,'Settings','2022-06-01 14:28:18','2023-01-21 10:11:39',NULL),(1075,277,6,'Menu','2022-06-01 16:56:40','2023-03-15 12:35:14',NULL),(1076,277,1,'Menu','2022-06-01 16:56:40','2023-01-21 10:11:39',NULL),(1077,278,6,'URL','2022-06-01 16:56:57','2023-03-15 12:35:14',NULL),(1078,278,1,'Url','2022-06-01 16:56:57','2023-01-21 10:11:39',NULL),(1079,279,6,'Module','2022-06-01 16:57:25','2023-03-15 12:35:14',NULL),(1080,279,1,'Module','2022-06-01 16:57:25','2023-01-21 10:11:39',NULL),(1081,280,6,'Titre','2022-06-01 16:59:26','2023-03-15 12:35:14',NULL),(1082,280,1,'Title','2022-06-01 16:59:26','2023-01-21 10:11:39',NULL),(1083,281,6,'Parent','2022-06-01 17:36:44','2023-03-15 12:35:14',NULL),(1084,281,1,'Parent','2022-06-01 17:36:44','2023-01-21 10:11:39',NULL),(1085,282,6,'Autorisation','2022-06-01 17:53:09','2023-03-15 12:35:14',NULL),(1086,282,1,'Permission','2022-06-01 17:53:09','2023-01-21 10:11:39',NULL),(1087,283,6,'Lire','2022-06-01 18:02:45','2023-03-15 12:35:14',NULL),(1088,283,1,'Read','2022-06-01 18:02:45','2023-01-21 10:11:39',NULL),(1089,284,6,'Créer','2022-06-01 18:02:58','2023-03-15 12:35:14',NULL),(1090,284,1,'Create','2022-06-01 18:02:58','2023-01-21 10:11:39',NULL),(1091,285,6,'Protocole','2022-06-01 18:33:52','2023-03-15 12:35:14',NULL),(1092,285,1,'Protocol','2022-06-01 18:33:52','2023-01-21 10:11:39',NULL),(1093,286,6,'Héberger','2022-06-01 18:34:14','2023-03-15 12:35:14',NULL),(1094,286,1,'Host','2022-06-01 18:34:14','2023-01-21 10:11:39',NULL),(1095,287,6,'SMTP','2022-06-01 18:34:22','2023-03-15 12:35:14',NULL),(1096,287,1,'Smtp','2022-06-01 18:34:22','2023-01-21 10:11:39',NULL),(1097,288,6,'Utilisateur','2022-06-01 18:34:37','2023-03-15 12:35:14',NULL),(1098,288,1,'User','2022-06-01 18:34:37','2023-01-21 10:11:39',NULL),(1099,289,6,'Port','2022-06-01 18:34:52','2023-03-15 12:35:14',NULL),(1100,289,1,'Port','2022-06-01 18:34:52','2023-01-21 10:11:39',NULL),(1101,290,6,'Crypto','2022-06-01 18:35:05','2023-03-15 12:35:14',NULL),(1102,290,1,'Crypto','2022-06-01 18:35:05','2023-01-21 10:11:39',NULL),(1103,291,6,'Lien','2022-06-01 18:51:07','2023-03-15 12:35:14',NULL),(1104,291,1,'Link','2022-06-01 18:51:07','2023-01-21 10:11:39',NULL),(1105,292,6,'Image','2022-06-01 18:51:16','2023-03-15 12:35:14',NULL),(1106,292,1,'Picture','2022-06-01 18:51:16','2023-01-21 10:11:39',NULL),(1107,293,6,'Logo/Image','2022-06-01 19:09:15','2023-03-15 12:35:14',NULL),(1108,293,1,'Logo/Picture','2022-06-01 19:09:15','2023-01-21 10:11:39',NULL),(1109,294,6,'Compris','2022-06-02 09:40:28','2023-03-15 12:35:14',NULL),(1110,294,1,'Inclusive','2022-06-02 09:40:28','2023-01-21 10:11:39',NULL),(1111,295,6,'Exclusif','2022-06-02 09:40:37','2023-03-15 12:35:14',NULL),(1112,295,1,'Exclusive','2022-06-02 09:40:37','2023-01-21 10:11:39',NULL),(1113,296,6,'Icône de favori','2022-06-02 09:41:05','2023-03-15 12:35:14',NULL),(1114,296,1,'Favicon','2022-06-02 09:41:05','2023-01-21 10:11:39',NULL),(1115,297,6,'Entête','2022-06-02 09:43:09','2023-03-15 12:35:14',NULL),(1116,297,1,'Header','2022-06-02 09:43:09','2023-01-21 10:11:39',NULL),(1117,298,6,'Bouton','2022-06-02 09:43:22','2023-03-15 12:35:14',NULL),(1118,298,1,'Button','2022-06-02 09:43:22','2023-01-21 10:11:39',NULL),(1119,299,6,'Texte','2022-06-02 09:43:31','2023-03-15 12:35:14',NULL),(1120,299,1,'Text','2022-06-02 09:43:31','2023-01-21 10:11:39',NULL),(1121,300,6,'Couleur','2022-06-02 09:43:41','2023-03-15 12:35:14',NULL),(1122,300,1,'Color','2022-06-02 09:43:41','2023-01-21 10:11:39',NULL),(1123,301,6,'Flotter','2022-06-02 09:43:52','2023-03-15 12:35:14',NULL),(1124,301,1,'Hover','2022-06-02 09:43:52','2023-01-21 10:11:39',NULL),(1125,302,6,'Arrière-plan','2022-06-02 09:44:01','2023-03-15 12:35:14',NULL),(1126,302,1,'Background','2022-06-02 09:44:01','2023-01-21 10:11:39',NULL),(1127,303,6,'Zone','2022-06-02 09:44:41','2023-03-15 12:35:14',NULL),(1128,303,1,'Zone','2022-06-02 09:44:41','2023-01-21 10:11:39',NULL),(1129,304,6,'Pays','2022-06-02 09:44:54','2023-03-15 12:35:14',NULL),(1130,304,1,'Country','2022-06-02 09:44:54','2023-01-21 10:11:39',NULL),(1131,305,6,'Police de caractère','2022-06-02 09:45:05','2023-03-15 12:35:14',NULL),(1132,305,1,'Font','2022-06-02 09:45:05','2023-01-21 10:11:39',NULL),(1133,306,6,'Billet max pour une personne','2022-06-02 09:45:36','2023-03-15 12:35:14',NULL),(1134,306,1,'Max Ticket For One Person','2022-06-02 09:45:36','2023-01-21 10:11:39',NULL),(1135,307,6,'Copiez le bon texte','2022-06-02 09:45:51','2023-03-15 12:35:14',NULL),(1136,307,1,'Copy Right Text','2022-06-02 09:45:51','2023-01-21 10:11:39',NULL),(1137,308,6,'Application','2022-06-02 09:46:06','2023-03-15 12:35:14',NULL),(1138,308,1,'App','2022-06-02 09:46:06','2023-01-21 10:11:39',NULL),(1139,309,6,'Logo','2022-06-02 09:46:30','2023-03-15 12:35:14',NULL),(1140,309,1,'Logo','2022-06-02 09:46:30','2023-01-21 10:11:39',NULL),(1141,310,6,'Famille','2022-06-02 09:52:59','2023-03-15 12:35:14',NULL),(1142,310,1,'Family','2022-06-02 09:52:59','2023-01-21 10:11:39',NULL),(1145,312,6,'vérifier','2022-06-02 11:45:24','2023-03-15 12:35:14',NULL),(1146,312,1,'check Out','2022-06-02 11:45:24','2023-01-21 10:11:39',NULL),(1147,313,6,'Chaîne','2022-06-02 12:09:52','2023-03-15 12:35:14',NULL),(1148,313,1,'String','2022-06-02 12:09:52','2023-01-21 10:11:39',NULL),(1149,314,6,'Description','2022-06-02 13:05:57','2023-03-15 12:35:14',NULL),(1150,314,1,'Description','2022-06-02 13:05:57','2023-01-21 10:11:39',NULL),(1151,315,6,'Comment ça fonctionne','2022-06-02 13:10:46','2023-03-15 12:35:14',NULL),(1152,315,1,'How It Works','2022-06-02 13:10:46','2023-01-21 10:11:39',NULL),(1153,316,6,'Question','2022-06-02 14:36:12','2023-03-15 12:35:14',NULL),(1154,316,1,'Question','2022-06-02 14:36:12','2023-01-21 10:11:39',NULL),(1155,317,6,'Répondre','2022-06-02 14:36:37','2023-03-15 12:35:14',NULL),(1156,317,1,'Answer','2022-06-02 14:36:37','2023-01-21 10:11:39',NULL),(1157,318,6,'Télécharger','2022-06-02 14:53:35','2023-03-15 12:35:14',NULL),(1158,318,1,'Upload','2022-06-02 14:53:35','2023-01-21 10:11:39',NULL),(1159,319,6,'Par','2022-06-02 14:53:46','2023-03-15 12:35:14',NULL),(1160,319,1,'By','2022-06-02 14:53:46','2023-01-21 10:11:39',NULL),(1161,320,6,'En série','2022-06-02 14:54:01','2023-03-15 12:35:14',NULL),(1162,320,1,'Serial','2022-06-02 14:54:01','2023-01-21 10:11:39',NULL),(1163,321,6,'Désignation','2022-06-02 17:34:39','2023-03-15 12:35:14',NULL),(1164,321,1,'Designation','2022-06-02 17:34:39','2023-01-21 10:11:39',NULL),(1165,322,6,'Un','2022-06-05 09:26:16','2023-03-15 12:35:14',NULL),(1166,322,1,'One','2022-06-05 09:26:16','2023-01-21 10:11:39',NULL),(1167,323,6,'Deux','2022-06-05 09:26:30','2023-03-15 12:35:14',NULL),(1168,323,1,'Two','2022-06-05 09:26:30','2023-01-21 10:11:39',NULL),(1169,324,6,'Cacher','2022-06-05 09:29:08','2023-03-15 12:35:14',NULL),(1170,324,1,'Hide','2022-06-05 09:29:08','2023-01-21 10:11:39',NULL),(1171,325,6,'Heures d\'ouverture du bureau','2022-06-05 10:01:28','2023-03-15 12:35:14',NULL),(1172,325,1,'Office Open TIme','2022-06-05 10:01:28','2023-01-21 10:11:39',NULL),(1173,326,6,'Numéro de contact','2022-06-05 10:02:34','2023-03-15 12:35:14',NULL),(1174,326,1,'Contact Number','2022-06-05 10:02:34','2023-01-21 10:11:39',NULL),(1175,327,6,'Client','2022-06-26 17:37:07','2023-03-15 12:35:14',NULL),(1176,327,1,'Customer','2022-06-26 17:37:07','2023-01-21 10:11:39',NULL),(1177,328,6,'Monnaie','2022-07-25 10:31:31','2023-03-15 12:35:14',NULL),(1178,328,1,'Currency','2022-07-25 10:31:31','2023-02-08 15:54:34',NULL),(1179,329,6,'Aujourd\'hui','2022-07-28 09:54:57','2023-03-15 12:35:14',NULL),(1180,329,1,'Today','2022-07-28 09:54:57','2023-02-08 15:54:34',NULL),(1181,330,6,'Revenus et dépenses','2022-07-28 09:56:42','2023-03-15 12:35:14',NULL),(1182,330,1,'Income & Expense','2022-07-28 09:56:42','2023-02-08 15:54:34',NULL),(1183,331,6,'Annuel','2022-07-28 09:57:03','2023-03-15 12:35:14',NULL),(1184,331,1,'Yearly','2022-07-28 09:57:03','2023-02-08 16:05:50',NULL),(1185,332,6,'Hebdomadaire','2022-07-28 09:57:19','2023-03-15 12:35:14',NULL),(1186,332,1,'Weekly','2022-07-28 09:57:19','2023-02-08 16:05:50',NULL),(1187,333,6,'Mensuel','2022-07-28 09:57:55','2023-03-15 12:35:14',NULL),(1188,333,1,'Monthly','2022-07-28 09:57:55','2023-02-08 16:05:50',NULL),(1189,334,6,'Paiement de l\'agent','2022-07-28 09:57:55','2023-03-15 12:35:14',NULL),(1190,334,1,'Agent payment','2022-07-28 09:57:55','2023-02-08 16:05:50',NULL),(1191,335,6,'Réduction aller-retour','2022-07-28 09:57:55','2023-03-15 12:35:14',NULL),(1192,335,1,'Discount round trip','2022-07-28 09:57:55','2023-02-08 16:05:50',NULL),(1193,336,6,'Rapport de somme','2022-07-28 09:57:55','2023-03-15 12:35:14',NULL),(1194,336,1,'Sum report','2022-07-28 09:57:55','2023-02-08 16:05:50',NULL),(1195,337,6,'Profit','2022-07-28 09:57:55','2023-03-15 12:35:14',NULL),(1196,337,1,'Profit','2022-07-28 09:57:55','2023-02-08 16:05:50',NULL),(1197,338,6,'Public','2023-02-08 16:01:00','2023-03-15 12:35:14',NULL),(1198,338,1,'Public','2023-02-08 16:01:00','2023-02-08 16:05:50',NULL),(1199,339,6,'Chiffrement','2023-02-08 16:02:15','2023-03-15 12:35:14',NULL),(1200,339,1,'Encryption','2023-02-08 16:02:15','2023-02-08 16:05:50',NULL),(1201,340,6,'Flutterwave','2023-02-08 16:02:36','2023-03-15 12:35:14',NULL),(1202,340,1,'Flutterwave','2023-02-08 16:02:36','2023-02-08 16:05:50',NULL),(1203,341,6,'Magasin','2023-02-08 16:02:44','2023-03-15 12:35:14',NULL),(1204,341,1,'Store','2023-02-08 16:02:44','2023-02-08 16:06:57',NULL),(1205,342,6,'Confirmer','2023-02-08 16:02:53','2023-03-15 12:31:49',NULL),(1206,342,1,'Confirm','2023-02-08 16:02:53','2023-02-08 16:06:57',NULL),(1207,343,6,'Veuillez entrer le mot de passe','2023-02-08 16:03:04','2023-03-15 12:35:14',NULL),(1208,343,1,'Please enter Password','2023-02-08 16:03:04','2023-02-08 16:06:57',NULL),(1209,344,6,'Entrez à nouveau le mot de passe','2023-02-08 16:03:11','2023-03-15 12:35:14',NULL),(1210,344,1,'Re-enter Password','2023-02-08 16:03:11','2023-02-08 16:06:57',NULL),(1211,345,6,'Voir','2023-02-08 16:03:18','2023-03-15 12:35:14',NULL),(1212,345,1,'View','2023-02-08 16:03:18','2023-02-08 16:06:57',NULL),(1213,346,6,'Privilège complet','2023-02-08 16:03:24','2023-03-15 12:35:14',NULL),(1214,346,1,'Full Privilege','2023-02-08 16:03:24','2023-02-08 16:06:57',NULL),(1215,347,6,'Tout créer','2023-02-08 16:03:29','2023-03-15 12:35:14',NULL),(1216,347,1,'All Create','2023-02-08 16:03:29','2023-02-08 16:06:57',NULL),(1217,348,6,'Tout lire','2023-02-08 16:03:40','2023-03-15 12:35:14',NULL),(1218,348,1,'All Read','2023-02-08 16:03:40','2023-02-08 16:06:57',NULL),(1219,349,6,'Tout Modifier','2023-02-08 16:03:46','2023-03-15 12:35:14',NULL),(1220,349,1,'All Edit','2023-02-08 16:03:46','2023-02-08 16:06:57',NULL),(1221,350,6,'Tout supprimer','2023-02-08 16:03:52','2023-03-15 12:35:14',NULL),(1222,350,1,'All Delete','2023-02-08 16:03:52','2023-02-08 16:06:57',NULL),(1223,350,7,'الكل حذف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1224,349,7,'كل تحرير','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1225,348,7,'الكل يقرأ','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1226,347,7,'كل خلق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1227,346,7,'امتياز كامل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1228,345,7,'منظر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1229,344,7,'إعادة إدخال كلمة المرور','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1230,343,7,'الرجاء إدخال كلمة المرور','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1231,342,7,'يتأكد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1232,341,7,'محل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1233,340,7,'Flutterwave','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1234,339,7,'التشفير','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1235,338,7,'عام','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1236,337,7,'ربح','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1237,336,7,'تقرير المجموع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1238,335,7,'خصم ذهابًا وإيابًا','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1239,334,7,'دفع الوكيل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1240,333,7,'شهريا','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1241,332,7,'أسبوعي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1242,331,7,'سنوي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1243,330,7,'الدخل والمصروفات','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1244,329,7,'اليوم','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1245,328,7,'عملة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1246,327,7,'عميل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1247,326,7,'رقم الاتصال','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1248,325,7,'مكتب مفتوح الوقت','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1249,324,7,'يخفي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1250,323,7,'اثنين','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1251,322,7,'واحد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1252,321,7,'تعيين','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1253,320,7,'مسلسل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1254,319,7,'بواسطة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1255,318,7,'رفع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1256,317,7,'إجابة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1257,316,7,'سؤال','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1258,315,7,'كيف تعمل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1259,314,7,'وصف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1260,313,7,'خيط','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1261,312,7,'الدفع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1262,310,7,'عائلة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1263,309,7,'شعار','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1264,308,7,'برنامج','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1265,307,7,'نسخ النص الصحيح','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1266,306,7,'ماكس تذكرة لشخص واحد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1267,305,7,'الخط','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1268,304,7,'دولة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1269,303,7,'منطقة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1270,302,7,'خلفية','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1271,301,7,'يحوم','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1272,300,7,'لون','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1273,299,7,'نص','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1274,298,7,'زر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1275,297,7,'رأس','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1276,296,7,'فافيكون','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1277,295,7,'حصري','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1278,294,7,'شامل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1279,293,7,'الشعار / الصورة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1280,292,7,'صورة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1281,291,7,'وصلة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1282,290,7,'تشفير','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1283,289,7,'ميناء','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1284,288,7,'مستخدم','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1285,287,7,'بروتوكول smtp','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1286,286,7,'يستضيف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1287,285,7,'بروتوكول','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1288,284,7,'يخلق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1289,283,7,'يقرأ','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1290,282,7,'إذن','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1291,281,7,'الأبوين','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1292,280,7,'عنوان','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1293,279,7,'وحدة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1294,278,7,'عنوان Url','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1295,277,7,'قائمة طعام','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1296,276,7,'إعدادات','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1297,275,7,'حساب تعريفي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1298,274,7,'كلمة المرور الجديدة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1299,273,7,'كلمة المرور القديمة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1300,272,7,'أعد إدخال كلمة السر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1301,271,7,'كلمة المرور','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1302,270,7,'إظهار في الصفحة الرئيسية','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1303,269,7,'ساعة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1304,268,7,'قائمة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1305,267,7,'اسقاط','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1306,266,7,'يختار','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1307,265,7,'الصعود','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1308,264,7,'نقطة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1309,263,7,'قسم','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1310,262,7,'مساعد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1311,261,7,'عطلة نهاية الاسبوع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1312,260,7,'تقريبي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1313,259,7,'مسافة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1314,258,7,'أطفال','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1315,257,7,'التوقف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1316,256,7,'خاص','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1317,255,7,'بيئة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1318,254,7,'تاجر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1319,253,7,'مفتاح','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1320,252,7,'عميل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1321,251,7,'سر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1322,250,7,'يعيش','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1323,249,7,'امتحان','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1324,248,7,'شفرة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1325,247,7,'حالة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1326,246,7,'قيمة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1327,245,7,'منقي','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1328,244,7,'تعليق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1329,243,7,'عربة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1330,242,7,'الأميال','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1331,241,7,'تعيين','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1332,240,7,'صورة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1333,239,7,'حافلة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1334,238,7,'شركة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1335,237,7,'مالك','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1336,236,7,'الهيكل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1337,235,7,'نموذج','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1338,234,7,'م','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1339,233,7,'ريج','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1340,232,7,'لا','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1341,231,7,'إبطال','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1342,230,7,'نشيط','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1343,229,7,'خدمة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1344,228,7,'أمتعة السفر','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1345,227,7,'آخر فحص للمقعد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1346,226,7,'تَخطِيط','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1347,225,7,'وقت','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1348,224,7,'كبير','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1349,223,7,'طفل','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1350,222,7,'الكبار','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1351,221,7,'يبدأ','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1352,220,7,'نهاية','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1353,219,7,'خاص','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1354,218,7,'حق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1355,217,7,'نقاط البيع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1356,216,7,'سائق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1357,215,7,'مساعد','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1358,214,7,'أقصى وقت لإلغاء التذكرة غير المدفوعة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1359,213,7,'دقائق','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1360,212,7,'مصاريف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1361,211,7,'فاتورة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1362,210,7,'يصنع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1363,209,7,'يقف','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1364,208,7,'حالة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1365,207,7,'يتقدم','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1366,206,7,'يدفع','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1367,205,7,'غير مدفوعة','2023-02-18 12:40:40','2023-03-15 12:36:34',NULL),(1368,204,7,'جزئي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1369,203,7,'مدفوع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1370,202,7,'قسط','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1371,201,7,'لم يتم العثور على رحلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1372,200,7,'عملية الحجز','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1373,199,7,'عدل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1374,198,7,'كم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1375,197,7,'هر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1376,196,7,'كتاب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1377,195,7,'يبحث','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1378,194,7,'يسقط','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1379,193,7,'يلتقط','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1380,192,7,'معدل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1381,191,7,'مُباع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1382,190,7,'استرداد','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1383,189,7,'يلغي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1384,188,7,'تخفيض','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1385,187,7,'سعر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1386,186,7,'رقم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1387,185,7,'مقعد','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1388,184,7,'المجموع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1389,183,7,'رحلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1390,182,7,'تذكرة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1391,181,7,'الفرعية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1392,180,7,'رئيسي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1393,179,7,'Nid / جواز السفر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1394,178,7,'رسالة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1395,177,7,'موضوع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1396,176,7,'وثيقة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1397,175,7,'يكتب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1398,174,7,'تم اعداده بواسطة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1399,173,7,'عملية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1400,172,7,'كمية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1401,171,7,'نوع المعاملة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1402,170,7,'إجمالي الرصيد','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1403,169,7,'مصروف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1404,168,7,'دخل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1405,167,7,'بطاقة تعريف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1406,166,7,'الحجز','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1407,165,7,'تاريخ','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1408,164,7,'من','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1409,163,7,'ل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1410,162,7,'فعل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1411,161,7,'اسم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1412,160,7,'يُقدِّم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1413,159,7,'صورة الملف الشخصي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1414,158,7,'Nid / صورة جواز السفر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1415,157,7,'عنوان','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1416,156,7,'الرمز البريدي..!!','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1417,155,7,'اسم المدينة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1418,154,7,'اسم الدولة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1419,153,7,'عمولة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1420,152,7,'Nid / رقم جواز السفر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1421,151,7,'نوع الهوية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1422,150,7,'دم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1423,149,7,'متحرك','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1424,148,7,'اسم العائلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1425,147,7,'الاسم الأول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1426,146,7,'قائمة الاشتراك','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1427,145,7,'بريد إلكتروني','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1428,144,7,'إعدادات الويب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1429,143,7,'إعدادات البرنامج','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1430,142,7,'رازورباي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1431,141,7,'شريط','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1432,140,7,'Paystack','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1433,139,7,'باي بال','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1434,138,7,'قائمة سلاسل اللغة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1435,137,7,'إضافة سلسلة اللغة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1436,136,7,'بسكويت','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1437,135,7,'تفاصيل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1438,134,7,'يعرض','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1439,133,7,'تحديث','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1440,132,7,'يمسح','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1441,131,7,'يضيف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1442,130,7,'يحرر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1443,129,7,'ديسيبل النسخ الاحتياطي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1444,128,7,'ويبكونفيغ','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1445,127,7,'إعداد الموقع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1446,126,7,'قائمة الرحلات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1447,125,7,'أضف رحلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1448,124,7,'رحلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1449,123,7,'قائمة المرافق','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1450,122,7,'إضافة مرفق','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1451,121,7,'منشأة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1452,120,7,'قائمة الضرائب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1453,119,7,'أضف ضريبة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1454,118,7,'ضريبة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1455,117,7,'قائمة الأذونات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1456,116,7,'إضافة الإذن','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1457,115,7,'قائمة القائمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1458,114,7,'إضافة قائمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1459,113,7,'قائمة الأدوار','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1460,112,7,'أضف دورًا','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1461,111,7,'دور','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1462,110,7,'تقرير الوكيل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1463,109,7,'بيعت التذكرة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1464,108,7,'تقرير','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1465,107,7,'قائمة التصنيف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1466,106,7,'تقييم','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1467,105,7,'قائمة بوابة الدفع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1468,104,7,'إضافة بوابة الدفع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1469,103,7,'بوابة الدفع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1470,102,7,'قائمة طرق الدفع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1471,101,7,'إضافة طريقة دفع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1472,100,7,'طريقة الدفع او السداد','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1473,99,7,'قائمة الاستفسار','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1474,98,7,'قائمة الركاب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1475,97,7,'إضافة راكب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1476,96,7,'راكب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1477,95,7,'قائمة اللغات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1478,94,7,'إضافة لغة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1479,93,7,'لغة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1480,92,7,'سؤال','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1481,91,7,'قائمة الأسئلة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1482,90,7,'أضف سؤال','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1483,89,7,'اعداد الصفحة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1484,88,7,'التعليمات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1485,87,7,'البنود و الظروف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1486,86,7,'خصوصية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1487,85,7,'عن','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1488,84,7,'صفحة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1489,83,7,'قائمة وسائل التواصل الاجتماعي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1490,82,7,'أضف وسائل التواصل الاجتماعي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1491,81,7,'وسائل التواصل الاجتماعي','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1492,80,7,'قائمة المدونة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1493,79,7,'أضف مدونة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1494,78,7,'مدونة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1495,77,7,'تذييل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1496,76,7,'القسم السابع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1497,75,7,'القسم السادس','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1498,74,7,'القسم الخامس','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1499,73,7,'قائمة التعليقات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1500,72,7,'أضف تعليق','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1501,71,7,'القسم الرابع المحتوى','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1502,70,7,'القسم الرابع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1503,69,7,'القسم الثالث','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1504,68,7,'كيف تعمل قائمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1505,67,7,'أضف طريقة العمل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1506,66,7,'القسم الثاني المحتوى','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1507,65,7,'القسم الثاني','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1508,64,7,'القسم الاول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1509,63,7,'نهاية المقدمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1510,62,7,'قائمة المركبات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1511,61,7,'أضف مركبة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1512,60,7,'قائمة الأسطول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1513,59,7,'إضافة الأسطول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1514,58,7,'سريع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1515,57,7,'قائمة اللياقة البدنية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1516,56,7,'أضف لياقة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1517,55,7,'لياقة بدنية','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1518,54,7,'قائمة موظف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1519,53,7,'اضافة موظف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1520,52,7,'قائمة نوع الموظف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1521,51,7,'إضافة نوع الموظف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1522,50,7,'موظف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1523,49,7,'قائمة القسيمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1524,48,7,'أضف عرض','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1525,47,7,'قسيمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1526,46,7,'قائمة الإعلانات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1527,45,7,'أضف إعلان','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1528,44,7,'إعلان','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1529,43,7,'قائمة تصفية الجدول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1530,42,7,'إضافة عامل تصفية الجدول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1531,41,7,'قائمة الجدول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1532,40,7,'إضافة جدول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1533,39,7,'جدول','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1534,38,7,'قائمة الوقوف','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1535,37,7,'أضف الحامل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1536,36,7,'قائمة الموقع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1537,35,7,'أضف الموقع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1538,34,7,'موقع','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1539,33,7,'قائمة المعاملات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1540,32,7,'معاملة الحساب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1541,31,7,'مخطط الحساب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1542,30,7,'حساب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1543,29,7,'قائمة الوكيل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1544,28,7,'أضف الوكيل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1545,27,7,'Boooking قائمة الوقت','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1546,26,7,'أضف وقت الحجز','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1547,25,7,'إلغاء القائمة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1548,24,7,'قائمة الرحلات','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1549,23,7,'قائمة التذاكر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1550,22,7,'حجز التذاكر','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1551,21,7,'حجز تذكره','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1552,20,7,'عامل','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1553,19,7,'قائمة الاسترداد','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1554,18,7,'قائمة وقت الكتاب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1555,17,7,'وقت الكتاب','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1556,16,7,'لوحة القيادة','2023-02-18 12:40:40','2023-03-15 12:36:35',NULL),(1557,350,8,'Alle verwyder','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1558,349,8,'Alle wysig','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1559,348,8,'Almal Lees','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1560,347,8,'Alles skep','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1561,346,8,'Volle voorreg','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1562,345,8,'Beskou','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1563,344,8,'Voer Wagwoord weer in','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1564,343,8,'Voer asseblief Wagwoord in','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1565,342,8,'Bevestig','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1566,341,8,'Winkel','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1567,340,8,'Fladdergolf','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1568,339,8,'Enkripsie','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1569,338,8,'Publiek','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1570,337,8,'Wins','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1571,336,8,'Som verslag','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1572,335,8,'Afslag retoer','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1573,334,8,'Agent betaling','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1574,333,8,'Maandeliks','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1575,332,8,'Weekliks','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1576,331,8,'Jaarliks','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1577,330,8,'Inkomste & Uitgawes','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1578,329,8,'Vandag','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1579,328,8,'Geldeenheid','2023-02-18 12:41:29','2023-03-15 12:38:45',NULL),(1580,327,8,'Kliënt','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1581,326,8,'Kontak nommer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1582,325,8,'Kantoor Ooptyd','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1583,324,8,'Versteek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1584,323,8,'Twee','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1585,322,8,'Een','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1586,321,8,'Aanwysing','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1587,320,8,'Reeks','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1588,319,8,'Deur','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1589,318,8,'Laai op','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1590,317,8,'Antwoord','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1591,316,8,'Vraag','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1592,315,8,'Hoe dit werk','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1593,314,8,'Beskrywing','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1594,313,8,'Snaar','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1595,312,8,'uitteken','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1596,310,8,'Familie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1597,309,8,'Logo','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1598,308,8,'Toep','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1599,307,8,'Kopieer regte teks','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1600,306,8,'Maksimum kaartjie vir een persoon','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1601,305,8,'Lettertipe','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1602,304,8,'Land','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1603,303,8,'Sone','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1604,302,8,'Agtergrond','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1605,301,8,'Beweeg','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1606,300,8,'Kleur','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1607,299,8,'Teks','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1608,298,8,'Knoppie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1609,297,8,'Opskrif','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1610,296,8,'Gunsteling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1611,295,8,'Eksklusief','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1612,294,8,'Inklusief','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1613,293,8,'Logo/prentjie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1614,292,8,'Prent','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1615,291,8,'Skakel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1616,290,8,'Kripto','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1617,289,8,'Port','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1618,288,8,'Gebruiker','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1619,287,8,'Smtp','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1620,286,8,'Gasheer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1621,285,8,'Protokol','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1622,284,8,'Skep','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1623,283,8,'Lees','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1624,282,8,'Toestemming','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1625,281,8,'Ouer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1626,280,8,'Titel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1627,279,8,'Module','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1628,278,8,'URL','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1629,277,8,'Spyskaart','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1630,276,8,'Instellings','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1631,275,8,'Profiel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1632,274,8,'Nuwe Wagwoord','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1633,273,8,'Ou wagwoord','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1634,272,8,'Tik wagwoord weer in','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1635,271,8,'Wagwoord','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1636,270,8,'Wys op tuisblad','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1637,269,8,'Uur','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1638,268,8,'Lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1639,267,8,'Laat val','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1640,266,8,'Kies','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1641,265,8,'Instap','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1642,264,8,'Punt','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1643,263,8,'Afdeling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1644,262,8,'assistent','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1645,261,8,'Naweek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1646,260,8,'Ongeveer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1647,259,8,'Afstand','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1648,258,8,'Kinders','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1649,257,8,'Staking','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1650,256,8,'Privaat','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1651,255,8,'Omgewing','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1652,254,8,'Handelaar','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1653,253,8,'Sleutel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1654,252,8,'Kliënt','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1655,251,8,'Geheim','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1656,250,8,'Leef','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1657,249,8,'Toets','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1658,248,8,'Kode','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1659,247,8,'Toestand','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1660,246,8,'Waarde','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1661,245,8,'Filter','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1662,244,8,'Lewer kommentaar','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1663,243,8,'Voertuig','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1664,242,8,'Milage','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1665,241,8,'Toewys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1666,240,8,'Beeld','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1667,239,8,'Bus','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1668,238,8,'Maatskappy','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1669,237,8,'Eienaar','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1670,236,8,'Onderstel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1671,235,8,'Model','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1672,234,8,'Eng','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1673,233,8,'Reg','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1674,232,8,'Geen','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1675,231,8,'Deaktiveer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1676,230,8,'Aktief','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1677,229,8,'Diens','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1678,228,8,'Bagasie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1679,227,8,'Laaste sitplekkontrole','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1680,226,8,'Uitleg','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1681,225,8,'Tyd','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1682,224,8,'Groot','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1683,223,8,'Kind','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1684,222,8,'Volwasse','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1685,221,8,'Begin','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1686,220,8,'Einde','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1687,219,8,'Spesiaal','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1688,218,8,'Verskuldig','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1689,217,8,'Pos','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1690,216,8,'Bestuurder','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1691,215,8,'Assistent','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1692,214,8,'Maksimum tyd Vir Kanselleer Onbetaalde Kaartjie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1693,213,8,'Minute','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1694,212,8,'Fooi','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1695,211,8,'Faktuur','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1696,210,8,'Maak','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1697,209,8,'Staan','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1698,208,8,'Status','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1699,207,8,'Doen aansoek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1700,206,8,'Betaal','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1701,205,8,'Onbetaald','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1702,204,8,'Gedeeltelik','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1703,203,8,'Betaal','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1704,202,8,'Betaling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1705,201,8,'Geen reis gevind nie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1706,200,8,'Proses om te bespreek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1707,199,8,'Regverdig','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1708,198,8,'Km','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1709,197,8,'Hr','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1710,196,8,'Boek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1711,195,8,'Soek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1712,194,8,'Laat val','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1713,193,8,'Optel','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1714,192,8,'Koers','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1715,191,8,'Verkoop','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1716,190,8,'Terugbetaling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1717,189,8,'Kanselleer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1718,188,8,'Afslag','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1719,187,8,'Prys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1720,186,8,'Nommer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1721,185,8,'Sitplek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1722,184,8,'Totaal','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1723,183,8,'Reis','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1724,182,8,'Kaartjie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1725,181,8,'Sub','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1726,180,8,'Hoof','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1727,179,8,'Nid/paspoort','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1728,178,8,'Boodskap','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1729,177,8,'Onderwerp','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1730,176,8,'Dokument','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1731,175,8,'Tik','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1732,174,8,'Skep deur','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1733,173,8,'Transaksie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1734,172,8,'Bedrag','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1735,171,8,'Soort transaksie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1736,170,8,'Totale balans','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1737,169,8,'Uitgawe','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1738,168,8,'Inkomste','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1739,167,8,'Id','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1740,166,8,'Bespreking','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1741,165,8,'Datum','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1742,164,8,'Van','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1743,163,8,'Om','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1744,162,8,'Aksie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1745,161,8,'Naam','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1746,160,8,'Indien','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1747,159,8,'Profielbeeld','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1748,158,8,'Nid/paspoortbeeld','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1749,157,8,'Adres','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1750,156,8,'Poskode..!!','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1751,155,8,'Stad Naam','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1752,154,8,'Land Naam','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1753,153,8,'Kommissie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1754,152,8,'Nid/paspoortnommer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1755,151,8,'ID tipe','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1756,150,8,'BLOED','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1757,149,8,'Selfoon','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1758,148,8,'Van','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1759,147,8,'Eerste naam','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1760,146,8,'Teken in op lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1761,145,8,'E-pos','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1762,144,8,'Webinstellings','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1763,143,8,'Sagteware instellings','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1764,142,8,'Razorpay','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1765,141,8,'Streep','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1766,140,8,'Paystack','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1767,139,8,'PAYPAL','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1768,138,8,'Taalstringlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1769,137,8,'Voeg taalstring by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1770,136,8,'Koekie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1771,135,8,'Besonderhede','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1772,134,8,'Wys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1773,133,8,'Opdateer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1774,132,8,'skrap','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1775,131,8,'byvoeg','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1776,130,8,'Wysig','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1777,129,8,'Db Rugsteun','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1778,128,8,'Webkonfigurasie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1779,127,8,'Webwerf instelling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1780,126,8,'Reislys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1781,125,8,'Voeg reis by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1782,124,8,'Reis','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1783,123,8,'Fasiliteitslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1784,122,8,'Voeg fasiliteit by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1785,121,8,'Fasiliteit','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1786,120,8,'Belasting lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1787,119,8,'Voeg belasting by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1788,118,8,'Belasting','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1789,117,8,'Toestemmingslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1790,116,8,'Voeg toestemming by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1791,115,8,'Spyskaart lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1792,114,8,'voeg spyskaart by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1793,113,8,'Rollys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1794,112,8,'Voeg rol by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1795,111,8,'Rol','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1796,110,8,'Agent Verslag','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1797,109,8,'Kaartjie verkoop','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1798,108,8,'Rapporteer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1799,107,8,'Graderingslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1800,106,8,'Gradering','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1801,105,8,'Betaling Gateway Lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1802,104,8,'Voeg betalingspoort by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1803,103,8,'Betalingspoort','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1804,102,8,'Betaalmetodelys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1805,101,8,'Voeg betaalmetode by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1806,100,8,'Betalings metode','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1807,99,8,'Navrae lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1808,98,8,'Passasierslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1809,97,8,'Voeg passasier by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1810,96,8,'Passasier','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1811,95,8,'Taallys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1812,94,8,'Voeg taal by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1813,93,8,'Taal','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1814,92,8,'Ondersoek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1815,91,8,'Vraelys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1816,90,8,'Voeg vraag by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1817,89,8,'Bladsy opstelling','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1818,88,8,'Gereelde vrae','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1819,87,8,'terme en voorwaardes','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1820,86,8,'Privaatheid','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1821,85,8,'Oor','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1822,84,8,'Bladsy','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1823,83,8,'Sosiale media lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1824,82,8,'Voeg sosiale media by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1825,81,8,'Sosiale media','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1826,80,8,'Blog lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1827,79,8,'Voeg blog by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1828,78,8,'Blog','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1829,77,8,'Voetskrif','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1830,76,8,'Afdeling sewe','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1831,75,8,'Afdeling Ses','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1832,74,8,'Afdeling Vyf','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1833,73,8,'Kommentaar lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1834,72,8,'Lewer kommentaar','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1835,71,8,'Afdeling Vier Inhoud','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1836,70,8,'Afdeling Vier','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1837,69,8,'Afdeling Drie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1838,68,8,'Hoe werk lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1839,67,8,'Voeg Hoe Werk by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1840,66,8,'Afdeling Twee Inhoud','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1841,65,8,'Afdeling Twee','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1842,64,8,'Afdeling Een','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1843,63,8,'Voorkant','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1844,62,8,'Voertuig lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1845,61,8,'Voeg Voertuig by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1846,60,8,'Vlootlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1847,59,8,'Voeg vloot by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1848,58,8,'Vloot','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1849,57,8,'Fiksheidslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1850,56,8,'Voeg fiksheid by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1851,55,8,'Fiksheid','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1852,54,8,'Werknemerslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1853,53,8,'Voeg werknemer by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1854,52,8,'Werknemer Tipe Lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1855,51,8,'Voeg werknemertipe by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1856,50,8,'Werknemer','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1857,49,8,'Koeponlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1858,48,8,'Voeg koepon by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1859,47,8,'Koepon','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1860,46,8,'Advertensielys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1861,45,8,'Voeg advertensie by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1862,44,8,'Advertensie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1863,43,8,'Skedule Filter Lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1864,42,8,'Voeg skedulefilter by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1865,41,8,'Skedule lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1866,40,8,'Voeg skedule by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1867,39,8,'Skedule','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1868,38,8,'Staanlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1869,37,8,'Voeg staanplek by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1870,36,8,'Plek lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1871,35,8,'Voeg ligging by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1872,34,8,'Ligging','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1873,33,8,'Transaksie lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1874,32,8,'Rekeningtransaksie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1875,31,8,'Rekening grafiek','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1876,30,8,'Rekening','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1877,29,8,'Agent lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1878,28,8,'Voeg agent by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1879,27,8,'Besprekingstydlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1880,26,8,'Voeg besprekingstyd by','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1881,25,8,'Kanselleer lys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1882,24,8,'Reislys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1883,23,8,'Kaartjielys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1884,22,8,'Bespreek Kaartjie','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1885,21,8,'Kaartjiebespreking','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1886,20,8,'Agent','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1887,19,8,'Terugbetalingslys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1888,18,8,'Bespreek tydlys','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1889,17,8,'Bespreek tyd','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1890,16,8,'Dashboard','2023-02-18 12:41:29','2023-03-15 12:38:46',NULL),(1891,351,1,'Home','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1892,351,6,'Maison','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1893,351,8,'Tuis','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1894,351,7,'بيت','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1895,352,1,'how to work','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1896,352,6,'comment travailler','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1897,352,8,'hoe om te werk','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1898,352,7,'كيف تعمل','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1899,353,1,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1900,353,6,'Blog','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1901,353,8,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1902,353,7,'مدونة','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1903,354,1,'track','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1904,354,6,'piste','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1905,354,8,'spoor','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1906,354,7,'مسار','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1907,355,1,'login','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1908,355,6,'connexion','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1909,355,8,'teken aan','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1910,355,7,'تسجيل الدخول','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1911,356,1,'Book','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1912,356,6,'Livre','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1913,356,8,'Boek','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1914,356,7,'كتاب','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1915,357,1,'from','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1916,357,6,'depuis','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1917,357,8,'van','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1918,357,7,'من','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1919,358,1,'to','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1920,358,6,'pour','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1921,358,8,'aan','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1922,358,7,'ل','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1923,359,1,'depart','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1924,359,6,'partir','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1925,359,8,'vertrek','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1926,359,7,'تغادر','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1927,360,1,'return (optional)','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1928,360,6,'retour (facultatif)','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1929,360,8,'terugkeer (opsioneel)','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1930,360,7,'العودة (اختياري)','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1931,361,1,'find tickets','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1932,361,6,'trouver des billets','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1933,361,8,'kaartjies vind','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1934,361,7,'وجدنا دليلا لكل وجهات النظر من هذه الدراسات','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1935,362,1,'search again','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1936,362,6,'chercher à nouveau','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1937,362,8,'soek weer','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1938,362,7,'ابحث ثانيا','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1939,363,1,'price','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1940,363,6,'prix','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1941,363,8,'prys','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1942,363,7,'سعر','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1943,364,1,'book now','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1944,364,6,'Reserve maintenant','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1945,364,8,'bespreek nou','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1946,364,7,'احجز الآن','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1947,365,1,'Read More','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1948,365,6,'En savoir plus','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1949,365,8,'Lees meer','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1950,365,7,'اقرأ أكثر','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1951,366,1,'Email Address','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1952,366,6,'Adresse e-mail','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1953,366,8,'E-pos adres','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1954,366,7,'عنوان البريد الإلكتروني','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1955,367,1,'subscribe','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1956,367,6,'s\'abonner','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1957,367,8,'inteken','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1958,367,7,'يشترك','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1959,368,1,'about','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1960,368,6,'à propos','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1961,368,8,'oor','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1962,368,7,'عن','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1963,369,1,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1964,369,6,'Blog','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1965,369,8,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1966,369,7,'مدونة','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1967,370,1,'FAQ','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1968,370,6,'FAQ','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1969,370,8,'Gereelde vrae','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1970,370,7,'التعليمات','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1971,371,1,'contact','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1972,371,6,'contact','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1973,371,8,'Kontak','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1974,371,7,'اتصال','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1975,372,1,'privacy','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1976,372,6,'confidentialité','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1977,372,8,'privaatheid','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1978,372,7,'خصوصية','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1979,373,1,'cookies','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1980,373,6,'biscuits','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1981,373,8,'koekies','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1982,373,7,'بسكويت','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1983,374,1,'terms and condition','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1984,374,6,'termes et conditions','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1985,374,8,'terme en voorwaarde','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1986,374,7,'أحكام وشروط','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1987,375,1,'Download the app','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1988,375,6,'Téléchargez l\'application','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1989,375,8,'Laai die toepassing af','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1990,375,7,'قم بتنزيل التطبيق','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1991,376,1,'Follow us on :','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1992,376,6,'Suivez-nous sur :','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1993,376,8,'Volg ons op :','2023-02-18 13:33:10','2023-03-15 12:38:45',NULL),(1994,376,7,'اتبعنا :','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1995,377,1,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1996,377,6,'Blog','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(1997,377,8,'blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(1998,377,7,'مدونة','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(1999,378,1,'home - blog','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2000,378,6,'accueil - blog','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2001,378,8,'huis - blog','2023-02-18 13:33:10','2023-03-15 12:38:45',NULL),(2002,378,7,'الصفحة الرئيسية - بلوق','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(2003,379,1,'track my ticket','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2004,379,6,'suivre mon billet','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2005,379,8,'volg my kaartjie','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2006,379,7,'تتبع تذكرتي','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2007,380,1,'ticket booking number:','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2008,380,6,'numéro de réservation du billet :','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2009,380,8,'kaartjie bespreking nommer:','2023-02-18 13:33:10','2023-03-15 12:38:45',NULL),(2010,380,7,'رقم حجز التذكرة:','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2011,381,1,'go','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2012,381,6,'aller','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2013,381,8,'gaan','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2014,381,7,'يذهب','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2015,382,1,'sing in','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2016,382,6,'chanter','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2017,382,8,'inteken','2023-02-18 13:33:10','2023-03-15 12:38:45',NULL),(2018,382,7,'يغني فيها','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(2019,383,1,'email or phone number','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2020,383,6,'e-mail ou numéro de téléphone','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2021,383,8,'e-pos of telefoonnommer','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2022,383,7,'البريد الإلكتروني أو رقم الهاتف','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2023,384,1,'password','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2024,384,6,'mot de passe','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2025,384,8,'wagwoord','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2026,384,7,'كلمة المرور','2023-02-18 13:33:10','2023-03-15 12:36:34',NULL),(2027,385,1,'remember me','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2028,385,6,'souviens-toi de moi','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2029,385,8,'onthou my','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2030,385,7,'تذكرنى','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2031,386,1,'Forgot Password?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2032,386,6,'Mot de passe oublié?','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2033,386,8,'Wagwoord vergeet?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2034,386,7,'هل نسيت كلمة السر؟','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2035,387,1,'sign in','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2036,387,6,'s\'identifier','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2037,387,8,'teken aan','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2038,387,7,'تسجيل الدخول','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2039,388,1,'Don’t have an account?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2040,388,6,'Vous n\'avez pas de compte ?','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2041,388,8,'Het jy nie \'n rekening nie?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2042,388,7,'ليس لديك حساب؟','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2043,389,1,'sign up','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2044,389,6,'s\'inscrire','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2045,389,8,'teken aan','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2046,389,7,'اشتراك','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2047,390,1,'forgot password?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2048,390,6,'Mot de passe oublié?','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2049,390,8,'Wagwoord vergeet?','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2050,390,7,'هل نسيت كلمة السر؟','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2051,391,1,'Please enter your email address and we will send you a link to reset your password.','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2052,391,6,'Veuillez saisir votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de ','2023-02-18 13:33:10','2023-03-15 12:35:14',NULL),(2053,391,7,'يرجى إدخال عنوان بريدك الإلكتروني وسنرسل لك رابطًا لإعادة تعيين كلمة المرور الخاصة بك.','2023-02-18 13:33:10','2023-03-15 13:09:07',NULL),(2054,391,8,'Voer asseblief jou e-posadres in en ons sal vir jou \'n skakel stuur om jou wagwoord terug te stel.','2023-02-18 13:33:10','2023-02-18 13:33:10',NULL),(2055,392,1,'email','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2056,392,6,'e-mail','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2057,392,8,'e-pos','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2058,392,7,'بريد إلكتروني','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2059,393,1,'Apply','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2060,393,6,'Appliquer','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2061,393,8,'Doen aansoek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2062,393,7,'يتقدم','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2063,394,1,'sign up','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2064,394,6,'s\'inscrire','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2065,394,8,'teken aan','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2066,394,7,'اشتراك','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2067,395,1,'Create an account to easily use bus365 services','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2068,395,6,'Créez un compte pour utiliser facilement les services de bus365','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2069,395,8,'Skep \'n rekening om bus365-dienste maklik te gebruik','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2070,395,7,'قم بإنشاء حساب لاستخدام خدمات bus365 بسهولة','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2071,396,1,'Email','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2072,396,6,'E-mail','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2073,396,8,'E-pos','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2074,396,7,'بريد إلكتروني','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2075,397,1,'Phone','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2076,397,6,'Téléphone','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2077,397,8,'Foon','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2078,397,7,'هاتف','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2079,398,1,'Password','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2080,398,6,'Mot de passe','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2081,398,8,'Wagwoord','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2082,398,7,'كلمة المرور','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2083,399,1,'Re-Password','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2084,399,6,'Re-mot de passe','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2085,399,8,'Herwagwoord','2023-02-18 13:39:27','2023-03-15 12:38:45',NULL),(2086,399,7,'إعادة كلمة المرور','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2087,400,1,'first Name','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2088,400,6,'prénom','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2089,400,8,'eerste naam','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2090,400,7,'الاسم الأول','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2091,401,1,'last name','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2092,401,6,'nom de famille','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2093,401,8,'van','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2094,401,7,'اسم العائلة','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2095,402,1,'By creating an account you agree to our','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2096,402,6,'En créant un compte','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2097,402,8,'Deur \'n rekening te skep, stem jy in tot ons','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2098,402,7,'من خلال إنشاء حساب فإنك توافق على','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2099,403,1,'terms and condition','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2100,403,6,'termes et conditions','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2101,403,8,'terme en voorwaarde','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2102,403,7,'أحكام وشروط','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2103,404,1,'sign up','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2104,404,6,'s\'inscrire','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2105,404,8,'teken aan','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2106,404,7,'اشتراك','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2107,405,1,'Already have an Account?','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2108,405,6,'Vous avez déjà un compte?','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2109,405,8,'Reeds \'n rekening?','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2110,405,7,'هل لديك حساب؟','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2111,406,1,'sing in','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2112,406,6,'chanter','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2113,406,8,'inteken','2023-02-18 13:39:27','2023-03-15 12:38:45',NULL),(2114,406,7,'يغني فيها','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2115,407,1,'departure','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2116,407,6,'départ','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2117,407,8,'vertrek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2118,407,7,'رحيلppp','2023-02-18 13:39:27','2023-03-18 10:18:04',NULL),(2119,408,1,'return','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2120,408,6,'retour','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2121,408,8,'terugkeer','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2122,408,7,'يعود','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2123,409,1,'buses found','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2124,409,6,'bus trouvés','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2125,409,8,'busse gevind','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2126,409,7,'وجدت الحافلات','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2127,410,1,'departure','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2128,410,6,'départ','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2129,410,8,'vertrek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2130,410,7,'رحيلppp','2023-02-18 13:39:27','2023-03-18 10:18:04',NULL),(2131,411,1,'duration','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2132,411,6,'durée','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2133,411,8,'duur','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2134,411,7,'مدة','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2135,412,1,'arrival','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2136,412,6,'arrivée','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2137,412,8,'aankoms','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2138,412,7,'وصول','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2139,413,1,'ratings','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2140,413,6,'notes','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2141,413,8,'graderings','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2142,413,7,'التقييمات','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2143,414,1,'fare','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2144,414,6,'tarif','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2145,414,8,'tarief','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2146,414,7,'أجرة','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2147,415,1,'seat available','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2148,415,6,'siège disponible','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2149,415,8,'sitplek beskikbaar','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2150,415,7,'المقعد متاح','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2151,416,1,'bus photos','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2152,416,6,'photos d\'autobus','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2153,416,8,'bus foto\'s','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2154,416,7,'صور الحافلة','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2155,417,1,'reviews','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2156,417,6,'Commentaires','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2157,417,8,'resensies','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2158,417,7,'المراجعات','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2159,418,1,'booking policies','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2160,418,6,'politiques de réservation','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2161,418,8,'besprekingsbeleide','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2162,418,7,'سياسات الحجز','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2163,419,1,'review','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2164,419,6,'examen','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2165,419,8,'resensie','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2166,419,7,'مراجعة','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2167,420,1,'view seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2168,420,6,'voir le siège','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2169,420,8,'sitplek uitkyk','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2170,420,7,'عرض المقعد','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2171,421,1,'book now','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2172,421,6,'Reserve maintenant','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2173,421,8,'bespreek nou','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2174,421,7,'احجز الآن','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2175,422,1,'book now','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2176,422,6,'Reserve maintenant','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2177,422,8,'bespreek nou','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2178,422,7,'احجز الآن','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2179,423,1,'seat legend','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2180,423,6,'légende du siège','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2181,423,8,'sitplek legende','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2182,423,7,'أسطورة المقعد','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2183,424,1,'unavailable','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2184,424,6,'indisponible','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2185,424,8,'nie beskikbaar nie','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2186,424,7,'غير متوفره','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2187,425,1,'available','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2188,425,6,'disponible','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2189,425,8,'beskikbaar','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2190,425,7,'متاح','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2191,426,1,'book','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2192,426,6,'livre','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2193,426,8,'boek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2194,426,7,'كتاب','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2195,427,1,'adult seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2196,427,6,'siège adulte','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2197,427,8,'volwasse sitplek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2198,427,7,'مقعد الكبار','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2199,428,1,'children seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2200,428,6,'siège enfant','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2201,428,8,'kinder sitplek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2202,428,7,'مقعد الأطفال','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2203,429,1,'special seat','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2204,429,6,'siège spécial','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2205,429,8,'spesiale sitplek','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2206,429,7,'مقعد خاص','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2207,430,1,'Bus Facilities','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2208,430,6,'Installations d\'autobus','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2209,430,8,'Busfasiliteite','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2210,430,7,'مرافق الحافلات','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2211,431,1,'boarding point','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2212,431,6,'point d\'embarquement','2023-02-18 13:39:27','2023-03-15 12:35:14',NULL),(2213,431,8,'instappunt','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2214,431,7,'نقطة الصعود','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2215,432,1,'dropping point','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2216,432,6,'point de chute','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2217,432,8,'valpunt','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2218,432,7,'نقطة اسقاط','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2219,433,1,'boarding point ','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2220,433,6,'point d\'embarquement','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2221,433,8,'instappunt','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2222,433,7,'نقطة الصعود','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2223,434,1,'dropping point','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2224,434,6,'point de chute','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2225,434,8,'valpunt','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2226,434,7,'نقطة اسقاط','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2227,435,1,'fare details','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2228,435,6,'détails du tarif','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2229,435,8,'tarief besonderhede','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2230,435,7,'تفاصيل الأجرة','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2231,436,1,'child price','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2232,436,6,'tarif enfant','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2233,436,8,'kinderprys','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2234,436,7,'سعر الطفل','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2235,437,1,'adult price','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2236,437,6,'prix adulte','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2237,437,8,'volwasse prys','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2238,437,7,'سعر الكبار','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2239,438,1,'special price','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2240,438,6,'prix spécial','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2241,438,8,'spesiale prys','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2242,438,7,'سعر خاص','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2243,439,1,'amount','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2244,439,6,'montant','2023-02-18 13:39:27','2023-03-15 12:35:13',NULL),(2245,439,8,'bedrag','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2246,439,7,'كمية','2023-02-18 13:39:27','2023-03-15 12:36:34',NULL),(2247,440,1,'Tk','2023-02-18 13:39:27','2023-02-18 13:39:27',NULL),(2248,440,6,'TK','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2249,440,8,'Tk','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2250,440,7,'تك','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2251,441,1,'proccess to book','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2252,441,6,'processus de réservation','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2253,441,8,'proses om te bespreek','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2254,441,7,'عملية للحجز','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2255,442,1,'Taxes will be calculated during payment','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2256,442,6,'Les taxes seront calculées lors du paiement','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2257,442,8,'Belasting sal tydens betaling bereken word','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2258,442,7,'سيتم احتساب الضرائب أثناء الدفع','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2259,443,1,'Price','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2260,443,6,'Prix','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2261,443,8,'Prys','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2262,443,7,'سعر','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2263,444,1,'Reset','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2264,444,6,'Réinitialiser','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2265,444,8,'Stel terug','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2266,444,7,'إعادة ضبط','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2267,445,1,'bus types','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2268,445,6,'type d\'autobus','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2269,445,8,'bus tipes','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2270,445,7,'أنواع الحافلات','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2271,446,1,'departure time','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2272,446,6,'heure de départ','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2273,446,8,'vertrektyd','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2274,446,7,'وقت المغادرةppp','2023-02-18 13:39:28','2023-03-18 10:18:04',NULL),(2275,447,1,'arrival time','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2276,447,6,'heure d\'arrivée','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2277,447,8,'aankoms tyd','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2278,447,7,'وقت الوصول','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2279,448,1,'fare summery','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2280,448,6,'tarif estival','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2281,448,8,'vaar somer','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2282,448,7,'أجرة الصيف','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2283,449,1,'base fare','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2284,449,6,'tarif de base','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2285,449,8,'basis tarief','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2286,449,7,'الاجرة الاساسية','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2287,450,1,'tax','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2288,450,6,'impôt','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2289,450,8,'belasting','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2290,450,7,'ضريبة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2291,451,1,'return ticket fare','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2292,451,6,'billet aller-retour','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2293,451,8,'retoerkaartjie tarief','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2294,451,7,'أجرة تذكرة العودة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2295,452,1,'return ticket tax','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2296,452,6,'taxe sur les billets de retour','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2297,452,8,'retoerkaartjie belasting','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2298,452,7,'ضريبة تذكرة العودة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2299,453,1,'subtotal amount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2300,453,6,'montant du sous-total','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2301,453,8,'subtotale bedrag','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2302,453,7,'المبلغ الاجمالي','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2303,454,1,'discount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2304,454,6,'rabais','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2305,454,8,'afslag','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2306,454,7,'تخفيض','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2307,455,1,'total amount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2308,455,6,'montant total','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2309,455,8,'totale bedrag','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2310,455,7,'المبلغ الإجمالي','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2311,456,1,'apply discount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2312,456,6,'appliquer la remise','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2313,456,8,'afslag toepas','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2314,456,7,'تطبيق الخصم','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2315,457,1,'Have a Discount/ Promio code to Redeem','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2316,457,6,'Avoir un code de réduction / promo à échanger','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2317,457,8,'Het \'n afslag-/promosiekode om te gebruik','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2318,457,7,'احصل على كود خصم / بروميو للاسترداد','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2319,458,1,'promo code','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2320,458,6,'code promo','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2321,458,8,'promosie kode','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2322,458,7,'رمز ترويجي','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2323,459,1,'apply','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2324,459,6,'appliquer','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2325,459,8,'aansoek doen','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2326,459,7,'يتقدم','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2327,460,1,'travel details','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2328,460,6,'détails du voyage','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2329,460,8,'reisbesonderhede','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2330,460,7,'تفاصيل السفر','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2331,461,1,'have an account?','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2332,461,6,'avoir un compte?','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2333,461,8,'het jy \'n rekening?','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2334,461,7,'لديك حساب؟','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2335,462,1,'click here to login','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2336,462,6,'Cliquez ici pour vous identifier','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2337,462,8,'klik hier om aan te meld','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2338,462,7,'انقر هنا لتسجيل الدخول','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2339,463,1,'contact details','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2340,463,6,'détails du contact','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2341,463,8,'kontakbesonderhede','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2342,463,7,'بيانات المتصل','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2343,464,1,'Email','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2344,464,6,'E-mail','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2345,464,8,'E-pos','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2346,464,7,'بريد إلكتروني','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2347,465,1,'Phone','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2348,465,6,'Téléphone','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2349,465,8,'Foon','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2350,465,7,'هاتف','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2351,466,1,'Your booking details will be sent to this email address and mobile number.','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2352,466,6,'Les détails de votre réservation seront envoyés à cette adresse e-mail et à ce numéro de téléphone p','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2353,466,8,'Jou besprekingbesonderhede sal na hierdie e-posadres en selfoonnommer gestuur word.','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2354,466,7,'سيتم إرسال تفاصيل حجزك إلى عنوان البريد الإلكتروني هذا ورقم الهاتف المحمول.','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2355,467,1,'traveller information','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2356,467,6,'informations aux voyageurs','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2357,467,8,'reisiger inligting','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2358,467,7,'معلومات المسافر','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2359,468,1,'passenger','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2360,468,6,'passager','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2361,468,8,'passasier','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2362,468,7,'راكب','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2363,469,1,'Given name','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2364,469,6,'Prénom','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2365,469,8,'Noemnaam','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2366,469,7,'الاسم المعطى','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2367,470,1,'NID / Passport','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2368,470,6,'JNV / Passeport','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2369,470,8,'NID / Paspoort','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2370,470,7,'NID / جواز السفر','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2371,471,1,'Ducoment No','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2372,471,6,'Document Non','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2373,471,8,'Dukoment No','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2374,471,7,'دوكومنت لا','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2375,472,1,'Zip Code..!!','2023-02-18 13:39:28','2023-03-07 15:40:29',NULL),(2376,472,6,'Code postal..!!','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2377,472,8,'Poskode..!!','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2378,472,7,'الرمز البريدي..!!','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2379,473,1,'zip Code..!!','2023-02-18 13:39:28','2023-03-07 15:40:29',NULL),(2380,473,6,'code postal..!!','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2381,473,8,'Poskode..!!','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2382,473,7,'الرمز البريدي..!!','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2383,474,1,'City','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2384,474,6,'Ville','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2385,474,8,'Stad','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2386,474,7,'مدينة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2387,475,1,'address','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2388,475,6,'adresse','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2389,475,8,'adres','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2390,475,7,'عنوان','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2391,476,1,'Address','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2392,476,6,'Adresse','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2393,476,8,'Adres','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2394,476,7,'عنوان','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2395,477,1,'country name','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2396,477,6,'nom du pays','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2397,477,8,'land se naam','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2398,477,7,'اسم الدولة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2399,478,1,'select..','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2400,478,6,'sélectionner..','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2401,478,8,'kies..','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2402,478,7,'يختار..','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2403,479,1,'Create Account?','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2404,479,6,'Créer un compte?','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2405,479,8,'Skep rekening?','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2406,479,7,'إنشاء حساب؟','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2407,480,1,'Pay Now','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2408,480,6,'Payez maintenant','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2409,480,8,'Betaal nou','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2410,480,7,'ادفع الآن','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2411,481,1,'Pay Later','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2412,481,6,'Payer plus tard','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2413,481,8,'Betaal later','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2414,481,7,'ادفع لاحقا','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2415,482,1,'Cancel','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2416,482,6,'Annuler','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2417,482,8,'Kanselleer','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2418,482,7,'يلغي','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2419,483,1,'Make Payment','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2420,483,6,'Effectuer le paiement','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2421,483,8,'Maak betaling','2023-02-18 13:39:28','2023-03-15 12:38:45',NULL),(2422,483,7,'قم بالدفع','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2423,484,1,'book your ticket','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2424,484,6,'réservez votre billet','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2425,484,8,'bespreek jou kaartjie','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2426,484,7,'احجز تذكرتك','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2427,485,1,'laguess','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2428,485,6,'lagues','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2429,485,8,'lag','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2430,485,7,'لاغوس','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2431,486,1,'profile','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2432,486,6,'profil','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2433,486,8,'profiel','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2434,486,7,'حساب تعريفي','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2435,487,1,'change password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2436,487,6,'changer le mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2437,487,8,'verander wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2438,487,7,'تغيير كلمة المرور','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2439,488,1,'logout','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2440,488,6,'Se déconnecter','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2441,488,8,'teken uit','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2442,488,7,'تسجيل خروج','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2443,489,1,'tickets','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2444,489,6,'des billets','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2445,489,8,'kaartjies','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2446,489,7,'تذاكر','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2447,490,1,'Booking Id','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2448,490,6,'Identifiant de réservation','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2449,490,8,'Besprekings-ID','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2450,490,7,'معرف الحجز','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2451,491,1,'payment','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2452,491,6,'paiement','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2453,491,8,'betaling','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2454,491,7,'قسط','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2455,492,1,'view','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2456,492,6,'voir','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2457,492,8,'beskou','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2458,492,7,'منظر','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2459,493,1,'new password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2460,493,6,'nouveau mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2461,493,8,'Nuwe Wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2462,493,7,'كلمة المرور الجديدة','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2463,494,1,'new password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2464,494,6,'nouveau mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2465,494,8,'Nuwe Wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2466,494,7,'كلمة المرور الجديدة','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2467,495,1,'new password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2468,495,6,'nouveau mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2469,495,8,'Nuwe Wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2470,495,7,'كلمة المرور الجديدة','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2471,496,1,'old password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2472,496,6,'ancien mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2473,496,8,'Ou wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2474,496,7,'كلمة المرور القديمة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2475,497,1,'old password','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2476,497,6,'ancien mot de passe','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2477,497,8,'Ou wagwoord','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2478,497,7,'كلمة المرور القديمة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2479,498,1,'confirm','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2480,498,6,'confirmer','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2481,498,8,'bevestig','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2482,498,7,'يتأكد','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2483,499,1,'name','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2484,499,6,'nom','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2485,499,8,'naam','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2486,499,7,'اسم','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2487,500,1,'phone','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2488,500,6,'téléphone','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2489,500,8,'foon','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2490,500,7,'هاتف','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2491,501,1,'booking id','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2492,501,6,'identifiant de réservation','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2493,501,8,'bespreking ID','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2494,501,7,'معرف الحجز','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2495,502,1,'pickup location','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2496,502,6,'lieu de ramassage','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2497,502,8,'afhaalplek','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2498,502,7,'اختر موقعا','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2499,503,1,'drop location','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2500,503,6,'lieu de dépôt','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2501,503,8,'val plek','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2502,503,7,'إسقاط الموقع','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2503,504,1,'booking date','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2504,504,6,'date de réservation','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2505,504,8,'besprekingsdatum','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2506,504,7,'تاريخ الحجز','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2507,505,1,'journey date','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2508,505,6,'date du voyage','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2509,505,8,'reis datum','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2510,505,7,'تاريخ الرحلة','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2511,506,1,'seat number','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2512,506,6,'numéro de siège','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2513,506,8,'sitpleknommer','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2514,506,7,'رقم المقعد','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2515,507,1,'amount','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2516,507,6,'montant','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2517,507,8,'bedrag','2023-02-18 13:39:28','2023-02-18 13:39:28',NULL),(2518,507,7,'كمية','2023-02-18 13:39:28','2023-03-15 12:36:34',NULL),(2519,508,1,'discount','2023-02-18 13:39:28','2023-02-18 13:47:39',NULL),(2520,508,6,'rabais','2023-02-18 13:39:28','2023-03-15 12:35:13',NULL),(2521,508,8,'afslag','2023-02-18 13:39:28','2023-02-18 13:49:04',NULL),(2522,508,7,'تخفيض','2023-02-18 13:39:28','2023-02-18 13:48:40',NULL),(2523,509,1,'total tax','2023-02-18 13:39:28','2023-03-15 13:13:03',NULL),(2524,509,6,'taxe total','2023-02-18 13:39:28','2023-03-15 13:13:14',NULL),(2525,509,8,'totale belasting','2023-02-18 13:39:28','2023-03-15 12:40:43',NULL),(2526,509,7,'مجموع الضريبة','2023-02-18 13:39:28','2023-03-15 13:13:23',NULL),(2527,510,1,'total','2023-02-18 13:39:28','2023-03-15 13:13:03',NULL),(2528,510,6,'total','2023-02-18 13:39:28','2023-03-15 13:13:14',NULL),(2529,510,8,'totaal','2023-02-18 13:39:28','2023-03-15 12:40:43',NULL),(2530,510,7,'المجموع','2023-02-18 13:39:28','2023-03-15 13:13:23',NULL),(2531,511,1,'due','2023-02-18 13:39:28','2023-03-21 11:53:09',NULL),(2532,511,6,'exigible','2023-02-18 13:39:28','2023-03-15 13:13:14',NULL),(2533,511,8,'verskuldig','2023-02-18 13:39:28','2023-03-15 12:40:43',NULL),(2534,511,7,'حق','2023-02-18 13:39:28','2023-03-15 13:13:23',NULL),(2535,512,1,'print','2023-02-18 13:39:28','2023-03-21 11:53:09',NULL),(2536,512,6,'imprimer','2023-02-18 13:39:28','2023-03-15 13:13:14',NULL),(2537,512,8,'druk','2023-02-18 13:39:28','2023-03-15 12:40:43',NULL),(2538,512,7,'مطبعة','2023-02-18 13:39:28','2023-03-15 13:13:23',NULL),(2539,513,1,'download','2023-02-18 13:39:28','2023-05-09 15:08:06',NULL),(2540,513,6,'télécharger','2023-02-18 13:39:28','2023-05-09 15:23:47',NULL),(2541,513,8,'Aflaai','2023-02-18 13:39:28','2023-05-09 15:25:25',NULL),(2542,513,7,'تحميل','2023-02-18 13:39:28','2023-05-09 15:24:37',NULL),(2543,514,1,'Don\'t hesitate to contact with us for any kind of information','2023-02-18 13:39:28','2023-05-09 15:08:06',NULL),(2544,514,6,'N\'hésitez pas à nous contacter pour tout type d\'information','2023-02-18 13:39:28','2023-05-09 15:23:47',NULL),(2545,514,8,'Moenie huiwer om met ons te kontak vir enige soort inligting nie','2023-02-18 13:39:28','2023-05-09 15:25:25',NULL),(2546,514,7,'لا تتردد في الاتصال بنا للحصول على أي نوع من المعلومات','2023-02-18 13:39:28','2023-05-09 15:24:37',NULL),(2547,515,1,'Email : ','2023-02-18 13:39:28','2023-05-09 15:08:06',NULL),(2548,515,6,'E-mail :','2023-02-18 13:39:28','2023-05-09 15:23:47',NULL),(2549,515,8,'E-pos:','2023-02-18 13:39:28','2023-05-09 15:25:25',NULL),(2550,515,7,'بريد إلكتروني :','2023-02-18 13:39:28','2023-05-09 15:24:37',NULL),(2551,516,1,'Phone : ','2023-02-18 13:39:28','2023-05-09 15:08:06',NULL),(2552,516,6,'Téléphone :','2023-02-18 13:39:28','2023-05-09 15:23:47',NULL),(2553,516,8,'Foon :','2023-02-18 13:39:28','2023-05-09 15:25:25',NULL),(2554,516,7,'هاتف :','2023-02-18 13:39:28','2023-05-09 15:24:37',NULL),(2555,517,1,'Follow Us On :','2023-02-18 13:39:28','2023-05-09 15:08:06',NULL),(2556,517,6,'Suivez-nous sur :','2023-02-18 13:39:28','2023-05-09 15:23:47',NULL),(2557,517,8,'Volg ons op :','2023-02-18 13:39:28','2023-05-09 15:25:25',NULL),(2558,517,7,'اتبعنا :','2023-02-18 13:39:28','2023-05-09 15:24:37',NULL),(2559,518,8,'SSL Commerz','2023-02-19 11:16:47','2023-05-09 15:25:25',NULL),(2560,518,7,'كومرز SSL','2023-02-19 11:16:47','2023-05-09 15:24:37',NULL),(2561,518,6,'SSL Commerz','2023-02-19 11:16:47','2023-05-09 15:23:47',NULL),(2562,518,1,'SSL Commerz','2023-02-19 11:16:47','2023-05-09 15:08:06',NULL),(2563,520,8,'Aansig is uitgevee','2023-03-21 11:46:01','2023-05-09 15:25:25',NULL),(2564,520,7,'عرض حذف','2023-03-21 11:46:01','2023-05-09 15:24:37',NULL),(2565,520,6,'Vue supprimée','2023-03-21 11:46:01','2023-05-09 15:23:47',NULL),(2566,520,1,'View Trash','2023-03-21 11:46:01','2023-05-09 15:08:06',NULL),(2567,521,8,'Sien alles','2023-03-21 11:46:09','2023-05-09 15:25:25',NULL),(2568,521,7,'مشاهدة الكل','2023-03-21 11:46:09','2023-05-09 15:24:37',NULL),(2569,521,6,'Voir tout','2023-03-21 11:46:09','2023-05-09 15:23:47',NULL),(2570,521,1,'View All','2023-03-21 11:46:09','2023-05-09 15:08:06',NULL),(2571,522,8,'Herstel','2023-03-21 11:46:09','2023-05-09 15:25:25',NULL),(2572,522,7,'يعيد','2023-03-21 11:46:09','2023-05-09 15:24:37',NULL),(2573,522,6,'Restaurer','2023-03-21 11:46:09','2023-05-09 15:23:47',NULL),(2574,522,1,'Restore','2023-03-21 11:46:09','2023-05-09 15:08:06',NULL),(2575,523,8,'Flutterwave','2023-05-09 15:07:52','2023-05-09 15:25:25',NULL),(2576,523,7,'Flutterwave','2023-05-09 15:07:52','2023-05-09 15:24:37',NULL),(2577,523,6,'Flutterwave','2023-05-09 15:07:52','2023-05-09 15:23:47',NULL),(2578,523,1,'Flutterwave','2023-05-09 15:07:52','2023-05-09 15:08:06',NULL),(2579,524,1,'Bulk Upload','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2580,524,6,'Transfert groupé','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2581,524,7,'تحميل مجمع','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2582,524,8,'Grootmaat oplaai','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2583,525,1,'Select File','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2584,525,6,'Choisir le dossier','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2585,525,7,'حدد الملف','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2586,525,8,'Kies lêer','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2587,526,1,'Download Sample File','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2588,526,6,'télécharger un exemple de fichier','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2589,526,7,'تحميل ملف العينة','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2590,526,8,'Aflaai oorbeeld lêer','2023-09-07 10:31:38','2023-09-14 09:43:06',NULL),(2591,527,8,'Oortjie titel','2023-09-07 11:12:05','2023-10-04 06:29:51',NULL),(2592,527,7,'عنوان علامة التبويب','2023-09-07 11:12:05','2023-10-04 06:29:50',NULL),(2593,527,6,'Titre de l\'onglet','2023-09-07 11:12:05','2023-10-04 06:29:50',NULL),(2594,527,1,'Tab Title','2023-09-07 11:12:05','2023-10-04 06:29:50',NULL),(2595,528,8,'Tuisoortjietitel','2023-09-07 11:12:50','2023-10-04 06:29:49',NULL),(2596,528,7,'عنوان علامة التبويب الصفحة الرئيسية','2023-09-07 11:12:50','2023-10-04 06:29:49',NULL),(2597,528,6,'Titre de l\'onglet Accueil','2023-09-07 11:12:50','2023-10-04 06:29:49',NULL),(2598,528,1,'Home Tab Title','2023-09-07 11:12:50','2023-10-04 06:29:48',NULL),(2599,529,8,'hoe om te werk','2023-09-07 11:13:12','2023-09-14 09:43:06',NULL),(2600,529,7,'كيف تعمل','2023-09-07 11:13:12','2023-09-14 09:43:06',NULL),(2601,529,6,'comment travailler','2023-09-07 11:13:12','2023-09-14 09:43:06',NULL),(2602,529,1,'How to work','2023-09-07 11:13:12','2023-09-14 09:43:06',NULL),(2603,530,8,'Blog','2023-09-07 11:13:25','2023-09-14 09:43:06',NULL),(2604,530,7,'مدونة','2023-09-07 11:13:25','2023-09-14 09:43:06',NULL),(2605,530,6,'Blog','2023-09-07 11:13:25','2023-09-14 09:43:06',NULL),(2606,530,1,'Blog','2023-09-07 11:13:25','2023-09-14 09:43:06',NULL),(2607,531,8,'Rekening','2023-09-07 11:13:45','2023-09-14 09:43:06',NULL),(2608,531,7,'حساب','2023-09-07 11:13:45','2023-09-14 09:43:06',NULL),(2609,531,6,'Compte','2023-09-07 11:13:45','2023-09-14 09:43:06',NULL),(2610,531,1,'Account','2023-09-07 11:13:45','2023-09-14 09:43:06',NULL),(2611,532,8,'Afstand','2023-09-07 13:07:08','2023-10-04 06:30:48',NULL),(2612,532,7,'مسافة','2023-09-07 13:07:08','2023-10-04 06:30:48',NULL),(2613,532,6,'Distance','2023-09-07 13:07:08','2023-10-04 06:30:47',NULL),(2614,532,1,'Distance','2023-09-07 13:07:08','2023-09-14 09:43:06',NULL),(2615,533,8,'Tuis','2023-09-10 14:45:20','2023-09-14 09:43:06',NULL),(2616,533,7,'بيت ','2023-09-10 14:45:20','2023-09-14 09:43:06',NULL),(2617,533,6,'Maison','2023-09-10 14:45:20','2023-09-14 09:43:06',NULL),(2618,533,1,'Home','2023-09-10 14:45:20','2023-09-14 09:43:06',NULL),(2619,534,1,'Book Now','2023-09-12 16:35:08','2023-09-14 09:43:06',NULL),(2620,534,6,'Reserve maintenant','2023-09-12 16:35:08','2023-09-14 09:43:06',NULL),(2621,534,7,'احجز الآن','2023-09-12 16:35:08','2023-09-14 09:43:06',NULL),(2622,534,8,'Bespreek nou','2023-09-12 16:35:08','2023-09-14 09:43:06',NULL),(2623,535,1,'BOOK YOUR BUS TICKET','2023-09-12 16:41:32','2023-09-14 09:43:06',NULL),(2624,535,6,'Réservez votre billet de bus','2023-09-12 16:41:32','2023-09-14 09:43:06',NULL),(2625,535,7,'احجز تذكرة الحافلة الخاصة بك','2023-09-12 16:41:32','2023-09-14 09:43:06',NULL),(2626,535,8,'Bespreek jou buskaartjie','2023-09-12 16:41:32','2023-09-14 09:43:06',NULL),(2627,536,1,'Choose Your Destinations And Dates To Reserve A Ticket','2023-09-12 16:45:47','2023-09-14 09:43:06',NULL),(2628,536,6,'Choisissez vos destinations et dates pour réserver un billet','2023-09-12 16:45:47','2023-09-14 09:43:06',NULL),(2629,536,7,'اختر وجهاتك وتواريخك لحجز تذكرة','2023-09-12 16:45:47','2023-09-14 09:43:06',NULL),(2630,536,8,'Kies jou bestemmings en datums om \'n kaartjie te bespreek','2023-09-12 16:45:47','2023-09-14 09:43:06',NULL),(2631,537,8,'Passasier','2023-09-14 09:06:46','2023-09-14 09:43:06',NULL),(2632,537,7,'راكب','2023-09-14 09:06:46','2023-09-14 09:43:06',NULL),(2633,537,6,'Passager','2023-09-14 09:06:46','2023-09-14 09:43:06',NULL),(2634,537,1,'Passenger','2023-09-14 09:06:46','2023-09-14 09:43:06',NULL),(2635,538,8,'NID/paspoort','2023-09-14 09:07:09','2023-09-14 09:43:06',NULL),(2636,538,7,'الرقم الوطني/ جواز السفر','2023-09-14 09:07:09','2023-09-14 09:43:06',NULL),(2637,538,6,'NID/Passeport','2023-09-14 09:07:09','2023-09-14 09:43:06',NULL),(2638,538,1,'NID / Passport','2023-09-14 09:07:09','2023-09-14 09:43:06',NULL),(2639,539,8,'Poskode','2023-09-14 09:07:34','2023-09-14 09:43:06',NULL),(2640,539,7,'الرمز البريدي','2023-09-14 09:07:34','2023-09-14 09:44:42',NULL),(2641,539,6,'Code postal','2023-09-14 09:07:34','2023-09-14 09:43:06',NULL),(2642,539,1,'Zip Code','2023-09-14 09:07:34','2023-09-14 09:43:06',NULL),(2643,540,8,'Adres','2023-09-14 09:07:55','2023-09-14 09:43:06',NULL),(2644,540,7,'عنوان','2023-09-14 09:07:55','2023-09-14 09:44:42',NULL),(2645,540,6,'Adresse','2023-09-14 09:07:55','2023-09-14 09:43:06',NULL),(2646,540,1,'Address','2023-09-14 09:07:55','2023-09-14 09:43:06',NULL),(2647,541,8,'Land','2023-09-14 09:08:20','2023-09-14 09:43:06',NULL),(2648,541,7,'دولة','2023-09-14 09:08:20','2023-09-14 09:44:42',NULL),(2649,541,6,'Pays','2023-09-14 09:08:20','2023-09-14 09:43:06',NULL),(2650,541,1,'Country','2023-09-14 09:08:20','2023-09-14 09:43:06',NULL),(2651,542,8,'Opdateer','2023-09-14 09:11:18','2023-09-14 09:43:06',NULL),(2652,542,7,'تحديث','2023-09-14 09:11:18','2023-09-14 09:44:42',NULL),(2653,542,6,'Mise ','2023-09-14 09:11:18','2023-09-14 09:43:06',NULL),(2654,542,1,'Update','2023-09-14 09:11:18','2023-09-14 09:43:06',NULL),(2655,543,1,'New Password','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2656,543,6,'nouveau mot de passe','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2657,543,7,'كلمة المرور الجديدة','2023-09-14 09:31:14','2023-09-14 09:44:42',NULL),(2658,543,8,'Nuwe Wagwoord','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2659,544,1,'Old Password','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2660,544,6,'ancien mot de passe','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2661,544,7,'كلمة المرور القديمة','2023-09-14 09:31:14','2023-09-14 09:44:42',NULL),(2662,544,8,'Ou wagwoord','2023-09-14 09:31:14','2023-09-14 09:43:06',NULL),(2663,545,1,'Confirm','2023-09-14 09:32:37','2023-09-14 09:43:06',NULL),(2664,545,6,'Confirmer','2023-09-14 09:32:37','2023-09-14 09:43:06',NULL),(2665,545,7,'يتأكد','2023-09-14 09:32:37','2023-09-14 09:44:42',NULL),(2666,545,8,'Bevestig','2023-09-14 09:32:37','2023-09-14 09:43:06',NULL),(2667,546,1,'Old Password','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2668,546,6,'ancien mot de passe','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2669,546,7,'كلمة المرور القديمة','2023-09-14 09:41:18','2023-09-14 09:44:42',NULL),(2670,546,8,'Ou wagwoord','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2671,547,1,'New Password','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2672,547,6,'nouveau mot de passe','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2673,547,7,'كلمة المرور الجديدة','2023-09-14 09:41:18','2023-09-14 09:44:42',NULL),(2674,547,8,'Nuwe Wagwoord','2023-09-14 09:41:18','2023-09-14 09:43:06',NULL),(2675,548,1,'Re-Password','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2676,548,6,'Re-mot de passe','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2677,548,7,'إعادة كلمة المرور','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2678,548,8,'Herwagwoord','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2679,549,1,'Return','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2680,549,6,'Retour','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2681,549,7,'يعود','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2682,549,8,'Terugkeer','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2683,550,1,'Showing result for','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2684,550,6,'Affichage du résultat pour','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2685,550,7,'عرض النتيجة ل','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2686,550,8,'Wys resultaat vir','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2687,551,1,'Round','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2688,551,6,'Rond','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2689,551,7,'دائري','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2690,551,8,'Rond','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2691,552,1,'Single','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2692,552,6,'Célibataire','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2693,552,7,'أعزب','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2694,552,8,'Enkellopend','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2695,553,1,'all','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2696,553,6,'Toute','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2697,553,7,'الجميع','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2698,553,8,'Almal','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2699,554,1,'None','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2700,554,6,'Aucune','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2701,554,7,'لا أحد','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2702,554,8,'Geen','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2703,555,1,'Account Settings','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2704,555,6,'Paramètres du compte','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2705,555,7,'إعدادت الحساب','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2706,555,8,'Rekeninginstellings','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2707,556,1,'Sign Out','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2708,556,6,'Se déconnecter','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2709,556,7,'خروج','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2710,556,8,'Teken uit','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2711,557,1,'Join at','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2712,557,6,'Rejoignez-nous sur','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2713,557,7,'انضم في','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2714,557,8,'Sluit aan by','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2715,558,1,'Sign in','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2716,558,6,'Se connecter','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2717,558,7,'تسجيل الدخول','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2718,558,8,'Meld aan','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2719,559,1,'Remind','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2720,559,6,'Rappeler','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2721,559,7,'يتذكر','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2722,559,8,'Herinner','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2723,560,1,'The Following Data Will Be Deleted','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2724,560,6,'Les données suivantes seront supprimées','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2725,560,7,'سيتم حذف البيانات التالية','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2726,560,8,'Die volgende data sal uitgevee word','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2727,561,1,'Stuff','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2728,561,6,'Truc','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2729,561,7,'أشياء','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2730,561,8,'Goed','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2731,562,1,'Pick','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2732,562,6,'Prendre','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2733,562,7,'يختار','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2734,562,8,'Kies','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2735,563,1,'Temporary','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2736,563,6,'Temporaire','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2737,563,7,'مؤقت','2023-09-14 09:43:06','2023-09-14 09:44:42',NULL),(2738,563,8,'Tydelik','2023-09-14 09:43:06','2023-09-14 09:43:06',NULL),(2739,564,8,'Saterdag','2023-10-11 10:43:13','2023-10-11 11:13:59',NULL),(2740,564,7,'السبت','2023-10-11 10:43:13','2023-10-11 11:13:34',NULL),(2741,564,6,'Samedi','2023-10-11 10:43:13','2023-10-11 11:13:14',NULL),(2742,564,1,'Saturday','2023-10-11 10:43:13','2023-10-11 11:12:50',NULL),(2743,565,8,'Sondag','2023-10-11 10:43:39','2023-10-11 11:13:59',NULL),(2744,565,7,'الأحد','2023-10-11 10:43:39','2023-10-11 11:13:34',NULL),(2745,565,6,'Dimanche','2023-10-11 10:43:39','2023-10-11 11:13:14',NULL),(2746,565,1,'Sunday','2023-10-11 10:43:39','2023-10-11 11:12:50',NULL),(2747,566,8,'Maandag','2023-10-11 10:44:03','2023-10-11 11:13:59',NULL),(2748,566,7,'الاثنين','2023-10-11 10:44:03','2023-10-11 11:13:34',NULL),(2749,566,6,'Lundi','2023-10-11 10:44:03','2023-10-11 11:13:14',NULL),(2750,566,1,'Monday','2023-10-11 10:44:03','2023-10-11 11:12:50',NULL),(2751,567,8,'Dinsdag','2023-10-11 10:44:13','2023-10-11 11:13:59',NULL),(2752,567,7,'يوم الثلاثاء','2023-10-11 10:44:13','2023-10-11 11:13:34',NULL),(2753,567,6,'Mardi','2023-10-11 10:44:13','2023-10-11 11:13:14',NULL),(2754,567,1,'Tuesday','2023-10-11 10:44:13','2023-10-11 11:12:50',NULL),(2755,568,8,'Woensdag','2023-10-11 10:44:23','2023-10-11 11:13:59',NULL),(2756,568,7,'الأربعاء','2023-10-11 10:44:23','2023-10-11 11:13:34',NULL),(2757,568,6,'Mercredi','2023-10-11 10:44:23','2023-10-11 11:13:14',NULL),(2758,568,1,'Wednesday','2023-10-11 10:44:23','2023-10-11 11:12:50',NULL),(2759,569,8,'Donderdag','2023-10-11 10:44:31','2023-10-11 11:33:13',NULL),(2760,569,7,'يوم الخميس','2023-10-11 10:44:31','2023-10-11 11:47:51',NULL),(2761,569,6,'Jeudi','2023-10-11 10:44:31','2023-10-11 11:46:00',NULL),(2762,569,1,'Thursday','2023-10-11 10:44:31','2023-10-11 11:28:49',NULL),(2763,570,8,'Vrydag','2023-10-11 10:44:39','2023-10-11 11:33:13',NULL),(2764,570,7,'جمعة','2023-10-11 10:44:39','2023-10-11 11:47:51',NULL),(2765,570,6,'Vendredi','2023-10-11 10:44:39','2023-10-11 11:46:00',NULL),(2766,570,1,'Friday','2023-10-11 10:44:39','2023-10-11 11:28:49',NULL),(2767,571,8,'Verskil','2023-10-11 11:12:31','2023-10-11 11:33:13',NULL),(2768,571,7,'اختلاف','2023-10-11 11:12:31','2023-10-11 11:47:51',NULL),(2769,571,6,'Différence','2023-10-11 11:12:31','2023-10-11 11:46:00',NULL),(2770,571,1,'Difference','2023-10-11 11:12:31','2023-10-11 11:28:49',NULL),(2771,572,8,'Januarie','2023-10-11 11:20:57','2023-10-11 11:33:13',NULL),(2772,572,7,'يناير','2023-10-11 11:20:57','2023-10-11 11:47:51',NULL),(2773,572,6,'Janvier','2023-10-11 11:20:57','2023-10-11 11:46:00',NULL),(2774,572,1,'January','2023-10-11 11:20:57','2023-10-11 11:28:49',NULL),(2775,573,8,'Februarie','2023-10-11 11:21:04','2023-10-11 11:33:13',NULL),(2776,573,7,'شهر فبراير','2023-10-11 11:21:04','2023-10-11 11:47:51',NULL),(2777,573,6,'Février','2023-10-11 11:21:04','2023-10-11 11:46:00',NULL),(2778,573,1,'February','2023-10-11 11:21:04','2023-10-11 11:28:49',NULL),(2779,574,8,'Maart','2023-10-11 11:21:10','2023-10-11 11:33:13',NULL),(2780,574,7,'يمشي','2023-10-11 11:21:10','2023-10-11 11:47:51',NULL),(2781,574,6,'Mars','2023-10-11 11:21:10','2023-10-11 11:46:00',NULL),(2782,574,1,'March','2023-10-11 11:21:10','2023-10-11 11:28:49',NULL),(2783,575,8,'April','2023-10-11 11:21:17','2023-10-11 11:33:13',NULL),(2784,575,7,'أبريل','2023-10-11 11:21:17','2023-10-11 11:47:51',NULL),(2785,575,6,'Avril','2023-10-11 11:21:17','2023-10-11 11:46:00',NULL),(2786,575,1,'April','2023-10-11 11:21:17','2023-10-11 11:28:49',NULL),(2787,576,8,'Mei','2023-10-11 11:21:24','2023-10-11 11:33:13',NULL),(2788,576,7,'يمكن','2023-10-11 11:21:24','2023-10-11 11:47:51',NULL),(2789,576,6,'Peut','2023-10-11 11:21:24','2023-10-11 11:46:00',NULL),(2790,576,1,'May','2023-10-11 11:21:24','2023-10-11 11:28:49',NULL),(2791,577,8,'Junie','2023-10-11 11:21:30','2023-10-11 11:33:13',NULL),(2792,577,7,'يونيو','2023-10-11 11:21:30','2023-10-11 11:47:51',NULL),(2793,577,6,'Juin','2023-10-11 11:21:30','2023-10-11 11:46:00',NULL),(2794,577,1,'June','2023-10-11 11:21:30','2023-10-11 11:28:49',NULL),(2795,578,8,'Julie','2023-10-11 11:21:36','2023-10-11 11:33:13',NULL),(2796,578,7,'يوليو','2023-10-11 11:21:36','2023-10-11 11:47:51',NULL),(2797,578,6,'Juillet','2023-10-11 11:21:36','2023-10-11 11:46:00',NULL),(2798,578,1,'July','2023-10-11 11:21:36','2023-10-11 11:28:49',NULL),(2799,579,8,'Augustus','2023-10-11 11:21:43','2023-10-11 11:33:13',NULL),(2800,579,7,'أغسطس','2023-10-11 11:21:43','2023-10-11 11:47:51',NULL),(2801,579,6,'Août','2023-10-11 11:21:43','2023-10-11 11:46:00',NULL),(2802,579,1,'August','2023-10-11 11:21:43','2023-10-11 11:28:49',NULL),(2803,580,8,'September','2023-10-11 11:21:50','2023-10-11 11:33:13',NULL),(2804,580,7,'سبتمبر','2023-10-11 11:21:50','2023-10-11 11:47:51',NULL),(2805,580,6,'Septembre','2023-10-11 11:21:50','2023-10-11 11:46:00',NULL),(2806,580,1,'September','2023-10-11 11:21:50','2023-10-11 11:28:49',NULL),(2807,581,8,'Oktober','2023-10-11 11:21:57','2023-10-11 11:33:13',NULL),(2808,581,7,'اكتوبر','2023-10-11 11:21:57','2023-10-11 11:47:51',NULL),(2809,581,6,'Octobre','2023-10-11 11:21:57','2023-10-11 11:46:00',NULL),(2810,581,1,'October','2023-10-11 11:21:57','2023-10-11 11:28:49',NULL),(2811,582,8,'November','2023-10-11 11:22:04','2023-10-11 11:33:13',NULL),(2812,582,7,'شهر نوفمبر','2023-10-11 11:22:04','2023-10-11 11:47:51',NULL),(2813,582,6,'Novembre','2023-10-11 11:22:04','2023-10-11 11:46:00',NULL),(2814,582,1,'November','2023-10-11 11:22:04','2023-10-11 11:28:49',NULL),(2815,583,8,'Desember','2023-10-11 11:22:11','2023-10-11 11:33:13',NULL),(2816,583,7,'ديسمبر','2023-10-11 11:22:11','2023-10-11 11:47:51',NULL),(2817,583,6,'Décembre','2023-10-11 11:22:11','2023-10-11 11:46:00',NULL),(2818,583,1,'December','2023-10-11 11:22:11','2023-10-11 11:28:49',NULL),(2819,584,8,'Vertoon','2023-10-11 16:57:28','2023-10-11 17:11:52',NULL),(2820,584,7,'عرض','2023-10-11 16:57:28','2023-10-11 17:08:50',NULL),(2821,584,6,'Afficher','2023-10-11 16:57:28','2023-10-11 17:10:25',NULL),(2822,584,1,'Display','2023-10-11 16:57:28','2023-10-11 17:04:18',NULL),(2823,585,8,'Rekords per bladsy','2023-10-11 16:57:43','2023-10-11 17:11:52',NULL),(2824,585,7,'تسجيلات لكل صفحة','2023-10-11 16:57:43','2023-10-11 17:08:50',NULL),(2825,585,6,'Enregistrements par page','2023-10-11 16:57:43','2023-10-11 17:10:25',NULL),(2826,585,1,'Records per page','2023-10-11 16:57:43','2023-10-11 17:04:18',NULL),(2827,586,8,'Geen ooreenstemmende rekords nie','2023-10-11 16:57:53','2023-10-11 17:11:52',NULL),(2828,586,7,'لا توجد سجلات مطابقة','2023-10-11 16:57:53','2023-10-11 17:08:50',NULL),(2829,586,6,'Aucun enregistrement correspondant','2023-10-11 16:57:53','2023-10-11 17:10:25',NULL),(2830,586,1,'No matching records','2023-10-11 16:57:53','2023-10-11 17:04:18',NULL),(2831,587,8,'Wys','2023-10-11 16:58:01','2023-10-11 17:11:52',NULL),(2832,587,7,'عرض','2023-10-11 16:58:01','2023-10-11 17:08:50',NULL),(2833,587,6,'Affichage','2023-10-11 16:58:01','2023-10-11 17:10:25',NULL),(2834,587,1,'Showing','2023-10-11 16:58:01','2023-10-11 17:04:18',NULL),(2835,588,8,'van','2023-10-11 16:58:10','2023-10-11 17:11:52',NULL),(2836,588,7,'ل','2023-10-11 16:58:10','2023-10-11 17:08:50',NULL),(2837,588,6,'de','2023-10-11 16:58:10','2023-10-11 17:10:25',NULL),(2838,588,1,'of','2023-10-11 16:58:10','2023-10-11 17:04:18',NULL),(2839,589,8,'Inskrywings','2023-10-11 16:58:18','2023-10-11 18:17:22',NULL),(2840,589,7,'إدخالات','2023-10-11 16:58:18','2023-10-11 18:17:48',NULL),(2841,589,6,'Entrées','2023-10-11 16:58:18','2023-10-11 18:16:32',NULL),(2842,589,1,'Entries','2023-10-11 16:58:18','2023-10-11 18:19:10',NULL),(2843,590,8,'Geen rekords beskikbaar nie','2023-10-11 16:58:29','2023-10-11 18:17:22',NULL),(2844,590,7,'لا توجد سجلات متاحة','2023-10-11 16:58:29','2023-10-11 18:17:48',NULL),(2845,590,6,'Aucun enregistrement disponible','2023-10-11 16:58:29','2023-10-11 18:16:32',NULL),(2846,590,1,'No Records Available','2023-10-11 16:58:29','2023-10-11 18:19:10',NULL),(2847,591,8,'Gefiltreer vanaf','2023-10-11 16:58:39','2023-10-11 18:17:22',NULL),(2848,591,7,'تمت التصفية من','2023-10-11 16:58:39','2023-10-11 18:17:48',NULL),(2849,591,6,'Filtré de','2023-10-11 16:58:39','2023-10-11 18:16:32',NULL),(2850,591,1,'Filtered from','2023-10-11 16:58:39','2023-10-11 18:19:10',NULL),(2851,592,8,'Totale rekords','2023-10-11 16:58:46','2023-10-11 18:17:22',NULL),(2852,592,7,'إجمالي السجلات','2023-10-11 16:58:46','2023-10-11 18:17:48',NULL),(2853,592,6,'Total des enregistrements','2023-10-11 16:58:46','2023-10-11 18:16:32',NULL),(2854,592,1,'Total records','2023-10-11 16:58:46','2023-10-11 18:19:10',NULL),(2855,593,8,'Eerstens','2023-10-11 16:58:53','2023-10-11 18:17:22',NULL),(2856,593,7,'أولاً','2023-10-11 16:58:53','2023-10-11 18:17:48',NULL),(2857,593,6,'D\'abord','2023-10-11 16:58:53','2023-10-11 18:16:32',NULL),(2858,593,1,'First','2023-10-11 16:58:53','2023-10-11 18:19:10',NULL),(2859,594,8,'Vorige','2023-10-11 16:59:02','2023-10-11 18:17:22',NULL),(2860,594,7,'سابق','2023-10-11 16:59:02','2023-10-11 18:17:48',NULL),(2861,594,6,'Précédent','2023-10-11 16:59:02','2023-10-11 18:16:32',NULL),(2862,594,1,'Previous','2023-10-11 16:59:02','2023-10-11 18:19:10',NULL),(2863,595,8,'Volgende','2023-10-11 16:59:09','2023-10-11 18:17:22',NULL),(2864,595,7,'التالي','2023-10-11 16:59:09','2023-10-11 18:17:48',NULL),(2865,595,6,'Suivant','2023-10-11 16:59:09','2023-10-11 18:16:32',NULL),(2866,595,1,'Next','2023-10-11 16:59:09','2023-10-11 18:19:10',NULL),(2867,596,8,'Laaste','2023-10-11 16:59:17','2023-10-11 18:17:22',NULL),(2868,596,7,'آخر','2023-10-11 16:59:17','2023-10-11 18:17:48',NULL),(2869,596,6,'Dernier','2023-10-11 16:59:17','2023-10-11 18:16:32',NULL),(2870,596,1,'Last','2023-10-11 16:59:17','2023-10-11 18:19:10',NULL),(2871,597,8,'Fabrieksterugstelling','2023-10-11 18:13:01','2023-10-11 18:17:22',NULL),(2872,597,7,'اعدادات المصنع','2023-10-11 18:13:01','2023-10-11 18:17:48',NULL),(2873,597,6,'Factory Reset','2023-10-11 18:13:01','2023-10-11 18:16:32',NULL),(2874,597,1,'Factory Reset','2023-10-11 18:13:01','2023-10-11 18:19:10',NULL),(2875,598,8,'Is jy seker','2023-10-11 18:13:01','2023-10-11 18:17:22',NULL),(2876,598,7,'هل أنت متأكد','2023-10-11 18:13:01','2023-10-11 18:17:48',NULL),(2877,598,6,'Es-tu sûr','2023-10-11 18:13:01','2023-10-11 18:16:32',NULL),(2878,598,1,'Are you sure','2023-10-11 18:13:01','2023-10-11 18:19:10',NULL);
/*!40000 ALTER TABLE `lngstngvalues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localizes`
--

DROP TABLE IF EXISTS `localizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localizes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `language_code` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localizes`
--

LOCK TABLES `localizes` WRITE;
/*!40000 ALTER TABLE `localizes` DISABLE KEYS */;
INSERT INTO `localizes` VALUES (1,'en','English','en','2022-03-13 16:30:39','2022-12-07 03:42:44',NULL),(6,'fr','French','fr','2022-05-16 13:36:29','2022-12-07 03:42:44',NULL),(7,'ar','Arabic','ar','2023-02-18 13:10:25','2023-02-18 13:10:25',NULL),(8,'af','Afrikaans','af','2023-02-18 13:10:41','2023-02-18 13:10:41',NULL);
/*!40000 ALTER TABLE `localizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (24,'DINAJPUR','2022-06-27 14:03:42','2023-01-21 10:11:39',NULL),(25,'GAIBANDHA','2022-06-27 14:04:23','2023-01-21 10:11:39',NULL),(26,'KURIGRAM','2022-06-27 14:04:50','2023-01-21 10:11:39',NULL),(27,'LALMONIRHAT','2022-06-27 14:05:32','2023-01-21 10:11:39',NULL),(28,'NILPHAMARI','2022-06-27 14:05:58','2023-01-21 10:11:39',NULL),(29,'PANCHAGARH','2022-06-27 14:06:26','2023-01-21 10:11:39',NULL),(30,'RANGPUR','2022-06-27 14:07:05','2023-01-21 10:11:39',NULL),(31,'THAKURGAON','2022-06-27 14:07:39','2023-01-21 10:11:39',NULL),(32,'DHAKA','2022-06-27 14:11:08','2023-01-21 10:11:39',NULL),(33,'FARIDPUR','2022-06-27 14:11:33','2023-01-21 10:11:39',NULL),(34,'GAZIPUR','2022-06-27 14:12:05','2023-01-21 10:11:39',NULL),(35,'GOPALGANJ','2022-06-27 14:12:39','2023-01-21 10:11:39',NULL),(36,'JAMALPUR','2022-06-27 14:13:11','2023-01-21 10:11:39',NULL),(37,'KISHOREGANJ','2022-06-27 14:13:32','2023-01-21 10:11:39',NULL),(38,'MADARIPUR','2022-06-27 14:14:03','2023-01-21 10:11:39',NULL),(39,'MANIKGANJ','2022-06-27 14:14:24','2023-01-21 10:11:39',NULL),(40,'MUNSHIGANJ','2022-06-27 14:14:59','2023-01-21 10:11:39',NULL),(41,'BOGRA','2022-06-27 14:16:41','2023-01-21 10:11:39',NULL),(42,'CHITTAGONG','2022-06-27 14:18:10','2023-01-21 10:11:39',NULL),(43,'TANGAIL','2022-06-27 14:18:27','2023-01-21 10:11:39',NULL),(44,'FENI','2022-06-27 14:19:11','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maxtimes`
--

DROP TABLE IF EXISTS `maxtimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maxtimes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `maxtime` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maxtimes`
--

LOCK TABLES `maxtimes` WRITE;
/*!40000 ALTER TABLE `maxtimes` DISABLE KEYS */;
INSERT INTO `maxtimes` VALUES (1,'5','2021-11-22 11:21:27','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `maxtimes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(100) NOT NULL,
  `page_url` varchar(100) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `parent_menu_id` varchar(100) DEFAULT NULL,
  `have_chield` varchar(100) DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'ticket_booking','ticket/booking','Ticket',NULL,'1','1','2022-03-15 12:54:24','2023-01-21 10:11:39',NULL),(2,'book_ticket','ticket/booking/bookticket','Ticket','1',NULL,'1','2022-03-15 13:00:11','2023-01-21 10:11:39',NULL),(3,'ticket_list','ticket/booking/ticketlist','Ticket','1',NULL,'1','2022-03-15 14:26:23','2023-01-21 10:11:39',NULL),(4,'journey_list','ticket/booking/journeylist','Ticket','1',NULL,'1','2022-03-15 14:28:34','2023-01-21 10:11:39',NULL),(5,'refund_list','ticket/booking/refundlist','Ticket','1',NULL,'1','2022-03-15 14:30:32','2023-01-21 10:11:39',NULL),(6,'cancel_list','ticket/booking/cancellist','Ticket','1',NULL,'1','2022-03-15 14:49:59','2023-01-21 10:11:39',NULL),(7,'book_time','ticket/booking/booktime','Ticket','1','1','1','2022-03-15 14:53:50','2023-01-21 10:11:39',NULL),(8,'add_booking_time','ticket/booking/booktime/addbooktime','Ticket','7',NULL,'1','2022-03-15 14:55:01','2023-01-21 10:11:39',NULL),(9,'book_time_list','ticket/booking/booktime/booktimelist','Ticket','7',NULL,'1','2022-03-15 14:56:23','2023-01-21 10:11:39',NULL),(12,'agent','agent/agent','Agent',NULL,'1','1','2022-03-15 17:24:46','2023-01-21 10:11:39',NULL),(13,'add_agent','agent/agent/addagent','Agent','12',NULL,'1','2022-03-15 17:30:09','2023-01-21 10:11:39',NULL),(14,'agent_list','agent/agent/agentlist','Agent','12',NULL,'1','2022-03-15 17:30:41','2023-01-21 10:11:39',NULL),(15,'account','account/account','Account',NULL,'1','1','2022-03-15 17:41:50','2023-01-21 10:11:39',NULL),(17,'add_transaction','account/account/transaction','Account','15',NULL,'1','2022-03-15 17:49:10','2023-01-21 10:11:39',NULL),(18,'transaction_list','account/account/transactionlist','Account','15',NULL,'1','2022-03-15 17:51:32','2023-01-21 10:11:39',NULL),(19,'location','location/location','Location',NULL,'1','1','2022-03-15 17:58:04','2023-01-21 10:11:39',NULL),(20,'add_location','location/location/addlocation','Location','19',NULL,'1','2022-03-15 18:02:33','2023-01-21 10:11:39',NULL),(21,'location_list','location/location/locationlist','Location','19',NULL,'1','2022-03-15 18:04:13','2023-01-21 10:11:39',NULL),(22,'add_stand','location/location/addstand','Location','19',NULL,'1','2022-03-15 18:05:05','2023-01-21 10:11:39',NULL),(23,'stand_list','location/location/standlist','Location','19',NULL,'1','2022-03-15 18:08:11','2023-01-21 10:11:39',NULL),(24,'schedule','schedule/schedule','Schedule',NULL,'1','1','2022-03-15 18:59:01','2023-01-21 10:11:39',NULL),(25,'add_schedule','schedule/schedule/addschedule','Schedule','24',NULL,'1','2022-03-15 19:00:22','2023-01-21 10:11:39',NULL),(26,'schedule_list','schedule/schedule/schedulelist','Schedule','24',NULL,'1','2022-03-15 19:02:28','2023-01-21 10:11:39',NULL),(27,'add_schedule_filter','schedule/schedule/addschedulefilter','Schedule','24',NULL,'1','2022-03-15 19:05:21','2023-01-21 10:11:39',NULL),(28,'schedule_filter_list','schedule/schedule/schedulefilterlist','Schedule','24',NULL,'1','2022-03-15 19:06:03','2023-01-21 10:11:39',NULL),(29,'advertisement','add/advertisement','Add','','1','1','2022-05-11 11:31:50','2023-01-21 10:11:39',NULL),(30,'add_advertisement','add/advertisement/new','Add','29',NULL,'1','2022-05-11 11:33:48','2023-01-21 10:11:39',NULL),(31,'advertisement_list','add/advertisement/list','Add','29',NULL,'1','2022-05-11 11:35:18','2023-01-21 10:11:39',NULL),(32,'coupon','coupon/coupon','Coupon','','1','1','2022-05-11 11:46:00','2023-01-21 10:11:39',NULL),(33,'add_coupon','coupon/coupon/add','Coupon','32',NULL,'1','2022-05-11 11:46:55','2023-01-21 10:11:39',NULL),(34,'coupon_list','coupon/coupon/list','Coupon','32',NULL,'1','2022-05-11 11:48:23','2023-01-21 10:11:39',NULL),(36,'employee','employee/employee','Employee','','1','1','2022-05-11 12:01:48','2023-01-21 10:11:39',NULL),(37,'add_employee_type','employee/employee/add/type','Employee','36',NULL,'1','2022-05-11 12:02:15','2023-01-21 10:11:39',NULL),(38,'employee_type_list','employee/employee/type/list','Employee','36',NULL,'1','2022-05-11 12:03:10','2023-01-21 10:11:39',NULL),(39,'add_employee','employee/employee/add','Employee','36',NULL,'1','2022-05-11 12:05:24','2023-01-21 10:11:39',NULL),(40,'employee_list','employee/employee/list','Employee','36',NULL,'1','2022-05-11 12:06:35','2023-01-21 10:11:39',NULL),(41,'fitness','fitness/fitness','Fitness','','1','1','2022-05-11 12:20:46','2023-01-21 10:11:39',NULL),(42,'add_fitness','fitness/fitness/add','Fitness','41',NULL,'1','2022-05-11 12:21:49','2023-01-21 10:11:39',NULL),(43,'fitness_list','fitness/fitness/list','Fitness','41',NULL,'1','2022-05-11 12:22:27','2023-01-21 10:11:39',NULL),(44,'fleet','fleet/fleet','Fleet','','1','1','2022-05-11 12:23:38','2023-01-21 10:11:39',NULL),(45,'add_fleet','fleet/fleet/add','Fleet','44',NULL,'1','2022-05-11 12:24:26','2023-01-21 10:11:39',NULL),(46,'fleet_list','fleet/fleet/list','Fleet','44',NULL,'1','2022-05-11 12:25:34','2023-01-21 10:11:39',NULL),(47,'add_vehicle','fleet/fleet/vehicle/add','Fleet','44',NULL,'1','2022-05-11 12:26:43','2023-01-21 10:11:39',NULL),(48,'vehicle_list','fleet/fleet/vehicle/list','Fleet','44',NULL,'1','2022-05-11 12:30:33','2023-01-21 10:11:39',NULL),(49,'frontend','frontend/frontend','Frontend','','1','1','2022-05-11 12:32:10','2023-01-21 10:11:39',NULL),(50,'sectionone','frontend/frontend/sectionone','Frontend','49',NULL,'1','2022-05-11 12:34:09','2023-01-21 10:11:39',NULL),(51,'sectiontwo','frontend/frontend/sectiontwo','Frontend','49','1','1','2022-05-11 12:35:30','2023-01-21 10:11:39',NULL),(52,'sectiontwo_two','frontend/frontend/sectiontwo/sectiontwo','Frontend','51',NULL,'1','2022-05-11 12:36:41','2023-01-21 10:11:39',NULL),(53,'how_works_add','frontend/frontend/sectiontwo/sectiontwo/how/works/add','Frontend','51',NULL,'1','2022-05-11 12:40:59','2023-01-21 10:11:39',NULL),(54,'how_works_list','frontend/frontend/sectiontwo/sectiontwo/how/works/list','Frontend','51',NULL,'1','2022-05-11 12:52:46','2023-01-21 10:11:39',NULL),(55,'sectionthree','frontend/frontend/sectionthree/sectionthree','Frontend','49',NULL,'1','2022-05-11 12:54:21','2023-01-21 10:11:39',NULL),(56,'sectionfour','frontend/frontend/sectionfour','Frontend','49','1','1','2022-05-11 12:58:16','2023-01-21 10:11:39',NULL),(57,'sectionfour_four','frontend/frontend/sectionfour/sectionfour','Frontend','56',NULL,'1','2022-05-11 13:04:09','2023-01-21 10:11:39',NULL),(58,'add_comment','frontend/frontend/sectionfour/sectionfour/comment/add','Frontend','56',NULL,'1','2022-05-11 13:05:09','2023-01-21 10:11:39',NULL),(59,'comment_list','frontend/frontend/sectionfour/sectionfour/comment/list','Frontend','56',NULL,'1','2022-05-11 13:05:50','2023-01-21 10:11:39',NULL),(60,'sectionfive','frontend/frontend/sectionfive','Frontend','49',NULL,'1','2022-05-11 13:11:08','2023-01-21 10:11:39',NULL),(61,'sectionsix','frontend/frontend/sectionsix','Frontend','49',NULL,'1','2022-05-11 13:11:49','2023-01-21 10:11:39',NULL),(62,'sectionseven','frontend/frontend/sectionseven','Frontend','49',NULL,'1','2022-05-11 13:40:19','2023-01-21 10:11:39',NULL),(63,'footer','frontend/frontend/footer','Frontend','49',NULL,'1','2022-05-11 13:41:07','2023-01-21 10:11:39',NULL),(64,'blog','blog/blog','Blog','','1','1','2022-05-11 13:45:52','2023-01-21 10:11:39',NULL),(65,'add_blog','blog/blog/add','Blog','64',NULL,'1','2022-05-11 13:51:33','2023-01-21 10:11:39',NULL),(66,'blog_list','blog/blog/list','Blog','64',NULL,'1','2022-05-11 13:52:14','2023-01-21 10:11:39',NULL),(70,'page','page/page','Page','','1','1','2022-05-11 13:59:30','2023-01-21 10:11:39',NULL),(71,'about','page/page/about','Page','70',NULL,'1','2022-05-11 14:00:09','2023-01-21 10:11:39',NULL),(72,'privacy','page/page/privacy','Page','70',NULL,'1','2022-05-11 14:01:10','2023-01-21 10:11:39',NULL),(73,'cookies','page/page/cookies','Page','70',NULL,'1','2022-05-11 14:01:48','2023-01-21 10:11:39',NULL),(74,'terms_conditions','page/page/termsandconditions','Page','70',NULL,'1','2022-05-11 14:02:54','2023-01-21 10:11:39',NULL),(75,'faq','page/page/faq','Page','70','1','1','2022-05-11 14:04:18','2023-01-21 10:11:39',NULL),(76,'page_setup','page/page/faq/pagesetup','Page','75',NULL,'1','2022-05-11 14:05:22','2023-01-21 10:11:39',NULL),(77,'add_question','page/page/faq/question/add','Page','75',NULL,'1','2022-05-11 14:06:42','2023-01-21 10:11:39',NULL),(78,'question_list','page/page/faq/question/list','Page','75',NULL,'1','2022-05-11 14:07:23','2023-01-21 10:11:39',NULL),(80,'language','language/language','Localize','','1','1','2022-05-11 14:21:36','2023-01-21 10:11:39',NULL),(81,'language_add','language/language/add','Localize','80',NULL,'1','2022-05-11 14:22:56','2023-01-21 10:11:39',NULL),(82,'language_list','language/language/list','Localize','80',NULL,'1','2022-05-11 14:24:51','2023-01-21 10:11:39',NULL),(84,'passanger','passanger/passanger','Passanger','','1','1','2022-05-11 14:30:25','2023-01-21 10:11:39',NULL),(85,'add_passanger','passanger/passanger/add','Passanger','84',NULL,'1','2022-05-11 14:38:08','2023-01-21 10:11:39',NULL),(86,'passanger_list','passanger/passanger/list','Passanger','84',NULL,'1','2022-05-11 14:39:00','2023-01-21 10:11:39',NULL),(87,'inquiry','inquiry/inquiry','Inquiry','','1','1','2022-05-11 14:40:40','2023-01-21 10:11:39',NULL),(88,'inquiry_list','inquiry/inquiry/list','Inquiry','87',NULL,'1','2022-05-11 14:41:09','2023-01-21 10:11:39',NULL),(89,'payment_method','paymentmethod/paymentmethod','Paymethod','','1','1','2022-05-11 14:46:12','2023-01-21 10:11:39',NULL),(90,'add_payment_method','paymentmethod/paymentmethod/add','Paymethod','89',NULL,'1','2022-05-11 14:46:59','2023-01-21 10:11:39',NULL),(91,'payment_method_list','paymentmethod/paymentmethod/list','Paymethod','89',NULL,'1','2022-05-11 14:47:55','2023-01-21 10:11:39',NULL),(93,'add_payment_gateway','paymentgateway/paymentgateway/add','Paymethod','89',NULL,'1','2022-05-11 14:51:36','2023-01-21 10:11:39',NULL),(94,'payment_gateway_list','paymentgateway/paymentgateway/list','Paymethod','89',NULL,'1','2022-05-11 14:52:44','2023-01-21 10:11:39',NULL),(95,'rating','rating/rating','Rating','','1','1','2022-05-11 14:56:55','2023-01-21 10:11:39',NULL),(96,'rating_list','rating/rating/list','Rating','95',NULL,'1','2022-05-11 14:57:43','2023-01-21 10:11:39',NULL),(97,'report','report/report','Report','','1','1','2022-05-11 15:00:39','2023-01-21 10:11:39',NULL),(98,'ticket_sold','report/report/ticket/sold','Report','97',NULL,'1','2022-05-11 15:01:54','2023-01-21 10:11:39',NULL),(99,'agent_report','report/report/agent/report','Report','97',NULL,'1','2022-05-11 15:03:10','2023-01-21 10:11:39',NULL),(100,'role','role/role','Role','','1','1','2022-05-11 15:04:51','2023-01-21 10:11:39',NULL),(101,'add_role','role/role/add','Role','100',NULL,'1','2022-05-11 15:05:28','2023-01-21 10:11:39',NULL),(102,'role_list','role/role/list','Role','100',NULL,'1','2022-05-11 15:06:22','2023-01-21 10:11:39',NULL),(103,'add_menu','role/role/menu/add','Role','100',NULL,'1','2022-05-11 15:07:04','2023-01-21 10:11:39',NULL),(104,'menu_list','role/role/menu/list','Role','100',NULL,'1','2022-05-11 15:08:08','2023-01-21 10:11:39',NULL),(105,'add_permission','role/role/permission/add','Role','100',NULL,'1','2022-05-11 15:09:01','2023-01-21 10:11:39',NULL),(106,'permission_list','role/role/permission/list','Role','100',NULL,'1','2022-05-11 15:10:09','2023-01-21 10:11:39',NULL),(107,'tax','tax/tax','Tax','','1','1','2022-05-11 15:12:23','2023-01-21 10:11:39',NULL),(108,'add_tax','tax/tax/add','Tax','107',NULL,'1','2022-05-11 15:12:57','2023-01-21 10:11:39',NULL),(109,'tax_list','tax/tax/list','Tax','107',NULL,'1','2022-05-11 15:13:26','2023-01-21 10:11:39',NULL),(113,'trip','trip/trip','Trip','','1','1','2022-05-11 15:29:10','2023-01-21 10:11:39',NULL),(114,'add_trip','trip/trip/add','Trip','113',NULL,'1','2022-05-11 15:29:31','2023-01-21 10:11:39',NULL),(115,'trip_list','trip/trip/list','Trip','113',NULL,'1','2022-05-11 15:30:06','2023-01-21 10:11:39',NULL),(116,'add_facility','trip/trip/facility/add','Trip','113',NULL,'1','2022-05-11 15:37:22','2023-01-21 10:11:39',NULL),(117,'facility_list','trip/trip/facility/list','Trip','113',NULL,'1','2022-05-11 15:37:59','2023-01-21 10:11:39',NULL),(118,'website_setting','websitesetting/websitesetting','Website','','1','1','2022-05-11 15:52:32','2023-01-21 10:11:39',NULL),(119,'webconfig','websitesetting/websitesetting/webconfig','Website','118',NULL,'1','2022-05-11 15:53:36','2023-01-21 10:11:39',NULL),(120,'db_backup','websitesetting/websitesetting/db/backup','Website','118',NULL,'1','2022-05-11 15:54:24','2023-01-21 10:11:39',NULL),(121,'add_social_media','websitesetting/websitesetting/social/media/add','Website','118',NULL,'1','2022-05-11 15:55:34','2023-01-21 10:11:39',NULL),(122,'social_media_list','websitesetting/websitesetting/social/media/list','Website','118',NULL,'1','2022-05-11 15:56:02','2023-01-21 10:11:39',NULL),(123,'email','websitesetting/websitesetting/email','Website','118',NULL,'1','2022-05-19 13:01:27','2023-01-21 10:11:39',NULL),(124,'subscribe_list','websitesetting/websitesetting/subscribe','Website','118',NULL,'1','2022-05-22 11:08:10','2023-01-21 10:11:39',NULL),(125,'add_language_string','language/language/string/add','Localize','80',NULL,'1','2022-06-13 17:35:26','2023-01-21 10:11:39',NULL),(126,'agent_payment','account/account/agent/payment','Account','15',NULL,'1','2022-06-13 17:35:26','2023-01-21 10:11:39',NULL),(127,'discount_round_trip','trip/trip/discount/round/trip','Trip','113',NULL,'1','2022-06-13 17:35:26','2023-01-21 10:11:39',NULL),(128,'sum_report','report/report/sum/report','Report','97',NULL,'1','2022-06-13 17:35:26','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021-09-01-130311','App\\Database\\Migrations\\AddUser','default','App',1697532122,1),(2,'2021-09-01-133423','App\\Database\\Migrations\\AddUserDetail','default','App',1697532122,1),(3,'2021-09-02-071454','App\\Database\\Migrations\\AddBlog','default','App',1697532122,1),(4,'2021-09-02-073805','App\\Database\\Migrations\\AddSocial','default','App',1697532122,1),(5,'2021-10-04-104350','Modules\\Location\\Database\\Migrations\\Location','default','Modules\\Location',1697532122,1),(6,'2021-10-04-104352','Modules\\Location\\Database\\Migrations\\AddCountry','default','Modules\\Location',1697532122,1),(7,'2021-10-07-083225','Modules\\Fleet\\Database\\Migrations\\Fleet','default','Modules\\Fleet',1697532122,1),(8,'2021-10-07-090244','Modules\\Fleet\\Database\\Migrations\\Vehicle','default','Modules\\Fleet',1697532122,1),(9,'2021-10-12-133832','Modules\\Employee\\Database\\Migrations\\EmployeeType','default','Modules\\Employee',1697532122,1),(10,'2021-10-12-134114','Modules\\Employee\\Database\\Migrations\\Employee','default','Modules\\Employee',1697532122,1),(11,'2021-10-12-134611','Modules\\Schedule\\Database\\Migrations\\Schedule','default','Modules\\Schedule',1697532123,1),(12,'2021-10-12-135011','Modules\\Trip\\Database\\Migrations\\Trip','default','Modules\\Trip',1697532123,1),(13,'2021-10-12-135100','Modules\\Trip\\Database\\Migrations\\Subtrip','default','Modules\\Trip',1697532123,1),(14,'2021-10-16-071059','Modules\\Trip\\Database\\Migrations\\Stuffassign','default','Modules\\Trip',1697532123,1),(15,'2021-10-26-050430','Modules\\Trip\\Database\\Migrations\\Facility','default','Modules\\Trip',1697532123,1),(16,'2021-10-30-130328','Modules\\Fleet\\Database\\Migrations\\Vehicalimg','default','Modules\\Fleet',1697532123,1),(17,'2021-10-31-122119','Modules\\Location\\Database\\Migrations\\Stand','default','Modules\\Location',1697532123,1),(18,'2021-10-31-122120','Modules\\Trip\\Database\\Migrations\\Pickdrop','default','Modules\\Trip',1697532123,1),(19,'2021-10-31-133019','Modules\\Schedule\\Database\\Migrations\\Schedulefilter','default','Modules\\Schedule',1697532123,1),(20,'2021-11-01-101329','Modules\\Tax\\Database\\Migrations\\Tax','default','Modules\\Tax',1697532123,1),(21,'2021-11-06-055249','Modules\\Frontend\\Database\\Migrations\\SectionOneHome','default','Modules\\Frontend',1697532123,1),(22,'2021-11-06-100240','Modules\\Frontend\\Database\\Migrations\\SectionTwoWorkFlow','default','Modules\\Frontend',1697532123,1),(23,'2021-11-06-105346','Modules\\Frontend\\Database\\Migrations\\SectionTwoDetail','default','Modules\\Frontend',1697532123,1),(24,'2021-11-06-134135','Modules\\Frontend\\Database\\Migrations\\SectionThreeHeading','default','Modules\\Frontend',1697532123,1),(25,'2021-11-06-134447','Modules\\Frontend\\Database\\Migrations\\SectionFourHeading','default','Modules\\Frontend',1697532123,1),(26,'2021-11-07-033103','Modules\\Frontend\\Database\\Migrations\\SectionFourDetail','default','Modules\\Frontend',1697532123,1),(27,'2021-11-07-060057','Modules\\Frontend\\Database\\Migrations\\SectionFiveApp','default','Modules\\Frontend',1697532123,1),(28,'2021-11-07-065437','Modules\\Frontend\\Database\\Migrations\\SectionSixHead','default','Modules\\Frontend',1697532123,1),(29,'2021-11-07-071506','Modules\\Frontend\\Database\\Migrations\\SectionSeven','default','Modules\\Frontend',1697532123,1),(30,'2021-11-09-103602','Modules\\Role\\Database\\Migrations\\Role','default','Modules\\Role',1697532123,1),(31,'2021-11-10-055233','Modules\\Localize\\Database\\Migrations\\Localize','default','Modules\\Localize',1697532123,1),(32,'2021-11-11-110132','Modules\\User\\Database\\Migrations\\User','default','Modules\\User',1697532123,1),(33,'2021-11-11-110140','Modules\\User\\Database\\Migrations\\UserDetail','default','Modules\\User',1697532123,1),(34,'2021-11-12-084716','Modules\\Blog\\Database\\Migrations\\Blog','default','Modules\\Blog',1697532123,1),(35,'2021-11-12-120908','Modules\\Ticket\\Database\\Migrations\\Ticket','default','Modules\\Ticket',1697532123,1),(36,'2021-11-13-103849','Modules\\Paymethod\\Database\\Migrations\\Paymethod','default','Modules\\Paymethod',1697532123,1),(37,'2021-11-17-090627','Modules\\Ticket\\Database\\Migrations\\Maxtime','default','Modules\\Ticket',1697532123,1),(38,'2021-11-17-205401','Modules\\Ticket\\Database\\Migrations\\Partialpaid','default','Modules\\Ticket',1697532123,1),(39,'2021-11-17-205419','Modules\\Ticket\\Database\\Migrations\\Journeylist','default','Modules\\Ticket',1697532123,1),(40,'2021-11-29-070741','Modules\\Account\\Database\\Migrations\\Account','default','Modules\\Account',1697532123,1),(41,'2021-12-02-065144','Modules\\Agent\\Database\\Migrations\\Agent','default','Modules\\Agent',1697532123,1),(42,'2021-12-05-132643','Modules\\Agent\\Database\\Migrations\\Agentcommission','default','Modules\\Agent',1697532123,1),(43,'2021-12-13-132110','Modules\\Website\\Database\\Migrations\\Websetting','default','Modules\\Website',1697532123,1),(44,'2021-12-18-073927','Modules\\Website\\Database\\Migrations\\Socialmedia','default','Modules\\Website',1697532123,1),(45,'2021-12-18-073948','Modules\\Website\\Database\\Migrations\\Footer','default','Modules\\Website',1697532123,1),(46,'2021-12-18-111456','Modules\\Add\\Database\\Migrations\\Add','default','Modules\\Add',1697532123,1),(47,'2021-12-19-041240','Modules\\Page\\Database\\Migrations\\About','default','Modules\\Page',1697532123,1),(48,'2021-12-19-041255','Modules\\Page\\Database\\Migrations\\Privacy','default','Modules\\Page',1697532123,1),(49,'2021-12-19-041316','Modules\\Page\\Database\\Migrations\\Cooke','default','Modules\\Page',1697532123,1),(50,'2021-12-19-041608','Modules\\Page\\Database\\Migrations\\Terms','default','Modules\\Page',1697532123,1),(51,'2021-12-19-041623','Modules\\Page\\Database\\Migrations\\Faq','default','Modules\\Page',1697532123,1),(52,'2021-12-19-041635','Modules\\Page\\Database\\Migrations\\Question','default','Modules\\Page',1697532123,1),(53,'2022-01-05-054858','Modules\\Inquiry\\Database\\Migrations\\Inquiry','default','Modules\\Inquiry',1697532123,1),(54,'2022-01-25-051140','Modules\\Paymethod\\Database\\Migrations\\Stripe','default','Modules\\Paymethod',1697532123,1),(55,'2022-01-25-061628','Modules\\Paymethod\\Database\\Migrations\\PaymentGateway','default','Modules\\Paymethod',1697532123,1),(56,'2022-01-25-071224','Modules\\Paymethod\\Database\\Migrations\\Razor','default','Modules\\Paymethod',1697532123,1),(57,'2022-01-25-081059','Modules\\Paymethod\\Database\\Migrations\\Paypal','default','Modules\\Paymethod',1697532123,1),(58,'2022-01-25-094840','Modules\\Paymethod\\Database\\Migrations\\Paystack','default','Modules\\Paymethod',1697532123,1),(59,'2022-02-10-111149','Modules\\Coupon\\Database\\Migrations\\Coupon','default','Modules\\Coupon',1697532124,1),(60,'2022-02-13-083313','Modules\\Fitness\\Database\\Migrations\\Fitness','default','Modules\\Fitness',1697532124,1),(61,'2022-02-14-084647','Modules\\Agent\\Database\\Migrations\\Agenttotal','default','Modules\\Agent',1697532124,1),(62,'2022-02-14-084724','Modules\\Paymethod\\Database\\Migrations\\Gatewaytotal','default','Modules\\Paymethod',1697532124,1),(63,'2022-02-15-095806','Modules\\Paymethod\\Database\\Migrations\\Paymethodtotal','default','Modules\\Paymethod',1697532124,1),(64,'2022-02-15-132234','Modules\\Account\\Database\\Migrations\\Accounthead','default','Modules\\Account',1697532124,1),(65,'2022-02-17-104444','Modules\\Coupon\\Database\\Migrations\\Coupondiscount','default','Modules\\Coupon',1697532124,1),(66,'2022-02-17-111312','Modules\\Ticket\\Database\\Migrations\\Refund','default','Modules\\Ticket',1697532124,1),(67,'2022-02-17-111325','Modules\\Ticket\\Database\\Migrations\\Cancel','default','Modules\\Ticket',1697532124,1),(68,'2022-03-09-081945','Modules\\Localize\\Database\\Migrations\\Langstring','default','Modules\\Localize',1697532124,1),(69,'2022-03-09-082029','Modules\\Localize\\Database\\Migrations\\Lngstngvalue','default','Modules\\Localize',1697532124,1),(70,'2022-03-15-042559','Modules\\Role\\Database\\Migrations\\Menu','default','Modules\\Role',1697532124,1),(71,'2022-03-20-043551','Modules\\Role\\Database\\Migrations\\Permission','default','Modules\\Role',1697532124,1),(72,'2022-03-23-071536','Modules\\Rating\\Database\\Migrations\\Rating','default','Modules\\Rating',1697532124,1),(73,'2022-05-09-095509','Modules\\Passanger\\Database\\Migrations\\Socialsignin','default','Modules\\Passanger',1697532124,1),(74,'2022-05-19-041442','Modules\\Website\\Database\\Migrations\\Email','default','Modules\\Website',1697532124,1),(75,'2022-05-19-042028','Modules\\Website\\Database\\Migrations\\Subscribe','default','Modules\\Website',1697532124,1),(76,'2022-12-07-111532','Modules\\Account\\Database\\Migrations\\Payagent','default','Modules\\Account',1697532124,1),(77,'2022-12-13-085409','Modules\\Trip\\Database\\Migrations\\Roundtripdiscount','default','Modules\\Trip',1697532124,1),(78,'2023-01-16-070606','Modules\\Paymethod\\Database\\Migrations\\SslCommerz','default','Modules\\Paymethod',1697532124,1),(79,'2023-01-21-055842','App\\Database\\Migrations\\AddCurrencies','default','App',1697532124,1),(80,'2023-01-21-060511','App\\Database\\Migrations\\AddFonts','default','App',1697532124,1),(81,'2023-01-21-060830','App\\Database\\Migrations\\AddLanguages','default','App',1697532124,1),(82,'2023-01-21-062833','App\\Database\\Migrations\\AddTimezone','default','App',1697532124,1),(83,'2023-01-22-100109','Modules\\Paymethod\\Database\\Migrations\\FlutterWave','default','Modules\\Paymethod',1697532124,1),(84,'2023-02-08-112553','Modules\\Ticket\\Database\\Migrations\\TemporaryBook','default','Modules\\Ticket',1697532124,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partialpaids`
--

DROP TABLE IF EXISTS `partialpaids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partialpaids` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `passanger_id` int unsigned NOT NULL,
  `paidamount` tinytext NOT NULL,
  `pay_type_id` int DEFAULT NULL,
  `pay_method_id` int DEFAULT NULL,
  `payment_detail` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partialpaids_trip_id_foreign` (`trip_id`),
  KEY `partialpaids_subtrip_id_foreign` (`subtrip_id`),
  KEY `partialpaids_passanger_id_foreign` (`passanger_id`),
  CONSTRAINT `partialpaids_passanger_id_foreign` FOREIGN KEY (`passanger_id`) REFERENCES `users` (`id`),
  CONSTRAINT `partialpaids_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `partialpaids_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partialpaids`
--

LOCK TABLES `partialpaids` WRITE;
/*!40000 ALTER TABLE `partialpaids` DISABLE KEYS */;
INSERT INTO `partialpaids` VALUES (151,'TB8E4G57FO',23,38,170,'983',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:08:21','2023-01-21 10:11:39',NULL),(152,'TBFKS8YEBW',23,38,171,'500',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:15:21','2023-01-21 10:11:39',NULL),(153,'TBJ3D2RY0P',24,41,170,'896',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:16:50','2023-01-21 10:11:39',NULL),(154,'TBNYFQET3S',25,43,171,'600',1,NULL,'','2022-06-28 15:17:58','2023-01-21 10:11:39',NULL),(155,'TB76DFM1CA',24,40,171,'0',NULL,999,'This is pay details','2022-06-28 15:19:21','2023-01-21 10:11:39',NULL),(156,'TB76DFM1CA',24,40,171,'500',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:19:44','2023-01-21 10:11:39',NULL),(157,'TBXT8KPHV2',24,41,168,'896',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:20:54','2023-01-21 10:11:39',NULL),(158,'TBA9X180HU',23,38,168,'1008',1,NULL,'Lorme Ipsum Lorme','2022-06-28 15:22:26','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `partialpaids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payagents`
--

DROP TABLE IF EXISTS `payagents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payagents` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int unsigned NOT NULL,
  `amount` text,
  `status` varchar(100) DEFAULT NULL,
  `approved_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payagents_agent_id_foreign` (`agent_id`),
  CONSTRAINT `payagents_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payagents`
--

LOCK TABLES `payagents` WRITE;
/*!40000 ALTER TABLE `payagents` DISABLE KEYS */;
/*!40000 ALTER TABLE `payagents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentgateways`
--

DROP TABLE IF EXISTS `paymentgateways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paymentgateways` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentgateways`
--

LOCK TABLES `paymentgateways` WRITE;
/*!40000 ALTER TABLE `paymentgateways` DISABLE KEYS */;
INSERT INTO `paymentgateways` VALUES (1,'paypal','1','2022-01-25 14:17:07','2023-01-21 10:11:39',NULL),(2,'paystack','1','2022-01-25 15:00:52','2023-01-21 10:11:39',NULL),(3,'stripe','1','2022-01-25 15:21:40','2023-01-21 10:11:39',NULL),(4,'razorpay','1','2022-01-25 15:23:00','2023-01-21 10:11:39',NULL),(5,'sslcommerz','1','2022-01-25 15:23:00','2023-01-21 10:11:39',NULL),(6,'flutterwave','1','2022-01-25 15:23:00','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `paymentgateways` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymethods`
--

DROP TABLE IF EXISTS `paymethods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paymethods` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymethods`
--

LOCK TABLES `paymethods` WRITE;
/*!40000 ALTER TABLE `paymethods` DISABLE KEYS */;
INSERT INTO `paymethods` VALUES (1,'Cash','1','2022-02-01 16:19:52','2023-01-21 10:11:39',NULL),(2,'Bank','1','2022-02-01 16:20:01','2023-01-21 10:11:39',NULL),(3,'Eft','1','2022-02-01 16:20:11','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `paymethods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymethodtotals`
--

DROP TABLE IF EXISTS `paymethodtotals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paymethodtotals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` tinytext NOT NULL,
  `paymethod_id` int unsigned NOT NULL,
  `amount` text NOT NULL,
  `detail` text,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paymethodtotals_paymethod_id_foreign` (`paymethod_id`),
  KEY `paymethodtotals_trip_id_foreign` (`trip_id`),
  KEY `paymethodtotals_subtrip_id_foreign` (`subtrip_id`),
  KEY `paymethodtotals_user_id_foreign` (`user_id`),
  CONSTRAINT `paymethodtotals_paymethod_id_foreign` FOREIGN KEY (`paymethod_id`) REFERENCES `paymethods` (`id`),
  CONSTRAINT `paymethodtotals_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `paymethodtotals_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  CONSTRAINT `paymethodtotals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymethodtotals`
--

LOCK TABLES `paymethodtotals` WRITE;
/*!40000 ALTER TABLE `paymethodtotals` DISABLE KEYS */;
INSERT INTO `paymethodtotals` VALUES (88,'TB8E4G57FO',1,'983','Lorme Ipsum Lorme',23,38,1,'2022-06-28 15:08:21','2023-01-21 10:11:39',NULL),(89,'TBFKS8YEBW',1,'500','Lorme Ipsum Lorme',23,38,1,'2022-06-28 15:15:21','2023-01-21 10:11:39',NULL),(90,'TBJ3D2RY0P',1,'896','Lorme Ipsum Lorme',24,41,1,'2022-06-28 15:16:50','2023-01-21 10:11:39',NULL),(91,'TBNYFQET3S',1,'600','',25,43,1,'2022-06-28 15:17:58','2023-01-21 10:11:39',NULL),(92,'TB76DFM1CA',1,'500','Lorme Ipsum Lorme',24,40,1,'2022-06-28 15:19:44','2023-01-21 10:11:39',NULL),(93,'TBXT8KPHV2',1,'896','Lorme Ipsum Lorme',24,41,1,'2022-06-28 15:20:54','2023-01-21 10:11:39',NULL),(94,'TBA9X180HU',1,'1008','Lorme Ipsum Lorme',23,38,1,'2022-06-28 15:22:26','2023-01-21 10:11:39',NULL),(95,'TBA9X180HU',1,'100','Lorme Ipsum Lorme refund',23,38,1,'2022-06-28 15:23:04','2023-01-21 10:11:39',NULL),(96,'TBXT8KPHV2',1,'50','Lorme Ipsum Lorme cancel',24,41,1,'2022-06-28 15:23:32','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `paymethodtotals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paypals`
--

DROP TABLE IF EXISTS `paypals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paypals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `test_c_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_c_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marchantid` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paypals`
--

LOCK TABLES `paypals` WRITE;
/*!40000 ALTER TABLE `paypals` DISABLE KEYS */;
INSERT INTO `paypals` VALUES (1,'AXmEOzF1axI9l3VAyq-viSusE32eyUsnzwjiPpbQUHnpGNKN0EohDuLTPnSurb05itzji3h9Pr3Pkk4W','EHbAitoud-ZvwFb0Dk3Hu8p2p3VOpiL5sbZJNBbAYZHQkZy1BYO3tRhUsWtdWQs2dcN8KSItFDX0bjKE','AXmEOzF1axI9l3VAyq-viSusE32eyUsnzwjiPpbQUHnpGNKN0EohDuLTPnSurb05itzji3h9Pr3Pkk4W','EHbAitoud-ZvwFb0Dk3Hu8p2p3VOpiL5sbZJNBbAYZHQkZy1BYO3tRhUsWtdWQs2dcN8KSItFDX0bjKE','0','m@m.com','MVJBF4BQAU6ZN','2022-02-01 18:24:32','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `paypals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paystacks`
--

DROP TABLE IF EXISTS `paystacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paystacks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `test_p_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_p_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paystacks`
--

LOCK TABLES `paystacks` WRITE;
/*!40000 ALTER TABLE `paystacks` DISABLE KEYS */;
INSERT INTO `paystacks` VALUES (1,'pk_test_328da55755b88b1aaed96c5cda215b2fd887edb9','sk_test_71353c2613675acb967ea532f4c4c8105ea175b8','pk_test_328da55755b88b1aaed96c5cda215b2fd887edb9','sk_test_71353c2613675acb967ea532f4c4c8105ea175b8','1','2022-01-26 13:26:53','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `paystacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `menu_id` int unsigned NOT NULL,
  `menu_title` tinytext,
  `create` tinytext,
  `read` tinytext,
  `edit` tinytext,
  `delete` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_role_id_foreign` (`role_id`),
  KEY `permissions_user_id_foreign` (`user_id`),
  KEY `permissions_menu_id_foreign` (`menu_id`),
  CONSTRAINT `permissions_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1785 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (773,1,1,1,'ticket_booking','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(774,1,1,2,'book_ticket','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(775,1,1,3,'ticket_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(776,1,1,4,'journey_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(777,1,1,5,'refund_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(778,1,1,6,'cancel_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(779,1,1,7,'book_time','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(780,1,1,8,'add_booking_time','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(781,1,1,9,'book_time_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(782,1,1,12,'agent','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(783,1,1,13,'add_agent','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(784,1,1,14,'agent_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(785,1,1,15,'account','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(786,1,1,17,'add_transaction','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(787,1,1,18,'transaction_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(788,1,1,19,'location','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(789,1,1,20,'add_location','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(790,1,1,21,'location_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(791,1,1,22,'add_stand','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(792,1,1,23,'stand_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(793,1,1,24,'schedule','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(794,1,1,25,'add_schedule','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(795,1,1,26,'schedule_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(796,1,1,27,'add_schedule_filter','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(797,1,1,28,'schedule_filter_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(798,1,1,29,'advertisement','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(799,1,1,30,'add_advertisement','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(800,1,1,31,'advertisement_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(801,1,1,32,'coupon','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(802,1,1,33,'add_coupon','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(803,1,1,34,'coupon_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(804,1,1,36,'employee','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(805,1,1,37,'add_employee_type','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(806,1,1,38,'employee_type_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(807,1,1,39,'add_employee','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(808,1,1,40,'employee_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(809,1,1,41,'fitness','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(810,1,1,42,'add_fitness','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(811,1,1,43,'fitness_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(812,1,1,44,'fleet','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(813,1,1,45,'add_fleet','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(814,1,1,46,'fleet_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(815,1,1,47,'add_vehicle','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(816,1,1,48,'vehicle_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(817,1,1,49,'frontend','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(818,1,1,50,'sectionone','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(819,1,1,51,'sectiontwo','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(820,1,1,52,'sectiontwo_two','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(821,1,1,53,'how_works_add','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(822,1,1,54,'how_works_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(823,1,1,55,'sectionthree','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(824,1,1,56,'sectionfour','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(825,1,1,57,'sectionfour_four','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(826,1,1,58,'add_comment','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(827,1,1,59,'comment_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(828,1,1,60,'sectionfive','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(829,1,1,61,'sectionsix','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(830,1,1,62,'sectionseven','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(831,1,1,63,'footer','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(832,1,1,64,'blog','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(833,1,1,65,'add_blog','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(834,1,1,66,'blog_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(835,1,1,70,'page','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(836,1,1,71,'about','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(837,1,1,72,'privacy','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(838,1,1,73,'cookies','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(839,1,1,74,'terms_conditions','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(840,1,1,75,'faq','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(841,1,1,76,'page_setup','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(842,1,1,77,'add_question','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(843,1,1,78,'question_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(844,1,1,80,'language','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(845,1,1,81,'language_add','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(846,1,1,82,'language_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(847,1,1,84,'passanger','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(848,1,1,85,'add_passanger','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(849,1,1,86,'passanger_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(850,1,1,87,'inquiry','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(851,1,1,88,'inquiry_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(852,1,1,89,'payment_method','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(853,1,1,90,'add_payment_method','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(854,1,1,91,'payment_method_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(855,1,1,93,'add_payment_gateway','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(856,1,1,94,'payment_gateway_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(857,1,1,95,'rating','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(858,1,1,96,'rating_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(859,1,1,97,'report','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(860,1,1,98,'ticket_sold','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(861,1,1,99,'agent_report','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(862,1,1,100,'role','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(863,1,1,101,'add_role','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(864,1,1,102,'role_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(865,1,1,103,'add_menu','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(866,1,1,104,'menu_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(867,1,1,105,'add_permission','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(868,1,1,106,'permission_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(869,1,1,107,'tax','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(870,1,1,108,'add_tax','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(871,1,1,109,'tax_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(872,1,1,113,'trip','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(873,1,1,114,'add_trip','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(874,1,1,115,'trip_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(875,1,1,116,'add_facility','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(876,1,1,117,'facility_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(877,1,1,118,'website_setting','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(878,1,1,119,'webconfig','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(879,1,1,120,'db_backup','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(880,1,1,121,'add_social_media','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(881,1,1,122,'social_media_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(882,1,1,123,'email','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(883,1,1,124,'subscribe_list','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(884,1,1,125,'add_language_string','1','1','1','1','2022-06-13 17:48:10','2023-01-21 10:11:39',NULL),(1669,2,1,1,'ticket_booking','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1670,2,1,2,'book_ticket','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1671,2,1,3,'ticket_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1672,2,1,4,'journey_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1673,2,1,5,'refund_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1674,2,1,6,'cancel_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1675,2,1,7,'book_time','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1676,2,1,8,'add_booking_time','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1677,2,1,9,'book_time_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1678,2,1,12,'agent','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1679,2,1,13,'add_agent','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1680,2,1,14,'agent_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1681,2,1,15,'account','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1682,2,1,17,'add_transaction','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1683,2,1,18,'transaction_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1684,2,1,19,'location','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1685,2,1,20,'add_location','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1686,2,1,21,'location_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1687,2,1,22,'add_stand','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1688,2,1,23,'stand_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1689,2,1,24,'schedule','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1690,2,1,25,'add_schedule','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1691,2,1,26,'schedule_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1692,2,1,27,'add_schedule_filter','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1693,2,1,28,'schedule_filter_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1694,2,1,29,'advertisement','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1695,2,1,30,'add_advertisement','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1696,2,1,31,'advertisement_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1697,2,1,32,'coupon','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1698,2,1,33,'add_coupon','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1699,2,1,34,'coupon_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1700,2,1,36,'employee','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1701,2,1,37,'add_employee_type','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1702,2,1,38,'employee_type_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1703,2,1,39,'add_employee','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1704,2,1,40,'employee_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1705,2,1,41,'fitness','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1706,2,1,42,'add_fitness','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1707,2,1,43,'fitness_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1708,2,1,44,'fleet','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1709,2,1,45,'add_fleet','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1710,2,1,46,'fleet_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1711,2,1,47,'add_vehicle','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1712,2,1,48,'vehicle_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1713,2,1,49,'frontend','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1714,2,1,50,'sectionone','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1715,2,1,51,'sectiontwo','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1716,2,1,52,'sectiontwo_two','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1717,2,1,53,'how_works_add','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1718,2,1,54,'how_works_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1719,2,1,55,'sectionthree','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1720,2,1,56,'sectionfour','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1721,2,1,57,'sectionfour_four','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1722,2,1,58,'add_comment','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1723,2,1,59,'comment_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1724,2,1,60,'sectionfive','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1725,2,1,61,'sectionsix','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1726,2,1,62,'sectionseven','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1727,2,1,63,'footer','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1728,2,1,64,'blog','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1729,2,1,65,'add_blog','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1730,2,1,66,'blog_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1731,2,1,70,'page','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1732,2,1,71,'about','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1733,2,1,72,'privacy','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1734,2,1,73,'cookies','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1735,2,1,74,'terms_conditions','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1736,2,1,75,'faq','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1737,2,1,76,'page_setup','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1738,2,1,77,'add_question','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1739,2,1,78,'question_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1740,2,1,80,'language','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1741,2,1,81,'language_add','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1742,2,1,82,'language_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1743,2,1,84,'passanger','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1744,2,1,85,'add_passanger','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1745,2,1,86,'passanger_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1746,2,1,87,'inquiry','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1747,2,1,88,'inquiry_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1748,2,1,89,'payment_method','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1749,2,1,90,'add_payment_method','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1750,2,1,91,'payment_method_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1751,2,1,93,'add_payment_gateway','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1752,2,1,94,'payment_gateway_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1753,2,1,95,'rating','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1754,2,1,96,'rating_list','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1755,2,1,97,'report','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1756,2,1,98,'ticket_sold','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1757,2,1,99,'agent_report','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1758,2,1,100,'role','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1759,2,1,101,'add_role','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1760,2,1,102,'role_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1761,2,1,103,'add_menu','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1762,2,1,104,'menu_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1763,2,1,105,'add_permission','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1764,2,1,106,'permission_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1765,2,1,107,'tax','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1766,2,1,108,'add_tax','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1767,2,1,109,'tax_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1768,2,1,113,'trip','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1769,2,1,114,'add_trip','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1770,2,1,115,'trip_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1771,2,1,116,'add_facility','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1772,2,1,117,'facility_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1773,2,1,118,'website_setting','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1774,2,1,119,'webconfig','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1775,2,1,120,'db_backup','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1776,2,1,121,'add_social_media','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1777,2,1,122,'social_media_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1778,2,1,123,'email','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1779,2,1,124,'subscribe_list','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1780,2,1,125,'add_language_string','0','0','0','0','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1781,1,1,125,'add_language_string','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1782,1,1,126,'agent_payment','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1783,1,1,127,'discount_round_trip','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL),(1784,1,1,128,'sum_report','1','1','1','1','2022-06-27 17:28:34','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pickdrops`
--

DROP TABLE IF EXISTS `pickdrops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pickdrops` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `trip_id` int unsigned NOT NULL,
  `stand_id` int unsigned NOT NULL,
  `time` tinytext NOT NULL,
  `type` int NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pickdrops_trip_id_foreign` (`trip_id`),
  KEY `pickdrops_stand_id_foreign` (`stand_id`),
  CONSTRAINT `pickdrops_stand_id_foreign` FOREIGN KEY (`stand_id`) REFERENCES `stands` (`id`),
  CONSTRAINT `pickdrops_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pickdrops`
--

LOCK TABLES `pickdrops` WRITE;
/*!40000 ALTER TABLE `pickdrops` DISABLE KEYS */;
INSERT INTO `pickdrops` VALUES (91,22,16,'07:00AM',1,'lorem ipsum','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(92,22,15,'07:30AM',1,'lorem ipsum','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(93,22,20,'12:00PM',0,'lorem ipsum','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(94,22,23,'03:00PM',0,'lorem ipsum','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(95,23,17,'09:00AM',1,'lorem ipsum','2022-06-27 17:50:49','2023-01-21 10:11:39',NULL),(96,23,23,'05:00PM',0,'lorem ipsum','2022-06-27 17:50:49','2023-01-21 10:11:39',NULL),(97,24,16,'10:00PM',1,'lorem ipsum','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(98,24,15,'11:00PM',1,'lorem ipsum','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(99,24,24,'05:00AM',0,'lorem ipsum','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(100,24,23,'06:00AM',0,'lorem ipsum','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(101,25,17,'11:00PM',1,'lorem ipsum','2022-06-27 18:04:23','2023-01-21 10:11:39',NULL),(102,25,26,'07:00PM',0,'lorem ipsum','2022-06-27 18:04:23','2023-01-21 10:11:39',NULL),(103,26,26,'09:30AM',1,'lorem ipsum','2022-06-27 18:16:38','2023-01-21 10:11:39',NULL),(104,26,16,'05:30PM',0,'lorem ipsum','2022-06-27 18:16:38','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `pickdrops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privacies`
--

DROP TABLE IF EXISTS `privacies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `privacies` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privacies`
--

LOCK TABLES `privacies` WRITE;
/*!40000 ALTER TABLE `privacies` DISABLE KEYS */;
INSERT INTO `privacies` VALUES (1,'Privacy Page Title Lorem ipsum','Privacy Page sub-Title Lorem Ipsum','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2021-12-19 13:37:38','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `privacies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `comments` text,
  `rating` double NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_id` (`booking_id`),
  KEY `ratings_trip_id_foreign` (`trip_id`),
  KEY `ratings_subtrip_id_foreign` (`subtrip_id`),
  KEY `ratings_user_id_foreign` (`user_id`),
  CONSTRAINT `ratings_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `ratings_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `razors`
--

DROP TABLE IF EXISTS `razors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `razors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `test_s_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `razors`
--

LOCK TABLES `razors` WRITE;
/*!40000 ALTER TABLE `razors` DISABLE KEYS */;
INSERT INTO `razors` VALUES (1,'rzp_test_nv8ESySdZ6Gaqq','rzp_test_nv8ESySdZ6Gaqq','0','2022-02-01 11:41:07','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `razors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refunds`
--

DROP TABLE IF EXISTS `refunds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `refunds` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `refund_fee` varchar(100) DEFAULT NULL,
  `pay_type_id` varchar(100) DEFAULT NULL,
  `track_table_id` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `detail` tinytext,
  `refund_by` int unsigned NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `refunds_refund_by_foreign` (`refund_by`),
  CONSTRAINT `refunds_refund_by_foreign` FOREIGN KEY (`refund_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refunds`
--

LOCK TABLES `refunds` WRITE;
/*!40000 ALTER TABLE `refunds` DISABLE KEYS */;
INSERT INTO `refunds` VALUES (6,'TBA9X180HU','100','1','127','ticket','Lorme Ipsum Lorme refund',1,'2022-06-28 15:23:04','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `refunds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Supper Admin','1','2021-11-11 04:25:19','2023-01-21 10:11:39',NULL),(2,'Agent','1','2021-11-11 04:25:55','2023-01-21 10:11:39',NULL),(3,'Passanger','1','2021-11-11 04:26:08','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roundtripdiscounds`
--

DROP TABLE IF EXISTS `roundtripdiscounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roundtripdiscounds` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `discountrate` int NOT NULL,
  `status` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roundtripdiscounds`
--

LOCK TABLES `roundtripdiscounds` WRITE;
/*!40000 ALTER TABLE `roundtripdiscounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `roundtripdiscounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulefilters`
--

DROP TABLE IF EXISTS `schedulefilters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedulefilters` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `type` int NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulefilters`
--

LOCK TABLES `schedulefilters` WRITE;
/*!40000 ALTER TABLE `schedulefilters` DISABLE KEYS */;
INSERT INTO `schedulefilters` VALUES (14,'06:00 AM','09:30 AM',1,'06:00 AM-09:30 AM','2022-06-27 16:36:16','2023-01-21 10:11:39',NULL),(15,'09:00 AM','11:00 AM',1,'09:00 AM-11:00 AM','2022-06-27 16:37:24','2023-01-21 10:11:39',NULL),(16,'01:00 PM','03:00 PM',0,'01:00 PM-03:00 PM','2022-06-27 16:37:45','2023-01-21 10:11:39',NULL),(17,'03:00 PM','06:00 PM',0,'03:00 PM-06:00 PM','2022-06-27 16:38:10','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `schedulefilters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedules` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedules`
--

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
INSERT INTO `schedules` VALUES (8,'07:00 PM','03:00 PM','','2022-06-27 14:33:16','2023-01-21 10:11:39',NULL),(9,'07:30 AM','03:30 PM','','2022-06-27 14:34:02','2023-01-21 10:11:39',NULL),(10,'09:00 AM','05:00 PM','','2022-06-27 14:34:45','2023-01-21 10:11:39',NULL),(11,'09:30 AM','05:30 PM','','2022-06-27 14:35:26','2023-01-21 10:11:39',NULL),(12,'10:00 PM','06:00 AM','','2022-06-27 14:36:21','2023-01-21 10:11:39',NULL),(13,'11:00 PM','07:00 AM','','2022-06-27 14:37:00','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_five_app`
--

DROP TABLE IF EXISTS `section_five_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_five_app` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `image` tinytext NOT NULL,
  `button_one_status` int NOT NULL,
  `button_one_link` tinytext NOT NULL,
  `button_two_status` int NOT NULL,
  `button_two_link` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_five_app`
--

LOCK TABLES `section_five_app` WRITE;
/*!40000 ALTER TABLE `section_five_app` DISABLE KEYS */;
INSERT INTO `section_five_app` VALUES (1,'Have you tried ourmobile app? ','World’s leading tour and travels Booking website,Over30,000 packages worldwide. Book travel packages andenjoy your holidays with distinctive experience','image/frontend/1656312221_813a7706eedaccfc5be7.png',1,'https://www.apple.com/app-store/',0,'https://play.google.com/store?hl=en_US&gl=US','2022-06-27 06:43:41','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_five_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_four_comment`
--

DROP TABLE IF EXISTS `section_four_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_four_comment` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_four_comment`
--

LOCK TABLES `section_four_comment` WRITE;
/*!40000 ALTER TABLE `section_four_comment` DISABLE KEYS */;
INSERT INTO `section_four_comment` VALUES (1,'Customer Testimonials rr','Read what our customers have to say about our fleet and services. ter','2021-11-07 11:50:18','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_four_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_four_detail`
--

DROP TABLE IF EXISTS `section_four_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_four_detail` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `person_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `person_detail` varchar(100) NOT NULL,
  `image` tinytext,
  `serial` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_four_detail`
--

LOCK TABLES `section_four_detail` WRITE;
/*!40000 ALTER TABLE `section_four_detail` DISABLE KEYS */;
INSERT INTO `section_four_detail` VALUES (11,'Carter','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','fugiat voluptas ducimus','image/frontend/1656312470_507a31610b879a560a11.jpg',6,'2022-06-27 06:47:50','2023-01-21 10:11:39',NULL),(12,'Helen','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','ad aut molestiae','image/frontend/1656312485_f85fdb956d920b2e9f73.jpg',5,'2022-06-27 06:48:05','2023-01-21 10:11:39',NULL),(13,'Jordyn','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','ipsum qui distinctio','image/frontend/1656312498_d4f4fa227513a1c8be6c.jpg',7,'2022-06-27 06:48:18','2023-01-21 10:11:39',NULL),(14,'Jennie','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','temporibus ad earum','image/frontend/1656312511_3e377bc7406f338d6fd4.jpg',6,'2022-06-27 06:48:31','2023-01-21 10:11:39',NULL),(15,'Martin','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','ipsa totam iure','image/frontend/1656312526_ea1818ddab2aefe886ac.jpg',2,'2022-06-27 06:48:46','2023-01-21 10:11:39',NULL),(16,'Oren','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','nulla molestias et','image/frontend/1656312539_977d32df652c2a05538c.jpg',5,'2022-06-27 06:48:59','2023-01-21 10:11:39',NULL),(17,'Dawson','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','ullam quo praesentium','image/frontend/1656312552_563bd6745369b85caa4d.jpg',6,'2022-06-27 06:49:12','2023-01-21 10:11:39',NULL),(18,'Colton','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','error enim id','image/frontend/1656312567_8ed935ef0b22e1827d49.jpg',5,'2022-06-27 06:49:27','2023-01-21 10:11:39',NULL),(19,'Leland','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','autem eum facilis','image/frontend/1656312580_29ad0457186cccd5c484.jpg',3,'2022-06-27 06:49:40','2023-01-21 10:11:39',NULL),(21,'test','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','sdfafdf','image/frontend/1656312593_b42da804665c1456a7fb.jpg',19,'2022-06-27 06:49:53','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_four_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_one_home`
--

DROP TABLE IF EXISTS `section_one_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_one_home` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `button_text` varchar(100) NOT NULL,
  `image` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_one_home`
--

LOCK TABLES `section_one_home` WRITE;
/*!40000 ALTER TABLE `section_one_home` DISABLE KEYS */;
INSERT INTO `section_one_home` VALUES (4,'BOOK YOUR BUS TICKET ','Choose Your Destinations And Dates To Reserve A Ticket ','Book Now','image/frontend/1656311237_5a3bdfeb6b04219223de.jpg','2022-06-27 06:27:17','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_one_home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_seven_subscrib`
--

DROP TABLE IF EXISTS `section_seven_subscrib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_seven_subscrib` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_seven_subscrib`
--

LOCK TABLES `section_seven_subscrib` WRITE;
/*!40000 ALTER TABLE `section_seven_subscrib` DISABLE KEYS */;
INSERT INTO `section_seven_subscrib` VALUES (1,'Never miss an offer','Subscribe and be the first to receive our exclusive offers','image/frontend/1656311736_484a848874ed9fd60f60.png','2022-06-27 06:35:36','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_seven_subscrib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_six_blog`
--

DROP TABLE IF EXISTS `section_six_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_six_blog` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_six_blog`
--

LOCK TABLES `section_six_blog` WRITE;
/*!40000 ALTER TABLE `section_six_blog` DISABLE KEYS */;
INSERT INTO `section_six_blog` VALUES (1,'Travel Blog','Book cheap Trio on your favourite Buses','2021-11-07 13:06:43','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_six_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_three_heading`
--

DROP TABLE IF EXISTS `section_three_heading`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_three_heading` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_three_heading`
--

LOCK TABLES `section_three_heading` WRITE;
/*!40000 ALTER TABLE `section_three_heading` DISABLE KEYS */;
INSERT INTO `section_three_heading` VALUES (1,'this is sub trip ','this is test ','2021-11-07 11:56:30','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_three_heading` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_two_detail`
--

DROP TABLE IF EXISTS `section_two_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_two_detail` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `button_text` varchar(100) NOT NULL,
  `image` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_two_detail`
--

LOCK TABLES `section_two_detail` WRITE;
/*!40000 ALTER TABLE `section_two_detail` DISABLE KEYS */;
INSERT INTO `section_two_detail` VALUES (4,'Book Online','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','Read More','image/frontend/1656312863_36111e139f2e271f49ae.png','2022-06-27 06:55:00','2023-01-21 10:11:39',NULL),(5,'Payment','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','Read More','image/frontend/1656312982_4162a886de1c6071373d.png','2022-06-27 06:56:22','2023-01-21 10:11:39',NULL),(6,'Get Ticket','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>\r\n','Read More','image/frontend/1656313026_728637e0091e910fceab.png','2022-06-27 06:57:06','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_two_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_two_work_flow`
--

DROP TABLE IF EXISTS `section_two_work_flow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section_two_work_flow` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_two_work_flow`
--

LOCK TABLES `section_two_work_flow` WRITE;
/*!40000 ALTER TABLE `section_two_work_flow` DISABLE KEYS */;
INSERT INTO `section_two_work_flow` VALUES (3,'How It Works ','Book Cheap Trip On Your Favourite Buses ','2021-11-06 16:39:55','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `section_two_work_flow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social`
--

DROP TABLE IF EXISTS `social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `social` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `serial` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social`
--

LOCK TABLES `social` WRITE;
/*!40000 ALTER TABLE `social` DISABLE KEYS */;
/*!40000 ALTER TABLE `social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socialmedias`
--

DROP TABLE IF EXISTS `socialmedias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socialmedias` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image_path` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialmedias`
--

LOCK TABLES `socialmedias` WRITE;
/*!40000 ALTER TABLE `socialmedias` DISABLE KEYS */;
INSERT INTO `socialmedias` VALUES (1,'image/social/1656241155_83eb81e8472e4a40ce18.png','https://www.instagram.com/accounts/login/?hl=en','2021-12-18 14:53:04','2023-01-21 10:11:39',NULL),(2,'image/social/1656241168_0122bd4363ea397d30b7.png','https://twitter.com/?lang=en','2021-12-18 14:53:54','2023-01-21 10:11:39',NULL),(3,'image/social/1656241180_eeb2bca4ba4c1265dce9.png','https://www.facebook.com/','2022-03-26 19:04:55','2023-01-21 10:11:39',NULL),(4,'image/social/1656241188_343eccdd9d86058efa9f.png','https://www.youtube.com/','2022-03-26 19:07:56','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `socialmedias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socialsignins`
--

DROP TABLE IF EXISTS `socialsignins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socialsignins` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `appid` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `other` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialsignins`
--

LOCK TABLES `socialsignins` WRITE;
/*!40000 ALTER TABLE `socialsignins` DISABLE KEYS */;
/*!40000 ALTER TABLE `socialsignins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssl_commerz`
--

DROP TABLE IF EXISTS `ssl_commerz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ssl_commerz` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ssl_store_id` varchar(100) NOT NULL,
  `ssl_store_password` varchar(100) NOT NULL,
  `environment` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssl_commerz`
--

LOCK TABLES `ssl_commerz` WRITE;
/*!40000 ALTER TABLE `ssl_commerz` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssl_commerz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stands`
--

DROP TABLE IF EXISTS `stands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stands` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stands`
--

LOCK TABLES `stands` WRITE;
/*!40000 ALTER TABLE `stands` DISABLE KEYS */;
INSERT INTO `stands` VALUES (15,'UTTARA','2022-06-27 14:21:08','2023-01-21 10:11:39',NULL),(16,'MOHAKHALI','2022-06-27 14:24:10','2023-01-21 10:11:39',NULL),(17,'KALLYANPUR','2022-06-27 14:24:58','2023-01-21 10:11:39',NULL),(18,'ABDULLAHPUR','2022-06-27 14:25:37','2023-01-21 10:11:39',NULL),(19,'TANGAIL BUS STAND','2022-06-27 14:26:21','2023-01-21 10:11:39',NULL),(20,' MOKAMTOLA','2022-06-27 14:27:04','2023-01-21 10:11:39',NULL),(21,'SOTIBARI ','2022-06-27 14:28:15','2023-01-21 10:11:39',NULL),(22,'PIRGANJ','2022-06-27 14:28:35','2023-01-21 10:11:39',NULL),(23,'KAMARPARA','2022-06-27 14:29:02','2023-01-21 10:11:39',NULL),(24,'MODERN MORE','2022-06-27 14:30:03','2023-01-21 10:11:39',NULL),(25,'BAHDDERHAT BUS TERMINAL','2022-06-27 14:31:33','2023-01-21 10:11:39',NULL),(26,'BRTC BUS STAND','2022-06-27 14:31:54','2023-01-21 10:11:39',NULL),(27,'PANCHAGARH BUS STAND','2022-06-27 16:56:59','2023-01-21 10:11:39',NULL),(28,'NILPHAMARI BUS STAND','2022-06-27 16:57:15','2023-01-21 10:11:39',NULL),(29,'LALMONIRHAT BUS STAND','2022-06-27 16:57:30','2023-01-21 10:11:39',NULL),(30,'	KURIGRAM BUS STAND','2022-06-27 16:57:46','2023-01-21 10:11:39',NULL),(31,'GAIBANDHA BUS STAND','2022-06-27 16:58:03','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `stands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stripes`
--

DROP TABLE IF EXISTS `stripes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stripes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `test_p_kye` text NOT NULL,
  `test_s_kye` text NOT NULL,
  `live_p_kye` text NOT NULL,
  `live_s_kye` text NOT NULL,
  `environment` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stripes`
--

LOCK TABLES `stripes` WRITE;
/*!40000 ALTER TABLE `stripes` DISABLE KEYS */;
INSERT INTO `stripes` VALUES (1,'pk_test_51KOFikFc0lmoA84nCaAiNKJ2bpbxLkirsH7mzjy4SxPPDAVDpz5kL4Vdu4UvXuEalx4UyhF0kx5Go4YSjHSaiBQK00UFpxKNWl','sk_test_51KOFikFc0lmoA84nRjf7U2V8RPgslalbjNQ8iFbV2kXDBhn5jlhAhQRlJMmPVxq4cDjVLl3L4Vlgd0dzG0Pw4bVp00pagMFqJh','pk_test_51KOFikFc0lmoA84nCaAiNKJ2bpbxLkirsH7mzjy4SxPPDAVDpz5kL4Vdu4UvXuEalx4UyhF0kx5Go4YSjHSaiBQK00UFpxKNWl','sk_test_51KOFikFc0lmoA84nRjf7U2V8RPgslalbjNQ8iFbV2kXDBhn5jlhAhQRlJMmPVxq4cDjVLl3L4Vlgd0dzG0Pw4bVp00pagMFqJh','1','2022-02-01 16:53:53','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `stripes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stuffassigns`
--

DROP TABLE IF EXISTS `stuffassigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stuffassigns` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `trip_id` int unsigned NOT NULL,
  `employee_id` int unsigned NOT NULL,
  `employee_type` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stuffassigns_trip_id_foreign` (`trip_id`),
  KEY `stuffassigns_employee_id_foreign` (`employee_id`),
  CONSTRAINT `stuffassigns_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `stuffassigns_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stuffassigns`
--

LOCK TABLES `stuffassigns` WRITE;
/*!40000 ALTER TABLE `stuffassigns` DISABLE KEYS */;
INSERT INTO `stuffassigns` VALUES (110,22,10,'1','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(111,22,13,'2','2022-06-27 16:39:55','2023-01-21 10:11:39',NULL),(112,23,11,'1','2022-06-27 17:50:49','2023-01-21 10:11:39',NULL),(113,23,14,'2','2022-06-27 17:50:49','2023-01-21 10:11:39',NULL),(114,24,10,'1','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(115,24,12,'1','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(116,24,13,'2','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(117,24,15,'2','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(118,25,10,'1','2022-06-27 18:04:23','2023-01-21 10:11:39',NULL),(119,25,13,'2','2022-06-27 18:04:23','2023-01-21 10:11:39',NULL),(120,26,11,'1','2022-06-27 18:16:38','2023-01-21 10:11:39',NULL),(121,26,15,'2','2022-06-27 18:16:38','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `stuffassigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribes`
--

LOCK TABLES `subscribes` WRITE;
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
INSERT INTO `subscribes` VALUES (13,'t1@t.com','2022-06-27 17:22:10','2023-01-21 10:11:39',NULL),(14,'t2@t.com','2022-06-27 17:22:19','2023-01-21 10:11:39',NULL),(15,'t3@t.com','2022-06-27 17:22:28','2023-01-21 10:11:39',NULL),(16,'t4@t.com','2022-06-27 17:22:35','2023-01-21 10:11:39',NULL),(17,'t5@t.com','2022-06-27 17:22:43','2023-01-21 10:11:39',NULL),(18,'t6@t.com','2022-06-27 17:22:52','2023-01-21 10:11:39',NULL),(19,'t7@t.com','2022-06-27 17:23:01','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtrips`
--

DROP TABLE IF EXISTS `subtrips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subtrips` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `trip_id` int unsigned NOT NULL,
  `pick_location_id` int unsigned NOT NULL,
  `drop_location_id` int unsigned NOT NULL,
  `stoppage` text,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext,
  `special_fair` tinytext,
  `type` tinytext NOT NULL,
  `show` tinytext,
  `imglocation` text,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subtrips_trip_id_foreign` (`trip_id`),
  CONSTRAINT `subtrips_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtrips`
--

LOCK TABLES `subtrips` WRITE;
/*!40000 ALTER TABLE `subtrips` DISABLE KEYS */;
INSERT INTO `subtrips` VALUES (36,22,32,29,'32,28,41,29','800','500','600','main',NULL,NULL,'1','2022-06-27 16:33:05','2023-01-21 10:11:39',NULL),(37,22,32,41,'32,41','500','300','400','subtrip','1','image/subtrip/1656326058_7d8355a3f22bdb1008d6.jpg','1','2022-06-27 16:34:18','2023-01-21 10:11:39',NULL),(38,23,32,30,'32,27,41,30','900','','','main',NULL,NULL,'1','2022-06-27 17:50:49','2023-01-21 10:11:39',NULL),(39,23,32,41,'32,41','600','','','subtrip','1','image/subtrip/1656330935_dac19776e9bb7986e3a5.jpg','1','2022-06-27 17:55:35','2023-01-21 10:11:39',NULL),(40,24,30,32,'30,33,34,41,32','1000','500','600','main',NULL,NULL,'1','2022-06-27 17:59:02','2023-01-21 10:11:39',NULL),(41,24,30,34,'30,41,34','800','300','400','subtrip','1','image/subtrip/1656331204_90f5f16830829d43252e.jpg','1','2022-06-27 18:00:04','2023-01-21 10:11:39',NULL),(42,25,32,42,'32,42','1200','600','700','main',NULL,NULL,'1','2022-06-27 18:04:23','2023-01-21 10:11:39',NULL),(43,25,32,44,'32,44','900','300','350','subtrip','1','image/subtrip/1656331509_29d6c75e7a96fb57ba35.jpg','1','2022-06-27 18:05:09','2023-01-21 10:11:39',NULL),(44,22,41,28,'41,28','650','','','subtrip','1','image/subtrip/1656331570_22bb4359d1e04d14b523.jpg','1','2022-06-27 18:06:10','2023-01-21 10:11:39',NULL),(45,26,42,32,'42,32','1200','','','main',NULL,NULL,'1','2022-06-27 18:16:38','2023-01-21 10:11:39',NULL),(46,26,42,40,'42,40','480','','','subtrip','1','image/subtrip/1656332228_0661a1d5728953e13e3f.jpg','1','2022-06-27 18:17:08','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `subtrips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `tax_reg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxes`
--

LOCK TABLES `taxes` WRITE;
/*!40000 ALTER TABLE `taxes` DISABLE KEYS */;
INSERT INTO `taxes` VALUES (6,'GST TAX','ABC123','1','5','2022-06-27 14:40:14','2023-01-21 10:11:39',NULL),(7,'CGT','123ABC','1','7','2022-06-27 14:40:53','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `taxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporarybooks`
--

DROP TABLE IF EXISTS `temporarybooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temporarybooks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subtrip_id` int unsigned NOT NULL,
  `ticket_token` varchar(255) NOT NULL,
  `seat_names` tinytext NOT NULL,
  `journey_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `expires_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `temporarybooks_subtrip_id_foreign` (`subtrip_id`),
  CONSTRAINT `temporarybooks_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporarybooks`
--

LOCK TABLES `temporarybooks` WRITE;
/*!40000 ALTER TABLE `temporarybooks` DISABLE KEYS */;
/*!40000 ALTER TABLE `temporarybooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terms` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms`
--

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` VALUES (1,'Terms And Conditions Page Title Lorem Ipsum','terms and conditions sub-title page lorem ipsum','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','2021-12-19 13:58:56','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int unsigned NOT NULL,
  `subtrip_id` int unsigned NOT NULL,
  `passanger_id` int unsigned NOT NULL,
  `pick_location_id` int unsigned NOT NULL,
  `drop_location_id` int unsigned NOT NULL,
  `pick_stand_id` int unsigned NOT NULL,
  `drop_stand_id` int unsigned NOT NULL,
  `price` tinytext NOT NULL,
  `discount` tinytext,
  `roundtrip_discount` tinytext,
  `totaltax` tinytext,
  `paidamount` tinytext NOT NULL,
  `offerer` tinytext,
  `adult` tinytext,
  `chield` tinytext,
  `special` tinytext,
  `seatnumber` tinytext NOT NULL,
  `totalseat` tinytext NOT NULL,
  `refund` tinytext,
  `bookby_user_id` int unsigned NOT NULL,
  `bookby_user_type` tinytext,
  `journeydata` datetime NOT NULL,
  `pay_type_id` int DEFAULT NULL,
  `pay_method_id` int DEFAULT NULL,
  `payment_status` tinytext NOT NULL,
  `vehicle_id` int unsigned NOT NULL,
  `payment_detail` tinytext,
  `cancel_status` tinytext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_id` (`booking_id`),
  KEY `tickets_trip_id_foreign` (`trip_id`),
  KEY `tickets_subtrip_id_foreign` (`subtrip_id`),
  KEY `tickets_passanger_id_foreign` (`passanger_id`),
  KEY `tickets_pick_location_id_foreign` (`pick_location_id`),
  KEY `tickets_drop_location_id_foreign` (`drop_location_id`),
  KEY `tickets_pick_stand_id_foreign` (`pick_stand_id`),
  KEY `tickets_drop_stand_id_foreign` (`drop_stand_id`),
  KEY `tickets_bookby_user_id_foreign` (`bookby_user_id`),
  KEY `tickets_vehicle_id_foreign` (`vehicle_id`),
  CONSTRAINT `tickets_bookby_user_id_foreign` FOREIGN KEY (`bookby_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `tickets_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `tickets_drop_stand_id_foreign` FOREIGN KEY (`drop_stand_id`) REFERENCES `pickdrops` (`id`),
  CONSTRAINT `tickets_passanger_id_foreign` FOREIGN KEY (`passanger_id`) REFERENCES `users` (`id`),
  CONSTRAINT `tickets_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `tickets_pick_stand_id_foreign` FOREIGN KEY (`pick_stand_id`) REFERENCES `pickdrops` (`id`),
  CONSTRAINT `tickets_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  CONSTRAINT `tickets_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  CONSTRAINT `tickets_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (121,'TB8E4G57FO',23,38,170,32,30,95,96,'900','25',NULL,'108','983','BUS1656332357','1','0','0','B1','1','0',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'paid',14,'Lorme Ipsum Lorme','0','2022-06-28 15:08:21','2023-01-21 10:11:39',NULL),(122,'TBFKS8YEBW',23,38,171,32,30,95,96,'900','10',NULL,'108','998','','1','0','0','B3','1','0',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'partial',14,'Lorme Ipsum Lorme','0','2022-06-28 15:15:21','2023-01-21 10:11:39',NULL),(123,'TBJ3D2RY0P',24,41,170,25,43,97,99,'800','0',NULL,'96','896','','1','0','0','A1','1','0',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'paid',15,'Lorme Ipsum Lorme','0','2022-06-28 15:16:50','2023-01-21 10:11:39',NULL),(124,'TBNYFQET3S',25,43,171,43,33,101,102,'900','0',NULL,'108','1008','','1','0','0','G2','1','0',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'partial',12,'','0','2022-06-28 15:17:58','2023-01-21 10:11:39',NULL),(125,'TB76DFM1CA',24,40,171,30,32,97,100,'1000','0',NULL,'120','1120','0','1','','','E2','1','0',171,'passanger','2022-06-28 00:00:00',NULL,999,'partial',15,'This is pay details','0','2022-06-28 15:19:21','2023-01-21 10:11:39',NULL),(126,'TBXT8KPHV2',24,41,168,25,43,98,99,'800','0',NULL,'96','896','','1','0','0','B3','1','0',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'paid',15,'Lorme Ipsum Lorme','1','2022-06-28 15:20:54','2023-01-21 10:11:39',NULL),(127,'TBA9X180HU',23,38,168,32,30,95,96,'900','0',NULL,'108','1008','','1','0','0','F4','1','1',1,'Supper Admin','2022-06-28 00:00:00',1,NULL,'paid',14,'Lorme Ipsum Lorme','0','2022-06-28 15:22:26','2023-01-21 10:11:39',NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timezone`
--

DROP TABLE IF EXISTS `timezone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timezone` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `country_code` char(3) NOT NULL,
  `timezone` varchar(125) NOT NULL,
  `gmt_offset` float(10,2) DEFAULT NULL,
  `dst_offset` float(10,2) DEFAULT NULL,
  `raw_offset` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=419 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timezone`
--

LOCK TABLES `timezone` WRITE;
/*!40000 ALTER TABLE `timezone` DISABLE KEYS */;
INSERT INTO `timezone` VALUES (1,'AD','Europe/Andorra',1.00,2.00,1.00),(2,'AE','Asia/Dubai',4.00,4.00,4.00),(3,'AF','Asia/Kabul',4.50,4.50,4.50),(4,'AG','America/Antigua',-4.00,-4.00,-4.00),(5,'AI','America/Anguilla',-4.00,-4.00,-4.00),(6,'AL','Europe/Tirane',1.00,2.00,1.00),(7,'AM','Asia/Yerevan',4.00,4.00,4.00),(8,'AO','Africa/Luanda',1.00,1.00,1.00),(9,'AQ','Antarctica/Casey',8.00,8.00,8.00),(10,'AQ','Antarctica/Davis',7.00,7.00,7.00),(11,'AQ','Antarctica/DumontDUrville',10.00,10.00,10.00),(12,'AQ','Antarctica/Mawson',5.00,5.00,5.00),(13,'AQ','Antarctica/McMurdo',13.00,12.00,12.00),(14,'AQ','Antarctica/Palmer',-3.00,-4.00,-4.00),(15,'AQ','Antarctica/Rothera',-3.00,-3.00,-3.00),(16,'AQ','Antarctica/South_Pole',13.00,12.00,12.00),(17,'AQ','Antarctica/Syowa',3.00,3.00,3.00),(18,'AQ','Antarctica/Vostok',6.00,6.00,6.00),(19,'AR','America/Argentina/Buenos_Aires',-3.00,-3.00,-3.00),(20,'AR','America/Argentina/Catamarca',-3.00,-3.00,-3.00),(21,'AR','America/Argentina/Cordoba',-3.00,-3.00,-3.00),(22,'AR','America/Argentina/Jujuy',-3.00,-3.00,-3.00),(23,'AR','America/Argentina/La_Rioja',-3.00,-3.00,-3.00),(24,'AR','America/Argentina/Mendoza',-3.00,-3.00,-3.00),(25,'AR','America/Argentina/Rio_Gallegos',-3.00,-3.00,-3.00),(26,'AR','America/Argentina/Salta',-3.00,-3.00,-3.00),(27,'AR','America/Argentina/San_Juan',-3.00,-3.00,-3.00),(28,'AR','America/Argentina/San_Luis',-3.00,-3.00,-3.00),(29,'AR','America/Argentina/Tucuman',-3.00,-3.00,-3.00),(30,'AR','America/Argentina/Ushuaia',-3.00,-3.00,-3.00),(31,'AS','Pacific/Pago_Pago',-11.00,-11.00,-11.00),(32,'AT','Europe/Vienna',1.00,2.00,1.00),(33,'AU','Antarctica/Macquarie',11.00,11.00,11.00),(34,'AU','Australia/Adelaide',10.50,9.50,9.50),(35,'AU','Australia/Brisbane',10.00,10.00,10.00),(36,'AU','Australia/Broken_Hill',10.50,9.50,9.50),(37,'AU','Australia/Currie',11.00,10.00,10.00),(38,'AU','Australia/Darwin',9.50,9.50,9.50),(39,'AU','Australia/Eucla',8.75,8.75,8.75),(40,'AU','Australia/Hobart',11.00,10.00,10.00),(41,'AU','Australia/Lindeman',10.00,10.00,10.00),(42,'AU','Australia/Lord_Howe',11.00,10.50,10.50),(43,'AU','Australia/Melbourne',11.00,10.00,10.00),(44,'AU','Australia/Perth',8.00,8.00,8.00),(45,'AU','Australia/Sydney',11.00,10.00,10.00),(46,'AW','America/Aruba',-4.00,-4.00,-4.00),(47,'AX','Europe/Mariehamn',2.00,3.00,2.00),(48,'AZ','Asia/Baku',4.00,5.00,4.00),(49,'BA','Europe/Sarajevo',1.00,2.00,1.00),(50,'BB','America/Barbados',-4.00,-4.00,-4.00),(51,'BD','Asia/Dhaka',6.00,6.00,6.00),(52,'BE','Europe/Brussels',1.00,2.00,1.00),(53,'BF','Africa/Ouagadougou',0.00,0.00,0.00),(54,'BG','Europe/Sofia',2.00,3.00,2.00),(55,'BH','Asia/Bahrain',3.00,3.00,3.00),(56,'BI','Africa/Bujumbura',2.00,2.00,2.00),(57,'BJ','Africa/Porto-Novo',1.00,1.00,1.00),(58,'BL','America/St_Barthelemy',-4.00,-4.00,-4.00),(59,'BM','Atlantic/Bermuda',-4.00,-3.00,-4.00),(60,'BN','Asia/Brunei',8.00,8.00,8.00),(61,'BO','America/La_Paz',-4.00,-4.00,-4.00),(62,'BQ','America/Kralendijk',-4.00,-4.00,-4.00),(63,'BR','America/Araguaina',-3.00,-3.00,-3.00),(64,'BR','America/Bahia',-3.00,-3.00,-3.00),(65,'BR','America/Belem',-3.00,-3.00,-3.00),(66,'BR','America/Boa_Vista',-4.00,-4.00,-4.00),(67,'BR','America/Campo_Grande',-3.00,-4.00,-4.00),(68,'BR','America/Cuiaba',-3.00,-4.00,-4.00),(69,'BR','America/Eirunepe',-5.00,-5.00,-5.00),(70,'BR','America/Fortaleza',-3.00,-3.00,-3.00),(71,'BR','America/Maceio',-3.00,-3.00,-3.00),(72,'BR','America/Manaus',-4.00,-4.00,-4.00),(73,'BR','America/Noronha',-2.00,-2.00,-2.00),(74,'BR','America/Porto_Velho',-4.00,-4.00,-4.00),(75,'BR','America/Recife',-3.00,-3.00,-3.00),(76,'BR','America/Rio_Branco',-5.00,-5.00,-5.00),(77,'BR','America/Santarem',-3.00,-3.00,-3.00),(78,'BR','America/Sao_Paulo',-2.00,-3.00,-3.00),(79,'BS','America/Nassau',-5.00,-4.00,-5.00),(80,'BT','Asia/Thimphu',6.00,6.00,6.00),(81,'BW','Africa/Gaborone',2.00,2.00,2.00),(82,'BY','Europe/Minsk',3.00,3.00,3.00),(83,'BZ','America/Belize',-6.00,-6.00,-6.00),(84,'CA','America/Atikokan',-5.00,-5.00,-5.00),(85,'CA','America/Blanc-Sablon',-4.00,-4.00,-4.00),(86,'CA','America/Cambridge_Bay',-7.00,-6.00,-7.00),(87,'CA','America/Creston',-7.00,-7.00,-7.00),(88,'CA','America/Dawson',-8.00,-7.00,-8.00),(89,'CA','America/Dawson_Creek',-7.00,-7.00,-7.00),(90,'CA','America/Edmonton',-7.00,-6.00,-7.00),(91,'CA','America/Glace_Bay',-4.00,-3.00,-4.00),(92,'CA','America/Goose_Bay',-4.00,-3.00,-4.00),(93,'CA','America/Halifax',-4.00,-3.00,-4.00),(94,'CA','America/Inuvik',-7.00,-6.00,-7.00),(95,'CA','America/Iqaluit',-5.00,-4.00,-5.00),(96,'CA','America/Moncton',-4.00,-3.00,-4.00),(97,'CA','America/Montreal',-5.00,-4.00,-5.00),(98,'CA','America/Nipigon',-5.00,-4.00,-5.00),(99,'CA','America/Pangnirtung',-5.00,-4.00,-5.00),(100,'CA','America/Rainy_River',-6.00,-5.00,-6.00),(101,'CA','America/Rankin_Inlet',-6.00,-5.00,-6.00),(102,'CA','America/Regina',-6.00,-6.00,-6.00),(103,'CA','America/Resolute',-6.00,-5.00,-6.00),(104,'CA','America/St_Johns',-3.50,-2.50,-3.50),(105,'CA','America/Swift_Current',-6.00,-6.00,-6.00),(106,'CA','America/Thunder_Bay',-5.00,-4.00,-5.00),(107,'CA','America/Toronto',-5.00,-4.00,-5.00),(108,'CA','America/Vancouver',-8.00,-7.00,-8.00),(109,'CA','America/Whitehorse',-8.00,-7.00,-8.00),(110,'CA','America/Winnipeg',-6.00,-5.00,-6.00),(111,'CA','America/Yellowknife',-7.00,-6.00,-7.00),(112,'CC','Indian/Cocos',6.50,6.50,6.50),(113,'CD','Africa/Kinshasa',1.00,1.00,1.00),(114,'CD','Africa/Lubumbashi',2.00,2.00,2.00),(115,'CF','Africa/Bangui',1.00,1.00,1.00),(116,'CG','Africa/Brazzaville',1.00,1.00,1.00),(117,'CH','Europe/Zurich',1.00,2.00,1.00),(118,'CI','Africa/Abidjan',0.00,0.00,0.00),(119,'CK','Pacific/Rarotonga',-10.00,-10.00,-10.00),(120,'CL','America/Santiago',-3.00,-4.00,-4.00),(121,'CL','Pacific/Easter',-5.00,-6.00,-6.00),(122,'CM','Africa/Douala',1.00,1.00,1.00),(123,'CN','Asia/Chongqing',8.00,8.00,8.00),(124,'CN','Asia/Harbin',8.00,8.00,8.00),(125,'CN','Asia/Kashgar',8.00,8.00,8.00),(126,'CN','Asia/Shanghai',8.00,8.00,8.00),(127,'CN','Asia/Urumqi',8.00,8.00,8.00),(128,'CO','America/Bogota',-5.00,-5.00,-5.00),(129,'CR','America/Costa_Rica',-6.00,-6.00,-6.00),(130,'CU','America/Havana',-5.00,-4.00,-5.00),(131,'CV','Atlantic/Cape_Verde',-1.00,-1.00,-1.00),(132,'CW','America/Curacao',-4.00,-4.00,-4.00),(133,'CX','Indian/Christmas',7.00,7.00,7.00),(134,'CY','Asia/Nicosia',2.00,3.00,2.00),(135,'CZ','Europe/Prague',1.00,2.00,1.00),(136,'DE','Europe/Berlin',1.00,2.00,1.00),(137,'DE','Europe/Busingen',1.00,2.00,1.00),(138,'DJ','Africa/Djibouti',3.00,3.00,3.00),(139,'DK','Europe/Copenhagen',1.00,2.00,1.00),(140,'DM','America/Dominica',-4.00,-4.00,-4.00),(141,'DO','America/Santo_Domingo',-4.00,-4.00,-4.00),(142,'DZ','Africa/Algiers',1.00,1.00,1.00),(143,'EC','America/Guayaquil',-5.00,-5.00,-5.00),(144,'EC','Pacific/Galapagos',-6.00,-6.00,-6.00),(145,'EE','Europe/Tallinn',2.00,3.00,2.00),(146,'EG','Africa/Cairo',2.00,2.00,2.00),(147,'EH','Africa/El_Aaiun',0.00,0.00,0.00),(148,'ER','Africa/Asmara',3.00,3.00,3.00),(149,'ES','Africa/Ceuta',1.00,2.00,1.00),(150,'ES','Atlantic/Canary',0.00,1.00,0.00),(151,'ES','Europe/Madrid',1.00,2.00,1.00),(152,'ET','Africa/Addis_Ababa',3.00,3.00,3.00),(153,'FI','Europe/Helsinki',2.00,3.00,2.00),(154,'FJ','Pacific/Fiji',13.00,12.00,12.00),(155,'FK','Atlantic/Stanley',-3.00,-3.00,-3.00),(156,'FM','Pacific/Chuuk',10.00,10.00,10.00),(157,'FM','Pacific/Kosrae',11.00,11.00,11.00),(158,'FM','Pacific/Pohnpei',11.00,11.00,11.00),(159,'FO','Atlantic/Faroe',0.00,1.00,0.00),(160,'FR','Europe/Paris',1.00,2.00,1.00),(161,'GA','Africa/Libreville',1.00,1.00,1.00),(162,'GB','Europe/London',0.00,1.00,0.00),(163,'GD','America/Grenada',-4.00,-4.00,-4.00),(164,'GE','Asia/Tbilisi',4.00,4.00,4.00),(165,'GF','America/Cayenne',-3.00,-3.00,-3.00),(166,'GG','Europe/Guernsey',0.00,1.00,0.00),(167,'GH','Africa/Accra',0.00,0.00,0.00),(168,'GI','Europe/Gibraltar',1.00,2.00,1.00),(169,'GL','America/Danmarkshavn',0.00,0.00,0.00),(170,'GL','America/Godthab',-3.00,-2.00,-3.00),(171,'GL','America/Scoresbysund',-1.00,0.00,-1.00),(172,'GL','America/Thule',-4.00,-3.00,-4.00),(173,'GM','Africa/Banjul',0.00,0.00,0.00),(174,'GN','Africa/Conakry',0.00,0.00,0.00),(175,'GP','America/Guadeloupe',-4.00,-4.00,-4.00),(176,'GQ','Africa/Malabo',1.00,1.00,1.00),(177,'GR','Europe/Athens',2.00,3.00,2.00),(178,'GS','Atlantic/South_Georgia',-2.00,-2.00,-2.00),(179,'GT','America/Guatemala',-6.00,-6.00,-6.00),(180,'GU','Pacific/Guam',10.00,10.00,10.00),(181,'GW','Africa/Bissau',0.00,0.00,0.00),(182,'GY','America/Guyana',-4.00,-4.00,-4.00),(183,'HK','Asia/Hong_Kong',8.00,8.00,8.00),(184,'HN','America/Tegucigalpa',-6.00,-6.00,-6.00),(185,'HR','Europe/Zagreb',1.00,2.00,1.00),(186,'HT','America/Port-au-Prince',-5.00,-4.00,-5.00),(187,'HU','Europe/Budapest',1.00,2.00,1.00),(188,'ID','Asia/Jakarta',7.00,7.00,7.00),(189,'ID','Asia/Jayapura',9.00,9.00,9.00),(190,'ID','Asia/Makassar',8.00,8.00,8.00),(191,'ID','Asia/Pontianak',7.00,7.00,7.00),(192,'IE','Europe/Dublin',0.00,1.00,0.00),(193,'IL','Asia/Jerusalem',2.00,3.00,2.00),(194,'IM','Europe/Isle_of_Man',0.00,1.00,0.00),(195,'IN','Asia/Kolkata',5.50,5.50,5.50),(196,'IO','Indian/Chagos',6.00,6.00,6.00),(197,'IQ','Asia/Baghdad',3.00,3.00,3.00),(198,'IR','Asia/Tehran',3.50,4.50,3.50),(199,'IS','Atlantic/Reykjavik',0.00,0.00,0.00),(200,'IT','Europe/Rome',1.00,2.00,1.00),(201,'JE','Europe/Jersey',0.00,1.00,0.00),(202,'JM','America/Jamaica',-5.00,-5.00,-5.00),(203,'JO','Asia/Amman',2.00,3.00,2.00),(204,'JP','Asia/Tokyo',9.00,9.00,9.00),(205,'KE','Africa/Nairobi',3.00,3.00,3.00),(206,'KG','Asia/Bishkek',6.00,6.00,6.00),(207,'KH','Asia/Phnom_Penh',7.00,7.00,7.00),(208,'KI','Pacific/Enderbury',13.00,13.00,13.00),(209,'KI','Pacific/Kiritimati',14.00,14.00,14.00),(210,'KI','Pacific/Tarawa',12.00,12.00,12.00),(211,'KM','Indian/Comoro',3.00,3.00,3.00),(212,'KN','America/St_Kitts',-4.00,-4.00,-4.00),(213,'KP','Asia/Pyongyang',9.00,9.00,9.00),(214,'KR','Asia/Seoul',9.00,9.00,9.00),(215,'KW','Asia/Kuwait',3.00,3.00,3.00),(216,'KY','America/Cayman',-5.00,-5.00,-5.00),(217,'KZ','Asia/Almaty',6.00,6.00,6.00),(218,'KZ','Asia/Aqtau',5.00,5.00,5.00),(219,'KZ','Asia/Aqtobe',5.00,5.00,5.00),(220,'KZ','Asia/Oral',5.00,5.00,5.00),(221,'KZ','Asia/Qyzylorda',6.00,6.00,6.00),(222,'LA','Asia/Vientiane',7.00,7.00,7.00),(223,'LB','Asia/Beirut',2.00,3.00,2.00),(224,'LC','America/St_Lucia',-4.00,-4.00,-4.00),(225,'LI','Europe/Vaduz',1.00,2.00,1.00),(226,'LK','Asia/Colombo',5.50,5.50,5.50),(227,'LR','Africa/Monrovia',0.00,0.00,0.00),(228,'LS','Africa/Maseru',2.00,2.00,2.00),(229,'LT','Europe/Vilnius',2.00,3.00,2.00),(230,'LU','Europe/Luxembourg',1.00,2.00,1.00),(231,'LV','Europe/Riga',2.00,3.00,2.00),(232,'LY','Africa/Tripoli',2.00,2.00,2.00),(233,'MA','Africa/Casablanca',0.00,0.00,0.00),(234,'MC','Europe/Monaco',1.00,2.00,1.00),(235,'MD','Europe/Chisinau',2.00,3.00,2.00),(236,'ME','Europe/Podgorica',1.00,2.00,1.00),(237,'MF','America/Marigot',-4.00,-4.00,-4.00),(238,'MG','Indian/Antananarivo',3.00,3.00,3.00),(239,'MH','Pacific/Kwajalein',12.00,12.00,12.00),(240,'MH','Pacific/Majuro',12.00,12.00,12.00),(241,'MK','Europe/Skopje',1.00,2.00,1.00),(242,'ML','Africa/Bamako',0.00,0.00,0.00),(243,'MM','Asia/Rangoon',6.50,6.50,6.50),(244,'MN','Asia/Choibalsan',8.00,8.00,8.00),(245,'MN','Asia/Hovd',7.00,7.00,7.00),(246,'MN','Asia/Ulaanbaatar',8.00,8.00,8.00),(247,'MO','Asia/Macau',8.00,8.00,8.00),(248,'MP','Pacific/Saipan',10.00,10.00,10.00),(249,'MQ','America/Martinique',-4.00,-4.00,-4.00),(250,'MR','Africa/Nouakchott',0.00,0.00,0.00),(251,'MS','America/Montserrat',-4.00,-4.00,-4.00),(252,'MT','Europe/Malta',1.00,2.00,1.00),(253,'MU','Indian/Mauritius',4.00,4.00,4.00),(254,'MV','Indian/Maldives',5.00,5.00,5.00),(255,'MW','Africa/Blantyre',2.00,2.00,2.00),(256,'MX','America/Bahia_Banderas',-6.00,-5.00,-6.00),(257,'MX','America/Cancun',-6.00,-5.00,-6.00),(258,'MX','America/Chihuahua',-7.00,-6.00,-7.00),(259,'MX','America/Hermosillo',-7.00,-7.00,-7.00),(260,'MX','America/Matamoros',-6.00,-5.00,-6.00),(261,'MX','America/Mazatlan',-7.00,-6.00,-7.00),(262,'MX','America/Merida',-6.00,-5.00,-6.00),(263,'MX','America/Mexico_City',-6.00,-5.00,-6.00),(264,'MX','America/Monterrey',-6.00,-5.00,-6.00),(265,'MX','America/Ojinaga',-7.00,-6.00,-7.00),(266,'MX','America/Santa_Isabel',-8.00,-7.00,-8.00),(267,'MX','America/Tijuana',-8.00,-7.00,-8.00),(268,'MY','Asia/Kuala_Lumpur',8.00,8.00,8.00),(269,'MY','Asia/Kuching',8.00,8.00,8.00),(270,'MZ','Africa/Maputo',2.00,2.00,2.00),(271,'NA','Africa/Windhoek',2.00,1.00,1.00),(272,'NC','Pacific/Noumea',11.00,11.00,11.00),(273,'NE','Africa/Niamey',1.00,1.00,1.00),(274,'NF','Pacific/Norfolk',11.50,11.50,11.50),(275,'NG','Africa/Lagos',1.00,1.00,1.00),(276,'NI','America/Managua',-6.00,-6.00,-6.00),(277,'NL','Europe/Amsterdam',1.00,2.00,1.00),(278,'NO','Europe/Oslo',1.00,2.00,1.00),(279,'NP','Asia/Kathmandu',5.75,5.75,5.75),(280,'NR','Pacific/Nauru',12.00,12.00,12.00),(281,'NU','Pacific/Niue',-11.00,-11.00,-11.00),(282,'NZ','Pacific/Auckland',13.00,12.00,12.00),(283,'NZ','Pacific/Chatham',13.75,12.75,12.75),(284,'OM','Asia/Muscat',4.00,4.00,4.00),(285,'PA','America/Panama',-5.00,-5.00,-5.00),(286,'PE','America/Lima',-5.00,-5.00,-5.00),(287,'PF','Pacific/Gambier',-9.00,-9.00,-9.00),(288,'PF','Pacific/Marquesas',-9.50,-9.50,-9.50),(289,'PF','Pacific/Tahiti',-10.00,-10.00,-10.00),(290,'PG','Pacific/Port_Moresby',10.00,10.00,10.00),(291,'PH','Asia/Manila',8.00,8.00,8.00),(292,'PK','Asia/Karachi',5.00,5.00,5.00),(293,'PL','Europe/Warsaw',1.00,2.00,1.00),(294,'PM','America/Miquelon',-3.00,-2.00,-3.00),(295,'PN','Pacific/Pitcairn',-8.00,-8.00,-8.00),(296,'PR','America/Puerto_Rico',-4.00,-4.00,-4.00),(297,'PS','Asia/Gaza',2.00,3.00,2.00),(298,'PS','Asia/Hebron',2.00,3.00,2.00),(299,'PT','Atlantic/Azores',-1.00,0.00,-1.00),(300,'PT','Atlantic/Madeira',0.00,1.00,0.00),(301,'PT','Europe/Lisbon',0.00,1.00,0.00),(302,'PW','Pacific/Palau',9.00,9.00,9.00),(303,'PY','America/Asuncion',-3.00,-4.00,-4.00),(304,'QA','Asia/Qatar',3.00,3.00,3.00),(305,'RE','Indian/Reunion',4.00,4.00,4.00),(306,'RO','Europe/Bucharest',2.00,3.00,2.00),(307,'RS','Europe/Belgrade',1.00,2.00,1.00),(308,'RU','Asia/Anadyr',12.00,12.00,12.00),(309,'RU','Asia/Irkutsk',9.00,9.00,9.00),(310,'RU','Asia/Kamchatka',12.00,12.00,12.00),(311,'RU','Asia/Khandyga',10.00,10.00,10.00),(312,'RU','Asia/Krasnoyarsk',8.00,8.00,8.00),(313,'RU','Asia/Magadan',12.00,12.00,12.00),(314,'RU','Asia/Novokuznetsk',7.00,7.00,7.00),(315,'RU','Asia/Novosibirsk',7.00,7.00,7.00),(316,'RU','Asia/Omsk',7.00,7.00,7.00),(317,'RU','Asia/Sakhalin',11.00,11.00,11.00),(318,'RU','Asia/Ust-Nera',11.00,11.00,11.00),(319,'RU','Asia/Vladivostok',11.00,11.00,11.00),(320,'RU','Asia/Yakutsk',10.00,10.00,10.00),(321,'RU','Asia/Yekaterinburg',6.00,6.00,6.00),(322,'RU','Europe/Kaliningrad',3.00,3.00,3.00),(323,'RU','Europe/Moscow',4.00,4.00,4.00),(324,'RU','Europe/Samara',4.00,4.00,4.00),(325,'RU','Europe/Volgograd',4.00,4.00,4.00),(326,'RW','Africa/Kigali',2.00,2.00,2.00),(327,'SA','Asia/Riyadh',3.00,3.00,3.00),(328,'SB','Pacific/Guadalcanal',11.00,11.00,11.00),(329,'SC','Indian/Mahe',4.00,4.00,4.00),(330,'SD','Africa/Khartoum',3.00,3.00,3.00),(331,'SE','Europe/Stockholm',1.00,2.00,1.00),(332,'SG','Asia/Singapore',8.00,8.00,8.00),(333,'SH','Atlantic/St_Helena',0.00,0.00,0.00),(334,'SI','Europe/Ljubljana',1.00,2.00,1.00),(335,'SJ','Arctic/Longyearbyen',1.00,2.00,1.00),(336,'SK','Europe/Bratislava',1.00,2.00,1.00),(337,'SL','Africa/Freetown',0.00,0.00,0.00),(338,'SM','Europe/San_Marino',1.00,2.00,1.00),(339,'SN','Africa/Dakar',0.00,0.00,0.00),(340,'SO','Africa/Mogadishu',3.00,3.00,3.00),(341,'SR','America/Paramaribo',-3.00,-3.00,-3.00),(342,'SS','Africa/Juba',3.00,3.00,3.00),(343,'ST','Africa/Sao_Tome',0.00,0.00,0.00),(344,'SV','America/El_Salvador',-6.00,-6.00,-6.00),(345,'SX','America/Lower_Princes',-4.00,-4.00,-4.00),(346,'SY','Asia/Damascus',2.00,3.00,2.00),(347,'SZ','Africa/Mbabane',2.00,2.00,2.00),(348,'TC','America/Grand_Turk',-5.00,-4.00,-5.00),(349,'TD','Africa/Ndjamena',1.00,1.00,1.00),(350,'TF','Indian/Kerguelen',5.00,5.00,5.00),(351,'TG','Africa/Lome',0.00,0.00,0.00),(352,'TH','Asia/Bangkok',7.00,7.00,7.00),(353,'TJ','Asia/Dushanbe',5.00,5.00,5.00),(354,'TK','Pacific/Fakaofo',13.00,13.00,13.00),(355,'TL','Asia/Dili',9.00,9.00,9.00),(356,'TM','Asia/Ashgabat',5.00,5.00,5.00),(357,'TN','Africa/Tunis',1.00,1.00,1.00),(358,'TO','Pacific/Tongatapu',13.00,13.00,13.00),(359,'TR','Europe/Istanbul',2.00,3.00,2.00),(360,'TT','America/Port_of_Spain',-4.00,-4.00,-4.00),(361,'TV','Pacific/Funafuti',12.00,12.00,12.00),(362,'TW','Asia/Taipei',8.00,8.00,8.00),(363,'TZ','Africa/Dar_es_Salaam',3.00,3.00,3.00),(364,'UA','Europe/Kiev',2.00,3.00,2.00),(365,'UA','Europe/Simferopol',2.00,4.00,4.00),(366,'UA','Europe/Uzhgorod',2.00,3.00,2.00),(367,'UA','Europe/Zaporozhye',2.00,3.00,2.00),(368,'UG','Africa/Kampala',3.00,3.00,3.00),(369,'UM','Pacific/Johnston',-10.00,-10.00,-10.00),(370,'UM','Pacific/Midway',-11.00,-11.00,-11.00),(371,'UM','Pacific/Wake',12.00,12.00,12.00),(372,'US','America/Adak',-10.00,-9.00,-10.00),(373,'US','America/Anchorage',-9.00,-8.00,-9.00),(374,'US','America/Boise',-7.00,-6.00,-7.00),(375,'US','America/Chicago',-6.00,-5.00,-6.00),(376,'US','America/Denver',-7.00,-6.00,-7.00),(377,'US','America/Detroit',-5.00,-4.00,-5.00),(378,'US','America/Indiana/Indianapolis',-5.00,-4.00,-5.00),(379,'US','America/Indiana/Knox',-6.00,-5.00,-6.00),(380,'US','America/Indiana/Marengo',-5.00,-4.00,-5.00),(381,'US','America/Indiana/Petersburg',-5.00,-4.00,-5.00),(382,'US','America/Indiana/Tell_City',-6.00,-5.00,-6.00),(383,'US','America/Indiana/Vevay',-5.00,-4.00,-5.00),(384,'US','America/Indiana/Vincennes',-5.00,-4.00,-5.00),(385,'US','America/Indiana/Winamac',-5.00,-4.00,-5.00),(386,'US','America/Juneau',-9.00,-8.00,-9.00),(387,'US','America/Kentucky/Louisville',-5.00,-4.00,-5.00),(388,'US','America/Kentucky/Monticello',-5.00,-4.00,-5.00),(389,'US','America/Los_Angeles',-8.00,-7.00,-8.00),(390,'US','America/Menominee',-6.00,-5.00,-6.00),(391,'US','America/Metlakatla',-8.00,-8.00,-8.00),(392,'US','America/New_York',-5.00,-4.00,-5.00),(393,'US','America/Nome',-9.00,-8.00,-9.00),(394,'US','America/North_Dakota/Beulah',-6.00,-5.00,-6.00),(395,'US','America/North_Dakota/Center',-6.00,-5.00,-6.00),(396,'US','America/North_Dakota/New_Salem',-6.00,-5.00,-6.00),(397,'US','America/Phoenix',-7.00,-7.00,-7.00),(398,'US','America/Shiprock',-7.00,-6.00,-7.00),(399,'US','America/Sitka',-9.00,-8.00,-9.00),(400,'US','America/Yakutat',-9.00,-8.00,-9.00),(401,'US','Pacific/Honolulu',-10.00,-10.00,-10.00),(402,'UY','America/Montevideo',-2.00,-3.00,-3.00),(403,'UZ','Asia/Samarkand',5.00,5.00,5.00),(404,'UZ','Asia/Tashkent',5.00,5.00,5.00),(405,'VA','Europe/Vatican',1.00,2.00,1.00),(406,'VC','America/St_Vincent',-4.00,-4.00,-4.00),(407,'VE','America/Caracas',-4.50,-4.50,-4.50),(408,'VG','America/Tortola',-4.00,-4.00,-4.00),(409,'VI','America/St_Thomas',-4.00,-4.00,-4.00),(410,'VN','Asia/Ho_Chi_Minh',7.00,7.00,7.00),(411,'VU','Pacific/Efate',11.00,11.00,11.00),(412,'WF','Pacific/Wallis',12.00,12.00,12.00),(413,'WS','Pacific/Apia',14.00,13.00,13.00),(414,'YE','Asia/Aden',3.00,3.00,3.00),(415,'YT','Indian/Mayotte',3.00,3.00,3.00),(416,'ZA','Africa/Johannesburg',2.00,2.00,2.00),(417,'ZM','Africa/Lusaka',2.00,2.00,2.00),(418,'ZW','Africa/Harare',2.00,2.00,2.00);
/*!40000 ALTER TABLE `timezone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trips` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fleet_id` int unsigned NOT NULL,
  `schedule_id` int unsigned NOT NULL,
  `pick_location_id` int unsigned NOT NULL,
  `drop_location_id` int unsigned NOT NULL,
  `vehicle_id` int unsigned NOT NULL,
  `distance` tinytext,
  `startdate` datetime NOT NULL,
  `journey_hour` tinytext,
  `child_seat` tinytext,
  `special_seat` tinytext NOT NULL,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext,
  `special_fair` tinytext,
  `weekend` tinytext,
  `company_name` tinytext NOT NULL,
  `stoppage` text,
  `facility` text,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trips_fleet_id_foreign` (`fleet_id`),
  KEY `trips_schedule_id_foreign` (`schedule_id`),
  KEY `trips_pick_location_id_foreign` (`pick_location_id`),
  KEY `trips_drop_location_id_foreign` (`drop_location_id`),
  KEY `trips_vehicle_id_foreign` (`vehicle_id`),
  CONSTRAINT `trips_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `trips_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`),
  CONSTRAINT `trips_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `trips_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  CONSTRAINT `trips_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
INSERT INTO `trips` VALUES (22,6,8,32,29,11,'300','2022-06-26 00:00:00','9','5','5','800','500','600','5','HANIF','32,28,41,29','1,2,3,4','1','2022-06-27 16:33:05','2023-01-21 10:11:40',NULL),(23,9,10,32,30,14,'800','2022-06-26 00:00:00','6','','','900','','','5','BABLU','32,27,41,30','','1','2022-06-27 17:50:49','2023-01-21 10:11:40',NULL),(24,10,12,30,32,15,'800','2022-06-26 00:00:00','8','4','4','1000','500','600',NULL,'ENA','30,33,34,41,32','1,2','1','2022-06-27 17:59:02','2023-01-21 10:11:40',NULL),(25,7,13,32,42,12,'900','2022-06-26 00:00:00','9','6','6','1200','600','700','5','SHOHAG','32,40,44,42','2,3,4','1','2022-06-27 18:04:23','2023-01-21 10:11:40',NULL),(26,8,11,42,32,13,'800','2022-06-26 00:00:00','8','','','1200','','',NULL,'SR','42,40,44,32','2,3','1','2022-06-27 18:16:38','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `login_email` varchar(100) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `recovery_code` varchar(100) DEFAULT NULL,
  `last_login` varchar(100) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `role` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_email` (`login_email`),
  UNIQUE KEY `login_mobile` (`login_mobile`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_detail` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` text NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `image` text,
  `address` varchar(100) DEFAULT NULL,
  `country` int NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_number` (`id_number`),
  KEY `user_detail_user_id_foreign` (`user_id`),
  CONSTRAINT `user_detail_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_detail`
--

LOCK TABLES `user_detail` WRITE;
/*!40000 ALTER TABLE `user_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_details` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `id_number` varchar(100) DEFAULT NULL,
  `id_type` tinytext,
  `image` tinytext,
  `address` tinytext,
  `country_id` int NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_number` (`id_number`),
  KEY `user_details_user_id_foreign` (`user_id`),
  CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (14,1,'Tate','Sipes','QVDDH331','passport','image/agent/1656215283_322c3e23c37b9d76acb7.jpg','Suite 027',201,'Lake Kenyahaven','4382','2021-09-04 15:14:23','2023-01-21 10:11:40',NULL),(163,168,'LOREM','IPSUM','abc098','Passport',NULL,'dhaka, bangladesh',18,'dhaka','1200','2022-06-27 17:13:18','2023-01-21 10:11:40',NULL),(164,170,'Customer','One','666999','Passport',NULL,'Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorme Ipsum Lorm',18,'Dhaka','5400','2022-06-28 15:08:21','2023-01-21 10:11:40',NULL),(165,171,'Customer','Two','98868','Nid',NULL,'Lorme Ipsum Lorme Lorme Ipsum LormeLorme Ipsum LormeLorme Ipsum LormeLorme Ipsum LormeLorme Ipsum Lo',18,'Dhaka','5400','2022-06-28 15:15:21','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `login_email` varchar(255) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `password` tinytext NOT NULL,
  `recovery_code` varchar(100) DEFAULT NULL,
  `slug` varchar(190) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `ip` tinytext,
  `role_id` int unsigned NOT NULL,
  `status` tinytext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_email` (`login_email`),
  UNIQUE KEY `slug` (`slug`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','66666666666','$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma',NULL,'DDSFM400','2021-09-02 08:09:00','Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)',1,'1','2021-09-02 19:40:05','2023-01-21 10:11:40',NULL),(168,'p1@p.com','77777777777','$2y$10$tYv7yu1gIE6HLyR5mar6pOEwNkJiicseHPlaQgDqfiJjJXfYEMWFi',NULL,'139f358c34',NULL,NULL,3,'1','2022-06-27 17:13:17','2023-01-21 10:11:40',NULL),(169,'a1@a.com','88888888888','$2y$10$z6I1evuJXNCbr2C6qA.BKuwOWNRxW7MDUeMcMHa9psmYH4tdvIGEu',NULL,'884e705d40',NULL,NULL,2,'1','2022-06-27 17:15:40','2023-01-21 10:11:40',NULL),(170,'c1@c.com','711111111','$2y$10$kshIfRDi4KlvLQDALq5oqeLwcL.nkuEArImHpdoCPJ6OIr0ySVsN6',NULL,'172c6333eb',NULL,NULL,3,'1','2022-06-28 15:08:21','2023-01-21 10:11:40',NULL),(171,'c2@c.com','885555','$2y$10$2PN.RL6.iWiQY88BRUxbSeW2Qz2XtCsJQT24LmQ.I80WMRcGeXFe6',NULL,'76c3f6e5d1',NULL,NULL,3,'1','2022-06-28 15:15:21','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicalimages`
--

DROP TABLE IF EXISTS `vehicalimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicalimages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int unsigned NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicalimages_vehicle_id_foreign` (`vehicle_id`),
  CONSTRAINT `vehicalimages_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicalimages`
--

LOCK TABLES `vehicalimages` WRITE;
/*!40000 ALTER TABLE `vehicalimages` DISABLE KEYS */;
INSERT INTO `vehicalimages` VALUES (33,11,'image/bus/1656321346_db2b1df23c707702e351.jpg','2022-06-27 15:15:46','2023-01-21 10:11:40',NULL),(34,11,'image/bus/1656321346_91026eea6de744cf461a.jpg','2022-06-27 15:15:46','2023-01-21 10:11:40',NULL),(35,11,'image/bus/1656321346_962b3736fc8f398b236a.jpg','2022-06-27 15:15:46','2023-01-21 10:11:40',NULL),(36,11,'image/bus/1656321346_87dde64083152dc69cce.jpg','2022-06-27 15:15:46','2023-01-21 10:11:40',NULL),(37,12,'image/bus/1656321868_424e379dd91ec7b774e1.jpg','2022-06-27 15:24:28','2023-01-21 10:11:40',NULL),(38,12,'image/bus/1656321868_d902830c252d1f3a1f8b.jpg','2022-06-27 15:24:28','2023-01-21 10:11:40',NULL),(39,12,'image/bus/1656321868_f854791a51f59210d988.jpg','2022-06-27 15:24:28','2023-01-21 10:11:40',NULL),(40,12,'image/bus/1656321868_28d7d7ca03fb92b2b898.jpg','2022-06-27 15:24:28','2023-01-21 10:11:40',NULL),(41,13,'image/bus/1656322018_98eb5c9f8d9262e60577.jpg','2022-06-27 15:26:58','2023-01-21 10:11:40',NULL),(42,13,'image/bus/1656322018_945930f801424768192e.jpg','2022-06-27 15:26:58','2023-01-21 10:11:40',NULL),(43,13,'image/bus/1656322018_c935c196284f0b54736a.jpg','2022-06-27 15:26:58','2023-01-21 10:11:40',NULL),(44,13,'image/bus/1656322018_ba0d9b524d334fc974dc.jpg','2022-06-27 15:26:58','2023-01-21 10:11:40',NULL),(45,14,'image/bus/1656322131_6350dce811c2350ef182.jpg','2022-06-27 15:28:51','2023-01-21 10:11:40',NULL),(46,14,'image/bus/1656322131_716dfc57e01967a3977f.jpg','2022-06-27 15:28:51','2023-01-21 10:11:40',NULL),(47,14,'image/bus/1656322131_ddee27579d07e6f4792a.jpg','2022-06-27 15:28:51','2023-01-21 10:11:40',NULL),(48,14,'image/bus/1656322131_e6628fc7d4d7e7e54fb4.jpg','2022-06-27 15:28:51','2023-01-21 10:11:40',NULL),(49,15,'image/bus/1656322252_1e2250e5f3d5f6327208.jpg','2022-06-27 15:30:52','2023-01-21 10:11:40',NULL),(50,15,'image/bus/1656322252_42f282d07ca98dfcbdb7.jpg','2022-06-27 15:30:52','2023-01-21 10:11:40',NULL),(51,15,'image/bus/1656322252_b5c17ac2a8eaaa34650e.jpg','2022-06-27 15:30:52','2023-01-21 10:11:40',NULL),(52,15,'image/bus/1656322252_3a763ebd91ade65502dc.jpg','2022-06-27 15:30:52','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `vehicalimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(100) NOT NULL,
  `fleet_id` int unsigned NOT NULL,
  `engine_no` varchar(100) NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `chasis_no` varchar(100) NOT NULL,
  `woner` varchar(100) NOT NULL,
  `woner_mobile` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `assign` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no` (`reg_no`),
  KEY `vehicles_fleet_id_foreign` (`fleet_id`),
  CONSTRAINT `vehicles_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (11,'AC-R-123',6,'AC-E-123','AC-M-123','AC-C-123','LOREM IPSUM','12111111111','HANIF','1','0','2022-06-27 15:15:46','2023-01-21 10:11:40',NULL),(12,'BUSINESS-R-123',7,'BUSINESS-E-123','BUSINESS-M-123','BUSINESS-C-123','LOREM IPSUM','13111111111','SHYAMOLI','1','0','2022-06-27 15:24:28','2023-01-21 10:11:40',NULL),(13,'NON-AC-R-123',8,'NON-AC-E-123','NON-AC-M-123','NON-AC-C-123','LOREM IPSUM','14111111111','SONYA','1','0','2022-06-27 15:26:58','2023-01-21 10:11:40',NULL),(14,'LOCAL-R-123',9,'LOCAL-E-123','LOCAL-M-123','LOCAL-C-123','LOREM IPSUM','15111111111','SOUDIA','1','0','2022-06-27 15:28:51','2023-01-21 10:11:40',NULL),(15,'WORLD-CLASS-R-123',10,'WORLD-CLASS-E-123','WORLD-CLASS-M-123','WORLD-CLASS-C-123','LOREM IPSUM','16111111111','NIRALA','1','0','2022-06-27 15:30:52','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websettings`
--

DROP TABLE IF EXISTS `websettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `websettings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `localize_name` text NOT NULL,
  `headerlogo` text NOT NULL,
  `favicon` text NOT NULL,
  `footerlogo` text NOT NULL,
  `logotext` text NOT NULL,
  `apptitle` text NOT NULL,
  `copyright` text NOT NULL,
  `headercolor` text NOT NULL,
  `footercolor` text NOT NULL,
  `bottomfootercolor` text NOT NULL,
  `buttoncolor` text NOT NULL,
  `buttoncolorhover` text NOT NULL,
  `buttontextcolor` text NOT NULL,
  `fontfamely` text NOT NULL,
  `tax_type` text NOT NULL,
  `country` int DEFAULT NULL,
  `timezone` text,
  `max_ticket` int NOT NULL,
  `currency` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websettings`
--

LOCK TABLES `websettings` WRITE;
/*!40000 ALTER TABLE `websettings` DISABLE KEYS */;
INSERT INTO `websettings` VALUES (2,'en','image/websetting/1655978324_10b0faacf09c0386ba34.png','image/websetting/1655899863_3aded0c9a7ae3ee9ae64.jpg','image/websetting/1656214119_01f101e686c05179a506.png','BUS365','BUS365','BUS365-All Rights Reserved','#04aa6b','#282a35','#04aa6b','#04aa6b','#016f2f','#ffffff','Varela','exclusive',18,'Asia/Dhaka',6,18,'2022-02-10 12:37:03','2023-01-21 10:11:40',NULL);
/*!40000 ALTER TABLE `websettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bus365'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-17 14:43:24
