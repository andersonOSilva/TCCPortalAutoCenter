<?php

        $idPrestadora = $_GET["id"];


        require_once('cms/controllers/controller_perfilPrestadora.php');
              //require_once('cms/viewModel/view_prestadoraPerfil.php');

              $controller_perfilPrestadora = new controllerPerfilPrestadora();

              $retornoModel = controllerPerfilPrestadora::Buscar($idPrestadora);

                $nomeFantasia=$retornoModel->nomefantasia;
                $fotoPrestadora=$retornoModel->fotoPrestadora;
                $descricao=$retornoModel->descricao;
                $telefone=$retornoModel->telefone;
                $logradouro=$retornoModel->logradouro;
                $numero=$retornoModel->numero;
                $referencia=$retornoModel->referencia;
                $cep=$retornoModel->cep;
                $cidade=$retornoModel->cidade;
                $estado=$retornoModel->estado;
                $bairro=$retornoModel->bairro;

                // echo $nomeFantasia;
                // echo $fotoPrestadora;
                // echo $descricao;
                // echo $telefone;
                // echo $logradouro;
                // echo $numero;
                // echo $referencia;
                // echo $cep;
                // echo $cidade;
                // echo $estado;
                // echo $bairro;






?>

<html>
    <head>
       <link type="text/css" href="css/stylePerfilPrestadora.css" rel="stylesheet">
       <link type="text/css" href="css/styleMenus.css" rel="stylesheet">
       <link type="text/css" href="css/styleHome.css" rel="stylesheet">
       <link type="text/css" href="css/perfilPrestadora.css" rel="stylesheet">
       <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


       <script>
      $(function () {
        $('.thumbs img').click(function () {
          var foto_filial = $('#foto_FilialPrincipal img');
          var thumbs = $(this).attr('src');
          if (foto_filial.attr('src')!== thumbs) {
            foto_filial.fadeTo('200','0', function (){
              foto_filial.attr('src', thumbs);
              foto_filial.fadeTo('150','1');
            });
            $('.thumbs img').removeClass('active');
            $(this).addClass('active')
          }
        })
      })
    </script>
    </head>

    <style>



    </style>

    <body>
        <div id="calco">
            <?php
                require_once 'menu.php';

             ?>
            </div>
        <div style="heigth:auto;max-width:1200px;margin:auto;">
        <div id="principal">

            <div id="head" >
                <div class="apresentacao">

                  <div class="NomePrestadora">
                    <h1><?php echo(utf8_decode(($retornoModel->nomefantasia)))  ?></h1>
                  </div>

               <!-- <P style="color:#fff"><?php //echo($retornoModel->nomefantasia);?></P> -->
                </div>
                <div class="apresentacao">
                     <div class="fotoPrestadora">
                         <img src="<?php echo($retornoModel->fotoPrestadora);?>" style="border-radius:100%">

                    </div>

                    <div class="descricaoPrestadora">
                      <p><?php echo(utf8_decode(($retornoModel->descricao))) ?></p>
                    </div>

                </div>
            </div>

            <div id="body">
                <div id="exibicao">


                    <div id="filiais">
                        <p> Onde estamos:</p>

                        <a href="?id=<?php echo $idPrestadora ?>&pag=matriz">
                          <div class="filial">
                              <label>Matriz</label>
                          </div>
                        </a>



                        <?php
                        require_once('cms/controllers/prestadora_controller.php');

                        $controller_perfilPrestadora = new controllerPrestadora();

                        $retornoModelFiliais = $controller_perfilPrestadora::SelecionarFilialPrestPefil($idPrestadora);
                        $cont=0;
                      // var_dump($retornoModelFiliais);

                        if (count($retornoModelFiliais)<1) {
                          echo "esta prestadora nao tem outras filiais";
                        }else {

                          while ($cont < count($retornoModelFiliais)) {

                        ?>
                        <div class="filial">
                          <label>
                            <?php echo(utf8_decode($retornoModelFiliais[$cont]->nomeFilial)) ?>
                          </label>
                        </div>


                        <?php
                        $cont+=1;
                        }
                      }
                         ?>
                    </div>


                    <div id="galeria">

                      <?php
                      switch ($pag) {
                        case 'matriz':
                              
                          break;

                        }
                        ?>

                      <article class="product_images">
                        <div id="nome_Filial">
                          <h2>Matriz</h2>
                        </div>

                          <div id="foto_FilialPrincipal">
                              <img class="img1" src='imagens/15.jpg' alt="test">
                          </div>

                          <div class="thumbs">
                            <img  class="active imgAtivaddas" src='imagens/15.jpg' alt="test">
                            <img  class=" imgAtivaddas" src='imagens/8.jpg' alt="test">
                            <img class="img1 imgAtivaddas"  src='imagens/7.jpg' alt="test">
                            <img class="img1 imgAtivaddas" src='imagens/6.jpg' alt="test">
                            <img class="img1 imgAtivaddas" src='imagens/5.jpg' alt="test">
                            <img class="img1 imgAtivaddas" src='imagens/5.jpg' alt="test">
                            <img class="img1 imgAtivaddas" src='imagens/5.jpg' alt="test">
                            <img class="img1 imgAtivaddas" src='imagens/5.jpg' alt="test">


                          </div>
                      </article>

                    </div>


                </div>





                <div id="container">
                    <div class="container_menu_sevicos">
							<div id="Servicos">
								<div class="titulo_principal_servicos">
									<h2><a href="servico01.php">Serviços</a></h2>
								</div>
									<div class="servicos_itens">
											<div class="titulo_servico">
													<div class="imagen_titulo_servico">
															<img src="imagens/Car-2-icon.png" alt="car">
													</div>
													<div class="descricao_titulo_servico">
															<p><a href="#">HIGIENIZAÇÃO DO SISTEMA DE AR CONDICIONADO</a></p>
													</div>
											</div>
											<!-- <div class="descricao_servico">
													<p>Nosso centro automotivo aplica produtos biodegradáveis, como a descarga de ozônio e solventes naturais.</p>
											</div> -->
									</div>

									<div class="servicos_itens">
											<div class="titulo_servico">
													<div class="imagen_titulo_servico">
															<img src="imagens/Car-2-icon.png" alt="car">
													</div>
													<div class="descricao_titulo_servico">
															<p><a href="#">HIGIENIZAÇÃO DO SISTEMA DE AR CONDICIONADO</a></p>
													</div>
											</div>
											<!-- <div class="descricao_servico">
													<p>Nosso centro automotivo aplica produtos biodegradáveis, como a descarga de ozônio e solventes naturais.</p>
											</div> -->
									</div>




							</div>
					</div>



                </div>
            </div>
        </div>

    </div>
    <footer>
        <?php
            require_once 'rodape.php';
            ?>
        </footer>

    </body>

</html>
