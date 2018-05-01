<?php
switch ($_GET["controller"]) {


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


}


 ?>
