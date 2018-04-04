<?php

  class Prestadora{
    public $nome;
    public $razaoSocial;
    public $nomefantasia;
    public $fotoPrestadora;
    public $descricao;
    public $telefone;
    public $cnpj;
    public $idEnderecoPrestadora;
      

    public  function __construct(){
      require_once('bd_class.php');
    }

    public function Insert($dados_endereco_prestadora){
      var_dump($dados_endereco_prestadora);
        $etapa=0;
     switch(etapa){
         case 0:
              $sqlPrestadora = "insert into tbl_Prestadora (razaoSocial,nomefantasia,fotoPrestadora,descricao,telefone,cnpj,idEnderecoPrestadora,login,senha)
              values('".$dados_prestadora->razaoSocial."',
                    '".$dados_prestadora->nomefantasia."',
                    '".$dados_prestadora->fotoPrestadora."',
                    '".$dados_prestadora->descricao."',
                    '".$dados_prestadora->telefone."',
                    '".$dados_prestadora->idEnderecoPrestadora."',
                    '".$dados_prestadora->login."',
                    '".$dados_prestadora->senha."',
                    '".$dados_prestadora->cnpj."')";
//             SELECT * FROM tbl_prestadora where login= "teste" and senha=123;
                
             
             $sqlPrestadoraSelect="Select * from tbl_prestadora where login='".$dados_prestadora->login."'and senha='".$dados_prestadora->$senha."';"
                 echo($sqlPrestadoraSelect);
//             $conex = new Mysql_db();
//
//            $PDO_conex = $conex->Conectar();
//
//            $select = $PDO_conex->query($sqlPrestadoraSelect);
//
//            $cont=0;
//
//            while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
//                $iddoregistro = new Prestadora();
//
//                $iddoregistro[$cont]->id = $rs['idPrestadora'];
//                $cont+=1;
//
//      }

      $conex->Desconectar();
             
            
             break;
         case 1:
             
              
              $sqlEndereco = "insert into tbl_endereco_prestadora (rua,numero,bairro,referencia,cep,idcidade)
              values('".$dados_prestadora->rua."',
                    '".$dados_prestadora->numero."',
                    '".$dados_prestadora->bairro."',
                    '".$dados_prestadora->referencia."',
                    '".$dados_prestadora->cep."',
                    '".$dados_prestadora->cidade."')";
             break;
     }
       
        

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();



      if ($PDO_conex->query($sql)) {
        header('location:cadprestadora2.php');
          $etapa=1;
          
      }else{
        echo "erro";
      }

      $conex->Desconectar();
    }

    

  }

 ?>
