<?php
switch ($_GET["controller"]) {

///Produto
  case 'produto':
    require_once('controller/produto_controller.php');
    require_once('models/produto_class.php');

    switch ($_GET['modo']) {
      case 'novo':
        $controller_produto = new controllerProduto();
        $controller_produto::Novo();

        break;
    }
    break;

  //filiasi
  case 'filial':
    require_once('controller/filial_controller.php');
    require_once('models/filial_servico_class.php');

    switch ($_GET['modo']){
      case 'novo':
      echo "ta Aqui";
        $controller_servico= new controller_filial();
        $controller_servico::inserir();
        break;

    }
    break;

    case 'filialRegistro':
      require_once('controller/filial_controller.php');
      require_once('models/filial_class.php');
      switch ($_GET['modo']) {
        case 'novo':
        $controller_filial= new controller_filial();
        $controller_filial::Novo();
          break;
      }
      break;

}


 ?>
