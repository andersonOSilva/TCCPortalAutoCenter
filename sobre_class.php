<?php

 class sobre{
     
     public function Insert{
      
         
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

public function Update{
      
         
         try {
      // insere no banco de dados a prestadora
                $conex = new Mysql_db();
                $PDO_conex = $conex->Conectar(); 
          
             
             $sqlsobre= "UPDATE `db_portal`.`tbl_sobre_empresa` SET
                `razaoSocial`='".$dados_sobre->historia."',
          ('".$dados_sobre->missao."',
          ('".$dados_sobre->visao."',
          ('".$dados_sobre->valores."',
          ('".$dados_sobre->slogan."');";
             
             
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

        $listSobre[$cont]->id=$rs['historia'];
        $listSobre[$cont]->id=$rs['missao'];
        $listSobre[$cont]->razaoSocial=$rs['visao'];
        $listSobre[$cont]->nomeFantasia=$rs['nomeFantasia'];
        $listSobre[$cont]->fotoPrestadora=$rs['valores'];
        $listSobre[$cont]->descricao=$rs['slogan'];


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
}
?>