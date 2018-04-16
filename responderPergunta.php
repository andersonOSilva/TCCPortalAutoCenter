<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responder Pergunta</title>
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleForum.css">
      <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <script>
    $(document).ready(function () {

      $(".alert").click(function(){
               swal("OPSSS!", "Realize o login para responder ", "warning");

            });

    });


    </script>

    <div class="principal">
      <?php
          require_once 'menu.php';




       ?>


       <div class="pergunta_forum">

         <!-- Cabecalho Forum -->
         <header class="diminuir">
              <div class="diminuir2">
                  <div class="titulo_forum">
                    <h1><span style="color:#eca023;">WIKI</span>Autocenter</h1>
                  </div>

              </div>
         </header>


         <?php

          if (isset($_GET['idPergunta'])) {
            $idPergunta = $_GET['idPergunta'];

            require_once("cms/controllers/forum_controller.php");
            require_once("cms/models/forum_class.php");
            $controller_forum= new controllerForum();
            $List_returnForum=$controller_forum::ListartUserPergPorId($idPergunta);

            // var_dump($List_returnForum);

            $nome= $List_returnForum->nomeUser;
            $pernutaUser= $List_returnForum->pergunta;

          ?>

          <div class="segura_perguntas_id">
              <div class="cabecalho_pergunta">
                <div class="segura_fotUser_id">
                  <img src="<?php echo $List_returnForum->fotoUser?>" alt="">
                </div>

                <!-- <div class="segura_nomeUser_id">
                  <p></p>
                </div>

                <div class="segura_totalresp_id">
                  <p>Respostas:111</p>
                </div> -->


              </div>
              <div class="segura_pergunta_item">
                <div class="tema_pergunta">
                  <p><?php echo $List_returnForum->descricao?></p>
                </div>

                <div class="Pergunta_item">
                  <p><?php echo $List_returnForum->pergunta?></p>
                </div>

                <div class="nome_user_perguntas_item">
                  <p>De:<?php echo $List_returnForum->nomeUser ?></p>
                </div>

              </div>



          </div>

       </div>
     <?php } ?>

     <div class="respostas_pergunta">
       <div class="respostas_pergunta_item">
         <div class="titulo_principal_servicos cor0">
           <h2>Respostas</h2>
         </div>

         <?php

         require_once("cms/controllers/RespostaForum_controller.php");
         require_once("cms/models/RespostaForum_class.php");

         $controller_forum= new controllerForum();
         $List_returnRespostas=$controller_forum::ListarTodasRepostas($idPergunta);

         $cont=0;
         while ($cont < count($List_returnRespostas)) {

          ?>

         <!-- Pergunta -->

         <div class="segura_perguntas_id resposta_id">
             <div class="cabecalho_Resposta">
                 <img src="<?php echo ($List_returnRespostas[$cont]->fotoUser) ?>" alt="">
             </div>
             <div class="segura_pergunta_item_resposta">


               <div class="Pergunta_item">
                 <p><?php echo ($List_returnRespostas[$cont]->comentario) ?></p>
               </div>

               <div class="nome_user_perguntas_item">
                 <p>De:<?php echo ($List_returnRespostas[$cont]->nomeUser) ?></p>
               </div>

             </div>
         </div>

         <?php
          $cont+=1;
        }
          ?>



       </div>

       <div class="escrever_resposta">
         <div class="titulo_escrever_resposta">
            <h2>Deixe sua resposta.</h2>
         </div>

         <?php
         if (isset($_SESSION['idUsuario'])){


             $idUser=$_SESSION['idUsuario'];



           require_once("cms/controllers/controller_cadUser.php");
           require_once("cms/models/cadUser_class.php");
           $controller_cadUser= new controllerCadUser();
           $return=$controller_cadUser::Buscar($_SESSION['idUsuario']);

          ?>

         <div class="cabecalho_Resposta">
             <img src="<?php echo $return->foto ?>" alt="">
         </div>

         <?php
       }
          ?>

         <div class="detalhes_pergunta">
           <div class="Pergunta_item">
             <p><?php echo $pernutaUser ?></p>
           </div>
         </div>

         <div class="escreva_resposta_id">
           <form class="" action="router.php?controller=Respostaforum&modo=novaResposta&idPergunta=<?php echo $idPergunta ?>&idUser=<?php echo $idUser ?>" method="post">
             <textarea maxlength="185" name="txtResposta" id="entrada_resposta" placeholder="Escreva sua resposta"></textarea>
             <div class="btnEnviarResposta">

               <?php
               if (isset($_SESSION['idUsuario'])){
                 echo "<input type='submit' name='' value='Enviar'>";

               }else{
                 echo "<a href='#' class='alert'>Enviar</a>";
               }

                ?>

             </div>
           </form>
         </div>

       </div>

     </div>

       <?php

           require_once 'rodape.php';
        ?>

    </div>
  </body>
</html>
