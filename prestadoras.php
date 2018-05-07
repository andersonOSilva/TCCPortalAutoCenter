
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/produtos.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      <link rel="stylesheet" type="text/css" href="css/styleServico01.css">
  </head>
  <body>
    <div class="principal">

      <div class="menu" style="border-bottom:5px solid #eca023;">
    <nav id="menu_navegacao">
      <div class="logo">
        <!-- <div class="enfeite">
            <img src="imagens/natal.png" alt="">
        </div> -->
        <a href="#slide"><img src="imagens/logos/possivellogo2.png" alt="teste de logo" id="imgLogo"></a>
      </div>

      <div class="menu_ancora">
          <div class="menu_ancora_itens">
            <div class="menu_ancora_itens_principal">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a  href="sobre.php">Sobre</a></li>
                <li><a  href="#">Prestadoras</a></li>
                <li><a  href="carBook.php">CarBook</a></li>
                <li><a  href="#">Produtos</a></li>
                <li><a  href="homeForum.php">Forum</a></li>
              </ul>
            </div>

              <div class="login">
                  <p><a><span id="entre">Entre</span> <span id="cadastro">ou cadastre-se</span></a></p>
              </div>
              <!-- <div class="mais">
                  <img src="imagens/menuIcon.png" alt="menu mais">
              </div> -->
          </div>

          <div class="bordao">
              <p>"Se você adora o seu carro, deixe que nós cuidamos de tudo para você"</p>
          </div>
      </div>
    </nav>
</div>

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
     
        <div class="container_servico" style="margin-bottom:50px;">
        <!-- div que suporta imagem e descricao em destaque-->
        <div id="texto_servico">
              <h1>Prestadoras</h1>
            </div>
            <div id="barraPesquisa">
           <div id='posiciona'>
                <div class="hexagono">
                <div class="imagem1">
                            <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                        </div>
                    </div>
                   </div>
           </div>
        <!--suporta imagens e descricoes segundarias/ avaliacao e botao -->
        <div class="container_servico_suporte" style="max-width:1400px;margin-botoom:10px;">
          <!-- segura as imagens e area de descricao  PRESTADORA-->
          

     <?php 
           require_once('cms/controllers/prestadora_controller.php');
           require_once('cms/models/cadprestadora_class.php');

          $controller_Prestadora = new controllerPrestadora();
          $listPrestadora = $controller_Prestadora ::Listar();
          $cont=0;

          while($cont < count($listPrestadora)){?>

            <div class="suporteSecundaria">
<!--            <div style="background-color:rgba(0,0,0,0.1)">-->
            <div class="areaImagemSecundaria">
                <img src="imagens/pres.jpg" alt="servico" >
            </div>
            <div class="areaDescricaoSecundaria">
                <div class="titulo_Prestadora_servico">
                    <h2><?php echo ($listPrestadora[$cont]->nomeFantasia); ?></h2>
                </div>

                <div class="descricao_prestadora">
                    <p> <?php echo ($listPrestadora[$cont]->descricao);?>
                     </p>
                </div>
                <div class="classificacao">
                <ul>
                  <li class="color"></li>
                  <li class="color"></li>
                  <li class="color"></li>
                  <li class="colornot"></li>
                  <li class="colornot"></li>
                </ul>
            </div>

            </div>
            
            <div class="botao">
              <a href="produto.php">Ver mais</a>
            </div>
            
          </div>
            <?php $cont+=1;}?>

         

        </div>
      </div>
      <div class="rodape">
  <footer>
      <div class="detalhes_rodape">
            <ul>
              <h2>Sobre</h2>
              <li><a href="#">Sobre</a></li>
            </ul>

            <ul>
              <h2>Sobre</h2>
              <li><a href="#">Sobre</a></li>
            </ul>

            <ul>
              <h2>Sobre</h2>
              <li><a href="#">Sobre</a></li>
            </ul>

            <div class="outros">
                <div class="redes">
                  <img src="imagens/facebook.png" alt="facebook">
                </div>

                <div class="redes">
                    <img src="imagens/instagram-logo.png" alt="instagram">
                </div>

                <div class="redes">
                    <img src="imagens/snapchat.png" alt="snapchat">
                </div>

                <div class="redes">
                    <img src="imagens/twitter.png" alt="twitter">
                </div>

                <div class="aplicativo">
                  <img src="imagens/android.png" alt="aplicativo">
                </div>
            </div>
      </div>



      <div class="onde_estamos">
          <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4349.0989212240665!2d-46.65647058835571!3d-23.563354048678573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1521917651758" ></iframe>
      </div>
  </footer>
</div>
  </div>
</body>
</html>
