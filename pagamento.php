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
    <link rel="stylesheet" type="text/css" href="css/stylePagamento.css">
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

          <div class="escolhas">
              <div class="titulo_endereco">
                <h1>Endereço de entrega</h1>
              </div>

              <div class="endereco_selecionar">
                  <form class="" action="index.html" method="post">
                    <input type="radio" name="" value=""><label>Rua: Moções N° 45</label><br>
                    <label>Carapicuiba - SP</label><br>

                    <input type="radio" name="" value=""><label>Rua: Noruega N° 362</label><br>
                    <label>Osasco - SP</label><br>

                    <div class="salvar_dados">
                        <div class="botaoEnviar">
                            <a href="#">Salvar endereco</a>
                        </div>
                    </div>
                  </form>
              </div>
          </div>

          <div class="escolhas">
            <div class="titulo_endereco">
              <h1>Pagamento </h1>
            </div>

            <div class="radiosPafa">
              <input type="radio" name="" value="">Mastercard <input type="radio" name="" value="">Visa

            </div>

            <div class="catao">
              <input class="dadosPagamento" placeholder="Numero do cartao" type="text" name="" value="">
              <input class="dadosPagamento" placeholder="Nome do titular" type="text" name="" value="">
              <input class="dadosPagamento" placeholder="Validade" type="text" name="" value="">
              <input class="dadosPagamento" placeholder="Codigo de seguranca" type="text" name="" value="">
              <input class="dadosPagamento" type="text" placeholder="Cpf" name="" value="">


              <div class="salvar Tudo">
                  <a href="index.php" class="alert">Salva pagamento</a>
              </div>
            </div>



          </div>

        </div>
     </div>

     <?php
         require_once 'rodape.php';
      ?>

  </div>
</html>
