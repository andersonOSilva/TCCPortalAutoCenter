<!DOCTYPE html>
<!-- nome do autor:Camils Cruz
		ultima data de edicao:09/05/2018 -->
  <?php
    session_start();
        if (isset($_SESSION['idUsuario'])) {
          $idUsuario=$_SESSION['idUsuario'];

          // echo $idUsuario;
        }

        require_once("cms/controllers/controller_cadUser.php");
        require_once("cms/models/cadUser_class.php");

        $contrller_perfil = new controllerCadUser();
        $returnPerfil=$contrller_perfil::Buscar($_SESSION['idUsuario']);

        //var_dump($returnPerfil);

        $idUsuario=$returnPerfil->idUsuario;
        $nome=$returnPerfil->nomeCompleto;
        $usuario=$returnPerfil->nomeUser;

        $email=$returnPerfil->email;
        $dtNasc=$returnPerfil->dtNasc;
        $cpf=$returnPerfil->cpf;
        $foto=$returnPerfil->foto;
      //  $usuario=$returnPerfil->nomeUser;


   ?>
  <html lang="pt">
    <head>
      <meta charset="utf-8">
      <title>Perfil Usuário</title>
        <link rel="stylesheet" type="text/css" href="css/styleHome.css">
        <link rel="stylesheet" type="text/css" href="css/stylePerfilUsuario.css">
        <link rel="stylesheet" type="text/css" href="css/styleMenus.css">

        <style >
          #suporte_primaria{
            background-image: url("imagemVeiculo/mustang.jpg");
            background-repeat: no-repeat;
            background-size:100%;

          }
        </style>

    </head>
    <body>
      <div class="principal">
        <?php
            require_once 'menu.php';
         ?>

        <div class="container_principal">
          <!-- div que vai segurar tudo que tiver na página  -->

          <div id="container_conteudo">
            <div id="suporte_primaria">


              <div id="area_imagem">
                <div id="img_perfil">
                  <img src="<?php echo(utf8_decode($foto)) ?>" alt="imagen Usuario">

                </div>
              </div>

              <div class="nome">
                <?php echo(utf8_decode($nome))?>
              </div>

              <div class="editarFoto">

              </div>
            </div>




          </div>


        </div>

        <div class="conteudo_principal_perfil">
          <div class="meusCarros">
              <div class="tituloMeusCarros">
                <h1>Meus Veiculos</h1>
              </div>
              <div class="listaCarro">
                  <p>MEC-4518</p>
              </div>

              <div class="listaCarro">
                  <p>MEC-4518</p>
              </div>

              <div class="listaCarro">
                  <p>MEC-4518</p>
              </div>

              <div class="listaCarro">
                  <p>MEC-4518</p>
              </div>
          </div>

          <div class="menuDePerfil">
              <div class="itemMenu">
                <img src="imagens/sports-car.png" alt="novo carro" title="Adicionar Novo carro">
              </div>

              <div class="itemMenu">
                <img src="imagens/Ediatruser.png" alt="Editar Perfil" title="Editar Perfil">
              </div>

              <div class="itemMenu">
                <img src="imagens/notebook.png" alt="Agenda" title="Acessar Agenda">
              </div>

              <div class="itemMenu">
                <img src="imagens/track.png" alt="Meus Pedidos" title="Meus Pedidos">
              </div>


          </div>
        </div>


        <?php
            require_once 'rodape.php';
         ?>
      </div>
    </body>
  </html>
