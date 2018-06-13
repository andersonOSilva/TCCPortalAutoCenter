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
-- Temporary view structure for view `view_prestadora_filial_servico_endereco`
--

DROP TABLE IF EXISTS `view_prestadora_filial_servico_endereco`;
/*!50001 DROP VIEW IF EXISTS `view_prestadora_filial_servico_endereco`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_prestadora_filial_servico_endereco` AS SELECT 
 1 AS `idFilial`,
 1 AS `Nomefilial`,
 1 AS `telefoneFilial`,
 1 AS `fotoFilial`,
 1 AS `idEnderecoPrestadora`,
 1 AS `statusfilial`,
 1 AS `idPrestadora`,
 1 AS `razaoSocial`,
 1 AS `nomeFantasia`,
 1 AS `fotoPrestadora`,
 1 AS `descricao`,
 1 AS `telefone`,
 1 AS `cnpj`,
 1 AS `senha`,
 1 AS `status`,
 1 AS `idEndereco`,
 1 AS `statusPrestadora`,
 1 AS `idFilialServico`,
 1 AS `idServico`,
 1 AS `NomeSrevivo`,
 1 AS `descricaoFilial`,
 1 AS `imagem`,
 1 AS `logradouro`,
 1 AS `numero`,
 1 AS `bairro`,
 1 AS `referencia`,
 1 AS `cep`,
 1 AS `nomeCidade`,
 1 AS `estadoNome`,
 1 AS `sigla`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `respostaperguntaforum_view`
--

DROP TABLE IF EXISTS `respostaperguntaforum_view`;
/*!50001 DROP VIEW IF EXISTS `respostaperguntaforum_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `respostaperguntaforum_view` AS SELECT 
 1 AS `idTopicoForum`,
 1 AS `idComentarioTopico`,
 1 AS `comentario`,
 1 AS `usuario`,
 1 AS `fotoUser`,
 1 AS `idUsuario`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_prod_status`
--

DROP TABLE IF EXISTS `view_prod_status`;
/*!50001 DROP VIEW IF EXISTS `view_prod_status`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_prod_status` AS SELECT 
 1 AS `idUsuario`,
 1 AS `idProduto`,
 1 AS `idStatus`,
 1 AS `status`,
 1 AS `nome`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_prestadora_filial`
--

DROP TABLE IF EXISTS `view_prestadora_filial`;
/*!50001 DROP VIEW IF EXISTS `view_prestadora_filial`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_prestadora_filial` AS SELECT 
 1 AS `idPrestadora`,
 1 AS `NomePrestadora`,
 1 AS `idFilial`,
 1 AS `nomeFilial`,
 1 AS `telefone`,
 1 AS `fotoFilial`,
 1 AS `status`,
 1 AS `statusServico`,
 1 AS `statusProduto`,
 1 AS `statusHome`,
 1 AS `statusPagPrest`,
 1 AS `statusPagSer`,
 1 AS `idEnderecoPrestadora`,
 1 AS `logradouro`,
 1 AS `numero`,
 1 AS `bairro`,
 1 AS `cep`,
 1 AS `idCidade`,
 1 AS `cidade`,
 1 AS `idEstado`,
 1 AS `estado`,
 1 AS `idPlano`,
 1 AS `Plano`,
 1 AS `preco`,
 1 AS `descricao`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_endereco_usuario`
--

DROP TABLE IF EXISTS `view_endereco_usuario`;
/*!50001 DROP VIEW IF EXISTS `view_endereco_usuario`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_endereco_usuario` AS SELECT 
 1 AS `idEnderecoUsuario`,
 1 AS `logradouro`,
 1 AS `numero`,
 1 AS `complemento`,
 1 AS `bairro`,
 1 AS `cep`,
 1 AS `idTipoEndereco`,
 1 AS `idCidade`,
 1 AS `idUsuario`,
 1 AS `descricao`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_confirmarcompra`
--

DROP TABLE IF EXISTS `view_confirmarcompra`;
/*!50001 DROP VIEW IF EXISTS `view_confirmarcompra`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_confirmarcompra` AS SELECT 
 1 AS `idPedido`,
 1 AS `idProduto`,
 1 AS `idUsuario`,
 1 AS `quantidade`,
 1 AS `idStatus`,
 1 AS `data`,
 1 AS `nome`,
 1 AS `preco`,
 1 AS `marca`,
 1 AS `idSubcategoria`,
 1 AS `idFilial`,
 1 AS `imagem`,
 1 AS `imagem1`,
 1 AS `imagem2`,
 1 AS `imagem3`,
 1 AS `tipo`,
 1 AS `modelo`,
 1 AS `durabilidade`,
 1 AS `dt_fabrica`,
 1 AS `garantia`,
 1 AS `fabricante`,
 1 AS `obs`,
 1 AS `descricao`,
 1 AS `quantidadeProduto`,
 1 AS `filial`,
 1 AS `Cliente`,
 1 AS `email`,
 1 AS `idEnderecoUsuario`,
 1 AS `logradouro`,
 1 AS `numero`,
 1 AS `complemento`,
 1 AS `bairro`,
 1 AS `cep`,
 1 AS `idTipoEndereco`,
 1 AS `idCidade`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_visita_marcada`
--

DROP TABLE IF EXISTS `view_visita_marcada`;
/*!50001 DROP VIEW IF EXISTS `view_visita_marcada`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_visita_marcada` AS SELECT 
 1 AS `dtVisita`,
 1 AS `idVisita`,
 1 AS `idUsuario`,
 1 AS `user`,
 1 AS `usuario`,
 1 AS `senha`,
 1 AS `email`,
 1 AS `dtNasc`,
 1 AS `cpf`,
 1 AS `fotoUser`,
 1 AS `statusUser`,
 1 AS `idFilialServico`,
 1 AS `idServico`,
 1 AS `nome`,
 1 AS `descricao`,
 1 AS `imagem`,
 1 AS `idFilial`,
 1 AS `filialNome`,
 1 AS `telefone`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_veiculo`
--

DROP TABLE IF EXISTS `view_veiculo`;
/*!50001 DROP VIEW IF EXISTS `view_veiculo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_veiculo` AS SELECT 
 1 AS `idVeiculo`,
 1 AS `placa`,
 1 AS `ano`,
 1 AS `cor`,
 1 AS `idModelo`,
 1 AS `idUsuario`,
 1 AS `acessorios`,
 1 AS `modelo`,
 1 AS `marca`,
 1 AS `foto`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_prestadora_servico`
--

DROP TABLE IF EXISTS `view_prestadora_servico`;
/*!50001 DROP VIEW IF EXISTS `view_prestadora_servico`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_prestadora_servico` AS SELECT 
 1 AS `idFilial`,
 1 AS `Nomefilial`,
 1 AS `telefoneFilial`,
 1 AS `fotoFilial`,
 1 AS `idEnderecoPrestadora`,
 1 AS `statusfilial`,
 1 AS `idPrestadora`,
 1 AS `razaoSocial`,
 1 AS `nomeFantasia`,
 1 AS `fotoPrestadora`,
 1 AS `descricao`,
 1 AS `telefone`,
 1 AS `cnpj`,
 1 AS `senha`,
 1 AS `status`,
 1 AS `idEndereco`,
 1 AS `statusPrestadora`,
 1 AS `idFilialServico`,
 1 AS `idServico`,
 1 AS `NomeSrevivo`,
 1 AS `descricaoFilial`,
 1 AS `imagem`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `viewperfilprestadora`
--

DROP TABLE IF EXISTS `viewperfilprestadora`;
/*!50001 DROP VIEW IF EXISTS `viewperfilprestadora`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viewperfilprestadora` AS SELECT 
 1 AS `idPrestadora`,
 1 AS `nomeFantasia`,
 1 AS `fotoPrestadora`,
 1 AS `descricao`,
 1 AS `telefone`,
 1 AS `logradouro`,
 1 AS `numero`,
 1 AS `bairro`,
 1 AS `referencia`,
 1 AS `cep`,
 1 AS `cidade`,
 1 AS `estado`,
 1 AS `Filial`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_usuarioforum`
--

DROP TABLE IF EXISTS `view_usuarioforum`;
/*!50001 DROP VIEW IF EXISTS `view_usuarioforum`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_usuarioforum` AS SELECT 
 1 AS `idTopicoForum`,
 1 AS `pergunta`,
 1 AS `idCategoriaForum`,
 1 AS `descricao`,
 1 AS `idUsuario`,
 1 AS `usuario`,
 1 AS `fotoUser`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_servico_filial`
--

DROP TABLE IF EXISTS `view_servico_filial`;
/*!50001 DROP VIEW IF EXISTS `view_servico_filial`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_servico_filial` AS SELECT 
 1 AS `idFilialServico`,
 1 AS `idFilial`,
 1 AS `nomeFilial`,
 1 AS `idServico`,
 1 AS `nome`,
 1 AS `descricao`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `veiw_teste`
--

DROP TABLE IF EXISTS `veiw_teste`;
/*!50001 DROP VIEW IF EXISTS `veiw_teste`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `veiw_teste` AS SELECT 
 1 AS `idFotoVeiculo`,
 1 AS `foto`,
 1 AS `idVeiculo`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_prestadora_filial_servico_endereco`
--

/*!50001 DROP VIEW IF EXISTS `view_prestadora_filial_servico_endereco`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_prestadora_filial_servico_endereco` AS select `vps`.`idFilial` AS `idFilial`,`vps`.`Nomefilial` AS `Nomefilial`,`vps`.`telefoneFilial` AS `telefoneFilial`,`vps`.`fotoFilial` AS `fotoFilial`,`vps`.`idEnderecoPrestadora` AS `idEnderecoPrestadora`,`vps`.`statusfilial` AS `statusfilial`,`vps`.`idPrestadora` AS `idPrestadora`,`vps`.`razaoSocial` AS `razaoSocial`,`vps`.`nomeFantasia` AS `nomeFantasia`,`vps`.`fotoPrestadora` AS `fotoPrestadora`,`vps`.`descricao` AS `descricao`,`vps`.`telefone` AS `telefone`,`vps`.`cnpj` AS `cnpj`,`vps`.`senha` AS `senha`,`vps`.`status` AS `status`,`vps`.`idEndereco` AS `idEndereco`,`vps`.`statusPrestadora` AS `statusPrestadora`,`vps`.`idFilialServico` AS `idFilialServico`,`vps`.`idServico` AS `idServico`,`vps`.`NomeSrevivo` AS `NomeSrevivo`,`vps`.`descricaoFilial` AS `descricaoFilial`,`vps`.`imagem` AS `imagem`,`ep`.`logradouro` AS `logradouro`,`ep`.`numero` AS `numero`,`ep`.`bairro` AS `bairro`,`ep`.`referencia` AS `referencia`,`ep`.`cep` AS `cep`,`c`.`nome` AS `nomeCidade`,`es`.`nome` AS `estadoNome`,`es`.`sigla` AS `sigla` from (((`view_prestadora_servico` `vps` join `tbl_endereco_prestadora` `ep` on((`vps`.`idEnderecoPrestadora` = `ep`.`idEnderecoPrestadora`))) join `tbl_cidade` `c` on((`ep`.`idCidade` = `c`.`idCidade`))) join `tbl_estado` `es` on((`es`.`idEstado` = `c`.`idEstado`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `respostaperguntaforum_view`
--

/*!50001 DROP VIEW IF EXISTS `respostaperguntaforum_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `respostaperguntaforum_view` AS select `t`.`idTopicoForum` AS `idTopicoForum`,`c`.`idComentarioTopico` AS `idComentarioTopico`,`c`.`comentario` AS `comentario`,`u`.`usuario` AS `usuario`,`u`.`fotoUser` AS `fotoUser`,`u`.`idUsuario` AS `idUsuario` from ((`tbl_comentario_topico` `c` join `tbl_usuario` `u` on((`u`.`idUsuario` = `c`.`idUsuario`))) join `tbl_topico_forum` `t` on((`c`.`idTopico` = `t`.`idTopicoForum`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_prod_status`
--

/*!50001 DROP VIEW IF EXISTS `view_prod_status`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_prod_status` AS select `p`.`idUsuario` AS `idUsuario`,`p`.`idProduto` AS `idProduto`,`p`.`idStatus` AS `idStatus`,`s`.`status` AS `status`,`pr`.`nome` AS `nome` from ((`tbl_pedido` `p` join `tbl_produto` `pr` on((`pr`.`idProduto` = `p`.`idProduto`))) join `tbl_status_compra` `s` on((`p`.`idStatus` = `s`.`idStatus`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_prestadora_filial`
--

/*!50001 DROP VIEW IF EXISTS `view_prestadora_filial`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_prestadora_filial` AS select `p`.`idPrestadora` AS `idPrestadora`,`p`.`nomeFantasia` AS `NomePrestadora`,`f`.`idFilial` AS `idFilial`,`f`.`nome` AS `nomeFilial`,`f`.`telefone` AS `telefone`,`f`.`fotoFilial` AS `fotoFilial`,`f`.`status` AS `status`,`f`.`statusServico` AS `statusServico`,`f`.`statusProduto` AS `statusProduto`,`f`.`statusHome` AS `statusHome`,`f`.`statusPagPrest` AS `statusPagPrest`,`f`.`statusPagSer` AS `statusPagSer`,`e`.`idEnderecoPrestadora` AS `idEnderecoPrestadora`,`e`.`logradouro` AS `logradouro`,`e`.`numero` AS `numero`,`e`.`bairro` AS `bairro`,`e`.`cep` AS `cep`,`c`.`idCidade` AS `idCidade`,`c`.`nome` AS `cidade`,`es`.`idEstado` AS `idEstado`,`es`.`nome` AS `estado`,`pl`.`idPlano` AS `idPlano`,`pl`.`nome` AS `Plano`,`pl`.`preco` AS `preco`,`pl`.`descricao` AS `descricao` from (((((`tbl_prestadora` `p` join `tbl_filial` `f` on((`p`.`idPrestadora` = `f`.`idPrestadora`))) join `tbl_endereco_prestadora` `e` on((`f`.`idEnderecoPrestadora` = `e`.`idEnderecoPrestadora`))) join `tbl_cidade` `c` on((`e`.`idCidade` = `c`.`idCidade`))) join `tbl_estado` `es` on((`c`.`idEstado` = `es`.`idEstado`))) join `tbl_plano` `pl` on((`f`.`idPlano` = `pl`.`idPlano`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_endereco_usuario`
--

/*!50001 DROP VIEW IF EXISTS `view_endereco_usuario`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_endereco_usuario` AS select `e`.`idEnderecoUsuario` AS `idEnderecoUsuario`,`e`.`logradouro` AS `logradouro`,`e`.`numero` AS `numero`,`e`.`complemento` AS `complemento`,`e`.`bairro` AS `bairro`,`e`.`cep` AS `cep`,`e`.`idTipoEndereco` AS `idTipoEndereco`,`e`.`idCidade` AS `idCidade`,`e`.`idUsuario` AS `idUsuario`,`tp`.`descricao` AS `descricao` from (`tbl_endereco_usuario` `e` join `tbl_tipo_endereco` `tp` on((`e`.`idTipoEndereco` = `tp`.`idTipoEndereco`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_confirmarcompra`
--

/*!50001 DROP VIEW IF EXISTS `view_confirmarcompra`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_confirmarcompra` AS select `p`.`idPedido` AS `idPedido`,`p`.`idProduto` AS `idProduto`,`p`.`idUsuario` AS `idUsuario`,`p`.`quantidade` AS `quantidade`,`p`.`idStatus` AS `idStatus`,`p`.`data` AS `data`,`pr`.`nome` AS `nome`,`pr`.`preco` AS `preco`,`pr`.`marca` AS `marca`,`pr`.`idSubcategoria` AS `idSubcategoria`,`pr`.`idFilial` AS `idFilial`,`pr`.`imagem` AS `imagem`,`pr`.`imagem1` AS `imagem1`,`pr`.`imagem2` AS `imagem2`,`pr`.`imagem3` AS `imagem3`,`pr`.`tipo` AS `tipo`,`pr`.`modelo` AS `modelo`,`pr`.`durabilidade` AS `durabilidade`,`pr`.`dt_fabrica` AS `dt_fabrica`,`pr`.`garantia` AS `garantia`,`pr`.`fabricante` AS `fabricante`,`pr`.`obs` AS `obs`,`pr`.`descricao` AS `descricao`,`pr`.`quantidadeProduto` AS `quantidadeProduto`,`f`.`nome` AS `filial`,`u`.`nome` AS `Cliente`,`u`.`email` AS `email`,`e`.`idEnderecoUsuario` AS `idEnderecoUsuario`,`e`.`logradouro` AS `logradouro`,`e`.`numero` AS `numero`,`e`.`complemento` AS `complemento`,`e`.`bairro` AS `bairro`,`e`.`cep` AS `cep`,`e`.`idTipoEndereco` AS `idTipoEndereco`,`e`.`idCidade` AS `idCidade` from ((((`tbl_pedido` `p` join `tbl_produto` `pr` on((`p`.`idProduto` = `pr`.`idProduto`))) join `tbl_filial` `f` on((`pr`.`idFilial` = `f`.`idFilial`))) join `tbl_usuario` `u` on((`u`.`idUsuario` = `p`.`idUsuario`))) join `tbl_endereco_usuario` `e` on((`p`.`idEnderecoUsuario` = `e`.`idEnderecoUsuario`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_visita_marcada`
--

/*!50001 DROP VIEW IF EXISTS `view_visita_marcada`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_visita_marcada` AS select `v`.`dtVisita` AS `dtVisita`,`v`.`idVisita` AS `idVisita`,`u`.`idUsuario` AS `idUsuario`,`u`.`nome` AS `user`,`u`.`usuario` AS `usuario`,`u`.`senha` AS `senha`,`u`.`email` AS `email`,`u`.`dtNasc` AS `dtNasc`,`u`.`cpf` AS `cpf`,`u`.`fotoUser` AS `fotoUser`,`u`.`statusUser` AS `statusUser`,`sf`.`idFilialServico` AS `idFilialServico`,`s`.`idServico` AS `idServico`,`s`.`nome` AS `nome`,`s`.`descricao` AS `descricao`,`s`.`imagem` AS `imagem`,`f`.`idFilial` AS `idFilial`,`f`.`nome` AS `filialNome`,`f`.`telefone` AS `telefone` from ((((`tbl_visita` `v` join `tbl_usuario` `u` on((`u`.`idUsuario` = `v`.`idUsuario`))) join `tbl_filial_servico` `sf` on((`sf`.`idFilialServico` = `v`.`idServicoFilial`))) join `tbl_servico` `s` on((`s`.`idServico` = `sf`.`idServico`))) join `tbl_filial` `f` on((`f`.`idFilial` = `sf`.`idFilial`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_veiculo`
--

/*!50001 DROP VIEW IF EXISTS `view_veiculo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_veiculo` AS select 1 AS `idVeiculo`,1 AS `placa`,1 AS `ano`,1 AS `cor`,1 AS `idModelo`,1 AS `idUsuario`,1 AS `acessorios`,1 AS `modelo`,1 AS `marca`,1 AS `foto` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_prestadora_servico`
--

/*!50001 DROP VIEW IF EXISTS `view_prestadora_servico`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_prestadora_servico` AS select `f`.`idFilial` AS `idFilial`,`f`.`nome` AS `Nomefilial`,`f`.`telefone` AS `telefoneFilial`,`f`.`fotoFilial` AS `fotoFilial`,`f`.`idEnderecoPrestadora` AS `idEnderecoPrestadora`,`f`.`status` AS `statusfilial`,`p`.`idPrestadora` AS `idPrestadora`,`p`.`razaoSocial` AS `razaoSocial`,`p`.`nomeFantasia` AS `nomeFantasia`,`p`.`fotoPrestadora` AS `fotoPrestadora`,`p`.`descricao` AS `descricao`,`p`.`telefone` AS `telefone`,`p`.`cnpj` AS `cnpj`,`p`.`senha` AS `senha`,`p`.`status` AS `status`,`p`.`idEndereco` AS `idEndereco`,`p`.`status` AS `statusPrestadora`,`fs`.`idFilialServico` AS `idFilialServico`,`s`.`idServico` AS `idServico`,`s`.`nome` AS `NomeSrevivo`,`s`.`descricao` AS `descricaoFilial`,`s`.`imagem` AS `imagem` from (((`tbl_filial` `f` join `tbl_prestadora` `p` on((`f`.`idPrestadora` = `p`.`idPrestadora`))) join `tbl_filial_servico` `fs` on((`f`.`idFilial` = `fs`.`idFilial`))) join `tbl_servico` `s` on((`fs`.`idServico` = `s`.`idServico`))) where ((`f`.`status` = 1) and (`p`.`status` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewperfilprestadora`
--

/*!50001 DROP VIEW IF EXISTS `viewperfilprestadora`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `viewperfilprestadora` AS select `p`.`idPrestadora` AS `idPrestadora`,`p`.`nomeFantasia` AS `nomeFantasia`,`p`.`fotoPrestadora` AS `fotoPrestadora`,`p`.`descricao` AS `descricao`,`p`.`telefone` AS `telefone`,`e`.`logradouro` AS `logradouro`,`e`.`numero` AS `numero`,`e`.`bairro` AS `bairro`,`e`.`referencia` AS `referencia`,`e`.`cep` AS `cep`,`c`.`nome` AS `cidade`,`es`.`sigla` AS `estado`,`pf`.`nome` AS `Filial` from ((((`tbl_prestadora` `p` join `tbl_endereco_prestadora` `e`) join `tbl_cidade` `c`) join `tbl_estado` `es`) join `tbl_filial` `pf`) where ((`p`.`idEndereco` = `e`.`idEnderecoPrestadora`) and (`c`.`idCidade` = `e`.`idCidade`) and (`es`.`idEstado` = `c`.`idEstado`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_usuarioforum`
--

/*!50001 DROP VIEW IF EXISTS `view_usuarioforum`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_usuarioforum` AS select `f`.`idTopicoForum` AS `idTopicoForum`,`f`.`pergunta` AS `pergunta`,`f`.`idCategoriaForum` AS `idCategoriaForum`,`cf`.`descricao` AS `descricao`,`u`.`idUsuario` AS `idUsuario`,`u`.`usuario` AS `usuario`,`u`.`fotoUser` AS `fotoUser` from ((`tbl_topico_forum` `f` join `tbl_categoria_forum` `cf`) join `tbl_usuario` `u` on((`f`.`idUsuario` = `u`.`idUsuario`))) where (`f`.`idCategoriaForum` = `cf`.`idCategoriaForum`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_servico_filial`
--

/*!50001 DROP VIEW IF EXISTS `view_servico_filial`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_servico_filial` AS select `fs`.`idFilialServico` AS `idFilialServico`,`f`.`idFilial` AS `idFilial`,`f`.`nome` AS `nomeFilial`,`s`.`idServico` AS `idServico`,`s`.`nome` AS `nome`,`s`.`descricao` AS `descricao` from ((`tbl_filial_servico` `fs` join `tbl_filial` `f` on((`fs`.`idFilial` = `f`.`idFilial`))) join `tbl_servico` `s` on((`fs`.`idServico` = `s`.`idServico`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `veiw_teste`
--

/*!50001 DROP VIEW IF EXISTS `veiw_teste`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`i9autocenter`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `veiw_teste` AS select 1 AS `idFotoVeiculo`,1 AS `foto`,1 AS `idVeiculo` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13  8:28:14
