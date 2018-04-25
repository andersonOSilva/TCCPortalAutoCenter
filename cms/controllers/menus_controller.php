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

      $menus::Insert($menus);

    }

    public function Listar(){
      $menus = new Menus();
    return  $menus::Select();

    }

    public function Editar(){

    }

    public function Excluir(){

    }

}


 ?>
