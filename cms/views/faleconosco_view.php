<?php
$nome=Null;
$email=Null;
$mensagen=Null;

 ?>

    <div class="conteudo_padrao">
        <div class="tbl_consulta">
              <div class="Titulo">
                  <ul>
                    <li>Nome</li>
                    <li>Email</li>
                    <li>Mensagem</li>
                    <li></li>
                  </ul>
              </div>

              <?php
                  require_once('controllers/controller_faleConosco.php');
                  require_once('models/mensagem_class.php');

                  $controller_mensagen = new controllerMensagen();
                  $listFaleConosco = $controller_mensagen::Selecionar();
                  $cont=0;

                  while ($cont < count($listFaleConosco)) {
               ?>

              <div class=" conteudo">
                  <ul>
                    <li><?php echo ($listFaleConosco[$cont]->nome); ?></li>
                    <li><?php echo ($listFaleConosco[$cont]->email); ?></li>
                    <li><?php echo ($listFaleConosco[$cont]->mensagen); ?></li>
                    <li>
                      <div class="segura_modo">

                        <div class="modo">
                          <a href="router.php?controller=faleconosco&modo=excluir&id=<?php
                          echo($listFaleConosco[$cont]->id) ?>" onclick="return confirm('deseja realmente excluir');"> <img src="imagens/delet.png" alt="edit"></a>
                        </div>
                      </div>

                    </li>
                  </ul>
              </div>
              <?php
                    $cont+=1;
                  }
               ?>
          </div>
        </div>
