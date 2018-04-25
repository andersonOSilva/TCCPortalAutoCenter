<?php
session_start();
if (isset($_SESSION['idUsuario'])) {
  $idUsuario=$_SESSION['idUsuario'];
  echo $idUsuario;
}

 ?>



<div class="segura_perguntas">
    <div class="nova_pergunta">
      <form id='formBody11'  method="post" action="router.php?controller=forum&modo=novaPergunta&idUsuario= <?php echo $idUsuario?>"  class="FrmPergunta" >

          <select id="temas" class="dados_combo" name="slccategoria" onchange="optionCheck()">

            <option value='outro'>Outro</option>

            <?php
            require_once("cms/controllers/forum_controller.php");
            require_once("cms/models/forum_class.php");
            $controller_cadUser= new controllerForum();
            $listreturn=$controller_cadUser::Categorias();

            $cont=0;
            while ($cont < count($listreturn)) {
              ?>
            <option value='<?php echo ($listreturn[$cont]->idCategoriaForum) ?>'> <?php echo ($listreturn[$cont]->descricao) ?></option>

            <?php
              $cont+=1;
            }
             ?>
          </select>

          <input id="novoTema" type="text" name="tntNovoTema" placeholder="Digitar novo tema" value=""  maxlength="50">

          <textarea id="perg" maxlength="250" onclick="caracteres();" oncanplay="caracteres();" onabort="caracteres()"  onkeydown="caracteres()"  name="txtPergunta" rows="8" cols="80"></textarea>
            <div id="restante">

            </div>
          <input id="btnEnviarPerguntar" type="submit" name="btnPerguntar" value="enviar">
      </form>
    </div>
</div>
<script src="js\contarCaracters.js"></script>
<script src="js\novotema.js"></script>
