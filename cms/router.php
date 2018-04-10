<?php
    switch ($_GET["controller"]) {
      case 'login':
        require_once('controllers/funcionario_controller.php');
        require_once('models/funcionario_class.php');

        //Chama a controller para poder fazer o login
        $controller_funcionario = new controllerFuncionario();
        $controller_funcionario::Login();
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
    case 'servicos':
      require_once('controllers/servico_controller.php');
      require_once('models/servicos_class.php');

      switch ($_GET['modo']) {
        case 'novo':
            $controller_servico = new controllerServico();
            $controller_servico::Inserir();
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

        case 'prestadora':
          require_once("controllers/prestadora_controller.php");
          require_once("models/cadprestadora_class.php");

          switch ($_GET['modo']) {
            case 'listar':
                $controller_Prestadora= new controllerPrestadora();
                $controller_Prestadora::Listar();
                // echo "string";
              break;


          }

            break;
          

    }
 ?>
