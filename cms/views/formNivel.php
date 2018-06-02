<?php
  $idNivelAcesso="0";
  $descricao=null;

  if (isset($_GET)) {
    $modo = $_GET['modo'];
    if ($modo == "buscarid") {
      $idNivelAcesso=$_GET['id'];
      require_once("../controllers/controller_Nivel.php");
      require_once('../models/Nivel_class.php');

      $contrller_nivel = new controllerNivel();
      $returnNivel=$contrller_nivel::BuscarNivelId($idNivelAcesso);
      $idNivelAcesso=$returnNivel->idNivelAcesso;
      $descricao=$returnNivel->descricao;
    }
  }
 ?>
<form id="frmcadastroNivel" class="frmcadastroNivel" method="POST" action="" data-id=<?php echo($idNivelAcesso) ?>>
  <input placeholder="Cadastrar Nivel" type="text" name="txt_nivel" value="<?php echo $descricao ?>">
  <input type="submit" name="btnEnviar"
  <?php
    if (isset($_GET['modo'])) {
   ?>
  value="Salvar edicao" onclick="CadastroeEditar('#frmcadastroNivel','nivel','editar','#segura','.cadastrar_novo_nivel','views/nivel_view.php','views/formNivel.php','<?php echo($idNivelAcesso) ?>');"
  <?php
    }else {
  ?>
  value="Cadastrar" onclick="CadastroeEditar('#frmcadastroNivel,'nivel','novo','#segura','.cadastrar_novo_nivel','views/nivel_view.php','views/formNivel.php','0');" >
</form>
