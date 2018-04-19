<?php
class carroeUsuario{
  public $idUsuario;
  public $nome_pessoa;
  public $usuario;
  public $cpf;
  public $email;
  public $dtNasc;
  public $fotoUser;
  public $status;
  public $placa;
  public $idVeiculo;
  public $ano;
  public $cor;
  public $modelo;
  public $idModelo;
  public $marca;
  public $idMarca;

  public function __construct(){
    require_once('../models/bd_class.php');
  }

  public function SelectById($dadosUser){
    $sql = "select * from tbl_usuario where idUsuario=".$dadosUser->idUsuario;
    echo $sql;
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();
    $select = $PDO_conex->query($sql);

    if($rs=$select->fetch(PDO::FETCH_ASSOC)){
      $usuarioModal = new carroeUsuario();

      $usuarioModal->nome_pessoa = $rs['nome'];
      $usuarioModal->email = $rs['email'];
      $usuarioAchado->cpf = $rs['cpf'];
      $usuarioAchado->foto = $rs['fotoUser'];
  }
  else{
      echo "nada achado";
    }

    $conex->Desconectar();

    if (isset($usuarioModal)) {
        return $usuarioModal;
    }

  }

  // Função de Visualizar
  public function Selecionarporid($id){
    $sql = "select * from tbl_usuario where idUsuario=".$id;
    echo $sql;
    $con=new Mysql_db();
    //Faz a conexão com o banco
    $pdoCon = $con->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $pdoCon->query($sql);



    if($rs=$select->fetch(PDO::FETCH_ASSOC)){
      $list_usuario = new carroeUsuario;

      $list_usuario->idUsuario = $rs['idUsuario'];
      $list_usuario->nome_pessoa = $rs['nome'];
      $list_usuario->login = $rs['usuario'];
      $list_usuario->cpf = $rs['cpf'];
      $list_usuario->email = $rs['email'];
      $list_usuario->dtNasc = $rs['dtNasc'];
      $list_usuario->fotoUser = $rs['fotoUser'];
      $list_usuario->status = $rs['status'];
  }
  $con->Desconectar();
  if (isset ($list_usuario)) {
  // var_dump($list_usuario);
    return $list_usuario;
  }
}
}


 ?>
