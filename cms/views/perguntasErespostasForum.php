<div class="principal_perguntasRespostas">
  <div class="tbl_mostrar_perguntas">

    <?php

    require_once("../controllers/forum_controller.php");
    require_once("../models/forum_class.php");
    $controller_forum= new controllerForum();
    $List_returnForum=$controller_forum::ListartUserPerg();

    $cont=0;
    while ($cont < count($List_returnForum)) {

    ?>

    <a href="#" class="item_perguntas_a">
      <div class="item_perguntas">

          <p><?php echo ($List_returnForum[$cont]->pergunta) ?></p>
          <p>De:<?php echo ($List_returnForum[$cont]->nomeUser) ?></p>
      </div>

    </a>

    <?php

    $idPergunta=$List_returnForum[$cont]->idTopicoForum;

    echo $idPergunta;

    require_once("../controllers/RespostaForum_controller.php");
    require_once("../models/RespostaForum_class.php");

    $controller_forum= new controllerForum();
    $List_returnRespostas=$controller_forum::selectRespostasForum($idPergunta);

    $cont=0;
    while ($cont < count($List_returnRespostas)) {

     ?>
      <div class="div_perguntas displaynonePer">
        <a href="#" class="fechar">X</a>

      </div>

      <?php $cont+=1; }  $cont+=1; }?>
  </div>
</div>

<script src="js/aparecer.js"></script>
