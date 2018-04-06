<!DOCTYPE html>
<!-- nome:Antonio willian
		ultima data de edicao:22/03/2018-->

<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/styleHome.css">
		<link rel="stylesheet" type="text/css" href="css/styleMenus.css">
		<link href="css/jquery.FlowupLabels.css" rel='stylesheet' type='text/css'>

	   <!-- <script src="js/jquery-3.3.1.min.js"> </script>  -->
		  <script src="js/jquery7.min.js"></script>
			<script  src="js/jcarousellite.js"></script>
			<script  src="js/carrossel.js"></script>
			<script src="js/coin-slider.js"></script>
	</head>
	<body>
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
			<div class="principal">
					<!-- <div class="menu_info">
						<nav id="itens_menu">
							<ul>
								<li>(11) 4199-6576</li>
								<li>Avenida Paulista n° 1471</li>
							</ul>
						</nav>

					</div> -->

					<div class="menu">
							<div id="menu_navegacao">
								<div class="logo">
									<div class="enfeite">
											<img src="imagens/logos/" alt="">
									</div>
									<a href="#slide"><img src="imagens/logos/possivellogo2.png" alt="teste de logo" id="imgLogo"></a>
								</div>

								<div class="menu_ancora">
										<div class="menu_ancora_itens">
											<nav class="menu_ancora_itens_principal">
<!--												<div id="new_Player">

				<div  id="social">

					<a href="https://forums.warframe.com/topic/795965-octavia%E2%80%99s-anthem-hotfix-2046/" style="text-decoration:none"><div id="pc">Pc</div></a>
					<a href="https://forums.warframe.com/topic/797230-ps4-octavias-anthem-2045-hotfixes/" style="text-decoration:none"><div id="ps4">Ps4</div></a>
					<a href="https://forums.warframe.com/topic/797229-xb1-octavias-anthem-2045-hotfixes/" style="text-decoration:none"><div id="xbox">Xbox</div></a>

				</div>

				<div id="texto"><br><br><br><br><br><br><div id="texto_nome">Lotus</div> Voce nao está sozinho tenno</div>


			</div>-->
                                                <ul>
													<li><a class="scroll" href="#Servicos">Serviços</a></li>
													<li><a class="scroll" href="#Prestadoras">Prestadoras</a></li>
													<li><a class="scroll" href="#Produtos">Produtos</a></li>
													<li><a class="scroll" href="#CarBook">CarBook</a></li>
													<li><a class="scroll" href="#FaleConosco">Fale Conosco</a></li>
												</ul>
											</nav>

												<div class="login">
														<p><a href="#" class="novo" onclick="escolha();">Entre</a> <a href="#" class="novo_cadastro" onclick="cadastro();">ou cadastre-se</a>
														</p>
												</div>
												<div class="mais">
														<img src="imagens/menuIcon.png" alt="menu mais">
														<div class="mais_menu">
<!--<div class="itens">shazam
                                <div class="seguratudao">
                                <a href="main.php?click=ctd&id_sub_categoria=<?php echo($rssub['id_sub_categoria']); ?>"><div class="sub">
                                                    <?php
                                                        $idsub=$rssub['id_sub_categoria'];

                                                        echo($rssub['subcategoria']);  ?>
                                                    </div></a>
                                <div class="sub">

                                </div><div class="sub">

                                </div><div class="sub">

                                </div>
                            </div>
                <a href="home.php?click=ctd&id_subcategoria=<?php echo($rsConsulta['id_subcategoria']); ?>">
</a>                                                            -->
															<div id="mantemomenuvisivel">
                                                                <ul>
																<li style=" border-radius: 10px 10px 0px 0px;"><a href="sobre.php">Sobre</a></li>
																<li><a href="#">Prestadoras</a></li>
																<li><a href="carBook.php">CarBook</a></li>
																<li><a href="#">Produtos</a></li>
																<li style=" border-radius: 0px 0px 10px 10px;"><a href="homeForum.php">Forum</a></li>
															</ul>

                                                            </div>
														</div>

												</div>
										</div>

										<div class="bordao">
												<p>"Se você adora o seu carro, deixe que nós cuidamos de tudo para você"</p>
										</div>
								</div>
							</div>
					</div>

					<!-- Modal -->

					<div class="modalContainer">
						<div class="modal">

						</div>
					</div>

					<div class="modalContainer_cadastro">
						<div class="modal_cadastro">

						</div>
					</div>


					<!-- SLIDER -->
					<div class="container_slider">
							<div id="slider">
					   				<div class="barra_buscar_dados">
                        <form class="FrmBuscarDados" action="index.html" method="post" style="margin-top:200px;" >
                            <input class="BarraTXTdados" placeholder="O que esta Procurando" type="text" name="txtBuscar" value="" style="margin-top:10px;" >

                        </form>
                        <div class="segura_botao" dsdzcd >
                          <input  class="btnBuscarddos" type="submit" name="btnBuscar" value=""  >
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
									<div class="servicos_itens">
											<div class="titulo_servico">
													<div class="imagen_titulo_servico">
															<img src="imagens/Car-2-icon.png" alt="car">
													</div>
													<div class="descricao_titulo_servico">
															<p><a href="servico01.php">HIGIENIZAÇÃO DO SISTEMA DE AR CONDICIONADO</a></p>
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
															<p><a href="servico01.php">HIGIENIZAÇÃO DO SISTEMA DE AR CONDICIONADO</a></p>
													</div>
											</div>
											<!-- <div class="descricao_servico">
													<p>Nosso centro automotivo aplica produtos biodegradáveis, como a descarga de ozônio e solventes naturais.</p>
											</div> -->
									</div>




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

								<div class="descricao_car_book" >
<!--                                    style="background-color:rgba(255,255,255,0.5);color:black;border-radius:20px;"-->
										<p >Quando se deseja garantir uma formatação homogênea e uniforme em todas as páginas de um site as folhas de estilo em cascata (Cascading Style Sheets) facilitam muito o trabalho de criação.

Folha de estilo em cascata é um mecanismo simples para adicionar estilos (exemplos: fontes, cores, espaçamentos) em documentos Web.

Ou seja, CSS é um padrão de formatação (Web Standards) para páginas que permite ir além das limitações impostas pelo HTML.

Web Standards é um conjunto de normas, diretrizes, recomendações, notas, artigos, tutoriais e afins de caráter técnico, e destinados a orientar fabricantes, desenvolvedores e projetistas para o uso de práticas que possibilitem a criação de uma Web acessível a todos, independentemente dos dispositivos usados ou de suas necessidades especiais.</p>
								</div>

								<div class="video_carbook">
										<img src="imagens/video.png" alt="">
								</div>

							</nav>
                        </div>
					</div>

					<!-- Fale conosco -->
					<div class="container_menu_FaleConosco">
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
