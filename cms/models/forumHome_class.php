<?php

/**
 *
 */
class ForumHome
{
  public $idForum;
  public $descricao;
  public $foto;
  public $status;

  public  function __construct(){
    require_once('bd_class.php');
  }

  public function Insert($forumHome){
    $sql="insert into tbl_forum(imagem, descricao)
    values('".$forumHome->foto."', '".$forumHome->descricao."')";

    echo $sql;
    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();



    if ($PDO_conex->query($sql)) {
      header("location:index.php?pag=forumHome");
      //var_dump($sql);
    }else{
      echo "erro";
    }

    $conex->Desconectar();

  }

  public function Select(){

    $sql="select * from tbl_forum order by idForum desc";

    $conex=new Mysql_db();
    //Faz a conexão com o banco
    $PDOconex = $conex->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $PDOconex->query($sql);

    $cont=0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $listForumHome[] = new ForumHome();

      $listForumHome[$cont]->foto=$rs['imagem'];
      $listForumHome[$cont]->descricao=$rs['descricao'];
      $listForumHome[$cont]->status=$rs['status'];

      $cont+=1;
    }

    $conex->Desconectar();

    if (isset($listForumHome)) {
    return $listForumHome;
    }

  }

  public function SelectById($forumHome){

    $sql="select * from tbl_forum where status=1 ";


    $conex=new Mysql_db();
    //Faz a conexão com o banco
    $PDOconex = $conex->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $PDOconex->query($sql);

    $cont=0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listForumHome[] = new ForumHome();

        $listForumHome[$cont]->foto=$rs['imagem'];
        $listForumHome[$cont]->descricao=$rs['descricao'];

        $cont+=1;
    }

    $conex->Desconectar();

    if (isset($listForumHome)) {
      return $listForumHome;
    }
  }

  public function Delete(){

  }

  public function Ativo($ativo){
    $sql="update tbl_forum set status = 1 where idForum=".$ativo->idForum;

    //echo $sql;
    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();
    if ($PDO_conex->query($sql)) {
      require_once 'views/forumHome_view.php';
    }else{
      echo "erro ao ativar";
    }
    $conex->Desconectar();
  }

  public function Desativo($desativo){
    $sql="update tbl_forum set status = 0 where idForum=".$desativo->idForum;

    //echo $sql;
    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();
    if ($PDO_conex->query($sql)) {
      require_once 'views/forumHome_view.php';
    }else{
      echo "erro ao ativar";
    }
    $conex->Desconectar();

  }


}


 ?>
