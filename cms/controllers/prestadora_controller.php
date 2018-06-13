<?php

class controllerPrestadora{
    public function Inserir(){

      require_once('cms/modulo.php');
     $Prestadora = new Prestadora();
     $Prestadora->login=$_POST['txtlogin'];
     $Prestadora->senha=$_POST['txtsenha'];
     $Prestadora->email=$_POST['txtemail'];
     $Prestadora->cnpj=$_POST['txtcnpj'];
     $Prestadora->razaoSocial=$_POST['txtrazaosocial'];
     $Prestadora->nomefantasia=$_POST['txtnomefantasia'];
     $Prestadora->telefone=$_POST['txttelefone'];
     $Prestadora->descricao=$_POST['txtdescricao'];

    // var_dump($Prestadora);
      // $Prestadora->imagem;
      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      // Pegando a Foto

      if (!empty($_FILES['fle_imagem']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['fle_imagem'],'cms/imagenPlano');
         if ($diretorio_completo == "Erro") {
             echo "<script>
                 alert('arquivo nao movido');
                 window.history.go(-1);
                 </script>";
               $MovUpload=false;
         }else {
           $MovUpload=true;
         }
       }else {
         $imagem_file = false;
       }

       $Prestadora->fotoPrestadora = $diretorio_completo;
       $Prestadora::Insert($Prestadora);



//          if ($Prestadora->$IDdaPrestadora != Null){
//            echo("controller diz - amigo estou aqui");
//              header('../../cadPrestadora/cadastroPrestadora.php?pag=Endereco');
//
//
//        }else{
//          echo("controller diz -voce falhou miseravelmente");
//
//        }
    }




    //Luana instanciou a class
    public function Listar(){

      $Prestadora = new Prestadora;
      return $Prestadora::Select();

    }

    public function Buscar(){
      $idPrestadora = $_GET["id"];


      $Prestadora = new Prestadora();
      //Carrefa o id do registro na classe contatos
      $Prestadora->idPrestadora = $idPrestadora;

      $Prestadora = $Prestadora::SelectByID($idPrestadora);

      require_once('index.php');
    }



    public function Editar(){

      require_once('modulo.php');
      $Prestadora = new Prestadora;
      $Prestadora->nome = $_POST['txt_nome'];
      $Prestadora->descricao = $_POST['txt_descricao'];
      $Prestadora->idPrestadora=$_GET['id'];

      // iniciado variaveis
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;
      $foto="vavavavav";

      // Pegando a Foto

      if (!empty($_FILES['fle_imagem']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['fle_imagem'],'imagenPrestadora');
         if ($diretorio_completo == "Erro") {
             echo "<script>
                 alert('arquivo nao movido');
                 window.history.go(-1);
                 </script>";
               $MovUpload=false;
         }else {
           $MovUpload=true;
         }
       }else {
         $imagem_file = false;
       }

       if($imagem_file == true && $MovUpload==true){
         $foto=$diretorio_completo;
       }else{
         $foto="nada";
       }

       $Prestadora->imagem = $foto;
       $Prestadora::Update($Prestadora);
    }

    public function Excluir(){
      $Prestadora = new Prestadora();
      //Carrefa o id do registro na classe contatos
      $Prestadora->idPrestadora=$_GET['id'];
      //Chama o metodo de excluir na model
      $Prestadora::Delete($Prestadora);
    }

    // Login de prestadora do site
    public function LoginPrestadora(){
      //$url = $_GET['url'];
      $Prestadora = new Prestadora();
      $cnpj = $_GET['cnpj'];
      $senha = $_GET['senha'];

      $Prestadora ->cnpj =$cnpj;
      $Prestadora ->senha = $senha;


      $Prestadora::LoginPrestadora($Prestadora);
    }

    // buscar prestadora por id especifico
    public function BuscarPrestadoraPorID(){
      $idPrestadora=$_SESSION['idPrestadora'];
      $Prestadora = new Prestadora();
      $Prestadora->IDdaPrestadora=$idPrestadora;
      return $Prestadora::selectById($Prestadora);
    }

    //  buscar por id CMS
    public function Selecionarporid($id){
      $idPrestadora=$id;
       echo $idPrestadora;

      $Prestadora = new Prestadora();
      $Prestadora->IDdaPrestadora=$idPrestadora;
      return $Prestadora::Selecionarporid($Prestadora);
    }

    public function SelecionarFilialPrest($id){
      $idPrestadora=$id;
       //echo $idPrestadora;
       require_once('../viewModel/view_Prestadora_Filial.php');
      $Prestadora = new Prestadora_Filial();
      $Prestadora->idPrestadora=$idPrestadora;
      return $Prestadora::selecionarTudo($Prestadora);
    }

    public function SelecionarFilialPrestPefil($id){
      $idPrestadora=$id;
       //echo $idPrestadora;
       require_once('cms/viewModel/view_prestadoraPerfil.php');
      $Prestadora = new perfilPrestadora();
      $Prestadora->idPrestadora=$idPrestadora;
      return $Prestadora::selecionarTudo($Prestadora);
    }

    // function desativar os servicos
      public function desativarBeneficilServico(){
        require_once("models/filial_class.php");
        $ativacao = new filial();

        $ativacao->idFilial=$_GET['id'];
        $ativacao::desativarBeneficilServico($ativacao);
      }

      // function desativar beneficio de produtos
        public function desativarBeneficilProduto(){
          require_once("models/filial_class.php");
          $ativacao = new filial();

          $ativacao->idFilial=$_GET['id'];
          $ativacao::desativarBeneficilProduto($ativacao);
        }

        // function desativar beneficio da home
          public function desativarBeneficilHome(){
            require_once("models/filial_class.php");
            $ativacao = new filial();

            $ativacao->idFilial=$_GET['id'];
            $ativacao::desativarBeneficilHome($ativacao);
          }

          // function desativar beneficio de aparecer na pagina de Servicos
            public function desativarBeneficilPagServico(){
              require_once("models/filial_class.php");
              $ativacao = new filial();

              $ativacao->idFilial=$_GET['id'];
              $ativacao::desativarBeneficilPagServico($ativacao);
            }

            // function desativar beneficio de aparecer na pagina de produtos
              public function desativarBeneficilPagProdutos(){
                require_once("models/filial_class.php");
                $ativacao = new filial();

                $ativacao->idFilial=$_GET['id'];
                $ativacao::desativarBeneficilPagProdutos($ativacao);
              }

              // ATIVAÇÂO

              // function ativar os servicos
                public function ativarBeneficilServico(){
                  require_once("models/filial_class.php");
                  $ativacao = new filial();

                  $ativacao->idFilial=$_GET['id'];
                  $ativacao::ativarBeneficilServico($ativacao);
                }

                // function ativar beneficio de produtos
                public function ativarBeneficilProduto(){
                    require_once("models/filial_class.php");
                    $ativacao = new filial();

                    $ativacao->idFilial=$_GET['id'];
                    $ativacao::ativarBeneficilProduto($ativacao);
                }

                // function ativar beneficio da home
                public function ativarBeneficilHome(){
                require_once("models/filial_class.php");
                $ativacao = new filial();

                $ativacao->idFilial=$_GET['id'];
                $ativacao::ativarBeneficilHome($ativacao);
                }

                // function ativar beneficio de aparecer na pagina de Servicos
                public function ativarBeneficilPagServico(){
                require_once("models/filial_class.php");
                $ativacao = new filial();

                $ativacao->idFilial=$_GET['id'];
                $ativacao::ativarBeneficilPagServico($ativacao);
                }

                // function ativar beneficio de aparecer na pagina de produtos
                public function ativarBeneficilPagProdutos(){
                  require_once("models/filial_class.php");
                  $ativacao = new filial();

                  $ativacao->idFilial=$_GET['id'];
                  $ativacao::ativarBeneficilPagProdutos($ativacao);
                }

                // selecionar Filiais

                public function SelecionarFilialPorID(){
                  $idPrestadora=$_SESSION['idPrestadora'];
                  require_once("models/filial_class.php");

                  $Prestadora = new filial();
                  $Prestadora->idPrestadora=$idPrestadora;
                  return $Prestadora::SelecionarFilialPorID($Prestadora);
                }

    // selecionar servico por prestadora

    public function ListarTodosServicos($dados){
      require_once('cms/viewModel/view_Prestadora_Filial_Servico.php');
      $Prestadora = new Sevico_Filial();
      $idServico = $dados;
      $Prestadora->idServico=$idServico;
      return $Prestadora::selecionarTudoDeServico($Prestadora);
    }

    // selecionar servico por prestadora com servico

    public function salvarServicoVisita(){
      require_once('cms/viewModel/view_Prestadora_Filial_Servico.php');
      $Prestadora = new Sevico_Filial();
      //$idServico = $dados;
      $txtfiliais = $_POST['rdofiliais'];
      //echo $txtfiliais."</br>";
      //$txtfiliais = $_POST['rdofiliais'];
      $txtdata = $_POST['txtData'];
    //  echo $txtdata."</br>";
      $idUser=$_GET['idUser'];
    //  echo $idUser."</br>";
      //$idServico=$_GET['idServico'];

      //$Prestadora->idServico=$idServico;

      $Prestadora->idFilialServico=$txtfiliais;
      $Prestadora->idUsuario=$idUser;
      $Prestadora->dtVisita=$txtdata;

      //var_dump($Prestadora);
      // $Prestadora->idServico=$idServico;
       $Prestadora::inserirVisita($Prestadora);
    }

    // selecionar servico por prestadora com servico

    public function selecionarTudoDeServicoComEndereco($dados){
      require_once('cms/viewModel/view_Prestadora_Filial_Servico.php');
      $Prestadora = new Sevico_Filial();
      $idServico = $dados;
      //$txtControle = $_POST['txtControle'];
      //$idUser=$_GET['idUser'];
      //$Prestadora->idFilial=$txtControle;
      //$Prestadora->idUser=$idUser;

      //var_dump($Prestadora);
       $Prestadora->idServico=$idServico;
      return $Prestadora::selecionarTudoDeServicoComEndereco($Prestadora);
    }

    public function ListarDaview(){
      require_once 'cms/viewModel/servico_marcado.php';
      $controller= new servico_marcado();

    //  $idUser = $_SESSION['idUsuario'];

      //echo $idUser;

    //  if (isset($_SESSION('idUsuario'))) {
        $controller->$idUsuario= $_SESSION['idUsuario'];
    //  }

      $controller::SelecionarMarcadas($controller);


    }



    }

 ?>
