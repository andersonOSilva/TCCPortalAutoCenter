
<!-- Data ultima modificação: 09/04/2018
Nome do desenvolvidor: Camila Cruz
Tela: Controle de Usuario -->
<script>
$(document).ready(function () {
  //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
  $(".visualizar").click(function(){
     $(".modalContainerUsuario2").slideToggle(2000);

  });

});
// Função que irá abrir a modal para visualização dos dados
// do usuario

function Visualizar(idItem){

  $.ajax({
    type: "GET",
    url: "views/usuario_modal_view.php",
    data: {modo:'buscarId',id:idItem},
    success: function(dados){
      $('.modalUsuario2').html(dados);
      alert(dados);
    }
});
}

function Ativar(idIten){

    var resposta;

    resposta = confirm('Deseja Ativar esse usuario?');

    if (resposta==true)
    {
    //alert(idIten);
      $.ajax({
          type: "GET",
          url: "router.php?controller=user&modo=ativar&id="+idIten,
          // data: {modo:'excluir',id:idIten},
          success: function(dados){
              $('.conteudo_prestadora').html(dados);
            //  alert (dados);
          }
      });
    }
  }


  function Desativar(idIten){

    var resposta;

    resposta = confirm('Deseja Desativar esse usuario?');

    if (resposta==true)
    {
    //alert(idIten);
      $.ajax({
          type: "GET",
          url: "router.php?controller=user&modo=Desativar&id="+idIten,
          // data: {modo:'excluir',id:idIten},
          success: function(dados){
              $('.conteudo_prestadora').html(dados);
              //alert ();
          }
      });
    }
  }

</script>
  <div class="modalContainerUsuario2">
    <div class="modalUsuario2">

    </div>
  </div>
<div class="conteudo_padrao">
  <div class="suporte">
  <!-- Segura o titulo da tela -->
  <div class="suporte_titulo">
    <!-- titulo da tela "Usuario" -->
        <div class="titulo_usuario">
          <h1>Usuario</h1>
        </div>
        <!-- Area que vai segurar todas as informações que serão apresentadas na tela -->
        <div id="conteudo_usuario">
          <!-- titulos das informações que serão apresentadas-->
              <div class="dados_user">Nome User</div>
              <div class="dados_user">Cpf</div>
              <div class="dados_user">Foto Usuario</div>
              <div class="email">Email</div>
        </div>

        <?php
          require_once('controllers/usuario_controller.php');
          require_once('models/cadUser_class.php');


          $controller_usuario = new controllerUsuario();
          $list_usuario = $controller_usuario:: Visualizar();
          $cont = 0;

          while ($cont < count($list_usuario)) {


         ?>
<!-- Area que traz as informações do banco de dados -->
        <div class="conteudo_usuario_info">

          <div class="dados_user_view"><?php echo ($list_usuario[$cont]->nomeUser) ?></div>
          <div class="dados_user_view"><?php echo ($list_usuario[$cont]->cpf) ?></div>
          <div class="dados_user_view">
            <?php
              $foto = $list_usuario[$cont]->fotoUser;

            ?>
            <img src="<?php echo substr($foto,4);   ?> "  alt="foto usuario">
          </div>
          <div class="email_view"><?php echo ($list_usuario[$cont]->email) ?></div>
          <div class="dados_user_modo">
            <!-- Icones de visualizar, desativar e notifica -->
            <div class="dados_prest_item_modo">

          <?php
              $status= $list_usuario[$cont]->status;

              echo $status;


// quando o status for 1 ele desativa
              if ($status == 0) {

           ?>
            <div class="status_prest">
                <img src="imagens/off.png" alt="off" title="Ativar user" onclick="Ativar(<?php echo ($list_usuario[$cont]->idUsuario) ?>);">
            </div>

            <?php
            // quando o status for o ele atina
          }else {
             ?>

             <div class="status_prest">
                 <img src="imagens/on.png" alt="on" title="desativar user" onclick="Desativar(<?php echo ($list_usuario[$cont]->idUsuario) ?>);">
             </div>

             <?php
           }
              ?>
        </div>

              <div class="modo_user">

                <a href="#"><img src="imagens/view.png" alt="off" title="Visualizar user" class="visualizar" onclick="Visualizar(<?php   echo($list_usuario[$cont]->idUsuario);?>)" ></a>

              </div>

              <div class="modo_user">
                <img src="imagens/notification.png" alt="off" title="Notificar user">
              </div>


          </div>

        </div>

        <?php
          $cont +=1;
          }
         ?>

    </div>
  </div>
</div>
