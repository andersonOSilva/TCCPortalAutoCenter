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
    $cont = 0;

    while ($cont <count($list)) {

   ?>

   <div class="titulo_tbl_servico_conteudo">
     <ul>
       <li class="img_servico"><img src="<?php echo $list[$cont]->imagem; ?>" alt="Servico"></li>
       <li><?php echo $list[$cont]->nome; ?></li>
       <li>
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
       </li>
     </ul>
   </div>

  <?php
    $cont+=1;
    }
   ?>
</div>
