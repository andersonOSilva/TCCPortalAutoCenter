<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {


      $(".alert").click(function(){
         swal("OPSSS!", "Realize o login como usuario", "warning");

      });


} -->

</script>
<?php
session_start();
if (isset($_SESSION['idUsuario'])) {
  $idUsuario=$_SESSION['idUsuario'];
  //echo $idUsuario;
}

if (isset($_GET['idservico'])) {
  $idservico=$_GET['idservico'];
}
 ?>

<div class="spmPagina">
  <h1>filiais que prestam esse servico</h1>




  <?php

  //echo $idUsuario;


  require_once('cms/controllers/prestadora_controller.php');
  //  require_once('controllers/prestadora_controller_endereco.php');
  $controller_servico = new controllerPrestadora;

  $list=$controller_servico::selecionarTudoDeServicoComEndereco($idservico);
  $cont=0;

  // filial Matriz
  //$list_matriz=$controller_servico::selecionarMatriz($idservico);





//var_dump($list);
if (count($list) != 0) {
  while ($cont<count($list)) {
   ?>
   <form class="" action="router.php?controller=servicoPrestadora&modo=salvarAgenda&idUser=<?php echo $idUsuario ?>" method="post">

   <input type="radio" name="rdofiliais" value="<?php echo $list[$cont]->idFilialServico ?>"><?php echo $list[$cont]->Nomefilial ?><br>
   <div class="detalhesFiliais">
     Rua: <?php echo $list[$cont]->logradouro ?></br>
     N°: <?php echo $list[$cont]->numero ?></br>
     Bairro: <?php echo $list[$cont]->bairro ?></br>
     Cidade:<?php echo $list[$cont]->nomeCidade ?>-<?php echo $list[$cont]->sigla ?></br>
     Cep: <?php echo $list[$cont]->cep ?></br>
   </div>

   <input type="date" name="txtData" value="" required>
   <!-- <input type="submit" name="BtnSlavar" value="MarcaVisita"> -->

   <input type="submit" name="BtnSalvarAgenda" value="Marca Visita">

 </form>

   <?php
   $cont+=1;
 }

}else {
  echo "Nada encontrado";
}
   ?>



</div>
