<?php

  class carrinhoClass{


    public $idProduto;
    public $nome;
    public $preco;
    public $marca;
    public $idSubcategoria;
    public $idFilial;
    public $imagem;
    public $imagem1;
    public $imagem2;
    public $imagem3;
    public $tipo;
    public $modelo;
    public $durabilidade;
    public $dt_fabrica;
    public $garantia;
    public $fabricante;
    public $obs;
    public $descricao;

    public $quantidade;


    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }


    public function selecionarPorId(){
      // VERIFICAR SE EXISTE UMA SESSION
      if ($_SESSION) {
        // SEPARA NOME DE QUANTIDADE OU VALORES
        foreach ($_SESSION as $nome => $quantidade) {
          if (substr($nome,0,9) == 'produtos_') {
            // PEGA id DA SESSION
            $id = substr($nome,9,(strlen($nome) -9));

            $sql = "select * from tbl_produto where idProduto=".$id;

            echo $sql;

          //  $quantidade= $dados->quantidade;

            $conex = new Mysql_db();
            $PDO_conex = $conex->Conectar();
            $result = $PDO_conex->query($sql);
            $count = 0;
            while ($rs=$result->fetch(PDO::FETCH_ASSOC)) {

              $list_produto[$count] = new carrinhoClass;


              $list_produto[$count]->idProduto=$rs['idProduto'];
              $list_produto[$count]->nome=$rs['nome'];
              $list_produto[$count]->preco=$rs['preco'];
              $list_produto[$count]->marca=$rs['marca'];
              $list_produto[$count]->idSubcategoria=$rs['idSubcategoria'];
              $list_produto[$count]->idFilial=$rs['idFilial'];
              $list_produto[$count]->imagem=$rs['imagem'];
              $list_produto[$count]->imagem1=$rs['imagem1'];
              $list_produto[$count]->imagem2=$rs['imagem2'];
              $list_produto[$count]->imagem3=$rs['imagem3'];
              $list_produto[$count]->tipo=$rs['tipo'];
              $list_produto[$count]->modelo=$rs['modelo'];
              $list_produto[$count]->durabilidade=$rs['durabilidade'];
              $list_produto[$count]->dt_fabrica=$rs['dt_fabrica'];
              $list_produto[$count]->garantia=$rs['garantia'];
              $list_produto[$count]->fabricante=$rs['fabricante'];
              $list_produto[$count]->obs=$rs['obs'];
              $list_produto[$count]->descricao=$rs['descricao'];
              $list_produto[$count]->quantidade=$quantidade;

              $count+=1;

            }

            if (isset ($list_produto)) {
              //var_dump()
              return $list_produto;
            }

            $conex->Desconectar();


          }


        }

      }else{
        echo "sem session </br>";
      }

    } // fim da class

  }

  session_start();
  // echo "Chegou aqui";
  if (isset($_GET['idProduto'])) {
    $_SESSION['produtos_'.$_GET['idProduto']] +=1;

  //  echo $id;

  }else{
    //echo "id nao encontrado </br>";
  }

 ?>
