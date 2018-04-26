<?php
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * from viewperfilprestadora";

  $resultado = $pdoCon->query($sql);

  $lstPrestadoras = array();

    while ($prestadora = $resultado->fetch(PDO::FETCH_ASSOC)) {
      $lstPrestadoras[] = $prestadora;
    }

    echo json_encode($lstPrestadoras);
 ?>
