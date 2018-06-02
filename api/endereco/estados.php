<?php
require_once('../../cms/models/bd_class.php');

$con=new Mysql_db();
$pdoCon = $con->Conectar();

$sql="SELECT idEstado, sigla FROM tbl_estado;";

$resultado = $pdoCon->query($sql);

$lstEnderecos = array();

while ($endereco = $resultado->fetch(PDO::FETCH_ASSOC)) {
  $lstEnderecos[] = $endereco;
}

echo json_encode($lstEnderecos);
?>
