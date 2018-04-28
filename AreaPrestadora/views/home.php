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
          <p>Cms</p>
      </div>
      <div class="item_menu">
        <p><a href="?pag=home">Home</a></p>
      </div>

      <div class="titulo_menu">
          <p>Marketing</p>
      </div>

      <div class="item_menu">
        <p> <a href="?pag=menus">Menus</a></p>
      </div>

      <div class="item_menu">
        <p> <a href="?pag=fale">Fale conosco</a></p>
      </div>

      <div class="item_menu">
        <p> <a href="?pag=servicos">Servicos</a></p>
      </div>

      <div class="item_menu">
        <p> <a href="?pag=carbook">CarBook</a></p>
      </div>

      <div class="titulo_menu">
          <p>Administrativo</p>
      </div>

      <div class="item_menu">
        <p> <a href="?pag=plano">Plano</a></p>
      </div>

      <div class="item_menu">
        <p><a href="?pag=prestadora">Prestadora</a></p>
      </div>

      <div class="item_menu">
        <p><a href="?pag=usuario">Usuário</a></p>
      </div>

      <div class="item_menu">
        <p><a href="?pag=forum">Forum</a></p>
      </div>
      <div class="item_menu">
        <p><a href="?pag=sobre">Sobre</a></p>
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

                case 'menus':
                  require_once 'views/menus_view.php';
                  break;

                case 'fale':
                  require_once 'views/faleconosco_view.php';
                  break;

                case 'servicos':
                  require_once 'views/servicos_view.php';
                  break;

                case 'carbook':
                  require_once 'views/carbook_view.php';
                  break;

                case 'plano':
                  require_once 'views/planos_view.php';
                  break;

                case 'prestadora':
                  require_once 'views/prestadoras_view.php';
                  break;

                  case 'usuario':
                    require_once 'views/usuario_view.php';
                    break;


                  case 'forum':
                    require_once 'views/forum_view.php';
                    break;

                  case 'sobre':
                    require_once 'views/sobre_view.php';
                    break;
              }


           ?>
        </div>
    </div>



  </body>
</html>
