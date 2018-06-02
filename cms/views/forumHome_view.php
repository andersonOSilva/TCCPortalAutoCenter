<!--
Autor: Luana Fernandes
Descrição: tela de cadastro do forum localizado na home
Data:09/05/2018
-->


<div class="conteudo_padrao">
  <div class="cabecalho_forumHome">
    <h1>Fórum</h1>
  </div>
    <div class="cadastro_forumHome">

        <form action="router.php?controller=forumHome&modo=novo" method="post" id="formBody" enctype="multipart/form-data" >
          <div class="suporte_video">
           <div class="filePost">
            <input  id="upload" type="file" name="flImagenForumHome" >

          </div>

              <div class="segura_preview">
                <div class="preview_img">
                  <img id="img" src="<?php echo $foto?>" alt="">
                </div>
              </div>

          </div>

        <div class="control_small">
              <textarea name="txtdescricao" id="DescricaoCarbook" maxlength="50" rows="8" cols="70" placeholder="Descricao do Fórum" required></textarea>

        </div>

        <div class="buttom_enviar">
          <input id="btnEnviar" type="submit" name="btnEnvia0" value="Salvar">
        </div>

      </form>
    </div>


    <!--listas de ativos -->
    <div class="cadastro_forumHome">
        <div class="listarCadastrosForum">
          <div class="titulo_forumHome">
            <div class="conteudo_tbl_forumHome">
              <p>Imagem</p>
            </div>
            <div class="conteudo_tbl_forumHome">
              <p>Descrição</p>
            </div>

            <div class="conteudo_tbl_forumHome">
              <p>Modo</p>
            </div>
          </div>
          <?php
              require_once 'controllers/forumHome_controller.php';
              require_once 'models/forumHome_class.php';

              $controller_forumHome = new controllerForumHome();

              $listaForumHome=$controller_forumHome::Listar();
              $cont = 0;

              while ($cont < count($listaForumHome)) {

           ?>
          <div class="conteudoForumHome">
              <div class="item_carbook">
                <div class="imgForumHome">
                  <img src="<?php echo $listaForumHome[$cont]->foto; ?>" alt="">
                </div>
              </div>

              <div class="item_carbook">
                <div class="descForumHome">
                    <?php echo $listaForumHome[$cont]->descricao; ?>
                </div>
              </div>

              <div class="item_carbook">
                  <div class="segura_modo">
                    <div class="modo">
                      <?php
                        $status=$listaForumHome[$cont]->status;

                        // echo $status;
                        ?>
                      <a href="#">
                      <?php if ($status==0){ ?>
                        <img src="imagens/off.png" alt="" onclick="AtivarEdesativar(<?php echo ($listaForumHome[$cont]->idForum)?>,'forumHome','ativo','deseja ativar?');">
                      <?php }else { ?>
                        <img src="imagens/on.png" alt="" onclick="AtivarEdesativar(<?php echo ($listaForumHome[$cont]->idForum)?>,'forumHome','desativo','deseja desativar?');">
                    <?php  } ?>
                        </a>
                    </div>
                  </div>
              </div>
          </div>
          <?php
             $cont+=1;
           }
          ?>
        </div>
    </div>

</div>
