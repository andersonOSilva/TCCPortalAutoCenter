
    <!-- <div class="modalContainer_servico">
      <div class="modal_servico">

      </div>
    </div> -->

    <div class="conteudo_padrao">
      <div class="cabecalho_carbook">
        <h1>Carbook</h1>
      </div>

        <!--listas de ativos -->
        <div class="cadastro_carbook">
          <?php

            require_once 'conteudo_carbook.php';

           ?>
        </div>
        <div class="cadastro_carbook">

            <form action="router.php?controller=carbook&modo=novo" method="post" enctype="multipart/form-data" id="formBody" >
              <div class="suporte_video">
               <div class="filePost">
                <input  id="upload" type="file" name="flImagenCarbook" >

              </div>

                  <div class="segura_preview">
                    <div class="preview_img">
                      <img id="img" src="<?php echo $video?>" alt="">
                    </div>
                  </div>

              </div>

            <div class="control_small">
                  <textarea name="txtdescricao" id="DescricaoCarbook" maxlength="50" rows="8" cols="70" placeholder="Descricao do Carbook" required></textarea>

            </div>

            <div class="buttom_enviar">
              <input id="btnEnviar" type="submit" name="btnEnvia0" value="Salvar">
            </div>

          </form>
        </div>


    </div>

    <script  src="../js/preview.js"></script>
