<?php

class Carbook
{
  public $idCarbook;
  public $descricao;
  public $video;

  public  function __construct(){
    require_once('bd_class.php');
  }

  public function Insert($carbook){
    $sql="insert into tbl_home (videoCarbook,textoCarbook)
    values('".$carbook->video."', '".$carbook->descricao."')";

  echo $sql;


    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();



    if ($PDO_conex->query($sql)) {
      header("location:index.php?pag=carbook");
    }else{
      echo "erro";
    }

    $conex->Desconectar();
  }

  public function Update(){

  }

  public function Select(){

    $sql="select * from tbl_home order by idHome desc";

    $conex=new Mysql_db();
    //Faz a conexão com o banco
    $PDOconex = $conex->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $PDOconex->query($sql);

    $cont=0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listCarbook[] = new Carbook();

        $listCarbook[$cont]->video=$rs['videoCarbook'];
        $listCarbook[$cont]->descricao=$rs['textoCarbook'];

        $cont+=1;
    }



    $conex->Desconectar();

    if (isset($listCarbook)) {
      return $listCarbook;
    }
  }

  public function SelectApenasum(){

    $sql="select * from tbl_home where status=1 limit 1;";


    $conex=new Mysql_db();
    //Faz a conexão com o banco
    $PDOconex = $conex->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $PDOconex->query($sql);

    $cont=0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listCarbook[] = new Carbook();

        $listCarbook[$cont]->video=$rs['videoCarbook'];
        $listCarbook[$cont]->descricao=$rs['textoCarbook'];

        $cont+=1;
    }



    $conex->Desconectar();

    if (isset($listCarbook)) {
      return $listCarbook;
    }
  }

  public function Delete(){

  }

}


 ?>
