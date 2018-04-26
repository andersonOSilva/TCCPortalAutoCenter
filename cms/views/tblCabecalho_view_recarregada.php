<?php

require_once("controllers/forum_controller.php");
require_once("models/cabecalhoForum_class.php");
$controller_forum= new controllerForum();
$List_returnForum=$controller_forum::ListarCabecalho();

$cont=0;
while ($cont < count($List_returnForum)) {

?>

<div class="dados_cabecalho">
  <div class="titulo_cabecalho_forum">
    <?php echo($List_returnForum[$cont]->titulo1) ?>
    <?php echo($List_returnForum[$cont]->titulo2) ?>
  </div>
</div>



<?php
$cont+=1;
}
 ?>
