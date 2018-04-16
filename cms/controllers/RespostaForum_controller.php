<?php
    class RespostaForum{

      public function novaResposta(){
        $idUser=$_GET['idUser'];
        $idPergunta=$_GET['idPergunta'];

        echo $idUser;
        $resposta = new RespForum;
        $resposta ->comentario=$_POST['txtResposta'];
        $resposta ->idUsuario=$idUser;
        $resposta ->idTopico=$idPergunta;

        $resposta::InserirResposta($resposta);
      }

    }


 ?>
