<div class="dados_endereco_filial2">
  <div class="status_filal_dados">
    <div class="titulo_status_filial">
      <p>Presta servico</p>
    </div>

    <?php
      $statusServico=$listPrestadora[$cont]->statusServico;

      if ($statusServico == "1") {
     ?>
      <img src="imagens/on.png" alt="on" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','desativarBeneficilServico','deseja desativar esse beneficio?');">
    <?php }else{ ?>
      <img src="imagens/off.png" alt="off" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','ativarBeneficilServico','deseja ativar esse beneficio?');">
    <?php } ?>


  </div>



  <div class="status_filal_dados">
    <div class="titulo_status_filial">
      <p>Vende Produtos</p>
    </div>
    <?php
      $statusProduto=$listPrestadora[$cont]->statusProduto;

      if ($statusProduto == "1") {
     ?>
      <img src="imagens/on.png" alt="on" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','desativarBeneficilProduto','deseja desativar esse beneficio?');">
    <?php }else{ ?>
      <img src="imagens/off.png" alt="off" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','ativarBeneficilProduto','deseja ativar esse beneficio?');">
    <?php } ?>

  </div>



  <div class="status_filal_dados">
    <div class="titulo_status_filial">
      <p>Ativar Na Home</p>
    </div>
    <?php
      $statusHome=$listPrestadora[$cont]->statusHome;

      if ($statusHome == "1") {
     ?>
      <img src="imagens/on.png" alt="on" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','desativarBeneficilHome','deseja desativar esse beneficio?');">
    <?php }else{ ?>
      <img src="imagens/off.png" alt="off" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','ativarBeneficilHome','deseja ativar esse beneficio?');">
    <?php } ?>
  </div>

  <div class="status_filal_dados">
    <div class="titulo_status_filial">
      <p>Aparecer na Pagina de Produtos</p>
    </div>
    <?php
      $statusPagPrest=$listPrestadora[$cont]->statusPagPrest;

      if ($statusPagPrest == "1") {
     ?>
      <img src="imagens/on.png" alt="on" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','desativarBeneficilPagProdutos','deseja desativar esse beneficio?');">
    <?php }else{ ?>
      <img src="imagens/off.png" alt="off" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','ativarBeneficilPagProdutos','deseja ativar esse beneficio?');">
    <?php } ?>
  </div>

  <div class="status_filal_dados">
    <div class="titulo_status_filial">
      <p>Aparecer na Pagina de Servicos</p>
    </div>
    <?php
      $statusPagSer=$listPrestadora[$cont]->statusPagSer;

      if ($statusPagSer == "1") {
     ?>
      <img src="imagens/on.png" alt="on" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','desativarBeneficilPagServico','deseja desativar esse beneficio?');">
    <?php }else{ ?>
      <img src="imagens/off.png" alt="off" title="Ativar na home" onclick="AtivarEdesativar(<?php echo ($listPrestadora[$cont]->idFilial)?>,'prestadora','ativarBeneficilPagServico','deseja ativar esse beneficio?');">
    <?php } ?>
  </div>


</div>
