<?php

class controllerPrestadora{
    public function Inserir(){
      
      require_once('cms/modulo.php');
     $Prestadora = new Prestadora();
     $Prestadora->login=$_POST['txtlogin'];
     $Prestadora->senha=$_POST['txtsenha'];
     $Prestadora->email=$_POST['txtemail'];
     $Prestadora->cnpj=$_POST['txtcnpj'];
     $Prestadora->razaoSocial=$_POST['txtrazaosocial'];
     $Prestadora->nomefantasia=$_POST['txtnomefantasia'];
     $Prestadora->telefone=$_POST['txttelefone'];
     $Prestadora->descricao=$_POST['txtdescricao'];

    // var_dump($Prestadora);
      // $Prestadora->imagem;
      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      // Pegando a Foto

      if (!empty($_FILES['fle_imagem']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['fle_imagem'],'cms/imagenPlano');
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

       $Prestadora->fotoPrestadora = $diretorio_completo;
       $Prestadora::Insert($Prestadora);
        
        

//          if ($Prestadora->$IDdaPrestadora != Null){
//            echo("controller diz - amigo estou aqui");
//              header('../../cadPrestadora/cadastroPrestadora.php?pag=Endereco');
//
//
//        }else{
//          echo("controller diz -voce falhou miseravelmente");
//
//        }
    }




    //Luana instanciou a class
    public function Listar(){
      $Prestadora = new Prestadora;
      return $Prestadora::Select();
    }

    public function Buscar(){
      $idPrestadora = $_GET["id"];

      $Prestadora = new Prestadora();
      //Carrefa o id do registro na classe contatos
      $Prestadora->idPrestadora = $idPrestadora;

      $Prestadora = $Prestadora::SelectByID($Prestadora);

      require_once('index.php');
    }

    public function Editar(){
      
      require_once('modulo.php');
      $Prestadora = new Prestadora;
      $Prestadora->nome = $_POST['txt_nome'];
      $Prestadora->descricao = $_POST['txt_descricao'];
      $Prestadora->idPrestadora=$_GET['id'];

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

       $Prestadora->imagem = $foto;
       $Prestadora::Update($Prestadora);
    }

    public function Excluir(){
      $Prestadora = new Prestadora();
      //Carrefa o id do registro na classe contatos
      $Prestadora->idPrestadora=$_GET['id'];
      //Chama o metodo de excluir na model
      $Prestadora::Delete($Prestadora);
    }

}
 ?>
