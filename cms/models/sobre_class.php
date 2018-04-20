<?php

 class sobre{
    public $idSobre;
    public $historia;
    public $missao;
    public $visao;
    public $valores;
    public $slogan;
    public $ativo;
  
 public  function __construct(){
      require_once('bd_class.php');
    }
     
     
     
     public function Insert(){
      
         
         try {
      // insere no banco de dados a prestadora
                $conex = new Mysql_db();
                $PDO_conex = $conex->Conectar(); 
          
             
             $sqlsobre= "insert into tbl_sobre_empresa(historia,missao,visao,valores,slogan)
          values('".$dados_sobre->historia."',
          ('".$dados_sobre->missao."',
          ('".$dados_sobre->visao."',
          ('".$dados_sobre->valores."',
          ('".$dados_sobre->slogan."');";
             
             
        $PDO_conex->query($sqlPrestadora);
      
      
      }catch (Exception $e){
//                      echo($e);
             
         }
    }

public function Update(){
      
         
         try {
      // insere no banco de dados a prestadora
                $conex = new Mysql_db();
                $PDO_conex = $conex->Conectar(); 
          
//             UPDATE `db_portal`.`tbl_sobre_empresa` SET `historia`='SoftI9 é uma empresa que atua na2 área da tecnologia, criada em 2016,', `visao`='buscando inovar a cada projeto, torna3ndo-os os únicos no mercado,', `missao`='surgiu em uma comunidade de tecnologia onde 4eram compartilhados códigos e projetos,', `valores`='m compartilhado5s códigos e projetos,', `slogan`='Se você adora o seu carro, deixe q6ue nós cuidamos de tudo para você' WHERE `idSobreEmpresa`='1';
             $sqlsobre= "UPDATE `db_portal`.`tbl_sobre_empresa` SET
                `historia`='".$dados_sobre->historia."',
          missao=('".$dados_sobre->missao."',
          visao=('".$dados_sobre->visao."',
          valores=('".$dados_sobre->valores."',
          slogan=('".$dados_sobre->slogan."');";
             
             
        $PDO_conex->query($sqlPrestadora);
      
      
      }catch (Exception $e){
//                      echo($e);
             
         }
    }
public function Select(){
          
        try{
          
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
          
      $sql = "select * from tbl_sobre_empresa order by idSobreEmpresa desc";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listSobre[] = new Sobre();
// historia        
//missao
//visao
//valores
//slogan

        $listSobre[$cont]->historia=$rs['historia'];
        $listSobre[$cont]->missao=$rs['missao'];
        $listSobre[$cont]->visao=$rs['visao'];
        $listSobre[$cont]->nomeFantasia=$rs['nomeFantasia'];
        $listSobre[$cont]->valores=$rs['valores'];
        $listSobre[$cont]->slogan=$rs['slogan'];


        $cont+=1;
      }

      // echo ($sql);
      $conex->Desconectar();

     

        $conex->Desconectar();
      }
          catch (Exception $e) {
//                      echo($e);

                  }
      }
     public function SelectAtivo(){
          
        try{
          
        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();
          
      $sql = "select * from tbl_sobre_empresa where Ativo= Ativo order by idSobreEmpresa desc;";
//       echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listSobre = new sobre();
// historia        
//missao
//visao
//valores
//slogan

        $listSobre->historia=$rs['historia'];
        $listSobre->missao=$rs['missao'];
        $listSobre->visao=$rs['visao'];
        $listSobre->valores=$rs['valores'];
        $listSobre->slogan=$rs['slogan'];


        $cont+=1;
      }
     
      // echo ($sql);
            
      $conex->Desconectar();
      
      if(isset($listSobre)){
          return $listSobre;
      }

     

        $conex->Desconectar();
      }
          catch (Exception $e) {
//                      echo($e);

                  }
      }
}
?>