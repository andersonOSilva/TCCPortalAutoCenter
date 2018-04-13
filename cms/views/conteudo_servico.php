<div class="listaServicos">
  <div class="titulo_tbl_servico">
    <div class="conteudo_tbl_servico">
      <p>Imagem</p>
    </div>
    <div class="conteudo_tbl_servico">
      <p>Serviço</p>
    </div>

    <div class="conteudo_tbl_servico">
      <p>Modo</p>
    </div>
  </div>

  <?php
    //Inclui as classes
    require_once 'controllers/servico_controller.php';
    require_once 'models/servicos_class.php';

    $controller_servico = new controllerServico;

    $list=$controller_servico::Listar();
    $cont = 0;

    while ($cont <count($list)) {

      if ($cont%2==0) {
         $cor='cor1';
       }else {
         $cor='cor2';
       }

   ?>

  <div class="conteudo_tblServico <?php echo $cor ?>">
      <div class="item_tblServico">
        <div class="imgServico">
          <img src="<?php echo $list[$cont]->imagem; ?>" alt="">
        </div>
      </div>

      <div class="item_tblServico">
        <p><?php echo $list[$cont]->nome; ?></p>
      </div>

      <div class="item_tblServico">
        <div class="segura_modo">
          <div class="modo">
              <!-- <a href="router.php?controller=servicos&modo=buscar&id=<?php echo $list[$cont]->idServico ?>&pag=servicos"> -->
           <a href="#" class="editar_servico" onclick="Editar(<?php echo $list[$cont]->idServico?>)" >

               <img src="imagens/edit.png" alt="edit">
            </a>
          </div>

          <div class="modo">
            <!-- <a href="router.php?controller=servicos&modo=excluir&id=<?php echo $list[$cont]->idServico ?>" onclick="return confirm('deseja realmente excluir');"> -->
            <a href="#" class="excluir_servico" onclick="Excluir(<?php echo $list[$cont]->idServico?>)">
               <img src="imagens/delet.png" alt="edit">
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
