<div class="conteudo_padrao">


  <div class="controlle_compras">
    <div class="Titulo_compras">
      <h1>Produtos para aprovacao</h1>
    </div>

    <div class="controlle_compras_detalhes">


      <?php

      if (isset($_GET['idFilial'])) {
        $idFilial=$_GET['idFilial'];
      }

      require_once('controller/filial_controller.php');
      require_once('models_views/compra_produto_class.php');

        //Instancia da classe buscar
        $controller_filial = new controller_filial();
        $retorno=$controller_filial::BuscarProdutos($idFilial);
        $cont = 0;

        //var_dump($retorno);
        if (count($retorno) <= 0) {
          echo "Nenhum Produto encontado";
        }else {
          while ($cont < count($retorno) ) {

        ?>

      <div class="detalhe_compra">

        <div class="dataCompra">
          <p>Data da Compra: <?php echo implode("/",array_reverse(explode("-",$retorno[$cont]->data))); ?></p>
        </div>
          <div class="imagen_produto">
              <img src="imagens/fundo.jpg" alt="">
          </div>

          <div class="descricaoProduto">
              <p> <?php echo (utf8_decode($retorno[$cont]->descricao)) ?></p>
          </div>

          <div class="dadosCliente">
            <p>Cliente:  <?php echo (utf8_decode($retorno[$cont]->Cliente)) ?></p>
          </div>

          <div class="ValorProduto">
            <p>R$ <?php echo (number_format($retorno[$cont]->preco, 2, ',', ' ')) ?></p>
          </div>

          <div class="statusProduto">
            <p>status Pagamento:<span>
              <?php
                if ($retorno[$cont]->idStatus == 1) {
                  echo "Aprovado";
                }

                elseif ($retorno[$cont]->idStatus == 2) {
                  echo "Aprovar Envio";
                }


                elseif ($retorno[$cont]->idStatus == 3) {
                  echo "Pedido Enviado";
                }

               ?>
            </span> </p>
          </div>

          <div class="AprovarCompra">
            <form class="" action="router.php?controller=produto&modo=atualizarStatus&idPedido=<?php echo $retorno[$cont]->idPedido?>" method="post">
              <input type="submit" name="" value="Aprovar Compra">
            </form>
          </div>
      </div>

      <?php
      $cont +=1;
        }
      }
       ?>

    </div>

  </div>



  <div class="controlle_compras">

    <div class="Titulo_compras">
      <h1>Produtos para enviar</h1>
    </div>

    <div class="controlle_compras_detalhes">


      <?php

      if (isset($_GET['idFilial'])) {
        $idFilial=$_GET['idFilial'];
      }

      require_once('controller/filial_controller.php');
      require_once('models_views/compra_produto_class.php');

        //Instancia da classe buscar
        $controller_filial = new controller_filial();
        $retorno=$controller_filial::BuscarProdutos2($idFilial);
        $cont = 0;

        //var_dump($retorno);
        if (count($retorno) <= 0) {
          echo "Nenhum Produto encontrado";
        }else {
          while ($cont < count($retorno) ) {

        ?>

      <div class="detalhe_compra">

        <div class="dataCompra">
          <p>Data da Compra: <?php echo implode("/",array_reverse(explode("-",$retorno[$cont]->data))); ?></p>
        </div>
          <div class="imagen_produto">
              <img src="imagens/fundo.jpg" alt="">
          </div>

          <div class="descricaoProduto">
              <p> <?php echo (utf8_decode($retorno[$cont]->descricao)) ?></p>
          </div>

          <div class="dadosCliente">
            <p>Cliente:  <?php echo (utf8_decode($retorno[$cont]->Cliente)) ?></p>
          </div>

          <div class="ValorProduto">
            <p>R$ <?php echo (number_format($retorno[$cont]->preco, 2, ',', ' ')) ?></p>
          </div>

          <div class="statusProduto">
            <p>status Pedido:<span>
              <?php
                if ($retorno[$cont]->idStatus == 1) {
                  echo "Aprovado";
                }

                elseif ($retorno[$cont]->idStatus == 2) {
                  echo "Pedido Aprovado";
                }


                elseif ($retorno[$cont]->idStatus == 3) {
                  echo "Pedido Enviado";
                }

               ?>
            </span> </p>
          </div>

          <div class="AprovarCompra">
            <form class="" action="router.php?controller=produto&modo=atualizarStatus2&idPedido=<?php echo $retorno[$cont]->idPedido?>" method="post">
              <input type="submit" name="" value="Enviar Produto">
            </form>
          </div>
      </div>

      <?php
      $cont +=1;
        }
      }
       ?>

    </div>

  </div>

</div>
