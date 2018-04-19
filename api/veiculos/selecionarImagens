<?php
  require_once('../../cms/models/bd_class.php');

  $idUsuario = $_GET['idUsuario'];
  $con = new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql = "SELECT * FROM view_veiculo WHERE idUsuario = $idUsuario";

  $resultado = $pdoCon->query($sql);

  $lstVeiculos = array();

  while ($veiculo = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $lstVeiculos[] = $veiculo;
  }

  echo json_encode($lstVeiculos);
?>
