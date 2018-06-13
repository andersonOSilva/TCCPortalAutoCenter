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
-- Table structure for table `tbl_cabecalho_forum`
--

DROP TABLE IF EXISTS `tbl_cabecalho_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cabecalho_forum` (
  `idcabecalho` int(11) NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(45) DEFAULT NULL,
  `titulo2` varchar(45) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idcabecalho`)
) ENGINE=InnoDB AUTO_INCREMENT=310 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cabecalho_forum`
--

LOCK TABLES `tbl_cabecalho_forum` WRITE;
/*!40000 ALTER TABLE `tbl_cabecalho_forum` DISABLE KEYS */;
INSERT INTO `tbl_cabecalho_forum` VALUES (22,'ttt','ttttttt','ttttttttttttt66666666',0),(23,'jjjjjj','jjjjjjj','jjjjjjjjj',0),(24,'1111','1111','11111',0),(25,'1111','1111','11111',0),(294,'000','00','000',0),(295,'mmm','mmm','mmmm',0),(296,'ççççç','ççççç','çççççççç',0),(297,'vvv','vvvv','vvvv',0),(298,'xxxxx','xxxxx','xxxxxxxxx',0),(299,'nnnn','nnn','nnnn',0),(300,'bbbb','bbbbb','bbbbbbbbb',0),(301,'bbbb','bbbbb','bbbbbbbbb',0),(302,'teste','teste','yesye',0),(303,'ffffffff','ffffffffff','ffffffffffffff',0),(304,'Wiki','Autocenter','Criticada insistentemente pelos setores conservadores do país, a organização é, na verdade, pouco conhecida pelos brasileiros. Para ajudar a compreender o que é e quais os seus objetivos, Fórum entrevistou Valter Pomar, secretário executivo do Foro de São Paulo entre os anos de 2005 e 2013. Por Criticada insistentemente pelos setores conservadores do país, a organização é, na verdade, pouco conhecida pelos brasileiros. Para ajudar a compreender o que é e quais os seus objetivos, Fórum entrevistou Valter Pomar, secretário executivo do Foro de São Paulo entre os anos de 2005 e 2013. Por ',1),(305,'Wiki','Autocenter','Criticada insistentemente pelos setores conservadores do país, a organização é, na verdade, pouco conhecida pelos brasileiros. Para ajudar a compreender o que é e quais os seus objetivos, Fórum entrevistou Valter Pomar, secretário executivo do Foro de São Paulo entre os anos de 2005 e 2013. Por Criticada insistentemente pelos setores conservadores do país, a organização é, na verdade, pouco conhecida pelos brasileiros. Para ajudar a compreender o que é e quais os seus objetivos, Fórum entrevistou Valter Pomar, secretário executivo do Foro de São Paulo entre os anos de 2005 e 2013. Por ',0),(306,'hh','rrrr','hg',0),(307,'Jhonatha','Silveira','mobile',0),(308,'Jhonatha','Silveira','mobile',0),(309,'Jhonatha','Silveira','mobileç',0);
/*!40000 ALTER TABLE `tbl_cabecalho_forum` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:57
