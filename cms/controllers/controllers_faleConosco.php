<?php

  class controllerMensagen{

    public function Novo(){
      $mensagen = new Mesangem();
      $mensagen ->nome = $_POST['txtNome'];
      $mensagen ->email = $_POST['txtEmail'];
      $mensagen ->mensagen = $_POST['txtMensagen'];

      $mensagen::Insert($mensagen);
    }

    public function Selecionar(){
      $mensagem = new Mensagem();
      return $mensagem::Select();
    }
  }

 ?>
