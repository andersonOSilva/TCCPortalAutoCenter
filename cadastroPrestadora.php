<?php
    $pag='etapa1';
if(isset($_GET['pag'])){
    $pag=$_GET['pag'];
    
}
    

?>


<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Serviços</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/styleCadPrestadora.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
  </head>
  <body>
    <div class="principal" style="background-color:aqua;margin-top:400px;">
        <div style="heigth:100px;">
        </div>

      <?php
          require_once 'menu.php';
       
            
        
        ?>
        <div  class="formconteudo">
            <?php
            switch($pag){
                    
                    case 'etapa1':
                        require_once 'cadastroPrestadoraEtapa1.php';
                        break;
                    case 'endereco':
                        require_once 'cadastroEndereco.php';
                        break;
                    
            }
            
            ?>
            
          </div>

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->
      
          
          
      </div>
          <?php   require_once 'rodape.php'; ?>
      
    </body>
</html>
