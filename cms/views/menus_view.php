<!--
Autor:Luana Fernandes
Descrição:CRUD dos menus localizados na home(carrossel de menus)
Data:23/04/2018
-->
<div class="conteudo_padrao">
  <div class="cabecalho_menus">
    <h1>Menus</h1>
  </div>

  <div class="cadastros_menus">
    <form action="router.php?controller=menus&modo=novo" method="post" id="formBody">
      <div class="cad_titulo">
        Titulo Menu
            <input type="text" name="txt_titulo" value="">
      </div>
      <div class="cad_descricao">
          <textarea name="txt_descricao" id="DescricaoCarbook" maxlength="100" rows="8" cols="70" placeholder="Descricao do Carbook" required></textarea>
      </div>

      <div class="cad_link"> Link
        <input type="text" name="txt_link" maxlength="50" rows="8" cols="50" value="">
      </div>

      <div class="buttom_enviar">
        <input id="btnEnviar" type="submit" name="btnEnviar" value="Salvar">
      </div>

    </form>
  </div>

<!--Lista dos cadastros-->
  <div class="listar_cadastros">
    <?php
        require_once 'controllers/menus_controller.php';
        require_once 'models/menus_class.php';

        $controller_menu = new controllerMenus();

        $listMenus=$controller_menu::Listar();
        $cont = 0;

        while ($cont < count($listMenus)) {

     ?>

    <div class="item_menus">
          <?php echo $listMenus[$cont]->titulo; ?>
    </div>
    <div class="item_menus">
        <?php echo $listMenus[$cont]->descricao; ?>
    </div>

    <?php
       $cont+=1;
     }
    ?>
  </div>



</div>
