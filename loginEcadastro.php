<script>
    $(document).ready(function () {


      //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
      $(".novo").click(function(){
         $(".modalContainer").slideToggle(2000);

      });

      //Efeito para abrir a div Container com timer de 2 segundos (Novo Registro)
        $(".editar").click(function(){
           $(".modalContainer").fadeIn(2000);

        });

        $(".novo_cadastro").click(function(){
           $(".modalContainer_cadastro").slideToggle(2000);

        });



    });


    function escolha(){
        $.ajax({
            type: "POST",
            url: "login_modal.php",
            success: function(dados){
                $('.modal').html(dados);
            }
        });
    }

    function cadastro(){
        $.ajax({
            type: "POST",
            url: "cadastro_modal.php",
            success: function(dados){
                $('.modal_cadastro').html(dados);
            }
        });
    }

</script>

<?php
session_start();
if (isset($_GET['out'])) {
  session_destroy();
  header('location:index.php');
} else if (isset($_SESSION['idUsuario'])){

  require_once("cms/controllers/controller_cadUser.php");
  require_once("cms/models/cadUser_class.php");
  $controller_cadUser= new controllerCadUser();
  $return=$controller_cadUser::Buscar($_SESSION['idUsuario']);
?>

<div class="log">

  <div class="foto_user_login">
    <img src="<?php echo $return->foto ?>" alt="djfjff">
  </div>


  <div class="segura_menu_info">
    <div class="menu_user">
      <div class="info_nome_user">
        <h2><?php echo $return->nomeUser?></h2>
      </div>

      <div class="item_info">
          <a href="#">Minha conta</a>
      </div>

      <div class="item_info">
          <a href="#">Meus Pedidos</a>
      </div>

      <div class="item_info">
          <a href="#">Agenda</a>
      </div>

      <div class="item_info">
          <a href="?out=1">Sair</a>
      </div>
    </div>

  </div>



</div>

<div class="caixa_de_ferramenta">
  <img src="imagens/caixadeFerramentas.png" alt="caixa de ferramentas">
</div>


<?php
}else {

  ?>

<div class="login">
    <p><a href="#" class="novo" onclick="escolha();">Entre</a> <a href="#" class="novo_cadastro" onclick="cadastro();">ou cadastre-se</a>
    </p>
</div>

<?php
}
 ?>
