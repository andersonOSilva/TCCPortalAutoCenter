<?php

$idFilial=$_GET['idFilial'];


require_once('controller/filial_controller.php');
require_once('models/filial_class.php');

$controller_filial= new controller_filial();
$listFilial = $controller_filial ::SelecionarFilialPorID($idFilial);


  if (isset($listFilial)) {
    var_dump($listFilial);
  }




 ?>


<div class="conteudo_padrao">
  <h1>Servicos ja cadastrados</h1>
  <?php
  // Servicos por filial

  require_once('models_views/servico_filial_class.php');


  $listServicoFilial = $controller_filial ::SelecionarServicosPorFilial($idFilial);
  $cont = 0;
  while ($cont > count($listServicoFilial)) {

   ?>
   <div class="servicos_prestadoe">
     <?php echo ($listServicoFilial[$cont]->nomeServico) ?>
   </div>
   <?php
    $cont+=1;
  }
    ?>

  <div class="serviços da prestadora">
    <form class="" action="router.php?controller=filial&modo=novo&id=<?php echo $idFilial?>" method="post">

      <?php
        //Inclui as classes
        require_once '../cms/controllers/servico_controller.php';
        require_once '../cms/models/servicos_class.php';

        $controller_servico = new controllerServico;

        $list=$controller_servico::ListarServicoFilial();
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
