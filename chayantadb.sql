-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: chayantadb
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo` int(11) NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_id` (`users_id`),
  CONSTRAINT `fk_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='utf8mb4_unicode_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES (1,'Sistemas Computacionales','Lorem ipsum ut commodo sunt sed voluptate est do in veniam excepteur nisi qui deserunt magna eu dolore qui nulla cillum sint nostrud in nostrud consectetur adipisicing cillum occaecat laborum irure nulla dolore laborum in adipisicing aute exercitation adipisicing in adipisicing occaecat consectetur proident ea adipisicing consequat est anim labore duis aliqua dolore minim ut non aliquip proident ullamco ullamco dolor aute sint laborum dolore qui laborum ex sit in exercitation consequat ea irure qui veniam sit nulla ut elit duis sed enim commodo amet fugiat enim nisi amet do sed magna dolor aute nisi exercitation culpa commodo amet mollit do eiusmod commodo laboris elit sit ut dolor ut veniam ea commodo ullamco commodo aliqua reprehenderit sit eiusmod commodo mollit velit nostrud nisi velit aliqua culpa in adipisicing dolore do mollit est tempor duis reprehenderit minim voluptate amet esse eu fugiat officia exercitation cillum duis in velit dolor et esse mollit aute sit et sit non aliquip reprehenderit tempor reprehenderit.','Tecnico Superior',3,'1526436257_Ejercicios.pdf',1,'2018-04-20 04:21:31','2018-05-16 06:04:17',NULL),(2,'Sistemas Informaticos',NULL,'Tecnico',3,NULL,NULL,'2018-04-20 04:21:43','2018-04-20 04:22:15','2018-04-20 04:22:15'),(3,'Artesania','Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse.','Tecnico Medio',2,'..',1,'2018-04-20 04:35:18','2018-05-04 08:22:51',NULL),(4,'Agropecuaria','Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse.','Tecnico Medio',2,'..',NULL,'2018-04-20 04:43:47','2018-05-04 08:23:22',NULL),(5,'Gastronomia',NULL,'Tecnico',3,'..',1,'2018-04-20 04:51:38','2018-04-20 04:54:22','2018-04-20 04:54:22'),(6,'Peinados','Peinados con todo tipo de estilos','Tecnico',1,'foto_saul_2.png',1,'2018-04-20 07:39:23','2018-04-20 07:59:41','2018-04-20 07:59:41'),(7,'Belleza Integral','Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse. Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse.','Tecnico Medio',2,'1524197311_presentacionHackWeb.pdf',1,'2018-04-20 08:08:31','2018-05-04 08:23:59',NULL),(8,'Confeccion Textil','Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse.','Tecnico Medio',2,'1524198841_presentacionHackWeb.pdf',1,'2018-04-20 08:34:01','2018-05-04 08:24:24',NULL),(9,'Tejido Industrial','Reprehenderit aute aliquip irure ut ex sit ut enim magna adipisicing pariatur qui cupidatat et eu proident quis ad est mollit enim commodo consectetur sunt mollit nostrud irure excepteur do officia veniam dolor mollit voluptate esse.','Tecnico Medio',1,'1524270306_presentacionHackWeb.pdf',NULL,'2018-04-20 08:43:31','2018-05-04 08:25:02',NULL),(10,'nueva','carrera con el fk null','Tecnico Medio',2,'1526576849_README_3.pdf',NULL,'2018-05-17 21:07:30','2018-05-17 21:08:35','2018-05-17 21:08:35');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunicados`
--

DROP TABLE IF EXISTS `comunicados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comunicados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comunicados_users_id_foreign` (`users_id`),
  CONSTRAINT `comunicados_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunicados`
--

LOCK TABLES `comunicados` WRITE;
/*!40000 ALTER TABLE `comunicados` DISABLE KEYS */;
INSERT INTO `comunicados` VALUES (1,'2018-04-23 00:00:00','Pagina Web Funcionando','La pagina web de la insitucion ya esta en pleno funcionamiento','Alta',1,'2018-04-23 18:58:10','2018-04-23 18:58:10',NULL),(2,'2018-04-23 00:00:00','Ya esta solucionado','La pagina en verda y aesta solucionado','Baja',1,'2018-04-23 19:07:11','2018-04-23 19:09:32','2018-04-23 19:09:32'),(3,'2018-04-23 00:00:00','Comunicado urgente','Se comunica a todos los estudiantes de la carrera de textil a la reunion urgente que se llevara acabo el dia miercoles 21 de mayo a horas 12:00 en ambientes del insituto. Se ruega puntualidad porque se tomara asistencia.\r\n\r\nEl centro de estudiantes','Alta',1,'2018-04-23 19:41:25','2018-05-17 21:15:28',NULL);
/*!40000 ALTER TABLE `comunicados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento_bibliograficos`
--

DROP TABLE IF EXISTS `documento_bibliograficos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento_bibliograficos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilitadors_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documento_bibliograficos_facilitadors_id_foreign` (`facilitadors_id`),
  CONSTRAINT `documento_bibliograficos_facilitadors_id_foreign` FOREIGN KEY (`facilitadors_id`) REFERENCES `facilitadors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento_bibliograficos`
--

LOCK TABLES `documento_bibliograficos` WRITE;
/*!40000 ALTER TABLE `documento_bibliograficos` DISABLE KEYS */;
INSERT INTO `documento_bibliograficos` VALUES (1,'2018-04-29 15:21:48','Apuntes de clases','Apuntes de la clase de fisica matematica','1525015308_Apuntes9_18597.pdf',2,'2018-04-29 19:21:48','2018-04-29 19:21:48',NULL),(3,'2018-04-29 15:59:05','Apuntes de quimica','Quima para novatos','1525017545_CarnegieDale-CmoGanarAmigoseInfluirsobrelasPersonas.pdf',1,'2018-04-29 19:59:05','2018-05-17 21:20:41',NULL),(4,'2018-04-29 16:10:41','Quimica General','libro de quimica general para la materia','1526577492_README_3.pdf',1,'2018-04-29 20:10:41','2018-05-17 21:18:12',NULL);
/*!40000 ALTER TABLE `documento_bibliograficos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento_institucionals`
--

DROP TABLE IF EXISTS `documento_institucionals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento_institucionals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documento_institucionals_users_id_foreign` (`users_id`),
  CONSTRAINT `documento_institucionals_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento_institucionals`
--

LOCK TABLES `documento_institucionals` WRITE;
/*!40000 ALTER TABLE `documento_institucionals` DISABLE KEYS */;
INSERT INTO `documento_institucionals` VALUES (1,'2018-04-23 16:02:31','Convocatoria de trabajo','Esta es la convocatoria para el puesto de ingeniero informatico para el departamento de sistemas y otro mas no se por que','https://saulmamani.github.io','Alta',1,'2018-04-23 20:02:31','2018-04-23 20:07:20',NULL),(2,'2018-04-27 14:45:53','Convocatoria Nacial','Convocatoria nacional de senasag','1524840540_CarnegieDale-CmoGanarAmigoseInfluirsobrelasPersonas.pdf','Alta',1,'2018-04-27 18:45:53','2018-04-27 18:49:00',NULL),(3,'2018-04-27 14:49:56','nueva convocatoria','una nueva convocatoria','1524840596_EjercicioExamenFisicoquimica.pdf','Alta',1,'2018-04-27 18:49:56','2018-04-27 18:49:56',NULL),(4,'2018-05-17 02:35:09','comvocatoria rapida','esta es una comvocatoria rapida','1526524509_README_3.pdf','Alta',1,'2018-05-17 06:35:09','2018-05-17 06:35:09',NULL);
/*!40000 ALTER TABLE `documento_institucionals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigoRUDE` int(11) NOT NULL,
  `ci` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expedido` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `lugarNacimiento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoCivil` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anioIngreso` int(11) NOT NULL,
  `carrera_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `estudiantes_carrera_id_foreign` (`carrera_id`),
  CONSTRAINT `estudiantes_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,789776,'8978768','Or','Jorge','Romanof Estila','1984-04-10 00:00:00','Bolivia','boliviana','Soltero','Varon','0',2010,3,'2018-04-23 16:48:30','2018-04-23 16:48:30',NULL),(2,123456,'3094569','Pt','Jose','Ali Mesa','2000-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','0',2010,1,'2018-04-23 23:50:47','2018-04-23 23:53:18','2018-04-23 23:53:18'),(3,123456,'3094569','Pt','Jose','Ali Mesa','2000-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','0',2010,1,'2018-04-23 23:51:17','2018-04-23 23:53:13','2018-04-23 23:53:13'),(4,123456,'3094569','Pt','Jose','Ali Mesa','2000-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','0',2010,1,'2018-04-23 23:51:55','2018-04-23 23:53:08','2018-04-23 23:53:08'),(5,123456,'3094569','Pt','Jose','Ali Mesa','2000-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','0',2010,1,'2018-04-23 23:52:24','2018-04-24 00:22:01','2018-04-24 00:22:01'),(6,666666,'87987987','Pt','Jhonny','Loayza','2018-04-10 00:00:00','Bolivia','boliviano','Soltero','Varon','77889787',2010,4,'2018-04-24 02:11:09','2018-04-29 20:56:25',NULL),(7,555555,'1234567','Pt','Jhilda Fabiola','Pelaez Peres','1999-03-17 00:00:00','Potosi','boliviana','Soltero','Mujer','76138273',2016,1,'2018-05-20 19:13:51','2018-05-20 19:13:51',NULL);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilitadors`
--

DROP TABLE IF EXISTS `facilitadors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facilitadors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigoRDA` int(11) NOT NULL,
  `ci` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expedido` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `lugarNacimiento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoCivil` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facilitadors_carrera_id_foreign` (`carrera_id`),
  CONSTRAINT `facilitadors_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='utf8mb4_unicode_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilitadors`
--

LOCK TABLES `facilitadors` WRITE;
/*!40000 ALTER TABLE `facilitadors` DISABLE KEYS */;
INSERT INTO `facilitadors` VALUES (1,3095304,'30095304','Pt','Abimael Richar','Layme Flores','1982-02-05 00:00:00','Potosi','boliviana','Soltero','Varon','76137269','Ingeniero',4,'2018-04-23 07:18:25','2018-05-17 21:19:01',NULL),(2,123455,'7865475','Pt','Guido','Loayza','2018-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','76123489','Profesor',3,'2018-04-23 16:11:33','2018-04-23 16:22:15',NULL),(3,666666,'30954389','Pt','Juan','Perez','2018-04-23 00:00:00','Bolivia','boliviana','Soltero','Varon','8765432','ninguno',3,'2018-04-23 23:58:38','2018-04-24 00:04:40','2018-04-24 00:04:40'),(4,666666,'7678689','Pt','Jose','Perez','2018-03-26 00:00:00','Bolivia','boliviana','Soltero','Varon','9798687','ninguno',1,'2018-04-24 00:07:00','2018-04-24 00:07:19','2018-04-24 00:07:19'),(5,666666,'30945699','Pt','Miriam','Perez','2018-04-23 00:00:00','Bolivia','boliviana','Soltero','Mujer','9878979','Profesora',1,'2018-04-24 00:11:40','2018-04-24 00:13:38','2018-04-24 00:13:38'),(6,666666,'30945699','Pt','Miriam','Perez','2018-04-23 00:00:00','Bolivia','boliviana','Soltero','Mujer','9878979','Profesora',1,'2018-04-24 00:12:33','2018-04-24 00:13:32','2018-04-24 00:13:32'),(7,666661,'6786868','Pt','Lidia','Tangara Marce','2010-04-16 00:00:00','Bolivia','boliviana','Soltero','Varon','7897987',NULL,4,'2018-04-24 00:28:34','2018-04-29 18:10:07',NULL),(8,666667,'8798797','Pt','alsdjflkj','jslkjfsl','2018-04-24 00:00:00','sjdkfjl','lkjlksdfjl','Soltero','Varon','68767868',NULL,4,'2018-04-24 02:00:08','2018-04-24 02:05:40',NULL);
/*!40000 ALTER TABLE `facilitadors` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_04_20_001758_create_carreras_table',2),(4,'2018_04_20_014014_create_comunicados_table',3),(5,'2018_04_23_031040_create_facilitadors_table',4),(6,'2018_04_23_123854_create_estudiantes_table',5),(7,'2018_04_23_145127_create_comunicados_table',6),(8,'2018_04_23_154800_create_documento_institucionals_table',7),(9,'2018_04_23_161416_create_documento_bibliograficos_table',8),(10,'2018_04_29_161416_create_documento_bibliograficos_table',9);
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
INSERT INTO `password_resets` VALUES ('luas0_1@yahoo.es','$2y$10$uEchEoejf7W1/0k1lEpROe8uk/7M9JZ/O56EOkZ58bgR1kfhTL0se','2018-04-20 06:14:32');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
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
  `cargo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Crisoldo Porco Agudo','luas0_1@yahoo.es','$2y$10$KarA8MYrks3OZedEuwVT7uFRq.HTnHYXD58AeL7a6RcWa5Rq3Uspu',NULL,'Administrador','tZTxbeninxXS01CaxrdkhsJlIWC4u2B3LrCiadfXLqv52m0Ir7Tz2vSeINuZ','2018-04-20 03:30:26','2018-04-20 03:30:26',NULL),(2,'Lidia Tangara Marce','lidia@yahoo.es','$2y$10$Ov9gBalWWyMcuvNtFiwDzueOopLplBm197wAJPDxaeUezCjgSdcSy',NULL,'Secretaria','v3kMBybxWsGzngkO9qVEo2QphraCjfDXca7VsmPDKTAoONPWSmNuS7U4UjcG','2018-04-23 21:30:25','2018-04-23 21:30:25',NULL),(3,'Silvia','silvia@yahoo.es','$2y$10$xoaDSF43hlr3piGurW4GZenzE.xVp.W0uS3OTnYHpNNJO.mtA8kje','secretaria','Secretaria','Z0TxAnnnhzIiPqcz1voWcX7R23JPJYhm0WZon4BKfOR0dcaofWTSm8aEWWME','2018-04-23 22:39:37','2018-04-23 22:39:37',NULL),(4,'Pedro Carrasco','pedro@hotmail.com','$2y$10$GXtZPU5UGTdb00F..YhHx.heH5rsAPqaDVd6KaB14nY1t74SGLJoS','uno','Secretaria',NULL,'2018-04-23 22:41:36','2018-05-22 19:27:51','2018-05-22 19:27:51'),(5,'Lara correct','lara@lara.com','$2y$10$DbLtqcL3u7tqlDJ6ZArt6uaGNDAbUZBrxN9CLpKJHopzo7ybJzj7O','sdunld','Secretaria',NULL,'2018-04-23 22:43:55','2018-05-22 19:21:46','2018-05-22 19:21:46'),(18,'alsdjflkj jslkjfsl','rda666667','$2y$10$2lIaJp9ha3vrNZr9nrPtp.clyCdxYnsANbtebDm8tamPMIccO/E5O','','Facilitador',NULL,'2018-04-24 02:00:09','2018-04-24 02:00:09',NULL),(20,'Lidia Tangara Marce','rda666661','$2y$10$M6uVNQM76U9aOagbV0mkkuQiqmaJARqFuND6nKo0rn2y3cWNsTTlO','','Facilitador','Cx5ow6vi9q9tZEQncD6GuZbx01v36HqHqwtQlsCaWCnsnmF3d8j5x6YKdDoK','2018-04-29 18:10:07','2018-04-29 18:10:07',NULL),(22,'Jhonny Loayza','666666','$2y$10$m4LqPp4vhcE3y8FyuqFEDeq/CsEGAaEjgC2GEjeXkfur7nZBxN/Ge','','Estudiante','SsToTMYMgZrzjXqjeBBkJvCP2X1Shs9YZEFOIX8CsK0XFmfNjtdxNvhcj5QH','2018-04-29 20:56:25','2018-04-29 20:56:25',NULL),(24,'Abimael Richar Layme Flores','rda3095304','$2y$10$CjBRm4d/e2gpAxKsojLQmuhurfcD1WmgHx1Uth8E/cE4ye6oVff72','','Facilitador',NULL,'2018-05-17 21:19:01','2018-05-17 21:19:01',NULL),(25,'Jhilda Fabiola Pelaez Peres','555555','$2y$10$Oddw3RkrK5NFe7AVPzblEub2DesN2I4ljEJ7VmVxzINXM2ics.fmK','','Estudiante',NULL,'2018-05-20 19:13:51','2018-05-20 19:13:51',NULL);
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

-- Dump completed on 2018-05-22 11:30:09
