<?php
class palavraForum{
  public $idPalavra;
  public $palavrao;

  function __construct(){
  require_once('bd_class.php');
  }
//Insert das Palavras
  public function InsertPalavra($dados){
    $sql="insert into tbl_palavra_proibida (palavra)
    values('".$dados->palavrao."')";
    // echo $sql;
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      // echo $sql;
    }else{
      echo "erro";
    }

    $conex->Desconectar();
  }
  public function selectPalavra(){
    $sql="select * from tbl_palavra_proibida order by idPalavra desc;";

    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();
    $select = $PDO_conex->query($sql);
    $cont =0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $list_Palavra[] = new palavraForum;

      $list_Palavra[$cont]->idPalavra=$rs['idPalavra'];
      $list_Palavra[$cont]->palavrao=$rs['palavra'];
      $cont+=1;

  }
  if (isset ($list_Palavra)) {
    return $list_Palavra;
  }
}

public function Delete($dados_controller){
  $sql="Delete from tbl_palavra_proibida where idPalavra=".$dados_controller->idPalavra;
  // echo $sql;

  $conex = new Mysql_db();

  $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "sucesso";
    }else{
      echo "erro ao deletar";
    }

  $conex->Desconectar();

}

public function EditarP(){
  $sql="update tbl_palavra_proibida_forum set
        palavra='".$dados->palavrao."',
        where idPalavra=".$dados->idPalavra;
        echo $sql;
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          echo "string";
        }else{
          echo "erro";
        }

        $conex->Desconectar();
}

public function selectPalavraPorId($dados_controller){

  $select="select * from tbl_palavra_proibida where idPalavra=".$dados_controller->idPalavra;

  //echo $select;

  $conex = new Mysql_db();
  $PDO_conex = $conex->Conectar();
  $result = $PDO_conex->query($select);

  $count=0;
  if ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
    $list_Palavra = new palavraForum;
    $list_Palavra->idPalavra=$rs['idPalavra'];
    $list_Palavra->palavra=$rs['palavra'];
  ;



  }

  if (isset ($list_Palavra)) {
    //var_dump()
    return $list_Palavra;
  }

$conex->Desconectar();

}

// public function DesativarPalavra($dadosPalavra){
//   $sql="update  tbl_palavra_proibida SET status='0' where idPalavra=".$dadosPalavra->idPalavra;
//
//   echo $sql;
//   $conex = new Mysql_db();
//
//   $PDO_conex = $conex->Conectar();
//   if ($PDO_conex->query($sql)) {
//       echo "sucesso";
//   }else{
//     echo "erro ao desativar";
//   }
//   $conex->Desconectar();
// }
//
// public function AtivarPalavra($dadosPalavra){
//   $sql="update  tbl_palavra_proibida_forum set status = 0;";
//   echo $sql;
//   $conex = new Mysql_db();
//   $PDO_conex = $conex->Conectar();
//   if ($PDO_conex->query($sql)) {
//     $sql2="update  tbl_palavra_proibida SET status='1' where idPalavra=".$dadosPalavra->idPalavra;
//     echo $sql2;
//     $conex = new Mysql_db();
//     $PDO_conex2 = $conex->Conectar();
//     if ($PDO_conex2->query($sql2)) {
//       echo "sucesso";
//     }
//   }else{
//     echo "erro ao ativar";
//   }
//   $conex->Desconectar();
// }
}
?>
