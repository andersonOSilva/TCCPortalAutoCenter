<?php

  class controllerForum{

    // trazer dados de categorias
    public function Categorias(){
      $categoria = new Forum();
      return $categoria::selectCat();
    }

    public function novaPergunta(){
      $perguntaForum = new Forum();

      $idUsuario=($_GET['idUsuario']);
      $perguntaForum->idCategoriaForum=$_POST['slccategoria'];
      $perguntaForum->idUsuario=$idUsuario;
      $perguntaForum->pergunta=$_POST['txtPergunta'];
      $perguntaForum::Insert($perguntaForum);
    }


    public function ListartUserPerg(){
    $perguntaForum = new Forum();
      return $perguntaForum::selectUserPerg();
    }

  }


 ?>
