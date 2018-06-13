-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.1.1    Database: dbi9autocenter
-- ------------------------------------------------------
-- Server version	5.5.35-0+wheezy1

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
-- Table structure for table `tbl_filial_servico`
--

DROP TABLE IF EXISTS `tbl_filial_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_filial_servico` (
  `idFilialServico` int(11) NOT NULL AUTO_INCREMENT,
  `idFilial` int(11) NOT NULL,
  `idServico` int(11) NOT NULL,
  PRIMARY KEY (`idFilialServico`),
  KEY `fk_filial_idx` (`idFilial`),
  KEY `fk_servico_idx` (`idServico`),
  CONSTRAINT `fk_filial` FOREIGN KEY (`idFilial`) REFERENCES `tbl_filial` (`idFilial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servico` FOREIGN KEY (`idServico`) REFERENCES `tbl_servico` (`idServico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_filial_servico`
--

LOCK TABLES `tbl_filial_servico` WRITE;
/*!40000 ALTER TABLE `tbl_filial_servico` DISABLE KEYS */;
INSERT INTO `tbl_filial_servico` VALUES (1,3,5),(2,3,11),(3,3,12),(4,3,13),(5,3,14),(6,3,15),(7,3,16),(8,3,17),(9,6,5),(10,6,11);
/*!40000 ALTER TABLE `tbl_filial_servico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:10
