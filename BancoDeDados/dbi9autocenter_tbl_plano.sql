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
-- Table structure for table `tbl_plano`
--

DROP TABLE IF EXISTS `tbl_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_plano` (
  `idPlano` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`idPlano`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plano`
--

LOCK TABLES `tbl_plano` WRITE;
/*!40000 ALTER TABLE `tbl_plano` DISABLE KEYS */;
INSERT INTO `tbl_plano` VALUES (39,'antonio willian',666.00,'qwerv ewgtwqbytbw','imagenPlano/CarCat.jpg'),(58,'Antonio Chato',7.00,'cht','imagenPlano/blue.jpg'),(59,'trtrtr',87.00,'fy iy ydik dfyk dt','imagenPlano/higienizacao.jpg'),(60,'rrrrrrrrrrr',66.00,'tttttttt','imagenPlano/41e2a01db0b2804f198fcab2c08c5d1a.jpg'),(61,'rrrrrrrrrrr',66.00,'tttttttt','imagenPlano/41e2a01db0b2804f198fcab2c08c5d1a.jpg'),(62,'rrrrrrrrrrr',66.00,'tttttttt','Erro'),(63,'ddddddd',123.00,'ddddddddddd','imagenPlano/c4ca4238a0b923820dcc509a6f75849b.jpg');
/*!40000 ALTER TABLE `tbl_plano` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:53
