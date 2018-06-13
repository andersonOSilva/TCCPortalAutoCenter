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
-- Table structure for table `tbl_prestadora`
--

DROP TABLE IF EXISTS `tbl_prestadora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_prestadora` (
  `idPrestadora` int(11) NOT NULL AUTO_INCREMENT,
  `razaoSocial` varchar(255) NOT NULL,
  `nomeFantasia` varchar(255) NOT NULL,
  `fotoPrestadora` text NOT NULL,
  `descricao` text NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `senha` varchar(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `idEndereco` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idPrestadora`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_prestadora`
--

LOCK TABLES `tbl_prestadora` WRITE;
/*!40000 ALTER TABLE `tbl_prestadora` DISABLE KEYS */;
INSERT INTO `tbl_prestadora` VALUES (1,'Auto center ltda','Auto center','cms/imagenPlano/CarCat.jpg','dvbslvbkls ','11 4002-8922','123.123.123.123-5','123',1,1),(20,'luanilsongameplays','jhonzingameplays','cms/imagenPlano/517334870.jpg','sdadasd','011 6541-6414','321.321.654.321-54','123',1,2),(21,'potato','potato mais','cms/imagenPlano/CarCat.jpg','dasdasd','011 6541-6414','321.321.654.321-54','132',1,3),(22,'azul','quero ver','','ixxcorrrega ','011 6541-8794','654.645.465.654-78','123',1,4),(23,'Auto Center Ltda','Auto Center','nada','teste','teste','teste','teste',0,1);
/*!40000 ALTER TABLE `tbl_prestadora` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:59
