

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

        var resposta;

        resposta = confirm('Deseja excluir?');

        if (resposta==true)
        {
        //alert(idIten);
          $.ajax({
              type: "GET",
              url: "router.php?controller=planos&modo=excluir&id="+idIten,
              // data: {modo:'excluir',id:idIten},
              success: function(dados){
                  $('#carrosel_planos_conteudo').html(dados);
                  //alert ();
              }
          });
        }
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
      <div id="carrosel_planos_conteudo">

        <?php
          require_once 'conteudo_planos.php';
         ?>


      </div>
  </div>

    <img src="imagens/Icon.jpg" alt="" class="novo" onclick="Novo();">

</div>
