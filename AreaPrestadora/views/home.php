<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center - CMS</title>
    <link rel="stylesheet" href="css/stylegeralPrestadora.css">


  </head>
  <body>
    <div class="menu_cms">
      <div class="info_funcionario">
        <div class="dados_user_func">
          <div class="img_user">
            <img src="../imagens/blue.jpg" alt="">
          </div>

          <div class="nome_user_fuc">
            <p>Joaquin nunes</p>
          </div>
        </div>
      </div>

      <!-- Menu -->



      <div class="titulo_menu">
          <p>Perfil</p>
      </div>
      <div class="item_menu">
        <p><a href="?pag=home">editar Perfil</a></p>
      </div>

      <div class="titulo_menu">
          <p>Filiais</p>
      </div>

      <?php

      if (isset($_SESSION['idPrestadora'])){

        require_once("../cms/controllers/prestadora_controller.php");
        require_once("models/filial_class.php");
        $controller_cadUser= new controllerPrestadora();
        $return=$controller_cadUser::SelecionarFilialPorID($_SESSION['idPrestadora']);

        $cont=0;
        //var_dump ($return);

        while ($cont <count($return)) {

        ?>

      <div class="item_menu">
        <p> <a href="#"><?php echo ($return[$cont]->nomeFilial); ?></a></p>

        <?php

        $statusServico = $return[$cont]->statusServico;
        $statusProduto = $return[$cont]->statusProduto;

            if ($statusServico = '1') {

         ?>
         <div class="item_menu_filial">
           <p> <a href="?pag=servico&idFilial=<?php echo ($return[$cont]->idFilial); ?>">Controle de Servicos</a></p>
        </div>
         <?php
       }else if($statusProduto = '1'){


          ?>
          <div class="item_menu_filial">
            <p> <a href="?pag=menus">Controle de Produtos</a></p>
         </div>

          <?php
        }
           ?>
      </div>

      <?php
        $cont+=1;
      }
    }
       ?>

      <div class="titulo_menu">
          <p>Layout</p>
      </div>




    </div>
    <div class="Principal_cms">

        <div id="cabecalho_principal_cms">
          <div class="logo_cms">

          </div>

          <div class="logout">
            <div class="sair_btn">
              <a href="index.php?out=1">Sair</a>
            </div>


          </div>
        </div>

        <div class="conteudo_principal">
          <?php

            if (isset($_GET['pag'])) {
              $pag = $_GET['pag'];
            }else{
              $pag="home";
            }

              switch ($pag) {
                case 'home':
                  require_once 'views/conteudoHome.php';
                  break;

              case 'servico':
                require_once 'views/cadServico.php';
                break;


              }


           ?>
        </div>
    </div>



  </body>
</html>
