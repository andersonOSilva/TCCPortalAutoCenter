<?php

    class filial{
      public $idFilial;
      public $nomeFilial;
      public $telefone;
      public $fotoFilial;
      public $status;
      public $statusServico;
      public $statusProduto;
      public $statusHome;
      public $statusPagPrest;
      public $statusPagSer;
      public $idEnderecoPrestadora;


      public function __construct(){
        require_once('models/bd_class.php');
      }


      public function desativarBeneficilServico($dados){
        $sql="update tbl_filial set statusServico = 0 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // desativar beneficio de produtos

      public function desativarBeneficilProduto($dados){
        $sql="update tbl_filial set statusProduto = 0 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // desativar beneficio na home

      public function desativarBeneficilHome($dados){
        $sql="update tbl_filial set statusHome = 0 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // desativar beneficio de aparecer na pagina de produtos

      public function desativarBeneficilPagProdutos($dados){
        $sql="update tbl_filial set statusPagPrest = 0 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // desativar beneficio de aparecer na pagina de Servicos

      public function desativarBeneficilPagServico($dados){
        $sql="update tbl_filial set statusPagSer = 0 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }


      // MODO DE ATIVAÇÂO

      public function ativarBeneficilServico($dados){
        $sql="update tbl_filial set statusServico = 1 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // ativar beneficio de produtos

      public function ativarBeneficilProduto($dados){
        $sql="update tbl_filial set statusProduto = 1  where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      //ativar beneficio na home

      public function ativarBeneficilHome($dados){
        $sql="update tbl_filial set statusHome = 1 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // ativar beneficio de aparecer na pagina de produtos

      public function ativarBeneficilPagProdutos($dados){
        $sql="update tbl_filial set statusPagPrest = 1 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }

      // ativar beneficio de aparecer na pagina de Servicos

      public function ativarBeneficilPagServico($dados){
        $sql="update tbl_filial set statusPagSer = 1 where idFilial=".$dados->idFilial;

        echo $sql;
        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();
        if ($PDO_conex->query($sql)) {
          require_once 'views/statusFilial.php';
        }else{
          echo "erro ao ativar";
        }
        $conex->Desconectar();


      }


  

    }


 ?>
