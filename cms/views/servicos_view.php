<?php
  $idServico = null;
  $nome = null;
  $descricao = null;
  $imagem = null;

  $action='modo=novo';

  if (isset($servico)){
    $idServico=$servico->idServico;
    $nome=$servico->nome;
    $descricao=$servico->descricao;
    $imagem=$servico->imagem;
    $action = "modo=editar&id=$servico->idServico";
  }
 ?>
<div class="conteudo_padrao">
    <div class="cabecalho_servicos">
      <h1>Serviços</h1>
    </div>
    <div class="conteudos_servico">
      <!-- <div class="container_opc">
        <div>
          Adcionar
        </div>
      </div> -->
      <div class="listaServicos">
        <div class="titulo_tbl_servico">
          <ul>
            <li>Imagem</li>
            <li>Servico</li>
          </ul>
        </div>
        <?php
          //Inclui as classes
          require_once 'controllers/servico_controller.php';
          require_once 'models/servicos_class.php';

          $controller_servico = new controllerServico;

          $list=$controller_servico::Listar();
          $count = 0;
          while ($count<count($list)) {
         ?>

         <div class="titulo_tbl_servico_conteudo">
           <ul>
             <li class="img_servico"><img src="<?php echo $list[$count]->imagem; ?>" alt="Servico"></li>
             <li><?php echo $list[$count]->nome; ?></li>
             <li>
               <div class="segura_modo">
                 <div class="modo">
                     <a href="router.php?controller=servicos&modo=buscar&id=<?php echo $list[$count]->idServico ?>&pag=servicos">
                      <img src="imagens/edit.png" alt="edit">
                   </a>
                 </div>

                 <div class="modo">
                   <a href="router.php?controller=servicos&modo=excluir&id=<?php echo $list[$count]->idServico ?>" onclick="return confirm('deseja realmente excluir');">
                      <img src="imagens/delet.png" alt="edit">
                   </a>
                 </div>
               </div>
             </li>
           </ul>
         </div>

        <?php
          $count+=1;
          }
         ?>
      </div>
    </div>
    <img src="<?php echo $imagem ?>" alt="">
    <form action="router.php?controller=servicos&<?php echo $action ?>" method="post" enctype="multipart/form-data">
      <div class="entrada_dado">
        <input type="text" name="txt_nome" value="<?php echo $nome; ?>" placeholder="Nome" maxlength="100">
      </div>

      <div class="entrada_dado1">
        <textarea placeholder="Descricao do servico" name="txt_descricao" rows="8" cols="80"><?php echo $descricao; ?></textarea>
      </div>

      <div class="filePost">
        <input id="upload" type="file" name="fle_imagem" >
      </div>

      <div class="segura_preview">
        <div class="preview_img">
          <img id="img" src="<?php echo $imagem?>" alt="">
        </div>
      </div>


      <div class="buttom_enviar">
        <input id="btnEnviar" type="submit" name="btn_enviar" value="Enviar">
      </div>


    </form>
    <script  src="../js/preview.js"></script>
</div>
