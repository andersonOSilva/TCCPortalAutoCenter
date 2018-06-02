<?php

  class controllerProdutos{

    // buscar Produtos

    public function BuscarTodos(){
      $controller = new produtoClass;
      return $controller::ListarTodos();
    }


  }

 ?>
