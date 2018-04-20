<?php
$nome_pessoa= null;
$cpf= null;
$imagem = null;
$email = null;
<<<<<<< HEAD
$usuario = null;
$dtNasc = null;
// $fotoUser;
$placa = null;
$idVeiculo = null;
 $ano = null;
 $ano= null;
 $cor = null;
 $modelo = null;
 $idModelo = null;
 $marca = null;
 $idMarca = null;

  //  echo $sql;

=======
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
$id=$_GET['id'];




<<<<<<< HEAD
    // echo $id;
=======
    echo $id;
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6

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
<<<<<<< HEAD

=======
      
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
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
<<<<<<< HEAD
              <?php echo ($retornaModel->email) ?>
=======
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>CPF</p>
            <div class="exibir">
<<<<<<< HEAD
              <?php echo ($retornaModel->cpf) ?>
=======
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
            </div>
          </div>
          <div class="conteudo_informacoes">
            <p>Modelo</p>
            <div class="exibir">
<<<<<<< HEAD
              <?php echo ($retornaModel->modelo) ?>
=======
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
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
<<<<<<< HEAD

=======
>>>>>>> a85b0cc4aa154f3435ef58716e9573ce324c66d6
            </div>
          </div>
        </div>
      </div>

    </div>
  <!-- </div>
</div> -->
