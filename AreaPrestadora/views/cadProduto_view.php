<!--
Autor:Luana Fernandes
Descrição: Tela de cadastro de produtos
Data:19/05/2018
 -->

 <?php
  if (isset($_GET['idFilial'])) {
  $idFilial=$_GET['idFilial'];
  }

  ?>

<div class="container_produto">
    <div class="conteudo_produto">
      <form action="router.php?controller=produto&modo=novo&idFilial=<?php echo $idFilial ?>" method="post" id="formBody" enctype="multipart/form-data">
          <div class="segura_fotos">
              <!-- Imagem 0 -->
              <div class="suporte_foto">
                 <div class="filePost">
                   <input id="upload" type="file" name="flImagenProduto">
                </div>
                <div class="segura_preview">
                  <div class="preview_img">
                    <img id="img" src="" alt="">
                  </div>
                </div>

              </div>
                  <!-- Imagem 1 -->
              <div class="suporte_foto">
                 <div class="filePost">
                   <input id="upload" type="file" name="flImagenProduto1">
                </div>
                <div class="segura_preview">
                  <div class="preview_img">
                    <img id="img" src="" alt="">
                  </div>
                </div>

              </div>
                  <!-- Imagem 2 -->
              <div class="suporte_foto">
                 <div class="filePost">
                   <input id="upload" type="file" name="flImagenProduto2">
                </div>
                <div class="segura_preview">
                  <div class="preview_img">
                    <img id="img" src="" alt="">
                  </div>
                </div>

              </div>
                  <!-- Imagem 3 -->
              <div class="suporte_foto">
                 <div class="filePost">
                   <input id="upload" type="file" name="flImagenProduto3">
                </div>
                <div class="segura_preview">
                  <div class="preview_img">
                    <img id="img" src="" alt="">
                  </div>
                </div>

              </div>

          </div>

          <div class="dado_nome">Nome:
            <input type="text" name="txt_nome" maxlength="80" rows="8" cols="70"
             placeholder="Nome do produto" value="">
          </div>

          <div class="segura_input">
              <div class="dado_preco">Preço:
                <input type="text" name="txt_preco" maxlength="80" rows="8" cols="70"
                 placeholder="Preço do produto" value="">
              </div>

              <div class="dado_preco">Marca:
                <input type="text" name="txt_marca" maxlength="80" rows="8" cols="70"
                 placeholder="Marca do produto" value="">
              </div>

              <div class="dado_preco">Tipo:
                <input type="text" name="txt_tipo" maxlength="80" rows="8" cols="70"
                 placeholder="Tipo do produto" value="">
              </div>

              <div class="dado_preco">Modelo:
                <input type="text" name="txt_modelo" maxlength="80" rows="8" cols="70"
                 placeholder="Modelo do produto" value="">
              </div>
          </div>

          <div class="segura_input">
              <div class="dado_preco">Durabilidade:
                <input type="text" name="txt_dura" maxlength="80" rows="8" cols="70"
                 placeholder="durabilidade do produto" value="">
              </div>

              <div class="dado_preco">Data de Fabricação:
                <input type="date" name="dt_fabrica" maxlength="80" rows="8" cols="70"
                 placeholder="Data de fabricação do produto" value="">
              </div>

              <div class="dado_preco">Garantia:
                <input type="text" name="txt_garante" maxlength="80" rows="8" cols="70"
                 placeholder="Garantia do produto" value="">
              </div>

              <div class="dado_preco">Fabricante:
                <input type="text" name="txt_fabricante" maxlength="80" rows="8" cols="70"
                 placeholder="Fabricante do produto" value="">
              </div>
          </div>

          <select class="sub_categoria" name="subcategoria">
            <option selected="selected">seleione uma sub categoria</option>
            <?php
              require_once('controller/produto_controller.php');
              require_once('models/produto_class.php');

              $controller_produto = new controllerProduto();
              $listSubCategoria=$controller_produto::Categoria();

              $cont=0;
              while ($cont < count($listSubCategoria)) {
                ?>

              <option value='<?php echo ($listSubCategoria[$cont]->idSubcategoria) ?>'>
              <?php echo ($listSubCategoria[$cont]->descricao) ?></option>

              <?php
                $cont+=1;
              }
               ?>
          </select>

          <div class="obs">
            <textarea name="txt_obs" maxlength="50" rows="8" cols="50" placeholder="observações do produto"></textarea>
          </div>

          <div class="buttom_enviar">
            <input id="btnEnviar" type="submit" name="btnEnvia0" value="Salvar">
          </div>
      </form>
    </div>


    <!-- lista de produto -->

    <div class="listarCadastros">
      <div class="titulo_produto">
        <div class="conteudo_tbl_produto">
          <p>Imagem</p>
        </div>
        <div class="conteudo_tbl_produto">
          <p>Nome</p>
        </div>

        <div class="conteudo_tbl_produto">
          <p>Modo</p>
        </div>
      </div>
      <?php
          require_once 'controller/produto_controller.php';
          require_once 'models/produto_class.php';

          $controller_produto = new controllerProduto();

          $listProduto=$controller_produto::Listar();
          $cont = 0;

          while ($cont < count($listProduto)) {

       ?>
      <div class="conteudoProduto">
          <div class="item_produto">
            <div class="imgProduto">
              <img src="<?php echo $listProduto[$cont]->foto; ?>" alt="">
            </div>
          </div>

          <div class="item_produto">
            <div class="nomeProduto">
                <?php echo $listProduto[$cont]->nome; ?>
            </div>
          </div>

          <div class="item_produto">
              <div class="segura_modo">
                <div class="modo">
                  <a href="#">
                    <img src="imagens/edit.png" alt="">
                  </a>
                    |
                    <a href="#">
                      <img src="imagens/delet.png" alt="">
                    </a>

                </div>
              </div>
          </div>
      </div>
      <?php
         $cont+=1;
       }
      ?>
    </div>
</div>

<script src="js/preview.js"></script>
