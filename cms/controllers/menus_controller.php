<?php

// Autor:Luana Fernandes
// Descrição:CRUD dos menus localizados na home(carrossel de menus)
// Data:23/04/2018

class controllerMenus
{
    public function Novo(){

      $menus = new Menus();

      $menus->titulo=$_POST['txt_titulo'];
      $menus->descricao=$_POST['txt_descricao'];
      $menus->link=$_POST['txt_link'];

      $menus::Insert($menus);

    }

    public function Listar(){
      $menus = new Menus();
    return  $menus::Select();

    }

    public function Buscar(){
      $idMenu = $_GET['id'];

      $menus= new Menus();
      $menus->idMenu = $idMenu;
      return $menus = $menus::SelectById($menus);

    }

    public function Editar(){

      $menus = new Menus();

      $idMenu = $_GET['id'];

      echo $idMenu;


      $menus->titulo=$_POST['txt_titulo'];
      $menus->descricao=$_POST['txt_descricao'];
      $menus->link=$_POST['txt_link'];
      $menus->idMenu=$idMenu;

      $menus::Update($menus);

    }

    public function Excluir(){
      $idMenu=$_GET['id'];

      $menus= new Menus();

      $menus->idMenu = $idMenu;

      $menus::Delete($menus);
    }

}


 ?>
