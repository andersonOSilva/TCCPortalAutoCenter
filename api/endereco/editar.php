<?php
  $logradouro = $_POST["logradouro"];
  $numero = $_POST["numero"];
  $complemento = $_POST["complemento"];
  $bairro = $_POST["bairro"];
  $cep = $_POST["cep"];
  $idTipoEndereco = $_POST["idTipoEndereco"];
  $idCidade = $_POST["idCidade"];
  $idUsuario = $_POST["idUsuario"];
  $idEndereco = $_GET["idEndereco"];

  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

    $sql="UPDATE tbl_endereco_usuario set logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', cep = '$cep', bairro = '$bairro', idTipoEndereco = $idTipoEndereco,
     idCidade = $idCidade, idUsuario = $idUsuario WHERE idEnderecoUsuario = $idEndereco";

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
