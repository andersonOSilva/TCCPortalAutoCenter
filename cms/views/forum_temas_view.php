<div class="tbl_temas">
  <div class="cadastrar_novo_tema">
      <form class="" action="router.php?controller=forum&modo=novaCategoria" method="post">
        <input type="text" name="txt_descricao" value="" required placeholder="Nome do tema">
        <input type="submit" name="btnEnviar0" value="cadastrar">
      </form>

      <div class="titulo_temas_principal">
          <h1>Categorias</h1>
      </div>

      <div class="temas_cadastrados">


        <?php

        require_once("../controllers/forum_controller.php");
        require_once("../models/tema.php");
        $controller_forum= new controllerForum();
        $List_returnForum=$controller_forum::ListarCat();

        $cont=0;
        while ($cont < count($List_returnForum)) {

        ?>

        <div class="categoria_cadastrada">
          <div class="nome_cat">
            <p><?php echo($List_returnForum[$cont]->descricao) ?></p>
          </div>

          <div class="status_cat">

            <?php
                $status= $List_returnForum[$cont]->status;

                // echo $status;


                // quando o status for 1 ele desativa
                if ($status == 0) {

             ?>
              <div class="status_prest">
                  <img src="imagens/off.png" alt="off" title="Ativar user" onclick="Ativar(<?php echo ($List_returnForum[$cont]->idCategoriaForum) ?>);">
              </div>

              <?php
              // quando o status for 0 ele ativa
            }else {
               ?>

               <div class="status_prest">
                   <img src="imagens/on.png" alt="on" title="desativar user" onclick="Desativar(<?php echo ($List_returnForum[$cont]->idCategoriaForum) ?>);">
               </div>

               <?php
             }
                ?>

          </div>

        </div>

        <?php
        $cont+=1;
      }
         ?>

      </div>
  </div>
</div>
