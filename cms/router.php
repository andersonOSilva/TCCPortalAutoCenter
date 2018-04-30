<?php
    switch ($_GET["controller"]) {
      case 'login':
        require_once('controllers/funcionario_controller.php');
        require_once('models/funcionario_class.php');

        //Chama a controller para poder fazer o login
        $controller_funcionario = new controllerFuncionario();
        $controller_funcionario::Login();
        break;

        // USER

      case 'user':

      require_once("controllers/controller_cadUser.php");
      require_once("models/cadUser_class.php");


      switch ($_GET['modo']) {

        case 'ativar':
              $controller_cadUser= new controllerCadUser();
              $controller_cadUser::Ativar();
              // echo "string";
            break;

            case 'Desativar':
                $controller_cadUser= new controllerCadUser();
                $controller_cadUser::Desativar();
                // echo "string";
              break;

      }


      break;

        // PLANOS

    case 'planos':
    // include dos arquivos
      require_once('controllers/controller_planos.php');
      require_once('models/plano_class.php');

      // Verificando o modo
      switch ($_GET['modo']) {
        case 'novo':
            $controller_plano = new controllerPlano();
            $controller_plano::Novo();
          break;


        // case 'buscarId':
        //     $controller_plano = new controllerPlano();
        //     $controller_plano :: Buscar();
        //   break;

        case 'editar':
          $controller_plano = new controllerPlano();
          $controller_plano :: Editar();
          break;

        case 'excluir':
            $controller_plano = new controllerPlano();
            $controller_plano::Excluir();
            break;


      }
      break;

      /*Serviços*/
    case 'servicos':
      require_once('controllers/servico_controller.php');
      require_once('models/servicos_class.php');

      switch ($_GET['modo']) {
        case 'novo':
            $controller_servico = new controllerServico();
            $controller_servico::Novo();
          break;


        case 'editar':
          $controller_servico = new controllerServico();
          $controller_servico::Editar();
          break;

        case 'excluir':
          $controller_servico = new controllerServico();
          $controller_servico::Excluir();
          break;
      }

      break;

      //Carbook
      case 'carbook':
        require_once('controllers/carbook_controller.php');
        require_once('models/carbook_class.php');

        switch ($_GET['modo']) {
          case 'novo':
            $controller_carbook = new controllerCarbook();
            $controller_carbook::Novo();
            break;


        }

        break;

        //Menus
       case 'menus':
         require_once('models/menus_class.php');
         require_once('controllers/menus_controller.php');

         switch ($_GET['modo']) {
           case 'novo':
             $controller_menu = new controllerMenus();
             $controller_menu::Novo();
             break;

             case 'editar':
             $controller_menu = new controllerMenus();
             $controller_menu::Editar();
            break;

         }

         break;

         //Forum
        case 'forum':
          require_once("controllers/forum_controller.php");
          require_once('models/cabecalhoForum_class.php');

          switch ($_GET['modo']) {
            case 'novo':
              $controller_forum = new controllerForum();
              $controller_forum::NovoCabecalho();
              break;

            case 'excluir':
              $controller_forum = new controllerForum();
              $controller_forum::Excluir();
              break;

            case 'editar':
              $controller_forum = new controllerForum();
              $controller_forum::EditarCabecalho();
              break;

          case 'ativar':
            $controller_forum = new controllerForum();
            $controller_forum::ativarCabecalho();
            break;


          case 'desativar':
            $controller_forum = new controllerForum();
            $controller_forum::DesativarCabecalho();
            break;

          }

          break;



        //Fale Conosco
      case 'faleconosco':

        // include dos arquivos
          require_once('controllers/controller_faleConosco.php');
          require_once('models/mensagem_class.php');

          switch ($_GET['modo']) {
            case 'excluir':
              $controller_mensagen = new controllerMensagen();
              $controller_mensagen::Excluir();
              break;
          }

        break;

        //Prestadora
        case 'prestadora':
          require_once("controllers/prestadora_controller.php");
          require_once("models/cadprestadora_class.php");

          switch ($_GET['modo']) {
            case 'listar':
                $controller_Prestadora= new controllerPrestadora();
                $controller_Prestadora::Listar();
                // echo "string";
              break;

            // DESATIVAR

        // desativar os servicos
        case 'desativarBeneficilServico':
          $controller_Prestadora = new controllerPrestadora();
          $controller_Prestadora::desativarBeneficilServico();
          break;

        case 'desativarBeneficilProduto':
          $controller_Prestadora = new controllerPrestadora();
          $controller_Prestadora::desativarBeneficilProduto();
          break;

        case 'desativarBeneficilHome':
          $controller_Prestadora = new controllerPrestadora();
          $controller_Prestadora::desativarBeneficilHome();
          break;

        case 'desativarBeneficilPagServico':
          $controller_Prestadora = new controllerPrestadora();
          $controller_Prestadora::desativarBeneficilPagServico();
          break;

        case 'desativarBeneficilPagProdutos':
          $controller_Prestadora = new controllerPrestadora();
          $controller_Prestadora::desativarBeneficilPagProdutos();
          break;


          //ATIVAÇÂO

      // desativar os servicos
      case 'ativarBeneficilServico':
        $controller_Prestadora = new controllerPrestadora();
        $controller_Prestadora::ativarBeneficilServico();
        break;

      case 'ativarBeneficilProduto':
        $controller_Prestadora = new controllerPrestadora();
        $controller_Prestadora::ativarBeneficilProduto();
        break;

      case 'ativarBeneficilHome':
        $controller_Prestadora = new controllerPrestadora();
        $controller_Prestadora::ativarBeneficilHome();
        break;

      case 'ativarBeneficilPagServico':
        $controller_Prestadora = new controllerPrestadora();
        $controller_Prestadora::ativarBeneficilPagServico();
        break;

      case 'ativarBeneficilPagProdutos':
        $controller_Prestadora = new controllerPrestadora();
        $controller_Prestadora::ativarBeneficilPagProdutos();
        break;

          }
            break;


            //Palavra Proibida
            case 'palavrao':
              require_once('controllers/forum_controller.php');
              require_once('models/palavraForum_class.php');

              switch ($_GET['modo']){
                case 'novo':
                  $controller_palavrao= new controllerForum();
                  $controller_palavrao::NovoPalavrao();
                  break;

              }
              break;

              // excluir palavra proibida
              case 'excluir':
              require_once('controllers/forum_controller.php');
              require_once('models/palavraForum_class.php');
              switch ($_GET['modo']) {
                case 'delete':
                $controller_palavrao= new controllerForum();
                $controller_palavrao::ExcluirPalavra();
                  break;
              }
                break;

                case 'editar':
                require_once('controllers/forum_controller.php');
                require_once('models/palavraForum_class.php');
                switch ($_GET['modo']) {
                  case 'edita':
                  $controller_palavrao= new controllerForum();
                  $controller_palavrao::EditarPalavra();
                    break;
                }
                  break;

              // // ativar palavra proibida
              // case 'desativar':
              // require_once('controllers/forum_controller.php');
              // require_once('models/palavraForum_class.php');
              // switch ($_GET['modo']) {
              //   case 'desativa':
              //   $controller_palavrao= new controllerForum();
              //   $controller_palavrao::DesativarP();
              //     break;
              // }
              //   break;
              //
              // case 'ativar':
              // require_once('controllers/forum_controller.php');
              // require_once('models/palavraForum_class.php');
              // switch ($_GET['modo']) {
              //   case 'ativa':
              //   $controller_palavrao= new controllerForum();
              //   $controller_palavrao::AtivarP();
              //     break;
              // }
              //   break;

//            case 'sobre':
//                require_once ('controllers/sobre_controller.php');
//                require_once ('models/sobre_class.php');
//
//              switch ($_GET['modo']){
//                case 'novo':
//                $controller_sobre= new sobre_controller();
//                $controller_sobre::inserir();
//                break;
//                }
//
//
//            break;

      // case 'usuario':
      //         $test=$_GET['id'];
      //         echo $test;
      //         require_once('viewModel/view_carroeUsuario.php');
      //         $carro = new carroeUsuario();
      //         $carro :: Selecionarporid();
      //         break;
    }
 ?>
