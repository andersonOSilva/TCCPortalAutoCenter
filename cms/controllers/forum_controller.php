<?php

  class controllerForum{

    //cad Categoria
    public function NovaCategoria(){
       $categoria = new Forum();
       $categoria->descricao=$_POST['txt_descricao'];
       $categoria::InsertCategoria($categoria);

    }

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

    // public function pesquisa(){
    //   $pesquisaForum = new pequisaForum();
    //   $pesquisaForum->pesquisa=$_POST['txtPesquisaForum'];
    //   return $pesquisaForum::pesquisaForum($pesquisaForum);
    // }

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
    public function NovoPalavrao(){
      // require_once("../models/palavraForum_class.php");
      $palavrao = new palavraForum();
      $palavrao->palavrao=$_POST['txt_palavrao'];
      $palavrao::InsertPalavra($palavrao);

      //var_dump($palavrao);

    }
    // Listar palavras proibidas
    public function ListarPalavrao(){
      $select_palavrao = new palavraForum();
      return $select_palavrao::selectPalavra();
    }

    public function BuscarPalavraId($idPalavra){
      require_once("../models/palavraForum_class.php");
      $palavrao=null;
      $idPalavra = $idPalavra;
      $palavra= new palavraForum();
      $palavra->idPalavra=$idPalavra;
      return $palavra::selectPalavraPorId($palavra);
    }


    // excluir palavras proibidas
    public function ExcluirPalavra(){
      require_once("models/palavraForum_class.php");

      $idPalavra=$_GET['id'];
      $palavra= new palavraForum();
      $palavra->idPalavra = $idPalavra;
      $palavra::Delete($palavra);
    }

    public function EditarPalavra(){
      require_once("models/palavraForum_class.php");
      $idPalavra=$_GET['id'];

      $palavra= new palavraForum();
      $palavra->palavra=$_POST['txt_palavrao'];
      $palavra ->idPalavra=$idPalavra;
      $palavra::EditarP($palavra);
    }
    // // ativar e desativar palavras proibidas
    // public function DesativarP(){
    //   require_once("models/palavraForum_class.php");
    //   $desativar = new cabecalhoForum();
    //   $desativar->idPalavra=$_GET['id'];
    //   $desativar::DesativarPalavra($desativar);
    // }
    //
    // public function AtivarP(){
    //   require_once("models/palavraForum_class.php");
    //   $ativar = new cabecalhoForum();
    //   $ativar->idPalavra=$_GET['id'];
    //   $ativar::AtivarPalavra($ativar);
    // }



  }


 ?>
