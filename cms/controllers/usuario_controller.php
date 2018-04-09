<?php

class controllerUsuario{

  // Desativa um usuario do sistema
  public function Desativar(){

  }
//Visualiza todos os dados do usuario
  public function Visualizar(){
    $usuario = new Usuario();
    return $usuario::Select();
  }
 // Manda uma notificação para o usuario
  public function Notificar(){

  }
}

 ?>
