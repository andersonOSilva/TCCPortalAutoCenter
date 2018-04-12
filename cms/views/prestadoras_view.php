
<!-- script  -->

  <script>
      $(document).ready(function () {


        //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
        $(".novo").click(function(){
           $(".modalContainer_pretadora").slideToggle(2000);

        });

        //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
          $(".listar").click(function(){
             $(".modal_prestadora").fadeIn(2000);

          });



      });


      //Função para Abrir a tela de cadastro na modal
      function Novo(){
          $.ajax({
              type: "POST",
              url: "views/prestadora_modal.php",
              success: function(dados){
                  $('.modal_prestadora').html(dados);
              }
          });
      }


    function Listar(idItem){

      $.ajax({
        type: "GET",
        url: "views/prestadora_modal.php",
        data: {modo:'buscarId',id:idItem},
        success: function(dados){
          $('.modal_prestadora').html(dados);
        }

      });
    }

    // function Excluir(idIten){
    //
    //   var resposta;
    //
    //   resposta = confirm('Deseja excluir?');
    //
    //   if (resposta==true)
    //   {
    //   //alert(idIten);
    //     $.ajax({
    //         type: "GET",
    //         url: "router.php?controller=planos&modo=excluir&id="+idIten,
    //         // data: {modo:'excluir',id:idIten},
    //         success: function(dados){
    //             $('#carrosel_planos_conteudo').html(dados);
    //             //alert ();
    //         }
    //     });
    //   }
    // }

</script>



<div class="modalContainer_pretadora">
  <div class="modal_prestadora">

  </div>
</div>



<div class="conteudo_padrao">
  <div class="tbl_consulta_pretadora">
        <div class="titulo_prestadora">

            <div class="dados_prest">Prestadora</div>
            <div class="dados_prest">Status</div>
            <div class="dados_prest">Opção</div>

        </div>

        <?php
          require_once('controllers/prestadora_controller.php');
          require_once('models/cadprestadora_class.php');

          $controller_Prestadora = new controllerPrestadora();
          $listPrestadora = $controller_Prestadora ::Listar();
          $cont=0;

          while($cont < count($listPrestadora)){


        ?>

        <div class="conteudo_prestadora">
          <div class="dados_prest_item"><?php echo ($listPrestadora[$cont]->nomeFantasia); ?></div>
          <div class="dados_prest_item_modo">
              <div class="status_prest">
                  <img src="imagens/off.png" alt="off" title="desativar user">
              </div>
          </div>
          <div class="dados_prest_modo">
            <div class="status_prest_modo">
                <img src="imagens/view.png"  alt="off" title="Visualizar user" class="novo" onclick="Novo();">
            </div>

            <div class="status_prest_modo">
                <img src="imagens/notification.png" alt="off" title="Notificar user">
            </div>

          </div>
        </div>

        <?php
          $cont+=1;
        }
         ?>

    </div>
</div>
