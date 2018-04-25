<?php
class perfilPrestadora{
    
    public $nomefantasia;
    public $fotoPrestadora;
    public $descricao;
    public $telefone;
    public $logradouro;
    public $numero;
    public $referencia;
    public $cep;
    public $cidade;
    public $estado;
    public $bairro;
    public  function __construct(){
      require_once('bd_class.php');
    }
    public function select{
        try{ 
     $sql = "SELECT * FROM db_portal.viewperfilprestadora order by idPrestadora desc;";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      
      $cont=0;
      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listPrestadoraEndereco = new Prestadora();
          
          


        $listPrestadoraEndereco->idEnderecoPrestadora=$rs['idEnderecoPrestadora'];
        $listPrestadoraEndereco->logradouro=$rs['logradouro'];
        $listPrestadoraEndereco->numero=$rs['numero'];
        $listPrestadoraEndereco->bairro=$rs['bairro'];
        $listPrestadoraEndereco->referencia=$rs['referencia'];
        $listPrestadoraEndereco->cep=$rs['cep'];
        $listPrestadoraEndereco->idCidade=$rs['idCidade'];

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