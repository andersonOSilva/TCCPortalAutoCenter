<?php

  class controllerMensagen{

    public function Novo(){
      $mensagen = new Mensagem();
      $mensagen ->nome = $_POST['txtNome'];
      $mensagen ->email = $_POST['txtEmail'];
      $mensagen ->mensagen = $_POST['txtMensagen'];

      $mensagen::Insert($mensagen);
    }

    public function Selecionar(){
      $mensagen = new Mensagem();
      return $mensagen::Select();
    }

    public function Excluir(){
      $idFale=$_GET['id'];

      $mensagen = new Mensagem();

      $mensagen->id = $idFale;

      $mensagen::Delete($mensagen);

    }

  }

 ?>
