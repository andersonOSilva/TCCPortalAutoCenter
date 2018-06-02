<?php
class filial_servico{
  public $idFilial;
  public $idFilialServico;
  public $idServico;

  function __construct(){
   require_once('../cms/models/bd_class.php');
 }

 public function servicoFilial($dados){

   //echo "ta na class";

   foreach($dados->idServico as $servico){
    $sql = "insert into tbl_filial_servico (idFilial,idServico)
          VALUES ('".$dados->idFilial."','".$servico."')";
  //  echo $sql."<br />";

    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
       header("location:index.php?pag=servico&idFilial=".$dados->idFilial."");

       //echo "suceeso";
    }else{
      echo "erro ao conectar";
    }

    $conex->Desconectar();
  }
 }
}

 ?>
