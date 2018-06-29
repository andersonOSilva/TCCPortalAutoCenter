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
@session_start();
if (isset($_GET['out'])) {
  session_destroy();
  $url = $_SERVER['HTTP_REFERER'];

  header('location:'.$url);
} else if (isset($_SESSION['idUsuario'])){

  require_once("cms/controllers/controller_cadUser.php");
  require_once("cms/models/cadUser_class.php");
  $controller_cadUser= new controllerCadUser();
  $return=$controller_cadUser::Buscar($_SESSION['idUsuario']);

  require_once 'userMenu.php';

}elseif (isset($_SESSION['idPrestadora'])) {
  require_once('cms/controllers/prestadora_controller.php');
  require_once('cms/models/cadprestadora_class.php');
  $controller_Prestadora= new controllerPrestadora();
  $return=$controller_Prestadora::BuscarPrestadoraPorID($_SESSION['idPrestadora']);

  require_once 'menuPrestadora.php';

?>




<?php
}else {

  ?>

<div class="login">

    <a href="#" class="novo" onclick="escolha();"><p id="entre">Entre</p></a> <a href="#" class="novo_cadastro" onclick="cadastro();"><p>ou cadastre-se</p></a>




</div>

<?php
}
 ?>
