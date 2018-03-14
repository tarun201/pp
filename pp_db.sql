-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: pp
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `2015CSE024`
--

DROP TABLE IF EXISTS `2015CSE024`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2015CSE024` (
  `pref_num` int(3) NOT NULL AUTO_INCREMENT,
  `comp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`pref_num`),
  UNIQUE KEY `2015CSE160_uk_1` (`comp_id`),
  CONSTRAINT `company_details_2015CSE024` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2015CSE024`
--

LOCK TABLES `2015CSE024` WRITE;
/*!40000 ALTER TABLE `2015CSE024` DISABLE KEYS */;
INSERT INTO `2015CSE024` VALUES (2,'ASHK1'),(3,'EDLD'),(1,'TIME');
/*!40000 ALTER TABLE `2015CSE024` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2015CSE104`
--

DROP TABLE IF EXISTS `2015CSE104`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2015CSE104` (
  `pref_num` int(3) NOT NULL AUTO_INCREMENT,
  `comp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`pref_num`),
  UNIQUE KEY `2015CSE160_uk_1` (`comp_id`),
  CONSTRAINT `company_details_2015CSE104` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2015CSE104`
--

LOCK TABLES `2015CSE104` WRITE;
/*!40000 ALTER TABLE `2015CSE104` DISABLE KEYS */;
INSERT INTO `2015CSE104` VALUES (2,'ASHK1'),(3,'EDLD'),(1,'TIME');
/*!40000 ALTER TABLE `2015CSE104` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2015CSE120`
--

DROP TABLE IF EXISTS `2015CSE120`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2015CSE120` (
  `pref_num` int(3) NOT NULL AUTO_INCREMENT,
  `comp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`pref_num`),
  UNIQUE KEY `2015CSE160_uk_1` (`comp_id`),
  CONSTRAINT `company_details_2015CSE120` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2015CSE120`
--

LOCK TABLES `2015CSE120` WRITE;
/*!40000 ALTER TABLE `2015CSE120` DISABLE KEYS */;
INSERT INTO `2015CSE120` VALUES (1,'ASHK1'),(2,'EDLD'),(3,'TIME');
/*!40000 ALTER TABLE `2015CSE120` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2015CSE160`
--

DROP TABLE IF EXISTS `2015CSE160`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2015CSE160` (
  `pref_num` int(3) NOT NULL AUTO_INCREMENT,
  `comp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`pref_num`),
  UNIQUE KEY `2015CSE160_uk_1` (`comp_id`),
  CONSTRAINT `company_details_2015CSE160` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2015CSE160`
--

LOCK TABLES `2015CSE160` WRITE;
/*!40000 ALTER TABLE `2015CSE160` DISABLE KEYS */;
INSERT INTO `2015CSE160` VALUES (2,'ASHK1'),(3,'EDLD'),(1,'TIME');
/*!40000 ALTER TABLE `2015CSE160` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `allotment`
--

DROP TABLE IF EXISTS `allotment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allotment` (
  `allot_num` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(12) NOT NULL,
  `comp_id` varchar(10) NOT NULL,
  PRIMARY KEY (`allot_num`),
  KEY `company_details_allotment` (`comp_id`),
  KEY `student_details_allotment` (`stud_id`),
  CONSTRAINT `company_details_allotment` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`),
  CONSTRAINT `student_details_allotment` FOREIGN KEY (`stud_id`) REFERENCES `student_details` (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allotment`
--

LOCK TABLES `allotment` WRITE;
/*!40000 ALTER TABLE `allotment` DISABLE KEYS */;
INSERT INTO `allotment` VALUES (1,'2015CSE104','TIME'),(2,'2015CSE160','TIME'),(3,'2015CSE024','TIME'),(4,'2015CSE104','TIME'),(5,'2015CSE160','TIME');
/*!40000 ALTER TABLE `allotment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_require`
--

DROP TABLE IF EXISTS `c_require`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_require` (
  `comp_id` varchar(10) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cgpa` float DEFAULT NULL,
  PRIMARY KEY (`comp_id`),
  CONSTRAINT `company_details_c_require` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_require`
--

LOCK TABLES `c_require` WRITE;
/*!40000 ALTER TABLE `c_require` DISABLE KEYS */;
INSERT INTO `c_require` VALUES ('ASHK1',3,'mechanical','male',7),('EDLD',8,NULL,NULL,NULL),('TIME',5,'computer science','female',9);
/*!40000 ALTER TABLE `c_require` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_details` (
  `comp_id` varchar(10) NOT NULL,
  `comp_name` varchar(50) NOT NULL,
  `comp_info` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_details`
--

LOCK TABLES `company_details` WRITE;
/*!40000 ALTER TABLE `company_details` DISABLE KEYS */;
INSERT INTO `company_details` VALUES ('ASHK1','Ashok Leyland',NULL),('EDLD','Eduladder',NULL),('TIME','Times Business Solutions',NULL);
/*!40000 ALTER TABLE `company_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eligibility_list`
--

DROP TABLE IF EXISTS `eligibility_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eligibility_list` (
  `stud_id` varchar(12) NOT NULL,
  `cgpa` float NOT NULL,
  `allot_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `allotment_eligibility_list` (`allot_num`),
  CONSTRAINT `allotment_eligibility_list` FOREIGN KEY (`allot_num`) REFERENCES `allotment` (`allot_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='consists of the eligible list of students';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eligibility_list`
--

LOCK TABLES `eligibility_list` WRITE;
/*!40000 ALTER TABLE `eligibility_list` DISABLE KEYS */;
INSERT INTO `eligibility_list` VALUES ('2015CSE024',9.08,NULL),('2015CSE104',9.09,NULL),('2015CSE120',8.12,NULL),('2015CSE160',9.09,NULL);
/*!40000 ALTER TABLE `eligibility_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_details` (
  `stud_id` varchar(12) NOT NULL,
  `stud_address` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_num` bigint(11) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `emergency_num` bigint(11) NOT NULL,
  `emergency_person` varchar(50) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `skills` varchar(300) NOT NULL,
  `languages` varchar(300) NOT NULL,
  `extra_details` varchar(50) NOT NULL,
  `branch` varchar(75) NOT NULL,
  `gender` char(10) NOT NULL,
  PRIMARY KEY (`stud_id`),
  CONSTRAINT `student_details_eligibility_list` FOREIGN KEY (`stud_id`) REFERENCES `eligibility_list` (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_details`
--

LOCK TABLES `student_details` WRITE;
/*!40000 ALTER TABLE `student_details` DISABLE KEYS */;
INSERT INTO `student_details` VALUES ('2015CSE024','temporary address3','ashika@gmail.com',9087654392,'A+',9123456768,'person3','father','coding','C++, Java','none','computer science','female'),('2015CSE104','temporary address4','ragi@gmail.com',9087654333,'A+',9123456755,'person4','father','coding','C++, Java','none','computer science','female'),('2015CSE120','temporary address2','samanyu@gmail.com',9087654322,'A+',9123456788,'person2','father','coding','C++, Java','none','computer science','male'),('2015CSE160','temporary address','aparna@gmail.com',9087654321,'B+',9123456780,'person1','mother','coding','C++, Java','none','computer science','female');
/*!40000 ALTER TABLE `student_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni_require`
--

DROP TABLE IF EXISTS `uni_require`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uni_require` (
  `comp_id` varchar(10) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `cgpa` float DEFAULT NULL,
  PRIMARY KEY (`comp_id`),
  CONSTRAINT `uni_require_company_details` FOREIGN KEY (`comp_id`) REFERENCES `company_details` (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_require`
--

LOCK TABLES `uni_require` WRITE;
/*!40000 ALTER TABLE `uni_require` DISABLE KEYS */;
INSERT INTO `uni_require` VALUES ('ASHK1',3,'mechanical','male',7),('EDLD',8,NULL,NULL,NULL),('TIME',0,'computer science','female',9);
/*!40000 ALTER TABLE `uni_require` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-14 12:34:25
