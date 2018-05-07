<?php

  class controllerPerfilUser{
    public function Buscar(){
      $idUsuario=$_SESSION['idUsuario'];

      $usuario = new perfilUser();
      $usuario->idUsuario=$idUsuario;
      return $usuario::ListarperfilUsuario($uuario);
    }
  }

 ?>
