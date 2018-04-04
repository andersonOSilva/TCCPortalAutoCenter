<?php

  class Plano{
    public $nome;
    public $idPlano;
    public $preco;
    public $descricao;
    public $foto;

    public  function __construct(){
      require_once('bd_class.php');
    }


    public function Insert($plano_dados){


      $sql= "insert into tbl_plano (nome,preco,descricao,imagem)
              values('".$plano_dados->nome."',
                      '".$plano_dados->preco."',
                      '".$plano_dados->descricao."',
                      '".$plano_dados->foto."')";

                    //  echo $sql;


                      $conex = new Mysql_db();

                      $PDO_conex = $conex->Conectar();



                      if ($PDO_conex->query($sql)) {
                        echo "<script>location.reload();</script>";
                      }else{
                        echo "erro";
                      }

                      $conex->Desconectar();

    }

    // Select
    public function Select(){
      $sql = "select * from tbl_plano order by idPlano desc";
      // echo $sql;

      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      $cont=0;

      while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
        $listPlano[] = new Plano();

        $listPlano[$cont]->id = $rs['idPlano'];
        $listPlano[$cont]->nome = $rs['nome'];
        $listPlano[$cont]->preco = $rs['preco'];
        $listPlano[$cont]->descricao = $rs['descricao'];
        $listPlano[$cont]->foto = $rs['imagem'];

        $cont+=1;

      }

      $conex->Desconectar();

      if (isset($listPlano)) {
          return $listPlano;
      }

  }


  //  SELECT POR ID

  public function selectById($plano_dados){
      $sql="select * from tbl_plano where idPlano=".$plano_dados->id;
      // echo $sql;
      $conex = new Mysql_db();

      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);



      if($rs=$select->fetch(PDO::FETCH_ASSOC)){
        $PlanoAchado = new Plano();

        $PlanoAchado->id = $rs['idPlano'];
        $PlanoAchado->nome = $rs['nome'];
        $PlanoAchado->preco = $rs['preco'];
        $PlanoAchado->descricao = $rs['descricao'];
        $PlanoAchado->imagem = $rs['imagem'];






      }else{
        echo "nada achado";
      }
      $conex->Desconectar();

      if (isset($PlanoAchado)) {
          return $PlanoAchado;
      }
  }

  public function Update($plano_dados){

    if ($plano_dados->foto == "nada") {
      $sql = "UPDATE tbl_plano SET
              nome='".$plano_dados->nome."',
              preco='".$plano_dados->preco."',
              descricao='".$plano_dados->descricao."'
              WHERE idPlano=".$plano_dados->id;
    }else {
      $sql = "UPDATE tbl_plano SET
              nome='".$plano_dados->nome."',
              preco='".$plano_dados->preco."',
              descricao='".$plano_dados->descricao."',
              imagem='".$plano_dados->foto."'
              WHERE idPlano=".$plano_dados->id;
    }


            // echo $sql;

            $conex = new Mysql_db();

            $PDO_conex = $conex->Conectar();



            if ($PDO_conex->query($sql)) {
              echo("<script>location.reload();</script>");
            }else{
              echo "erro";
            }

            $conex->Desconectar();
  }

  public function Delete($plano_dados){
    $sql="Delete from tbl_plano where idPlano=".$plano_dados->id;

    $conex = new Mysql_db();

    $PDO_conex = $conex->Conectar();



    if ($PDO_conex->query($sql)) {

        require_once('views/planos/conteudo_planos.php');

        // echo "
        // <script src='js/jquery7.min.js'></script>
        // <script  src='js/jcarousellite.js'></script>
        // <script  src='js/carrossel.js'></script>
        //     ";

    }else{
      echo "erro ao deletar";
    }

    $conex->Desconectar();

  }

}


 ?>
