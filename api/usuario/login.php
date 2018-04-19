<?php

  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

      addslashes($sql="SELECT * FROM tbl_usuario WHERE
        usuario = '$usuario' AND senha = '$senha';");

      $con=new Mysql_db();
      $pdoCon = $con->Conectar();

      $select = $pdoCon->query($sql);

      if($rs=$select->fetch(PDO::FETCH_ASSOC)){

        echo json_encode(
          array('sucesso' => true,'usuario' => $rs));
      }else {
        echo json_encode(
          array('sucesso' => false));
      }

      $con->Desconectar();
 ?>
