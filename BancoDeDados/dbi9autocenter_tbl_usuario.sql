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
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dtNasc` date NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `fotoUser` varchar(1200) DEFAULT NULL,
  `statusUser` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (1,'camila','milla','1234','milla@caah.com','2000-02-24','47292701850',NULL,1),(2,'Camila Cruz','Caah','12345','princesa@maravilhosa','2000-02-24','344.556.677-88','cms/imagemUser/8ad2a3101164b40043a3f511730b44bb.png',1),(4,'joao martins d','joa0123','1234','ghas@ooo','1965-02-01','010.101.010-10','cms/imagemUser/48d6215903dff56238e52e8891380c8f.jpg',1),(5,'marquinhos aut','marq03022','123456','ghas@ooo','1989-05-02','785.420.136-52','cms/imagemUser/acd113387a1fead81b84ffc885aeff47.jpg',1),(6,'parasita da si','parasita0102','12345','parasita@oortt','1999-02-26','568.247.151-85','cms/imagemUser/6c315afc1fc0e75a57ced56b738b0d3a.jpg',1),(7,'Antonio willian','Willi321','1234','Antwillian2000@gmail.com','2000-02-01','010.203.020-10','cms/imagemUser/48d6215903dff56238e52e8891380c8f.jpg',1),(8,'Gabriel de Melo Marcondes','biel','123','gabriel-santos1','2000-05-27','500.695.508-24','cms/imagemUser/48d6215903dff56238e52e8891380c8f.jpg',1),(9,'Camila Cruz Malaquias','camila','123456','camilinha@gameplay','2000-02-24','472.927.018-50','cms/imagemUser/f8611767a7b3d415b3609219e5d00f1c.jpg',1),(10,'marquinhos autffffff','0000','0000','uuuuuuuuuu@ffffffffff','2000-01-01','111.111.111-11','cms/imagemUser/f8611767a7b3d415b3609219e5d00f1c.jpg',1),(11,'iiiiiiii iiiiiiiiiiiiiiiiiiiiiiiiii','00000','1111','iiiiiiiiiiiii@uuuuuuuuuuu','2000-01-02','656.565.656-56','cms/imagemUser/f8611767a7b3d415b3609219e5d00f1c.jpg',1),(12,'João Victor','joao','123','joao@teste.cpm','2000-04-29','000.000.000-00','cms/imagemUser/48d6215903dff56238e52e8891380c8f.jpg',1),(13,'Mat Mat Mat','Godzilla','123','matmat@gmgmg.com','2000-04-25','411.111.111-44','cms/imagemUser/9f2d3ae40c6ac7ebb1f720e32ba6c808.jpg',1),(14,'Caique M. Oliveira','caique','123','caique.m.oliveira.br@gmail.com','2000-03-08','443.156.218-46','cms/imagemUser/198230d4d1d7623dc821e7899de5f6f3.png',0),(15,'','','','','1915-01-09','',NULL,1),(17,'nome','usuario','senha','email','1915-01-09','cpf',NULL,1),(18,'Jhonatha','EuFracassei','Jhoe1234','jhoe@gmail.com','2000-05-08','111.111.111-11',NULL,1),(19,'antonio willian','willi1234','1234','antwillian2014@gmail.com','2000-03-12','111.111.111-11','cms/imagemUser/8f14e45fceea167a5a36dedd4bea2543.jpg',1),(20,'Jose armando ','jose','123','dddddd@ffffff','2000-02-02','033.555.353-10','Erro',1);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:00
