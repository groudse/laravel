-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: acdcSite
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB-0+deb10u1

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
-- Table structure for table `conteneur_tri_point_de_collectes`
--

DROP TABLE IF EXISTS `conteneur_tri_point_de_collectes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conteneur_tri_point_de_collectes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteneur_tri_id` bigint(20) unsigned NOT NULL,
  `point_de_collecte_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conteneur_tri_point_de_collectes`
--

LOCK TABLES `conteneur_tri_point_de_collectes` WRITE;
/*!40000 ALTER TABLE `conteneur_tri_point_de_collectes` DISABLE KEYS */;
INSERT INTO `conteneur_tri_point_de_collectes` VALUES (16,83,16,NULL,NULL),(17,88,10,NULL,NULL),(20,91,26,NULL,NULL),(21,89,26,NULL,NULL),(22,92,25,NULL,NULL),(23,93,25,NULL,NULL),(24,93,27,NULL,NULL),(25,93,28,NULL,NULL);
/*!40000 ALTER TABLE `conteneur_tri_point_de_collectes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conteneur_tris`
--

DROP TABLE IF EXISTS `conteneur_tris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conteneur_tris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_conteneur` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_tri` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `hauteur` float DEFAULT NULL,
  `adresse_modem` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conteneur_tris`
--

LOCK TABLES `conteneur_tris` WRITE;
/*!40000 ALTER TABLE `conteneur_tris` DISABLE KEYS */;
INSERT INTO `conteneur_tris` VALUES (92,'cont_1','bleu',1.25,2.12,154,'FF23DE','2022-04-13 04:47:00','2022-04-13 04:47:00'),(93,'CONT_5','noir',42.155,1.3656,154,'FFRD78','2022-04-13 04:48:03','2022-04-13 04:48:03');
/*!40000 ALTER TABLE `conteneur_tris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,6,'ConteneurTriId','text','ConteneurTriId',0,1,1,1,1,1,'{}',1),(23,6,'PointCollecteId','text','PointCollecteId',0,1,1,1,1,1,'{}',2),(24,6,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',3),(25,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',4),(67,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(68,11,'nom_conteneur','text','Nom Conteneur',0,1,1,1,1,1,'{}',2),(69,11,'type_tri','text','Type Tri',0,1,1,1,1,1,'{}',3),(70,11,'latitude','text','Latitude',0,1,1,1,1,1,'{}',4),(71,11,'longitude','text','Longitude',0,1,1,1,1,1,'{}',5),(72,11,'hauteur','text','Hauteur',0,1,1,1,1,1,'{}',6),(73,11,'adresse_modem','text','Adresse Modem',0,1,1,1,1,1,'{}',7),(74,11,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',8),(75,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(76,11,'conteneur_tri_belongstomany_point_de_collecte_relationship','relationship','point_de_collectes',0,1,1,1,1,1,'{\"model\":\"App\\\\PointDeCollecte\",\"table\":\"point_de_collectes\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"nom_point_collecte\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"1\",\"taggable\":\"0\"}',10),(77,12,'id','text','Id',1,0,0,0,0,0,'{}',1),(78,12,'nom_point_collecte','text','Nom Point Collecte',0,1,1,1,1,1,'{}',2),(79,12,'adresse','text','Adresse',0,1,1,1,1,1,'{}',3),(80,12,'ville','text','Ville',0,1,1,1,1,1,'{}',4),(81,12,'latitude','text','Latitude',0,1,1,1,1,1,'{}',5),(82,12,'longitude','text','Longitude',0,1,1,1,1,1,'{}',6),(83,12,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',7),(84,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(85,12,'point_de_collecte_belongstomany_conteneur_tri_relationship','relationship','conteneur_tris',0,1,1,1,1,1,'{\"model\":\"App\\\\ConteneurTri\",\"table\":\"conteneur_tris\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"nom_conteneur\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"1\",\"taggable\":\"0\"}',9),(86,11,'conteneur_tri_hasmany_historique_conteneur_tri_relationship','relationship','historique_conteneur_tris',0,1,1,1,1,1,'{\"model\":\"App\\\\HistoriqueConteneurTri\",\"table\":\"historique_conteneur_tris\",\"type\":\"hasMany\",\"column\":\"conteneur_tri_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":\"0\"}',11),(97,12,'point_de_collecte_hasmany_historique_conteneur_tri_relationship','relationship','historique_conteneur_tris',0,1,1,1,1,1,'{\"model\":\"App\\\\HistoriqueConteneurTri\",\"table\":\"historique_conteneur_tris\",\"type\":\"hasMany\",\"column\":\"point_de_collecte_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(108,15,'id','text','Id',1,0,0,0,0,0,'{}',1),(109,15,'remplissage','text','Remplissage',0,1,1,1,1,1,'{}',2),(110,15,'batterie','text','Batterie',0,1,1,1,1,1,'{}',3),(111,15,'date','text','Date',0,1,1,1,1,1,'{}',4),(112,15,'point_de_collecte_id','text','Point De Collecte Id',1,1,1,1,1,1,'{}',5),(113,15,'conteneur_tri_id','text','Conteneur Tri Id',1,1,1,1,1,1,'{}',6),(114,15,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',7),(115,15,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(116,15,'historique_conteneur_tri_hasmany_point_de_collecte_relationship','relationship','point_de_collectes',0,1,1,1,1,1,'{\"model\":\"App\\\\PointDeCollecte\",\"table\":\"point_de_collectes\",\"type\":\"belongsTo\",\"column\":\"point_de_collecte_id\",\"key\":\"id\",\"label\":\"nom_point_collecte\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":\"0\"}',9),(117,15,'historique_conteneur_tri_belongsto_conteneur_tri_relationship','relationship','conteneur_tris',0,1,1,1,1,1,'{\"model\":\"App\\\\ConteneurTri\",\"table\":\"conteneur_tris\",\"type\":\"belongsTo\",\"column\":\"conteneur_tri_id\",\"key\":\"id\",\"label\":\"nom_conteneur\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":null}',10),(118,16,'id','text','Id',1,0,0,0,0,0,'{}',1),(119,16,'date','text','Date',0,1,1,1,1,1,'{}',2),(120,16,'remplissage','text','Remplissage',0,1,1,1,1,1,'{}',3),(121,16,'point_de_collecte_id','text','Point De Collecte Id',1,1,1,1,1,1,'{}',4),(122,16,'conteneur_tri_id','text','Conteneur Tri Id',1,1,1,1,1,1,'{}',5),(123,16,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',6),(124,16,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(125,16,'lefe_belongsto_point_de_collecte_relationship','relationship','point_de_collectes',0,1,1,1,1,1,'{\"model\":\"App\\\\PointDeCollecte\",\"table\":\"point_de_collectes\",\"type\":\"belongsTo\",\"column\":\"point_de_collecte_id\",\"key\":\"id\",\"label\":\"nom_point_collecte\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":null}',8),(126,16,'lefe_belongsto_conteneur_tri_relationship','relationship','conteneur_tris',0,1,1,1,1,1,'{\"model\":\"App\\\\ConteneurTri\",\"table\":\"conteneur_tris\",\"type\":\"belongsTo\",\"column\":\"conteneur_tri_id\",\"key\":\"id\",\"label\":\"nom_conteneur\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":null}',9),(127,11,'conteneur_tri_hasmany_lefe_relationship','relationship','leves',0,1,1,1,1,1,'{\"model\":\"App\\\\Leve\",\"table\":\"leves\",\"type\":\"hasOne\",\"column\":\"conteneur_tri_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":\"0\"}',12),(128,12,'code_postal','text','Code Postal',0,1,1,1,1,1,'{}',9),(129,12,'point_de_collecte_hasmany_lefe_relationship','relationship','leves',0,1,1,1,1,1,'{\"model\":\"App\\\\Leve\",\"table\":\"leves\",\"type\":\"hasMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"conteneur_tri_point_de_collectes\",\"pivot\":\"0\",\"taggable\":null}',11);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2022-01-28 09:04:54','2022-01-28 09:04:54'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2022-01-28 09:04:54','2022-01-28 09:04:54'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2022-01-28 09:04:54','2022-01-28 09:04:54'),(4,'historique_conteneur_tri','historique-conteneur-tri','Historique Conteneur Tri','Historique Conteneur Tris',NULL,'App\\HistoriqueConteneurTri',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2022-01-28 09:47:02','2022-01-28 09:47:02'),(5,'Emplacement_de_collecte','emplacement-de-collecte','Emplacement De Collecte','Emplacement De Collectes',NULL,'App\\EmplacementDeCollecte',NULL,NULL,NULL,1,0,'{\"order_column\":\"conteneur_tri_id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2022-01-28 09:53:23','2022-01-28 09:53:23'),(6,'emplacement_de_collectes','emplacement-de-collectes','Emplacement De Collecte','Emplacement De Collectes',NULL,'App\\EmplacementDeCollecte',NULL,NULL,NULL,1,0,'{\"order_column\":\"ConteneurTriId\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2022-01-28 10:00:32','2022-01-28 10:00:32'),(11,'conteneur_tris','conteneur-tris','Conteneur Tri','Conteneur Tris',NULL,'App\\ConteneurTri',NULL,NULL,NULL,1,0,'{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2022-02-02 06:54:35','2022-04-06 11:42:43'),(12,'point_de_collectes','point-de-collectes','Point De Collecte','Point De Collectes',NULL,'App\\PointDeCollecte',NULL,NULL,NULL,1,0,'{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2022-02-02 06:55:54','2022-03-09 13:57:35'),(15,'historique_conteneur_tris','historique-conteneur-tris','Historique Conteneur Tri','Historique Conteneur Tris',NULL,'App\\HistoriqueConteneurTri',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2022-02-02 12:49:00','2022-02-02 12:56:37'),(16,'leves','leves','Leve','Leves',NULL,'App\\Leve',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2022-02-02 13:34:38','2022-02-02 13:37:03');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emplacement_de_collectes`
--

DROP TABLE IF EXISTS `emplacement_de_collectes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emplacement_de_collectes` (
  `conteneur_tri_id` float DEFAULT NULL,
  `point_collecte_id` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `emplacement_de_collectes_conteneurtriid_unique` (`conteneur_tri_id`),
  UNIQUE KEY `emplacement_de_collectes_pointcollecteid_unique` (`point_collecte_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emplacement_de_collectes`
--

LOCK TABLES `emplacement_de_collectes` WRITE;
/*!40000 ALTER TABLE `emplacement_de_collectes` DISABLE KEYS */;
/*!40000 ALTER TABLE `emplacement_de_collectes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `historique_conteneur_tris`
--

DROP TABLE IF EXISTS `historique_conteneur_tris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historique_conteneur_tris` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `remplissage` float DEFAULT NULL,
  `batterie` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `point_de_collecte_id` bigint(20) unsigned NOT NULL,
  `conteneur_tri_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historique_conteneur_tris`
--

LOCK TABLES `historique_conteneur_tris` WRITE;
/*!40000 ALTER TABLE `historique_conteneur_tris` DISABLE KEYS */;
INSERT INTO `historique_conteneur_tris` VALUES (2,78,47,'2022-01-03',6,2,'2022-02-02 12:59:49','2022-02-02 12:59:49');
/*!40000 ALTER TABLE `historique_conteneur_tris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leves`
--

DROP TABLE IF EXISTS `leves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `remplissage` float DEFAULT NULL,
  `point_de_collecte_id` bigint(20) unsigned NOT NULL,
  `conteneur_tri_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leves`
--

LOCK TABLES `leves` WRITE;
/*!40000 ALTER TABLE `leves` DISABLE KEYS */;
INSERT INTO `leves` VALUES (1,'2022-07-12',89,6,2,'2022-02-02 13:48:43','2022-02-02 13:48:43'),(2,'2002-07-27',41,10,88,'2022-02-04 06:26:00','2022-04-06 11:42:15');
/*!40000 ALTER TABLE `leves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2022-01-28 09:04:55','2022-01-28 09:04:55',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2022-01-28 09:04:55','2022-01-28 09:04:55','voyager.settings.index',NULL),(11,1,'Historique Conteneur Tris','','_self',NULL,NULL,NULL,15,'2022-01-28 09:47:02','2022-01-28 09:47:02','voyager.historique-conteneur-tri.index',NULL),(12,1,'Emplacement De Collectes','','_self',NULL,NULL,NULL,16,'2022-01-28 09:53:23','2022-01-28 09:53:23','voyager.emplacement-de-collecte.index',NULL),(13,1,'Emplacement De Collectes','','_self',NULL,NULL,NULL,17,'2022-01-28 10:00:32','2022-01-28 10:00:32','voyager.emplacement-de-collectes.index',NULL),(18,1,'Conteneur Tris','','_self',NULL,NULL,NULL,18,'2022-02-02 06:54:35','2022-02-02 06:54:35','voyager.conteneur-tris.index',NULL),(19,1,'Point De Collectes','','_self',NULL,NULL,NULL,19,'2022-02-02 06:55:54','2022-02-02 06:55:54','voyager.point-de-collectes.index',NULL),(22,1,'Historique Conteneur Tris','','_self',NULL,NULL,NULL,20,'2022-02-02 12:49:00','2022-02-02 12:49:00','voyager.historique-conteneur-tris.index',NULL),(23,1,'Leves','','_self',NULL,NULL,NULL,21,'2022-02-02 13:34:38','2022-02-02 13:34:38','voyager.leves.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2022-01-28 09:04:55','2022-01-28 09:04:55');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2022_03_04_083807_create_students_table',2);
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
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2022-01-28 09:04:55','2022-01-28 09:04:55'),(2,'browse_bread',NULL,'2022-01-28 09:04:55','2022-01-28 09:04:55'),(3,'browse_database',NULL,'2022-01-28 09:04:55','2022-01-28 09:04:55'),(4,'browse_media',NULL,'2022-01-28 09:04:55','2022-01-28 09:04:55'),(5,'browse_compass',NULL,'2022-01-28 09:04:55','2022-01-28 09:04:55'),(6,'browse_menus','menus','2022-01-28 09:04:55','2022-01-28 09:04:55'),(7,'read_menus','menus','2022-01-28 09:04:55','2022-01-28 09:04:55'),(8,'edit_menus','menus','2022-01-28 09:04:55','2022-01-28 09:04:55'),(9,'add_menus','menus','2022-01-28 09:04:55','2022-01-28 09:04:55'),(10,'delete_menus','menus','2022-01-28 09:04:55','2022-01-28 09:04:55'),(11,'browse_roles','roles','2022-01-28 09:04:55','2022-01-28 09:04:55'),(12,'read_roles','roles','2022-01-28 09:04:55','2022-01-28 09:04:55'),(13,'edit_roles','roles','2022-01-28 09:04:55','2022-01-28 09:04:55'),(14,'add_roles','roles','2022-01-28 09:04:55','2022-01-28 09:04:55'),(15,'delete_roles','roles','2022-01-28 09:04:55','2022-01-28 09:04:55'),(16,'browse_users','users','2022-01-28 09:04:55','2022-01-28 09:04:55'),(17,'read_users','users','2022-01-28 09:04:55','2022-01-28 09:04:55'),(18,'edit_users','users','2022-01-28 09:04:55','2022-01-28 09:04:55'),(19,'add_users','users','2022-01-28 09:04:55','2022-01-28 09:04:55'),(20,'delete_users','users','2022-01-28 09:04:55','2022-01-28 09:04:55'),(21,'browse_settings','settings','2022-01-28 09:04:55','2022-01-28 09:04:55'),(22,'read_settings','settings','2022-01-28 09:04:55','2022-01-28 09:04:55'),(23,'edit_settings','settings','2022-01-28 09:04:55','2022-01-28 09:04:55'),(24,'add_settings','settings','2022-01-28 09:04:55','2022-01-28 09:04:55'),(25,'delete_settings','settings','2022-01-28 09:04:55','2022-01-28 09:04:55'),(26,'browse_historique_conteneur_tri','historique_conteneur_tri','2022-01-28 09:47:02','2022-01-28 09:47:02'),(27,'read_historique_conteneur_tri','historique_conteneur_tri','2022-01-28 09:47:02','2022-01-28 09:47:02'),(28,'edit_historique_conteneur_tri','historique_conteneur_tri','2022-01-28 09:47:02','2022-01-28 09:47:02'),(29,'add_historique_conteneur_tri','historique_conteneur_tri','2022-01-28 09:47:02','2022-01-28 09:47:02'),(30,'delete_historique_conteneur_tri','historique_conteneur_tri','2022-01-28 09:47:02','2022-01-28 09:47:02'),(31,'browse_Emplacement_de_collecte','Emplacement_de_collecte','2022-01-28 09:53:23','2022-01-28 09:53:23'),(32,'read_Emplacement_de_collecte','Emplacement_de_collecte','2022-01-28 09:53:23','2022-01-28 09:53:23'),(33,'edit_Emplacement_de_collecte','Emplacement_de_collecte','2022-01-28 09:53:23','2022-01-28 09:53:23'),(34,'add_Emplacement_de_collecte','Emplacement_de_collecte','2022-01-28 09:53:23','2022-01-28 09:53:23'),(35,'delete_Emplacement_de_collecte','Emplacement_de_collecte','2022-01-28 09:53:23','2022-01-28 09:53:23'),(36,'browse_emplacement_de_collectes','emplacement_de_collectes','2022-01-28 10:00:32','2022-01-28 10:00:32'),(37,'read_emplacement_de_collectes','emplacement_de_collectes','2022-01-28 10:00:32','2022-01-28 10:00:32'),(38,'edit_emplacement_de_collectes','emplacement_de_collectes','2022-01-28 10:00:32','2022-01-28 10:00:32'),(39,'add_emplacement_de_collectes','emplacement_de_collectes','2022-01-28 10:00:32','2022-01-28 10:00:32'),(40,'delete_emplacement_de_collectes','emplacement_de_collectes','2022-01-28 10:00:32','2022-01-28 10:00:32'),(61,'browse_conteneur_tris','conteneur_tris','2022-02-02 06:54:35','2022-02-02 06:54:35'),(62,'read_conteneur_tris','conteneur_tris','2022-02-02 06:54:35','2022-02-02 06:54:35'),(63,'edit_conteneur_tris','conteneur_tris','2022-02-02 06:54:35','2022-02-02 06:54:35'),(64,'add_conteneur_tris','conteneur_tris','2022-02-02 06:54:35','2022-02-02 06:54:35'),(65,'delete_conteneur_tris','conteneur_tris','2022-02-02 06:54:35','2022-02-02 06:54:35'),(66,'browse_point_de_collectes','point_de_collectes','2022-02-02 06:55:54','2022-02-02 06:55:54'),(67,'read_point_de_collectes','point_de_collectes','2022-02-02 06:55:54','2022-02-02 06:55:54'),(68,'edit_point_de_collectes','point_de_collectes','2022-02-02 06:55:54','2022-02-02 06:55:54'),(69,'add_point_de_collectes','point_de_collectes','2022-02-02 06:55:54','2022-02-02 06:55:54'),(70,'delete_point_de_collectes','point_de_collectes','2022-02-02 06:55:54','2022-02-02 06:55:54'),(81,'browse_historique_conteneur_tris','historique_conteneur_tris','2022-02-02 12:49:00','2022-02-02 12:49:00'),(82,'read_historique_conteneur_tris','historique_conteneur_tris','2022-02-02 12:49:00','2022-02-02 12:49:00'),(83,'edit_historique_conteneur_tris','historique_conteneur_tris','2022-02-02 12:49:00','2022-02-02 12:49:00'),(84,'add_historique_conteneur_tris','historique_conteneur_tris','2022-02-02 12:49:00','2022-02-02 12:49:00'),(85,'delete_historique_conteneur_tris','historique_conteneur_tris','2022-02-02 12:49:00','2022-02-02 12:49:00'),(86,'browse_leves','leves','2022-02-02 13:34:38','2022-02-02 13:34:38'),(87,'read_leves','leves','2022-02-02 13:34:38','2022-02-02 13:34:38'),(88,'edit_leves','leves','2022-02-02 13:34:38','2022-02-02 13:34:38'),(89,'add_leves','leves','2022-02-02 13:34:38','2022-02-02 13:34:38'),(90,'delete_leves','leves','2022-02-02 13:34:38','2022-02-02 13:34:38');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `point_de_collectes`
--

DROP TABLE IF EXISTS `point_de_collectes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `point_de_collectes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_point_collecte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `point_de_collectes`
--

LOCK TABLES `point_de_collectes` WRITE;
/*!40000 ALTER TABLE `point_de_collectes` DISABLE KEYS */;
INSERT INTO `point_de_collectes` VALUES (25,'pdc_test_loc','rrtt','talence',44.7929,-0.582018,'2022-04-08 11:55:15','2022-04-08 11:55:15',NULL),(27,'pdc_2','54 rue du fai','brug',1.25,2.5847,'2022-04-13 04:48:34','2022-04-13 04:48:34',88843),(28,'iuzet','ttrtr','trtr',78,7845,'2022-04-13 04:56:20','2022-04-13 04:56:20',NULL);
/*!40000 ALTER TABLE `point_de_collectes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2022-01-28 09:04:55','2022-01-28 09:04:55'),(2,'user','Normal User','2022-01-28 09:04:55','2022-01-28 09:04:55');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','admin@admin.com','users/default.png',NULL,'$2y$10$KgQhgrc4939qsuY1yfObMe4w1dGNFB08AZQmUr968NUg2V3wE9rzC',NULL,NULL,'2022-01-28 09:06:38','2022-01-28 09:06:38');
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

-- Dump completed on 2022-04-13  8:59:26
