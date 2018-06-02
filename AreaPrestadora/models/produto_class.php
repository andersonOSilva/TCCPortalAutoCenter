<?php

/*
Autor:Luana Fernandes
Descrição: Tela de cadastro de produtos
Data:19/05/2018
 */
class Produto
{
  public $idProduto;
  public $nome;
  public $preco;
  public $foto;
  public $foto1;
  public $foto2;
  public $foto3;
  public $marca;
  public $tipo;
  public $modelo;
  public $dura;
  public $dt_fabrica;
  public $garante;
  public $fabricante;
  public $obs;
  public $idFilial;



  function __construct(){
   require_once('../cms/models/bd_class.php');
 }

 public function Insert($produto){

   $sql="insert into tbl_produto(nome, preco, marca, imagem, imagem1, imagem2, imagem3, tipo, modelo,
    durabilidade, dt_fabrica, garantia, fabricante, obs,idSubcategoria,idFilial)
   values('".$produto->nome."', '".$produto->preco."', '".$produto->marca."', '".$produto->foto."',
  '".$produto->foto1."', '".$produto->foto2."', '".$produto->foto3."', '".$produto->tipo."', '".$produto->modelo."',
  '".$produto->dura."', '".$produto->dt_fabrica."', '".$produto->garante."', '".$produto->fabricante."',
  '".$produto->obs."','1', '".$produto->idFilial."')";
   echo $sql;
   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   if ($PDO_conex->query($sql)) {
     echo "sucesso";
     }else{
     echo "erro";
   }

   $conex->Desconectar();

 }

 public function SelectSubCategoria(){
   addslashes($sql="select * from tbl_sub_categoria where status=1");

   // echo $sql;
   $conex = new Mysql_db();

   $PDO_conex = $conex->Conectar();

   $select = $PDO_conex->query($sql);

   $cont=0;

   while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
     $listSubCategoria[] = new Produto();

     $listSubCategoria[$cont]->idSubCategoria=$rs['idSubCategoria'];
     $listSubCategoria[$cont]->descricao=$rs['descricao'];


     $cont+=1;
   }

   $conex->Desconectar();
   if (isset($listSubCategoria)) {
     return $listSubCategoria;
   }
 }

 public function Select(){
   $sql="select * from tbl_produto order by idProduto desc";
 }

 public function SelectById(){

 }

 public function Update(){

 }


 public function Delete(){

 }


}


 ?>
