<div id="carrossel_planos">
    <div class="passar_carrosel">
        <a href="#" class="prev"> &lt; </a>
    </div>
    <div id="carrossel_planos_principal">
        <ul>

          <?php

              require_once('controllers/controller_planos.php');
              require_once('models/plano_class.php');

              $controller_plano = new controllerPlano();
              $listPlanos = $controller_plano :: Listar();
              $cont=0;

              while ($cont < count($listPlanos)) {

        ?>



          <li>
              <div class="img_plano">
                  <img src="<?php echo ($listPlanos[$cont]->foto) ?>" alt="plano">
              </div>

              <div class="valor">
                <p> <small>R$</small> <big><?php echo ($listPlanos[$cont]->preco) ?></big>  </p>
              </div>

              <div class="descricao_plano">
                <p><?php echo ($listPlanos[$cont]->descricao) ?></p>
              </div>

              <div class="segura_btnResponder">
                <div class="btnResponder">

                  <a href="#" class="editar" onclick="Editar(<?php echo ($listPlanos[$cont]->id) ?>)">Editar</a>


                  <!-- <a href="router.php?controller=planos&modo=buscarId&id=<?php
                   echo ($listPlanos[$cont]->id) ?>&pag=plano">Editar</a> -->
                </div>

                <div class="btnResponder">

                  <a href="#" class="excluir" onclick="Excluir(<?php echo ($listPlanos[$cont]->id) ?>)"> Excluir </a>


                  <!-- <a href="router.php?controller=planos&modo=excluir&id=<?php
               echo ($listPlanos[$cont]->id) ?>" onclick="return confirm('deseja realmente excluir');" >Excluir</a> -->


                </div>
              </div>

          </li>

          <?php
            $cont+=1;
        }
           ?>




        </ul>
    </div>
    <div class="passar_carrosel ">
        <a href="#" class="next">> </a>
    </div>


</div>


<!-- Import das bibliotecas JQuery -->

<script  src="js/jcarousellite.js"></script>
<script  src="js/carrossel.js"></script>
