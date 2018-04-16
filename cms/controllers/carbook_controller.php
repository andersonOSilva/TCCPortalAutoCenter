<?php

class controllerCarbook
{
  public function Novo(){
      require_once 'modulo.php';

      $carbook = new Carbook();
      $carbook->descricao = $_POST['txtdescricao'];

      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;


    if (!empty($_FILES['flImagenCarbook']['name'])) {
       $imagem_file = true;
       $diretorio_completo=salvarFoto($_FILES['flImagenCarbook'],'imagenCarbook');
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

     $carbook->imagem =$diretorio_completo;
     $carbook::Insert($carbook);

  }


  public function Update(){

  }

  public function Select(){

  }

  public function SelectByID(){

  }

  public function Delete(){

  }

}



 ?>
