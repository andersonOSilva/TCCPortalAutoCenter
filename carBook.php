<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CarBook</title>
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    <link rel="stylesheet" type="text/css" href="css/styleCarBook.css">
    <script src="js/jquery-3.3.1.min.js"></script>

    <script  src="js/fixaMenu.js"></script>

  </head>
  <body>
    <div class="principal">

      <?php
          require_once 'menu.php';
       ?>



      <div class="container_conteudo_carBook">

            <!-- menu carBook -->


        <div class="menu_CarBook_principal ">
            <nav id="menu_carBook">
                <div class="logo_carBook">
                    <img src="imagens/carBook.png" alt="logo">
                </div>

                <div class="nomeLogo">
                    <img src="imagens/nome.png" alt="">
                </div>

                <div class="barra_buscar">
                    <form class="FrmBuscarUser" action="index.html" method="post">
                        <input class="BarraTXT" placeholder="Digitar nome do Usuario" type="text" name="txtBuscar" value="">
                        <div class="segura_botao">
                          <input class="btnBuscar" type="submit" name="btnBuscar" value="">
                        </div>
                    </form>
                </div>

                <div class="dados_user">
                    <img src="imagens/user.png" alt="">
                </div>
            </nav>
        </div>

        <!-- Nova Publicacao -->

        <div class="container_novo_post">
            <div class="post">

              <div class="segura_post">
                <form class="FrmPost" action="index.html" method="post">
                  <div class="escrita_post">
                      <div class="imagen_user_post">
                          <img src="imagens/Gatinho.jpg" alt="djfjff">
                      </div>

                      <div class="texto_post">
  												<textarea class="textPost" required placeholder="Que experiencia teve hoje com seu Carro?" name="txtPost" rows="5" cols="84"></textarea>
  										</div>
                  </div>
                  <div class="imagen_post">
                    <div class="filePost">
                      <input id="upload" type="file" name="flImagenPost" >
                    </div>

                    <div class="preview_img">
                        <img id="img" style= width="100" height="78">
                    </div>

                    <div class="buttom_enviar">
                        <input id="btnEnviar" type="submit" name="btnEnviar" value="Enviar">
                    </div>
                  </div>
                </form>
              </div>

            </div>
        </div>

        <div class="container_posts">
          <div class="user_posts">
              <div class="view_post" >
                  <div class="titulo_user">
                      <div class="imagen_user_titulo">
                          <img src="imagens/Gatinho.jpg" alt="djfjff">
                      </div>
                      <div class="nome_titulo_user">
                          <p>Gatinho gaga</p>
                      </div>
                  </div>

                  <div class="imagen_post_user">
                    <img src="imagens/CarCat.jpg" alt="esgesg">
                  </div>

                  <div class="total_curtidas">
                      <div class="img_like">
                        <img src="imagens/like.png" alt="like">
                      </div>
                      <div class="total_like">
                        <p>12</p>
                      </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Gatinho gaga</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Rolezinho de carro novo muito bom</p>
                    </div>
                  </div>

                    <div class="carregar_mais">
                        <a href="#">Carregar mais comentario ...</a>
                    </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>rosele</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Belo carro </p>
                    </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Ana Conda</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>AMEIIIII !!!!!! </p>
                    </div>
                  </div>

                  <div class="enviar_comentario">
                      <form class="FrmComentario" action="index.html" method="post">
                        <div class="texto_comentario">
                            <textarea class="textPost" required placeholder="Deixe seu comentario" name="txtPost" rows="5" cols="70"></textarea>
                        </div>

                        <div class="btnComentario">
                            <input id="btnEnviarComentario" type="submit" name="btnEnviarComentario" value="Enviar">
                        </div>
                      </form>
                  </div>
              </div>

              <!-- POST -->

              <div class="view_post">
                  <div class="titulo_user">
                      <div class="imagen_user_titulo">
                          <img src="imagens/Gatinho.jpg" alt="djfjff">
                      </div>
                      <div class="nome_titulo_user">
                          <p>Gatinho gaga</p>
                      </div>
                  </div>

                  <div class="imagen_post_user">
                    <img src="imagens/CarCat.jpg" alt="esgesg">
                  </div>

                  <div class="total_curtidas">
                      <div class="img_like">
                        <img src="imagens/like.png" alt="like">
                      </div>
                      <div class="total_like">
                        <p>12</p>
                      </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Gatinho gaga</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Rolezinho de carro novo muito bom</p>
                    </div>
                  </div>

                    <div class="carregar_mais">
                        <a href="#">Carregar mais comentario ...</a>
                    </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>rosele</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Belo carro </p>
                    </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Ana Conda</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>AMEIIIII !!!!!! </p>
                    </div>
                  </div>

                  <div class="enviar_comentario">
                      <form class="FrmComentario" action="index.html" method="post">
                        <div class="texto_comentario">
                            <textarea class="textPost" required placeholder="Deixe seu comentario" name="txtPost" rows="5" cols="70"></textarea>
                        </div>

                        <div class="btnComentario">
                            <input id="btnEnviarComentario" type="submit" name="btnEnviarComentario" value="Enviar">
                        </div>
                      </form>
                  </div>
              </div>

              <!-- POST -->

              <div class="view_post">
                  <div class="titulo_user">
                      <div class="imagen_user_titulo">
                          <img src="imagens/Gatinho.jpg" alt="djfjff">
                      </div>
                      <div class="nome_titulo_user">
                          <p>Gatinho gaga</p>
                      </div>
                  </div>

                  <div class="imagen_post_user">
                    <img src="imagens/CarCat.jpg" alt="esgesg">
                  </div>

                  <div class="total_curtidas">
                      <div class="img_like">
                        <img src="imagens/like.png" alt="like">
                      </div>
                      <div class="total_like">
                        <p>12</p>
                      </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Gatinho gaga</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Rolezinho de carro novo muito bom</p>
                    </div>
                  </div>

                    <div class="carregar_mais">
                        <a href="#">Carregar mais comentario ...</a>
                    </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>rosele</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>Belo carro </p>
                    </div>
                  </div>

                  <div class="descricao_post">
                    <div class="nome_descricao_poster">
                        <p>Ana Conda</p>
                    </div>

                    <div class="descricao_post_txt">
                        <p>AMEIIIII !!!!!! </p>
                    </div>
                  </div>

                  <div class="enviar_comentario">
                      <form class="FrmComentario" action="index.html" method="post">
                        <div class="texto_comentario">
                            <textarea class="textPost" required placeholder="Deixe seu comentario" name="txtPost" rows="5" cols="70"></textarea>
                        </div>

                        <div class="btnComentario">
                            <input id="btnEnviarComentario" type="submit" name="btnEnviarComentario" value="Enviar">
                        </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>


      <?php
          require_once 'rodape.php';
       ?>
       <script  src="js/preview.js"></script>



    </div>
  </body>
</html>
