<?php

  class Mensagem{
    public $idFale;
    public $nome;
    public $email;
    public $mensagen;


    public  function __construct(){
      require_once('bd_class.php');
    }

    public function Insert($dados_mensagen){
      var_dump($dados_mensagen);
      $sql = "insert into tbl_fale_conosco (nome,email,mensagem)
              values('".$dados_mensagen->nome."',
                    '".$dados_mensagen->email."',
                    '".$dados_mensagen->mensagen."')";

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();



      if ($PDO_conex->query($sql)) {
        header('location:index.php');
      }else{
        echo "erro";
      }

      $conex->Desconectar();
    }

    public function Select(){
      $sql="SELECT * FROM tbl_fale_conosco ORDER BY idFaleconosco";
      //echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listFaleConosco[] = new Mensagem();

        $listFaleConosco[$cont]->id = $rs['idFaleConosco'];
        $listFaleConosco[$cont]->nome = $rs['nome'];
        $listFaleConosco[$cont]->email = $rs['email'];
        $listFaleConosco[$cont]->mensagen = $rs['mensagem'];

        $cont+=1;

      }

      $conex->Desconectar();

      if (isset($listFaleConosco)) {
          return $listFaleConosco;
      }

    }


    public function Delete($dados_mensagen){

      $sql="Delete from tbl_fale_conosco where idFaleConosco=".$dados_mensagen->id;
      echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

        if ($PDO_conex->query($sql)) {
          header('location:index.php?pag=fale');
        }else{
          echo "erro ao deletar";
        }

      $conex->Desconectar();

    }

  }

 ?>
