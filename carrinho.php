<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carrino de compras</title>
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleCarrinho.css">
    <script src="js/jquery-3.3.1.min.js"></script>

  </head>
  <body>

    <div class="principal">
      <?php
          require_once 'menu.php';
       ?>

       <div class="principalCarrinho">
          <div class="produtosContainer">


            <div class="tituloProdutos">
              <h1>Meu carrinho ( <?php
              //session_start();

              if (isset($_SESSION['totalProdutos'] )) {
                if ($_SESSION['totalProdutos'] <= 1) {
                  echo ($_SESSION['totalProdutos'].' iten');
                }else {
                  echo ($_SESSION['totalProdutos'].' itens');
                }

              }else {
                echo "0 item";
              }

               ?>)</h1>
            </div>




            <div class="itensTitulo">
              <div class="tituloItemProdutos">
                Item(s)
              </div>

              <div class="tituloItemProdutosPreco">
                Preço
              </div>

              <div class="tituloItemProdutosQuantidade">
                Quantidade
              </div>

              <div class="tituloItemProdutosSubTotal">
                SubTotal
              </div>
            </div>

            <div class="itemProdutos">

              <?php

                require_once ('cms/controllers/controller_carrinho.php');
                $controller_produto = new controllerCarrinho();


                $retorno = $controller_produto::carrinho();

              //  $retorno2 = $controller_produto::retornar();

            //    echo $retorno2;


                //var_dump($retorno);
                /*
                $cont =0;

                while ($cont < count($retorno)) {
                    echo "produto ".$cont;
                    echo (utf8_decode('Produto: '.$retorno[$cont]->nome."</br>"));
                    echo (utf8_decode('Quantidade: '.$retorno[$cont]->quantidade));

                    $cont +=1;
                }
          */
                //var_dump($retorno);
               ?>






            </div>

          </div>
       </div>



    </div>

    <?php
        require_once 'rodape.php';
     ?>



  </body>
</html>
