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
-- Table structure for table `tbl_comentario_topico`
--

DROP TABLE IF EXISTS `tbl_comentario_topico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_comentario_topico` (
  `idComentarioTopico` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idTopico` int(11) NOT NULL,
  PRIMARY KEY (`idComentarioTopico`),
  KEY `fk_comentario_topico_idx` (`idTopico`),
  KEY `fk_comentario_usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_comentario_topico` FOREIGN KEY (`idTopico`) REFERENCES `tbl_topico_forum` (`idTopicoForum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_comentario_topico`
--

LOCK TABLES `tbl_comentario_topico` WRITE;
/*!40000 ALTER TABLE `tbl_comentario_topico` DISABLE KEYS */;
INSERT INTO `tbl_comentario_topico` VALUES (1,'nao sei, talves ele seja corinthiano.',7,2),(2,'camila e orrivel',7,1),(3,'QUERO MINHA PERNA DE VOLTA!!!!!!!!!!!',7,1),(4,'',7,1),(5,'jtyujdyjdyu5y6ue5u',12,6),(6,'Existe Jovem Padawan !!!',13,7),(7,'!!!!!!!!!!!!!!!!!!!!!!!!',13,7),(8,'nao sei!!!!!!!!!!!!!',7,8),(9,'ja levou ao mecanico?',7,9),(10,'cccccccc',7,10);
/*!40000 ALTER TABLE `tbl_comentario_topico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:48
