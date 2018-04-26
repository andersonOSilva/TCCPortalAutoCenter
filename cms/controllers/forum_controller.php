<?php

  class controllerForum{

    // trazer dados de categorias
    public function Categorias(){
      $categoria = new Forum();
      return $categoria::selectCat();
    }

    public function novaPergunta(){


      $idUsuario=($_GET['idUsuario']);
      $temaNovo=$_POST['tntNovoTema'];

      if ($temaNovo === "") {
        $perguntaForum = new Forum();
        $perguntaForum->idCategoriaForum=$_POST['slccategoria'];
        $perguntaForum->idUsuario=$idUsuario;
        $perguntaForum->pergunta=$_POST['txtPergunta'];
        $perguntaForum::Insert($perguntaForum);
      }else{
        // inserir novo tema na class de tema
        require_once("cms/models/tema.php");
        $temaForum= new Tema();
        $temaForum->descricao=$temaNovo;

        $resultModel = $temaForum::Inserttema($temaForum);

        // recuperando resultado da class tema e passando para a de forum
        if (isset($resultModel)) {

          $idCate=$resultModel->idCategoriaForum;

          $perguntaForum = new Forum();
          $perguntaForum->idCategoriaForum=$idCate;
          $perguntaForum->idUsuario=$idUsuario;
          $perguntaForum->pergunta=$_POST['txtPergunta'];
          $perguntaForum::Insert($perguntaForum);

        }
      }

    }


    public function ListartUserPerg(){
      $perguntaForum = new Forum();
      return $perguntaForum::selectUserPerg();
    }

    public function ListarCat(){
      require_once("../models/tema.php");
      $catForum= new Tema();
      return $catForum::selectTema();
    }

    public function ListartUserPergPorId($idPergunta){
      $idTopicoForum = $idPergunta;
      $perguntaForum= new Forum();
      $perguntaForum->idTopicoForum=$idTopicoForum;
      return $perguntaForum::selectUserPergPorId($perguntaForum);
    }

    public function ListarTodasRepostas($idPergunta){
      $idTopicoForum = $idPergunta;
      $perguntaForum= new Forum();
      $perguntaForum->idTopicoForum=$idTopicoForum;
      return $perguntaForum::selectRespostas($perguntaForum);
    }

    public function pesquisa(){
      $pesquisaForum = new pequisaForum();
      $pesquisaForum->pesquisa=$_POST['txtPesquisaForum'];
      return $pesquisaForum::pesquisaForum($pesquisaForum);
    }

    public function selectRespostasForum($idPergunta){
      $idTopicoForum = $idPergunta;
      $perguntaForum= new Forum();
      $perguntaForum->idTopicoForum=$idTopicoForum;
      return $perguntaForum::selectRespostasForum($perguntaForum);
    }

    // cabecalho

    public function NovoCabecalho(){
      require_once("models/cabecalhoForum_class.php");
      $cabecalhoForum = new cabecalhoForum();
      $cabecalhoForum->titulo1=$_POST['txtTitulo1'];
      $cabecalhoForum->titulo2=$_POST['txtTitulo2'];
      $cabecalhoForum->descricao=$_POST['txtCabecalho'];
      $cabecalhoForum::novoCabecalho($cabecalhoForum);

    }

    public function ListarCabecalho(){
      require_once("../models/cabecalhoForum_class.php");
      $select_catForum= new cabecalhoForum();
      return $select_catForum::selectCabecalho();
    }

    public function selectCabecalhoAtivado(){
      require_once("cms/models/cabecalhoForum_class.php");
      $select_catForum= new cabecalhoForum();
      return $select_catForum::selectCabecalhoAtivado();
    }

    public function Excluir(){
      require_once("models/cabecalhoForum_class.php");

      $idCabecalho=$_GET['id'];
      $cabecalho= new cabecalhoForum();
      $cabecalho->idcabecalho = $idCabecalho;
      $cabecalho::Delete($cabecalho);
    }

    public function BuscarCabecalhoId($idcabecalho){
      require_once("../models/cabecalhoForum_class.php");

      $idcabecalho = $idcabecalho;
      $cabecalho= new cabecalhoForum();
      $cabecalho->idcabecalho=$idcabecalho;
      return $cabecalho::selectCabecalhoPorId($cabecalho);
    }

    public function EditarCabecalho(){
      require_once("models/cabecalhoForum_class.php");
      $idcabecalho=$_GET['id'];

      $cabecalhoForum = new cabecalhoForum();
      $cabecalhoForum ->idcabecalho=$idcabecalho;
      $cabecalhoForum->titulo1=$_POST['txtTitulo1'];
      $cabecalhoForum->titulo2=$_POST['txtTitulo2'];
      $cabecalhoForum->descricao=$_POST['txtCabecalho'];
      $cabecalhoForum::EditarCabecalho($cabecalhoForum);

    }

    // function ativar cabecalho
  public function ativarCabecalho(){
    require_once("models/cabecalhoForum_class.php");
    $ativacao = new cabecalhoForum();
    $ativacao->idcabecalho=$_GET['id'];
    $ativacao::ativarCabecalho($ativacao);
  }

  // function desativar cabecalho
public function DesativarCabecalho(){
  require_once("models/cabecalhoForum_class.php");
  $ativacao = new cabecalhoForum();
  $ativacao->idcabecalho=$_GET['id'];
  $ativacao::DesativarCabecalho($ativacao);
}


    // palavra proibida
    public function ListarPalavra(){
      require_once("../models/palavraForum_class.php");
      $select_palavraForum = new palavraForum();
      return $select_palavraForum::InsertPalavra();

    }






  }


 ?>
