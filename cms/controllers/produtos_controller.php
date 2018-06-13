<?php

  class controllerProdutos{

    // buscar Produtos

    public function BuscarTodos(){
      $controller = new produtoClass;
      return $controller::ListarTodos();
    }

    public function finalizarCompra(){
      require_once ('cms/models/compraUsuario_class.php');

      $compraUser = new compraUser();

      $totalDados = $_POST['txtDados'] + 1;

      //echo $totalDados;

  //  $totalRegistros=count($_POST['txtIdProduto']);

    //echo "esse e o total de ids ".$totalRegistros ;
    $count=1;
    while ($count < $totalDados ) {
      $compraUser ->idProduto = $_POST['txtIdProduto-'.$count];
      $compraUser ->quantidade = $_POST['txtQuantidade-'.$count];


      // pegando id do usuario logado
      if (isset($_SESSION['idUsuario'])) {
        $idUser =$_SESSION['idUsuario'];
      }

      $compraUser ->idUsuario = $idUser;

      $compraUser::Insert($compraUser);

    $count+=1;
    }







    }




  }

 ?>
