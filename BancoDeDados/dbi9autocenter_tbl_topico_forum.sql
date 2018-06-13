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
-- Table structure for table `tbl_topico_forum`
--

DROP TABLE IF EXISTS `tbl_topico_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_topico_forum` (
  `idTopicoForum` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` text NOT NULL,
  `idCategoriaForum` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idTopicoForum`),
  KEY `fk_topico_usuario_idx` (`idUsuario`),
  KEY `fk_catagoria_topico_idx` (`idCategoriaForum`),
  CONSTRAINT `fk_catagoria_topico` FOREIGN KEY (`idCategoriaForum`) REFERENCES `tbl_categoria_forum` (`idCategoriaForum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_topico_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_topico_forum`
--

LOCK TABLES `tbl_topico_forum` WRITE;
/*!40000 ALTER TABLE `tbl_topico_forum` DISABLE KEYS */;
INSERT INTO `tbl_topico_forum` VALUES (1,'Trocar regularmente o óleo e o filtro do motor do seu carro é uma das coisas mais importantes que você pode fazer para manter o automóvel rodando bem. Ao longo do tempo, o óleo vai se decompor, e seu filtro ficará entupido de contaminantes. Deppppp',2,2),(2,'meu carro ta roubando combustivel o que fazer?',4,4),(3,'Here we go with the icons related to Menu. All icons are created by the Icons8 designers, therefore they have the same style and quality. Each Menu icon is a flat icon.',7,5),(4,'Pq o antonio é tao chato?',8,6),(5,'Here we go with the icons related to Menu. All icons are created by the Icons8 designers, therefore they have the same style and quality. Each Menu icon is a flat icon bbbb bbbb bbbbbb.',6,6),(6,'Here we go with the icons related to Menu. All icons are created by the Icons8 designers, therefore they have the same style and quality. Each Menu ',1,5),(7,'existe?',8,12),(8,'Baby Baby diO BIRULEIBE LEIBE?',7,13),(9,'moton nao funciona mais!!!',7,7),(10,'ta funcionando',13,7);
/*!40000 ALTER TABLE `tbl_topico_forum` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:27:55
