
    <!-- <div class="modalContainer_servico">
      <div class="modal_servico">

      </div>
    </div> -->

    <div class="conteudo_padrao">
      <div class="cabecalho_carbook">
        <h1>Carbook</h1>
      </div>

        <!--listas de ativos -->
        <!-- <div class="cadastro_carbook">
          <?php

          // require_once('conteudo_servico.php');

           ?>
        </div> -->
        <div class="cadastro_carbook">


            <!-- <div id="btn_editar">
              <img src="Imagens/pencil.png" alt="editar">
            </div> -->
            <form action="router.php?controller=carbook&modo=novo" method="post" id="formBody">
              <!-- <div class="suporte_video"> -->
                  <div class="filePost">
                    <input  id="upload" type="file" name="fle_imagemCarbook" >
                  </div>

                  <div class="segura_preview">
                    <div class="preview_img">
                      <img id="img" src="<?php echo $imagem?>" alt="">
                    </div>
                  </div>

              <!-- </div> -->

            <div class="control_small">
                  <textarea name="txtdescricao" id="DescricaoCarbook" placeholder="Descricao do Carbook" required></textarea>
                  <label for="description">Descricao do Carbook </label>
            </div>

            <div class="buttom_enviar">
              <input id="btnEnviar" type="submit" name="btnEnvia0" value="Salvar">
            </div>

          </form>
        </div>


    </div>
