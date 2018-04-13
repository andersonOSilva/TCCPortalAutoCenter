

 <script>
     $(document).ready(function () {


       //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
       $(".abrir_modal").click(function(){
          $(".modalContainer_servico").slideToggle(2000);

       });

       //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
       $(".editar_servico").click(function(){
          $(".modalContainer_servico").slideToggle(2000);

       });
     });



           //Função para Abrir a tela de cadastro na modal
           function NovoServico(){
               $.ajax({
                   type: "POST",
                   url: "views/servico_modal.php",
                   success: function(dados){
                       $('.modal_servico').html(dados);
                   }
               });
           }

           function Editar(idItem){

             $.ajax({
               type: "GET",
               url: "views/servico_modal.php",
               data: {modo:'buscar',id:idItem},
               success: function(dados){
                 $('.modal_servico').html(dados);
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
                   url: "router.php?controller=servicos&modo=excluir&id="+idIten,
                   // data: {modo:'excluir',id:idIten},
                   success: function(dados){
                       $('#conteudo_servico').html(dados);
                       //alert ();
                   }
               });
             }
           }

  </script>

  <div class="modalContainer_servico">
    <div class="modal_servico">

    </div>
  </div>

<div class="conteudo_padrao">
    <div class="cabecalho_servicos">
      <h1>Serviços</h1>
    </div>
    <div class="conteudos_servico">

      <?php
        require_once 'conteudo_servico.php';
       ?>
    </div>

    <div class="abrir_modal" onclick="NovoServico();">

    </div>
</div>
