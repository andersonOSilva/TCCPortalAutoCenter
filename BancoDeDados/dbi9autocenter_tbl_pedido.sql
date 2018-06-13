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
-- Table structure for table `tbl_pedido`
--

DROP TABLE IF EXISTS `tbl_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `idStatus` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `idEnderecoUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_produto_pedido_idx` (`idProduto`),
  KEY `fk_pedido_usuario_idx` (`idUsuario`),
  KEY `fk_produto_endereco_idx` (`idEnderecoUsuario`),
  KEY `fk_produto_status_idx` (`idStatus`),
  CONSTRAINT `fk_produto_status` FOREIGN KEY (`idStatus`) REFERENCES `tbl_status_compra` (`idStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_endereco` FOREIGN KEY (`idEnderecoUsuario`) REFERENCES `tbl_endereco_usuario` (`idEnderecoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_pedido` FOREIGN KEY (`idProduto`) REFERENCES `tbl_produto` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pedido`
--

LOCK TABLES `tbl_pedido` WRITE;
/*!40000 ALTER TABLE `tbl_pedido` DISABLE KEYS */;
INSERT INTO `tbl_pedido` VALUES (1,5,7,1,3,'2018-06-06',1),(2,4,7,1,3,'2018-06-06',1),(3,4,7,1,3,'2018-06-06',1),(4,4,7,1,3,'2018-06-07',1),(5,8,7,1,3,'2018-06-07',1),(6,3,7,1,3,'2018-06-07',1),(7,5,7,1,2,'2018-06-07',1),(8,5,7,1,2,'2018-06-07',1),(9,5,7,1,1,'2018-06-07',1),(10,5,7,1,1,'2018-06-07',1),(11,5,7,1,1,'2018-06-07',1),(12,5,8,1,1,'2018-06-07',1),(13,5,7,1,1,'2018-06-11',1),(18,7,7,1,1,'2018-06-12',1),(20,7,8,1,1,'2018-06-12',1),(21,3,8,1,1,'2018-06-12',1),(22,5,8,1,1,'2018-06-12',1),(23,7,8,1,1,'2018-06-12',1),(24,3,8,1,1,'2018-06-12',1),(25,5,8,1,1,'2018-06-12',1),(26,7,8,1,1,'2018-06-12',1),(27,3,8,1,1,'2018-06-12',1),(28,5,8,1,1,'2018-06-12',1),(29,5,7,1,1,'2018-06-12',1);
/*!40000 ALTER TABLE `tbl_pedido` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:02
