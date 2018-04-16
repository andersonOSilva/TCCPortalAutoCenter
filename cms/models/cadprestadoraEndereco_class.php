<?php
class PrestadoraEndereco{


    public $logradouro;
    public $numero;
    public $referencia;
    public $cep;
    public $idcidade;
    public $sucesso;
    public $IDdaPrestadora;
    public $idCidade;
    public $bairro;
    
       


    public  function __construct(){
      require_once('bd_class.php');
    }
    public function Insert($dados_prestadora){
        
        try{
             $conex = new Mysql_db();
                $PDO_conex = $conex->Conectar();
        $sqlPrestadoraEndereco="insert into tbl_endereco_prestadora (logradouro,numero,bairro,referencia,cep,idcidade)
                values('".$dados_prestadora->logradouro."',
                      '".$dados_prestadora->numero."',
                      '".$dados_prestadora->bairro."',

                      '".$dados_prestadora->referencia."',
                      '".$dados_prestadora->cep."',
                      '".$dados_prestadora->idcidade."');";
//            echo($sqlPrestadoraEndereco);

              $PDO_conex->query($sqlPrestadoraEndereco);
        }catch (Exception $e) {
                     // echo($e);

                  }
        $conex->Desconectar();
        require_once 'cadprestadora/cadastroPrestadoraEtapa1.php';   
    }
    

   function Update($dados_prestadora){
      
      
      try{
      $sqlPrestadoraDelete="UPDATE `db_portal`.`tbl_prestadora` SET
                `razaoSocial`='".$PrestadoraEnderecoID->idPrestadoraEndereco.
                "' WHERE `idPrestadora`='".$PrestadoraID->idPrestadora."';";
                
      
      
      $PDO_conex->query($sqlPrestadoraUpdate);
                }catch (Exception $e) {
//                      echo($e);

                  }
      
      
      
                
      }


    function Delete($dados_prestadora){
       
//       DELETE FROM `db_portal`.`tbl_prestadora` WHERE `idPrestadora`='53';
       try{
      $sqlPrestadoraDelete="DELETE FROM `db_portal`.`tbl_endereco_prestadora` WHERE `idEnderecoPrestadora`='".$PrestadoraID->idPrestadora."';";
               
        $PDO_conex->query($sqlPrestadoraDelete);
       
       }catch (Exception $e) {
//                      echo($e);

                  }
      
      
     
      
      
      
      
      
                
      }
  function Select(){
     try{ 
     $sql = "select * from tbl_endereco_prestadora order by idEnderecoPrestadora desc";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listPrestadoraEndereco[] = new Prestadora();
          
          


        $listPrestadoraEndereco[$cont]->idEnderecoPrestadora=$rs['idEnderecoPrestadora'];
        $listPrestadoraEndereco[$cont]->logradouro=$rs['logradouro'];
        $listPrestadoraEndereco[$cont]->numero=$rs['numero'];
        $listPrestadoraEndereco[$cont]->bairro=$rs['bairro'];
        $listPrestadoraEndereco[$cont]->referencia=$rs['referencia'];
        $listPrestadoraEndereco[$cont]->cep=$rs['cep'];
        $listPrestadoraEndereco[$cont]->idCidade=$rs['idCidade'];

        $cont+=1;
      }

      // echo ($sql);
      $conex->Desconectar();

      if (isset($listPrestadora)) {
          return $listPrestadora;

          //var_dump($listPrestadora) ;
      }
     }catch (Exception $e) {
//                      echo($e);

                  }

    }
}
?>