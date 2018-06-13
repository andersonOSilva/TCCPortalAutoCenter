<?php
  class Sevico_Filial{

      Public $idFilial;
      Public $Nomefilial;
      Public $telefoneFilial;
      Public $fotoFilial;
      Public $idEnderecoPrestadora;
      Public $statusfilial;
      Public $idPrestadora;
      Public $razaoSocial;
      Public $nomeFantasia;
      Public $fotoPrestadora;
      Public $descricao;
      Public $telefone;
      Public $cnpj;

      Public $senha;
      Public $status;
      Public $idEndereco;
      Public $statusPrestadora;
      Public $idFilialServico;
      Public $idServico;
      Public $NomeSrevivo;
      Public $descricaoFilial;
      Public $imagem;

      // view_prestadora_filial_servico_endereco


      public $logradouro;
      public $numero;
      public $bairro;
      public $referencia;
      public $cep;
      public $nomeCidade;
      public $estadoNome;
      public $sigla;

      // tabela dtVisita

      public $dtVisita;

      // Usuario
      public $idUsuario;

      public function __construct(){
        require_once('cms/models/bd_class.php');
      }


      public function selecionarTudoDeServico($dados){
        $sql="select * from view_prestadora_servico where idServico=".$dados->idServico;

      //  echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont=0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listFiliais[] = new Sevico_Filial();

          $listFiliais[$cont]->idFilial= $rs['idFilial'];

          $listFiliais[$cont]->Nomefilial= $rs['Nomefilial'];
          $listFiliais[$cont]->telefoneFilial= $rs['telefoneFilial'];
          $listFiliais[$cont]->fotoFilial= $rs['fotoFilial'];
          $listFiliais[$cont]->idEnderecoPrestadora= $rs['idEnderecoPrestadora'];

          $listFiliais[$cont]->statusfilial= $rs['statusfilial'];
          $listFiliais[$cont]->idPrestadora= $rs['idPrestadora'];
          $listFiliais[$cont]->razaoSocial= $rs['razaoSocial'];
          $listFiliais[$cont]->nomeFantasia= $rs['nomeFantasia'];

          $listFiliais[$cont]->fotoPrestadora= $rs['fotoPrestadora'];

          $listFiliais[$cont]->descricao= $rs['descricao'];
          $listFiliais[$cont]->telefone= $rs['telefone'];
          $listFiliais[$cont]->cnpj= $rs['cnpj'];
          //$listFiliais[$cont]->login= $rs['login'];
          $listFiliais[$cont]->senha= $rs['senha'];
          $listFiliais[$cont]->senha= $rs['senha'];
          $listFiliais[$cont]->idEndereco= $rs['idEndereco'];

          $listFiliais[$cont]->statusPrestadora= $rs['statusPrestadora'];
          $listFiliais[$cont]->idFilialServico= $rs['idFilialServico'];
          $listFiliais[$cont]->idServico= $rs['idServico'];
          $listFiliais[$cont]->NomeSrevivo= $rs['NomeSrevivo'];
          $listFiliais[$cont]->descricaoFilial= $rs['descricaoFilial'];
          $listFiliais[$cont]->imagem= $rs['imagem'];
          $cont+=1;

        }

        $conex->Desconectar();

        if (isset($listFiliais)) {
            return $listFiliais;
        }

      }

      public function selecionarTudoDeServicoComEndereco($dados){
        $sql=" select * from view_prestadora_filial_servico_endereco where idServico=".$dados->idServico;

      //  echo $sql;

        $conex = new Mysql_db();

        $PDO_conex = $conex->Conectar();

        $select = $PDO_conex->query($sql);

        $cont=0;

        while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $listFiliais[] = new Sevico_Filial();

          $listFiliais[$cont]->idFilial= $rs['idFilial'];

          $listFiliais[$cont]->Nomefilial= $rs['Nomefilial'];
          $listFiliais[$cont]->telefoneFilial= $rs['telefoneFilial'];
          $listFiliais[$cont]->fotoFilial= $rs['fotoFilial'];
          $listFiliais[$cont]->idEnderecoPrestadora= $rs['idEnderecoPrestadora'];

          $listFiliais[$cont]->statusfilial= $rs['statusfilial'];
          $listFiliais[$cont]->idPrestadora= $rs['idPrestadora'];
          $listFiliais[$cont]->razaoSocial= $rs['razaoSocial'];
          $listFiliais[$cont]->nomeFantasia= $rs['nomeFantasia'];

          $listFiliais[$cont]->fotoPrestadora= $rs['fotoPrestadora'];

          $listFiliais[$cont]->descricao= $rs['descricao'];
          $listFiliais[$cont]->telefone= $rs['telefone'];
          $listFiliais[$cont]->cnpj= $rs['cnpj'];
          //$listFiliais[$cont]->login= $rs['login'];
          $listFiliais[$cont]->senha= $rs['senha'];
          $listFiliais[$cont]->senha= $rs['senha'];
          $listFiliais[$cont]->idEndereco= $rs['idEndereco'];

          $listFiliais[$cont]->statusPrestadora= $rs['statusPrestadora'];
          $listFiliais[$cont]->idFilialServico= $rs['idFilialServico'];
          $listFiliais[$cont]->idServico= $rs['idServico'];
          $listFiliais[$cont]->NomeSrevivo= $rs['NomeSrevivo'];
          $listFiliais[$cont]->descricaoFilial= $rs['descricaoFilial'];
          $listFiliais[$cont]->imagem= $rs['imagem'];

          $listFiliais[$cont]->logradouro= $rs['logradouro'];
          $listFiliais[$cont]->numero= $rs['numero'];
          $listFiliais[$cont]->bairro= $rs['bairro'];
          $listFiliais[$cont]->referencia= $rs['referencia'];
          $listFiliais[$cont]->cep= $rs['cep'];
          $listFiliais[$cont]->nomeCidade= $rs['nomeCidade'];
          $listFiliais[$cont]->estadoNome= $rs['estadoNome'];
          $listFiliais[$cont]->sigla= $rs['sigla'];

          $cont+=1;

        }

        $conex->Desconectar();

        if (isset($listFiliais)) {
            return $listFiliais;
        }

      }

      public function inserirVisita($dados){
        $sql="insert into tbl_visita (dtVisita, idUsuario, idServicoFilial)
              values ('".$dados->dtVisita."','".$dados->idUsuario."','".$dados->idFilialServico."')";

              //echo $sql;

              $conex = new Mysql_db();

              $PDO_conex = $conex->Conectar();



              if ($PDO_conex->query($sql)) {
                echo "<script>
                      alert('Visita Marcada com sucesso acompanhe em Agenda ');
                      window.history.go(-1);
                      </script>";
              }else{
                echo "erro";
              }

              $conex->Desconectar();

      }


  }


 ?>
