<?php

  class pequisaForum{
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

    public $pesquisa;

    // construtor da class de conexao
    public function __construct(){
      require_once('cms/models/bd_class.php');
    }

    public function pesquisaForum($dados){
      $sql="select * from view_usuarioforum
      where pergunta like '%$dados->pesquisa%' or descricao like '%$dados->pesquisa%'";

      echo $sql;

      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();
      $select = $PDO_conex->query($sql);
      $cont = 0;

      while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $list_UserPerg[] = new pequisaForum;

        $list_UserPerg[$cont]->idCategoriaForum=$rs['idCategoriaForum'];
        $list_UserPerg[$cont]->descricao=$rs['descricao'];
        $list_UserPerg[$cont]->idUsuario=$rs['idUsuario'];
        $list_UserPerg[$cont]->nomeUser=$rs['usuario'];
        $list_UserPerg[$cont]->fotoUser=$rs['fotoUser'];
        $list_UserPerg[$cont]->idTopicoForum=$rs['idTopicoForum'];
        $list_UserPerg[$cont]->pergunta=$rs['pergunta'];

        $cont+=1;

      }

      var_dump($list_UserPerg);
      $conex->Desconectar();
      if (isset ($list_UserPerg)) {
        return $list_UserPerg;

      }



    }




  }

 ?>
