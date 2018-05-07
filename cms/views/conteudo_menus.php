<?php
  $idMenu = "0";
  $titulo = null;
  $link = null;
  $descricao = null;


  if(isset($_GET['modo'])){
    $modo = $_GET['modo'];

    if($modo == "buscar"){

      $id=$_GET['id'];


      require_once('../controllers/menus_controller.php');
      require_once('../models/menus_class.php');

        //Instancia da classe buscar
        $controller_menu = new controllerMenus();
        $menus=$controller_menu::Buscar();

        $idMenu=$menus->idMenu;
        $titulo=$menus->titulo;
        $link=$menus->link;
        $descricao=$menus->descricao;

    }

  }

 ?>

 <script>

     $("#formBody").submit(function(event){
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
            url: "router.php?controller=menus&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#formBody")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                 $('.modal_servico').html(dados);
                // alert(dados);

            }
        });

     });

</script>

<form id="formBody" action="" method="post" data-id="<?php echo($idMenu) ?>">
  <div class="principal">
    <?php
      if(isset($_GET['modo'])){

        $modo=$_GET['modo'];

          echo "Editar";
        }else{
          echo "Novo";
        }
     ?>

      <div class="pricipalfilha">
<!--  <div style="heigth:300px;width:300px;">-->
      <div class="cad_titulo">
    Titulo Menu
        <input type="text" class="input" name="txt_titulo" value="<?php echo $titulo?>">

      </div>
    </div>
<!--  <div style="heigth:300px;width:500px;">-->
    <div class="pricipalfilha">
        <div class="cad_link"> Link

          <input type="text" class="input" name="txt_link" maxlength="40" rows="8" cols="80" value="<?php echo $link?>" >

        </div>
      </div>
      <div class="pricipalfilha">
        <div class="cad_descricao">

          <textarea name="txt_descricao" id="DescricaoCarbook" maxlength="100"
          rows="8" cols="70" placeholder="Descricao do Carbook" value="<?php echo $descricao?>" required class="input"></textarea>

        </div>
      </div>



    <div class="pricipalfilha">
        <div class="buttom_enviar">

          <input id="btnEnviar" type="submit" class="input" name="btnEnviar" value="Salvar" onclick="CadastroeEdicao('#formBody','menus','novo','.listar_cadastros','.cadastros_menus','views/listarMenus.php','views/conteudo_menus.php','0');">

        </div>
    </div>
  </div>

</form>
