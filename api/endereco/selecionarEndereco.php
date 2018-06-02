<?php
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * FROM tbl_tipo_endereco;";

  $resultado = $pdoCon->query($sql);

  $lstEnderecos = array();

  while ($endereco = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $lstEnderecos[] = $endereco;
  }

  echo json_encode($lstEnderecos);
?>
