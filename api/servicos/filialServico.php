<?php
  $idServico = $_GET['idServico'];
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * FROM view_servico_filial WHERE idServico = $idServico";

  $resultado = $pdoCon->query($sql);

  $lstServicos = array();

  while ($servico = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $lstServicos[] = $servico;
  }

  echo json_encode($lstServicos);

?>
