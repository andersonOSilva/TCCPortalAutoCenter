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

        $cont+=1;
    }



    $conex->Desconectar();

    if (isset($listMenus)) {
      return $listMenus;
    }

  }

  public function Update($menus){
      $sql="update tbl_menus set titulo='".$menus->titulo."', descricao='".$menus->descricao."',
       link='".$menu->link."' where idMenu=$menu->idMenu ";

       // echo $sql;

       $conex = new Mysql_db();

       $PDO_conex = $conex->Conectar();



       if ($PDO_conex->query($sql)) {
         echo "sucesso";
       }else{
         echo "erro";
       }

       $conex->Desconectar();
  }

  public function SelectById(){

  }

  public function Delete(){

  }

}


 ?>
