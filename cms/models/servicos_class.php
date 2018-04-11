<?php
  Class Servico{
      public $idServico;
      public $nome;
      public $descricao;
      public $imagem;

    public function __construct(){
      require_once('bd_class.php');
    }

    //Função de inserir
    public function Insert($_servico){
      $sql="INSERT INTO tbl_servico SET nome='$_servico->nome', descricao='$_servico->descricao',
      imagem='$_servico->imagem'";

      echo $sql;

      $con=new Mysql_db();
      $pdoCon = $con->Conectar();

      if($pdoCon->query($sql)){
        echo "<script>location.reload();</script>";
      }else{
        echo "<script>alert('Erro ao inserir serviço');</script>";
      }
    }

    public function Select(){
      $sql="SELECT * FROM tbl_servico ORDER BY idServico DESC";

      $con=new Mysql_db();
      //Faz a conexão com o banco
      $pdoCon = $con->Conectar();

      //Executa o select no DB e guarda o retorno na variável select
      $select = $pdoCon->query($sql);

      $indice = 0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $list_servico[] = new Servico;

        $list_servico[$indice]->idServico = $rs['idServico'];
        $list_servico[$indice]->nome = $rs['nome'];
        $list_servico[$indice]->descricao = $rs['descricao'];
        $list_servico[$indice]->imagem = $rs['imagem'];

        $indice+=1;
      }

      $con->Desconectar();

      if (isset($list_servico)){
        return $list_servico;
      }
    }

    //Seleciona um registro por ID
    public function SelectByID($_servico){
      $sql="SELECT * FROM tbl_servico WHERE idServico=$_servico->idServico";
      //Instancia a classe do banco de dados
      $con = new Mysql_db ();

      //Chama o metodo de conexão, e guarda o retorno na variável
      $pdoCon = $con->Conectar();

      //Executa o select no DB e guarda o retorno na variável select
      $select = $pdoCon->query($sql);

      $servicoDB = new Servico();

      if($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $servicoDB->idServico = $rs['idServico'];
        $servicoDB->nome = $rs['nome'];
        $servicoDB->descricao = $rs['descricao'];
        $servicoDB->imagem = $rs['imagem'];
      }

      $con->Desconectar();

      return $servicoDB;
    }

    public function Update($_servico){

      if ($_servico->imagem == "nada") {
        $sql = "UPDATE tbl_servico SET nome='$_servico->nome', descricao='$_servico->descricao'
                WHERE idServico=$_servico->idServico";
      }else {
        $sql = "UPDATE tbl_servico SET nome='$_servico->nome', descricao='$_servico->descricao',
                imagem='$_servico->imagem' WHERE idServico=$_servico->idServico";
      }

              $con = new Mysql_db();

              $pdoCon = $con->Conectar();

              if ($pdoCon->query($sql)) {
                  echo("<script>location.reload();</script>");
              }else{
                echo "erro";
              }

              $con->Desconectar();
    }

    public function Delete($_servico){
      $sql = "DELETE FROM tbl_servico WHERE idServico = ?";

      //Instancia o banco de dados
      $con = new Mysql_db();

      //Faz a conexão com o banco
      $pdoCon = $con->Conectar();

      //Prepata o statemant
      $stmt = $pdoCon->prepare($sql);

      //Executa o script
      if($stmt->execute([$_servico->idServico])){

      require_once 'conteudo_servico.php';
      }else{
        echo "Não foi possível excluir o registro do Banco de dados";
      }

      //Fecha a conexão com o banco
      $con->Desconectar();
    }
  }
?>
