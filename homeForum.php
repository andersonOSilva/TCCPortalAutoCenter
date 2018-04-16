<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleForum.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {


          //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
          $(".novoForum").click(function(){
             $(".modalContainer_forum").slideToggle(2000);

          });

          $(".alert").click(function(){
             swal("OPSSS!", "Realize o login para participar do forum", "warning");

          });


        });

        function pergunta(){
            $.ajax({
                type: "POST",
                url: "perguntaForum.php",
                success: function(dados){
                    $('.modal_nova_pergunta').html(dados);
                }
            });
        }


    </script>
  </head>
  <body>



    <div class="modalContainer_forum">
      <!-- <div class="barra_que_segura">

      </div> -->
        <div class="modal_nova_pergunta">

        </div>
    </div>
      <div class="principal">
        <?php
            require_once 'menu.php';
         ?>

         <!-- Cabecalho Forum -->
         <?php
          require_once 'cabecalhoForum.php';
          ?>

         <!-- Fazer pergunta -->
         <div class="mande_sua_pergunta">
              <div class="escrita_pergunta">
                <div class="title_forum">
                  <p>Não Fique Com Duvida, faça a sua pergunta</p>
                </div>

                <div class="Butom_Fazer_Pergunta">
                  <div class="btnAbrirModal">
                    <a href="#"
                    <?php
                    if (isset($_SESSION['idUsuario'])){
                      echo "class='novoForum'";
                      echo "onclick=pergunta()";
                    }else{
                      echo "class='alert'";
                    }

                     ?>
                     >Fazer Pergunta</a>
                  </div>

                </div>

              </div>
         </div>

         <!-- FEED de perguntas -->

         <div class="container_conteudo_Forum">
              <div class="conteudo_Forum">
                  <!-- <div class="filtros_forum">

                  </div> -->

                  <?php

                  require_once("cms/controllers/forum_controller.php");
                  require_once("cms/models/forum_class.php");
                  $controller_forum= new controllerForum();
                  $List_returnForum=$controller_forum::ListartUserPerg();

                  $cont=0;
                  while ($cont < count($List_returnForum)) {

                  ?>

                  <!-- pergunta  -->

                  <div class="perguntas_forum">
                      <div class="pergunta_user_forum">
                          <div class="dados_user">
                            <div class="img_user">
                              <img src="<?php echo ($List_returnForum[$cont]->fotoUser) ?>" alt="djfjff">
                            </div>

                            <div class="dados_user_tema">
                                <p><?php echo ($List_returnForum[$cont]->descricao) ?></p>
                            </div>


                          </div>

                          <div class="dados_pergunta">
                              <p><?php echo ($List_returnForum[$cont]->pergunta) ?></p>
                          </div>
                          <div class="pergunta_user">
                            <div class="nome_user_perguntas">
                              <p>De:<?php echo ($List_returnForum[$cont]->nomeUser) ?></p>
                            </div>
                          </div>
                          <div class="segura_btnResponder">
                            <div class="btnResponder">
                              <a href="responderPergunta.php?idPergunta=<?php echo ($List_returnForum[$cont]->idTopicoForum) ?>">Responder</a>
                            </div>
                          </div>

                      </div>


                  </div>

                  <?php
                    $cont+=1;
                  }

                  ?>





                  </div>
              </div>
         </div>

         <?php
             require_once 'rodape.php';
          ?>
      </div>
  </body>
</html>
