<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/styleServico01.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      <script src="js/jquery-3.3.1.min.js"></script>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>

          $(document).ready(function (){
            $(".abrirModalServico").click(function(){
               $(".vermais_servicos").slideToggle(2000);

            });

            $(".alert").click(function(){
               swal("OPSSS!", "Realize o login como usuario", "warning");

            });
          });

          function spm(idItem){
              $.ajax({
                  type: "POST",
                  url: "servicosPrestadoraModal.php?idservico="+idItem,
                  success: function(dados){
                      $('.dadosDamodalServico').html(dados);
                  }
              });
          }

      </script>
  </head>
  <body>
    <div class="principal">

      <?php
          require_once 'menu.php';
       ?>

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
      <div class="container_servico">
        <!-- div que suporta imagem e descricao em destaque-->
        <div id="suporte">
            <!-- area da imagem em destaque  -->

            <?php

            if (isset($_GET['idservico'])) {
              $idservico=$_GET['idservico'];
            }

            require_once 'cms/controllers/servico_controller.php';
            require_once 'cms/models/servicos_class.php';

            $controller_servico = new controllerServico;

            $list=$controller_servico::ListarPorId($idservico);

            //var_dump($list);

            $idServico=$list->idServico;
            $nome=$list->nome;
            $descricao=$list->descricao;
            $imagem=$list->imagem;


             ?>

            <div class="suporte_conteudo_servico">
              <div id="areaImagem">


                <div class="img_servico">
                      <img src="cms/<?php echo $imagem ?>" alt="servico" >
                </div>

                <div class="areaImagem_descricao">
                    <p><?php echo $nome ?></p>
                </div>

              </div>
              <!-- area de descricao em destaque  -->
              <div id="areaDescricao">
                  <p>  <?php echo $descricao ?></p>
              </div>
            </div>

        </div>
        <!--suporta imagens e descricoes segundarias/ avaliacao e botao -->
        <div class="container_servico_suporte">
          <!-- segura as imagens e area de descricao  PRESTADORA-->
          <?php
          require_once('cms/controllers/prestadora_controller.php');
        //  require_once('controllers/prestadora_controller_endereco.php');
        $controller_servico = new controllerPrestadora;

        $list=$controller_servico::ListarTodosServicos($idservico);
        $cont=0;
        //var_dump($list);
        if (count($list) != 0) {
          while ($cont<count($list)) {
           ?>

           <div class="suporteSecundaria">
             <div class="areaImagemSecundaria">
                 <img src="<?php echo $list[$cont]->fotoPrestadora ?>" alt="servico" >
             </div>
             <div class="areaDescricaoSecundaria">
                 <div class="titulo_Prestadora_servico">
                     <h2><?php echo $list[$cont]->nomeFantasia ?></h2>
                 </div>

                 <div class="descricao_prestadora">
                     <p> <?php echo $list[$cont]->descricao ?>
                      </p>
                 </div>

             </div>
             <div class="classificacao">
                 <ul>
                   <li class="color"></li>
                   <li class="color"></li>
                   <li class="color"></li>
                   <li class="colornot"></li>
                   <li class="colornot"></li>
                 </ul>
             </div>
             <div class="botao abrirModalServico" onclick="spm(<?php echo $idservico ?>)" >
               <p>Ver mais</p>


             </div>



           </div>

           <div class="vermais_servicos">
              <div class="dadosDamodalServico">

              </div>
           </div>

           <?php
           $cont+=1;
         }

        }else {
          echo "Nada encontrado";
        }
           ?>




        </div>
      </div>
      <?php   require_once 'rodape.php'; ?>
  </div>
</body>
</html>
