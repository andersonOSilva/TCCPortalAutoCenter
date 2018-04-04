<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portal Auto Center - CMS</title>
    <link rel="stylesheet" href="css/styleGeral.css">
    <link rel="stylesheet" href="css/style_prestadora.css">

    <!-- Import das bibliotecas JQuery -->
    <script src="js/jquery7.min.js"></script>
    <script  src="js/jcarousellite.js"></script>
    <script  src="js/carrossel.js"></script>


  </head>
  <body>
    <header id="cabecalho_principal">
        <div class="cabecalho">
            <div class="logo">
                <img src="../imagens/possivellogo2.png" alt="">
            </div>

            <div class="titulo">
                <h1>Portal Auto Center</h1>
            </div>

            <div class="logout">
                <div class="img_user">
                  <img src="../imagens/blue.jpg" alt="">
                </div>

                <div class="sair_btn">
                  <a href="index.php?out=1">Sair</a>
                </div>
            </div>
        </div>
    </header>
      <div class="principal">
          <div class="conteudo_principal">
            <nav>
                <ul>
                  <li><a href="?pag=home">Home</a></li>
                  <li><a href="?pag=fale">Fale conosco</a></li>
                  <li><a href="?pag=servicos">Servicos</a></li>
                  <li><a href="?pag=plano">Plano</a></li>
                  <li><a href="?pag=prestadora">Prestadora</a></li>
                  <li><a href="?pag=home">Menu</a></li>
                  <li><a href="?pag=home">Menu</a></li>
                  <li><a href="?pag=home">Menu</a></li>
                </ul>
            </nav>
            <?php
              switch ($_GET['pag']) {
                case 'home':
                  require_once 'views/home.php';
                  break;

                case 'fale':
                  require_once 'views/faleconosco_view.php';
                  break;

                case 'servicos':
                  require_once 'views/servicos_view.php';
                  break;

                case 'plano':
                  require_once 'views/planos_view.php';
                  break;

                case 'prestadora':
                  require_once 'views/prestadoras_view.php';
                  break;
              }
             ?>
          </div>
      </div>
  </body>
</html>
