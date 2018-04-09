<?php

  class Prestadora{
    public $nome;
    public $razaoSocial;
    public $nomefantasia;
    public $fotoPrestadora;
    public $descricao;
    public $telefone;
    public $cnpj;
    public $idEnderecoPrestadora;
    public $login;
    public $senha;
    public $status;


    public  function __construct(){
      require_once('bd_class.php');
    }





    public function Select(){
      $sql = "select * from tbl_prestadora order by idPrestadora desc";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listPrestadora[] = new Prestadora();

        $listPrestadora[$cont]->id=$rs['idPrestadora'];
        $listPrestadora[$cont]->razaoSocial=$rs['razaoSocial'];
        $listPrestadora[$cont]->nomefantasia=$rs['nomeFantasia'];
        $listPrestadora[$cont]->fotoPrestadora=$rs['fotoPrestadora'];
        $listPrestadora[$cont]->descricao=$rs['descricao'];
        $listPrestadora[$cont]->telefone=$rs['telefone'];
        $listPrestadora[$cont]->cnpj=$rs['cnpj'];
        $listPrestadora[$cont]->idEnderecoPrestadora=$rs['idEnderecoPrestadora'];
        $listPrestadora[$cont]->login=$rs['login'];
        $listPrestadora[$cont]->senha=$rs['senha'];
        $listPrestadora[$cont]->status=$rs['status'];


        $cont+=1;
      }

      $conex->Desconectar();

      if (isset($listPrestadora)) {
          return $listPrestadora;

          //var_dump($listPrestadora) ;
      }

    }



  }

 ?>
