<?php
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * FROM tbl_servico ORDER BY nome";

  $resultado = $pdoCon->query($sql);

  $lstServicos = array();

    while ($servico= $resultado->fetch(PDO::FETCH_ASSOC)) {
      $lstServicos[] = $servico;
    }

    echo json_encode($lstServicos);
 ?>
