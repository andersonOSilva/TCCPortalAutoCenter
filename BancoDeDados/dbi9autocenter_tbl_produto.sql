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
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `idSubcategoria` int(11) NOT NULL,
  `idFilial` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `imagem1` varchar(225) NOT NULL,
  `imagem2` varchar(255) NOT NULL,
  `imagem3` varchar(255) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `durabilidade` varchar(45) NOT NULL,
  `dt_fabrica` date NOT NULL,
  `garantia` varchar(45) NOT NULL,
  `fabricante` varchar(45) NOT NULL,
  `obs` varchar(45) DEFAULT NULL,
  `descricao` text,
  `quantidadeProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `fk_produto_filial_idx` (`idFilial`),
  KEY `fk_sub_categoria_produto_idx` (`idSubcategoria`),
  CONSTRAINT `fk_produto_filial` FOREIGN KEY (`idFilial`) REFERENCES `tbl_filial` (`idFilial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sub_categoria_produto` FOREIGN KEY (`idSubcategoria`) REFERENCES `tbl_sub_categoria` (`idSubCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (3,'Motor dourado',259.99,'CarProdutos',1,3,'imagenProduto/pecas-para-carro-jardim-primavera-zona-sul.jpg','','','','0000-00-00','AX1825','10 anos','0000-00-00','1 ano','MotorSport','Motor de carros de corrida','Produto importado com 1200 cavalos',45),(4,'Carroceria',150.99,'CarProdutos',1,3,'imagenProduto/pecas-para-carro-nacional-em-francisco-beltrao.jpg','','','','0000-00-00','Modelo 3D autoCad','10 anos','0000-00-00','1 ano','All Might Car','LoL','Descrição do produto',2),(5,'Roda',222.00,'CarProdutos',1,3,'imagenProduto/Loja-de-pecas-e-tintas-para-carros-em-Curitiba-e-Sao-Jose-dos-Pinhais.png','imagenProduto/c4ca4238a0b923820dcc509a6f75849b.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','rrrrrr','Aro xyz','Infinito','2018-05-17','6 meses','El Rei das Rodas','Isso é mesmo importante?','Isso nem é só a roda, porém eu já coloquei todos os dados pra mudar agora vai dar trabalho',4),(6,'Freio Abs',111.00,'UltraCar',1,3,'imagenProduto/depositphotos_81670288-stock-illustration-vector-car-spares-concept-with.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','imagenProduto/c81e728d9d4c2f636f067f89cc14862c.jpg','1111111','Freio','Até você estragar','2018-05-24','1 ano','FreioMotors','Freio com várias ferramentas em volta','Acho que tudo já ta bem claro',7),(7,'Peça de Carro',111.00,'UltraCar',1,3,'imagenProduto/2157d562033dbfc.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','imagenProduto/45c48cce2e2d7fbdea1afc51c7c6ad26.jpg','imagenProduto/c81e728d9d4c2f636f067f89cc14862c.jpg','1111111','2018','Muito Tempo','2018-05-24','6 meses','EA Sports','Nada Muda','Item encontrado no NFS',11),(8,'Volante',10.22,'UltraCar',1,3,'imagenProduto/images.jpg','imagenProduto/1679091c5a880faf6fb5e6087eb1b2dc.jpg','imagenProduto/8f14e45fceea167a5a36dedd4bea2543.jpg','imagenProduto/e6d96502596d7e7887b76646c5f615d9.jpg','fon','Astra2000','2 anos','2014-10-26','4 anos','Cardrop','Produto altamente confortavel','Volante perfeito para curvas dificilmente perfeitas',4);
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:13
