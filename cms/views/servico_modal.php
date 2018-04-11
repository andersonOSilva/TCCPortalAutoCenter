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

</script>

<form action="" method="post" enctype="multipart/form-data" id="form" data-id="<?php echo($idServico) ?>">
  <div class="entrada_dado">
    <input type="text" name="txt_nome" value="<?php echo $nome; ?>" placeholder="Nome" maxlength="100">
  </div>

  <div class="entrada_dado1">
    <textarea placeholder="Descricao do servico" name="txt_descricao" rows="8" cols="80"><?php echo $descricao; ?></textarea>
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
