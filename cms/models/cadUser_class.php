<?php

  class cadUser{
    public $nomeCompleto;
    public $email;
    public $cpf;
    public $dtNasc;
    public $nomeUser;
    public $senha;
    public $foto;
    public $idUsuario;
    public $login;
    public $fotoUser;
    public $status;





    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }

    // function de Inserir novo usuario
    public function Insert($user_dados,$url){
      $sql = "insert into tbl_usuario (nome,usuario,senha,email,dtNasc,cpf,fotoUser)
                          values ('".$user_dados->nomeCompleto."',
                                  '".$user_dados->nomeUser."',
                                  '".$user_dados->senha."',
                                  '".$user_dados->email."',
                                  '".$user_dados->dtNasc."',
                                  '".$user_dados->cpf."',
                                  '".$user_dados->foto."')";



                    //  echo $sql;

      // conexao com o banco
      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();

      if ($PDO_conex->query($sql)) {





    //echo " <script>parent.window.document.location.href = 'router.php?controller=User&modo=LoginUserAposCadastro&url=$user_dados->url&nomeUser=$user_dados->nomeUser&senha=$user_dados->senha;'<script>" ;

        //

        echo "<script>location.href='router.php?controller=User&modo=LoginUserAposCadastro&url=$url&nomeUser=$user_dados->nomeUser&senha=$user_dados->senha';</script>";
        //header("location:router.php?controller=User&modo=LoginUserAposCadastro&url=$user_dados->url&nomeUser=$user_dados->nomeUser&senha=$user_dados->senha");

      }else{
        //header("location:router.php?controller=User&modo=LoginUserAposCadastro&url=$user_dados->url&nomeUser=$user_dados->nomeUser&senha=$user_dados->senha");
        echo "<script>location.href='router.php?controller=User&modo=LoginUserAposCadastro&url=$url&nomeUser=$user_dados->nomeUser&senha=$user_dados->senha';</script>";

      }

      $conex->Desconectar();

    }

    public function LoginUser($login_user,$url){
      session_start();

      // chamando a procedure
      addslashes($sql="select * from tbl_usuario where usuario='$login_user->nomeUser' and senha='$login_user->senha'");

      echo $sql;
      // conexao com o banco e execuçao
      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();
      $PDO_conex->query($sql);

      // retorno
    //  addslashes($sql="select @_idUsuario as idUsuario;");
      $select = $PDO_conex->query($sql);
      $idUsuario = 0;

      // pegando id do retorno
      if($rs=$select->fetch(PDO::FETCH_ASSOC)){

        $idUsuario = $rs['idUsuario'];
        echo $idUsuario;

        //echo "string";

      }





      if ($idUsuario > 0) {
      //echo $idUsuario;
        //echo '1';


        $_SESSION['idUsuario'] = $idUsuario;
        header("location:".$url);

        //$sql='select * from tbl_usuario where idUsuario='.$_SESSION['idUsuario'];

        //echo $sql;



      }else {

        echo "<script>
              alert('usuario ou senha invalidos');
              window.history.go(-1);
              </script>";
      }

      $conex->Desconectar();

      // if($idUsuario < 0) {
      //   echo $idUsuario;
      //   echo '0';
      // }

    }


    public function LoginUserAposCadastro($login_user,$url){
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
        //echo $idUsuario;

      }



      $conex->Desconectar();


      if ($idUsuario > 0) {
      //  echo '1';

        $_SESSION['idUsuario'] = $idUsuario;
        header("location:".$url);

      }else {

      //  echo '0';

        //header('location:router.php?controller=loginUser&modo=buscarId&idUsuario='.$_SESSION['idUsuario']);



       header("location:".$url);

       // echo "<script>
       //        alert('Usuario ou senha invalidos');
       //
       //        </script>;";

        //echo $url;
      }


      // if($idUsuario < 0) {
      //   echo $idUsuario;
      //   echo '0';
      // }

    }

    public function selectById($dados){
      $sql='select * from tbl_usuario where idUsuario='.$dados->idUsuario;

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
      //  header("location:index.php");




      }else{
        echo "nada achado";
      }

      $conex->Desconectar();

      if (isset($usuarioAchado)) {
        //header("location:index.php");
          return $usuarioAchado;
        //  header("location:index.php");

      }

    }

    // Função de Visualizar
    public function Select(){
      $sql = "select * from tbl_usuario ORDER BY idUsuario DESC";

      $con=new Mysql_db();
      //Faz a conexão com o banco
      $pdoCon = $con->Conectar();

      //Executa o select no DB e guarda o retorno na variável select
      $select = $pdoCon->query($sql);

      $cont = 0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $list_usuario[] = new cadUser;

        $list_usuario[$cont]->idUsuario = $rs['idUsuario'];
        $list_usuario[$cont]->nomeUser = $rs['nome'];
        $list_usuario[$cont]->login = $rs['usuario'];
        $list_usuario[$cont]->cpf = $rs['cpf'];
        $list_usuario[$cont]->email = $rs['email'];
        $list_usuario[$cont]->dtNasc = $rs['dtNasc'];
        $list_usuario[$cont]->fotoUser = $rs['fotoUser'];
        $list_usuario[$cont]->status = $rs['statusUser'];

        $cont+=1;
    }
    $con->Desconectar();
    if (isset ($list_usuario)) {
      return $list_usuario;
    }
  }

  public function validarUser($dadosUser){
    $sql = "select count(*) as qtde from tbl_usuario where usuario='".$dadosUser->nomeUser."'";

    //echo $sql;
    $con=new Mysql_db();
    //Faz a conexão com o banco
    $pdoCon = $con->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
     $select = $pdoCon->query($sql);

     if($rs=$select->fetch(PDO::FETCH_ASSOC)){
       $usuarioAchado = $rs['qtde'];
     }

     if( $usuarioAchado == '1' ) {//se retornar algum resultado
         echo '1';
       } else {
         echo '0';
       }

     $con->Desconectar();
  }

  public function validarEmail($dadosUser){
    $sql = "select count(*) as qtde from tbl_usuario where email='".$dadosUser->email."'";

    //echo $sql;
    $con=new Mysql_db();
    //Faz a conexão com o banco
    $pdoCon = $con->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
     $select = $pdoCon->query($sql);

     if($rs=$select->fetch(PDO::FETCH_ASSOC)){
       $usuarioAchado = $rs['qtde'];
     }

     if( $usuarioAchado == '1' ) {//se retornar algum resultado
         echo '1';
       } else {
         echo '0';
       }

     $con->Desconectar();


  }

  public function validarCpf($dadosUser){
    $sql = "select count(*) as qtde from tbl_usuario where cpf='".$dadosUser->cpf."'";

    //echo $sql;
    $con=new Mysql_db();
    //Faz a conexão com o banco
    $pdoCon = $con->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
     $select = $pdoCon->query($sql);

     if($rs=$select->fetch(PDO::FETCH_ASSOC)){
       $usuarioAchado = $rs['qtde'];
     }

     if( $usuarioAchado == '1' ) {//se retornar algum resultado
         echo '1';
       } else {
         echo '0';
       }

     $con->Desconectar();


  }

  public function Ativacao($dadosUser){
    $sql="update tbl_usuario set statusUser = '1' where idUsuario=".$dadosUser->idUsuario;

    echo $sql;
    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();
    if ($PDO_conex->query($sql)) {

      //require_once 'views/usuario_view.php';
      echo "<script>location.href='index.php?pag=usuario';</script>";

    }else{
      echo "erro ao ativar";
    }
    $conex->Desconectar();


  }

  public function Desativar($dadosUser){
    $sql="update tbl_usuario set statusUser = '0' where idUsuario=".$dadosUser->idUsuario;

    echo $sql;
    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();
    if ($PDO_conex->query($sql)) {

      //require_once 'views/usuario_view.php';
      echo "<script>location.href='index.php?pag=usuario';</script>";

    }else{
      echo "erro ao ativar";
    }
    $conex->Desconectar();


  }

  }


 ?>
