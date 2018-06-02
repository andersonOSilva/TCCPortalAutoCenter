<div id="titulo_palavra_nivel">
  <h1>Cadastro de Nivel</h1>
</div>
<div id="nivelCadastrada">
  <?php
    require_once("../controllers/controller_Nivel.php");
    require_once("../models/Nivel_class");

    $controller_nivel = new controllerNivel();
    $List_returnNivel = $controller_nivel::ListarNivel();
    $cont=0;
    while($cont<count($List_returnNivel)){
   ?>
    <div class="cadastrada">
     <div class="nome_nivel">
        <p><?php echo($List_returnNivel[$cont]->descricao) ?></p>
      </div>
   </div>
   <a href="#" onclick="Excluir(<?php echo $List_returnNivel[$cont]->idNivelAcesso?>,'nivel','delete','#segura','views/nivel_view.php',)">
       <img src="imagens/delet.png" alt="deletar">
   </a>
   <a href="#" onclick="Editar(<?php echo $List_returnNivel[$cont]->idNivelAcesso?>,'views/formNivel.php','.cadastrar_novo_nivel',)">
         <img src="imagens/edit.png" alt="edit">
   </a>
   <?php
      $cont+=1;
      }
    ?>
</div>
