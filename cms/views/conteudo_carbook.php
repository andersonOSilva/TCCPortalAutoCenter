<div class="listarCadastros">
  <div class="titulo_carbook">
    <div class="conteudo_tbl_carbook">
      <p>Imagem</p>
    </div>
    <div class="conteudo_tbl_carbook">
      <p>Descrição</p>
    </div>

    <div class="conteudo_tbl_carbook">
      <p>Modo</p>
    </div>
  </div>
  <?php
      require_once 'controllers/carbook_controller.php';
      require_once 'models/carbook_class.php';

      $controller_carbook = new controllerCarbook();

      $listCarbook=$controller_carbook::Listar();
      $cont = 0;

      while ($cont < count($listCarbook)) {

   ?>
  <div class="conteudoCarbook">
      <div class="item_carbook">
        <div class="imgCarbook">
          <img src="<?php echo $listCarbook[$cont]->video; ?>" alt="">
        </div>
      </div>

      <div class="item_carbook">
        <div class="descCarbook">
            <?php echo $listCarbook[$cont]->descricao; ?>
        </div>
      </div>

      <div class="item_carbook">
          <div class="segura_modo">
            <div class="modo">
              <a href="#">
                <img src="imagens/off.png" alt="">
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
