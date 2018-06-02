<?php
  class controllerServico{
    public function Novo(){
      require_once('modulo.php');
      $servico = new Servico();
      $servico->nome = $_POST['txt_nome'];
      $servico->descricao = $_POST['txt_descricao'];
      // $servico->imagem;
      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      // Pegando a Foto

      if (!empty($_FILES['fle_imagem']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['fle_imagem'],'imagenServico');
         if ($diretorio_completo == "Erro") {
             echo "<script>
                 alert('arquivo nao movido');
                 window.history.go(-1);
                 </script>";
               $MovUpload=false;
         }else {
           $MovUpload=true;
         }
       }else {
         $imagem_file = false;
       }

       $servico->imagem = $diretorio_completo;
       $servico::Insert($servico);

       //var_dump($servico);
    }

    public function Listar(){
      $servico = new Servico;
      return $servico::Select();
    }

    public function ListarPorId($dados){
      $idservico=$dados;

    //  echo $idservico;
      $servico = new Servico;
      $servico ->idServico=$idservico;

  //    var_dump($servico);
      return $servico::SelectByID($servico);

    }

    public function ListarServicoFilial($dados){

      //$idFilial = $dados->idFilial;
      $servico = new Servico;
      return $servico::SelectServicoFilial($dados);
    }

    public function Buscar(){
      $idServico = $_GET["id"];

      $servico = new Servico();
      //Carrefa o id do registro na classe contatos
      $servico->idServico = $idServico;

      return $servico = $servico::SelectByID($servico);


    }

    public function Editar(){
      require_once('modulo.php');
      $servico = new Servico;
      $servico->nome = $_POST['txt_nome'];
      $servico->descricao = $_POST['txt_descricao'];
      $servico->idServico=$_GET['id'];

      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;
      $foto="vavavavav";

      // Pegando a Foto

      if (!empty($_FILES['fle_imagem']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['fle_imagem'],'imagenPlano');
         if ($diretorio_completo == "Erro") {
             echo "<script>
                 alert('arquivo nao movido');
                 window.history.go(-1);
                 </script>";
               $MovUpload=false;
         }else {
           $MovUpload=true;
         }
       }else {
         $imagem_file = false;
       }

       if($imagem_file == true && $MovUpload==true){
         $foto=$diretorio_completo;
       }else{
         $foto="nada";
       }

       $servico->imagem = $foto;
       $servico::Update($servico);
    }

    public function Excluir(){
      require_once("models/servicos_class.php");
      $idServico=$_GET['id'];
      $servico = new Servico();
      //Carrefa o id do registro na classe contatos
      $servico->idServico= $idServico;
      //Chama o metodo de excluir na model
      $servico::Delete($servico);
    }
  }
 ?>
