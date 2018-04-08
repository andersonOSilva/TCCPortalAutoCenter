<script>
$(document).ready(function() {

  $(".fechar").click(function() {
    //$(".modalContainer").fadeOut();
  $(".modalContainer").slideToggle(500);
  });


  $("#novo_cadastro_link").click(function(){
    $(".modalContainer").slideToggle(500);
     $(".modalContainer_cadastro").slideToggle(2000);

  });
});


$('input[name="FlgPontua"]').change(function () {
    if ($('input[name="FlgPontua"]:checked').val() === "user") {
        $('.tipo_user').show();
    } else {
        $('.tipo_prest').show();
    }
});
</script>


<div class="escolha">
  <div class="fechar">
  </div>

  <div class="tipo_login">

    <input type="radio" name="FlgPontua" value="user" checked>
    <input type="radio" name="FlgPontua" value="prest">
  </div>

  <div class="titulo_login">
    <h1>Já tem Cadastro?</h1>
  </div>
  <form id='formBody' class='FlowupLabels' method="post" action="router.php?controller=loginUser&modo=loginUser" name="FrmLoginUser">

    <div class='fl_wrap'>
      <label class='fl_label' for='rf_name'>Usuario</label>
      <input class='fl_input' type='text' value="" name="txtUser">
    </div>

    <div class='fl_wrap'>
      <label class='fl_label' for='rf_email'>Senha</label>
      <input class='fl_input' type='password' value="" name="txtSenha">
    </div>



    <div class="manter_conectado">
      <!-- <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op1">
      <label for="stay-connected" class="">Continuar conectado</label> -->
      <a href="#">Esqueci minha senha</a>
    </div>

    <div class="buttom_enviar_login">
      <input id="btnLogar" type="submit" name="btnEnviar" value="Logar">
    </div>


  </form>

  <div class="termos_de_uso">
    <p>Ao entrar, você concorda com nossos <a href="#">termos de uso</a>, condições, <a href="#">política de privacidade</a> e que tem pelo menos 18 anos de idade</p>
  </div>

  <div class="novo_por_aqui">
      <div class="titulo_porAqui">
          <p>Novo por aqui?</p>
      </div>

      <div  id="novo_cadastro_link">
        <a href="#" onclick="cadastro();">Cadastre-se agora</a>
      </div>
  </div>


<!-- Load the JS -->
<script src='js/jquery.FlowupLabels.js'></script>
<script src='js/main.js'></script>


</div>
