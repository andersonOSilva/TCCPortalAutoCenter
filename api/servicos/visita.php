<?php
  $idUsuario = $_POST["idUsuario"];
  $idServico = $_POST["idServico"];
  $data = $_POST["data"]

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

    $sql="INSERT INTO tbl_visita set idUsuario = $idUsuario, idServicoFilial = $idServico, dtVisita = '$data'";

    if($pdoCon->query($sql)){

      echo json_encode(
        array('sucesso' => true));
    }else {
      echo json_encode(
        array('sucesso' => false));
    }

    $con->Desconectar();
 ?>
