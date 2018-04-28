<?php
 require_once 'cms/viewModel/view_prestadoraPerfil.php';
                
            
                  $retornoModel = perfilPrestadora::select();
                  $nomefantasia=$retornoModel->nomefantasia;
                    $fotoprestadora=$retornoModel->fotoPrestadora;
                    $descricao=$retornoModel->descricao;
                    $telefone=$retornoModel->telefone;
                    $logradouro=$retornoModel->logradouro;
                    $numero=$retornoModel->numero;
                    $referencia=$retornoModel->referencia;
                    $cep=$retornoModel->cep;
                    $cidade=$retornoModel->cidade;
                    $estado=$retornoModel->estado;
                    $bairro=$retornoModel->bairro;
            
            echo($nomefantasia);


?><html>
    <head>
       <link type="text/css" href="css/stylePerfilPrestadora.css" rel="stylesheet">
       <link type="text/css" href="css/styleMenus.css" rel="stylesheet">
       <link type="text/css" href="css/styleHome.css" rel="stylesheet">
    
    </head>
    
    <style>
        #principal{
            width: 100%;
            height: auto;
            background-color: darkgray;
            
        }
        #head{
            width: 100%;
            height: 300px;
            background-color: darkgray;
            display: flex;
            flex-direction: column;
            
        }
        #head .apresentacao:nth-child(1){
            height: 50%;
            width: 100%;
            background-color: black;
/*            padding-top: 10px;*/
        }
        #head .apresentacao:nth-child(2){
            height: 50%;
            width: 100%;
            background-color: dimgray;
/*            z-index: 0;*/
        }
        .apresentacao .foto:nth-child(1){
            height: 100%;
            width: 15%;
            float: left;
            margin-top: -6%;
/*            overflow: hidden;*/
            background-color: aliceblue;
            border-radius: 100%;
        }
        #calco{
            height: 10%;
            width: auto;
        }
        #body{
            background-color: black;
            width: 100%;
            height: auto;
            
        }
        #exibicao{
            width: 100%;
            height: 60%;
            background-color: bisque;
            display: flex;
            justify-content: center;
            padding-top: 0.3%;
        
            
            
        }
        
        #exibicao #filiais:nth-child(1){
            background-color: blueviolet;
            width: 20%;
            height: 300px;
            margin-right: 1%;
/*            padding-top: 1%;*/
            overflow-x: auto;
            overflow-y:auto ;
        }
        #filiais p{
            color: aliceblue;
            background-color: aqua;
            width: 95%;
            height: 15%;
            margin-top: -1px;
            padding-left: 10px;
            padding-top: 5px;
        }
        .filial{
            background-color: coral;
            margin-bottom: 1px;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
            height: 15%;
            
        }
        #exibicao #galeria:nth-child(2){
            width: 50%;
            height: 80%;
            background-color: cadetblue;
            display: flex;
            flex-wrap: wrap;
            align-content: space-between;
            justify-content: center;

        }
        .foto{
            height: 20%;
            width: 15%;
            background-color: aliceblue;
            margin: 10px;
        }
        #galeria .foto:nth-child(1){
            height: 90%;
            width: 90%;
            background-color: aquamarine;
            
        }
        /* menu servicos */

.container_menu_sevicos{
  width: 100%;
  height: auto;
  min-height: 380px;
  border-top: 5px solid #f09000;
   /* background-color: #13436B; */
   background-color: black;
/*   opacity: 0.9;*/
   color: #fff;
}


#Servicos{
  max-width: 1200px;
  height: auto;
  min-height: 280px;
  margin: auto;
  /* background-color: blue; */
}

.servicos_itens{
  width: 287px;
  height: 100px;
  /* background-color: red; */
  margin-left: 10px;
  margin-top: 10px;
  float: left;

}

.titulo_principal_servicos{
  width: 100%;
  height: 50px;
  padding: 0px;
  margin: 0px;
  color: #fff;
  /*background-color: #f43f2f;*/
  /*border: 3px solid gold;*/
}


.titulo_principal_servicos h1{
  /*padding-top: 40px;*/
  margin: 0px;
  font-size: 3em;
}

.titulo_principal_servicos h2{
  padding: 0px;
  margin: 0px;
  font-size: 3em;
  text-align: left;
}

.titulo_servico{
  width: 100%;
  height: 80px;
  /* background-color: purple; */
}

.imagen_titulo_servico{
  width: 87px;
  height: 100%;
  /* background-color: blue; */
  float: left;

}

.imagen_titulo_servico img{
  width: 80px;
  height: 100%;

}

.descricao_titulo_servico{
  width: 200px;
  height: 100%;
  /* background-color: yellow; */
  float: left;
}

.descricao_titulo_servico p{
  font-weight: bold;
  text-align:left;

}

.descricao_titulo_servico p a{
  text-decoration:none;
  color:#fff;
  font-size: 20px;
}

.descricao_titulo_servico p a:hover{
  color: #BBA649;
}

.descricao_servico{
    width: 200px;
    height: 120px;
    /* background-color: gray; */
    margin-left: 80px;
}

.descricao_servico p{
  margin: 0px;
  padding-top: 0px;
  text-align: left;
}
        footer{
            width: 100%;
            height: auto;
        }
        .classificacao{
  width: 180px;
  height: 35px;
  /*background-color: #696969;*/
  margin: auto;

}

.classificacao ul{
  padding: 0px;
  margin: 0px;
  list-style: none;
}

.classificacao ul li{
  width: 27px;
  height: 27px;
  border-radius: 100px;

  float: left;
  margin-left: 5px;
  border: 2px solid #f09900;

}

.color{

  background-color: #000;
}
.colornot{

  background-color: #ccc;
}

    
        
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
                    
                
                </div>
                <div class="apresentacao">
                     <div class="foto">
                         <img src="">
                
                    </div>
                </div>
            </div>
            <div id="body">
                <div id="exibicao">
                    <div id="filiais">
                        <p> Onde estamos:</p>
                        <div class="filial">filial1</div>
                        <div class="filial">filial2</div>
                        <div class="filial">filial3</div>
                        <div class="filial">filial3</div>
                    </div>
                    <div id="galeria">
                       <div class="foto"></div>
                       <div class="foto"></div>
                       <div class="foto"></div>
                       <div class="foto"></div>
                       <div class="foto"></div>
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