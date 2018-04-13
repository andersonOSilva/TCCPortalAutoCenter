<?php
  $idServico = "0";
  $nome = null;
  $descricao = null;
  $imagem = null;



  if(isset($_GET['modo'])){
    $modo = $_GET['modo'];

    if($modo == "buscar"){

      $id=$_GET['id'];


      require_once('../controllers/servico_controller.php');
      require_once('../models/servicos_class.php');
        //Instancia da classe buscar
        $controller_servico = new controllerServico();
        $servico=$controller_servico::Buscar();

        $idServico=$servico->idServico;
        $nome=$servico->nome;
        $descricao=$servico->descricao;
        $imagem=$servico->imagem;
    }

  }



 ?>

 <script>

     $("#form").submit(function(event){
          //Recupera o id gravado no Form pelo atribute-id
          var id = $(this).data("id");
          var modo = "";
          if(id == '0')
              modo='novo';
          else
              modo='editar';

        //anula a ação do submit tradicional "botao" ou F5
         event.preventDefault();

         $.ajax({
            type: "POST",
            url: "router.php?controller=servicos&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                 $('.modal_servico').html(dados);
                 //alert(dados);

            }
        });

     });

     $(document).ready(function() {

       $(".fechar_modal").click(function() {
         //$(".modalContainer").fadeOut();
      $(".modalContainer_servico").slideToggle(1000);
       });
     });

</script>

<form id="formBody" action="" method="post" enctype="multipart/form-data" id="form" data-id="<?php echo($idServico) ?>">
  <div class="titulo_Servico_modal">
    <div class="tituo_sevico_modal_item">
      <h1>
        <?php
        if(isset($_GET['modo'])){

          $modo=$_GET['modo'];

            echo "Editar Servico";
          }else{
            echo "Novo Servico";
          }
         ?>
        </h1>
    </div>


      <div class="sair_modal">
          <div class="fechar_modal">
              <img src="imagens/fechar.png" alt="">
          </div>
      </div>
  </div>


    <div class="segura_form">
      <div class="control small" >
        <input  placeholder="Nome do Serviço" id="nomeservico" maxlength="100" required  name="txt_nome" value="<?php echo $nome; ?>" >
        <label for="title " >Nome do Serviço</label>
      </div>

      <div class="control small">
        <textarea name="txt_descricao" placeholder="Descricao do servico" required><?php echo $descricao; ?></textarea>
        <label for="description">Descricao do servico</label>
      </div>
    </div>


  <div class="filePost">
    <input id="upload" type="file" name="fle_imagem" >
  </div>

  <div class="segura_preview">
    <div class="preview_img">
      <img id="img" src="<?php echo $imagem?>" alt="">
    </div>
  </div>


  <div class="buttom_enviar">
    <input id="btnEnviar" type="submit" name="btn_enviar" value="Enviar">
  </div>


</form>
<script  src="../js/preview.js"></script>
