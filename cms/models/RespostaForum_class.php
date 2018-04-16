<?php

  class RespForum{

    public $comentario;
    public $idUsuario;
    public $idTopico;

    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }


    public function InserirResposta($dadosResposta){

      $sql="insert into tbl_comentario_topico(comentario,idUsuario,idTopico)
              VALUES ('".$dadosResposta->comentario."', '".$dadosResposta->idUsuario."', '".$dadosResposta->idTopico."');";

              //echo $sql;

              $conex = new Mysql_db();
              $PDO_conex = $conex->Conectar();

              if ($PDO_conex->query($sql)) {

                header("location:responderPergunta.php?idPergunta=".$dadosResposta->idTopico);


              }else{
                echo "erro ao conectar";
              }

              $conex->Desconectar();

    }





  }

 ?>
