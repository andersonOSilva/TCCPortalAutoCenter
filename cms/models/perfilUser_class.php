<?php
  class perfilUser{
    public $idUsuario;
    public $nome;
    public $usuario;
    // public $fotoUser;
    // public $fotoCar1;
    // public $fotoCar2;
    // public $fotoCar3;
    // public $fotoCar4;
    // public $fotoCar5;
    // public $fotoCar6;
    // public $descricao;


    function __construct(){
      require_once('bd_class.php');
    }
    // select (selecionar o perfil e trazer as informações do usuario)
    public function selectPerfilUser(){
      $sql="select * from tbl_usuario order by idUsuario desc;";

      $conex = new Mysql_db();
      $PDO_conex = $conex->Conectar();
      $select = $PDO_conex->query($sql);
      $cont =0;

      while ($rs=$select->fetch(PDO::FETCH_ASSOC)) {
          $list_Perfil[] = new perfilUser;

        $list_Perfil[$cont]->idUsuario=$rs['idUsuario'];
        $list_Perfil[$cont]->nome=$rs['nome'];
        $list_Perfil[$cont]->usuario=$rs['usuario'];
        // $list_Perfil[$cont]->fotouser=$rs['foto'];
        // $list_Perfil[$cont]->fotoCar1=$rs['fotoCar1'];
        // $list_Perfil[$cont]->fotoCar2=$rs['fotoCar2'];
        // $list_Perfil[$cont]->fotoCar3=$rs['fotoCar3'];
        // $list_Perfil[$cont]->fotoCar4=$rs['fotoCar4'];
        // $list_Perfil[$cont]->fotoCar5=$rs['fotoCar5'];
        // $list_Perfil[$cont]->fotoCar5=$rs['fotoCar6'];
        // $list_Perfil[$cont]->descricao=$rs['descricao'];

        $cont+=1;

    }

    if (isset (  $list_Perfil)) {
      return $list_Perfil;
  }
}
}

 ?>
