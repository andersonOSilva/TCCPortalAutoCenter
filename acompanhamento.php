<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagamento</title>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleForum.css">
    <link rel="stylesheet" type="text/css" href="css/style_produto.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {


          //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
          $(".novoForum").click(function(){
             $(".modalContainer_forum").slideToggle(2000);

          });

          $(".alert").click(function(){
             swal("Confirmado", "Pagamento efetuado com sucesso", "confirms");

          });

          $(".alertPrestadora").click(function(){
             swal("OPSSS!", "Realize o login como Usuario Para Participar", "warning");

          });


        });




    </script>

  </body>


  <div class="principal">
    <?php
        require_once 'menu.php';
     ?>
     <div class="container_pagamento">
        <div class="pagamento_escolha">

          <div class="controlle_compras">
            <div class="Titulo_compras">
              <h1>Acompanhe seus pedidos</h1>
            </div>

            <div class="controlle_compras_detalhes">


              <?php

              if (isset($_SESSION['idUsuario'])) {
                $idusuario=$_SESSION['idUsuario'];
              }

              require_once('AreaPrestadora/controller/filial_controller.php');
              require_once('AreaPrestadora/models_views/acompanhamento.php');

                //Instancia da classe buscar
                $controller_filial = new controller_filial();
                $retorno=$controller_filial::BuscarProdutosCliente($idusuario);
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


          </div>

          <?php
            $cont +=1;
          }

        }
           ?>

        </div>
     </div>

          </div>
        </div>



     <!-- <?php
         require_once 'rodape.php';
      ?> -->

  </div>
</html>
