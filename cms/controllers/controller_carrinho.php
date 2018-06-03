<?php

  class controllerCarrinho{

// MOSTRA O CARRINHO DE COMPRAS
    public function carrinho(){

      $total = 0;
      $totalProdutos = 0;

      require_once ('cms/models/produto_class.php');

      $produtoClass = new produtoClass;
      // VERIFICAR SE EXISTE UMA SESSION

      if ($_SESSION) {
        // SEPARA NOME DE QUANTIDADE OU VALORES
        foreach ($_SESSION as $nome => $quantidade) {

          if ($quantidade > 0) {

            if (substr($nome,0,9) == 'produtos_') {

          //  echo ("essas e a quantidade ".$quantidade."</br>");
              // PEGA id DA SESSION
              $id = substr($nome,9,(strlen($nome) -9));

            //  echo $id."</br>";


              // MONTA O CARRINHO
              $produtoClass->idProduto = substr($nome,9,(strlen($nome) -9));
              $produtoClass->quantidade = $quantidade;
              $retorno = $produtoClass::selecionarPorId($produtoClass);
            //  var_dump($retorno);

            $count=0;
            while ($count < count($retorno)) {
            //  echo "</br> STRING </br>";
             $subtotal =$retorno[$count]->quantidade * $retorno[$count]->preco;
              //  echo ('nome: '.$retorno[$count]->nome. ' '.$retorno[$count]->quantidade.' x R$ '.number_format($retorno[$count]->preco ,2 ) .' = R$'. number_format($subtotal,2).'</br>');
              //var_dump($retorno);


              // validacao para Nao adicionar produtos zerados
              if ($retorno[$count]->quantidade <= 1) {
                  $class='cursor';
                }else {
                  $class='Novocursor';
                }

              // validacao de quantidade no estoque
              //echo $retorno[$count]->quantidadeProduto ;
              if ($retorno[$count]->quantidadeProduto <= $retorno[$count]->quantidade) {
                  $class2='cursor';
                }else {
                  $class2='Novocursor';
                }



              echo ("

              <div class='produtoItemDescricao'>
                <div class='descricaoProdutoPedido'>
                  <div class='produtoDetalhes'>
                    <div class='imgProdutodetalhe'>
                      <img src=cms/". $retorno[$count]->imagem ." alt='produto'>
                    </div>

                    <div class='descricaoProdutoItem'>
                      <div class='textoDescricaoProduto'>
                        <p>".$retorno[$count]->descricao."</p>
                      </div>

                      <div class='textoDescricaoDestribuidor'>
                        <p>Produzido e entregue por: <span class='abrirModal'>Auto center</span> </p>
                      </div>
                    </div>




                  </div>
                </div>

                <div class='descricaoProdutoPedidoPreco'>
                  <div class='textoDescricaoPreco'>

                    <p>R$ <span class='preco'>".number_format($retorno[$count]->preco ,2 )."</span> </p>
                  </div>
                </div>

                <div class='descricaoProdutoPedidoQuantidade'>
                  <div class='textoDescricaoQuantidade'>

                    <div class='QuantidadeProdutos'>
                      <div class='del'>

                      <a class='".$class."' href='router.php?controller=produtos&modo=addCarrinho&menos=".$id."'>-</a>

                      </div>

                      <div class='quantidadeTotal'>

                       <p>".$retorno[$count]->quantidade."</p>

                      </div>

                      <div class='add'>
                        <a class='".$class2."' href='router.php?controller=produtos&modo=addCarrinho&idProduto=".$id."'>+</a>
                      </div>
                    </div>

                    <a href='router.php?controller=produtos&modo=addCarrinho&del=".$id."'>Remover</a>


                  </div>
                </div>

                <div class='descricaoProdutoPedidoSubTotal'>
                  <div class='textoDescricaoPreco'>
                    <p>R$ <span class='preco'>".number_format($subtotal,2)."</span> </p>
                  </div>
                </div>
              </div>


              ");

              $count+=1;

              $total +=$subtotal;

              $totalProdutos+=$quantidade;
            }


            }


          }

          // $count=0;
          // while ($count < count($retorno)) {
          //   echo "</br> STRING </br>";
          //   var_dump($retorno);
          // return $retorno;
          //   $count+=1;
          // }


          // $quantidadeProdutos = count($_SESSION);
          //
          // $produtosQuantidade = $quantidadeProdutos-1;
          //
          // $cont = 0;
          // while ($produtosQuantidade > $cont) {
          //   echo ("produtos ".$cont);
          //   $cont+=1;
          // }



        }
      } // aqui fecha o foreach




      if ($total == 0) {
        echo "nao ha produtos";
      }else{
        echo (" <div class='TotalProdutos'>
          <div class='espaco'>

          </div>

          <div class='espaco'>
            <div class='Totalgeral'>
              <div class='detalhesValores'>
                <p>Subtotal (".$totalProdutos." itens):</p>
              </div>

              <div class='detalhesValores'>
                <p class='precoTotal'>R$ <span class='preco'>".$total."</span> </p>
              </div>


            </div>

            <div class='Totalgeral'>
              <div class='detalhesValores'>
                <p>Frete:</p>
              </div>

              <div class='detalhesValores'>
                <div class='calculofrete'>
                  <form class='' action='index.html' method='post'>
                    <input class='txttCep' type='text' name='' value=''>
                  </form>
                </div>
              </div>

            </div>


            <div class='Totalgeral'>
              <div class='detalhesValores'>
                <p>Total a pagar:</p>
              </div>

              <div class='detalhesValores'>
                <p class='precoTotal'>R$ <span class='preco'>".$total."</span> </p>
              </div>


            </div>

            <div class='botaoEnviar'>
              <button class='botaoEnviar' type='button' name='butto' >Finalizar compra</button>
            </div>



          </div>
        </div> ");
      }

      $_SESSION['totalProdutos'] = $totalProdutos;

      //echo $_SESSION[$totalProdutos];

    }




  }


  @session_start();

  if (isset($_SESSION['idUsuario'])) {
    $idUser = $_SESSION['idUsuario'];

    session_destroy();
    @session_start();

    $_SESSION['idUsuario'] = $idUser;

  }



  //session_destroy();
  // echo "Chegou aqui";

  // Adicao de produto
  if (isset($_GET['idProduto'])) {
    $_SESSION['produtos_'.$_GET['idProduto']] +=1;

    header("location:carrinho.php");


  }

  // Subtrasao de produto
  if (isset($_GET['menos'])) {
    $_SESSION['produtos_'.$_GET['menos']] --;
    header("location:carrinho.php");
  }

  // deletar produto
  if (isset($_GET['del'])) {
    $_SESSION['produtos_'.$_GET['del']] = 0;
    header("location:carrinho.php");
  }

 ?>
