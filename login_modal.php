<?php
$url = $_SERVER['HTTP_REFERER'];
// $haystack = $url1;
// $needle   = '/';
//
// $pos= strripos($haystack, $needle);
//
// $url=substr($url1,$pos)

  ?>


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







      // $("#formBody").submit(function(event){
      //   //alert('teste');
      //
      //
      //    //anula a ação do submit tradicional "botao" ou F5
      //     event.preventDefault();
      //
      //     $.ajax({
      //        type: "POST",
      //        url: "router.php?controller=loginUser&modo=loginUser&url=<?php echo $url ?>",
      //        //alert (url);
      //        data: new FormData($("#formBody")[0]),
      //        cache:false,
      //        contentType:false,
      //        processData:false,
      //        async:true,
      //        success: function(dados){
      //             $('.escolha').html(dados);
      //             //alert(dados);
      //
      //        }
      //    });
      //
      // });



});


// VERIFICACAO





</script>


<div class="escolha">
  <div class="fechar">
  </div>
  <div class="titulo_login">
    <h1>Já tem Cadastro?</h1>
  </div>

  <div class="tipo_login">

    <div class="tipo">
      <input type="radio" name="FlgPontua" id="tipoUser"  >
      <label for="r1"><span></span>Usuario</label>
      <div class="check"></div>
    </div>

    <div class="tipo">
      <input type="radio" name="FlgPontua" id="tipoPrest">
      <label for="r1"><span></span>Prestadora</label>

      <div class="check"></div>
    </div>
  </div>



  <form id='formBody'  method="post" action="" name="FrmLoginUser2">


    <div id="respostaDeuser">

    </div>


    <div id="tipoLoginPhp">

    </div>






    <div class="manter_conectado">
      <!-- <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op1">
      <label for="stay-connected" class="">Continuar conectado</label> -->
      <a href="#">Esqueci minha senha</a>
    </div>

    <div class="buttom_enviar_login">
      <input id="btnLogarUser" type="button" name="btnEnviar" value="Logar" onclick="teste();">
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
        <a href="#" onclick="cadastro();" >Cadastre-se agora</a>
      </div>
  </div>
<!-- Load the JS -->
<script src='js/login.js'></script>

<script>
    function testeeeeeeeeee(){

      //var senha=FrmLoginUser2.txtSenha.value;
      alert(usuario);
    }

    function teste() {
      var usuario = document.getElementById('idtxtUser').value; //   txtUser.value;
      var senha = document.getElementById('idtxtSenha').value; //   txtUser.value;

      alert(usuario);
      console.log(usuario);

      var resposta = "Usuario ou senha invalidos";

      alert("ta aqui");
      $.get('router.php?controller=loginUser&modo=loginUser&user='+usuario+'&senha='+senha,function(data){
          // //$('#resultado').html(data);
          // alert(data);
          //
          if (data == 0) {
              $('#respostaDeuser').html(resposta);
            }
          else {
            location.href='index.php' ;
          }

        //  alert(data);

        });


    }



</script>

</div>
