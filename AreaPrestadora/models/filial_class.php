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


      function __construct(){
       require_once('../cms/models/bd_class.php');
     }


      public function SelecionarFilialPorID($dados){


        $sql="select * from view_Prestadora_Filial where idPrestadora=".$dados->idPrestadora;

        //echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont=0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listFiliais[] = new filial();


          $listFiliais[$cont]->idFilial= $rs['idFilial'];
          $listFiliais[$cont]->nomeFilial= $rs['nomeFilial'];
          $listFiliais[$cont]->telefone= $rs['telefone'];
          $listFiliais[$cont]->fotoFilial= $rs['fotoFilial'];
          $listFiliais[$cont]->status= $rs['status'];
          $listFiliais[$cont]->statusServico= $rs['statusServico'];
          $listFiliais[$cont]->statusProduto= $rs['statusProduto'];
          $listFiliais[$cont]->statusHome= $rs['statusHome'];
          $listFiliais[$cont]->statusPagPrest= $rs['statusPagPrest'];
          $listFiliais[$cont]->statusPagSer= $rs['statusPagSer'];

          $cont+=1;

        }

        $conex->Desconectar();

        if (isset($listFiliais)) {
            return $listFiliais;
        }
      }

      // SELECIONAR POR ID

      public function selecionarFilialPorIdTBL($dados){
        $sql="select * from tbl_filial where idFilial=".$dados->idFilial;

        echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont=0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listFiliais[] = new filial();


          $listFiliais[$cont]->idFilial= $rs['idFilial'];
          $listFiliais[$cont]->nomeFilial= $rs['nome'];
          $listFiliais[$cont]->telefone= $rs['telefone'];
          $listFiliais[$cont]->fotoFilial= $rs['fotoFilial'];
          $listFiliais[$cont]->status= $rs['status'];
          $listFiliais[$cont]->statusServico= $rs['statusServico'];
          $listFiliais[$cont]->statusProduto= $rs['statusProduto'];
          $listFiliais[$cont]->statusHome= $rs['statusHome'];
          $listFiliais[$cont]->statusPagPrest= $rs['statusPagPrest'];
          $listFiliais[$cont]->statusPagSer= $rs['statusPagSer'];
          $listFiliais[$cont]->idEnderecoPrestadora= $rs['idEnderecoPrestadora'];


          $cont+=1;

        }

        $conex->Desconectar();

        if (isset($listFiliais)) {
            return $listFiliais;
        }

      }


    }


 ?>
