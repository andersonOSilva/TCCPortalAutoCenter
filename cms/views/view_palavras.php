<div id="titulo_palavra_proibida">
  <h1>Palavras Proibidas</h1>
</div>
<div id="palavraCadastrada">
  <?php
    require_once("../controllers/forum_controller.php");
    require_once("../models/palavraForum_class.php");
    $controller_forum_palavra= new controllerForum();
    $List_returnForum=$controller_forum_palavra::ListarPalavrao();
    $cont = 0;
    //var_dump($List_returnForum);
      while ($cont < count($List_returnForum)) {
   ?>
    <div class="cadastradas">
     <div class="nome_palavra">
       <p><?php echo ($List_returnForum[$cont]->palavrao) ?></p>
      </div>
   </div>
  <div class="botao">
    <a href="#" onclick="Excluir( <?php echo $List_returnForum[$cont]->idPalavra ?>,'palavrao','delete','#segura','views/view_palavras.php',)">
        <img src="imagens/delet.png" alt="deletar">
    </a>
    <a href="#" onclick="Editar( <?php echo $List_returnForum[$cont]->idPalavra ?>,'views/formPalavra.php','.cadastar_nova_palavra',)">
          <img src="imagens/edit.png" alt="edit">
    </a>
  </div>
   <!-- <div class="status_palavra">
     <a href="#" onclick="DesativarAtivarP">
       <img src="imagens/off.png" alt="off"  title="desativar palavra">
     </a>
   </div>

   <div class="status_palavra">
     <a href="#" onclick="DesativarAtivarP">
        <img src="imagens/on.png" alt="on" title="ativar palavra"
     </a>
   </div> -->
   <?php
      $cont+=1;
       }
    ?>
</div>
