<!DOCTYPE html>
<!-- nome do autor:Camils Cruz
		ultima data de edicao:20/03/2018 -->
  <html lang="pt">
    <head>
      <meta charset="utf-8">
      <title>Serviços</title>
        <link rel="stylesheet" type="text/css" href="css/styleHome.css">
        <link rel="stylesheet" type="text/css" href="css/styleServico.css">
        <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    </head>
    <body>
      <div class="principal">
        <div class="menu">
          <?php
              require_once 'menu.php';
           ?>
        </div>
        <div class="container_conteudo">
          <div id="suporte_servico">
            <div id="texto_servico">
              <h1>Serviços</h1>
            </div>
            <div id="barraPesquisa">
            </div>
          </div>
        </div>
          <div id="todosServicos">
        <div class="container_imagemDescricao">

          <div id="suporte_imagemDescricao">
            <div style="background-color:rgba(255,255,255,0.7);">
            <div class="area_imagem" >
              <img src="imagens/higienizacao.jpg" alt="gh" width="250px" height="200px" >
            </div>
            <div class="area_descricao" style="color:black" >
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin        pharetra nonummy pede. Mauris et orci.
                Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.

            </div>

            <div class="botao">
              <a href="#"> Ver Mais</a>
            </div>
            </div
            </div>
              <div style="background-color:rgba(0,0,0,0.5)">
                  <div class="area_imagem" >
                  <img src="imagens/higienizacao.jpg" alt="gh" width="250px" height="200px" >
                </div>
                <div class="area_descricao" >
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin        pharetra nonummy pede. Mauris et orci.
                    Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                    Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.

                </div>
                <div class="botao">
                  <a href="#"> Ver Mais</a>
                </div>
                  </div>

          </div>

         </div>

        </div>
      </div>
      <?php
          require_once 'rodape.php';
       ?>
    </body>
  </html>
