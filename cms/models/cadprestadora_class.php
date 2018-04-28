<?php

  class Prestadora{

    public $razaoSocial;
    public $nomefantasia;
    public $fotoPrestadora;
    public $login;
    public $descricao;
    public $telefone;
    public $cnpj;
    public $idEnderecoPrestadora;
    public $logradouro;
    public $numero;
    public $referencia;
    public $cep;
    public $idcidade;
    public $sucesso;
    public $senha;

    public $IDdaPrestadora;
    public $status;



    public  function __construct(){
      require_once('bd_class.php');
    }

    public function Insert($dados_prestadora){
      //var_dump($dados_prestadora);



                try {
      // insere no banco de dados a prestadora
                $conex = new Mysql_db();
                $PDO_conex = $conex->Conectar();

              $sqlPrestadora = "insert into tbl_prestadora (razaoSocial,nomefantasia,fotoPrestadora,telefone,descricao,cnpj,login,senha)
              values('".$dados_prestadora->razaoSocial."',
                    '".$dados_prestadora->nomefantasia."',
                    '".$dados_prestadora->fotoPrestadora."',

                    '".$dados_prestadora->telefone."',
                    '".$dados_prestadora->descricao."',
                    '".$dados_prestadora->cnpj."',

                    '".$dados_prestadora->login."',
                    '".$dados_prestadora->senha."')";
//                    echo($sqlPrestadora);

                    $PDO_conex->query($sqlPrestadora);

                    $sucesso=true;


                      // traz o id da Prestadora para que a gente consiga inserir o endereco


                    if ($sucesso==true) {
                      $sqlselectPrestadora = "select * FROM db_portal.tbl_prestadora where
                       login ='".$dados_prestadora->login."'
                      And  senha=".$dados_prestadora->senha.";";

//                      echo($sqlselectPrestadora);

                      $select=$PDO_conex->query($sqlselectPrestadora);

                      if($rs=$select->fetch(PDO::FETCH_ASSOC)){
//                          echo('amigo estou aqui');
                            $PrestadoraID = new Prestadora();
                          $PrestadoraID->idPrestadora = $rs['idPrestadora'];

                      }
//                        $cont=0
//                        while($rs=$sqlselectPrestadora->fetch(PDO::FETCH_ASSOC)){
//                            $PrestadoraID->$idPrestadora = $rs['idPrestadora'];
//                            $cont+=1;
//                        }

                       $IDdaPrestadora=$PrestadoraID->idPrestadora = $rs['idPrestadora'];


//                                                  echo('amigo estou aqui');
//                        header('location:cadPrestadora/cadastroPrestadora.php?pag=Endereco');
                        require_once 'cadPrestadora/cadastroEndereco.php';
//                        echo($IDdaPrestadora);


                    }

                    return $IDdaPrestadora;
                     $conex->Desconectar();




                  } catch (Exception $e) {
//                      echo($e);

                  }


// _______________________________________________________________________________________________________________________________________________
               // SELECT * FROM db_portal.tbl_prestadora where login = "teste" and senha="123";


// seleciona o endereco pra que seja possivel associar o endereco a prestadora



//
/*
      if ($PDO_conex->query($sqlPrestadora)) {

          required_once("cadprestadora/cadastroEndereco.php")

      }else{
        echo "erro";
      }

      $conex->Desconectar();
    }*/



  }
  public function Update($dados_prestadora){



      try{

           $conex = new Mysql_db();
            $PDO_conex = $conex->Conectar();
//          (razaoSocial,nomefantasia,fotoPrestadora,telefone,descricao,cnpj,login,senha)
          $sqlPrestadoraUpdate="UPDATE `db_portal`.`tbl_prestadora` SET
                `razaoSocial`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `nomefantasia`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `fotoPrestadora`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `telefone`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `cnpj`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `login`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                `senha`='".$PrestadoraEnderecoID->idPrestadoraEndereco."',
                WHERE `idPrestadora`='".$PrestadoraID->idPrestadora."';";
                $PDO_conex->query($sqlPrestadoraUpdate);

          $conex->Desconectar();
      }catch (Exception $e) {
//                      echo($e);

                  }

      }

      public function Select(){

        try{

        $conex = new Mysql_db();
        $PDO_conex = $conex->Conectar();

      $sql = "select * from tbl_prestadora order by idPrestadora desc";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $listPrestadora[] = new Prestadora();

        $listPrestadora[$cont]->id=$rs['idPrestadora'];
        $listPrestadora[$cont]->razaoSocial=$rs['razaoSocial'];
        $listPrestadora[$cont]->nomeFantasia=$rs['nomeFantasia'];
        $listPrestadora[$cont]->fotoPrestadora=$rs['fotoPrestadora'];
        $listPrestadora[$cont]->descricao=$rs['descricao'];
        $listPrestadora[$cont]->telefone=$rs['telefone'];
        $listPrestadora[$cont]->cnpj=$rs['cnpj'];
        $listPrestadora[$cont]->idEnderecoPrestadora=$rs['idEndereco'];
        $listPrestadora[$cont]->login=$rs['login'];
        $listPrestadora[$cont]->senha=$rs['senha'];
        $listPrestadora[$cont]->status=$rs['status'];


        $cont+=1;
      }

      // echo ($sql);
      $conex->Desconectar();

      if (isset($listPrestadora)) {
          return $listPrestadora;

          //var_dump($listPrestadora) ;
      }

        $conex->Desconectar();
      }
          catch (Exception $e) {
//                      echo($e);

                  }
      }


        // LOGIN PRESTADORA

        public function LoginPrestadora($login_Prestadora){
          session_start();

          // chamando a procedure
          addslashes($sql="CALL loginPrestadora('$login_Prestadora->cnpj','$login_Prestadora->senha',@_idPrestadora);");

            //echo $sql;

          // conexao com o banco e execuçao
          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $PDO_conex->query($sql);

          // retorno
          addslashes($sql="select @_idPrestadora as idPrestadora;");
          $select = $PDO_conex->query($sql);
          $idPrestadora = 0;

          // pegando id do retorno
          if($rs=$select->fetch(PDO::FETCH_ASSOC)){

            $idPrestadora = $rs['idPrestadora'];
            echo $idPrestadora;

            //echo "string";

          }





          if ($idPrestadora > 0) {

            echo '1';


            $_SESSION['idPrestadora'] = $idPrestadora;

          }else {

            echo '0';
          }

          $conex->Desconectar();


        }

        public function selectById(){
          $sql='select * from tbl_prestadora where idPrestadora='.$_SESSION['idPrestadora'];

          //echo $sql;

          $conex = new Mysql_db();
          $PDO_conex = $conex->Conectar();
          $select = $PDO_conex->query($sql);


          if($rs=$select->fetch(PDO::FETCH_ASSOC)){
            $listPrestadora = new Prestadora();

            $listPrestadora->idPrestadora=$rs['idPrestadora'];
            $listPrestadora->razaoSocial=$rs['razaoSocial'];
            $listPrestadora->nomeFantasia=$rs['nomeFantasia'];
            $listPrestadora->fotoPrestadora=$rs['fotoPrestadora'];
            $listPrestadora->descricao=$rs['descricao'];
            $listPrestadora->telefone=$rs['telefone'];
            $listPrestadora->cnpj=$rs['cnpj'];
            $listPrestadora->idEnderecoPrestadora=$rs['idEndereco'];
            $listPrestadora->login=$rs['login'];
            $listPrestadora->senha=$rs['senha'];
            $listPrestadora->status=$rs['status'];




          }else{
            echo "nada achado";
          }

          $conex->Desconectar();

          if (isset($listPrestadora)) {
              return $listPrestadora;
          }

        }







}
 ?>
