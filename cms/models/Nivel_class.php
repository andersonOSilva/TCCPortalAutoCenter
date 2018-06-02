<?php

  class Nivel {
    public $idNivelAcesso;
    public $descricao;
    function __construct(){
      require_once('bd_class.php');
    }

// inserir no banco
    public function InsertNivel($dados){
      $sql="insert into tbl_nivel_acesso (descricao)
      values('".$dados->descricao."')";
      // echo $sql;
      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();

      if ($PDO_conex->query($sql)) {
        // echo $sql;
      }else{
        echo "erro";
      }
  }

// selecionar o nivel
  public function selectNivel(){
    $sql = "select * from tbl_nivel_acesso order by idNivelAcesso desc;";
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();
    $select = $PDO_conex->query($sql);
    $cont =0;
    while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
      $list_Nivel[] = new Nivel;

      $list_Nivel[$cont]->idNivelAcesso=$rs['idNivelAcesso'];
      $list_Nivel[$cont]->descricao=$rs['descricao'];
      $cont+=1;
  }
  if (isset ($list_Nivel)) {
    return $list_Nivel;
  }
}
// deleta o nivel cadastrado
public function Delete($dados_controller_Nivel){
  $sql= "delete from tbl_nivel_acesso where idNivelAcesso=".$dados_controller_Nivel->idNivelAcesso;
  $conex = new Mysql_db();

  $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "sucesso";
    }else{
      echo "erro ao deletar";
    }

  $conex->Desconectar();
}
// editar o nivel
public function Editar($dados){
  $sql="update tbl_nivel_acesso set
        descricao='".$dados->descricao."'
        where idNivelAcesso=".$dados->idNivelAcesso;
        echo $sql;
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          echo "string";
        }else{
          echo "erro";
        }

        $conex->Desconectar();
}
// buscar nivel por id
public function selectNivelPorId(){
  $sql="select * from tbl_nivel_acesso where idNivelAcesso".$dados_controller_Nivel->idNivelAcesso;
  $conex = new Mysql_db();
  $PDO_conex = $conex->Conectar();
  $result = $PDO_conex->query($select);

  $count=0;
  if ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
    $list_Nivel = new Nivel;
    $list_Nivel->idNivelAcesso=$rs['idNivelAcesso'];
    $list_Nivel->descricao=$rs['descricao'];
}
if (isset ($list_Nivel)) {
  //var_dump()
  return $list_Nivel;
}

$conex->Desconectar();

  }
}
 ?>
