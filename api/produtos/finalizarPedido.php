<?php
 $json ='{"pedidos": {'. $_POST["pedido"] .'}}';

  $idUser = $_POST["idUsuario"];
  $idEndereco = $_POST["idEndereco"];

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $jsonArray=json_decode($json);

  $pedidos = $jsonArray->pedidos;

  $sucesso = false;

  foreach ($pedidos as $p) {
    $sql = "INSERT INTO tbl_pedido SET idUsuario = 8, idProduto = $p->id, data = CURDATE(), idEnderecoUsuario= 1, quantidade=1, idStatus=1";
    $con=new Mysql_db();
    $pdoCon = $con->Conectar();

    if($pdoCon->query($sql)){

      $sucesso = true

    }else {
      $sucesso = false
    }
   }

   if($sucesso){
      echo json_encode(
        array('sucesso' => true));
    }else {
      echo json_encode(
        array('sucesso' => false));
    }

    $con->Desconectar();
 ?>
