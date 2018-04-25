<!DOCTYPE html>
<!-- nome do autor:Camils Cruz
		ultima data de edicao:02/04/2018 -->
  <html lang="pt">
    <head>
      <meta charset="utf-8">
      <title>Perfil Usuário</title>
        <link rel="stylesheet" type="text/css" href="css/styleHome.css">
        <link rel="stylesheet" type="text/css" href="css/stylePerfilUsuario.css">
        <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    </head>
    <body>
      <div class="principal">
        <?php
            require_once 'menu.php';
         ?>
        <div class="menu">
            <nav id="menu_navegacao">
              <div class="logo">
                <a class="scroll" href="#slide"><img src="imagens/logos/possivellogo2.png" alt="teste de logo" id="imgLogo"></a>
              </div>
            <!---menu de ancora ira direcinar o usuario para aquele determinado assunto dentro da home -->
              <div class="menu_ancora">
                  <div class="menu_ancora_itens">
                    <div class="menu_ancora_itens_principal">
                      <ul>
                        <li><a class="scroll" href="#Servicos">Serviços</a></li>
                        <li><a class="scroll" href="#Prestadoras">Prestadoras</a></li>
                        <li><a class="scroll" href="#Produtos">Produtos</a></li>
                        <li><a class="scroll" href="#CarBook">CarBook</a></li>
                        <li><a class="scroll" href="#FaleConosco">Fale Conosco</a></li>
                      </ul>
                    </div>

                      <div class="login">
                          <p><a><span id="entre">Entre</span> <span id="cadastro">ou cadastre-se</span></a></p>
                      </div>
                      <div class="mais">
                          <img src="imagens/menuIcon.png" alt="menu mais">
                      </div>
                  </div>

                  <div class="bordao">
                      <p>"Se você adora o seu carro, deixe que nós cuidamos de tudo para você"</p>
                  </div>
              </div>
            </nav>
        </div>
        <div class="container_principal">
          <!-- div que vai segurar tudo que tiver na página  -->
          <div id="container_conteudo">
            <div id="suporte_primaria">
              <div id="area_imagem">
                <div id="img_perfil">
                  <img src="imagens/mecanica.jpg" alt="perfil">
                </div>
              </div>
            </div>
            <div id="areaInformacao">
              <p>Camila</p>
            </div>
            <div id="suporte_secundaria">
            </div>
            <div id="suporte_terciario">
              <div id="areaProprietario">
                <div class="nome">
                  Camila Cruz
                </div>
                <div class="nome">
                  Milla
                </div>
              </div>
            </div>
            <!-- area que vai suporta as imagens  -->
            <div id="areaImagem">
              <!-- area das duas imagens maiores -->
              <div id="imagensMaiores">
                <!-- divisão entre as imagens -->
                <div id="divisao_imagens">
                  <!-- area que vai segurar as imagens  -->
                  <div class="two_imagens">
                    <img src="imagens/logo.png" alt="carro" width="250px;" height="200px;">
                  </div>
                  <div class="two_imagens">
                    <img src="imagens/logo.png" alt="carro" width="250px;" height="200px;">
                  </div>
                </div>
              <div id="divisao_imagens2">
                <div class="imagens_menores">
                  <img src="imagens/logo.png" alt="carro" width="200px;" height="200px;">
                </div>
                <div class="imagens_menores">
                  <img src="imagens/logo.png" alt="carro" width="200px;" height="200px;">
                </div>
                <div class="imagens_menores">
                  <img src="imagens/logo.png" alt="carro" width="200px;" height="200px;">
                </div>
              </div>
              <div id="unica">
                <div id="suporteVisualizar">
                  <p>Visualizar</p>
                </div>
              </div>
              </div>
            </div>
            <div style="height:900px;width:1200px;background-color:#DCDCDC;">
              <div id="menus">
                <div class="menus_lateral">
                </div>
                <div class="menus_lateral">
                </div>
                <div class="menus_lateral">
                </div>
                <div class="menus_lateral">
                </div>
                <div class="menus_lateral">
                </div>
                <div class="menus_lateral">
                </div>
              </div>
              <div id="suporteImg">
                <div id="imagem">
                  <img src="imagens/Celta-02-Portas.jpg" alt="celta" width="500px;" height="300px;">
                </div>
                <div id="descricaoImg">
                  Tudo sobre a CBO 519935 Lavador de veículos de acordo com a
                   tabela da Classificação Brasileira de Ocupações. ...
                    Descrição Sumária. Prestam serviços diversos a
                    empresas e pessoas. instalam painéis e cartazes,
                    limpam eguardam veículos;
                  lavam vidros e outros utensílios; combatem pragas.
                  fazem a leiturae ...
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            require_once 'rodape.php';
         ?>
      </div>
    </body>
  </html>
