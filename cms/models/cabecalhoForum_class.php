<?php

  class cabecalhoForum{

    public $idcabecalho;
    public $titulo1;
    public $titulo2;
    public $descricao;
    public $status;

    // construtor da class de conexao
    public  function __construct(){
      require_once('bd_class.php');
    }


    public function novoCabecalho($dados){
      $sql="insert into tbl_cabecalho_forum (titulo1,titulo2,descricao)
            values ('".$dados->titulo1."','".$dados->titulo2."','".$dados->descricao."')";

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

    public function selectCabecalho(){

          $select="select * from tbl_cabecalho_forum order by idcabecalho desc ;";

          //echo $select;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $result = $PDO_conex->query($select);

          $count=0;
          while ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
            $list_cabecalho[$count] = new cabecalhoForum;
            $list_cabecalho[$count]->idcabecalho=$rs['idcabecalho'];
            $list_cabecalho[$count]->titulo1=$rs['titulo1'];
            $list_cabecalho[$count]->titulo2=$rs['titulo2'];
            $list_cabecalho[$count]->descricao=$rs['descricao'];
            $list_cabecalho[$count]->status=$rs['status'];


            $count+=1;

          }

          if (isset ($list_cabecalho)) {
            //var_dump()
            return $list_cabecalho;
          }

      $conex->Desconectar();

    }

    public function selectCabecalhoPorId($dados_controller){

          $select="select * from tbl_cabecalho_forum where idcabecalho=".$dados_controller->idcabecalho;

          echo $select;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $result = $PDO_conex->query($select);

          $count=0;
          if ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
            $list_cabecalho = new cabecalhoForum;
            $list_cabecalho->idcabecalho=$rs['idcabecalho'];
            $list_cabecalho->titulo1=$rs['titulo1'];
            $list_cabecalho->titulo2=$rs['titulo2'];
            $list_cabecalho->descricao=$rs['descricao'];



          }

          if (isset ($list_cabecalho)) {
            //var_dump()
            return $list_cabecalho;
          }

      $conex->Desconectar();

    }

    public function selectCabecalhoAtivado(){

          $select="select * from tbl_cabecalho_forum where status=1";

          echo $select;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $result = $PDO_conex->query($select);

          $count=0;
          if ($rs=$result->fetch(PDO::FETCH_ASSOC)) {
            $list_cabecalho = new cabecalhoForum;
            $list_cabecalho->idcabecalho=$rs['idcabecalho'];
            $list_cabecalho->titulo1=$rs['titulo1'];
            $list_cabecalho->titulo2=$rs['titulo2'];
            $list_cabecalho->descricao=$rs['descricao'];



          }

          if (isset ($list_cabecalho)) {
            //var_dump()
            return $list_cabecalho;
          }

      $conex->Desconectar();

    }



    public function Delete($dados_controller){

      $sql="Delete from tbl_cabecalho_forum where idcabecalho=".$dados_controller->idcabecalho;
      echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

        if ($PDO_conex->query($sql)) {
          echo "sucesso";
        }else{
          echo "erro ao deletar";
        }

      $conex->Desconectar();

    }


    public function EditarCabecalho($dados){
      $sql="update tbl_cabecalho_forum set
            titulo1='".$dados->titulo1."',
            titulo2='".$dados->titulo2."',
            descricao='".$dados->descricao."'
            where idcabecalho=".$dados->idcabecalho;

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

    public function ativarCabecalho($dadosUser){
      $sql="update  tbl_cabecalho_forum set status = 0;";

      echo $sql;
      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();
      if ($PDO_conex->query($sql)) {
        $sql2="update  tbl_cabecalho_forum SET status='1' where idcabecalho=".$dadosUser->idcabecalho;
        echo $sql2;
        $conex = new Mysql_db();
        $PDO_conex2 = $conex->Conectar();
        if ($PDO_conex2->query($sql2)) {
          echo "sucesso";
        }
      }else{
        echo "erro ao ativar";
      }
      $conex->Desconectar();


    }

    public function DesativarCabecalho($dadosUser){
      $sql="update  tbl_cabecalho_forum SET status='0' where idcabecalho=".$dadosUser->idcabecalho;

      echo $sql;
      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();
      if ($PDO_conex->query($sql)) {
          echo "sucesso";
      }else{
        echo "erro ao ativar";
      }
      $conex->Desconectar();


    }


  }

 ?>
