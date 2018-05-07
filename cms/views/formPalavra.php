<?php
  $idPalavra="0";
  $palavrao=Null;



  if(isset($_GET['modo'])){
    $modo = $_GET['modo'];

    if($modo == "buscarid"){

      $idPalavra=$_GET['id'];


      require_once("../controllers/forum_controller.php");
      require_once('../models/palavraForum_class.php');


        //Instancia da classe buscar
        $controller_palavra= new controllerForum();
        $returnPalavra=$controller_palavra::BuscarPalavraId($idPalavra);

        $idPalavra=$returnPalavra->idPalavra;
          $palavrao=$returnPalavra->palavrao;


    }

  }



 ?>


<form id="frmcadastroPalavra" class="frmcadastroPalavra" method="POST" action="" data-id="<?php echo($idPalavra) ?>">
  <input placeholder="Proibir Palavra" type="text" name="txt_palavrao" value="<?php echo $palavrao ?>">
  <input type="submit" name="btnEnviar" value="Cadastrar"


  <?php
   if(isset($_GET['modo'])){
   ?>
   value="Salvar edicao" onclick="CadastroeEdicao('#frmcadastroPalavra','editar','edita','#segura','.cadastar_nova_palavra','views/view_palavras.php','views/formPalavra.php','<?php echo($idPalavra) ?>');"
   <?php
   }else{
    ?>
    value="Cadastrar" onclick="CadastroeEdicao('#frmcadastroPalavra','palavrao','novo','#segura','.cadastar_nova_palavra','views/view_palavras.php','views/formPalavra.php','0');"

    <?php
   }
     ?>
   >
</form>
