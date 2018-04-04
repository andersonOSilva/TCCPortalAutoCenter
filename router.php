<?php

    $controller=$_GET['controller'];
    $modo=$_GET['modo'];

    switch ($controller) {
      case 'FaleConosco':
        require_once("cms/controllers/controller_faleConosco.php");
        require_once("cms/models/mensagem_class.php");

        switch ($modo) {
          case 'novo':
              $controller_mensagen= new controllerMensagen();
              $controller_mensagen::Novo();
              echo "string";
            break;


        }


    }
 ?>
