<?php

class Usuario{

  public $idUsuario;
  public $nomeUser;
  public $login;
  public $cpf;
  public $email;
  public $dtNasc;
  public $fotoUser;
  public $status;

  public function __construct(){
    require_once('bd_class.php');
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
      $list_usuario[] = new Usuario;

      $list_usuario[$cont]->idUsuario = $rs['idUsuario'];
      $list_usuario[$cont]->nomeUser = $rs['nome'];
      $list_usuario[$cont]->login = $rs['usuario'];
      $list_usuario[$cont]->cpf = $rs['cpf'];
      $list_usuario[$cont]->email = $rs['email'];
      $list_usuario[$cont]->dtNasc = $rs['dtNasc'];
      $list_usuario[$cont]->fotoUser = $rs['fotoUser'];
      $list_usuario[$cont]->status = $rs['status'];

      $cont+=1;
  }
  $con->Desconectar();
  if (isset ($list_usuario)) {
    return $list_usuario;
  }
}
}
 ?>
