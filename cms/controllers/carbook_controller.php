<?php

class controllerCarbook
{
  public function Novo(){
      require_once 'modulo.php';

      $carbook = new Carbook();
      $carbook->descricao=$_POST['txtdescricao'];

      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      // Pegando a Foto

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

       $carbook ->video =$diretorio_completo;
       //var_dump($diretorio_completo) ;
      // var_dump($carbook);
       $carbook::Insert($carbook);
  }


  public function Editar(){

  }

  public function Listar(){
      $carbook = new Carbook();
    return  $carbook::Select();

  }

  public function BuscarApenasum(){
    $carbook = new Carbook();
  return  $carbook::SelectApenasum();
  }

  public function Excluir(){

  }

}



 ?>
