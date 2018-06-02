<?php
     class Prestadora_Filial{
        public $idPrestadora;
        public $NomePrestadora;
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
        public $logradouro;
        public $numero;
        public $bairro;
        public $cep;
        public $idCidade;
        public $cidade;
        public $idEstado;
        public $estado;
        public $idPlano;
        public $Plano;
        public $preco;
        public $descricao;
        public $nomeFantasia;
        public $fotoPrestadora;

        public function __construct(){
          require_once('../models/bd_class.php');
        }

        public function selecionarTudo($dados){
          $sql="select * from view_Prestadora_Filial where idPrestadora=".$dados->idPrestadora;

        //  echo $sql;

          $conex = new Mysql_db();

          $PDO_conex = $conex->Conectar();

          $select = $PDO_conex->query($sql);

          $cont=0;

          while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
            $listFiliais[] = new Prestadora_Filial();

            $listFiliais[$cont]->idPrestadora= $rs['idPrestadora'];
            $listFiliais[$cont]->NomePrestadora= $rs['NomePrestadora'];
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
            $listFiliais[$cont]->idEnderecoPrestadora= $rs['idEnderecoPrestadora'];
            $listFiliais[$cont]->logradouro= $rs['logradouro'];
            $listFiliais[$cont]->numero= $rs['numero'];
            $listFiliais[$cont]->bairro= $rs['bairro'];
            $listFiliais[$cont]->cep= $rs['cep'];
            $listFiliais[$cont]->idCidade= $rs['idCidade'];
            $listFiliais[$cont]->cidade= $rs['cidade'];
            $listFiliais[$cont]->idEstado= $rs['idEstado'];
            $listFiliais[$cont]->estado= $rs['estado'];
            $listFiliais[$cont]->idPlano= $rs['idPlano'];
            $listFiliais[$cont]->Plano= $rs['Plano'];
            $listFiliais[$cont]->preco= $rs['preco'];
            $listFiliais[$cont]->descricao= $rs['descricao'];
            $listFiliais[$cont]->nomeFantasia= $rs['nomeFantasia'];
            $listFiliais[$cont]->fotoPrestadora= $rs['fotoPrestadora'];



            $cont+=1;

          }

          $conex->Desconectar();

          if (isset($listFiliais)) {
              return $listFiliais;
          }

        }


     }


 ?>
