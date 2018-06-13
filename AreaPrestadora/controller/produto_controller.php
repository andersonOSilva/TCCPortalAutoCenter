<?php

/*
Autor:Luana Fernandes
Descrição: Tela de cadastro de produtos
Data:19/05/2018
 */
class controllerProduto
{

  public function Novo(){
    require_once ('modulo.php');

    $produto = new Produto();
    $produto->nome=$_POST['txt_nome'];
    $produto->preco=$_POST['txt_preco'];
    $produto->marca=$_POST['txt_marca'];
    $produto->tipo=$_POST['txt_tipo'];
    $produto->modelo=$_POST['txt_modelo'];
    $produto->dura=$_POST['txt_dura'];
    $produto->dt_fabrica=$_POST['dt_fabrica'];
    $produto->garante=$_POST['txt_garante'];
    $produto->fabricante=$_POST['txt_fabricante'];
    $produto->obs=$_POST['txt_obs'];

    if (isset($_GET['idFilial'])) {
      $idFilial=$_GET['idFilial'];

      echo $idFilial ;
      $produto->idFilial=$idFilial;
    }

    // iniciado variaveis
    $diretorio_completo=Null;
    $MovUpload=false;
    $imagem_file=Null;

    // Pegando a Foto
    // imagem 0
    if (!empty($_FILES['flImagenProduto']['name'])) {
       $imagem_file = true;
       $diretorio_completo=salvarFoto($_FILES['flImagenProduto'],'imagenProduto');
       if ($diretorio_completo == "Erro") {
           // echo "<script>
           //     alert('arquivo nao movido');
           //     window.history.go(-1);
           //     </script>";
             $MovUpload=false;
       }else {
         $MovUpload=true;
       }
     }else {
       $imagem_file = false;
     }


    //  imagem 1
    if (!empty($_FILES['flImagenProduto1']['name'])) {
       $imagem_file1 = true;
       $diretorio_completo1=salvarFoto($_FILES['flImagenProduto1'],'imagenProduto');
       if ($diretorio_completo1 == "Erro") {
           // echo "<script>
           //     alert('arquivo nao movido');
           //     window.history.go(-1);
           //     </script>";
             $MovUpload1=false;
       }else {
         $MovUpload1=true;
       }
     }else {
       $imagem_file1 = false;
     }

    //  imagem 2
    if (!empty($_FILES['flImagenProduto2']['name'])) {
       $imagem_file2 = true;
       $diretorio_completo2=salvarFoto($_FILES['flImagenProduto2'],'imagenProduto');
       if ($diretorio_completo2 == "Erro") {
           // echo "<script>
           //     alert('arquivo nao movido');
           //     window.history.go(-1);
           //     </script>";
             $MovUpload2=false;
       }else {
         $MovUpload2=true;
       }
     }else {
       $imagem_file2 = false;
     }

     //imagem 3
     if (!empty($_FILES['flImagenProduto3']['name'])) {
        $imagem_file3 = true;
        $diretorio_completo3=salvarFoto($_FILES['flImagenProduto3'],'imagenProduto');
        if ($diretorio_completo3 == "Erro") {
            // echo "<script>
            //     alert('arquivo nao movido');
            //     window.history.go(-1);
            //     </script>";
              $MovUpload3=false;
        }else {
          $MovUpload3=true;
        }
      }else {
        $imagem_file3 = false;
      }

     $produto ->foto =$diretorio_completo;
     $produto ->foto1 =$diretorio_completo1;
     $produto ->foto2 =$diretorio_completo2;
     $produto ->foto3 =$diretorio_completo3;

     $produto::Insert($produto);
  }

  public function Listar(){
      $produto = new Produto();
      return $produto::Select();
  }

  //trazer dados da sub_categoria
  public function Categoria(){
    $categoria = new Produto();
    return $categoria::SelectSubCategoria();
  }

  public function Buscar(){

  }

  public function atualizarStatus() {
    require_once('models_views/compra_produto_class.php');

    $controller = new CompraProduto;

   $idPedido= $_GET['idPedido'];

   //echo $idPedido;
   $controller ->idPedido=$idPedido;
   $controller::atualizarStatus($controller);
  }


  public function atualizarStatus2() {
    require_once('models_views/compra_produto_class.php');

    $controller = new CompraProduto;

   $idPedido= $_GET['idPedido'];

   //echo $idPedido;
   $controller ->idPedido=$idPedido;
   $controller::atualizarStatus2($controller);
  }

}


 ?>
