 <!DOCTYPE html>
<!-- nome:Antonio willian
		ultima data de edicao:22/03/2018-->

<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/styleHome.css">
		<link rel="stylesheet" type="text/css" href="css/styleMenus.css">
		<!-- <link href="css/jquery.FlowupLabels.css" rel='stylesheet' type='text/css'> -->

	   <!-- <script src="js/jquery-3.3.1.min.js"> </script>  -->
		  <script src="js/jquery7.min.js"></script>
			<script  src="js/jcarousellite.js"></script>
			<script  src="js/carrossel.js"></script>
			<script src="js/coin-slider.js"></script>
	</head>
	<body>

			<div class="principal">
					<!-- <div class="menu_info">
						<nav id="itens_menu">
							<ul>
								<li>(11) 4199-6576</li>
								<li>Avenida Paulista n° 1471</li>
							</ul>
						</nav>

					</div> -->

					<div class="menu_home">
							<div id="menu_navegacao">
								<!-- <div class="logo">
									<div class="enfeite">
											<img src="imagens/logos/" alt="">
									</div>
									<a href="#slide"><img src="imagens/logos/possivellogo2.png" alt="teste de logo" id="imgLogo"></a>
								</div> -->

								<div class="menu_ancora_home">
										<div class="menu_ancora_itens">
											<nav class="menu_ancora_itens_principal">
                      	<ul>
													<li><a class="scroll" href="#Servicos">Serviços</a></li>
													<li><a class="scroll" href="#Prestadoras">Prestadoras</a></li>
													<li><a class="scroll" href="#Produtos">Produtos</a></li>
													<li><a class="scroll" href="#CarBook">CarBook</a></li>
													<li><a class="scroll" href="#FaleConosco">Fale Conosco</a></li>
												</ul>
											</nav>

												<!-- Login -->
												<?php
														require_once 'loginEcadastro.php';

												 	?>

										</div>

										<div class="bordao">
												<p>"Se você adora o seu carro, deixe que nós cuidamos de tudo para você"</p>
										</div>
								</div>
							</div>
					</div>

					<!-- modais -->

					<?php

						require_once 'modais.php';
                       

					 ?>

					<!-- SLIDER -->
					<div class="container_slider">
							<div id="slider">
					   				<!-- <div class="barra_buscar_dados">
                        <form class="FrmBuscarDados teste" action="index.html" method="post" >
													<center>
														<input class="BarraTXTdados" placeholder="O que esta Procurando" type="text" name="txtBuscar" value="" style="margin-top:10px;" >
														<div class="segura_botao" dsdzcd >
															<input  class="btnBuscarddos" type="submit" name="btnBuscar" value=""  >
														</div>
													</center>

                        </form>

                    </div> -->

										<div class="slider_menu">

										</div>

										<div class="conteudo_slider_menu">
											<div class="espaco_menu1">

											</div>
											<div class="espaco_menu2">

												<div class="passar_carrosel_menu dominuir ">
												<a href="#" class="prev3"> <img src="imagens/voltar.png" alt=""> </a>
												</div>

												<div class="container_carrosel_menu">

														<ul>
                              <?php
                                  require_once 'cms/controllers/menus_controller.php';
                                  require_once 'cms/models/menus_class.php';

                                  $controller_menu = new controllerMenus();

                                  $listMenus=$controller_menu::Listar();
                                  $cont = 0;

                                  while ($cont < count($listMenus)) {

                               ?>
															<!-- Item menu carrosel -->
															<li>
																	<a href="<?php echo $listMenus[$cont]->link; ?>">
																		<div class="titulo_menu_carrossel">
																		<p><?php echo $listMenus[$cont]->titulo; ?></p>
																		</div>

																		<div class="descricao_menu_carrosel">
																			<p><?php echo $listMenus[$cont]->descricao; ?></p>
																		</div>
																	</a>
															</li>
                              <?php
                                 $cont+=1;
                               }
                              ?>
														</ul>


												</div>

												<div class="passar_carrosel_menu  ">
													<a href="#" class="next3"><img src="imagens/next.png" alt=""></a>
												</div>



											</div>
										</div>
							</div>


					</div>

					<!-- Menu de Serviços -->
					<div class="container_menu_sevicos">
							<div id="Servicos">
								<div class="titulo_principal_servicos">
									<h2><a href="servico.php">Serviços</a></h2>
								</div>
								<?php
									//Inclui as classes
									require_once 'cms/controllers/servico_controller.php';
									require_once 'cms/models/servicos_class.php';

									$controller_servico = new controllerServico;

									$list=$controller_servico::Listar();
									$cont = 0;
									while ($cont<count($list)) {
								 ?>

									<div class="servicos_itens">
											<div class="titulo_servico">
													<div class="imagen_titulo_servico">
															<img src="cms/<?php echo ($list[$cont]->imagem) ?>" alt="Servico">
													</div>
													<div class="descricao_titulo_servico">
															<p><a href="servico01.php"><?php echo $list[$cont]->nome; ?></a></p>
													</div>
											</div>
											<!-- <div class="descricao_servico">
													<p>Nosso centro automotivo aplica produtos biodegradáveis, como a descarga de ozônio e solventes naturais.</p>
											</div> -->
									</div>

									<?php
											$cont+=1;
										}
									 	?>



							</div>
					</div>

					<!-- Prestadoras -->
					<div class="container_menu_Prestadoras" >
							<div style="background-color:rgba(0,0,0,0.7);" >
                            <div id="Prestadoras"  >
								<div class="titulo_principal_servicos">
									<h1>Prestadoras</h1>
								</div>
								<div id="carrossel_prestadora"  >
										<div class="passar_carrosel">
												<a href="#" class="prev"> &lt; </a>
										</div>
										<div id="carrossel_prestadora_principal">

                        <ul>

														<!-- coluna do carrosel de prestadoras -->
														<li>
															<div class="flip">
																<div class="foto_prestadora">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																</div>

																<div class="foto_prestadora_fundo">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																		<h2>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</h2>
																</div>
															</div>

																<!-- <div class="descricao_prestadora">
																		<p>Histórias são efetivamente um meio de comunicação da humanidade. Criamos filmes e desenvolvemos álbuns para guardar .</p>
																</div>
																<div class="ver_mais">
																		<a href="#"> ver mais</a>
																</div> -->
														</li>

														<!-- coluna do carrosel de prestadoras -->
														<li>
															<div class="flip">
																<div class="foto_prestadora">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																</div>

																<div class="foto_prestadora_fundo">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																		<h2>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</h2>
																</div>
															</div>

																<!-- <div class="descricao_prestadora">
																		<p>Histórias são efetivamente um meio de comunicação da humanidade. Criamos filmes e desenvolvemos álbuns para guardar .</p>
																</div>
																<div class="ver_mais">
																		<a href="#"> ver mais</a>
																</div> -->
														</li>

														<!-- coluna do carrosel de prestadoras -->
														<li>
															<div class="flip">
																<div class="foto_prestadora">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																</div>

																<div class="foto_prestadora_fundo">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																		<h2>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</h2>
																</div>
															</div>

																<!-- <div class="descricao_prestadora">
																		<p>Histórias são efetivamente um meio de comunicação da humanidade. Criamos filmes e desenvolvemos álbuns para guardar .</p>
																</div>
																<div class="ver_mais">
																		<a href="#"> ver mais</a>
																</div> -->
														</li>


														<!-- coluna do carrosel de prestadoras -->
														<li>
															<div class="flip">
																<div class="foto_prestadora">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																</div>

																<div class="foto_prestadora_fundo">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																		<h2>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</h2>
																</div>
															</div>

																<!-- <div class="descricao_prestadora">
																		<p>Histórias são efetivamente um meio de comunicação da humanidade. Criamos filmes e desenvolvemos álbuns para guardar .</p>
																</div>
																<div class="ver_mais">
																		<a href="#"> ver mais</a>
																</div> -->
														</li>


														<!-- coluna do carrosel de prestadoras -->
														<li>
															<div class="flip">
																<div class="foto_prestadora">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																</div>

																<div class="foto_prestadora_fundo">
																		<img src="imagens/manutencao.jpg" alt="mecanica">
																		<h2>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</h2>
																</div>
															</div>

																<!-- <div class="descricao_prestadora">
																		<p>Histórias são efetivamente um meio de comunicação da humanidade. Criamos filmes e desenvolvemos álbuns para guardar .</p>
																</div>
																<div class="ver_mais">
																		<a href="#"> ver mais</a>
																</div> -->
														</li>

													</ul>

											</div>

												<div class="passar_carrosel ">
														<a href="#" class="next">> </a>
												</div>

										</div>

								</div>
								<div class="ver_mais_coisas">
									<a href="#">Ver mais</a>
								</div>


							</div>
  				</div>


					<!-- Produtos -->
					<div class="container_menu_Produtos">
							<div id="Produtos">
									<div class="titulo_principal_servicos">
										<h2>Produtos</h2>
									</div>
									<div id="carrossel_produtos">
											<div class="passar_carrosel">
													<a href="#" class="prev1"> &lt; </a>
											</div>
											<div id="carrossel_produtos_principal">
													<ul>
														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

														<!-- coluna do carrosel de Produtos -->
														<li >
															<a href="#">
																<div class="segura_produto">
																	<div class="foto_produto">
																			<img src="imagens/shopping.jpg" alt="mecanica">
																	</div>

																	<div class="descricao_produto" >
																			<p >
																				Notebook Positivo Intel Pentium 4GB 32GB eMMC Windows 10 Home Tela 14" Stilo Colors XC5634 Vermelho

																			</p>
																	</div>
																	<div class="valor_produto">
																			<p><span class="sifrao">R$</span> 100,00</p>
																	</div>

																</div>
																<div class="comprar_produto">
																		 Adicionar no Carrinho
																</div>
															</a>

														</li>

													</ul>
											</div>
											<div class="passar_carrosel ">
													<a href="#" class="next1"> > </a>
											</div>
									</div>
									<div class="ver_mais_coisas">
										<a href="#">Ver mais</a>
									</div>


								</div>
							</div>
					</div>

					<!-- CarBook -->
					<div class="container_menu_CarBook">
						<div style="background-color:rgba(0,0,0,0.7);" >
                        <nav id="CarBook">
								<div class="titulo_principal_servicos">
									<h1><a href="#">CarBook</a></h1>
								</div>

								<?php
									require_once 'cms/controllers/carbook_controller.php';
									require_once 'cms/models/carbook_class.php';

									$controller_carbook = new controllerCarbook();

									$listCarbook=$controller_carbook::BuscarApenasum();
									$cont = 0;

									while ($cont < count($listCarbook)) {

								 ?>

								<div class="descricao_car_book" >
<!--                                    style="background-color:rgba(255,255,255,0.5);color:black;border-radius:20px;"-->
										<p><?php echo $listCarbook[$cont]->descricao; ?></p>
								</div>

								<div class="video_carbook">
									<img src="cms/<?php echo $listCarbook[$cont]->video; ?>" alt="">
								</div>

								<?php
								$cont+=1;
							}
								 ?>

							</nav>
                        </div>
					</div>

					<!-- Fale conosco -->
					<div class="container_menu_FaleConosco">
						<div style="background-color:rgba(0,0,0,0.7);">
                        <nav id="FaleConosco">
									<form class="frmFaleconosco" action="router.php?controller=FaleConosco&modo=novo" method="post">
										<div class="titulo_principal_servicos">
											<h2>Fale Conosco</h2>
										</div>
										<div class="dados">
												<input required class="entrada_dados" placeholder="Digite o seu Nome" type="text" name="txtNome" value="">
												<input required class="entrada_dados" placeholder="Digite seu email" type="email" name="txtEmail" value="">


										</div>

										<div class="dados2">
												<textarea required class="entrada_dados2" placeholder="Mensagem" name="txtMensagen" maxlength="200" rows="8" cols="80"></textarea>
										</div>

										<div class="dados3">
												<input type="submit" name="btnEnviar" value="Enviar">
										</div>
									</form>
							</nav>
                            </div>
					</div>

					<span id="back-to-top">
							<img src="imagens/arrowtop.png" alt="voltar ao topo" title="Voltar para o topo">
					</span>

					<div id="bot">
						<div class="chat_bot">
								<img class="imag_pulsar" src="imagens/chat-alt-flat.png" alt="">


								<div class="container_bot">
										<div class="user_bot">
											<div class="segura_foto">
												<div class="foto_bot">

												</div>
											</div>

										</div>

										<div id="conteudo_bot">
												<div class="balao2">

												</div>

												<div class="balao3">

												</div>

												<div class="balao2">

												</div>

												<div class="balao2">

												</div>

												<div class="balao2">

												</div>

												<div class="balao2">

												</div>

												<div class="balao2">

												</div>
										</div>

										<div class="chat_mensagen">
													<form class="" action="index.html" method="post">

														<div class="entrada_dado_chat">
										          <input maxlength="40" placeholder="Qual sua pergunta" required type="text" name="txtpergunat" value="">
										        </div>

														<div class="buttom_enviar_mensagen">
										          <input id="btnEnviar" type="submit" name="btnEnviar" value="">
										        </div>


													</form>
										</div>
								</div>
						</div>


					</div>




					<?php
							require_once 'rodape.php';
					 ?>



			<script src="js/scroll.js" ></script>

			<!-- <script src="js/back-to-top.js" type="text/javascript"></script> -->

	</body>
</html>
