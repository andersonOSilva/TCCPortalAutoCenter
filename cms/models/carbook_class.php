<?php

class Carbook
{
  public $idCarbook;
  public $descricao;
  public $imagem;

  public  function __construct(){
    require_once('bd_class.php');
  }

  //função Inserir
  public function Insert($carbook){
    $sql="insert into tbl_carbook(imagem,descricao)
    values('".$carbook->imagem."','".$carbook->descricao."')";

    //echo $sql;

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "<script>location.reload();</script>";
    }else{
      echo "erro";
    }

    $conex->Desconectar();

  }

}


 ?>
