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
              // echo "string";
            break;


        }

        // cadastro User
      case 'User':

        require_once("cms/controllers/controller_cadUser.php");
        require_once("cms/models/cadUser_class.php");

        switch ($modo) {
          case 'novo':
              $controller_cadUser= new controllerCadUser();
              $controller_cadUser::Novo();
            break;




        }

        // login user

        case 'loginUser':
        require_once("cms/controllers/controller_cadUser.php");
        require_once("cms/models/cadUser_class.php");

        switch ($modo) {
          case 'loginUser':
            //Chama a controller para poder fazer o login
            $controller_cadUser= new controllerCadUser();
            $controller_cadUser::LoginUser();
          break;

          case 'buscarId':
            $controller_cadUser= new controllerCadUser();
            $controller_cadUser::Buscar();
          break;

        }

        // forum

        case 'forum':


          require_once("cms/controllers/forum_controller.php");
          require_once("cms/models/forum_class.php");

          switch ($_GET['modo']) {
            case 'novaPergunta':
                $controller_Forum= new controllerForum();
                $controller_Forum::novaPergunta();

              break;




          }



    }
 ?>
