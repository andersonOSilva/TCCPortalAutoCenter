<?php

  $nome=null;
  $telefone=null;

  if (isset($_GET['modo'])) {
    $modo = $_GET['modo'];
    if ($modo == 'buscarid') {
      $idFilial=$_GET['id'];

      require_once("controller/filial_controller.php");
      require_once("models/filial_class.php");
      $controller_filial = new controller_filial();
       $list_filial = $controller_filial::NovaFilial();

       $idFilial= $list_filial->idFilial;
       $nome = $list_filial->nome;
       $telefone = $list_filial->telefone;
    }
  }



 ?>
 <script src="../cms/js/functionCentral.js"></script>
<form  id="form"class="" action="" method="POST" class="frmcadastroFilial" data-id="<?php echo($idFilial) ?>">
    <div class="filhaform">Nome<input type="text" name="txt_nome" value="<?php  echo $nome?>"></div>
    <div class="filhaform">Numero<input type="text" name="txt_numero" value=""></div>
    <div class="filhaform">Bairro<input type="text" name="txt_bairro" value=""></div>
    <div class="filhaform">CEP<input type="text" name="txt_cep" value=""></div>
    <div class="filhaform">Endereço<input type="text" name="txt_endereco" value=""></div>
    <div class="filhaform">Telefone<input type="text" name="txt_telefone" value="<?php echo $telefone ?>"></div>
    <div class="filhaform">Foto<input type="text" name="txtFoto" value=""></div>
    <div class="buttom_salvar">
      <input id="btnSalvar "type="submit" name="btnSalvar"
      <?php
      if (isset($_GET['modo'])) {
       ?>
      value="Salvar" onclick="CadastrareEdicao('#form','filialRegistro','novo','#segura','.cadastar_nova_filial','views/filial.php','views/formFilial.php','0');">

    </div>
    <?php } ?>
</form>
