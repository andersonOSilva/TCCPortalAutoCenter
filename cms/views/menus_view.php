<!--
Autor:Luana Fernandes
Descrição:CRUD dos menus localizados na home(carrossel de menus)
Data:23/04/2018
-->
<?php

$titulo = null;
$descricao = null;
$link = null;

   $action="modo=novo";

  //Verifica se a variavel vinda da controller existe
  if( isset($contato) ){
      $titulo=$menus->titulo;
      $descricao=$menus->descricao;
      $link=$menus->link;


      $action= "modo=editar&id=".$menus->id;

}

 ?>
<div class="conteudo_padrao">
  <div class="cabecalho_menus">
    <h1>Menus</h1>
  </div>

  <div class="cadastros_menus">
    <form action="router.php?controller=menus&modo=novo" method="post" id="formBody">
      <div class="cad_titulo">
        Titulo Menu
            <input type="text" name="txt_titulo" value="<?=$titulo?>">
      </div>
      <div class="cad_descricao">
          <textarea name="txt_descricao" id="DescricaoCarbook" maxlength="100"
          rows="8" cols="70" placeholder="Descricao do Carbook" value="<?=$descricao?>" required></textarea>
      </div>

      <div class="cad_link"> Link
        <input type="text" name="txt_link" maxlength="40" rows="8" cols="80" value="<?=$link?>">
      </div>

      <div class="buttom_enviar">
        <input id="btnEnviar" type="submit" name="btnEnviar" value="Salvar">
      </div>

    </form>
  </div>

<!--Lista dos cadastros-->
  <div class="listar_cadastros">
    <div class="tito_menu">
    <div class="conteudo_tbl_menu">
      <p>Titulo</p>
    </div>
    <div class="conteudo_tbl_menu">
      <p>Descrição</p>
    </div>
    <div class="conteudo_tbl_menu">
      <p>Link</p>
    </div>
    <div class="conteudo_tbl_menu">
      <p>Modo</p>
    </div>
  </div>
    <?php
        require_once 'controllers/menus_controller.php';
        require_once 'models/menus_class.php';

        $controller_menu = new controllerMenus();

        $listMenus=$controller_menu::Listar();
        $cont = 0;

        while ($cont < count($listMenus)) {

     ?>

    <div class="conteudoMenu">
      <div class="item_menus">
        <div class="descMenu">
            <?php echo $listMenus[$cont]->titulo; ?>
        </div>
      </div>
      <div class="item_menus">
        <div class="descMenu">
            <?php echo $listMenus[$cont]->descricao; ?>
        </div>
      </div>
      <div class="item_menus">
        <div class="descMenu">
          <?php echo $listMenus[$cont]->link; ?>
        </div>
      </div>

      <div class="item_menus">
        <div class="segura_modo">
          <div class="modo">
            <a href="#" class="editar" onclick="Excluir(<?php echo $listMenus[$cont]->idMenu ?>)">
              <img src="imagens/delet.png" alt="">
            </a>
            <a href="router.php?controller=menus&modo=editar&id=<?php echo($listMenus[$cont]->idMenu) ?>">
              <img src="imagens/edit.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
       $cont+=1;
     }
    ?>
  </div>



</div>
