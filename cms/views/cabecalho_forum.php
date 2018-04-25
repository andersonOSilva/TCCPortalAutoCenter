<script>
$("#frmcadastroCabecalho").submit(function(event){
     //Recupera o id gravado no Form pelo atribute-id
    //  var id = $(this).data("id");
    //  var modo = "";
    //  if(id == '0')
    //      modo='novo';
    //  else
    //      modo='editar';

   //anula a ação do submit tradicional "botao" ou F5
    event.preventDefault();

    $.ajax({
       type: "POST",
       url: "router.php?controller=forum&modo=novo",
       //alert (url);
       data: new FormData($("#frmcadastroCabecalho")[0]),
       cache:false,
       contentType:false,
       processData:false,
       async:true,
       success: function(dados){
            $('.mostrar_dados').html(dados);
            //alert(dados);

       }
   });

});
</script>



<div class="conteudo_cabecalho">
  <form id="frmcadastroCabecalho" class="frmcadastroCabecalho" action="" method="post">

    <input placeholder="Primeira parte do titulo" type="txt" name="txtTitulo1" value="">
    <input placeholder="Segunda parte do titulo" type="txt" name="txtTitulo2" value="">
    <textarea placeholder="Descricao do forum" name="txtCabecalho" rows="8" cols="80"></textarea>
    <input type="submit" name="btnEnviar" value="Cadastrar">
  </form>


  <div class="mostrar_dados">

    <div class="titulo_temas_principal">
        <h1>Cabecalho</h1>
    </div>

    <?php

    require_once("../controllers/forum_controller.php");
    require_once("../models/cabecalhoForum_class.php");
    $controller_forum= new controllerForum();
    $List_returnForum=$controller_forum::ListarCabecalho();

    $cont=0;
    while ($cont < count($List_returnForum)) {

    ?>

    <div class="dados_cabecalho">
      <div class="titulo_cabecalho_forum">
        <?php echo($List_returnForum[$cont]->titulo1) ?>
        <?php echo($List_returnForum[$cont]->titulo2) ?>
      </div>
    </div>



    <?php
    $cont+=1;
  }
     ?>

  </div>
</div>
