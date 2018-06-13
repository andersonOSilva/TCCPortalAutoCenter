
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Prestadoras</title>
      <link rel="stylesheet" type="text/css" href="css/styleHome.css">
      <link rel="stylesheet" type="text/css" href="css/produtos.css">
      <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
      <link rel="stylesheet" type="text/css" href="css/styleServico01.css">
  </head>
  <body>
    <div class="principal">

      <div class="menu" style="border-bottom:5px solid #eca023;">

    <?php
        require_once 'menu.php';
     ?>

</div>

      <!-- div principal que vai sustentar  toda a area de imagem e descricao em destaque -->

        <div class="container_servico" style="margin-bottom:50px;">
        <!-- div que suporta imagem e descricao em destaque-->
        <div id="texto_servico">
              <h1>Prestadoras</h1>
            </div>
            <div id="barraPesquisa">
           <div id='posiciona'>
                <div class="hexagono">
                <div class="imagem1">
                            <div class="imagem2"><img src="imagens/luuuuupa.svg"></div>
                        </div>
                    </div>
                   </div>
           </div>
        <!--suporta imagens e descricoes segundarias/ avaliacao e botao -->
        <div class="container_servico_suporte" style="max-width:1400px;margin-botoom:10px;">
          <!-- segura as imagens e area de descricao  PRESTADORA-->


     <?php
           require_once('cms/controllers/prestadora_controller.php');
           require_once('cms/models/cadprestadora_class.php');

          $controller_Prestadora = new controllerPrestadora();
          $listPrestadora = $controller_Prestadora ::Listar();
          $cont=0;

          while($cont < count($listPrestadora)){?>

            <div class="suporteSecundaria">
<!--            <div style="background-color:rgba(0,0,0,0.1)">-->
            <div class="areaImagemSecundaria">
                <img src="<?php echo ($listPrestadora[$cont]->fotoPrestadora); ?>" alt="servico" >
            </div>
            <div class="areaDescricaoSecundaria">
                <div class="titulo_Prestadora_servico">
                    <h2><?php echo ($listPrestadora[$cont]->nomeFantasia); ?></h2>
                </div>

                <div class="descricao_prestadora">
                    <p> <?php echo ($listPrestadora[$cont]->descricao);?>
                     </p>
                </div>
                <div class="classificacao">
                <ul>
                  <li class="color"></li>
                  <li class="color"></li>
                  <li class="color"></li>
                  <li class="colornot"></li>
                  <li class="colornot"></li>
                </ul>
            </div>

            </div>

            <div class="botao">
              <a href="perfilPrestadora.php?id=<?php echo($listPrestadora[$cont]->id); ?>">Ver mais</a>
            </div>

          </div>
            <?php $cont+=1;}?>



        </div>
      </div>
      <div class="rodape">
        <?php
            require_once "rodape.php";
         ?>
</div>
  </div>
</body>
</html>
