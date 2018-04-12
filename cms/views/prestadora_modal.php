<?php
  require_once('../controllers/prestadora_controller.php');
  require_once('../models/cadprestadora_class.php');

  $controller_Prestadora = new controllerPrestadora();
  $listPrestadora = $controller_Prestadora ::Listar();
  $cont=0;

  while($cont < count($listPrestadora)){

?>

  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->razaoSocial); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->descricao); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->telefone); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->cnpj); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->idEnderecoPrestadora); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->login); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->senha); ?></div>
  <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->status); ?></div>
  <img src="<?php echo ($listPrestadora[$cont]->fotoPrestadora); ?>" alt="">

<?php

    $cont+=1;
  }

  ?>
