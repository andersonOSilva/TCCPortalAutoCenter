<!DOCTYPE html>
<!-- nome do autor:Camils Cruz
		ultima data de edicao:20/03/2018 -->
<?php
$pag='historia';
if(isset($_GET['pag']))
{
$pag=$_GET['pag'];
}

?>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Sobre Nózes</title>
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleSobre.css">
    <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      
      
      <script src="js/jquery7.min.js"></script>

  </head>
  <body>
    <!---A div Principal vai suporta todas as informações que tiver na página -->
    
    <div class="principal">
      <?php
          require_once 'menu.php';
       ?>
        
      <!-- Conteudo historia da empresa -->
      <div class="container_conteudo_hitoria">
        
          
            <!-- titulo historia da empresa s-->
          <?php
          require_once 'hexagonos/hexagonosobre.php';
          
          ?>
        
          
        <section id="conteudo">
<!--
            <a href="#texto_historia" class="scroll">
                <div class="itemMenusobre" style="border-radius:0px 10px 0px 0px;">Historia da empresa</div></a>
            <a href="#texto_missao" class="scroll"><div class="itemMenusobre">Missão</div></a>
            <a href="#titulo_visao" class="scroll"><div class="itemMenusobre">Visão</div></a>
            <a href="#titulo_valores" class="scroll"><div class="itemMenusobre" style="border-radius:0px 0px 10px 10px;">Valores</div></a>
-->
            <?php
                switch($pag){
                        case'historia':
                            require_once'sobre/historia.php'; 
                        break;
                        case'missao':
                            require_once'sobre/missao.php';
                        break;
                        case'visao':
                            require_once'sobre/visao.php';
                        break;
                        case'valores':
                            require_once'sobre/valores.php';
                        break;
                }
            ?>
         
        
        </section>
            
              
          
                
        </div>
          <?php
              require_once 'rodape.php';
           ?>
    </div>
      
      <script src="js/scrollSobre.js" ></script>
  </body>
</html>
