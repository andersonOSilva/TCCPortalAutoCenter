<?php
  $url = $_SERVER['HTTP_REFERER'];

 echo $url;
 ?>



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
       url: "router.php?controller=User&modo=novo&url=<?php echo $url ?>",
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

<div style="background:linear-gradient(orange,white,white,white,white,white);height:auto;width:300px;margin-left:450px;">
<div class="cadastro">
  <div class="fechar_cadastro">
  </div>

  <div class="titulo_login">
    <h1>Cadastre-se </h1>
  </div>



  <form id='formBody'  method="post" action="" name="FrmLoginUser" enctype="multipart/form-data"  >


      <div class="foto_user_cad">
          <img id="img" src="" alt="">
      </div>

      <div class="segura_file_prest">
        <div class="filePrest">
          <input required id="upload" type="file" name="flFotoUser" >
        </div>
      </div>

<div class="formModal">
        
    
    
      <div class="control medium" >
        <input  placeholder="Nome Completo" id="nomeUserVal" maxlength="100" required  name="txtNomeCompleto" value="" >
        <label for="title " >Nome Completo <span id="respostaNomecompleto"></span> </label>
      </div>

    <div class='control medium'>
        <input autocomplete='email' placeholder="E-mail" id="txtEmail" required type='email' maxlength="150" name="txtEmail" value="">
        <label for="title">E-mail <span id="respostaEmail"></span></label>
      </div>

      <div class='control medium'>
        <input placeholder="Cpf" id="cpf" required  type='text' name="txtCpf" value="" onkeypress="this.value = FormataCpf(event)" onpaste="return false;" maxlength="14">
        <label for="title">Cpf <span id="respostaCpf"></span></label>
      </div>

      <div class='control medium'>
        <input placeholder="Data de Nascimento" id="data" required  type='text' name="txtDtNasc" value="" onkeypress="this.value = FormataData(event)" onpaste="return false;" maxlength="10">
        <label for="title" >Data de Nascimento</label>
      </div>

      <div class='control medium'>
        <input placeholder="Nome de usuario" required id="nomeUserTXT" type='text' name="txtNomeUser" value="">
        <label for="title" >Nome de usuario <span id="respostaNomeUser"></span></label>
      </div>

      <div class='control medium'>
        <input suggested: "current-password" placeholder="Senha" maxlength="8" id="senha1" required type='password' name="txtSenha" value="">
        <label for="title">Senha</label>
      </div>

      <div class='control medium'>
        <input placeholder="Repetir senha" id="senhaRep1" maxlength="8" required  type='password' name="txtSenhaRep" value="">
        <label for="title">Repetir senha</label>
      </div>
     

</div>

    <div class="buttom_enviar_login " >
      <input id="btnLogar" type="submit" name="btnEnviar" value="Enviar" onclick="return validar()">
    </div>


  <script src="js\validarUsuario.js"></script>


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
</div>
