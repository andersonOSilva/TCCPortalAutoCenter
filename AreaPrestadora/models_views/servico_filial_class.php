<?php

  class servico_filial{

    public $idFilialServico;
    public $idFilial;
    public $nomeFilial;
    public $idServico;
    public $nomeServico;
    public $descricao;
    public $id;

    function __construct(){
     require_once('../cms/models/bd_class.php');
   }

   // selecionar servicor e filiais

   public function SelecionarServicosPorFilial($dados){


     $sql="select * from view_servico_filial where idFilial=".$dados->idFilial;

     echo $sql;

     $conex = new Mysql_db();

     $PDO_conex = $conex->Conectar();

     $select = $PDO_conex->query($sql);

     $cont=0;

     while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
       $listFiliaisServicoServico[] = new servico_filial();

       $listFiliaisServicoServico[$cont]->idFilialServico= $rs['idFilialServico'];
       $listFiliaisServicoServico[$cont]->idFilial= $rs['idFilial'];
       $listFiliaisServicoServico[$cont]->nomeFilial= $rs['nomeFilial'];
       $listFiliaisServicoServico[$cont]->idServico= $rs['idServico'];
       $listFiliaisServicoServico[$cont]->nomeServico= $rs['nome'];
       $listFiliaisServicoServico[$cont]->descricao= $rs['descricao'];

       $cont+=1;

     }

     $conex->Desconectar();

     if (isset($listFiliaisServico)) {
         return $listFiliaisServico;
     }
   }
  }
 ?>
