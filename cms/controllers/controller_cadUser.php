<?php

  class controllerCadUser{

    public function Novo(){

      require_once 'cms/modulo.php';

      $user = new cadUser();
      $user ->nomeCompleto = $_POST['txtNomeCompleto'];
      $user ->email = $_POST['txtEmail'];
      $user ->cpf = $_POST['txtCpf'];
      $dtNascRe = $_POST['txtDtNasc'];

      $dtNasc = implode("-",array_reverse(explode("/",$dtNascRe)));

      $user ->dtNasc = $dtNasc;

      $user ->nomeUser = $_POST['txtNomeUser'];
      $user ->senha = $_POST['txtSenha'];

      // iniciado variaveis de upload da foto
      $diretorio_completo=Null;
      $MovUpload=false;
      $imagem_file=Null;

      //pegando a foto

      if (!empty($_FILES['flFotoUser']['name'])) {
         $imagem_file = true;
         $diretorio_completo=salvarFoto($_FILES['flFotoUser'],'cms/imagemUser');
         if ($diretorio_completo == "Erro") {

               $MovUpload=false;
         }else {
           $MovUpload=true;
         }
       }else {
         $imagem_file = false;
       }


      $user ->foto =$diretorio_completo;


      $user::Insert($user);


    }

    // Login de usuario do site
    public function LoginUser(){

      $user = new cadUser();
      $user ->nomeUser = $_POST['txtUser'];
      $user ->senha = $_POST['txtSenha'];

      $user::LoginUser($user);
    }


    // buscar usuario por id especifico
    public function Buscar(){
      $idUsuario=$_SESSION['idUsuario'];

      $user = new cadUser();
      $user->idUsuario=$idUsuario;
      return $user::selectById($user);
    }

    // validacao de usuário

    public function validarUser(){
      $nomeUser = $_GET['nomeUser'];
      $user = new cadUser();
      $user->nomeUser=$nomeUser;
      return $user::validarUser($user);
    }

    public function validarEmail(){
      $emailUser = $_GET['emailUser'];
      $user = new cadUser();
      $user->email=$emailUser;
      return $user::validarEmail($user);
    }

    public function validarCpf(){
      $cpfUser = $_GET['CpfUser'];
      $user = new cadUser();
      $user->cpf=$cpfUser;
      return $user::validarCpf($user);
    }

  }




 ?>
