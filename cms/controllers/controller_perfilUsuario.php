<?php

  class controllerPerfilUser{
    public function buscarPerfilPorId(){
      // require_once("models/perfilUser_class.php");
      $usuario = null;
      $idUsuario= $idUsuario;
      $usuario = new perfilUser();
      $usuario->idUsuario=$idUsuario;
      $usuario->nome=$nome;
      return $usuario::selectPerfilUser($usuario);
    }
  }

 ?>
