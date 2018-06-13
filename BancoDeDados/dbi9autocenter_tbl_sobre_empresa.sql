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
-- Table structure for table `tbl_sobre_empresa`
--

DROP TABLE IF EXISTS `tbl_sobre_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre_empresa` (
  `idSobreEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `historia` text NOT NULL,
  `visao` text NOT NULL,
  `missao` text NOT NULL,
  `valores` text NOT NULL,
  `slogan` text NOT NULL,
  `ativo` varchar(1) NOT NULL,
  PRIMARY KEY (`idSobreEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre_empresa`
--

LOCK TABLES `tbl_sobre_empresa` WRITE;
/*!40000 ALTER TABLE `tbl_sobre_empresa` DISABLE KEYS */;
INSERT INTO `tbl_sobre_empresa` VALUES (1,'SoftI9 é uma empresa que atua na área da tecnologia, criada em 2016,','buscando inovar a cada projeto, tornando-os os únicos no mercado,','surgiu em uma comunidade de tecnologia onde eram compartilhados códigos e projetos,','m compartilhados códigos e projetos,','Se você adora o seu carro, deixe que nós cuidamos de tudo para você','1'),(2,'peguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insert','peguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insert','peguei o insertpeguei o insertpeguei o inserteguei o insert','peguei o insertpeguei o insepeguei o insert','peguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insertpeguei o insert','0');
/*!40000 ALTER TABLE `tbl_sobre_empresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:49
