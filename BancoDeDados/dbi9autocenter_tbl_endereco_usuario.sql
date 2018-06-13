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
-- Table structure for table `tbl_endereco_usuario`
--

DROP TABLE IF EXISTS `tbl_endereco_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco_usuario` (
  `idEnderecoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `idTipoEndereco` int(11) NOT NULL,
  `idCidade` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idEnderecoUsuario`),
  KEY `fk_tipo_endereco_usuario_idx` (`idTipoEndereco`),
  KEY `fk_cidade_endereco_idx` (`idCidade`),
  KEY `fk_endereco_usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_cidade_endereco` FOREIGN KEY (`idCidade`) REFERENCES `tbl_cidade` (`idCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_endereco_usuario` FOREIGN KEY (`idTipoEndereco`) REFERENCES `tbl_tipo_endereco` (`idTipoEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco_usuario`
--

LOCK TABLES `tbl_endereco_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_endereco_usuario` DISABLE KEYS */;
INSERT INTO `tbl_endereco_usuario` VALUES (1,'Rua','460','Teste','Teste','06718-360',1,79,1),(2,'$logradouro','$numero','$complemento','$bairro','$cep',1,3,8),(3,'Rua Avenida Estrada','406','Nenhum','TCC Fail','06874-445',2,3597,8),(4,'This is America','1153','Amerrica','America','06667-896',3,4724,8),(8,'q','10','q','2123','12313-213',1,79,8);
/*!40000 ALTER TABLE `tbl_endereco_usuario` ENABLE KEYS */;
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
