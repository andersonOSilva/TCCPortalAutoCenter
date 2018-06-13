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
-- Table structure for table `tbl_filial`
--

DROP TABLE IF EXISTS `tbl_filial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_filial` (
  `idFilial` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `fotoFilial` text NOT NULL,
  `idPlano` int(11) NOT NULL,
  `idEnderecoPrestadora` int(11) NOT NULL,
  `idPrestadora` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `statusServico` tinyint(1) DEFAULT NULL,
  `statusProduto` tinyint(1) DEFAULT NULL,
  `statusHome` tinyint(1) DEFAULT NULL,
  `statusPagPrest` tinyint(1) DEFAULT NULL,
  `statusPagSer` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idFilial`),
  KEY `fk_prestadora_filial_idx` (`idPrestadora`),
  KEY `fk_endereco_filial_idx` (`idEnderecoPrestadora`),
  KEY `fk_plano_filial_idx` (`idPlano`),
  CONSTRAINT `fk_endereco_filial` FOREIGN KEY (`idEnderecoPrestadora`) REFERENCES `tbl_endereco_prestadora` (`idEnderecoPrestadora`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_plano_filial` FOREIGN KEY (`idPlano`) REFERENCES `tbl_plano` (`idPlano`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prestadora_filial` FOREIGN KEY (`idPrestadora`) REFERENCES `tbl_prestadora` (`idPrestadora`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_filial`
--

LOCK TABLES `tbl_filial` WRITE;
/*!40000 ALTER TABLE `tbl_filial` DISABLE KEYS */;
INSERT INTO `tbl_filial` VALUES (3,'Auto center - Osasco','11 4611-8888','imagenPlano/1.png',39,1,1,1,1,1,1,NULL,NULL),(4,'Auto center - Carapicuiba','333333','imagenPlano/1.png',39,1,1,1,NULL,NULL,NULL,NULL,NULL),(5,'Auto center - Alphaville','49494','imagenPlano/1.png',39,1,1,1,1,1,1,1,1),(6,'Auto center - Jandira','995611543','imagenPlano/1.png',39,1,1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `tbl_filial` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:09
