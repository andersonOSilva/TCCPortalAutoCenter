<html>
    <head>
   <link rel="stylesheet" type="text/css" href="css/styleHome.css">
   <link rel="stylesheet" type="text/css" href="css/styleMenus.css">
    </head>
    <style>
        body{
            background-image: url(imagens/10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        #conteudo_agenda_pai{
/*            background-color: bisque;*/
            height: 1200px;
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;

        }
        .conteudo_agenda_filha{
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            display: flex;

        }
        .conteudo_agenda_filha:nth-child(1){
            width: 100%;
            height: 20%;
            background-color: rgba(255,255,255,0.5);
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;


        }
        .conteudo_agenda_filha:nth-child(2){
            width: 100%;
            height: 70%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
/*            align-items: center;    */
/*            flex-direction: column;*/



        }
        .compromissos{
            background-color: brown;
            margin-left:5px;
            display: flex;
/*            align-items: center;*/
            flex-direction: column;
            /*
            margin-top: auto;
            margin-bottom: auto;
            margin-left:5px;

*/
        }


        .conteudo_agenda_filha:nth-child(1) .compromissos{
            height: 90%;
            min-width: 30%;
            align-items: center;
        }
        .conteudo_agenda_filha:nth-child(2) .compromissos{
            margin-bottom: 3px;
            margin-top: 2px;
            height: 25%;
            width: 90%;
/*            background-color: rgba(0,0,0,0.5);*/


        }
        .compromissos h1,h2,h3{
/*            background-color: aqua;*/
            margin-bottom: 5px;

        }


    </style>
    <body>

        <main class="pincipal">
            <div style="height:100px;width:100%;">
                    <?php
                        require_once 'menu.php';
                ?>
             </div>


<!--            div que segura toda a agenda-->
            <div id="conteudo_agenda_pai">


                <!-- <div class="conteudo_agenda_filha">
                    <div class="compromissos">
                        <h1>Servico</h1>
                        <h2>Dia</h2>
                        <h3>Carro</h3>
                        <h3>Estabelecimento</h3>

                    </div>


                </div> -->
<!--
                <div class="titulo">
                Visitas passadas

                </div>


-->
                <?php

                if (isset($_SESSION['idUsuario'])) {
                    $id = $_SESSION['idUsuario'];
                }

                require_once 'cms/controllers/prestadora_controller.php';
                require_once 'cms/viewModel/servico_marcado.php';

                $controller_servico = new controllerPrestadora();

                $controller_servico=$controller_servico::ListarDaview();
                $cont = 0;

                if (count($controller_servico) == 0) {
                  echo "nenhuma Visita Marcada";
                }else{

                while ($cont < count($controller_servico)) {

                ?>

                <div class="conteudo_agenda_filha">
                    <div class="compromissos">
                        <h1><?php echo $controller_servico[$cont]->dtNasc?></h1>
                        <h2><?php echo (utf8_decode($controller_servico[$cont]->nome)) ?></h2>
                        <h3><?php echo (utf8_decode($controller_servico[$cont]->filialNome)) ?></h3>
                        <h3> <?php echo $controller_servico[$cont]->filialNome ?></h3>

                    </div>


                </div>

                <?php

                $cont+=1;
              }
            }
                 ?>



            </div>

        </main>

    </body>
</html>
