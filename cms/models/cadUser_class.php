<?php

  class cadUser{
    public $nomeCompleto;
    public $email;
    public $cpf;
    public $dtNasc;
    public $nomeUser;
    public $senha;
    public $foto;

    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }

    // function de Inserir novo usuario
    public function Insert($user_dados){
      $sql = "insert into tbl_usuario (nome,usuario,senha,email,dtNasc,cpf,fotoUser)
                          values ('".$user_dados->nomeCompleto."',
                                  '".$user_dados->nomeUser."',
                                  '".$user_dados->senha."',
                                  '".$user_dados->email."',
                                  '".$user_dados->dtNasc."',
                                  '".$user_dados->cpf."',
                                  '".$user_dados->foto."')";

                      //echo $sql;

      // conexao com o banco
      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();

      if ($PDO_conex->query($sql)) {
         echo "<script>location.reload();</script>";
      }else{
        echo "erro ao conectar";
      }

      $conex->Desconectar();

    }

    public function LoginUser($login_user){
      session_start();

      // chamando a procedure
      addslashes($sql="CALL loginUser('$login_user->nomeUser','$login_user->senha',@_idUsuario);");

      // conexao com o banco e execuçao
      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();
      $PDO_conex->query($sql);

      // retorno
      addslashes($sql="select @_idUsuario as idUsuario;");
      $select = $PDO_conex->query($sql);
      $idUsuario = 0;

      // pegando id do retorno
      if($rs=$select->fetch(PDO::FETCH_ASSOC)){

        $idUsuario = $rs['idUsuario'];
        echo $idUsuario;

      }


      $conex->Desconectar();


      if ($idUsuario > 0) {
        $_SESSION['idUsuario'] = $idUsuario;
        //header('location:router.php?controller=loginUser&modo=buscarId&idUsuario='.$_SESSION['idUsuario']);
        header("location:index.php");
      }else {
        echo('<script> alert("Usuario ou senha invalidos");
        window.location.href = "index.php"</script>');
      }

    }

    public function selectById(){
      $sql='select * from tbl_usuario where idUsuario='.$_SESSION['idUsuario'];

      //echo $sql;

      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();
      $select = $PDO_conex->query($sql);


      if($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $usuarioAchado = new cadUser();

        $usuarioAchado->nomeCompleto = $rs['nome'];
        $usuarioAchado->nomeUser = $rs['usuario'];
        $usuarioAchado->senha = $rs['senha'];
        $usuarioAchado->email = $rs['email'];
        $usuarioAchado->dtNasc = implode("/",array_reverse(explode("-",$rs['dtNasc'])));


        $usuarioAchado->cpf = $rs['cpf'];
        $usuarioAchado->foto = $rs['fotoUser'];

        //var_dump($usuarioAchado);
        //header("location:index.php");




      }else{
        echo "nada achado";
      }

      $conex->Desconectar();

      if (isset($usuarioAchado)) {
          return $usuarioAchado;
      }

    }



  }


 ?>
