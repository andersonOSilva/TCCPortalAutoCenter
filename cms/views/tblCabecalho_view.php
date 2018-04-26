<?php

require_once("../controllers/forum_controller.php");
require_once("../models/cabecalhoForum_class.php");
$controller_forum= new controllerForum();
$List_returnForum=$controller_forum::ListarCabecalho();

$cont=0;
while ($cont < count($List_returnForum)) {

?>

<div class="dados_cabecalho">
  <div class="titulo_cabecalho_forum">
    <?php echo($List_returnForum[$cont]->titulo1.$List_returnForum[$cont]->titulo2) ?>

  </div>

    <a href="#" onclick="Excluir(<?php echo $List_returnForum[$cont]->idcabecalho ?>,'forum','.mostrar_dados','views/tblCabecalho_view.php')">
      <img src="imagens/delet.png" alt="edit">
    </a>

    <a href="#" class="editar_servico" onclick="Editar(<?php echo $List_returnForum[$cont]->idcabecalho ?>,'views/formCabecalho.php','#conteudo_geral');" >
        <img src="imagens/edit.png" alt="edit">
    </a>

</div>

    <div class="dados_prest_item_modo">

    <?php
      $status= $List_returnForum[$cont]->status;

    //  echo $status;


    // quando o status for 1 ele desativa
      if ($status == 0) {

    ?>
    <div class="status_prest">
        <img src="imagens/off.png" alt="off" title="Ativar user" onclick="AtivarEdesativar(<?php echo $List_returnForum[$cont]->idcabecalho ?>,'forum','ativar','.mostrar_dados','views/tblCabecalho_view.php','Ativar este Cabecalho?');">
    </div>

    <?php
    // quando o status for o ele atina
    }else {
     ?>

     <div class="status_prest">
         <img src="imagens/on.png" alt="on" title="desativar user" onclick="AtivarEdesativar(<?php echo $List_returnForum[$cont]->idcabecalho ?>,'forum','desativar','.mostrar_dados','views/tblCabecalho_view.php','Deseja desativar este cabeçalho? sera necessario ativar outro, caso contrario o furum fica sem cabecalho');">
     </div>

     <?php
    }
      ?>
    </div>



<?php
$cont+=1;
}
 ?>
