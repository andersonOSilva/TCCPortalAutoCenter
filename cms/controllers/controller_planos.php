<?php

  class controllerPlano{

    public function Novo(){
      require_once 'modulo.php';
      $plano = new Plano();
      $plano ->nome =$_POST['txtNome'];
      $plano ->preco =$_POST['txtPreco'];
      $plano ->descricao =$_POST['txtDescricao'];


      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      // Pegando a Foto

      if (!empty($_FILES['flImagenPlano']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['flImagenPlano'],'imagenPlano');
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

       $plano ->foto =$diretorio_completo;

       $plano::Insert($plano);

    }


    public function Listar(){
      $contato = new Plano();
      return $contato::Select();
    }


    // BUSCAR POR ID
    public function Buscar(){

      $idPlano=$_GET['id'];

      //echo $idPlano;

      $plano= new Plano();

      $plano->id = $idPlano;

      return $plano::selectById($plano);
      /*
      $nome=$retornoModel->nome;
      $preco=$retornoModel->preco;
      $descricao=$retornoModel->descricao;
      $foto=$retornoModel->imagem;
      */
      // echo $preco;


      //var_dump ($retornoModel);
      /*
      var_dump (require_once('../views/cadastro_plano.php'));

        echo "passou";
        */
    }

    // editar

    public function Editar(){
      require_once 'modulo.php';
      $idPlano=$_GET['id'];
      $Plano= new Plano();
      $Plano ->id=$idPlano;
      $Plano ->nome = $_POST['txtNome'];
      $Plano ->preco = $_POST['txtPreco'];
      $Plano ->descricao = $_POST['txtDescricao'];

      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;
      $foto="vavavavav";

      // Pegando a Foto


      if (!empty($_FILES['flImagenPlano']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['flImagenPlano'],'imagenPlano');

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

       if ($imagem_file == true && $MovUpload==true) {
         $foto =$diretorio_completo;
       }else {
         $foto="nada";
       }

       $Plano ->foto =$foto;
       // var_dump($foto);

      $Plano::Update($Plano);


    }

    public function Excluir(){
        $idPlano=$_GET['id'];

        $plano= new Plano();

        $plano->id = $idPlano;

        $plano::Delete($plano);
    }
  }

 ?>
