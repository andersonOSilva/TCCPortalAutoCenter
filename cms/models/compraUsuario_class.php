<?php
class compraUser{


  public $idPedido;
  public $idProduto;
  public $idUsuario;
  public $quantidade;
  public $idStatus;
  public $data;
  public $idEnderecoUsuario;


  // construtor da class de conexao
  public  function __construct(){
    require_once('bd_class.php');
  }

  // function de Inserir pedido
  public function Insert($dados){
    $sql = "insert into tbl_pedido (idProduto, idUsuario, quantidade,idStatus,data,idEnderecoUsuario)
                        values ('".$dados->idProduto."',
                                '".$dados->idUsuario."',
                                '".$dados->quantidade."','1',CURDATE(),'1')";



                //echo $sql;

    // conexao com o banco
    $conex = new Mysql_db();
    $PDO_conex = $conex->Conectar();

    if ($PDO_conex->query($sql)) {
    //  echo "</br> sucesso";

      if (isset($_SESSION['idUsuario'])) {
        $idUser = $_SESSION['idUsuario'];

        session_destroy();
        @session_start();

        $_SESSION['idUsuario'] = $idUser;



      }
    }

    header("location:pagamento.php");

    $conex->Desconectar();

  }


}



 ?>
