-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: pp
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `2015cse1`
--

DROP TABLE IF EXISTS `2015cse1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2015cse1` (
  `pref` int(3) NOT NULL AUTO_INCREMENT,
  `cid` int(100) DEFAULT NULL,
  `alloted` int(1) DEFAULT '0',
  PRIMARY KEY (`pref`),
  KEY `cid` (`cid`),
  CONSTRAINT `2015cse1_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company_list` (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2015cse1`
--

LOCK TABLES `2015cse1` WRITE;
/*!40000 ALTER TABLE `2015cse1` DISABLE KEYS */;
INSERT INTO `2015cse1` VALUES (1,4,0),(3,4,0),(4,4,0);
/*!40000 ALTER TABLE `2015cse1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AdminLogin`
--

DROP TABLE IF EXISTS `AdminLogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AdminLogin` (
  `id` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AdminLogin`
--

LOCK TABLES `AdminLogin` WRITE;
/*!40000 ALTER TABLE `AdminLogin` DISABLE KEYS */;
INSERT INTO `AdminLogin` VALUES ('ADMIN1','1234');
/*!40000 ALTER TABLE `AdminLogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college_std_dtls`
--

DROP TABLE IF EXISTS `college_std_dtls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `college_std_dtls` (
  `student_id` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `branch_name` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `mobile_num` int(10) DEFAULT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `cgpa` varchar(4) DEFAULT '7.3',
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college_std_dtls`
--

LOCK TABLES `college_std_dtls` WRITE;
/*!40000 ALTER TABLE `college_std_dtls` DISABLE KEYS */;
INSERT INTO `college_std_dtls` VALUES ('2015CSE1','student1','1996-04-01','CSE','Temporary address for cse students','CSE1@gmail.com',90034581,'cs+','7.3','Male'),('2015CSE2','student2','1996-04-02','CSE','Temporary address for cse students','CSE2@gmail.com',90034582,'cs+','7','Male'),('2015CSE3','student3','1996-04-03','CSE','Temporary address for cse students','CSE3@gmail.com',90034583,'cs+','7','Male'),('2015CSE4','student4','1996-04-04','CSE','Temporary address for cse students','CSE4@gmail.com',90034584,'cs+','7','Male'),('2015CSE5','student5','1996-04-05','CSE','Temporary address for cse students','CSE5@gmail.com',90034585,'cs+','7','Male'),('2015CSE6','student6','1996-04-06','CSE','Temporary address for cse students','CSE6@gmail.com',90034586,'cs+','7','Male'),('2015CSE7','student7','1996-04-07','CSE','Temporary address for cse students','CSE7@gmail.com',90034587,'cs+','7','Male'),('2015CSE8','student8','1996-04-08','CSE','Temporary address for cse students','CSE8@gmail.com',90034588,'cs+','7','Male'),('2015CSE9','student9','1996-04-09','CSE','Temporary address for cse students','CSE9@gmail.com',90034589,'cs+','7','Male'),('2015CSE10','student10','1996-04-10','CSE','Temporary address for cse students','CSE10@gmail.com',900345810,'cs+','7','Male'),('2015MCH1','student1','1996-04-01','MCH','Temporary address for mch students','MCH1@gmail.com',90054581,'mh-','7','Female'),('2015MCH2','student2','1996-04-02','MCH','Temporary address for mch students','MCH2@gmail.com',90054582,'mh-','7','Female'),('2015MCH3','student3','1996-04-03','MCH','Temporary address for mch students','MCH3@gmail.com',90054583,'mh-','7','Female'),('2015MCH4','student4','1996-04-04','MCH','Temporary address for mch students','MCH4@gmail.com',90054584,'mh-','7','Female'),('2015MCH5','student5','1996-04-05','MCH','Temporary address for mch students','MCH5@gmail.com',90054585,'mh-','7','Female'),('2015MCH6','student6','1996-04-06','MCH','Temporary address for mch students','MCH6@gmail.com',90054586,'mh-','7','Female'),('2015MCH7','student7','1996-04-07','MCH','Temporary address for mch students','MCH7@gmail.com',90054587,'mh-','7','Female'),('2015MCH8','student8','1996-04-08','MCH','Temporary address for mch students','MCH8@gmail.com',90054588,'mh-','7','Female'),('2015MCH9','student9','1996-04-09','MCH','Temporary address for mch students','MCH9@gmail.com',90054589,'mh-','7','Female'),('2015MCH10','student10','1996-04-10','MCH','Temporary address for mch students','MCH10@gmail.com',900545810,'mh-','7','Female'),('2015MCH11','student11','1996-04-11','MCH','Temporary address for mch students','MCH11@gmail.com',900545811,'mh-','7','Female'),('2015MCH12','student12','1996-04-12','MCH','Temporary address for mch students','MCH12@gmail.com',900545812,'mh-','7','Female'),('2015MCH13','student13','1996-04-13','MCH','Temporary address for mch students','MCH13@gmail.com',900545813,'mh-','7','Female'),('2015MCH14','student14','1996-04-14','MCH','Temporary address for mch students','MCH14@gmail.com',900545814,'mh-','7','Female'),('2015MCH15','student15','1996-04-15','MCH','Temporary address for mch students','MCH15@gmail.com',900545815,'mh-','7','Female'),('2015MCH16','student16','1996-04-16','MCH','Temporary address for mch students','MCH16@gmail.com',900545816,'mh-','7','Female'),('2015MCH17','student17','1996-04-17','MCH','Temporary address for mch students','MCH17@gmail.com',900545817,'mh-','7','Female'),('2015MCH18','student18','1996-04-18','MCH','Temporary address for mch students','MCH18@gmail.com',900545818,'mh-','7','Female'),('2015MCH19','student19','1996-04-19','MCH','Temporary address for mch students','MCH19@gmail.com',900545819,'mh-','7','Female'),('2015MCH20','student20','1996-04-20','MCH','Temporary address for mch students','MCH20@gmail.com',900545820,'mh-','7','Female'),('2015PTL1','student1','1996-07-01','PTL','Temporary address for ptl students','PTL1@gmail.com',96054581,'pt-','7','Male'),('2015PTL2','student2','1996-07-02','PTL','Temporary address for ptl students','PTL2@gmail.com',96054582,'pt-','7','Male'),('2015PTL3','student3','1996-07-03','PTL','Temporary address for ptl students','PTL3@gmail.com',96054583,'pt-','7','Male'),('2015PTL4','student4','1996-07-04','PTL','Temporary address for ptl students','PTL4@gmail.com',96054584,'pt-','7','Male'),('2015PTL5','student5','1996-07-05','PTL','Temporary address for ptl students','PTL5@gmail.com',96054585,'pt-','7','Male'),('2015PTL6','student6','1996-07-06','PTL','Temporary address for ptl students','PTL6@gmail.com',96054586,'pt-','7','Male'),('2015PTL7','student7','1996-07-07','PTL','Temporary address for ptl students','PTL7@gmail.com',96054587,'pt-','7','Male'),('2015PTL8','student8','1996-07-08','PTL','Temporary address for ptl students','PTL8@gmail.com',96054588,'pt-','7','Male'),('2015PTL9','student9','1996-07-09','PTL','Temporary address for ptl students','PTL9@gmail.com',96054589,'pt-','7','Male'),('2015PTL10','student10','1996-07-10','PTL','Temporary address for ptl students','PTL10@gmail.com',960545810,'pt-','7','Male'),('2015PTL11','student11','1996-07-11','PTL','Temporary address for ptl students','PTL11@gmail.com',960545811,'pt-','7','Male'),('2015PTL12','student12','1996-07-12','PTL','Temporary address for ptl students','PTL12@gmail.com',960545812,'pt-','7','Male'),('2015PTL13','student13','1996-07-13','PTL','Temporary address for ptl students','PTL13@gmail.com',960545813,'pt-','7','Male'),('2015PTL14','student14','1996-07-14','PTL','Temporary address for ptl students','PTL14@gmail.com',960545814,'pt-','7','Male'),('2015PTL15','student15','1996-07-15','PTL','Temporary address for ptl students','PTL15@gmail.com',960545815,'pt-','7','Male'),('2015PTL16','student16','1996-07-16','PTL','Temporary address for ptl students','PTL16@gmail.com',960545816,'pt-','7','Male'),('2015PTL17','student17','1996-07-17','PTL','Temporary address for ptl students','PTL17@gmail.com',960545817,'pt-','7','Male'),('2015PTL18','student18','1996-07-18','PTL','Temporary address for ptl students','PTL18@gmail.com',960545818,'pt-','7','Male'),('2015PTL19','student19','1996-07-19','PTL','Temporary address for ptl students','PTL19@gmail.com',960545819,'pt-','7','Male'),('2015PTL20','student20','1996-07-20','PTL','Temporary address for ptl students','PTL20@gmail.com',960545820,'pt-','7','Male'),('2015EEE1','student1','1996-03-01','EEE','Temporary address for eee students','EEE1@gmail.com',92044581,'ee+','7','Female'),('2015EEE2','student2','1996-03-02','EEE','Temporary address for eee students','EEE2@gmail.com',92044582,'ee+','7','Female'),('2015EEE3','student3','1996-03-03','EEE','Temporary address for eee students','EEE3@gmail.com',92044583,'ee+','7','Female'),('2015EEE4','student4','1996-03-04','EEE','Temporary address for eee students','EEE4@gmail.com',92044584,'ee+','7','Female'),('2015EEE5','student5','1996-03-05','EEE','Temporary address for eee students','EEE5@gmail.com',92044585,'ee+','7','Female'),('2015EEE6','student6','1996-03-06','EEE','Temporary address for eee students','EEE6@gmail.com',92044586,'ee+','7','Female'),('2015EEE7','student7','1996-03-07','EEE','Temporary address for eee students','EEE7@gmail.com',92044587,'ee+','7','Female'),('2015EEE8','student8','1996-03-08','EEE','Temporary address for eee students','EEE8@gmail.com',92044588,'ee+','7','Female'),('2015EEE9','student9','1996-03-09','EEE','Temporary address for eee students','EEE9@gmail.com',92044589,'ee+','7','Female'),('2015EEE10','student10','1996-03-10','EEE','Temporary address for eee students','EEE10@gmail.com',920445810,'ee+','7','Female'),('2015EEE11','student11','1996-03-11','EEE','Temporary address for eee students','EEE11@gmail.com',920445811,'ee+','7','Female'),('2015EEE12','student12','1996-03-12','EEE','Temporary address for eee students','EEE12@gmail.com',920445812,'ee+','7','Female'),('2015EEE13','student13','1996-03-13','EEE','Temporary address for eee students','EEE13@gmail.com',920445813,'ee+','7','Female'),('2015EEE14','student14','1996-03-14','EEE','Temporary address for eee students','EEE14@gmail.com',920445814,'ee+','7','Female'),('2015EEE15','student15','1996-03-15','EEE','Temporary address for eee students','EEE15@gmail.com',920445815,'ee+','7','Female'),('2015EEE16','student16','1996-03-16','EEE','Temporary address for eee students','EEE16@gmail.com',920445816,'ee+','7','Female'),('2015EEE17','student17','1996-03-17','EEE','Temporary address for eee students','EEE17@gmail.com',920445817,'ee+','7','Female'),('2015EEE18','student18','1996-03-18','EEE','Temporary address for eee students','EEE18@gmail.com',920445818,'ee+','7','Female'),('2015EEE19','student19','1996-03-19','EEE','Temporary address for eee students','EEE19@gmail.com',920445819,'ee+','7','Female'),('2015EEE20','student20','1996-03-20','EEE','Temporary address for eee students','EEE20@gmail.com',920445820,'ee+','7','Female'),('2015EEE21','student21','1996-03-21','EEE','Temporary address for eee students','EEE21@gmail.com',920445821,'ee+','7','Female'),('2015EEE22','student22','1996-03-22','EEE','Temporary address for eee students','EEE22@gmail.com',920445822,'ee+','7','Female'),('2015EEE23','student23','1996-03-23','EEE','Temporary address for eee students','EEE23@gmail.com',920445823,'ee+','7','Female'),('2015EEE24','student24','1996-03-24','EEE','Temporary address for eee students','EEE24@gmail.com',920445824,'ee+','7','Female'),('2015EEE25','student25','1996-03-25','EEE','Temporary address for eee students','EEE25@gmail.com',920445825,'ee+','7','Female'),('2015EEE26','student26','1996-03-26','EEE','Temporary address for eee students','EEE26@gmail.com',920445826,'ee+','7','Female'),('2015EEE27','student27','1996-03-27','EEE','Temporary address for eee students','EEE27@gmail.com',920445827,'ee+','7','Female'),('2015EEE28','student28','1996-03-28','EEE','Temporary address for eee students','EEE28@gmail.com',920445828,'ee+','7','Female'),('2015EEE29','student29','1996-03-29','EEE','Temporary address for eee students','EEE29@gmail.com',920445829,'ee+','7','Female'),('2015EEE30','student30','1996-03-30','EEE','Temporary address for eee students','EEE30@gmail.com',920445830,'ee+','7','Female');
/*!40000 ALTER TABLE `college_std_dtls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_list`
--

DROP TABLE IF EXISTS `company_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_list` (
  `sl_no` int(100) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_list`
--

LOCK TABLES `company_list` WRITE;
/*!40000 ALTER TABLE `company_list` DISABLE KEYS */;
INSERT INTO `company_list` VALUES (1,'abc'),(2,'efg'),(3,'hij'),(4,'klm');
/*!40000 ALTER TABLE `company_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `core_courses`
--

DROP TABLE IF EXISTS `core_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `core_courses` (
  `branch_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(20) DEFAULT NULL,
  `c1` varchar(20) DEFAULT NULL,
  `c2` varchar(20) DEFAULT NULL,
  `c3` varchar(20) DEFAULT NULL,
  `c4` varchar(20) DEFAULT NULL,
  `c5` varchar(20) DEFAULT NULL,
  `c6` varchar(20) DEFAULT NULL,
  `c7` varchar(20) DEFAULT NULL,
  `c8` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_courses`
--

LOCK TABLES `core_courses` WRITE;
/*!40000 ALTER TABLE `core_courses` DISABLE KEYS */;
INSERT INTO `core_courses` VALUES (1,'CSE','cse1','cse2','cse3','cse4','cse5','cse6','cse7','cse8'),(2,'MCH','mch1','mch2','mch3','mch4','mch5','mch6','mch7','mch8'),(3,'EEE','eee1','eee2','eee3','eee4','eee5','eee6','eee7','eee8'),(4,'ECE','ece1','ece2','ece3','ece4','ece5','ece6','ece7','ece8'),(5,'CVL','cvl1','cvl2','cvl3','cvl4','cvl5','cvl6','cvl7','cvl8'),(6,'PTL','ptl1','ptl2','ptl3','ptl4','ptl5','ptl6','ptl7','ptl8');
/*!40000 ALTER TABLE `core_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` varchar(10) NOT NULL,
  `password` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('2015CSE1',123),('2015CSE10',123),('2015CSE2',123),('2015CSE3',123),('2015CSE4',123),('2015CSE5',123),('2015CSE6',123),('2015CSE7',123),('2015CSE8',123),('2015CSE9',123),('2015EEE1',456),('2015EEE10',456),('2015EEE11',456),('2015EEE12',456),('2015EEE13',456),('2015EEE14',456),('2015EEE15',456),('2015EEE16',456),('2015EEE17',456),('2015EEE18',456),('2015EEE19',456),('2015EEE2',456),('2015EEE20',456),('2015EEE21',456),('2015EEE22',456),('2015EEE23',456),('2015EEE24',456),('2015EEE25',456),('2015EEE26',456),('2015EEE27',456),('2015EEE28',456),('2015EEE29',456),('2015EEE3',456),('2015EEE30',456),('2015EEE4',456),('2015EEE5',456),('2015EEE6',456),('2015EEE7',456),('2015EEE8',456),('2015EEE9',456),('2015MCH1',234),('2015MCH10',234),('2015MCH11',234),('2015MCH12',234),('2015MCH13',234),('2015MCH14',234),('2015MCH15',234),('2015MCH16',234),('2015MCH17',234),('2015MCH18',234),('2015MCH19',234),('2015MCH2',234),('2015MCH20',234),('2015MCH3',234),('2015MCH4',234),('2015MCH5',234),('2015MCH6',234),('2015MCH7',234),('2015MCH8',234),('2015MCH9',234),('2015PTL1',345),('2015PTL10',345),('2015PTL11',345),('2015PTL12',345),('2015PTL13',345),('2015PTL14',345),('2015PTL15',345),('2015PTL16',345),('2015PTL17',345),('2015PTL18',345),('2015PTL19',345),('2015PTL2',345),('2015PTL20',345),('2015PTL3',345),('2015PTL4',345),('2015PTL5',345),('2015PTL6',345),('2015PTL7',345),('2015PTL8',345),('2015PTL9',345);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_details` (
  `id` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `mobile_num` varchar(15) DEFAULT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `emergency_num` varchar(15) DEFAULT NULL,
  `emergency_person` varchar(50) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `skills` varchar(300) DEFAULT NULL,
  `languages` varchar(300) DEFAULT NULL,
  `extra_details` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_details`
--

LOCK TABLES `student_details` WRITE;
/*!40000 ALTER TABLE `student_details` DISABLE KEYS */;
INSERT INTO `student_details` VALUES ('','dcdsadcs','2018-03-14','CSE2@gmail.com','12-9003458211','B-','12-1231232132','qw','ds','nothing extra','nothing extra','fsd'),('2015CSE2','dcdsadcs','2018-03-14','CSE2@gmail.com','12-9003458211','B-','12-1231232132','qw','ds','nothing extra','nothing extra','fsd'),('2015CSE2','dcdsadcs','2018-03-14','CSE2@gmail.com','12-9003458211','B-','12-1231232132','qw','ds','nothing extra','nothing extra','fsd'),('2015CSE5','sfvs','2018-03-19','CSE5@gmail.com','12-9003458511','B+','213-2112421421','dd','dcsddsd','dcsdvsd','dvsd','dvsdsd'),('2015CSE4','csdc','2018-03-27','CSE4@gmail.com','12-9003458411','A-','1234-1231232132','dscsd','dscsd','nothing extra','nothing extra','nothing extra');
/*!40000 ALTER TABLE `student_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-25 11:47:35
