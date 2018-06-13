<?php

 class CompraProduto{

  public $idPedido;
  public $idProduto;
  public $idUsuario;
  public $quantidade;
  public $idStatus;
  public $data;
  public $nome;
  public $preco;
  public $marca;
  public $idSubcategoria;
  public $idFilial;
  public $imagem;
  public $imagem1;
  public $imagem2;
  public $imagem3;
  public $tipo;
  public $modelo;
  public $durabilidade;
  public $dt_fabrica;
  public $garantia;
  public $fabricante;
  public $obs;
  public $descricao;
  public $quantidadeProduto;
  public $filial;
  public $Cliente;
  public $email;
  public $idEnderecoUsuario;
  public $logradouro;
  public $numero;
  public $complemento;
  public $bairro;
  public $cep;
  public $idTipoEndereco;
  public $idCidade;


  function __construct(){
   require_once('cms/models/bd_class.php');
 }

 public function SelecionarProdutos($dados){


   $sql="select * from view_confirmarcompra where idStatus=1 and idFilial=".$dados->idFilial;

  //  echo $sql;

   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   $select = $PDO_conex->query($sql);

   $cont=0;

   while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
     $listFiliaisProdutos[] = new CompraProduto();

     $listFiliaisProdutos[$cont]->idPedido= $rs['idPedido'];
     $listFiliaisProdutos[$cont]->idProduto= $rs['idProduto'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->quantidade= $rs['quantidade'];
     $listFiliaisProdutos[$cont]->idStatus= $rs['idStatus'];
     $listFiliaisProdutos[$cont]->data= implode("-",array_reverse(explode("/",$rs['data'])));
     $listFiliaisProdutos[$cont]->nome= $rs['nome'];
     $listFiliaisProdutos[$cont]->preco= $rs['preco'];
     $listFiliaisProdutos[$cont]->marca= $rs['marca'];
     $listFiliaisProdutos[$cont]->idSubcategoria= $rs['idSubcategoria'];
     $listFiliaisProdutos[$cont]->idFilial= $rs['idFilial'];
     $listFiliaisProdutos[$cont]->imagem= $rs['imagem'];
     $listFiliaisProdutos[$cont]->imagem1= $rs['imagem1'];
     $listFiliaisProdutos[$cont]->imagem2= $rs['imagem2'];
     $listFiliaisProdutos[$cont]->imagem3= $rs['imagem3'];
     $listFiliaisProdutos[$cont]->tipo= $rs['tipo'];
     $listFiliaisProdutos[$cont]->modelo= $rs['modelo'];
     $listFiliaisProdutos[$cont]->durabilidade= $rs['durabilidade'];
     $listFiliaisProdutos[$cont]->dt_fabrica= $rs['dt_fabrica'];
     $listFiliaisProdutos[$cont]->garantia= $rs['garantia'];
     $listFiliaisProdutos[$cont]->fabricante= $rs['fabricante'];
     $listFiliaisProdutos[$cont]->obs= $rs['obs'];
     $listFiliaisProdutos[$cont]->descricao= $rs['descricao'];
     $listFiliaisProdutos[$cont]->quantidadeProduto= $rs['quantidadeProduto'];
     $listFiliaisProdutos[$cont]->filial= $rs['filial'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->Cliente= $rs['Cliente'];
     $listFiliaisProdutos[$cont]->email= $rs['email'];
     $listFiliaisProdutos[$cont]->idEnderecoUsuario= $rs['idEnderecoUsuario'];
     $listFiliaisProdutos[$cont]->logradouro= $rs['logradouro'];
     $listFiliaisProdutos[$cont]->numero= $rs['numero'];
     $listFiliaisProdutos[$cont]->complemento= $rs['complemento'];
     $listFiliaisProdutos[$cont]->bairro= $rs['bairro'];
     $listFiliaisProdutos[$cont]->cep= $rs['cep'];
     $listFiliaisProdutos[$cont]->idTipoEndereco= $rs['idTipoEndereco'];
     $listFiliaisProdutos[$cont]->idCidade= $rs['idCidade'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];





     $cont+=1;

   }

   $conex->Desconectar();

   if (isset($listFiliaisProdutos)) {
       return $listFiliaisProdutos;
   }
 }

 public function atualizarStatus($dados){
   $sql="update tbl_pedido set
         idStatus=2
         where idPedido=".$dados->idPedido;
         // echo $sql;
         $conex = new Mysql_db();
         $PDO_conex = $conex->Conectar();
         if ($PDO_conex->query($sql)) {
           //echo "string";

           echo "<script>
                 alert('Pedido colocado para fila de envio ');
                 window.history.go(-1);
                 </script>";          }else{
           echo "erro";
         }

         $conex->Desconectar();
 }

 public function SelecionarProdutos2($dados){


   $sql="select * from view_confirmarcompra where idStatus=2 and idFilial=".$dados->idFilial;

    //echo $sql;

   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   $select = $PDO_conex->query($sql);

   $cont=0;

   while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
     $listFiliaisProdutos[] = new CompraProduto();

     $listFiliaisProdutos[$cont]->idPedido= $rs['idPedido'];
     $listFiliaisProdutos[$cont]->idProduto= $rs['idProduto'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->quantidade= $rs['quantidade'];
     $listFiliaisProdutos[$cont]->idStatus= $rs['idStatus'];
     $listFiliaisProdutos[$cont]->data= implode("-",array_reverse(explode("/",$rs['data'])));
     $listFiliaisProdutos[$cont]->nome= $rs['nome'];
     $listFiliaisProdutos[$cont]->preco= $rs['preco'];
     $listFiliaisProdutos[$cont]->marca= $rs['marca'];
     $listFiliaisProdutos[$cont]->idSubcategoria= $rs['idSubcategoria'];
     $listFiliaisProdutos[$cont]->idFilial= $rs['idFilial'];
     $listFiliaisProdutos[$cont]->imagem= $rs['imagem'];
     $listFiliaisProdutos[$cont]->imagem1= $rs['imagem1'];
     $listFiliaisProdutos[$cont]->imagem2= $rs['imagem2'];
     $listFiliaisProdutos[$cont]->imagem3= $rs['imagem3'];
     $listFiliaisProdutos[$cont]->tipo= $rs['tipo'];
     $listFiliaisProdutos[$cont]->modelo= $rs['modelo'];
     $listFiliaisProdutos[$cont]->durabilidade= $rs['durabilidade'];
     $listFiliaisProdutos[$cont]->dt_fabrica= $rs['dt_fabrica'];
     $listFiliaisProdutos[$cont]->garantia= $rs['garantia'];
     $listFiliaisProdutos[$cont]->fabricante= $rs['fabricante'];
     $listFiliaisProdutos[$cont]->obs= $rs['obs'];
     $listFiliaisProdutos[$cont]->descricao= $rs['descricao'];
     $listFiliaisProdutos[$cont]->quantidadeProduto= $rs['quantidadeProduto'];
     $listFiliaisProdutos[$cont]->filial= $rs['filial'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->Cliente= $rs['Cliente'];
     $listFiliaisProdutos[$cont]->email= $rs['email'];
     $listFiliaisProdutos[$cont]->idEnderecoUsuario= $rs['idEnderecoUsuario'];
     $listFiliaisProdutos[$cont]->logradouro= $rs['logradouro'];
     $listFiliaisProdutos[$cont]->numero= $rs['numero'];
     $listFiliaisProdutos[$cont]->complemento= $rs['complemento'];
     $listFiliaisProdutos[$cont]->bairro= $rs['bairro'];
     $listFiliaisProdutos[$cont]->cep= $rs['cep'];
     $listFiliaisProdutos[$cont]->idTipoEndereco= $rs['idTipoEndereco'];
     $listFiliaisProdutos[$cont]->idCidade= $rs['idCidade'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];



     $cont+=1;

   }

   $conex->Desconectar();

   if (isset($listFiliaisProdutos)) {
       return $listFiliaisProdutos;
   }
 }

 public function atualizarStatus2($dados){
   $sql="update tbl_pedido set
         idStatus=3
         where idPedido=".$dados->idPedido;
         // echo $sql;
         $conex = new Mysql_db();
         $PDO_conex = $conex->Conectar();
         if ($PDO_conex->query($sql)) {
           echo "<script>
                 alert('Produto enviado Para o cliente');
                 window.history.go(-1);
                 </script>";         }else{
           echo "erro";
         }

         $conex->Desconectar();
 }


 public function BuscarProdutosCliente($dados){


   $sql="select * from view_confirmarcompra where idUsuario=".$dados->idUsuario;

  //  echo $sql;

   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   $select = $PDO_conex->query($sql);

   $cont=0;

   while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
     $listFiliaisProdutos[] = new CompraProduto();

     $listFiliaisProdutos[$cont]->idPedido= $rs['idPedido'];
     $listFiliaisProdutos[$cont]->idProduto= $rs['idProduto'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->quantidade= $rs['quantidade'];
     $listFiliaisProdutos[$cont]->idStatus= $rs['idStatus'];
     $listFiliaisProdutos[$cont]->data= implode("-",array_reverse(explode("/",$rs['data'])));
     $listFiliaisProdutos[$cont]->nome= $rs['nome'];
     $listFiliaisProdutos[$cont]->preco= $rs['preco'];
     $listFiliaisProdutos[$cont]->marca= $rs['marca'];
     $listFiliaisProdutos[$cont]->idSubcategoria= $rs['idSubcategoria'];
     $listFiliaisProdutos[$cont]->idFilial= $rs['idFilial'];
     $listFiliaisProdutos[$cont]->imagem= $rs['imagem'];
     $listFiliaisProdutos[$cont]->imagem1= $rs['imagem1'];
     $listFiliaisProdutos[$cont]->imagem2= $rs['imagem2'];
     $listFiliaisProdutos[$cont]->imagem3= $rs['imagem3'];
     $listFiliaisProdutos[$cont]->tipo= $rs['tipo'];
     $listFiliaisProdutos[$cont]->modelo= $rs['modelo'];
     $listFiliaisProdutos[$cont]->durabilidade= $rs['durabilidade'];
     $listFiliaisProdutos[$cont]->dt_fabrica= $rs['dt_fabrica'];
     $listFiliaisProdutos[$cont]->garantia= $rs['garantia'];
     $listFiliaisProdutos[$cont]->fabricante= $rs['fabricante'];
     $listFiliaisProdutos[$cont]->obs= $rs['obs'];
     $listFiliaisProdutos[$cont]->descricao= $rs['descricao'];
     $listFiliaisProdutos[$cont]->quantidadeProduto= $rs['quantidadeProduto'];
     $listFiliaisProdutos[$cont]->filial= $rs['filial'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];
     $listFiliaisProdutos[$cont]->Cliente= $rs['Cliente'];
     $listFiliaisProdutos[$cont]->email= $rs['email'];
     $listFiliaisProdutos[$cont]->idEnderecoUsuario= $rs['idEnderecoUsuario'];
     $listFiliaisProdutos[$cont]->logradouro= $rs['logradouro'];
     $listFiliaisProdutos[$cont]->numero= $rs['numero'];
     $listFiliaisProdutos[$cont]->complemento= $rs['complemento'];
     $listFiliaisProdutos[$cont]->bairro= $rs['bairro'];
     $listFiliaisProdutos[$cont]->cep= $rs['cep'];
     $listFiliaisProdutos[$cont]->idTipoEndereco= $rs['idTipoEndereco'];
     $listFiliaisProdutos[$cont]->idCidade= $rs['idCidade'];
     $listFiliaisProdutos[$cont]->idUsuario= $rs['idUsuario'];


     $cont+=1;

   }

   $conex->Desconectar();

   if (isset($listFiliaisProdutos)) {
       return $listFiliaisProdutos;
   }
 }

}

 ?>
