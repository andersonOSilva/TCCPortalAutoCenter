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
    
  public function __construct(){
    require_once('../models/bd_class.php');
  }
    
    public function select(){
        try{ 
     $sql = "SELECT * FROM db_portal.viewperfilprestadora order by idPrestadora desc;";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      
      $cont=0;
      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listPrestadoraEndereco = new Prestadora();
          
//         nomefantasia
//        fotoPrestadora
//        descricao
//        telefone
//        logradouro
//        numero
//        referencia
//        cepcep
//        cidade
//        estado
//        bairro


          


        $listPrestadora->nomefantasia=$rs['nomefantasia'];
        $listPrestadora->fotoPrestadora=$rs['fotoPrestadora'];
        $listPrestadora->descricao=$rs['descricao'];
        $listPrestadora->telefone=$rs['telefone'];
        $listPrestadora->logradouro=$rs['logradouro'];
        $listPrestadora->numero=$rs['numero'];
        $listPrestadora->referencia=$rs['referencia'];
        $listPrestadora->cep=$rs['cep'];
        $listPrestadora->cidade=$rs['cidade'];
        $listPrestadora->estado=$rs['estado'];
        $listPrestadora->bairro=$rs['bairro'];

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