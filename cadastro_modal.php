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
</script>


<div class="cadastro">
  <div class="fechar_cadastro">
  </div>

  <div class="titulo_login">
    <h1>Cadastre-se </h1>
  </div>

  <form id='formBody' class='FlowupLabels' method="post" action="" name="FrmLoginUser">

    <div class="formModal">
      <div class="foto_user_cad">
          <img id="img" src="" alt="">
      </div>

      <div class="segura_file">
        <div class="filePost">
          <input id="upload" type="file" name="flImagenPost" >
        </div>
      </div>


      <div class='fl_wrap'>
        <label class='fl_label' for='rf_name'>Nome Completo</label>
        <input class='fl_input' type='text'  />
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>email</label>
        <input class='fl_input' type='text'/>
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>cpf</label>
        <input class='fl_input' type='text'/>
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>telefone</label>
        <input class='fl_input' type='text'/>
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>Data de Nascimento</label>
        <input class='fl_input' type='text'/>
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>nome usuario</label>
        <input class='fl_input' type='text'/>
      </div>

      <div class='fl_wrap'>
        <label class='fl_label' for='rf_email'>senha</label>
        <input class='fl_input' type='text'/>
      </div>
    </div>


    <div class="buttom_enviar">
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
  <script src='js/jquery.FlowupLabels.js'></script>
  <script src='js/main.js'></script>
  <script  src="js/preview.js"></script>

</div>
