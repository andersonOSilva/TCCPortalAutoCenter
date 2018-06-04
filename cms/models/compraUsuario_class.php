<?php
class compraUser{


  public $idPedido;
  public $idProduto;
  public $idUsuario;
  public $quantidade;


  // construtor da class de conexao
  public  function __construct(){
    require_once('bd_class.php');
  }

  // function de Inserir pedido
  public function Insert($dados){
    $sql = "insert into tbl_pedido (idProduto, idUsuario, quantidade)
                        values ('".$dados->idProduto."',
                                '".$dados->idUsuario."',
                                '".$dados->quantidade."')";



                  echo $sql;

    // conexao com o banco
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
      echo "</br> sucesso";
    }else{
      echo "</br> nao sucesso";
    }

    $conex->Desconectar();

  }


}



 ?>
