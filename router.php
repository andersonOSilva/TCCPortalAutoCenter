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

          case 'validarUser':
              $controller_cadUser= new controllerCadUser();
              return $controller_cadUser::validarUser();
            break;


        case 'LoginUserAposCadastro':
            $controller_cadUser= new controllerCadUser();
             $controller_cadUser::LoginUserAposCadastro();
          break;

        case 'validarEmail':
            $controller_cadUser= new controllerCadUser();
            return $controller_cadUser::validarEmail();
          break;

      case 'validarCpf':
          $controller_cadUser= new controllerCadUser();
          return $controller_cadUser::validarCpf();
        break;




        }

        break;

        // login user

        case 'loginUser':
        require_once("cms/controllers/controller_cadUser.php");
        require_once("cms/models/cadUser_class.php");

        switch ($modo) {
          case 'loginUser':
            //Chama a controller para poder fazer o login
            $controller_cadUser= new controllerCadUser();
            $controller_cadUser::LoginUser();
            //echo('teste no router');
          break;

          case 'buscarId':
            $controller_cadUser= new controllerCadUser();
            $controller_cadUser::Buscar();
          break;

        }
        break;

        // forum

        case 'forum':


          require_once("cms/controllers/forum_controller.php");
          require_once("cms/models/forum_class.php");

          switch ($_GET['modo']) {
            case 'novaPergunta':
                $controller_Forum= new controllerForum();
                $controller_Forum::novaPergunta();

              break;
            case 'novaResposta':
                $controller_Forum= new controllerForum();
                $controller_Forum::novaResposta();

              break;

          }


          // forum pesquisa

          case 'Pesquisaforum':


            require_once("cms/controllers/forum_controller.php");
            require_once("cms/viewModel/view_forum.php");

            switch ($_GET['modo']) {
              case 'pesquisa':
                  $controller_Forum= new controllerForum();
                  $controller_Forum::pesquisa();

                break;

            }

          case 'Respostaforum':


            require_once("cms/controllers/RespostaForum_controller.php");
            require_once("cms/models/RespostaForum_class.php");

            switch ($_GET['modo']) {

              case 'novaResposta':
                  $controller_Forum= new RespostaForum();
                  $controller_Forum::novaResposta();

                break;




            }
         case 'Prestadoras':
         require_once('cms/controllers/prestadora_controller.php');
         require_once('cms/models/cadprestadora_class.php');


          switch ($modo) {
            case 'novo':
                //echo('dfgdfgdf');
                //header('location:../carbook.php');

                $controller_prestadora = new controllerPrestadora();
                $controller_prestadora::Inserir();

                break;


//            case 'buscar':
//                require_once('cms/controllers/controller_perfilPrestadora.php');
//                require_once('cms/viewModel/view_prestadoraPerfil.php');
//
//              $controller_prestadora = new controllerPerfilPrestadora();
//              $controller_prestadora::Buscar();
//              break;

            /*case 'editar':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Editar();
              break;

            case 'excluir':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Excluir();
              break;
              */
                  break;
          }
        case 'Prestadoraperfil':
         require_once('cms/controllers/controller_perfilPrestadora.php');
         require_once('cms/viewModel/view_prestadoraPerfil.php');


          switch ($modo) {

//            case 'novo':
//                //echo('dfgdfgdf');
//                //header('location:../carbook.php');
//
//                $controller_prestadora = new controllerPrestadora();
//                $controller_prestadora::Inserir();
//
//                break;


            case 'buscar':


              $controller_prestadora = new controllerPerfilPrestadora();
              $controller_prestadora::Buscar();
              break;

            /*case 'editar':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Editar();
              break;

            case 'excluir':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Excluir();
              break;
              */
          }

        break;

        case 'Endereco':
         require_once('cms/controllers/prestadora_controller_endereco.php');
         require_once('cms/models/cadprestadoraEndereco_class.php');


          switch ($modo) {
            case 'novo':
                   echo('aeeeeeew powha');
                //echo('dfgdfgdf');
                //header('location:../carbook.php');

                $controller_prestadora_endereco = new controllerPrestadoraEndereco();
                $controller_prestadora_endereco::Inserir();

                break;

          }
            break;

            // login user

            case 'LoginPrestadora':
            require_once('cms/controllers/prestadora_controller.php');
            require_once('cms/models/cadprestadora_class.php');

            switch ($modo) {
              case 'LoginPrestadora':
                //Chama a controller para poder fazer o login
                $controller_Prestadora= new controllerPrestadora();
                $controller_Prestadora::LoginPrestadora();
                //echo('teste no router');
              break;

              case 'buscarId':
                $controller_Prestadora= new controllerPrestadora();
                $controller_Prestadora::Buscar();
              break;

            }
            break;

            case 'servicoPrestadora':
            require_once('cms/controllers/prestadora_controller.php');
            //  require_once('cms/viewModel/view_Prestadora_Filial_Servico.php');


              switch ($modo) {
                case 'salvarAgenda':




                  $controller_prestadora = new controllerPrestadora();
                  $controller_prestadora::salvarServicoVisita();
                  break;

              }

            break;

            // Produtos

            case 'produtos':
            require_once ('cms/controllers/controller_carrinho.php');
            require_once ('cms/models/produto_class.php');

              switch ($modo) {
                case 'addCarrinho':
                      $controller_produto = new controllerCarrinho();
                      //$controller_produto::AddCarrinho();
                  break;

              }

            break;


                  /*

            case 'buscar':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Buscar();
              break;

            case 'editar':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Editar();
              break;

            case 'excluir':
              $controller_prestadora = new controllerprestadora();
              $controller_prestadora::Excluir();
              break;
              */
          }










 ?>
