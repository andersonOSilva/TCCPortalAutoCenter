<?php
$nome_pessoa= null;
$cpf= null;
$imagem = null;
$email = null;
$id=$_GET['id'];




    echo $id;

 ?>
<!-- Modal  -->
<!-- <div class="modalContainerUsuario2">
  <div class="modalUsuario2"> -->

    <div class="conteudo_padrao" >
      <div class="visualizar">
        <div class="titulo">
          Visualizar Usuário
        </div>

        <?php
            require_once('../controllers/controller_cadUser.php');
            require_once('../viewModel/view_carroeUsuario.php');

            $controller_usuario = new carroeUsuario();
            $retornaModel = $controller_usuario::Selecionarporid($id);



            if (isset($retornaModel)) {

         ?>
        <div id="conteudo_usuario_detalhes">
          <div class="conteudo_informacoes">
            <p>Nome Proprietário</p>
            <div class="exibir">
               <?php echo ($retornaModel->nome_pessoa) ?>
            </div>
          </div>

          <?php
      
}

           ?>
          <div class="conteudo_informacoes">
            <p>Usuario</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Imagem</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Email</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>CPF</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Modelo</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Ano</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p >Carro</p>
              <div class="exibir" >
              </div>
          </div>
          <div class="conteudo_informacoes">
              <p>Marca</p>
            <div class="exibir">
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Cor</p>
            <div class="exibir">
            </div>
          </div>
        </div>
      </div>

    </div>
  <!-- </div>
</div> -->
