<div class="conteudo_palavras">
  <div class="cadastar_nova_palavra">
  <form id="frmcadastroPalavra" class="frmcadastroPalavra" method="POST" action="">
    <input placeholder="Proibir Palavra" type="txt" name="palavraP" value="">
    <input type="submit" name="btnEnviar" value="Cadastrar">
  </form>

  <div id="segura">
    <div id="titulo_palavra_proibida">
      <h1>Palavras Proibidas</h1>
    </div>
    <div id="palavraCadastrada">
      <?php
        require_once("../controllers/forum_controller.php");
        require_once("../models/palavraForum_class.php");
        $controller_forum_palavra= new controllerForum();
        $List_returnForum=$controller_forum_palavra::ListarPalavra();
        $cont = 0;
          while ($cont < count($List_returnForum)) {
       ?>
       <div class="cadastradas">
         <div class="nome_palavra">
           <p><?php echo(  $List_returnForum[$cont]->palavra) ?></p>
         </div>
       </div>
       <?php
          $cont+=1;
           }
        ?>
    </div>
  </div>

  </div>
</div>
