<?php

    class Forum{
      // tabela categoria
      public $descricao;
      public $idCategoriaForum;

      //tbl user
      public $idUsuario;
      public $nomeUser;
      public $fotoUser;

      // tbl forum
      public $pergunta;
      public $idTopicoForum;

      // construtor da class de conexao
      public  function __construct(){
        require_once('bd_class.php');
      }


      public function selectCat(){
        addslashes($sql="select * from tbl_categoria_forum");

        echo $sql;
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        $select = $PDO_conex->query($sql);
        $cont = 0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_Categoria[] = new Forum;

          $list_Categoria[$cont]->idCategoriaForum=$rs['idCategoriaForum'];
          $list_Categoria[$cont]->descricao=$rs['descricao'];


          $cont+=1;
        }

        $conex->Desconectar();
        if (isset ($list_Categoria)) {
          return $list_Categoria;
            var_dump($list_Categoria);
        }

      }


      // select usuario pergunta

      public function selectUserPerg(){
        $sql="select * from view_UsuarioForum order by idTopicoForum desc;";


        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        $select = $PDO_conex->query($sql);
        $cont = 0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_UserPerg[] = new Forum;

          $list_UserPerg[$cont]->idCategoriaForum=$rs['idCategoriaForum'];
          $list_UserPerg[$cont]->descricao=$rs['descricao'];
          $list_UserPerg[$cont]->idUsuario=$rs['idUsuario'];
          $list_UserPerg[$cont]->nomeUser=$rs['usuario'];
          $list_UserPerg[$cont]->fotoUser=$rs['fotoUser'];
          $list_UserPerg[$cont]->idTopicoForum=$rs['idTopicoForum'];
          $list_UserPerg[$cont]->pergunta=$rs['pergunta'];

          $cont+=1;

        }

        $conex->Desconectar();
        if (isset ($list_UserPerg)) {
          return $list_UserPerg;

        }

      }


      // Insert
      public function Insert($dados_forum){
          $sql="insert into tbl_topico_forum (pergunta, idCategoriaForum, idUsuario)
                      VALUES ('".$dados_forum->pergunta."',
                              '".$dados_forum->idCategoriaForum."',
                              '".$dados_forum->idUsuario."');";

                              echo $sql;
                              echo $dados_forum->idCategoriaForum;
          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();

          if ($PDO_conex->query($sql)) {
             header("location:homeForum.php");
          }else{
            echo "erro ao conectar";
          }

          $conex->Desconectar();
      }
    }

 ?>