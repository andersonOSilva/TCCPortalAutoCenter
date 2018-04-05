<?php
  require_once('../../cms/models/bd_class.php');

  $con=new Mysql_db();
  $pdoCon = $con->Conectar();

  $sql="SELECT * FROM tbl_produto ORDER BY nome";

  $resultado = $pdoCon->query($sql);

  $lstProdutos = array();

    while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) {
      $lstProdutos[] = $produto;
    }

    echo json_encode($lstProdutos);
 ?>
