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
        <?php
        require_once("cms/controllers/controller_perfilUsuario.php");
        require_once("cms/models/perfilUser_class.php");
        $controller_perfil= new controllerPerfilUser();
        $List_returnPerfil=$controller_perfil::ListarperfilUsuario($idUsuario);
        $cont = 0;
        $nome=$List_returnPerfil->nome;
        $usuario=  $List_returnPerfil->usuario;
        $fotoUser =   $List_returnPerfil->fotoUser;
        $fotoCar1 =$List_returnPerfil->fotoCar1;
        $fotoCar2 =$List_returnPerfil->fotoCar2;
        $fotoCar3 =$List_returnPerfil->fotoCar3;
        $fotoCar4 =$List_returnPerfil->fotoCar4;
        $fotoCar5 =$List_returnPerfil->fotoCar5;
        $fotoCar6 =$List_returnPerfil->fotoCar6;
        $descricao =$List_returnPerfil->descricao;

        while ($cont < count($List_returnPerfil)) {
         ?>


        <div class="container_principal">
          <!-- div que vai segurar tudo que tiver na página  -->
          <div id="container_conteudo">
            <div id="suporte_primaria">
              <div id="area_imagem">
                <div id="img_perfil"><?php echo ($List_returnPerfil[$cont]->fotoUser)?>
                </div>
              </div>
            </div>
            <div id="areaInformacao">
            </div>
            <div id="suporte_secundaria">
            </div>
            <div id="suporte_terciario">
              <div id="areaProprietario">
                <div class="nome"><?php echo ($List_returnPerfil[$cont]->nome)?>
                </div>
                <div class="nome"><?php echo ($List_returnPerfil[$cont]->usuario)?>
                </div>
              </div>
            </div>
            <!-- area que vai suporta as imagens  -->
            <div id="areaImagem">
              <!-- area das duas imagens maiores -->
              <div id="imagensMaiores">
                <!-- divisão entre as imagens -->
                <div id="divisao_imagens">
                   <!-- <?php
                  if ($foto == 0){
                    "Não possui imagens"
                  }else {
                    $foto == 1;
                  }

                    ?> -->

                  <!-- area que vai segurar as imagens  -->
                  <div class="two_imagens"><?php echo ($List_returnPerfil[$cont]->fotoCar1)?>

                  </div>
                  <div class="two_imagens"><?php echo ($List_returnPerfil[$cont]->fotoCar2)?>

                  </div>
                </div>
              <div id="divisao_imagens2">
                <div class="imagens_menores"><?php echo ($List_returnPerfil[$cont]->fotoCar3)?>

                </div>
                <div class="imagens_menores"><?php echo ($List_returnPerfil[$cont]->fotoCar4)?>

                </div>
                <div class="imagens_menores"><?php echo ($List_returnPerfil[$cont]->fotoCar5)?>

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
                <div id="imagem"><?php echo ($List_returnPerfil[$cont]->fotoCar6)?>

                </div>
                <div id="descricaoImg"><?php echo ($List_returnPerfil[$cont]->descricao)?>

                </div>
              </div>
            </div>
            <?php
              $cont +=1;
              }
             ?>
          </div>
        </div>
        <?php
            require_once 'rodape.php';
         ?>
      </div>
    </body>
  </html>
