<?php
  $idEndereco = $_POST["idEndereco"];

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="DELETE FROM tbl_endereco_usuario WHERE idEnderecoUsuario = $idEndereco";

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  if($pdoCon->query($sql)){

    echo json_encode(
      array('sucesso' => true));
  }else {
    echo json_encode(
      array('sucesso' => false));
  }

  $con->Desconectar();
 ?>
