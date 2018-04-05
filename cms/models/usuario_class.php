<?php
/
class Usuario
{
  public $idUsuario;
  public $nomeUser;
  public $login;
  public $cpf;
  public $email;
  public $dtNasc;

  public function __construct(){
    require_once('bd_class.php');
  }
  // Função de Visualizar
  public function Select(){
    $sql = "SELECT * FROM tbl_usuario ORDER BY idUsuario DESC";

    $con=new Mysql_db();
    //Faz a conexão com o banco
    $pdoCon = $con->Conectar();

    //Executa o select no DB e guarda o retorno na variável select
    $select = $pdoCon->query($sql);

    $indice = 0;

    while($rs=$select->fetch(PDO::FETCH_ASSOC)){
      $list_usuario[] = new Usuario;

      $list_usuario[$indice]->idUsuario = $rs['idUsuario'];
      $list_usuario[$indice]->nomeUser = $rs['nome'];
      $list_usuario[$indice]->login = $rs['usuario'];
      $list_usuario[$indice]->cpf = $rs['cpf'];
      $list_usuario[$indice]->email = $rs['email'];
      $list_usuario[$indice]->dtNasc = $rs

      $indice+=1;
  }
}

 ?>
