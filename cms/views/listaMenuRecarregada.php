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
    require_once ('controllers/menus_controller.php');
    require_once ('models/menus_class.php');

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
