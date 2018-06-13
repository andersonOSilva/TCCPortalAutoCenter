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
-- Table structure for table `tbl_visita`
--

DROP TABLE IF EXISTS `tbl_visita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_visita` (
  `idVisita` int(11) NOT NULL AUTO_INCREMENT,
  `dtVisita` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idServicoFilial` int(11) NOT NULL,
  PRIMARY KEY (`idVisita`),
  KEY `fk_usuario_visita_idx` (`idUsuario`),
  KEY `fk_visita_servico_idx` (`idServicoFilial`),
  CONSTRAINT `fk_usuario_visita` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_visita_servico` FOREIGN KEY (`idServicoFilial`) REFERENCES `tbl_filial_servico` (`idFilialServico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_visita`
--

LOCK TABLES `tbl_visita` WRITE;
/*!40000 ALTER TABLE `tbl_visita` DISABLE KEYS */;
INSERT INTO `tbl_visita` VALUES (1,'2018-05-09',1,4),(2,'2018-05-22',7,10),(3,'2018-05-16',7,2),(4,'2018-05-30',7,10),(5,'2018-05-30',7,10),(6,'2018-05-23',7,2),(7,'2018-05-16',7,2),(8,'2018-06-29',7,5),(9,'2018-06-13',7,6),(10,'2018-06-14',7,3),(11,'2018-06-21',7,8);
/*!40000 ALTER TABLE `tbl_visita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:44
