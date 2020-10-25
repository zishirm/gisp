-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gisp
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `gen_authorisation`
--

DROP TABLE IF EXISTS `gen_authorisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gen_authorisation` (
  `gen_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gen_authorisation`
--

LOCK TABLES `gen_authorisation` WRITE;
/*!40000 ALTER TABLE `gen_authorisation` DISABLE KEYS */;
INSERT INTO `gen_authorisation` VALUES ('REQ20201024050958','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','John Doe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0);
/*!40000 ALTER TABLE `gen_authorisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gen_req`
--

DROP TABLE IF EXISTS `gen_req`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gen_req` (
  `gen_id` varchar(100) NOT NULL,
  `gen_requestor` varchar(100) NOT NULL,
  `gen_name` varchar(100) NOT NULL,
  `gen_description` text NOT NULL,
  `impact_analysis` text NOT NULL,
  `req_justification` text NOT NULL,
  `req_date` datetime NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gen_req`
--

LOCK TABLES `gen_req` WRITE;
/*!40000 ALTER TABLE `gen_req` DISABLE KEYS */;
INSERT INTO `gen_req` VALUES ('REQ20201024050958','John Doe','Test','Test','Urgent','<p>Test Ex</p>\r\n','2020-10-24 05:10:31',0);
/*!40000 ALTER TABLE `gen_req` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generic_auth`
--

DROP TABLE IF EXISTS `generic_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generic_auth` (
  `gen_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generic_auth`
--

LOCK TABLES `generic_auth` WRITE;
/*!40000 ALTER TABLE `generic_auth` DISABLE KEYS */;
INSERT INTO `generic_auth` VALUES ('REQ20201024051236','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024051236','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024051236','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024061118','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','John Doe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024083200','Assign To','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Tapiwa Barwe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024084337','John Doe','Head GISP','-','2000-01-01 01:00:00','Tapiwa Barwe','Deputy Head','-','2000-01-01 01:00:00','ethan Barwe','Supervisor','N','2020-10-24 21:13:14','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,3,1,0);
/*!40000 ALTER TABLE `generic_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generic_request`
--

DROP TABLE IF EXISTS `generic_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generic_request` (
  `gen_id` varchar(100) NOT NULL,
  `gen_requestor` varchar(100) NOT NULL,
  `gen_name` varchar(100) NOT NULL,
  `gen_description` text NOT NULL,
  `impact_analysis` text NOT NULL,
  `req_justification` text NOT NULL,
  `req_date` datetime NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generic_request`
--

LOCK TABLES `generic_request` WRITE;
/*!40000 ALTER TABLE `generic_request` DISABLE KEYS */;
INSERT INTO `generic_request` VALUES ('REQ20201024051236','John Doe','Test','Test Desc','Urgent','<p>Test Explanation</p>\r\n','2020-10-24 05:16:35',0),('REQ20201024061118','John Doe','Lorem Ipsum is simply dummy',' of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic types','Urgent','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a rea<strong>der will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ips</strong>um</p>\r\n\r\n<blockquote>\r\n<p>is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors</p>\r\n</blockquote>\r\n\r\n<pre>\r\nnow use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</pre>\r\n','2020-10-24 06:14:12',0),('REQ20201024083200','Tapiwa Barwe','Lorem Ipsum is simply dummy','Test Request Description','Urgent','<p>Tets The Request Body</p>\r\n','2020-10-24 08:32:44',0),('REQ20201024084337','Tapiwa Barwe','Lorem Ipsum is simply dummy','Lorem Ipsum is simply dummy','Urgent','<p>Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy v&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy&nbsp;Lorem Ipsum is simply dummy</p>\r\n','2020-10-24 08:44:35',0);
/*!40000 ALTER TABLE `generic_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generic_uploads`
--

DROP TABLE IF EXISTS `generic_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generic_uploads` (
  `id` int(10) NOT NULL,
  `gen_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(10) DEFAULT NULL,
  `file_format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `data` mediumblob DEFAULT NULL,
  `uploader` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generic_uploads`
--

LOCK TABLES `generic_uploads` WRITE;
/*!40000 ALTER TABLE `generic_uploads` DISABLE KEYS */;
INSERT INTO `generic_uploads` VALUES (0,'REQ20201024050958','req20201024050958_aaron_cv.pdf',NULL,'pdf','2020-10-24 05:10:31',NULL,'John Doe'),(0,'REQ20201024051236','req20201024051236_aaron_cv.pdf',NULL,'pdf','2020-10-24 05:13:14',NULL,'John Doe'),(0,'REQ20201024051236','req20201024051236_aaron_cv.pdf',NULL,'pdf','2020-10-24 05:15:28',NULL,'John Doe'),(0,'REQ20201024051236','req20201024051236_aaron_cv.pdf',NULL,'pdf','2020-10-24 05:16:35',NULL,'John Doe'),(0,'REQ20201024061118','req20201024061118_aaron_cv.pdf',NULL,'pdf','2020-10-24 06:14:12',NULL,'John Doe'),(0,'REQ20201024061118','req20201024061118_dissertation chapter1.pdf',NULL,'pdf','2020-10-24 06:14:12',NULL,'John Doe'),(0,'REQ20201024083200','req20201024083200_dissertation chapter1.pdf',NULL,'pdf','2020-10-24 08:32:44',NULL,'Tapiwa Barwe'),(0,'REQ20201024084337','req20201024084337_aaron_cv.pdf',NULL,'pdf','2020-10-24 08:44:35',NULL,'Tapiwa Barwe');
/*!40000 ALTER TABLE `generic_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lev_app`
--

DROP TABLE IF EXISTS `lev_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lev_app` (
  `lev_id` varchar(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `employee_number` int(20) NOT NULL,
  `date_started` date NOT NULL,
  `leave_days` varchar(22) NOT NULL,
  `emp_address` text NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `req_time` date NOT NULL,
  `explanation` text NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lev_app`
--

LOCK TABLES `lev_app` WRITE;
/*!40000 ALTER TABLE `lev_app` DISABLE KEYS */;
INSERT INTO `lev_app` VALUES ('LEA20201024045449','John Doe','Test','Test',0,'1000-01-01','34','Test Address HArare','John Mkeson','+12548987','2020-10-24','<p>Lorep ipsum what what</p>\r\n',0),('LEA20201024083350','Tapiwa Barwe','Test Jobtitle','C5',23232,'1000-01-01','34','ewrwe wer wer wer wer',' wer wer wer wer','ewr wer wer ewr wer ','2020-10-24','<p>ewr ewr erretdf sfdsfsdf werew</p>\r\n',0);
/*!40000 ALTER TABLE `lev_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lev_authorisation`
--

DROP TABLE IF EXISTS `lev_authorisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lev_authorisation` (
  `lev_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lev_authorisation`
--

LOCK TABLES `lev_authorisation` WRITE;
/*!40000 ALTER TABLE `lev_authorisation` DISABLE KEYS */;
INSERT INTO `lev_authorisation` VALUES ('LEA20201024045449','John Doe','Test User Jobtitle','-','2000-01-01 01:00:00','','','N','2020-10-24 21:20:17','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('LEA20201024083350','John Doe','Test User Jobtitle','-','2000-01-01 01:00:00','','','Y','2020-10-24 21:20:31','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Tapiwa Barwe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',1,1,1,0);
/*!40000 ALTER TABLE `lev_authorisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lev_uploads`
--

DROP TABLE IF EXISTS `lev_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lev_uploads` (
  `id` int(10) NOT NULL,
  `lev_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(10) DEFAULT NULL,
  `file_format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `data` mediumblob DEFAULT NULL,
  `uploader` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lev_uploads`
--

LOCK TABLES `lev_uploads` WRITE;
/*!40000 ALTER TABLE `lev_uploads` DISABLE KEYS */;
INSERT INTO `lev_uploads` VALUES (0,'LEA20201024045449','_aaron_cv.docx',NULL,'docx','2020-10-24 04:56:05',NULL,'John Doe');
/*!40000 ALTER TABLE `lev_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procurement_auth`
--

DROP TABLE IF EXISTS `procurement_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procurement_auth` (
  `proc_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procurement_auth`
--

LOCK TABLES `procurement_auth` WRITE;
/*!40000 ALTER TABLE `procurement_auth` DISABLE KEYS */;
INSERT INTO `procurement_auth` VALUES ('REQ20201024050220','Assign To','','-','2000-01-01 01:00:00','','','Y','2020-10-24 21:59:16','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','John Doe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',1,1,1,0),('REQ20201024051816','Assign To','','-','2000-01-01 01:00:00','','','Y','2020-10-24 21:59:33','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Assign To',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',1,1,1,0),('REQ20201024061514','Assign To','','-','2000-01-01 01:00:00','','','Y','2020-10-24 21:58:56','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Malvin Zishiri',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',1,1,1,0),('REQ20201024072934','Assign To','','-','2000-01-01 01:00:00','','','N','2020-10-24 21:59:08','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Assign To',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,1,1,0),('REQ20201024213758','ethan Barwe','Supervisor','-','2000-01-01 01:00:00','John Doe','Head GISP','-','2000-01-01 01:00:00','Tapiwa Barwe','Deputy Head','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Tapiwa Barwe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',0,3,1,0),('PRC20201024214113','ethan Barwe','Supervisor','-','2000-01-01 01:00:00','John Doe','Head GISP','-','2000-01-01 01:00:00','Tapiwa Barwe','Deputy Head','-','2000-01-01 01:00:00','','','Y','2020-10-24 21:55:41','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','','','-','2000-01-01 01:00:00','Tapiwa Barwe',0,'-','2000-01-01 01:00:00','2000-01-01 01:00:00',1,3,1,0);
/*!40000 ALTER TABLE `procurement_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procurement_req`
--

DROP TABLE IF EXISTS `procurement_req`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procurement_req` (
  `proc_id` varchar(100) NOT NULL,
  `gen_requestor` varchar(100) NOT NULL,
  `gen_name` varchar(100) NOT NULL,
  `gen_description` text NOT NULL,
  `impact_analysis` text NOT NULL,
  `req_justification` text NOT NULL,
  `req_date` datetime NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procurement_req`
--

LOCK TABLES `procurement_req` WRITE;
/*!40000 ALTER TABLE `procurement_req` DISABLE KEYS */;
INSERT INTO `procurement_req` VALUES ('REQ20201024050220','John Doe','Procurement Request','Description TEst','Normal','<p>Test Explanation</p>\r\n','2020-10-24 05:04:17',0),('REQ20201024051816','John Doe','Procurement Request','','Select One','','2020-10-24 05:18:31',0),('REQ20201024061514','John Doe','Procurement Request','Lorem Ipsum is simply dummy','Urgent','<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.</p>\r\n\r\n<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p><strong>It has survived not only five <em>centuries</em>, but also the leap into electronic typesetting, remaining essentially unchang</strong>ed.</p>\r\n\r\n<blockquote>\r\n<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</blockquote>\r\n','2020-10-24 06:17:17',0),('REQ20201024072934','John Doe','Procurement Request','','Select One','','2020-10-24 07:30:11',0),('REQ20201024213758','','Procurement Request','Test','Urgent','<p>Test Test Test</p>\r\n','2020-10-24 21:38:51',0),('PRC20201024214113','','Procurement Request','Test','Urgent','<p>Test Test Test</p>\r\n','2020-10-24 21:41:34',0);
/*!40000 ALTER TABLE `procurement_req` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procurement_uploads`
--

DROP TABLE IF EXISTS `procurement_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procurement_uploads` (
  `id` int(10) NOT NULL,
  `proc_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(10) DEFAULT NULL,
  `file_format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `data` mediumblob DEFAULT NULL,
  `uploader` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procurement_uploads`
--

LOCK TABLES `procurement_uploads` WRITE;
/*!40000 ALTER TABLE `procurement_uploads` DISABLE KEYS */;
INSERT INTO `procurement_uploads` VALUES (0,'REQ20201024051816','req20201024051816_aaron_cv.docx',NULL,'docx','2020-10-24 05:18:31',NULL,'John Doe'),(0,'REQ20201024051816','req20201024051816_aaron_cv.pdf',NULL,'pdf','2020-10-24 05:18:31',NULL,'John Doe'),(0,'REQ20201024061514','req20201024061514_aaron_cv.docx',NULL,'docx','2020-10-24 06:17:17',NULL,'John Doe'),(0,'REQ20201024061514','req20201024061514_aaron_cv.pdf',NULL,'pdf','2020-10-24 06:17:17',NULL,'John Doe'),(0,'REQ20201024213758','req20201024213758_aaron_cv.pdf',NULL,'pdf','2020-10-24 21:38:51',NULL,''),(0,'PRC20201024214113','prc20201024214113_aaron_cv.pdf',NULL,'pdf','2020-10-24 21:41:34',NULL,'');
/*!40000 ALTER TABLE `procurement_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `initials` varchar(10) NOT NULL,
  `jobtitle` varchar(255) DEFAULT NULL,
  `user_group` varchar(50) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `department` int(5) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `cellphone` varchar(30) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `tel_extension` varchar(15) DEFAULT NULL,
  `manager` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `active` int(9) NOT NULL DEFAULT 1,
  `date_of_registration` date DEFAULT '2020-01-01',
  `last_logged` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Staff',NULL,NULL,'Staff','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'staff@nmbz.co.zw','staff','123456',1,'default.jpg',1,'2000-01-01','2000-01-01 00:00:00'),(0,'John',NULL,'Doe','John Doe','','Head GISP','admin','admin',1,'Head Office','0123456987','23525','212511',78,'couragetbarwe@gmail.com','johnd','123456',1,'default.jpg',1,'2020-01-01','2020-10-23 22:58:40'),(0,'Malvin',NULL,'Zishiri','Malvin Zishiri','','Test Jobtitle','','admin',3,'Test address',NULL,NULL,NULL,NULL,'couragepeacebarwe@gmail.com','malvinz','123456',NULL,NULL,1,'2020-01-01','2020-10-07 17:44:30'),(0,'','','',' ','','','','',1,'','+263 (242) 759601-6','04 759651-9','',1491,'','','123456',NULL,'default.jpg',1,'2020-10-18','2020-10-18 16:55:48'),(0,'Tapiwa','','Barwe','Tapiwa Barwe','','Deputy Head','','',1,'Here','+263 (242) 759601-6','04 759651-9','211',1491,'courageb@nmbz.co.zw','courageb@nmbz.co.zw','123456',NULL,'default.jpg',1,'2020-10-24','2020-10-24 19:55:40'),(0,'ethan','','Barwe','ethan Barwe','','Supervisor','','',1,'Here','+263 (242) 759601-6','04 759651-9','211',1491,'ethan@nmbz.co.zw','ethan@nmbz.co.zw','123456',NULL,'default.jpg',1,'2020-10-24','2020-10-24 20:54:10'),(0,'Tapiwanashe','','Barwe','Tapiwanashe Barwe','','','','',1,'Head Office','+263 (242) 759601-6','04 759651-9','2122',1491,'couragepeacebarwe@gmail.com','couragepeacebarwe','1234567',NULL,'default.jpg',1,'2020-10-25','2020-10-25 11:01:12');
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

-- Dump completed on 2020-10-25 18:42:08
