<?php

    class servico_filial{


      public $idFilialServico;
      public $idFilial;
      public $nomeFilial;
      public $idServico;
      public $nome;
      public $descricao;


      public function __construct(){
        require_once('cms/models/bd_class.php');
      }


      public function selecionarServicoPorId($dados){
        $sql="select * from view_servico_filial where idServico=".$dados->idServico;

      //  echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont=0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listFiliais[] = new Sevico_Filial();

          public ;
          public $idFilial;
          public $nomeFilial;
          public $idServico;
          public $nome;
          public $descricao;

          $listFiliais[$cont]->idFilial= $rs['idFilial'];
          $listFiliais[$cont]->idFilialServico= $rs['idFilialServico'];



          $cont+=1;

        }

        $conex->Desconectar();

        if (isset($listFiliais)) {
            return $listFiliais;
        }

      }

    }


 ?>
