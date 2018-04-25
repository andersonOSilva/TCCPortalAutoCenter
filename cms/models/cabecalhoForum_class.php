<?php

  class cabecalhoForum{

    public $idcabecalho;
    public $titulo1;
    public $titulo2;
    public $descricao;

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
              echo "<script>location.reload();</script>";
            }else{
              echo "erro";
            }

            $conex->Desconectar();

    }

    public function selectCabecalho(){

          $select="select * from tbl_cabecalho_forum";

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

            $count+=1;

          }

          if (isset ($list_cabecalho)) {
            //var_dump()
            return $list_cabecalho;
          }

      $conex->Desconectar();

    }


  }

 ?>
