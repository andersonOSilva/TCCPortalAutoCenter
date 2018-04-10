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
               <!-- <a href="router.php?controller=servicos&modo=buscar&id=<?php echo $list[$count]->idServico ?>&pag=servicos"> -->
            <a href="#" class="editar_servico" onclick="Editar(<?php echo $list[$count]->idServico?>)" >

                <img src="imagens/edit.png" alt="edit">
             </a>
           </div>

           <div class="modo">
             <!-- <a href="router.php?controller=servicos&modo=excluir&id=<?php echo $list[$count]->idServico ?>" onclick="return confirm('deseja realmente excluir');"> -->
             <a href="#" class="excluir_servico" onclick="Excluir(<?php echo $list[$count]->idServico?>)">
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
