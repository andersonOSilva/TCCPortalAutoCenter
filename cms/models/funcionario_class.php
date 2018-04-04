<?php
// Cria o objeto funcionario
  class Funcionario{
    public $idFuncionario;
    public $nome;
    public $senha;
    public $usuario;
    public $cpf;
    public $salario;
    public $dtNasc;
    public $sexo;
    public $cargo;
    public $setor;
    public $dtAdimissao;
    public $idEnderecoFuncionario;
    public $idNivelAcesso;
    public $numCarteiraTrabalho;
    public $telefone;
    public $ativo;

    public function __construct(){
      require_once('bd_class.php');
    }

    //Função de login
    public function Login($_funcionario){
      session_start();
      //Script para chamar a procedure de login
      addslashes($sql="CALL loginFuncionario('$_funcionario->usuario', '$_funcionario->senha', @_idFuncionario);");

      $con=new Mysql_db();
      $pdoCon = $con->Conectar();
      //Executa o script
      $pdoCon->query($sql);

      //Script para pegar o id que retorna da Procedure
      addslashes($sql="select @_idFuncionario as idFuncionario;");
      $select = $pdoCon->query($sql);
      $idFuncionario = 0;

      if($rs=$select->fetch(PDO::FETCH_ASSOC)){

        $idFuncionario = $rs['idFuncionario'];
      }

      $con->Desconectar();

      if ($idFuncionario > 0) {
        $_SESSION['idFuncionario'] = $idFuncionario;
        header('location:index.php');
      }else {
        echo('<script> alert("Falha na autenticação!");
        window.location.href = "index.php"</script>');
      }

    }
  }
 ?>
