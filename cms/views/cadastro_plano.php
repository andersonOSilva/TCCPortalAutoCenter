<?php



$nome=Null;
$preco=Null;
$descricao=Null;
$foto=Null;
// $operacao="modo=novo";
$id="0";





  if(isset($_GET['modo'])){

    $modo=$_GET['modo'];

    if ($modo == "buscarId") {
      $id=$_GET['id'];

      echo $modo;

      require_once('../controllers/controller_planos.php');
      require_once('../models/plano_class.php');


      $controller_plano = new controllerPlano();
      $controller_plano :: Buscar();
      //instacia a controller
      //Passa o id para a controller
      //var_dump ($retornoModel);
      echo "      ta na class ";
      // if (isset($retornoModel)) {
      //   echo "string";
      // }

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
            url: "router.php?controller=planos&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                 $('.modal').html(dados);
                 //alert(dados);

            }
        });

     });
 </script>


<div class="cadastro_plano">

    <form class="frmPlano" action="" method="post" id="form" data-id="<?php echo($id) ?>" enctype="multipart/form-data">
        <div class="entrada_dado">
          <input maxlength="40" placeholder="Nome do plano" required type="text" name="txtNome" value="<?php echo $nome?>">
        </div>

        <div class="entrada_dado">
          <input maxlength="8" placeholder="Preco" required type="text" name="txtPreco" value="<?php echo $preco?>">
        </div>

        <div class="entrada_dado1">
          <textarea maxlength="40" placeholder="Descricao do plano" required name="txtDescricao" rows="8" cols="80"><?php echo $descricao?></textarea>
        </div>

        <div class="filePost">
          <input  id="upload" type="file" name="flImagenPlano" >

        </div>
        <div class="segura_preview">

          <div class="preview_img">
            <img id="img" src="<?php echo $foto?>" alt="">
          </div>
        </div>


        <div class="buttom_enviar">
          <input id="btnEnviar" type="submit" name="btnEnviar" value="Enviar">
        </div>


    </form>
</div>
<script  src="../js/preview.js"></script>
