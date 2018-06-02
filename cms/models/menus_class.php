<?php

// Autor:Luana Fernandes
// Descrição:CRUD dos menus localizados na home(carrossel de menus)
// Data:23/04/2018

class Menus
{
  public $idMenu;
  public $titulo;
  public $descricao;
  public $link;

  public  function __construct(){
    require_once('bd_class.php');
  }

  public function Insert($menus){
    $sql="insert into tbl_menus(titulo, descricao, link)
    values('".$menus->titulo."', '".$menus->descricao."', '".$menus->link."')";

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      //echo $sql;
      echo "sucesso";
      }else{
      echo "erro";
    }

    $conex->Desconectar();

  }

  public function Select(){
    $sql="select * from tbl_menus order by idMenu desc";
    addslashes($sql);

    $conex=new Mysql_db();
    //Faz a conexão com o banco
    $PDOconex = $conex->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $PDOconex->query($sql);

    $cont=0;

    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listMenus[] = new Menus();

        $listMenus[$cont]->titulo=$rs['titulo'];
        $listMenus[$cont]->descricao=$rs['descricao'];
        $listMenus[$cont]->link=$rs['link'];
        $listMenus[$cont]->idMenu=$rs['idMenu'];

        $cont+=1;
    }



    $conex->Desconectar();

    if (isset($listMenus)) {
      return $listMenus;
    }

  }

  public function SelectById($menus){
    $sql="select * from tbl_menus where idMenu= $menus->idMenu";

    //Instancia a classe do banco de dados
    $conex = new Mysql_db ();

    //Chama o metodo de conexão, e guarda o retorno na variável
    $PDOconex = $conex->Conectar();

    $select = $PDOconex->query($sql);

    $menus = new Menus();

    if($rs=$select->fetch(PDO::FETCH_ASSOC)){
      $menus->idMenu = $rs['idMenu'];
      $menus->titulo = $rs['titulo'];
      $menus->link = $rs['link'];
      $menus->descricao = $rs['descricao'];
    }

    $conex->Desconectar();

    return $menus;
  }

  public function Update($menus){
      $sql="update tbl_menus set titulo='".$menus->titulo."',
      descricao='".$menus->descricao."',
       link='".$menus->link."' where idMenu=$menus->idMenu ";

       echo $sql;

       $conex = new Mysql_db();

       $PDO_conex = $conex->Conectar();


       if ($PDO_conex->query($sql)) {
         echo "sucesso";
       }else{
         echo "erro";
       }

       $conex->Desconectar();
  }



  public function Delete($menus){
    $sql="delete from tbl_menus where idMenu=".$menus->idMenu;

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "sucesso!";
    }else{
      echo "erro ao deletar";
    }

    $conex->Desconectar();
  }

}


 ?>
