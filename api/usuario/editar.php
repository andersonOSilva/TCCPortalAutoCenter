<?php
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $email = $_POST["email"];
  $usuario = $_POST["usuario"];
  $dtNasc = $_POST["dtNasc"];
  $idUsuario = $_POST["idUsuario"];

  //Tratamento de datas
  $data=explode("/", $dtNasc);

  $ano=$data[2];
  $mes=$data[1];
  $dia=$data[0];

  $dtNasc = $ano."-".$mes."-".$dia;

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

    $sql="UPDATE tbl_usuario set usuario = '$usuario', nome = '$nome', cpf = '$cpf',email = '$email', dtNasc = '$dtNasc' WHERE idUsuario = $idUsuario";

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
