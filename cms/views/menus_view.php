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
    <?php
        require_once 'conteudo_menus.php';
     ?>
  </div>

<!--Lista dos cadastros-->
  <div class="listar_cadastros">
    <?php
      require_once 'listaMenuRecarregada.php';
     ?>
  </div>



</div>
