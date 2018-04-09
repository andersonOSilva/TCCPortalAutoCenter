<script>
$(document).ready(function() {

  $(".fechar_cadastro").click(function() {
  $(".modalContainer_cadastro").slideToggle(500);
  });


  $("#login_cad_link").click(function(){
    $(".modalContainer_cadastro").slideToggle(500);
     $(".modalContainer").slideToggle(2000);

  });
});


// cadastro assicrono

$("#formBody").submit(function(event){


   //anula a ação do submit tradicional "botao" ou F5
    event.preventDefault();

    $.ajax({
       type: "POST",
       url: "router.php?controller=User&modo=novo",
       //alert (url);
       data: new FormData($("#formBody")[0]),
       cache:false,
       contentType:false,
       processData:false,
       async:true,
       success: function(dados){
            $('.modal_cadastro').html(dados);
            //alert(dados);

       }
   });

});



</script>
  <!-- <script src="js/jquery-3.3.1.min.js"></script> -->


<script src="js\formatarCalendario.js"></script>
<script src="js\validacaoCpf.js"></script>


<div class="cadastro">
  <div class="fechar_cadastro">
  </div>

  <div class="titulo_login">
    <h1>Cadastre-se </h1>
  </div>

  <form id='formBody'  method="post" action="" name="FrmLoginUser" enctype="multipart/form-data">

    <div class="formModal">
      <div class="foto_user_cad">
          <img id="img" src="" alt="">
      </div>

      <div class="segura_file_prest">
        <div class="filePrest">
          <input required id="upload" type="file" name="flFotoUser" >
        </div>
      </div>


      <div class='fl_wrap'>
        <label class='fl_label' for='rf_name'>Nome Completo</label>
        <input maxlength="14" required class='fl_input' type='text' name="txtNomeCompleto" value="" >
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>email</label>
        <input required class='fl_input' type='text' name="txtEmail" value="">
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>cpf</label>
        <input id="cpf" required class='fl_input' type='text' name="txtCpf" value="" onkeypress="this.value = FormataCpf(event)" onpaste="return false;" maxlength="14">
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>Data de Nascimento</label>
        <input id="data" required class='fl_input' type='text' name="txtDtNasc" value="" onkeypress="this.value = FormataData(event)" onpaste="return false;" maxlength="10">


        	<!-- <input required value="" type="text" size="10" maxlength="10" onKeyDown="return(FormataData(this,event));" onBlur="javascript:if(!validaCampoData(this)){alert('Data inválida')};" name="txtDtNasc"/> -->
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>nome usuario</label>
        <input required class='fl_input' type='text' name="txtNomeUser" value="">
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>senha</label>
        <input required class='fl_input' type='password' name="txtSenha" value="">
      </div>
    </div>


    <div class="buttom_enviar_login">
      <input id="btnLogar" type="submit" name="btnEnviar" value="Enviar">
    </div>


  </form>

  <div class="termos_de_uso">
    <p>Ao entrar, você concorda com nossos <a href="#">termos de uso</a>, condições, <a href="#">política de privacidade</a> e que tem pelo menos 18 anos de idade</p>
  </div>

  <div class="novo_por_aqui">
      <div class="titulo_porAqui">
          <p>Já tem cadastro??</p>
      </div>

      <div  id="login_cad_link">
        <a href="#" onclick="escolha();">Entrar com usuário cadastrado</a>
      </div>
  </div>


  <!-- Load the JS -->
  <script  src="js/preview.js"></script>

  <!-- <script src='js/jquery.FlowupLabels.js'></script>
  <script src='js/main.js'></script> -->


</div>
