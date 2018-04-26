<?php
  $idcabecalho="0";
  $titulo1=Null;
  $titulo2=Null;
  $descricao=Null;



  if(isset($_GET['modo'])){
    $modo = $_GET['modo'];

    if($modo == "buscarid"){

      $idcabecalho=$_GET['id'];


      require_once("../controllers/forum_controller.php");
      require_once('../models/cabecalhoForum_class.php');


        //Instancia da classe buscar
        $controller_cabecalho = new controllerForum();
        $returnCabecalho=$controller_cabecalho::BuscarCabecalhoId($idcabecalho);

        $idcabecalho=$returnCabecalho->idcabecalho;
        $titulo1=$returnCabecalho->titulo1;
        $titulo2=$returnCabecalho->titulo2;
        $descricao=$returnCabecalho->descricao;
    }

  }



 ?>

 <form id="frmcadastroCabecalho" class="frmcadastroCabecalho" action="" method="post" data-id="<?php echo($idcabecalho) ?>">
   <input placeholder="Primeira parte do titulo" type="txt" name="txtTitulo1" value="<?php echo $titulo1  ?>">
   <input placeholder="Segunda parte do titulo" type="txt" name="txtTitulo2" value="<?php echo $titulo2  ?>">
   <textarea placeholder="Descricao do forum" name="txtCabecalho" rows="8" cols="80"><?php echo $descricao  ?></textarea>
   <input type="submit" name="btnEnviar"

   <?php
    if(isset($_GET['modo'])){
    ?>
    value="Salvar edicao" onclick="CadastroeEdicao('#frmcadastroCabecalho','forum','editar','.mostrar_dados','#conteudo_geral','views/tblCabecalho_view.php','views/formCabecalho.php','<?php echo($idcabecalho) ?>');"
    <?php
    }else{
     ?>
     value="Cadastrar" onclick="CadastroeEdicao('#frmcadastroCabecalho','forum','novo','.mostrar_dados','#conteudo_geral','views/tblCabecalho_view.php','views/formCabecalho.php','0');"
     <?php
    }
      ?>
    >

    
</form>
