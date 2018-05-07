
<?php

  $id=$_GET['id'];

  //echo $id;
  require_once('../controllers/prestadora_controller.php');
  require_once('../models/cadprestadora_class.php');

  $controller_Prestadora = new controllerPrestadora();
  $listPrestadora = $controller_Prestadora ::Selecionarporid($id);


  if(isset($listPrestadora)){

?>

<div class="titulo_prestadora_modal">
  <h1>Dados da prestadora</h1>
</div>

<div class="foto_prestadora">
  <img src="<?php echo ($listPrestadora->fotoPrestadora); ?>" alt="">
</div>

<div class="nome_prestadora">
  <?php echo ($listPrestadora->nomeFantasia); ?>
</div>

<div class="status_prestadora">
  <?php
      $statusPrestadora=$listPrestadora->status;

      if ($statusPrestadora == '1') {
        echo "Prestadora Ativa";
      }else {
        echo "Prestadora não Ativa";
      }
   ?>
</div>



<div class="Filiais">
  <?php
  require_once('../controllers/prestadora_controller.php');
  require_once('../viewModel/view_Prestadora_Filial.php');

  $controller_Prestadora = new controllerPrestadora();
  $listPrestadora = $controller_Prestadora ::SelecionarFilialPrest($id);
  $cont=0;

    while ($cont < count($listPrestadora)) {

   ?>

   <div class="Conteudos_filiais_completo">
     <div class="nome_Filial">
       <div class="filial_p">
         <p><?php echo($listPrestadora[$cont]->NomePrestadora)  ?></p>
       </div>

       <div class="status_filial">
         <?php

           $statusFilial = $listPrestadora[$cont]->status;

           if ($statusFilial == "1") {
             echo "Filial Ativa";
           }else {
               echo "Filial Desativada";
           }

          ?>
       </div>
     </div>

     <div class="dados_plano">
       <div class="nome_plano">
         <?php echo ($listPrestadora[$cont]->Plano); ?>
       </div>

       <div class="descricao_plano_flial">
           <?php echo ($listPrestadora[$cont]->descricao); ?>
       </div>

       <div class="valor_plano_filial">
         <?php echo ($listPrestadora[$cont]->preco); ?>
       </div>
     </div>

     <div class="dados_filial_prestadora">

       <div class="dados_de_endereco">
         <fieldset class="fieldset-border">
           <legend class="legend-border">Localizacao</legend>

           <div class="dados_endereco_filial">
             <?php echo ("logradouro:".$listPrestadora[$cont]->logradouro); ?></br>
             <?php echo ("numero:".$listPrestadora[$cont]->numero); ?></br>
             <?php echo ("Bairro:".$listPrestadora[$cont]->bairro); ?></br>
             <?php echo ("Cep:".$listPrestadora[$cont]->cep); ?></br>
             <?php echo ("cidade:".$listPrestadora[$cont]->cidade); ?></br>
             <?php echo ("estado:".$listPrestadora[$cont]->estado); ?></br>

           </div>
        </fieldset>
       </div>

       <div class="dados_de_status">


           <fieldset class="fieldset-borderMAior">
             <legend class="legend-border">Localizacao</legend>

              <div class="receber_dados">
                <?php require 'statusFilial.php'; ?>

              </div>

          </fieldset>

       </div>

     </div>
   </div>

  <?php
  $cont+=1;
  }
   ?>
</div>



<?php



}

  ?>
