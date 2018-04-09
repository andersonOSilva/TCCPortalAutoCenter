
<!-- Data ultima modificação: 05/04/2018
Nome do desenvolvidor: Camila Cruz
Tela: Controle de Usuario -->
<div class="conteudo_padrao">
  <!-- Segura o titulo da tela -->
  <div class="suporte_titulo">
    <!-- titulo da tela "Usuario" -->
        <div class="titulo_usuario">
          <h1>Usuario</h1>
        </div>
        <!-- Area que vai segurar todas as informações que serão apresentadas na tela -->
        <div id="conteudo_usuario">
          <!-- titulos das informações que serão apresentadas-->
              <div class="dados_user">Nome User</div>
              <div class="dados_user">Cpf</div>
              <div class="dados_user">Foto Usuario</div>
              <div class="email">Email</div>


        </div>


        <?php
          require_once('controllers/usuario_controller.php');
          require_once('models/usuario_class.php');


          $controller_usuario = new controllerUsuario();
          $list_usuario = $controller_usuario:: Visualizar();
          $cont = 0;

          while ($cont < count($list_usuario)) {


         ?>
<!-- Area que traz as informações do banco de dados -->
        <div class="conteudo_usuario_info">

          <div class="dados_user_view"><?php echo ($list_usuario[$cont]->nomeUser) ?></div>
          <div class="dados_user_view"><?php echo ($list_usuario[$cont]->cpf) ?></div>
          <div class="dados_user_view">
            <?php
              $foto = $list_usuario[$cont]->fotoUser;

            ?>
            <img src="<?php echo substr($foto,4);   ?> "  alt="foto usuario">
          </div>
          <div class="email_view"><?php echo ($list_usuario[$cont]->email) ?></div>
          <div class="dados_user_modo">
            <!-- Icones de visualizar, desativar e notifica -->
              <div class="modo_user">
                  <img src="imagens/off.png" alt="off" title="desativar user">
              </div>

              <div class="modo_user">
                <img src="imagens/view.png" alt="off" title="Visualizar user">
              </div>

              <div class="modo_user">
                <img src="imagens/notification.png" alt="off" title="Notificar user">
              </div>


          </div>

        </div>

        <?php
          $cont +=1;
          }
         ?>

    </div>
</div>
