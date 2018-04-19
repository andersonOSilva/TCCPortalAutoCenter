<?php

class controllerUsuario{

  // Desativa um usuario do sistema
  public function Desativar(){

  }
//Visualiza todos os dados do usuario
  public function Visualizar(){
    $usuario = new cadUser();
    return $usuario::Select();
  }
 // Manda uma notificação para o usuario
  public function Notificar(){

  }
  public function Selecionarporid(){
    $idUsuario = $_GET['id'];
    // echo $idUsuario;
    $usuario = new carroeUsuario();

    $usuario->idUsuario = $idUsuario;
  return $usuario::Selecionarporid($usuario);
  }
}

 ?>
