<?php

$idFilial=$_GET['idFilial'];

 ?>

<div class="conteudo_padrao">

  <div class="serviços da prestadora">
    <form class="" action="router.php?controller=filial&modo=novo&id=<?php echo $idFilial?>" method="post">

      <?php
        //Inclui as classes
        require_once '../cms/controllers/servico_controller.php';
        require_once '../cms/models/servicos_class.php';

        $controller_servico = new controllerServico;

        $list=$controller_servico::Listar();
        $cont = 0;
        while ($cont<count($list)) {
       ?>

      <input type='checkbox' name="ativo[]" value="<?php echo $list[$cont]->idServico; ?>" /><?php echo $list[$cont]->nome; ?>

      <?php
      $cont+=1;
    }
       ?>

      <input type="submit" name="btn" value="ENVIAR">
    </form>
  </div>


</div>
