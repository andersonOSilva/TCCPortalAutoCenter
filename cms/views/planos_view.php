
<!-- script  -->

  <script>
      $(document).ready(function () {


        //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
        $(".novo").click(function(){
           $(".modalContainer").slideToggle(2000);

        });

        //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
          $(".editar").click(function(){
             $(".modalContainer").fadeIn(2000);

          });



      });


      //Função para Abrir a tela de cadastro na modal
      function Novo(){
          $.ajax({
              type: "POST",
              url: "views/cadastro_plano.php",
              success: function(dados){
                  $('.modal').html(dados);
              }
          });
      }

      function Editar(idItem){

        $.ajax({
          type: "GET",
          url: "views/cadastro_plano.php",
          data: {modo:'buscarId',id:idItem},
          success: function(dados){
            $('.modal').html(dados);
          }

        });
      }

      function Excluir(idIten){
          $.ajax({
              type: "GET",
              url: "router.php?controller=planos&modo=excluir&id="+id,
              data: {modo:'excluir',id:idIten},
              success: function(dados){
                  $('#carrossel_planos').html(dados);

              }
          });
      }
  </script>




 <div class="modalContainer">
   <div class="modal">

   </div>
 </div>
<div class="conteudo_padrao">





  <!-- conteudo -->
  <div class="carrosel_planos">
      <div class="titulo_principal_planos">
        <h1>Planos</h1>
      </div>
      <div id="carrossel_planos">
          <div class="passar_carrosel">
              <a href="#" class="prev"> &lt; </a>
          </div>
          <div id="carrossel_planos_principal">
              <ul>

                <?php
                    require_once('controllers/controller_planos.php');
                    require_once('models/plano_class.php');

                    $controller_plano = new controllerPlano();
                    $listPlanos = $controller_plano :: Listar();
                    $cont=0;

                    while ($cont < count($listPlanos)) {

              ?>



                <li>
                    <div class="img_plano">
                        <img src="<?php echo ($listPlanos[$cont]->foto) ?>" alt="plano">
                    </div>

                    <div class="valor">
                      <p> <small>R$</small> <big><?php echo ($listPlanos[$cont]->preco) ?></big>  </p>
                    </div>

                    <div class="descricao_plano">
                      <p><?php echo ($listPlanos[$cont]->descricao) ?></p>
                    </div>

                    <div class="segura_btnResponder">
                      <div class="btnResponder">

                        <a href="#" class="editar" onclick="Editar(<?php echo ($listPlanos[$cont]->id) ?>)">Editar</a>


                        <!-- <a href="router.php?controller=planos&modo=buscarId&id=<?php
                         echo ($listPlanos[$cont]->id) ?>&pag=plano">Editar</a> -->
                      </div>

                      <div class="btnResponder">

                        <a href="#" class="excluir" onclick="Excluir(<?php echo ($listPlanos[$cont]->id) ?>)"> Excluir </a>


                        <!-- <a href="router.php?controller=planos&modo=excluir&id=<?php
                     echo ($listPlanos[$cont]->id) ?>" onclick="return confirm('deseja realmente excluir');" >Excluir</a> -->


                      </div>
                    </div>

                </li>

                <?php
                  $cont+=1;
              }
                 ?>




              </ul>
          </div>
          <div class="passar_carrosel ">
              <a href="#" class="next">> </a>
          </div>
      </div>
  </div>

    <img src="imagens/Icon.jpg" alt="" class="novo" onclick="Novo();">

</div>
