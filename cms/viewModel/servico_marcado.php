<?php

class servico_marcado{


  public $dtVisita;
  public $idVisita;
  public $idUsuario;
  public $user;
  public $usuario;
  public $senha;
  public $email;
  public $dtNasc;
  public $cpf;
  public $fotoUser;
  public $statusUser;
  public $idFilialServico;
  public $idServico;
  public $nome;
  public $descricao;
  public $imagem;


  public $idFilial;
  public $filialNome;
  public $telefone;



  function __construct(){
   require_once('cms/models/bd_class.php');
 }


 public function SelecionarMarcadas($dados){


   $sql="select * from view_visita_marcada where idUsuario=".$dados->idUsuario;

  //  echo $sql;

   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   $select = $PDO_conex->query($sql);

   $cont=0;

   while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
     $listFiliaisServicosMarcados[] = new servico_marcado();

     $listFiliaisServicosMarcados[$cont]->dtVisita= $rs['dtVisita'];
     $listFiliaisServicosMarcados[$cont]->idVisita= $rs['idVisita'];
     $listFiliaisServicosMarcados[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisServicosMarcados[$cont]->user= $rs['user'];
     $listFiliaisServicosMarcados[$cont]->usuario= $rs['usuario'];
     $listFiliaisServicosMarcados[$cont]->senha= $rs['senha'];
     $listFiliaisServicosMarcados[$cont]->email= $rs['email'];
     $listFiliaisServicosMarcados[$cont]->dtNasc=  implode("/",array_reverse(explode("-",$rs['dtNasc'])));
     $listFiliaisServicosMarcados[$cont]->cpf= $rs['cpf'];
     $listFiliaisServicosMarcados[$cont]->fotoUser= $rs['fotoUser'];
     $listFiliaisServicosMarcados[$cont]->statusUser= $rs['statusUser'];
     $listFiliaisServicosMarcados[$cont]->idFilialServico= $rs['idFilialServico'];
     $listFiliaisServicosMarcados[$cont]->idServico= $rs['idServico'];
     $listFiliaisServicosMarcados[$cont]->nome= $rs['nome'];
     $listFiliaisServicosMarcados[$cont]->descricao= $rs['descricao'];
     $listFiliaisServicosMarcados[$cont]->imagem= $rs['imagem'];
     $listFiliaisServicosMarcados[$cont]->idFilial= $rs['idFilial'];
     $listFiliaisServicosMarcados[$cont]->filialNome= $rs['filialNome'];
     $listFiliaisServicosMarcados[$cont]->telefone= $rs['telefone'];



     $cont+=1;

   }

   $conex->Desconectar();

   if (isset($listFiliaisServicosMarcados)) {
       return $listFiliaisServicosMarcados;
   }
 }

}




 ?>
