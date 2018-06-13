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

      // tbl resposta
      public $comentario;
      public $idComentarioTopico;



      // construtor da class de conexao
      public  function __construct(){
        require_once('bd_class.php');
      }

      public function InsertCategoria($categoria){
        $sql="insert into tbl_categoria_forum(descricao)
        values('".$categoria->descricao."')";

        // echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        if ($PDO_conex->query($sql)) {
          header("location:index.php?pag=forum");
        }else{
          echo "erro";
        }

        $conex->Desconectar();
      }

      public function selectCat(){
        addslashes($sql="select * from tbl_categoria_forum where status=1");

        ///echo $sql;
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
          //  var_dump($list_Categoria);
        }

      }


      // select usuario pergunta

      public function selectUserPerg(){
        $sql="select * from view_usuarioforum order by idTopicoForum desc;";


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


      // select resposta por id de pergunta

      public function selectRespostas($dadosForum){
        $sql="select * from respostaperguntaforum_view where idTopicoForum=".$dadosForum->idTopicoForum;

       //echo $sql;

        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        $select = $PDO_conex->query($sql);
        $cont = 0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_resposta[] = new Forum;

          $list_resposta[$cont]->idUsuario=$rs['idUsuario'];
          $list_resposta[$cont]->nomeUser=$rs['usuario'];
          $list_resposta[$cont]->fotoUser=$rs['fotoUser'];
          $list_resposta[$cont]->comentario=$rs['comentario'];
          $list_resposta[$cont]->idComentarioTopico=$rs['idComentarioTopico'];


          $cont+=1;

        }

        $conex->Desconectar();
        if (isset ($list_resposta)) {
          return $list_resposta;

        }



      }

      // select resposta por id de pergunta

      public function selectRespostasForum($dadosForum){
        $sql="SELECT * FROM tbl_comentario_topico where idTopico=".$dadosForum->idTopicoForum;

       //echo $sql;

        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        $select = $PDO_conex->query($sql);
        $cont = 0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_resposta[] = new Forum;

          $list_resposta[$cont]->idUsuario=$rs['idUsuario'];
          $list_resposta[$cont]->nomeUser=$rs['usuario'];
          $list_resposta[$cont]->fotoUser=$rs['fotoUser'];
          $list_resposta[$cont]->comentario=$rs['comentario'];
          $list_resposta[$cont]->idComentarioTopico=$rs['idComentarioTopico'];


          $cont+=1;

        }

        $conex->Desconectar();
        if (isset ($list_resposta)) {
          return $list_resposta;

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

      public function selectUserPergPorId($dadosForum){
        $sql="select * from view_usuarioforum Where idTopicoForum=".$dadosForum->idTopicoForum;

        //echo $sql;
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        $select = $PDO_conex->query($sql);


        if ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_UserPerg = new Forum;

          $list_UserPerg->idCategoriaForum=$rs['idCategoriaForum'];
          $list_UserPerg->descricao=$rs['descricao'];
          $list_UserPerg->idUsuario=$rs['idUsuario'];
          $list_UserPerg->nomeUser=$rs['usuario'];
          $list_UserPerg->fotoUser=$rs['fotoUser'];
          $list_UserPerg->idTopicoForum=$rs['idTopicoForum'];
          $list_UserPerg->pergunta=$rs['pergunta'];



        }

        if (isset ($list_UserPerg)) {
          return $list_UserPerg;
        }
    }
  }

 ?>
