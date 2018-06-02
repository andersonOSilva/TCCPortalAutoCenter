<?php

  class Tema{
    public $idCategoriaForum;
    public $descricao;
    public $status;

    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }

    public function Inserttema($dados){

      $sql="Insert into tbl_categoria_forum (descricao,status)
            values('".$dados->descricao."',0)";


      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();

      if ($PDO_conex->query($sql)) {

          $select="select * from tbl_categoria_forum where descricao='$dados->descricao'";

          echo $select;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $result = $PDO_conex->query($select);


          if ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
            $list_tema = new Forum;
            $list_tema->idCategoriaForum=$rs['idCategoriaForum'];
            $list_tema->descricao=$rs['descricao'];


          }

          if (isset ($list_tema)) {
            //var_dump()
            return $list_tema;
          }

      }

      $conex->Desconectar();

    }


    public function InserttemaCms($dados){

      $sql="Insert into tbl_categoria_forum (descricao,status)
            values('".$dados->descricao."',0)";


      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();

      if ($PDO_conex->query($sql)) {

        echo "secesso";
      }

      $conex->Desconectar();

    }

    public function selectTema(){

          $select="select * from tbl_categoria_forum";

          //echo $select;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $result = $PDO_conex->query($select);

          $count=0;
          while ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
            $list_tema[$count] = new Tema;
            $list_tema[$count]->idCategoriaForum=$rs['idCategoriaForum'];
            $list_tema[$count]->descricao=$rs['descricao'];
            $list_tema[$count]->status=$rs['status'];

            $count+=1;

          }

          if (isset ($list_tema)) {
            //var_dump()
            return $list_tema;
          }



      $conex->Desconectar();

    }
  }


 ?>
