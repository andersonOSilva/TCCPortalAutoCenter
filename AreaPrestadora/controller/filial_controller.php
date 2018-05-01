<?php
  class controller_filial{

    public function inserir(){
       $filial = new filial_servico();
       echo "string";
      if (isset($_POST['ativo'])){
          $ativo = $_POST['ativo'];
          $idFilial = $_GET['id'];
          $filial->idServico=$ativo;
          $filial->idFilial=$idFilial;
          $filial::servicoFilial($filial);

        //  var_dump($filial);
        }
    }
  }
 ?>
