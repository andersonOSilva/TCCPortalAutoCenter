<?php
  $idUsuario = $_GET['idU'];
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * FROM view_prod_status WHERE idUsuario = $idUsuario";

  $resultado = $pdoCon->query($sql);

  $lstServicos = array();

  while ($servico = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $lstServicos[] = $servico;
  }

  echo json_encode($lstServicos);

?>
