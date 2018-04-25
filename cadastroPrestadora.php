<?php

require_once('cms/controllers/prestadora_controller.php');
require_once('cms/controllers/prestadora_controller_endereco.php');




?>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/styleCadPrestadora.css">
      <link rel="stylesheet" type="text/css" href="css/styleCadPrestadoraPlanos.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      


      <script src="js/jquery7.min.js"></script>
  </head>
  <body>
    <div class="principal">

      <?php
          require_once 'menu.php';
       ?>

        <div class="formconteudo">


        <?php
//         if($pag=="cadastro"){
//                    
//
//      } else if($pag=="Endereco" ){
//        require_once 'cadastroEndereco.php';
//        }
            require_once 'cadprestadora/cadastroPrestadoraEtapa1.php';
//            require_once 'cadprestadora/cadastroPrestadoraPlano.php';
      if ($Prestadora->sucesso != Null){
        echo("view diz -amigo estou aqui");



      }else{
        echo("view diz -...");
      }


        ?>

        </div>
        <?php
            require_once 'rodape.php';
        ?>

      </div>
    </body>
</html>
