<?php
class palavraForum{
  public $idPalavra;
  public $palavra;

  function __construct(){
  require_once('bd_class.php');
  }
//Insert das Palavras
  public function InsertPalavra($dados){
    $sql="insert into tbl_palavra_proibida(palavra)
    values('".$dados->palavra."',0)";
    // echo $sql;
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "string";
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

    if ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $list_Palavra = new palavraForum;

      $list_Palavra[$cont]->idPalavra=$rs['idPalavra'];
      $list_Palavra[$cont]->palavra=$rs['palavra'];
      $cont+=1;

  }
  if (isset ($list_Palavra)) {
    return $list_Palavra;
  }
}
?>
